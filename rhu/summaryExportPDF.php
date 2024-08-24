<?php
require_once ('../dompdf/autoload.inc.php');

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = file_get_contents("summary.php");
$dompdf->loadHtml($html);
$dompdf->setPaper('legal', 'landscape');
$dompdf->render($html);
$dompdf->stream('Summary-RHU', array('attachment'=>0));

?>     

<!-- <div class="w-100 px-4">
        <div class="flex d-flex flex-row w-100">
            <div class="w-100">
                <div class="px-3">
                  <div class="text-center w-100 pt-3 ">
                    <div class="row">
                      <div class="col-2">
                        <h6 class="fw-semibold">Province: <span class="fw-normal">BILIRAN</span></h6>
                      </div>
                      <div class="col-4">
                        <h6 class="fw-semibold">Region: <span class="fw-normal">VIII EASTERN VISAYAS</span></h6>
                      </div>
                      <div class="col-2">
                        <h6 class="fw-semibold">Coverage: <span class="fw-normal">%</span></h6>
                      </div>
                      <div class="col-3">
                        <h6 class="fw-normal">Total Indigenous Preschool <br>Children Measured <br>0-59 mos.: <span></span></h6>
                      </div>
                    </div>
                  </div>
                  <div>
                    <h6 class="fw-semibold">Municipalty: </h6>
                    <h6 class="">Total Popn. Municipality/City: <span></span></h6>
                    <h6 class="">Estimated Popn. of Children 0-59 mos. in Municipality/City: <span></span></h6>
                  </div>
                </div>
            </div>
            <div class="mt-4 me-5">
                <img src="../assets/images/logos/NNC-logo.svg.png" alt="NNC Logo" width="60px" height="60px">
            </div>
        </div>
    </div>
    <div class="p-4">
      <div class="table-responsive">
        <table>
          <thead>
            <tr>
              <th class="p-1 fw-semibold text-dark text-end">
                PSGC:
              </th>
              <th class="p-1 fw-semibol text-dark" colspan="4">
                00000000
              </th>
              <th class="p-1 fw-semibold text-dark text-end" colspan="2">
                Total WFA:
              </th>
              <th class="p-1 fw-semibold text-dark" colspan="2">
                0000
              </th>
              <th class="p-1 fw-semibold text-dark text-end" colspan="2">
                Total HFA:
              </th>
              <th class="p-1 fw-semibold text-dark" colspan="2">
                0000
              </th>
              <th class="p-1 fw-semibold text-dark text-end" colspan="3">
                Total WFL/H:
              </th>
              <th class="p-1 fw-semibold text-dark" colspan="3">
                0000
              </th>
              <th class="p-1 fw-semibold text-dark border border-2 border-dark bg-black text-white text-center" colspan="2" rowspan="2">
                Birth to 5 years 0-59 mos.
              </th>
              <th class="p-1 fw-semibold text-dark border border-2 border-dark text-center" colspan="2">
                F1K
              </th>
              <th class="p-1 fw-semibold text-dark border border-2 border-dark text-center" colspan="3">
                #IP Children
              </th>
            </tr>
              <tr>
                <th class="p-1 fw-semibold text-dark border border-2 border-dark text-center" rowspan="2">
                  ACRONYMS & ABBREVIATIONS
                </th> 
                <th class="p-1 fw-semibold text-dark border border-2 border-dark text-center" colspan="3">
                  0-5 months
                </th>   
                <th class="p-1 fw-semibold text-dark border border-2 border-dark text-center" colspan="3">
                  6-11 months
                </th>
                <th class="p-1 fw-semibold text-dark border border-2 border-dark text-center" colspan="3">
                  12-23 months
                </th>
                <th class="p-1 fw-semibold text-dark border border-2 border-dark text-center" colspan="3">
                  24-35 months
                </th>
                <th class="p-1 fw-semibold text-dark border border-2 border-dark text-center" colspan="3">
                  36-47 months
                </th>
                <th class="p-1 fw-semibold text-dark border border-2 border-dark text-center" colspan="3">
                  48-59 months
                </th>
                <th class="p-1 fw-semibold text-dark border border-2 border-dark text-center" colspan="2">
                  0-23 months
                </th>
                <th class="p-1 text-dark border border-2 border-dark text-center" rowspan="2">
                  Boys
                </th>
                <th class="p-1 text-dark border border-2 border-dark text-center" rowspan="2">
                  Girls
                </th>
                <th class="p-1 text-dark border border-2 border-dark text-center" rowspan="2">
                  Total
                </th>
              </tr>
              <tr>
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Boys
                </th> 
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Girls
                </th> 
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Total
                </th>
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Boys
                </th> 
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Girls
                </th> 
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Total
                </th>
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Boys
                </th> 
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Girls
                </th> 
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Total
                </th>
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Boys
                </th> 
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Girls
                </th> 
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Total
                </th>
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Boys
                </th> 
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Girls
                </th> 
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Total
                </th>
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Boys
                </th> 
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Girls
                </th> 
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Total
                </th>
                <th class="p-1 text-dark border border-2 border-dark text-center bg-black text-white">
                  Total
                </th>
                <th class="p-1 text-dark border border-2 border-dark text-center bg-black text-white">
                  Prev
                </th>
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Total
                </th>
                <th class="p-1 text-dark border border-2 border-dark text-center">
                  Prev
                </th>
              </tr>
          </thead>
          <tbody class="border border-1">
            <tr>
              <th class="border border-1 border-dark p-1">WFA - Normal</th>
              <td class="border border-1 border-dark p-1">0-5 mos. boys</td>
              <td class="border border-1 border-dark p-1">0-5 mos. girls</td>
              <td class="border border-1 border-dark p-1">0-5 mos. total</td>
              <td class="border border-1 border-dark p-1">6-11 mos. boys</td>
              <td class="border border-1 border-dark p-1">6-11 mos. girls</td>
              <td class="border border-1 border-dark p-1">6-11 mos. total</td>
              <td class="border border-1 border-dark p-1">12-23 mos. boys</td>
              <td class="border border-1 border-dark p-1">12-23 mos. girls</td>
              <td class="border border-1 border-dark p-1">12-23 mos. total</td>
              <td class="border border-1 border-dark p-1">24-35 mos. boys</td>
              <td class="border border-1 border-dark p-1">24-35 mos. girls</td>
              <td class="border border-1 border-dark p-1">24-35 mos. total</td>
              <td class="border border-1 border-dark p-1">36-47 mos. boys</td>
              <td class="border border-1 border-dark p-1">36-47 mos. girls</td>
              <td class="border border-1 border-dark p-1">36-47 mos. total</td>
              <td class="border border-1 border-dark p-1">48-49 mos. boys</td>
              <td class="border border-1 border-dark p-1">48-49 mos. girls</td>
              <td class="border border-1 border-dark p-1">48-49 mos. total</td>
              <td class="border border-1 border-dark p-1 bg-dark text-white">Birth to 5 years 0-59 mos. total</td>
              <td class="border border-1 border-dark p-1 bg-dark text-white">Birth to 5 years 0-59 mos. prev</td>
              <td class="border border-1 border-dark p-1">F1K 0-23 mos. total</td>
              <td class="border border-1 border-dark p-1">F1K 0-23 mos. prev</td>
              <td class="border border-1 border-dark p-1">#IP boys</td>
              <td class="border border-1 border-dark p-1">#IP girls</td>
              <td class="border border-1 border-dark p-1">#IP total</td>
            </tr>
            <tr>
              <th class="border border-1 border-dark p-1">WFA - Wasted</th>
            </tr>
            <tr>
              <th class="border border-1 border-dark p-1">WFA - Severely Wasted</th>
            </tr>
            <tr>
              <th class="border border-1 border-dark p-1">WFA - Overweight</th>
            </tr>
            <tr>
              <th class="border border-1 border-dark p-1">HFA - Normal</th>
            </tr>
            <tr>
              <th class="border border-1 border-dark p-1">HFA - Stunted</th>
            </tr>
            <tr>
              <th class="border border-1 border-dark p-1">HFA - Severely Stunted</th>
            </tr>
            <tr>
              <th class="border border-1 border-dark p-1">HFA - Tall</th>
            </tr>
            <tr>
              <th class="border border-1 border-dark p-1">WFL/H - Normal</th>
            </tr>
            <tr>
              <th class="border border-1 border-dark p-1">WFL/H - Underweight</th>
            </tr>
            <tr>
              <th class="border border-1 border-dark p-1">WFL/H - Severely Underweight</th>
            </tr>
            <tr>
              <th class="border border-1 border-dark p-1">WFL/H - Obesity</th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div> -->