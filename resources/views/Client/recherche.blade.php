@extends('layouts.client') 
@section('content')

<!-- BANNIÈRE -->
<div class="banner-area text-center text-white" style="background: linear-gradient(to right, #28A745, #FFFFFF); padding: 100px 0;">
  <div class="container">
    <h1 class="display-5 fw-bold">Trouvez votre Troc idéal</h1>
    <p class="lead" style="color:#000;">Explorez les offres d’échange les plus intéressantes près de chez vous</p>
  </div>
</div>

<!-- CONTENU PRINCIPAL -->
<!-- CONTENU PRINCIPAL -->
<section class="py-5" style="background: linear-gradient(to right, #f9fafc, #edf2f7);">
  <div class="container">

    <!-- RECHERCHE -->
    <div class="row justify-content-between align-items-center mb-5">
      <div class="col-md-6">
        <h2 class="fw-bold mb-0" style="font-size: 30px;">Résultats de recherche</h2>
      </div>
      <div class="col-md-6">
        <form method="GET" action="{{ route('BIENS') }}">
          <div class="input-group shadow-sm rounded overflow-hidden">
            <input type="text" name="q" class="form-control border-0" placeholder="Rechercher un mot clé..." value="{{ request('q') }}">
            <button type="submit" class="btn btn-primary px-4 text-white">Rechercher</button>
          </div>
        </form>
      </div>
    </div>

    <!-- GRILLE DES TROCS -->
    <div class="row gx-4">
      @forelse ($troc as $t)
      <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up">
        <div class="card troc-card border-0 bg-white glass-card h-100">
          <div class="card-img-top-wrapper">
            <img src="{{ asset('/articlesImages/' . $t->image) }}" class="card-img-top" alt="Image de troc">
          </div>
          <div class="card-body d-flex flex-column px-4 py-3">
            <small class="text-muted mb-2">Publié le {{ $t->created_at->translatedFormat('d F Y') }}</small>
            <h5 class="card-title mb-2">
              <a href="{{ route('DETAILS', $t) }}" class="text-decoration-none text-primary fw-semibold">{{ $t->nom }}</a>
            </h5>
            <p class="card-text text-muted mb-3" style="font-size: 15px; max-height: 60px; overflow: hidden;">{{ $t->description }}</p>
            <a href="{{ route('DETAILS', $t) }}" class="btn btn-outline-primary btn-sm mt-auto rounded-pill">Voir les détails</a>
          </div>
        </div>
      </div>
      @empty
      <div class="col-12 text-center">
        <div class="alert alert-secondary shadow-sm">
          Aucun troc correspondant n’a été trouvé.
        </div>
      </div>
      @endforelse
    </div>

    <!-- PAGINATION -->
    

  </div>
</section>


<!-- STYLES -->
<style>
  .btn-gradient {
    background: linear-gradient(to right, #667eea, #764ba2);
    border: none;
  }

  .btn-gradient:hover {
    background: linear-gradient(to right, #5a67d8, #6b46c1);
  }

  .glass-card {
    border-radius: 18px;
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(8px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
  }

  .glass-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
  }

  .card-img-top-wrapper {
    height: 220px;
    overflow: hidden;
    border-top-left-radius: 18px;
    border-top-right-radius: 18px;
  }

  .card-img-top {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
  }

  .card-img-top-wrapper:hover .card-img-top {
    transform: scale(1.07);
  }

  .pagination .page-link {
    color: #333;
    border: none;
    background-color: transparent;
    margin: 0 4px;
    font-weight: 500;
  }

  .pagination .page-item.active .page-link {
    background-color: #667eea;
    color: white;
    border-radius: 8px;
  }

  .pagination .page-item .page-link:hover {
    background-color: #e2e8f0;
    border-radius: 8px;
  }

  .troc-card {
    transition: all 0.3s ease-in-out;
  }
</style>

<!-- LIBRAIRIE AOS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 800, once: true });
</script>

@endsection
