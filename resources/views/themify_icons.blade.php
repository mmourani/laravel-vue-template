
@extends('layouts.default')
@section('title')
    Themify Icons | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="vendors/toastr/css/toastr.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="css/custom_css/simple_themify.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Themify Icons</h1>
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
                    Themify Icons
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fa fa-fw fa-font"></i> Themify Icons
                    </h3>
                    <span class="float-right">
                            <i class="fa fa-fw ti-close removecard"></i>
                            <i class="fa fa-fw ti-angle-up clickable"></i>
                        </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 m-auto">
                            <form role="form">
                                <div class="input-group">
                                    <label for="icon-search" class="sr-only">Search</label>
                                    <input type="text" name="icon-search" id="icon-search" class="form-control"
                                           placeholder="Search Icon">
                                </div>
                                <div class="input-group">
                                    <label for="icon-size" class="sr-only">Size</label>
                                    <input type="range" name="icon-size" id="icon-size" class="form-control" min="24"
                                           max="40" value="24">
                                    <span class="input-group-addon icon-sizeshow">24px</span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h4 class="text-center">Click on any icon to copy its code to clipboard.</h4>
                    <div class='row'>
                        <div class='col-12'>
                            <!-- Themify Icons-->
                            <div class="text-center">
                                <h3 class="text-left h3pnl_font">
                                    Themify Icons
                                </h3>
                                <div class="icon-section">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="h3pnl_font">Arrows &amp; Direction Icons </h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-3 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-arrow-up"></span><span class="icon-name"> ti-arrow-up</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-arrow-right"></span><span
                                                        class="icon-name"> ti-arrow-right</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-arrow-left"></span><span
                                                        class="icon-name"> ti-arrow-left</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-arrow-down"></span><span
                                                        class="icon-name"> ti-arrow-down</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-arrows-vertical"></span><span class="icon-name"> ti-arrows-vertical</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-arrows-horizontal"></span><span class="icon-name"> ti-arrows-horizontal</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-angle-up"></span><span class="icon-name"> ti-angle-up</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-angle-right"></span><span
                                                        class="icon-name"> ti-angle-right</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-angle-left"></span><span
                                                        class="icon-name"> ti-angle-left</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-angle-down"></span><span
                                                        class="icon-name"> ti-angle-down</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-angle-double-up"></span><span class="icon-name"> ti-angle-double-up</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-angle-double-right"></span><span class="icon-name"> ti-angle-double-right</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-angle-double-left"></span><span class="icon-name"> ti-angle-double-left</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-angle-double-down"></span><span class="icon-name"> ti-angle-double-down</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-move"></span><span class="icon-name"> ti-move</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-fullscreen"></span><span
                                                        class="icon-name"> ti-fullscreen</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-arrow-top-right"></span><span class="icon-name"> ti-arrow-top-right</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-arrow-top-left"></span><span class="icon-name"> ti-arrow-top-left</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-arrow-circle-up"></span><span class="icon-name"> ti-arrow-circle-up</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-arrow-circle-right"></span><span class="icon-name"> ti-arrow-circle-right</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-arrow-circle-left"></span><span class="icon-name"> ti-arrow-circle-left</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-arrow-circle-down"></span><span class="icon-name"> ti-arrow-circle-down</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-arrows-corner"></span><span class="icon-name"> ti-arrows-corner</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-split-v"></span><span class="icon-name"> ti-split-v</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-split-v-alt"></span><span
                                                        class="icon-name"> ti-split-v-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-split-h"></span><span class="icon-name"> ti-split-h</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-hand-point-up"></span><span class="icon-name"> ti-hand-point-up</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-hand-point-right"></span><span class="icon-name"> ti-hand-point-right</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-hand-point-left"></span><span class="icon-name"> ti-hand-point-left</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-hand-point-down"></span><span class="icon-name"> ti-hand-point-down</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-back-right"></span><span
                                                        class="icon-name"> ti-back-right</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-back-left"></span><span
                                                        class="icon-name"> ti-back-left</span>
                                            </div>
                                        </div></div>
                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                        <div class="preview">
                                            <span class="ti-exchange-vertical"></span><span class="icon-name"> ti-exchange-vertical</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="icon-section">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="h3pnl_font">Web App Icons</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-wand"></span><span class="icon-name"> ti-wand</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-save"></span><span class="icon-name"> ti-save</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-save-alt"></span><span class="icon-name"> ti-save-alt</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-direction"></span><span
                                                        class="icon-name"> ti-direction</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-direction-alt"></span><span class="icon-name"> ti-direction-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-user"></span><span class="icon-name"> ti-user</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-link"></span><span class="icon-name"> ti-link</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-unlink"></span><span class="icon-name"> ti-unlink</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-trash"></span><span class="icon-name"> ti-trash</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-target"></span><span class="icon-name"> ti-target</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-tag"></span><span class="icon-name"> ti-tag</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-desktop"></span><span class="icon-name"> ti-desktop</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-tablet"></span><span class="icon-name"> ti-tablet</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-mobile"></span><span class="icon-name"> ti-mobile</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-email"></span><span class="icon-name"> ti-email</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-star"></span><span class="icon-name"> ti-star</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-spray"></span><span class="icon-name"> ti-spray</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-signal"></span><span class="icon-name"> ti-signal</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-shopping-cart"></span><span class="icon-name"> ti-shopping-cart</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-shopping-cart-full"></span><span class="icon-name"> ti-shopping-cart-full</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-settings"></span><span class="icon-name"> ti-settings</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-search"></span><span class="icon-name"> ti-search</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-zoom-in"></span><span class="icon-name"> ti-zoom-in</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-zoom-out"></span><span class="icon-name"> ti-zoom-out</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-cut"></span><span class="icon-name"> ti-cut</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-ruler"></span><span class="icon-name"> ti-ruler</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-ruler-alt-2"></span><span
                                                        class="icon-name"> ti-ruler-alt-2</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-ruler-pencil"></span><span class="icon-name"> ti-ruler-pencil</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-ruler-alt"></span><span
                                                        class="icon-name"> ti-ruler-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-bookmark"></span><span class="icon-name"> ti-bookmark</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-bookmark-alt"></span><span class="icon-name"> ti-bookmark-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-reload"></span><span class="icon-name"> ti-reload</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-plus"></span><span class="icon-name"> ti-plus</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-minus"></span><span class="icon-name"> ti-minus</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-close"></span><span class="icon-name"> ti-close</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-pin"></span><span class="icon-name"> ti-pin</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-pencil"></span><span class="icon-name"> ti-pencil</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-pencil-alt"></span><span
                                                        class="icon-name"> ti-pencil-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-paint-roller"></span><span class="icon-name"> ti-paint-roller</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-paint-bucket"></span><span class="icon-name"> ti-paint-bucket</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-na"></span><span class="icon-name"> ti-na</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-medall"></span><span class="icon-name"> ti-medall</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-medall-alt"></span><span
                                                        class="icon-name"> ti-medall-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-marker"></span><span class="icon-name"> ti-marker</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-marker-alt"></span><span
                                                        class="icon-name"> ti-marker-alt</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-lock"></span><span class="icon-name"> ti-lock</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-unlock"></span><span class="icon-name"> ti-unlock</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-location-arrow"></span><span class="icon-name"> ti-location-arrow</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-layout"></span><span class="icon-name"> ti-layout</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-layers"></span><span class="icon-name"> ti-layers</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-layers-alt"></span><span
                                                        class="icon-name"> ti-layers-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-key"></span><span class="icon-name"> ti-key</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-image"></span><span class="icon-name"> ti-image</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-heart"></span><span class="icon-name"> ti-heart</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-heart-broken"></span><span class="icon-name"> ti-heart-broken</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-hand-stop"></span><span
                                                        class="icon-name"> ti-hand-stop</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-hand-open"></span><span
                                                        class="icon-name"> ti-hand-open</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-hand-drag"></span><span
                                                        class="icon-name"> ti-hand-drag</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-flag"></span><span class="icon-name"> ti-flag</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-flag-alt"></span><span class="icon-name"> ti-flag-alt</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-flag-alt-2"></span><span
                                                        class="icon-name"> ti-flag-alt-2</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-eye"></span><span class="icon-name"> ti-eye</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-import"></span><span class="icon-name"> ti-import</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-export"></span><span class="icon-name"> ti-export</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-cup"></span><span class="icon-name"> ti-cup</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-crown"></span><span class="icon-name"> ti-crown</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-comments"></span><span class="icon-name"> ti-comments</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-comment"></span><span class="icon-name"> ti-comment</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-comment-alt"></span><span
                                                        class="icon-name"> ti-comment-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-thought"></span><span class="icon-name"> ti-thought</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-clip"></span><span class="icon-name"> ti-clip</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-check"></span><span class="icon-name"> ti-check</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-check-box"></span><span
                                                        class="icon-name"> ti-check-box</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-camera"></span><span class="icon-name"> ti-camera</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-announcement"></span><span class="icon-name"> ti-announcement</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-brush"></span><span class="icon-name"> ti-brush</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-brush-alt"></span><span
                                                        class="icon-name"> ti-brush-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-palette"></span><span class="icon-name"> ti-palette</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-briefcase"></span><span
                                                        class="icon-name"> ti-briefcase</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-bolt"></span><span class="icon-name"> ti-bolt</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-bolt-alt"></span><span class="icon-name"> ti-bolt-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-blackboard"></span><span
                                                        class="icon-name"> ti-blackboard</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-bag"></span><span class="icon-name"> ti-bag</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-world"></span><span class="icon-name"> ti-world</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-wheelchair"></span><span
                                                        class="icon-name"> ti-wheelchair</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-car"></span><span class="icon-name"> ti-car</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-truck"></span><span class="icon-name"> ti-truck</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-timer"></span><span class="icon-name"> ti-timer</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-ticket"></span><span class="icon-name"> ti-ticket</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-thumb-up"></span><span class="icon-name"> ti-thumb-up</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-thumb-down"></span><span
                                                        class="icon-name"> ti-thumb-down</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-stats-up"></span><span class="icon-name"> ti-stats-up</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-stats-down"></span><span
                                                        class="icon-name"> ti-stats-down</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-shine"></span><span class="icon-name"> ti-shine</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-shift-right"></span><span
                                                        class="icon-name"> ti-shift-right</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-shift-left"></span><span
                                                        class="icon-name"> ti-shift-left</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-shift-right-alt"></span><span class="icon-name"> ti-shift-right-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-shift-left-alt"></span><span class="icon-name"> ti-shift-left-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-shield"></span><span class="icon-name"> ti-shield</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-notepad"></span><span class="icon-name"> ti-notepad</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-server"></span><span class="icon-name"> ti-server</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-pulse"></span><span class="icon-name"> ti-pulse</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-printer"></span><span class="icon-name"> ti-printer</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-power-off"></span><span
                                                        class="icon-name"> ti-power-off</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-plug"></span><span class="icon-name"> ti-plug</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-pie-chart"></span><span
                                                        class="icon-name"> ti-pie-chart</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-card"></span><span class="icon-name"> ti-card</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-package"></span><span class="icon-name"> ti-package</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-music"></span><span class="icon-name"> ti-music</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-music-alt"></span><span
                                                        class="icon-name"> ti-music-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-mouse"></span><span class="icon-name"> ti-mouse</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-mouse-alt"></span><span
                                                        class="icon-name"> ti-mouse-alt</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-money"></span><span class="icon-name"> ti-money</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-microphone"></span><span
                                                        class="icon-name"> ti-microphone</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-menu"></span><span class="icon-name"> ti-menu</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-menu-alt"></span><span class="icon-name"> ti-menu-alt</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-map"></span><span class="icon-name"> ti-map</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-map-alt"></span><span class="icon-name"> ti-map-alt</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-location-pin"></span><span class="icon-name"> ti-location-pin</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-light-bulb"></span><span
                                                        class="icon-name"> ti-light-bulb</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-info"></span><span class="icon-name"> ti-info</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-infinite"></span><span class="icon-name"> ti-infinite</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-id-badge"></span><span class="icon-name"> ti-id-badge</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-hummer"></span><span class="icon-name"> ti-hummer</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-home"></span><span class="icon-name"> ti-home</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-help"></span><span class="icon-name"> ti-help</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-headphone"></span><span
                                                        class="icon-name"> ti-headphone</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-harddrives"></span><span
                                                        class="icon-name"> ti-harddrives</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-harddrive"></span><span
                                                        class="icon-name"> ti-harddrive</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-gift"></span><span class="icon-name"> ti-gift</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-game"></span><span class="icon-name"> ti-game</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-filter"></span><span class="icon-name"> ti-filter</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-files"></span><span class="icon-name"> ti-files</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-file"></span><span class="icon-name"> ti-file</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-zip"></span><span class="icon-name"> ti-zip</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-folder"></span><span class="icon-name"> ti-folder</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-envelope"></span><span class="icon-name"> ti-envelope</span>
                                            </div>
                                        </div>


                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-dashboard"></span><span
                                                        class="icon-name"> ti-dashboard</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-cloud"></span><span class="icon-name"> ti-cloud</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-cloud-up"></span><span class="icon-name"> ti-cloud-up</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-cloud-down"></span><span
                                                        class="icon-name"> ti-cloud-down</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-clipboard"></span><span
                                                        class="icon-name"> ti-clipboard</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-calendar"></span><span class="icon-name"> ti-calendar</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-book"></span><span class="icon-name"> ti-book</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-bell"></span><span class="icon-name"> ti-bell</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-basketball"></span><span
                                                        class="icon-name"> ti-basketball</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-bar-chart"></span><span
                                                        class="icon-name"> ti-bar-chart</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-bar-chart-alt"></span><span class="icon-name"> ti-bar-chart-alt</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-archive"></span><span class="icon-name"> ti-archive</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-anchor"></span><span class="icon-name"> ti-anchor</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-alert"></span><span class="icon-name"> ti-alert</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-alarm-clock"></span><span
                                                        class="icon-name"> ti-alarm-clock</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-agenda"></span><span class="icon-name"> ti-agenda</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-write"></span><span class="icon-name"> ti-write</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-wallet"></span><span class="icon-name"> ti-wallet</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-video-clapper"></span><span class="icon-name"> ti-video-clapper</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-video-camera"></span><span class="icon-name"> ti-video-camera</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-control-skip-forward"></span><span class="icon-name"> ti-control-skip-forward</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-support"></span><span class="icon-name"> ti-support</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-stamp"></span><span class="icon-name"> ti-stamp</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-slice"></span><span class="icon-name"> ti-slice</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-shortcode"></span><span
                                                        class="icon-name"> ti-shortcode</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-receipt"></span><span class="icon-name"> ti-receipt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-pin2"></span><span class="icon-name"> ti-pin2</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-pin-alt"></span><span class="icon-name"> ti-pin-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-pencil-alt2"></span><span
                                                        class="icon-name"> ti-pencil-alt2</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-eraser"></span><span class="icon-name"> ti-eraser</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-more"></span><span class="icon-name"> ti-more</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-more-alt"></span><span class="icon-name"> ti-more-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-microphone-alt"></span><span class="icon-name"> ti-microphone-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-magnet"></span><span class="icon-name"> ti-magnet</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-line-double"></span><span
                                                        class="icon-name"> ti-line-double</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-line-dotted"></span><span
                                                        class="icon-name"> ti-line-dotted</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-line-dashed"></span><span
                                                        class="icon-name"> ti-line-dashed</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-ink-pen"></span><span class="icon-name"> ti-ink-pen</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-info-alt"></span><span class="icon-name"> ti-info-alt</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-help-alt"></span><span class="icon-name"> ti-help-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-headphone-alt"></span><span class="icon-name"> ti-headphone-alt</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-gallery"></span><span class="icon-name"> ti-gallery</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-face-smile"></span><span
                                                        class="icon-name"> ti-face-smile</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-face-sad"></span><span class="icon-name"> ti-face-sad</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-credit-card"></span><span
                                                        class="icon-name"> ti-credit-card</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-comments-smiley"></span><span class="icon-name"> ti-comments-smiley</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-time"></span><span class="icon-name"> ti-time</span>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-share"></span><span class="icon-name"> ti-share</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-share-alt"></span><span
                                                        class="icon-name"> ti-share-alt</span>
                                            </div>
                                        </div>
                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-rocket"></span><span class="icon-name"> ti-rocket</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-new-window"></span><span
                                                        class="icon-name"> ti-new-window</span>
                                            </div>
                                        </div></div>
                                    <div class="row">

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-rss"></span><span class="icon-name"> ti-rss</span>
                                            </div>
                                        </div>

                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                            <div class="preview">
                                                <span class="ti-rss-alt"></span><span class="icon-name"> ti-rss-alt</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="icon-section">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="h3pnl_font">Control Icons</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                <div class="preview">
                                                    <span class="ti-control-stop"></span><span class="icon-name"> ti-control-stop</span>
                                                </div></div>
                                            <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                <div class="preview">
                                                    <span class="ti-control-shuffle"></span><span class="icon-name"> ti-control-shuffle</span>
                                                </div>
                                            </div>
                                            <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                <div class="preview">
                                                    <span class="ti-control-play"></span><span class="icon-name"> ti-control-play</span>
                                                </div>
                                            </div>
                                            <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                <div class="preview">
                                                    <span class="ti-control-pause"></span><span class="icon-name"> ti-control-pause</span>
                                                </div>
                                            </div></div>
                                        <div class="row">
                                            <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                <div class="preview">
                                                    <span class="ti-control-forward"></span><span class="icon-name"> ti-control-forward</span>
                                                </div></div>
                                            <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                <div class="preview">
                                                    <span class="ti-control-backward"></span><span class="icon-name"> ti-control-backward</span>
                                                </div>
                                            </div>
                                            <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                <div class="preview">
                                                    <span class="ti-volume"></span><span class="icon-name"> ti-volume</span>
                                                </div>
                                            </div>
                                            <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                <div class="preview">
                                                    <span class="ti-control-skip-forward"></span><span class="icon-name"> ti-control-skip-forward</span>
                                                </div>
                                            </div></div>
                                        <div class="row">
                                            <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                <div class="preview">
                                                    <span class="ti-control-skip-backward"></span><span class="icon-name"> ti-control-skip-backward</span>
                                                </div>
                                            </div>

                                            <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                <div class="preview">
                                                    <span class="ti-control-record"></span><span class="icon-name"> ti-control-record</span>
                                                </div>
                                            </div>
                                            <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                <div class="preview">
                                                    <span class="ti-control-eject"></span><span class="icon-name"> ti-control-eject</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-section">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="h3pnl_font">Text Editor</h3>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                    <div class="preview">
                                                        <span class="ti-paragraph"></span><span
                                                                class="icon-name"> ti-paragraph</span>
                                                    </div>
                                                </div>
                                                <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                    <div class="preview">
                                                        <span class="ti-uppercase"></span><span
                                                                class="icon-name"> ti-uppercase</span>
                                                    </div>
                                                </div>

                                                <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                    <div class="preview">
                                                        <span class="ti-underline"></span><span
                                                                class="icon-name"> ti-underline</span>
                                                    </div>
                                                </div>
                                                <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                    <div class="preview">
                                                        <span class="ti-text"></span><span class="icon-name"> ti-text</span>
                                                    </div>
                                                </div></div>
                                            <div class="row">
                                                <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                    <div class="preview">
                                                        <span class="ti-Italic"></span><span class="icon-name"> ti-Italic</span>
                                                    </div>
                                                </div>
                                                <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                    <div class="preview">
                                                        <span class="ti-smallcap"></span><span class="icon-name"> ti-smallcap</span>
                                                    </div>
                                                </div>
                                                <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                    <div class="preview">
                                                        <span class="ti-list"></span><span class="icon-name"> ti-list</span>
                                                    </div>
                                                </div>
                                                <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                    <div class="preview">
                                                        <span class="ti-list-ol"></span><span class="icon-name"> ti-list-ol</span>
                                                    </div>
                                                </div></div>
                                            <div class="row">
                                                <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                    <div class="preview">
                                                        <span class="ti-align-right"></span><span
                                                                class="icon-name"> ti-align-right</span>
                                                    </div>
                                                </div>
                                                <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                    <div class="preview">
                                                        <span class="ti-align-left"></span><span
                                                                class="icon-name"> ti-align-left</span>
                                                    </div>
                                                </div>
                                                <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                    <div class="preview">
                                                        <span class="ti-align-justify"></span><span class="icon-name"> ti-align-justify</span>
                                                    </div>
                                                </div>
                                                <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                    <div class="preview">
                                                        <span class="ti-align-center"></span><span class="icon-name"> ti-align-center</span>
                                                    </div>
                                                </div></div>
                                            <div class="row">
                                                <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                    <div class="preview">
                                                        <span class="ti-quote-right"></span><span
                                                                class="icon-name"> ti-quote-right</span>
                                                    </div>
                                                </div>
                                                <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                    <div class="preview">
                                                        <span class="ti-quote-left"></span><span
                                                                class="icon-name"> ti-quote-left</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="icon-section">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3 class="h3pnl_font">Layout Icons</h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-width-full"></span><span class="icon-name"> ti-layout-width-full</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-width-default"></span><span class="icon-name"> ti-layout-width-default</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-width-default-alt"></span><span class="icon-name"> ti-layout-width-default-alt</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-tab"></span><span
                                                                    class="icon-name"> ti-layout-tab</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-tab-window"></span><span class="icon-name"> ti-layout-tab-window</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-tab-v"></span><span class="icon-name"> ti-layout-tab-v</span>
                                                        </div>
                                                    </div>

                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-tab-min"></span><span class="icon-name"> ti-layout-tab-min</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-slider"></span><span class="icon-name"> ti-layout-slider</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-slider-alt"></span><span class="icon-name"> ti-layout-slider-alt</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-sidebar-right"></span><span class="icon-name"> ti-layout-sidebar-right</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-sidebar-none"></span><span class="icon-name"> ti-layout-sidebar-none</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-sidebar-left"></span><span class="icon-name"> ti-layout-sidebar-left</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-placeholder"></span><span class="icon-name"> ti-layout-placeholder</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-menu"></span><span
                                                                    class="icon-name"> ti-layout-menu</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-menu-v"></span><span class="icon-name"> ti-layout-menu-v</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-menu-separated"></span><span class="icon-name"> ti-layout-menu-separated</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-menu-full"></span><span class="icon-name"> ti-layout-menu-full</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-media-right"></span><span class="icon-name"> ti-layout-media-right</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-media-right-alt"></span><span class="icon-name"> ti-layout-media-right-alt</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-media-overlay"></span><span class="icon-name"> ti-layout-media-overlay</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-media-overlay-alt"></span><span class="icon-name"> ti-layout-media-overlay-alt</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-media-overlay-alt-2"></span><span class="icon-name"> ti-layout-media-overlay-alt-2</span>
                                                        </div>
                                                    </div>

                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-media-left"></span><span class="icon-name"> ti-layout-media-left</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-media-left-alt"></span><span class="icon-name"> ti-layout-media-left-alt</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-media-center"></span><span class="icon-name"> ti-layout-media-center</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-media-center-alt"></span><span class="icon-name"> ti-layout-media-center-alt</span>
                                                        </div>
                                                    </div>

                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-list-thumb"></span><span class="icon-name"> ti-layout-list-thumb</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-list-thumb-alt"></span><span class="icon-name"> ti-layout-list-thumb-alt</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-list-post"></span><span class="icon-name"> ti-layout-list-post</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-list-large-image"></span><span class="icon-name"> ti-layout-list-large-image</span>
                                                        </div>
                                                    </div>

                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-line-solid"></span><span class="icon-name"> ti-layout-line-solid</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-grid4"></span><span class="icon-name"> ti-layout-grid4</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-grid3"></span><span class="icon-name"> ti-layout-grid3</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-grid2"></span><span class="icon-name"> ti-layout-grid2</span>
                                                        </div>
                                                    </div>

                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-grid2-thumb"></span><span class="icon-name"> ti-layout-grid2-thumb</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-cta-right"></span><span class="icon-name"> ti-layout-cta-right</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-cta-left"></span><span class="icon-name"> ti-layout-cta-left</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-cta-center"></span><span class="icon-name"> ti-layout-cta-center</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-cta-btn-right"></span><span class="icon-name"> ti-layout-cta-btn-right</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-cta-btn-left"></span><span class="icon-name"> ti-layout-cta-btn-left</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-column4"></span><span class="icon-name"> ti-layout-column4</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-column3"></span><span class="icon-name"> ti-layout-column3</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-column2"></span><span class="icon-name"> ti-layout-column2</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-accordion-separated"></span><span class="icon-name"> ti-layout-accordion-separated</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-accordion-merged"></span><span class="icon-name"> ti-layout-accordion-merged</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-accordion-list"></span><span class="icon-name"> ti-layout-accordion-list</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-widgetized"></span><span
                                                                    class="icon-name"> ti-widgetized</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-widget"></span><span class="icon-name"> ti-widget</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-widget-alt"></span><span
                                                                    class="icon-name"> ti-widget-alt</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-view-list"></span><span
                                                                    class="icon-name"> ti-view-list</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-view-list-alt"></span><span class="icon-name"> ti-view-list-alt</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-view-grid"></span><span
                                                                    class="icon-name"> ti-view-grid</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-upload"></span><span class="icon-name"> ti-upload</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-download"></span><span class="icon-name"> ti-download</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-loop"></span><span class="icon-name"> ti-loop</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-sidebar-2"></span><span class="icon-name"> ti-layout-sidebar-2</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-grid4-alt"></span><span class="icon-name"> ti-layout-grid4-alt</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-grid3-alt"></span><span class="icon-name"> ti-layout-grid3-alt</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-grid2-alt"></span><span class="icon-name"> ti-layout-grid2-alt</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-column4-alt"></span><span class="icon-name"> ti-layout-column4-alt</span>
                                                        </div>
                                                    </div></div>
                                                <div class="row">
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-column3-alt"></span><span class="icon-name"> ti-layout-column3-alt</span>
                                                        </div>
                                                    </div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-layout-column2-alt"></span><span class="icon-name"> ti-layout-column2-alt</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icon-section">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h3 class="h3pnl_font">Brand Icons</h3>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-flickr"></span><span class="icon-name"> ti-flickr</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-flickr-alt"></span><span
                                                                        class="icon-name"> ti-flickr-alt</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-instagram"></span><span
                                                                        class="icon-name"> ti-instagram</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-google"></span><span class="icon-name"> ti-google</span>
                                                            </div>
                                                        </div></div>
                                                    <div class="row">
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-github"></span><span class="icon-name"> ti-github</span>
                                                            </div>
                                                        </div>

                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-facebook"></span><span class="icon-name"> ti-facebook</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-dropbox"></span><span class="icon-name"> ti-dropbox</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-dropbox-alt"></span><span
                                                                        class="icon-name"> ti-dropbox-alt</span>
                                                            </div>
                                                        </div></div>
                                                    <div class="row">
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-dribbble"></span><span class="icon-name"> ti-dribbble</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-apple"></span><span class="icon-name"> ti-apple</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-android"></span><span class="icon-name"> ti-android</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-yahoo"></span><span class="icon-name"> ti-yahoo</span>
                                                            </div>
                                                        </div></div>
                                                    <div class="row">
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-trello"></span><span class="icon-name"> ti-trello</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-stack-overflow"></span><span class="icon-name"> ti-stack-overflow</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-soundcloud"></span><span
                                                                        class="icon-name"> ti-soundcloud</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-sharethis"></span><span
                                                                        class="icon-name"> ti-sharethis</span>
                                                            </div>
                                                        </div></div>
                                                    <div class="row">
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-sharethis-alt"></span><span class="icon-name"> ti-sharethis-alt</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-reddit"></span><span class="icon-name"> ti-reddit</span>
                                                            </div>
                                                        </div>

                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-microsoft"></span><span
                                                                        class="icon-name"> ti-microsoft</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-microsoft-alt"></span><span class="icon-name"> ti-microsoft-alt</span>
                                                            </div>
                                                        </div></div>
                                                    <div class="row">
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-linux"></span><span class="icon-name"> ti-linux</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-jsfiddle"></span><span class="icon-name"> ti-jsfiddle</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-joomla"></span><span class="icon-name"> ti-joomla</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-html5"></span><span class="icon-name"> ti-html5</span>
                                                            </div>
                                                        </div></div>
                                                    <div class="row">
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-css3"></span><span class="icon-name"> ti-css3</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-drupal"></span><span class="icon-name"> ti-drupal</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-wordpress"></span><span
                                                                        class="icon-name"> ti-wordpress</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-tumblr"></span><span class="icon-name"> ti-tumblr</span>
                                                            </div>
                                                        </div></div>
                                                    <div class="row">
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-tumblr-alt"></span><span
                                                                        class="icon-name"> ti-tumblr-alt</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-skype"></span><span class="icon-name"> ti-skype</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-youtube"></span><span class="icon-name"> ti-youtube</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-vimeo"></span><span class="icon-name"> ti-vimeo</span>
                                                            </div>
                                                        </div></div>
                                                    <div class="row">
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-vimeo-alt"></span><span
                                                                        class="icon-name"> ti-vimeo-alt</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-twitter"></span><span class="icon-name"> ti-twitter</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-twitter-alt"></span><span
                                                                        class="icon-name"> ti-twitter-alt</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-linkedin"></span><span class="icon-name"> ti-linkedin</span>
                                                            </div>
                                                        </div></div>
                                                    <div class="row">
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-pinterest"></span><span
                                                                        class="icon-name"> ti-pinterest</span>
                                                            </div>
                                                        </div>

                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-pinterest-alt"></span><span class="icon-name"> ti-pinterest-alt</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-themify-logo"></span><span class="icon-name"> ti-themify-logo</span>
                                                            </div>
                                                        </div>
                                                        <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                            <div class="preview">
                                                                <span class="ti-themify-favicon"></span><span class="icon-name"> ti-themify-favicon</span>
                                                            </div>
                                                        </div></div>
                                                    <div class="icon-preview-box col-12 col-sm-4 col-md-3 col-lg-3">
                                                        <div class="preview">
                                                            <span class="ti-themify-favicon-alt"></span><span class="icon-name"> ti-themify-favicon-alt</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </div>
                                </div>
                                <!--main content ends-->
                                <!--rightside bar -->
                            </div>
                            <div class="background-overlay"></div>
                        </div></div></div></div></section>
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
        <!-- /.content -->
    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script src="vendors/toastr/js/toastr.min.js"></script>
    <script src="js/custom_js/themify_icons.js"></script>
    <!-- end of page level js -->
@stop

