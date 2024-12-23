<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Booking | Home</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  {{-- <link href="assets_landing/img/favicon.png" rel="icon"> --}}
  <link rel="icon" href="images/model2.jpg" type="image/x-icon">
  <link href="assets_landing/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets_landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets_landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets_landing/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets_landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets_landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets_landing/css/main.css" rel="stylesheet">

  <!-- ====================================================
  * Template Name: Zulkarnain
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets_landing/img/logo.png" alt=""> -->
        <h1 class="sitename">Booking</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          {{-- <li><a href="#menu">Menu</a></li> --}}
          <li><a href="#events">Events</a></li>
          {{-- <li><a href="#chefs">Chefs</a></li> --}}
          <li><a href="#gallery">Gallery</a></li>
       
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <div>
      <a class="btn-getstarted" href="/register">Register</a>
      <a class="btn-getstarted" href="/login">Login</a>
    </div>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Pesan Lapangan Basket<br>Favoritmu Sekarang Juga!</h1>
            <p data-aos="fade-up" data-aos-delay="100">Nikmati pengalaman bermain basket dengan mudah dan cepat. Pilih jadwal sesuai keinginan!</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="/login" class="btn-get-started">Booking Sekarang</a>
                  </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="images/model2.jpg" style="width: 310px" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami<br></h2>
        <p><span>Pelajari lebih banyak</span> <span class="description-title">Tentang Kami</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="images/lapangan2.jpg" style="height: 590px; width: 800px; background-size: cover;" class="img-fluid mb-4" alt="">
            {{-- <div class="book-a-table">
              <h3>Book a Table</h3>
              <p>+1 5589 55488 55</p>
            </div> --}}
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Nikmati pengalaman bermain basket yang menyenangkan dan mudah. Pilih jadwal lapangan basket favoritmu dan lakukan booking sekarang!
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Booking lapangan basket dengan cepat dan mudah kapan saja.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Jadwal fleksibel sesuai dengan kebutuhanmu, pilih yang terbaik!</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Proses pemesanan yang mudah dan aman, jaminan kenyamanan bermain basket.</span></li>
              </ul>
              <p>
                Segera lakukan pemesanan untuk mendapatkan tempat di lapangan basket favoritmu. Nikmati bermain dengan teman-teman tanpa khawatir kehabisan jadwal.
              </p>
              

              <div class="position-relative mt-4">
                <img src="images/lapangan3.jpg" style="height: 290px; width: 400px; background-size: cover;" class="img-fluid" alt="">
                {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> --}}
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->


    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

      <img src="images/lapangan4.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="2" class="purecounter"></span>
              <p>Lapangan</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="343" data-purecounter-duration="2" class="purecounter"></span>
              <p>Di Booking</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="353" data-purecounter-duration="2" class="purecounter"></span>
              <p>Jam Dibooking</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end=" 2" data-purecounter-duration="2" class="purecounter"></span>
              <p>Pekerja</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>TESTIMONI</h2>
        <p>Apa yang Mereka <span class="description-title">Katakan Tentang Kami</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            {{-- @if($ulasan && $ulasan->count() > 0)
            @foreach ($ulasan as $item) --}}
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Lapangan ini sangat nyaman untuk bermain. Permukaannya rapi dan terawat, sehingga aktivitas olahraga menjadi lebih menyenangkan!</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Andi Setiawan, </h3>
                      <h4>Atlet Sepak Bola</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets_landing/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            @if($lapangan && $lapangan->count() > 0)
                @foreach ($lapangan as $item)
                    <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{ $item->gambar }})">
                        <h3>{{ $item->nama }}</h3>
                        <div class="price align-self-start">Rp. {{ $item->harga_per_jam }}</div>
                        <p class="description">
                            {{ $item->deskripsi }}
                        </p>
                    </div>
                @endforeach
            @else
                
            @endif
        </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Events Section -->


    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p><span>Coba Cek</span> <span class="description-title">Gallery Kami</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            @foreach ($gallery as $item)
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ $item->gambar }}"><img src="{{ $item->gambar }}" class="img-fluid" alt=""></a></div>

            @endforeach
                                 </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p><span>Butuh Info</span> <span class="description-title">Lokasi?</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.4723376846514!2d113.71479761108263!3d-8.155073381661891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6959c4d8e1183%3A0x98a9f86873349204!2sKIM%20SHOES%20STORE!5e0!3m2!1sen!2sid!4v1734268260330!5m2!1sen!2sid" frameborder="0" allowfullscreen=""></iframe>
        </div><!-- End Google Maps -->


     

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+62 83129556726</span><br>
              <strong>Email:</strong> <span>zakzakidzak@gmail.com</span><br>
            </p>
          </div>
        </div>

       

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="https://github.com/zulkarprk91" class="github"><i class="bi bi-github"></i></a>
            <a href="https://t.me/odet_91" class="telegram"><i class="bi bi-telegram"></i></a>
            <a href="https://www.youtube.com/@odet9171" class="youtube"><i class="bi bi-youtube"></i></a>
       
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">BookingLapangan</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Kelompok</a> 
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets_landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets_landing/vendor/php-email-form/validate.js"></script>
  <script src="assets_landing/vendor/aos/aos.js"></script>
  <script src="assets_landing/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets_landing/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets_landing/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets_landing/js/main.js"></script>

</body>

</html>