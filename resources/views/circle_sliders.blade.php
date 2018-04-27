@extends('layouts.default')
@section('title')
    Circle sliders | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="css/custom_css/circle_sliders.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Circle sliders
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        Charts
                    </a>
                </li>
                <li class="active">
                    Circle sliders
                </li>
            </ol>
        </section>
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-pie-chart"></i> Circle Dials
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <!--knob-->
                            <div class="visible-ie8">
                                <div class="col-md-12">
                                    <div class="alert alert-warning alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert"
                                                aria-hidden="true">&times;</button>
                                        The Circle Dial plugin is not compatible with Internet Explorer 8 and older.
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">

                                    <div class="col-md-3 col-sm-3 col-12 text-center m-t-10">
                                        <div class="text-left m-t-10 m-b-10">Disabled Display Input</div>
                                        <input class="knob" data-width="120" data-height="120"
                                               data-fgColor="#6699cc" data-displayinput=false value="35">
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-12 text-center m-t-10">
                                        <div class="text-left m-t-10 m-b-10">Cursor</div>
                                        <input class="knob" data-width="120" data-height="120" data-cursor=true
                                               data-fgColor="#66cc99" data-thickness=.3 value="29">
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-12 text-center m-t-10">
                                        <div class="text-left m-t-10 m-b-10">
                                            Display previous
                                        </div>
                                        <input class="knob" data-width="120" data-height="120"
                                               data-fgColor="#f0ad4e" data-min="-100" data-displayprevious=true
                                               value="44">
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-12 text-center m-t-10">
                                        <div class="text-left m-t-10 m-b-10">
                                            Angle offset
                                        </div>
                                        <input class="knob" data-angleoffset="90" data-fgcolor="#ff6666"
                                               data-width="120" data-height="120" value="35">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-12 text-center m-t-10">
                                    <div class="text-left m-t-10 m-b-10">
                                        Angle offset arc
                                    </div>
                                    <input class="knob" data-angleoffset="-125" data-anglearc="251"
                                           data-fgcolor="#f0ad4e" data-width="120" data-height="120" value="35">
                                </div>
                                <div class="col-md-3 col-sm-3 col-12 text-center m-t-10">
                                    <div class="text-left m-t-10 m-b-10">
                                        5-digit values
                                    </div>
                                    <input class="knob" data-min="-15000" data-fgColor="#ff6666"
                                           data-max="15000" data-width="120" data-height="120" value="-11000">
                                </div>
                                <div class="col-md-3 col-sm-3 col-12 text-center m-t-10">
                                    <div class="text-left m-t-10 m-b-10">Responsive</div>
                                    <input class="knob" data-width="120" data-height="120"
                                           data-fgColor="#66cc99" value="35">
                                </div>
                                <div class="col-md-3 col-sm-3 col-12 text-center m-t-10">
                                    <div class="text-left m-t-10 m-b-10">Readonly</div>
                                    <input class="knob" data-fgColor="#66ccff" data-thickness=".4"
                                           data-width="120" data-height="120" readonly value="22">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="demo">
                                        <div class="text-left">Superpose (clock)</div>
                                        <div>
                                            <div class="demo_hours">
                                                <input class="knob hour" data-min="0" data-max="24"
                                                       data-bgColor="#dcdcdc" data-fgColor="#f0ad4e"
                                                       data-displayInput=false data-width="240" data-height="240"
                                                       data-thickness=".3" value="15">
                                            </div>
                                            <div class="demo_minutes">
                                                <input class="knob minute" data-min="0" data-max="60"
                                                       data-bgColor="#dcdcdc" data-fgColor="#66ccff"
                                                       data-displayInput=false data-width="160" data-height="160"
                                                       data-thickness=".45" value="30">
                                            </div>
                                            <div class="demo_seconds">
                                                <input class="knob second" data-min="0" data-max="60"
                                                       data-bgColor="#dcdcdc" data-fgColor="#66cc99"
                                                       data-displayInput=false data-width="80" data-height="80"
                                                       data-thickness=".3" value="20">
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--knob ends-->


            <!-- sparkline -->
            <div class="row mrgn_top">
                <div class="col-xl-12">
                    <div class="card ">
                        <div class="card-header bg-success">
                            <h3 class="card-title">
                                <i class="ti-bar-chart-alt"></i> Tiny Charts
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="row sparkline_charts">
                                <div class="col-md-4 m-t-25 text-center">
                                    <div>
                                        <div>Tiny line chart</div>
                                        <div class="chart linechart">Loading...</div>
                                    </div>
                                </div>
                                <div class="col-md-4 m-t-25 text-center">
                                    <div>
                                        <div>Tiny bar chart</div>
                                        <div class="chart barchart">Loading...</div>
                                    </div>
                                </div>
                                <div class="col-md-4 m-t-25 text-center">
                                    <div>
                                        <div>Tiny stacked bar chart</div>
                                        <div class="m-t-10 chart stackedbarchart">Loading...</div>
                                    </div>
                                </div>
                                <div class="col-md-4 m-t-25 text-center">
                                    <div>
                                        <div>Tiny tristate chart</div>
                                        <div class="m-t-10 chart tristatechart">Loading...</div>
                                    </div>
                                </div>
                                <div class="col-md-4 m-t-25 text-center">
                                    <div>
                                        <div>Tiny bullet chart</div>
                                        <div class="m-t-10 chart bulletchart">Loading...</div>
                                    </div>
                                </div>
                                <div class="col-md-4 m-t-25 text-center">
                                    <div>
                                        <div>Tiny pie chart</div>
                                        <div class="m-t-10 chart piechart">Loading...</div>
                                    </div>
                                </div>
                                <div class="col-md-4 m-t-25 text-center">
                                    <div>
                                        <div>Tiny discrete chart</div>
                                        <div class="m-t-10 chart discretechart">Loading...</div>
                                    </div>
                                </div>
                                <div class="col-md-4 m-t-25 text-center">
                                    <div>
                                        <div>Tiny boxplot chart</div>
                                        <div class="m-t-10 chart boxchart">Loading...</div>
                                    </div>
                                </div>
                                <div class="col-md-4 m-t-25 text-center">
                                    <div>
                                        <div>Tiny composite line chart</div>
                                        <div id="compositeline" class="m-t-10">
                                            8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 m-t-25 text-center">
                                    <div>
                                        <div>Tiny composite bar chart</div>
                                        <div id="compositebar" class="m-t-10">4,6,7,7,4,3,2,1,4</div>
                                    </div>
                                </div>
                                <div class="col-md-4 m-t-25 text-center">
                                    <div>
                                        <div>Tiny line chart with normal range</div>
                                        <div id="normalline" class="m-t-10">
                                            8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 m-t-25 text-center">
                                    <div>
                                        <div>Tiny discrete chart with treshold</div>
                                        <div id="discrete2" class="m-t-10">4,6,7,7,4,3,2,1,4</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- sparkline -->
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
    <script src="vendors/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/custom_js/sparkline/jquery.flot.spline.js"></script>
    <script src="js/custom_js/circle_sliders.js"></script>
    <!-- end of page level js -->
@stop

