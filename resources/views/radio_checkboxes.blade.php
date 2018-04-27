@extends('layouts.default')
@section('title')
    Radio and Checkbox | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="css/prettycheckable/css/prettyCheckable.css" rel="stylesheet" type="text/css"/>
    <!-- labelauty -->
    <link href="vendors/jquerylabel/css/jquery-labelauty.css" rel="stylesheet" type="text/css"/>
    <!--select css-->
    <link href="vendors/select2/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="vendors/select2/css/select2-bootstrap.css"/>
    <!--clock face css-->
    <link href="vendors/iCheck/css/all.css" rel="stylesheet"/>
    <link href="vendors/bootstrap-fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="vendors/awesomebootstrapcheckbox/css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" type="text/css" href="css/custom_css/radio_checkbox.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Radio and Checkbox
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
                    Radio and Checkbox
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-arrow-circle-down"></i> iCheck - Checkbox Inputs
                            </h3>
                            <span class="float-right txt_font">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" class="square-blue" checked/>
                                    </label>
                                    <label>
                                        <input type="checkbox" class="square-blue"/>
                                    </label>
                                    <label>
                                        <input type="checkbox" class="square-blue" disabled/>
                                    </label>
                                    <label class="m-l-10">
                                        Square blue skin checkbox
                                    </label>
                                </div>
                                <!-- checkbox -->
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" class="flat-red" checked/>
                                    </label>
                                    <label>
                                        <input type="checkbox" class="flat-red"/>
                                    </label>
                                    <label>
                                        <input type="checkbox" class="flat-red" disabled/>
                                    </label>
                                    <label class="m-l-10">
                                        Flat red skin checkbox
                                    </label>
                                </div>
                                <!-- checkbox -->
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" class="minimal" checked/>
                                    </label>
                                    <label>
                                        <input type="checkbox" class="minimal"/>
                                    </label>
                                    <label>
                                        <input type="checkbox" class="minimal" disabled/>
                                    </label>
                                    <label class="m-l-10">
                                        Minimal skin checkbox
                                    </label>
                                </div>
                                <!-- Minimal red style -->
                                <!-- checkbox -->
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" class="minimal-red" checked/>
                                    </label>
                                    <label>
                                        <input type="checkbox" class="minimal-red"/>
                                    </label>
                                    <label>
                                        <input type="checkbox" class="minimal-red" disabled/>
                                    </label>
                                    <label class="m-l-10">
                                        Minimal red skin checkbox
                                    </label>
                                </div>
                                <!-- checkbox -->
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" class="minimal-green" checked/>
                                    </label>
                                    <label>
                                        <input type="checkbox" class="minimal-green"/>
                                    </label>
                                    <label>
                                        <input type="checkbox" class="minimal-green" disabled/>
                                    </label>
                                    <label class="m-l-10">
                                        Minimal green skin checkbox
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card set_media">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-basketball"></i> iCheck - Radio Inputs
                            </h3>
                            <span class="float-right txt_font">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <!-- radio -->
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="optionsRadios" value="option1" class="square-blue"
                                           checked>
                                </label>
                                <label>
                                    <input type="radio" name="optionsRadios" value="option1" class="square-blue">
                                </label>
                                <label>
                                    <input type="radio" name="optionsRadios" value="option1" class="square-blue"
                                           disabled/>
                                </label>
                                <label class="m-l-10">
                                    Square blue skin radio
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="r3" class="flat-red" checked/>
                                </label>
                                <label>
                                    <input type="radio" name="r3" class="flat-red"/>
                                </label>
                                <label>
                                    <input type="radio" name="r3" class="flat-red" disabled/>
                                </label>
                                <label class="m-l-10">
                                    Flat red skin radio
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="r1" class="minimal" checked/>
                                </label>
                                <label>
                                    <input type="radio" name="r1" class="minimal"/>
                                </label>
                                <label>
                                    <input type="radio" name="r1" class="minimal" disabled/>
                                </label>
                                <label class="m-l-10">
                                    Minimal skin radio
                                </label>
                            </div>
                            <!-- radio -->
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="r2" class="minimal-red" checked/>
                                </label>
                                <label>
                                    <input type="radio" name="r2" class="minimal-red"/>
                                </label>
                                <label>
                                    <input type="radio" name="r2" class="minimal-red" disabled/>
                                </label>
                                <label class="m-l-10">
                                    Minimal red skin radio
                                </label>
                            </div>
                            <!-- radio -->
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="r4" class="minimal-green" checked/>
                                </label>
                                <label>
                                    <input type="radio" name="r4" class="minimal-green"/>
                                </label>
                                <label>
                                    <input type="radio" name="r4" class="minimal-green" disabled/>
                                </label>
                                <label class="m-l-10">
                                    Minimal green skin radio
                                </label>
                            </div>
                            <!-- radio -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-check-box"></i> Multiple Select with Search Option
                            </h3>
                            <span class="float-right txt_font">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body mult_select">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <input type="search" class="form-control" id="search"
                                                   placeholder="Search your options..">
                                        </div>
                                    </div>
                                </div></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="searchable-container row">
                                            <div class="items col-12 col-sm-4 col-md-4 col-lg-4">
                                                <div class="info-block block-info clearfix">
                                                    <div class="square-box pull-left">
                                                        <span class="fa fa-tags"></span>
                                                    </div>
                                                    <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                        <label class="btn btn-default">
                                                            <input type="checkbox" name="var_id[]"
                                                                   value="" class="check_box">
                                                            <i class="fa fa-check opc_icn"></i><br>
                                                            <span>Coffee</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items col-12 col-sm-4 col-md-4 col-lg-4">
                                                <div class="info-block block-info clearfix">
                                                    <div class="square-box pull-left">
                                                        <span class="fa fa-tags"></span>
                                                    </div>
                                                    <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                        <label class="btn btn-default">
                                                            <input type="checkbox" name="var_id[]"
                                                                   value="" class="check_box">
                                                            <i class="fa fa-check opc_icn"></i><br>
                                                            <span>Tea</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items col-12 col-sm-4 col-md-4 col-lg-4">
                                                <div class="info-block block-info clearfix">
                                                    <div class="square-box pull-left">
                                                        <span class="fa fa-tags"></span>
                                                    </div>
                                                    <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                        <label class="btn btn-default">
                                                            <input type="checkbox" name="var_id[]"
                                                                   value="" class="check_box">
                                                            <i class="fa fa-check opc_icn"></i><br>
                                                            <span>Cool Drink</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="searchable-container row">
                                            <div class="items col-12 col-sm-4 col-md-4 col-lg-4">
                                                <div class="info-block block-info clearfix">
                                                    <div class="square-box pull-left">
                                                        <span class="fa fa-tags"></span>
                                                    </div>
                                                    <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                        <label class="btn btn-default ">
                                                            <input type="checkbox" name="var_id[]"
                                                                   value="" class="check_box">
                                                            <i class="fa fa-check opc_icn"></i><br>
                                                            <span>Burger</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items col-12 col-sm-4 col-md-4 col-lg-4">
                                                <div class="info-block block-info clearfix">
                                                    <div class="square-box pull-left">
                                                        <i class="fa fa-tags"></i>
                                                    </div>
                                                    <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                        <label class="btn btn-default">
                                                            <input type="checkbox" name="var_id[]"
                                                                   value="" class="check_box">
                                                            <i class="fa fa-check opc_icn"></i><br>
                                                            <span>Pizza</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items col-12 col-sm-4 col-md-4 col-lg-4">
                                                <div class="info-block block-info clearfix">
                                                    <div class="square-box pull-left">
                                                        <span class="fa fa-tags"></span>
                                                    </div>
                                                    <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                        <label class="btn btn-default opc_act">
                                                            <input type="checkbox" name="var_id[]"
                                                                   value="" class="check_box">
                                                            <i class="fa fa-check opc_icn"></i><br>
                                                            <span>Cookies</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
            <div class="row mrgn_top">
                <div class="col-lg-6">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-check-box"></i> Labelauty Radio and Checkboxes
                            </h3>
                            <span class="float-right txt_font">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body" id="lby-content">
                            <div class="row" id="lby-demo">

                                <div class="col-lg-6 col-md-12 col-sm-6">
                                    <h4 class="h4pnl_font">Labeled Checkboxes</h4>
                                    <input class="to-labelauty synch-icon1" data-labelauty="Unselected|Australia"
                                           type="checkbox" checked/>
                                    <input class="to-labelauty terms-icon" type="checkbox"
                                           data-labelauty="Unselected|Selected"/>
                                    <input class="to-labelauty synch-icon" type="checkbox"
                                           data-labelauty="I am disabled!" disabled/>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-6">
                                    <h4 class="h4pnl_font">Non-labeled Check</h4>
                                    <input class="to-labelauty-icon check-icon" type="checkbox" checked/>
                                    <input class="to-labelauty-icon check-icon" type="checkbox"/>
                                    <input class="to-labelauty-icon check-icon" type="checkbox" disabled checked/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-6">
                                    <h4 class="h4pnl_font">Labeled Radio Buttons</h4>
                                    <input class="to-labelauty synch-icon2" type="radio" name="rd2"
                                           data-labelauty="Unselected|USA"/>
                                    <input class="to-labelauty terms-icon" type="radio" name="rd2"
                                           data-labelauty="Unselected|Selected" checked/>
                                    <input class="to-labelauty synch-icon" type="radio" name="rd3" disabled
                                           checked/>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-6">
                                    <h4 class="h4pnl_font">Non-labeled Radio</h4>
                                    <input class="to-labelauty-icon" type="radio" name="rd4" checked/>
                                    <input class="to-labelauty-icon" type="radio" name="rd4"/>
                                    <input class="to-labelauty-icon" type="radio" name="rd3" disabled checked/>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card set_media">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-check"></i> jQuery prettyCheckable
                            </h3>
                            <span class="float-right txt_font">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Test1">Right positioned label</label>
                                <input type="checkbox" class="test1" value="1" id="Test1" name="Test1" checked/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" class="TestDisabled" value="3" id="TestDisabled"
                                       name="TestDisabled" disabled data-label='Disabled Checkbox'>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" class="test2" value="2" id="Test2" name="Test2"
                                       data-label="Left positioned label" data-labelPosition="left"/>
                            </div>
                            <div class="form-group">
                                <label class="test_radio">Radios! </label>
                                <input type="radio" class="test3" value="1" id="Test3_0" name="Test3" data-label="Yes"
                                       checked data-customclass="margin-right"/>
                                <input type="radio" class="test4" value="2" id="Test3_1" name="Test3" data-label="No"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mrgn_top">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-arrow-circle-up"></i> Awesome Radio &amp; Checkbox
                            </h3>
                            <span class="float-right txt_font">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 awesomeradio_grid_sep">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="h4pnl_font">Checkboxes</h4>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-6 marginLeft">
                                                            <div class="checkbox checkbox-default">
                                                                <input id="checkbox1" class="styled styled1" type="checkbox">
                                                                <label for="checkbox1">
                                                                    &nbsp;Default
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-6 marginLeft">
                                                            <div class="checkbox checkbox-primary">
                                                                <input id="checkbox2" class="styled styled1" type="checkbox">
                                                                <label for="checkbox2" class="marginTop">
                                                                    &nbsp;Primary
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-6 marginLeft">
                                                            <div class="checkbox checkbox-success">
                                                                <input id="checkbox3" class="styled styled1" type="checkbox">
                                                                <label for="checkbox3" class="marginTop">
                                                                    &nbsp;Success
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-6 marginLeft">
                                                            <div class="checkbox checkbox-info">
                                                                <input id="checkbox4" class="styled styled1" type="checkbox">
                                                                <label for="checkbox4">
                                                                    &nbsp;Info
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-6 marginLeft">
                                                            <div class="checkbox checkbox-warning">
                                                                <input id="checkbox5" type="checkbox" class="styled styled1">
                                                                <label for="checkbox5" class="marginTop">
                                                                    &nbsp;Warning
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-6 marginLeft">
                                                            <div class="checkbox checkbox-danger">
                                                                <input id="checkbox6" type="checkbox" class="styled styled1">
                                                                <label for="checkbox6" class="marginTop">
                                                                    &nbsp;Danger
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></div></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="h4pnl_font">Inline checkboxes</h4>
                                                <div class="row">
                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="checkbox checkbox-inline">
                                                            <input type="checkbox" class="styled" id="inlineCheckbox1"
                                                                   value="option1">
                                                            <label for="inlineCheckbox1"> &nbsp;Inline One </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="checkbox checkbox-inline inline_two">
                                                            <input type="checkbox" class="styled" id="inlineCheckbox2"
                                                                   value="option1">
                                                            <label for="inlineCheckbox2"> &nbsp;Inline Two </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="checkbox checkbox-inline inline_three">
                                                            <input type="checkbox" class="styled" id="inlineCheckbox3"
                                                                   value="option1">
                                                            <label for="inlineCheckbox3"> &nbsp;Inline Three </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <h4 class="h4pnl_font">Circled checkboxes</h4>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="checkbox checkbox-circle">
                                                            <input id="checkbox7" class="styled" type="checkbox">
                                                            <label for="checkbox7">
                                                                &nbsp;Simply Rounded
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="checkbox checkbox-info checkbox-circle">
                                                            <input id="checkbox8" class="styled styled1" type="checkbox">
                                                            <label for="checkbox8">
                                                                &nbsp;Me too
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="h4pnl_font">
                                                    Disabled
                                                </h4>
                                                <div class="row">
                                                    <div class="col-xl-4 col-md-6 col-sm-6">
                                                        <div class="checkbox">
                                                            <input class="styled" id="checkbox9" type="checkbox"
                                                                   disabled>
                                                            <label for="checkbox9">
                                                                &nbsp;Can't check
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-sm-6">
                                                        <div class="checkbox checkbox-success">
                                                            <input class="styled styled" id="checkbox10" type="checkbox"
                                                                   disabled checked>
                                                            <label for="checkbox10">
                                                                &nbsp;This too
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-sm-6">
                                                        <div class="checkbox checkbox-warning checkbox-circle">
                                                            <input class="styled" id="checkbox11" type="checkbox"
                                                                   disabled checked>
                                                            <label for="checkbox11">
                                                                &nbsp;And this
                                                            </label>
                                                        </div>
                                                    </div></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="h4pnl_font">Checkboxes with indeterminate state</h4>
                                                <div class="col-md-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="indeterminateCheckbox" class="styled custom-control-input" type="checkbox" onclick="changeState(this)">
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <!--<div class="col-md-12">-->
                                                <!--<label class="custom-control custom-checkbox">-->
                                                <!--<input type="checkbox" class="custom-control-input">-->
                                                <!--<span class="custom-control-indicator"></span>-->
                                                <!--</label>-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="h4pnl_font">Radios</h4>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="radio">
                                                            <input type="radio" name="radio1" id="radio1"
                                                                   value="option1">
                                                            <label for="radio1">
                                                                &nbsp;Small
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <input type="radio" name="radio1" id="radio2"
                                                                   value="option2">
                                                            <label for="radio2">
                                                                &nbsp;Big
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="radio radio-danger">
                                                            <input type="radio" name="radio2" id="radio3"
                                                                   value="option1">
                                                            <label for="radio3">
                                                                &nbsp;Next
                                                            </label>
                                                        </div>
                                                        <div class="radio radio-danger">
                                                            <input type="radio" name="radio2" id="radio4"
                                                                   value="option2">
                                                            <label for="radio4">
                                                                &nbsp;One
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="h4pnl_font">
                                                    Disabled state
                                                </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="radio radio-danger">
                                                            <input type="radio" name="radio3" id="radio5"
                                                                   value="option1" disabled>
                                                            <label for="radio5">
                                                                &nbsp;Next
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="radio">
                                                            <input type="radio" name="radio3" id="radio6"
                                                                   value="option2" checked disabled>
                                                            <label for="radio6">
                                                                &nbsp;One
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="h4pnl_font">Inline radios</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="radio radio-info radio-inline m-l-18">
                                                            <input type="radio" id="inlineRadio1" value="option1"
                                                                   name="radioInline">
                                                            <label for="inlineRadio1"> &nbsp;Inline One </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="radio radio-inline m-l-18">
                                                            <input type="radio" id="inlineRadio2" value="option2"
                                                                   name="radioInline">
                                                            <label for="inlineRadio2"> &nbsp;Inline Two </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                        <div class="row radios">
                                            <div class="col-md-12">
                                                <h4 class="h4pnl_font">
                                                    Radio As Checkboxes
                                                </h4>
                                                <div class="checkbox  checkbox-inline checkbox-default pdng_left">
                                                    <input type="radio" name="radio4" id="radio7" value="option1"
                                                           checked>
                                                    <label for="radio7">
                                                        &nbsp;Default
                                                    </label>
                                                </div>
                                                <div class="checkbox  checkbox-inline checkbox-success pdng_left">
                                                    <input type="radio" name="radio4" id="radio8" value="option2">
                                                    <label for="radio8">
                                                        &nbsp;<span>Success</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox  checkbox-inline checkbox-danger pdng_left">
                                                    <input type="radio" name="radio4" id="radio9" value="option3">
                                                    <label for="radio9">
                                                        &nbsp;<span>Danger</span>
                                                    </label>
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
        <!-- /.content -->
    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script src="js/prettycheckable/js/prettyCheckable.min.js"></script>
    <!--- labelauty -->
    <script src="vendors/jquerylabel/js/jquery-labelauty.js"></script>
    <script src="vendors/iCheck/js/icheck.js"></script>
    <script src="js/custom_js/radio_checkbox.js"></script>
    <!-- end of page level js -->
@stop



