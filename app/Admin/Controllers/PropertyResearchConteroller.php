<?php

namespace App\Admin\Controllers;

use App\Models\Pdf;
use App\Models\File;
use App\Models\User;
use App\Models\Borey;
use App\Models\Branch;
use App\Models\Region;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Commune;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use App\Models\UserAdmin;
use App\Models\PropertyType;
use App\Models\InformationType;
use Encore\Admin\Form\Field\Id;
use App\Models\PropertyResearch;
use Encore\Admin\Layout\Content;
use Encore\Admin\Form\Field\Button;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Encore\Admin\Grid\Displayers\Actions;
use Encore\Admin\Controllers\AdminController;

Use Encore\Admin\Grid\Displayers\ContextMenuActions;

class PropertyResearchConteroller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */

    //  Title to view
    protected $title = 'Property Research';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    public function index(Content $content){
        $content->header($this->title);
        $content->body($this->dashboard());
        $content->body($this->grid());
        return $content;
}

    protected function dashboard(){

    }

    protected function grid()
    {

        //filter
        $filterRegionID = isset($_REQUEST['region_id'])? $_REQUEST['region_id'] : [];
        $filterProvinceId = isset($_REQUEST['province_id'])? $_REQUEST['province_id'] : [];
        $filterDistrictId = isset($_REQUEST['district_id'])? $_REQUEST['district_id'] : [];

        //print_r($filterProvinceId);

        $grid = new Grid(new PropertyResearch);

		$grid->model()->orderBy('id','desc');
        $grid->column('id', __('No.'))->asc()->sortable();
        $grid->column('property_reference', __('Property Reference'))->sortable();
        $grid->column('information_type',__('Information Type'))->sortable()->Display(function($id){
            $informationtype = InformationType::where('id',$id)->first();
            return $informationtype->information_type_name;
        });

        $grid->column('information_date',__('Information Date'))->filter('range', 'date');
        //$grid->column('requested_date',__('Requested Date'))->sortable();
        $grid->column('contact_no',__('Contact No'))->sortable();
        $grid->column('location_type',__('Location Type'))->sortable();
        $grid->column('type_of_access_road',__('Type of Access Road'))->sortable();
        $grid->column('access_road_name',__('Access Road Name'))->sortable()->limit(15);
        $grid->column('property_type',__('Property Type'))->sortable()->Display(function($id){
            $propertytype = PropertyType::where('id',$id)->first();
            return $propertytype->property_type_name ?? '';
        });
        $grid->column('borey',__('Borey'))->sortable()->display(function($id){
            $borey = Borey::where('id',$id)->first();
            return $borey->borey_name ?? '';
        });
        $grid->column('no_of_floor',__('No. of floor'))->sortable();
        $grid->column('land_title_type',__('Land Titil Type'))->sortable();
        $grid->column('land_size',__('Land Size'))->sortable();
        $grid->column('land_value_per_sqm',__('Land Value per Sqm ($)'))->sortable();
        $grid->column('building_size',__('Building Size ($)'))->sortable();
        $grid->column('building_value_per_sqm',__('Building Value per Sqm ($)'))->sortable();
        $grid->column('property_market_value',__('Property Market Value ($)'))->sortable();
        $grid->column('province_id',__('Province'))->filter($this->convertToArray(Province::all(['id', 'province_name'])))->Display(function($province_id){
            $province = Province::where('id', $province_id)->first();
             return $province->province_name ?? '';
         });
         $grid->column('district_id',__('District/Khan'))->filter($this->convertToArrayDistrict(District::whereIn('province_id', $filterProvinceId)->get(['id', 'district_name'])))->Display(function($district_id){ //Add filter when click ex:province->distict..
             $district = District::where('id', $district_id)->first();
             return $district->district_name ?? '';
         });
         $grid->column('commune_id',__('Commune/Sangkat'))->filter($this->convertToArrayCommune(Commune::whereIn('district_id', $filterDistrictId)->get(['id','commune_name'])))->Display(function($comune_id){
             $commune = Commune::where('id', $comune_id)->first();
             return $commune->commune_name ?? '';
         });
         $grid->column('village_id',__('Village'))->sortable()->Display(function($village_id){
             $village = Village::where('id', $village_id)->first();
             return $village->village_name ?? '';
         });
        $grid->column('latitude',__('Latitude'))->sortable();
        $grid->column('longtitude',__('Longtitude'))->sortable();
        $grid->column('remark',__('Remark'))->sortable()->limit(15);
        $grid->column('user_id',__('Created By'))->sortable()->display(function($id){
            $userName = UserAdmin::where('id', $id)->first();
            return $userName->name ?? null;
        });
        $grid->column('created_at',__('Created Date'))->filter('range', 'date')->display(function(){
            if ($this->created_at) {
                return date('d-M-Y', strtotime($this->created_at));
            }
        });

        // Show in Trash only
        if(request()->_scope_ == "trashed"){
            $grid->column('deleted_by',__('Deleted By'))->sortable()->display(function($id){
                $userName = UserAdmin::where('id', $id)->first();
                return $userName->name ?? null;
            });
            $grid->column('deleted_at',__('Deleted Date'))->filter('range', 'date')->display(function(){
                if ($this->deleted_at) {
                    return date('d-M-Y', strtotime($this->deleted_at));
                }
            });
        }

        $grid->column('is_verified',__('Verified'))->display(function($is_verified){
            if($is_verified == null) {
                if(User::isVerifierRole()){ // user login
                    $id = $this->id;
                    return '<a href="'. env('APP_URL') . '/public/api/verify_research/' . $id . '/1" class="btn btn-sm btn-success">
                                <i class="fa fa-check"></i>
                                <span>&nbsp;&nbsp;Verify</span>
                            </a>
                            <a href="'. env('APP_URL') . '/public/api/verify_research/' . $id . '/2" class="btn btn-sm btn-danger">
                                <i class="fa fa-times"></i>
                                <span>&nbsp;&nbsp;Reject</span>
                            </a>';
                } else {
                    return '<p style="color: #172191;border: 1px solid #172191;padding: 12px;text-align:center;margin-bottom: 0px;border-radius: 3px;height: 45px;">Processing</p>';
                }
            }
            else if($is_verified == 1){
                return '<p style="color: #00a65a;border: 1px solid #00a65a;padding: 12px;text-align:center;margin-bottom: 0px;border-radius: 3px;height: 45px;">Verified</p>';
            }
            else{
                return '<p style="color: #dd4b39;border: 1px solid #dd4b39;padding: 12px;text-align:center;margin-bottom: 0px;border-radius: 3px;height: 45px;">Rejected</p>';
            }
        });

        $grid->column('is_approved',__('Approved'))->display(function($is_approved){
            if($this->is_verified == 1){
                if($is_approved == null) {
                    if(User::isApproverRole()){
                        $id = $this->id;
                        return '<a href="'. env('APP_URL') . '/public/api/approve_research/' . $id . '/1" class="btn btn-sm btn-success">
                                    <i class="fa fa-check"></i>
                                    <span>&nbsp;&nbsp;Approv</span>
                                </a>
                                <a href="'. env('APP_URL') . '/public/api/approve_research/' . $id . '/2" class="btn btn-sm btn-danger">
                                    <i class="fa fa-times"></i>
                                    <span>&nbsp;&nbsp;Reject</span>
                                </a>';
                    }
                    else {
                        return '<p style="color: #172191;border: 1px solid #172191;padding: 12px;text-align:center;margin-bottom: 0px;border-radius: 3px;height: 45px;">Processing</p>';
                    }
                }
                else if($is_approved ==1){
                    return '<p style="color: #00a65a;border: 1px solid #00a65a;padding: 12px;text-align:center;margin-bottom: 0px;border-radius: 3px;height: 45px;">Approved</p>';
                }
                else{
                    return '<p style="color: #dd4b39;border: 1px solid #dd4b39;padding: 12px;text-align:center;margin-bottom: 0px;border-radius: 3px;height: 45px;">Rejected</p>';
                }
            } elseif ($this->is_verified == 2) {
                return '<p style="color: #dd4b39;border: 1px solid #dd4b39;padding: 12px;text-align:center;margin-bottom: 0px;border-radius: 3px;height: 45px;">Rejected</p>';
            }
        });

        $grid->quickSearch(function ($model, $query) {
            $model->where('id', $query);
            $model->orWhere('contact_no', 'like', "%{$query}%");
            $model->orWhere('property_reference', 'like', "%{$query}%");
            // IF YOU NEED MORE SEARCH FIELDS BELOW THIS COMMAND
            $model->orWhereHas('user', function($q) use($query) {
                $q->where('name', 'like', "%{$query}%")
                ->orWhere('id', 'like', "%{$query}%");
            });
        });

        $grid->actions(function (Actions $actions) {
            if (!User::isAdminRole()) {
                // USER LOGIN
                $userId = Auth::user()->id;

                // PROPERTY WAS VERIFIED OR APPROVED OR REJECTED USER CAN'T EDIT
                if ($actions->row->IsPropertyVerifiedOrApproved || $actions->row->IsPropertyRejected) {
                    $actions->disableEdit();
                }
                // USER LOGIN NOT PROPERTY CREATOR OR USER LOGIN IS PROPERTY CREATOR BUT PROPERTY NOT REJECTED USER CAN'T DELETE
                if ($actions->row->user_id != $userId || $actions->row->user_id == $userId && !$actions->row->IsPropertyRejected) {
                    $actions->disableDelete();
                }
            }
        });

        // DISABLE BUTTON CREATE NEW, EDIT AND DELETE FOR USER HAS ROLE BM
        if (User::isBmRole()) {
            $grid->disableCreateButton();
            $grid->actions(function (Actions $actions) {
                $actions->disableEdit();
                $actions->disableDelete();
            });
        }

        // $grid->disableFilter();
        $grid->paginate(10);
        $grid->fixColumns(0, -4);
		$grid->filter(function($filter){
            $filter->scope('trashed', 'Trash Bin')->onlyTrashed();
			$filter->disableIdFilter();
		});

        // Remove action from trash
        if(request()->_scope_ == "trashed"){
            $grid->disableActions();
            $grid->disableCreateButton();
         }

        return $grid;
    }

        // filter
        function convertToArray($data){

            $provinceArray = array();

            foreach($data as $item){
                //$provinceArray = array_merge($provinceArray, array($item->id => $item->province_name));
                $provinceArray[$item->id] = $item->province_name;
            }
            return $provinceArray;

        }

        function convertToArrayDistrict($data){

            $districtArray = array();

            foreach($data as $item){

                $districtArray[$item->id] = $item->district_name;
            }
            return $districtArray;

        }
        function convertToArrayCommune($data){

            $communeArray = array();

            foreach($data as $item){

                $communeArray[$item->id] = $item->commune_name;
            }
            return $communeArray;

        }

        function convertToArrayBranch($data){

            $branchArray = array();
            foreach($data as $item){

                $branchArray[$item->branch_code] = $item->branch_name;
            }
            return $branchArray;
       }

        function convertToArrayRegion($data){

            $RegionArray = array();

            foreach($data as $item){

                $RegionArray[$item->id] = $item->region_name;
            }
            return  $RegionArray;

        }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $propertyResearch = PropertyResearch::findOrFail($id);
        $show = new Show($propertyResearch);

        return view('admin.property-research.show', [
            'propertyResearch' =>  $propertyResearch
        ]);

        $show->field('property_reference',__('Property Reference'));
        $show->field('information_type',__('Information Type'))->as(function($id){
            $informationtype = InformationType::where('id', $id)->first();
            return  $informationtype->information_type_name;
        });
        $show->field('information_date',__('Information Date'));
        $show->field('contact_no',__('Contact No'));
        $show->field('location_type',__('Location Type'));
        $show->field('type_of_access_road',__('Type of Access Road'));
        $show->field('access_road_name',__('Access Road Name'));
        $show->field('property_type',__('Property Type'))->as(function($id){
            $propertytype = PropertyType::where('id', $id)->first();
            return  $propertytype->property_type_name;
        });
        $show->field('borey',__('Borey'))->as(function($id){
            $borey = Borey::where('id', $id)->first();
            return $borey->borey_name;
        });

        $show->field('no_of_floor',__('No. of floor'));
        $show->field('land_title_type',__('Land Titil'));
        $show->field('land_size',__('Land Size'));
        $show->field('land_value_per_sqm',__('Land Value per Sqm ($)'));
        $show->field('building_size',__('Building Size ($)'));
        $show->field('building_value_per_sqm',__('Building Value per Sqm ($)'));
        $show->field('property_market_value',__('Property Market Value ($)'));
        $show->field('province_id',__('Province'))->as(function($province_id){
            $province = Province::where('id', $province_id)->first();
            return $province->province_name;
        });
        $show->field('district_id',__('District/ Khan'))->as(function($district_id){
            $district = District::where('id', $district_id)->first();
            return $district->district_name;
        });
        $show->field('commune_id',__('Commune / Sangkat'))->as(function($comune_id){
            $commune = Commune::where('id', $comune_id)->first();
            return $commune->commune_name;
        });
        $show->field('village_id',__('Village'))->as(function($village_id){
            $village = Village::where('id', $village_id)->first();
            return $village->village_name   ;
        });
        $show->field('latitude',__('Latitude'));
        $show->field('longtitude',__('Longtitude'));
        $show->field('remark',__('Remark'));
        $show->field('user_id', __('Created By'))->as(function ($userId){
            $userName = UserAdmin::where('id', $userId)->first();
            return $userName->name ?? null;
        });

        if (!User::isAdminRole()) {
            $show->panel()->tools(function ($tools) use($propertyResearch) {
                // USER LOGIN
                $userId = Auth::user()->id;

                // PROPERTY WAS VERIFIED OR APPROVED OR REJECTED USER CAN'T EDIT
                if ($propertyResearch->IsPropertyVerifiedOrApproved || $propertyResearch->IsPropertyRejected) {
                    $tools->disableEdit();
                }
                // USER LOGIN NOT PROPERTY CREATOR OR USER LOGIN IS PROPERTY CREATOR BUT PROPERTY NOT REJECTED USER CAN'T DELETE
                if ($propertyResearch->user_id != $userId || $propertyResearch->user_id == $userId && !$propertyResearch->IsPropertyRejected) {
                    $tools->disableDelete();
                }
            });
        }

        // DISABLE BUTTON CREATE NEW, EDIT AND DELETE FOR USER HAS ROLE BM
        if (User::isBmRole()) {
            $show->panel()->tools(function ($tools) {
                $tools->disableEdit();
                $tools->disableDelete();
            });
        }

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PropertyResearch());
        $form->column(1/3, function ($form){
            $form->hidden('user_id')->value(Auth::user()->id);
            //zero loading
            $form->text('property_reference', __('Property Reference '))->disable()->value(function(){
                return null;
            })->placeholder('Property Reference');
            $form->select('information_type',__('Information Type'))->rules('required')->options(function(){
                return InformationType::all()->pluck('information_type_name','id');
            });
            $form->text('access_road_name', __('Access Road Name'))->rules('required');
            $form->text('no_of_floor', __('No. of Floor'))->rules('required')->attribute('maxlength', '4');
            $form->text('land_size', __('Land Size (sqm)'))->rules('required');
            $form->currency('building_value_per_sqm', __('Building Value per Sqm '))->rules('required')->attribute(['style' => 'width: 100%;']);
            $form->select('district_id', __('District / Khan'))->rules('required')->options(function(){
                return District::all()->pluck('district_name','id');})->load('commune_id', env('APP_URL') . '/public/api/commune');
            $form->mobile('contact_no', __('Contact No'))->rules('required')->options(['mask' => '099 999 9999'])->attribute(['style' => 'width: 100%;']);
            $form->text('remark', __('Remark'));

        });

        $form->column(1/3, function ($form){
            $form->html('<div style="height:52px"></div>');
            $form->select('location_type', __('Location Type'))->rules('required')->options(['Residential Area'=>'Residential Area', 'Commercial Area'=>'Commercial Area','Industrial Area'=>'Industrial Area','Agricultural Area'=>'Agricultural Area']);
            $form->select('property_type', __('Property Type'))->rules('required')->options(function(){
                return PropertyType::all()->pluck('property_type_name','id');

            });
            $form->select('land_title_type', __('Land Title Type'))->rules('required')->options(['Hard Title'=>'Hard Title', 'Soft Title'=>'Soft Title']);
            $form->currency('land_value_per_sqm', __('Land Value per Sqm '))->rules('required')->attribute(['style' => 'width: 100%;']);
            $form->currency('property_market_value', __('Property Market Value '))->rules('required')->attribute(['style' => 'width: 100%;']);
            $form->select('commune_id', __('Commune / Sangkat'))->rules('required')->options(function(){
                return Commune::all()->pluck('commune_name','id');})->load('village_id', env('APP_URL') . '/public/api/village');
            $form->text('latitude', ('Latitude'))->inputmask(['mask' => '99.999999'])->rules('required');


        });

        $form->column(1/3, function ($form){
            $form->html('<div style="height:52px"></div>');
            $form->select('type_of_access_road', __('Type of Access Road'))->rules('required')->options(['Boulevard'=>'Boulevard','National Road'=>'National Road', 'Paved Road'=>'Paved Road','Upaved Road'=>'Upaved Road','Alley Road'=>'Alley Road','No Road'=>'No Road']);
            $form->select('borey', __('Borey'))->rules('required')->options(function(){
                return Borey::all()->pluck('borey_name', 'id');
            });
             $form->date('information_date', __('Information Date'))->rules('required')->attribute(['style' => 'width: 100%;']);
            $form->currency('building_size', __('Building Size'))->rules('required')->attribute(['style' => 'width: 100%;']);
            $form->select('province_id', __('Province'))->rules('required')->options(function(){
                return Province::all()->pluck('province_name','id');})->load('district_id', env('APP_URL') . '/public/api/district');
            $form->select('village_id', __('Village'))->rules('required')->options(function(){
                return Village::all()->pluck('village_name','id');});
            $form->text('longtitude', ('Longtitude'))->inputmask(['mask' => '999.999999'])->rules('required');
            $form->html(view('admin.property.property_appraisal_script'));
        });

        $form->footer(function ($footer) {

            // disable reset btn
            $footer->disableReset();
            // disable `View` checkbox
            $footer->disableViewCheck();
            // disable `Continue editing` checkbox
            $footer->disableEditingCheck();
            // disable `Continue Creating` checkbox
            //$footer->disableCreatingCheck();
        });


        return $form;
    }
}
