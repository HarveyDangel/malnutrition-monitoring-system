<?php
include 'header.php';
?>
<body class="bg-light-gray">
    
<main class="card mb-5">
    <div class="w-100 px-4">
        <div class="flex d-flex flex-row w-100 text-center">
            <div class="mt-4 ms-5">
                <img src="../assets/images/logos/NNC-logo.svg.png" alt="NNC Logo" width="60px" height="60px">
            </div>
            <div class="w-100">
                <div class="pe-4">
                    <div class="flex d-flex flex-column text-center w-100 pt-3 pe-5">
                        <h7 class="fw-semibold">Municipality: NAVAL</h7>
                        <h7 class="fs-2">PROVINCE: BILIRAN</h7>
                        <h7 class="fw-semibold">OPERATION TIMBANG PLUS year</h7>
                        <h7 class="fw-semibold fs-1">NUTRITIONAL STATUS OF CHILDREN 0-59 MONTHS AND 0-23 MONTHS OLD</h7>
                        <h class="fs-1">SUMMARY TABLES FOR PRESENTATION</h>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-5">
        <div class="mx-4">
            <table class="w-100">
                <div class="flex d-flex flex-row m-0 p-0">
                    <div class="mt-3 p-0 w-100">
                        <h7 class="fw-semibold mb-0">WEIGHT FOR AGE</h7>
                    </div>
                </div>
                <thead class="w-100 border-2">
                    <tr class="w-100">
                        <th class="border border-dark text-center bg-primary" rowspan="2"></th>
                        <th class="border border-dark text-center bg-dark-subtle text-white" colspan="4">0-23 months (F1K)</th>
                        <th class="border border-dark text-center bg-primary text-white" colspan="4">0-59 Months</th>
                    </tr>
                    <tr>
                        <th class="border border-dark text-center">Boys</th>
                        <th class="border border-dark text-center">Girls</th>
                        <th class="border border-dark text-center">Total</th>
                        <th class="border border-dark text-center">Prev</th>
                        <th class="border border-dark text-center">Boys</th>
                        <th class="border border-dark text-center">Girls</th>
                        <th class="border border-dark text-center">Total</th>
                        <th class="border border-dark text-center">Prev</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th class="border border-dark ps-1">Normal</th>
                        <td class="border border-dark text-center">Boys 0-23 mos.</td>
                        <td class="border border-dark text-center">Girls 0-23 mos.</td>
                        <td class="border border-dark text-center">Total 0-23 mos.</td>
                        <td class="border border-dark text-center">Prev 0-23 mos. (%)</td>
                        <td class="border border-dark text-center">Boys 0-59 mos.</td>
                        <td class="border border-dark text-center">Girls 0-59 mos.</td>
                        <td class="border border-dark text-center">Total 0-59 mos.</td>
                        <td class="border border-dark text-center">Prev 0-59 mos. (%)</td>
                    </tr>
                    <tr>
                        <th class="border border-dark ps-1">Overweight</th>
                        <td class="border border-dark text-center">Boys 0-23 mos.</td>
                        <td class="border border-dark text-center">Girls 0-23 mos.</td>
                        <td class="border border-dark text-center">Total 0-23 mos.</td>
                        <td class="border border-dark text-center">Prev 0-23 mos. (%)</td>
                        <td class="border border-dark text-center">Boys 0-59 mos.</td>
                        <td class="border border-dark text-center">Girls 0-59 mos.</td>
                        <td class="border border-dark text-center">Total 0-59 mos.</td>
                        <td class="border border-dark text-center">Prev 0-59 mos. (%)</td>
                    </tr>
                    <tr>
                        <th class="border border-dark ps-1">Underweight</th>
                        <td class="border border-dark text-center">Boys 0-23 mos.</td>
                        <td class="border border-dark text-center">Girls 0-23 mos.</td>
                        <td class="border border-dark text-center">Total 0-23 mos.</td>
                        <td class="border border-dark text-center">Prev 0-23 mos. (%)</td>
                        <td class="border border-dark text-center">Boys 0-59 mos.</td>
                        <td class="border border-dark text-center">Girls 0-59 mos.</td>
                        <td class="border border-dark text-center">Total 0-59 mos.</td>
                        <td class="border border-dark text-center">Prev 0-59 mos. (%)</td>
                    </tr>
                    <tr>
                        <th class="border border-dark ps-1">Severely Underweight</th>
                        <td class="border border-dark text-center">Boys 0-23 mos.</td>
                        <td class="border border-dark text-center">Girls 0-23 mos.</td>
                        <td class="border border-dark text-center">Total 0-23 mos.</td>
                        <td class="border border-dark text-center">Prev 0-23 mos. (%)</td>
                        <td class="border border-dark text-center">Boys 0-59 mos.</td>
                        <td class="border border-dark text-center">Girls 0-59 mos.</td>
                        <td class="border border-dark text-center">Total 0-59 mos.</td>
                        <td class="border border-dark text-center">Prev 0-59 mos. (%)</td>
                    </tr>
                    <tr class="border border-0">
                        <th colspan="9" rowspan="2" class="pt-4">
                            <h7 class="fw-semibold mb-0">HEIGHT FOR AGE</h7>
                        </th>
                    </tr>
                </tbody>
                <thead class="w-100 border-2">
                    <tr class="w-100">
                        <th class="border border-dark text-center bg-primary" rowspan="2"></th>
                        <th class="border border-dark text-center bg-dark-subtle text-white" colspan="4">0-23 months (F1K)</th>
                        <th class="border border-dark text-center bg-primary text-white" colspan="4">0-59 Months</th>
                    </tr>
                    <tr>
                        <th class="border border-dark text-center">Boys</th>
                        <th class="border border-dark text-center">Girls</th>
                        <th class="border border-dark text-center">Total</th>
                        <th class="border border-dark text-center">Prev</th>
                        <th class="border border-dark text-center">Boys</th>
                        <th class="border border-dark text-center">Girls</th>
                        <th class="border border-dark text-center">Total</th>
                        <th class="border border-dark text-center">Prev</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th class="border border-dark ps-1">Normal</th>
                        <td class="border border-dark text-center">Boys 0-23 mos.</td>
                        <td class="border border-dark text-center">Girls 0-23 mos.</td>
                        <td class="border border-dark text-center">Total 0-23 mos.</td>
                        <td class="border border-dark text-center">Prev 0-23 mos. (%)</td>
                        <td class="border border-dark text-center">Boys 0-59 mos.</td>
                        <td class="border border-dark text-center">Girls 0-59 mos.</td>
                        <td class="border border-dark text-center">Total 0-59 mos.</td>
                        <td class="border border-dark text-center">Prev 0-59 mos. (%)</td>
                    </tr>
                    <tr>
                        <th class="border border-dark ps-1">Tall</th>
                        <td class="border border-dark text-center">Boys 0-23 mos.</td>
                        <td class="border border-dark text-center">Girls 0-23 mos.</td>
                        <td class="border border-dark text-center">Total 0-23 mos.</td>
                        <td class="border border-dark text-center">Prev 0-23 mos. (%)</td>
                        <td class="border border-dark text-center">Boys 0-59 mos.</td>
                        <td class="border border-dark text-center">Girls 0-59 mos.</td>
                        <td class="border border-dark text-center">Total 0-59 mos.</td>
                        <td class="border border-dark text-center">Prev 0-59 mos. (%)</td>
                    </tr>
                    <tr>
                        <th class="border border-dark ps-1">Stunted</th>
                        <td class="border border-dark text-center">Boys 0-23 mos.</td>
                        <td class="border border-dark text-center">Girls 0-23 mos.</td>
                        <td class="border border-dark text-center">Total 0-23 mos.</td>
                        <td class="border border-dark text-center">Prev 0-23 mos. (%)</td>
                        <td class="border border-dark text-center">Boys 0-59 mos.</td>
                        <td class="border border-dark text-center">Girls 0-59 mos.</td>
                        <td class="border border-dark text-center">Total 0-59 mos.</td>
                        <td class="border border-dark text-center">Prev 0-59 mos. (%)</td>
                    </tr>
                    <tr>
                        <th class="border border-dark ps-1">Severely Stunted</th>
                        <td class="border border-dark text-center">Boys 0-23 mos.</td>
                        <td class="border border-dark text-center">Girls 0-23 mos.</td>
                        <td class="border border-dark text-center">Total 0-23 mos.</td>
                        <td class="border border-dark text-center">Prev 0-23 mos. (%)</td>
                        <td class="border border-dark text-center">Boys 0-59 mos.</td>
                        <td class="border border-dark text-center">Girls 0-59 mos.</td>
                        <td class="border border-dark text-center">Total 0-59 mos.</td>
                        <td class="border border-dark text-center">Prev 0-59 mos. (%)</td>
                    </tr>
                    <tr class="border border-0">
                        <th colspan="9" rowspan="2" class="pt-4">
                            <h7 class="fw-semibold mb-0">WEIGHT FOR LENGHT/HEIGHT</h7>
                        </th>
                    </tr>
                </tbody>
                <thead class="w-100 border-2">
                    <tr class="w-100">
                        <th class="border border-dark text-center bg-primary" rowspan="2"></th>
                        <th class="border border-dark text-center bg-dark-subtle text-white" colspan="4">0-23 months (F1K)</th>
                        <th class="border border-dark text-center bg-primary text-white" colspan="4">0-59 Months</th>
                    </tr>
                    <tr>
                        <th class="border border-dark text-center">Boys</th>
                        <th class="border border-dark text-center">Girls</th>
                        <th class="border border-dark text-center">Total</th>
                        <th class="border border-dark text-center">Prev</th>
                        <th class="border border-dark text-center">Boys</th>
                        <th class="border border-dark text-center">Girls</th>
                        <th class="border border-dark text-center">Total</th>
                        <th class="border border-dark text-center">Prev</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th class="border border-dark ps-1">Normal</th>
                        <td class="border border-dark text-center">Boys 0-23 mos.</td>
                        <td class="border border-dark text-center">Girls 0-23 mos.</td>
                        <td class="border border-dark text-center">Total 0-23 mos.</td>
                        <td class="border border-dark text-center">Prev 0-23 mos. (%)</td>
                        <td class="border border-dark text-center">Boys 0-59 mos.</td>
                        <td class="border border-dark text-center">Girls 0-59 mos.</td>
                        <td class="border border-dark text-center">Total 0-59 mos.</td>
                        <td class="border border-dark text-center">Prev 0-59 mos. (%)</td>
                    </tr>
                    <tr>
                        <th class="border border-dark ps-1">Tall</th>
                        <td class="border border-dark text-center">Boys 0-23 mos.</td>
                        <td class="border border-dark text-center">Girls 0-23 mos.</td>
                        <td class="border border-dark text-center">Total 0-23 mos.</td>
                        <td class="border border-dark text-center">Prev 0-23 mos. (%)</td>
                        <td class="border border-dark text-center">Boys 0-59 mos.</td>
                        <td class="border border-dark text-center">Girls 0-59 mos.</td>
                        <td class="border border-dark text-center">Total 0-59 mos.</td>
                        <td class="border border-dark text-center">Prev 0-59 mos. (%)</td>
                    </tr>
                    <tr>
                        <th class="border border-dark ps-1">Stunted</th>
                        <td class="border border-dark text-center">Boys 0-23 mos.</td>
                        <td class="border border-dark text-center">Girls 0-23 mos.</td>
                        <td class="border border-dark text-center">Total 0-23 mos.</td>
                        <td class="border border-dark text-center">Prev 0-23 mos. (%)</td>
                        <td class="border border-dark text-center">Boys 0-59 mos.</td>
                        <td class="border border-dark text-center">Girls 0-59 mos.</td>
                        <td class="border border-dark text-center">Total 0-59 mos.</td>
                        <td class="border border-dark text-center">Prev 0-59 mos. (%)</td>
                    </tr>
                    <tr>
                        <th class="border border-dark ps-1">Severely Stunted</th>
                        <td class="border border-dark text-center">Boys 0-23 mos.</td>
                        <td class="border border-dark text-center">Girls 0-23 mos.</td>
                        <td class="border border-dark text-center">Total 0-23 mos.</td>
                        <td class="border border-dark text-center">Prev 0-23 mos. (%)</td>
                        <td class="border border-dark text-center">Boys 0-59 mos.</td>
                        <td class="border border-dark text-center">Girls 0-59 mos.</td>
                        <td class="border border-dark text-center">Total 0-59 mos.</td>
                        <td class="border border-dark text-center">Prev 0-59 mos. (%)</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <br>
            <div>
                <table>
                    <tbody>
                        <tr class="border border-dark border-2">
                            <th class="border border-dark border-2 p-2">TOTAL NUMBER OF MOTHERS/CAREGIVER<br> OF CHILDREN (0-59 MOS. OLD) AFFECTED <br>BY UNDERNUTRITION</th>
                            <td class="border border-dark text-center p-2">number of caregivers<br> of children0-59mos<br> affected</td>
                        </tr>
                        <tr class="border border-dark border-2">
                            <th class="border border-dark border-2 p-2">TOTAL NUMBER OF MOTHERS/CAREGIVER<br> OF CHILDREN (0-23 MOS. OLD) AFFECTED <br>BY UNDERNUTRITION</th>
                            <td class="border border-dark text-center p-2">number of caregivers<br> of children0-23mos<br> affected</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    include 'footer.php';
?>