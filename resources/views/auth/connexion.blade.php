<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion | Se connecter</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" crossorigin="anonymous">

    <!-- Meta -->
    <meta name="description" content="TROC-PIC est une plateforme togolaise innovante de troc numérique...">
    <meta name="keywords" content="Troc, Troc-Pic, Économie circulaire, Togo, Dons, Partage, Services">
    <meta name="author" content="APV Togo - Association Les Amis de la Planète Vivable">
    <meta property="og:title" content="TROC-PIC - Plateforme d’Échange Solidaire">
    <meta property="og:image" content="https://troc.amisdelaplanetevivable.bio/images/banner.jpg">
    <link rel="icon" type="image/png" href="{{ asset('client/images/LOGO_FB.png') }}">
</head>

<!--<body style="margin: 0; font-family: 'Roboto', sans-serif; background: #826140; min-height: 100vh; display: flex; justify-content: center; align-items: center; padding: 20px;">-->
<body style="margin:0;font-family:'Roboto',sans-serif;background:url('client/images/BBB.png') no-repeat center center;background-size:cover;display:flex;align-items:center;justify-content:center;min-height:100vh;padding:20px;">


  <div style="width: 100%; max-width: 920px; background: #fff; border-radius: 20px; box-shadow: 0 15px 40px rgba(0,0,0,0.1); overflow: hidden; display: flex; flex-wrap: wrap; animation: fadeIn 0.8s ease-in-out; position: relative;">

    <!-- Bouton retour -->
    <a href="{{ route('accueil') }}" style="position: absolute; top: 20px; left: 20px; background: #f3f4f6; padding: 8px 15px; border-radius: 20px; font-size: 14px; color: #374151; text-decoration: none; display: flex; align-items: center; gap: 5px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); z-index: 10;">
      <i class="fa fa-arrow-left"></i> Accueil
    </a>

    <!-- Left Panel -->
    <div style="flex: 1; min-width: 300px; background: linear-gradient(135deg,#23a638,#76b729); color: white; padding: 40px 20px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
      <img src="{{ asset('client/images/LOGO_nSF.png') }}" alt="Troc-Pic" style="width: 140px; height: auto; margin-bottom: 20px;">
      <h2 style="font-weight: bold; text-align: center;">Bienvenue sur Troc-Pic</h2>
      <p style="text-align: center; margin-top: 10px;">Troc à l'ère du numérique.<br>Connectez, échangez, profitez.</p>
      <i class="ri-user-add-line" style="font-size: 60px; margin-top: 30px;"></i>
    </div>

    <!-- Right Panel -->
    <div style="flex: 1; min-width: 300px; padding: 60px 40px; background: white; display: flex; flex-direction: column; justify-content: center;">
      <h3 style="margin-bottom: 25px; color: #23a638; font-weight: bold; text-align: center;">Connexion à votre compte</h3>

      <form action="{{ route('AUTHLOGIN') }}" method="POST" style="width: 100%;">
        @csrf

        <div style="margin-bottom: 20px;">
          <input type="email" name="email" placeholder="Adresse e-mail" value="{{ old('email') }}" required
            style="width: 100%; padding: 14px 18px; border-radius: 30px; border: 1px solid #ccc; font-size: 15px;">
          @error('email')<small style="color:red;">{{ $message }}</small>@enderror
        </div>

        <div style="margin-bottom: 20px; position: relative;">
          <input type="password" name="password" id="password" placeholder="Mot de passe" required
            style="width: 100%; padding: 14px 18px; border-radius: 30px; border: 1px solid #ccc; font-size: 15px;">
          <i onclick="togglePassword()" class="ri-eye-off-line" id="togglePwd"
            style="position: absolute; right: 20px; top: 12px; cursor: pointer; color: #888;"></i>
          @error('password')<small style="color:red;">{{ $message }}</small>@enderror
        </div>

        <button type="submit"
          style="width: 100%; background: #23a638; color: white; border: none; border-radius: 30px; padding: 14px; font-weight: bold; font-size: 16px; cursor: pointer;">
          Se connecter
        </button>

        <div style="margin-top: 25px; font-size: 14px; text-align: center;">
          Pas encore inscrit ? <a href="{{ route('INSCRIPTION') }}" style="color: #23a638;">Créer un compte</a>
        </div>
      </form>
    </div>
  </div>

  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.96); }
      to { opacity: 1; transform: scale(1); }
    }

    @media (max-width: 768px) {
      .left-panel h2, .right-panel h3 {
        font-size: 20px !important;
      }
      .ri-user-add-line {
        font-size: 40px !important;
      }
    }
  </style>

  <!-- Scripts -->
  <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
    function togglePassword() {
      const pwd = document.getElementById("password");
      const icon = document.getElementById("togglePwd");
      if (pwd.type === "password") {
        pwd.type = "text";
        icon.className = "ri-eye-line";
      } else {
        pwd.type = "password";
        icon.className = "ri-eye-off-line";
      }
    }

    toastr.options = {
      closeButton: true,
      progressBar: true,
      positionClass: "toast-top-right",
      timeOut: 5000
    };

    @if(Session::has('success'))
      toastr.success("{{ Session::get('success') }}");
    @endif

    @if(Session::has('echec'))
      toastr.error("{{ Session::get('echec') }}");
    @endif
  </script>
</body>
</html>
