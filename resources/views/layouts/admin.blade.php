<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TROC-PIC | Mon compte</title>

  <!-- Meta Partage -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="TROC-PIC - Plateforme d’Échange Solidaire">
  <meta property="og:description" content="TROC-PIC permet aux citoyens togolais d’échanger des objets et services tout en soutenant les structures sociales. Une initiative solidaire portée par APV Togo.">
  <meta property="og:url" content="https://troc.amisdelaplanetevivable.bio">
  <meta property="og:image" content="https://troc.amisdelaplanetevivable.bio/images/banner.jpg">

  <!-- Favicon & Fonts -->
  <link rel="icon" type="image/png" href="{{ asset('client/images/LOGO_FB.png') }}">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  
  <!-- CSS -->
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/font-awesome-4.7.0/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/font-icon-style.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/style.default.css') }}" id="theme-stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">

  <!-- Responsive Fixes -->
  <style>
    @media (max-width: 768px) {
      aside {
        width: 100% !important;
        position: relative;
      }

      .flex.h-screen {
        flex-direction: column;
        height: auto;
      }
    }
  </style>

  <!-- Fullscreen Toggle Script -->
  <script>
    function toggleFullScreen(elem) {
      if (!document.fullscreenElement) {
        elem.requestFullscreen?.() || elem.mozRequestFullScreen?.() || elem.webkitRequestFullscreen?.() || elem.msRequestFullscreen?.();
      } else {
        document.exitFullscreen?.() || document.mozCancelFullScreen?.() || document.webkitExitFullscreen?.() || document.msExitFullscreen?.();
      }
    }
  </script>
</head>

<body class="bg-gray-100 font-roboto">
  <div class="flex h-screen overflow-hidden flex-col md:flex-row">
    <!-- Sidebar -->
    <aside style="width: 260px; background-color: #826140; color: white; flex-shrink: 0; display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="padding: 24px; text-align: center; font-size: 20px; font-weight: bold; border-bottom: 1px solid #334155;">
          Troc-Pic Panel
        </div>

        <div style="padding: 16px; text-align: center; border-bottom: 1px solid #334155;">
          <p style="font-size: 14px; font-style: italic; background: linear-gradient(to right, #ffffff, #10b981, #047857); -webkit-background-clip: text; color: transparent;">
            Bonjour {{ e(Session::get('UserName')) }} 👋<br>
            Bienvenue sur votre espace admin.
          </p>
        </div>

        <nav style="padding: 16px; display: flex; flex-direction: column; gap: 12px;">
          @php
            $navLinkStyle = "display: flex; align-items: center; gap: 12px; padding: 10px 16px; border-radius: 8px; background-color: white; color: #826140; font-weight: 500; text-decoration: none;";
            $hoverStyle = "onmouseover=\"this.style.backgroundColor='#e0f2fe'\" onmouseout=\"this.style.backgroundColor='white'\"";
          @endphp

          @if(Session::get('UserRole') == "ROOT")
            <a href="{{ route('TABLEAU') }}" style="{{ $navLinkStyle }}" {!! $hoverStyle !!}><i class="fa fa-home"></i> Tableau de bord</a>
            <a href="{{ route('profil') }}" style="{{ $navLinkStyle }}" {!! $hoverStyle !!}><i class="fa fa-user"></i> Mon Profil</a>
            <a href="{{ route('accueil') }}" style="{{ $navLinkStyle }}" {!! $hoverStyle !!}><i class="fa fa-globe"></i> Voir le site</a>
            <a href="{{ route('LOGOUT') }}" style="{{ $navLinkStyle }}" {!! $hoverStyle !!}><i class="fa fa-sign-out-alt"></i> Se déconnecter</a>
            <a href="{{ route('INTERFACE') }}" style="{{ $navLinkStyle }}" {!! $hoverStyle !!}><i class="fa fa-cogs"></i> Interface Admin</a>
          @else
            <a href="{{ route('TABLEAU') }}" style="{{ $navLinkStyle }}" {!! $hoverStyle !!}><i class="fa fa-home"></i> Tableau de bord</a>
            <a href="{{ route('LECTURE') }}" style="{{ $navLinkStyle }}" {!! $hoverStyle !!}><i class="fa fa-envelope"></i> Messages</a>
            <a href="{{ route('PUBLICATION') }}" style="{{ $navLinkStyle }}" {!! $hoverStyle !!}><i class="fa fa-handshake-o"></i> Proposer un troc</a>
            <a href="{{ route('SERVICES') }}" style="{{ $navLinkStyle }}" {!! $hoverStyle !!}><i class="fa fa-list"></i> Afficher mes trocs</a>
            <a href="{{ route('profil') }}" style="{{ $navLinkStyle }}" {!! $hoverStyle !!}><i class="fa fa-user"></i> Mon Profil</a>
            <a href="{{ route('accueil') }}" style="{{ $navLinkStyle }}" {!! $hoverStyle !!}><i class="fa fa-globe"></i> Voir le site</a>
            <a href="{{ route('LOGOUT') }}" style="{{ $navLinkStyle }}" {!! $hoverStyle !!}><i class="fa fa-sign-out"></i> Se déconnecter</a>
          @endif
        </nav>
      </div>

      <footer style="text-align: center; padding: 12px; font-size: 13px; border-top: 1px solid #334155; background-color: #0f172a;">
        &copy; 2025 Les Amis de la Planète Vivable (APV).
      </footer>
    </aside>

    <!-- Main Content -->
      @yield('content')
  </div>

  <footer style="background-color:#1f2937" class="text-white text-center py-4">
    &copy; 2025 APV. Tous droits réservés.
  </footer>

  <!-- Scripts -->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/tether.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/js/chart.min.js') }}"></script>
    <script src="{{ asset('admin/js/front.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: 4000
      };
    
      @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
      @endif
    
      @if(Session::has('echec'))
        toastr.error("{{ Session::get('echec') }}");
      @endif
    
      @if(Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
      @endif
    
      @if(Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
      @endif
    </script>
    
    <!-- SwiperJS - Slider -->
    <script>
      var swiper = new Swiper(".front-view-slider", {
        slidesPerView: 5,
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        pagination: {
          el: ".room-swiper-pagination",
          clickable: true
        },
        breakpoints: {
          360: { slidesPerView: 1, spaceBetween: 20 },
          575: { slidesPerView: 3, spaceBetween: 20 },
          768: { slidesPerView: 3, spaceBetween: 20 },
          1024: { slidesPerView: 3 },
          1400: { slidesPerView: 5, spaceBetween: 20 },
          1600: { slidesPerView: 5, spaceBetween: 30 }
        }
      });
    </script>
    
    <!-- jQuery UI Datepicker (nécessite jQuery UI CSS/JS dans le <head>) -->
    <script>
      $(function () {
        $("#datepicker").datepicker({
          autoclose: true,
          todayHighlight: true
        }).datepicker('update', new Date());
      });
    </script>

@yield('scripts')
