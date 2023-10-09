@extends('layouts.admin')
@section('content')
<!--====================================================
                        PAGE CONTENT
======================================================-->
<div class="content-inner chart-cont">
    <!--***** CONTENT *****-->
    <div class="row mt-2" id="card-prof">
        <div class="col-md-3">
            <!-- Début de la boucle -->
            @foreach ($user as $user)
            <div class="card hovercard">
                <div class="cardheader"></div>
                <div class="avatar">
                    <center><img alt="" src="{{asset('admin/img/avatar-1.jpg')}}" class="img-fluid"></center>
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="#">{{ $user->nom }} {{ $user->prenom }}</a>
                    </div>
                    <div class="desc">{{ $user->email }}</div>
                    <hr>
                </div>
                <nav class="nav text-center prof-nav">
                    <ul class="list-unstyled ">
                        <li>{{ $user->pseudo }}</li>
                        <li>{{ $user->telephone }}</li>
                        <li>{{ $user->adresse }}</li>
                        <li><a href="{{route('LOGOUT')}}">Se déconnecter</a></li>
                    </ul>
                </nav>
                <div class="bottom">
                    <a class="btn btn-primary btn-sm" rel="publisher" href="#">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            @endforeach
            <!-- Fin de la boucle -->
        </div>
        <div class="col-md-9">
            <div class="card hovercard">
                <div class="tab" role="tabpanel">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item ">
                        <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><span><i class="fa fa-user"></i></span> Compte</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#buzz" role="tab" data-toggle="tab"><span><i class="fa fa-inbox"></i></span> Commentaires reçus</a>
                      </li>
                      <li class="nav-item">
                        <a class a class="nav-link" href="#references" role="tab" data-toggle="tab"><span><i class="fa fa-cog"></i></span> Paramètre</a>
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
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="buzz">
                            <div class="panel panel-default widget">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-comment"></i> évaluations et commentaires reçus d’autres utilisateurs.</h3>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-group">
                                        <!-- Exemple d'évaluation/commentaire factice -->
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img src="{{asset('admin/img/avatar-2.jpg')}}" style="width:80px; height:80px;" "img-circle img-fluid" alt="" /></div>
                                                <div class=" col-md-10">
                                                    <div>
                                                        <div class="mic-info">
                                                            Par: <a href="#">Kossi Axel </a> le 12 août 2023
                                                        </div>
                                                    </div>
                                                    <div class="comment-text">
                                                        Nous félicitons Monsieur Nom pour sa coopération avec nous
                                                    </div>
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-validate"></i></button>
                                                    <button type="submit" class="btn btn-danger">Supprimé</button>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Fin de l'exemple d'évaluation/commentaire factice -->
                                    </ul>
                                </div>
                            </div>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="references">

                        <form action="" method="POST">
                            <div class="row mx-2">
                                <div class="col-md-12 panel-heading">
                                    <h3 class="panel-title">Modifier Info</h3><br>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group row">
                                        <label for="nom" style="width: 85px;" class=" col-form-label">Nom</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="nom" id="nom">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" style="width: 85px;" class=" col-form-label">Email</label>
                                        <div class="col-9">
                                            <input class="form-control" type="email" name="email" id="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" style="width: 85px;" class=" col-form-label">Téléphone</label>
                                        <div class="col-9">
                                            <input class="form-control" type="tel" name="tel" id="telephone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="prenom" style="width: 85px;" class=" col-form-label">Prenom</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="prenom" id="prenom">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pseudo" style="width: 85px;" class=" col-form-label">Pseudo</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="pseudo" id="pseudo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="adresse" style="width: 85px;" class=" col-form-label">Adresse</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="adresse" id="adresse">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
