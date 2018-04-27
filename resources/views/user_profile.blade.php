@extends('layouts.default')
@section('title')
    View User | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/animate/animate.min.css" type="text/css"/>
    <link href="css/custom_css/user_profile.css" type="text/css" rel="stylesheet">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                View User
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#"> Users</a>
                </li>
                <li class="active">
                    View User
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="text-center mbl m-t-10">
                                            <img src="img/authors/avatar1.jpg" alt="img" class="rounded-circle img-bor"/>
                                        </div>
                                    </div>
                                    <div class="profile_user">
                                        <h3 class="user_name_max">Addison</h3>
                                        <p>Addisone@sf.com</p>
                                        <span class="fa-stack faceb fa-lg">
                                         <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-stack-1x fa-facebook fa-inverse"></i>
                                    </span>
                                        <span class="fa-stack googleplus fa-lg">
                                         <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-flag fa-stack-1x fa-google-plus fa-inverse"></i>
                                    </span>
                                        <span class="fa-stack tweet-btn fa-lg">
                                         <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-flag fa-stack-1x fa-twitter fa-inverse"></i>
                                    </span>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="profile_user">
                                        <button type="button" class="btn btn-success btn-sm">Follow</button>
                                        <button type="button" class="btn btn-primary btn-sm">Message</button>
                                    </div>
                                    <br/>
                                    <div class="card card-widget card-default">
                                        <div class="card-header">
                                        <span class="card-title"> <i class="icon-chart icons"></i> Project Status<i
                                                    class="icon-settings icons float-right mt-2"></i></span>
                                        </div>
                                        <div class="card-body profile_status">
                                            <div>
                                                <p>
                                                    <strong>Admin Template</strong>
                                                    <small class="float-right text-muted">
                                                        40% Complete
                                                    </small>
                                                </p>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 40%">
                                                        <span class="sr-only">
                                                    40% Complete (success)
                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    <strong>Wordpress Theme</strong>
                                                    <small class="float-right text-muted">
                                                        60% Complete
                                                    </small>
                                                </p>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                         aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 60%">
                                                        <span class="sr-only">
                                                    60% Complete (warning)
                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    <strong>Laravel Project</strong>
                                                    <small class="float-right text-muted">
                                                        80% Complete
                                                    </small>
                                                </p>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                         aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 80%">
                                                        <span class="sr-only">
                                                    80% Complete (info)
                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 padding_right">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-custom">
                                                <li class="nav-item">
                                                    <a href="#tab-activity" class="nav-link active" data-toggle="tab">
                                                        <strong>Activities</strong>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#followers" class="nav-link" data-toggle="tab">
                                                        <strong>Followers</strong>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#tab-events" class="nav-link" data-toggle="tab">
                                                        <strong>My Events</strong>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content nopadding noborder">
                                                <div id="tab-activity" class="tab-pane animated fadeInRight  active">
                                                    <div class="table-responsive">
                                                        <table class="table table-responsive">
                                                            <tbody>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="icon-bubble icons"></i>
                                                                </td>
                                                                <td>
                                                                    Jasmine Barlee posted a comment in Avengers Initiative
                                                                    project.
                                                                </td>
                                                                <td>
                                                                    2016/08/15 10:50
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="icon-rocket icons"></i>
                                                                </td>
                                                                <td>
                                                                    Beau Pomeroy changed order status from <span
                                                                            class="label label-primary">Pending</span> to <span
                                                                            class="label label-success">Completed</span>
                                                                </td>
                                                                <td>
                                                                    2015/07/19 07:16
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="icon-emotsmile icons"></i>
                                                                </td>
                                                                <td>
                                                                    Flynn Toosey posted a comment in Lost in Translation
                                                                    opening scene discussion.
                                                                </td>
                                                                <td>
                                                                    2014/09/16 10:10
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="icon-people icons"></i>
                                                                </td>
                                                                <td>
                                                                    Alex Smithers posted a comment in Avengers Initiative
                                                                    project.
                                                                </td>
                                                                <td>
                                                                    2015/11/20 05:15
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="icon-heart icons"></i>
                                                                </td>
                                                                <td>
                                                                    Ben Drennan changed order status from <span
                                                                            class="label label-warning">On Hold</span> to <span
                                                                            class="label label-danger">Disabled</span>
                                                                </td>
                                                                <td>
                                                                    2015/03/13 06:16
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="icon-key icons"></i>
                                                                </td>
                                                                <td>
                                                                    Darcy Whitford posted a comment in Lost in Translation
                                                                    opening scene discussion.
                                                                </td>
                                                                <td>
                                                                    2015/11/10 08:15
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="icon-hourglass icons"></i>
                                                                </td>
                                                                <td>
                                                                    Jordan Quinlivan changed order status from <span
                                                                            class="label label-primary">Pending</span> to <span
                                                                            class="label label-success">Completed</span>
                                                                </td>
                                                                <td>
                                                                    2014/05/02 10:08
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="icon-info icons"></i>
                                                                </td>
                                                                <td>
                                                                    Mary Dobbie posted a comment in Avengers Initiative
                                                                    project.
                                                                </td>
                                                                <td>
                                                                    2015/09/15 11:08
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="icon-present icons"></i>
                                                                </td>
                                                                <td>
                                                                    Lauren Monahan posted a comment in Avengers Initiative
                                                                    project.
                                                                </td>
                                                                <td>
                                                                    2015/08/08 12:08
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- tab-pane -->
                                                <div class="tab-pane animated fadeInRight" id="followers">
                                                    <div class="row m-t-l-10">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 bord">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="img">
                                                                        <a href="#">
                                                                            <img class="media-object img-img-thumbnail img-fluid"
                                                                                 height="60" width="60"
                                                                                 src="img/authors/avatar2.jpg"
                                                                                 alt="avatar image">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="details">
                                                                        <div class="name">
                                                                            <a href="#">Scarlett Johansson</a>
                                                                        </div>
                                                                        <div class="time">
                                                                            <i class="icon-clock icons"></i> Last online: 7
                                                                            minutes ago
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 bord">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="img">
                                                                        <a href="#">
                                                                            <img class="media-object img-thumbnail img-fluid"
                                                                                 src="img/authors/avatar.jpg"
                                                                                 alt="avatar image" height="60" width="60">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="details">
                                                                        <div class="name">
                                                                            <a href="#">Mila Kunis</a>
                                                                        </div>
                                                                        <div class="time online">
                                                                            <i class="icon-check icons"></i> Online
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 bord">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="img">
                                                                        <a href="#">
                                                                            <img class="media-object img-thumbnail img-fluid"
                                                                                 src="img/authors/avatar4.jpg"
                                                                                 alt="avatar image" height="60" width="60">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="details">
                                                                        <div class="name">
                                                                            <a href="#">Ryan Gossling</a>
                                                                        </div>
                                                                        <div class="time online">
                                                                            <i class="icon-check icons"></i> Online
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 bord">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="img">
                                                                        <a href="#">
                                                                            <img class="d-flex mr-3 img-thumbnail img-fluid"
                                                                                 src="img/authors/avatar3.jpg"
                                                                                 alt="avatar image" height="60" width="60">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="details">
                                                                        <div class="name">
                                                                            <a href="#">Robert Downey Jr.</a>
                                                                        </div>
                                                                        <div class="time">
                                                                            <i class="icon-clock icons"></i> Last online:
                                                                            Tuesday
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 bord">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="img">
                                                                        <a href="#">
                                                                            <img class="d-flex mr-3 img-thumbnail img-fluid"
                                                                                 src="img/authors/avataraa.jpg"
                                                                                 alt="avatar image" height="60" width="60">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="details">
                                                                        <div class="name">
                                                                            <a href="#">Emma Watson</a>
                                                                        </div>
                                                                        <div class="time">
                                                                            <i class="icon-clock icons"></i> Last online: 1
                                                                            week ago
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 bord">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="img">
                                                                        <a href="#">
                                                                            <img class="d-flex mr-3 img-thumbnail img-fluid"
                                                                                 src="img/authors/avatar7.jpg"
                                                                                 alt="avatar image" height="60" width="60">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="details">
                                                                        <div class="name">
                                                                            <a href="#">George Clooney</a>
                                                                        </div>
                                                                        <div class="time">
                                                                            <i class="icon-clock icons"></i> Last online: 1
                                                                            month ago
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 bord">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="img">
                                                                        <a href="#">
                                                                            <img class="d-flex mr-3 img-thumbnail img-fluid"
                                                                                 src="img/authors/avatar3.jpg"
                                                                                 alt="avatar image" height="60" width="60">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="details">
                                                                        <div class="name">
                                                                            <a href="#">Mila Kunis</a>
                                                                        </div>
                                                                        <div class="time online">
                                                                            <i class="icon-check icons"></i> Online
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-sm-6 bord">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="img">
                                                                        <a href="#">
                                                                            <img class="d-flex mr-3 img-thumbnail img-fluid"
                                                                                 src="img/authors/avatar.jpg"
                                                                                 alt="avatar image" height="60" width="60">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="details">
                                                                        <div class="name">
                                                                            <a href="#">Ryan Gossling</a>
                                                                        </div>
                                                                        <div class="time online">
                                                                            <i class="icon-check icons"></i> Online
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane animated fadeInRight" id="tab-events">
                                                    <div class="events">
                                                        <h5 class="lg-title m-b-15 h5pnl_font">Upcoming Events</h5>
                                                        <div class="row m-t-l-10">
                                                            <div class="col-sm-12 col-md-12 bord">
                                                                <div class="media">
                                                                    <a class="float-left" href="#">
                                                                        <img class="d-flex mr-3 img-thumbnail"
                                                                             src="img/authors/avatar.jpg" alt="image"
                                                                             height="80" width="80"/>
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <h4 class="event-title h4pnl_font">
                                                                            <a href="#">Lorem Ipsum is simple</a>
                                                                        </h4>
                                                                        <small class="text-muted">
                                                                            <i class="icon-location-pin icons"></i>
                                                                            Silicon Valley, San Francisco, CA
                                                                        </small>
                                                                        <small class="text-muted">
                                                                            <i class="icon-calendar icons"></i>
                                                                            Sunday,Dec 18, 2016 at 11:00am
                                                                        </small>
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor...
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- media -->
                                                            </div>
                                                            <!-- col-sm-6 -->
                                                            <div class="col-sm-12 col-md-12 bord">
                                                                <div class="media">
                                                                    <a class="float-left" href="#">
                                                                        <img class="d-flex mr-3 img-thumbnail"
                                                                             src="img/authors/avatar2.jpg" alt="image"
                                                                             height="80" width="80"/>
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <h4 class="event-title h4pnl_font">
                                                                            <a href="#">Lorem ipsum dolor text</a>
                                                                        </h4>
                                                                        <small class="text-muted">
                                                                            <i class="icon-location-pin icons"></i>
                                                                            Los Angeles, CA
                                                                        </small>
                                                                        <small class="text-muted">
                                                                            <i class="icon-calendar icons"></i>
                                                                            Friday,Dec 20, 2016 at 8:00am
                                                                        </small>
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor...
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- media -->
                                                            </div>
                                                            <div class="col-sm-12 col-md-12 bord">
                                                                <div class="media">
                                                                    <a class="float-left" href="#">
                                                                        <img class="d-flex mr-3 img-thumbnail"
                                                                             src="img/authors/avatar3.jpg" alt="image"
                                                                             height="80" width="80"/>
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <h4 class="event-title h4pnl_font">
                                                                            <a href="#">Lorem Ipsum is not simply random
                                                                                text</a>
                                                                        </h4>
                                                                        <small class="text-muted">
                                                                            <i class="icon-location-pin icons"></i>
                                                                            Los Angeles, CA
                                                                        </small>
                                                                        <small class="text-muted">
                                                                            <i class="icon-calendar icons"></i>
                                                                            Friday,Dec 22, 2016 at 8:00am
                                                                        </small>
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor...
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-12 bord">
                                                                <div class="media">
                                                                    <a class="float-left" href="#">
                                                                        <img class="d-flex mr-3 img-thumbnail"
                                                                             src="img/authors/avatar4.jpg" alt="image"
                                                                             height="80" width="80"/>
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <h4 class="event-title h4pnl_font">
                                                                            <a href="#">The standard chunk of Lorem
                                                                                Ipsum</a>
                                                                        </h4>
                                                                        <small class="text-muted">
                                                                            <i class="icon-location-pin icons"></i>
                                                                            Bay Area, San Francisco
                                                                        </small>
                                                                        <small class="text-muted">
                                                                            <i class="icon-calendar icons"></i>
                                                                            Saturday,Dec 24, 2016 at 8:00am
                                                                        </small>
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor...
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- media -->
                                                            </div>
                                                            <!-- col-sm-6 -->
                                                        </div>
                                                        <!-- row -->
                                                        <br/>
                                                        <h5 class="lg-title m-b-15">Past Events</h5>
                                                        <div class="row m-t-l-10">
                                                            <div class="col-sm-12 col-md-12 bord">
                                                                <div class="media">
                                                                    <a class="float-left" href="#">
                                                                        <img class="d-flex mr-3 img-thumbnail"
                                                                             src="img/authors/avatar5.jpg" alt="image"
                                                                             height="80" width="80"/>
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <h4 class="event-title h4pnl_font">
                                                                            <a href="#">There are many variations</a>
                                                                        </h4>
                                                                        <small class="text-muted">
                                                                            <i class="icon-location-pin icons"></i>
                                                                            Silicon Valley, San Francisco, CA
                                                                        </small>
                                                                        <small class="text-muted">
                                                                            <i class="icon-calendar icons"></i>
                                                                            Sunday,Dec 15, 2015 at 11:00am
                                                                        </small>
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor...
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- media -->
                                                            </div>
                                                            <!-- col-sm-6 -->
                                                            <div class="col-sm-12 col-md-12 bord">
                                                                <div class="media">
                                                                    <a class="float-left" href="#">
                                                                        <img class="d-flex mr-3 img-thumbnail"
                                                                             src="img/authors/avatar6.jpg" alt="image"
                                                                             height="80" width="80"/>
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <h4 class="event-title h4pnl_font">
                                                                            <a href="#">There are many variations of
                                                                                passages</a>
                                                                        </h4>
                                                                        <small class="text-muted">
                                                                            <i class="icon-location-pin icons"></i>
                                                                            New York City
                                                                        </small>
                                                                        <small class="text-muted">
                                                                            <i class="icon-calendar icons"></i>
                                                                            Monday,Dec 14, 2015 at 8:00am
                                                                        </small>
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor...
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- media -->
                                                            </div>
                                                            <!-- col-sm-6 -->
                                                            <div class="col-sm-12 col-md-12 bord">
                                                                <div class="media">
                                                                    <a class="float-left" href="#">
                                                                        <img class="d-flex mr-3 img-thumbnail"
                                                                             src="img/authors/avatar7.jpg" alt="image"
                                                                             height="80" width="80"/>
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <h4 class="event-title h4pnl_font">
                                                                            <a href="#">English. Many desktop publishing</a>
                                                                        </h4>
                                                                        <small class="text-muted">
                                                                            <i class="icon-location-pin icons"></i>
                                                                            Los Angeles, CA
                                                                        </small>
                                                                        <small class="text-muted">
                                                                            <i class="icon-calendar icons"></i>
                                                                            Friday,Dec 12, 2015 at 8:00am
                                                                        </small>
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor...
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- media -->
                                                            </div>
                                                            <!-- col-sm-6 -->
                                                            <div class="col-sm-12 col-md-12 bord">
                                                                <div class="media">
                                                                    <a class="float-left" href="#">
                                                                        <img class="d-flex mr-3 img-thumbnail"
                                                                             src="img/authors/avataraa.jpg" alt="image"
                                                                             height="80" width="80"/>
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <h4 class="event-title h4pnl_font">
                                                                            <a href="#">Lorem Ipsum comes from sections</a>
                                                                        </h4>
                                                                        <small class="text-muted">
                                                                            <i class="icon-location-pin icons"></i>
                                                                            Bay Area, San Francisco
                                                                        </small>
                                                                        <small class="text-muted">
                                                                            <i class="icon-calendar icons"></i>
                                                                            Saturday,Dec 10, 2015 at 8:00am
                                                                        </small>
                                                                        <p>
                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor...
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- media -->
                                                            </div>
                                                            <!-- col-sm-6 -->
                                                        </div>
                                                        <!-- row -->
                                                    </div>
                                                    <!-- events -->
                                                </div>
                                                <!-- tab-pane -->
                                            </div>
                                            <!-- tab-content -->
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
            <div class="background-overlay"></div>
        </section>
    </aside>
@stop



