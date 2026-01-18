@extends('layouts.admin') 
@section('content')

<div class="content-inner" style="flex: 1; background-color: #f8fafc; padding: 40px;">
    <div class="main-content" style="max-width: 1200px; margin: auto;">
        <div class="page-content">

            <!-- Titre -->
            <div data-aos="fade-down" style="text-align: center; margin-bottom: 40px;">
                <h1 style="font-size: 28px; font-weight: bold; color: #826140;">Mon tableau de bord</h1>
            </div>

            @php
                $buttonStyle = "display:inline-block;padding:10px 20px;border-radius:30px;background:linear-gradient(135deg,#10b981,#047857);color:#fff;font-weight:600;text-decoration:none;transition:all 0.3s ease;";
                $buttonHover = "onmouseover=\"this.style.background='linear-gradient(135deg,#16a34a,#065f46)'\" onmouseout=\"this.style.background='linear-gradient(135deg,#10b981,#047857)'\"";
            @endphp

            @if(Session::get('UserRole') == "ROOT")
            <div style="display: flex; flex-wrap: wrap; gap: 24px; justify-content: center;" data-aos="fade-up">
                <!-- Carte -->
                <div style="flex: 1 1 280px; background: white; border-radius: 16px; padding: 24px; text-align: center; box-shadow: 0 6px 24px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 18px; font-weight: bold; color: #826140;">Modifier mon profil</h5>
                    <p style="font-size: 14px; color: #475569;">Mettez à jour vos informations personnelles.</p>
                    <div style="margin: 16px;"><i class="fas fa-user-edit" style="font-size: 32px; color: #10b981;"></i></div>
                    <a href="{{ route('profil') }}" style="{{ $buttonStyle }}" {!! $buttonHover !!}>Accéder</a>
                </div>

                <div style="flex: 1 1 280px; background: white; border-radius: 16px; padding: 24px; text-align: center; box-shadow: 0 6px 24px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 18px; font-weight: bold; color: #826140;">Rechercher un troc</h5>
                    <p style="font-size: 14px; color: #475569;">Trouvez des biens ou services à échanger.</p>
                    <div style="margin: 16px;"><i class="fas fa-search" style="font-size: 32px; color: #0ea5e9;"></i></div>
                    <a href="{{ route('BIENS') }}" style="{{ $buttonStyle }}" {!! $buttonHover !!}>Accéder</a>
                </div>
            </div>

            <div style="margin: 40px 0;"></div>

            <div style="display: flex; flex-wrap: wrap; gap: 24px; justify-content: center;" data-aos="fade-up">
                <div style="flex: 1 1 280px; background: white; border-radius: 16px; padding: 24px; text-align: center; box-shadow: 0 6px 24px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 18px; font-weight: bold; color: #826140;">Messages</h5>
                    <!--<p style="font-size: 14px; color: #475569;">Total : {{ $mesmessages }}</p>-->
                    <div style="margin: 16px;"><i class="fas fa-envelope" style="font-size: 32px; color: #f59e0b;"></i></div>
                    <a href="{{ route('LECTURE') }}" style="{{ $buttonStyle }}" {!! $buttonHover !!}>Accéder</a>
                </div>

                <div style="flex: 1 1 280px; background: white; border-radius: 16px; padding: 24px; text-align: center; box-shadow: 0 6px 24px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 18px; font-weight: bold; color: #826140;">Trocs</h5>
                    <p style="font-size: 14px; color: #475569;">Total : {{ $totalTrocs }}</p>
                    <div style="margin: 16px;"><i class="fas fa-exchange-alt" style="font-size: 32px; color: #10b981;"></i></div>
                    <a href="{{ route('SERVICES') }}" style="{{ $buttonStyle }}" {!! $buttonHover !!}>Accéder</a>
                </div>

                <div style="flex: 1 1 280px; background: white; border-radius: 16px; padding: 24px; text-align: center; box-shadow: 0 6px 24px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 18px; font-weight: bold; color: #826140;">Commentaires</h5>
                    <p style="font-size: 14px; color: #475569;">Total : {{ $mescommentaires }}</p>
                    <div style="margin: 16px;"><i class="fas fa-headset" style="font-size: 32px; color: #f59e0b;"></i></div>
                </div>
            </div>

            @else
            <!-- NON ROOT -->
            <div style="display: flex; flex-wrap: wrap; gap: 24px; justify-content: center;" data-aos="fade-up">
                <div style="flex: 1 1 280px; background: white; border-radius: 16px; padding: 24px; text-align: center; box-shadow: 0 6px 24px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 18px; font-weight: bold; color: #826140;">Modifier mon profil</h5>
                    <p style="font-size: 14px; color: #475569;">Mettez à jour vos informations personnelles ou supprimer votre compte</p>
                    <div style="margin: 16px;"><i class="fas fa-user-edit" style="font-size: 32px; color: #10b981;"></i></div>
                    <a href="{{ route('profil') }}" style="{{ $buttonStyle }}" {!! $buttonHover !!}>Accéder</a>
                </div>

                <div style="flex: 1 1 280px; background: white; border-radius: 16px; padding: 24px; text-align: center; box-shadow: 0 6px 24px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 18px; font-weight: bold; color: #826140;">Proposer un troc</h5>
                    <p style="font-size: 14px; color: #475569;">Publiez vos offres pour les échanger avec d'autres utilisateurs.</p>
                    <div style="margin: 16px;"><i class="fas fa-bullhorn" style="font-size: 32px; color: #ef4444;"></i></div>
                    <a href="{{ route('PUBLICATION') }}" style="{{ $buttonStyle }}" {!! $buttonHover !!}>Accéder</a>
                </div>

                <div style="flex: 1 1 280px; background: white; border-radius: 16px; padding: 24px; text-align: center; box-shadow: 0 6px 24px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 18px; font-weight: bold; color: #826140;">Rechercher un troc</h5>
                    <p style="font-size: 14px; color: #475569;">Trouvez des biens ou services à échanger avec d'autres utilisateurs</p>
                    <div style="margin: 16px;"><i class="fas fa-search" style="font-size: 32px; color: #0ea5e9;"></i></div>
                    <a href="{{ route('BIENS') }}" style="{{ $buttonStyle }}" {!! $buttonHover !!}>Accéder</a>
                </div>
            </div>

            <div style="margin: 40px 0;"></div>

            <div style="display: flex; flex-wrap: wrap; gap: 24px; justify-content: center;" data-aos="fade-up">
                <div style="flex: 1 1 280px; background: white; border-radius: 16px; padding: 24px; text-align: center; box-shadow: 0 6px 24px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 18px; font-weight: bold; color: #826140;">Mes Messages</h5>
                    <!--<p style="font-size: 14px; color: #475569;">Total : {{ $mesmessages }}</p>-->
                    <div style="margin: 16px;"><i class="fas fa-envelope" style="font-size: 32px; color: #f59e0b;"></i></div>
                    <a href="{{ route('LECTURE') }}" style="{{ $buttonStyle }}" {!! $buttonHover !!}>Accéder</a>
                </div>

                <div style="flex: 1 1 280px; background: white; border-radius: 16px; padding: 24px; text-align: center; box-shadow: 0 6px 24px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 18px; font-weight: bold; color: #826140;">Mes Trocs</h5>
                    <p style="font-size: 14px; color: #475569;">Total : {{ $mestrocs }}</p>
                    <div style="margin: 16px;"><i class="fas fa-exchange-alt" style="font-size: 32px; color: #10b981;"></i></div>
                    <a href="{{ route('SERVICES') }}" style="{{ $buttonStyle }}" {!! $buttonHover !!}>Accéder</a>
                </div>

                <div style="flex: 1 1 280px; background: white; border-radius: 16px; padding: 24px; text-align: center; box-shadow: 0 6px 24px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 18px; font-weight: bold; color: #826140;">Commentaires</h5>
                    <p style="font-size: 14px; color: #475569;">Total : {{ $mescommentaires }}</p>
                    <div style="margin: 16px;"><i class="fas fa-headset" style="font-size: 32px; color: #f59e0b;"></i></div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<!-- Animation On Scroll -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script>
    AOS.init({ duration: 800, once: true });
</script>

@endsection
