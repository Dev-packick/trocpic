@extends('layouts.admin')
@section('content')
<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">
        <div class="content-inner chart-cont">
            

            <!--***** CHART *****-->
            <div class="row">
                <div class="col-md-6 mt-2">
                    <div class="card">
                    <div class="dropdown pull-right menu-sett-card" >
                            <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v men"></i>
                            </a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Edit</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">FAQ</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <canvas id="bar-chart" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="dropdown pull-right menu-sett-card" >
                            <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v men"></i>
                            </a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Edit</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">FAQ</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <canvas id="line-chart" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="dropdown pull-right menu-sett-card" >
                            <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v men"></i>
                            </a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Edit</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">FAQ</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <canvas id="line-chart-2D" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="dropdown pull-right menu-sett-card" >
                            <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v men"></i>
                            </a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Edit</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">FAQ</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <canvas id="pie-chart1" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="dropdown pull-right menu-sett-card" >
                            <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v men"></i>
                            </a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Edit</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">FAQ</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <canvas id="pie-chart2" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="dropdown pull-right menu-sett-card" >
                            <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v men"></i>
                            </a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Edit</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">FAQ</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <canvas id="radar-chart" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="dropdown pull-right menu-sett-card" >
                            <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v men"></i>
                            </a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Edit</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">FAQ</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <canvas id="polar-chart1" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="dropdown pull-right menu-sett-card" >
                            <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v men"></i>
                            </a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Edit</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">FAQ</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <canvas id="polar-chart2" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="dropdown pull-right menu-sett-card" >
                            <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v men"></i>
                            </a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Edit</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">FAQ</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <canvas id="doughnut-chart1" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="dropdown pull-right menu-sett-card" >
                            <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v men"></i>
                            </a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Edit</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">FAQ</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <canvas id="doughnut-chart2" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="dropdown pull-right menu-sett-card" >
                            <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v men"></i>
                            </a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Edit</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">FAQ</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <canvas id="bar-chart-horizontal" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="dropdown pull-right menu-sett-card" >
                            <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v men"></i>
                            </a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Edit</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">FAQ</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <canvas id="bar-chart-grouped" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="dropdown pull-right menu-sett-card" >
                            <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v men"></i>
                            </a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Edit</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">FAQ</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <canvas id="mixed-chart" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="dropdown pull-right menu-sett-card" >
                            <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v men"></i>
                            </a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Edit</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">FAQ</a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <canvas id="bubble-chart" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
