@extends('layouts.admin')

@section('content')
<div class="flex-1 p-6 bg-gray-100 min-h-screen">
    <div class="max-w-4xl mx-auto bg-gray-50 shadow-lg rounded-2xl p-8 transition-all duration-300">

        <h2 class="text-2xl font-bold text-center text-emerald-700 mb-8">Modifier mes informations</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-4 rounded-md mb-6">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('modifierProfil', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="nom" class="block text-sm font-semibold text-gray-700 mb-1">Nom</label>
                    <input id="nom" type="text" name="nom" value="{{ old('nom', $user->nom) }}" required
                        class="w-full px-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:outline-none transition duration-200" />
                </div>

                <div>
                    <label for="prenom" class="block text-sm font-semibold text-gray-700 mb-1">Prénom</label>
                    <input id="prenom" type="text" name="prenom" value="{{ old('prenom', $user->prenom) }}" required
                        class="w-full px-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:outline-none transition duration-200" />
                </div>

                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required
                        class="w-full px-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:outline-none transition duration-200" />
                </div>

                <div>
                    <label for="telephone" class="block text-sm font-semibold text-gray-700 mb-1">Téléphone</label>
                    <input id="telephone" type="text" name="telephone" value="{{ old('telephone', $user->telephone) }}"
                        class="w-full px-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:outline-none transition duration-200" />
                </div>

                <div class="md:col-span-2">
                    <label for="adresse" class="block text-sm font-semibold text-gray-700 mb-1">Adresse</label>
                    <input id="adresse" type="text" name="adresse" value="{{ old('adresse', $user->adresse) }}"
                        class="w-full px-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:outline-none transition duration-200" />
                </div>
            </div>

            <div class="mt-8 text-center" >
                <button type="submit"
                    class="inline-block bg-green-500 hover:bg-white-700 text-white font-semibold px-8 py-3 rounded-full shadow-lg transition duration-300">
                    Enregistrer les modifications
                </button>
            </div>
        </form>

        <!-- Suppression compte -->
        <div class="mt-12 pt-6 border-t border-gray-200 text-center">
            <p class="text-sm text-gray-600 mb-4">Vous souhaitez supprimer votre compte ?</p>

            <form method="POST" action="{{ route('supprimerCompte', $user->id) }}"
                  onsubmit="return confirm('Confirmez-vous la suppression définitive de votre compte ?');">
                @csrf
                @method('DELETE')

                <button type="submit"
                    class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-full shadow transition duration-300">
                    Supprimer mon compte
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
