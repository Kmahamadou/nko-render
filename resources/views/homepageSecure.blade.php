<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nos langues, notre force</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="https://ikeneya.s3.us-east-2.amazonaws.com/nko-assets/assets/logo.png" type="image/x-icon">
  <link rel="shortcut icon" href="https://ikeneya.s3.us-east-2.amazonaws.com/nko-assets/assets/logo.png" type="image/x-icon">


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
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+223 60 69 03 43</span></i>
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
          <li class="dropdown"><a href="#"><span><img src="{{ secure_asset('assets/img/language/france.png') }}" width="20px" height="20px"/></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('nkoHomepage') }}"><img src="{{ secure_asset('assets/img/language/mali.png') }}" width="25px" height="25px"/>Bambara</a>  </li>
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
          <h1>Nos langues <span>Notre force</span></h1>
          <h2>Ensemble, valorisons nos langues</h2>
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


          <div class="section-title">
              <h2>Contribuer</h2>
              <h3><span></span></h3>
              <p></p>
            </div>


          <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch text-center mb-5 mb-lg-0">
              <a href="{{ route('audioNko') }}">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon"><i class="fas fa-microphone"></i></div>
                  <h4 class="title"><a href="{{ route('audioNko') }}">Prononcer le texte NKO affiché</a></h4>
                  <p class="description">
                  Objectif : Encourager les visiteurs à vocaliser le texte NKO affiché. <br>
                  </p>
              </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-3 d-flex px-5 align-items-stretch text-center mb-5 mb-lg-0">
              <a href="{{ route('showNkoText') }}">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="fas fa-pen"></i></div>
                <h4 class="title"><a href="{{ route("showNkoText") }}">Écrire uniquement du texte en NKO</a></h4>
                <p class="description">    Objectif : Inciter les visiteurs à composer du texte exclusivement en NKO. <br>
                </p>
              </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch text-center mb-5 mb-lg-0">
              <a href="{{ route("showFrenchToNkoPage") }}">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="fas fa-language"></i></div>
                <h4 class="title"><a href="{{ route("showFrenchToNkoPage") }}">Traduire les textes fournis précédemment en français en texte NKO</a></h4>
                <p class="description">    Objectif : Les visiteurs traduisent des textes français existants en NKO.<br>
                </p>
              </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch text-center mb-5 mb-lg-0">
              <a href="{{ route('onlyFrenchText') }}">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="fas fa-pen"></i></div>
                <h4 class="title"><a href="{{ route('onlyFrenchText') }}">Écrire uniquement du texte en français</a></h4>
                <p class="description">    Objectif : Encourager les visiteurs à rédiger exclusivement en français.<br>
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
            <h2>A propos</h2>
            <h3>Savoir plus <span>sur Nous</span></h3>
            <p>Nous sommes un laboratoire de fabrication numerique.</p>
          </div>

          <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">


              <h4>À propos de nous</h4>

              <div class="read-more-content">
                  <p>Bienvenue sur <strong>la plateforme de collecte de données pour les modèles de Langue NKO </strong>.</p>

                  <h4>Notre Mission</h4>

                  <p>À <strong>DoniFab</strong>, nous croyons au pouvoir transformateur de la technologie pour créer un changement positif. En tant que FabLab, nous avons été à l'avant-garde du mouvement maker, fournissant un espace où des individus de divers horizons peuvent explorer, expérimenter et donner vie à leurs idées.</p>

                  <h4>Pourquoi une plateforme de Collecte de Données pour les Modèles Linguistiques NKO</h4>

                  <p>En plus de notre engagement envers l'innovation, nous avons mis en place une plateforme conçue pour rassembler des données textuelles et audio. Notre objectif est de contribuer à l'avancement des technologies à base d'intelligence artificielle, spécifiquement adaptées à la langue NKO, favorisant ainsi la communication et l'accessibilité.</p>

                  <h4>Abattre les Barrières Linguistiques</h4>

                  <p>Grâce à la collecte de jeux de données divers, nous visons à former nos modèles pour convertir de manière transparente la langue NKO en d'autre langues et vice versa. Cela améliore non seulement notre compréhension des subtilités linguistiques, mais aussi abat les barrières linguistiques, ouvrant de nouvelles possibilités de communication et de compréhension.</p>

                  <h4>Rejoignez-nous dans l'Aventure de l'Innovation</h4>

                  <p>Que vous soyez un innovateur chevronné, un créateur curieux, ou quelqu'un passionné par l'intersection de la technologie et du langage, <strong>DoniFab</strong> vous invite à nous rejoindre dans cette aventure de l'innovation. Ensemble, explorons les possibilités, repoussons les limites et façonnons un avenir où la technologie nous donne du pouvoir et nous connecte tous.</p>

                  <p>Merci de faire partie de la communauté !</p>

              </div>

              <a class="read-more-trigger" onclick="toggleReadMore()">Lire la suite</a>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="250">


              <ul>
                  <li>
                    <i class="fas fa-language"></i>
                    <div>
                      <h5>Précision Améliorée de la Traduction </h5>
                      <p>
                          Le jeu de données multilingue améliore la compréhension du modèle NKO des nuances et du contexte d'autres langues et du NKO, conduisant à des traductions plus précises.
                      </p>
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-text-width"></i>
                    <div>
                      <h5>Génération de Texte Améliorée</h5>
                      <p>
                          Les entrées linguistiques variées contribuent à une compréhension plus complète de la langue NKO, permettant au modèle de générer un texte cohérent et contextuellement pertinent en NKO.
                      </p>
                    </div>
                  </li>
                <li>
                  <i class="fa fa-language"></i>
                  <div>
                    <h5>Compréhension Globale de la Langue NKO </h5>
                    <p>
                      Les activités couvrant l'écriture, la traduction et la parole contribuent à une compréhension holistique de la langue NKO, englobant les formes écrites et parlées, résultant en des modèles performants pour diverses tâches linguistiques.
                    </p>
                  </div>
                </li>
                <li>
                  <i class="fa fa-plus-square"></i>
                  <div>
                    <h5>Soutien à la Création de Contenu NKO </h5>
                    <p>
                      Les créateurs de contenu sur la plateforme bénéficient de modèles linguistiques améliorés pour la création de contenu en NKO, améliorant la qualité et la pertinence dans divers domaines.
                    </p>
                  </div>
                </li>
                <li>
                  <i class="fa fa-industry"></i>
                  <div>
                    <h5>Applications Linguistiques Polyvalentes </h5>
                    <p>
                      Un modèle NKO bien entraîné peut être appliqué dans de nombreuses applications, y compris la création de contenu, les services de traduction, les plateformes d'apprentissage linguistique, contribuant à la polyvalence de la technologie linguistique NKO.
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
                <p>Enregistrements audios</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
              <div class="count-box">
                <i class="fas fa-pen"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $countsValues["nkosentences"] }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Textes en NKO</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="fas fa-language"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $countsValues["FrenchToNkos"] }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Traductions</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="fas fa-pen"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $countsValues["frenchsentences"] }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Textes en Francais</p>
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
          <h2>Equipe</h2>
          <h3>DoniFab <span>Dream & Make</span></h3>
          <p>Nous sommes une equipe de professionels et d'etudiants, tous passionnes des nouvelles technologies.</p>
        </div>

        <div class="membre">


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <a href="assets/img/hawa.JPG" data-lightbox="gallery" data-title="Hawa DIONE">
                    <img src="{{ secure_asset('assets/img/hawa.JPG') }}" class="img-fluid" alt="">
                </a>
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  <a href="https://www.facebook.com/hawa.dioni.39" target="_blank"><i class="bi bi-facebook"></i></a>
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  {{-- <a href=""><i class="bi bi-linkedin"></i></a> --}}
                </div>
              </div>
              <div class="member-info">
                <h4>Hawa DIONI</h4>
                <span style="color: #3c3c3c">Etudiante en Data Sciences</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <a href="assets/img/diouka.jpg" data-lightbox="gallery" data-title="Diouka SISSOKO">
                    <img src="{{ secure_asset('assets/img/diouka.jpg') }}" class="img-fluid" alt="">
                </a>
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
                <a href="assets/img//djigui.jpg" data-lightbox="gallery" data-title="Djigui KEITA">
                    <img src="{{ secure_asset('assets/img/djigui.jpg') }}" class="img-fluid" alt="">
                </a>
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
                <a href="assets/img/Alpha.jpeg" data-lightbox="gallery" data-title="Bamoye TRAORE">
                    <img src="{{ secure_asset('assets/img/Alpha.jpeg') }}" class="img-fluid" alt="">
                </a>
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
                <a href="assets/img/fatoma.jpeg" data-lightbox="gallery" data-title="Fatoma DAOU">
                    <img src="{{ secure_asset('assets/img/fatoma.jpeg') }}" class="img-fluid" alt="">
                </a>
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Fatoma DAOU</h4>
                <span style="color: #3c3c3c">Expert N'KO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
              <div class="member-img">
                <a href="assets/img/sall.jpeg" data-lightbox="gallery" data-title="Yousssouf SALL">
                    <img src="{{ secure_asset('assets/img/sall.jpeg') }}" class="img-fluid" alt="">
                </a>
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                  <a target="_blank" href="https://www.facebook.com/DoniFab/"><i class="bi bi-facebook"></i></a>
                  {{-- <a href=""><i class="bi bi-instagram"></i></a> --}}
                  <a target="_blank" href="https://www.linkedin.com/in/youssouf-sall-567b5a72/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Youssouf SALL</h4>
                <span style="color: #3c3c3c">Consultant en Innovation Technologique</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
              <div class="member-img">
                <a href="assets/img/mohamed.jpeg" data-lightbox="gallery" data-title="Mahamadou KONE">
                    <img src="{{ secure_asset('assets/img/mohamed.jpeg') }}" class="img-fluid" alt="">
                </a>
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
          </div>

          <div class="col-lg-6">
            <form action="https://nko-uyrz.onrender.com/api/send-visiter-email" method="POST" id="emailForm" class="php-email-form">
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
            <a target="_blank" href="https://www.facebook.com/DoniFab/" class="facebook"><i class="bx bxl-facebook"></i></a>
            {{-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> --}}
            {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
            <a target="_blank" href="https://www.linkedin.com/in/mahamadou-kone-42597b185/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>N'KO</span></strong>. Tous Droit Réservés
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
    <div class="credits mx-5">
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


            ajax.open("POST", "https://nko-uyrz.onrender.com/api/send-visiter-email", true);


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
{{-- <script src="{{ secure_asset('assets/vendor/php-email-form/validate.js') }}"></script> --}}


<!-- Jquery CDN -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>


<!-- Template Main JS File -->
<script src="{{ secure_asset('assets/js/main.js') }}"></script>

</body>

</html>
