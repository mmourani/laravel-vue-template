@extends('layouts.default')
@section('title')
    General Components | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="css/alertmessage.css" rel="stylesheet">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                General Components
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
                    General Components
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-headphone-alt"></i> Wells
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="card-header card_small mb-3">
                                    Look, I'm in a small well!
                                </div>
                                <div class="card-header card_small1 mb-3">
                                    Look, I'm in a well!
                                </div>
                                <div class="card-header card_small2 mb-3">
                                    Look, I'm in a large well!
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card set_media">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-angle-double-right"></i> Breadcrumbs
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="bs-example">
                                <ul class="breadcrumb brdr_mrg">
                                    <li class="next">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="next">
                                        <a href="#">
                                            UI Features
                                        </a>
                                    </li>
                                    <li>Pickers</li>
                                </ul>
                                <ul class="breadcrumb breadcrumb1 brdr_mrg">
                                    <li class="next1">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="next1">
                                        <a href="#">Charts</a>
                                    </li>
                                    <li>
                                        Flot Charts
                                    </li>
                                </ul>
                                <ul class="breadcrumb breadcrumb2 brdr_mrg" style="margin-bottom: 20px;">
                                    <li class="next2">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="next2">
                                        <a href="#">Tables</a>
                                    </li>
                                    <li>
                                        Data Tables
                                    </li>
                                </ul>
                                <ul class="breadcrumb breadcrumb3 brdr_mrg" style="margin-bottom: 15px;">
                                    <li class="next">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="next1">
                                        <a href="#">Forms</a>
                                    </li>
                                    <li>
                                        Form Elements
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 margin_top">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title text-white">
                                card Primary
                            </h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 margin_top">
                    <div class="card">
                        <div class="card-header  bg-success">
                            <h3 class="card-title text-white">
                                card Success
                            </h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 margin_top">
                    <div class="card">
                        <div class="card-header bg-warning">
                            <h3 class="card-title text-white">
                                card Warning
                            </h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 margin_top">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <h3 class="card-title text-white">
                                card Danger
                            </h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 margin_top">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">card Info</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 margin_top">
                    <div class="card">
                        <div class="card-header bg-default">
                            <h3 class="card-title">
                                card Default
                            </h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin_top">
                <div class="col-lg-6">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-layers"></i>
                                Tabbed card
                            </h3>
                        </div>
                        <div class="card-body">
                            <!-- Custom Tabs -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="#tab_1" class="nav-link active" data-toggle="tab">Tab 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab_2" class="nav-link" data-toggle="tab">Tab 2</a>
                                    </li>
                                    <li class="pull-right">
                                        <a href="#" class="text-muted">
                                            <i class="ti-settings"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="slim1">
                                    <div class="tab-pane active" id="tab_1"><br/>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            When an unknown printer took a galley of type and scrambled it to make a
                                            type specimenbook.
                                        </p>
                                        <p>It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged.
                                        </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and software like Aldus PageMaker.
                                        </p>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2"><br/>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal.
                                        </p>
                                        <p>Distribution of letters, as opposed to using 'Content here, content here',
                                            making it look like readable English.
                                        </p>
                                        <p>
                                            model text, and a search for 'lorem ipsum' will uncover many web sites still
                                            in their infancy. Various versions have evolved over the years.
                                        </p>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- nav-tabs-custom -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card set_media">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-menu"></i>
                                Progress Bars
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                Default
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">
                                                40% Complete (success)
                                            </span>
                                    </div>
                                </div>
                                Class:
                                <code>.progress-striped</code>
                                <div class="progress progress-bar-striped">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">
                                                40% Complete (success)
                                            </span>
                                    </div>
                                </div>
                                Class:
                                <code>.sm .active</code>
                                <div class="progress sm progress-bar-striped active">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">
                                                20% Complete
                                            </span>
                                    </div>
                                </div>
                                Class:
                                <code>.xs</code>
                                <div class="progress progress-xs progress_task progress-bar-striped">
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">
                                                60% Complete (warning)
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row margin_top">
                <div class="col-lg-6 ">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-alert"></i> Alerts
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-success">
                                <p class="mt-1 mb-1">
                                    Well done! You are reading a default Alert message.
                                </p>
                            </div>
                            <div class="alert alert-danger">
                                <strong>Oh! You can</strong>
                                <a href="#" class="alert-link">
                                    Redirect to me
                                </a> clicking the link on the Alert.
                            </div>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                <strong>Heads up!</strong> You are looking at a Dismissable Alert.
                            </div>
                            <div class="alert alert-warning fade-in">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                Hey! You are looking at Dismissable Alert with animation.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card set_media">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-notepad"></i> Notes
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="alert-message alert-message-success">
                                <h4>
                                    Alert Message Success
                                </h4>
                                <p class="fnt_size">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    <strong>
                                        strong message
                                    </strong> .
                                </p>
                            </div>
                            <div class="alert-message alert-message-default">
                                <h4>
                                    Alert Message Default
                                </h4>
                                <p class="fnt_size">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    <strong>
                                        strong message
                                    </strong> .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin_top">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-settings"></i> Typography Heading
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body text-center">
                                <h1>
                                    h1. Bootstrap heading
                                </h1>
                                <h2>
                                    h2. Bootstrap heading
                                </h2>
                                <h3>
                                    h3. Bootstrap heading
                                </h3>
                                <h4>
                                    h4. Bootstrap heading
                                </h4>
                                <h5>
                                    h5. Bootstrap heading
                                </h5>
                                <h6>
                                    h6. Bootstrap heading
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card set_media">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-menu"></i> Horizontal Description
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <dl class="row">
                                    <dt class="col-4 text-right">
                                        Description lists
                                    </dt>
                                    <dd class="col-8">
                                        A description list is perfect for defining terms.
                                    </dd>
                                    <dt class="col-4 text-right">Question</dt>
                                    <dd class="col-8">
                                        Vestibulum id ligula porta felis euismod semper eget lacinia odio.
                                    </dd>
                                    <dt class="col-4 text-right">
                                        Progress bar
                                    </dt>
                                    <dd class="col-8">
                                        Etiam porta sem malesuada magna mollis euismod.
                                    </dd>
                                    <dt class="col-4 text-right">Answer</dt>
                                    <dd class="col-8">
                                        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, justo
                                        sit amet risus.
                                    </dd>
                                    <dt class="col-4 text-right">
                                        Description lists
                                    </dt>
                                    <dd class="col-8">
                                        A description list is perfect for defining terms.
                                    </dd>
                                    <dt class="col-4 text-right">Question</dt>
                                    <dd class="col-8">
                                        Vestibulum id ligula porta felis euismod semper.
                                    </dd>
                                    <dt class="col-4 text-right">Answer</dt>
                                    <dd class="col-8">
                                        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, justo
                                        sit amet risus.
                                    </dd>
                                </dl>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin_top cards_padng">
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-view-list-alt"></i> Unstyled List
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <ul class="list-unstyled">
                                    <li>
                                        Lorem ipsum dolor sit amet
                                    </li>
                                    <li>
                                        Consectetur adipiscing elit
                                    </li>
                                    <li>
                                        Integer molestie lorem at massa
                                    </li>
                                    <li>
                                        Facilisis in pretium nisl aliquet
                                    </li>
                                    <li>
                                        Nulla volutpat aliquam velit
                                        <ul>
                                            <li>
                                                Phasellus iaculis neque
                                            </li>
                                            <li>
                                                Purus sodales ultricies
                                            </li>
                                            <li>
                                                Vestibulum laoreet porttitor sem
                                            </li>
                                            <li>
                                                Ac tristique libero volutpat at
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        Faucibus porta lacus fringilla vel
                                    </li>
                                    <li>
                                        Aenean sit amet erat nunc
                                    </li>
                                    <li>
                                        Eget porttitor lorem
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-list"></i> Unordered List
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <ul class="styled-ul">
                                    <li>
                                        Lorem ipsum dolor sit amet
                                    </li>
                                    <li>
                                        Consectetur adipiscing elit
                                    </li>
                                    <li>
                                        Integer molestie lorem at massa
                                    </li>
                                    <li>
                                        Facilisis in pretium nisl aliquet
                                    </li>
                                    <li>
                                        Nulla volutpat aliquam velit
                                        <ul>
                                            <li>
                                                Phasellus iaculis neque
                                            </li>
                                            <li>
                                                Purus sodales ultricies
                                            </li>
                                            <li>
                                                Vestibulum laoreet porttitor sem
                                            </li>
                                            <li>
                                                Ac tristique libero volutpat at
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        Faucibus porta lacus fringilla vel
                                    </li>
                                    <li>
                                        Aenean sit amet erat nunc
                                    </li>
                                    <li>
                                        Eget porttitor lorem
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-list-ol"></i> Ordered Lists
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <ol>
                                    <li>
                                        Lorem ipsum dolor sit amet
                                    </li>
                                    <li>
                                        Consectetur adipiscing elit
                                    </li>
                                    <li>
                                        Integer molestie lorem at massa
                                    </li>
                                    <li>
                                        Facilisis in pretium nisl aliquet
                                    </li>
                                    <li>
                                        Nulla volutpat aliquam velit
                                        <ol>
                                            <li>
                                                Phasellus iaculis neque
                                            </li>
                                            <li>
                                                Purus sodales ultricies
                                            </li>
                                            <li>
                                                Vestibulum laoreet porttitor sem
                                            </li>
                                            <li>
                                                Ac tristique libero volutpat at
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        Faucibus porta lacus fringilla vel
                                    </li>
                                    <li>
                                        Aenean sit amet erat nunc
                                    </li>
                                    <li>
                                        Eget porttitor lorem
                                    </li>
                                </ol>
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



