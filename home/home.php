<?php
include 'header.php';
?>

<body>
    
    <div class="row mx-auto px-5 shadow-sm phobg" style="background-image: url(../assets/images/backgrounds/gradient.jpg);">
        <div class="col-1 mt-4 mb-4"> 
            <a href="#"><img src="../assets/images/logos/PHO logo.png" alt="PHO Logo" width="100" class="img"></a>
        </div>
        <div class="col-10 text-white mt-5 ms-2">
            <p style="font-size: 30px; font-weight: 500;">Provincial Health Office</p>
        </div>
    </div>

    <div class="row mx-auto px-5 bg-light justify-content-around shadow-sm">
        <div class="col-4 mt-2 mb-1">
            <a href="#" style="color: black; text-decoration: none;">
                <img src="../assets/images/logos/Biliran-Provincial-Seal.png" alt="BILIRAN Logo" width="50" class="img">
                <span class="mx-2">Province of Biliran</span>
            </a>
        </div>
        <div class="col-4 mt-2 mb-2">
            <a href="#" style="color: black; text-decoration: none;">
                <img src="../assets/images/logos/govph.png" alt="GOV Logo" width="40" class="img">
                <span class="mx-2">GOV PH</span>
            </a>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row mt-5 mb-5">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner rounded-2">
                    <div class="carousel-item active">
                        <img src="../assets/images/carousels/img1.jpg" class="d-block w-100 feed" alt="..." height="600">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-white">Biliran Province</h5>
                            <p>Feeding Programs</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/images/carousels/img2.jpg" class="d-block w-100 feed" alt="..." height="600">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-white">Biliran Province</h5>
                            <p>Feeding Programs</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/images/carousels/img3.jpg" class="d-block w-100 feed" alt="..." height="600">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-white">Biliran Province</h5>
                            <p>Feeding Programs</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <hr class="mx-5 mt-3">

    <div class="container">
        <div class="row mt-5 mb-5 text-center mx-auto">
            <div class="col-6 mt-5 mb-5">
                <h3 style="color: green;">VISION</h3>
                <p>A province where communities can achieve their highest level of health.</p>
            </div>
            <div class="col-6 mt-5 mb-5">
                <h3 style="color: green;">MISSION</h3>
                <p>A steward of health system, promoting equal health distribution among its citizens and prime mover of excellent and quality service in all Rural Health Units and Hospitals.</p>
            </div>
        </div>
    </div>

    <footer class="footer-custom bg-light mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <img src="../assets/images/logos/govph-seal-mono-footer.jpg" alt="Seal" width="200">
                    <h6>REPUBLIC OF THE PHILIPPINES</h6>
                    <p>All content is in the public domain unless otherwise stated.</p>
                </div>
                <div class="col-md-4 footer-col">
                    <h6>ABOUT GOVPH</h6>
                    <i>Learn more about the Philippine government, its structure, how government works and the people behind it.</i>
                    <p class="mt-2">
                        <a href="#">GOV.PH</a><br>
                        <a href="#">Open Data Portal</a><br>
                        <a href="#">Official Gazette</a>
                    </p>
                </div>
                <div class="col-md-4 footer-col">
                    <h6>GOVERNMENT LINKS</h6>
                    <p>
                        <a href="#">Office of the President</a><br>
                        <a href="#">Office of the Vice President</a><br>
                        <a href="#">Senate of the Philippines</a><br>
                        <a href="#">House of Representatives</a><br>
                        <a href="#">Supreme Court</a><br>
                        <a href="#">Court of Appeals</a><br>
                        <a href="#">Sandiganbayan</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>