@extends('layouts.default')
@section('title')
    Widgets | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
    <link href="css/ihover.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendors/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom_css/widgets.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Widgets 1</h1>
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
                    Widgets 1
                </li>
            </ol>
        </section>
        <!--section ends-->
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-sm-6 col-md-6 col-xl-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon bg-warning pull-left">
                            <i class="ti-eye text-white"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b id="widget_count1">2652</b></h3>
                            <p>Visitors</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-xl-3">
                    <div class="widget-bg-color-icon card-box border_success">
                        <div class="bg-icon pull-left">
                            <i class="ti-pie-chart text-success"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-success"><b id="widget_count3">3251</b></h3>
                            <p>Sales status</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-xl-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon bg-icon-info pull-left">
                            <i class="ti-cup text-primary"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b id="widget_count2">7698</b></h3>
                            <p class="text-primary">Income status</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-xl-3">
                    <div class="widget-bg-color-icon card-box border_danger">
                        <div class="text-center">
                            <h3 class="text-danger"><b id="widget_count4">4358</b></h3>
                            <p>Total sales:<span class="text-success"> 3251</span><span class="float-right"><i
                                            class="ti-angle-double-down text-danger m-r-5"></i>7.85%</span></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-4">
                    <div class="slider-content m-b-20">
                        <div class="cover-wrapper">
                            <div id="slider-clear" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators m-b-0">
                                    <li data-target="#slider-clear" data-slide-to="0" class=""></li>
                                    <li data-target="#slider-clear" data-slide-to="1" class="active"></li>
                                    <li data-target="#slider-clear" data-slide-to="2" class=""></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img alt="Clear-img" src="img/gallery/full/35.jpg" class="img-fluid d-block">
                                    </div>
                                    <div class="carousel-item">
                                        <img alt="Clear-img" src="img/gallery/full/36.jpg" class="img-fluid d-block">
                                    </div>
                                    <div class="carousel-item">
                                        <img alt="Clear-img" src="img/gallery/full/37.jpg" class="img-fluid d-block">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="post-info">
                            <div class="date">
                                <span class="day">22</span><br>
                                <span class="month">Mar</span>
                            </div>

                            <div class="meta-container">
                                <a href="#">
                                    <h4 class="m-t-0">Beautiful Cover Image Post</h4>
                                </a>
                                <div class="font-13">
                                    <span class="meta">Posted by John Doe in <a href="#"><b>Web Design</b></a></span>
                                </div>
                            </div>

                            <p class="m-b-0">
                                Nunc nec dui vitae urna cursus lacinia. In
                                venenatis eget justo in dictum. Vestibulum
                                auctor raesent quisnm.
                            </p>

                            <div class="row m-t-10">
                                <div class="col-6">
                                    <div class="m-t-10 blog-widget-action">
                                        <a href="javascript:void(0)">
                                            <i class="ti-heart"></i> <span>28</span>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-comment-alt"></i> <span>46</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 float-right">
                                    <a href="" class="btn btn-sm waves-effect btn-default">Read More</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-widget">
                        <div class="card-header">
                            <h4 class="card-title">Total Revenue</h4>
                        </div>
                        <div class="card-body">
                            <div class="widget-chart text-center">
                                <div id="sparkline2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-widget mrgn_top">
                        <div class="card-header">
                            <h4 class="card-title">Today Sales</h4>
                        </div>
                        <div class="card-body">
                            <div class="widget-chart text-center">
                                <input type="text" class="knob" data-width="135" data-height="135" data-linecap=round
                                       data-fgColor="#6699cc" data-skin="tron" data-angleOffset="180"
                                       data-thickness=".15"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-box p-0 set_media">
                        <div class="profile-widget text-center">
                            <div class="bg-custom1 bg-profile"></div>
                            <img src="img/images/avatar1.jpg" class="thumb-lg rounded-circle img-thumbnail" alt="img"
                                 height="95" width="95">
                            <h4>Addison</h4>
                            <p><i class="ti-location-pin"></i> London</p>
                            <a href="#" class="btn btn-sm btn-success m-t-20">Follow</a>
                            <a href="#" class="btn btn-sm btn-info m-t-20">Send message</a>
                            <div class="">
                                <p class="m-t-20 clearfix p-10">It has survived not only five centuries, but also the
                                    leap into
                                    electronic typesetting.</p>
                                <div class="social_icons p-10 text-white bg-custom1">
                                    <i class="ti-facebook" aria-hidden="true"></i>
                                    <i class="ti-twitter" aria-hidden="true"></i>
                                    <i class="ti-google" aria-hidden="true"></i>
                                    <i class="ti-youtube" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-4">
                    <div class="card card-widget">
                        <div class="card-header stat">
                            <div class="card-title">
                                <img class="rounded-circle img_alt" src="img/authors/avatar.jpg" alt="User Avatar"
                                     height="85" width="85">

                                <h3 class="user-username">Toby Adey</h3>
                                <h5 class="user-po"> Developer</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-stacked nav_border">
                                <li><a href="#">Projects <span class="float-right badge badge-success ">31</span></a></li>
                                <li><a href="#">Tasks <span class="float-right badge badge-success">5</span></a></li>
                                <li><a href="#">Completed Projects <span class="float-right badge badge-success ">12</span></a></li>
                                <li><a href="#">Followers <span class="float-right badge badge-success">58</span></a></li>
                                <li><a href="#">Progress <span class="float-right badge badge-success">75</span></a></li>
                                <li><a href="#">Upcoming <span class="float-right badge badge-success">157</span></a></li>
                                <li><a href="#">Others <span class="float-right badge badge-success">842</span></a></li>
                                <li><a href="#">Extra <span class="float-right badge badge-success">545</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-widget">
                        <div class="card-header p-0">
                            <div class="swiper-container swiper_content">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide slide-1"><img src="img/gallery/full/35.jpg"
                                                                           class="img-fluid" alt="img">
                                    </div>
                                    <div class="swiper-slide slide-2"><img src="img/gallery/full/36.jpg"
                                                                           class="img-fluid" alt="img">
                                    </div>
                                    <div class="swiper-slide slide-3"><img src="img/gallery/full/37.jpg"
                                                                           class="img-fluid" alt="img">
                                    </div>
                                    <div class="swiper-slide slide-4"><img src="img/gallery/full/38.jpg"
                                                                           class="img-fluid" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-justify">
                            <p>It is a long established fact that a reader will be distracted
                                by the readable content of a page.
                            </p>
                            <p>The point of using
                                Lorem Ipsum is that it has a more-or-less normal distribution.
                            </p>
                            <p>Lorem Ipsum is therefore more -or-less always free from repetition.</p>
                            <p>It is a long established fact that a reader will be distracted
                                by the readable content of a page.
                                The point of using
                                that it has distribution.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <i class="fa-2x padding-top-small padding-bottom padding-right-small fa ti-layers-alt pull-left text-primary"></i>
                                <h4>More Features</h4>
                                <p>This is the kind of thing you really need.</p>
                            </li>
                            <li class="list-group-item">
                                <i class="fa-2x padding-top-small padding-bottom padding-right-small fa ti-server pull-left text-primary"></i>
                                <h4>Unlimited Users</h4>
                                <p>This is the kind of thing you really need.</p>
                            </li>
                            <li class="list-group-item">
                                <i class="fa-2x padding-top-small padding-bottom padding-right-small fa ti-cup pull-left text-primary"></i>
                                <h4>Custom Database</h4>
                                <p>This is the kind of thing you really need.</p>
                            </li>
                            <li class="list-group-item">
                                <i class="fa-2x padding-top-small padding-bottom padding-right-small fa ti-bookmark-alt pull-left text-primary"></i>
                                <h4>Enhanced Reporting</h4>
                                <p>This is the kind of thing you really need.</p>
                            </li>
                            <li class="list-group-item">
                                <i class="fa-2x padding-top-small padding-bottom padding-right-small fa ti-medall-alt pull-left text-primary"></i>
                                <h4>Enterprise Features</h4>
                                <p>This is the kind of thing you really need.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row m-t-10">

                <div class="col-md-4">
                    <div class="card-box p-0">
                        <div class="profile-widget text-center">
                            <div class="bg-info bg-profile"></div>
                            <img src="img/authors/avatar2.jpg" class="thumb-lg rounded-circle img-thumbnail" alt="img"
                                 height="95" width="95">
                            <h4>Awesome Gallery</h4>
                            <p>1 Photo</p>
                            <div class="" id="lightgallery">
                                <div class="social_icons p-10 text-white">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <!-- normal -->
                                            <div class="ih-item square colored effect1 top_to_bottom">
                                                <a href="javascript:;">
                                                    <div class="img">
                                                        <img src="img/gallery/full/35.jpg" class="img-fluid"
                                                             alt="img">
                                                    </div>
                                                    <div class="info text-justify">
                                                        <h4 class="text-white text-center pt-3">Clear Nature</h4>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- end normal -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="card card-widget">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa-2x padding-top-small padding-bottom padding-right-small fa ti-facebook pull-left text-primary"></i>
                                </div>
                                <div class="col-3">
                                    <i class="fa-2x padding-top-small padding-bottom padding-right-small fa ti-google pull-left text-danger"></i>
                                </div>
                                <div class="col-3">
                                    <i class="fa-2x padding-top-small padding-bottom padding-right-small fa ti-twitter-alt pull-left text-info"></i>
                                </div>
                                <div class="col-3">
                                    <i class="fa-2x padding-top-small padding-bottom padding-right-small fa ti-linkedin pull-left text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-widget mrgn_top alex_heading">
                        <div class="card-header text-center">
                            <img src="img/authors/avatar3.jpg" class="thumb-lg img-thumbnail rounded-circle" alt="">
                            <h4 class="text-center"><strong>Alex Cooper</strong></h4>
                        </div>
                        <div class="card-body p-b-0 card_size">
                            <div class="bg-custom1  p-t-b-20 text-center row">
                                <div class="col-4">
                                    <h4 class="text-white">782</h4>
                                    <p class="text-white">Followers</p>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-white">834</h4>
                                    <p class="text-white">Following</p>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-white">2907</h4>
                                    <p class="text-white">Likes</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-widget mrgn_btm">
                        <div class="card-body bg-primary text-center careers-item">
                            <div>
                                <i class="fa-5x fa ti-user hover-rotate text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card card-widget mrgn_btm">
                        <div class="card-body bg-warning text-center careers-item">
                            <div>
                                <i class="fa-5x fa ti-bookmark-alt hover-rotate text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card card-widget mrgn_btm">
                        <div class="card-body bg-info text-center careers-item">
                            <div>
                                <i class="fa-5x fa ti-medall hover-rotate text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card card-widget mrgn_btm">
                        <div class="card-body bg-success text-center careers-item">
                            <div>
                                <i class="fa-5x fa ti-bell hover-rotate text-white"></i>
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
    <!-- Swiper --->
    <script src="vendors/swiper/js/swiper.min.js" type="text/javascript"></script>
    <!-- sparkline chart-->
    <script src="js/custom_js/sparkline/jquery.flot.spline.js"></script>
    <!-- wow plugin -->
    <script type="text/javascript" src="vendors/wowjs/js/wow.min.js"></script>
    <script type="text/javascript" src="js/custom_js/widgets.js"></script>
    <!-- end of page level js -->
@stop

