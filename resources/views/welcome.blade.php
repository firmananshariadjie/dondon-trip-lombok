<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Dondon Trip Lombok | Landing Page</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png"> -->
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png"> -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <!-- <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png"> -->
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <!-- <link href="vendors/plyr/plyr.css" rel="stylesheet"> -->
    <link href="assets/css/theme.css" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="#"> <img class="d-inline-block align-top img-fluid img-thumbnail rounded-circle" src="img/dondon-trip.png" alt="" width="50" /><span class="text-primary fs-4 ps-2">Dondon Trip Lombok</span></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-600" href="#places">Trip</a></li>
                        <li class="nav-item"><a class="nav-link text-600" href="#gallery">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link text-600" href="#booking">Booking </a></li>
                    </ul>
                    <form class="ps-lg-5">
                        <a href="/admin">Admin</a>
                    </form>
                </div>
            </div>
        </nav>
        <section class="py-0">
            <div class="bg-holder d-none d-md-block" style="background-image:url(img/dondon-trip.png);background-position:right bottom;background-size:contain;">
            </div>
            <!--/.bg-holder-->

            <div class="container position-relative">
                <div class="row align-items-center min-vh-75 my-lg-8">
                    <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
                        <h1 class="mb-4 display-1 lh-sm">Dondon Trip Lombok</h1>
                        <p class="mt-4 mb-5 fs-1 lh-base">Lagi cape, butuh hiburan? Ayo ke Dondon Trip Lombok ! <br class="d-none d-lg-block" />Berbagai Trip menarik dan Jasa kami sediakan disini. <br class="d-none d-lg-block" />Pesan Sekarang</p><a class="btn btn-lg btn-success hover-top" href="#" role="button">WhatsApp Me</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="places">

            <div class="container">
                <div class="row flex-md-center">
                    <div class="col-md-11 col-lg-4 py-md-3 px-4 px-md-3 px-lg-0 px-xl-2 order-lg-1">
                        <h1 class="fw-bold fs-md-3 fs-xl-5">Berbagai alat surfing dan trip disekitar pantai dondon.</h1>
                        <hr class="text-primary my-4 my-lg-3 my-xl-4" style="height:3px; width:70px;" />
                        <p class="lh-lg">Etiam facilisis, sapien quis porta dignissim, orci nisi pharetra dui, varius vehicula ligula nulla sit amet lorem. Aenean in vestibulum quam. Cras commodo varius neque, non gravida diam ultrices nec. Cras nulla mauris, fermentum nec libero in.</p><a class="btn btn-lg btn-primary hover-top" href="#" role="button">More</a>
                    </div>
                    <div class="col-lg-8 order-lg-0 order-1 px-4 px-md-3 py-8 py-md-3">
                        <div class="carousel slide" id="carouselExampleControlsNoTouching" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row h-100">
                                        <!-- LOOP -->
                                        @foreach($produk as $p)
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100 text-white hover-top"><img class="img-fluid h-100" src="{{ $p->gambar }}" alt="" />
                                                <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-dark-gradient">
                                                    <div class="pt-3"><span class="badge bg-primary">Rp. {{ $p->harga_produk }}</span></div>
                                                    <div class="ps-3 d-flex justify-content-between align-items-center">
                                                        <h5 class="text-white">{{ $p->nama_produk }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="gallery">

            <div class="container">
                <div class="row flex-center mb-5">
                    <div class="col-lg-8 text-center">
                        <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Gallery</h1>
                        <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />
                        <p class="mx-auto">Aliquam sodales vitae ex tincidunt consectetur. Etiam eleifend malesuada magna, at imperdiet justo euismod eu. Aliquam vel imperdet mi, et convallis eros. Duis fermentum fringilla nisl at vulputate. Nunc nec lorem faucibus, molestie nisi id, elementum sem. Sed vulputate tempor augue a efficitur urna, ultrices eu. Duis vel turpis et arcu.</p>
                    </div>
                </div>
                <div class="row flex-center">
                    <div class="col-12">
                        <div class="carousel slide" id="carouselExampleIndicators" data-bs-touch="false" data-bs-interval="false">
                            <div class="row align-items-center">
                                <div class="col-12 col-xxl-7 px-2">
                                    <div class="row align-items-center">
                                        <div class="col align-items-center      ">
                                            One of three columns
                                        </div>
                                        <div class="col">
                                            One of three columns
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section id="booking">
            <div class="bg-holder" style="background-image:url(assets/img//gallery/booking.png);background-position:center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row">
                    <div class="col-12 py-8 text-white">
                        <div class="d-flex flex-column flex-center">
                            <h2 class="text-white fs-2 fs-md-3">KAMI TUNGGU ANDA DISINI</h2>
                            <!-- <h1 class="text-white fs-2 fs-sm-4 fs-lg-7 fw-bold">Enjoy 30% Off On First Trip</h1> -->
                        </div>
                        <div class="row align-items-center">
                            <div class="col align-items-center      ">
                                One of three columns
                            </div>
                            <div class="col">
                                One of three columns
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-6">

            <div class="container">
                <div class="row flex-center">
                    <div class="col-auto mb-4">
                        <p class="mb-0 fs--1 text-dark">&copy; Copy right Dondon Trip Lombok</p>
                    </div>
                </div>
                <div class="row flex-center">
                    <div class="col-auto">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item me-3"><a class="text-decoration-none" href="#!">
                                    <svg class="bi bi-tiktok" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"></path>
                                    </svg></a></li>
                            <li class="list-inline-item me-3"><a class="text-decoration-none" href="#!">
                                    <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3984F3" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                    </svg></a></li>
                            <li class="list-inline-item me-3"><a href="#!">
                                    <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3984F3" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"> </path>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <!-- <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/plyr/plyr.polyfilled.min.js"></script> -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
</body>

</html>