@extends('layouts.client')
@section('content')

<!-- En-tête -->
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('client/images/bgb.png') }}); padding: 100px 0; text-align: center; color: white;">
    <div class="container">
        <h1 class="banner-title" style="font-size: 3rem; font-weight: bold;">Détails du Troc</h1>
    </div>
</div>

<section class="main-container" style="padding: 60px 0; background-color: #f9f9f9;">
    <div class="container">
        <div class="row">

            <!-- Colonne image + troqueur -->
            <div class="col-lg-6 mb-4">
                <div class="mb-3 border p-3 rounded shadow-sm">
                    <img src="{{ asset('/articlesImages/' . $troc->image) }}" class="img-fluid rounded" alt="Image Troc">
                </div>
                <div class="border p-3 rounded shadow-sm">
                    <h4 class="text-primary mb-3">👤 Informations du Troqueur</h4>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('client/images/user1.png') }}" alt="Avatar" class="rounded-circle mr-3" width="80">
                        <div>
                            <p><strong>Nom:</strong> {{ optional($troc->user)->nom ?? 'Utilisateur inconnu' }}</p>
                            <p><strong>Prénom:</strong> {{ optional($troc->user)->prenom ?? 'Non disponible' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colonne détails -->
            <div class="col-lg-6">
                <div class="border p-4 rounded shadow-sm">
                    <h2 class="text-success">{{ $troc->nom }}</h2>
                    <span class="badge badge-secondary">Type: {{ $troc->typeTroc }}</span>
                    <p class="mt-3 text-muted">{{ $troc->description }}</p>
                    <ul class="list-unstyled text-muted">
                        <li><strong>📍 Adresse:</strong> {{ $troc->adresse }}</li>
                        <li><strong>📅 Publié le:</strong> {{ $troc->created_at->translatedFormat('d F Y') }}</li>
                    </ul>
                    <div class="mt-3">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#messageModal">
                            <i class="fa fa-envelope"></i> Envoyer un message
                        </button>
                        <!--<a href="{{ optional($troc->user)->telephone ? 'https://wa.me/' . $troc->user->telephone : '#' }}"-->
                        <!--   class="btn btn-success ml-2"-->
                        <!--   target="_blank"-->
                        <!--   {{ optional($troc->user)->telephone ? '' : 'onclick=alert("Numéro WhatsApp non disponible")' }}>-->
                        <!--    <i class="fab fa-whatsapp"></i> WhatsApp-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Commentaires -->
                <div class="mt-5">
                    <h4 class="text-primary">📝 Commentaires ({{ $troc->comments->count() }})</h4>
                    @foreach($troc->comments as $comment)
                        <div class="border p-2 mt-3 rounded bg-white small">
                            <strong>{{ $comment->user->nom }}</strong>
                            <span class="text-muted" style="font-size: 12px;"> • {{ $comment->created_at->translatedFormat('d F Y') }}</span>
                            <p class="mb-1">{{ $comment->content }}</p>

                            @auth
                                @if(Auth::id() === $comment->user_id)
                                    <div class="d-flex">
                                        <a href="#" data-toggle="modal" data-target="#editModal{{ $comment->id }}" class="text-warning mr-3">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#deleteModal{{ $comment->id }}" class="text-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </div>

                                    <!-- Modal modification -->
                                    <div class="modal fade" id="editModal{{ $comment->id }}" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{ route('UPDATECOMMENT', $comment->id) }}" method="POST" class="modal-content">
                                                @csrf @method('PUT')
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modifier le commentaire</h5>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <textarea name="content" class="form-control" rows="4">{{ $comment->content }}</textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Modal suppression -->
                                    <div class="modal fade" id="deleteModal{{ $comment->id }}" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{ route('DELETECOMMENT', $comment->id) }}" method="POST" class="modal-content">
                                                @csrf @method('DELETE')
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Confirmer la suppression</h5>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Voulez-vous vraiment supprimer ce commentaire ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    @endforeach
                </div>

                <!-- Formulaire commentaire -->
                <div class="mt-4">
                    @if(Session::has('succes'))
                        <div class="alert alert-success">{{ Session::get('succes') }}</div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <h5>Laisser un commentaire</h5>
                    @auth
                        <form action="{{ route('SENDCOMMENT', ['troc_id' => $troc->id]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="troc_id" value="{{ $troc->id }}">
                            <div class="form-group">
                                <textarea class="form-control" name="content" rows="3" placeholder="Votre commentaire..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    @else
                        <p class="text-muted">Connectez-vous pour commenter :</p>
                        <a href="{{ route('CONNEXION') }}" class="btn btn-outline-primary">Se connecter</a>
                        <a href="{{ route('INSCRIPTION') }}" class="btn btn-outline-secondary ml-2">S'inscrire</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal de messagerie -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="{{ route('ENVOI') }}" method="POST" id="sendSms" class="modal-content">
            @csrf
            <input type="hidden" name="recever_id" value="{{ optional($troc->user)->id }}">
            <input type="hidden" name="troc_id" value="{{ $troc->id }}">
            <div class="modal-header">
                <h5 class="modal-title">Envoyer un message</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <textarea name="message" class="form-control" rows="4" placeholder="Tapez votre message ici..." required></textarea>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Envoyer</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </form>
    </div>
</div>

@endsection

@push('message')
<script>
    $(function(){
        $("#sendSms").on('submit', function(e){
            e.preventDefault();
            var form = this;
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: new FormData(form),
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function(data){
                    if(data.code === 0){
                        Swal.fire({ icon: 'error', title: 'Erreur', text: data.msg });
                    } else {
                        $(form)[0].reset();
                        $('#messageModal').modal('hide');
                        Swal.fire({ icon: 'success', title: data.msg, showConfirmButton: false, timer: 2000 });
                    }
                },
                error: function(xhr){
                    Swal.fire({ icon: 'error', title: 'Erreur serveur', text: xhr.responseJSON?.message || 'Une erreur est survenue.' });
                }
            });
        });
    });
</script>
@endpush
