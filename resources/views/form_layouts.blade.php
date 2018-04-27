@extends('layouts.default')
@section('title')
    Realtime Forms | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="vendors/iCheck/css/all.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/form_layouts.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->

    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Form Layouts
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
                <li>
                    Form Layouts
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header tab-list">
                            <ul class="nav nav-tabs ">
                                <li class="nav-item">
                                    <a href="#tab1" data-toggle="tab" class="nav-link active">
                                        Form Actions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab2" data-toggle="tab" class="nav-link">
                                        2 Columns
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab3" data-toggle="tab" class="nav-link">
                                        Form Striped
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab4" data-toggle="tab" class="nav-link">
                                        More Examples
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div id="tab1" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="card ">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Form Actions On Top
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                                    <i class="fa fa-fw ti-close removecard"></i>
                                                </span>
                                                </div>
                                                <div class="card-body">
                                                    <form action="#" class="form-horizontal">
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-sm-offset-3 col-sm-9 ml-auto">
                                                                    <button type="button" class="btn btn-primary">Submit
                                                                    </button>
                                                                    &nbsp;
                                                                    <button type="button" class="btn btn-danger">Cancel
                                                                    </button>
                                                                    &nbsp;
                                                                    <button type="reset"
                                                                            class="btn btn-default bttn_reset butn buttn">
                                                                        Reset
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-body">
                                                            <div class="form-group m-t-10 row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputUsername1"
                                                                           class="form-control-label">
                                                                        Username
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-user"></i>
                                                                    </span>
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Username"
                                                                               id="inputUsername1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputEmail1" class="form-control-label">
                                                                        Email
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa ti-email"></i>
                                                                    </span>
                                                                        <input type="text" id="inputEmail1" placeholder="Email Address"
                                                                               class="form-control"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputpass1" class="form-control-label">
                                                                        Password
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-key"></i>
                                                                    </span>
                                                                        <input type="password" placeholder="Password"
                                                                               id="inputpass1" class="form-control"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputnumber1"
                                                                           class="form-control-label">
                                                                        Phone Number
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-mobile"></i>
                                                                    </span>
                                                                        <input type="text" placeholder="Phone Number"
                                                                               id="inputnumber1" class="form-control"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputAddress1" class="form-control-label">
                                                                        Address
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-pencil"></i>
                                                                    </span>
                                                                        <input type="text" class="form-control"
                                                                               id="inputAddress1" placeholder="Address">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputContent1"
                                                                           class="form-control-label">Message</label></div>
                                                                <div class="col-sm-9">
                                                                <textarea id="inputContent1" rows="3"
                                                                          name="inputContent1"
                                                                          class="form-control resize_vertical"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="card top_response">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Form Actions On Bottom
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                                    <i class="fa fa-fw ti-close removecard"></i>
                                                </span>
                                                </div>
                                                <div class="card-body">
                                                    <form action="#" class="form-horizontal">
                                                        <div class="form-body">
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputUsername2"
                                                                           class="form-control-label">
                                                                        Username
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-user"></i>
                                                                    </span>
                                                                        <input type="text" class="form-control"
                                                                               id="inputUsername2"
                                                                               placeholder="Username">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputEmail2" class="form-control-label">
                                                                        Email
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa ti-email"></i>
                                                                    </span>
                                                                        <input type="text" id="inputEmail2" placeholder="Email Address"
                                                                               class="form-control"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="keypassword" class="form-control-label">
                                                                        Password
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-key"></i>
                                                                    </span>
                                                                        <input type="password" placeholder="Password"
                                                                               id="keypassword" class="form-control"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputnumber2"
                                                                           class="form-control-label">
                                                                        Phone Number
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-mobile"></i>
                                                                    </span>
                                                                        <input type="text" id="inputnumber2"
                                                                               placeholder="Phone Number"
                                                                               class="form-control"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputAddress2"
                                                                           class="form-control-label">
                                                                        Address
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-pencil"></i>
                                                                    </span>
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Address" id="inputAddress2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputContent2"
                                                                           class="form-control-label">Message</label></div>
                                                                <div class="col-sm-9">
                                                                <textarea id="inputContent2" rows="3"
                                                                          class="form-control resize_vertical"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-sm-offset-3 col-sm-9 ml-auto">
                                                                    <button type="button" class="btn btn-primary">Submit
                                                                    </button>
                                                                    &nbsp;
                                                                    <button type="button" class="btn btn-danger">Cancel
                                                                    </button>
                                                                    &nbsp;
                                                                    <button type="reset"
                                                                            class="btn btn-default bttn_reset butn buttn">
                                                                        Reset
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="card mrgn_top">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Form Actions On Top & Bottom
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                                    <i class="fa fa-fw ti-close removecard"></i>
                                                </span>
                                                </div>
                                                <div class="card-body">
                                                    <form action="#" class="form-horizontal">
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-sm-12 text-center form_act">
                                                                    <button type="button" class="btn btn-primary">Submit
                                                                    </button>
                                                                    &nbsp;
                                                                    <button type="button" class="btn btn-danger">Cancel
                                                                    </button>
                                                                    &nbsp;
                                                                    <button type="reset"
                                                                            class="btn btn-default bttn_reset butn">
                                                                        Reset
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-body">
                                                            <div class="form-group m-t-10 row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputUsername3"
                                                                           class="form-control-label">
                                                                        Username
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-user"></i>
                                                                    </span>
                                                                        <input type="text" id="inputUsername3"
                                                                               class="form-control"
                                                                               placeholder="Username">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="Email" class="form-control-label">
                                                                        Email
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa ti-email"></i>
                                                                    </span>
                                                                        <input type="text" placeholder="Email Address"
                                                                               class="form-control" id="Email"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="fapassword" class="form-control-label">
                                                                        Password
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-key"></i>
                                                                    </span>
                                                                        <input type="password" placeholder="Password"
                                                                               id="fapassword" class="form-control"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputnumber3"
                                                                           class="form-control-label">
                                                                        Phone Number
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-mobile"></i>
                                                                    </span>
                                                                        <input type="text" id="inputnumber3"
                                                                               placeholder="Phone Number"
                                                                               class="form-control"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputAddress3"
                                                                           class="form-control-label">
                                                                        Address
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-pencil"></i>
                                                                    </span>
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Address" id="inputAddress3">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label for="inputContent3"
                                                                           class="form-control-label">Message</label></div>
                                                                <div class="col-sm-9">
                                                                <textarea id="inputContent3" rows="3"
                                                                          class="form-control resize_vertical"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-sm-12 text-center form_act">
                                                                    <button type="button" class="btn btn-primary">Submit
                                                                    </button>
                                                                    &nbsp;
                                                                    <button type="button" class="btn btn-danger">Cancel
                                                                    </button>
                                                                    &nbsp;
                                                                    <button type="reset"
                                                                            class="btn btn-default bttn_reset butn">
                                                                        Reset
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="card mrgn_top">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Left Aligned
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                                    <i class="fa fa-fw ti-close removecard"></i>
                                                </span>
                                                </div>
                                                <div class="card-body">
                                                    <form action="#">
                                                        <div>
                                                            <button type="button" class="btn btn-primary">Submit
                                                            </button>
                                                            &nbsp;
                                                            <button type="button" class="btn btn-danger">Cancel</button>
                                                            &nbsp;
                                                            <button type="reset" class="btn btn-default bttn_reset butn">
                                                                Reset
                                                            </button>
                                                        </div>
                                                        <div class="form-body">
                                                            <div class="form-group m-t-10">
                                                                <label for="inputUsername4" class="control-label">
                                                                    Username
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <i class="fa fa-fw ti-user"></i>
                                                                </span>
                                                                    <input type="text" id="inputUsername4"
                                                                           class="form-control"
                                                                           placeholder="Username">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputEmail5" class="control-label">
                                                                    Email
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <i class="fa ti-email"></i>
                                                                </span>
                                                                    <input type="text" id="inputEmail5" placeholder="Email Address"
                                                                           class="form-control"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="validpassword" class="control-label">
                                                                    Password
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <i class="fa fa-fw ti-key"></i>
                                                                </span>
                                                                    <input type="password" placeholder="Password"
                                                                           id="validpassword" class="form-control"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputnumber4" class="control-label">
                                                                    Phone Number
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <i class="fa fa-fw ti-mobile"></i>
                                                                </span>
                                                                    <input type="text" id="inputnumber4"
                                                                           placeholder="Phone Number"
                                                                           class="form-control"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputAddress" class="control-label">
                                                                    Address
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <i class="fa fa-fw ti-pencil"></i>
                                                                </span>
                                                                    <input type="text" class="form-control"
                                                                           placeholder="Address" id="inputAddress">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mbn">
                                                                <label for="inputContent4"
                                                                       class="control-label">Message</label>
                                                                <textarea id="inputContent4" rows="3"
                                                                          class="form-control resize_vertical"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions">
                                                            <button type="button" class="btn btn-primary">Submit
                                                            </button>
                                                            &nbsp;
                                                            <button type="button" class="btn btn-danger">Cancel</button>
                                                            &nbsp;
                                                            <button type="reset" class="btn btn-default bttn_reset butn">
                                                                Reset
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="card mrgn_top">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Right Aligned
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                                    <i class="fa fa-fw ti-close removecard"></i>
                                                </span>
                                                </div>
                                                <div class="card-body">
                                                    <form action="#" class="right_aligned">
                                                        <div class="text-right ">
                                                            <button type="button" class="btn btn-primary">Submit
                                                            </button>
                                                            <button type="button" class="btn btn-danger">Cancel</button>
                                                            <button type="reset" class="btn btn-default bttn_reset butn">
                                                                Reset
                                                            </button>
                                                        </div>
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label for="inputUsername5" class="control-label">
                                                                    Username
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <i class="fa fa-fw ti-user"></i>
                                                                </span>
                                                                    <input type="text" id="inputUsername5"
                                                                           class="form-control"
                                                                           placeholder="Username">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputEmail_right" class="control-label">
                                                                    Email
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <i class="fa ti-email"></i>
                                                                </span>
                                                                    <input type="text" id="inputEmail_right" placeholder="Email Address"
                                                                           class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="uniquepassword" class="control-label">
                                                                    Password
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <i class="fa fa-fw ti-key"></i>
                                                                </span>
                                                                    <input type="password" placeholder="Password"
                                                                           id="uniquepassword" class="form-control"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputnumber5" class="control-label">
                                                                    Phone Number
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <i class="fa fa-fw ti-mobile"></i>
                                                                </span>
                                                                    <input type="text" id="inputnumber5"
                                                                           placeholder="Phone Number"
                                                                           class="form-control"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputAddress_right" class="control-label">
                                                                    Address
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <i class="fa fa-fw ti-pencil"></i>
                                                                </span>
                                                                    <input id="inputAddress_right" type="text" class="form-control"
                                                                           placeholder="Address">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mbn">
                                                                <label for="inputContent"
                                                                       class="control-label">Message</label>
                                                                <textarea id="inputContent" rows="3"
                                                                          class="form-control resize_vertical"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions text-right ">
                                                            <button type="button" class="btn btn-primary">Submit
                                                            </button>
                                                            <button type="button" class="btn btn-danger">Cancel</button>
                                                            <button type="reset" class="btn btn-default bttn_reset butn">
                                                                Reset
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab2" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card ">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Form 2 Columns Default
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                                    <i class="fa fa-fw ti-close removecard"></i>
                                                </span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <form>
                                                                <div class="form-group row has-success">
                                                                    <div class="col-sm-3 text-right txt_media">
                                                                        <label class="form-control-label text-success"
                                                                               for="inputSuccess1">First
                                                                            Name
                                                                        </label></div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" id="inputSuccess1"
                                                                               class="form-control form-control-success brdr_success"
                                                                               placeholder="Input with success">
                                                                        <span class="form-text text-success">
                                                                        First name is too small
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3 text-right txt_media">
                                                                        <label class="form-control-label text-warning"
                                                                               for="inputWarning1">Password</label></div>
                                                                    <div class="col-sm-9">
                                                                        <input type="password" id="inputWarning1"
                                                                               class="form-control brdr_warn"
                                                                               placeholder="Input with warning">
                                                                        <span class="form-text text-warning">
                                                                        Password strength: Weak
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3 text-right text-danger txt_media">
                                                                        <label class="form-control-label"
                                                                               for="inputError1">Email</label></div>
                                                                    <div class="col-sm-9">
                                                                        <input type="email" id="inputError1"
                                                                               class="form-control brdr_danger"
                                                                               placeholder="Input with error">
                                                                        <span class="form-text text-danger">
                                                                        Please enter a valid email address
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <form >
                                                                <div class="form-group row has-success has-feedback">
                                                                    <div class="col-sm-3 text-right text-success txt_media">
                                                                        <label class="form-control-label"
                                                                               for="inputSuccess2">
                                                                            Second Name
                                                                        </label></div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" id="inputSuccess2"
                                                                               class="form-control brdr_success"
                                                                               placeholder="Input with success">
                                                                        <span><i class="fa fa-check fnt_position"></i></span>
                                                                        <span class="form-text text-success">
                                                                        Second name is too small
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row has-warning">
                                                                    <div class="col-sm-3 text-right text-warning txt_media">
                                                                        <label class="form-control-label brdr_warn"
                                                                               for="inputWarning2">
                                                                            Confirm Password
                                                                        </label></div>
                                                                    <div class="col-sm-9">
                                                                        <input type="password" id="inputWarning2"
                                                                               class="form-control brdr_warn"
                                                                               placeholder="Input with warning">
                                                                        <span><i class="fa fa-warning fnt_position"></i></span>
                                                                        <span class="form-text text-warning">
                                                                        Password mis-match
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row has-error has-feedback">
                                                                    <div class="col-sm-3 text-right text-danger txt_media">
                                                                        <label class="form-control-label"
                                                                               for="inputError2">
                                                                            Confirm Email
                                                                        </label></div>
                                                                    <div class="col-sm-9">
                                                                        <input type="email" id="inputError2"
                                                                               class="form-control brdr_danger"
                                                                               placeholder="Input with error">
                                                                        <span><i class="fa fa-close fnt_position"></i></span>
                                                                        <span class="form-text text-danger">
                                                                        Email mis-match
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-sm-10 ml-auto">
                                                                        <button type="button" class="btn btn-primary">
                                                                            Login
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card mrgn_top">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Personal Details Horizontal
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                                    <i class="fa fa-fw ti-close removecard"></i>
                                                </span>
                                                </div>
                                                <div class="card-body">
                                                    <form method="get" class="form-horizontal">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3 text-right txt_media">
                                                                        <label class="form-control-label"
                                                                               for="first_Name">First
                                                                            Name:
                                                                        </label></div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                               id="first_Name"
                                                                               placeholder="First Name">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3 text-right txt_media">
                                                                        <label class="form-control-label"
                                                                               for="input_Email">Email:</label></div>
                                                                    <div class="col-sm-9">
                                                                        <input type="email" class="form-control"
                                                                               id="input_Email" placeholder="Email">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3 text-right txt_media">
                                                                        <label class="form-control-label"
                                                                               for="input_Password">Password:</label></div>
                                                                    <div class="col-sm-9">
                                                                        <input type="password" class="form-control"
                                                                               id="input_Password"
                                                                               placeholder="Password">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3 text-right txt_media">
                                                                        <label class="form-control-label m-t-10">Date of
                                                                            Birth:</label></div>
                                                                    <div class="col-sm-3 m-t-10">
                                                                        <select class="form-control">
                                                                            <option>Date</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                            <option>6</option>
                                                                            <option>7</option>
                                                                            <option>8</option>
                                                                            <option>9</option>
                                                                            <option>10</option>
                                                                            <option>11</option>
                                                                            <option>12</option>
                                                                            <option>13</option>
                                                                            <option>14</option>
                                                                            <option>15</option>
                                                                            <option>16</option>
                                                                            <option>17</option>
                                                                            <option>18</option>
                                                                            <option>19</option>
                                                                            <option>20</option>
                                                                            <option>21</option>
                                                                            <option>22</option>
                                                                            <option>23</option>
                                                                            <option>24</option>
                                                                            <option>25</option>
                                                                            <option>26</option>
                                                                            <option>27</option>
                                                                            <option>28</option>
                                                                            <option>29</option>
                                                                            <option>30</option>
                                                                            <option>31</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3 m-t-10">
                                                                        <select class="form-control">
                                                                            <option>Month</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                            <option>6</option>
                                                                            <option>7</option>
                                                                            <option>8</option>
                                                                            <option>9</option>
                                                                            <option>10</option>
                                                                            <option>11</option>
                                                                            <option>12</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3 m-t-10">
                                                                        <select class="form-control">
                                                                            <option>Year</option>
                                                                            <option>1991</option>
                                                                            <option>1992</option>
                                                                            <option>1993</option>
                                                                            <option>1994</option>
                                                                            <option>1995</option>
                                                                            <option>1996</option>
                                                                            <option>1997</option>
                                                                            <option>1998</option>
                                                                            <option>1999</option>
                                                                            <option>2000</option>
                                                                            <option>2001</option>
                                                                            <option>2002</option>
                                                                            <option>2003</option>
                                                                            <option>2004</option>
                                                                            <option>2005</option>
                                                                            <option>2006</option>
                                                                            <option>2007</option>
                                                                            <option>2008</option>
                                                                            <option>2009</option>
                                                                            <option>2000</option>
                                                                            <option>2011</option>
                                                                            <option>2012</option>
                                                                            <option>2013</option>
                                                                            <option>2014</option>
                                                                            <option>2015</option>
                                                                            <option>2016</option>
                                                                            <option>2017</option>
                                                                            <option>2018</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3 text-right txt_media">
                                                                        <label class="form-control-label"
                                                                               for="Zip_Code">Zip
                                                                            Code:
                                                                        </label></div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                               id="Zip_Code"
                                                                               placeholder="Zip Code">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3 text-right txt_media">
                                                                        <label class="form-control-label"
                                                                               for="city">City:</label></div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                               id="city"
                                                                               placeholder="City">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-sm-9 ml-auto">
                                                                        <label class="checkbox-inline">
                                                                            <input type="checkbox" value="news"
                                                                                   class="square-blue"> Send me latest
                                                                            news and
                                                                            updates.
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3 text-right txt_media">
                                                                        <label class="form-control-label"
                                                                               for="last_Name">Last
                                                                            Name:
                                                                        </label></div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                               id="last_Name"
                                                                               placeholder="Last Name">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3 text-right txt_media">
                                                                        <label class="form-control-label"
                                                                               for="phone_Number">phone:
                                                                        </label></div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                               id="phone_Number"
                                                                               placeholder="Phone Number">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3 text-right txt_media">
                                                                        <label class="form-control-label"
                                                                               for="confirm_Password">confirm password:
                                                                        </label></div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                               id="confirm_Password"
                                                                               placeholder="Confirm Password">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3 text-right txt_media">
                                                                        <label class="form-control-label"
                                                                               for="postal_Address">Address:</label></div>
                                                                    <div class="col-sm-9">
                                                                <textarea rows="3" class="form-control resize_vertical"
                                                                          id="postal_Address"
                                                                          placeholder="Postal Address"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3 text-right txt_media">
                                                                        <label class="control-label">Gender:</label></div>
                                                                    <div class="col-sm-4">
                                                                        <label class="radio-inline">
                                                                            <input type="radio" name="genderRadios"
                                                                                   class="radio-blue"> Male</label>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label class="radio-inline">
                                                                            <input type="radio" name="genderRadios"
                                                                                   class="radio-blue" value="female">
                                                                            Female
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-sm-offset-3 col-sm-9 ml-auto">
                                                                        <label class="checkbox-inline">
                                                                            <input type="checkbox" value="agree"
                                                                                   class="square-blue"> I agree to the
                                                                            <a href="#" class="forgot">Terms and
                                                                                Conditions</a>
                                                                            .
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-actions">
                                                                    <div class="col-sm-offset-3 col-sm-9 ml-auto">
                                                                        <button type="button" class="btn btn-primary">
                                                                            Submit
                                                                        </button>
                                                                        <button type="reset"
                                                                                class="btn btn-effect-ripple btn-default  reset_btn1">
                                                                            Reset
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card mrgn_top">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Form 2 Columns Readonly
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                      <i class="fa fa-fw ti-angle-up clickable"></i>
                                                      <i class="fa fa-fw ti-close removecard"></i>
                                                    </span>
                                                </div>
                                                <div class="card-body">
                                                    <form action="#">
                                                        <div class="form-body">
                                                            <h3 class="h3pnl_font">Personal</h3>
                                                            <div class="row">
                                                                <div class="col-sm-6 col-sm-6">
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-4 text-right txt_media">
                                                                            <label class="form-control-label">
                                                                                First Name :
                                                                            </label></div>
                                                                        <div class="col-sm-8">
                                                                            <span class="form-control-plaintext">Jenny</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-4 text-right txt_media">
                                                                            <label class="form-control-label">
                                                                                Last Name :
                                                                            </label></div>
                                                                        <div class="col-sm-8">
                                                                            <span class="form-control-plaintext">Kerry</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-4 text-right txt_media">
                                                                            <label for="inputEmail"
                                                                                   class="form-control-label">Email
                                                                                :
                                                                            </label></div>
                                                                        <div class="col-sm-8">
                                                                            <span class="form-control-plaintext">
                                                                                <a href="mailto:whisfat1935@jourrapide.com"
                                                                                   class="forgot">
                                                                                    Jenny321@example.com
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-sm-6">
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-4 text-right txt_media">
                                                                            <label class="form-control-label">Gender :
                                                                            </label></div>
                                                                        <div class="col-sm-8">
                                                                            <span class="form-control-plaintext">Female</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6 col-sm-6">
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-4 text-right txt_media">
                                                                            <label class="form-control-label">Birthday :
                                                                            </label></div>
                                                                        <div class="col-sm-8">
                                                                            <span class="form-control-plaintext">
                                                                                10.11.1980</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-sm-6">
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-4 text-right txt_media">
                                                                            <label class="form-control-label">Phone :
                                                                            </label></div>
                                                                        <div class="col-sm-8">
                                                                            <p class="form-control-plaintext">
                                                                                321-333-5432
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h3 class="h3pnl_font">Address</h3>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="row form-group">
                                                                        <div class="col-sm-4 text-right txt_media">
                                                                            <label class="form-control-label">
                                                                                Address 1 :
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <p class="form-text">
                                                                                1219 Quiet Subdivision
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-4 text-right txt_media">
                                                                            <label class="form-control-label">
                                                                                Address 2 :
                                                                            </label></div>
                                                                        <div class="col-sm-8">
                                                                            <p class="form-text">
                                                                                3536 Petunia Way
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6 col-sm-6">
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-4 text-right txt_media">
                                                                            <label class="form-control-label">City
                                                                                :</label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <p class="form-text">Albany</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="row form-group">
                                                                        <div class="col-sm-4 text-right txt_media">
                                                                            <label class="form-control-label">State :
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <p class="form-text">New york</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="row form-group">
                                                                        <div class="col-sm-4 text-right txt_media">
                                                                            <label class="control-label">
                                                                                Country :
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <p class="form-text">USA</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="row form-group">
                                                                        <div class="col-sm-4 text-right txt_media">
                                                                            <label class="control-label">
                                                                                Post Code :
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <p class="form-text">12203</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab3" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card striped_full">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-move"></i> Form Bordered Striped
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                                <i class="fa fa-fw ti-close removecard"></i>
                                            </span>
                                                </div>
                                                <div class="card-body border">
                                                    <form method="get" enctype="multipart/form-data"
                                                          class="form-bordered">

                                                        <div class="form-group row striped-col">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label">Static</label></div>
                                                            <div class="col-sm-9">
                                                                <p class="form-control-plaintext">
                                                                    Static text
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-text-input1">Text</label></div>
                                                            <div class="col-sm-6">
                                                                <input type="text" id="example-text-input1"
                                                                       name="example-text-input"
                                                                       class="form-control"
                                                                       placeholder="Text">
                                                                <span class="form-control-plaintext help_txt">
                                                            This is a help text
                                                        </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row striped-col">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-email1">Email</label></div>
                                                            <div class="col-sm-6">
                                                                <input type="email" id="example-email1"
                                                                       name="example-email"
                                                                       class="form-control" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-password1">Password</label></div>
                                                            <div class="col-sm-6">
                                                                <input type="password" id="example-password1"
                                                                       name="example-password" class="form-control"
                                                                       placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row striped-col">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-disabled1">Disabled</label></div>
                                                            <div class="col-sm-6">
                                                                <input type="text" id="example-disabled1"
                                                                       name="example-disabled" class="form-control"
                                                                       placeholder="Disabled" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-textarea-input2">Textarea</label></div>
                                                            <div class="col-sm-6">
                                                        <textarea id="example-textarea-input2"
                                                                  name="example-textarea-input" rows="7"
                                                                  class="form-control resize_vertical"
                                                                  placeholder="Description...."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row striped-col">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-select1">Select</label></div>
                                                            <div class="col-sm-6">
                                                                <select id="example-select1" name="example-select"
                                                                        class="form-control" size="1">
                                                                    <option value="0">
                                                                        Please select
                                                                    </option>
                                                                    <option value="1">Bootstrap</option>
                                                                    <option value="2">CSS</option>
                                                                    <option value="3">JavaScript</option>
                                                                    <option value="4">HTML</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-multiple-select2">Multiple</label></div>
                                                            <div class="col-sm-6">
                                                                <select id="example-multiple-select2"
                                                                        name="example-multiple-select"
                                                                        class="form-control"
                                                                        size="5" multiple>
                                                                    <option value="1">Option #1</option>
                                                                    <option value="2">Option #2</option>
                                                                    <option value="3">Option #3</option>
                                                                    <option value="4">Option #4</option>
                                                                    <option value="5">Option #5</option>
                                                                    <option value="6">Option #6</option>
                                                                    <option value="7">Option #7</option>
                                                                    <option value="8">Option #8</option>
                                                                    <option value="9">Option #9</option>
                                                                    <option value="10">Option #10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row  striped-col">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label">Radio
                                                                    Buttons</label></div>
                                                            <div class="col-sm-9">
                                                                <div>
                                                                    <label for="example-radio4">
                                                                        <input type="radio" id="example-radio4"
                                                                               name="example-radios"
                                                                               value="option1">&nbsp; HTML</label>
                                                                </div>
                                                                <div>
                                                                    <label for="example-radio5">
                                                                        <input type="radio" id="example-radio5"
                                                                               name="example-radios"
                                                                               value="option2">&nbsp; CSS</label>
                                                                </div>
                                                                <div>
                                                                    <label for="example-radio6">
                                                                        <input type="radio" id="example-radio6"
                                                                               name="example-radios"
                                                                               value="option3">&nbsp;
                                                                        JavaScript
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label">
                                                                    Inline Radio Buttons
                                                                </label></div>
                                                            <div class="col-sm-9">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="radio-inline"
                                                                               for="example-inline-radio7">
                                                                            <input type="radio"
                                                                                   id="example-inline-radio7"
                                                                                   name="example-inline-radios"
                                                                                   value="option1">&nbsp;
                                                                            HTML
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label class="radio-inline"
                                                                               for="example-inline-radio8">
                                                                            <input type="radio"
                                                                                   id="example-inline-radio8"
                                                                                   name="example-inline-radios"
                                                                                   value="option2">&nbsp;
                                                                            CSS
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label class="radio-inline"
                                                                               for="example-inline-radio9">
                                                                            <input type="radio"
                                                                                   id="example-inline-radio9"
                                                                                   name="example-inline-radios"
                                                                                   value="option3">&nbsp;
                                                                            JavaScript
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row striped-col">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label">Checkboxes</label></div>
                                                            <div class="col-sm-9">
                                                                <div>
                                                                    <label for="example-checkbox4">
                                                                        <input type="checkbox"
                                                                               id="example-checkbox4"
                                                                               name="example-checkbox1"
                                                                               value="option1">&nbsp;
                                                                        HTML
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <label for="example-checkbox5">
                                                                        <input type="checkbox"
                                                                               id="example-checkbox5"
                                                                               name="example-checkbox2"
                                                                               value="option2">&nbsp;
                                                                        CSS
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <label for="example-checkbox6">
                                                                        <input type="checkbox"
                                                                               id="example-checkbox6"
                                                                               name="example-checkbox3"
                                                                               value="option3">&nbsp;
                                                                        JavaScript
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label">
                                                                    Inline Checkboxes
                                                                </label></div>
                                                            <div class="col-sm-9">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="checkbox-inline"
                                                                               for="example-inline-checkbox7">
                                                                            <input type="checkbox"
                                                                                   id="example-inline-checkbox7"
                                                                                   name="example-inline-checkbox1"
                                                                                   value="option1">&nbsp;
                                                                            HTML
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label class="checkbox-inline"
                                                                               for="example-inline-checkbox8">
                                                                            <input type="checkbox"
                                                                                   id="example-inline-checkbox8"
                                                                                   name="example-inline-checkbox2"
                                                                                   value="option2">&nbsp;
                                                                            CSS
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label class="checkbox-inline"
                                                                               for="example-inline-checkbox9">
                                                                            <input type="checkbox"
                                                                                   id="example-inline-checkbox9"
                                                                                   name="example-inline-checkbox3"
                                                                                   value="option3">&nbsp;
                                                                            JavaScript
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row striped-col">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-file-input1">File</label></div>
                                                            <div class="col-sm-9">
                                                                <input type="file" id="example-file-input1"
                                                                       name="example-file-input">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-file-multiple-input1">
                                                                    Multiple File
                                                                </label></div>
                                                            <div class="col-sm-9">
                                                                <input type="file" id="example-file-multiple-input1"
                                                                       name="example-file-multiple-input" multiple>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row form-actions">
                                                            <div class="col-sm-9 col-sm-offset-3 ml-auto">
                                                                <button type="button"
                                                                        class="btn btn-effect-ripple btn-primary">
                                                                    Submit
                                                                </button>
                                                                <button type="reset"
                                                                        class="btn btn-effect-ripple btn-default reset_btn2">
                                                                    Reset
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div></div>
                                            <div class="card mrgn_top">
                                                <div class="card striped_full ">
                                                    <div class="card-header">
                                                        <h3 class="card-title">
                                                            <i class="fa fa-fw ti-move"></i> Form Seperated Row Striped
                                                        </h3>
                                                        <span class="float-right hidden-xs txt_font">
                                                      <i class="fa fa-fw ti-angle-up clickable"></i>
                                                      <i class="fa fa-fw ti-close removecard"></i>
                                                </span>
                                                    </div>
                                                    <div class="card-body border">
                                                        <form method="get" enctype="multipart/form-data"
                                                              class="form-bordered-row">
                                                            <div class="form-group row striped-col">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label class="form-control-label">Static</label></div>
                                                                <div class="col-sm-9">
                                                                    <p class="form-control-plaintext">
                                                                        Static text
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label class="form-control-label"
                                                                           for="example-text-input2">Text</label></div>
                                                                <div class="col-sm-6">
                                                                    <input type="text" id="example-text-input2"
                                                                           name="example-text-input"
                                                                           class="form-control"
                                                                           placeholder="Text">
                                                                    <span class="help-block help_txt">
                                                                This is a help text
                                                            </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row striped-col">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label class="form-control-label"
                                                                           for="example-email2">Email</label></div>
                                                                <div class="col-sm-6">
                                                                    <input type="email" id="example-email2"
                                                                           name="example-email"
                                                                           class="form-control" placeholder="Email">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label class="form-control-label"
                                                                           for="example-password2">Password</label></div>
                                                                <div class="col-sm-6">
                                                                    <input type="password" id="example-password2"
                                                                           name="example-password" class="form-control"
                                                                           placeholder="Password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row striped-col">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label class="form-control-label"
                                                                           for="example-disabled2">Disabled</label></div>
                                                                <div class="col-sm-6">
                                                                    <input type="text" id="example-disabled2"
                                                                           name="example-disabled" class="form-control"
                                                                           placeholder="Disabled" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label class="form-control-label"
                                                                           for="example-textarea-input1">Textarea</label></div>
                                                                <div class="col-sm-6">
                                                        <textarea id="example-textarea-input1"
                                                                  name="example-textarea-input" rows="7"
                                                                  class="form-control resize_vertical"
                                                                  placeholder="Description.."></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row striped-col">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label class="form-control-label"
                                                                           for="example-select2">Select</label></div>
                                                                <div class="col-sm-6">
                                                                    <select id="example-select2" name="example-select"
                                                                            class="form-control" size="1">
                                                                        <option value="0">
                                                                            Please select
                                                                        </option>
                                                                        <option value="1">Bootstrap</option>
                                                                        <option value="2">CSS</option>
                                                                        <option value="3">JavaScript</option>
                                                                        <option value="4">HTML</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label class="form-control-label"
                                                                           for="example-multiple-select1">Multiple</label></div>
                                                                <div class="col-sm-6">
                                                                    <select id="example-multiple-select1"
                                                                            name="example-multiple-select"
                                                                            class="form-control"
                                                                            size="5" multiple>
                                                                        <option value="1">Option #1</option>
                                                                        <option value="2">Option #2</option>
                                                                        <option value="3">Option #3</option>
                                                                        <option value="4">Option #4</option>
                                                                        <option value="5">Option #5</option>
                                                                        <option value="6">Option #6</option>
                                                                        <option value="7">Option #7</option>
                                                                        <option value="8">Option #8</option>
                                                                        <option value="9">Option #9</option>
                                                                        <option value="10">Option #10</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row striped-col">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label class="form-control-label">Radio
                                                                        Buttons</label></div>
                                                                <div class="col-sm-9">
                                                                    <div>
                                                                        <label for="example-radio7">
                                                                            <input type="radio" id="example-radio7"
                                                                                   name="example-radios"
                                                                                   value="option1">&nbsp; HTML</label>
                                                                    </div>
                                                                    <div>
                                                                        <label for="example-radio8">
                                                                            <input type="radio" id="example-radio8"
                                                                                   name="example-radios"
                                                                                   value="option2">&nbsp; CSS</label>
                                                                    </div>
                                                                    <div>
                                                                        <label for="example-radio9">
                                                                            <input type="radio" id="example-radio9"
                                                                                   name="example-radios"
                                                                                   value="option3">&nbsp;
                                                                            JavaScript
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label class="form-control-label">
                                                                        Inline Radio Buttons
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="radio-inline "
                                                                                   for="example-inline-radio10">
                                                                                <input type="radio"
                                                                                       id="example-inline-radio10"
                                                                                       name="example-inline-radios"
                                                                                       value="option1">&nbsp;
                                                                                HTML
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <label class="radio-inline"
                                                                                   for="example-inline-radio11">
                                                                                <input type="radio"
                                                                                       id="example-inline-radio11"
                                                                                       name="example-inline-radios"
                                                                                       value="option2">&nbsp;
                                                                                CSS
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <label class="radio-inline"
                                                                                   for="example-inline-radio12">
                                                                                <input type="radio"
                                                                                       id="example-inline-radio12"
                                                                                       name="example-inline-radios"
                                                                                       value="option3">&nbsp;
                                                                                JavaScript
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row striped-col">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label class="form-control-label">Checkboxes</label></div>
                                                                <div class="col-sm-9">
                                                                    <div>
                                                                        <label for="example-checkbox13">
                                                                            <input type="checkbox"
                                                                                   id="example-checkbox13"
                                                                                   name="example-checkbox1"
                                                                                   value="option1">&nbsp;
                                                                            HTML
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label for="example-checkbox14">
                                                                            <input type="checkbox"
                                                                                   id="example-checkbox14"
                                                                                   name="example-checkbox2"
                                                                                   value="option2">&nbsp;
                                                                            CSS
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label for="example-checkbox15">
                                                                            <input type="checkbox"
                                                                                   id="example-checkbox15"
                                                                                   name="example-checkbox3"
                                                                                   value="option3">&nbsp;
                                                                            JavaScript
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label class="form-control-label">
                                                                        Inline Checkboxes
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="checkbox-inline"
                                                                                   for="example-inline-checkbox16">
                                                                                <input type="checkbox"
                                                                                       id="example-inline-checkbox16"
                                                                                       name="example-inline-checkbox1"
                                                                                       value="option1">&nbsp;
                                                                                HTML
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <label class="checkbox-inline"
                                                                                   for="example-inline-checkbox17">
                                                                                <input type="checkbox"
                                                                                       id="example-inline-checkbox17"
                                                                                       name="example-inline-checkbox2"
                                                                                       value="option2">&nbsp;
                                                                                CSS
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <label class="checkbox-inline"
                                                                                   for="example-inline-checkbox18">
                                                                                <input type="checkbox"
                                                                                       id="example-inline-checkbox18"
                                                                                       name="example-inline-checkbox3"
                                                                                       value="option3">&nbsp;
                                                                                JavaScript
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row striped-col ">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label class="form-control-label"
                                                                           for="example-file-input2">File</label></div>
                                                                <div class="col-sm-9">
                                                                    <input type="file" id="example-file-input2"
                                                                           name="example-file-input">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 text-right txt_media">
                                                                    <label class="form-control-label"
                                                                           for="example-file-multiple-input2">
                                                                        Multiple File
                                                                    </label></div>
                                                                <div class="col-sm-9">
                                                                    <input type="file" id="example-file-multiple-input2"
                                                                           name="example-file-multiple-input" multiple>
                                                                </div>
                                                            </div>
                                                            <div class="form-group form-actions">
                                                                <div class="col-sm-9 col-sm-offset-3 ml-auto">
                                                                    <button type="button"
                                                                            class="btn btn-effect-ripple btn-primary">
                                                                        Submit
                                                                    </button>
                                                                    <button type="reset"
                                                                            class="btn btn-effect-ripple btn-default reset_btn3">
                                                                        Reset
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div></div>
                                            <div class="card mrgn_top">
                                                <div class="card-header striped_full form_bordered">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-move"></i> Form Bordered
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                                    <i class="fa fa-fw ti-close removecard"></i>
                                                </span>
                                                </div>
                                                <div class="card-body border">
                                                    <form method="get" enctype="multipart/form-data"
                                                          class="form-bordered">
                                                        <!--<div class="row">-->
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label">Static</label></div>
                                                            <div class="col-sm-9">
                                                                <p class="form-control-plaintext">
                                                                    Static text
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <label class="col-sm-3 control-label txt_media"
                                                                   for="example-text-input3">Text</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" id="example-text-input3"
                                                                       name="example-text-input"
                                                                       class="form-control"
                                                                       placeholder="Text">
                                                                <span class="help-block help_txt">
                                                                This is a help text
                                                            </span>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <label class="col-sm-3 control-label txt_media"
                                                                   for="example-email3">Email</label>
                                                            <div class="col-sm-6">
                                                                <input type="email" id="example-email3"
                                                                       name="example-email"
                                                                       class="form-control" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label txt_media"
                                                                   for="example-password3">Password</label>
                                                            <div class="col-sm-6">
                                                                <input type="password" id="example-password3"
                                                                       name="example-password" class="form-control"
                                                                       placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label txt_media"
                                                                   for="example-disabled3">Disabled</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" id="example-disabled3"
                                                                       name="example-disabled" class="form-control"
                                                                       placeholder="Disabled" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label txt_media"
                                                                   for="example-textarea-input3">Textarea</label>
                                                            <div class="col-sm-6">
                                                        <textarea id="example-textarea-input3"
                                                                  name="example-textarea-input" rows="7"
                                                                  class="form-control resize_vertical"
                                                                  placeholder="Description.."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label txt_media"
                                                                   for="example-select3">Select</label>
                                                            <div class="col-sm-6">
                                                                <select id="example-select3" name="example-select"
                                                                        class="form-control" size="1">
                                                                    <option value="0">
                                                                        Please select
                                                                    </option>
                                                                    <option value="1">Bootstrap</option>
                                                                    <option value="2">CSS</option>
                                                                    <option value="3">JavaScript</option>
                                                                    <option value="4">HTML</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label txt_media"
                                                                   for="example-multiple-select3">Multiple</label>
                                                            <div class="col-sm-6">
                                                                <select id="example-multiple-select3"
                                                                        name="example-multiple-select"
                                                                        class="form-control"
                                                                        size="5" multiple>
                                                                    <option value="1">Option #1</option>
                                                                    <option value="2">Option #2</option>
                                                                    <option value="3">Option #3</option>
                                                                    <option value="4">Option #4</option>
                                                                    <option value="5">Option #5</option>
                                                                    <option value="6">Option #6</option>
                                                                    <option value="7">Option #7</option>
                                                                    <option value="8">Option #8</option>
                                                                    <option value="9">Option #9</option>
                                                                    <option value="10">Option #10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label txt_media">Radio
                                                                Buttons</label>
                                                            <div class="col-sm-9">
                                                                <div>
                                                                    <label for="example-radio10">
                                                                        <input type="radio" id="example-radio10"
                                                                               name="example-radios10"
                                                                               value="option1">&nbsp;
                                                                        HTML
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <label for="example-radio11">
                                                                        <input type="radio" id="example-radio11"
                                                                               name="example-radios10"
                                                                               value="option2">&nbsp;
                                                                        CSS
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <label for="example-radio12">
                                                                        <input type="radio" id="example-radio12"
                                                                               name="example-radios10"
                                                                               value="option3">&nbsp;
                                                                        JavaScript
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label txt_media">
                                                                Inline Radio Buttons
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="radio-inline"
                                                                               for="example-inline-radio13">
                                                                            <input type="radio"
                                                                                   id="example-inline-radio13"
                                                                                   name="example-inline-radios13"
                                                                                   value="option1">&nbsp;
                                                                            HTML
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label class="radio-inline"
                                                                               for="example-inline-radio14">
                                                                            <input type="radio"
                                                                                   id="example-inline-radio14"
                                                                                   name="example-inline-radios13"
                                                                                   value="option2">&nbsp;
                                                                            CSS
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label class="radio-inline"
                                                                               for="example-inline-radio15">
                                                                            <input type="radio"
                                                                                   id="example-inline-radio15"
                                                                                   name="example-inline-radios13"
                                                                                   value="option3">&nbsp;
                                                                            JavaScript
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label txt_media">Checkboxes</label>
                                                            <div class="col-sm-9">
                                                                <div>
                                                                    <label for="example-checkbox7">
                                                                        <input type="checkbox"
                                                                               id="example-checkbox7"
                                                                               name="example-checkbox7"
                                                                               value="option1">&nbsp;
                                                                        HTML
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <label for="example-checkbox8">
                                                                        <input type="checkbox"
                                                                               id="example-checkbox8"
                                                                               name="example-checkbox8"
                                                                               value="option2">&nbsp;
                                                                        CSS
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <label for="example-checkbox9">
                                                                        <input type="checkbox"
                                                                               id="example-checkbox9"
                                                                               name="example-checkbox9"
                                                                               value="option3">&nbsp;
                                                                        JavaScript
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label txt_media">
                                                                Inline Checkboxes
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="checkbox-inline"
                                                                               for="example-inline-checkbox4">
                                                                            <input type="checkbox"
                                                                                   id="example-inline-checkbox4"
                                                                                   name="example-inline-checkbox1"
                                                                                   value="option1">&nbsp;
                                                                            HTML
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label class="checkbox-inline"
                                                                               for="example-inline-checkbox5">
                                                                            <input type="checkbox"
                                                                                   id="example-inline-checkbox5"
                                                                                   name="example-inline-checkbox2"
                                                                                   value="option2">&nbsp;
                                                                            CSS
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label class="checkbox-inline"
                                                                               for="example-inline-checkbox6">
                                                                            <input type="checkbox"
                                                                                   id="example-inline-checkbox6"
                                                                                   name="example-inline-checkbox3"
                                                                                   value="option3">&nbsp;
                                                                            JavaScript
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label txt_media"
                                                                   for="example-file-input3">File</label>
                                                            <div class="col-sm-9">
                                                                <input type="file" id="example-file-input3"
                                                                       name="example-file-input3">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label txt_media"
                                                                   for="example-file-multiple-input3">
                                                                Multiple File
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <input type="file" id="example-file-multiple-input3"
                                                                       name="example-file-multiple-input3" multiple>
                                                            </div>
                                                        </div><div class="form-group form-actions">
                                                            <div class="col-sm-9 col-sm-offset-3 ml-auto">
                                                                <button type="button"
                                                                        class="btn btn-effect-ripple btn-primary">
                                                                    Submit
                                                                </button>
                                                                <button type="reset"
                                                                        class="btn btn-effect-ripple btn-default reset_btn4">
                                                                    Reset
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab4" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12 col-xl-6">
                                            <div class="card ">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-heart"></i> Vertical Form Layout
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                            <i class="fa fa-fw ti-angle-up clickable"></i>
                                                            <i class="fa fa-fw ti-close removecard"></i>
                                                        </span>
                                                </div>
                                                <div class="card-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="inputEmail_ver">Email</label>
                                                            <input type="email" class="form-control" id="inputEmail_ver"
                                                                   placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputPassword1">Password</label>
                                                            <input type="password" class="form-control"
                                                                   id="inputPassword1"
                                                                   placeholder="Password">
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" style="margin-right: 7px;">
                                                                Remember
                                                                me
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn btn-primary m-t-10">Login
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!--select2 starts-->
                                            <div class="card mrgn_top inline_form">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Inline Form Layout
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                                    <i class="fa fa-fw ti-close removecard"></i>
                                                </span>
                                                </div>
                                                <div class="card-body">
                                                    <form class="form-inline" role="form">
                                                        <div class="form-group">
                                                            <label class="sr-only" for="inputEmails">Email</label>
                                                            <input type="email" class="form-control" id="inputEmails"
                                                                   placeholder="Email">
                                                        </div>
                                                        <div class="form-group ml-1">
                                                            <label class="sr-only" for="inputPassword2">Password</label>
                                                            <input type="password" class="form-control"
                                                                   id="inputPassword2"
                                                                   placeholder="Password">
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="ml-6"> Remember me
                                                            </label>
                                                        </div>
                                                        <button type="button" class="btn btn-primary mr-1 login_left">Login</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="card mrgn_top">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Static Form Control
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                            <i class="fa fa-fw ti-angle-up clickable"></i>
                                                            <i class="fa fa-fw ti-close removecard"></i>
                                                        </span>
                                                </div>
                                                <div class="card-body">
                                                    <form>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label for="inputEmail"
                                                                       class="form-control-label">Email</label></div>
                                                            <div class="col-sm-9">
                                                                <p class="form-text">
                                                                    harrypotter@mail.com
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputPassword3" class="control-label col-sm-3 text-right txt_media">Password</label>
                                                            <div class="col-sm-9">
                                                                <input type="password" class="form-control"
                                                                       id="inputPassword3" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-offset-3 col-sm-9 ml-auto txt_media">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox"> Remember me
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-offset-3 col-sm-9 ml-auto txt_media">
                                                                <button type="button" class="btn btn-primary">Login
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="card mrgn_top">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Button Dropdowns
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                            <i class="fa fa-fw ti-angle-up clickable"></i>
                                                            <i class="fa fa-fw ti-close removecard"></i>
                                                        </span>
                                                </div>
                                                <div class="card-body">
                                                    <form class="d-inline">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12 m-t-10">
                                                                <div class="input-group">
                                                                    <div class="input-group-btn">
                                                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split left_btn" data-toggle="dropdown" aria-haspopup="true">
                                                                            Action
                                                                            <span class="caret"></span>
                                                                        </button>
                                                                        <ul class="dropdown-menu dropdown_position1 drp_left">
                                                                            <li class="dropdown-item">
                                                                                <a href="#" class="dropdown-item">Action</a>
                                                                            </li>
                                                                            <li class="dropdown-item">
                                                                                <a href="#" class="dropdown-item">
                                                                                    Another action
                                                                                </a>
                                                                            </li>
                                                                            <li class="dropdown-item">
                                                                                <a href="#" class="dropdown-item">
                                                                                    Something else here
                                                                                </a>
                                                                            </li>
                                                                            <li class="divider"></li>
                                                                            <li class="dropdown-item">
                                                                                <a href="#" class="dropdown-item">
                                                                                    Separated link
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- /btn-group -->
                                                                    <input type="text" class="form-control input_height">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-12 m-t-10">
                                                                <div class="input-group right_dropdown">
                                                                    <input type="text" class="form-control input_height">
                                                                    <div class="input-group-btn">
                                                                        <button type="button"
                                                                                class="btn btn-info dropdown-toggle right_btn"
                                                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Action
                                                                            <!--<span class="caret"></span>-->
                                                                        </button>
                                                                        <ul class="dropdown-menu dropdown_position drp_right float:right" aria-labelledby="dropdownMenuButton">
                                                                            <li class="dropdown-item">
                                                                                <a href="#" class="dropdown-item">Action</a>
                                                                            </li>
                                                                            <li class="dropdown-item">
                                                                                <a href="#" class="dropdown-item">
                                                                                    Another action
                                                                                </a>
                                                                            </li>
                                                                            <li class="divider"></li>
                                                                            <li class="dropdown-item">
                                                                                <a href="#" class="dropdown-item">
                                                                                    Separated link
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="col-sm-12">
                                                        <hr>
                                                    </div>
                                                    <form>
                                                        <div class="col-sm-12 pad_dropdown">
                                                            <div class="input-group">
                                                                <div class="input-group-btn">
                                                                    <button type="button"
                                                                            class="btn btn-warning dropdown-toggle left_btn"
                                                                            data-toggle="dropdown">
                                                                        Action
                                                                        <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown_position1 drp_left">
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
                                                                <input type="text" class="form-control input_height">
                                                            </div>
                                                            <br>
                                                            <div class="input-group right_dropdown">
                                                                <input type="text" class="form-control input_height">
                                                                <div class="input-group-btn">
                                                                    <button type="button"
                                                                            class="btn btn-warning dropdown-toggle right_btn"
                                                                            data-toggle="dropdown">
                                                                        Action
                                                                        <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown_position float-right right_actn">
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
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="card mrgn_top">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Disabled Inputs
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                            <i class="fa fa-fw ti-angle-up clickable"></i>
                                                            <i class="fa fa-fw ti-close removecard"></i>
                                                        </span>
                                                </div>
                                                <div class="card-body">
                                                    <form>
                                                        <input type="text" class="form-control"
                                                               placeholder="Disabled input"
                                                               disabled="disabled">
                                                    </form>
                                                    <hr>
                                                    <form class="form-horizontal">
                                                        <fieldset disabled="disabled">
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 txt_media">
                                                                    <label for="inputEmail3" class="form-control-label">Email</label></div>
                                                                <div class="col-sm-9">
                                                                    <input type="email" class="form-control"
                                                                           id="inputEmail3" placeholder="Email">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-3 txt_media">
                                                                    <label for="inputPassword4"
                                                                           class="form-control-label">Password</label></div>
                                                                <div class="col-sm-9">
                                                                    <input type="password" class="form-control"
                                                                           id="inputPassword4" placeholder="Password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-offset-3 col-sm-9 ml-auto txt_media">
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox" disabled> Remember me
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-offset-3 col-sm-9 ml-auto txt_media">
                                                                    <button type="submit" class="btn btn-primary">Login
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="card mrgn_top">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Supported Form Controls in
                                                        Twitter Bootstrap
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                            <i class="fa fa-fw ti-angle-up clickable"></i>
                                                            <i class="fa fa-fw ti-close removecard"></i>
                                                        </span>
                                                </div>
                                                <div class="card-body">
                                                    <form action="#">
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="inputEmail4">Email</label></div>
                                                            <div class="col-sm-9 col-12">
                                                                <input type="email" class="form-control"
                                                                       id="inputEmail4"
                                                                       placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="inputPassword5">Password</label></div>
                                                            <div class="col-sm-9 col-12">
                                                                <input type="password" class="form-control"
                                                                       id="inputPassword5" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="confirmPassword">Confirm Password</label></div>
                                                            <div class="col-sm-9 col-12">
                                                                <input type="password" class="form-control"
                                                                       id="confirmPassword"
                                                                       placeholder="Confirm Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="firstName">
                                                                    First Name
                                                                </label></div>
                                                            <div class="col-sm-9 col-12">
                                                                <input type="text" class="form-control" id="firstName"
                                                                       placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="lastName">Last
                                                                    Name
                                                                </label></div>
                                                            <div class="col-sm-9 col-12">
                                                                <input type="text" class="form-control" id="lastName"
                                                                       placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="phoneNumber">Phone</label></div>
                                                            <div class="col-sm-9 col-12">
                                                                <input type="tel" class="form-control" id="phoneNumber"
                                                                       placeholder="Phone Number">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label">
                                                                    Date of Birth
                                                                </label></div>
                                                            <div class="col-sm-3 col-12 m-t-10">
                                                                <select class="form-control">
                                                                    <option>Date</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                    <option>15</option>
                                                                    <option>16</option>
                                                                    <option>17</option>
                                                                    <option>18</option>
                                                                    <option>19</option>
                                                                    <option>20</option>
                                                                    <option>21</option>
                                                                    <option>22</option>
                                                                    <option>23</option>
                                                                    <option>24</option>
                                                                    <option>25</option>
                                                                    <option>26</option>
                                                                    <option>27</option>
                                                                    <option>28</option>
                                                                    <option>29</option>
                                                                    <option>30</option>
                                                                    <option>31</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-3 col-12 m-t-10">
                                                                <select class="form-control">
                                                                    <option>Month</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-3 col-12 m-t-10">
                                                                <select class="form-control">
                                                                    <option>Year</option>
                                                                    <option>1991</option>
                                                                    <option>1992</option>
                                                                    <option>1993</option>
                                                                    <option>1994</option>
                                                                    <option>1995</option>
                                                                    <option>1996</option>
                                                                    <option>1997</option>
                                                                    <option>1998</option>
                                                                    <option>1999</option>
                                                                    <option>2000</option>
                                                                    <option>2001</option>
                                                                    <option>2002</option>
                                                                    <option>2003</option>
                                                                    <option>2004</option>
                                                                    <option>2005</option>
                                                                    <option>2006</option>
                                                                    <option>2007</option>
                                                                    <option>2008</option>
                                                                    <option>2009</option>
                                                                    <option>2000</option>
                                                                    <option>2011</option>
                                                                    <option>2012</option>
                                                                    <option>2013</option>
                                                                    <option>2014</option>
                                                                    <option>2015</option>
                                                                    <option>2016</option>
                                                                    <option>2017</option>
                                                                    <option>2018</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="control-label"
                                                                       for="postalAddress">Address</label></div>
                                                            <div class="col-sm-9 col-12">
                                                            <textarea rows="3" class="form-control resize_vertical"
                                                                      id="postalAddress"
                                                                      placeholder="Postal Address"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="ZipCode">Zip
                                                                    Code
                                                                </label></div>
                                                            <div class="col-sm-9 col-12">
                                                                <input type="text" class="form-control" id="ZipCode"
                                                                       placeholder="Zip Code">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label">Gender</label></div>
                                                            <div class="col-sm-9 col-12">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label for="gender-radio1">
                                                                            <input type="radio" id="gender-radio1"
                                                                                   name="gender-radios1"
                                                                                   value="option1">&nbsp;Male
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label for="gender-radio2">
                                                                            <input type="radio" id="gender-radio2"
                                                                                   name="gender-radios1"
                                                                                   value="option2">&nbsp;Female
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label for="gender-radio3">
                                                                            <input type="radio" id="gender-radio3"
                                                                                   name="gender-radios1"
                                                                                   value="option3">&nbsp;Other
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-offset-3 col-sm-offset-3 col-9 ml-auto txt_media">
                                                                <label>
                                                                    <input type="checkbox" value="news">&nbsp; Send me
                                                                    latest news and updates.
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-offset-3 col-9 ml-auto txt_media">
                                                                <label>
                                                                    <input type="checkbox" value="agree">&nbsp; I agree
                                                                    to
                                                                    the
                                                                    <a href="#">
                                                                        Terms and Conditions
                                                                    </a> .
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <div class="col-sm-offset-3= col-9 ml-auto txt_media">
                                                                <input type="button" class="btn btn-primary"
                                                                       value="Submit">
                                                                <button type="reset" class="btn btn-default">Reset
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!--select2 ends-->
                                        </div>
                                        <div class="col-sm-12 col-lg-12 col-xl-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-check-box"></i> Horizontal Form Layout
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                            <i class="fa fa-fw ti-angle-up clickable"></i>
                                                            <i class="fa fa-fw ti-close removecard"></i>
                                                        </span>
                                                </div>
                                                <div class="card-body">
                                                    <form>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label for="inputEmail"
                                                                       class="control-label ">Email</label></div>
                                                            <div class="col-sm-9">
                                                                <input type="email" class="form-control" id="inputEmail"
                                                                       placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label for="inputPassword"
                                                                       class="control-label hidden-xs">Password</label></div>
                                                            <div class="col-sm-9">
                                                                <input type="password" class="form-control"
                                                                       id="inputPassword" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-offset-3 col-sm-9 ml-auto txt_media">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox"> Remember me
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-offset-3 col-sm-9 ml-auto txt_media">
                                                                <button type="button" class="btn btn-primary">Login
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="card mrgn_top">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-move"></i> General Controls
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                            <i class="fa fa-fw ti-angle-up clickable"></i>
                                                            <i class="fa fa-fw ti-close removecard"></i>
                                                        </span>
                                                </div>
                                                <div class="card-body">
                                                    <form method="get" enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label">Static</label></div>
                                                            <div class="col-sm-9">
                                                                <p class="form-text">
                                                                    Static text
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-text-input">Text</label></div>
                                                            <div class="col-sm-9">
                                                                <input type="text" id="example-text-input"
                                                                       name="example-text-input" class="form-control"
                                                                       placeholder="Text">
                                                                <span class="help-block help_txt">
                                                                        This is a help text
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-email">Email</label></div>
                                                            <div class="col-sm-9">
                                                                <input type="email" id="example-email"
                                                                       name="example-email"
                                                                       class="form-control" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-password">Password</label></div>
                                                            <div class="col-sm-9">
                                                                <input type="password" id="example-password"
                                                                       name="example-password" class="form-control"
                                                                       placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-disabled">Disabled</label></div>
                                                            <div class="col-sm-9">
                                                                <input type="text" id="example-disabled"
                                                                       name="example-disabled" class="form-control"
                                                                       placeholder="Disabled" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-textarea-input">Textarea</label></div>
                                                            <div class="col-sm-9">
                                                            <textarea id="example-textarea-input"
                                                                      name="example-textarea-input" rows="7"
                                                                      class="form-control resize_vertical"
                                                                      placeholder="Description.."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label" for="example-select">Select</label></div>
                                                            <div class="col-sm-9">
                                                                <select id="example-select" name="example-select"
                                                                        class="form-control" size="1">
                                                                    <option value="0">
                                                                        Please select
                                                                    </option>
                                                                    <option value="1">Bootstrap</option>
                                                                    <option value="2">CSS</option>
                                                                    <option value="3">JavaScript</option>
                                                                    <option value="4">HTML</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-multiple-select">Multiple</label></div>
                                                            <div class="col-sm-9">
                                                                <select id="example-multiple-select"
                                                                        name="example-multiple-select"
                                                                        class="form-control"
                                                                        size="5" multiple>
                                                                    <option value="1">Option #1</option>
                                                                    <option value="2">Option #2</option>
                                                                    <option value="3">Option #3</option>
                                                                    <option value="4">Option #4</option>
                                                                    <option value="5">Option #5</option>
                                                                    <option value="6">Option #6</option>
                                                                    <option value="7">Option #7</option>
                                                                    <option value="8">Option #8</option>
                                                                    <option value="9">Option #9</option>
                                                                    <option value="10">Option #10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label">Radio Buttons</label></div>
                                                            <div class="col-sm-9">
                                                                <div class="m-l-10 m-t-6">
                                                                    <label for="example-radio1">
                                                                        <input type="radio" id="example-radio1"
                                                                               name="example-radios" value="option1">&nbsp;
                                                                        HTML
                                                                    </label>
                                                                </div>
                                                                <div class="m-l-10">
                                                                    <label for="example-radio2">
                                                                        <input type="radio" id="example-radio2"
                                                                               name="example-radios" value="option2">&nbsp;
                                                                        CSS
                                                                    </label>
                                                                </div>
                                                                <div class="m-l-10">
                                                                    <label for="example-radio3">
                                                                        <input type="radio" id="example-radio3"
                                                                               name="example-radios" value="option3">&nbsp;
                                                                        JavaScript
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label">
                                                                    Inline Radio Buttons
                                                                </label></div>
                                                            <div class="col-sm-9">
                                                                <label class="radio-inline m-l-10"
                                                                       for="example-inline-radio1">
                                                                    <input type="radio" id="example-inline-radio1"
                                                                           name="example-inline-radios" value="option1">&nbsp;
                                                                    HTML
                                                                </label>
                                                                <label class="radio-inline" for="example-inline-radio2">
                                                                    <input type="radio" id="example-inline-radio2"
                                                                           name="example-inline-radios" value="option2">&nbsp;
                                                                    CSS
                                                                </label>
                                                                <label class="radio-inline m-l-10"
                                                                       for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3"
                                                                           name="example-inline-radios" value="option3">&nbsp;
                                                                    JavaScript
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label">Checkboxes</label></div>
                                                            <div class="col-sm-9">
                                                                <div class="m-l-10 m-t-6">
                                                                    <label for="example-checkbox1">
                                                                        <input type="checkbox" id="example-checkbox1"
                                                                               name="example-checkbox1" value="option1">&nbsp;
                                                                        HTML
                                                                    </label>
                                                                </div>
                                                                <div class="m-l-10">
                                                                    <label for="example-checkbox2">
                                                                        <input type="checkbox" id="example-checkbox2"
                                                                               name="example-checkbox2" value="option2">&nbsp;
                                                                        CSS
                                                                    </label>
                                                                </div>
                                                                <div class="m-l-10">
                                                                    <label for="example-checkbox3">
                                                                        <input type="checkbox" id="example-checkbox3"
                                                                               name="example-checkbox3" value="option3">&nbsp;
                                                                        JavaScript
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label">
                                                                    Inline Checkboxes
                                                                </label></div>
                                                            <div class="col-sm-9">
                                                                <label class="checkbox-inline m-l-10"
                                                                       for="example-inline-checkbox1">
                                                                    <input type="checkbox" id="example-inline-checkbox1"
                                                                           name="example-inline-checkbox1"
                                                                           value="option1">&nbsp;
                                                                    HTML
                                                                </label>
                                                                <label class="checkbox-inline m-l-10"
                                                                       for="example-inline-checkbox2">
                                                                    <input type="checkbox" id="example-inline-checkbox2"
                                                                           name="example-inline-checkbox2"
                                                                           value="option2">&nbsp;
                                                                    CSS
                                                                </label>
                                                                <label class="checkbox-inline m-l-10"
                                                                       for="example-inline-checkbox3">
                                                                    <input type="checkbox" id="example-inline-checkbox3"
                                                                           name="example-inline-checkbox3"
                                                                           value="option3">&nbsp;
                                                                    JavaScript
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-file-input">File</label></div>
                                                            <div class="col-sm-9 m-t-10">
                                                                <input type="file" id="example-file-input"
                                                                       name="example-file-input">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 text-right txt_media">
                                                                <label class="form-control-label"
                                                                       for="example-file-multiple-input">
                                                                    Multiple File
                                                                </label></div>
                                                            <div class="col-sm-9 m-t-10">
                                                                <input type="file" id="example-file-multiple-input"
                                                                       name="example-file-multiple-input" multiple>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-actions">
                                                            <div class="col-sm-9 col-sm-offset-3 ml-auto">
                                                                <button type="button"
                                                                        class="btn btn-effect-ripple btn-primary">Submit
                                                                </button>
                                                                <button type="reset"
                                                                        class="btn btn-effect-ripple btn-default reset_btn5">
                                                                    Reset
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="card mrgn_top">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Twitter Bootstrap Form
                                                        Validation States
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                            <i class="fa fa-fw ti-angle-up clickable"></i>
                                                            <i class="fa fa-fw ti-close removecard"></i>
                                                        </span>
                                                </div>
                                                <div class="card-body">
                                                    <form>
                                                        <div class="form-group row has-success">
                                                            <label class="col-sm-3 control-label text-success" for="inputSuccess3">Username</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" id="inputSuccess3"
                                                                       class="form-control brdr_success"
                                                                       placeholder="Input with success">
                                                                <span class="form-text text-success">
                                                                        Username is available
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row has-warning">
                                                            <label class="col-sm-3 control-label text-warning" for="inputWarning3">Password</label>
                                                            <div class="col-sm-9">
                                                                <input type="password" id="inputWarning3"
                                                                       class="form-control brdr_warn"
                                                                       placeholder="Input with warning">
                                                                <span class="form-text text-warning">
                                                                        Password strength: Weak
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row has-error">
                                                            <label class="col-sm-3 control-label text-danger"
                                                                   for="inputError3">Email</label>
                                                            <div class="col-sm-9">
                                                                <input type="email" id="inputError3"
                                                                       class="form-control brdr_danger"
                                                                       placeholder="Input with error">
                                                                <span class="form-text text-danger">
                                                                        Please enter a valid email address
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-offset-3 col-sm-9 ml-auto">
                                                                <button type="button" class="btn btn-primary">Login
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <form>
                                                        <div class="form-group row has-success has-feedback">
                                                            <label class="col-sm-3 control-label text-success" for="inputSuccess">Username</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" id="inputSuccess"
                                                                       class="form-control brdr_success"
                                                                       placeholder="Input with success">
                                                                <span class="fa fa-check fnt_position"></span>
                                                                <span class="form-text text-success">
                                                                        Username is available
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row has-warning has-feedback">
                                                            <label class="col-sm-3 control-label text-warning" for="inputWarning">Password</label>
                                                            <div class="col-sm-9">
                                                                <input type="password" id="inputWarning"
                                                                       class="form-control brdr_warn"
                                                                       placeholder="Input with warning">
                                                                <span class="fa fa-warning fnt_position"></span>
                                                                <span class="form-text text-warning">
                                                                        Password strength: Weak
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row has-error has-feedback">
                                                            <label class="col-sm-3 control-label text-danger"
                                                                   for="inputError">Email</label>
                                                            <div class="col-sm-9">
                                                                <input type="email" id="inputError" class="form-control brdr_danger"
                                                                       placeholder="Input with error">
                                                                <span class="fa fa-close fnt_position"></span>
                                                                <span class="form-text text-danger">
                                                                        Please enter a valid email address
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-offset-3 col-sm-9 ml-auto">
                                                                <button type="button" class="btn btn-primary">Login
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!--min length ends-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mrgn_top">
                                            <div class="card card_brdr">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="fa fa-fw ti-pencil"></i> Bootstrap Form Inputs
                                                    </h3>
                                                    <span class="float-right hidden-xs txt_font">
                                                            <i class="fa fa-fw ti-angle-up clickable"></i>
                                                            <i class="fa fa-fw ti-close removecard"></i>
                                                        </span>
                                                </div>
                                                <div class="card-body">
                                                    <form role="form" class="form-horizontal">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 control-label text-right txt_media" for="email_input">
                                                                Email Address
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon ">
                                                                            <i class="fa ti-email"></i>
                                                                        </span>
                                                                    <input type="text" id="email_input" class="form-control"
                                                                           placeholder="Email Address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 control-label text-right txt_media" for="exampleInputPassword1">Password</label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                            <i class="fa ti-key"></i>
                                                                        </span>
                                                                    <input type="password" class="form-control"
                                                                           id="exampleInputPassword1"
                                                                           placeholder="Password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row has-success">
                                                            <label class="col-sm-2 control-label text-right txt_media text-success" for="email1">
                                                                Validation Email
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group input-icon right">
                                                                    <span class="input-group-addon brdr_success brdr_clr">
                                                                            <i class="fa ti-email"></i>
                                                                        </span>
                                                                    <input id="email1" class="input-error form-control brdr_success"
                                                                           type="text" placeholder="Email Address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row has-error">
                                                            <label class="col-sm-2 control-label text-right txt_media text-danger" for="valid_password">
                                                                Validation Password
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group input-icon right">
                                                                    <span class="input-group-addon brdr_clr1 brdr_danger">
                                                                            <i class="fa ti-key"></i>
                                                                        </span>
                                                                    <input type="password"
                                                                           id="valid_password" class="input-error form-control brdr_danger"
                                                                           placeholder="Password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 control-label text-right txt_media" for="check_left">
                                                                Checkbox Left
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group">
                                                                    <div class="input-group-addon">
                                                                        <input type="checkbox">
                                                                    </div>
                                                                    <input type="text" class="form-control" id="check_left">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 control-label text-right txt_media" for="check_right">
                                                                Checkbox right
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="check_right">
                                                                    <div class="input-group-addon right_addon">
                                                                        <input type="checkbox">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 control-label text-right txt_media" for="radio_left">
                                                                Radio on left
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group">
                                                                    <div class="input-group-addon">
                                                                        <input type="radio">
                                                                    </div>
                                                                    <input type="text" class="form-control" id="radio_left">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 control-label text-right txt_media" for="radio_right">
                                                                Radio on right
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="radio_right">
                                                                    <div class="input-group-addon right_addon" >
                                                                        <input type="radio">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 control-label text-right txt_media" for="process_right">
                                                                Processing right
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <div class="input-icon left spinner">
                                                                    <input id="process_right" class="input-error form-control"
                                                                           type="text" placeholder=" "> <i
                                                                            class="fa fa-fw fa-spin fa-spinner proc text-primary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 control-label text-right txt_media">
                                                                Static Paragraph
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <p class="form-control">
                                                                    email@example.com
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 control-label text-right txt_media">Readonly</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                       placeholder="Readonly" readonly="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-8 col-sm-offset-2 m-auto">
                                                                <button type="button" class="btn btn-primary m-t-10">
                                                                    Submit
                                                                </button>
                                                                <button type="reset" class="btn btn-danger m-t-10">
                                                                    Cancel
                                                                </button>
                                                                <button type="reset"
                                                                        class="btn btn-effect-ripple btn-default m-t-10 reset_btn6">
                                                                    Reset
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></section>
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
                                            <a href="#" class="message icon-not striped-col">
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
                                            <a href="#" class="message icon-not">
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
                                            <a href="#" class="message icon-not striped-col">
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
                                            <a href="#" class="message icon-not">
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
                                            <a href="#" class="message icon-not striped-col">
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
        <!--</section>-->
        <!-- /.content -->
    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script src="vendors/iCheck/js/icheck.js" type="text/javascript"></script>
    <script src="js/custom_js/form_layouts.js" type="text/javascript"></script>
    <!-- end of page level js -->
@stop

