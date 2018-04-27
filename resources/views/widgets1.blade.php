@extends('layouts.default')
@section('title')
    Widgets | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="css/jquery.circliful.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="vendors/animate/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom_css/widgets1.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Widgets 2</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Widgets</a>
                </li>
                <li class="active">
                    Widgets 2
                </li>
            </ol>
        </section>
        <!--section ends-->
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-sm-6 col-md-6 col-xl-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon pull-left">
                                <i class="ti-server text-warning"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b id="widget_count1">3752</b></h3>
                                <p>Visitors</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <p><span id="sparkline">&nbsp;</span></p>
                                <p>Check summary</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-xl-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon pull-left">
                                <i class="ti-wallet text-success"></i>
                            </div>
                            <div class="text-right">
                                <h3><b id="widget_count3">3251</b></h3>
                                <p>Sales status</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <p><span class="linechart">&nbsp;</span></p>
                                <p>Check summary</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-xl-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon pull-left">
                                <i class="ti-pulse text-danger"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b id="widget_count2">35</b></h3>
                                <p>Errors</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <p><span class="piechart">&nbsp;</span></p>
                                <p>Check summary</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-xl-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon pull-left">
                                <i class="ti-twitter text-info"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b id="widget_count4">1002</b></h3>
                                <p>Followers</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <p><span class="discretechart">&nbsp;</span></p>
                                <p>Check summary</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-xl-4 col-sm-6">
                    <div class="card-box image_back">
                        <div class="text-center">
                            <i class="fa ti-apple fa-4x"></i>
                            <p><b>APPLE</b><br>
                                Connecting The Dots
                            </p>
                            <p><i class="fa ti-comment"></i>&nbsp;&nbsp; 5 | <i class="fa ti-thumb-up"></i> &nbsp;&nbsp;21
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card text-center">
                        <div class="bg-info text-white p-56">
                            <div id="for"><i class="fa ti-twitter fa-4x"></i></div>
                            <p>Dashgum is here! Take a look and enjoy this new Bootstrap Dashboard theme.</p>
                            <p class="user">@John_doe</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <a class="block block-link-hover2" href="javascript:void(0)">
                        <div class="card-box text-center text-white circle_back_img set_media">
                            <div class="flip">
                                <div class="front">
                                    <img class="rounded-circle" src="img/authors/avatar5.jpg"
                                         alt="avatar-image">
                                </div>
                                <div class="back text-center">
                                    <div class="row bg-info text-center txt_bg">
                                        <h2 class="text-center m-auto pb-3">Barry</h2>
                                        <h3 class="m-auto pb-3">Logan solutions</h3>
                                        <div class="m-auto">Web Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <a class="block block-link-hover2" href="javascript:void(0)">
                        <div class="card-box text-center text-white weather_img">
                            <div id="fls">
                                <i class="fa fa-cloud fa-4x"></i>
                            </div>
                            <h2>11º C</h2>
                            <h4>BUDAPEST</h4>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <img src="img/gallery/full/39.jpg" class="img-fluid" alt="image-nature">
                        </div>
                        <div class="card-body padding-15">
                            <div class="clearfix col-lg-8 col-md-12 col-sm-12">
                                <h3 class="h3pnl_font">Salar de Uyuni</h3>
                                <p>Bolivia</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card card-default set_media">
                        <div class="card-body card_padding">
                            <div class="row">
                                <div class="text-center col-5">
                                    <img src="img/authors/avatar4.jpg" class="rounded-circle img-fluid" alt="avatar 4">
                                </div>
                                <div class="clearfix col-7 padding-15">
                                    <h3 class="h3pnl_font">Winston Bowman</h3>
                                    <p>photographer</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer padding-15 bowman_img">
                            <div class="row ">
                                <div class="col-4  p-10">
                                    <div class="text-center">
                                        <div id="ziu">
                                            <i class="ti-comment text-white fa-5x"></i>
                                        </div>
                                    </div>
                                    <div class="text-center text-white">
                                        1568
                                    </div>
                                </div>
                                <div class="col-4  p-10">
                                    <div class="text-center">
                                        <div id="zo">
                                            <i class="ti-user text-white fa-5x"></i>
                                        </div>
                                    </div>
                                    <div class="text-center text-white">
                                        866
                                    </div>
                                </div>
                                <div class="col-4  p-10">
                                    <div class="text-center">
                                        <div id="flp">
                                            <i class="ti-heart text-white fa-5x"></i>
                                        </div>
                                    </div>
                                    <div class="text-center text-white">
                                        254
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mrgn_top">
                <div class="col-xl-4 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p>Backlight</p>
                                </div>

                                <div class="col-12 p-10">
                                    <input type="range" id="bright" min="35" max="70" value="35">
                                </div>
                            </div>
                        </div>

                        <div class="card-body demo">
                            <div class="text-white">
                                <p>Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard
                                    dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has survived not only five centuries,
                                    but
                                    also the leap into electronic typesetting, remaining essentially unchanged. It was
                                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                    passages, and more recently with desktop.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card-box set_media set_media2">
                        <div class="flip">
                            <div class="row text-center">
                                <div class="front" id="test-circle1"></div>
                            </div>
                            <div class="row text-center">
                                <div class="back" id="test-circle3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 set_media2">
                    <div class="card-box">
                        <div class="row text-center">
                            <div id="test-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=========================================-->
            <div class="row main-widgets mrgn_top">

                <div class="col-md-4 col-sm-4 text-center">
                    <div class="status-data">
                        <h4 class="h4pnl_fnt"><b>Status</b></h4>
                        <div class="row">
                            <div class="col-4 daily-data">Daily Visits <br> <b>243</b></div>
                            <div class="col-4 monthly-data">Monthly Visits <br> <b>7.29K</b></div>
                            <div class="col-4 actual">Total Visits <br> <b>86.4k</b></div>
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-12">
                                <span id="visitsspark-chart"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="sales-data">
                        <h4 class="h4pnl_fnt"><b>Sales</b></h4>
                        <div class="row">
                            <div class="col-4 daily-data">Daily Sales <br> <b>112</b></div>
                            <div class="col-4 monthly-data">Monthly Sales <br> <b>3.3K</b></div>
                            <div class="col-4 actual">Total Sales <br> <b>40.3k</b></div>
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-12">
                                <span id="salesspark-chart"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="server-load">
                        <h4 class="h4pnl_fnt"><b>Server Load</b></h4>
                        <div class="row">
                            <div class="col-4 daily-data">Used Space <br> <b>617 GB</b></div>
                            <div class="col-4 monthly-data">Total Space <br> <b>1 TB</b></div>
                            <div class="col-4 actual">Actual Load <br> <b>61.7 %</b></div>
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-12">
                                <span id="loadspark-chart1" class=""></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--main content ends-->
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
    <script type="text/javascript" src="vendors/countUp.js/js/countUp.js"></script>
    <!--Sparkline Chart-->
    <script type="text/javascript" src="vendors/jquery-knob/js/jquery.knob.js"></script>
    <!-- flip --->
    <script src="js/flip.min.js" type="text/javascript"></script>
    <!-- circliful -->
    <script src="js/jquery.circliful.min.js" type="text/javascript"></script>
    <!-- sparkline charts -->
    <script src="js/custom_js/sparkline/jquery.flot.spline.js"></script>

    <script type="text/javascript" src="js/custom_js/widgets1.js"></script>
    <!-- end of page level js -->
@stop

