<?php
include 'header.php';
?>

<body class="bg-light-gray">
    <div>
        <div class="flex d-flex flex-row justify-content-between mb-4">
            <div class="">
                <form action="navigate.php" method="post">
                    <button class="badge btn btn-primary rounded-1 fw-semibold p-2" name="btn-rankingExportPDF">
                        <span>
                            <i class="ti ti-download"></i>
                        </span>
                        <span class="hide-menu">Download</span>
                    </button>
                </form>
            </div>
        </div>
        <main class="card mb-5">
            <div class="card-body">
				<h5 class="card-title fw-semibold mb-4">Ranking of Weight for Age (WFA)</h5>
				<hr>
			</div>
            <div class="w-100 px-4 mt-3">
                <div class="flex d-flex flex-row w-100 text-center">
                    <div class="mt-4 ms-5">
                        <img src="../assets/images/logos/PHO logo.png" alt="NNC Logo" width="60px" height="60px">
                    </div>
                    <div class="w-100">
                        <div class="pe-5">
                            <div class="flex d-flex flex-column text-center w-100 pe-5">
                                <h7>Region: VIII Eastern Visayas</h7>
                                <h7 class="fw-semibold">Municipality: NAVAL</h7>
                                <h7>PROVINCE: BILIRAN</h7>
                                <!-- <h7>OPERATION TIMBANG PLUS year</h7> -->
                                <h7 class="fw-semibold">UNDERWEIGHT AND SEVERE UNDERWEIGHT</h7>
                                <h7>PREVALENCE AND NUMBER OF AFFECTED CHILDREN UNDER FIVE. BY BARANGAY</h7>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <div class="flex d-flex flex-row m-0 p-0">
                    <div class="ms-4 mt-3 p-0 w-100">
                        <p style="color: red;" class="fs-1 mb-0">Barangay ranked from highest to lowest prevalence (%) of Underweight + Severe Underweight.</p>
                    </div>
                    <div class="mt-3 me-4 p-0 pe-5 text-end w-100">
                        <p class="fs-2 fw-semibold mb-0"># of pages: no.</p>
                    </div>
                </div>
                <div class="mx-4">
                    <table class="w-100">
                        <thead class="w-100">
                            <tr class="w-100">
                                <th class="border border-dark text-center" rowspan="2">Rank*</th>
                                <th class="border border-dark text-center" rowspan="2">Barangay</th>
                                <th class="border border-dark text-center" rowspan="2">0-59 Months OPT Coverage</th>
                                <th class="border border-dark text-center" colspan="3">Weigth for Age</th>
                            </tr>
                            <tr>
                                <th class="border border-dark text-center">Normal (%)</th>
                                <th class="border border-dark text-center">Underweight + Severely <br> Underweight (%)</th>
                                <th class="border border-dark text-center">Number of <br> Underweight + Severely <br> Underweight</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-dark text-center"> rank</td>
                                <td class="border border-dark text-center"> barangay</td>
                                <td class="border border-dark text-center"> 0-59 mos. OPT coverage</td>
                                <td class="border border-dark text-center"> Normal (prevalence)</td>
                                <td class="border border-dark text-center"> UW + SUW (prevalence)</td>
                                <td class="border border-dark text-center"> * of UW + SUW</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        

<?php
include 'footer.php';
?>