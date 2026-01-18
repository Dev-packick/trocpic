@extends('layouts.client')
@section('content')

<div id="banner-area" class="banner-area" style="background-image:url({{asset('client/images/banner/banner1.jpg')}})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Ajouter un troc</h1>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>



<section id="main-container" class="main-container" style="background-color: #f0f0f0; min-height: 100vh; display: flex; justify-content: center; align-items: center;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="error-page text-center">

          <form action="{{route('AJOUTER')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="form-container" style="background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); text-align: center; animation: fadeInUp 0.5s ease; display: flex; flex-wrap: wrap; justify-content: space-between;">
              <div style="width: 48%;">
                <div class="form-group" style="margin-bottom: 15px;">
                  <label for="nom" style="font-weight: bold; color: #555;">Ce que je propose:</label>
                  <input type="text" id="nom" name="nom" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px; font-size: 16px;">
                  <div class="error"></div>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                  <label for="adresse" style="font-weight: bold; color: #555;">Adresse (lieu):</label>
                  <input type="text" id="adresse" name="adresse" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px; font-size: 16px;">
                  <div class="error"></div>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                  <label for="description" style="font-weight: bold; color: #555;">Description de l'objet:</label>
                  <textarea id="description" name="description" rows="4" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px; font-size: 16px; resize: vertical;"></textarea>
                  <div class="error"></div>
                </div>
              </div>

              <div style="width: 48%;">
                <div class="form-group" style="margin-bottom: 15px;">
                  <label for="typeTroc" style="font-weight: bold; color: #555;">Type de troc:</label>
                  <select id="typeTroc" name="typeTroc" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px; font-size: 16px;">
                    <option value="option1">Bien</option>
                    <option value="option2">Service</option>
                    <option value="option3">Don</option>
                  </select>
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                  <label for="date" style="font-weight: bold; color: #555;">Date:</label>
                  <input type="date" id="date" name="date" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px; font-size: 16px;">
                  <div class="error"></div>
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                  <label for="image" style="font-weight: bold; color: #555;">Image de ce que je propose:</label>
                  <input type="file" id="image" name="image" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px; font-size: 16px;">
                  <div class="error"></div>
                </div>
              <div class="results">
                @if(Session::has('success'))
                  <div class="alert alert-success">
                    {{ Session::get('success') }}
                  </div>
                @endif
              </div>
            </div>
              <div class="form-group" style="width: 100%;">
                <button type="submit" href="{{route('CONNEXION')}}" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 3px; font-size: 18px; cursor: pointer; transition: background-color 0.3s; width: 100%;">Soumettre</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>







@endsection
