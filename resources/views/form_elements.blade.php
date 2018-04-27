@extends('layouts.default')
@section('title')
    Form Elements | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="vendors/iCheck/css/all.css" rel="stylesheet"/>
    <link href="vendors/bootstrap-fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/formelements.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <section class="content-header">
            <!--section starts-->
            <h1>
                Form Elements
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Forms</a>
                </li>
                <li class="active">
                    Form Elements
                </li>
            </ol>
        </section>
        <section class="content form_elements">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header txt_padding">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-move"></i> General Elements
                            </h3>
                            <span class="float-right fnt_size txt_font">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" role="form">
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label for="input-text" class="control-label float-right txt_media1">Input text</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-text"
                                               placeholder="Input text">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label for="inputPassword" class="control-label float-right txt_media1">Password</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword"
                                               placeholder="Password">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label for="input-text-disabled" class=" control-label float-right txt_media1">Disabled</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-text-disabled"
                                               placeholder="Input text" disabled>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label for="color" class="control-label float-right txt_media1">Color</label>
                                    </div>
                                    <div class="col-sm-10 form_control">
                                        <input type="color" class="form-control form_control" id="color">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label for="url" class="control-label float-right txt_media1">Url</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="url"
                                               placeholder="URL" value="http://getbootstrap.com">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label for="range" class="control-label float-right txt_media1">Range</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="range" class="form-control " id="range" value="50">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label float-right m-t-ng-8 txt_media1">Radio Buttons</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="iradio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1"
                                                       value="option1"> Radio Button 1
                                            </label>
                                        </div>
                                        <div class="iradio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2"
                                                       value="option2"> Radio Button 2
                                            </label>
                                        </div>
                                        <div class="iradio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios3"
                                                       value="option2"> Radio Button 3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label float-right m-t-ng-8 txt_media1">Checkbox</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <div>
                                            <label>
                                                <input type="checkbox" name="c1" id="c1" value=""> Checkbox 1
                                            </label>
                                        </div>
                                        <div>
                                            <label>
                                                <input type="checkbox" name="c1" id="c2" value=""> Checkbox 2
                                            </label>
                                        </div>
                                        <div>
                                            <label>
                                                <input type="checkbox" name="c1" id="c3" value=""> Checkbox 3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label float-right txt_media1">
                                            Inline Radio
                                        </label>
                                    </div>
                                    <div class="col-sm-10">
                                        <label class="radio-inline iradio">
                                            <input type="radio" id="inlineradio1" name="inlineRadios" value="option1">
                                            Inline Radio Button 1
                                        </label>
                                        <label class="radio-inline iradio">
                                            <input type="radio" id="inlineradio2" name="inlineRadios" value="option2">
                                            Inline Radio Button 2
                                        </label>
                                        <label class="radio-inline iradio">
                                            <input type="radio" id="inlineradio3" name="inlineRadios" value="option3">
                                            Inline Radio Button 3
                                        </label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label float-right txt_media1">
                                            Inline Checkbox
                                        </label>
                                    </div>
                                    <div class="col-sm-10">
                                        <label class="checkbox-inline icheckbox">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1"> Inline checkbox
                                            1
                                        </label>
                                        <label class="checkbox-inline icheckbox">
                                            <input type="checkbox" id="inlineCheckbox2" value="option2"> Inline checkbox
                                            2
                                        </label>
                                        <label class="checkbox-inline icheckbox">
                                            <input type="checkbox" id="inlineCheckbox3" value="option3"> Inline checkbox
                                            3
                                        </label>
                                    </div>
                                </div>
                                <div class="row form-group has-success">
                                    <div class="col-sm-2">
                                        <label for="input-text-has-success" class="form-control-label float-right text-success txt_media1">
                                            Input Success
                                        </label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control brdr_success" id="input-text-has-success">
                                    </div>
                                </div>
                                <div class="row form-group has-warning">
                                    <div class="col-sm-2">
                                        <label for="input-text-has-warning" class="control-label float-right text-warning txt_media1">
                                            Input Warning
                                        </label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control brdr_warn" id="input-text-has-warning">
                                    </div>
                                </div>
                                <div class="row form-group has-error">
                                    <div class="col-sm-2">
                                        <label for="input-text-has-error" class="control-label text-danger float-right txt_media1">
                                            Input Error
                                        </label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control brdr_danger" id="input-text-has-error">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label float-right txt_media1">Input Size</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control input-sm ipt_size" placeholder="input-sm">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label float-right"></label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control ipt_size1" placeholder="input-md">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label float-right"></label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control input-lg ipt_size2" placeholder="input-lg">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label float-right txt_media1">
                                            Input Group
                                        </label>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label float-right"></label>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Currency">
                                            <span class="input-group-addon right_addon">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class=" control-label float-right txt_media"></label>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control" placeholder="Currency">
                                            <span class="input-group-addon right_addon">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label float-right"></label>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-6 m-b-10">
                                                <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <input type="checkbox">
                                                        </span>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <!-- /.col-lg-6 -->
                                            <div class="col-md-6 m-b-10">
                                                <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <input type="radio">
                                                        </span>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <!-- /.col-lg-6 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label float-right"></label>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-lg-6 m-b-10">
                                                <div class="input-group input_height input_go">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-warning left_btn" type="button">Go!</button>
                                                        </span>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <!-- /.col-lg-6 -->
                                            <div class="col-lg-6 m-b-10">
                                                <div class="input-group input_height">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-btn">
                                                            <button class="btn btn-warning right_btn" type="button">Go!</button>
                                                        </span>
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <!-- /.col-lg-6 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class=" control-label float-right"></label>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-lg-6 m-b-10">
                                                <div class="input-group input_height">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split left_btn"  aria-haspopup="true" data-toggle="dropdown">
                                                            Action
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown_position1">
                                                            <li>
                                                                <a href="#" class="dropdown-item">Action</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="dropdown-item">
                                                                    Another action
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="dropdown-item">
                                                                    Something else here
                                                                </a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li>
                                                                <a href="#" class="dropdown-item">
                                                                    Separated link
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <input type="text" class="form-control">
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <!-- /.col-lg-6 -->
                                            <div class="col-lg-6 m-b-10">
                                                <div class="input-group input_height">
                                                    <input type="text" class="form-control">
                                                    <div class="input-group-btn right_drp">
                                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split right_btn"  aria-haspopup="true" data-toggle="dropdown">
                                                            Action
                                                            <!--<span class="caret"></span>-->
                                                        </button>
                                                        <ul class="dropdown-menu dropdown_position float-right">
                                                            <li>
                                                                <a href="#">Action</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    Another action
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    Something else here
                                                                </a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li>
                                                                <a href="#">
                                                                    Separated link
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <!-- /.col-lg-6 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label float-right txt_media1">
                                            Text Area
                                        </label>
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <textarea rows="4" class="form-control resize_vertical"
                                                  placeholder="Basic"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label float-right txt_media">
                                        </label>
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <textarea rows="4" class="form-control resize_vertical" disabled></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label float-right">
                                        </label>
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <textarea rows="4" class="form-control noresize"
                                                  placeholder="No resize"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mrgn_top">
                        <div class="card-header txt_padding">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-pencil"></i> Grid sizing of Form Elements
                            </h3>
                            <span class="float-right d-none d-sm-block fnt_size txt_font">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                <i class="fa fa-fw ti-close removecard"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">

                                    <div class="col-3">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-3">
                                        <textarea class="form-control resize_vertical"></textarea>
                                    </div>
                                    <div class="col-4">
                                        <textarea class="form-control resize_vertical"></textarea>
                                    </div>
                                    <div class="col-5">
                                        <textarea class="form-control resize_vertical"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3">
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                    <div class="col-5">
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mrgn_top">
                        <div class="card-header txt_padding">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-pencil"></i> Height Sizing of Input
                                Groups
                            </h3>
                            <span class="float-right d-none d-sm-block fnt_size txt_font">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                <i class="fa fa-fw ti-close removecard "></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-4 col-12 m-t-10">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon input_padng">
                                                <i class="fa fa-fw ti-user" aria-hidden="true"></i>
                                            </span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 m-t-10">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon input_padng">
                                                <input type="checkbox">
                                            </span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 m-t-10">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-addon input_padng">
                                                <input type="radio">
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4 col-12 m-t-10">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw ti-user" aria-hidden="true"></i>
                                            </span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 m-t-10">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="checkbox"></span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 m-t-10">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <input type="radio">
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4 col-12 m-t-10">
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw ti-user"></i>
                                            </span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 m-t-10">
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon">
                                                <input type="checkbox">
                                            </span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 m-t-10">
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon">
                                                <input type="radio">
                                            </span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mrgn_top">
                        <div class="card-header txt_padding">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-download"></i> Advanced File Input
                            </h3>
                            <span class="float-right fnt_size txt_font">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <label class="control-label txt_media">
                                        Select File
                                    </label>
                                    <input id="input-20" type="file" class="file-loading">
                                </div>
                                <div class="col-sm-4">
                                    <div class="alert alert-info small m-t-10 alert_pad">
                                        Display the widget as a single block button
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row advanced_select1">
                                <div class="col-sm-8">
                                    <label class="control-label txt_media">
                                        Select File
                                    </label>
                                    <input id="input-21" type="file" accept="image/*" class="file-loading">
                                </div>
                                <div class="col-sm-4">
                                    <div class="alert alert-info small m-t-10">
                                        Show only image files for selection & preview. Control button labels, styles,
                                        and icons for the Pick Image, upload, and delete buttons.
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row advanced_select2">
                                <div class="col-sm-8">
                                    <label class="control-label txt_media">
                                        Select File
                                    </label>
                                    <input id="input-22" type="file" class="file-loading" accept="text/plain"
                                           data-preview-file-type="text" data-preview-class="bg-warning">
                                </div>
                                <div class="col-sm-4">
                                    <div class="alert alert-info small m-t-10">
                                        Preview section control. Change preview background and display only text files
                                        content within the preview window.
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row advanced_select2">
                                <div class="col-sm-8 ">
                                    <label class="control-label txt_media">
                                        Select File
                                    </label>
                                    <input id="input-23" type="file" class="file-loading" data-show-preview="false">
                                </div>
                                <div class="col-sm-4">
                                    <div class="alert alert-info small m-t-10">
                                        Advanced customization using templates. For example, Hide file preview
                                        thumbnails.
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row advanced_select2">
                                <div class="col-sm-8">
                                    <label class="control-label txt_media">
                                        Select File
                                    </label>
                                    <input id="input-40" type="file" class="file-loading">
                                    <br>
                                    <button type="button" class="btn btn-warning btn-modify">Modify</button>
                                </div>
                                <div class="col-sm-4">
                                    <div class="alert alert-info small m-t-10">
                                        Using plugin methods to alter input at runtime. For example, click the Modify
                                        button to disable the plugin and change plugin options.
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row advanced_select2">
                                <div class="col-sm-8">
                                    <label class="control-label txt_media">
                                        Select File
                                    </label>
                                    <input id="input-41" type="file" class="file-loading">
                                </div>
                                <div class="col-sm-4">
                                    <div class="alert alert-info small m-t-10">
                                        Allow only image and video file types to be uploaded. You can configure the
                                        condition for validating the file types using
                                        <code>fileTypeSettings</code> .
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row advanced_select2">
                                <div class="col-sm-8">
                                    <label class="control-label txt_media">
                                        Select File
                                    </label>
                                    <input id="input-42" type="file" class="file-loading">
                                </div>
                                <div class="col-sm-4">
                                    <div class="alert alert-info small m-t-10">
                                        Allow only specific( jpg, gif, png, txt ) file extensions.
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row advanced_select2">
                                <div class="col-sm-8">
                                    <label class="control-label txt_media">
                                        Select File
                                    </label>
                                    <input id="input-43" type="file" class="file-loading">
                                    <div id="errorBlock43" class="help-block"></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="alert alert-info small m-t-10">
                                        Disable preview and customize your own error container and messages.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--main content-->
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
            <!--main content ends-->
            <div class="background-overlay"></div>
        </section>
    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script src="vendors/iCheck/js/icheck.js"></script>
    <script src="vendors/bootstrap-fileinput/js/fileinput.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrap-fileinput/js/theme.js" type="text/javascript"></script>
    <script src="js/custom_js/form_elements.js"></script>
    <!-- end of page level js -->
@stop
