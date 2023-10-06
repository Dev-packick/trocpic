@extends('layouts.admin')
@section('content')
<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">
        <div class="content-inner chart-cont">

            
            <!--***** CONTENT *****-->
            <div class="row">

                <!--***** TIMELINE-1 *****-->
                <div class="main-timeline" id="timeline-1">
                    <div class="timeline">
                        <div class="timeline-icon"></div>
                        <div class="timeline-content">
                            <span class="date">Apr 2017 - Mar 2018</span>
                            <h5 class="title">Web Desginer</h5>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-icon"></div>
                        <div class="timeline-content">
                            <span class="date">Apr 2018 - Mar 2019</span>
                            <h5 class="title">Web Developer</h5>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.
                            </p>
                        </div>
                    </div>
                </div>

                <!--***** TIMELINE-2 *****-->
                <div class="col-md-12 mt-5">
                    <div class="main-timeline" id="timeline-2">
                        <div class="timeline">
                            <div class="timeline-content">
                                <span class="year">2017-2018</span>
                                <span class="post">Web Desginer</span>
                                <h4 class="title">Williamson</h4>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec sagittis mauris. Donec mollis nunc eu est maximus eleifend. In ac malesuada nisl.</p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-content">
                                <span class="year">2018-2019</span>
                                <span class="post">Web Developer</span>
                                <h4 class="title">Kristiana</h4>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec sagittis mauris. Donec mollis nunc eu est maximus eleifend. In ac malesuada nisl.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--***** TIMELINE-3 *****-->
                <div class="main-timeline mt-5" id="timeline-3">
                    <div class="timeline">
                        <div class="timeline-icon"></div>
                        <div class="timeline-content">
                            <span class="date">Apr 2017 - Mar 2018</span>
                            <h5 class="title">Web Desginer</h5>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-icon"></div>
                        <div class="timeline-content">
                            <span class="date">Apr 2018 - Mar 2019</span>
                            <h5 class="title">Web Developer</h5>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.
                            </p>
                        </div>
                    </div>
                </div>

                <!--***** TIMELINE-4 *****-->
                <div class="col-md-12 mt-5" >
                    <div class="main-timeline" id="timeline-4">
                        <div class="timeline">
                            <div class="timeline-icon">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="timeline-content">
                                <h2 class="title">Web Design</h2>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod fringilla nibh, feugiat pretium velit. Integer elit urna, maximus vitae rutrum hendrerit, pretium sed massa.
                                </p>
                                <a href="#" class="read-more">read more</a>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-icon">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="timeline-content right">
                                <h2 class="title">Web Development</h2>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod fringilla nibh, feugiat pretium velit. Integer elit urna, maximus vitae rutrum hendrerit, pretium sed massa.
                                </p>
                                <a href="#" class="read-more">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
