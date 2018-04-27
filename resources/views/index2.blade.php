@extends('layouts.default')
@section('title')
    Clear Admin Template | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="vendors/nvd3/css/nv.d3.min.css" rel="stylesheet" type="text/css">
    <link href="vendors/weathericon/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="vendors/metrojs/css/MetroJs.min.css">
    <link href="css/custom_css/dashboard2.css" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" id="main-chart" style="width: 100%">
                        <div class="chart-header">Recent Stats
                            <div class="btn-group float-right">
                                <span id="fullscreen-toggle" role="button">
                                    <small><i class="ti-fullscreen"></i></small>
                                </span>
                                <!--sull-screen-->
                                <span class="toggle-dropdown" role="menu" data-toggle="dropdown" aria-expanded="false"
                                      aria-haspopup="true">
                                    <i class="ti-more-alt option-more"></i>
                                </span>
                                <ul class="dropdown-menu chartoption-menu">
                                    <li><a href="#">View</a>
                                    </li>
                                    <li><a href="#">Update</a>
                                    </li>
                                    <li><a href="#">Settings</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="statchart-data">
                            <div class="row">
                                <div class="data text-center">
                                    <span class="percent"> 19%</span>
                                    <br class="d-block d-sm-none">
                                    <span>Orders</span>
                                </div>
                                <div class="data text-center">
                                    <span class="percent">23%</span>
                                    <br class="d-block d-sm-none">

                                    <span>Sales</span>
                                </div>
                                <div class="data text-center">
                                    <span class="percent">12%</span>
                                    <br class="d-block d-sm-none">
                                    <span>Support</span>
                                </div>
                            </div>
                        </div>
                        <div id="sales-chart" class='with-3d-shadow with-transitions'>
                            <svg></svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row main-cards">
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <h4><b class="h4pnl_font">New Users</b></h4>
                        <p>14,205
                            <small>Last month</small>
                        </p>
                        <span id="user-chart"></span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <h4><b class="h4pnl_font">Revenue</b></h4>
                        <p>$56,180
                            <small>Target</small>
                        </p>
                        <span id="mr-chart"></span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <h4><b class="h4pnl_font">Hits</b></h4>
                        <p>24,525
                            <small>Reached</small>
                        </p>
                        <h6><span class="float-right progress-label"><b>6</b><small>%</small> <i
                                class="ti-stats-up"></i></span></h6>
                        <div class="progress progress-xs progress-striped active hits-progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <h4><b class="h4pnl_font">Subscribers</b></h4>
                        <p>8,958
                            <small>Quarterly</small>
                        </p>
                        <span id="subscriber-chart"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card profile-page">
                        <div class="cover-image">

                            <a class="btn change_pic prev_pic"><img src="img/prev.png" alt="previous"></a>
                            <a class="btn change_pic next_pic float-right"><img src="img/next.png" alt="previous"></a>

                            <span class="profile-name"><b>Clinton Leo</b></span>
                            <span class="follow-link"><a href="#" class="btn btn-sm">+ Follow</a></span>
                        </div>
                        <div class="profile-pic">
                        </div>
                        <div class="about">
                            <div class="row">
                                <div class="col-sm-4 designation text-center">
                                    <h5 class="h5pnl_font">Designer,<br class="hidden-xs">
                                        Team Lead.</h5>
                                    <span><a href="#" class="btn btn-sm button-pill new-task">New Task +</a></span>
                                </div>
                                <div class="col-sm-8 brief">
                                    <h4 class="h4pnl_font">About</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.deserunt eveniet
                                        facilis possimus, omnis porro possimus rem repellat, voluptate!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card weather-widget">
                        <div class="row weather-data">
                            <div class="col-md-12 temperature">
                                <h2><i class="wi wi-day-cloudy icon"></i><span
                                        class="float-right">19<sup><sup>o</sup></sup>c <br><span class="location"><i
                                        class="ti-location-pin text-default" aria-hidden="true"></i>
                                    London, UK</span></span></h2>
                            </div>
                        </div>
                        <div class="weather-footer">
                            <div class="text-center row ml-0 mr-0">
                                <div class="col-2 popup">
                                    <h5 class="h5pnl_font">MON</h5>
                                    <i class="wi wi-day-lightning"></i>
                                    <p>21°c</p>
                                </div>
                                <div class="col-2 popup">
                                    <h5 class="h5pnl_font">TUE</h5>
                                    <i class="wi wi-cloudy"></i>
                                    <p>28°c</p>
                                </div>
                                <div class="col-2 popup">
                                    <h5 class="h5pnl_font">WED</h5>
                                    <i class="wi wi-night-rain-mix"></i>
                                    <p>26°c</p>
                                </div>
                                <div class="col-2 popup">
                                    <h5 class="h5pnl_font">THU</h5>
                                    <i class="wi wi-day-sunny"></i>
                                    <p>31°c</p>
                                </div>
                                <div class="col-2 popup">
                                    <h5 class="h5pnl_font">FRI</h5>
                                    <i class="wi wi-day-lightning"></i>
                                    <p>24°c</p>
                                </div>
                                <div class="col-2 popup">
                                    <h5 class="h5pnl_font">SAT</h5>
                                    <i class="wi wi-night-alt-snow"></i>
                                    <p>25°c</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 col-sm-7 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Recent Activities</h3>
                        </div>
                        <div class="card-body">
                            <ul class="schedule-cont">
                                <li class="item success">
                                    <div class="data">
                                        <div class="time text-muted"> Just now</div>
                                        <p><span class="text-info">Jade</span> Project team has successfully completed
                                            their
                                            first phase.</p>
                                    </div>
                                </li>
                                <li class="item danger">
                                    <div class="data">
                                        <div class="time text-muted"> 7min ago</div>
                                        <p>Tinder Project's <span class="text-info">Second</span> review has completed.
                                        </p>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="data">
                                        <div class="time text-muted">5hours ago</div>
                                        <p>Richard McClintock, updated his project over view report.</p>
                                    </div>
                                </li>
                                <li class="item success">
                                    <div class="data">
                                        <div class="time text-muted"> Yesterday</div>
                                        <p>Variations Project <span class="text-info">Evaluation</span> is going on to
                                            highlight
                                            the project success .</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-lg-5 col-xl-3 col-lg-push-5">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tile_1">
                                    <div class="live-tile" data-mode="carousel" data-direction="vertical"
                                         data-delay="2500">
                                        <span class="tile-title feed-title">Feeds</span>
                                        <div>
                                            <h4 class="full"> It is a long established fact that a reader will be
                                                distracted.</h4>
                                            <span class="tile-title tile-time">17 min ago</span>
                                        </div>
                                        <div>
                                            <h4 class="full"> Many desktop publishing packages and web page
                                                editors.</h4>
                                            <span class="tile-title tile-time">40 min ago</span>
                                        </div>
                                        <div>
                                            <h4 class="full"> Richard McClintock, a Latin Trainer at
                                                Hampden-Sydney.</h4>
                                            <span class="tile-title tile-time">yesterday at 4pm</span>
                                        </div>
                                        <div>
                                            <h4 class="full"> There are many variations of passages of Lorem Ipsum
                                                available.</h4>
                                            <span class="tile-title tile-time">Dec 4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="tile_2">
                                    <div class="list-tile">
                                        <ul class="flip-list fourTiles" data-mode="flip-list" data-delay="2000">
                                            <li>
                                                <div><img class="full" src="img/profile-pic.jpg" alt="1"/></div>
                                                <div><img class="full" src="img/authors/avatar.jpg" alt="1"/></div>
                                            </li>
                                            <li data-direction="horizontal">
                                                <div><img class="full" src="img/authors/avatar2.jpg" alt="2"/></div>
                                                <div><img class="full" src="img/authors/avatar3.jpg" alt="2"/></div>
                                            </li>
                                            <li data-direction="horizontal">
                                                <div><img class="full" src="img/authors/avatar4.jpg" alt="3"/></div>
                                                <div><img class="full" src="img/authors/avatar5.jpg" alt="3"/></div>
                                            </li>
                                            <li>
                                                <div><img class="full" src="img/authors/avatar6.jpg" alt="4"/></div>
                                                <div><img class="full" src="img/authors/avatar7.jpg" alt="4"/></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12 col-xl-5 col-lg-pull-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="server-load text-center">
                                        <input type="text" class="cpu-laod" data-width="80" data-height="80"
                                               data-linecap=round
                                               data-fgColor="#6699cc" data-skin="tron" data-angleOffset="180"
                                               data-thickness=".15"/>
                                        <h4 class="h4pnl_font">CPU-LOAD</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="server-load text-center">
                                        <input type="text" class="disc-space" data-width="80" data-height="80"
                                               data-linecap=round
                                               data-fgColor="#66CC99" data-skin="tron" data-angleOffset="180"
                                               data-thickness=".15"/>
                                        <h4 class="h4pnl_font">DISC-SPACE</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="social">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="twitter text-center">
                                                <i class="ti-twitter-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="info-1 text-center">
                                                <h3>27k</h3>
                                                <p>Tweets</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="info-2 text-center">
                                                <h3>9.2k</h3>
                                                <p>followers</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="social">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="facebook text-center">
                                                <i class="ti-facebook"></i>
                                            </div>
                                        </div>
                                        <div class="col-6 text-center">
                                            <div class="info-1">
                                                <h3>31k</h3>
                                                <p>Likes</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-center">
                                            <div class="info-2">
                                                <h3>12k</h3>
                                                <p>feeds</p>
                                            </div>
                                        </div>
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
            <!-- /#right -->
            <div class="background-overlay"></div>
        </section>
    </aside>
@stop
@section('scripts')
<!-- begining of page level js -->
<!--nvd3 chart-->
<script type="text/javascript" src="vendors/d3/d3.min.js"></script>
<script type="text/javascript" src="vendors/nvd3/js/nv.d3.min.js"></script>
<script type="text/javascript" src="vendors/screenfull/js/screenfull.js"></script>
<!--Sparkline Chart-->
<script src="js/custom_js/sparkline/jquery.flot.spline.js"></script>
<!--knob-->
<script type="text/javascript" src="vendors/jquery-knob/js/jquery.knob.js"></script>
<!--metrojs-->
<script type="text/javascript" src="vendors/metrojs/js/MetroJs.min.js"></script>

<script src="js/dashboard2.js" type="text/javascript"></script>
<!-- end of page level js -->
@stop