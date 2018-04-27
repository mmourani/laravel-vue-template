@extends('layouts.default')
@section('title')
    Grid Layout | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" href="vendors/gridstack/css/gridstack.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom_css/grids_layout.css"/>

    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Grid Layout
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        UI Features
                    </a>
                </li>
                <li class="active">
                    Grid layout
                </li>
            </ol>
        </section>
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title response-title">
                                <i class="ti-layout-menu-v"></i> Responsive Grid Examples
                            </h3>
                            <span class="float-right hidden-xs">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                <i class="fa fa-fw ti-close removecard"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        This demostrates Bootstrap Grid system and how it responds to different screen
                                        sizes.
                                    </p>
                                    <div class="">
                                        <p class="d-lg-block d-md-none d-sm-none d-none">
                                            lg indicates that the large grid displaying. The grid stacks horizontally
                                            &lt; 1200px.
                                        </p>
                                        <p class="d-md-block d-lg-none d-sm-none d-none">
                                            md indicates that the medium grid displaying. The grid stacks horizontally
                                            &lt; 992px.
                                        </p>
                                        <p class="d-sm-block d-md-none d-lg-none d-xl-none d-none">
                                            sm indicates that the small grid displaying. The grid stacks horizontally
                                            &lt; 768px.
                                        </p>
                                        <p class="d-block d-sm-none d-md-none d-lg-none d-xl-none">
                                            xs indicates that the extra small grid displaying. This grid is always
                                            horizontal.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12 grid-section">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-4">
                                            <div class="text-center grid-property bg-primary">
                                                <span class="d-xl-block d-md-none d-sm-none d-none d-lg-none">.col-xl-4</span>
                                                <span class="d-lg-block d-md-none d-sm-none d-lg-none d-none d-xl-none">.col-lg-4</span>
                                                <span class="d-md-block d-sm-none d-lg-none d-xl-none d-none">.col-md-4</span>
                                                <span class="d-sm-block d-md-none d-lg-none d-xl-none d-none">.col-sm-3</span>
                                                <span class="d-block d-sm-none d-md-none d-lg-none d-xl-none">.col-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-2 col-sm-3 col-4">
                                            <div class="text-center grid-property bg-success">
                                                <span class="d-xl-block d-md-none d-sm-none d-none d-lg-none">.col-xl-4</span>
                                                <span class="d-lg-block d-md-none d-sm-none d-none d-xl-none">.col-lg-4</span>
                                                <span class="d-md-block d-lg-none d-none d-sm-none">.col-md-2</span>
                                                <span class="d-sm-block d-md-none d-lg-none d-none">.col-sm-3</span>
                                                <span class="d-block d-md-none d-sm-none d-lg-none">.col-4</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-4">
                                            <div class="text-center grid-property bg-danger">
                                                <span class="d-xl-block d-md-none d-sm-none d-none d-lg-none">.col-xl-4</span>
                                                <span class="d-lg-block d-md-none d-sm-none d-none d-xl-none">.col-lg-4</span>
                                                <span class="d-md-block d-lg-none d-none d-sm-none">.col-md-6</span>
                                                <span class="d-sm-block d-md-none d-lg-none d-none">.col-sm-6</span>
                                                <span class="d-block d-md-none d-sm-none d-lg-none">.col-4</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="grid-section">
                                        <div class="row">
                                            <label class="col-12">xs Grid</label>
                                            <div class="col-4">
                                                <div class="text-center grid-property bg-warning">
                                                    <span>.col-4</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="text-center grid-property bg-danger">
                                                    <span>.col-4</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="text-center grid-property bg-primary">
                                                    <span>.col-4</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <div class="col-md-12">
                                    <div class="grid-section">
                                        <div class="row">
                                            <div class="col-sm-12"><label>sm Grid</label></div>
                                            <div class="col-sm-2">
                                                <div class="text-center grid-property bg-danger">
                                                    <span>.col-sm-2</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class=" text-center grid-property bg-primary">
                                                    <span>.col-sm-4</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="text-center grid-property bg-success">
                                                    <span>.col-sm-6</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <div class="col-md-12">
                                    <div class="grid-section">
                                        <div class="row">
                                            <div class="col-md-12"><label>md Grid</label></div>
                                            <div class="col-md-2">
                                                <div class=" text-center grid-property bg-success">
                                                    <span>.col-md-2</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-center grid-property bg-warning">
                                                    <span>.col-md-4</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-center grid-property bg-primary">
                                                    <span>.col-md-6</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <div class="col-md-12">
                                    <div class="grid-section">
                                        <div class="row">
                                            <div class="col-lg-12"><label>lg Grid</label></div>
                                            <div class="col-lg-4">
                                                <div class=" text-center grid-property bg-warning">
                                                    <span>.col-lg-4</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-center grid-property bg-danger">
                                                    <span>.col-lg-4</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-center grid-property bg-success">
                                                    <span>.col-lg-4</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <div class="col-md-12">
                                    <div class="grid-section">
                                        <div class="row">
                                            <div class="col-xl-12"><label>xl Grid</label></div>
                                            <div class="col-xl-4">
                                                <div class=" text-center grid-property bg-success">
                                                    <span>.col-xl-4</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="text-center grid-property bg-warning">
                                                    <span>.col-xl-4</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="text-center grid-property bg-primary">
                                                    <span>.col-xl-4</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--grif stack-->
                <div class="col-md-12 ">
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-layout-grid3"></i> Gridstack
                            </h3>
                            <span class="float-right">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                <i class="fa fa-fw ti-close removecard"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="grid-stack" data-gs-width="12" data-gs-animate="yes">
                                        <div class="grid-stack-item" data-gs-x="0" data-gs-y="0" data-gs-width="4"
                                             data-gs-height="2">
                                            <div class="grid-stack-item-content">1</div>
                                        </div>
                                        <div class="grid-stack-item" data-gs-x="4" data-gs-y="0" data-gs-width="4"
                                             data-gs-height="4">
                                            <div class="grid-stack-item-content">2</div>
                                        </div>
                                        <div class="grid-stack-item" data-gs-x="8" data-gs-y="0" data-gs-width="2"
                                             data-gs-height="2" data-gs-min-width="2" data-gs-no-resize="yes">
                                            <div class="grid-stack-item-content"><span class="fa ti-hand-drag"></span>
                                                Drag me!
                                            </div>
                                        </div>
                                        <div class="grid-stack-item" data-gs-x="10" data-gs-y="0" data-gs-width="2"
                                             data-gs-height="2">
                                            <div class="grid-stack-item-content">4</div>
                                        </div>
                                        <div class="grid-stack-item" data-gs-x="0" data-gs-y="2" data-gs-width="2"
                                             data-gs-height="2">
                                            <div class="grid-stack-item-content">5</div>
                                        </div>
                                        <div class="grid-stack-item" data-gs-x="2" data-gs-y="2" data-gs-width="2"
                                             data-gs-height="4">
                                            <div class="grid-stack-item-content">6</div>
                                        </div>
                                        <div class="grid-stack-item" data-gs-x="8" data-gs-y="2" data-gs-width="4"
                                             data-gs-height="2">
                                            <div class="grid-stack-item-content">7</div>
                                        </div>
                                        <div class="grid-stack-item" data-gs-x="0" data-gs-y="4" data-gs-width="2"
                                             data-gs-height="2">
                                            <div class="grid-stack-item-content">8</div>
                                        </div>
                                        <div class="grid-stack-item" data-gs-x="4" data-gs-y="4" data-gs-width="4"
                                             data-gs-height="2">
                                            <div class="grid-stack-item-content">9</div>
                                        </div>
                                        <div class="grid-stack-item" data-gs-x="8" data-gs-y="4" data-gs-width="2"
                                             data-gs-height="2">
                                            <div class="grid-stack-item-content">10</div>
                                        </div>
                                        <div class="grid-stack-item" data-gs-x="10" data-gs-y="4" data-gs-width="2"
                                             data-gs-height="2">
                                            <div class="grid-stack-item-content">11</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
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
    <script type="text/javascript" src="vendors/lodash/js/lodash.min.js"></script>
    <script type="text/javascript" src="js/gridstack.js"></script>
    <script type="text/javascript" src="js/custom_js/gridstack.js"></script>
    <!-- end of page level js -->
@stop




