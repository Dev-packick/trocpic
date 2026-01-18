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
                        <h1>Interface Administrateur</h1>
                        <h2 class="lead"><strong class="cl-blue">3</strong> résultats ont été trouvés pour la recherche de <strong class="cl-blue">catégorie X</strong></h2>
                    </hgroup>

                    <section class="col-xs-12 col-sm-6 col-md-12">
                        <div class="container" style="padding: 2rem 0rem; width: 100%; max-width: 100%;">
                          <div class="row" style="display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                            <div class="col-12" style="-ms-flex: 0 0 100%; flex: 0 0 100%; max-width: 100%;">
                            <table class="table table-bordered table-image" style="width: 100%; margin-bottom: 1rem; background-color: transparent;">
                                <thead>
                                <tr>
                                    <th scope="col" style="padding-top: 0.75rem; padding-bottom: 0.75rem; text-align: center; vertical-align: middle; border-top: 1px solid #dee2e6;">Titre 1</th>
                                    <th scope="col" style="padding-top: 0.75rem; padding-bottom: 0.75rem; text-align: center; vertical-align: middle; border-top: 1px solid #dee2e6;">Titre 2</th>
                                    <th scope="col" style="padding-top: 0.75rem; padding-bottom: 0.75rem; text-align: center; vertical-align: middle; border-top: 1px solid #dee2e6;">Titre 3</th>
                                    <th scope="col" style="padding-top: 0.75rem; padding-bottom: 0.75rem; text-align: center; vertical-align: middle; border-top: 1px solid #dee2e6;">Titre 4</th>
                                    <th scope="col" style="padding-top: 0.75rem; padding-bottom: 0.75rem; text-align: center; vertical-align: middle; border-top: 1px solid #dee2e6;">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row" style="vertical-align: middle; border-top: 1px solid #dee2e6;">1</th>
                                    <td style="vertical-align: middle; border-top: 1px solid #dee2e6;">Bootstrap 4 CDN and Starter Template</td>
                                    <td style="vertical-align: middle; border-top: 1px solid #dee2e6;">Cristina</td>
                                    <td style="vertical-align: middle; border-top: 1px solid #dee2e6;">2.846</td>
                                    <td style="vertical-align: middle; border-top: 1px solid #dee2e6;">
                                    <button type="button" class="btn btn-primary" style="vertical-align: middle;"><i class="far fa-eye"></i></button>
                                    <button type="button" class="btn btn-success" style="vertical-align: middle;"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger" style="vertical-align: middle;"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" style="vertical-align: middle; border-top: 1px solid #dee2e6;">2</th>
                                    <td style="vertical-align: middle; border-top: 1px solid #dee2e6;">Bootstrap Grid 4 Tutorial and Examples</td>
                                    <td style="vertical-align: middle; border-top: 1px solid #dee2e6;">Cristina</td>
                                    <td style="vertical-align: middle; border-top: 1px solid #dee2e6;">3.417</td>
                                    <td style="vertical-align: middle; border-top: 1px solid #dee2e6;">
                                    <button type="button" class="btn btn-primary" style="vertical-align: middle;"><i class="far fa-eye"></i></button>
                                    <button type="button" class="btn btn-success" style="vertical-align: middle;"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger" style="vertical-align: middle;"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" style="vertical-align: middle; border-top: 1px solid #dee2e6;">3</th>
                                    <td style="vertical-align: middle; border-top: 1px solid #dee2e6;">Bootstrap Flexbox Tutorial and Examples</td>
                                    <td style="vertical-align: middle; border-top: 1px solid #dee2e6;">Cristina</td>
                                    <td style="vertical-align: middle; border-top: 1px solid #dee2e6;">1.234</td>
                                    <td style="vertical-align: middle; border-top: 1px solid #dee2e6;">
                                    <button type="button" class="btn btn-primary" style="vertical-align: middle;"><i class="far fa-eye"></i></button>
                                    <button type="button" class="btn btn-success" style="vertical-align: middle;"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger" style="vertical-align: middle;"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                          </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>

@endsection
