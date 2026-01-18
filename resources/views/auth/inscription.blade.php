<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inscription | TROC-PIC</title>

  <!-- SEO & META -->
  <meta name="description" content="TROC-PIC est une plateforme togolaise innovante de troc numérique...">
  <meta name="keywords" content="Troc, Togo, Échange, Anti-gaspillage">
  <meta name="author" content="APV Togo">
  <link rel="icon" type="image/png" href="{{ asset('client/images/LOGO_FB.png') }}">

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/font-awesome-4.7.0/css/font-awesome.min.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" crossorigin="anonymous">
</head>

<!--<body style="margin:0; font-family:'Roboto',sans-serif; background:#826140; display:flex; align-items:center; justify-content:center; min-height:100vh; padding: 20px;">-->
<body style="margin:0;font-family:'Roboto',sans-serif;background:url('client/images/BBB.png') no-repeat center center;background-size:cover;display:flex;align-items:center;justify-content:center;min-height:100vh;padding:20px;">


  <div style="width:100%; max-width:1000px; background:white; border-radius:20px; box-shadow:0 15px 40px rgba(0,0,0,0.1); overflow:hidden; display:flex; flex-wrap:wrap; animation:fadeIn 1s ease-in-out; position:relative;">

    <!-- Bouton retour -->
    <a href="{{ route('accueil') }}" style="position:absolute; top:20px; left:20px; background:#f3f4f6; padding:8px 15px; border-radius:20px; font-size:14px; color:#374151; text-decoration:none; display:flex; align-items:center; gap:5px; box-shadow:0 4px 10px rgba(0,0,0,0.05); z-index:10;">
      <i class="fa fa-arrow-left"></i> Accueil
    </a>

    <!-- Left Panel -->
    <div style="flex:1; min-width:300px; background:linear-gradient(135deg,#23a638,#76b729); color:white; padding:40px 20px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
      <img src="{{ asset('client/images/LOGO_nSF.png') }}" alt="Troc-Pic" style="width:140px; height:auto; margin-bottom:20px;">
      <h2 style="font-weight:bold; text-align:center;">Rejoignez Troc-Pic</h2>
      <p style="text-align:center; margin-top:10px;">Inscrivez-vous pour troquer, partager, découvrir.<br>Gratuit et 100% numérique !</p>
      <i class="ri-user-add-line" style="font-size:60px; margin-top:30px;"></i>
    </div>

    <!-- Right Form -->
    <div style="flex:1; min-width:300px; padding:50px 40px; background:#fff; display:flex; flex-direction:column; justify-content:center;">
      <h3 style="margin-bottom:25px; color:#23a638; font-weight:bold; text-align:center;">Créer un compte</h3>

      <form action="{{ route('NEWUSER') }}" method="POST">
        @csrf

        <div class="row">
          <div class="col-md-6">
            <div style="margin-bottom:20px;">
              <input type="text" name="nom" value="{{ old('nom') }}" placeholder="Nom et prénom" required
                style="width:100%; padding:14px 18px; border-radius:30px; border:1px solid #ccc;">
              @error('nom')<small style="color:red;">{{ $message }}</small>@enderror
            </div>

            <div style="margin-bottom:20px;">
              <input type="text" name="prenom" value="{{ old('prenom') }}" placeholder="pseudo" required
                style="width:100%; padding:14px 18px; border-radius:30px; border:1px solid #ccc;">
              @error('prenom')<small style="color:red;">{{ $message }}</small>@enderror
            </div>

            <div style="margin-bottom:20px; display:flex; align-items:center;">
              <div style="display:flex; align-items:center; background:#f9f9f9; border:1px solid #ccc; border-radius:30px 0 0 30px; padding:10px 15px; gap:8px;">
                  <img src="https://flagcdn.com/w20/tg.png" alt="Togo" style="width:15px; height:auto;">
                  <span style="font-weight:bold; color:#333;">+228</span>
              </div>
              <input type="tel" name="telephone" value="{{ old('telephone') }}" placeholder="90xxxxxx"
                  style="width:85%; padding:10px 14px; border:1px solid #ccc; border-left:none; border-radius:0 30px 30px 0;">
              </div>
              @error('telephone')<small style="color:red;">{{ $message }}</small>@enderror
              
          </div>

          <div class="col-md-6">
            <div style="margin-bottom:20px;">
              <input type="text" name="adresse" value="{{ old('adresse') }}" placeholder="Adresse" required
                style="width:100%; padding:14px 18px; border-radius:30px; border:1px solid #ccc;">
              @error('adresse')<small style="color:red;">{{ $message }}</small>@enderror
            </div>

            <div style="margin-bottom:20px;">
              <input type="email" name="email" value="{{ old('email') }}" placeholder="Adresse e-mail" required
                style="width:100%; padding:14px 18px; border-radius:30px; border:1px solid #ccc;">
              @error('email')<small style="color:red;">{{ $message }}</small>@enderror
            </div>

            <div style="margin-bottom:20px; position:relative;">
              <input type="password" name="password" id="password" placeholder="Mot de passe" required
                style="width:100%; padding:10px 14px; border-radius:30px; border:1px solid #ccc;">
              <i onclick="togglePassword()" class="ri-eye-off-line" id="togglePwd"
                style="position:absolute; right:20px; top:12px; cursor:pointer; color:#888;"></i>
              @error('password')<small style="color:red;">{{ $message }}</small>@enderror
            </div>
          </div>
        </div>

        <button type="submit"
          style="width:100%; background:#23a638; color:white; border:none; border-radius:30px; padding:14px; font-weight:bold; font-size:16px; cursor:pointer;">
          S'inscrire
        </button>

        <div style="margin-top:25px; font-size:14px; text-align:center;">
          Déjà un compte ? <a href="{{ route('CONNEXION') }}" style="color:#23a638;">Connectez-vous ici</a>
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
      h2, h3 {
        font-size: 22px !important;
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

    @if(Session::has('echec'))
      toastr.error("{{ Session::get('echec') }}");
    @endif
  </script>
</body>
</html>
