@extends('layouts.admin')
@section('content')
<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="content-inner chart-cont">

            <!--***** CONTENT *****-->
            <div class="card p-4">
                <div class="row">
                    <hgroup class="mb20">
                        <h1>Résultats de recherche</h1>
                        <h2 class="lead"><strong class="cl-blue">3</strong> résultats ont été trouvés pour la recherche de <strong class="cl-blue">catégorie X</strong></h2>
                    </hgroup>

                    <section class="col-xs-12 col-sm-6 col-md-12">
                        <article class="search-result row">
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <a href="#" title="Lorem ipsum" class="thumbnail"><img src="{{asset('admin/img/gallery/g-8.jpg')}}" class="img-fluid" alt="Lorem ipsum" /></a>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <ul class="meta-search">
                                    <li><i class="fa fa-calendar"></i><span>02/15/2014</span></li>
                                    <li><i class="fa fa-clock-o"></i><span>4:28 pm</span></li>
                                    <li><i class="fa fa-tags"></i><span>Santé</span></li>
                                    <li><i class="fa fa-phone"></i><span>Téléphone 1</span></li>
                                    <li><i class="fa fa-map-marker"></i><span>Quartier, ville</span></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
                                <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem,
                                    suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi
                                    iusto debitis delectus doloremque.</p>
                            </div>
                            <span class="clearfix borda"></span>
                        </article>

                        <article class="search-result row">
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <a href="#" title="Lorem ipsum" class="thumbnail"><img src="{{asset('admin/img/gallery/g-8.jpg')}}" class="img-fluid" alt="Lorem ipsum" /></a>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <ul class="meta-search">
                                    <li><i class="fa fa-calendar"></i><span>02/15/2014</span></li>
                                    <li><i class="fa fa-clock-o"></i><span>4:28 pm</span></li>
                                    <li><i class="fa fa-tags"></i><span>Santé</span></li>
                                    <li><i class="fa fa-phone"></i><span>Téléphone 1</span></li>
                                    <li><i class="fa fa-map-marker"></i><span>Quartier, ville</span></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7">
                                <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem,
                                    exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni
                                    sit sequi iusto debitis delectus doloremque.</p>
                            </div>
                            <span class="clearfix borda"></span>
                        </article>

                        <article class="search-result row">
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <a href="#" title="Lorem ipsum" class="thumbnail"><img src="{{asset('admin/img/gallery/g-8.jpg')}}" class="img-fluid" alt="Lorem ipsum" /></a>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <ul class="meta-search">
                                    <li><i class="fa fa-calendar"></i><span>02/15/2014</span></li>
                                    <li><i class="fa fa-clock-o"></i><span>4:28 pm</span></li>
                                    <li><i class="fa fa-tags"></i><span>Santé</span></li>
                                    <li><i class="fa fa-phone"></i><span>Téléphone 1</span></li>
                                    <li><i class="fa fa-map-marker"></i><span>Quartier, ville</span></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7">
                                <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis
                                    magni sit sequi iusto debitis delectus doloremque.
                                </p>
                            </div>
                            <span class="clearfix border"></span>
                        </article>

                    </section>
                </div>
            </div>

        </div>

@endsection
