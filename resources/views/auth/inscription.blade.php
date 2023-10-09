<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <title>Deal-app </title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/font-icon-style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('admin/css/pages/login.css')}}">
</head>

<body>

<!--====================================================
                        PAGE CONTENT
======================================================-->
<section class="hero-area text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="contact-h-cont">
                    <form action="{{ route('NEWUSER') }}" method="POST" class="form-horizontal">
                        @method('POST')
                        @csrf
                        <div class="results">
                            @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif

                            @if(session::get('echec'))
                            <div class="alert alert-success">
                                {{ session::get('echec') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-title-bg">
                            <h2 class="form-title">Créer un compte</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                      </div>
                                        <input type="text" class="form-control" id="nom" name="nom" required>
                                        <span class="text-danger">@error('nom'){{ $message }}@enderror</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="prenom">Prénom</label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                      </div>
                                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                                        <span class="text-danger">@error('prenom'){{ $message }}@enderror</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="pseudo">Nom d'utilisateur</label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                      </div>
                                        <input type="text" class="form-control" id="pseudo" name="pseudo" required>
                                        <span class="text-danger">@error('pseudo'){{ $message }}@enderror</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="telephone">Numéro de téléphone</label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                      </div>
                                        <input type="text" class="form-control" id="telephone" name="telephone" required>
                                        <span class="text-danger">@error('telephone'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="adresse">Adresse</label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-map-marker"></i>
                                      </div>
                                        <input type="text" class="form-control" id="adresse" name="adresse" required>
                                        <span class="text-danger">@error('adresse'){{ $message }}@enderror</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email"> E-mail</label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                      </div>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                      </div>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-general btn-blue" style="border-bottom-color: limegreen">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Global Javascript -->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/tether.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
</body>

</html>
