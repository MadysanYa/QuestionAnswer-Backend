<?php

namespace App\Admin\Controllers;
use App\Admin\Actions\Post\Replicate;
use App\Models\Commune;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Auth;


class CommuneController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Communce Information Management';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Commune);
        $grid->column('id', __('ID'));
        $grid->column('commune_name', __('Commune Name'))->editable()->sortable();
		
        $grid->disableExport();
        $grid->disableFilter();
        $grid->quickSearch('emp_id' , 'employee_name','pickup_number', 'remark','ext');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Commune::findOrFail($id));
        // $show->field('id', __('Id'));
        // $show->field('name', __('Name'));
        // $show->field('username', __('Username'));
        // $show->field('password', __('Password'));
        // $show->field('remark', __('Remark'));
        // $show->field('updated_at', __('Updated at'));
        // $show->field('created_at', __('Created at'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
	 
    protected function form()
    {
        $form = new Form(new Commune());
        $form->text('commune_name', __('Commune Name'));
        
        $form->footer(function ($footer) {
            // disable reset btn
            $footer->disableReset();
            // disable `View` checkbox
            $footer->disableViewCheck();
            // disable `Continue editing` checkbox
            $footer->disableEditingCheck();
            // disable `Continue Creating` checkbox
            $footer->disableCreatingCheck();
        
        });


        return $form;
    }
}