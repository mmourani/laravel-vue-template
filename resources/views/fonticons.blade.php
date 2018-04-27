@extends('layouts.default')
@section('title')
    Font Icons | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="css/custom_css/fonts.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Font Icons</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#"> UI Features</a>
                </li>
                <li class="active">
                    Font Icons
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content p-l-r-15">
            <h4 class="h4pnl_font">You can use different sets of icon fonts:</h4>
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="iconset_name">Themify Icons</h4>
                        </div>
                        <div class="card-body">
                            <div class="icon_group">
                                <div class="icon_set text-center">
                                    <div class="row">
                                        <div class="col-2"><i class="ti-wand icons"></i></div>
                                        <div class="col-2"><i class="ti-save icons"></i></div>
                                        <div class="col-2"><i class="ti-direction icons"></i></div>
                                        <div class="col-2"><i class="ti-link icons"></i></div>
                                        <div class="col-2"><i class="ti-unlink icons"></i></div>
                                        <div class="col-2"><i class="ti-target icons"></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"><i class="ti-spray icons"></i></div>
                                        <div class="col-2"><i class="ti-signal icons"></i></div>
                                        <div class="col-2"><i class="ti-shopping-cart-full icons"></i></div>
                                        <div class="col-2"><i class="ti-settings icons"></i></div>
                                        <div class="col-2"><i class="ti-back-left icons"></i></div>
                                        <div class="col-2"><i class="ti-facebook icons"></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"><i class="ti-map-alt icons"></i></div>
                                        <div class="col-2"><i class="ti-bar-chart-alt icons"></i></div>
                                        <div class="col-2"><i class="ti-control-skip-forward icons"></i></div>
                                        <div class="col-2"><i class="ti-control-record icons"></i></div>
                                        <div class="col-2"><i class="ti-ink-pen icons"></i></div>
                                        <div class="col-2"><i class="ti-help-alt icons"></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"><i class="ti-face-sad icons"></i></div>
                                        <div class="col-2"><i class="ti-new-window icons"></i></div>
                                        <div class="col-2"><i class="ti-rss-alt icons"></i></div>
                                        <div class="col-2"><i class="ti-control-stop icons"></i></div>
                                        <div class="col-2"><i class="ti-control-shuffle icons"></i></div>
                                        <div class="col-2"><i class="ti-paragraph icons"></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"><i class="ti-paragraph icons"></i></div>
                                        <div class="col-2"><i class="ti-underline icons"></i></div>
                                        <div class="col-2"><i class="ti-quote-right icons"></i></div>
                                        <div class="col-2"><i class="ti-layout-column2 icons"></i></div>
                                        <div class="col-2"><i class="ti-instagram icons"></i></div>
                                        <div class="col-2"><i class="ti-twitter icons"></i></div>
                                    </div>
                                </div>
                                <div class="icon_cover text-center">
                                    <a href="themify_icons" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="card set_media">
                        <div class="card-header">
                            <h4 class="iconset_name">Font Awesome Icons</h4>
                        </div>
                        <div class="card-body">
                            <div class="icon_group">
                                <div class="icon_set fontawesome_icons text-center">
                                    <div class="row">
                                        <div class="col-2"><i class="fa fa-fw fa-bolt"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-bullhorn"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-clock-o"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-cloud-upload"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-cog"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-compass"></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"><i class="fa fa-fw fa-edit"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-female"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-frown-o"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-legal"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-mail-reply-all"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-mail-forward"></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"><i class="fa fa-fw fa-phone-square"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-plus-circle"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-rss-square"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-signal"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-smile-o"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-spinner"></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"><i class="fa fa-fw fa-thumbs-o-up"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-ticket"></i></div>
                                        <div class="col-2"><i class="fa fa-fw ti-close removecard"></i>
                                        </div>
                                        <div class="col-2"><i class="fa fa-fw fa-toggle-down"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-trash-o"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-users"></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"><i class="fa fa-fw fa-copy"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-list-ul"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-list-alt"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-arrow-circle-down"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-caret-square-o-down"></i></div>
                                        <div class="col-2"><i class="fa fa-fw fa-chevron-right"></i></div>
                                    </div>
                                </div>
                                <div class="icon_cover text-center">
                                    <a href="fontawesome_icons" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mrgn_top">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="iconset_name">Simple Line Icons</h4>
                        </div>
                        <div class="card-body">
                            <div class="icon_group">
                                <div class="icon_set text-center">
                                    <div class="row">
                                        <div class="col-2"><i class="icon-compass icons"></i></div>
                                        <div class="col-2"><i class="icon-directions icons"></i></div>
                                        <div class="col-2"><i class="icon-earphones-alt icons"></i></div>
                                        <div class="col-2"><i class="icon-equalizer icons"></i></div>
                                        <div class="col-2"><i class="icon-dislike icons"></i></div>
                                        <div class="col-2"><i class="icon-mustache icons"></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"><i class="icon-cursor-move icons"></i></div>
                                        <div class="col-2"><i class="icon-folder icons"></i></div>
                                        <div class="col-2"><i class="icon-ghost icons"></i></div>
                                        <div class="col-2"><i class="icon-present icons"></i></div>
                                        <div class="col-2"><i class="icon-grid icons"></i></div>
                                        <div class="col-2"><i class="icon-social-linkedin icons"></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"><i class="icon-symbol-female icons"></i></div>
                                        <div class="col-2"><i class="icon-social-behance icons"></i></div>
                                        <div class="col-2"><i class="icon-settings icons"></i></div>
                                        <div class="col-2"><i class="icon-paper-plane icons"></i></div>
                                        <div class="col-2"><i class="icon-lock icons"></i></div>
                                        <div class="col-2"><i class="icon-camrecorder icons"></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"><i class="icon-magnifier-remove icons"></i></div>
                                        <div class="col-2"><i class="icon-calendar icons"></i></div>
                                        <div class="col-2"><i class="icon-control-play icons"></i></div>
                                        <div class="col-2"><i class="icon-social-twitter icons"></i></div>
                                        <div class="col-2"><i class="icon-social-facebook icons"></i></div>
                                        <div class="col-2"><i class="icon-social-dropbox icons"></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"><i class="icon-social-vkontakte icons"></i></div>
                                        <div class="col-2"><i class="icon-social-google icons"></i></div>
                                        <div class="col-2"><i class="icon-cloud-upload icons"></i></div>
                                        <div class="col-2"><i class="icon-control-rewind icons"></i></div>
                                        <div class="col-2"><i class="icon-size-fullscreen icons"></i></div>
                                        <div class="col-2"><i class="icon-diamond icons"></i></div>
                                    </div>
                                </div>
                                <div class="icon_cover text-center">
                                    <a href="simple_line_icons" class="btn btn-primary">View All</a>
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
