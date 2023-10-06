@extends('layouts.admin')
@section('content')
<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="content-inner chart-cont">
    <!--***** CONTENT *****-->
    <div class="card p-4">
        <div class="row">
            <hgroup class="mb20">
                <h1>Affichage des services offerts et recherchés par les utilisateurs</h1>
            </hgroup>

            @foreach ($troc as $troc)
            <section class="col-xs-12 col-sm-6 col-md-12">
              <hgroup class="mb20">
                <article class="search-result row">
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <a title="Lorem ipsum" class="thumbnail">
                            <img src="{{asset('/articlesImages/'.$troc->image)}}" class="img-fluid" alt="Lorem ipsum" style="width: 100%; height: 200px; object-fit: cover;" />
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2">
                        <ul class="meta-search">
                            <li><i class="fa fa-calendar"></i><span>{{ $troc->date }}</span></li>
                            <li><i class="fa fa-clock-o"></i><span>{{ $troc->adresse }}</span></li>
                            <li><i class="fa fa-tags"></i><span>{{ $troc->typeTroc }}</span></li>
                            <li><i class="fa fa-map-marker"></i><span>{{ $troc->adresse }}</span></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
                        <h3><a>{{ $troc->nom }}</a></h3>
                        <p>{{ $troc->description }}</p>
                    </div>
                    <button type="button" class="btn btn-primary btn-xs m-2" data-toggle="modal" data-target="#modal{{$troc->id}}">Modifier</button>
                    <form action="{{route('deleteTroc',($troc->id))}}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet Troc ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger m-2">Supprimer</button>
                    </form>
                    <span class="clearfix borda"></span>
                </article>
              </hgroup>
                <!-- Modal de modification -->
                <div class="modal fade" id="modal{{$troc->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modifier le Troc</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Formulaire de modification -->
                                <form action="{{ route('updateTroc', $troc->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $troc->nom }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description">{{ $troc->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="text" class="form-control" id="date" name="date" value="{{ $troc->date }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="adresse">Adresse</label>
                                        <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $troc->adresse }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="typeTroc">Type de Troc</label>
                                        <input type="text" class="form-control" id="typeTroc" name="typeTroc" value="{{ $troc->typeTroc }}">
                                    </div>
                                    <!-- Ajoutez d'autres champs de modification selon vos besoins -->
                                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin du modal de modification -->
            </section>
            @endforeach

        </div>
    </div>
</div>

@endsection
