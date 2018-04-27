@extends('layouts.default')
@section('title')
    Advanced Calendar | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="vendors/bootstrap-calendar/css/calendar.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="vendors/jquerydaterangepicker/css/daterangepicker.min.css">
    <link href="vendors/iCheck/css/all.css" rel="stylesheet" type="text/css"/>
    <link href="css/calendar_custom2.css" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Advanced Calendar</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Calendar</a>
                </li>
                <li class="active">
                    Advanced Calendar
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="page-header">
                <div class="float-right form-inline">
                    <div class="btn-group mr-1">
                        <button class="btn btn-primary" data-calendar-nav="prev">
                            <i class="fa fa-fw ti-angle-double-left" aria-hidden="true"></i> Prev
                        </button>
                        <button class="btn btn-default" data-calendar-nav="today">Today</button>
                        <button class="btn btn-primary" data-calendar-nav="next">Next <i
                                    class="fa fa-fw ti-angle-double-right" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-warning" data-calendar-view="year">Year</button>
                        <button class="btn btn-warning active" data-calendar-view="month">Month</button>
                        <button class="btn btn-warning" data-calendar-view="week">Week</button>
                        <button class="btn btn-warning" data-calendar-view="day">Day</button>
                    </div>
                </div>
                <h3 class="h3pnl_font"></h3>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div id="calendar" class="m-b-25"></div>
                </div>
                <div class="col-md-3 calendar-settings">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="h4pnl_font">Calendar Settings</h4>
                            <div class="row">
                                <div class="col-12">
                                    <label for="first_day">First day of week </label>
                                </div>
                                <div class="col-12">
                                    <select id="first_day" class="form-control">
                                        <option value="" selected="selected">language-dependant</option>
                                        <option value="2">Sunday</option>
                                        <option value="1">Monday</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="language" class="mrgn_lang">Select Language</label>
                                </div>
                                <div class="col-12">
                                    <select id="language" class="form-control">
                                        <option value="">default: English-US</option>
                                        <option value="bg-BG">Bulgarian</option>
                                        <option value="nl-NL">Dutch</option>
                                        <option value="fr-FR">French</option>
                                        <option value="de-DE">German</option>
                                        <option value="el-GR">Greek</option>
                                        <option value="hu-HU">Hungarian</option>
                                        <option value="id-ID">Bahasa Indonesia</option>
                                        <option value="it-IT">Italian</option>
                                        <option value="pl-PL">Polish</option>
                                        <option value="pt-BR">Portuguese (Brazil)</option>
                                        <option value="ro-RO">Romania</option>
                                        <option value="es-CO">Spanish (Colombia)</option>
                                        <option value="es-MX">Spanish (Mexico)</option>
                                        <option value="es-ES">Spanish (Spain)</option>
                                        <option value="ru-RU">Russian</option>
                                        <option value="sk-SR">Slovak</option>
                                        <option value="sv-SE">Swedish</option>
                                        <option value="zh-CN">简体中文</option>
                                        <option value="zh-TW">繁體中文</option>
                                        <option value="ko-KR">한국어</option>
                                        <option value="th-TH">Thai (Thailand)</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 m-t-10">
                            <label class="checkbox">
                                <input type="checkbox" value="#events-modal" id="events-in-modal"> Open events
                                in modal window
                            </label>
                        </div>
                        {{--<div class="col-md-12 m-t-10">--}}
                            {{--<label class="checkbox">--}}
                                {{--<input type="checkbox" id="format-12-hours"> 12 Hour format--}}
                            {{--</label>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12 m-t-10">--}}
                            {{--<label class="checkbox">--}}
                                {{--<input type="checkbox" id="show_wb" checked> Show week box--}}
                            {{--</label>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12 m-t-10">--}}
                            {{--<label class="checkbox">--}}
                                {{--<input type="checkbox" id="show_wbn" checked> Show week box number--}}
                            {{--</label>--}}
                        {{--</div>--}}


                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div>
                                <h4 class="h4pnl_font">Events List</h4>
                            </div>
                            <div id="eventlist">
                                <ul class="nav nav-list"></ul>
                            </div>
                            <div class="m-t-10">
                                <a href="#" class="btn btn-success btn-block" data-toggle="modal"
                                   data-target="#myModal">Create
                                    event</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">
                                <i class="fa ti-plus icon-align"></i> Create Event
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div role="form" id="eventform">
                                <div class="modal-body">
                                    <div class="col-12">
                                        <label for="new-event">Event Name</label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" id="new-event" class="form-control" placeholder="Event">
                                    </div>
                                    <div class="col-12">
                                        <label for="eventclass">Event Class</label>
                                    </div>
                                    <div class="col-12">
                                        <select name="eventclass" id="eventclass" class="form-control">
                                            <option value="event-important" selected>Important</option>
                                            <option value="event-success">Success</option>
                                            <option value="event-primary">primary</option>
                                            <option value="event-default">Default</option>
                                            <option value="event-info">Info</option>
                                            <option value="event-warning">Warning</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="event_url">Event URL</label>
                                    </div>
                                    <div class="input-group col-12">
                                        <span class="input-group-addon" id="basic-addon3">https://</span>
                                        <input type="text" class="form-control" id="event_url" aria-describedby="basic-addon3" placeholder="Enter The URL related to event">
                                    </div>
                                    <div class="col-12">
                                        <label for="date-range0">Date Range</label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control float-right" id="date-range0"
                                               placeholder="Select Date Range For Event"/>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-danger float-right" id="close_calendar_event"
                                    data-dismiss="modal">
                                Close
                                <i class="fa ti-close icon-align"></i>
                            </button>
                            <button type="button" class="btn btn-success float-left" id="add-new-event">
                                <i class="fa ti-plus icon-align"></i> Add
                            </button>
                            <button type="reset" class="d-none">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="events-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h3>Event</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body" style="height: 400px">
                        </div>
                        <div class="modal-footer">
                            <a href="#" data-dismiss="modal" class="btn btn-danger">Close</a>
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
    <script src="vendors/moment/js/moment.min.js" type="text/javascript"></script>
    <script src="vendors/jquerydaterangepicker/js/jquery.daterangepicker.min.js" type="text/javascript"></script>
    <script src="vendors/underscore/js/underscore-min.js" type="text/javascript"></script>
    <script src="vendors/bootstrap-calendar/js/calendar.min.js" type="text/javascript"></script>
    <script src="vendors/iCheck/js/icheck.js" type="text/javascript"></script>
    <script src="js/custom_js/calendar_custom2.js" type="text/javascript"></script>
    <!-- end of page level js -->
@stop