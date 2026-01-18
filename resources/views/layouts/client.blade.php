<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>TROC-PIC | Plateforme d’Échange Solidaire et Anti-Gaspillage</title>
    <!-- Meta principales -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <!-- Description optimisée -->
    <meta name="description" content="TROC-PIC est une plateforme togolaise innovante de troc numérique qui favorise l’échange de biens et services entre citoyens, sans transaction financière, tout en soutenant les orphelinats et centres communautaires.">
    <!-- Mots-clés SEO -->
    <meta name="keywords" content="Troc,Troc-Pic, Économie circulaire, APV TOGO, Togo, Dons, Plateforme solidaire, Anti-gaspillage, Échange d’objets, Orphelinats, Associations, Réutilisation, Partage, Services, Zéro déchet, APV">
    <!-- Auteur -->
    <meta name="author" content="APV Togo - Association Les Amis de la Planète Vivable">
    <!-- Robots (pour indexation) -->
    <meta name="robots" content="index, follow">
    <!-- Canonical -->
    <link rel="canonical" href="https://troc.amisdelaplanetevivable.bio" />
    <!-- Open Graph (Facebook & LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="TROC-PIC - Plateforme d’Échange Solidaire et Anti-Gaspillage">
    <meta property="og:description" content="TROC-PIC permet aux citoyens togolais d’échanger des objets et services, tout en soutenant les structures sociales. Une initiative solidaire portée par APV Togo.">
    <meta property="og:url" content="https://troc.amisdelaplanetevivable.bio">
    <meta property="og:image" content="https://troc.amisdelaplanetevivable.bio/images/banner.jpg">
    <link rel="icon" type="image/png" href="{{asset('client/images/LOGO_FB.png')}}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('client/plugins/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/plugins/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('client/plugins/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('client/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('client/plugins/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('client/plugins/colorbox/colorbox.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/style.css.map')}}">
    <link rel="stylesheet" href="{{asset('client/sweetalerte2/sweetalert2.min.css')}}">
    <!-- Style interne -->
    <style>
      .dropdown-submenu {
        position: relative;
      }
      .dropdown-submenu .dropdown-menu {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        margin-top: -1px;
        background: #f9f9f9;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      }
      .dropdown-submenu:hover .dropdown-menu {
        display: block;
      }
    </style>
  </head>
  <body>
    <div class="body-inner">
      <!-- Top Bar -->
      <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8">
              <ul class="top-info text-center text-md-left">
                <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">Lomé, TOGO</p></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
              <ul class="list-unstyled">
                <li>
                  <a title="Facebook" href="https://www.facebook.com/profile.php?id=100069720733226">
                    <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                  </a>
                  <a title="Instagram" href="https://instagram.com/les_amis_de_la_planete_vivable?igshid=MjEwN2IyYWYwYw==">
                    <span class="social-icon"><i class="fab fa-instagram"></i></span>
                  </a>
                  <a title="Linkedin" href="https://www.linkedin.com/company/les-amis-de-la-plan%C3%A8te-vivable/">
                    <span class="social-icon"><i class="fab fa-linkedin"></i></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Header -->
      <header id="header" class="header-one">
        <div class="bg-white">
          <div class="container">
            <div class="logo-area">
              <div class="row align-items-center">
                <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                  <a class="d-block" href="{{route('accueil')}}">
                    <img loading="lazy" src="{{asset('client/images/LOGO_ln.png')}}" alt="troc-pic">
                  </a>
                </div>
                <div class="col-lg-9 header-right">
                  <ul class="top-info-box">
                    <li>
                      <div class="info-box">
                        <div class="info-box-content">
                          <p class="info-box-title">Téléphone</p>
                          <p class="info-box-subtitle">(+228) 92939310</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="info-box">
                        <div class="info-box-content">
                          <p class="info-box-title">Envoyez-nous un email</p>
                          <p class="info-box-subtitle">contact@apv-togo.org</p>
                        </div>
                      </div>
                    </li>
                    <li class="last">
                      <div class="info-box last">
                        <div class="info-box-content">
                          <p class="info-box-title">Localisation</p>
                          <p class="info-box-subtitle">Lomé (Togo)</p>
                        </div>
                      </div>
                    </li>
                    @if(Session::get('UserId'))
                      <li class="header-get-a-quote">
                        <a class="btn btn-dark" href="{{route('TABLEAU')}}">Mon compte</a>
                      </li>
                    @else
                      <li class="header-get-a-quote">
                        <a class="btn btn-success" href="{{route('INSCRIPTION')}}">S'INSCRIRE</a>
                        <a class="btn btn-success" href="{{route('CONNEXION')}}">SE CONNECTER</a>
                      </li>
                    @endif
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <div class="site-navigation">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="{{route('accueil')}}">ACCUEIL</a></li>
                      <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="{{route('BIENS')}}">JE RECHERCHE</a></li>
                      <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="{{route('contact')}}">CONTACT</a></li>
                      <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="{{route('FAQ')}}">FAIRE UN DON</a></li>
                      {{-- <li class="nav-item dropdown" style="position: relative;">
                        <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="donDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          FAIRE UN DON ▼
                        </a>
                        <div class="dropdown-menu" style="background:#f9f9f9; box-shadow:0 2px 8px rgba(0,0,0,0.1);">
                          <div class="dropdown-submenu">
                            <a class="dropdown-item" href="#">REGION MARITIME ▶</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Orphelinat Mother Charity</a>
                            </div>
                          </div>
                          <div class="dropdown-submenu">
                            <a class="dropdown-item" href="#">REGION DES PLATEAUX ▶</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Association Ensemble pour le bien être de l'enfant (EBE)</a>
                            </div>
                          </div>
                          <div class="dropdown-submenu">
                            <a class="dropdown-item" href="#">REGION CENTRALE ▶</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Solingoubou</a>
                              <a class="dropdown-item" href="#">ONG AVE Togo</a>
                            </div>
                          </div>
                          <div class="dropdown-submenu">
                            <a class="dropdown-item" href="#">REGION DE LA KARA ▶</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Centre de développement Amis des enfants</a>
                              <a class="dropdown-item" href="#">Orphelinat Foyers Pierre Du Pauvre</a>
                            </div>
                          </div>
                          <div class="dropdown-submenu">
                            <a class="dropdown-item" href="#">REGION DES SAVANES ▶</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Association Vivre Dans L’espérance</a>
                              <a class="dropdown-item" href="#">Orphelinat Yendu Buam N Tien</a>
                            </div>
                          </div>
                        </div>
                      </li> --}}
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- Contenu -->
      @yield('content')
      <!-- Footer -->
      <footer id="footer" class="footer bg-overlay">
        <div class="footer-main">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-lg-4 col-md-6 footer-widget footer-about">
                <h3 class="widget-title">A propos de nous</h3>
                <img loading="lazy" class="footer-logo" src="{{asset('client/images/LOGO_lb.png')}}" alt="troc-pic">
                <p>Partager, chercher & échanger. Trouvez l'aide dont vous avez besoin, quand vous en avez besoin</p>
                <div class="footer-social">
                  <ul>
                    <li><a href="https://www.facebook.com/profile.php?id=100069720733226" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://instagram.com/les_amis_de_la_planete_vivable?igshid=MjEwN2IyYWYwYw==" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/les-amis-de-la-plan%C3%A8te-vivable/" aria-label="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                <h3 class="widget-title">Notre Engagement</h3>
                <div class="working-hours">
                  Nous accordons une attention particulière à répondre attentivement à tous les utilisateurs du site.
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                <h3 class="widget-title">Liens</h3>
                <ul class="list-arrow">
                  <li><a href="{{route('BIENS')}}">Je recherche</a></li>
                  <li><a href="{{route('INSCRIPTION')}}">S'inscrire</a></li>
                  <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="copyright">
          <div class="container">
            <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
              <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
            </div>
          </div>
        </div>
      </footer>
      <!-- Scripts -->
      <script src="{{asset('client/plugins/jQuery/jquery.min.js')}}"></script>
      <script src="{{asset('client/plugins/bootstrap/bootstrap.min.js')}}" defer></script>
      <script src="{{asset('client/plugins/slick/slick.min.js')}}"></script>
      <script src="{{asset('client/plugins/slick/slick-animation.min.js')}}"></script>
      <script src="{{asset('client/plugins/colorbox/jquery.colorbox.js')}}"></script>
      <script src="{{asset('client/plugins/shuffle/shuffle.min.js')}}" defer></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
      <script src="{{asset('client/plugins/google-map/map.js')}}" defer></script>
      <script src="{{asset('client/js/script.js')}}"></script>
      <script src="{{asset('client/sweetalerte2/sweetalert2.min.js')}}"></script>
      @stack('send')
      @stack('message')
    </div>
  </body>
</html>
