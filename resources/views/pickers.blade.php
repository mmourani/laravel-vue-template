@extends('layouts.default')
@section('title')
    Pickers | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="css/clockface.css" rel="stylesheet" type="text/css"/>
    <link href="vendors/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="vendors/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css"/>
    <link href="vendors/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css"/>
    <link href="vendors/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="vendors/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/pickers.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <section class="content-header">
            <!--section starts-->
            <h1>Pickers</h1>
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
                    Pickers
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-paint-roller"></i> Color Picker
                            </h3>
                            <span class="float-right">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <!-- Color Picker -->
                                <div class="form-group">
                                    <label>Default</label>
                                    <input type="text" class="form-control my-colorpicker1" id="cp1">
                                </div>
                                <!-- /.form group -->
                                <!-- Color Picker -->
                                <div class="form-group">
                                    <label>
                                        Color picker with RGBA notation
                                    </label>
                                    <input type="text" class="form-control my-colorpicker2" id="cp2"
                                           data-color-format="rgba">
                                </div>
                                <!-- /.form group -->
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <!--time picker-->
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-pin"></i> Bootstrap TouchSpin
                            </h3>
                            <span class="float-right">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>

                                </span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <!-- Touch spin -->
                                <div class="form-group">
                                    <label>Postfix</label>
                                    <input id="demo1" type="text" value="55" name="demo1" class="form-control">
                                </div>
                                <!-- /.form group -->
                                <!-- Touch spin -->
                                <div class="form-group">
                                    <label>Prefix</label>
                                    <div class="form-group">
                                        <input id="demo2" type="text" value="0" name="demo2" class="form-control">
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <!-- Touch spin -->
                                <div class="form-group">
                                    <label>
                                        Vertical button alignment
                                    </label>
                                    <div class="form-group">
                                        <input id="demo_vertical" type="text" value="" name="demo_vertical">
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <!-- Touch spin -->
                                <div class="form-group">
                                    <label>
                                        Vertical buttons with custom icons
                                    </label>
                                    <div class="form-group">
                                        <input id="demo_vertical2" type="text" value="" name="demo_vertical2">
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <!-- Touch spin -->
                                <div class="form-group">
                                    <label>
                                        Init with empty value
                                    </label>
                                    <div class="form-group">
                                        <input id="demo3" type="text" value="" name="demo3">
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <!-- Touch spin -->
                                <div class="form-group">
                                    <label>
                                        Value attribute is not set (applying settings.initval)
                                    </label>
                                    <div class="form-group">
                                        <input id="demo3_21" type="text" value="" name="demo3_21">
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <!-- Touch spin -->
                                <div class="form-group">
                                    <label>
                                        Button postfix (small)
                                    </label>
                                    <div class="form-group">
                                        <input id="demo4" type="text" value="" name="demo4" class="input-sm">
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <!-- Touch spin -->
                                <div class="form-group">
                                    <label>
                                        Button postfix (large)
                                    </label>
                                    <div class="form-group">
                                        <input id="demo4_2" type="text" value="" name="demo4_2"
                                               class="form-control input-lg">
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <!-- Touch spin -->
                                <div class="form-group">
                                    <label>
                                        Button group
                                    </label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input id="demo5" type="text" class="form-control" name="demo5" value="50">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <!-- Touch spin -->
                                <!-- /.form group -->
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <!--time picker ends-->
                    <!--Switch-->
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-infinite"></i> Bootstrap Switch
                            </h3>
                            <span class="float-right">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>

                                </span>
                        </div>
                        <div class="card-body">
                            <!--switch -->
                            <div class="form-group">
                                <label>
                                    Default Sizes
                                </label>
                                <div class="form-group">
                                    <input type="checkbox" name="my-checkbox" data-size="mini" checked id="switchsize">
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default changesize">mini</button>
                                    <button type="button" class="btn btn-default changesize">small</button>
                                    <button type="button" class="btn btn-default changesize">normal</button>
                                    <button type="button" class="btn btn-default changesize">large</button>
                                </div>
                            </div>
                            <!-- /.form group -->
                            <!--toggle Indeterminate-->
                            <div class="form-group">
                                <label>
                                    Indeterminate State
                                </label>
                                <div class="form-group">
                                    <input type="checkbox" name="my-checkbox" data-size="large" checked
                                           id="indeterminate">
                                </div>
                                <button type="button" class="btn btn-default changeindeterminate">Indeterminate</button>
                            </div>
                            <!--end-->
                            <!--On And Off Text-->
                            <div class="form-group">
                                <label>
                                    Custom On And Off Text
                                </label>
                                <div class="form-group">
                                    <input type="checkbox" name="my-checkbox" data-size="large" checked id="onofftext">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <label class="sr-only">On Text</label>
                                                <input type="text" class="ontext form-control m-t-10" maxlength="5"
                                                       placeholder="On Text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="input-group">
                                                <label class="sr-only">Off Text</label>
                                                <input type="text" class="offtext form-control m-t-10" maxlength="5"
                                                       placeholder="Off Text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End-->
                            <!--switch -->
                            <div class="form-group">
                                <label>
                                    Color Switch
                                </label>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 m-t-10">
                                            <input type="checkbox" name="my-checkbox" checked data-on-color="primary"
                                                   data-off-color="info">
                                        </div>
                                        <div class="col-md-4 col-sm-4 m-t-10">
                                            <input type="checkbox" name="my-checkbox" checked data-on-color="success"
                                                   data-off-color="warning">
                                        </div>
                                        <div class="col-md-4 col-sm-4 m-t-10">
                                            <input type="checkbox" name="my-checkbox" checked data-on-color="warning"
                                                   data-off-color="danger">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.form group -->
                            <!--switch -->
                            <div class="form-group">
                                <label>Without Animation</label>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 m-t-10">
                                            <input type="checkbox" name="my-checkbox" data-on-color="info"
                                                   data-off-color="primary" data-animate>
                                        </div>
                                        <div class="col-md-4 col-sm-4 m-t-10">
                                            <input type="checkbox" name="my-checkbox" checked data-on-color="danger"
                                                   data-off-color="warning" data-animate>
                                        </div>
                                        <div class="col-md-4 col-sm-4 m-t-10">
                                            <input type="checkbox" name="my-checkbox" checked data-on-color="warning"
                                                   data-off-color="success" data-animate>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.form group -->
                            <!--switch -->
                            <div class="form-group">
                                <label>
                                    Disabled / Readonly
                                </label>
                                <div class="form-group">
                                    <input type="checkbox" checked disabled name="my-checkbox"/>
                                    <input type="checkbox" disabled name="my-checkbox"/>
                                </div>
                            </div>
                            <!-- /.form group -->
                        </div>
                    </div>
                </div>
                <!--col-md-6 ends-->
                <div class="col-lg-6">
                    <div class="card set_media">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-alarm-clock"></i> Clock Face Picker
                            </h3>
                            <span class="float-right">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="t1" class="control-label">
                                    Default clock
                                </label>
                                <input id="t1" class="form-control input-small" value="2:30 PM" data-format="hh:mm A"
                                       type="text">
                            </div>
                            <div class="form-group">
                                <label for="t2" class="control-label">Button</label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-small" id="t2" value="14:30" readonly>
                                    <span class="input-group-btn">
                                            <button class="btn" type="button" id="toggle-btn">
                                                <i class="fa fa-fw fa-clock-o"></i>
                                            </button>
                                        </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="t2" class="control-label">
                                    Clock picker
                                </label>
                                <div class="input-group form-inline">
                                    <input type="text" class="form-control" id="input-a" value="" data-default="20:48">
                                    <span class="input-group-btn">
                                        <button class="btn btn-info" type="button"
                                                id="button-a"> Pick your time</button>
                                      </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--date picker-->
                    <!--<div class="card mrgn_top">-->
                    <!--<div class="card-header">-->
                    <!--<h3 class="card-title">-->
                    <!--<i class="ti-calendar"></i> Date Picker-->
                    <!--</h3>-->
                    <!--<span class="float-right">-->
                    <!--<i class="fa fa-fw ti-angle-up clickable"></i>-->
                    <!--<i class="fa fa-fw ti-close removecard"></i>-->

                    <!--</span>-->
                    <!--</div>-->
                    <!--<div class="card-body">-->
                    <!--<div class="form-group">-->
                    <!--<label>Default:</label>-->
                    <!--<div class="input-group">-->
                    <!--<div class="input-group-addon">-->
                    <!--<i class="fa fa-laptop"></i>-->
                    <!--</div>-->
                    <!--<input type="text" class="form-control" id="datetime1"/>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; /.input group &ndash;&gt;-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--<label>Custom Format:</label>-->
                    <!--<div class="input-group">-->
                    <!--<div class="input-group-addon">-->
                    <!--<i class="fa fa-laptop"></i>-->
                    <!--</div>-->
                    <!--<input type="text" class="form-control" id="datetime2"/>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; /.input group &ndash;&gt;-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--<label>Custom View:</label>-->
                    <!--<div class="input-group">-->
                    <!--<div class="input-group-addon">-->
                    <!--<i class="fa fa-laptop"></i>-->
                    <!--</div>-->
                    <!--<input type="text" class="form-control" id="datetime3"/>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; /.input group &ndash;&gt;-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--<label>Min View:</label>-->
                    <!--<div class="input-group">-->
                    <!--<div class="input-group-addon">-->
                    <!--<i class="fa fa-laptop"></i>-->
                    <!--</div>-->
                    <!--<input type="text" class="form-control" id="datetime4"/>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; /.input group &ndash;&gt;-->
                    <!--</div>-->
                    <!--<label>Inline View:</label>-->
                    <!--<div id="datetime5"></div>-->
                    <!--&lt;!&ndash; /.input group &ndash;&gt;-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--multi select-->
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-check-box"></i> Multiselect
                            </h3>
                            <span class="float-right">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>

                                </span>
                        </div>
                        <div class="card-body dropdown_position">
                            <div class="row">
                                <div class="form-group col-md-5 col-sm-6 col-12">
                                    <label>
                                        Normal Select
                                    </label>
                                    <div class="input-group  col-md-8">
                                        <select class="multiselect" multiple="multiple">
                                            <option value="cheese">Cheese</option>
                                            <option value="tomatoes">Tomatoes</option>
                                            <option value="mozarella">Mozzarella</option>
                                            <option value="mushrooms">Mushrooms</option>
                                            <option value="pepperoni">Pepperoni</option>
                                            <option value="onions">Onions</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <div class="form-group col-md-5 col-sm-6 col-12">
                                    <label>
                                        Preselected
                                    </label>
                                    <div class="input-group  col-md-8">
                                        <select id="example2" multiple="multiple">
                                            <option value="cheese" selected>Cheese</option>
                                            <option value="tomatoes" selected>Tomatoes</option>
                                            <option value="mozarella">Mozzarella</option>
                                            <option value="mushrooms">Mushrooms</option>
                                            <option value="pepperoni">Pepperoni</option>
                                            <option value="onions">Onions</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.form group -->
                            <div class="row">
                                <div class="form-group col-md-5 col-sm-6 col-12">
                                    <label>Select All</label>
                                    <div class="input-group  col-md-8">
                                        <select id="example27" multiple="multiple">
                                            <option value="cheese">Cheese</option>
                                            <option value="tomatoes">Tomatoes</option>
                                            <option value="mozarella">Mozzarella</option>
                                            <option value="mushrooms">Mushrooms</option>
                                            <option value="pepperoni">Pepperoni</option>
                                            <option value="onions">Onions</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <div class="form-group col-md-5 col-sm-6 col-12">
                                    <label>
                                        Link Select
                                    </label>
                                    <div class="input-group  col-md-8">
                                        <div class="btn-group">
                                            <select id="example3" multiple="multiple">
                                                <option value="cheese">Cheese</option>
                                                <option value="tomatoes">Tomatoes</option>
                                                <option value="mozarella">Mozzarella</option>
                                                <option value="mushrooms">Mushrooms</option>
                                                <option value="pepperoni">Pepperoni</option>
                                                <option value="onions">Onions</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.form group -->
                            <div class="row">
                                <div class="form-group col-md-5 col-sm-6 col-12">
                                    <label>
                                        Group Label
                                    </label>
                                    <div class="input-group  col-md-8">
                                        <div class="btn-group">
                                            <select id="example19" multiple="multiple">
                                                <optgroup label="Mathematics">
                                                    <option value="analysis">Analysis</option>
                                                    <option value="algebra">
                                                        Linear Algebra
                                                    </option>
                                                    <option value="discrete">
                                                        Discrete Mathematics
                                                    </option>
                                                    <option value="numerical">
                                                        Numerical Analysis
                                                    </option>
                                                    <option value="probability">
                                                        Probability Theory
                                                    </option>
                                                </optgroup>
                                                <optgroup label="Computer Science">
                                                    <option value="programming">
                                                        Programming
                                                    </option>
                                                    <option value="automata">
                                                        Automata Theory
                                                    </option>
                                                    <option value="complexity">
                                                        Complexity Theory
                                                    </option>
                                                    <option value="software">
                                                        Software Engineering
                                                    </option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <div class="form-group col-md-5 col-sm-6 col-12">
                                    <label>Add-ons</label>
                                    <div class="input-group  col-md-8 addon_icon">
                                        <div class="input-group btn-group">
                                                <span class="input-group-addon list_addon"> <b
                                                            class="glyphicon glyphicon-list-alt"></b>
                                            </span>
                                            <select id="example6" multiple="multiple">
                                                <option value="cheese">Cheese</option>
                                                <option value="tomatoes">Tomatoes</option>
                                                <option value="mozarella">Mozzarella</option>
                                                <option value="mushrooms">Mushrooms</option>
                                                <option value="pepperoni">Pepperoni</option>
                                                <option value="onions">Onions</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.form group -->
                            <div class="row">
                                <div class="form-group col-md-5 col-sm-6 col-12">
                                    <label>On Change</label>
                                    <div class="input-group  col-md-8">
                                        <div class="btn-group">
                                            <select id="example9" multiple="multiple">
                                                <option value="cheese">Cheese</option>
                                                <option value="tomatoes">Tomatoes</option>
                                                <option value="mozarella">Mozzarella</option>
                                                <option value="mushrooms">Mushrooms</option>
                                                <option value="pepperoni">Pepperoni</option>
                                                <option value="onions">Onions</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <div class="form-group col-md-5 col-sm-6 col-12">
                                    <label>Disable</label>
                                    <div class="input-group  col-md-8">
                                        <div class="btn-group">
                                            <select id="example13" multiple="multiple">
                                                <option value="enabled1">Enabled 1</option>
                                                <option value="enabled2">Enabled 2</option>
                                                <option value="disabled2" disabled="disabled">Disabled 1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.form group -->
                            <div class="row">
                                <div class="form-group col-md-5 col-sm-6 col-12">
                                    <label>Select All</label>
                                    <div class="input-group col-md-8">
                                        <select id="example28" multiple="multiple"></select>
                                    </div>
                                    <div class="col-md-8 m-t-10 input-group">
                                        <button id="example28-values" class="btn btn-primary">Chosen</button>
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <div class="form-group col-md-5 col-sm-6 col-12">
                                    <label>
                                        Multiselect
                                    </label>
                                    <div class="input-group multi_block col-md-8">
                                        <select id="example35"  class="sub_active" multiple="multiple"  disabled>
                                            <option value="cheese">Cheese</option>
                                            <option value="tomatoes">Tomatoes</option>
                                            <option value="mozarella">Mozzarella</option>
                                            <option value="mushrooms">Mushrooms</option>
                                            <option value="pepperoni">Pepperoni</option>
                                            <option value="onions">Onions</option>
                                        </select></div>
                                    <div class="row">
                                        <div class="col-md-6 btn_inline">
                                            <button id="example35-enable" class="btn btn-default m-t-10">Enable
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                            <button id="example35-disable" class="btn btn-default m-t-10">Disable
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.form group -->
                    </div>
                </div>
                <!--col-md-6 ends-->
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
        <!--main content ends-->
        <!-- /.content -->
    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script src="vendors/moment/js/moment.min.js" type="text/javascript"></script>
    <script src="vendors/colorpicker/js/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <script src="vendors/clockpicker/js/bootstrap-clockpicker.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrap-multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>
    <script src="js/clockface.js" type="text/javascript"></script>
    <script src="vendors/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="vendors/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="js/toolbar/js/jquery.toolbar.min.js"></script>
    <script src="js/custom_js/pickers.js" type="text/javascript"></script>
    <!-- end of page level js -->
@stop
