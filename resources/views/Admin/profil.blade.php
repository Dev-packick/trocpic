@extends('layouts.admin')
@section('content')
<!--====================================================
                        PAGE CONTENT
======================================================-->
<div class="content-inner chart-cont">

            <!--***** CONTENT *****-->
            <div class="row mt-2" id="card-prof">
                <div class="col-md-3">
                    <div class="card hovercard">
                        <div class="cardheader"></div>
                        <div class="avatar">
                            <center><img alt="" src="{{asset('admin/img/avatar-1.jpg')}}" class="img-fluid"></center>
                        </div>
                        <div class="info">
                            <div class="title">
                                <a target="_blank" href="#">Noms & prénoms</a>
                            </div>
                            <div class="desc">name@gmail.com</div>
                            <hr>
                        </div>
                        <nav class="nav text-center prof-nav">
                            <ul  class="list-unstyled ">
                                <li><a href="#">Photo de profil</a></li>
                                <li><a href="#">Messages</a></li>
                                <li><a href="#">Localisation</a></li>
                                <li><a href="login.html">Se déconnecter</a></li>
                            </ul>
                        </nav>
                        <div class="bottom">
                            {{-- <a class="btn btn-info btn-twitter btn-sm" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" rel="publisher"
                               href="#">
                                <i class="fa fa-google-plus"></i>
                            </a> --}}
                            <a class="btn btn-primary btn-sm" rel="publisher"
                               href="#">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card hovercard">
                        <div class="tab" role="tabpanel">
                            <ul class="nav nav-tabs" role="tablist">
                              <li class="nav-item ">
                                <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><span><i class="fa fa-user"></i></span> Compte</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#buzz" role="tab" data-toggle="tab"><span><i class="fa fa-inbox"></i></span> Commentaires reçu</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#references" role="tab" data-toggle="tab"><span><i class="fa fa-cog"></i></span> Paramètre</a>
                              </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                              <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec urna aliquam, ornare eros vel, malesuada lorem. Nullam faucibus lorem at eros consectetur lobortis. Maecenas nec nibh congue, placerat sem id, rutrum velit. </p>
                                    <div class="row" id="report4">
                                        <div class="col-md-4">
                                            <div class="card text-center social-bottom sb-fb">
                                                <img src="{{asset('admin/img/avatar-2.jpg')}}" class="img-fluid" alt=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center social-bottom sb-fb">
                                                <img src="{{asset('admin/img/avatar-2.jpg')}}" class="img-fluid" alt=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center social-bottom sb-fb">
                                                <img src="{{asset('admin/img/avatar-2.jpg')}}" class="img-fluid" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <h5 class="col-12 mb-2"><b>Informations utilisateur</b></h5>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <strong class="mr-2"><i class="fa fa-envelope"> E-mail: </i></strong> name@gmail.com
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-2"><i class="fa fa-phone"> Téléphone: </i></strong> +228 90112233
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-2"><i class="fa fa-map"> Ville: </i></strong> Lomé
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <strong class="mr-1"><i class="fa fa-globe"> Pays: </i></strong> TOGO
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-1"><i class="fa fa-map-marker"> Quartier: </i></strong>   Agoè asssiyeye, Non loin du marché d'assiyeye
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-1"><i class="fa fa-user"> Profession: </i></strong>  Revendeur
                                            </div>
                                        </div>
                                    </div>
                              </div>
                              <div role="tabpanel" class="tab-pane fade" id="buzz">
                                    <div class="panel panel-default widget">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-comment"></i> évaluations et commentaires reçus d’autres utilisateurs.</h3>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="{{asset('admin/img/avatar-2.jpg')}}" class="img-circle img-fluid" alt="" /></div>
                                                        <div class=" col-md-10">
                                                            <div>
                                                                <a href="#">
                                                                    7/10
                                                                </a>
                                                                <div class="mic-info">
                                                                    Par: <a href="#">Kossi Axel </a> le 12 aout 2023
                                                                </div>
                                                            </div>
                                                            <div class="comment-text">
                                                                Nous félicitons Monsieur Nom pour sa coopération avec nous
                                                            </div>
                                                            <a  href="#" class="btn btn-sm btn-hover btn-primary" href="#reply" ><span class="fa fa-share-alt" style="padding-right:3px;"></span></a>
                                                            <a href="#" class="btn btn-sm btn-hover btn-danger"><span class="fa fa-remove" style="padding-right:3px;"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="{{asset('admin/img/avatar-3.jpg')}}" class="img-circle img-fluid" alt="" /></div>
                                                        <div class=" col-md-10">
                                                            <div>
                                                                <a href="#">
                                                                    10/10
                                                                </a>
                                                                <div class="mic-info">
                                                                    Par: <a href="#">Michèle DODJI</a> le 12 aout 2023
                                                                </div>
                                                            </div>
                                                            <div class="comment-text">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="{{asset('admin/img/avatar-2.jpg')}}" class="img-circle img-fluid" alt=""/></div>
                                                        <div class=" col-md-10">
                                                            <div>
                                                                <a href="#">
                                                                    10/10
                                                                </a>
                                                                <div class="mic-info">
                                                                    Par: <a href="#">Mic AMEGAN </a> le 09 juillet 2023
                                                                </div>
                                                            </div>
                                                            <div class="comment-text">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>

                                        </div>
                                    </div>
                              </div>
                              <div role="tabpanel" class="tab-pane fade" id="references">
                                    <div class="row mx-2">
                                        <div class="col-md-12 panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-comment"></i> Edit Info</h3><br>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group row">
                                                <label for="example-text-input" style="width: 85px;" class=" col-form-label">Ville</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="text" value="Lomé" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" style="width: 85px;" class=" col-form-label">Email</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="email" value="name@gmail.com" id="example-email-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" style="width: 85px;" class=" col-form-label">Téléphone</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="tel" value="+228 90112233" id="example-tel-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="example-text-input" style="width: 85px;" class=" col-form-label">Quartier</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="text" value="Attikoume" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-url-input" style="width: 85px;" class=" col-form-label">Profession</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="url" value="Etudiant" id="example-url-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" style="width: 85px;" class=" col-form-label">Hire Date</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="date" value="2023-08-18" id="example-date-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection
