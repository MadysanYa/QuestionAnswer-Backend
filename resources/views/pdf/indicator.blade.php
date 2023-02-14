<!DOCTYPE html>

<!-- <html lang="el"> -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Internal Indication Report</title>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
    <script src="../../resources/js/html2canvas.js"></script>
    <script src="../../resources/js/html2canvas.min.js"></script>
    <script src="../../resources/js/jspdf.js"></script>
    

    <style>
        /* Font Definitions */
        @font-face
        {
            font-family:Wingdings;
            panose-1:5 0 0 0 0 0 0 0 0 0;
        }
        @font-face
        {
            font-family:SimSun;
	        panose-1:2 1 6 0 3 1 1 1 1 1;
        }
        @font-face
	    {
            font-family:"Cambria Math";
	        panose-1:2 4 5 3 5 4 6 3 2 4;
        }
        @font-face
	    {
            font-family:Calibri;
	        panose-1:2 15 5 2 2 2 4 3 2 4;
        }
        @font-face
	    {
            font-family:DaunPenh;
	        panose-1:2 0 5 0 0 0 0 2 0 4;
        }
        @font-face
	    {
            font-family:"Segoe UI";
	        panose-1:2 11 5 2 4 2 4 2 2 3;
        }
        @font-face
	    {
            font-family:"OneShinhan Bold";
        }
        @font-face
        {   
            font-family:"OneShinhan Light";
        }
        @font-face
	    {
            font-family:"\@SimSun";
	        panose-1:2 1 6 0 3 1 1 1 1 1;
        }
        @font-face
	    {
            font-family:"\@OneShinhan Bold";
        }
        @font-face
	    {
            font-family:"\@OneShinhan Light";
        }

        /* Style Definitions */
        p.MsoNormal, li.MsoNormal, div.MsoNormal
        {
            margin-top:0in;
            margin-right:0in;
            margin-bottom:8.0pt;
            margin-left:0in;
            line-height:107%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;
        }
        p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
        {
            margin-top:0in;
            margin-right:0in;
            margin-bottom:8.0pt;
            margin-left:.5in;
            line-height:107%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;
        }
        p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
        {
            margin-top:0in;
            margin-right:0in;
            margin-bottom:0in;
            margin-left:.5in;
            line-height:107%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;
        }
        p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
        {
            margin-top:0in;
            margin-right:0in;
            margin-bottom:0in;
            margin-left:.5in;
            line-height:107%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;
        }
        p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
        {
            margin-top:0in;
            margin-right:0in;
            margin-bottom:8.0pt;
            margin-left:.5in;
            line-height:107%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;
        }
        .MsoChpDefault
	    {
            font-family:"Calibri",sans-serif;
        }
        .MsoPapDefault
	    {
            margin-bottom:8.0pt;
	        line-height:107%;
        }

        /* #map {
            height: 550px;
            width: 100%;
        } */

        /* Page Definitions */
        @page WordSection1
        {
            size:8.5in 11.0in;
            margin:28.35pt 49.6pt 42.55pt 45.1pt;
        }
        div.WordSection1
        {
            page:WordSection1;
        }

        /* List Definitions */
        ol{ margin-bottom:0in; }
        ul{ margin-bottom:0in; }
    </style>

</head>
<body style="height: 100%; width: 100%;">

<div class="WordSection1" style=" height: 850px;">
    <!-- width: 50%; margin-left: 25%; -->
    <!-- <span style='position:relative;z-index:251660288'>
            <img width=296 height=72 src="{{ storage_path('app/public/images/sbc_test1.png') }}">
    </span> -->

    <!-- <h1> testing </h1> -->

    <p class=MsoNormal align = center style='text-align:center'>
        <u>
            <span style='font-size:14.0pt;line-height:107%;font-family:"OneShinhan Bold",sans-serif'>INTERNAL INDICATION REPORT</span>
        </u>
    </p>

            <table align = center class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=690 style='width:527.25pt; border-collapse:collapse;border:none;'>
                <tr>
                    <td style="border:none; width:50pt;">
                        <p style='margin-top:0in; margin-right:0in; margin-bottom:0in; margin-left:0in; line-height:normal; font-size:15px; font-family:"Calibri",sans-serif;text-align:left;'>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                Reference No
                            </span>
                            <span style='margin-left: 27px; font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                :
                            </span>
                        </p>
                    </td>
                    <td style="border:none; padding-left: 25px; width:90pt; text-align:left;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                            <span style='font-size:11px;font-family:   "OneShinhan Light",sans-serif;'>
                                {{ $indicator->property_reference }}
                            </span>
                        </p>
                    </td>
                    <td style="border:none; width:55pt; padding-left: 20px;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:left;'>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                Branch Name
                            </span>
                            <span style='margin-left: 25.5px; font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                :
                            </span>
                        </p>
                    </td>
                    <td style="border:none; width:50pt; padding:0in 5.4pt 0in 5.4pt;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:left;'>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                {{ $indicator->branch_code }}
                            </span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="border:none; width:50pt;">
                        <p style='margin-top:0in; margin-right:0in; margin-bottom:0in; margin-left:0in; line-height:normal; font-size:15px; font-family:"Calibri",sans-serif;text-align:left;'>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                Requested Date
                            </span>
                            <span style='margin-left: 15px; font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                :
                            </span>
                        </p>
                    </td>
                    <td style="border:none; padding-left: 25px; width:50pt; text-align:left;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                            <span style='font-size:11px;font-family:   "OneShinhan Light",sans-serif;'>
                                {{ $indicator->requested_date }}
                            </span>
                        </p>
                    </td>
                    <td style="border:none; width:50pt; padding-left: 20px;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:left;'>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                Loan Officer
                            </span>
                            <span style='margin-left: 33px; font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                :
                            </span>
                        </p>
                    </td>
                    <td style="border:none; width:50pt; padding:0in 5.4pt 0in 5.4pt;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:left;'>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                {{ $indicator->rm_name }}
                            </span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="border:none; width:50pt;">
                        <p style='margin-top:0in; margin-right:0in; margin-bottom:0in; margin-left:0in; line-height:normal; font-size:15px; font-family:"Calibri",sans-serif;text-align:left;'>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                Report Date
                            </span>
                            <span style='margin-left: 35px; font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                :
                            </span>
                        </p>
                    </td>
                    <td style="border:none; padding-left: 25px; width:50pt;text-align:left;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                            <span style='font-size:11px;font-family:   "OneShinhan Light",sans-serif;'>
                                {{ $indicator->reported_date }}
                            </span>
                        </p>
                    </td>
                    <td style="border:none; width:50pt; padding-left: 20px;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:left;'>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                Telephone
                            </span>
                            <span style='margin-left: 41.5px; font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                :
                            </span>
                        </p>
                    </td>
                    <td style="border:none; width:50pt; padding:0in 5.4pt 0in 5.4pt;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:left;'>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                {{ $indicator->telephone }}
                            </span>
                        </p>
                    </td>
                </tr>
            </table>
            <br>

    <div align = center>
        <table  class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style='width:527.25pt;border-collapse:collapse;border:none'>
            <!-- Head 1 -->
            <tr style='height:13.35pt'>
                <td colspan=6 style='width:527.25pt; border:solid windowtext 1.0pt; background:#0070C0; padding:0in 5.4pt 0in 5.4pt; height:18.45pt' >
                    <p class=MsoNormal align=center style='margin-top:0in;margin-right:-5.75pt; margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'>
                        <span style='font-size:10.0pt;font-family:"OneShinhan Bold",sans-serif;color:white'>PROPERTY DETAILS</span>
                    </p>
                </td>
            </tr>
            <!-- Row 1 -->
            <tr style='height:13.35pt'>
                <td colspan=6 style='width:527.25pt; border:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;' >
                    <p class=MsoListParagraphCxSpFirst style='margin-left:0in'>
                        <span style='font-size:8.0pt;line-height:107%;font-family:"OneShinhan Light",sans-serif'>Address: {{ $indicator->property_address }}</span>
                    </p>
                </td>
            </tr>
            <!-- Row 2 -->
            <tr style='height:13.35pt'>
                <td valign=top style='width:100pt; border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>
                            Tittle No.
                        </span>
                        <span style='margin-top: 2px; float: right; font-size:8.0pt;font-family:"OneShinhan Light",sans-serif; text-align: right;'>
                            :
                        </span>
                    </p>
                </td>
                <td valign=top style='width:140pt; border:solid windowtext 1.0pt; border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->land_title_no }}</span>
                    </p>
                </td>
                <td valign=top style='width:100pt; border:solid windowtext 1.0pt; border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>
                            Customer Name
                        </span>
                        <span style='margin-top: 2px; float: right; font-size:8.0pt;font-family:"OneShinhan Light",sans-serif; text-align: right;'>
                            :
                        </span>
                    </p>
                </td>
                <td colspan=6 style='width:140pt; border:solid windowtext 1.0pt; border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpLast style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->customer_name }}</span>
                    </p>
                </td>
            </tr>
            <!-- Row 3 -->
            <tr style='height:13.35pt'>
                <td valign=top style='width:100pt;border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpFirst style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>
                            Property Type
                        </span>
                        <span style='margin-top: 2px; float: right; font-size:8.0pt;font-family:"OneShinhan Light",sans-serif; text-align: right;'>
                            :
                        </span>
                    </p>
                </td>
                <td valign=top style='width:100pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->property_type }}</span>
                    </p>
                </td>
                <td valign=top style='width:100pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>
                            Collateral Owner
                        </span>
                        <span style='margin-top: 2px; float: right; font-size:8.0pt;font-family:"OneShinhan Light",sans-serif; text-align: right;'>
                            :
                        </span>
                    </p>
                </td>
                <td colspan=6 style='width:180pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpLast style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->collateral_owner }}</span>
                    </p>
                </td>
            </tr>
            <!-- Row 4 -->
            <tr style='height:13.35pt'>
                <td valign=top style='width:100pt;border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpFirst style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>
                            Land Area
                        </span>
                        <span style='margin-top: 2px; float: right; font-size:8.0pt;font-family:"OneShinhan Light",sans-serif; text-align: right;'>
                            :
                        </span>
                    </p>
                </td>
                <td valign=top style='width:100pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->land_size }}</span>
                    </p>
                </td>
                <td valign=top style='width:100pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>
                            Building Status
                        </span>
                        <span style='margin-top: 2px; float: right; font-size:8.0pt;font-family:"OneShinhan Light",sans-serif; text-align: right;'>
                            :
                        </span>
                    </p>
                </td>
                <td colspan=6 style='width:180pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpLast style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->building_status }}</span>
                    </p>
                </td>
            </tr>
            <!-- Row 5 -->
            <tr style='height:13.35pt'>
                <td valign=top style='width:100pt;border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpFirst style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>
                            Estimate Build Up Area
                        </span>
                        <span style='margin-top: 2px; float: right; font-size:8.0pt;font-family:"OneShinhan Light",sans-serif; text-align: right;'>
                            :
                        </span>
                    </p>
                </td>
                <td valign=top style='width:100pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>
                            <!-- No Data -->
                        </span>
                    </p>
                </td>
                <td valign=top style='width:100pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>
                            Geo Code
                        </span>
                        <span style='margin-top: 2px; float: right; font-size:8.0pt;font-family:"OneShinhan Light",sans-serif; text-align: right;'>
                            :
                        </span>
                    </p>
                </td>
                <td colspan=6 style='width:180pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                    <p class=MsoListParagraphCxSpLast style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>
                            {{ $indicator->geo_code }}
                        </span>
                    </p>
                </td>
            </tr>
        </table>

        <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style='width:527.25pt;border-collapse:collapse;border:none'>
            <tr style='height:200pt'>
                <td position: absolute;>
                    <!-- <img src="{{ storage_path('app/public/images/cambodia.png') }}" style="height: 260px; width: 160pt;"> -->
                    <!-- <img src="$image = asset('upload/'.$indicator->front_photo);" style="height: 260px; width: 160pt;"> -->
                    <img src="{{asset('upload/'.$indicator->front_photo)}}" style="height: 260px; width: 160pt;">
                    <!-- $image = asset('upload/'.$propertyIndicator->front_photo); -->
                </td>
                <td position: absolute;>
                    <img src="{{ storage_path('app/public/images/cambodia.png') }}" style="height: 260px; width: 365pt;">
                </td>

                <!-- <td id="map_img"> -->

                    <!-- <img id="map_id" src="http://localhost/pms/property-management/resources/views/generate.blade.php" /> -->
                
                    <!-- <img id="map_img" alt="" style="display: none" /> -->
                    <!-- <img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(storage_path('app/public/images/cambodia.png')))}}" style="width:200px;"> -->

                <!-- style="height: 266px; width: 435px;"
                height: 261px; width: 435px; -->
                <!-- position: absolute; -->
                    <!-- <img src="{{ storage_path('app/public/images/cambodia.png') }}" style="height: 260px; width: 325pt;">-->
                    <!-- <div id="map_img" style="height: 266px; width: 435px;"></div> -->
                    <!-- <p id="map_img"></p> -->
                    <!-- <img id="map_img" style="height: 266px; width: 435px;"> -->
                <!-- </td> -->
            </tr>
        </table>

        <!-- PROPERTY ADJUSTMENT -->
        <table  class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=690 style='width:527.25pt; border-collapse:collapse;border:none'>
            <!-- Head 2 -->
            <tr style='height:13.35pt'>
                <td colspan=7 style='width:527.25pt; border:solid windowtext 1.0pt; background:#0070C0;padding:0in 5.4pt 0in 5.4pt;height:18.45pt'>
                    <p class=MsoNormal align=center style='margin-top:0in;margin-right:-5.65pt; margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'>
                        <span style='font-size:10.0pt;font-family:"OneShinhan Bold",sans-serif;color:white'>PROPERTY ADJUSTMENT</span></p>
                </td>
            <!-- Row 1 -->
            <tr style='height:13.35pt'>
                <td valign=top style='width:10pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpFirst style='margin:0in; text-align: center; line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'><b>No</b></span>
                    </p>
                </td>
                <td valign=top style='width:70pt; border-top:none; border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in; text-align: center; line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'><b>Subject Property</b></span>
                    </p>
                </td>
                <td valign=top style='width:61pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in; text-align: center; line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'><b>Title Deed</b></span>
                    </p>
                </td>
                <td valign=top style='width:71pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in; text-align: center; line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'><b>Building Cost</b></span>
                    </p>
                </td>
                <td valign=top style='width:61pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in;text-align: center; line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'><b>Size per sqm</b></span>
                    </p>
                </td>
                <td valign=top style='width:81pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpLast style='margin:0in;text-align: center; line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'><b>Property Value/sqm</b></span>
                    </p>
                </td>
                <td colspan=top style='width:91pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpLast style='margin:0in;text-align: center; line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'><b>Total Property Value</b></span>
                    </p>
                </td>
            </tr>
             <!-- Title 1 -->
            <tr style='height:13.35pt'>
                <td colspan=8 style='width:527.25pt; border:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt; background:#2196f3a1' >
                    <p class=MsoListParagraphCxSpFirst style='margin-left:0in' align=center>
                        <span style='font-size:8.0pt;line-height:107%;font-family:"OneShinhan Light",sans-serif'>Land</span>
                    </p>
                </td>
            </tr>
            <!-- Row 2 -->
            <tr style='height:13.05pt'>
                <td colspan=2 valign=top style='width:60pt; border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>Description</span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>Title No.</span></p>
                </td>
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>Building New Cost</span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>Size</span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpLast align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>Value per Sqm</span>
                    </p>
                </td>
                <td colspan=6 style='width:70pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpLast align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>Total Value</span>
                    </p>
                </td>
            </tr>

            <!--  -->
            <tr style='height:13.05pt'>
                <td valign=top style='width:5pt; border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->id }}</span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->property_type }}</span>
                    </p>
                </td>
                <!-- Merge Two Row -->
                <td rowspan="2" valign=top style='background-color: #ff98002e; width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif;'>{{ $indicator->land_title_no }}</span>
                    </p>
                </td>
                <!-- Merge Two Row -->
                <td rowspan="2" valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>
                            <!-- No Data  -->
                        </span>
                    </p>
                </td>
                <td valign=top style='background-color: #ff98002e; width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->size }}</span>
                    </p>
                </td>
                <td valign=top style='background-color: #ff98002e; width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpLast align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->value_per_sqm }}</span>
                    </p>
                </td>
                <td colspan=6 style='width:70pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpLast align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->total_value }}</span>
                    </p>
                </td>
            </tr>
            <!--  -->

            <!-- Row 2 -->
            <tr style='height:13.05pt'>
                <td colspan=2 valign=top style='width:60pt; border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='color: red; font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>Sub-total</span>
                    </p>
                </td>
                <!-- <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:left; line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'></span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'></span>
                    </p>
                </td> -->
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:right; line-height:normal'>
                        <span style='color: red; font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->size }}</span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpLast align=center style='margin:0in;text-align: right; line-height:normal'>
                        <span style='color: red; font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->value_per_sqm }}</span>
                    </p>
                </td>
                <td colspan=6 style='width:70pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpLast align=center style='margin:0in;text-align: right; line-height:normal'>
                        <span style='color: red; font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->total_value }}</span>
                    </p>
                </td>
            </tr>

            <!-- Title 1 -->
            <tr style='height:13.35pt'>
                <td colspan=8 style='width:527.25pt; border:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt; background:#2196f3a1' >
                    <p class=MsoListParagraphCxSpFirst style='margin-left:0in' align=center>
                        <span style='font-size:8.0pt;line-height:107%;font-family:"OneShinhan Light",sans-serif'>Building</span>
                    </p>
                </td>
            </tr>

            <!--  -->
            <tr style='height:13.05pt'>
                <td valign=top style='width:5pt; border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->id }}</span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->property_type }}</span>
                    </p>
                </td>

                <td valign=top style='background-color: #ff98002e; width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->land_title_no }}</span>
                    </p>
                </td>

                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>
                            <!-- No Data -->
                        </span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->size }}</span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpLast align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->value_per_sqm }}</span>
                    </p>
                </td>
                <td colspan=6 style='width:70pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpLast align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->total_value }}</span>
                    </p>
                </td>
            </tr>
            <tr style='height:13.05pt'>
                <td valign=top style='width:5pt; border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->id }}</span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->property_type }}</span>
                    </p>
                </td>

                <td valign=top style='background-color: #ff98002e; width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->land_title_no }}</span>
                    </p>
                </td>
                
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>
                            <!-- No Data -->
                        </span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->size }}</span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpLast align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->value_per_sqm }}</span>
                    </p>
                </td>
                <td colspan=6 style='width:70pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpLast align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->total_value }}</span>
                    </p>
                </td>
            </tr>
            <!--  -->

            <!-- Row 2 -->
            <tr style='height:13.05pt'>
                <td colspan=2 valign=top style='width:60pt; border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='color: red; font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>Sub-total</span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->land_title_no }}</span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>
                            <!-- No Data -->
                        </span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='color: red; font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->size }}</span>
                    </p>
                </td>
                <td valign=top style='width:60pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpLast align=center style='margin:0in;text-align: right; line-height:normal'>
                        <span style='color: red; font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->value_per_sqm }}</span>
                    </p>
                </td>
                <td colspan=6 style='width:70pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpLast align=center style='margin:0in;text-align: right; line-height:normal'>
                        <span style='color: red; font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->total_value }}</span>
                    </p>
                </td>
            </tr>

            <!-- Row 2 -->
            <tr style='height:13.05pt'>
                <td colspan=3 valign=top style='width:150pt; border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='color: red; font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>Grand Total</span>
                    </p>
                </td>
                <td valign=top style='width:50pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>
                            <!-- No Data -->
                        </span>
                    </p>
                </td>
                <td colspan=6 style='width:200pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align: right; line-height:normal'>
                        <span style='color: red; font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>{{ $indicator->total_value }}</span>
                    </p>
                </td>

            </tr>
            <!-- End  -->

        </table>
        <br>
        <!-- REFERENCE -->
        <table  class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=690 style='width:527.25pt;border-collapse:collapse;border:none'>
            <!-- Title 1 -->
            <tr style='height:18.45pt'>
                <td width=689 colspan=6 style='width:527.25pt;border:solid windowtext 1.0pt; background:#0070C0;padding:0in 5.4pt 0in 5.4pt;height:18.45pt'>
                    <p class=MsoNormal align=center style='margin-top:0in;margin-right:-5.65pt; margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'>
                        <span style='font-size:10.0pt;font-family:"OneShinhan Bold",sans-serif;color:white'>REFERENCE</span>
                    </p>
                </td>
            </tr>
            <!-- Row 1 -->
            <tr style='height:13.05pt'>
                <td colspan=2 valign=top style='width:100pt; border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>CIF No./Name</span>
                    </p>
                </td>
                <td valign=top style='width:100pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>Geo Code</span></p>
                </td>
                <td valign=top style='width:100pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>Size</span>
                    </p>
                </td>
                <td valign=top style='width:100pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in; text-align:center;line-height:normal'>
                        <span style='font-size:8.0pt; font-family:"OneShinhan Bold",sans-serif'>Value per Sqm</span>
                    </p>
                </td>
                <td valign=top style='width:100pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.05pt'>
                    <p class=MsoListParagraphCxSpLast align=center style='margin:0in;text-align: center;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Bold",sans-serif'>Total Value</span>
                    </p>
                </td>
            </tr>
            <!-- Row 2 -->
            <tr style='height:13.35pt'>
                <td valign=top style='width:10pt; border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpFirst style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->property_reference }}</span>
                    </p>
                </td>
                <td valign=top style='width:40pt; border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->property_reference }}</span>
                    </p>
                </td>
                <td valign=top style='width:40pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->property_reference }}</span>
                    </p>
                </td>
                <td valign=top style='width:40pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpMiddle align=right style='margin:0in;text-align: right;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->property_reference }}</span>
                    </p>
                </td>
                <td valign=top style='width:40pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpMiddle align=right style='margin:0in;text-align: right;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->property_reference }}</span>
                    </p>
                </td>
                <td valign=top style='width:40pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpLast align=right style='margin:0in;text-align: right;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->property_reference }}</span>
                    </p>
                </td>
            </tr>
            <tr style='height:13.35pt'>
                <td valign=top style='width:10pt; border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpFirst style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->property_reference }}</span>
                    </p>
                </td>
                <td valign=top style='width:40pt; border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->property_reference }}</span>
                    </p>
                </td>
                <td valign=top style='width:40pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpMiddle style='margin:0in;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->property_reference }}</span>
                    </p>
                </td>
                <td valign=top style='width:40pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpMiddle align=right style='margin:0in;text-align: right;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->property_reference }}</span>
                    </p>
                </td>
                <td valign=top style='width:40pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpMiddle align=right style='margin:0in;text-align: right;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->property_reference }}</span>
                    </p>
                </td>
                <td valign=top style='width:40pt; border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:13.35pt'>
                    <p class=MsoListParagraphCxSpLast align=right style='margin:0in;text-align: right;line-height:normal'>
                        <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif'>{{ $indicator->property_reference }}</span>
                    </p>
                </td>
            </tr>

        </table>

            <table  class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=690 style='width:527.25pt; border-collapse:collapse;border:none'>
                <tr>
                    <td style="width:50pt; border:0; padding:0in 5.4pt 0in 5.4pt;">
                        <p style='margin-top:0in; margin-right:0in; margin-bottom:0in; margin-left:0in; line-height:normal; font-size:15px; font-family:"Calibri",sans-serif;text-align:left; height: 25pt;'>
                            <strong>
                                <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                    Prepared By:
                                </span>
                            </strong>
                        </p>
                    </td>
                    <td style="width:50pt;border:0;padding:0in 5.4pt 0in 5.4pt;text-align:center;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif; height: 25pt;'>
                            <strong>
                                <span style='font-size:11px; font-family: "OneShinhan Light",sans-serif;'>
                                    Fee Charge:
                                </span>
                                <span style='font-size: 10.0pt;font-family:"OneShinhan Light",sans-serif;color:red'>$ 100</span>
                            </strong>
                        </p>
                    </td>
                    <td style="width:50pt;border:0; padding:0in 5.4pt 0in 5.4pt;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:right; height: 25pt;'>
                            <strong>
                                <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                    Approved By:
                                </span>
                            </strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="width:50pt; border:0; padding:0in 5.4pt 0in 5.4pt; ">
                        <p style='margin-top:0in; margin-right:0in; margin-bottom:0in; margin-left:0in; line-height:normal; font-size:15px; font-family:"Calibri",sans-serif;text-align:left;'>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                {{ $indicator->property_reference }}
                            </span>
                            <!-- <br>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                Ms. Nhor Sreynet
                            </span> -->
                        </p>
                    </td>
                    <td style="width:50pt;border:0;padding:0in 5.4pt 0in 5.4pt; text-align:center;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                            <span style='font-size:11px;font-family:   "OneShinhan Light",sans-serif;'>
                                <!-- Mr. Kheng Nith Testing -->
                            </span>
                        </p>
                    </td>
                    <td style="width:50pt;border:0;padding:0in 5.4pt 0in 5.4pt;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;'>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                {{ $indicator->property_reference }}
                            </span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="width:50pt; border:0; padding:0in 5.4pt 0in 5.4pt;">
                        <p style='margin-top:0in; margin-right:0in; margin-bottom:0in; margin-left:0in; line-height:normal; font-size:15px; font-family:"Calibri",sans-serif;text-align:left;'>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                {{ $indicator->property_reference }}
                            </span>
                            <!-- <br>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                Ms. Nhor Sreynet
                            </span> -->
                        </p>
                    </td>
                    <td style="width:50pt;border:0;padding:0in 5.4pt 0in 5.4pt; text-align:center;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                            <span style='font-size:11px;font-family:   "OneShinhan Light",sans-serif;'>
                                <!-- Mr. Kheng Nith Testing -->
                            </span>
                        </p>
                    </td>
                    <td style="width:50pt;border:0;padding:0in 5.4pt 0in 5.4pt;">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;'>
                            <span style='font-size:11px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                {{ $indicator->property_reference }}
                            </span>
                        </p>
                    </td>
                </tr>
            </table>

            <a target="_blank" class="btn btn-primary" href="http://localhost/pms/property-management/public/api/pdfindicator/138">Export to PDF</a>

        <!-- <p class=MsoNormal style='line-height:normal; margin-top: 10px;'>
                <span style='font-size:8.0pt; font-family:"OneShinhan Light",sans-serif; float: left;'>Prepared By:</span>
                
                <b>
                    <span style='font-size:8.0pt; font-family:"OneShinhan Light",sans-serif'>Fee Charge: </span>
                </b>
                <b>
                    <span style='font-size: 10.0pt;font-family:"OneShinhan Light",sans-serif;color:red'>$ 100</span>
                </b>
                <b>
                    <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif;color:red'></span>
                </b>
                <span style='font-size:8.0pt;font-family:"OneShinhan Light",sans-serif; float: right;'>Approved By:</span>
        </p>

        <p class=MsoListParagraphCxSpMiddle style='margin-top:0in; margin-bottom:8.0pt; margin-left:0in'>
            <span style=' font-size:8.0pt; line-height: 107%; font-family:"OneShinhan Light",sans-serif; float: left;'>Ms. Nhor Sreynet</span>
            <span style=' font-size:8.0pt;line-height:107%;font-family:"OneShinhan Light",sans-serif; float: right;'>Mr.Kheng Nith</span>
        </p>
        <p class=MsoListParagraphCxSpMiddle style='margin-top:0in; margin-bottom:8.0pt; margin-left:0in'>
            <br>
            <span style=' font-size:8.0pt;line-height: 107%; font-family:"OneShinhan Light",sans-serif; float: right;'>Tel : 097 338 0278</span>
            <span style=' font-size:8.0pt;line-height:107%; font-family:"OneShinhan Light",sans-serif; float:left;'>Tel : 017 686 097</span>
        </p>   -->
    </div>
</div>

<!-- <div id="capture" style="padding: 10px; background: #f5da55; margin-top: 10px; width: 200px;">
    <h4 style="color: #000; ">Hello world!</h4>
</div>   -->

<!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=cambodia&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:600px;}</style><a href="https://embedgooglemap.2yu.co">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:600px;}</style></div></div> -->

<!-- <div id="map" style="height: 231px; width: 386px;"></div>

<button onclick="myCanvas()">Generate!</button> -->
<!-- <button id="genmap">Map Generate</button> -->
<!-- <a target="_blank" class="btn btn-primary" href="http://localhost/pms/property-management/public/api/pdfindicator/110">Export to PDF</a> -->

<!--script type="text/javascript">

// html2canvas(document.getElementById("map"),
//        {useCORS: true,})
//           .then(function(canvas) {
//             var img = canvas.toDataURL("image/png");
//             var image = new Image();
//             image.src = img;
//           document.getElementById("map_id").appendChild(image);
//           $('#map_id').attr('src', img);
//       });


// $('#genmap').on('click', function(){

//     html2canvas(document.getElementById("map"),
//        {useCORS: true,})
//           .then(function(canvas) {
//             var img = canvas.toDataURL("image/png");
//             var image = new Image();
//             image.src = img;
//           document.getElementById("map_img").appendChild(image);
//       });

// 	var map_image = document.getElementById('map_img');
//     // var map_image = image;
// 	map_image.onload = function(){
// 		var url = 'savemap.php';
//         var data = {
//                     'img':document.getElementById('map_img').src
//                 }; 
// 		$.ajax({
//                 url: url, 
//                 type:'post',
//                 data: data,
//                 success: function(result){
//                     if(result == 'success'){
//                         alert("Successfull!");
//                         // swal("KHQR has been generated successfully", "Please inform your customer to touch on tablet to reload QR Payment", "success");
//                     }
//                     else {
//                         alert("Fail!");
//                         // swal("KHQR generated failed. \n Please retry", "", "error");
//                     }
                    
//             }});
//         }
// });
    

    // $('#download').on('click', () => {
    //     html2canvas(document.querySelector("#gen1")).then(canvas => {
    //         canvas.toBlob(function(blob) {
    //             window.saveAs(blob, "KHQR.png");
    //         });
    //     });
    // });


    // function myCanvas() {

    //   html2canvas(document.getElementById("map"),
    //    {useCORS: true,})
    //       .then(function(canvas) {
    //         var img = canvas.toDataURL("image/png");
    //         // data:image/png;base64,
    //         // ,'.base64_encode(file_get_contents(storage_path('app/public/images/cambodia.png')))

    //         // var img = canvas.Storage::put('public/folder/'.'somename'.png', $image);
    //         // Storage::put('public/folder/'.'somename'.png', $image);
    //         var image = new Image();

    //         // img.src = 'assets/sample.png';
    //         // pdf.addImage(img, 'png', 10, 78, 12, 15);

    //         image.src = img;
    //       document.getElementById("map_img").appendChild(image);
    //     //   $('#map_id').attr('src', img);
    //   });


    //     // var element = document.getElementById('map');
    //     //   html2canvas(element).then((canvas) => {
    //     //     console.log(canvas)

    //     //     var imgData = canvas.toDataURL('image/png');
    //     //     var doc = new jspdf.jsPDF;
    //     //     var imgHeight = canvas.height*208/canvas.width;
    //     //     doc.addImage(imgData, 0, 0, 208, imgHeight);
    //     //     doc.save("result.pdf"); 
    //     // });


    //     //   html2canvas(document.querySelector("#capture"),{useCORS: true,}).then(canvas => {
    //     //     // document.body.appendChild(canvas)
    //     //     document.getElementById("map_img").appendChild(canvas);
    //     // });
    // }
    </script>

<script type="text/javascript">

    function initMap() {

        const myLatLng = { lat: 11.5691468, lng: 104.9146152 };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 13,
            center: myLatLng,
        });
  
        new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello Rajkot!",
        });
    }
  
        window.initMap = initMap;
</script> -->



<!-- <script type="text/javascript">
    function initMap() {
        const myLatLng = { lat: 11.5764211, lng: 104.923754 };
        const map = new google.maps.Map(document.getElementById("map"),
        {
            zoom: 10,
            center: myLatLng,
        });

        var marker, i
        var infowindow = new google.maps.InfoWindow();
        //Latitude, Longtitude
        var locations = null;
        //Labels on marker
        // const labels = $arrayLabel;
                       
        for (i = 0; i < locations.length; i++) {  
            marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            // label:labels[i],
            map: map, 
            // icon: {path: google.maps.SymbolPath.CIRCLE, scale: 0}
        });
                                
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
                }
            })(marker, i));
        }
        window.initMap = initMap;
    }
</script> -->

<!-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{env('GOOGLE_MAP_KEY')}}&callback=initMap" ></script> -->
<!-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAMUcSJr7R-FTwCXyKXLKGYc-vwQsu1l5A&callback=initMap" ></script> -->

</body>
</html>