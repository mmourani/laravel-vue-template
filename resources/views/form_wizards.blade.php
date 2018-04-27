@extends('layouts.default')
@section('title')
    Form Wizards | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="vendors/select2/css/select2.min.css" type="text/css" rel="stylesheet">
    <link href="vendors/select2/css/select2-bootstrap.css" rel="stylesheet">
    <link href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet">
    <link href="vendors/iCheck/css/all.css" rel="stylesheet" type="text/css"/>
    <link href="css/custom_css/wizard.css" rel="stylesheet">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Form Wizards
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
                    Form Wizards
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                Bootstrap Wizard
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="stepwizard">
                                <div class="stepwizard-row setup-card">
                                    <div class="stepwizard-step">
                                        <a href="#step-1" class="btn btn-primary btn-block">1</a>
                                        <p>Step 1</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-2" class="btn btn-default btn-block">2</a>
                                        <p>Step 2</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-3" class="btn btn-default btn-block">3</a>
                                        <p>Step 3</p>
                                    </div>
                                </div>
                            </div>
                            <form role="form">
                                <div class="row setup-content" id="step-1">
                                    <div class="col-12">
                                        <div class="col-md-12">
                                            <h3 class="h3pnl_font"> Step 1</h3>
                                            <div class="form-group">
                                                <label for="step_fname" class="control-label">First Name</label>
                                                <input id="step_fname" maxlength="100" type="text" class="form-control"
                                                       placeholder="Enter First Name"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="step_lname" class="control-label">Last Name</label>
                                                <input id="step_lname" maxlength="100" type="text" class="form-control"
                                                       placeholder="Enter Last Name"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="step_email" class="control-label">Email</label>
                                                <input id="step_email" maxlength="100" type="email" class="form-control"
                                                       placeholder="Enter Email Address"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="step_cemail" class="control-label">Confirm Email</label>
                                                <input id="step_cemail" maxlength="100" type="email"
                                                       class="form-control"
                                                       placeholder="Re-enter Your Email"/>
                                            </div>
                                            <button class="btn btn-primary nextBtn float-right" type="button">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row setup-content" id="step-2">
                                    <div class="col-12">
                                        <div class="col-md-12">
                                            <h3 class="h3pnl_font"> Step 2</h3>
                                            <div class="form-group">
                                                <label for="step_cname" class="control-label">Company Name</label>
                                                <input id="step_cname" maxlength="200" type="text" class="form-control"
                                                       placeholder="Enter Company Name"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="step_cadd" class="control-label">Company Address</label>
                                                <input id="step_cadd" maxlength="200" type="text" class="form-control"
                                                       placeholder="Enter Company Address"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="step_pwd" class="control-label">Password</label>
                                                <input id="step_pwd" maxlength="12" type="password" class="form-control"
                                                       placeholder="Enter password"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="step_cpwd" class="control-label">Confirm Password</label>
                                                <input id="step_cpwd" maxlength="12" type="password"
                                                       class="form-control"
                                                       placeholder="Confirm password"/>
                                            </div>
                                            <button class="btn btn-primary prevBtn pull-left" type="button">
                                                Previous
                                            </button>
                                            <button class="btn btn-primary nextBtn float-right" type="button">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row setup-content" id="step-3">
                                    <div class="col-12">
                                        <div class="col-md-12">
                                            <h3 class="h3pnl_font"> Step 3</h3>
                                            <div class="form-group">
                                                <label for="acceptTerms1">
                                                    <input id="acceptTerms1" name="acceptTerms" type="checkbox"
                                                           class="custom-checkbox"> I agree with the <a
                                                            href="javascript:void(0)">terms &amp; Conditions</a>.
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary prevBtn pull-left" type="button">
                                                    Previous
                                                </button>
                                                <button class="btn btn-success float-right" type="submit">
                                                    Finish!
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
            <div class="row mrgn_top">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                                   data-hc="white"></i> Bootstrap Wizard 2
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <form id="commentForm" method="get" action="#">
                                <div id="rootwizard">
                                    <ul class="nav nav-pills">
                                        <li class="nav_active nav-item">
                                            <a href="#tab1" data-toggle="tab" class="nav-link active">
                                                <span>
                                                    <span class="item_clr">Credentials</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab2" class="nav-link" data-toggle="tab">
                                                <span>
                                                    <span>Details</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab3" class="nav-link" data-toggle="tab">
                                                <span>
                                                    <span>Contact</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group">
                                                <label for="userName" class="control-label">User name *</label>
                                                <input id="userName" name="username" type="text"
                                                       placeholder="Enter user name" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="control-label">Email *</label>
                                                <input id="email" name="email" placeholder="Enter your Email"
                                                       type="text" class="form-control required email">
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="control-label">Password *</label>
                                                <input id="password" name="password" type="password"
                                                       placeholder="Enter your password" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="confirm" class="control-label">Confirm Password *</label>
                                                <input id="confirm" name="confirm" type="password"
                                                       placeholder="Confirm your password "
                                                       class="form-control required">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group">
                                                <label for="name" class="control-label">First name *</label>
                                                <input id="name" name="fname" placeholder="Enter your First name"
                                                       type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="surname" class="control-label">Last name *</label>
                                                <input id="surname" name="lname" type="text"
                                                       placeholder=" Enter your Last name"
                                                       class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Gender</label>
                                                <select class="form-control" name="gender" id="gender"
                                                        title="Select an account type...">
                                                    <option disabled="" selected="">Select</option>
                                                    <option>MALE</option>
                                                    <option>FEMALE</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input id="address" name="address" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="age" class="control-label">Age *</label>
                                                <input id="age" name="age" type="text" maxlength="3"
                                                       class="form-control required number"
                                                       data-bv-greaterthan-inclusive="false"
                                                       data-bv-lessthan-inclusive="true">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <div class="form-group">
                                                <label for="phone1" class="control-label">Home number *</label>
                                                <input type="text" class="form-control" id="phone1" name="phone1"
                                                       placeholder="(999)999-9999">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone2" class="control-label">Personal number *</label>
                                                <input type="text" class="form-control" id="phone2" name="phone2"
                                                       placeholder="(999)999-9999">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone3" class="control-label">Alternate number *</label>
                                                <input type="text" class="form-control" id="phone3" name="phone3"
                                                       placeholder="(999)999-9999">
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group">
                                                <label>
                                                    <input id="acceptTerms" name="acceptTerms" type="checkbox"
                                                           class="custom-checkbox"> *I agree with the <a
                                                            href="javascript:void(0)">terms &amp; Conditions</a>.
                                                </label>
                                            </div>
                                        </div>
                                        <ul class="pager wizard">
                                            <li class="previous">
                                                <a>Previous</a>
                                            </li>
                                            <li class="next">
                                                <a>Next</a>
                                            </li>
                                            <li class="next finish" style="display:none;">
                                                <a>Finish</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">User Register</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>You have Submitted Successfully.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">OK
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
        <!-- content -->
    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script src="vendors/iCheck/js/icheck.js"></script>
    <script src="vendors/moment/js/moment.min.js"></script>
    <script src="vendors/select2/js/select2.js" type="text/javascript"></script>
    <script src="vendors/bootstrapwizard/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
    <script src="js/custom_js/form_wizards.js" type="text/javascript"></script>
    <!-- end of page level js -->
@stop
