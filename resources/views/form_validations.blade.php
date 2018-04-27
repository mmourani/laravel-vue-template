@extends('layouts.default')
@section('title')
    Realtime Forms | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="vendors/iCheck/css/all.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/passtrength/passtrength.css">
    <link rel="stylesheet" type="text/css" href="vendors/sweetalert2/css/sweetalert2.min.css"/>
    <link href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom_css/form2.css"/>
    <link rel="stylesheet" href="css/custom_css/form3.css"/>
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Form Validations
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
                    Form Validations
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-md-12 col-xl-6">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-star"></i> Basic Form Validation
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <form id="form-validation" action="form_validations" method="get"
                                  class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-md-4 text-right txt_media">
                                        <label class="form-control-label" for="val-username">
                                            Username
                                            <span class="text-danger">*</span>
                                        </label></div>
                                    <div class="col-md-6">
                                        <input type="text" id="val-username" name="firstName" class="form-control"
                                               placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 text-right txt_media">
                                        <label class="form-control-label" for="email">
                                            Email
                                            <span class="text-danger">*</span>
                                        </label></div>
                                    <div class="col-md-6">
                                        <input type="text" id="email" name="email" class="form-control"
                                               placeholder="Enter your valid email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 text-right txt_media">
                                        <label class="form-control-label" for="password">
                                            Password
                                            <span class="text-danger">*</span>
                                        </label></div>
                                    <div class="col-md-6">
                                        <input type="password" id="password" name="password" class="form-control"
                                               placeholder="Enter your password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 text-right txt_media">
                                        <label class="form-control-label" for="confirmpassword">
                                            Confirm Password
                                            <span class="text-danger">*</span>
                                        </label></div>
                                    <div class="col-md-6">
                                        <input type="password" id="confirmpassword" name="confirmpassword"
                                               class="form-control" placeholder="Confirm password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 text-right txt_media">
                                        <label class="form-control-label" for="message">
                                            Message
                                            <span class="text-danger">*</span>
                                        </label></div>
                                    <div class="col-md-6">
                                        <textarea id="message" name="message" rows="7"
                                                  class="form-control resize_vertical"
                                                  placeholder="Enter your message"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 text-right txt_media">
                                        <label class="form-control-label" for="skill">
                                            Best Skill
                                            <span class="text-danger">*</span>
                                        </label></div>
                                    <div class="col-md-6">
                                        <select id="skill" name="skill" class="form-control">
                                            <option value="">
                                                Please select
                                            </option>
                                            <option value="html">HTML</option>
                                            <option value="css">CSS</option>
                                            <option value="javascript">Javascript</option>
                                            <option value="php">PHP</option>
                                            <option value="mysql">MySQL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 text-right txt_media">
                                        <label class="form-control-label" for="url">
                                            Website
                                            <span class="text-danger">*</span>
                                        </label></div>
                                    <div class="col-md-6">
                                        <input type="text" id="url" name="url" class="form-control"
                                               placeholder="http://example.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 text-right txt_media">
                                        <label class="form-control-label" for="number">
                                            Phone Number
                                            <span class="text-danger">*</span>
                                        </label></div>
                                    <div class="col-md-6">
                                        <input type="text" id="number" name="number" class="form-control"
                                               placeholder="Enter your phone number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 text-right txt_media">
                                        <label class="form-control-label">Gender
                                            <span class="text-danger">*</span>
                                        </label></div>
                                    <div class="col-md-6">
                                        <div>
                                            <label>
                                                <input class="custom_radio" type="radio" name="gender" value="male"/>
                                                Male
                                            </label>
                                        </div>
                                        <div>
                                            <label>
                                                <input class="custom_radio" type="radio" name="gender" value="female"/>
                                                Female
                                            </label>
                                        </div>
                                        <div>
                                            <label>
                                                <input class="custom_radio" type="radio" name="gender" value="other"/>
                                                Other
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 ml-auto">
                                        <label class="padding7" for="terms">
                                            <input type="checkbox" class="custom_icheck" id="terms" name="terms"
                                                   value="1">&nbsp;&nbsp;I agree to
                                            <a href="#modal-terms" data-toggle="modal">
                                                Terms &amp; Conditions
                                            </a>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-md-8 ml-auto">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-effect-ripple btn-default reset_btn">Reset
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div id="modal-terms" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title text-center">
                                                <strong>
                                                    Terms and Conditions
                                                </strong>
                                            </h3>
                                        </div>
                                        <div class="modal-body">
                                            <h4 class="page-header">
                                                1.
                                                <strong>General</strong>
                                            </h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                                ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac
                                                cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                                                Integer fermentum tincidunt auctor.
                                            </p>
                                            <h4 class="page-header">
                                                2.
                                                <strong>Account</strong>
                                            </h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                                ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac
                                                cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                                                Integer fermentum tincidunt auctor.
                                            </p>
                                            <h4 class="page-header">
                                                3.
                                                <strong>Service</strong>
                                            </h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                                ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac
                                                cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                                                Integer fermentum tincidunt auctor.
                                            </p>
                                            <h4 class="page-header">
                                                4.
                                                <strong>Payments</strong>
                                            </h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                                ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac
                                                cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                                                Integer fermentum tincidunt auctor.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="text-center">
                                                <button type="button" class="btn btn-effect-ripple btn-primary"
                                                        data-dismiss="modal">
                                                    I've read them!
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-folder"></i> Validations In Modal
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>

                                </span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <button type="button" class="btn btn-primary btn-lg center-block m-auto"
                                        data-toggle="modal" data-target="#myModal">
                                    Click to open form in modal
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <h4 class="modal-title" id="myModalLabel">Form Modal</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="form-validation3" action="#"
                                                      method="get">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" name="modalfirst_name"
                                                                       id="modalfirst_name"
                                                                       class="form-control input-md"
                                                                       placeholder="First Name" tabindex="1"
                                                                       data-error="First name must be entered"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" name="modallast_name"
                                                                       id="modallast_name"
                                                                       class="form-control input-md"
                                                                       placeholder="Last Name" tabindex="2"
                                                                       data-error="Last name must be entered"
                                                                       required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="text" name="display_name"
                                                                       id="display_name"
                                                                       class="form-control input-md"
                                                                       placeholder="Display Name" tabindex="3"
                                                                       data-error="Username must be enetered"
                                                                       required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="text" name="email"
                                                                       class="form-control input-md"
                                                                       placeholder="Email Address" tabindex="4"
                                                                       data-error="that email address is invalid"
                                                                       required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <input type="password" name="modalpassword"
                                                                       id="modalpassword"
                                                                       class="form-control input-md"
                                                                       placeholder="Password" tabindex="5"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <input type="password" name="confirmpassword"
                                                                       class="form-control input-md"
                                                                       placeholder="Confirm Password"
                                                                       data-match="#password"
                                                                       data-match-error="conform passwork should be same as password"
                                                                       tabindex="6" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="col-md-8">
                                                                    <label class="padding7" for="modalterms">
                                                                        <input type="checkbox"
                                                                               class="custom_icheck"
                                                                               id="modalterms" name="modalterms"
                                                                               value="1">&nbsp;&nbsp;I agree
                                                                    </label>
                                                                </div>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p class="margin-top">
                                                                By clicking on the
                                                                <strong class="label label-primary">Register</strong>
                                                                , you agree the following
                                                                <a href="#">Terms and Conditions</a> liability
                                                                as set out in this site, including our Cookie
                                                                Use.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row marginTop">
                                                        <div class="col-6 col-md-6">
                                                            <input type="submit" id="btncheck" value="Register"
                                                                   class="btn btn-primary btn-block btn-md btn-responsive"
                                                                   tabindex="7">
                                                        </div>
                                                        <div class="col-6 col-md-6">
                                                            <a class="btn btn-success text_white btn-block btn-md btn-responsive">Sign
                                                                In</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </div>
                        </div>
                    </div>
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-pencil-alt"></i> Registration Form Validation
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body reg_form">
                            <form method="get">
                                <div class="form-group">
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert"
                                                aria-hidden="true">&times;</button>
                                        Validation will be completed on Tab or Enter key press.
                                    </div>
                                    <label for="validate-text">
                                        Validate Text
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="validate-text" id="validate-text"
                                               placeholder="Enter Validate Text" required>
                                        <span class="input-group-addon danger">
                                            <i class="fa fa-close" aria-hidden="true"></i>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="validate-optional">Optional</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="validate-optional"
                                               id="validate-optional" placeholder="Optional">
                                        <span class="input-group-addon info">
                                                <i class="fa fa-asterisk" aria-hidden="true"></i>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="validate-email">
                                        Validate Email
                                    </label>
                                    <div class="input-group" data-validate="email">
                                        <input type="text" class="form-control" name="validate-email"
                                               id="validate-email" placeholder="Enter Validate Email" required>
                                        <span class="input-group-addon danger">
                                                <i class="fa fa-close" aria-hidden="true"></i>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="validate-phone">
                                        Validate Phone
                                    </label>
                                    <div class="input-group" data-validate="phone">
                                        <input type="text" class="form-control" name="validate-phone"
                                               id="validate-phone" placeholder="(814) 555-1234" required>
                                        <span class="input-group-addon danger">
                                                <i class="fa fa-close" aria-hidden="true"></i>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="validate-length">
                                        Minimum length 5 characters
                                    </label>
                                    <div class="input-group" data-validate="length" data-length="5">
                                        <textarea class="form-control resize_vertical" name="validate-length"
                                                  id="validate-length" placeholder="Minimum length 5 characters"
                                                  required></textarea>
                                        <span class="input-group-addon danger">
                                                <i class="fa fa-close char_icon" aria-hidden="true"></i>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="validate-select">
                                        Validate Select
                                    </label>
                                    <div class="input-group">
                                        <select class="form-control" name="validate-select" id="validate-select"
                                                required>
                                            <option value="">
                                                Select an item
                                            </option>
                                            <option value="item_1">Item 1</option>
                                            <option value="item_2">Item 2</option>
                                            <option value="item_3">Item 3</option>
                                        </select>
                                        <span class="input-group-addon danger">
                                                <i class="fa fa-close" aria-hidden="true"></i>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="validate-number">
                                        Validate Number
                                    </label>
                                    <div class="input-group" data-validate="number">
                                        <input type="text" class="form-control" name="validate-number"
                                               id="validate-number" placeholder="Validate Number" required>
                                        <span class="input-group-addon danger">
                                                <i class="fa fa-close" aria-hidden="true"></i>
                                            </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-6">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-key"></i> Password Strength
                            </h3>
                            <span class="float-right">
                                        <i class="fa fa-fw ti-angle-up clickable"></i>
                                     <i class="fa fa-fw ti-close removecard"></i>
                                    </span>
                        </div>
                        <div class="card-body">
                            <form action="#" method="get" id="passwordForm">
                                <!-- CSRF Token -->
                                <div class="form-group">
                                    <input type="password" class="input-md form-control" name="password1" id="password1"
                                           placeholder="New Password" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="input-md form-control" name="password2" id="password2"
                                           placeholder="Repeat Password" autocomplete="off">
                                </div>
                                <div>
                                    <div class="col-sm-12 padding">
                                        <span style="color:#2ECC71;">
                                        <i class="fa fa-check" id="pwmatch"></i></span>
                                        Passwords Match
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <a href="#" class="col-12 btn btn-primary btn-load btn-md"
                                       data-loading-text="Changing Password...">Change Password</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-credit-card"></i> Payment Gateway
                            </h3>
                            <span class="float-right">
                                        <i class="fa fa-fw ti-angle-up clickable"></i>
                                     <i class="fa fa-fw ti-close removecard"></i>
                                    </span>
                        </div>
                        <div class="card-body">
                            <div class="card-wrapper"></div>
                            <form id="card-form">
                                <div id="card">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label m-t-10">Card Number
                                                    <input name="number" required type="text" placeholder=""
                                                           class="form-control"/>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Expiry Date
                                                    <input name="expiry" id="cardexpire" placeholder=""
                                                           class="form-control"/>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">CVV
                                                    <input name="cvc" required type="text" placeholder=""
                                                           class="form-control"/>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label" for="your_name">Name on Card
                                                    <input name="name" type="text" class="form-control"
                                                           id="your_name" maxlength="40" required/>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-warning btn-block">Save and Pay</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--image upload -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mrgn_top">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fa fa-fw ti-pencil"></i> Form Validations
                                    </h3>
                                    <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                                </div>
                                <div class="card-body">
                                    <form method="get" name="frmOnline" onsubmit="return Validation()"
                                          enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" name="txtName" id="txtName"
                                                           class="form-control input-md"
                                                           placeholder="First Name"></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" name="last_name" id="txtlastname"
                                                           class="form-control input-md"
                                                           placeholder="Last Name"></div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="txtEmail" id="txtEmail"
                                                           class="form-control input-md"
                                                           placeholder="Enter Your Email Id"></div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="display_name" id="txtAddress1"
                                                           class="form-control input-md"
                                                           placeholder="Address Line1"></div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="display_name" id="txtAddress2"
                                                           class="form-control input-md"
                                                           placeholder="Address Line2"></div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <select id="e1" class="form-control select2">
                                                        <option value="">
                                                            Select State
                                                        </option>
                                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                        </optgroup>
                                                        <optgroup label="Pacific Time Zone">
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                        </optgroup>
                                                        <optgroup label="Mountain Time Zone">
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="MT">Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="ND">
                                                                North Dakota
                                                            </option>
                                                            <option value="UT">Utah</option>
                                                            <option value="WY">Wyoming</option>
                                                        </optgroup>
                                                        <optgroup label="Central Time Zone">
                                                            <option value="AL">Alabama</option>
                                                            <option value="AR">Arkansas</option>
                                                            <option value="IL">Illinois</option>
                                                            <option value="IA">Iowa</option>
                                                            <option value="KS">Kansas</option>
                                                            <option value="KY">Kentucky</option>
                                                            <option value="LA">Louisiana</option>
                                                            <option value="MN">Minnesota</option>
                                                            <option value="MS">
                                                                Mississippi
                                                            </option>
                                                            <option value="MO">Missouri</option>
                                                            <option value="OK">Oklahoma</option>
                                                            <option value="SD">
                                                                South Dakota
                                                            </option>
                                                            <option value="TX">Texas</option>
                                                            <option value="TN">Tennessee</option>
                                                            <option value="WI">Wisconsin</option>
                                                        </optgroup>
                                                        <optgroup label="Eastern Time Zone">
                                                            <option value="CT">
                                                                Connecticut
                                                            </option>
                                                            <option value="DE">Delaware</option>
                                                            <option value="FL">Florida</option>
                                                            <option value="GA">Georgia</option>
                                                            <option value="IN">Indiana</option>
                                                            <option value="ME">Maine</option>
                                                            <option value="MD">Maryland</option>
                                                            <option value="MA">
                                                                Massachusetts
                                                            </option>
                                                            <option value="MI">Michigan</option>
                                                            <option value="NH">
                                                                New Hampshire
                                                            </option>
                                                            <option value="NJ">New Jersey</option>
                                                            <option value="NY">New York</option>
                                                            <option value="NC">
                                                                North Carolina
                                                            </option>
                                                            <option value="OH">Ohio</option>
                                                            <option value="PA">
                                                                Pennsylvania
                                                            </option>
                                                            <option value="RI">
                                                                Rhode Island
                                                            </option>
                                                            <option value="SC">
                                                                South Carolina
                                                            </option>
                                                            <option value="VT">Vermont</option>
                                                            <option value="VA">Virginia</option>
                                                            <option value="WV">
                                                                West Virginia
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="display_name" id="txtPhone"
                                                           class="form-control input-md"
                                                           placeholder="Phone Number"></div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-6 col-md-4 ml-auto">
                                                        <input type="submit" id="btncheck1" value="Register"
                                                               class="btn btn-primary btn-block btn-md btn-responsive"
                                                               tabindex="7">
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <input type="button" value="Cancel"
                                                               class="btn btn-success btn-block btn-md btn-responsive">
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
                        <div class="col-md-12">
                            <div class="card mrgn_top">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fa fa-fw ti-ink-pen"></i> Bootstrap Input MaxLength
                                    </h3>
                                    <span class="float-right">
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                                </div>
                                <div class="card-body">
                                    <!--max length starts-->
                                    <div class="form-group">
                                        <label for="placement" class="control-label">
                                            Custom Position
                                        </label>
                                        <input type="text" class="form-control" maxlength="25" name="placement"
                                               id="placement"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="moreoptions" class="control-label">Options</label>
                                        <input type="text" class="form-control experment" maxlength="25"
                                               name="moreoptions" id="moreoptions"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="alloptions" class="control-label">
                                            All the options
                                        </label>
                                        <input type="text" class="form-control experment" maxlength="25"
                                               name="alloptions"
                                               id="alloptions"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea" class="control-label">Text Area</label>
                                        <textarea id="textarea" class="form-control resize_vertical"
                                                  maxlength="225" rows="4"
                                                  placeholder="This textarea has a limit of 225 chars."></textarea>
                                    </div>
                                    <!--min length ends-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-md-6 -->
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
    <script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="vendors/bootstrap-maxlength/js/bootstrap-maxlength.js"></script>
    <script type="text/javascript" src="vendors/sweetalert2/js/sweetalert2.min.js"></script>
    <script type="text/javascript" src="vendors/card/jquery.card.js"></script>
    <script type="text/javascript" src="vendors/iCheck/js/icheck.js"></script>
    <script src="js/passtrength/passtrength.js"></script>
    <script type="text/javascript" src="js/custom_js/form2.js"></script>
    <script type="text/javascript" src="js/custom_js/form3.js"></script>
    <script type="text/javascript" src="js/custom_js/form_validations.js"></script>
    <!-- end of page level js -->
@stop


