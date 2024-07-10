<!doctype html>
<html lang="zxx" class="theme-light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/imagelightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>ClubAnglais - Work Hard - Play Hard - Learn English - Have Fun </title>
</head>

<body>
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="loader">
            <div class="wrapper">
                <div class="circle circle-1"></div>
                <div class="circle circle-1a"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-3"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <!-- Include your navbar code here -->
        @include('partials.navbar')
    </div>
    <!-- End Navbar Area -->

    @yield('content')
    <!-- Start Footer Area -->
    <section class="footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="white-bg">
                            <h2 class="ca-logo big-logo-size"><span class="ca-logo-club">Club</span><span
                                    class="ca-logo-anglais">Anglais</span></h2>
                            <div class="catchphrase">
                                <span>Work Hard</span>
                                <span>Play Hard</span>
                                <span>Learn English</span>
                                <span>Have Fun</span>
                            </div>
                        </div>




                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Contact Us</h3>

                        <ul class="footer-contact-info">
                            <li>
                                <i class='bx bxs-phone'></i>
                                <span>Phone</span>
                                <a href="tel:882569756">+216 20 909 757</a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <span>Email</span>
                                <a href="mailto:clubanglais.marsa@gmail.com">clubanglais.marsa@gmail.com</a>
                            </li>
                            <li>
                                <i class='bx bx-map'></i>
                                <span>Address</span>
                                3 Avennue Farhat Hached, La Marsa,Tunisia 2070
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget pl-5">
                        <h3>Explore</h3>

                        <ul class="quick-links">
                            <li>
                                <a href="/">Home </a>
                            </li>
                            <li>
                                <a href="pk1">PK1 </a>
                            </li>
                            <li>
                                <a href="pk2">PK2 </a>
                            </li>
                            <li>
                                <a href="pk3">PK3 </a>
                            </li>
                            <li>
                                <a href="pk4">PK4 </a>
                            </li>
                            <li>
                                <a href="{{ url('/preschool-club') }}">
                                    Preschool club
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/adventure-club') }}">
                                    Adventure club
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('/summer-camp') }}">
                                    Power camp
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/preschool-camp') }}">
                                    Preschool camp
                                </a>
                            </li>
                            <li>
                                <a href="contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Photo Gallery</h3>

                        <ul class="photo-gallery-list">
                            <li>
                                <div class="box">
                                    <img src="assets/img/clubanglais/DSCF1552-2.jpg" alt="image">
                                </div>
                            </li>

                            <li>
                                <div class="box">
                                    <img src="assets/img/clubanglais/DSCF4577-2.jpg" alt="image">
                                </div>
                            </li>

                            <li>
                                <div class="box">
                                    <img src="assets/img/clubanglais/DSCF4579-2.jpg" alt="image">
                                </div>
                            </li>

                            <li>
                                <div class="box">
                                    <img src="assets/img/clubanglais/DSCF4582-2.jpg" alt="image">
                                </div>
                            </li>

                            <li>
                                <div class="box">
                                    <img src="assets/img/clubanglais/DSCF4728-2.jpg" alt="image">
                                </div>
                            </li>

                            <li>
                                <div class="box">
                                    <img src="assets/img/clubanglais/DSCF4870-2.jpg" alt="image">
                                </div>
                            </li>

                            <li>
                                <div class="box">
                                    <img src="assets/img/clubanglais/DSCF4982-2.jpg" alt="image">
                                </div>
                            </li>

                            <li>
                                <div class="box">
                                    <img src="assets/img/clubanglais/DSCF5123-2.jpg" alt="image">
                                </div>
                            </li>

                            <li>
                                <div class="box">
                                    <img src="assets/img/clubanglais/DSCF8368-2.jpg" alt="image">
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Footer Area -->

    <!-- Start Copy Right Area -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright
                    <script>
                        document.write(new Date().getFullYear())
                    </script>

                    <span class="ca-logo"><span class="ca-logo-club">Club</span><span
                            class="ca-logo-anglais">Anglais</span>
                    </span> All Rights Reserved.

            </div>
        </div>
    </div>
    <!-- End Copy Right Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class='bx bx-up-arrow-alt'></i>
    </div>
    <!-- End Go Top Area -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagelightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
