@extends('layouts.client')
@section('content')

<div id="banner-area" class="banner-area" style="background-image:url({{asset('client/images/banner/banner1.jpg')}})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Rechercher</h1>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>



<section id="project-area" class="project-area solid-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">explorez (le troc dans les années 1800)</h2>
                <h3 class="section-sub-title">Rechercher un troc</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="shuffle-btn-group">
                    <!-- Vos boutons de filtre ici -->
                </div>
            </div>
        </div>

        <div class="row shuffle-wrapper">
            <div class="col-1 shuffle-sizer"></div>
            @foreach ($troc->take(12) as $troc)
            <!-- Premier élément -->
            <div class="col-lg-3 col-md-4 col-sm-6 shuffle-item" data-groups='["government","healthcare"]'>
                <div class="project-img-container">
                    <a class="gallery-popup" href="{{ asset('/articlesImages/' . $troc->image) }}">
                        <img class="img-responsive" src="{{ asset('/articlesImages/' . $troc->image) }}" alt="project-image" style="width: 200px; height: 200px;">
                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                    </a>
                    <div class="project-item-info">
                        <div class="project-item-info-content">
                            <h5 class="project-item-title" style="font-size: 16px;">
                                <a href="details.html" style="margin-top:-15px; max-width: 100%; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block;">{{ $troc->nom }}</a>
                            </h5>
                            <div style="display: flex; max-width: 100%; text-overflow: ellipsis; display: block;">
                                <p class="project-cat">{{ $troc->typeTroc }}</p>
                                &nbsp;
                                <span class="project-date" style="color: #ffb600;">{{ $troc->date }}</span>
                            </div>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#messageModal" data-image="{{ asset('/articlesImages/' . $troc->image) }}" style="margin-top:-10px;">
                                <i class="fa fa-envelope"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Description avec hauteur maximale -->
                <p class="project-description" style="margin-top: 10px; text-align: center; background-color: #f0f0f0; padding: 10px; max-height: 100px; overflow: hidden;">
                    {{ $troc->description }}
                </p>
            </div>
            <!-- shuffle item 1 end -->
            @endforeach
            <!-- shuffle end -->
        </div>

        <!-- Modal commun pour envoyer un message -->
        <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="messageModalLabel">Envoyer un message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="modal-image" class="img-fluid" src="" alt="project-image">
                        <div class="form-group">
                            <label for="message">Message :</label>
                            <textarea class="form-control" id="message" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-12">
            <div class="general-btn text-center">
                <a class="btn btn-primary" href="#">Voir plus</a>
            </div>
        </div> --}}
        <!-- Ajoutez ces boutons "Suivant" et "Précédent" sous la section de publications -->
        <div class="row">
            <div class="col-12 text-center">
                <button class="btn btn-primary" id="prevPage">Précédent</button>
                <button class="btn btn-primary" id="nextPage">Suivant</button>
            </div>
        </div>

    </div>
</section>


<!-- Biens end -->

@endsection
