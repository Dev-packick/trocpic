@extends('layouts.admin')
@section('content')


<div class="content-inner form-cont">
  <div class="row">
    <div class="col-md-12">
      <!--***** BASIC FORM *****-->
      <div class="card form" id="form1">
        <div class="results">
          @if(Session::get('success'))
          <div class="alert alert-success">
            {{ Session::get('success') }}
          </div>
          @endif
        </div>
        <div class="card-header">
          <h3>Nouvelle publication</h3>
        </div>
        <br>
        <form action="{{ route('AJOUTER') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('post')
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label for="exampleSelect1" style="width: 85px;" class=" col-form-label">Type de troc</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fas fa-exchange-alt"></i> <!-- Icône pour l'échange -->
                  </div>
                  <select class="form-control" id="typeTroc" name="typeTroc">
                    <option>Bien</option>
                    <option>Service</option>
                    <option>Don</option>
                  </select>
                  <div class="error"></div>
                </div>
              </div>
              <div class="form-group row">
                <label for="example-text-input" style="width: 85px; class="col-form-label">Ce que je propose</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fas fa-pen"></i> <!-- Icône pour la saisie de texte -->
                  </div>
                  <input class="form-control" type="text" placeholder="Qu'est-ce que vous échangez" name="nom" id="nom" required>
                  <div class="error"></div>
                </div>
              </div>
              <div class="form-group row">
                <label for="example-text-input" style="width: 85px; class="col-form-label">Adresse</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fas fa-map-marker-alt"></i> <!-- Icône pour l'adresse -->
                  </div>
                  <input class="form-control" type="text" name="adresse" placeholder="Agoe assiyeye, Lomé" id="adresse" required>
                  <div class="error"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-date-input">
                  <i class="far fa-calendar-alt"></i> <!-- Icône pour la date -->
                  Date
                </label>
                <input class="form-control" type="date" name="date" id="date" required>
                <div class="error"></div>
              </div>
              <div class="form-group">
                <label for="exampleTextarea">
                  <i class="fas fa-align-left"></i> <!-- Icône pour la description -->
                  Description
                </label>
                <textarea class="form-control" placeholder="Description, compétences requises ou les conditions d’échange..." name="description" id="description" rows="3" required></textarea>
                <div class="error"></div>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">
                  <i class="fas fa-image"></i> <!-- Icône pour l'image -->
                  Insérer une image
                </label>
                <input type="file" class="form-control-file" id="image" name="image" aria-describedby="fileHelp" required>
                <div class="error"></div>
              </div>
            </div>
            <button type="submit" class="btn btn-general btn-blue mr-2">Publier</button>
            <button type="reset" class="btn btn-general btn-white">Annuler</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>




@endsection
