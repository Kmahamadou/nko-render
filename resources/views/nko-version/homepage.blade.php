<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ߊ߲ ߞߊ߫ ߞߊ߲ ߠߎ߬ ߸ ߊ߲ ߝߊ߲߬ߞߊ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Adjusted Content Security Policy -->
  {{-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'; img-src 'self';"> --}}

  <!-- Favicons -->
  <link rel="icon" href="{{ secure_asset('assets/img/logo.png') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ secure_asset('assets/img/logo.png') }}" type="image/x-icon">


  <!-- fa icon CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ secure_asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Add this to your HTML file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

  <!-- Template Main CSS File -->
  <link href="{{ secure_asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <style>

        .read-more-content {
            max-height: 5em;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out;
        }

        .read-more-trigger {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
            display: inline-block;
            margin-top: 10px;
        }


    .member-img {
        width: 15em !important;
        height: 16em;
    }

    .membre {

        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    @media (max-width: 768px) {

        .membre {

            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center
        }

    }

  </style>
</head>

<body>

    {{-- @php
    dd(Session::all());
@endphp --}}



  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">kmahamadou01@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>߀߀߂߂߃ ߆߀ ߆߉ ߀߃ ߄߃</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> --}}
        <a target="_blank" href="https://www.facebook.com/DoniFab/"><i class="bi bi-facebook"></i></a>
        {{-- <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> --}}
        <a target="_blank" href="https://www.linkedin.com/in/mahamadou-kone-42597b185/"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ route('nkoHomepage') }}">ߒߞߏ<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('nkoHomepage') }}">ߟߊ߬ߛߣߍ߬ߟߌ߬ߘߊ</a></li>
          <li><a class="nav-link scrollto" href="/nko/#about">ߊ߲ ߞߎ߲߭ߞߊ߲߬</a></li>
          {{-- <li><a class="nav-link scrollto" href="#services">Services</a></li> --}}
          {{-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> --}}
          <li><a class="nav-link scrollto" href="/nko/#team">ߊ߲ ߞߊ߫ ߛߙߍ</a></li>

          <li><a class="nav-link scrollto" href="/nko/#contact">ߞߵߊ߲ ߠߊߛߐ߬ߘߐ߲߬ </a></li>
          <li class="dropdown"><a href="#"><span><img src="{{ secure_asset('assets/img/language/mali.png') }}" width="20px" height="20px"/></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('homepage') }}"><img src="{{ secure_asset('assets/img/language/france.png') }}" width="25px" height="25"/>Francais</a>  </li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  {{-- /////////////////////////////////////////////// --}}



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div style="display: flex; flex-direction: row; justify-content: center; align-item: start">
        <div>
          <h1>ߊ߲ ߞߊ߫ ߞߊ߲ ߠߎ߬ ߸  ߊ߲ ߝߊ߲߬ߞߊ </h1>
          <h2>ߊ߲ ߧߋ߫ ߘߍ߬ ߞߵߊ߲ ߞߊ߫ ߞߊ߲ ߠߎ߬ ߘߏ߲߬ ߡߐ߬ߟߐ߲߬ߡߦߊ߬ </h2>
          <div class="d-flex">
            <a href="{{ route('showAudioNko') }}" class="btn-get-started scrollto">ߡߊ߬ߜߍ߲߫ ߞߍ߫ </a>
            {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span style="color: #fff">Presentation</span></a> --}}
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->



  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">


        <div class="section-title">
            <h2>ߡߊ߬ߜߍ߲߫ ߞߍ߫ </h2>
            <h3><span></span></h3>
            <p></p>
          </div>


        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch text-center mb-5 mb-lg-0">
            <a href="{{ route('audioNko') }}">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="fas fa-microphone"></i></div>
                <h4 class="title"><a href="{{ route('audioNko') }}">ߒߞߏ ߞߟߏߜߍ ߝߍ߲߬ߛߍ߬ߣߍ߲ ߣߌ߲߬ ߞߊ߬ߙߊ߲߬</a></h4>
                <p class="description">
                    ߟߊ߬ߢߌߣߌ߲: ߞߊ߬ ߟߊ߬ߡߍ߲߬ߛߍ߲߬ߧߊ߬ߟߊ ߟߎ߬ ߘߐߛߎ߫ ߒߞߏ ߞߟߏߜߍ ߝߍ߲߬ߛߍ߬ߣߍ߲ ߘߐߞߊ߬ߙߊ߲߫ ߠߊ߫ <br>
                </p>
            </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3 d-flex px-5 align-items-stretch text-center mb-5 mb-lg-0">
            <a href="{{ route('showNkoText') }}">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-pen"></i></div>
              <h4 class="title"><a href="{{ route("showNkoText") }}">ߞߊ߬ ߞߟߏߜߍ ߛߓߍ߫ ߒߞߏ ߘߐߙߐ߲߫ ߘߐ߫</a></h4>
              <p class="description">    ߟߊ߬ߢߌߣߌ߲: ߞߊ߬ ߟߊ߬ߡߍ߲߬ߛߍ߲߬ߧߊ߬ߟߊ ߟߎ߬ ߘߐߛߎ߫ ߒߞߏ ߞߟߏߜߍ ߘߐߙߐ߲߫ ߛߓߍ߫ ߟߊ߫<br>
              </p>
            </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch text-center mb-5 mb-lg-0">
            <a href="{{ route("showFrenchToNkoPage") }}">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-language"></i></div>
              <h4 class="title"><a href="{{ route("showFrenchToNkoPage") }}">ߞߟߏߜߍ ߡߍ߲ ߠߎ߬ ߛߓߍߣߍ߲ ߝߊ߬ߙߊ߲߬ߛߌ ߘߐ߫ ߸ ߏ߬ ߟߎ߬ ߘߟߊߡߌ߬ߣߊ߬ ߒߞߏ ߘߐ߫</a></h4>
              <p class="description">    ߟߊ߬ߢߌߣߌ߲: ߟߊ߬ߡߍ߲߬ߛߍ߲߬ߧߊ߬ߟߊ ߟߎ߬ ߦߋ߫ ߝߊ߬ߙߊ߲߬ߛߌ ߞߟߏߜߍ ߟߎ߬ ߘߟߊߡߌ߬ߣߊ߬ ߒߞߏ ߘߐ߫<br>
              </p>
            </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch text-center mb-5 mb-lg-0">
            <a href="{{ route('onlyFrenchText') }}">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-pen"></i></div>
              <h4 class="title"><a href="{{ route('onlyFrenchText') }}">ߛߓߍߟߌ ߞߍ߫ ߝߊ߬ߙߊ߲߬ߛߌ ߘߐߙߐ߲߫ ߘߐ߫</a></h4>
              <p class="description">    ߟߊ߬ߢߌߣߌ߲: ߞߊ߬ ߟߊ߬ߡߍ߲߬ߛߍ߲߬ߧߊ߬ߟߊ ߟߎ߬ ߘߐߛߎ߫ ߸ ߊ߬ߟߎ߬ ߦߋ߫ ߛߓߍߟߌ ߞߍ߫ ߝߊ߬ߙߊ߲߬ߛߌ ߘߐߙߐ߲߫ ߘߐ߫ <br>
              </p>
            </div>
            </a>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ߊ߲ ߞߎ߲߭ߞߊ߲߬ </h2>
          <h3><span>ߞߵߊ߲ ߟߐ߫ ߞߊ߬ ߢߊ߬ ߞߏߛߓߍ߫ </span></h3>
          <p>ߊ߲ ߧߋ߫ ߢߎߡߍߙߋ߲ߠߞߊ ߟߎ߬ ߘߐߓߍ߲߬ ߞߛߍߞߛߍߟߌߘߊ ߟߋ߬ ߘߌ߫</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            {{-- <h3>A quoi sert la presente plateforme?</h3>
            <p class="fst-italic">
              Ici, nous collectons des donnees sur le N'KO en vue d'entrainer nos IA (Intelligence Artificielle) a comprendre et generer du texte en N'KO<br/>.
              La mise en place d'un IA de ce type a les avantages suivants:
            </p> --}}

            <h4>ߊ߲ ߞߎ߲߭ߞߊ߲߬</h4>

            <div class="read-more-content">
                <p>ߌ ߣߌ߫ ߛߣߍ߫ ߒߞߏ ߟߐ߲ߕߊ ߟߊߘߍ߬ ߞߍߦߙߐ ߟߊ߫</p>

                <h4>ߊ߲ ߞߋߟߦߊ </h4>

                <p>ߘߏߣߌߟߊߓ ߟߊ߫ ߸ ߊ߲ ߟߊߣߍ߲ ߛߋ߲ߒߞߏߟߊߘߐߦߊ ߞߊ߫ߦߟߍ߬ߡߊ߬ߟߌ ߛߋߞߏߦߊ ߟߊ߫ ߸ ߞߊ߬ ߦߟߍ߬ߡߊ߬ߟߌ ߓߊ߲ߓߊ߲ߣߍ߲ ߛߌ߲ߘߌ. ߞߊ߬ߦߌ߯ ߊ߲ ߧߋ߫ ߝߊߓߑߟߊߓ ߘߌ߫ ߸ ߊ߲ ߞߊ߬ ߓߟߏߦߊߟߌ ߕߏ߰ߝߏ ߢߍߓߊ߫ߦߊ ߟߋ߬ ߕߊ߬ ߕߎ߬ߡߊ߬ ߓߍ߯ ߣߌ߫ ߞߣߍ ߟߎ߬ ߟߊߘߊ߲ߠߌ߲ ߘߌ߫ ߡߐ߰ ߓߐߣߍ߲ߢߐ߲߯ߡߊ ߟߎ߬ ߘߌ߫ ߛߋ߫ ߡߍ߲ ߕߣߐ߬ߓߐ߬ ߟߊ߫ ߸ ߞߊ߬ ߟߐ߲ߕߊ ߡߊߝߌߟߍ߫ ߞߵߊ߬ߟߎ߬ ߡߙߌߦߊ ߟߊߓߐ߫ </p>

                <h4>ߡߎ߲߬ ߠߊ߫ ߞߍߦߙߐ ߒߞߏ ߞߊ߲ߞߊ߲ߞߋߦߊ ߟߐ߲ߕߊ ߟߎ߬ ߟߊߘߍ߬ߟߌ ߞߊߡߊ߬ </h4>

                <p>ߊ߲ ߞߊ߫ ߟߊߞߎߘߦߊߟߌ ߖߘߍ߬ߘߌ ߞߐߝߍ߬ ߸ ߊ߲ ߞߊ߬ ߞߍߦߙߐ ߘߏ߫ ߟߊߘߊ߲߫ ߛߊ߫ ߞߊ߬ ߟߐ߲ߕߊ ߟߎ߬ : ߞߟߏߜߍ ߣߌ߫ ߡߍ߲ߞߊ߲ ߠߎ߬ ߟߊߞߊ߬ߝߏ߬. ߊ߲ ߞߊ߫ ߟߊߢߌߣߌ߲ ߧߋ߫ ߡߊ߬ߜߍ߲ ߠߋ߬ ߘߌ߫ ߛߋߒߞߏߟߊߘߐߦߊ ߞߊ߫ ߢߍߕߊ߮ ߟߊ߫ ߦߟߌߟߊ߲ߘߌ߫ ߘߍ߲߰ߢߊ߬ߣߍ߲ ߘߊߞߎ߲ ߠߊ߫. ߞߙߍߞߙߍߦߊ ߓߟߏߡߊ߬ ߸ ߊ߬ ߓߍ߲߬ߣߍ߲ ߒߞߏ ߡߊ߬ ߞߊ߬ ߓߌ߬ߟߊ߬ߢߐ߲߰ߡߊ ߣߌ߫ ߟߊߛߐ߬ߘߐ߲߬ߠߌ߲ ߣߐ߰ߦߊ߬</p>

                <h4>ߞߊ߬ ߓߊ߬ߟߊ߲ ߓߐ߫ ߞߊ߲ ߠߎ߬ ߕߍ </h4>

                <p>ߞߵߊ߬ ߕߎ߬ߙߎ ߞߍ߫ ߟߐ߲ߕߊ ߟߊߘߍ߬ߟߌ ߕߏߟߏ߲ ߓߐߣߍ߲ߢߐ߲߯ߡߊ ߟߎ߬ ߘߌ߫. ߊ߲ ߓߘߴߊ߲ ߕߊ߫ ߞߍߝߊߘߌ ߟߊߘߊ߲߫ ߛߊ߫ ߞߊ߬ ߒߞߏ ߦߟߍ߬ߡߊ߬ ߞߊ߲ ߕߐ߭ ߟߎ߬ ߘߐ߫ ߊ߬ ߣߴߏ߬ ߞߕߐߡߊ ߘߝߊ ߞߏߟߌߞߏߟߌ߫ ߘߐ߫߸ ߏ߬ ߓߍߣߊ߬ ߞߍ߫ ߕߙߎ߬ ߘߌ߫ ߞߵߊ߲ ߟߐ߲ߕߊ ߡߊߞߊ߬ߝߏ߬ ߞߊ߲ ߞߌ߬ߦߡߊ߬ ߦߙߐ ߟߎ߬ ߡߊ߬. ߒ߬ߓߊ߬ ߸ ߊ߬ ߓߍߣߊ߬ ߓߊ߬ߟߊ߲ ߓߐ߫ ߞߊ߲ ߠߎ߬ ߝߣߊ߫ ߕߍ߫ ߸ ߏ߬ ߓߍ߫ ߘߊߦߟߍ߬ ߓߌ߬ߟߊ߬ߢߐ߲߰ߡߊ ߝߙߍ߬ ߛߌߦߊߡߊ߲߫ ߢߍ߫ ߊ߬ ߣߌ߫ ߢߊߦߋߟߌ </p>

                <h4>ߣߊ߬ ߝߙߊ߬ ߊ߲ ߞߊ߲߬ ߟߊߞߎߘߦߊߟߌ ߛߋ߲߬ߕߊ ߏ߬ ߘߐ߫ </h4>

                <p>ߌ ߞߍ߫ ߘߊ߫ ߟߊߞߎߘߦߊߟߌߟߓߊ ߏ߱ ߌ ߞߍ߫ ߘߊ߫ ߛߌ߲ߘߟߌߟߊ ߞߎ߲ߝߊ߲ߕߐ ߛߐߒߞߏߟߊߘߐߦߊ߫ ߞߏ ߘߐ߫ ߏ߱ ߥߟߊ߫ ߞߊ߲ ߞߎ߲ߝߊ߲ߕߐ ߸ ߘߏߣߌߟߊߓ ߦߴߌ ߥߟߋ߫ ߟߊ߫ ߞߊ߬ ߣߊ߬ ߝߙߊ߬ ߊ߲ ߞߊ߲߬ ߟߊߞߎߘߦߊߟߌ ߛߋ߲߬ߕߊ ߣߌ߲߬ ߘߐ߫. ߊ߲ ߓߍ߯ ߦߴߊ߲ ߛߋߞߏ ߞߍ߫ ߸ ߞߊ߬ ߕߊ߬ߡߌ߬ ߊ߲ ߘߊ߲߭ ߠߊ߫ ߸ ߊ߲ ߧߋ߫ ߛߌߣߌ߲ ߞߍߝߊߘߌ ߘߏ߫ ߓߌ߬ߟߊ߬ ߊ߲ ߢߍ߫ ߛߋߒߞߏߟߊߘߐߦߊ ߓߍ߫ ߛߋߞߏ߬ߘߴߊ߲ ߡߊ߬ ߡߍ߲ ߘߐ߫ ߊ߬ ߣߌ߫ ߞߵߊ߲ ߜߊ߲ߞߎ߲ߢߐ߲߮ ߠߊ߫   </p>

                <p>ߌ ߣߌ߫ ߗߋ߫ ߝߙߊ߬ߟߌ ߘߐ߫ ߊ߲ ߞߊ߲߬ ߹</p>

                <p><strong>DoniFab</strong></p>
            </div>

            <a class="read-more-trigger" onclick="toggleReadMore()">ߊ߬ ߕߐ߭ ߞߊ߬ߙߊ߲߬</a>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="250">


            <ul>
                <li>
                  <i class="fas fa-language"></i>
                  <div>
                    <h5>ߘߟߊߡߌߣߊߟߌ ߟߢߊߟߌ ߔߙߋߔߙߋߟߊߕߍ߰ </h5>
                    <p>
                        ߞߊ߲ ߓߐߣߍ߲ߢߐ߲߯ߡߊ ߟߎ߬ ߟߐ߲ߕߊ ߦߋ߫ ߒߞߏ ߕߊ߫ ߢߊߦߋߟߌ ߣߐ߰ߦߊ߬ ߟߊ߫ ߸ ߝߙߋߞߋ ߟߎ߬ ߸ ߊ߬ ߣߌ߫ ߞߊ߲ ߕߐ߭ ߟߎ߬ ߘߊߞߎ߲ ߣߌ߫ ߒߞߏ . ߏ߬ ߓߍߣߊ߬ ߘߟߊߡߌߣߊߟߌ ߖߐ߲ߖߐ߲ ߠߎ߬ ߞߍ߫
                    </p>
                  </div>
                </li>
                <li>
                  <i class="fa fa-text-width"></i>
                  <div>
                    <h5>ߞߟߏߜߍ ߓߐߞߏߣߊ߲ ߟߊߢߊ߬ߣߍ߲  </h5>
                    <p>
                        ߟߐ߲ߕߊ ߟߊߘߏ߲߬ߣߍ߲ ߓߐߣߍ߲ߢߐ߲߫ߡߊ ߟߎ߬ ߓߍߣߊ߬ ߡߊߜߍ߲߫ ߞߍ߫ ߒߞߏ ߢߊߦߋߟߌ ߘߐ߫ ߞߏߛߓߍ߫. ߞߍߝߊߘߌ ߓߍߣߊ߬ ߛߋ߫ ߞߊ߬ ߞߟߏߜߍ ߘߊߕߐߡߦߊߣߍ߲ ߟߊߘߊ߲߫ ߒߞߏ ߘߐ߫ ߞߵߊ߬ ߓߍ߲߬ ߘߊߞߎ߲ ߠߎ߬ ߡߊ߬
                    </p>
                  </div>
                </li>
              <li>
                <i class="fa fa-language"></i>
                <div>
                  <h5>ߒߞߏ ߝߘߏ߬ߓߊ߬ ߢߊߦߋߟߌ  </h5>
                  <p>
                    ߓߊ߯ߙߊ ߡߍ߲ ߦߋ߫ ߛߓߍߟߌ ߘߊߞߎ߲ ߠߊ߫ ߸ ߛߓߍߟߌ ߣߌ߫ ߞߎߡߊ ߦߋ߫ ߡߊ߬ߘߍ߲߬ߠߌ߲ ߞߍ߫ ߟߊ߫ ߞߊ߲ ߢߊߦߋߟߌ ߘߐ߫ ߕߌ߫ߦߊ ߓߟߏߡߊ߬ ߛߓߍߟߌ ߞߍߝߊߘߌ ߣߴߊ߬ ߝߐߟߌ ߸ ߞߊ߬ ߞߐߝߟߌ߫ ߢߌߡߊ߲߫ ߘߌ߫ ߞߊ߲ ߘߊߞߎ߲ ߓߐߣߍ߲ߢߐ߯ߡߊ ߟߎ߬ ߘߐ߫
                  </p>
                </div>
              </li>
              <li>
                <i class="fa fa-plus-square"></i>
                <div>
                  <h5>ߡߊ߬ߘߍ߲߬ߠߌ ߒߞߏ ߟߐ߲ߕߊ ߟߎ߬ ߛߌ߲ߘߟߌ ߘߐ߫  </h5>
                  <p>
                    ߒߞߏ ߟߐ߲ߕߊ ߟߎ߬ ߛߌ߲ߘߟߌߟߊ ߟߎ߬ ߞߍߦߙߐ ߞߊ߲߬ ߏ߬ ߟߎ߬ ߓߍߣߊ߬ ߒߞߏ ߞߍߝߊߘߌ ߟߊߢߊߣߍ߲ ߛߐ߬ߘߐ߲߬ ߛߊ߫ ߞߊ߬ ߒߞߏ ߓߊ߯ߙߊ ߟߎ߬ ߞߍ߫ ߣߴߊ߬ ߦߋ߫ . ߞߵߊ߬ߟߎ߬ ߟߊ߫ ߓߊ߯ߙߊ ߛߋߞߏߦߊ ߡߊߞߊ߬ߝߏ߬ ߡߊ߬ߘߎ߰ ߛߌߦߊߡߊ߲ ߘߐ߫.
                  </p>
                </div>
              </li>
              <li>
                <i class="fa fa-industry"></i>
                <div>
                  <h5>ߞߊ߲ ߟߥߊߟߋߟߊ߲ ߛߋߞߏߦߊ߫ ߛߌߦߊߡߊ߲߫ </h5>
                  <p>
                    ߒߞߏ ߞߍߝߊߘߌ ߡߊߞߟߏߣߍ߲߫ ߞߏ߫ ߢߌ߲ߡߊ߲߫ ߓߴߛߋ߫ ߟߊߓߊ߯ߙߊ߫ ߟߊ߫ ߟߥߊߟߋ߲ߟߊ߲߫ ߛߌߦߊߡߊ߲߫ ߘߐ߫. ߞߣߐߘߐ ߟߊߘߊ߲ߠߌ߲ ߞߍߦߙߐ ߟߎ߬ ߏ߱ ߘߟߊߡߌߣߊߟߌ ߏ߱ ߸ ߊ߬ ߓߍߣߊ߬ ߡߊ߬ߜߍ߲߬ߓߊ ߞߍ߫ ߒߞߏ ߛߋߒߞߏߟߊߘߐߦߊ ߘߊߞߎ߲ ߠߎ߬ ߘߐ߫
                  </p>
                </div>
              </li>
            </ul>
            {{-- <p>
                Ensemble, mettons nos langues en valeur.<br/>

            </p> --}}
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="fas fa-microphone"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $countsValues["audios"] }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>ߡߍ߲ߞߊ߲ ߟߊߞߎ߲߬ߘߎ߬ߟߌ </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
              <div class="count-box">
                <i class="fas fa-pen"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $countsValues["nkosentences"] }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>ߒߞߏ ߞߟߏߜߍ </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="fas fa-language"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $countsValues["FrenchToNkos"] }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>ߘߟߊߡߌߣߊߟߌ </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="fas fa-pen"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $countsValues["frenchsentences"] }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>ߝߊ߬ߙߊ߲߬ߛߌ ߞߟߏߜߍ </p>
              </div>
            </div>

          </div>

        </div>
      </section>
      <!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{ secure_asset('assets/img/donilab.png') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{ secure_asset('assets/img/sallpro.jpeg') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{ secure_asset('assets/img/bko-tech.png') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{ secure_asset('assets/img/donifab.png') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{ secure_asset('assets/img/logo-lonko-dounbou.png') }}" class="img-fluid" alt="">
            </div>

        </div>

      </div>
    </section><!-- End Clients Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ߘߏߣߌߟߊߓ ߛߙߍ</h2>
          {{-- <h3>Notre formidable <span>Equipe</span></h3> --}}
          <p>ߊ߲ߠߎ߬ ߦߋ߫ ߓߟߏߡߞߊ߫ ߛߘߍ ߣߌ߫ ߞߊ߬ߙߊ߲߬ߠߊ߬ߘߋ߲ ߠߎ߬ ߘߌ߫ ߸ ߡߌ߲ ߠߎ߬ ߖߙߊ߬ߓߌ߬ߣߍ߲ ߛߋߒߞߏߟߊߘߐߦߊ ߞߊ߬ߞߎ߬ߘߊ߬ߡߊ ߟߎ߬ ߟߊ߫ </p>
        </div>

        <div class="membre">


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <a href="assets/img/hawa.JPG" data-lightbox="gallery" data-title="ߊߥߊ߬ ߖߏ߬ߣߌ߫ ߟߐ߲ߕߊ ߟߐ߲ߞߏ ߞߊ߬ߙߊ߲߬ߠߊ߬ߘߋ߲ ">
                    <img src="assets/img/hawa.JPG" class="img-fluid" alt="" id="image1">
                  </a>
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  {{-- <a href=""><i class="bi bi-facebook"></i></a> --}}
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  {{-- <a href=""><i class="bi bi-linkedin"></i></a> --}}
                </div>
              </div>
              <div class="member-info">
                <h4>ߊߥߊ߬ ߖߏ߬ߣߌ߫</h4>
                <span style="color: #3c3c3c">ߟߐ߲ߕߊ ߟߐ߲ߞߏ ߞߊ߬ߙߊ߲߬ߠߊ߬ߘߋ߲</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <a href="assets/img/diouka.jpg" data-lightbox="gallery" data-title="ߘߌߥߎߞߊ߫ ߛߌ߬ߛߞߏ߬ ߕߟߋ߬ߓߊ߮ ߣߌ߫ ߥߎߟߊߟߊ߫ ߓߌߟߊߢߐ߲߯ߡߊ ߞߋ߬ߞߎ߲߬ߣߍ߲">
                <img src="assets/img/diouka.jpg" class="img-fluid" alt="">
                </a>
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  <a target="_blank" href="https://m.facebook.com/profile.php/?id=100022039608402"><i class="bi bi-facebook"></i></a>
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  {{-- <a href=""><i class="bi bi-linkedin"></i></a> --}}
                </div>
              </div>
              <div class="member-info">
                <h4>ߘߌߥߎߞߊ߫ ߛߌ߬ߛߞߏ߬</h4>
                <span style="color: #3c3c3c">ߕߟߋ߬ߓߊ߮ ߣߌ߫ ߥߎߟߊߟߊ߫ ߓߌߟߊߢߐ߲߯ߡߊ ߞߋ߬ߞߎ߲߬ߣߍ߲</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <a href="assets/img/djigui.jpg" data-lightbox="gallery" data-title="ߦߎߓߊ߬ ߖߌ߯ ߞߋߕߊ߬ ߞߊ߲ ߞߟߊ߬ߡߊ߬ߓߊ߮ ">
                <img src="assets/img/djigui.jpg" class="img-fluid" alt="">
                </a>
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  <a target="_blank" href="#"><i class="bi bi-facebook"></i></a>
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  <a target="_blank" href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>ߦߎߓߊ߬ ߖߌ߯</h4>
                <span style="color: #3c3c3c">ߞߋߕߊ߬ ߞߊ߲ ߞߟߊ߬ߡߊ߬ߓߊ߮</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <a href="assets/img/Alpha.jpeg" data-lightbox="gallery" data-title="ߓߊ߬ߡߏߦߌ߬ ߕߙߊߥߟߊ߫ ߍߡ ߍߟ ߢߍߥߟߊߦߊߟߊ ">
                <img src="assets/img/Alpha.jpeg" class="img-fluid" alt="">
                </a>
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  <a target="_blank" href="https://www.facebook.com/profile.php?id=100006821057109"><i class="bi bi-facebook"></i></a>
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  <a target="_blank" href="https://www.linkedin.com/in/bamoye-traore-778153243/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>ߓߊ߬ߡߏߦߌ߬ ߕߙߊߥߟߊ߫</h4>
                <span style="color: #3c3c3c">ߍߡ ߍߟ ߢߍߥߟߊߦߊߟߊ</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
              <div class="member-img">
                <a href="assets/img/fatoma.jpeg" data-lightbox="gallery" data-title="ߝߊ߬ߕߐ߯ߡߊ߲߬ ߘߊߥߎ߫ ߞߊ߲ ߞߟߊ߬ߡߊ߬ߓߊ߮ ">
                <img src="assets/img/fatoma.jpeg" class="img-fluid" alt="">
                </a>
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  {{-- <a target="_blank" href="https://www.facebook.com/DoniFab/"><i class="bi bi-facebook"></i></a> --}}
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  {{-- <a target="_blank" href="https://www.linkedin.com/in/mahamadou-kone-42597b185/"><i class="bi bi-linkedin"></i></a> --}}
                </div>
              </div>
              <div class="member-info">
                <h4>ߝߊ߬ߕߐ߯ߡߊ߲߬ ߘߊߥߎ߫ </h4>
                <span style="color: #3c3c3c">ߞߊ߲ ߞߟߊ߬ߡߊ߬ߓߊ߮</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
              <div class="member-img">
                <a href="assets/img/sall.jpeg" data-lightbox="gallery" data-title="ߦߛߎߝ ߛߊߟ ߛߋߒߞߏߟߊߘߐߦߊ ߟߊߞߎߘߦߊߟߊ ߞߏߟߊ߲ߞߘߐߢߐ߲߮ ">
                <img src="assets/img/sall.jpeg" class="img-fluid" alt="">
                </a>
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  <a target="_blank" href="https://www.facebook.com/DoniFab/"><i class="bi bi-facebook"></i></a>
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  <a target="_blank" href="https://www.linkedin.com/in/mahamadou-kone-42597b185/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>ߦߛߎߝ ߛߊߟ  </h4>
                <span style="color: #3c3c3c">ߛߋߒߞߏߟߊߘߐߦߊ ߟߊߞߎߘߦߊߟߊ ߞߏߟߊ߲ߞߘߐߢߐ߲߮</span>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
              <div class="member-img">
                <a href="assets/img/mohamed.jpeg" data-lightbox="gallery" data-title="ߡߤߊ߬ߡߊ߬ߘߎ߬ ߞߏߣߋ߫ ߘߊߞߎ߲߫ ߥߙߍ ߢߍߥߟߊߦߟߊ ">
                    <img src="assets/img/mohamed.jpeg" class="img-fluid" alt="">
                </a>
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  <a target="_blank" href="https://www.facebook.com/DoniFab/"><i class="bi bi-facebook"></i></a>
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  <a target="_blank" href="https://www.linkedin.com/in/mahamadou-kone-42597b185/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>ߡߤߊ߬ߡߊ߬ߘߎ߬ ߞߏߣߋ߫  </h4>
                <span style="color: #3c3c3c">ߘߊߞߎ߲߫ ߥߙߍ ߢߍߥߟߊߦߟߊ</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ߞߵߊ߲ ߠߊߛߐ߬ߘߐ߲߬ </h2>
          <h3><span>ߊ߲ ߥߟߋ߫</span></h3>
          <p>ߘߐ߬ߛߎ߬ߟߌ ߞߊ߬ ߘߐ߬ߛߎ߬ߟߌ ߟߎ߬ ߣߌ߫ ߖߊ߬ߕߋ߬ߡߌߣߊ ߟߎ߬ ߞߍ߫ ߸ ߊ߬ ߣߌ߫ ߡߊ߬ߞߏ߬ ߜߘߍ߫ ߟߎ߬ ߸ ߗߋߛߓߍ ߓߌ߬ߟߴߊ߲ ߢߍ߫</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>ߊ߲ ߛߊ߲߬ߓߊ߬ߕߐ߮ </h3>
              <p>߀߈߅߃ ߣߊ߲߬ߕߌ߮ ߟߎ߬ ߟߊ߫ ߓߐߟߐ߲߸ ߛߏ߬ߕߌ߬ߓߊ߬ ߊߛߋߦߌ ߡߊ߬ߟߌ ߓߡߊ߬ߞߐ߬ </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>ߗߋߛߓߍ ߗߴߊ߲ ߡߊ߬ </h3>
              <p>kmahamadou01@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>ߊ߲ ߥߟߋ߫</h3>
              <p>߀߀߂߂߃ ߆߀ ߆߉ ߀߃ ߄߃</p>
            </div>
          </div>

        </div>


        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15571.49108181196!2d-7.9270629!3d12.6563459!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe51d2eefc83e617%3A0x5d46e6bf47471e4f!2sDoniLab!5e0!3m2!1sen!2sml!4v1706201887233!5m2!1sen!2sml" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            {{-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> --}}
          </div>

          <div class="col-lg-6">
            <form action="{{ route('sendVisiterEmail') }}" method="POST" id="emailForm" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Votre nom" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="visiterEmail" id="visiterEmail" placeholder="Votre Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="subject" name="subject" id="subject" placeholder="L'Objet du message" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message" required></textarea>
              </div>

             <!-- Corrected opening and closing div tags for the "send-email-loading" div -->
            <div class="my-3">
                <div id="send-email-loading" class="send-email-loading">Envoi en cours...</div>
            </div>


              <div class="text-center"><button class="btn btn-primary" id="sendEmailBtn" type="button" onclick="sendEmail()">ߞߊ߬ ߗߋ߫</button></div>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->




{{-- /////////////////////////////////////////// --}}
 <!-- ======= Footer ======= -->
 <footer id="footer">

  {{-- <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <h4>Join Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>ߒߞߏ <span>.</span></h3>
          <p>
            ߀߈߅߃ ߣߊ߲߬ߕߌ߮ ߟߎ߬ ߟߊ߫ ߓߐߟߐ߲߸ <br>ߛߏ߬ߕߌ߬ߓߊ߬ ߊߛߋߦߌ ߡߊ߬ߟߌ ߓߡߊ߬ߞߐ߬ <br>
             <br><br>
            <strong>Phone:</strong> ߀߀߂߂߃ ߆߀ ߆߉ ߀߃ ߄߃<br>
            <strong>Email:</strong> kmahamadou01@gmail.com<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>ߕߍ߰ߒߞߣߐ</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('nkoHomepage') }}">ߟߊ߬ߛߣߍ߬ߟߌ߬ߘߊ </a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#about">ߊ߲ ߞߎ߲߭ߞߊ߲߬ </a></li>
            {{-- <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li> --}}
            <li><i class="bx bx-chevron-right"></i> <a href="#team">ߛߙߍ</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">ߜߎ߲߬ߘߏ߬ߟߊ߬ߞߊ ߓߘߍ߬ߓߘߍ߬ߟߌ </a></li>
          </ul>
        </div>

        {{-- <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div> --}}

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>ߣߊ߬ ߝߙߊ߬ ߊ߲ ߞߊ߲߬ </h4>
          {{-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> --}}
          <div class="social-links mt-3">
            {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
            <a target="_blank" href="https://www.facebook.com/DoniFab/" class="facebook"><i class="bx bxl-facebook"></i></a>
            {{-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> --}}
            {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
            <a target="_blank" href="https://www.linkedin.com/in/mahamadou-kone-42597b185/"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container py-4">
    <div class="copyright">
      &copy; ߊ߬ ߖߏ ߟߊߕߊ߲߬ߞߊ߬ߣߍ߲  <strong><span></span></strong>
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
    <div class="credits mx-3">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
      Implemented by by <a href="#">BKO-TECHNOLOGIES</a>
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



<script>

    function toggleReadMore() {

        console.log("reached !");
        const content = document.querySelector('.read-more-content');
        const trigger = document.querySelector('.read-more-trigger');

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            trigger.innerText = 'Lire la suite';

        console.log("Strech !");
        } else {
            content.style.maxHeight = content.scrollHeight + 'px';
            trigger.innerText = 'Réduire';

        console.log("Shrink !");
        }
    }
</script>



<script type="text/javascript">

    function isValidEmail(email) {
                // Regular expression for a simple email validation
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
                }





        function sendEmail(){
            var ajax = new XMLHttpRequest();

            const full_name_value = document.getElementById("full_name").value;
            const visiterEmail_value = document.getElementById("visiterEmail").value;
            const subject_value = document.getElementById("subject").value;
            const message_value = document.getElementById("message").value;


            // console.log(visiterEmail_value)

              // Validate form fields
              // Define the isValidEmail function before sendEmail

                if (
                    full_name_value.trim() === '' ||
                    visiterEmail_value.trim() === '' ||
                    subject_value.trim() === '' ||
                    message_value.trim() === ''
                ) {

                        // Show a custom notification
                        showNotification('Tous les champs sont obligatoires !', 'error');
                    return;
                }


                // const loader = document.getElementById('loader');
                send_email_loading = document.getElementById('send-email-loading');

                // loader.style.display = 'block';
                send_email_loading.style.display = 'block';


            const formData = new FormData();

            formData.append("full_name",full_name_value)
            formData.append("visiterEmail",visiterEmail_value)
            formData.append("subject",subject_value)
            formData.append("message",message_value)


            ajax.open("POST", "{{ route('sendVisiterEmail') }}", true);


            console.log("sending");

            // whenever the status of the request is changed
            ajax.onreadystatechange = async function() {
            if (this.readyState == 4) {
                if (this.status == 200) {


                console.log("succes recieved");

                // Simulating a successful file upload
                setTimeout(() => {
                    // Show a custom notification
                    showNotification('Merci de nous avoir contacter !', 'success');
                        // Reset the form inputs
                        document.getElementById('emailForm').reset();

                        send_email_loading.style.display = 'none';
                }, 3500); // Simulated upload time (adjust as needed)

                // Hide loader after upload is complete
                // loader.style.display = 'none';

                console.log(this.responseText);
                }

                if (this.status == 500) {

                    console.log("error recieved");
                    // Simulating a successful file upload
                    setTimeout(() => {
                        // Show a custom notification
                        showNotification('Une erreur est survenue, veuillez reessayer !', 'error');

                        send_email_loading.style.display = 'none';

                    }, 3500); // Simulated upload time (adjust as needed)



                    // Hide loader after upload is complete
                // loader.style.display = 'none';
                // email_error_message.style.display = 'none';

                console.log(this.responseText);
                }
            }
            };

            ajax.send(formData);
    }



    // Attach the event listener to the form after the function is defined
    // document.getElementById('emailForm').addEventListener('submit', contactEmailForm);









        ////////////////////////////////// Notification /////////////////////////////
        function showNotification(message, type) {
            var notification = document.createElement('div');
            notification.textContent = message;
            notification.className = 'notification ' + type;

            document.body.appendChild(notification);

            // Trigger the animation
            setTimeout(() => {
                notification.classList.add('show');
            }, 10);

            // Remove the notification after a delay
            setTimeout(() => {
                notification.remove();
            }, 5000);
        }


    // Add the event listener for the button
    // document.getElementById('sendEmailBtn').addEventListener('click', function() {
    //     sendEmail();
    // });
    </script>

    <script>
        document.querySelectorAll('.zoomable').forEach(function (image) {
            image.addEventListener('click', function () {
            this.classList.toggle('clicked');
            });
        });

    </script>

<!-- Vendor JS Files -->
<script src="{{ secure_asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ secure_asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ secure_asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ secure_asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ secure_asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ secure_asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ secure_asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ secure_asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Jquery CDN -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>



<!-- Template Main JS File -->
<script src="{{ secure_asset('assets/js/main.js') }}"></script>

</body>

</html>
