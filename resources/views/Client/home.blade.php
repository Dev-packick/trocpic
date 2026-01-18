@extends('layouts.client')
@section('content')

    <div class="banner-carousel banner-carousel-1 mb-0">
        <div class="banner-carousel-item" 
            style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url({{ asset('client/images/SOL33.png') }}); background-size:cover; background-position:center;">
            <div class="slider-content">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                <div class="col-md-12 text-center">
                    <h2 class="slide-title" data-animation-in="slideInLeft">Bienvenue sur notre plateforme</h2>
                    <h3 class="slide-sub-title" data-animation-in="slideInRight">Troc-Pic</h3>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="banner-carousel-item" 
            style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url({{ asset('client/images/SOL1.png') }}); background-size:cover; background-position:center;">
            <div class="slider-content text-left">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                <div class="col-md-12">
                    <h2 class="slide-title-box" data-animation-in="slideInDown">Rejoignez-nous</h2>
                    <h3 class="slide-title" data-animation-in="fadeIn">Soyez prêt à vivre une aventure de partage et de découverte.</h3>
                    <h3 class="slide-sub-title" data-animation-in="slideInLeft">Si ça ne vous sert pas, troquez-le</h3>
                    <p data-animation-in="slideInRight">
                    <a href="#" class="slider btn btn-primary border">À propos de nous</a>
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="banner-carousel-item" 
            style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url({{ asset('client/images/SOL0.png') }}); background-size:cover; background-position:center;">
            <div class="slider-content text-right">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                <div class="col-md-12">
                    <h2 class="slide-title" data-animation-in="slideInDown">Inscrivez-vous maintenant</h2>
                    <h3 class="slide-sub-title" data-animation-in="fadeIn">Partager, chercher & échanger</h3>
                    <p class="slider-description lead" data-animation-in="slideInRight">Trouvez l'aide dont vous avez besoin, quand vous en avez besoin</p>
                    <div data-animation-in="slideInLeft">
                    <a href="#" class="slider btn btn-primary" aria-label="contact-with-us">Contactez-nous</a>
                    <a href="mailto:contact@apv-togo.org" class="slider btn btn-primary border" aria-label="learn-more-about-us">Envoyez-nous un mail</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <section class="call-to-action-box no-padding">
      <div class="container">
        <div class="action-style-box">
          <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">DONNEZ, TROQUEZ, LOUEZ</h3>
              </div>
            </div>
            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="#">Vos biens et vos services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="main-container" class="main-container">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h3 class="column-title">Qui sommes-nous ?</h3>
            <blockquote>
              <p style="text-align: justify;">
                Troc-Pic est une initiative développée par l’association Les Amis de la Planète Vivable (APV-Togo),
                engagée dans la promotion de l’économie circulaire, du recyclage et de la solidarité.
                Notre mission est de faciliter les échanges de biens et de services entre citoyens,
                à travers une plateforme numérique simple, gratuite et sans transaction financière.
                Que vous souhaitiez donner, troquer ou offrir un service, Troc-Pic vous connecte à une communauté solidaire
                prête à échanger autrement.
                En plus des échanges entre particuliers, la plateforme permet aussi de rediriger les dons vers des structures sociales
                comme les orphelinats ou centres communautaires, pour répondre à leurs besoins essentiels.
                Rejoignez-nous dès aujourd’hui et prenez part à une nouvelle manière de consommer, de partager
                et de soutenir les autres — tout en réduisant le gaspillage.
              </p>
            </blockquote>
          </div>
          <div class="col-lg-6 mt-5 mt-lg-0">
            <img src="{{ asset('client/images/LOGO_RONDn.png') }}" style="height: 400px; width:400px;" alt="Logo Troc-Pic" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section id="facts" class="facts-area dark-bg">
      <div class="container">
          <div class="facts-wrapper">
            <div class="row">
              <div class="col-md-3 col-sm-6 ts-facts">
                <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span data-count="T">T</span></h2>
                    <h3 class="ts-facts-title">-</h3>
                </div>
              </div><!-- Col end -->
                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span data-count="R">R</span></h2>
                    <h3 class="ts-facts-title">-</h3>
                </div>
                </div><!-- Col end -->
                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span data-count="O">O</span></h2>
                    <h3 class="ts-facts-title">-</h3>
                </div>
                </div><!-- Col end -->
                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span data-count="C">C</span></h2>
                    <h3 class="ts-facts-title">-</h3>
                </div>
                </div><!-- Col end -->
            </div><!-- Facts end -->
            </div>
      </div><!-- Container end -->
    </section><!-- Facts end -->
  
    <section id="ts-features" class="ts-features">
        <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <div class="ts-intro">
                <h2 class="into-title">Pourquoi troquer</h2>
                <h3 class="into-sub-title">Notre objectif principal</h3>
                <p>
                L’objectif principal de Troc-Pic est de promouvoir l’entraide communautaire. Échangez vos objets inutilisés contre des trésors, partagez vos compétences avec d'autres passionnés et découvrez une communauté engagée prête à vous accueillir à bras ouverts.
                Que vous soyez mélomane, jardinier, chef en herbe ou passionné de technologie, notre plateforme vous permet de troquer tout ce que vous avez à offrir.
                </p>
            </div><!-- Intro box end -->
    
            <div class="gap-20"></div>
    
            <div class="row">
                <div class="col-md-6">
                  <div class="ts-service-box">
                    <span class="ts-service-icon">
                    <i class="fas fa-thumbs-up"></i>
                    </span>
                    <div class="ts-service-box-content">
                    <h3 class="service-box-title">Découvrez de nouveaux intérêts</h3>
                    </div>
                  </div><!-- Service 1 end -->
                </div><!-- col end -->
    
                <div class="col-md-6">
                  <div class="ts-service-box">
                    <span class="ts-service-icon">
                    <i class="fas fa-users"></i>
                    </span>
                    <div class="ts-service-box-content">
                    <h3 class="service-box-title">Établissez des connexions</h3>
                    </div>
                  </div><!-- Service 2 end -->
                </div><!-- col end -->
            </div><!-- Content row 1 end -->
            </div><!-- Col end -->
    
            <div class="col-lg-6 mt-4 mt-lg-0">
            <h3 class="into-sub-title">N’importe qui peut utiliser Troc-Pic pour économiser de l’argent.</h3>
            <p>
                Tout peut être échangé ou donné, que ce soit une valise de votre chambre jusqu’au garage, une calculatrice, un téléphone portable, un ordinateur, un cours d’anglais ou même une place de concert... 
                Chacun possède des compétences pour aider ou dépanner quelqu'un d’autre. Tout le monde a des objets dont il n’a plus besoin, mais qui pourraient être précieux pour quelqu’un d’autre.
            </p>
            <div class="accordion accordion-group" id="our-values-accordion">
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingOne">
                    <h2 class="mb-0">
                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Notre vision
                    </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                    <div class="card-body">
                    <b>
                        Notre objectif est de réduire la surconsommation, réaliser des économies et encourager la solidarité et le partage, tout en modernisant le troc pour l’adapter aux besoins de notre époque.
                    </b>
                    </div>
                </div>
              </div>
            </div>
            </div><!-- Col end -->
        </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Features end -->
    
    <!-- SECTION: Comment ça marche -->
  <section class="section-padding" style="margin-top:-60px;background: linear-gradient(to right, #23a638, #FFFFFF);">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Comment ça marche ?</h2>
        <p class="lead">Troc-Pic simplifie vos échanges en quelques étapes simples.</p>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <div class="card shadow p-4">
            <div class="mb-3">
              <i class="fas fa-user-plus fa-2x text-success"></i>
            </div>
            <h5>1. Inscrivez-vous</h5>
            <p>Créez un compte gratuit pour rejoindre la communauté.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow p-4">
            <div class="mb-3">
              <i class="fas fa-bullhorn fa-2x text-success"></i>
            </div>
            <h5>2. Publiez une annonce</h5>
            <p>Proposez un bien ou un service à échanger.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow p-4">
            <div class="mb-3">
              <i class="fas fa-handshake fa-2x text-success"></i>
            </div>
            <h5>3. Trouvez un troc</h5>
            <p>Discutez, validez l'échange et finalisez votre troc.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- SECTION: Comment ça marche Fin-->


  <!-- SECTION: Nos avantages -->
  <section class="section-padding" style="margin-top:-30px;">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Pourquoi choisir Troc-Pic ?</h2>
        <p class="lead">Découvrez ce qui nous rend uniques.</p>
      </div>
      <div class="row text-center">
        <!-- Originales -->
        <div class="col-md-4">
          <div style="border-radius: 50%; width: 160px; height: 160px; display: flex; flex-direction: column; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #ffffff;" class="mb-3">
            <i class="fas fa-lock" style="font-size: 28px; margin-bottom: 10px; color: #23a638;"></i>
          </div>
          <h5>Sécurité des échanges</h5>
          <p>Nous vérifions les profils et modérons les contenus pour garantir un environnement sûr.</p>
        </div>
        <div class="col-md-4">
          <div style="border-radius: 50%; width: 160px; height: 160px; display: flex; flex-direction: column; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #fff;" class="mb-3">
            <i class="fas fa-users" style="font-size: 28px; margin-bottom: 10px; color: #23a638;"></i>
          </div>
          <h5>Communauté active</h5>
          <p>Des milliers d’utilisateurs connectés chaque jour pour troquer, aider et collaborer.</p>
        </div>
        <div class="col-md-4">
          <div style="border-radius: 50%; width: 160px; height: 160px; display: flex; flex-direction: column; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #fff;" class="mb-3">
            <i class="fas fa-leaf" style="font-size: 28px; margin-bottom: 10px; color: #23a638;"></i>
          </div>
          <h5>Engagement écoresponsable</h5>
          <p>Favorisez le réemploi et réduisez votre empreinte écologique en troquant au lieu d’acheter.</p>
        </div>
  
        <!-- Ajouts -->
        <div class="col-md-4 mt-5">
          <div style="border-radius: 50%; width: 160px; height: 160px; display: flex; flex-direction: column; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #fff;" class="mb-3">
            <i class="fas fa-heart" style="font-size: 28px; margin-bottom: 10px; color: #23a638;"></i>
          </div>
          <h5>Solidarité locale</h5>
          <p>Encourage les échanges entre voisins et renforce les liens sociaux.</p>
        </div>
        <div class="col-md-4 mt-5">
          <div style="border-radius: 50%; width: 160px; height: 160px; display: flex; flex-direction: column; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #fff;" class="mb-3">
            <i class="fas fa-recycle" style="font-size: 28px; margin-bottom: 10px; color: #23a638;"></i>
          </div>
          <h5>Économie circulaire</h5>
          <p>Favorise la réutilisation et limite le gaspillage de ressources.</p>
        </div>
        <div class="col-md-4 mt-5">
          <div style="border-radius: 50%; width: 160px; height: 160px; display: flex; flex-direction: column; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #fff;" class="mb-3">
            <i class="fas fa-gift" style="font-size: 28px; margin-bottom: 10px; color: #23a638;"></i>
          </div>
          <h5>Échanges gratuits</h5>
          <p>Pas d’argent, que des biens et services échangés entre membres.</p>
        </div>
      </div>
    </div>
  </section>  
   <!-- SECTION: Nos avantages FIN-->


  <!-- SECTION: Derniers échanges (données fictives statiques) -->
  <section class="section-padding" style="margin-top:-60px; background: linear-gradient(to left, #23a638, #ffffff);">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Quelques exemples de trocs </h2>
        <p class="lead">échanges sans transaction monétaires</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="{{ asset('client/images/TC5.png') }}" class="card-img-top" alt="trocs">
            <div class="card-body">
              <h5 class="card-title">Don de vêtements</h5>
              <p class="card-text">Julie a donné des vêtements pour enfants à un centre communautaire.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="{{ asset('client/images/TC6.png') }}" class="card-img-top" alt="trocs">
            <div class="card-body">
              <h5 class="card-title">Courses contre réparation</h5>
              <p class="card-text">Paul a proposé de faire les courses en échange de la réparation de sa moto.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="{{ asset('client/images/TC3.jpeg') }}" class="card-img-top" alt="trocs">
            <div class="card-body">
              <h5 class="card-title">Serrure contre réparation de portière</h5>
              <p class="card-text">Une serrure échangé contre une bla réparation d'une portière.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- SECTION: Derniers échanges Fin(données fictives statiques) -->


{{-- TYPES DE TROCS --}}
  <section id="project-area" style="background: linear-gradient(135deg, #e8f0ff, #ffffff); padding: 60px 0;">
    <div class="container">
      <div class="text-center mb-5">
        <h3 style="font-size: 2rem;">Types de trocs</h3>
        <p>Découvrez les différentes formes d'échange sur notre plateforme</p>
      </div>
  
      <div style="display: flex; flex-direction: column; gap: 50px;">
  
        <!-- Bloc 1 -->
        <div style="display: flex; align-items: center; gap: 30px;">
          <div style="min-width: 90px; height: 90px; border-radius: 50%; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0,0,0,0.1); display: flex; justify-content: center; align-items: center;">
            <i class="fas fa-handshake" style="font-size: 30px; color: #198754;"></i>
          </div>
          <div style="flex: 1; max-width: 600px;">
            <h4 style="margin: 0 0 8px; color: #198754;">TROC PHYSIQUE</h4>
            <p style="margin: 0; text-align: justify; color: #333;">
              J’échange un objet contre un autre objet.
            </p>
          </div>
        </div>
  
        <!-- Bloc 2 -->
        <div style="display: flex; align-items: center; gap: 30px; flex-direction: row-reverse;">
          <div style="min-width: 90px; height: 90px; border-radius: 50%; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0,0,0,0.1); display: flex; justify-content: center; align-items: center;">
            <i class="fas fa-exchange-alt" style="font-size: 30px; color: #198754;"></i>
          </div>
          <div style="flex: 1; max-width: 600px;">
            <h4 style="margin: 0 0 8px; color: #198754; text-align:right;">SERVICE CONTRE SERVICE</h4>
            <p style="margin: 0; text-align:right; color: #333;">
              Je propose mes compétences ou savoir-faire, <br>en échange d’un autre service offert par un utilisateur.
            </p>
          </div>
        </div>
  
        <!-- Bloc 3 -->
        <div style="display: flex; align-items: center; gap: 30px;">
          <div style="min-width: 90px; height: 90px; border-radius: 50%; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0,0,0,0.1); display: flex; justify-content: center; align-items: center;">
            <i class="fas fa-gift" style="font-size: 30px; color: #198754;"></i>
          </div>
          <div style="flex: 1; max-width: 600px;">
            <h4 style="margin: 0 0 8px; color: #198754;">SERVICE CONTRE BIEN</h4>
            <p style="margin: 0; text-align: justify; color: #333;">
              Je rends un service et en retour, je reçois un objet utile ou <br>nécessaire proposé par un autre membre.
            </p>
          </div>
        </div>
  
      </div>
    </div>
  </section>


{{-- SECTION CONTACT --}}
  <section class="subscribe no-padding py-5 bg-success text-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h3 class="mb-2" style="color:#FFFFFF">Souhaitez-vous être renseigné ?</h3>
          <h4 style="color:#FFFFFF">(+228) 92939310</h4>
        </div>
      </div>
    </div>
  </section>
{{-- SECTION CONTACT Fin--}}


  <style>
    body {
      background-color: #f8f9fa;
    }
    .section-padding {
      padding-top: 80px;
      padding-bottom: 80px;
    }
    .faq .card-header button {
      font-weight: bold;
    }
  </style>
  

{{-- TÉMOIGNAGES --}}
  <section class="py-5" style="background: linear-gradient(135deg, #e8f0ff, #ffffff); padding: 60px 0;">
    <div class="container text-center" style="max-width: 1200px;">
      <h3 class="section-sub-title mb-2" style="font-size: 2rem; font-weight: bold;">ILS NOUS FONT CONFIANCE</h3>
      <p class="lead" style="font-size: 1.1rem;">Témoignages authentiques d’utilisateurs satisfaits.</p>
      <div class="row mt-5 justify-content-center">
        <!-- Témoignage 1 -->
        <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-stretch">
          <div style="border: 2px solid #e0e0e0; border-radius: 50%; padding: 30px; width: 100%; aspect-ratio: 1 / 1; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <p style="font-style: italic; font-size: 0.95rem; color: #333;">“J’ai troqué mon vélo contre une poussette en parfait état. Merci Troc-Pic !”</p>
            <div style="margin-top: 15px; font-weight: bold; color: #2b3e6b;">Marie</div>
          </div>
        </div>
  
        <!-- Témoignage 2 -->
        <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-stretch">
          <div style="border: 2px solid #e0e0e0; border-radius: 50%; padding: 30px; width: 100%; aspect-ratio: 1 / 1; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <p style="font-style: italic; font-size: 0.95rem; color: #333;">“Un super moyen d’économiser et d’échanger utilement.”</p>
            <div style="margin-top: 15px; font-weight: bold; color: #2b3e6b;">Ali</div>
          </div>
        </div>
  
        <!-- Témoignage 3 -->
        <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-stretch">
          <div style="border: 2px solid #e0e0e0; border-radius: 50%; padding: 30px; width: 100%; aspect-ratio: 1 / 1; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <p style="font-style: italic; font-size: 0.95rem; color: #333;">“Interface simple, communauté bienveillante. Je recommande !”</p>
            <div style="margin-top: 15px; font-weight: bold; color: #2b3e6b;">Sophie</div>
          </div>
        </div>
  
        <!-- Témoignage 4 -->
        <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-stretch">
          <div style="border: 2px solid #e0e0e0; border-radius: 50%; padding: 30px; width: 100%; aspect-ratio: 1 / 1; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <p style="font-style: italic; font-size: 0.95rem; color: #333;">“J’ai donné des livres et reçu un service de jardinage. Génial !”</p>
            <div style="margin-top: 15px; font-weight: bold; color: #2b3e6b;">Lucas</div>
          </div>
        </div>
  
      </div>
    </div>
  </section>
{{-- TÉMOIGNAGES FIN --}}
  


  <!-- SECTION: Foire aux questions -->
  <section class="faq section-padding bg-light" style="padding: 30px 0;">
    <div class="container" style="max-width: 900px; margin: 0 auto;">
      <div class="text-center mb-5" style="margin-bottom: 50px;">
        <h3 class="section-sub-title mb-2" style="font-size: 2rem; font-weight: bold;">FAQ</h3>
        <p style="font-size: 1.2rem; color: #5f6f8c;">Des réponses à vos interrogations fréquentes</p>
      </div>
      <div class="accordion" id="faqAccordion">
  
        <!-- Question 1 -->
        <div class="card" style="margin-bottom: 20px; border: none; border-radius: 12px; overflow: hidden; background: #ffffff; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05); transition: transform 0.3s;">
          <div class="card-header" id="heading1" style="background: linear-gradient(to left, #23a638, #23a638);; padding: 0;">
            <h2 style="margin: 0;">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1"
                style="display: flex; align-items: center; justify-content: space-between; width: 100%; padding: 18px 24px; font-size: 1.1rem; font-weight: bold; color: #fff; background: none; border: none; text-align: left; cursor: pointer;">
                Est-ce que Troc-Pic est gratuit ?
                <span style="transform: rotate(0deg); transition: transform 0.3s;">&#9660;</span>
              </button>
            </h2>
          </div>
          <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#faqAccordion">
            <div class="card-body" style="padding: 20px; color: #333; background: #f9fbff;">
              Oui, l'utilisation de Troc-Pic est entièrement gratuite pour tous.
            </div>
          </div>
        </div>
  
        <!-- Question 2 -->
        <div class="card" style="margin-bottom: 20px; border: none; border-radius: 12px; overflow: hidden; background: #ffffff; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);">
          <div class="card-header" id="heading2" style="background: linear-gradient(to left, #23a638, #23a638);; padding: 0;">
            <h2 style="margin: 0;">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"
                style="display: flex; align-items: center; justify-content: space-between; width: 100%; padding: 18px 24px; font-size: 1.1rem; font-weight: bold; color: #fff; background: none; border: none; text-align: left; cursor: pointer;">
                Peut-on troquer plusieurs objets à la fois ?
                <span style="transform: rotate(0deg); transition: transform 0.3s;">&#9660;</span>
              </button>
            </h2>
          </div>
          <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#faqAccordion">
            <div class="card-body" style="padding: 20px; color: #333; background: #f9fbff;">
              Oui, vous pouvez proposer ou demander plusieurs biens ou services dans un même échange.
            </div>
          </div>
        </div>
  
        <!-- Question 3 -->
        <div class="card" style="margin-bottom: 20px; border: none; border-radius: 12px; overflow: hidden; background: #ffffff; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);">
          <div class="card-header" id="heading3" style="background: linear-gradient(to left, #23a638, #23a638);; padding: 0;">
            <h2 style="margin: 0;">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"
                style="display: flex; align-items: center; justify-content: space-between; width: 100%; padding: 18px 24px; font-size: 1.1rem; font-weight: bold; color: #fff; background: none; border: none; text-align: left; cursor: pointer;">
                Puis-je faire un don sans rien recevoir en retour ?
                <span style="transform: rotate(0deg); transition: transform 0.3s;">&#9660;</span>
              </button>
            </h2>
          </div>
          <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#faqAccordion">
            <div class="card-body" style="padding: 20px; color: #333; background: #f9fbff;">
              Absolument, Troc-Pic encourage les dons solidaires pour les personnes ou structures dans le besoin.
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </section>
  <!-- SECTION: Foire aux questions Fin -->


  <!-- SECTION: Nos partenaires --> 
  <section class="section-padding" style="background-color:#f5f5f5;">
    <div class="container">
        <div class="text-center mb-5">
        <h2>Nos partenaires</h2>
        <p class="lead">Ils soutiennent notre mission</p>
        </div>
        <!-- SLIDER -->
        <div style="overflow:hidden;width:100%;background:#f8f9fa;padding:20px 0;">
        <div class="jve-scroll">
            <img src="{{asset('client/images/jve.png')}}" alt="JVE" style="height:70px;border-radius:10px;object-fit:cover;box-shadow:0 4px 10px rgba(0,0,0,0.2);">
            <img src="{{asset('client/images/jve.png')}}" alt="JVE" style="height:70px;border-radius:10px;object-fit:cover;box-shadow:0 4px 10px rgba(0,0,0,0.2);">
        </div>
        </div>
        <style>
        .jve-scroll{display:flex;gap:40px;animation:scroll 15s linear infinite;}
        @keyframes scroll{0%{transform:translateX(0);}100%{transform:translateX(-50%);}}
        </style>

        <!-- AUTRES PARTENAIRES -->
        <div class="row justify-content-center align-items-center mt-5">
        <div class="col-6 col-md-3 mb-4">
            <img src="{{ asset('client/images/ME.png') }}" alt="Partenaire ME" class="img-fluid d-block mx-auto" style="max-height:80px;">
        </div>
        <div class="col-6 col-md-3 mb-4">
            <img src="{{ asset('client/images/LOGO_AS.png') }}" alt="Partenaire LOGO_AS" class="img-fluid d-block mx-auto" style="max-height:100px;">
        </div>
        <div class="col-6 col-md-3 mb-4">
            <img src="{{ asset('client/images/UL1.png') }}" alt="Partenaire UL1" class="img-fluid d-block mx-auto" style="max-height:80px;">
        </div>
        <div class="col-6 col-md-3 mb-4">
            <img src="{{ asset('client/images/SC.png') }}" alt="Partenaire SC" class="img-fluid d-block mx-auto" style="max-height:100px;">
        </div>
        <div class="col-6 col-md-3 mb-4">
            <img src="{{ asset('client/images/AJECC.png') }}" alt="Partenaire AJECC" class="img-fluid d-block mx-auto" style="max-height:80px;">
        </div>
        <div class="col-6 col-md-3 mb-4">
            <img src="{{ asset('client/images/PA3.jpg') }}" alt="Partenaire PA3" class="img-fluid d-block mx-auto" style="max-height:80px;">
        </div>
        <div class="col-6 col-md-3 mb-4">
            <img src="{{ asset('client/images/OJEDD.png') }}" alt="Partenaire OJEDD" class="img-fluid d-block mx-auto" style="max-height:80px;">
        </div>
        <div class="col-6 col-md-3 mb-4">
            <img src="{{ asset('client/images/PA1.jpg') }}" alt="Partenaire PA1" class="img-fluid d-block mx-auto" style="max-height:80px;">
        </div>
        <div class="col-6 col-md-3 mb-4">
            <img src="{{ asset('client/images/PA4.PNG') }}" alt="Partenaire PA4" class="img-fluid d-block mx-auto" style="max-height:80px;">
        </div>
        <div class="col-6 col-md-3 mb-4">
            <img src="{{ asset('client/images/PA8.png') }}" alt="Partenaire PA8" class="img-fluid d-block mx-auto" style="max-height:80px;">
        </div>
        <div class="col-6 col-md-3 mb-4">
            <img src="{{ asset('client/images/VDE.png') }}" alt="Partenaire VDE" class="img-fluid d-block mx-auto" style="max-height:80px;">
        </div>
        <div class="col-6 col-md-3 mb-4">
            <img src="{{ asset('client/images/STADD.png') }}" alt="Partenaire STADD" class="img-fluid d-block mx-auto" style="max-height:80px;">
        </div>
        </div>
    </div>
  </section>
  <!-- FIN SECTION -->

@endsection
