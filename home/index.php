<?php
include "navbar.php";
?>
<main class="w-100">
    <section>
    <div class="row mx-auto py-1 px-5 bg-light-info justify-content-around shadow-sm">
        <div class="col-md-6 mt-2 mb-1 text-md-center">
            <a href="#" style="color: black; text-decoration: none;">
                <img src="../assets/images/logos/Biliran-Provincial-Seal.png" alt="BILIRAN Logo" width="50" class="img">
                <span class="mx-2">Province of Biliran</span>
            </a>
        </div>
        <div class="col-md-6 mt-2 mb-2 text-md-center">
            <a href="http://www.gov.ph/" style="color: black; text-decoration: none;">
                <img src="../assets/images/logos/govph.png" alt="GOV Logo" width="40" class="img">
                <span class="mx-2">GOV PH</span>
            </a>
        </div>
    </div>
    </section>
    <section id="home" class=" px-4">
    <!-- style="background-color: #325d99;" -->
        <div class="container mt-5">
            <div class="row my-5">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner rounded-2">
                        <div class="carousel-item active">
                            <img src="../assets/images/carousels/img1.jpg" class="d-block w-100 feed" alt="..." height="600" style="object-fit: cover;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white">Biliran Province</h5>
                                <p>Feeding Programs</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/carousels/img2.jpg" class="d-block w-100 feed" alt="..." height="600" style="object-fit: cover;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white">Biliran Province</h5>
                                <p>Feeding Programs</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/carousels/img3.jpg" class="d-block w-100 feed" alt="..." height="600" style="object-fit: cover;">
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
    </section>
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="pt-5">
                <h1 class="text-center">
                    About
                </h1>
            </div>
            <div class="row mb-5 text-center mx-auto pb-5">
                <div class="col-md-6 mt-5 pb-3">
                    <h3 style="color:seagreen">MISSION</h3>
                    <h6>A steward of health system, promoting equal health distribution among its citizens and prime mover of excellent and quality service in all Rural Health Units and Hospitals.</h6>
                </div>
                <div class="col-md-6 mt-5 pb-3">
                    <h3 style="color:seagreen">VISION</h3>
                    <h6>A province where communities can achieve their highest level of health.</h6>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="">
        <div class="container">
            <div class="pt-5">
                <h1 class="text-center">
                    Contact
                </h1>
            </div>
            <div class="row mb-5 text-center mx-auto">
                <div class="col-md-6 mt-5">
                    <h3>Email</h3>
                    <h6><a href="https://biliranpho@gmail.com">biliranpho@gmail.com</a></h6>
                </div>
                <div class="col-md-6 mt-5">
                    <h3>Telephone No.</h3>
                    <h6>500-9918</h6>
                </div>
            </div>
            <div></div>
        </div>
    </section>

</main>
<?php
include 'footer.php';
?>