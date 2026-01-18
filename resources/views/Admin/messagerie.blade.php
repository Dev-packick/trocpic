@extends('layouts.admin')

@section('content')
<div class="content-inner chart-cont" style="padding: 30px; font-family: 'Segoe UI', sans-serif; background-color: #f1f5f9;">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!--@if(session('success'))-->
                <!--<div style="background-color: #d1fae5; border-left: 5px solid #10b981; color: #065f46; padding: 12px 16px; border-radius: 6px; margin-bottom: 20px;">-->
                <!--    {{ session('success') }}-->
                <!--</div>-->
                <!--@endif-->

                <h1 style="font-size: 28px; color: #1f2937; margin-bottom: 20px;">Mes messages</h1>

                <div style="display: flex; flex-direction: column; gap: 16px;">
                    @foreach ($messages as $message)
                    <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 16px; background-color: #ffffff;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="display: flex; gap: 12px; align-items: center;">
                                <img src="{{ asset('client/images/user1.png') }}" style="width: 50px; height: 50px; border-radius: 50%;">
                                <div>
                                    <strong>{{ $message->sender->nom }}</strong><br>
                                    <small style="color: #6b7280;">{{ $message->created_at->translatedFormat('d F Y à H:i') }}</small>
                                </div>
                            </div>
                            <form action="{{ route('deleteMessage', $message->id) }}" method="POST" class="delete-message-form">
                                @csrf
                                @method('DELETE')
                                <button style="border: none; background: none;"><i class="fa fa-trash" style="color: #dc2626;"></i></button>
                            </form>
                        </div>
                        <p style="margin-top: 10px;">{{ $message->message }}</p>

                        <button type="button" class="view-message-btn btn btn-outline-primary mt-2"
                            data-message="{{ $message->message }}"
                            data-sender-id="{{ $message->sender->id }}"
                            data-troc-id="{{ $message->troc_id }}">
                            Répondre
                        </button>
                    </div>
                    @endforeach
                </div>

                <!-- Modal personnalisé -->
                <div id="messageModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.4); justify-content: center; align-items: center; z-index: 1000; padding: 20px; box-sizing: border-box;">
                    <div style="background: white; border-radius: 12px; padding: 24px; width: 100%; max-width: 600px; box-sizing: border-box;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                            <h5 style="margin: 0; color: #111827;">Répondre au message</h5>
                            <button id="closeModal" style="background: none; border: none; font-size: 24px; cursor: pointer; color: #6b7280;">&times;</button>
                        </div>
                        <form id="replyForm" method="POST" action="{{ route('repondreMessage') }}">
                            @csrf
                            <input type="hidden" name="recever_id" id="replyReceiverId" value="">
                            <input type="hidden" name="troc_id" id="replyTrocId" value="">
                            <textarea name="message" rows="4" required style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 14px; margin-bottom: 16px;" placeholder="Écrivez votre réponse ici..."></textarea>
                            <button type="submit" style="background-color: #10b981; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer;">Envoyer</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const modal = document.getElementById('messageModal');
        const closeModal = document.getElementById('closeModal');

        document.querySelectorAll('.view-message-btn').forEach(button => {
            button.addEventListener('click', () => {
                const senderId = button.getAttribute('data-sender-id');
                const trocId = button.getAttribute('data-troc-id');

                document.getElementById('replyReceiverId').value = senderId;
                document.getElementById('replyTrocId').value = trocId;

                modal.style.display = 'flex';
            });
        });

        closeModal.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });

        // ✅ SweetAlert pour envoi de message
        const replyForm = document.getElementById('replyForm');
        replyForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(replyForm);

            fetch(replyForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.code === 1) {
                    modal.style.display = 'none';
                    replyForm.reset();
                    Swal.fire({
                        icon: 'success',
                        title: 'Message envoyé',
                        text: data.msg,
                        showConfirmButton: false,
                        timer: 2000
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur',
                        text: data.msg || 'Un problème est survenu'
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur serveur',
                    text: 'Une erreur est survenue.'
                });
            });
        });

        // ✅ SweetAlert pour suppression de message
        document.querySelectorAll('.delete-message-form').forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Supprimer ce message ?',
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
    });
</script>
@endsection
