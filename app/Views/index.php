<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/styleNavbar.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/stylecard.css">

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand ne-auto" href="#">RuangAksara</a>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">RuangAksara</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 active" href="">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#rekomendasi">Rekomendasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Ekspresi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Beli</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" class="login-button">Mulai</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- hero section -->

    <section class="hero-section">
        <div class="container d-flex align-center justify-content-center fs-1 text-white flex-column">
            <h1>Selamat Datang di RuangAksara</h1>
            <h2>Salurkan semua ekspresimu dan temukan perasaan-perasaan dari sukma yang lain</h2>
            <br>
            <a href="#" class="galeri-button">Telusuri</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </section>
    <!-- end hero -->
    <br><br>
    <!-- card slider -->

    <section id="rekomendasi" class="mt-5 overflow-hidden">
        <div class="container position-relative">
            <div class="row mb-4">
                <div class="col-9">
                    <h4>
                        Rekomendasi >
                    </h4>
                </div>
                <div class="col-3">
                    <button class="button-rekomendasi">Lihat Semua</button>

                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-start">

                        <div class="card-rekomendasi me-3 position-relative">
                            <img src="images/landingpage/land1.jpeg" alt="" class="ms-2">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Pinterest</h5>
                                    <span>Chaleco Salvavidas</span>
                                    <h6>Free</h6>
                                    <button>Lihat Seni</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-rekomendasi me-3 position-relative">
                            <img src="images/landingpage/landd2.jpeg" alt="" class="ms-2">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Pinterest</h5>
                                    <span>Chaleco Salvavidas</span>
                                    <h6>Free</h6>
                                    <button>Lihat Seni</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-rekomendasi me-3 position-relative">
                            <img src="images/landingpage/land3.jpeg" alt="" class="ms-2">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Pinterest</h5>
                                    <span>Chaleco Salvavidas</span>
                                    <h6>Free</h6>
                                    <button>Lihat Seni</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-rekomendasi me-3 position-relative">
                            <img src="images/landingpage/land4.jpeg" alt="" class="ms-2">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Pinterest</h5>
                                    <span>Chaleco Salvavidas</span>
                                    <h6>Free</h6>
                                    <button>Lihat Seni</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-rekomendasi me-3 position-relative">
                            <img src="images/landingpage/land1.jpeg" alt="" class="ms-2">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Pinterest</h5>
                                    <span>Chaleco Salvavidas</span>
                                    <h6>Free</h6>
                                    <button>Lihat Seni</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <button class="button-arrow-left position-absolute start-8 top-50 translate-middle-y">
                <i class="fa-solid fa-arrow-left"></i>
            </button>

            <button class="button-arrow-left position-absolute start-8 top-50 translate-middle-y">
                <i class="fa-solid fa-arrow-right"></i>
            </button>

        </div>
    </section>

    <!-- end card slider -->









    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

<footer class="bg-light text-dark pt-5 pb-4">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">

            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold" style="color: #23486A;">Tentang Kami</h5>
                <hr class="mb-4">
                <p style="text-align: justify;">RuangAksara adalah tempat dimana semua orang bisa mengekspresikan dirinya melalui
                    tulisan-tulisan bahkan coretan-coretan.Di sini, setiap kata dan ide memiliki
                    ruang untuk tumbuh dan berkembang, memungkinkan siapa saja untuk berbagi pemikiran,
                    cerita, dan kreativitas mereka dengan bebas.
                </p>
            </div>

            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold" style="color: #23486A;">Tautan Halaman</h5>
                <hr class="mb-4">
                <p style="text-align: center;">
                    <a href="#" class="text-dark" style="text-decoration: none;">Galeri</a>
                </p>
                <p style="text-align: center;">
                    <a href="#" class="text-dark" style="text-decoration: none;">Seni Tulis</a>
                </p>
                <p style="text-align: center;">
                    <a href="#" class="text-dark" style="text-decoration: none;">Seni Lukis</a>
                </p>
                <p style="text-align: center;">
                    <a href="#" class="text-dark" style="text-decoration: none;">Ekspresi</a>
                </p>
            </div>


            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold" style="color: #23486A;">Ikuti Kami</h5>
                <hr class="mb-4">
                <p style="text-align: justify;">
                    <li class=" fa-solid fa-home mr-3">
                    </li>Kota Batu-Malang
                </p>
                <p style="text-align: justify;">
                    <li class=" fa-solid fa-envelope mr-3">
                    </li>sheiladsyandana
                </p>
                <p style="text-align: justify;">
                    <li class=" fa-solid fa-phone mr-3">
                    </li>+6287767064712
                </p>
                <p style="text-align: justify;">
                    <li class=" fa-solid fa-print mr-3">
                    </li>+6287767064712
                </p>
            </div>

            <hr class="mb-4">
            <div class="row d-flex justify-content-center">
                <div>
                    <p>
                        Copyright 2020 All Rights Reserved By :
                        <a href=" #" style="text-decoration: none;">
                            <strong class="text-info">The Providers</strong>
                        </a>
                    </p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class="fa-brands fa-google-plus"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class="fa-brands fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>