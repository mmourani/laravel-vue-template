@extends('layouts.default')
@section('title')
    TimeLine | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="vendors/animate/animate.min.css">
    <link href="css/timeline.css" rel="stylesheet"/>
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>TimeLine</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">UI Components</a>
                </li>
                <li class="active">
                    Timeline
                </li>
            </ol>
        </section>
        <!--section ends-->
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-lg-8 timeline_card">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-time"></i> Timeline
                            </h3>
                            <span class="float-right">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                <i class="fa fa-fw ti-close removecard"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <!--timeline-->
                            <div>
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-badge primary wow bounceInDown center">
                                            <i class="fa fa-fw ti-server"></i>
                                        </div>
                                        <div class="timeline-card wow bounceInDown" style="display:inline-block;">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">We are a MNC now</h4>
                                                <p>
                                                    <small class="text-primary">11 hours ago via Twitter</small>
                                                </p>
                                            </div>
                                            <div class="timeline-body">
                                                <p>
                                                    Lorem Ipsum is simply dummy, vidis lio, quem amistosis quis leo..
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge danger wow lightSpeedIn center">
                                            <i class="fa fa-fw ti-check-box"></i>
                                        </div>
                                        <div class="timeline-card wow slideInRight">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">We won best website award</h4>
                                                <p>
                                                    <small class="text-danger">May 08, 2016</small>
                                                </p>
                                            </div>
                                            <div class="timeline-body">
                                                <p>Lorem Ipsum is simply dummy, vidis litro abertis.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-badge info wow lightSpeedIn center">
                                            <i class="fa fa-fw ti-credit-card"></i>
                                        </div>
                                        <div class="timeline-card wow slideInLeft">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">Hired our first employee</h4>
                                                <p>
                                                    <small class="text-info">June 10, 2005</small>
                                                </p>
                                            </div>
                                            <div class="timeline-body">
                                                <p>
                                                    Lorem Ipsum is simply dummy, vidis litro abertis. Pra uium u num
                                                    gostis.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge warning wow lightSpeedIn center">
                                            <i class="fa fa-fw ti-map"></i>
                                        </div>
                                        <div class="timeline-card wow lightSpeedIn">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">Rented an office space</h4>
                                                <p>
                                                    <small class="text-warning">Jan 05, 2002</small>
                                                </p>
                                            </div>
                                            <div class="timeline-body">
                                                <p>
                                                    Lorem Ipsum is simply dummy, vidis litro abertis. Cais bolis eu num
                                                    gostis.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-badge default wow bounceInUp center">
                                            <i class="fa fa-fw ti-thumb-up"></i>
                                        </div>
                                        <div class="timeline-card wow bounceInUp">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">Planning to open an office</h4>
                                                <p>
                                                    <small class="text-default-gray">jan 02, 2017</small>
                                                </p>
                                            </div>
                                            <div class="timeline-body">
                                                <p>
                                                    Lorem Ipsum is simply dummy, vidis litro abertis. depois divoltis.
                                                </p>
                                                <hr>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                            data-toggle="dropdown">
                                                        <i class="ti-settings"></i>
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown_position1 float-right" role="menu">
                                                        <li>
                                                            <a href="#">Action</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Another action</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Something else here</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--timeline ends-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fa fa-fw ti-comment-alt"></i> Recent Activities
                                    </h3>
                                    <span class="float-right">
                                        <i class="fa fa-fw ti-angle-up clickable"></i>
                                        <i class="fa fa-fw ti-close removecard"></i>
                                    </span>
                                </div>
                                <div class="card-body">
                                    <ul class="schedule-cont">
                                        <li class="item success">
                                            <div class="data">
                                                <div class="time text-muted"> Just now</div>
                                                <p><span class="text-info">Jade</span> Project team has successfully
                                                    completed their
                                                    first phase.</p>
                                            </div>
                                        </li>
                                        <li class="item danger">
                                            <div class="data">
                                                <div class="time text-muted"> 7min ago</div>
                                                <p>Tinder Project's <span class="text-info">Second</span> review has
                                                    completed.</p>
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
                                                <p>Variations Project <span class="text-info">Evaluation</span> is going
                                                    on to highlight
                                                    the project success .</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <div class="card mrgn_top">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fa fa-fw ti-reload"></i> Auto Update
                                    </h3>
                                    <span class="float-right">
                                        <i class="fa fa-fw ti-angle-up clickable"></i>
                                        <i class="fa fa-fw ti-close removecard"></i>
                                    </span>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <ul class="timeline-update">
                                            <li>
                                                <div class="timeline-badge center">
                                                    <img src="img/authors/avatar1.jpg" height="36" width="36"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                </div>
                                                <div class="timeline-card"
                                                     style="display:inline-block;">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">Jade Project's Status </h4>
                                                        <p>
                                                            <small class="text-default-gray">11 hours ago</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                            Jade Project team has completed their first phase.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge center">
                                                    <img src="img/authors/avatar.jpg" height="36" width="36"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                </div>
                                                <div class="timeline-card">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">Tinder Project</h4>
                                                        <p>
                                                            <small class="text-default-gray">Sept 10, 2016</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                            Tinder Project's Final review has completed.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge center">
                                                    <img src="img/authors/avatar2.jpg" height="36" width="36"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                </div>
                                                <div class="timeline-card">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">A new branch in Virginia.</h4>
                                                        <p>
                                                            <small class="text-default-gray">Jan 02, 2017</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                            Planning to have a branch in virginia in the coming year.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge center">
                                                    <img src="img/authors/avatar3.jpg" height="36" width="36"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                </div>
                                                <div class="timeline-card"
                                                     style="display:inline-block;">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">Daily Status </h4>
                                                        <p>
                                                            <small class="text-default-gray">2days ago</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                            Manager schedules to keep a daily project status track.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge center">
                                                    <img src="img/authors/avatar4.jpg" height="36" width="36"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                </div>
                                                <div class="timeline-card">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">Performance report</h4>
                                                        <p>
                                                            <small class="text-default-gray">Aug 10, 2016</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                            Richard, updated his Team over view Performance report.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge center">
                                                    <img src="img/authors/avatar2.jpg" height="36" width="36"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                </div>
                                                <div class="timeline-card">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">Project Evaluation</h4>
                                                        <p>
                                                            <small class="text-default-gray">Oct 05, 2016</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                            Variations Project Evaluation is going on to highlight
                                                            project.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
    <script type="text/javascript" src="vendors/wowjs/js/wow.min.js"></script>
    <!--<script type="text/javascript" src="vendors/js/newsTicker.js"></script>-->
    <script type="text/javascript" src="js/jquery-advanced-news-ticker.min.js"></script>
    <script type="text/javascript" src="js/custom_js/time_line.js"></script>
    <!-- end of page level js -->
@stop
