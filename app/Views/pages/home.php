<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>PTIK UNS</span></h2>
                        <p class="animate__animated animate__fadeInUp">Prodi yang menghimpun mahasiswa dengan disiplin ilmu teknik Informatika dan pendidikan.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Sejarah PTIK UNS</h2>
                        <p class="animate__animated animate__fadeInUp">Latar belakang dibentuk program studi PTIK di UNS.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Pendidikan Vokasi, tapi Sarjana</h2>
                        <p class="animate__animated animate__fadeInUp"> Kurikulum yang digunakan pada PTIK kurang lebih sama dengan vokasi Informatika, namun mahasiswa kami bergelar sarjana.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row content">
                <div class="col-lg-6">
                    <h2>PROGRAM STUDI S-1</h2>
                    <h3>Pendidikan Teknik Informatika dan Komputer</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Program studi Pendidikan Teknologi Informatika dan Komputer (PTIK) direncanakan bernaung dalam pengelolaan
                        jurusan Pendidikan Teknik Informatika dan Komputer (PTIK). Penempatan ini merevisi pernyataan kami sebelumnya,
                        dimana program studi PTIK bernaung di bawah fakultas MIPA.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Pendidikan Vokasi yang menghasilkan guru TIK berkompeten</li>
                        <li><i class="ri-check-double-line"></i> Keilmuan tidak hanya dari IT, namun juga pendidikan</li>
                        <li><i class="ri-check-double-line"></i> Lulusan dapat bekerja di instansi dalam sektor IT</li>
                    </ul>
                    <p class="font-italic">
                        "Technology will not replace great teachers but technology in the hands of great teachers can be transformational"
                        -George Couros-
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Bidang</h2>
                <p>Disiplin ilmu yang dipelajari</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="icofont-computer"></i>
                        <h4><a href="#">Pemprograman</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-chart-bar-graph"></i>
                        <h4><a href="#">Machine Learning</a></h4>
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-image"></i>
                        <h4><a href="#">Desain Grafis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-settings"></i>
                        <h4><a href="#">Videografi</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-earth"></i>
                        <h4><a href="#">Jaringan Komputer</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-tasks-alt"></i>
                        <h4><a href="#">Pendidikan Vokasi</a></h4>
                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->
    <?= $this->endSection(); ?>