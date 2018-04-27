@extends('layouts.default')
@section('title')
    Edit User | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="vendors/jasny-bootstrap/css/jasny-bootstrap.css" type="text/css" rel="stylesheet">
    <link href="vendors/select2/css/select2.min.css" type="text/css" rel="stylesheet">
    <link href="vendors/select2/css/select2-bootstrap.css" type="text/css" rel="stylesheet">
    <link href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="vendors/iCheck/css/all.css" rel="stylesheet" type="text/css"/>
    <link href="css/custom_css/wizard.css" type="text/css" rel="stylesheet">
    <!--end of page level css-->

@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit User
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#"> Users</a>
                </li>
                <li class="active">
                    Edit User
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">
                                <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff"
                                   data-loop="true"></i> Edit User
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <!-- errors -->
                            <!--main content-->
                            <form id="adduser_form" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token"/>
                                <div id="pager_wizard">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a href="#tab1" data-toggle="tab" class="nav-link active">User Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab2" data-toggle="tab" class="nav-link">Bio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab3" data-toggle="tab" class="nav-link">Address</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab4" data-toggle="tab" class="nav-link">User Group</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="row form-group">
                                                <div class="col-sm-2 text-right">
                                                <label for="first_name" class="form-control-label ">First Name
                                                    *</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input id="first_name" name="first_name" type="text"
                                                           placeholder="First Name" class="form-control required"
                                                           value="Addison"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-2 text-right">
                                                <label for="last_name" class="form-control-label">Last Name
                                                    *</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input id="last_name" name="last_name" type="text"
                                                           placeholder="Last Name" class="form-control required"
                                                           value="Schmeler"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                    <div class="col-sm-2 text-right">
                                                <label for="email" class="form-control-label">Email *</label>
                                                    </div>
                                                <div class="col-sm-10">
                                                    <input id="email" name="email" placeholder="E-mail" type="text"
                                                           class="form-control required email"
                                                           value="Addisone@sf.com"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-2 text-right">
                                                <label for="password" class="form-control-label">Password *</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input id="password" name="password" type="password"
                                                           placeholder="Password" class="form-control required"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-2 text-right">
                                                <label for="password_confirm" class="form-control-label">Confirm
                                                    Password*</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input id="password_confirm" name="password_confirm" type="password"
                                                           placeholder="Confirm Password "
                                                           class="form-control required"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="row form-group required">
                                                <div class="col-sm-2 text-right">
                                                <label for="dob" class="form-control-label ">Date of Birth</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input id="dob" name="dob" type="text" class="form-control"
                                                           placeholder="dd/mm/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-2 text-right">
                                                <label for="pic" class="form-control-label">Profile picture</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail"
                                                             style="width: 200px; height: 200px;">
                                                            <img src="img/authors/avatar1.jpg" alt="profile pic"
                                                                 class="profile_pic">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                                             style="max-width: 200px; max-height: 200px;"></div>
                                                        <div>
                                                                <span class="btn btn-default btn-file">
                                    <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input id="pic" name="pic_file" type="file"
                                                                       class="form-control"/>
                                                                </span>
                                                            <a href="#" class="btn btn-danger fileinput-exists"
                                                               data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group required">
                                                <div class="col-sm-2 text-right">
                                                <label for="bio" class="form-control-label">Bio
                                                    <small>(brief intro) *</small>
                                                </label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <textarea name="bio" id="bio" class="form-control resize_vertical"
                                                              rows="4">Iam Addison Schmeler</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <div class="row form-group">
                                                <div class="col-sm-2 text-right">
                                                <label for="gender" class="form-control-label">Gender *</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <select class="form-control select21" id="gender"
                                                            title="Select Gender..." name="gender">
                                                        <option disabled>Select Gender</option>
                                                        <option value="male">MALE</option>
                                                        <option value="female" selected>FEMALE</option>
                                                        <option value="other">OTHER</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-2 text-right">
                                                <label for="country" class="form-control-label">Country</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <select class="select21 form-control" name="country" id="country">
                                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                                            <option>Select Country</option>
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
                                                            <option value="ND">North Dakota</option>
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
                                                            <option value="MS">Mississippi</option>
                                                            <option value="MO">Missouri</option>
                                                            <option value="OK">Oklahoma</option>
                                                            <option value="SD">South Dakota</option>
                                                            <option value="TX">Texas</option>
                                                            <option value="TN">Tennessee</option>
                                                            <option value="WI">Wisconsin</option>
                                                        </optgroup>
                                                        <optgroup label="Eastern Time Zone">
                                                            <option value="CT">Connecticut</option>
                                                            <option value="DE">Delaware</option>
                                                            <option value="FL">Florida</option>
                                                            <option value="GA">Georgia</option>
                                                            <option value="IN">Indiana</option>
                                                            <option value="ME">Maine</option>
                                                            <option value="MD">Maryland</option>
                                                            <option value="MA">Massachusetts</option>
                                                            <option value="MI">Michigan</option>
                                                            <option value="NH">New Hampshire</option>
                                                            <option value="NJ">New Jersey</option>
                                                            <option value="NY">New York</option>
                                                            <option value="NC">North Carolina</option>
                                                            <option value="OH">Ohio</option>
                                                            <option value="PA">Pennsylvania</option>
                                                            <option value="RI">Rhode Island</option>
                                                            <option value="SC">South Carolina</option>
                                                            <option value="VT">Vermont</option>
                                                            <option value="VA">Virginia</option>
                                                            <option value="WV">West Virginia</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group ">
                                                <div class="col-sm-2 text-right">
                                                <label for="state" class="form-control-label">State </label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input id="state" name="state" type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="row form-group required">
                                                <div class="col-sm-2 text-right">
                                                <label for="city" class="form-control-label">City </label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input id="city" name="city" type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="row form-group required">
                                                <div class="col-sm-2 text-right">
                                                <label for="address" class="form-control-label">Address </label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input id="address" name="address" type="text"
                                                           class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="row form-group required">
                                                <div class="col-sm-2 text-right">
                                                <label for="postal" class="form-control-label">Postal/zip</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input id="postal" name="postal" type="text" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab4">
                                            <p class="text-danger"><strong>Be careful with group selection, if you give
                                                admin access.. they can access admin section</strong></p>
                                            <div class="row form-group required">
                                                <div class="col-sm-2 text-right">
                                                <label for="group" class="form-control-label">Group *</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <select class="form-control required select21"
                                                            title="Select group..." name="group" id="group">
                                                        <option disabled>Select Group</option>
                                                        <option value="admin" selected="selected">admin</option>
                                                        <option value="user">user</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-2 text-right">
                                                <label for="activate" class="form-control-label"> Activate
                                                    User</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input id="activate" name="activate" type="checkbox" checked
                                                           class="pos-rel p-l-30 custom-checkbox" value="1">
                                                    <span>If user is not activated, mail will be sent to user with activation link</span>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="pager wizard">
                                            <li class="previous">
                                                <a href="#">Previous</a>
                                            </li>
                                            <li class="next">
                                                <a href="#">Next</a>
                                            </li>
                                            <li class="next finish" style="display:none;">
                                                <a href="javascript:;">Finish</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!--  Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">User Edit</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Account Edited Successfully.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Ok
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
            <!--row end-->
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
                                <div class="tab-pane" id="r_tab2">
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
                                <div class="tab-pane" id="r_tab3">
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







        <!--<section class="content">-->
            <!--<div class="row">-->
                <!--<div class="col-md-12">-->
                    <!--<div class="panel panel-primary">-->
                        <!--<div class="panel-heading">-->
                            <!--<h3 class="panel-title">-->
                                <!--<i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i> Edit User-->
                            <!--</h3>-->
                            <!--<span class="pull-right">-->
                                    <!--<i class="fa fa-fw ti-angle-up clickable"></i>-->
                                    <!--<i class="fa fa-fw ti-close removepanel clickable"></i>-->
                                <!--</span>-->
                        <!--</div>-->
                        <!--<div class="panel-body">-->
                            <!--&lt;!&ndash; errors &ndash;&gt;-->
                            <!--&lt;!&ndash;main content&ndash;&gt;-->
                            <!--<form id="adduser_form" method="POST" enctype="multipart/form-data" class="form-horizontal">-->
                                <!--&lt;!&ndash; CSRF Token &ndash;&gt;-->
                                <!--<input type="hidden" name="_token"/>-->
                                <!--<div id="pager_wizard">-->
                                    <!--<ul>-->
                                        <!--<li>-->
                                            <!--<a href="#tab1" data-toggle="tab">User Profile</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="#tab2" data-toggle="tab">Bio</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="#tab3" data-toggle="tab">Address</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="#tab4" data-toggle="tab">User Group</a>-->
                                        <!--</li>-->
                                    <!--</ul>-->
                                    <!--<div class="tab-content">-->
                                        <!--<div class="tab-pane" id="tab1">-->
                                            <!--<h2 class="hidden">&nbsp;</h2>-->
                                            <!--<div class="form-group">-->
                                                <!--<label for="first_name" class="col-sm-2 control-label">First Name-->
                                                    <!--*</label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<input id="first_name" name="first_name" type="text" placeholder="First Name" class="form-control required" value="Addison"/>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="form-group">-->
                                                <!--<label for="last_name" class="col-sm-2 control-label">Last Name-->
                                                    <!--*</label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<input id="last_name" name="last_name" type="text" placeholder="Last Name" class="form-control required" value="Schmeler"/>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="form-group">-->
                                                <!--<label for="email" class="col-sm-2 control-label">Email *</label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<input id="email" name="email" placeholder="E-mail" type="text" class="form-control required email" value="Addisone@sf.com"/>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="form-group">-->
                                                <!--<label for="password" class="col-sm-2 control-label">Password *</label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<input id="password" name="password" type="password" placeholder="Password" class="form-control required"/>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="form-group">-->
                                                <!--<label for="password_confirm" class="col-sm-2 control-label">Confirm-->
                                                    <!--Password*</label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<input id="password_confirm" name="password_confirm" type="password" placeholder="Confirm Password " class="form-control required"/>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                        <!--<div class="tab-pane" id="tab2">-->
                                            <!--<h2 class="hidden">&nbsp;</h2>-->
                                            <!--<div class="form-group required">-->
                                                <!--<label for="dob" class="col-sm-2 control-label">Date of Birth</label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<input id="dob" name="dob" type="text" class="form-control" placeholder="dd/mm/yyyy"/>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="form-group">-->
                                                <!--<label for="pic" class="col-sm-2 control-label">Profile picture</label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<div class="fileinput fileinput-new" data-provides="fileinput">-->
                                                        <!--<div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">-->
                                                            <!--<img src="img/authors/avatar1.jpg" alt="profile pic" class="profile_pic" data-pagespeed-url-hash="2218177211" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">-->
                                                        <!--</div>-->
                                                        <!--<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>-->
                                                        <!--<div>-->
                                                                <!--<span class="btn btn-default btn-file">-->
                                    <!--<span class="fileinput-new">Select image</span>-->
                                                                <!--<span class="fileinput-exists">Change</span>-->
                                                                <!--<input id="pic" name="pic_file" type="file" class="form-control"/>-->
                                                                <!--</span>-->
                                                            <!--<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="form-group required">-->
                                                <!--<label for="bio" class="col-sm-2 control-label">Bio-->
                                                    <!--<small>(brief intro) *</small>-->
                                                <!--</label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<textarea name="bio" id="bio" class="form-control resize_vertical" rows="4">Iam Addison Schmeler</textarea>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                        <!--<div class="tab-pane" id="tab3">-->
                                            <!--<div class="form-group">-->
                                                <!--<label for="gender" class="col-sm-2 control-label">Gender *</label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<select class="form-control select21" id="gender" title="Select Gender..." name="gender">-->
                                                        <!--<option disabled>Select Gender</option>-->
                                                        <!--<option value="male">MALE</option>-->
                                                        <!--<option value="female" selected>FEMALE</option>-->
                                                        <!--<option value="other">OTHER</option>-->
                                                    <!--</select>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="form-group">-->
                                                <!--<label for="country" class="col-sm-2 control-label">Country</label>-->
                                                <!--<div class="col-md-10">-->
                                                    <!--<select class="select21 form-control" name="country" id="country">-->
                                                        <!--<optgroup label="Alaskan/Hawaiian Time Zone">-->
                                                            <!--<option>Select Country</option>-->
                                                            <!--<option value="AK">Alaska</option>-->
                                                            <!--<option value="HI">Hawaii</option>-->
                                                        <!--</optgroup>-->
                                                        <!--<optgroup label="Pacific Time Zone">-->
                                                            <!--<option value="CA">California</option>-->
                                                            <!--<option value="NV">Nevada</option>-->
                                                            <!--<option value="OR">Oregon</option>-->
                                                            <!--<option value="WA">Washington</option>-->
                                                        <!--</optgroup>-->
                                                        <!--<optgroup label="Mountain Time Zone">-->
                                                            <!--<option value="AZ">Arizona</option>-->
                                                            <!--<option value="CO">Colorado</option>-->
                                                            <!--<option value="ID">Idaho</option>-->
                                                            <!--<option value="MT">Montana</option>-->
                                                            <!--<option value="NE">Nebraska</option>-->
                                                            <!--<option value="NM">New Mexico</option>-->
                                                            <!--<option value="ND">North Dakota</option>-->
                                                            <!--<option value="UT">Utah</option>-->
                                                            <!--<option value="WY">Wyoming</option>-->
                                                        <!--</optgroup>-->
                                                        <!--<optgroup label="Central Time Zone">-->
                                                            <!--<option value="AL">Alabama</option>-->
                                                            <!--<option value="AR">Arkansas</option>-->
                                                            <!--<option value="IL">Illinois</option>-->
                                                            <!--<option value="IA">Iowa</option>-->
                                                            <!--<option value="KS">Kansas</option>-->
                                                            <!--<option value="KY">Kentucky</option>-->
                                                            <!--<option value="LA">Louisiana</option>-->
                                                            <!--<option value="MN">Minnesota</option>-->
                                                            <!--<option value="MS">Mississippi</option>-->
                                                            <!--<option value="MO">Missouri</option>-->
                                                            <!--<option value="OK">Oklahoma</option>-->
                                                            <!--<option value="SD">South Dakota</option>-->
                                                            <!--<option value="TX">Texas</option>-->
                                                            <!--<option value="TN">Tennessee</option>-->
                                                            <!--<option value="WI">Wisconsin</option>-->
                                                        <!--</optgroup>-->
                                                        <!--<optgroup label="Eastern Time Zone">-->
                                                            <!--<option value="CT">Connecticut</option>-->
                                                            <!--<option value="DE">Delaware</option>-->
                                                            <!--<option value="FL">Florida</option>-->
                                                            <!--<option value="GA">Georgia</option>-->
                                                            <!--<option value="IN">Indiana</option>-->
                                                            <!--<option value="ME">Maine</option>-->
                                                            <!--<option value="MD">Maryland</option>-->
                                                            <!--<option value="MA">Massachusetts</option>-->
                                                            <!--<option value="MI">Michigan</option>-->
                                                            <!--<option value="NH">New Hampshire</option>-->
                                                            <!--<option value="NJ">New Jersey</option>-->
                                                            <!--<option value="NY">New York</option>-->
                                                            <!--<option value="NC">North Carolina</option>-->
                                                            <!--<option value="OH">Ohio</option>-->
                                                            <!--<option value="PA">Pennsylvania</option>-->
                                                            <!--<option value="RI">Rhode Island</option>-->
                                                            <!--<option value="SC">South Carolina</option>-->
                                                            <!--<option value="VT">Vermont</option>-->
                                                            <!--<option value="VA">Virginia</option>-->
                                                            <!--<option value="WV">West Virginia</option>-->
                                                        <!--</optgroup>-->
                                                    <!--</select>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="form-group ">-->
                                                <!--<label for="state" class="col-sm-2 control-label">State </label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<input id="state" name="state" type="text" class="form-control"/>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="form-group required">-->
                                                <!--<label for="city" class="col-sm-2 control-label">City </label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<input id="city" name="city" type="text" class="form-control"/>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="form-group required">-->
                                                <!--<label for="address" class="col-sm-2 control-label">Address </label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<input id="address" name="address" type="text" class="form-control"/>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="form-group required">-->
                                                <!--<label for="postal" class="col-sm-2 control-label">Postal/zip</label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<input id="postal" name="postal" type="text" class="form-control"/>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                        <!--<div class="tab-pane" id="tab4">-->
                                            <!--<p class="text-danger"><strong>Be careful with group selection, if you give-->
                                                <!--admin access.. they can access admin section</strong></p>-->
                                            <!--<div class="form-group required">-->
                                                <!--<label for="group" class="col-sm-2 control-label">Group *</label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<select class="form-control required select21" title="Select group..." name="group" id="group">-->
                                                        <!--<option value="">Select</option>-->
                                                        <!--<option value="admin" selected="selected">admin</option>-->
                                                        <!--<option value="user">user</option>-->
                                                    <!--</select>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="form-group">-->
                                                <!--<label for="activate" class="col-sm-2 control-label"> Activate-->
                                                    <!--User</label>-->
                                                <!--<div class="col-sm-10">-->
                                                    <!--<input id="activate" name="activate" type="checkbox" checked class="pos-rel p-l-30 custom-checkbox" value="1">-->
                                                    <!--<span>If user is not activated, mail will be sent to user with activation link</span>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                        <!--<ul class="pager wizard">-->
                                            <!--<li class="previous">-->
                                                <!--<a href="#">Previous</a>-->
                                            <!--</li>-->
                                            <!--<li class="next">-->
                                                <!--<a href="#">Next</a>-->
                                            <!--</li>-->
                                            <!--<li class="next finish" style="display:none;">-->
                                                <!--<a href="javascript:;">Finish</a>-->
                                            <!--</li>-->
                                        <!--</ul>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <!--<div id="myModal" class="modal fade" role="dialog">-->
                                    <!--<div class="modal-dialog">-->
                                        <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                        <!--<div class="modal-content">-->
                                            <!--<div class="modal-header">-->
                                                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                                <!--<h4 class="modal-title">User Edit</h4>-->
                                            <!--</div>-->
                                            <!--<div class="modal-body">-->
                                                <!--<p>Account Edited Successfully.</p>-->
                                            <!--</div>-->
                                            <!--<div class="modal-footer">-->
                                                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Ok-->
                                                <!--</button>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</form>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->



    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script src="vendors/moment/js/moment.min.js"></script>
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="vendors/select2/js/select2.js" type="text/javascript"></script>
    <script src="vendors/bootstrapwizard/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="vendors/iCheck/js/icheck.js" type="text/javascript"></script>
    <script src="js/custom_js/adduser.js" type="text/javascript"></script>
    <!-- end of page level js -->
@stop

