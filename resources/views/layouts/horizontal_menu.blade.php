<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Horizontal Menu Layout | Clear Admin Template </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="css/app.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!-- end of global css -->
    <!--page level css-->
    <link rel="stylesheet" href="css/slimmenu/css/slimmenu.min.css">

    <link rel="stylesheet" href="css/custom_css/horizontal_menu.css">
    <!--end of page level css-->
</head>

<body class="skin-default">
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="index" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the marginin -->
            <img src="img/logo_white.png" alt="logo"/>
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!--<div class="mr-auto">-->
            <!--<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i-->
                    <!--class="fa fa-fw ti-menu"></i>-->
            <!--</a>-->
        <!--</div>-->
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-fw ti-email black"></i>
                        <span class="badge badge-pill badge-success">2</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages table-striped">
                        <li class="dropdown-title">New Messages</li>
                        <li>
                            <a href="" class="message striped-col dropdown-item">
                                <img class="message-image rounded-circle" src="img/authors/avatar7.jpg" alt="avatar-image">

                                <div class="message-body"><strong>Ernest Kerry</strong>
                                    <br>
                                    Can we Meet?
                                    <br>
                                    <small>Just Now</small>
                                    <span class="badge badge-success label-mini msg-lable">New</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="message dropdown-item">
                                <img class="message-image rounded-circle" src="img/authors/avatar6.jpg" alt="avatar-image">

                                <div class="message-body"><strong>John</strong>
                                    <br>
                                    Dont forgot to call...
                                    <br>
                                    <small>5 minutes ago</small>
                                    <span class="badge badge-success label-mini msg-lable">New</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="message striped-col dropdown-item">
                                <img class="message-image rounded-circle" src="img/authors/avatar5.jpg" alt="avatar-image">

                                <div class="message-body">
                                    <strong>Wilton Zeph</strong>
                                    <br>
                                    If there is anything else &hellip;
                                    <br>
                                    <small>14/10/2014 1:31 pm</small>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a href="" class="message dropdown-item">
                                <img class="message-image rounded-circle" src="img/authors/avatar1.jpg" alt="avatar-image">
                                <div class="message-body">
                                    <strong>Jenny Kerry</strong>
                                    <br>
                                    Let me know when you free
                                    <br>
                                    <small>5 days ago</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="message striped-col dropdown-item">
                                <img class="message-image rounded-circle" src="img/authors/avatar.jpg" alt="avatar-image">
                                <div class="message-body">
                                    <strong>Tony</strong>
                                    <br>
                                    Let me know when you free
                                    <br>
                                    <small>5 days ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer"><a href="#"> View All messages</a></li>
                    </ul>



                </li>
                <!--rightside toggle-->
                <li>
                    <a href="#" class="dropdown-toggle toggle-right" data-toggle="dropdown">
                        <i class="fa fa-fw ti-view-list black"></i>
                        <span class="badge badge-pill badge-danger">9</span>
                    </a>
                </li>
                <!-- User Account: style can be found in dropdown-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle padding-user d-block" data-toggle="dropdown">
                        <img src="img/authors/avatar1.jpg" width="35" class="rounded-circle img-fluid float-left"
                             height="35" alt="User Image">
                        <div class="riot">
                            <div>
                                Addison
                               <span><i class="fa fa-sort-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="img/authors/avatar1.jpg" class="rounded-circle" alt="User Image">
                            <p> Addison</p>
                        </li>
                        <!-- Menu Body -->
                        <li class="p-t-3"><a href="user_profile" class="dropdown-item"> <i class="fa fa-fw ti-user"></i> My Profile </a>
                        </li>
                        <li role="presentation"></li>
                        <li><a href="edit_user" class="dropdown-item"><i class="fa fa-fw ti-settings"></i> Account Settings </a></li>
                        <li role="presentation" class="dropdown-divider"></li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="float-left">
                                <a href="lockscreen">
                                    <i class="fa fa-fw ti-lock"></i>
                                    Lock
                                </a>
                            </div>
                            <div class="float-right">
                                <a href="login">
                                    <i class="fa fa-fw ti-shift-right"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!--horizontal menu layout starts here-->
<div class="row horizontal_menu">
    <div class="col-md-12">
        <ul id="navigation" class="slimmenu">
            <li class="main-menu"><a href="javascript:void(0)" class="menu-list">Dashboard</a>
                <ul>
                    <li>
                        <a href="index" class="sub-list">
                            Dashboard 1
                        </a>
                    </li>
                    <li>
                        <a href="index2" class="sub-list">
                            Dashboard 2
                        </a>
                    </li>
                </ul>
            </li>
            <li class="main-menu"><a href="javascript:void(0)" class="menu-list">Elements</a>
                <ul>
                    <li><a href="javascript:void(0)" class="sub-list">Forms</a>
                        <ul>
                            <li>
                                <a href="form_elements">
                                    Form Elements
                                </a>
                            </li>
                            <li>
                                <a href="realtime_form">
                                    Realtime Forms
                                </a>
                            </li>
                            <li>
                                <a href="form_validations">
                                    Form Validations
                                </a>
                            </li>
                            <li>
                                <a href="complex_forms">
                                    Complex Forms
                                </a>
                            </li>
                            <li>
                                <a href="form_wizards">
                                    Form Wizards
                                </a>
                            </li>
                            <li>
                                <a href="datepicker">
                                    Date pickers
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="sub-list">UI Features</a>
                        <ul>
                            <li>
                                <a href="buttons">
                                    Buttons
                                </a>
                            </li>
                            <li>
                                <a href="fonts">
                                    Font Icons
                                </a>
                            </li>
                            <li>
                                <a href="advanced_modals">
                                    Advanced Modals
                                </a>
                            </li>
                            <li>
                                <a href="timeline">
                                    Timeline
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="sub-list">Components</a>
                        <ul>
                            <li>
                                <a href="pickers">
                                    Pickers
                                </a>
                            </li>
                            <li>
                                <a href="tags_input">
                                    Tags Input
                                </a>
                            </li>
                            <li>
                                <a href="sweet_alert">
                                    Sweet Alert
                                </a>
                            </li>
                            <li>
                                <a href="transitions">
                                    Transitions
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="sub-list">Widgets</a>
                        <ul>
                            <li>
                                <a href="widgets">
                                    Widgets 1
                                </a>
                            </li>
                            <li>
                                <a href="widgets1">
                                    Widgets 2
                                </a>
                            </li>
                            <li>
                                <a href="calendar">
                                    Calendar
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="main-menu"><a href="javascript:void(0)" class="menu-list">Components</a>
                <ul>
                    <li>
                        <a href="javascript:void(0)" class="sub-list">Data Tables</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="simple_tables">
                                    Simple tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced_datatables">
                                    Advanced Tables
                                </a>
                            </li>
                            <li>
                                <a href="responsive_datatables">
                                    Responsive DataTables
                                </a>
                            </li>
                            <li>
                                <a href="bootstrap_tables">
                                    Bootstrap Tables
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="sub-list">Charts</a>
                        <ul>
                            <li>
                                <a href="flot_charts">
                                    Flot Charts
                                </a>
                            </li>
                            <li>
                                <a href="nvd3_charts">
                                    NVD3 Charts
                                </a>
                            </li>
                            <li>
                                <a href="chartjs_charts">
                                    Chartjs Charts
                                </a>
                            </li>
                            <li>
                                <a href="amcharts">
                                    Amcharts
                                </a>
                            </li>
                            <li>
                                <a href="chartist">
                                    Chartist Charts
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="sub-list">Gallery</a>
                        <ul>
                            <li>
                                <a href="masonry_gallery">
                                     Masonry Gallery
                                </a>
                            </li>
                            <li>
                                <a href="multiplefile_upload">
                                     Multiple File Upload
                                </a>
                            </li>
                            <li>
                                <a href="dropify">
                                     Dropify
                                </a>
                            </li>
                            <li>
                                <a href="image_filter">
                                     Image Filter
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="sub-list">Maps</a>
                        <ul>
                            <li>
                                <a href="google_maps">
                                    Google Maps
                                </a>
                            </li>
                            <li>
                                <a href="vector_maps">
                                    Vector Maps
                                </a>
                            </li>
                            <li>
                                <a href="advanced_maps">
                                    Advanced Maps
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="main-menu"><a href="javascript:void(0)" class="menu-list">Pages </a>
                <ul>
                    <li>
                        <a href="blank" class="sub-list">
                            Blank
                        </a>
                    </li>
                    <li>
                        <a href="login" class="sub-list">
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="register" class="sub-list">
                            Register
                        </a>
                    </li>
                    <li>
                        <a href="user_profile" class="sub-list">
                            User Profile
                        </a>
                    </li>
                    <li>
                        <a href="lockscreen" class="sub-list">
                            Lockscreen
                        </a>
                    </li>
                    <li>
                        <a href="404" class="sub-list">
                            404 Error
                        </a>
                    </li>
                    <li>
                        <a href="500" class="sub-list">
                            500 Error
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" class="menu-list active">Layouts </a>
                <ul>
                    <li>
                        <a href="menubarfold" class="sub-list">
                            Menubar Fold
                        </a>
                    </li>
                    <li>
                        <a href="horizontal_menu" class="sub-list active">
                            Horizontal Menu
                        </a>
                    </li>
                    <li>
                        <a href="mini_sidebar" class="sub-list">
                           Mini Sidebar
                        </a>
                    </li>
                    <li>
                        <a href="boxed_movable_header" class="sub-list">
                            Boxed Movable Header
                        </a>
                    </li>
                    <li>
                        <a href="layout_movable_header" class="sub-list">
                            Movable Header
                        </a>
                    </li>
                    <li>
                        <a href="layout_boxed_fixed_header" class="sub-list">
                            Boxed &amp; Fixed Header
                        </a>
                    </li>
                    <li>
                        <a href="layout_fixed" class="sub-list">
                            Fixed Header &amp; Menu
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<!--horizontal menu layout ending here-->
<div class="wrapper row-offcanvas row-offcanvas-left">
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Horizontal Menu</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li> Layout</li>
                <li class="active">
                    <a href="blank">Horizontal Menu</a>
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">

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
    <!-- /.right-side -->
</div>
<!-- /.right-side -->
<!-- ./wrapper -->
<!-- global js -->
<script src="js/app.js" type="text/javascript"></script>
<script src="js/slimmenu/js/jquery.slimmenu.min.js" type="text/javascript"></script>
<script src="js/custom_js/horizontal_menu.js" type="text/javascript"></script>
<!-- end of page level js -->
</body>

</html>
