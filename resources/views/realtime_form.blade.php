@extends('layouts.default')
@section('title')
    Realtime Forms | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="{{asset('vendors/iCheck/css/all.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/jquery.datetimepicker.css')}}">
    <link href="{{asset('vendors/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/custom_css/realtime_form.css')}}">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Realtime Forms</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li> Forms</li>
                <li class="active">
                    <a href="blank">Realtime Forms</a>
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content realtime_form">
            <div class="row">
                <div class="col-lg-12 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-user"></i> Book Flight Tickets
                            </h3>
                            <span class="float-right">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                <i class="fa fa-fw ti-close removecard"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="row icheck-element">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="radio-inline iradio">
                                            <input type="radio" id="one_way" name="trip-type"
                                                   value="option1">
                                            One Way
                                        </label>
                                        <label class="radio-inline iradio">
                                            <input type="radio" id="round_trip" name="trip-type"
                                                   value="option2" checked>
                                            Round trip
                                        </label>
                                        <label class="radio-inline iradio">
                                            <input type="radio" id="multi_stops" name="trip-type"
                                                   value="option3">
                                            Multi Stops
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <form id="single-stop">
                                <div class="row m-t-10">
                                    <div class="col-12">
                                        <div class="trip-type d-block d-sm-none">
                                            <i class="fa-rotate-90 fa ti-exchange-vertical icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-6">
                                        <div class="form-group">
                                            <label for="origin" class="control-label">From</label>
                                            <input type="text" class="form-control" id="origin"
                                                   placeholder="Origin City">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 d-none d-sm-block">
                                        <!--<div class="trip-type">-->
                                        <!--<i class="fa-rotate-90 fa icon ti-arrow-up"></i>-->
                                        <!--</div>-->
                                        <div class="trip-type">
                                            <i class="fa-rotate-90 fa ti-exchange-vertical icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-6">
                                        <div class="form-group">
                                            <label for="destination" class="control-label">To</label>
                                            <input type="text" class="form-control" id="destination"
                                                   placeholder="Destination City">
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-10">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="departure_date" class="control-label">Departure</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-fw ti-calendar"></i></div>
                                                        <input class="form-control" id="departure_date"
                                                               placeholder="Select Date">
                                                    </div>
                                                </div>
                                                <br class="d-block d-sm-none">
                                                <div class="col-sm-6 set_mrgn">
                                                    <label for="return_date" class="control-label">Return</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-fw ti-calendar"></i></div>
                                                        <input class="form-control" id="return_date"
                                                               placeholder="Select Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="class-type">Class</label>
                                                    <select name="class" id="class-type" class="form-control">
                                                        <option value="">Economy</option>
                                                        <option value="">Business</option>
                                                        <option value="">First</option>
                                                        <option value="">Premium Economy</option>
                                                    </select>
                                                </div>
                                                <br class="d-block d-sm-none">
                                                <div class="col-sm-6 set_mrgn">
                                                    <label for="pref-Air" class="control-label">Preferred
                                                        Airline</label>
                                                    <input type="text" class="form-control" id="pref-Air"
                                                           placeholder="Airline name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-10">
                                    <div class="col-sm-8 col-md-10 col-lg-8">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="adult">Adult</label>
                                                    <input id="adult" type="text" value="1" readonly name="adult_count">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="child">Child</label>
                                                    <input id="child" type="text" value="0" readonly name="child_count">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="infant">Infant</label>
                                                    <input id="infant" type="text" value="0" readonly
                                                           name="infant_count">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-10">
                                    <div class="col-sm-8">
                                        <div class="form-group icheck-element">
                                            <label class="price-alert">
                                                <input type="checkbox" name="c1" id="c1" value=""> Alert me when price changes
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <button class="btn btn-warning btn-block">Search Flights</button>
                                    </div>
                                </div>
                            </form>
                            <!--multistop flight form-->
                            <form id="nonsingle-stop">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="flight-count">
                                            <div class="row multi-flight-data">
                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="form-group">
                                                        <label class="control-label">From</label>
                                                        <input type="text" class="form-control"
                                                               placeholder="Origin City">

                                                    </div>
                                                </div>
                                                <div class="col-sm-1 hidden-xs mrgn_trip">
                                                    <div class="trip-type-multi">
                                                        <i class="fa ti-arrow-right icon"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="form-group">
                                                        <label class="control-label">To</label>
                                                        <input type="text" class="form-control"
                                                               placeholder="Destination City">

                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-sm-offset-0 col-xs-12">
                                                    <label class="m-l-16 mrgn_btm">Departure</label>
                                                    <div class="input-group m-l-16">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-fw ti-calendar"></i></div>
                                                        <input class="form-control departure_date"
                                                               placeholder="Select Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row multi-flight-data">
                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="form-group">
                                                        <label class="control-label">From </label>
                                                        <input type="text" class="form-control"
                                                               placeholder="Origin City">

                                                    </div>
                                                </div>
                                                <div class="col-sm-1 hidden-xs mrgn_trip">
                                                    <div class="trip-type-multi">
                                                        <i class="fa ti-arrow-right icon"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="form-group">
                                                        <label class="control-label">To </label>
                                                        <input type="text" class="form-control"
                                                               placeholder="Destination City">

                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-sm-offset-0 col-xs-12">
                                                    <label class="m-l-16 mrgn_btm">Departure</label>
                                                    <div class="input-group m-l-16">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-fw ti-calendar"></i></div>
                                                        <input class="form-control departure_date"
                                                               placeholder="Select Date">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-t-10">
                                            <div class="col-sm-6">
                                                <a class="btn btn-default" id="add-flight">
                                                    <i class="fa fa-fw ti-plus"></i> Add flight
                                                </a>
                                                <label>Add Flight(Upto 5)</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="class-type1">Class</label>
                                                <select name="class" class="form-control" id="class-type1">
                                                    <option value="">Economy</option>
                                                    <option value="">Business</option>
                                                    <option value="">First</option>
                                                    <option value="">Premium Economy</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row m-t-10">
                                            <div class="col-sm-6 col-md-8 col-lg-12 col-xl-8">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="adult-multi">Adult</label>
                                                            <input id="adult-multi" type="text" value="1" readonly
                                                                   name="adult_count">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="child-multi">Child</label>
                                                            <input id="child-multi" type="text" value="0" readonly
                                                                   name="child_count">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="infant-multi">Infant</label>
                                                            <input id="infant-multi" type="text" value="0" readonly
                                                                   name="infant_count">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-12 col-xl-4">
                                                <label for="multi-air" class="control-label">Preferred Airline</label>
                                                <input type="text" class="form-control" id="multi-air" placeholder="Airline name">
                                            </div>
                                        </div>
                                        <div class="row m-t-10">
                                            <div class="col-sm-8">
                                                <div class="form-group icheck-element">
                                                    <label class="price-alert">
                                                        <input type="checkbox" name="price-alert" value=""> Alert me
                                                        when price changes
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <button class="btn btn-warning btn-block">Search Flights</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-4">
                    <div class="card setmrgnt book_stay">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-home"></i> Book your Stay
                            </h3>
                            <span class="float-right">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                <i class="fa fa-fw ti-close removecard"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" placeholder="City, Area or Hotel">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="checkin_date">Check-In</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-fw ti-calendar"></i></div>
                                                <input class="form-control" id="checkin_date"
                                                       placeholder="Select Date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="checkout_date">Check-Out</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-fw ti-calendar"></i></div>
                                                <input class="form-control" id="checkout_date"
                                                       placeholder="Select Date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="adult-number">Adult</label>
                                            <select name="count" id="adult-number" class="form-control">
                                                <option value="0">1</option>
                                                <option value="1">2</option>
                                                <option value="2">3</option>
                                                <option value="3">4</option>
                                                <option value="4">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="child-number">Child</label>
                                            <select name="count" id="child-number" class="form-control">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group icheck-element">
                                            <label class="guest-rooms">
                                                <input type="checkbox" name="price-alert" value=""> Guest Rooms
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-warning btn-block">Search Hotels</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-12 col-xl-6">
                    <div class="card setmrgnt fund_drive">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-car"></i> Book a Drive
                            </h3>
                            <span class="float-right">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                <i class="fa fa-fw ti-close removecard"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3 m-auto">
                                    <div class="ride-time text-center">
                                        <input type="radio" name="rGroup" value="1" id="r1" checked="checked"/>
                                        <label class="ride-on" for="r1">Ride Now</label>
                                        <input type="radio" name="rGroup" value="2" id="r2"/>
                                        <label class="ride-on" for="r2">Ride Later</label>
                                    </div>
                                </div>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group" id="pick-l">
                                            <label class="control-label">Pick-Up Point</label>
                                            <input type="text" class="form-control route_point" id="pick_up"
                                                   value="delhi" placeholder="Your Location">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label">Drop Point</label>
                                            <input type="text" class="form-control route_point dest-point"
                                                   id="drop_down" value="noida" placeholder="Drop Location">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!--DOM object for directions instructions-->
                                        <ul id="instructions" hidden>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12">
                                        <div id="map" class="gmap"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 m-auto">
                                        <div class="cab-types">
                                            <input type="radio" name="rGroup" value="1" id="cab1" checked="checked"/>
                                            <label class="cab-type" for="cab1">Sedan</label>
                                            <input type="radio" name="rGroup" value="2" id="cab2"/>
                                            <label class="cab-type" for="cab2">SUV</label>
                                            <input type="radio" name="rGroup" value="2" id="cab3"/>
                                            <label class="cab-type" for="cab3">LUX</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-sm-offset-3 m-auto">
                                        <button class="btn btn-warning btn-block">Confirm Ride</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-xl-6">
                    <div class="card setmrgnt fund_drive">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-money"></i> Fund Transfer
                            </h3>
                            <span class="float-right">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                <i class="fa fa-fw ti-close removecard"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form id="form-validation" action="realtime_form" method="get"
                                          class="form-horizontal">
                                        <div class="form-group row text-right">
                                            <div class="col-sm-5 txt_media">
                                                <label class="form-control-label txt_media" for="skill">
                                                    Select Account :
                                                </label></div>
                                            <div class="col-sm-7">
                                                <select id="skill" name="skill" class="form-control">
                                                    <option value="" disabled="" selected="">
                                                        Select account
                                                    </option>
                                                    <option value="234">0000432187653456</option>
                                                    <option value="345">0000891236543567</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-5 text-right  txt_media">
                                                <label class="form-control-label" for="number">
                                                    Amount :
                                                </label></div>
                                            <div class="col-sm-7">
                                                <input type="text" id="number" name="number" class="form-control"
                                                       placeholder="Enter amount"
                                                       onkeypress="return isNumber(event, this)">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-5 text-right  txt_media">
                                                <label class="form-control-label" for="val-username">
                                                    Sender name :
                                                </label></div>
                                            <div class="col-sm-7">
                                                <input type="text" id="val-username" name="firstName"
                                                       class="form-control"
                                                       placeholder="Account holder name">
                                            </div>
                                        </div>
                                        <h4><b class="h4pnl_font weight_fnt">Information of the account you want to transfer fund</b></h4>
                                        <div class="form-group row">
                                            <div class="col-sm-5 text-right txt_media">
                                                <label class="form-control-label" for="holder-name">
                                                    Account Holder name :
                                                </label></div>
                                            <div class="col-sm-7">
                                                <input type="text" id="holder-name" name="holderName"
                                                       class="form-control"
                                                       placeholder="Account holder name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-5 text-right  txt_media">
                                                <label class="form-control-label" for="bank-name">
                                                    Name of the Bank :
                                                </label></div>
                                            <div class="col-sm-7">
                                                <input type="text" id="bank-name" name="bankName" class="form-control"
                                                       placeholder="Bank name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-5 text-right  txt_media">
                                                <label class="form-control-label" for="swift-code">
                                                    SWIFT Code :
                                                </label></div>
                                            <div class="col-sm-7">
                                                <input type="text" id="swift-code" name="bankName" class="form-control"
                                                       placeholder="SWIFT code">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-5 txt_media text-right">
                                                <label class="form-control-label" for="acc-number">
                                                    Account Number/BAN :
                                                </label></div>
                                            <div class="col-sm-7">
                                                <input type="text" id="acc-number" name="number" class="form-control"
                                                       placeholder="Account Number"
                                                       onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-5 text-right  txt_media">
                                                <label class="form-control-label" for="purpose">
                                                    Purpose (optional) :
                                                </label></div>
                                            <div class="col-sm-7">
                                                <input type="text" id="purpose" name="purpose" class="form-control"
                                                       placeholder="optional">
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div class="col-sm-7 col-sm-offset-5 ml-auto pad_media">
                                                <button type="submit" class="btn btn-effect-ripple btn-primary">
                                                    Transfer
                                                </button>
                                                <button type="reset"
                                                        class="btn btn-effect-ripple btn-default reset_btn">Reset
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
    <script src="{{asset('vendors/moment/js/moment.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/iCheck/js/icheck.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.datetimepicker.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyADWjiTRjsycXf3Lo0ahdc7dDxcQb475qw&libraries=places"></script>
    <script type="text/javascript" src="{{asset('vendors/gmaps/js/gmaps.min.js')}}"></script>
    <script src="{{asset('js/custom_js/realtime_form.js')}}" type="text/javascript"></script>
    <script>function isNumber(evt,element){var charCode=(evt.which)?evt.which:event.keyCode;if((charCode!=46||$(element).val().indexOf('.')!=-1)&&(charCode<48||charCode>57))return false;return true;}</script>
    <!-- end of page level js -->
@stop







