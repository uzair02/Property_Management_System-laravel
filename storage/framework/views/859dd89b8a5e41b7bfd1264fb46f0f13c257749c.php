<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('assets/auth/images/fevi.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="#">PMS</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>Admin</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo e(url('user/login')); ?>">Login</a></li>
              <li><a href="<?php echo e(url('user/register')); ?>">Register*</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to <span>PMS</span></h1>
      <h2>We are team of passionate real estate managers making buying and selling of properties easier</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>What We Do</h2>
          <p>Streamlining property management operations with efficiency, precision, and a touch of innovation</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Efficient Workflow Management</a></h4>
              <p>Simplify property operations with streamlined processes and automated tasks for enhanced productivity.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Data-Driven Decision Making</a></h4>
              <p>Harness the power of analytics and reporting tools to make informed decisions, optimize resources, and maximize profitability.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Comprehensive Property Monitoring</a></h4>
              <p>Stay in control of your assets through real-time tracking, maintenance schedules, and performance analysis.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="<?php echo e(asset('assets/img/about.jpg')); ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>About Us</h3>
            <p>
            At PMS, we are passionate about revolutionizing the property management industry. With years of experience and a dedicated team, we strive to provide comprehensive solutions that simplify and optimize property operations. Our cutting-edge technology and innovative approach enable us to streamline workflows, enhance efficiency, and improve overall profitability for property owners and managers. Through our robust platform, we offer advanced features such as automated task management, real-time monitoring, and data-driven insights.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Cutting-edge technology driving efficiency and profitability in property management.</li>
              <li><i class="bx bx-check-double"></i> Customer-centric approach delivering exceptional service and support.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <hr style="border-top: dashed 1px; margin-bottom: 1rem;">

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row my-3">

  

          <div class="col-lg-6 col-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo e($no_of_ten); ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div>

          <div class="col-lg-6 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo e($no_of_prop); ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Propertiess</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Providing comprehensive real estate solutions for seamless property management and investment success.</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Tenant Screening and Management</a></h4>
              <p>Our meticulous tenant screening process ensures that you find reliable tenants who meet your criteria. We handle background checks, credit assessments, and rental history verification, providing you with peace of mind and a smooth rental experience.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Property Listing and Marketing</a></h4>
              <p>We specialize in showcasing your properties to the widest audience possible, utilizing effective marketing strategies and platforms to attract potential buyers or tenants and maximize your property's visibility.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Financial and Accounting Support</a></h4>
              <p>Our dedicated team takes care of all financial aspects, from rent collection and invoice management to budgeting and financial reporting. We help you maintain accurate records, ensure timely payments, and keep your finances in order.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Maintenance and Repairs Coordination</a></h4>
              <p>We understand the importance of maintaining your properties in excellent condition. Our team handles all maintenance and repair requests, promptly coordinating with trusted contractors and vendors to address issues and ensure tenant satisfaction.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>A diverse portfolio of exceptional properties tailored to meet your unique needs and preferences.</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Graana</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo e(asset('assets/img/portfolio/graana-1.jpg')); ?>" class="img-fluid" alt="">
                <a href="<?php echo e(asset('assets/img/portfolio/graana-1.jpg')); ?>" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="https://www.graana.com/property/7-marla-house-sale-soan-garden,-block-h-islamabad-937137/" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Graana 1</a></h4>
                <p>Graana</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/zameen-1.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/zameen-1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="https://www.zameen.com/Property/bahria_town_rawalpindi_bahria_town_phase_3_10_marla_investor_price_house_for_sale_in_bahria_town_-45548563-3036-1.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Zameen 1</a></h4>
                <p>Zameen</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/graana-2.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/graana-2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="https://www.graana.com/property/570-sqft-room-rent-bahria-town-islamabad-942628/" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://www.graana.com/property/570-sqft-room-rent-bahria-town-islamabad-942628/">Graana 2</a></h4>
                <p>Graana</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/sirmaya-1.jpeg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/sirmaya-1.jpeg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="https://www.sirmaya.com/1-kanal-house-for-sale-in-dha-phase-5-lahore-603052#images-1" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://www.sirmaya.com/1-kanal-house-for-sale-in-dha-phase-5-lahore-603052#images-1">Sirmaya 2</a></h4>
                <p>Sirmaya</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/zameen-2.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/zameen-2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="https://www.zameen.com/Property/bahria_greens_overseas_enclave_bahria_greens_overseas_enclave_sector_2_10_marla_5_bed_double_unit_designer_house-44404447-8301-1.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Zameen 2</a></h4>
                <p>Zameen</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/graana-3.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/graana-3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="https://www.graana.com/property/10-marla-house-sale-g-13-3-islamabad-942501/" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="pohttps://www.graana.com/property/10-marla-house-sale-g-13-3-islamabad-942501/">graana 3</a></h4>
                <p>Graan</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/sirmaya-2.jpeg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/sirmaya-2.jpeg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="https://www.sirmaya.com/1-kanal-house-for-sale-in-dha-phase-5-lahore-603052" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://www.sirmaya.com/1-kanal-house-for-sale-in-dha-phase-5-lahore-603052">Sirmaya 1</a></h4>
                <p>Sirmaya</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/sirmaya-3.jpeg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/sirmaya-3.jpeg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="https://www.sirmaya.com/1-kanal-house-for-sale-in-dha-phase-5-lahore-603052" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://www.sirmaya.com/1-kanal-house-for-sale-in-dha-phase-5-lahore-603052">Sirmaya 3</a></h4>
                <p>Sirmaya</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/zameen-3.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/zameen-3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="https://www.zameen.com/Property/bahria_greens_overseas_enclave_bahria_greens_overseas_enclave_sector_5_10_marla_5_bed_double_unit_designer_villa-45473234-8304-1.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">zameen 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Property Management System (PMS) has been a game-changer for our real estate business. Their comprehensive services, expert team, and commitment to excellence have significantly improved our property management efficiency and profitability. Highly recommended!</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Working with Property Management System (PMS) has been a game-changer for our real estate business. The team's expertise and dedication have truly transformed our operations. Highly recommended!                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Ahmed Khan</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  PMS has been instrumental in helping us find reliable tenants for our properties. Their thorough screening process gave us peace of mind and saved us from potential headaches. Thank you, PMS!                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/person-1.jpg" class="testimonial-img" alt="">
                <h3>Ali Raza</h3>
                <h4>Property Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The financial support provided by PMS has been invaluable. They have streamlined our accounting processes and provided accurate financial reports, allowing us to make informed decisions and stay on top of our finances.                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Bilal Ahmed</h3>
                <h4>CFO</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Whenever we've had maintenance issues, PMS has promptly coordinated repairs and ensured a hassle-free experience. Thank you, PMS, for your outstanding service!                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Aishaan Malik</h3>
                <h4>Property Manager</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Foreign Partner</h2>
          <p>Our esteemed foreign partner brings a wealth of international experience and strategic insights, enhancing our capabilities and expanding our reach in the global real estate market.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Ahmed Khan</h4>
              <span>Chief Executive Officer</span>
              <p>
              As the CEO, Ahmed Khan's visionary leadership drives the success of our real estate ventures, shaping a path towards growth and innovation
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Ayesha Malik</h4>
              <span>Product Manager</span>
              <p>
              As the Operations Manager, Ayesha Malik's expertise and attention to detail streamline our day-to-day processes, ensuring seamless property management and client satisfaction.              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CFO</span>
              <p>
              With his meticulous financial acumen as the CFO, William Anderson ensures transparent and efficient management of our financial operations.              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">
    <div class="section-title">
      <h2>Contact Us</h2>
      <p>We'd love to hear from you! Get in touch with us for any inquiries or questions.</p>
    </div>

    <div class="row mt-5 justify-content-center">

      <div class="col-lg-10">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-4 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street<br>Lahore, Pakistan</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@pms.com<br>contact@pms.com</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+92 300 1234567<br>+92 321 9876543</p>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="row mt-5 justify-content-center">
      <div class="col-lg-10">
        <form action="<?php echo e(route('send_mail')); ?>" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" value="chemsa02@gmail.com" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

  <div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>PMS</h3>
        <p>
          A108 Adam Street <br>
          Lahore, Pakistan<br><br>
          <strong>Phone:</strong> +92 300 1234567<br>
          <strong>Email:</strong> info@pms.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Property Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Real Estate Sales</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Tenant Screening</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Property Maintenance</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Lease Management</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p>Stay updated with the latest news and offers from PMS.</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>PMS</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://google.com/">Chemsa</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/waypoints/noframework.waypoints.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\PMS\resources\views//home.blade.php ENDPATH**/ ?>