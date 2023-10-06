@extends('layouts.client')
@section('content')

<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background-image:url({{asset('client/images/slider-main/bg1.jpg')}})">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h2 class="slide-title" data-animation-in="slideInLeft">Bienvenue sur notre plateforme</h2>
                <h3 class="slide-sub-title" data-animation-in="slideInRight">DealApp</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="#" class="slider btn btn-primary">S'inscrire</a>
                    <a href="#" class="slider btn btn-primary border">Se connecter</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url({{asset('client/images/slider-main/bg2.jpg')}})">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title-box" data-animation-in="slideInDown">Rejoignez nous</h2>
                <h3 class="slide-title" data-animation-in="fadeIn">Soyez prêt à vivre une aventure de partage et de découverte.</h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">Si ça ne te sers pas, Troc le</h3>
                <p data-animation-in="slideInRight">
                <a href="#" class="slider btn btn-primary border">A propos de nous</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url({{asset('client/images/slider-main/bg3.jpg')}})">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title" data-animation-in="slideInDown">Inscrivez vous maintenant</h2>
                <h3 class="slide-sub-title" data-animation-in="fadeIn">Partager, chercher & échanger</h3>
                <p class="slider-description lead" data-animation-in="slideInRight">Trouvez l'aide dont vous avez besoin, quand vous en avez besoin</p>
                <div data-animation-in="slideInLeft">
                    <a href="#" class="slider btn btn-primary" aria-label="contact-with-us">Contacez-nous</a>
                    <a href="#" class="slider btn btn-primary border" aria-label="learn-more-about-us">Envoyez nous un mail</a>
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
                <h3 class="action-title">DONNEZ, TROQUER, LOUER</h3>
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
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">Qui sommes nous?</h3>
          <blockquote>
            <p>
              En tant que développeur, notre passion pour le partage et l'entraide a
              inspiré la création de DealApp. Notre propre expérience nous a montré à
              quel point l'échange de services peut enrichir nos vies et renforcer les
              communautés. Notre mission est de simplifier et de promouvoir cette expérience
              pour chacun d'entre vous. Rejoignez-nous dès aujourd'hui pour découvrir un monde où vos compétences sont valorisées, où de nouvelles opportunités s'ouvrent à vous, et où chaque interaction crée des liens authentiques. Ne manquez pas cette chance de faire partie d'une communauté dédiée au partage et à la croissance personnelle. Inscrivez-vous maintenant et commencez votre voyage avec [Nom de l'Application].
            </p>
          </blockquote>

        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <div id="page-slider" class="page-slider small-bg">

              <div class="item" style="background-image:url({{asset('client/images/slider-pages/slide-page1.jpg')}})">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Leadership</h2>
                      </div>
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url({{asset('client/images/slider-pages/slide-page2.jpg')}})">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Relationships</h2>
                      </div>
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url({{asset('client/images/slider-pages/slide-page3.jpg')}})">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Performance</h2>
                      </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</section><!-- Main container end -->



<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{asset('client/images/icon-image/fact1.png')}}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                <h3 class="ts-facts-title">Utilisateurs</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{asset('client/images/icon-image/fact2.png')}}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                <h3 class="ts-facts-title">Annonces</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{asset('client/images/icon-image/fact3.png')}}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                <h3 class="ts-facts-title">Retours positifs</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{asset('client/images/icon-image/fact4.png')}}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                <h3 class="ts-facts-title">Satisfactions</h3>
              </div>
          </div><!-- Col end -->

        </div> <!-- Facts end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->



<section id="ts-features" class="ts-features">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <div class="ts-intro">
              <h2 class="into-title">Pourquoi troquer</h2>
              <h3 class="into-sub-title">Notre Objectif principale</h3>
              <p>
                L’objectif principal de DealApp est de favoriser l’entraide communautaire.
                Échangez vos objets inutilisés contre des trésors, partagez vos compétences
                avec d'autres passionnés et découvrez une communauté engagée prête à vous accueillir à bras ouverts.
                Que vous soyez un mélomane, un jardinier, un chef en herbe ou un passionné de technologie,
                notre plateforme vous permet de troquer tout ce que vous avez à offrir.
              </p>
          </div><!-- Intro box end -->

          <div class="gap-20"></div>

          <!-- <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-trophy"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">Économie Collaborative</h3>
                    </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-sliders-h"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">Écoresponsabilité</h3>
                    </div>
                </div>
              </div>
          </div> -->

          <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-thumbs-up"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">Découvrez de Nouveaux Intérêts</h3>
                    </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-users"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">Établissez des Connexions</h3>
                    </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
          </div><!-- Content row 1 end -->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-4 mt-lg-0">
          <h3 class="into-sub-title">N'importe qui peut utiliser DealApp pour économiser de l'argent.</h3>
          <p>
            Tout peut être échangé ou donné, que ce soit de la valise de votre chambre jusqu'au garage, d'une
            calculatrice à un téléphone portable ou d'un ordinateur, d'un cours d'anglais à une place de concert...
            <br>
              Chacun a des compétences pour aider ou dépanner quelqu'un d'autre.
              Tout le monde a des choses dont il n'a plus besoin, et qui pourraient être utiles à quelqu'un d'autre.
              Vos objets inutilisés peuvent être précieux pour d'autres !
          </br>
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
                          Notre objectif est de diminuer la surconsommation, réaliser des économies, et encourager la solidarité
                          et le partage en modernisant le troc pour l'adapter à notre époque actuelle.
                      </b>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</section>
<!-- Feature are end -->



<section id="project-area" class="project-area solid-bg">
  <div class="container">

      <div class="row text-center">
         <div class="col-12">
            <h3 class="section-sub-title mb-4">Types de trocs</h3>
         </div>
      </div>

      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="quote-item quote-border mt-5">
               <div class="quote-text-border">
                  J'échange quelque chose contre autre chose
               </div>
               <div class="quote-item-footer">
                  <img loading="lazy" class="testimonial-thumb" src="{{asset('client/images/clients/testimonial1.png')}}" alt="testimonial">
                  <div class="quote-item-info">
                     <h3 class="quote-author">TROC PHYSIQUE</h3>
                     <!-- <span class="quote-subtext">(objets, engins, outils...)</span> -->
                  </div>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6">
            <div class="quote-item quote-border mt-5">
               <div class="quote-text-border">
                  J'échange un service contre autre service.
               </div>
               <div class="quote-item-footer">
                  <img loading="lazy" class="testimonial-thumb" src="{{asset('client/images/clients/testimonial2.png')}}" alt="testimonial">
                  <div class="quote-item-info">
                     <h3 class="quote-author">SERVICE CONTRE SERVICE</h3>
                     <!-- <span class="quote-subtext">(aide, courses, babysitting...)</span> -->
                  </div>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6">
            <div class="quote-item quote-border mt-5">
               <div class="quote-text-border">
                  J'échange un service contre quelque chose.
               </div>
               <div class="quote-item-footer">
                  <img loading="lazy" class="testimonial-thumb" src="{{asset('client/images/clients/testimonial3.png')}}" alt="testimonial">
                  <div class="quote-item-info">
                     <h3 class="quote-author">service contre-bien</h3>
                     <!-- <span class="quote-subtext">(objet contre service...) </span> -->
                  </div>
               </div>
            </div>
         </div>

      </div>


  </div>
</section>

<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">Témoignages</h3>

          <div id="testimonial-slide" class="testimonial-slide">
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit fuga error modi excepturi ex placeat
                      quaerat minima facere recusandae vero ipsum quos doloribus, amet fugit architecto non illo eligendi perferendis.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="{{asset('client/images/clients/testimonial1.png')}}" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Témoin 1</h3>
                          <span class="quote-subtext">Utilisateur de DealApp</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 1 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                      nisi aliquip consequat.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="{{asset('client/images/clients/testimonial2.png')}}" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Témoin 2</h3>
                          <span class="quote-subtext">Développeur de DealApp</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 2 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                      nisi ut commodo consequat.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="{{asset('client/images/clients/testimonial3.png')}}" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Témoin 3</h3>
                          <span class="quote-subtext">Citoyen</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 3 end -->

          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title">Partenaires</h3>

          <div class="row all-clients">
              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('client/images/clients/client1.png')}}" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 1 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('client/images/clients/client2.png')}}" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 2 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('client/images/clients/client3.png')}}" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 3 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('client/images/clients/client4.png')}}" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 4 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('client/images/clients/client5.png')}}" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 5 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('client/images/clients/client6.png')}}" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 6 end -->

          </div><!-- Clients row end -->

        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Content end -->

<section class="subscribe no-padding">
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
          <div class="subscribe-call-to-acton">
              <h3>Voulez-vous être renseigné?</h3>
              <h4>(+228) 90612190</h4>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-8">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">Newsletter</h4>
                <p class="text-white">Inscrivez-vous à notre newsletter</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <form action="#" method="post">
                    <div class="form-group" style="display: flex;">
                      <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                      <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Your your email and hit enter" autocomplete="off">
                      <button type="button" class="btn btn-success">S'inscrire</button>
                    </div>
                </form>
              </div>
          </div><!-- Newsletter end -->
        </div><!-- Col end -->

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section>
<!--/ subscribe end -->

<section id="news" class="news">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Qu'attendez vous pour vous inscrire ?</h2>
          <h3 class="section-sub-title">Comment troquer</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="recherche.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="{{asset('client/images/news/news1.jpg')}}" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="recherche.html" class="d-inline-block">Je mets mon annonce en ligne.</a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> July 20, 2017
                    </span>
                </div>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 1st post col end -->

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="offre.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="{{asset('client/images/news/news2.jpg')}}" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="recherche.html" class="d-inline-block">Je fais une recherche d'annonce.</a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> June 17, 2017
                    </span>
                </div>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 2nd post col end -->

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="recherche.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="{{asset('client/images/news/news3.jpg')}}" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="recherche.html" class="d-inline-block">Je négocie le troc ou j'envoi simplement un message.</a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> Aug 13, 2017
                    </span>
                </div>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 3rd post col end -->
    </div>
    <!--/ Content row end -->

    <div class="general-btn text-center mt-4">
        <a class="btn btn-primary" href="inscription.html">S'INSCRIRE</a>
    </div>

  </div>
  <!--/ Container end -->
</section>
<!--/ News end -->

@endsection
