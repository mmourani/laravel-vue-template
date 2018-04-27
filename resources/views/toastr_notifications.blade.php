@extends('layouts.default')
@section('title')
    Toastr Notifications  | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="vendors/toastr/css/toastr.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="vendors/iCheck/css/minimal/blue.css">
    <link rel="stylesheet" type="text/css" href="css/custom_css/toastr_notificatons.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Toastr Notifications</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">UI Features</a>
                </li>
                <li class="active">
                    <a href="toastr_notifications">Toastr Notifications</a>
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-bell"></i> Toastr Notifications
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4><i class="fa fa-fw ti-info-alt text-info message"></i> When changing
                                            toastr position clear all toasts to see the effect</h4></div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label" for="title"><b>Title</b></label>
                                            <input id="title" type="text" class="form-control"
                                                   value="Toastr Notifications" placeholder="Enter a title ...">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="message"><b>Message</b></label>
                                            <textarea class="form-control resize_vertical" id="message" rows="3"
                                                      placeholder="Enter a message ...">Gnome &amp; Growl type non-blocking notifications</textarea>
                                        </div>
                                        <form>
                                            <div class="form-group" id="positionGroup">
                                                <label class="position-type"><b>Toaster Position</b></label>
                                                <select name="toast-position" class="form-control" id="position-change">
                                                    <option value="0">Top Left</option>
                                                    <option value="1" selected>Top Right</option>
                                                    <option value="2">Top Center</option>
                                                    <option value="3">Top Full Width</option>
                                                    <option value="4">Bottom Left</option>
                                                    <option value="5">Bottom Right</option>
                                                    <option value="6">Bottom Center</option>
                                                    <option value="7">Bottom Full Width</option>
                                                </select>
                                                <div hidden>
                                                    <div>
                                                        <label>
                                                            <input type="radio" class="custom-radio" name="positions"
                                                                   value="toast-top-left"> Top Left
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" class="custom-radio" name="positions"
                                                                   value="toast-top-right" checked=""> Top Right
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" class="custom-radio" name="positions"
                                                                   value="toast-top-center"/> Top Center
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" class="custom-radio" name="positions"
                                                                   value="toast-top-full-width"> Top Full Width
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" class="custom-radio" name="positions"
                                                                   value="toast-bottom-left"> Bottom Left
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" class="custom-radio" name="positions"
                                                                   value="toast-bottom-right"> Bottom Right
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" class="custom-radio" name="positions"
                                                                   value="toast-bottom-center"/> Bottom Center
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" class="custom-radio" name="positions"
                                                                   value="toast-bottom-full-width"> Bottom Full Width
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-3 ">
                                        <div class="form-group" id="toastTypeGroup">
                                            <label class="toast-type">Toast Type</label>
                                            <div>
                                                <label class="text-success">
                                                    <input type="radio" name="toasts" class="custom-radio"
                                                           value="success" checked=""> Success
                                                </label>
                                            </div>
                                            <div>
                                                <label class="text-info">
                                                    <input type="radio" name="toasts" class="custom-radio"
                                                           value="info"> Info
                                                </label>
                                            </div>
                                            <div>
                                                <label class="text-warning">
                                                    <input type="radio" name="toasts" class="custom-radio"
                                                           value="warning"> Warning
                                                </label>
                                            </div>
                                            <div>
                                                <label class="text-danger">
                                                    <input type="radio" name="toasts" class="custom-radio"
                                                           value="error"> Error
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <label for="closeButton">
                                                    <input id="closeButton" type="checkbox" checked=""
                                                           class="input-small custom-checkbox"> Close Button
                                                </label>
                                            </div>
                                            <div>
                                                <label for="addBehaviorOnToastClick">
                                                    <input id="addBehaviorOnToastClick" type="checkbox"
                                                           class="input-small custom-checkbox"> Add behavior on toast
                                                    click
                                                </label>
                                            </div>
                                            <div>
                                                <label for="debugInfo">
                                                    <input id="debugInfo" type="checkbox"
                                                           class="input-small custom-checkbox"> Debug
                                                </label>
                                            </div>
                                            <div>
                                                <label for="progressBar">
                                                    <input id="progressBar" type="checkbox"
                                                           class="input-small custom-checkbox"/> Progress Bar
                                                </label>
                                            </div>
                                            <div>
                                                <label for="preventDuplicates">
                                                    <input id="preventDuplicates" type="checkbox"
                                                           class="input-small custom-checkbox"/> Prevent Duplicates
                                                </label>
                                            </div>
                                            <div>
                                                <label for="addClear">
                                                    <input id="addClear" type="checkbox"
                                                           class="input-small custom-checkbox"/> Force clearing button
                                                </label>
                                            </div>
                                            <div>
                                                <label for="newestOnTop">
                                                    <input id="newestOnTop" type="checkbox"
                                                           class="input-small custom-checkbox"/> Newest on top
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="controls">
                                            <div class="form-group">
                                                <label class="control-label" for="showEasing">Show Easing</label>
                                                <select class="form-control input-small" id="showEasing">
                                                    <option>swing</option>
                                                    <option>linear</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="hideEasing">Hide Easing</label>
                                                <select id="hideEasing" class="form-control input-small">
                                                    <option>swing</option>
                                                    <option>linear</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="showMethod">Show Method</label>
                                                <select id="showMethod" class="form-control input-small">
                                                    <option value="show">show</option>
                                                    <option value="fadeIn">fadeIn</option>
                                                    <option value="slideDown">slideDown</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="hideMethod">Hide Method</label>
                                                <select class="form-control input-small" id="hideMethod">
                                                    <option value="">hide</option>
                                                    <option value="fadeOut">fadeOut</option>
                                                    <option value="slideUp">slideUp</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 duration">
                                        <div class="controls">
                                            <div class="form-group">
                                                <label class="control-label" for="showDuration">Show Duration</label>
                                                <input id="showDuration" type="text" placeholder="ms"
                                                       class="form-control input-small" value="1000">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="hideDuration">Hide Duration</label>
                                                <input id="hideDuration" type="text" placeholder="ms"
                                                       class="form-control input-small" value="1000">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="timeOut">Time out</label>
                                                <input id="timeOut" type="text" placeholder="ms"
                                                       class="form-control input-small" value="5000">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="timeOut">Extended time out</label>
                                                <input id="extendedTimeOut" type="text" placeholder="ms"
                                                       class="form-control input-small" value="1000">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-2 col-6">
                                        <button type="button" class="btn btn-success btn-raised toastrshow"
                                                id="showtoast">
                                            Show Toast
                                        </button>
                                    </div>
                                    <div class="col-sm-2 col-6">
                                        <button type="button" class="btn btn-danger btn-raised toastrshow"
                                                id="cleartoasts">
                                            Clear Toasts
                                        </button>
                                    </div>
                                    <div class="col-sm-2 col-6">
                                        <button type="button" class="btn btn-warning btn-raised toastrshow"
                                                id="clearlasttoast">
                                            Clear Last Toast
                                        </button>
                                    </div>

                                </div>
                                <br/>
                                <div class="row margin-top-10">
                                    <div class="col-md-12">
                                        <pre id="toastrOptions"></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--rightside bar -->
            <div id="right">
                <div id="right-slim">
                    <div class="rightsidebar-right">
                        <div class="rightsidebar-right-content">
                            <div class="panel-tabs">
                                <ul class="nav nav-tabs nav-float" role="tablist">
                                    <li class="nav-item text-center">
                                        <a href="#r_tab1" role="tab" data-toggle="tab" class="nav-link active "><i
                                                    class="fa fa-fw ti-comments"></i></a>
                                    </li>
                                    <li class="text-center nav-item">
                                        <a href="#r_tab2" role="tab" data-toggle="tab" class="nav-link"><i class="fa fa-fw ti-bell"></i></a>
                                    </li>
                                    <li class="text-center nav-item">
                                        <a href="#r_tab3" role="tab" data-toggle="tab" class="nav-link"><i
                                                    class="fa fa-fw ti-settings"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="r_tab1">
                                    <div id="slim_t1">
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="menu-icon  fa fa-fw ti-user"></i>
                                            Contacts
                                        </h5>
                                        <ul class="list-unstyled margin-none">
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar6.jpg"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-primary"></i>
                                                    Annette
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar.jpg"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-primary"></i>
                                                    Jordan
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar2.jpg"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-primary"></i>
                                                    Stewart
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar3.jpg"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-warning"></i>
                                                    Alfred
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar4.jpg"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-danger"></i>
                                                    Eileen
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar5.jpg"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-muted"></i>
                                                    Robert
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar7.jpg"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-muted"></i>
                                                    Cassandra
                                                </a>
                                            </li>
                                        </ul>

                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-export"></i>
                                            Recent Updates
                                        </h5>
                                        <div>
                                            <ul class="list-unstyled">
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-comments-smiley fa-fw text-primary"></i>
                                                        New Comment
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-twitter-alt fa-fw text-success"></i>
                                                        3 New Followers
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-email fa-fw text-info"></i>
                                                        Message Sent
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-write fa-fw text-warning"></i>
                                                        New Task
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-export fa-fw text-danger"></i>
                                                        Server Rebooted
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-info-alt fa-fw text-primary"></i>
                                                        Server Not Responding
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-shopping-cart fa-fw text-success"></i>
                                                        New Order Placed
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-money fa-fw text-info"></i>
                                                        Payment Received
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="r_tab2">
                                    <div id="slim_t2">
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-bell"></i>
                                            Notifications
                                        </h5>
                                        <ul class="list-unstyled m-t-15 notifications">
                                            <li>
                                                <a href="" class="message icon-not striped-col">
                                                    <img class="message-image rounded-circle"
                                                         src="img/authors/avatar3.jpg" alt="avatar-image">

                                                    <div class="message-body">
                                                        <strong>John Doe</strong>
                                                        <br>
                                                        5 members joined today
                                                        <br>
                                                        <small class="noti-date">Just now</small>
                                                    </div>

                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="message icon-not">
                                                    <img class="message-image rounded-circle"
                                                         src="img/authors/avatar.jpg" alt="avatar-image">
                                                    <div class="message-body">
                                                        <strong>Tony</strong>
                                                        <br>
                                                        likes a photo of you
                                                        <br>
                                                        <small class="noti-date">5 min</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="message icon-not striped-col">
                                                    <img class="message-image rounded-circle"
                                                         src="img/authors/avatar6.jpg" alt="avatar-image">

                                                    <div class="message-body">
                                                        <strong>John</strong>
                                                        <br>
                                                        Dont forgot to call...
                                                        <br>
                                                        <small class="noti-date">11 min</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="message icon-not">
                                                    <img class="message-image rounded-circle"
                                                         src="img/authors/avatar1.jpg" alt="avatar-image">
                                                    <div class="message-body">
                                                        <strong>Jenny Kerry</strong>
                                                        <br>
                                                        Done with it...
                                                        <br>
                                                        <small class="noti-date">1 Hour</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="message icon-not striped-col">
                                                    <img class="message-image rounded-circle"
                                                         src="img/authors/avatar7.jpg" alt="avatar-image">

                                                    <div class="message-body">
                                                        <strong>Ernest Kerry</strong>
                                                        <br>
                                                        2 members joined today
                                                        <br>
                                                        <small class="noti-date">3 Days</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-right noti-footer"><a href="#">View All Notifications <i
                                                            class="ti-arrow-right"></i></a></li>
                                        </ul>
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-check-box"></i>
                                            Tasks
                                        </h5>
                                        <ul class="list-unstyled m-t-15">
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>Button Design</span>
                                                        <small class="float-right text-muted">40%</small>
                                                    </p>
                                                    <div class="progress progress-xs  active">
                                                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 40%">
                                                            <span class="sr-only">40% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>Theme Creation</span>
                                                        <small class="float-right text-muted">20%</small>
                                                    </p>
                                                    <div class="progress progress-xs  active">
                                                        <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 20%">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>XYZ Task To Do</span>
                                                        <small class="float-right text-muted">60%</small>
                                                    </p>
                                                    <div class="progress progress-xs  active">
                                                        <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 60%">
                                                            <span class="sr-only">60% Complete (warning)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>Transitions Creation</span>
                                                        <small class="float-right text-muted">80%</small>
                                                    </p>
                                                    <div class="progress progress-xs active">
                                                        <div class="progress-bar bg-danger progress-bar-striped" role="progressbar"
                                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 80%">
                                                            <span class="sr-only">80% Complete (danger)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="text-right"><a href="#">View All Tasks <i
                                                            class="ti-arrow-right"></i></a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="r_tab3">
                                    <div id="slim_t3">

                                        <h5 class="rightsidebar-right-heading text-uppercase gen-sett-m-t text-xs">
                                            <i class="fa fa-fw ti-settings"></i>
                                            General
                                        </h5>
                                        <ul class="list-unstyled settings-list m-t-10">
                                            <li>
                                                <label for="status">Available</label>
                                                <span class="float-right">
                                            <input type="checkbox" id="status" name="my-checkbox" checked>
                                        </span>
                                            </li>
                                            <li>
                                                <label for="email-auth">Login with Email</label>
                                                <span class="float-right">
                                            <input type="checkbox" id="email-auth" name="my-checkbox">
                                        </span>
                                            </li>
                                            <li>
                                                <label for="update">Auto Update</label>
                                                <span class="float-right">
                                            <input type="checkbox" id="update" name="my-checkbox">
                                        </span>
                                            </li>

                                        </ul>
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-volume"></i>
                                            Sound & Notification
                                        </h5>
                                        <ul class="list-unstyled settings-list m-t-10">
                                            <li>
                                                <label for="chat-sound">Chat Sound</label>
                                                <span class="float-right">
                                            <input type="checkbox" id="chat-sound" name="my-checkbox" checked>
                                        </span>
                                            </li>
                                            <li>
                                                <label for="noti-sound">Notification Sound</label>
                                                <span class="float-right">
                                            <input type="checkbox" id="noti-sound" name="my-checkbox">
                                        </span>
                                            </li>
                                            <li>
                                                <label for="remain">Remainder </label>
                                                <span class="float-right">
                                            <input type="checkbox" id="remain" name="my-checkbox" checked>
                                        </span>

                                            </li>
                                            <li>
                                                <label for="vol">Volume</label>
                                                <input type="range" id="vol" min="0" max="100" value="15">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background-overlay"></div>
        </section>
        <!-- /.content -->
    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script src="vendors/toastr/js/toastr.min.js"></script>
    <script src="vendors/iCheck/js/icheck.js"></script>
    <script type="text/javascript" src="js/custom_js/toastr_notifications.js"></script>
    <!-- end of page level js -->
@stop

