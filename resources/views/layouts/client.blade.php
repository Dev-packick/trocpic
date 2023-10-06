<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>DealApp</title>
  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="{{asset('client/images/favicon.png')}}">
  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('client/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{asset('client/plugins/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('client/plugins/fontawesome/css/all.css')}}">
  <!-- Animation -->
  <link rel="stylesheet" href="{{asset('client/plugins/animate-css/animate.css')}}">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="{{asset('client/plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('client/plugins/slick/slick-theme.css')}}">
  <!-- Colorbox -->
  <link rel="stylesheet" href="{{asset('client/plugins/colorbox/colorbox.css')}}">
  <!-- Template styles-->
  <link rel="stylesheet" href="{{asset('client/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('client/css/style.css.map')}}">

</head>
<body>
  <div class="body-inner">
    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">Lomé, TOGO</p>
                    </li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="#">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Instagram" href="#">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
          </div>
        </div>
    </div>
<!--/ Topbar end -->


<!-- Header start -->
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index.html">
                  <img loading="lazy" src="{{asset('client/images/logo.png')}}" alt="Constra">
                </a>
            </div>
            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Téléphone</p>
                          <p class="info-box-subtitle">(+228) 90612190</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Envoyez-nous un email</p>
                          <p class="info-box-subtitle">contact@dealapp.com</p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">Localisation</p>
                          <p class="info-box-subtitle">Agoè nyvé</p>
                      </div>
                    </div>
                  </li>
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary" href="{{route('INSCRIPTION')}}">S'INSCRIRE</a>
                    <a class="btn btn-primary" href="{{route('CONNEXION')}}">SE CONNECTER</a>
                  </li>
                </ul>
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item"><a class="nav-link" href="{{route('accueil')}}">Accueil</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Comment ça marche</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{route('OFFRE')}}">Je propose</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{route('BIENS')}}">Je recherche</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
        </div>
        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div>
        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div>
    </div>
  </div>
</header>
<!--/ Header end -->


    @yield('content')


<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <img loading="lazy" class="footer-logo" src="{{asset('client/images/footer-logo.png')}}" alt="Constra">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
              labore et dolore magna aliqua.</p>
            <div class="footer-social">
              <ul>
                <li><a href="#" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="#" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="#" aria-label="Github"><i class="fab fa-github"></i></a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Notre Engagement</h3>
            <div class="working-hours">
              Nous accordons une attention particulière à répondre attentivement à tous les utilisateurs du site.
              <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
              <br> Saturday: <span class="text-right">12:00 - 15:00</span>
              <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Services</h3>
            <ul class="list-arrow">
              <li><a href="#">Pre-Construction</a></li>
              <li><a href="#">General Contracting</a></li>
              <li><a href="#">Construction Management</a></li>
              <li><a href="#">Design and Build</a></li>
              <li><a href="#">Self-Perform Construction</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer main end -->
    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Designed &amp; Developed by <a href="#">Ing ALI</a></span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
              <ul class="list-unstyled mb-0">
                <li><a href="about.html">About</a></li>
                <li><a href="team.html">Our people</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="news-left-sidebar.html">Blog</a></li>
                <li><a href="pricing.html">Pricing</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>
      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer>
  <!-- Footer end -->


  <!-- initialize jQuery Library -->
  <script src="{{asset('client/plugins/jQuery/jquery.min.js')}}"></script>
  <!-- Bootstrap jQuery -->
  <script src="{{asset('client/plugins/bootstrap/bootstrap.min.js')}}" defer></script>
  <!-- Slick Carousel -->
  <script src="{{asset('client/plugins/slick/slick.min.js')}}"></script>
  <script src="{{asset('client/plugins/slick/slick-animation.min.js')}}"></script>
  <!-- Color box -->
  <script src="{{asset('client/plugins/colorbox/jquery.colorbox.js')}}"></script>
  <!-- shuffle -->
  <script src="{{asset('client/plugins/shuffle/shuffle.min.js')}}" defer></script>

  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="{{asset('client/plugins/google-map/map.js')}}" defer></script>
  <!-- Template custom -->
  <script src="{{asset('client/js/script.js')}}"></script>

  </div>
  <!-- Body inner end -->
  </body>

  </html>
