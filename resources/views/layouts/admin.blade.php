<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <title>DEAL APP</title>
    <link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}">
    <!-- global stylesheets -->
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/font-icon-style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('admin/css/ui-elements/card.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('admin/css/apps/email.css')}}">
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('admin/css/form.css')}}">
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('admin/css/apps/invoice.css')}}">
        <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('admin/css/pages/search.css')}}">
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('admin/css/pages/gallery.css')}}">
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('admin/css/pages/login.css')}}">
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('admin/css/profile.css')}}">
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('admin/css/ui-elements/card.css')}}">
</head>


<body>
<!--====================================================
                         MAIN NAVBAR
======================================================-->
    <header class="header">
        <nav class="navbar navbar-expand-lg ">
            <div class="search-box">
                <button class="dismiss"><i class="icon-close"></i></button>
                <form id="searchForm" action="#" role="search">
                    <input type="search" placeholder="Rechercher un service" class="form-control">
                </form>
            </div>
            <div class="container-fluid ">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header">
                        <a href="{{route('TABLEAU')}}" class="navbar-brand">
                            <div class="brand-text brand-big hidden-lg-down"><img src="{{asset('admin/img/logo-white.png')}}" alt="Logo" class="img-fluid"></div>
                            <div class="brand-text brand-small"><img src="{{asset('admin/img/logo-icon.png')}}" alt="Logo" class="img-fluid"></div>
                        </a>
                        <a id="toggle-btn" href="#" class="menu-btn active">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <!-- Expand-->
                    <li class="nav-item d-flex align-items-center full_scr_exp"><a class="nav-link" href="#"><img src="{{asset('admin/img/expand.png')}}"
                        onclick="toggleFullScreen(document.body)" class="img-fluid" alt=""></a></li>
                    <!-- Search-->
                    <li class="nav-item d-flex align-items-center"><a id="search" class="nav-link" href="#"><i class="icon-search"></i></a></li>
                    <!-- Notifications-->
                    <li class="nav-item dropdown">
                        <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="fa fa-bell-o"></i><span class="noti-numb-bg"></span><span class="badge">12</span></a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item nav-link">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-envelope bg-red"></i>Vous avez 6 nouveaux messages</div>
                                        <div class="notification-time"><small>4 minutes ago</small></div>
                                    </div>
                                </a>
                            </li>
                            <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                <strong>Voir toutes les notifications</strong></a></li>
                        </ul>
                    </li>
                    <!-- Messages -->
                    <li class="nav-item dropdown"> <a id="messages" class="nav-link logout" rel="nofollow" data-target="#" href="#"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="noti-numb-bg"></span>
                        <span class="badge">10</span></a>
                        <ul aria-labelledby="messages" class="dropdown-menu">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"><img src="{{asset('admin/img/avatar-1.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5 msg-nav-h3">Jason Doe</h3><span> vous a envoyé un message</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"><img src="{{asset('admin/img/avatar-2.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5 msg-nav-h3">Franck william</h3><span> vous a envoyé un message</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="{{asset('admin/img/avatar-3.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5 msg-nav-h3">Ashley Wood</h3><span> vous a envoyé un message</span>
                                    </div>
                                </a>
                            </li>
                            <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Lire tous les messages</strong></a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a id="profile" class="nav-link logout" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('admin/img/avatar-1.jpg')}}" alt="..." class="img-fluid rounded-circle" style="height: 30px; width: 30px;"></a>
                        <ul aria-labelledby="profile" class="dropdown-menu profile">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="{{asset('admin/img/avatar-1.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5">Nom & prénom</h3><span>name@gmail.com</span>
                                    </div>
                                </a>
                                <hr>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-user "></i>Compte</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-envelope-o"></i>Messages</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-cog"></i>Paramètre</div>
                                    </div>
                                </a>
                                <hr>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-power-off"></i>Se déconnecter</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
            </header>



    <!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">

        <!--***** SIDE NAVBAR *****-->
        <nav class="side-navbar">
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="{{asset('admin/img/avatar-1.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h4">Admin</h1>
                </div>
            </div>
            <hr>
            <!-- Sidebar Navidation Menus-->
            <ul class="list-unstyled">
                <li class="active"> <a href="{{route('TABLEAU')}}"><i class="icon-home"></i>Tableau de bord</a></li>
                <li><a href="{{route('SERVICES')}}"><i class="fa fa-handshake-o"></i>Services</a></li>
                <li><a href="{{route('messagerie')}}"><i class="fa fa-envelope"></i>Messages</a></li>
                <li><a href="#forms" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-plus-square"></i>Publication</a>
                    <ul id="forms" class="collapse list-unstyled">
                        <li><a href="{{route('PUBLICATION')}}">Publier un service</a></li>
                        <li><a href="{{route('recherche')}}">Rechercher un service</a></li>
                    </ul>
                </li>
                <li><a href="{{route('profil')}}"><i class="fa fa-user"></i>Profil</a></li>
                <li> <a href="{{route('LOGOUT')}}"> <i class="fa fa-power-off"></i>Se deconnecter</a></li>
                <li> <a href="{{route('images')}}"> <i class="icon-picture"></i>Galerie photos</a></li>
            </ul>
        </nav>

        @yield('content')

    </div>
        <!--Global Javascript -->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/popper/popper.min.js')}}"></script>
    <script src="{{asset('admin/js/tether.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('admin/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin/js/chart.min.js')}}"></script>
    <script src="{{asset('admin/js/front.js')}}"></script>
    <!--Core Javascript -->
    <script src="{{asset('admin/js/mychart.js')}}"></script>
    <!--Core Javascript -->
    <script>
        new Chart(document.getElementById("myChart-nav").getContext('2d'), {
          type: 'doughnut',
          data: {
            labels: ["M", "T", "W", "T", "F", "S", "S"],
            datasets: [{
              backgroundColor: [
                "#2ecc71",
                "#3498db",
                "#95a5a6",
                "#9b59b6",
                "#f1c40f",
                "#e74c3c",
                "#34495e"
              ],
              data: [12, 19, 3, 17, 28, 24, 7]
            }]
          },
          options: {
              legend: { display: false },
              title: {
                display: true,
                text: ''
               }
            }
        });
    </script>
</body>
</html>
