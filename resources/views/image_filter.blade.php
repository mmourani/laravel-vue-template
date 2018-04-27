@extends('layouts.default')
@section('title')
    Image Filter | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" href="vendors/dropify/css/dropify.css">
    <!--page level css -->
    <link type="text/css" href="css/cssgram/css/cssgram.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/custom_css/image_filters.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Image Filters
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#"> Gallery </a>
                </li>
                <li class="active">
                    Image Filters
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-image"></i> Image Filters (Aden - Hudson)
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="col-lg-6 m-auto col-md-8  col-12 text-center">
                                        <figure id="imgfigure1">
                                            <input type="file" class=" dropify" id="filter-1" data-show-remove="false"
                                                   data-allowed-file-extensions="jpg png tif gif"
                                                   data-default-file="img/gallery/full/16.jpg"/>
                                        </figure>
                                    </div>
                                    <div class="col-md-11 m-auto col-12 text-center">
                                        <ul class="pagination">
                                            <li data-filter1="aden">
                                                <figure class="aden text-center">
                                                    <img class="temp_path1" src="img/gallery/full/16.jpg" height="75"
                                                         alt="aden image">
                                                    <span>Aden</span>
                                                </figure>
                                            </li>
                                            <li data-filter1="brannan">
                                                <figure class="brannan text-center">
                                                    <img class="temp_path1" src="img/gallery/full/16.jpg" height="75"
                                                         alt="brannan image">
                                                    <span>Brannan</span>
                                                </figure>
                                            </li>
                                            <li data-filter1="brooklyn">
                                                <figure class="brooklyn text-center">
                                                    <img class="temp_path1" src="img/gallery/full/16.jpg" height="75"
                                                         alt="brooklyn image">
                                                    <span>Brooklyn</span>
                                                </figure>
                                            </li>
                                            <li data-filter1="clarendon">
                                                <figure class="clarendon text-center">
                                                    <img class="temp_path1" src="img/gallery/full/16.jpg" height="75"
                                                         alt="clarendon image">
                                                    <span>Clarendon</span>
                                                </figure>
                                            </li>
                                            <li data-filter1="earlybird">
                                                <figure class="earlybird text-center">
                                                    <img class="temp_path1" src="img/gallery/full/16.jpg" height="75"
                                                         alt="earlybird image">
                                                    <span class="font-ccc">Earlybird</span>
                                                </figure>
                                            </li>
                                            <li data-filter1="gingham">
                                                <figure class="gingham text-center">
                                                    <img class="temp_path1" src="img/gallery/full/16.jpg" height="75"
                                                         alt="gingham image">
                                                    <span>Gingham</span>
                                                </figure>
                                            </li>
                                            <li data-filter1="hudson">
                                                <figure class="hudson text-center">
                                                    <img class="temp_path1" src="img/gallery/full/16.jpg" height="75"
                                                         alt="hudson image">
                                                    <span>Hudson</span>
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-image"></i> Image Filters (Inkwell - Perpetua)
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="col-lg-6  col-md-8 col-12 m-auto text-center ">
                                        <figure id="imgfigure2">
                                            <input type="file" class=" dropify" id="filter-2"
                                                   data-allowed-file-extensions="jpg png tif gif"
                                                   data-default-file="img/gallery/full/15.jpg"
                                                   data-show-remove="false"/>
                                        </figure>
                                    </div>
                                    <div class="col-md-11 col-10 m-auto text-center">
                                        <ul class="pagination">
                                            <li data-filter2="inkwell">
                                                <figure class="inkwell text-center">
                                                    <img class="temp_path2" src="img/gallery/full/15.jpg" height="75"
                                                         alt="inkwell image">
                                                    <span>Inkwell</span>
                                                </figure>
                                            </li>
                                            <li data-filter2="lark">
                                                <figure class="lark text-center">
                                                    <img class="temp_path2" src="img/gallery/full/15.jpg" height="75"
                                                         alt="lark image">
                                                    <span class="font-ccc">Lark</span>
                                                </figure>
                                            </li>
                                            <li data-filter2="lofi">
                                                <figure class="lofi text-center">
                                                    <img class="temp_path2" src="img/gallery/full/15.jpg" height="75"
                                                         alt="lofi image">
                                                    <span>Lofi</span>
                                                </figure>
                                            </li>
                                            <li data-filter2="mayfair">
                                                <figure class="mayfair text-center">
                                                    <img class="temp_path2" src="img/gallery/full/15.jpg" height="75"
                                                         alt="mayfair image">
                                                    <span>Mayfair</span>
                                                </figure>
                                            </li>
                                            <li data-filter2="moon">
                                                <figure class="moon text-center">
                                                    <img class="temp_path2" src="img/gallery/full/15.jpg" height="75"
                                                         alt="moon image">
                                                    <span>Moon</span>
                                                </figure>
                                            </li>
                                            <li data-filter2="nashville">
                                                <figure class="nashville text-center">
                                                    <img class="temp_path2" src="img/gallery/full/15.jpg" height="75"
                                                         alt="nashville image">
                                                    <span>Nashville</span>
                                                </figure>
                                            </li>
                                            <li data-filter2="perpetua">
                                                <figure class="perpetua text-center">
                                                    <img class="temp_path2" src="img/gallery/full/15.jpg" height="75"
                                                         alt="perpetua image">
                                                    <span>Perpetua</span>
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-image"></i> Image Filters (Rise - Xpro2)
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="col-lg-6 col-md-8  col-12 m-auto text-center">
                                        <figure id="imgfigure3">
                                            <input type="file" class=" dropify" id="filter-3"
                                                   data-allowed-file-extensions="jpg png tif gif"
                                                   data-default-file="img/gallery/full/5.jpg" data-show-remove="false"/>
                                        </figure>
                                    </div>
                                    <div class="col-md-11 col-10 m-auto text-center">
                                        <ul class="pagination">
                                            <li data-filter3="rise">
                                                <figure class="rise text-center">
                                                    <img class="temp_path3" src="img/gallery/full/5.jpg" height="75"
                                                         alt="rise image">
                                                    <span>Rise</span>
                                                </figure>
                                            </li>
                                            <li data-filter3="slumber">
                                                <figure class="slumber text-center">
                                                    <img class="temp_path3" src="img/gallery/full/5.jpg" height="75"
                                                         alt="slumber image">
                                                    <span>Slumber</span>
                                                </figure>
                                            </li>
                                            <li data-filter3="toaster">
                                                <figure class="toaster text-center">
                                                    <img class="temp_path3" src="img/gallery/full/5.jpg" height="75"
                                                         alt="toaster image">
                                                    <span class="font-ccc">Toaster</span>
                                                </figure>
                                            </li>
                                            <li data-filter3="valencia">
                                                <figure class="valencia text-center">
                                                    <img class="temp_path3" src="img/gallery/full/5.jpg" height="75"
                                                         alt="valencia image">
                                                    <span>Valencia</span>
                                                </figure>
                                            </li>
                                            <li data-filter3="walden">
                                                <figure class="walden text-center">
                                                    <img class="temp_path3" src="img/gallery/full/5.jpg" height="75"
                                                         alt="walden image">
                                                    <span>Walden</span>
                                                </figure>
                                            </li>
                                            <li data-filter3="willow">
                                                <figure class="willow text-center">
                                                    <img class="temp_path3" src="img/gallery/full/5.jpg" height="75"
                                                         alt="willow image">
                                                    <span>Willow</span>
                                                </figure>
                                            </li>
                                            <li data-filter3="xpro2">
                                                <figure class="xpro2 text-center">
                                                    <img class="temp_path3" src="img/gallery/full/5.jpg" height="75"
                                                         alt="xpro2 image">
                                                    <span>Xpro2</span>
                                                </figure>
                                            </li>
                                        </ul>
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
<script type="text/javascript" src="vendors/dropify/js/dropify.js"></script>
<script type="text/javascript" src="js/custom_js/image_filters.js"></script>
@stop

