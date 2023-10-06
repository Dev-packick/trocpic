@extends('layouts.client')
@section('content')

<div id="banner-area" class="banner-area" style="background-image:url({{asset('client/images/banner/banner1.jpg')}})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Détails Troceur</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Project</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Projects Single</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end -->



<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div id="page-slider" class="page-slider small-bg">
          <div class="item">
            <img loading="lazy" class="img-fluid" src="{{asset('client/images/projects/project5.jpg')}}" alt="project-image" />
          </div>
          <div class="item">
            <img loading="lazy" class="img-fluid" src="{{asset('client/images/projects/project4.jpg')}}" alt="project-image" />
          </div>
        </div>
      </div>


      <div class="col-lg-4 mt-5 mt-lg-0">
        <h3 class="column-title mrt-0">Ce que je propose</h3>
        <p>Description Description Description Description Description Description Description Description Description</p>

        <ul class="project-info list-unstyled">
          <li>
            <p class="project-info-label">Catégorie</p>
            <p class="project-info-content">Pransbay Powers Authority</p>
          </li>
          <li>
            <p class="project-info-label">Type de troc</p>
            <p class="project-info-content">Dlarke Pelli Incorp</p>
          </li>
          <li>
            <p class="project-info-label">Date</p>
            <p class="project-info-content">McLean, VA</p>
          </li>
          <li>
            <p class="project-info-label">Localisation</p>
            <p class="project-info-content">Commercial, Interiors</p>
          </li>
          <li>
            <p class="project-link">
              <a class="btn btn-primary" target="_blank" href="#">Envoyez un message</a>
            </p>
          </li>
        </ul>

      </div>
    </div>
  </div>
</section>
<!-- Main container end -->

@endsection
