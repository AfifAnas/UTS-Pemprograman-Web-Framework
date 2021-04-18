<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>/assets/img/dragonball-icon.png" rel="icon">
    <link href="<?= base_url() ?>/assets/img/dragonball-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo"><a href="/"> </style></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/" class="logo"><img src="<?= base_url() ?>/assets/img/ptik-Logo.png" alt="" class="img-fluid"></a>

            <nav class="nav-menu d-none d-lg-block">

                <ul>
                    <li class="active"><a href="<?= base_url('/'); ?>">Home</a></li>

                    <li><a href="<?= base_url('/pages/fasilitas'); ?>">Fasilitas</a></li>
                    <li><a href="<?= base_url('/pages/galeri'); ?>">Galeri</a></li>
                    <li><a href="<?= base_url('/pages/profil'); ?>">Profil</a></li>
                    <li><a href="<?= base_url('/pages/contact'); ?>">Contact</a></li>
                    <li><a href="<?= base_url('/pages/about'); ?>">About Us</a></li>

                </ul>

            </nav><!-- .nav-menu -->

            <a href="/" class="get-started-btn ml-auto">Get Started</a>

        </div>
    </header><!-- End Header -->

    <?= $this->renderSection('content'); ?>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>PTIK UNS</h3>
                            <p>
                                Jl. A. Yani No.200, Dusun II, Makamhaji, Kartosuro, Sukoharjo <br>
                                57161, Jawa Tengah<br><br>
                                <strong>Phone:</strong> +62 896 4887 1219<br>
                                <strong>Email:</strong> ptik.uns.ac.id<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="copyright">
                            &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>/assets/js/main.js"></script>

</body>

</html>