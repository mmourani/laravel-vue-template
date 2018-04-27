@extends('layouts.default')
@section('title')
    Font Awesome Icons  | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="vendors/toastr/css/toastr.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/custom_css/fontawesome_icons.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Font Awesome Icons</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        UI Features
                    </a>
                </li>
                <li class="active">
                    Font Awesome Icons
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fa fa-fw ti-ink-pen"></i> Font Icons
                    </h3>
                    <span class="float-right">
                            <i class="fa fa-fw ti-close removecard"></i>
                            <i class="fa fa-fw ti-angle-up clickable"></i>
                        </span>
                </div>
                <div class="card-body">
                    <div class='row'>
                        <div class='col-12'>
                            <section id="web-application">
                                <div class="iconoption_toggle">
                                    <i class="fa fa-fw fa-fighter-jet fa-flip-horizontal"></i>
                                </div>
                                <div class="iconoptions text-center">
                                    <button class="active btn btn-info btn-block">No Options</button>
                                    <button class="btn btn-info btn-block" data-faclass="fa-spin">Spin</button>
                                    <!-- <button class="rightrotate btn btn-info btn-block">Rotate 90</button> -->
                                    <button class="btn btn-info btn-block" data-faclass="fa-flip-horizontal">Flip
                                        Horizontally
                                    </button>
                                    <button class="btn btn-info btn-block" data-faclass="fa-flip-vertical">Flip
                                        Vertically
                                    </button>
                                    <h4>Rotate</h4>
                                    <div class="btn-group">
                                        <button class="btn btn-info btn-sm" data-faclass="">0</button>
                                        <button class="btn btn-info btn-sm" data-faclass="fa-rotate-90">90</button>
                                        <button class="btn btn-info btn-sm" data-faclass="fa-rotate-180">180</button>
                                        <button class="btn btn-info btn-sm" data-faclass="fa-rotate-270">270</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 m-auto">
                                        <form role="form">
                                            <div class="input-group">
                                                <label for="icon-search" class="sr-only">Search</label>
                                                <input type="text" name="icon-search" id="icon-search"
                                                       class="form-control" placeholder="Search Icon">
                                            </div>
                                            <div class="input-group">
                                                <label for="icon-size" class="sr-only">Size</label>
                                                <input type="range" name="icon-size" id="icon-size" class="form-control"
                                                       min="24" max="40" value="24">
                                                <span class="input-group-addon icon-sizeshow">24px</span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <h4 class="text-center h4pnl_font">Click on any icon to copy its code to clipboard.</h4>
                                <h4 class="page-header h4pnl_font">
                                    Web Application Icons
                                </h4>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-adjust"></i> fa-adjust
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-anchor"></i> fa-anchor
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-archive"></i> fa-archive
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-arrows"></i> fa-arrows
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-arrows-h"></i> fa-arrows-h
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-arrows-v"></i> fa-arrows-v
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-asterisk"></i> fa-asterisk
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-ban"></i> fa-ban
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-bar-chart-o"></i> fa-bar-chart-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-barcode"></i> fa-barcode
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-bars"></i> fa-bars
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-beer"></i> fa-beer
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-bell"></i> fa-bell
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-bell-o"></i> fa-bell-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-bolt"></i> fa-bolt
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-book"></i> fa-book
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-bookmark"></i> fa-bookmark
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-bookmark-o"></i> fa-bookmark-o
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-briefcase"></i> fa-briefcase
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-bug"></i> fa-bug
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-building-o"></i> fa-building-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-bullhorn"></i> fa-bullhorn
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-bullseye"></i> fa-bullseye
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-calendar"></i> fa-calendar
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-calendar-o"></i> fa-calendar-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-camera"></i> fa-camera
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-camera-retro"></i> fa-camera-retro
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-caret-square-o-down"></i> fa-caret-square-o-down
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-caret-square-o-left"></i> fa-caret-square-o-left
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-caret-square-o-right"></i> fa-caret-square-o-right
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-caret-square-o-up"></i> fa-caret-square-o-up
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-certificate"></i> fa-certificate
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-check"></i> fa-check
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-check-circle"></i> fa-check-circle
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-check-circle-o"></i> fa-check-circle-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-check-square"></i> fa-check-square
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-check-square-o"></i> fa-check-square-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-circle"></i> fa-circle
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-circle-o"></i> fa-circle-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-clock-o"></i> fa-clock-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-cloud"></i> fa-cloud
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-cloud-download"></i> fa-cloud-download
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-cloud-upload"></i> fa-cloud-upload
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-code"></i> fa-code
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-code-fork"></i> fa-code-fork
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-coffee"></i> fa-coffee
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-cog"></i> fa-cog
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-cogs"></i> fa-cogs
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-comment"></i> fa-comment
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-comment-o"></i> fa-comment-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-comments"></i> fa-comments
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-comments-o"></i> fa-comments-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-compass"></i> fa-compass
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-credit-card"></i> fa-credit-card
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-crop"></i> fa-crop
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw ti-move"></i> fa-crosshairs
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-cutlery"></i> fa-cutlery
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-dashboard"></i> fa-dashboard
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-desktop"></i> fa-desktop
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-dot-circle-o"></i> fa-dot-circle-o
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-download"></i> fa-download
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-edit"></i> fa-edit
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-ellipsis-h"></i> fa-ellipsis-h
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-ellipsis-v"></i> fa-ellipsis-v
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-envelope"></i> fa-envelope
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-envelope-o"></i> fa-envelope-o
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-eraser"></i> fa-eraser
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-hand-o-left"></i> fa-exchange
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-exclamation"></i> fa-exclamation
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-exclamation-circle"></i> fa-exclamation-circle
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-exclamation-triangle"></i> fa-exclamation-triangle
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-external-link"></i> fa-external-link
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-external-link-square"></i> fa-external-link-square
                                    </div>

                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-eye"></i> fa-eye
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-eye-slash"></i> fa-eye-slash
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-female"></i> fa-female
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-fighter-jet"></i> fa-fighter-jet
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-film"></i> fa-film
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-filter"></i> fa-filter
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw ti-cup"></i> fa-fire
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-fire-extinguisher"></i> fa-fire-extinguisher
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-flag"></i> fa-flag
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-flag-checkered"></i> fa-flag-checkered
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-flag-o"></i> fa-flag-o
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-flash"></i> fa-flash
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-flask"></i> fa-flask
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-folder"></i> fa-folder
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-folder-o"></i> fa-folder-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-folder-open"></i> fa-folder-open
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-folder-open-o"></i> fa-folder-open-o
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-frown-o"></i> fa-frown-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-gamepad"></i> fa-gamepad
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-gavel"></i> fa-gavel
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw ti-settings"></i> fa-gear
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-gears"></i> fa-gears
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-gift"></i> fa-gift
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-glass"></i> fa-glass
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-globe"></i> fa-globe
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-group"></i> fa-group
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-hdd-o"></i> fa-hdd-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-headphones"></i> fa-headphones
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-heart"></i> fa-heart
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-heart-o"></i> fa-heart-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-home"></i> fa-home
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-inbox"></i> fa-inbox
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-info"></i> fa-info
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-info-circle"></i> fa-info-circle
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-key"></i> fa-key
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-keyboard-o"></i> fa-keyboard-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-laptop"></i> fa-laptop
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-leaf"></i> fa-leaf
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-legal"></i> fa-legal
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-lemon-o"></i> fa-lemon-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-level-down"></i> fa-level-down
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-level-up"></i> fa-level-up
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-lightbulb-o"></i> fa-lightbulb-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-location-arrow"></i> fa-location-arrow
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw ti-lock"></i> fa-lock
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-magic"></i> fa-magic
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-magnet"></i> fa-magnet
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-mail-forward"></i> fa-mail-forward
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-mail-reply"></i> fa-mail-reply
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-mail-reply-all"></i> fa-mail-reply-all
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-male"></i> fa-male
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-map-marker"></i> fa-map-marker
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-meh-o"></i> fa-meh-o
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-microphone"></i> fa-microphone
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-microphone-slash"></i> fa-microphone-slash
                                    </div>

                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-minus"></i> fa-minus
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-minus-circle"></i> fa-minus-circle
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-minus-square"></i> fa-minus-square
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-minus-square-o"></i> fa-minus-square-o
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-mobile"></i> fa-mobile
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-mobile-phone"></i> fa-mobile-phone
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-money"></i> fa-money
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-moon-o"></i> fa-moon-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-music"></i> fa-music
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-pencil"></i> fa-pencil
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-pencil-square"></i> fa-pencil-square
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-pencil-square-o"></i> fa-pencil-square-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-phone"></i> fa-phone
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-phone-square"></i> fa-phone-square
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-picture-o"></i> fa-picture-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-plane"></i> fa-plane
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-plus"></i> fa-plus
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-plus-circle"></i> fa-plus-circle
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-plus-square"></i> fa-plus-square
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-plus-square-o"></i> fa-plus-square-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-power-off"></i> fa-power-off
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-print"></i> fa-print
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-puzzle-piece"></i> fa-puzzle-piece
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-qrcode"></i> fa-qrcode
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-question"></i> fa-question
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-question-circle"></i> fa-question-circle
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-quote-left"></i> fa-quote-left
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-quote-right"></i> fa-quote-right
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-random"></i> fa-random
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-refresh"></i> fa-refresh
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-reply"></i> fa-reply
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-reply-all"></i> fa-reply-all
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-retweet"></i> fa-retweet
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-road"></i> fa-road
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-rocket"></i> fa-rocket
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-rss"></i> fa-rss
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-rss-square"></i> fa-rss-square
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-search"></i> fa-search
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-search-minus"></i> fa-search-minus
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-search-plus"></i> fa-search-plus
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-share"></i> fa-share
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-share-square"></i> fa-share-square
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-share-square-o"></i> fa-share-square-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-shield"></i> fa-shield
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-shopping-cart"></i> fa-shopping-cart
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-sign-in"></i> fa-sign-in
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw ti-shift-right"></i> fa-sign-out
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-signal"></i> fa-signal
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-sitemap"></i> fa-sitemap
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-smile-o"></i> fa-smile-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-sort"></i> fa-sort
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-sort-alpha-asc"></i> fa-sort-alpha-asc
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-sort-alpha-desc"></i> fa-sort-alpha-desc
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-sort-amount-asc"></i> fa-sort-amount-asc
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-sort-amount-desc"></i> fa-sort-amount-desc
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-sort-asc"></i> fa-sort-asc
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-sort-desc"></i> fa-sort-desc
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-sort-down"></i> fa-sort-down
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-sort-numeric-asc"></i> fa-sort-numeric-asc
                                    </div>

                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-sort-numeric-desc"></i> fa-sort-numeric-desc
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-sort-up"></i> fa-sort-up
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-spinner"></i> fa-spinner
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-square"></i> fa-square
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-square-o"></i> fa-square-o
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-star"></i> fa-star
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-star-half"></i> fa-star-half
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-star-half-empty"></i> fa-star-half-empty
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-star-half-full"></i> fa-star-half-full
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-star-half-o"></i> fa-star-half-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-star-o"></i> fa-star-o
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-subscript"></i> fa-subscript
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-suitcase"></i> fa-suitcase
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-sun-o"></i> fa-sun-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-superscript"></i> fa-superscript
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-tablet"></i> fa-tablet
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-tachometer"></i> fa-tachometer
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-tag"></i> fa-tag
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-tags"></i> fa-tags
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-tasks"></i> fa-tasks
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-terminal"></i> fa-terminal
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-thumb-tack"></i> fa-thumb-tack
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-thumbs-down"></i> fa-thumbs-down
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-thumbs-o-down"></i> fa-thumbs-o-down
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-thumbs-o-up"></i> fa-thumbs-o-up
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-thumbs-up"></i> fa-thumbs-up
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-ticket"></i> fa-ticket
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-times"></i> fa-times
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-times-circle"></i> fa-times-circle
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-times-circle-o"></i> fa-times-circle-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-tint"></i> fa-tint
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-toggle-down"></i> fa-toggle-down
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-toggle-left"></i> fa-toggle-left
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-toggle-right"></i> fa-toggle-right
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-toggle-up"></i> fa-toggle-up
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-trash-o"></i> fa-trash-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-trophy"></i> fa-trophy
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-truck"></i> fa-truck
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-umbrella"></i> fa-umbrella
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-unlock"></i> fa-unlock
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-unlock-alt"></i> fa-unlock-alt
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-unsorted"></i> fa-unsorted
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-upload"></i> fa-upload
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw ti-user"></i> fa-user
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-users"></i> fa-users
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-video-camera"></i> fa-video-camera
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-volume-down"></i> fa-volume-down
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-volume-off"></i> fa-volume-off
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-volume-up"></i> fa-volume-up
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-warning"></i> fa-warning
                                        <span class="text-muted">(alias)</span>
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-wheelchair"></i> fa-wheelchair
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-wrench"></i> fa-wrench
                                    </div>
                                </div>
                            </section>
                            <section id="form-control">
                                <h4 class="page-header h4pnl_font">
                                    Form Control Icons
                                </h4>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-check-square"></i> fa-check-square
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-check-square-o"></i> fa-check-square-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-circle"></i> fa-circle
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-circle-o"></i> fa-circle-o
                                    </div>

                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-dot-circle-o"></i> fa-dot-circle-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-minus-square"></i> fa-minus-square
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-minus-square-o"></i> fa-minus-square-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-plus-square"></i> fa-plus-square
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-plus-square-o"></i> fa-plus-square-o
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-square"></i> fa-square
                                    </div>
                                    <div class="col-md-2 col-sm-4 fa-icon">
                                        <i class="fa fa-fw fa-square-o"></i> fa-square-o
                                    </div>
                                </div>

                                <section id="currency">
                                    <h4 class="page-header h4pnl_font">
                                        Currency Icons
                                    </h4>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-bitcoin"></i> fa-bitcoin
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-btc"></i> fa-btc
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-cny"></i> fa-cny
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-dollar"></i> fa-dollar
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-eur"></i> fa-eur
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-euro"></i> fa-euro
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-gbp"></i> fa-gbp
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-inr"></i> fa-inr
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-jpy"></i> fa-jpy
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-krw"></i> fa-krw
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-money"></i> fa-money
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-rmb"></i> fa-rmb
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-rouble"></i> fa-rouble
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-rub"></i> fa-rub
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-ruble"></i> fa-ruble
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-rupee"></i> fa-rupee
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-try"></i> fa-try
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-turkish-lira"></i> fa-turkish-lira
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-usd"></i> fa-usd
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-won"></i> fa-won
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-yen"></i> fa-yen
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                    </div>
                                </section>
                                <section id="text-editor">
                                    <h4 class="page-header h4pnl_font">
                                        Text Editor Icons
                                    </h4>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-align-center"></i> fa-align-center
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-align-justify"></i> fa-align-justify
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-align-left"></i> fa-align-left
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-align-right"></i> fa-align-right
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-bold"></i> fa-bold
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-chain"></i> fa-chain
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-chain-broken"></i> fa-chain-broken
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-clipboard"></i> fa-clipboard
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-columns"></i> fa-columns
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-copy"></i> fa-copy
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-cut"></i> fa-cut
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-dedent"></i> fa-dedent
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-eraser"></i> fa-eraser
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-file"></i> fa-file
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-file-o"></i> fa-file-o
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-file-text"></i> fa-file-text
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw ti-pencil"></i> fa-file-text-o
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-files-o"></i> fa-files-o
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-floppy-o"></i> fa-floppy-o
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-font"></i> fa-font
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-indent"></i> fa-indent
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-italic"></i> fa-italic
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-link"></i> fa-link
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-list"></i> fa-list
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-list-alt"></i> fa-list-alt
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-list-ol"></i> fa-list-ol
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-list-ul"></i> fa-list-ul
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-outdent"></i> fa-outdent
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-paperclip"></i> fa-paperclip
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-paste"></i> fa-paste
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-repeat"></i> fa-repeat
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-rotate-left"></i> fa-rotate-left
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-rotate-right"></i> fa-rotate-right
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-save"></i> fa-save
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-scissors"></i> fa-scissors
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-strikethrough"></i> fa-strikethrough
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-table"></i> fa-table
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-text-height"></i> fa-text-height
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-text-width"></i> fa-text-width
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-th"></i> fa-th
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-th-large"></i> fa-th-large
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-th-list"></i> fa-th-list
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-underline"></i> fa-underline
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-undo"></i> fa-undo
                                        </div>
                                        <div class="col-md-2 col-sm-4 fa-icon">
                                            <i class="fa fa-fw fa-unlink"></i> fa-unlink
                                            <span class="text-muted">(alias)</span>
                                        </div>
                                    </div>
                                    <section id="directional">
                                        <h4 class="page-header h4pnl_font">
                                            Directional Icons
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-angle-double-down"></i> fa-angle-double-down
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-angle-double-left"></i> fa-angle-double-left
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-angle-double-right"></i> fa-angle-double-right
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-angle-double-up"></i> fa-angle-double-up
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-angle-down"></i> fa-angle-down
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-angle-left"></i> fa-angle-left
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-angle-right"></i> fa-angle-right
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-angle-up"></i> fa-angle-up
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrow-circle-down"></i> fa-arrow-circle-down
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrow-circle-left"></i> fa-arrow-circle-left
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrow-circle-right"></i> fa-arrow-circle-right
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrow-circle-up"></i> fa-arrow-circle-up
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrow-down"></i> fa-arrow-down
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrow-left"></i> fa-arrow-left
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrow-right"></i> fa-arrow-right
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrow-up"></i> fa-arrow-up
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrows"></i> fa-arrows
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrows-alt"></i> fa-arrows-alt
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrows-h"></i> fa-arrows-h
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-arrows-v"></i> fa-arrows-v
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-caret-down"></i> fa-caret-down
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-caret-left"></i> fa-caret-left
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-caret-right"></i> fa-caret-right
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-caret-square-o-down"></i> fa-caret-square-o-down
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-caret-square-o-left"></i> fa-caret-square-o-left
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-caret-square-o-right"></i> fa-caret-square-o-right
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-caret-square-o-up"></i> fa-caret-square-o-up
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-caret-up"></i> fa-caret-up
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-chevron-circle-down"></i> fa-chevron-circle-down
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-chevron-circle-left"></i> fa-chevron-circle-left
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-chevron-circle-right"></i> fa-chevron-circle-right
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-chevron-circle-up"></i> fa-chevron-circle-up
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-chevron-down"></i> fa-chevron-down
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-chevron-left"></i> fa-chevron-left
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-chevron-right"></i> fa-chevron-right
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw ti-angle-up clickable"></i> fa-chevron-up
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-hand-o-down"></i> fa-hand-o-down
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-hand-o-left"></i> fa-hand-o-left
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-hand-o-right"></i> fa-hand-o-right
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-hand-o-up"></i> fa-hand-o-up
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-long-arrow-down"></i> fa-long-arrow-down
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-long-arrow-left"></i> fa-long-arrow-left
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-long-arrow-right"></i> fa-long-arrow-right
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-long-arrow-up"></i> fa-long-arrow-up
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-toggle-down"></i> fa-toggle-down
                                                <span class="text-muted">(alias)</span>
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-toggle-left"></i> fa-toggle-left
                                                <span class="text-muted">(alias)</span>
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-toggle-right"></i> fa-toggle-right
                                                <span class="text-muted">(alias)</span>
                                            </div>
                                            <div class="col-md-2 col-sm-4 fa-icon">
                                                <i class="fa fa-fw fa-toggle-up"></i> fa-toggle-up
                                                <span class="text-muted">(alias)</span>
                                            </div>
                                        </div>
                                        <section id="video-player">
                                            <h4 class="page-header h4pnl_font">
                                                Video Player Icons
                                            </h4>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-arrows-alt"></i> fa-arrows-alt
                                                </div>
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-backward"></i> fa-backward
                                                </div>
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-compress"></i> fa-compress
                                                </div>
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-eject"></i> fa-eject
                                                </div>
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-expand"></i> fa-expand
                                                </div>
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-fast-backward"></i> fa-fast-backward
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-fast-forward"></i> fa-fast-forward
                                                </div>
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-forward"></i> fa-forward
                                                </div>
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-pause"></i> fa-pause
                                                </div>
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-play"></i> fa-play
                                                </div>
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-play-circle"></i> fa-play-circle
                                                </div>
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-play-circle-o"></i> fa-play-circle-o
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-step-backward"></i> fa-step-backward
                                                </div>
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-step-forward"></i> fa-step-forward
                                                </div>
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-stop"></i> fa-stop
                                                </div>
                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                    <i class="fa fa-fw fa-youtube-play"></i> fa-youtube-play
                                                </div>
                                            </div>
                                            <section id="brand">
                                                <h4 class="page-header h4pnl_font">
                                                    Brand Icons
                                                </h4>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-adn"></i> fa-adn
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-android"></i> fa-android
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-apple"></i> fa-apple
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-bitbucket"></i> fa-bitbucket
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-bitbucket-square"></i> fa-bitbucket-square
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-bitcoin"></i> fa-bitcoin
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-btc"></i> fa-btc
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-css3"></i> fa-css3
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-dribbble"></i> fa-dribbble
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-dropbox"></i> fa-dropbox
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-facebook"></i> fa-facebook
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-facebook-square"></i> fa-facebook-square
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-flickr"></i> fa-flickr
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-foursquare"></i> fa-foursquare
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-github"></i> fa-github
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-github-alt"></i> fa-github-alt
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-github-square"></i> fa-github-square
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-gittip"></i> fa-gittip
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-google-plus"></i> fa-google-plus
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-google-plus-square"></i> fa-google-plus-square
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-html5"></i> fa-html5
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-instagram"></i> fa-instagram
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-linkedin"></i> fa-linkedin
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-linkedin-square"></i> fa-linkedin-square
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-linux"></i> fa-linux
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-maxcdn"></i> fa-maxcdn
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-pagelines"></i> fa-pagelines
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-pinterest"></i> fa-pinterest
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-pinterest-square"></i> fa-pinterest-square
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-renren"></i> fa-renren
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-skype"></i> fa-skype
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-stack-exchange"></i> fa-stack-exchange
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-stack-overflow"></i> fa-stack-overflow
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-trello"></i> fa-trello
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-tumblr"></i> fa-tumblr
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-tumblr-square"></i> fa-tumblr-square
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-twitter"></i> fa-twitter
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-twitter-square"></i> fa-twitter-square
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-vimeo-square"></i> fa-vimeo-square
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-vk"></i> fa-vk
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-weibo"></i> fa-weibo
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-windows"></i> fa-windows
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-xing"></i> fa-xing
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-xing-square"></i> fa-xing-square
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-youtube"></i> fa-youtube
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-youtube-play"></i> fa-youtube-play
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 fa-icon">
                                                        <i class="fa fa-fw fa-youtube-square"></i> fa-youtube-square
                                                    </div>
                                                </div>
                                                <section id="medical">
                                                    <h4 class="page-header h4pnl_font">
                                                        Medical Icons
                                                    </h4>
                                                    <div class="row">
                                                        <div class="col-12 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                                    <i class="fa fa-fw fa-ambulance"></i> fa-ambulance
                                                                </div>
                                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                                    <i class="fa fa-fw fa-h-square"></i> fa-h-square
                                                                </div>
                                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                                    <i class="fa fa-fw fa-hospital-o"></i> fa-hospital-o
                                                                </div>
                                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                                    <i class="fa fa-fw fa-medkit"></i> fa-medkit
                                                                </div>
                                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                                    <i class="fa fa-fw fa-plus-square"></i> fa-plus-square
                                                                </div>
                                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                                    <i class="fa fa-fw fa-stethoscope"></i> fa-stethoscope
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                                    <i class="fa fa-fw fa-user-md"></i> fa-user-md
                                                                </div>
                                                                <div class="col-md-2 col-sm-4 fa-icon">
                                                                    <i class="fa fa-fw fa-wheelchair"></i> fa-wheelchair
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- /.col -->
                                                    </div>
                                                </section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </section>


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
                    </div>
                    <div class="background-overlay"></div>
                </div></div></section>
        <!-- /.content -->
    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script src="vendors/toastr/js/toastr.min.js" type="text/javascript"></script>
    <script src="js/custom_js/fontawesome_icons.js" type="text/javascript"></script>
    <!-- end of page level js -->
@stop

