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
                                        <td class="view-message  dont-show">PHPClass</td>
                                        <td class="view-message ">Added a new class: Login Class Fast Site</td>
                                        <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message  text-right">9:27 AM</td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Google Webmaster </td>
                                        <td class="view-message">Improve the search presence of WebSite</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 18</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message dont-show">Freelancer.com <span class="label label-danger pull-right">urgent</span></td>
                                        <td class="view-message">Stop wasting your visitors </td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">May 23</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Skype <span class="label label-info pull-right">family</span></td>
                                        <td class="view-message view-message">Password successfully changed</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 24</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message dont-show">Google+</td>
                                        <td class="view-message">alireza, do you know</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 09</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="dont-show">Zoosk </td>
                                        <td class="view-message">7 new singles we think you'll like</td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">May 14</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">LinkedIn </td>
                                        <td class="view-message">Alireza: Nokia Networks, System Group and </td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">February 25</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="dont-show">Facebook</td>
                                        <td class="view-message view-message">Your account was recently logged into</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 14</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Twitter</td>
                                        <td class="view-message">Your Twitter password has been changed</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">April 07</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">InternetSeer Website Monitoring</td>
                                        <td class="view-message">http://golddesigner.org/ Performance Report</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">July 14</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message dont-show">AddMe.com</td>
                                        <td class="view-message">Submit Your Website to the AddMe Business Directory</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">August 10</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Terri Rexer, S P N</td>
                                        <td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">April 14</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Bertina </td>
                                        <td class="view-message">IMPORTANT: Don't lose your domains!</td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">June 16</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message dont-show">Laura Gaffin, S P N </td>
                                        <td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">August 10</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Facebook</td>
                                        <td class="view-message view-message">Alireza Zare Login faild</td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">feb 14</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </aside>
                </div>
            </div>

        </div>
@endsection
