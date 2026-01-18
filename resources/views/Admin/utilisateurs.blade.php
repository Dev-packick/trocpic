@extends('layouts.admin')

@section('content')
<!--====================================================
                        PAGE CONTENT
======================================================-->
<div class="content-inner chart-cont">
    <!--***** CONTENT *****-->
    <div class="card p-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Mes trocs</h1>
                <!--<div class="results">-->
                <!--    @if(Session::get('success'))-->
                <!--        <div class="alert alert-success">-->
                <!--            {{ Session::get('success') }}-->
                <!--        </div>-->
                <!--    @endif-->
                <!--</div>-->
            </div>

            @foreach ($troc as $troc)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('/articlesImages/' . $troc->image)}}" class="card-img-top" alt="{{ $troc->nom }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $troc->nom }}</h5>
                            <div class="d-flex flex-column align-items-start mb-3">
                                <span><i class="fa fa-calendar"></i> {{ $troc->created_at->translatedFormat('d F Y') }}</span>
                                <span><i class="fa fa-map-marker-alt"></i> {{ $troc->adresse }}</span>
                                <span><i class="fa fa-tags"></i> {{ $troc->typeTroc }}</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-primary btn-sm open-modal-btn" data-id="{{ $troc->id }}">
                                    Modifier
                                </button>

                                <form action="{{ route('deleteTroc', $troc->id) }}" method="POST" class="delete-troc-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal de modification -->
                <div class="modal fade" id="modal{{ $troc->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel{{ $troc->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{ route('updateTroc', $troc->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel{{ $troc->id }}">Modifier le Troc</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="nom{{ $troc->id }}">Nom</label>
                                        <input type="text" class="form-control" id="nom{{ $troc->id }}" name="nom" value="{{ $troc->nom }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description{{ $troc->id }}">Description</label>
                                        <textarea class="form-control" id="description{{ $troc->id }}" name="description" required>{{ $troc->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="adresse{{ $troc->id }}">Adresse</label>
                                        <input type="text" class="form-control" id="adresse{{ $troc->id }}" name="adresse" value="{{ $troc->adresse }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="typeTroc{{ $troc->id }}">Type de Troc</label>
                                        <input type="text" class="form-control" id="typeTroc{{ $troc->id }}" name="typeTroc" value="{{ $troc->typeTroc }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image{{ $troc->id }}">Image</label>
                                        <input type="file" class="form-control-file" id="image{{ $troc->id }}" name="image" accept="image/*">
                                        <small class="form-text text-muted">Laisser vide pour ne pas changer l'image actuelle.</small>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Fin modal -->
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.delete-troc-form').forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                
                Swal.fire({
                    title: 'Supprimer ce troc ?',
                    text: "Cette action est irréversible.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Oui, supprimer',
                    cancelButtonText: 'Annuler'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });

        // Toastr si succès
        @if(Session::has('success'))
            Swal.fire({
                icon: 'success',
                title: 'Succès',
                text: "{{ Session::get('success') }}",
                timer: 2000,
                showConfirmButton: false
            });
        @endif
        @if(Session::has('echec'))
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: "{{ Session::get('echec') }}"
            });
        @endif
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // ... ton script SweetAlert déjà existant ici ...

        // ✅ Ouvre dynamiquement le modal du bon troc
        document.querySelectorAll('.open-modal-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const id = btn.getAttribute('data-id');
                $('#modal' + id).modal('show');
            });
        });
    });
</script>

@endsection
