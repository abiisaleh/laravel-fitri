<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
    <x-navbar :kontak="$site['kontak']" />

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">

                        <h1>Panti Sosial Asuhan Anak <span>{{ config('app.name') }}</span></h1>
                        <p>
                            Masa Depan Cerah untuk Setiap Anak
                        </p>
                        <div class="d-flex">
                            <a href="#footer" class="btn-get-started">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">
            <div class="container">
                <div class="row gy-4">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($site['fasilitas'] as $fasilitas)
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="">{{ $i++ }}</i></div>
                                <h4><a href="" class="stretched-link">{{ $fasilitas['judul'] }}</a></h4>
                                <p>
                                    {{ $fasilitas['deskripsi'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /Featured Services Section -->

        <!-- About Section -->
        <section id="about" class="about section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Profil</h2>
                <p>
                    <span class="description-title">Visi dan Misi</span>
                    <span>Kami</span>
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-3">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/about.jpg" alt="" class="img-fluid" />
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="about-content ps-0 ps-lg-3">
                            <h3>
                                {{ $site['profil']['visi'] }}
                            </h3>
                            <ul>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($site['profil']['misi'] as $misi)
                                    <li>
                                        <i>{{ $i++ }}</i>
                                        <div>
                                            <h4>{{ $misi['isi'] }}</h4>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                            <p>
                                Dukung kami melalui donasi Anda untuk meningkatkan fasilitas pendidikan dan
                                memberikan beasiswa bagi santri yang kurang mampu. Jazakumullah Khairan atas kontribusi
                                dan dukungan Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Services Section -->
        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kegiatan</h2>
                <p>
                    <span>Cek </span>
                    <span class="description-title">Dokumentasi kegiatan</span> kami
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($site['layanan'] as $layanan)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative py-4">
                                <div class="flex">
                                    <img src="/storage/{{ $layanan['gambar'] }}" class="img-fluid" alt="gambar kegiatan"
                                        width="100%">
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>{{ $layanan['judul'] }}</h3>
                                </a>
                                <p>
                                    {{ $layanan['deskripsi'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- /Services Section -->

        <!-- Team Section -->
        <section id="team" class="team section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>
                    <span>Struktur</span>
                    <span class="description-title">Organisasi</span>
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    @foreach ($site['team'] as $team)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="assets/img/team/{{ $team['gambar'] ?? 'team.webp' }}" class="img-fluid"
                                        alt="" />
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{ $team['nama'] }}</h4>
                                    <span>{{ $team['jabatan'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /Team Section -->

    </main>

    <x-footer :kontak="$site['kontak']" />

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
