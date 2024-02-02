<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nos langues, notre force</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{ secure_asset('assets/img/logo.svg') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ secure_asset('assets/img/logo.svg') }}" type="image/x-icon">


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
    .member-img {
        width: 15em !important;
        height: 16em;
    }

    .membre {

        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
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
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+223 60 69 03 43</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> --}}
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        {{-- <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> --}}
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ route('homepage') }}">N'KO<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('homepage') }}">Accueil</a></li>
          <li><a class="nav-link scrollto" href="/homepage#about">A Propos</a></li>
          {{-- <li><a class="nav-link scrollto" href="#services">Services</a></li> --}}
          {{-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> --}}
          <li><a class="nav-link scrollto" href="/homepage#team">Notre equipe</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="nav-link scrollto" href="/homepage#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  {{-- /////////////////////////////////////////////// --}}



  {{-- //////////////////// Email Sent /////////////// --}}
  @if(Session::has('emailSentSuccess'))
  <div id="successMessage" class="alert alert-success col-4 mx-auto my-3 text-center">
      {{ Session::get('emailSentSuccess') }}
  </div>
  @endif

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div style="display: flex; flex-direction: row; justify-content: center; align-item: start">
        <div>
          <h1>Espace <span>N'KO</span></h1>
          <h2>Nos langues, Notre force</h2>
          <div class="d-flex">
            <a href="{{ route('audioNko') }}" class="btn-get-started scrollto">Contribuer</a>
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

        <div class="row">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="{{ route('audioNko') }}">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-microphone"></i></div>
              <h4 class="title"><a href="{{ route('audioNko') }}">Parler</a></h4>
              <p class="description">Prononcer le texte N'KO qui vous etes presente</p>
            </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="{{ route('showNkoText') }}">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-pencil"></i></div>
              <h4 class="title"><a href="{{ route("showNkoText") }}">Fournir du texte N'KO</a></h4>
              <p class="description">Nous recoltons des donnees en N'KO</p>
            </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="{{ route("showFrenchToNkoPage") }}">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-language"></i></div>
              <h4 class="title"><a href="{{ route("showFrenchToNkoPage") }}">Traduire du francais vers le N'KO</a></h4>
              <p class="description">Traduire en N'KO le texte ecris en francais</p>
            </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="{{ route('onlyFrenchText') }}">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-pencil"></i></div>
              <h4 class="title"><a href="{{ route('onlyFrenchText') }}">Fournir du texte en Francais</a></h4>
              <p class="description">Les textes recueillis en francais seront traduis en N'KO</p>
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
          <h2>A propos</h2>
          <h3>Savoir plus <span>sur Nous</span></h3>
          <p>Nous sommes un laboratoire de fabrication numerique.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>A quoi sert la presente plateforme?</h3>
            <p class="fst-italic">
              Ici, nous collectons des donnees sur le N'KO en vue d'entrainer nos IA (Intelligence Artificielle) a comprendre et generer du texte en N'KO<br/>.
              La mise en place d'un IA de ce type a les avantages suivants:
            </p>
            <ul>
                <li>
                  <i class="fas fa-language"></i>
                  <div>
                    <h5>Traduire du N'KO vers d'autres langues et vis versa </h5>
                    {{-- <p>Il vous suffit de commander et la machine vous obeillit</p> --}}
                  </div>
                </li>
                <li>
                  <i class="fas fa-microphone"></i>
                  <div>
                    <h5>Donner des commandes vocales a son appareil en N'KO</h5>
                    {{-- <p>Il vous suffit de commander et la machine vous obeillit</p> --}}
                  </div>
                </li>
              <li>
                <i class="bi bi-pencil"></i>
                <div>
                  <h5>Auto-correction lors de la saisie de texte en N'KO</h5>
                  <p></p>
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
    {{-- <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section> --}}
    <!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/donilab.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/sallpro.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/bkotech.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/donifab.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Equipe</h2>
          <h3>Notre formidable <span>Equipe</span></h3>
          <p>Nous sommes une equipe de professionels et d'etudiants, tous passionnes des nouvelles technologies.</p>
          <p>Notre objectif est de faire la difference.</p>
        </div>

        <div class="row membre">


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/hawa.JPG" class="img-fluid" alt="">
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  {{-- <a href=""><i class="bi bi-facebook"></i></a> --}}
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  {{-- <a href=""><i class="bi bi-linkedin"></i></a> --}}
                </div>
              </div>
              <div class="member-info">
                <h4>Hawa DIONE</h4>
                <span style="color: #3c3c3c">Etudiante</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/diouka.jpg" class="img-fluid" alt="">
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  <a target="_blank" href="https://m.facebook.com/profile.php/?id=100022039608402"><i class="bi bi-facebook"></i></a>
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  {{-- <a href=""><i class="bi bi-linkedin"></i></a> --}}
                </div>
              </div>
              <div class="member-info">
                <h4>Diouka SISSOKO</h4>
                <span style="color: #3c3c3c">Etudiante en Genie <br/> Informatique et Telecoms</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/djigui.jpg" class="img-fluid" alt="">
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  <a target="_blank" href="#"><i class="bi bi-facebook"></i></a>
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  <a target="_blank" href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Djigui Youba KEITA</h4>
                <span style="color: #3c3c3c">Expert en N'KO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/Alpha.jpg" class="img-fluid" alt="">
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  <a target="_blank" href="https://www.facebook.com/profile.php?id=100006821057109"><i class="bi bi-facebook"></i></a>
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  <a target="_blank" href="https://www.linkedin.com/in/bamoye-traore-778153243/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Bamoye TRAORE</h4>
                <span style="color: #3c3c3c">ML Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/mohamed.jpeg" class="img-fluid" alt="">
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  <a target="_blank" href="https://www.facebook.com/DoniFab/"><i class="bi bi-facebook"></i></a>
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  <a target="_blank" href="https://www.linkedin.com/in/mahamadou-kone-42597b185/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mahamadou KONE</h4>
                <span style="color: #3c3c3c">FullStack Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/sall.jpeg" class="img-fluid" alt="">
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  <a target="_blank" href="https://www.facebook.com/DoniFab/"><i class="bi bi-facebook"></i></a>
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  <a target="_blank" href="https://www.linkedin.com/in/mahamadou-kone-42597b185/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Youssouf SALL</h4>
                <span style="color: #3c3c3c">Consultant en Innovation Technologique</span>
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
          <h2>Contact</h2>
          <h3><span>Nous contacter</span></h3>
          <p>Pour toutes suggestions, remarques ou tout autres besoins, laissez nous un message.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Notre adresse</h3>
              <p>0853 Rue des Armees, Sotuba ACI, Bamako-Mali</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Envoyez-nous un email</h3>
              <p>kmahamadou01@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Appeller nous</h3>
              <p>+223 60 69 03 43</p>
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


              <div class="text-center"><button class="btn btn-primary" id="sendEmailBtn" type="button" onclick="sendEmail()">Envoyer</button></div>
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
          <h3>N'KO<span>.</span></h3>
          <p>
            0853 Rue des Armees <br>
            Sotuba ACI, Bamako<br>
            Mali <br><br>
            <strong>Phone:</strong> +223 60 69 03 43<br>
            <strong>Email:</strong> kmahamadou01@gmail.com<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Raccourcis</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('homepage') }}">Accueil</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#about">A propos</a></li>
            {{-- <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li> --}}
            <li><i class="bx bx-chevron-right"></i> <a href="#team">Equipe</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Politique de confidentialitee</a></li>
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
          <h4>Rejoignez nous</h4>
          {{-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> --}}
          <div class="social-links mt-3">
            {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            {{-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> --}}
            {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>N'KO</span></strong>. Tous Droit Reserves
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ secure_asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ secure_asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ secure_asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ secure_asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ secure_asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ secure_asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ secure_asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
{{-- <script src="{{ secure_asset('assets/vendor/php-email-form/validate.js') }}"></script> --}}

<!-- Template Main JS File -->
<script src="{{ secure_asset('assets/js/main.js') }}"></script>

{{-- <script>
    // Hide the success message after 5 seconds (5000 milliseconds)
    setTimeout(function(){
        document.getElementById('successMessage').style.display = 'none';
    }, 5000);
</script> --}}


<script>

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
                // Show an error message or perform any other action to handle invalid data
                alert('Tous les champs sont requis.');
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


        ajax.open("POST", "http://localhost:8000/api/send-visiter-email", true);


        console.log("sending");

        // whenever the status of the request is changed
        ajax.onreadystatechange = async function() {
        if (this.readyState == 4) {
            if (this.status == 200) {


            console.log("succes recieved");

            // Simulating a successful file upload
            setTimeout(() => {
                // Show a custom notification
                showNotification('Vocal envoyer avec succes !', 'success');
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



function showNotification(message, type)
    {
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.textContent = message;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.remove();
        }, 3000); // Remove the notification after 3 seconds (adjust as needed)
    }


</script>

</body>

</html>
