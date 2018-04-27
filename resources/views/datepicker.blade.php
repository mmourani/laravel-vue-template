@extends('layouts.default')
@section('title')
    Date pickers | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="vendors/daterangepicker/css/daterangepicker.css" rel="stylesheet" type="text/css"/>
    <link href="css/jquery.datetimepicker.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="vendors/datedropper/datedropper.css">
    <link rel="stylesheet" type="text/css" href="vendors/timedropper/css/timedropper.css">
    <link rel="stylesheet" type="text/css" href="vendors/jquerydaterangepicker/css/daterangepicker.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/clockpicker/css/bootstrap-clockpicker.min.css">
    <link rel="stylesheet" type="text/css" href="css/datepicker.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Date pickers
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Forms</a>
                </li>
                <li>
                    <a>
                        Date pickers
                    </a>
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-calendar"></i> Date and Time range picker
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <!-- Date range -->
                                <div class="form-group">
                                    <label>
                                        Date picker:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw ti-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control float-right" id="date-range0"
                                               placeholder="YYYY-MM-DD to YYYY-MM-DD"/>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!-- Date and time range -->
                                <div class="form-group">
                                    <label>
                                        Date and Time Picker:
                                    </label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control" id="dateclock"
                                               placeholder="YYYY-MM-DD HH:MM ~ YYYY-MM-DD HH:MM">
                                        <span class="input-group-addon right_addon">
                                                <span class="fa fa-clock-o"></span>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Span instead of Input:
                                    </label>
                                    <div class="input-group">
                                        <span id="date-range9"
                                              style="background-color:#6699cc; color:white;padding:3px; cursor:pointer; border-radius:4px;">YYYY-MM-DD to YYYY-MM-DD</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Date picker with Animation:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw ti-time"></i>
                                        </div>
                                        <input id="date-range50" size="30" value="" class="form-control"
                                               placeholder="YYYY-MM-DD to YYYY-MM-DD">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!-- Date and time range -->
                                <div class="form-group">
                                    <label>
                                        Hotel booking:
                                    </label>
                                    <div class="input-group">

                                        <input id="hotel-booking" class="form-control" size="60" value=""
                                               placeholder="Days Booked">
                                        <span></span>
                                        <div class="input-group-addon right_addon">
                                            <i class="fa fa-fw ti-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Select backward:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw ti-calendar"></i>
                                        </div>
                                        <input class="form-control" id="date-range26" size="30" value=""
                                               placeholder="YYYY-MM-DD to YYYY-MM-DD">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group">
                                    <label>
                                        Single Date mode with single month:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw ti-calendar"></i>
                                        </div>
                                        <input class="form-control" id="date-range13-2" size="40"
                                               placeholder="YYYY-MM-DD">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group">
                                    <label>
                                        Batch mode ( week ):
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw ti-calendar"></i>
                                        </div>
                                        <input class="form-control" id="date-range14" size="60" value=""
                                               placeholder="YYYY-MM-DD to YYYY-MM-DD">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                            </div>
                            <!-- /.form group -->
                            <!-- time picker -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card set_media">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-paint-bucket"></i> Date & Time Dropper
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>
                                    Date dropper:
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-fw ti-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="departure" placeholder="DD/MM/YYYY"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label>
                                    Date format:
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-fw ti-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="departure1" placeholder="YYYY-MM-DD"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label>
                                    Maximum Year:
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-fw ti-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="departure2" placeholder="DD/MM/YYYY"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label>
                                    Animate date dropper
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-fw ti-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="departure3" placeholder="DD/MM/YYYY"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label>
                                    Time dropper:
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-fw ti-time"></i>
                                    </div>
                                    <input type="text" class="form-control" id="alarm" placeholder="HH-MM"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label>
                                    Meridian time dropper:
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-fw ti-time"></i>
                                    </div>
                                    <input type="text" class="form-control" id="alarm1" placeholder="HH-MM"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label>
                                    Animate time dropper:
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-fw ti-time"></i>
                                    </div>
                                    <input type="text" class="form-control" id="alarm2" placeholder="HH-MM"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mrgn_top">
                <div class="col-xl-6">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-calendar"></i> Date Range picker
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <!-- Date range -->
                                <div class="form-group">
                                    <label>
                                        Date range:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw ti-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control float-right" id="reservation"
                                               placeholder="MM/DD/YYYY - MM/DD/YYYY"/>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!-- Date and time range -->
                                <div class="form-group">
                                    <label>
                                        Clock Picker:
                                    </label>
                                    <div class="input-group clockpicker" data-placement="left" data-align="top"
                                         data-autoclose="true">
                                        <input type="text" class="form-control" value="Now" placeholder="HH:MM">
                                        <span class="input-group-addon right_addon">
                                                <span class="fa fa-clock-o"></span>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Call Backs Clock Picker:
                                    </label>
                                    <div class="input-group clockpicker-with-callbacks">
                                        <input type="text" class="form-control" value="Now" placeholder="HH:MM">
                                        <span class="input-group-addon right_addon">
                                                <span class="fa fa-clock-o"></span>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Date and time range:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw ti-time"></i>
                                        </div>
                                        <input type="text" class="form-control float-right" id="reservationtime"
                                               placeholder="MM/DD/YYYY HH:MM-MM/DD/YYYY HH:MM">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!-- Date and time range -->
                                <div class="form-group">
                                    <label>
                                        Predefined Date range:
                                    </label>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                    <i class="fa ti-calendar"></i>
                                                </span>
                                        <input type="text" class="form-control" id="reportrange"
                                               placeholder="DD/MM/YYYY-DD/MM/YYYY">
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <!-- time picker -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card set_media">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-book"></i> Input masks
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>
                                        Date masks:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw ti-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'"
                                               data-mask/>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!-- Date mm/dd/yyyy -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw ti-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'"
                                               data-mask/>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!-- phone mask -->
                                <div class="form-group">
                                    <label>
                                        US phone mask:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw ti-mobile"></i>
                                        </div>
                                        <input type="text" class="form-control"
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!-- phone mask -->
                                <div class="form-group">
                                    <label>
                                        Intl US phone mask:
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw ti-mobile"></i>
                                        </div>
                                        <input type="text" class="form-control"
                                               data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']"
                                               data-mask/>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!-- IP mask -->
                                <div class="form-group">
                                    <label>IP mask:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw ti-desktop"></i>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'ip'"
                                               data-mask/>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
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
            <!--main content ends-->
        </section>
        <!-- /.content -->
    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script src="vendors/moment/js/moment.min.js" type="text/javascript"></script>
    <script src="vendors/inputmask/inputmask/inputmask.js" type="text/javascript"></script>
    <script src="vendors/inputmask/inputmask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="vendors/inputmask/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="vendors/inputmask/inputmask/inputmask.extensions.js" type="text/javascript"></script>
    <script src="vendors/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
    <script src="vendors/clockpicker/js/bootstrap-clockpicker.min.js" type="text/javascript"></script>
    <script src="vendors/jquerydaterangepicker/js/jquery.daterangepicker.min.js" type="text/javascript"></script>
    <script src="vendors/datedropper/datedropper.js" type="text/javascript"></script>
    <script src="vendors/timedropper/js/timedropper.js" type="text/javascript"></script>
    <script src="js/jquery.datetimepicker.js" type="text/javascript"></script>
    <script src="js/custom_js/datepickers.js" type="text/javascript"></script>
    <!-- end of page level js -->
@stop



