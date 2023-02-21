<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Internal Indication Report</title>
        <!-- <script src="../../js/html2canvas.js"></script>
        <script src="../../js/html2canvas.min.js"></script>
        <script src="../../js/jspdf.js"></script> -->
    </head>
    <body style="height: 100%; width: 100%;">
        <div class="WordSection1" style=" height: 850px;">
            <div style="padding:3.6pt 7.2pt 3.6pt 7.2pt;">
                <p style='text-align: right; margin-top:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'>
                    <span style='font-size:12px;line-height:107%font-family:"OneShinhanLight"sans-serif'>
                        Ref: <strong>{{ $appraisal->property_reference }}</strong>
                    </span>
                </p>
            </div>

            <p class=MsoNormal align = center style='text-align:center'>
                <u>
                    <span style='font-size:16pt;line-height:107%;font-family:"OneShinhan Bold",sans-serif'>Internal Appraisal Certificate</span>
                </u>
            </p>

            <div align = center>
                <p class=MsoListParagraphCxSpFirst style='margin-top:0in; margin-bottom:8.0pt; margin-left:0in'>
                    <span style='font-size:12px; line-height:107%; font-family:"OneShinhan Light",sans-serif'>
                        Held Under Certificate of Real Estate Ownership No. {{ $appraisal->land_title_no }}
                    </span> 
                </p>
            </div>

            <div align = center>
                <div style="position: relative;">
                    <div style="position: relative; left: 0px; top: 0px;">
                        <table  class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style='width:527.25pt;border-collapse:collapse;border:none'>
                            <tbody>
                                <tr>
                                    <td style="width: 120pt; border: 1pt solid windowtext; background: rgb(156, 194, 229); padding: 0in 5.4pt; vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                                Under Legal Interest of
                                            </span>
                                        </p>
                                    </td>
                                    <td  colspan="2" style="width: 217.25pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                : {{ $appraisal->collateral_owner }}
                                            </span>
                                        </p>
                                    </td>
                                    <!-- <td valign="top" rowspan="11" style="text-align: center">
                                            <img src="{{asset('upload/'.$appraisal->front_photo)}}" style="height: 240px; width: 100%;">
                                    </td> -->
                                    <td valign="top" rowspan="12" style="position: absolute; width: 190pt;  height: 264px; border-left: 0px;border: solid windowtext 1pt; padding: 0in 0in 0in 0in;">
                                        <img src="{{asset('upload/'.$appraisal->front_photo)}}" style="width: 100%; height: 280px;">
                                    </td>
                                        <!-- <div id="qrcode-2" style="position: absolute; right: 0px; buttom: 0px;">
                                            <img src="{{ $qrImage }}" style="height: 60px; width: 60px; border: 1px solid #0070C0; padding: 5px; background-color: white;"/>
                                        </div> -->
                                    <!-- QR Code Map Place -->
                                </tr>
                                <tr>
                                    <td style="width: 120pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                                Customer Name
                                            </span>
                                        </p>
                                    </td>
                                    <td colspan="2" style="width: 217.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                : {{ $appraisal->customer_name }} &nbsp;
                                            </span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 120pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                                Customer CIF No.
                                            </span>
                                        </p>
                                    </td>
                                    <td colspan="2" style="width: 217.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                : <strong>{{ $appraisal->cif_no }}</strong>
                                            </span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 120pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                                Branch Name
                                            </span>
                                        </p>
                                    </td>
                                    <td colspan="2" style="width: 217.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                : {{ $appraisal->BranchName }}
                                            </span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 120pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                                RM Name / Telephone
                                            </span>
                                        </p>
                                    </td>
                                    <td colspan="2" style="width: 217.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                : {{ $appraisal->RmNamePhone }} &nbsp;
                                            </span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 120pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                                Appraisal Certificate Fee
                                            </span>
                                        </p>
                                    </td>
                                    <td style="width: 80pt; border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                : USD {{ $appraisal->appraisal_certificate_fee }}
                                            </span>
                                            <br>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                : KHR {{ $appraisal->AppraisalCertificateFeeFormat }}
                                            </span>
                                        </p>
                                    </td>
                                    <td style="width: 100pt; border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                700-000-376898 (USD)
                                            </span>
                                            <br>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                700-000-378380 (KHR)
                                            </span>
                                        </p>
                                    </td>

                                    <!-- <td style="width: 80pt; border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                700-000-376898 (USD)
                                            </span>
                                            <br>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                700-000-378380 (KHR)
                                            </span>
                                        </p>
                                    </td> -->
                                </tr>
                                <tr>
                                    <td style="width: 120pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                                Requested Date
                                            </span>
                                        </p>
                                    </td>
                                    <td colspan="2" style="width: 217.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                : {{ $appraisal->RequestedDateFormat }}
                                            </span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 120pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                                Report Date
                                            </span>
                                        </p>
                                    </td>
                                    <td colspan="2" style="width: 217.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                : {{ $appraisal->ReportedDateFormat }}
                                            </span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 120pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                                Land Area
                                            </span>
                                        </p>
                                    </td>
                                    <td colspan="2" style="width: 217.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                : {{ $appraisal->LandAreaWithString }} (By Title Deed)
                                            </span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 120pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                                Land Area by Measurement
                                            </span>
                                        </p>
                                    </td>
                                    <td colspan="2" style="width: 217.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                : {{ $appraisal->LandSizeByMeasurementString }} (Actual Site Measure...)
                                            </span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 120pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; background: rgb(156, 194, 229); padding: 0in 5.4pt; vertical-align: top;">
                                        <p style='margin-top: 0in; margin-right: 0in; margin-bottom: 0in; margin-left: 0in; line-height: normal; font-size: 15px; font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px; font-family:"OneShinhan Light",sans-serif; color:black;'>
                                                Build Up Area
                                            </span>
                                        </p>
                                    </td>
                                    <td colspan="2" style="width: 217.25pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top: 0in; margin-right: 0in; margin-bottom: 0in; margin-left: 0in; line-height: normal; font-size: 15px; font-family: "Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                : {{ $appraisal->BuildingSizeByMeasurementString }} (Actual Site Measure...)
                                            </span>
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 100pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none;background: rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                                Address of the Property
                                            </span>
                                        </p>
                                    </td>
                                    <td colspan="3" style="width: 217.25pt; border-left: none; border-bottom: 1pt solid windowtext; border-right: 0pt solid windowtext; padding: 0in 5.4pt; vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                : {{ $appraisal->FullAddress }}
                                            </span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 120pt; border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                                        <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                                Geo Code
                                            </span>
                                        </p>
                                    </td>
                                    <td colspan="3" style="width: 217.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                        <h2 style='margin-top:0pt;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri Light",sans-serif;color:#2E74B5;font-weight:normal;background:white;vertical-align: baseline;'>
                                            <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>
                                                : {{ $appraisal->GeoCode }}
                                            </span>
                                        </h2>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="qrcode-2" style="position: absolute; right: 0px; top: 210px; ">
                        <img src="{{ $qrImage }}" style="height: 60px; width: 60px; border: 1px solid #0070C0; padding: 5px; background-color: white;"/>
                    </div>
                </div>
                <br>
                <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style='width:527.25pt;border-collapse:collapse;border:none'>
                    <tbody>
                        <tr>
                            <td style="width:50pt; border:solid windowtext 1.0pt; background:#9CC2E5; padding:0in 5.4pt 0in 5.4pt; height:50pt;">
                                <p style='margin-top:0in; margin-right:0in; margin-bottom:0in; margin-left:0in; line-height:normal; font-size:15px; font-family:"Calibri",sans-serif;text-align:center;'>
                                    <strong>
                                        <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                            Strength
                                        </span>
                                    </strong>
                                </p>
                            </td>
                            <td style="width:150pt;border-top:solid windowtext 1.0pt;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:50pt;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                    <span style='font-size:12px;font-family:   "OneShinhan Light",sans-serif;'>
                                        {!! $appraisal->strength !!}
                                    </span>
                                    <!-- <br>
                                    <span style='font-size:12px;font-family:   "OneShinhan Light",sans-serif;'>
                                        - It is in the area of high population density and suitable for running a business,
                                    </span> -->
                                </p>
                            </td>
                            <td style="width:150pt;border-top:solid windowtext 1.0pt;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:50pt;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                    <span style='font-size:12px;font-family:   "OneShinhan Light",sans-serif;'>
                                        {!! $appraisal->opportunity !!}
                                    </span>
                                </p>
                            </td>
                            <td style="width:50pt;border:solid windowtext 1.0pt;border-left:none;background:#9CC2E5;padding:0in 5.4pt 0in 5.4pt;height:50pt;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                    <strong>
                                        <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                            Opportunity
                                        </span>
                                    </strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:50pt;border:solid windowtext 1.0pt;border-top:none;background:#9CC2E5;padding:0in 5.4pt 0in 5.4pt;height:50pt;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                    <strong>
                                        <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                            Weakness
                                        </span>
                                    </strong>
                                </p>
                            </td>
                            <td style="width:150pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext ;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:50pt;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                    <span style='font-size:12px;font-family:   "OneShinhan Light",sans-serif;'>
                                        {!! $appraisal->weakness !!}
                                    </span>
                                </p>
                            </td>
                            <td style="width:150pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:50pt;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                    <span style='font-size:12px;font-family:   "OneShinhan Light",sans-serif;'>
                                        {!! $appraisal->threat !!}
                                    </span>
                                </p>
                            </td>
                            <td style="width:50pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#9CC2E5;padding:0in 5.4pt 0in 5.4pt;height:50pt;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                    <strong>
                                        <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                            Threat
                                        </span>
                                    </strong>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style='width:527.25pt;border-collapse:collapse;border:none'>
                    <tbody>
                        <tr>
                            <td colspan="2" style='color:black; font-size:12px; font-weight:700; font-style:normal; text-decoration:none; font-family:"OneShinhan Light", sans-serif; text-align:center; border:.5pt solid windowtext; background:#9BC2E6; width:100pt;'>Description</td>
                            <td style='color:black; font-size:12px; font-weight:700; font-style:normal; text-decoration:none; font-family:"OneShinhan Light", sans-serif; text-align:center; border:.5pt solid windowtext; background:#9BC2E6; width:70pt;'>Building Age</td>
                            <td style='color:black; font-size:12px; font-weight:700; font-style:normal; text-decoration:none; font-family:"OneShinhan Light", sans-serif; text-align:center; border:.5pt solid windowtext; background:#9BC2E6; width:80pt;'>Size</td>
                            <td style='color:black; font-size:12px; font-weight:700; font-style:normal; text-decoration:none; font-family:"OneShinhan Light", sans-serif; text-align:center; border:.5pt solid windowtext; background:#9BC2E6; width:90pt;'>Building New Cost</td>
                            <td style='color:black; font-size:12px; font-weight:700; font-style:normal; text-decoration:none; font-family:"OneShinhan Light", sans-serif; text-align:center; border:.5pt solid windowtext; background:#9BC2E6; width:80pt;'>Value per Sqm</td>
                            <td style='color:black; font-size:12px; font-weight:700; font-style:normal; text-decoration:none; font-family:"OneShinhan Light", sans-serif; text-align:center; border:.5pt solid windowtext; background:#9BC2E6; width:90pt;'>Total Value</td>
                        </tr>
                        <tr>
                            <td style='color:black;font-size:12px;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:left; border:.5pt solid windowtext;height:14.4pt;border-top:none;width:5pt; padding:0in 5.4pt 0in 5.4pt;'>1</td>
                            <td style='color:black;font-size:12px;font-weight:400;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:left; border:.5pt solid windowtext;border-top:none;border-left:none;width:70pt; padding:0in 5.4pt 0in 5.4pt;'>Land</td>
                            <td style='color:black;font-size:12px;font-weight:400;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:left; border:.5pt solid windowtext;border-top:none;border-left:none;width:60pt; padding:0in 5.4pt 0in 5.4pt;'></td>
                            <td style='color:black;font-size:12px;font-weight:400;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif; border:.5pt solid windowtext;border-top:none;border-left:none;width:70pt; padding:0in 5.4pt 0in 5.4pt;'>
                                <span style="float: right; margin-top: 2px;">{{ $appraisal->LandSizeFormat }}</span>
                            </td>
                            <td style='color:black;font-size:12px;font-weight:400;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:general; border:.5pt solid windowtext;text-align:left;border-top:none;border-left:none;width:80pt; padding:0in 5.4pt 0in 5.4pt;'></td>
                            <td style='color:black;font-size:12px;font-weight:400;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif; border:.5pt solid windowtext; border-top:none;border-left:none;width:70pt; padding:0in 5.4pt 0in 5.4pt;'>
                                <span style="margin-left: 5px;">$</span>
                                <span style="float: right; margin-top: 3px;">{{ $appraisal->LandValuePerSqmFormat }}</span>
                            </td>
                            <td style='color:black;font-size:12px;font-weight:400;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:general; border:.5pt solid windowtext;text-align:left;border-top:none;border-left:none;width:80pt; padding:0in 5.4pt 0in 5.4pt;'>
                                <span style="margin-left: 5px;">$</span>
                                <span style="float: right; margin-top: 3px;">{{ $appraisal->LandTotalValuePerSqmFormat }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style='color:black;font-size:12px;font-weight:400;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:left; border:.5pt solid windowtext;height:14.4pt;border-top:none;width:5pt; padding:0in 5.4pt 0in 5.4pt;'>2</td>
                            <td colspan="2" style='color:black;font-size:12px;font-weight:400;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:left; border:.5pt solid windowtext;border-top:none;border-left:none;width:70pt; padding:0in 5.4pt 0in 5.4pt;'>{{ $appraisal->PropertyTypeName }}</td>
                            <!-- <td style='color:black;font-size:12px;font-weight:400;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:left;vertical-align:bottom;border:.5pt solid windowtext;border-top:none;border-left:none;width:60pt; padding:0in 0in 5.4pt 5.4pt;'></td> -->
                            <td style='color:black;font-size:12px;font-weight:400;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:general; border:.5pt solid windowtext;text-align:left;border-top:none;border-left:none;width:70pt; padding:0in 5.4pt 0in 5.4pt;'>
                                <span style="float: right; margin-top: 2px;">{{ $appraisal->BuildingSizeByMeasurementFormat }}</span>
                            </td>
                            <td style='color:black;font-size:12px;font-weight:400;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:general; border:.5pt solid windowtext;text-align:left;border-top:none;border-left:none;width:80pt; padding:0in 5.4pt 0in 5.4pt;'></td>
                            <td style='color:black;font-size:12px;font-weight:400;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:general; border:.5pt solid windowtext;text-align:left;border-top:none;border-left:none;width:70pt; padding:0in 5.4pt 0in 5.4pt;'>
                                <span style="margin-left: 5px;">$</span>
                                <span style="float: right; margin-top: 3px;">$ {{ $appraisal->BuildingValuePerSqmFormat }}</span>
                            </td>
                            <td style='color:black;font-size:12px;font-weight:400;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:general; border:.5pt solid windowtext;text-align:left;border-top:none;border-left:none;width:80pt; padding:0in 5.4pt 0in 5.4pt;'>
                                <span style="margin-left: 5px;">$</span>
                                <span style="float: right; margin-top: 3px;">{{ $appraisal->BuildingTotalValuePerSqmFormat }}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style='width:527.25pt;border-collapse:collapse;border:none'>
                    <tbody>
                        <tr>
                            <td style='width: 527px !important; padding: 0in 5.4pt 0in 5.4pt; font-size:12px;font-weight:350;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:left; border:.5pt solid windowtext;height:14.4pt;'>
                                <span style = "color: #0f0f88;">Fair Market Value:</span> 
                            </td>
                            <td style='color: red; font-size:12px;font-weight:50;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:left; border:.5pt solid windowtext;height:14.4pt;border-left:none;'>
                                <span style="margin-left: 5px;">$</span>
                                <span style="float: right; margin-right: 5px; margin-top: 2px">{{ $appraisal->FairMarketValueFormat }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 527px !important; padding: 0in 5.4pt 0in 5.4pt; font-size:12px;font-weight:350;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:left; border:.5pt solid windowtext;height:14.4pt;'>
                                <span style = "color: #0f0f88;">Forced Sale Value - (80% of Market Value):</span>
                            </td>
                            <td style='color: red; font-size:12px;font-weight:50;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:left; border:.5pt solid windowtext;height:14.4pt;border-left:none;'>
                                <span style="margin-left: 5px;">$</span>
                                <span style="float: right; margin-right: 5px; margin-top: 2px">{{ $appraisal->ForcedSaleValueFormat }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 527px !important; padding: 0in 5.4pt 0in 5.4pt; font-size:12px;font-weight:350;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:left; border:.5pt solid windowtext;height:14.4pt;'>
                                <span style = "color: #0f0f88;">Fire Insurance Value:</span>
                            </td>
                            <td style='color: red; font-size:12px;font-weight:50;font-style:normal;text-decoration:none;font-family:"OneShinhan Light", sans-serif;text-align:left; border:.5pt solid windowtext;height:14.4pt;border-left:none;'>
                                <span style="margin-left: 5px;">$</span>
                                <span style="float: right; margin-right: 5px; margin-top: 2px">{{ $appraisal->BuildingTotalValuePerSqmFormat }}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table  class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=690 style='width:527.25pt; border-collapse:collapse;border:none'>
                    <tbody>
                        <tr>
                            <td colspan="7" style="width: 509.75pt;border: 1pt solid windowtext;background: rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                    <strong>
                                        <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                            COMPARABLE REFERENCE
                                        </span>
                                    </strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="width: 100pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Bold",sans-serif;'>
                                        CIF No. / Name
                                    </span>
                                </p>
                            </td>
                            <td style="width: 80pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Bold",sans-serif;'>
                                        Geo Code
                                    </span>
                                </p>
                            </td>
                            <td style="width: 90pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Bold",sans-serif;'>
                                        Distance
                                    </span>
                                </p>
                            </td>
                            <td style="width: 50pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Bold",sans-serif;'>
                                        Size
                                    </span>
                                </p>
                            </td>
                            <td style="width: 80pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Bold",sans-serif;'>
                                        Value per Sq. m
                                    </span>
                                </p>
                            </td>
                            <td style="width: 80pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Bold",sans-serif;'>
                                        Total Value
                                    </span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 5pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>{{ $appraisal->comparable_id1 }}</span>
                                </p>
                            </td>
                            <td style="width: 50pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>{{ $appraisal->comparable_cif_no1 }}</span>
                                </p>
                            </td>
                            <td style="width: 90pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>{{ $appraisal->comparable_geo_code1 }}</span>
                                </p>
                            </td>
                            <td style="width: 50pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>{{ $appraisal->comparable_distance1 }}</span>
                                </p>
                            </td>
                            <td style="width: 40pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>{{ $appraisal->ComparableSizeOneFormat }}</span>
                                </p>
                            </td>
                            <td style="width: 50pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>$ {{ $appraisal->ComparaleValuePerSqmOneFormat }}</span>
                                </p>
                            </td>
                            <td style="width: 50pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>$ {{ $appraisal->ComparableTotalValueOneFormat }}</span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 5pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>{{ $appraisal->comparable_id2 }}</span>
                                </p>
                            </td>
                            <td style="width: 50pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>{{ $appraisal->comparable_cif_no2 }}</span>
                                </p>
                            </td>
                            <td style="width: 90pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>{{ $appraisal->comparable_geo_code2 }}</span>
                                </p>
                            </td>
                            <td style="width: 50pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>{{ $appraisal->comparable_distance2 }}</span>
                                </p>
                            </td>
                            <td style="width: 40pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>{{ $appraisal->ComparableSizeTwoFormat }}</span>
                                </p>
                            </td>
                            <td style="width: 50pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>$ {{ $appraisal->ComparaleValuePerSqmTwoFormat }}</span>
                                </p>
                            </td>
                            <td style="width: 50pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;'>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;'>$ {{ $appraisal->ComparableTotalValueTwoFormat }}</span>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table  class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=690 style='width:527.25pt; border-collapse:collapse;border:none'>
                    <tr>
                        <td style="width:50pt; border:0; padding:0in 5.4pt 0in 5.4pt;">
                            <p style='margin-top:0in; margin-right:0in; margin-bottom:0in; margin-left:0in; line-height:normal; font-size:15px; font-family:"Calibri",sans-serif;text-align:center;'>
                                <strong>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                        Prepared By:
                                    </span>
                                </strong>
                            </p>
                        </td>
                        <td style="width:130pt;border:0;padding:0in 5.4pt 0in 5.4pt;text-align:center;">
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                <strong>
                                    <span style='font-size:12px;font-family:   "OneShinhan Light",sans-serif;'>
                                        Reviewed By:
                                    </span>
                                </strong>
                            </p>
                        </td>
                        <td style="width:50pt;border:0; padding:0in 5.4pt 0in 5.4pt;">
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <strong>
                                    <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                        Approved By:
                                    </span>
                                </strong>
                            </p>
                        </td>
                    </tr>
                    <br>
                    <br>
                    <tr>
                        <td style="width:50pt; border:0; padding:0in 5.4pt 0in 5.4pt; height:50pt;">
                            <p style='margin-top:0in; margin-right:0in; margin-bottom:0in; margin-left:0in; line-height:normal; font-size:15px; font-family:"Calibri",sans-serif;text-align:center;'>
                                <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                    Ms. Nhor Sreynet 
                                </span>
                            </p>
                        </td>
                        <td style="width:130pt;border:0;padding:0in 5.4pt 0in 5.4pt;height:50pt;text-align:center;">
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
                                <span style='font-size:12px;font-family:   "OneShinhan Light",sans-serif;'>
                                    Mr. Kheng Nith
                                </span>
                            </p>
                        </td>
                        <td style="width:50pt;border:0;padding:0in 5.4pt 0in 5.4pt;height:50pt;">
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <span style='font-size:12px;font-family:"OneShinhan Light",sans-serif;color:black;'>
                                    Mr. Suong Reaksmey
                                </span>
                            </p>
                        </td>
                    </tr>
                </table>

                <!-- <a target="_blank" class="btn btn-primary" href="http://localhost/pms/property-management/public/api/pdfappraisal/98">Export to PDF</a> -->
            </div>
        </div>
    </body>
</html>