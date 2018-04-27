@extends('layouts.default')
@section('title')
    Buttons | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="vendors/hover/css/hover-min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/buttons.min.css">
    <link rel="stylesheet" href="vendors/laddabootstrap/css/ladda-themeless.min.css">
    <link rel="stylesheet" href="vendors/laddabootstrap/css/ladda.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css">
    <link href="css/buttons_sass.css" rel="stylesheet">
    <link href="css/advbuttons.css" rel="stylesheet">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Buttons</h1>
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
                    <a href="buttons">Buttons</a>
                </li>
            </ol>
        </section>
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-settings"></i> 2D Transforms Flat Buttons
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="flatbuttons">
                                <div class="text-left">
                                    <h5 class="h5pnl_font">Radiused Buttons</h5>
                                    <ul>
                                        <li>
                                            <button type="button" class="button button-rounded button-flat hvr-buzz">Buzz</button>
                                        </li>
                                        <li>
                                            <button class="button button-rounded button-primary-flat hvr-hang">Hang
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-rounded button-action-flat hvr-sink">Sink
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-rounded button-highlight-flat hvr-pop">Pop
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-rounded button-caution-flat hvr-float">Float
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-rounded button-royal-flat hvr-rotate">Rotate
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-left btn-rounded">
                                    <h5 class="h5pnl_font">Rounded Buttons</h5>
                                    <ul>
                                        <li>
                                            <button class="button button-pill button-flat hvr-grow">
                                                Grow Button
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-pill button-primary-flat hvr-shrink">
                                                Shrink Button
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-pill button-action-flat hvr-pulse">
                                                Pulse Button
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-pill button-highlight-flat hvr-pulse-grow">
                                                Pulse-grow
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-pill button-caution-flat hvr-pulse-shrink">
                                                Pulse-shrink
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-pill button-royal-flat hvr-push">
                                                Push Button
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-left">
                                    <h5 class="h5pnl_font">Rectangle Box</h5>
                                    <ul>
                                        <li>
                                            <button class="button button-flat hvr-wobble-skew">Button</button>
                                        </li>
                                        <li>
                                            <button class="button button-primary-flat hvr-wobble-bottom">Button</button>
                                        </li>
                                        <li>
                                            <button class="button button-action-flat hvr-wobble-to-top-right">Button
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-highlight-flat hvr-wobble-vertical">Button
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-caution-flat hvr-wobble-horizontal">Button
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-royal-flat hvr-skew-backward">Button</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-left">
                                    <h5 class="h5pnl_font">Cirlce Buttons</h5>
                                    <ul>
                                        <li>
                                            <button class="button button-circle button-flat hvr-wobble-top">Button
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-circle button-primary-flat hvr-skew">Button
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-circle button-action-flat hvr-wobble-to-top-right">
                                                Button
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-circle button-highlight-flat hvr-pulse-grow">
                                                Button
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-circle button-caution-flat hvr-grow">Button
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button-circle button-royal-flat hvr-buzz-out">Button
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mrgn_top">
                <div class="col-lg-6">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-bell"></i> Shadow and Glow Transitions Buttons
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="flatbuttons_small">
                                <ul>
                                    <li>
                                        <button class="button button-glow button-rounded button-flat hvr-float-shadow">
                                            Button
                                        </button>
                                    </li>
                                    <li>
                                        <button class="button button-glow button-rounded button-primary-flat hvr-float-shadow">
                                            Button
                                        </button>
                                    </li>
                                    <li>
                                        <button class="button button-glow button-rounded button-action-flat hvr-float-shadow">
                                            Button
                                        </button>
                                    </li>
                                    <li>
                                        <button class="button button-glow button-rounded button-highlight-flat hvr-float-shadow">
                                            Button
                                        </button>
                                    </li>
                                    <li>
                                        <button class="button button-glow button-rounded button-caution-flat hvr-float-shadow">
                                            Button
                                        </button>
                                    </li>
                                    <li>
                                        <button class="button button-glow button-rounded button-royal-flat hvr-float-shadow">
                                            Button
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 quick_short">
                    <div class="card set_media">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-rocket"></i> Quick Shortcuts
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="row">
                                    <div class="col-6 col-md-6">
                                        <button class="btn btn-danger btn-sm btn-responsive" role="button">
                                            <span class="fa fa-list-alt"></span>
                                            <br/> Apps
                                        </button>
                                        <button class="btn btn-warning btn-sm btn-responsive" role="button">
                                            <span class="fa fa-bookmark"></span>
                                            <br/> Bookmarks
                                        </button>
                                        <button class="btn btn-primary btn-sm btn-responsive" role="button">
                                            <span class="fa fa-signal"></span>
                                            <br/> Reports
                                        </button>
                                        <button class="btn btn-primary btn-sm btn-responsive" role="button">
                                            <span class="fa fa-comment"></span>
                                            <br/> Comments
                                        </button>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <button class="btn btn-success btn-sm btn-responsive" role="button">
                                            <span class="fa fa-user"></span>
                                            <br/> Users
                                        </button>
                                        <button class="btn btn-info btn-sm btn-responsive" role="button">
                                            <span class="fa fa-file"></span>
                                            <br/> Notes
                                        </button>
                                        <button class="btn btn-primary btn-sm btn-responsive" role="button">
                                            <span class="fa fa-picture-o"></span>
                                            <br/> Photos
                                        </button>
                                        <button class="btn btn-primary btn-sm btn-responsive" role="button">
                                            <span class="fa fa-tag"></span>
                                            <br/> Tags
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--</div>-->
                            <!--</div>-->
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <button class="btn btn-success btn-lg btn-block" role="button">
                                        <span class="fa fa-globe"></span> Website
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row buttons_3d mrgn_top">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-rocket"></i> 3-D Buttons
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="flatbuttons">
                                <ul>
                                    <li>
                                        <button class="button button-3d button_def">Button</button>
                                    </li>
                                    <li>
                                        <button class="button button-3d button-primary button-rounded btn_3d">Button
                                        </button>
                                    </li>
                                    <li>
                                        <button class="button button-3d button-action button-pill btn_3d">Button
                                        </button>
                                    </li>
                                    <li>
                                        <button class="button button-3d button-highlight button-circle btn_3d">Button
                                        </button>
                                    </li>
                                    <li>
                                        <button class="button button-3d button-caution icon-btn btn_3d">
                                            <i class="fa ti-instagram"></i> Button
                                        </button>
                                    </li>
                                    <li>
                                        <button class="button button-3d button-royal btn_3d">Button</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mrgn_top">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-arrow-circle-up"></i> Spinner Buttons
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="pad_left">
                                <div class="text-left">
                                    <div class="row ">
                                        <div class="col-lg-12">
                                            <h5 class="h5pnl_font">Buttons</h5>
                                        </div>
                                    </div>
                                    <div class="row spinner">
                                        <div class="col-md-2 col-sm-4">
                                            <button class="ladda-button btn btn-primary button_normal"
                                                    data-style="expand-left">Expand-left
                                            </button>
                                        </div>
                                        <div class="col-md-2 col-sm-4">
                                            <button class="ladda-button btn btn-primary button_normal"
                                                    data-style="expand-right">Expand-right
                                            </button>
                                        </div>
                                        <div class="col-md-2 col-sm-4">
                                            <button class="ladda-button btn btn-primary button_normal"
                                                    data-style="expand-up">Expand-up
                                            </button>
                                        </div>
                                        <div class="col-md-2 col-sm-4">
                                            <button class="ladda-button btn btn-primary button_normal"
                                                    data-style="slide-down">Slide-down
                                            </button>
                                        </div>
                                        <div class="col-md-2 col-sm-4">
                                            <button class="ladda-button btn btn-primary button_normal"
                                                    data-style="contract">Contract
                                            </button>
                                        </div>
                                        <div class="col-md-2 col-sm-4">
                                            <button class="ladda-button btn btn-primary button_normal"
                                                    data-style="zoom-in">Zoom-in
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-12">
                                            <h5 class="h5pnl_font">Icon Buttons</h5>
                                        </div>
                                    </div>
                                    <div class="row spinner">
                                        <div class="col-md-2 col-sm-4">
                                            <button class="ladda-button btn btn-info button_normal"
                                                    data-style="slide-left"><i class="fa ti-arrow-circle-left"
                                                                               aria-hidden="true"></i> Slide-left
                                            </button>
                                        </div>
                                        <div class="col-md-2 col-sm-4">
                                            <button class="ladda-button btn btn-info button_normal"
                                                    data-style="slide-right">Slide-right <i
                                                        class="fa ti-arrow-circle-right" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-2 col-sm-4">
                                            <button class="ladda-button btn btn-info button_normal"
                                                    data-style="slide-up">Slide-up <i class="fa ti-arrow-circle-up"
                                                                                      aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-2 col-sm-4">
                                            <button class="ladda-button btn btn-info button_normal"
                                                    data-style="contract"><i class="fa ti-filter" aria-hidden="true"></i>
                                                Contract
                                            </button>
                                        </div>
                                        <div class="col-md-2 col-sm-4">
                                            <button class="ladda-button btn btn-info button_normal"
                                                    data-style="zoom-out"><i class="fa ti-zoom-out"
                                                                             aria-hidden="true"></i> Zoom-out
                                            </button>
                                        </div>
                                    </div>
                                    <!--===========================  progress button spinners  ===========================-->
                                    <div class="row">

                                        <div class="col-md-12 col-sm-6">
                                            <div class="row text-left">
                                                <div class="col-lg-12">
                                                    <h5 class="h5pnl_font">Button Sizes</h5>
                                                </div>
                                            </div>
                                            <div class="row btn_sizes">
                                                <div class="col-md-4">
                                                    <button class="ladda-button btn btn-warning btn-lg button_normal"
                                                            data-style="expand-right">Large
                                                    </button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="ladda-button btn btn-warning btn-sm button_normal"
                                                            data-style="expand-right">Small
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="row text-left">
                                                <div class="col-lg-12">
                                                    <h5 class="h5pnl_font">Progress Button Spinners</h5>
                                                </div>
                                            </div>
                                            <div class="row spinner">
                                                <div class="col-md-5">
                                                    <button class="ladda-button btn btn-success button_progress"
                                                            data-style="expand-right">Expand-right
                                                    </button>
                                                </div>
                                                <div class="col-md-5">
                                                    <button class="ladda-button btn btn-success button_progress"
                                                            data-style="contract">contract
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mrgn_top">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-settings"></i> Buttons
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="flatbuttons">
                                <div class="row">
                                    <!-- Example Icon Button -->
                                    <div class="col-md-12">
                                        <h5 class="example-title h5pnl_font">Icon Button & Dropdown</h5>
                                        <div class="example example-buttons">
                                            <button type="button" class="btn btn-icon btn-default m-r-50"><i
                                                        class="icon fa fa-fw ti-location-pin" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-icon btn-primary m-r-50"><i
                                                        class="icon fa fa-fw ti-layout-grid3" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-icon btn-success m-r-50"><i
                                                        class="icon fa fa-fw ti-bell" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-icon btn-info m-r-50"><i
                                                        class="icon fa fa-fw ti-calendar" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-icon btn-warning btn-round m-r-50"><i
                                                        class="icon fa fa-fw ti-time" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-icon btn-danger btn-round m-r-50"><i
                                                        class="icon fa fa-fw ti-flag-alt-2" aria-hidden="true"></i>
                                            </button>
                                            <div class="btn-group drop_btn" role="group">
                                                <button type="button" class="btn btn-primary dropdown-toggle m-r-50"
                                                        id="exampleIconDropdown1" data-toggle="dropdown"
                                                        aria-expanded="false">
                                                    <i class="icon fa fa-fw ti-calendar" aria-hidden="true"></i>
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown_position1" aria-labelledby="exampleIconDropdown1"
                                                    role="menu">
                                                    <li role="presentation"><a href="javascript:void(0)"
                                                                               role="menuitem">Dropdown link</a></li>
                                                    <li role="presentation"><a href="javascript:void(0)"
                                                                               role="menuitem">Dropdown link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Example Icon Button -->
                                </div>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <!-- Example Icon Dropdown -->
                                        <div class="example-wrap">
                                            <h5 class="example-title h5pnl_font">Button Animation</h5>
                                            <div class="btn-group display_media" role="group">
                                                <button type="button"
                                                        class="btn btn-animate btn-animate-side btn-success m-r-50">
                                                    <span><i class="icon fa fa-fw ti-import" aria-hidden="true"></i>Side Animation</span>
                                                </button>
                                                <button type="button"
                                                        class="btn btn-animate btn-animate-vertical btn-success m-r-50">
                                                        <span><i class="icon fa fa-fw ti-import"
                                                                 aria-hidden="true"></i>Vertical
                                                                      Animation</span>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Example Icon Dropdown -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mrgn_top">
                <div class="col-lg-6">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-layout-column3"></i> Group buttons
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="col-md-12 text-center">
                                    <div class="ui-group-buttons">
                                        <a href="#" class="btn btn-success" role="button">
                                            <span class="fa fa-thumbs-up"></span>
                                        </a>
                                        <div class="or"></div>
                                        <a href="#" class="btn btn-danger" role="button">
                                            <span class="fa fa-thumbs-down"></span>
                                        </a>
                                    </div>
                                    <div class="ui-group-buttons">
                                        <a href="#" class="btn btn-success" role="button">
                                            <span class="fa fa-floppy-o"></span>
                                        </a>
                                        <div class="or"></div>
                                        <a href="#" class="btn btn-danger" role="button">
                                            <span class="fa fa-trash"></span>
                                        </a>
                                    </div>
                                    <br/>
                                    <br/>
                                    <div class="ui-group-buttons">
                                        <a href="#" class="btn btn-success" role="button">
                                            <span class="fa fa-check"></span> Sign Up
                                        </a>
                                        <div class="or"></div>
                                        <a href="#" class="btn btn-default" role="button">
                                            <span class="fa fa-remove"></span> Reset
                                        </a>
                                    </div>
                                    <br/>
                                    <br/>
                                    <div class="ui-group-buttons">
                                        <button type="button" class="btn btn-primary btn-lg">Large</button>
                                        <div class="or or-lg"></div>
                                        <button type="button" class="btn btn-success btn-lg">Large</button>
                                    </div>
                                    <br/>
                                    <br/>
                                    <div class="ui-group-buttons">
                                        <button type="button" class="btn btn-primary">Default</button>
                                        <div class="or"></div>
                                        <button type="button" class="btn btn-success">Success</button>
                                    </div>
                                    <br/>
                                    <br/>
                                    <div class="ui-group-buttons">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            Small
                                        </button>
                                        <div class="or or-sm"></div>
                                        <button type="button" class="btn btn-success btn-sm">
                                            Small
                                        </button>
                                    </div>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card set_media">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-save"></i> Buttons With Labels
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <button type="button" class="btn btn-labeled btn-success">
                                                <span class="btn-label">
                                                <i class="fa fa-check"></i>
                                            </span> Success
                                        </button>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <button type="button" class="btn btn-labeled btn-danger">
                                                <span class="btn-label">
                                                <i class="fa fa-remove"></i>
                                            </span> Cancel
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <button type="button" class="btn btn-labeled btn-warning">
                                                <span class="btn-label">
                                                <i class="fa fa-bookmark"></i>
                                            </span> Bookmark
                                        </button>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <button type="button" class="btn btn-labeled btn-primary">
                                                <span class="btn-label">
                                                <i class="fa fa-camera"></i>
                                            </span> Camera
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <button type="button" class="btn btn-labeled btn-default">
                                                <span class="btn-label">
                                                <i class="fa fa-chevron-left"></i>
                                            </span> Left
                                        </button>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <button type="button" class="btn btn-labeled btn-default">
                                            Right <span class="btn-label label-right">
                                                <i class="fa fa-chevron-right"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <button type="button" class="btn btn-labeled btn-success">
                                                <span class="btn-label">
                                                        <i class="fa fa-fw ti-thumb-up"></i>
                                                    </span> Up
                                        </button>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <button type="button" class="btn btn-labeled btn-warning">
                                                <span class="btn-label">
                                                <i class="fa fa-fw ti-thumb-down"></i>
                                            </span> Down
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <button type="button" class="btn btn-labeled btn-info">
                                                <span class="btn-label">
                                                <i class="fa fa-refresh"></i>
                                            </span> Refresh
                                        </button>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <button type="button" class="btn btn-labeled btn-primary">
                                                <span class="btn-label">
                                                <i class="fa fa-trash"></i>
                                            </span> Trash
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <a class="btn btn-warning btn-labeled" role="button">
                                                <span class="btn-label butn_clr">
                                                <i class="fa fa-info-circle"></i>
                                            </span> Info Web
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <a class="btn btn-success btn-labeled" role="button">
                                                <span class="btn-label">
                                                <i class="fa fa-globe"></i>
                                            </span> Web
                                        </a>
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
        <!--section ends-->
        <!-- /.content -->
    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script type="text/javascript" src="js/buttons.js"></script>
    <script type="text/javascript" src="vendors/laddabootstrap/js/spin.min.js"></script>
    <script type="text/javascript" src="vendors/laddabootstrap/js/ladda.min.js"></script>
    <script type="text/javascript" src="vendors/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
    <script type="text/javascript" src="js/custom_js/button_main.js"></script>
    <!-- end of page level js -->
@stop


