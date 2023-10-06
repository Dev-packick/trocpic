
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
      <section class="hero-area">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 ">
                <div class="contact-h-cont">
                    <div class="form-title-bg">
                        <h2 class="form-title">Connexion</h2>
                    </div>
                  {{-- <h3 class="text-center"><img src="{{asset('admin/img/logo.png')}}" class="img-fluid" alt=""></h3><br> --}}
                  <form action="{{route('AUTHLOGIN')}}"  method="post" class="form-horizontal">
                    @method('POST')
                    @csrf
                        <div class="results">
                            @if(Session::get('echec'))
                            <div class="alert alert-danger">
                            {{ Session::get('echec') }}
                        </div>
                    @endif
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
                    <button class="btn btn-general btn-blue" role="button"><i fa fa-right-arrow></i>Se connecter</button>
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


{{-- @extends('layouts.client')
@section('content')
<!--====================================================
HEADER
======================================================-->
    <div id="home-p" class="home-p pages-head3 text-center">
      <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.1s">CONNEXION</h1>
      </div><!--/end container-->
    </div>



<!--====================================================
                        CONNEXION
======================================================-->
    <section class="shop-form bg-gray" id="shop-form">
      <div class="container">
        <div class="row">
          <div class="col-md-10 main-login main-center">
              <form action="{{route('auth.check')}}"  method="post" class="form-horizontal">
                @csrf

                <div class="results">
                    @if(Session::get('echec'))
                    <div class="alert alert-danger">
                        {{ Session::get('echec') }}
                    </div>
                    @endif
                </div>

              <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Mail</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="email" id="email"  placeholder="Entrer votre mail" value="{{old('email')}}"/>
                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Mot de passe</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <input type="password" class="form-control" name="password" id="password"  placeholder="Entrer votre mot de passe" value="{{old('password')}}"/>
                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                  </div>
                </div>
              </div>

              <div class="form-group ">
                <button type="submit" class="btn btn-block btn-primary">Se connecter</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>
@endsection --}}



