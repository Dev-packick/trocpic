@extends('layouts.client')
@section('content')

<div id="banner-area" class="banner-area" style="background-image:url({{asset('client/images/banner/banner1.jpg')}})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Contact</h1>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>



<section id="main-container" class="main-container">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">NOUS AIMONS ENTENDRE</h2>
        <h3 class="section-sub-title">CONTACTEZ NOTRE ÉQUIPE</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Rendez nous visite</h4>
            <p>Lomé, TOGO</p>
            <a href="#" class="btn btn-primary">Localisation</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Ecrivez nous</h4>
            <p>alipatrick7@gmail.com</p>
            <a class="btn btn-primary" href="mailto:alipatrick7@gmail.com">Email</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Appellez nous</h4>
            <p>(+228) 90612190</p>
            <a class="btn btn-primary"  href="tel:90612190">Téléphone</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
