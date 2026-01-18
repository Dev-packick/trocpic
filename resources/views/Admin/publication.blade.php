@extends('layouts.admin')

@section('content')
<div class="content-inner form-cont" style="padding: 40px 20px; font-family: 'Segoe UI', sans-serif; background-color: #f1f5f9;">
    <div style="max-width: 1100px; margin: 0 auto;">
        <div style="background-color: #ffffff; border-radius: 16px; box-shadow: 0 15px 30px rgba(0,0,0,0.08); padding: 40px 20px; box-sizing: border-box;">

            <!-- Messages d'erreurs -->
            @if ($errors->any())
                <div style="background-color: #fee2e2; color: #b91c1c; border-left: 6px solid #dc2626; padding: 16px; margin-bottom: 24px; border-radius: 8px;">
                    <ul style="margin: 0; padding-left: 20px;">
                        @foreach ($errors->all() as $error)
                            <li style="margin-bottom: 5px;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Message de succès -->
            @if(Session::get('success'))
                <div style="background-color: #d1fae5; border-left: 6px solid #10b981; color: #065f46; padding: 14px 20px; border-radius: 8px; margin-bottom: 30px; font-size: 16px;">
                    {{ Session::get('success') }}
                </div>
            @endif

            <h2 style="margin-bottom: 35px; font-size: 28px; font-weight: 600; color: #1f2937;">Nouvelle publication</h2>

            <form action="{{ route('AJOUTER') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="display: flex; flex-wrap: wrap; gap: 30px;">

                    <!-- Colonne gauche -->
                    <div style="flex: 1 1 340px; min-width: 280px; box-sizing: border-box;">
                        <div style="margin-bottom: 20px;">
                            <label for="typeTroc" style="display: block; margin-bottom: 8px; font-size: 15px; color: #374151;">Type de troc</label>
                            <select id="typeTroc" name="typeTroc" required style="width: 100%; padding: 14px; border: 1px solid #d1d5db; border-radius: 10px; font-size: 16px; background-color: #f9fafb;">
                                <option value="Bien">Bien</option>
                                <option value="Service">Service</option>
                                <option value="Don">Don</option>
                            </select>
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label for="nom" style="display: block; margin-bottom: 8px; font-size: 15px; color: #374151;">Nom</label>
                            <input type="text" id="nom" name="nom" placeholder="Ce que je propose" required
                                style="width: 100%; padding: 14px; font-size: 16px; border: 1px solid #d1d5db; border-radius: 10px; background-color: #f9fafb;">
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label for="image" style="display: block; margin-bottom: 8px; font-size: 15px; color: #374151;">📷 Insérer une image</label>
                            <input type="file" id="image" name="image" accept="image/*" required
                                style="width: 100%; padding: 10px; font-size: 15px; border: 1px solid #d1d5db; border-radius: 10px; background-color: #ffffff;">
                        </div>
                    </div>

                    <!-- Colonne droite -->
                    <div style="flex: 1 1 340px; min-width: 280px; box-sizing: border-box;">
                        <div style="margin-bottom: 20px;">
                            <label for="adresse" style="display: block; margin-bottom: 8px; font-size: 15px; color: #374151;">📍 Adresse</label>
                            <input type="text" id="adresse" name="adresse" placeholder="Agoe assiyeye, Lomé" required
                                style="width: 100%; padding: 14px; font-size: 16px; border: 1px solid #d1d5db; border-radius: 10px; background-color: #f9fafb;">
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label for="description" style="display: block; margin-bottom: 8px; font-size: 15px; color: #374151;">📝 Description (250 caractères max)</label>
                            <textarea id="description" name="description" rows="5" maxlength="250" placeholder="Ce que je veux en échange, conditions, etc." required
                                style="width: 100%; padding: 14px; font-size: 16px; border: 1px solid #d1d5db; border-radius: 10px; background-color: #f9fafb;"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Boutons -->
                <div style="margin-top: 30px; text-align: right;">
                    <button type="submit"
                        style="background-color: #10b981; color: white; padding: 12px 24px; font-size: 16px; border: none; border-radius: 8px; cursor: pointer; margin-right: 10px;">
                        Publier
                    </button>
                    <button type="reset"
                        style="background-color: #9ca3af; color: white; padding: 12px 24px; font-size: 16px; border: none; border-radius: 8px; cursor: pointer;">
                        Annuler
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
