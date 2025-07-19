<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $website_settings['site.company_name']->value }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <!-- Favicons -->
    <link href="{{ Voyager::image($website_settings['site.logo']->value) }}" type="image/x-icon" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: BizLand
    * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:{{ $website_settings['site.email']->value }}">{{ $website_settings['site.email']->value }}</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ $website_settings['site.phone_number']->value }}</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="{{ $website_settings['site.twitter']->value }}" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="{{ $website_settings['site.facebook']->value }}" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="{{ $website_settings['site.instagram']->value }}" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="{{ $website_settings['site.linkeid']->value }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-center">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">{{ $website_settings['site.company_name']->value }}</h1>
            </a>

            <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#services">Layanan Kami</a></li>
                <li><a href="#portfolio">Portofolio</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>

        </div>

    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section light-background" style="background: {{ $website_settings['site.hero_image']->value
            ? 'url(' . Voyager::image($website_settings['site.hero_image']->value) . ')'
            : 'url(assets/img/hero-bg.jpg)' }} center center no-repeat; background-size: cover; min-height: 75vh;">
            <div class="container">
                <div class="row gy-4">
                <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1>{{ $website_settings['site.company_name']->value }}</h1>
                    <h3>{{ $website_settings['site.hero_tagline']->value }}</h3>
                    <p>{{ $website_settings['site.hero_description']->value }}</p>
                    <div class="text-center text-lg-start">
                    <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Get Started</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>
                </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <!-- Featured Services Section -->

        <!-- About Section -->
        <section id="about" class="about section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Tentang Kami</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-3">

                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ Voyager::image($website_settings['site.hero_image']->value) }}" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="about-content ps-0 ps-lg-3">
                            <h3>{{ $website_settings['site.company_name']->value }}</h3>
                            <p class="fst-italic">
                                {!!  $website_settings['site.about_us']->value !!}
                            </p>
                            <ul>
                                <li>
                                <i class="bi bi-diagram-3"></i>
                                <div>
                                    <h4>Visi</h4>
                                    <p>{!!  $website_settings['site.visi']->value !!}</p>
                                </div>
                                </li>
                                <li>
                                <i class="bi bi-fullscreen-exit"></i>
                                <div>
                                    <h4>Misi</h4>
                                    <p>{!!  $website_settings['site.misi']->value !!}</p>
                                </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan</h2>
                <p><span>Lihat</span> <span class="description-title">Layanan Kami</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    @foreach($services as $service)
                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <div class="image">
                                    <img src="{{ asset('storage/' . $service->ikon) }}" alt="{{ $service->nama }}" class="img-fluid">
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>{{ $service->nama }}</h3>
                                </a>
                                <p>{{ $service->deskripsi }}</p>
                            </div>
                        </div><!-- End Service Item -->
                    @endforeach

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="services section">

        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h2>Mengapa Kami?</h2>
            <p><span>Alasan</span> <span class="description-title">Mengapa Memilih PT. Cahaya Guntur Berlian</span></p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">

            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                <div class="icon">
                    <i class="bi bi-people"></i>
                </div>
                <a href="#" class="stretched-link">
                    <h3>Tenaga Profesional</h3>
                </a>
                <p>Tim kami terdiri dari tenaga kerja terlatih dalam konstruksi, keamanan, kebersihan, dan operasional lapangan.</p>
                </div>
            </div><!-- End Why Us Item -->

            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                <div class="icon">
                    <i class="bi bi-shield-check"></i>
                </div>
                <a href="#" class="stretched-link">
                    <h3>Komitmen & Integritas</h3>
                </a>
                <p>Kami menjunjung tinggi kepercayaan, kejujuran, dan tanggung jawab dalam setiap proyek yang kami kerjakan.</p>
                </div>
            </div><!-- End Why Us Item -->

            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                <div class="icon">
                    <i class="bi bi-tools"></i>
                </div>
                <a href="#" class="stretched-link">
                    <h3>Peralatan & Armada Lengkap</h3>
                </a>
                <p>Kami menyediakan layanan sewa alat berat dan kendaraan proyek untuk mendukung kelancaran operasional Anda.</p>
                </div>
            </div><!-- End Why Us Item -->

            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                <div class="icon">
                    <i class="bi bi-lightning-charge"></i>
                </div>
                <a href="#" class="stretched-link">
                    <h3>Respon Cepat</h3>
                </a>
                <p>Kami siap menangani permintaan secara cepat dan tanggap untuk memastikan kebutuhan proyek Anda terpenuhi tepat waktu.</p>
                </div>
            </div><!-- End Why Us Item -->

            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item position-relative">
                <div class="icon">
                    <i class="bi bi-graph-up-arrow"></i>
                </div>
                <a href="#" class="stretched-link">
                    <h3>Efisiensi & Produktivitas</h3>
                </a>
                <p>Kami membantu meningkatkan efisiensi kerja melalui layanan yang andal, cepat, dan terintegrasi.</p>
                </div>
            </div><!-- End Why Us Item -->

            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item position-relative">
                <div class="icon">
                    <i class="bi bi-award"></i>
                </div>
                <a href="#" class="stretched-link">
                    <h3>Terpercaya & Berpengalaman</h3>
                </a>
                <p>Didukung pengalaman bertahun-tahun dan kepercayaan klien dari berbagai sektor industri dan proyek.</p>
                </div>
            </div><!-- End Why Us Item -->

            </div>
        </div>

        </section><!-- End Why Us Section -->
        
        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portofolio</h2>
                <p><span>Lihat </span> <span class="description-title">Portofolio Kami</span></p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach($projects as $portfolio)
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('storage/' . $portfolio->gambar) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $portfolio->judul }}</h4>
                                <p>{{ $portfolio->deskripsi }}</p>
                            </div>
                        </div><!-- End Portfolio Item -->
                        @endforeach
                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>KONTAK</h2>
                <p><span>Butuh Bantuan?</span> <span class="description-title">Hubungi Kami</span></p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                <div class="col-lg-5">

                    <div class="info-wrap">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                        <h3>Alamat</h3>
                        <p>{{ $website_settings['site.company_address']->value }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                        <h3>Hubungi Kami</h3>
                        <p>{{ $website_settings['site.phone_number']->value }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                        <h3>Email Kami</h3>
                        <p>{{ $website_settings['site.email']->value }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <iframe src="{{ $website_settings['site.company_maps']->value }}" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6">
                        <label for="name-field" class="pb-2">Nama</label>
                        <input type="text" name="name" id="name-field" class="form-control" required="">
                        </div>

                        <div class="col-md-6">
                        <label for="email-field" class="pb-2">Email</label>
                        <input type="email" class="form-control" name="email" id="email-field" required="">
                        </div>

                        <div class="col-md-12">
                        <label for="subject-field" class="pb-2">Subjek</label>
                        <input type="text" class="form-control" name="subject" id="subject-field" required="">
                        </div>

                        <div class="col-md-12">
                        <label for="message-field" class="pb-2">Pesan</label>
                        <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Pesan Anda telah dikirim. Terima kasih!</div>

                        <button type="submit">Kirim Pesan</button>
                        </div>

                    </div>
                    </form>
                </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">{{ $website_settings['site.company_name']->value }}</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p><strong>Address:</strong> <span>{{ $website_settings['site.company_address']->value }}</span></p>
                        <p class="mt-3"><strong>Phone:</strong> <span>{{ $website_settings['site.phone_number']->value }}</span></p>
                        <p><strong>Email:</strong> <span>{{ $website_settings['site.email']->value }}</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#services">Layanan</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Portofolio</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#contact">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        @foreach($services as $service)
                        <li><i class="bi bi-chevron-right"></i> <a href="#">{{ $service->nama }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="{{ $website_settings['site.twitter']->value }}"><i class="bi bi-twitter-x"></i></a>
                        <a href="{{ $website_settings['site.facebook']->value }}"><i class="bi bi-facebook"></i></a>
                        <a href="{{ $website_settings['site.instagram']->value }}"><i class="bi bi-instagram"></i></a>
                        <a href="{{ $website_settings['site.linkeid']->value }}"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">{{ $website_settings['site.company_name']->value }}</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>