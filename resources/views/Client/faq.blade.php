@extends('layouts.client')
@section('content')

<!-- BANDE JVE START-->
<section style="width:100%; background:#111; color:white; padding:40px 10%; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; box-sizing:border-box;">
  <!-- Image background optionnel -->
    <!-- Pour un fond avec image floutée, décommente la ligne suivante et adapte le chemin : style="background: linear-gradient(rgba(46,204,113,0.9), rgba(46,204,113,0.9)), url('image-floutee.jpg') center/cover;"-->
  <div style="flex:1; min-width:300px;">
    <h2 style="font-size:1.8rem; font-weight:800; margin-bottom:5px; color:#ccc;">🌱 Soutenons Le projet JVE</h2>
    <h3 style="font-size:1.1rem; font-weight:600; margin-bottom:15px; color:#9be7c4;">Jeunes Volontaires pour l’Environnement</h3>
    <p style="font-size:1rem; line-height:1.6; max-width:600px; margin:0; color:#ccc;">
      Ensemble, agissons pour la protection de l’environnement, la reforestation et la transition écologique.
    </p>
  </div>
  <div style="flex-shrink:0;">
      <a href="https://jveinternational.org" target="_blank"
         style="background:#484c4c; color:white; text-decoration:none; font-weight:bold; padding:10px 20px; border-radius:6px; transition:0.4s ease; display:inline-block;" onmouseover="this.style.background='#484c4c'; this.style.transform='scale(1.05)';" onmouseout="this.style.background='#484c4c'; this.style.transform='scale(1)';">
        Participer au Crowdfunding →
      </a>
  </div>
</section>
<!-- BANDE JVE END-->


<!-- START ASSOCIATIONS -->
<div class="container my-5">
 <h1 class="text-center">Faites un don à une structure solidaire</h2>
   <p class="text-center mb-5" style="font-size:initial">Soutenez les associations qui œuvrent chaque jour pour un Togo plus durable et solidaire 🌍</p>
    <div class="row">

        <!-- Carte 1 -->
        <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
            <div class="card shadow-sm h-100">
                <img src="{{asset('client/images/PA3.jpg')}}" class="card-img-top" alt="Orphelinat Mother Charity" style="height: 180px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Orphelinat Mother Charity</h5>
                    <h6 style="color:red;">Région maritime</h6>
                    <p class="card-text flex-grow-1">Accueille des enfants orphelins ou abandonnés, leur offrant un cadre familial, une éducation de base et un accompagnement vers une vie meilleure.</p>
                    <a href="https://wa.me/22899442289" target="_blank" class="btn btn-success mt-2">WhatsApp</a>
                    <a href="https://mivamiadjo.wixsite.com/mivamiadjo/orphelinat-mother charity" target="_blank" class="btn btn-primary mt-2" style="background-color:black;">Site Web</a>
                </div>
            </div>
        </div>

        <!-- Carte 2 -->
        <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
            <div class="card shadow-sm h-100">
                <img src="{{asset('client/images/user4.png')}}" class="card-img-top" alt="Foyer Pierre du Pauvre" style="height: 180px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Foyer Pierre du Pauvre</h5>
                    <h6 style="color:red;">Région de la Kara</h6>
                    <p class="card-text flex-grow-1">Soutient les jeunes en situation difficile à travers un hébergement stable, des formations pratiques et un appui à la réinsertion sociale et professionnelle.</p>
                    <a href="https://wa.me/22890991575" target="_blank" class="btn btn-success mt-2">WhatsApp</a>
                    <a href="https://chenedemambre.fr/le-togo" target="_blank" class="btn btn-primary mt-2" style="background-color:black;">Site Web</a>
                </div>
            </div>
        </div>

        <!-- Carte 3 -->
        <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
            <div class="card shadow-sm h-100">
                <img src="{{asset('client/images/APVTOGOLOGO.png')}}" class="card-img-top" alt="APV-Togo" style="height: 180px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">APV-Togo</h5>
                    <h6 style="color:red;">Région maritime</h6>
                    <p class="card-text flex-grow-1">Œuvre pour la protection de l’environnement à travers le recyclage, l’éducation écologique et la promotion de l’économie circulaire dans les quartiers urbains.</p>
                    <a href="https://wa.me/22892939310" target="_blank" class="btn btn-success mt-2">WhatsApp</a>
                    <a href="https://www.apv-togo.org" target="_blank" class="btn btn-primary mt-2" style="background-color:black;">Site Web</a>
                </div>
            </div>
        </div>

        <!-- Carte 4 -->
        <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
            <div class="card shadow-sm h-100">
                <img src="{{asset('client/images/VDE.png')}}" class="card-img-top" alt="Association Vivre dans l’Espérance" style="height: 180px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Association Vivre dans l’Espérance</h5>
                    <h6 style="color:red;">Région des savanes</h6>
                    <p class="card-text flex-grow-1">Accompagne les enfants orphelins et les familles touchées par le VIH, en leur fournissant soins, éducation et encadrement psychosocial.</p>
                    <a href="https://wa.me/22890772231" target="_blank" class="btn btn-success mt-2">WhatsApp</a>
                    <a href="https://vivredanslesperance.org/" target="_blank" class="btn btn-primary mt-2" style="background-color:black;">Site Web</a>
                </div>
            </div>
        </div>

        <!-- Carte 5 -->
        <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
            <div class="card shadow-sm h-100">
                <img src="{{asset('client/images/user4.png')}}" class="card-img-top" alt="Centre Amis des Enfants (ADED)" style="height: 180px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Centre de développement Amis des enfants</h5>
                    <h6 style="color:red;">Région de la Kara</h6>
                    <p class="card-text flex-grow-1">Aide les enfants vulnérables par des actions éducatives, sanitaires et sociales, afin de garantir leur épanouissement et leur insertion dans la société.</p>
                    <a href="https://wa.me/22893890100" target="_blank" class="btn btn-success mt-2">WhatsApp</a>
                    <a href="https://www.facebook.com/profile.php?id=61568958366675&mibextid=rS40aB7S9Ucbxw6v." target="_blank" class="btn btn-primary mt-2" style="background-color:blue;">Facebook</a>
                </div>
            </div>
        </div>

        <!-- Carte 6 -->
        <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
            <div class="card shadow-sm h-100">
                <img src="{{asset('client/images/VJ.jpg')}}" class="card-img-top" alt="Association EBE" style="height: 180px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Association EBE - Ensemble pour le Bien-être de l'Enfant</h5>
                    <h6 style="color:red;">Région des plateaux</h6>
                    <p class="card-text flex-grow-1">Propose des activités de formation, de soutien psychosocial et d’insertion pour les jeunes en situation de vulnérabilité ou d’exclusion sociale.</p>
                    <a href="https://wa.me/22891950403" target="_blank" class="btn btn-success mt-2">WhatsApp</a>
                    <a href="https://www.villagedelajoietogo.org/" target="_blank" class="btn btn-primary mt-2" style="background-color:black;">Site Web</a>
                </div>
            </div>
        </div>

        <!-- Carte 7 -->
        <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
            <div class="card shadow-sm h-100">
                <img src="{{asset('client/images/YD.jpg')}}" class="card-img-top" alt="Association AVEA Togo" style="height: 180px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Orphelinat Yendoubouame N'Tien</h5>
                    <h6 style="color:red;">Région des savanes</h6>
                    <p class="card-text flex-grow-1">Offre un cadre de vie sécurisé et éducatif aux enfants abandonnés ou défavorisés pour favoriser leur bien-être et leur avenir.</p>
                    <a href="https://wa.me/22890179105" target="_blank" class="btn btn-success mt-2">WhatsApp</a>
                    <a href="https://www.yendouboame.com/" target="_blank" class="btn btn-primary mt-2" style="background-color:black;">Site Web</a>
                </div>
            </div>
        </div>

        <!-- Carte 8 -->
        <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
            <div class="card shadow-sm h-100">
                <img src="{{asset('client/images/AVE.png')}}" class="card-img-top" alt="Association des Bègues du Togo" style="height: 180px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">ONG AVE Togo</h5>
                    <h6 style="color:red;">Région centrale</h6>
                    <p class="card-text flex-grow-1">Soutient les femmes en situation de précarité et les familles monoparentales, en leur offrant formation, accompagnement et appui à l’autonomie.</p>
                    <a href="#" target="_blank" class="btn btn-success mt-2">WhatsApp</a>
                    <a href="https://ave4kids.ch" target="_blank" class="btn btn-primary mt-2" style="background-color:black;">Site Web</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- END ASSOCIATIONS -->

<!-- FOOTER -->
<footer style="background:#28A745; color:white; text-align:center; padding:50px 20px; font-size:1rem;">
  © 2025 Tropic | Chaque don compte. Ensemble, faisons pousser l’espoir 🌿
</footer>


@endsection