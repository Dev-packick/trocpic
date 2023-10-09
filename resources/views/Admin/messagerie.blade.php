@extends('layouts.admin')
@section('content')
<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="content-inner calendar-cont">

            <!--***** MAILBOX *****-->
            <div class="row" id="emails-cont">
                <div class="mail-box">
                    <aside class="sm-side">
                        <div class="inbox-body">
                            <a href="#myModal" data-toggle="modal" title="Compose" class="btn btn-compose">Envoyer un message</a>
                            <!-- Modal -->
                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                            <h4 class="modal-title">Nouveau message</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" class="form-horizontal">
                                                <div class="row form-group">
                                                    <label class="col-lg-2 control-label">Envoyé à</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-lg-2 control-label">Adresse</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" placeholder="" id="cc" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-lg-2 control-label">Sujet</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-lg-2 control-label">Message</label>
                                                    <div class="col-lg-10">
                                                        <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="offset-lg-2 col-lg-10">
                                                        <span class="btn green fileinput-button">
                                                        <i class="fa fa-plus fa fa-white"></i>
                                                        <span>Fichier</span>
                                                        <input type="file" name="files[]" multiple="">
                                                        </span>
                                                        <button class="btn btn-send ml-3" type="submit">Envoyer</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>
                        <ul class="inbox-nav inbox-divider">
                            <li class="active">
                                <a href="#"><i class="fa fa-inbox"></i> Boite réception <span class="label label-danger pull-right">2</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope-o"></i> Message envoyé</a>
                            </li>
                            <li>
                                <a href="#"><i class=" fa fa-trash-o"></i> Corbeille</a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="lg-side">
                        <div class="inbox-body">
                            <div class="mail-option">
                                <div class="btn-group hidden-phone">
                                    <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                                         <input type="checkbox" class="mail-checkbox mail-group-checkbox"> Tous
                                         <i class="fa fa-angle-down "></i>
                                     </a>
                                    <ul class="dropdown-menu drop-inbox">
                                        <li><a href="#"><i class="fa fa-pencil"></i> Tous</a></li>
                                        <li><a href="#"><i class="fa fa-ban"></i> Aucun</a></li>
                                        <li><a href="#"><i class="fa fa-book"></i> Lus</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Non lus</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                     <i class=" fa fa-refresh"></i>
                                 </a>
                                </div>
                                <ul class="unstyled inbox-pagination">
                                    <li><span>1-50 sur 250</span></li>
                                    <li>
                                        <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                    </li>
                                    <li>
                                        <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <table class="table table-inbox table-hover">
                                <tbody>
                                    <tr class="unread">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Nom de l'utilisateur </td>
                                        <td class="view-message">Improve the search presence of WebSite</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 18</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </aside>
                </div>
            </div>

        </div>
@endsection
