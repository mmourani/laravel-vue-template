<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" rel="stylesheet" href="css/app.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!-- end of global css -->
    @yield('styles')
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
        <div class="mr-auto">
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                        class="fa fa-fw ti-menu"></i>
            </a>
        </div>
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
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="float-left profile-thumb" href="#">
                            <img src="img/authors/avatar1.jpg" class="rounded-circle" alt="User Image"></a>
                        <div class="content-profile">
                            <h4 class="media-heading">Addison</h4>
                            <ul class="icon-list">
                                <li>
                                    <a href="users" title="user">
                                        <i class="fa fa-fw ti-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen" title="lock">
                                        <i class="fa fa-fw ti-lock"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="edit_user" title="settings">
                                        <i class="fa fa-fw ti-settings"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="login" title="Login">
                                        <i class="fa fa-fw ti-shift-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li {!! Request::is( '/') || Request::is('index') ? 'class="active"' : '' !!} id="active" >
                        <a href="index">
                            <i class="menu-icon ti-desktop"></i>
                            <span class="mm-text ">Dashboard 1</span>
                        </a>
                    </li>
                    <li {!! (Request::is( 'index2') ? 'class="active"' : '') !!} id="active">
                        <a href="index2">
                            <i class="menu-icon ti-layout-list-large-image"></i>
                            <span class="mm-text ">Dashboard 2</span>
                        </a>
                    </li>
                    <li class="menu-dropdown {!! Request::is('form_elements') || Request::is('realtime_form') || Request::is('form_validations')|| Request::is('form_layouts')|| Request::is('complex_forms')|| Request::is('complex_forms2')|| Request::is('radio_checkboxes') || Request::is( 'form_editors')|| Request::is('form_wizards')|| Request::is('dropdowns') || Request::is('datepicker')|| Request::is('advanceddate_pickers') ?'active':'' !!}">
                        <a href="javascript:void(0)">
                            <i class="menu-icon ti-check-box"></i>
                            <span>Forms</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li {!! (Request::is( 'form_elements') || Request::is('realtime_form')|| Request::is('form_validations')|| Request::is('form_layouts')|| Request::is('complex_forms')|| Request::is('complex_forms2')|| Request::is('radio_checkboxes') ? 'class="active"' : 'class="select"') !!} >
                                <a href="javascript:void(0)">
                                    <i class="fa fa-fw ti-receipt"></i> Features
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu form-submenu">
                                    <li {!! (Request::is( 'form_elements') ? 'class="active"' : '') !!}>
                                        <a href="form_elements">
                                            <i class="fa fa-fw ti-cup"></i> Form Elements
                                        </a>
                                    </li>
                                    <li {!! (Request::is( 'realtime_form') ? 'class="active"' : '') !!}>
                                        <a href="realtime_form">
                                            <i class="fa fa-fw ti-write"></i> Realtime Forms
                                        </a>
                                    </li>
                                    <li {!! (Request::is( 'form_validations') ? 'class="active"' : '') !!}>
                                        <a href="form_validations">
                                            <i class="fa fa-fw ti-alert"></i> Form Validations
                                        </a>
                                    </li>
                                    <li  {!! (Request::is( 'form_layouts') ? 'class="active"' : '') !!}>
                                        <a href="form_layouts">
                                            <i class="fa fa-fw ti-layout-width-default"></i> Form Layouts
                                        </a>
                                    </li>
                                    <li  {!! (Request::is( 'complex_forms') ? 'class="active"' : '') !!}>
                                        <a href="complex_forms">
                                            <i class="fa fa-fw ti-layout-cta-left"></i> Complex Forms
                                        </a>
                                    </li>
                                    <li  {!! (Request::is( 'complex_forms2') ? 'class="active"' : '') !!}>
                                        <a href="complex_forms2">
                                            <i class="fa fa-fw ti-layout-cta-center"></i> Complex Forms 2
                                        </a>
                                    </li>
                                    <li  {!! (Request::is( 'radio_checkboxes') ? 'class="active"' : '') !!}>
                                        <a href="radio_checkboxes">
                                            <i class="fa fa-fw ti-check-box"></i> Radio and Checkbox
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li {!! (Request::is( 'form_editors') || Request::is('form_wizards')|| Request::is('dropdowns')|| Request::is('datepicker')|| Request::is('advanceddate_pickers') ? 'class="active"' : 'class="select"') !!} >
                                <a href="javascript:void(0)">
                                    <i class="fa fa-fw ti-clipboard"></i> Components
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu form-submenu">
                                    <li {!! (Request::is( 'form_editors') ? 'class="active"' : 'class=""') !!}>
                                        <a href="form_editors">
                                            <i class="fa fa-fw ti-pencil"></i> Form Editors
                                        </a>
                                    </li>
                                    <li {!! (Request::is( 'form_wizards') ? 'class="active"' : 'class=""') !!}>
                                        <a href="form_wizards">
                                            <i class="fa fa-fw ti-settings"></i> Form Wizards
                                        </a>
                                    </li>
                                    <li {!! (Request::is( 'dropdowns') ? 'class="active"' : 'class=""') !!}>
                                        <a href="dropdowns">
                                            <i class="fa fa-fw ti-widget-alt"></i> Drop Downs
                                        </a>
                                    </li>
                                    <li {!! (Request::is( 'datepicker') ? 'class="active"' : 'class=""') !!}>
                                        <a href="datepicker">
                                            <i class="fa fa-fw ti-calendar"></i> Date pickers
                                        </a>
                                    </li>
                                    <li {!! (Request::is( 'advanceddate_pickers') ? 'class="active"' : 'class=""') !!}>
                                        <a href="advanceddate_pickers">
                                            <i class="fa fa-fw ti-notepad"></i> Advanced Date pickers
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown {!! Request::is('general_components')|| Request::is('buttons')|| Request::is('tabs_accordions')|| Request::is('fonticons') || Request::is('advanced_modals') || Request::is('timeline') || Request::is('notifications')|| Request::is('themify_icons')|| Request::is('fontawesome_icons')|| Request::is('simple_line_icons')  ? 'active' : '' !!}">
                        <a href="#">
                            <i class="menu-icon ti-desktop"></i>
                            <span>
                                    UI Features
                                </span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li {!! (Request::is( 'general_components') ? 'class="active"' : 'class=""') !!}>
                                <a href="general_components">
                                    <i class="fa fa-fw ti-plug"></i> General Components
                                </a>
                            </li>
                            <li {!! (Request::is( 'buttons') ? 'class="active"' : 'class=""') !!}>
                                <a href="buttons">
                                    <i class="fa fa-fw ti-layout-placeholder"></i> Buttons
                                </a>
                            </li>
                            <li {!! (Request::is( 'tabs_accordions') ? 'class="active"' : 'class=""') !!}>
                                <a href="tabs_accordions">
                                    <i class="fa fa-fw ti-layers"></i> Tabs &amp; Accordions
                                </a>
                            </li>
                            <li {!! (Request::is( 'fonticons')|| Request::is('themify_icons')|| Request::is('fontawesome_icons')|| Request::is('simple_line_icons') ? 'class="active"' : 'class=""') !!}>
                                <a href="fonticons">
                                    <i class="fa fa-fw ti-ink-pen"></i> Font Icons
                                </a>
                            </li>
                            <li {!! (Request::is( 'advanced_modals') ? 'class="active"' : 'class=""') !!}>
                                <a href="advanced_modals">
                                    <i class="fa fa-fw ti-brush-alt"></i> Advanced Modals
                                </a>
                            </li>
                            <li {!! (Request::is( 'timeline') ? 'class="active"' : 'class=""') !!}>
                                <a href="timeline">
                                    <i class="fa fa-fw ti-time"></i> Timeline
                                </a>
                            </li>
                            <li {!! (Request::is( 'notifications') ? 'class="active"' : 'class=""') !!}>
                                <a href="notifications">
                                    <i class="fa fa-fw ti-flag-alt"></i> Notifications
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown {!! Request::is('pickers')|| Request::is('grid_layout')|| Request::is('tags_input')|| Request::is('nestable_list') || Request::is('sweet_alert') || Request::is('toastr_notifications') || Request::is('draggable_portlets')|| Request::is('jstree')|| Request::is('transitions')? 'active' : '' !!}">
                        <a href="#">
                            <i class="menu-icon ti-briefcase"></i>
                            <span>
                                    UI Components
                                </span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li {!! (Request::is( 'pickers') ? 'class="active"' : 'class=""') !!}>
                                <a href="pickers">
                                    <i class="fa fa-fw ti-brush"></i> Pickers
                                </a>
                            </li>
                            <li {!! (Request::is( 'grid_layout') ? 'class="active"' : 'class=""') !!}>
                                <a href="grid_layout">
                                    <i class="fa fa-fw ti-layout-grid2"></i> Grid Layout
                                </a>
                            </li>
                            <li {!! (Request::is( 'tags_input') ? 'class="active"' : 'class=""') !!}>
                                <a href="tags_input">
                                    <i class="fa fa-fw ti-tag"></i> Tags Input
                                </a>
                            </li>
                            <li {!! (Request::is( 'nestable_list') ? 'class="active"' : 'class=""') !!}>
                                <a href="nestable_list">
                                    <i class="fa fa-fw ti-view-list"></i> Nestable List
                                </a>
                            </li>
                            <li {!! (Request::is( 'sweet_alert') ? 'class="active"' : 'class=""') !!}>
                                <a href="sweet_alert">
                                    <i class="fa fa-fw ti-bell"></i> Sweet Alert
                                </a>
                            </li>
                            <li {!! (Request::is( 'toastr_notifications') ? 'class="active"' : 'class=""') !!}>
                                <a href="toastr_notifications">
                                    <i class="fa fa-fw ti-tablet"></i> Toastr Notifications
                                </a>
                            </li>
                            <li {!! (Request::is( 'draggable_portlets') ? 'class="active"' : 'class=""') !!}>
                                <a href="draggable_portlets"> <i class="fa fa-fw ti-control-shuffle"></i> Draggable
                                    Portlets
                                </a>
                            </li>
                            <li {!! (Request::is( 'jstree') ? 'class="active"' : 'class=""') !!}>
                                <a href="jstree"> <i class="fa fa-fw ti-folder"></i> jstree
                                </a>
                            </li>
                            <li {!! (Request::is( 'transitions') ? 'class="active"' : 'class=""') !!}>
                                <a href="transitions"> <i class="fa fa-fw ti-star"></i> Transitions </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown {!! Request::is('widgets')|| Request::is('widgets1')?'active':'' !!}">
                        <a href="#">
                            <i class="menu-icon ti-widget"></i>
                            <span>Widgets</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li {!! (Request::is( 'widgets') ? 'class="active"' : 'class=""') !!}>
                                <a href="widgets">
                                    <i class=" menu-icon fa fa-fw ti-widgetized"></i>
                                    Widgets 1
                                </a>
                            </li>
                            <li {!! (Request::is( 'widgets1') ? 'class="active"' : 'class=""') !!}>
                                <a href="widgets1">
                                    <i class=" menu-icon fa fa-fw ti-widget-alt"></i>
                                    Widgets 2
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown {!! Request::is('simple_tables')||Request::is('datatables')||Request::is('advanced_datatables')||Request::is('responsive_datatables')||Request::is('bootstrap_tables')?'active':'' !!}">
                        <a href="#">
                            <i class="menu-icon ti-layout-grid4"></i>
                            <span>DataTables</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li {!! (Request::is( 'simple_tables') ? 'class="active"' : 'class=""') !!}>
                                <a href="simple_tables">
                                    <i class="fa fa-fw ti-layout"></i> Simple tables
                                </a>
                            </li>
                            <li {!! (Request::is( 'datatables') ? 'class="active"' : 'class=""') !!} >
                                <a href="datatables">
                                    <i class="fa fa-fw ti-server"></i> Data Tables
                                </a>
                            </li>
                            <li {!! (Request::is( 'advanced_datatables') ? 'class="active"' : 'class=""') !!} >
                                <a href="advanced_datatables">
                                    <i class="fa fa-fw ti-layout-grid3"></i> Advanced Tables
                                </a>
                            </li>
                            <li {!! (Request::is( 'responsive_datatables') ? 'class="active"' : 'class=""') !!}>
                                <a href="responsive_datatables">
                                    <i class="fa fa-fw ti-layout-accordion-merged"></i> Responsive DataTables
                                </a>
                            </li>
                            <li {!! (Request::is( 'bootstrap_tables') ? 'class="active"' : 'class=""') !!}>
                                <a href="bootstrap_tables">
                                    <i class="fa fa-fw ti-layout-grid2"></i> Bootstrap Tables
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown {!! Request::is('flot_charts')||Request::is('nvd3_charts')||Request::is('circle_sliders')||Request::is('chartjs_charts')||Request::is('dimple_charts')|| Request::is('amcharts')|| Request::is('chartist')? 'active':'' !!}">
                        <a href="#"> <i class="menu-icon ti-bar-chart"></i>
                            <span>Charts</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li {!! (Request::is( 'flot_charts') ? 'class="active"' : 'class=""') !!}>
                                <a href="flot_charts">
                                    <i class="fa fa-fw ti-bar-chart-alt"></i> Flot Charts
                                </a>
                            </li>
                            <li {!! (Request::is( 'nvd3_charts') ? 'class="active"' : 'class=""') !!}>
                                <a href="nvd3_charts"> <i class="fa fa-fw ti-stats-up"></i> NVD3 Charts </a>
                            </li>
                            <li {!! (Request::is( 'circle_sliders') ? 'class="active"' : 'class=""') !!}>
                                <a href="circle_sliders"> <i class="fa fa-fw ti-basketball"></i> Circle Sliders
                                </a>
                            </li>
                            <li {!! (Request::is( 'chartjs_charts') ? 'class="active"' : 'class=""') !!} >
                                <a href="chartjs_charts"> <i class="fa fa-fw ti-pie-chart"></i> Chartjs Charts </a>
                            </li>
                            <li {!! (Request::is( 'dimple_charts') ? 'class="active"' : 'class=""') !!} >
                                <a href="dimple_charts"> <i class="fa fa-fw ti-save-alt"></i> Dimple Charts </a>
                            </li>
                            <li {!! (Request::is( 'amcharts') ? 'class="active"' : 'class=""') !!} >
                                <a href="amcharts"> <i class="fa fa-fw ti-stats-up"></i> Amcharts </a>
                            </li>
                            <li {!! (Request::is( 'chartist') ? 'class="active"' : 'class=""') !!} >
                                <a href="chartist"> <i class="fa fa-fw ti-bar-chart"></i> Chartist Charts </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown {!! Request::is('calendar')|| Request::is('calendar2')?'active':'' !!}">
                        <a href="#">
                            <i class="menu-icon ti-calendar"></i>
                            <span>Calendar</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li {!! (Request::is( 'calendar') ? 'class="active"' : 'class=""') !!}>
                                <a href="calendar">
                                <i class=" menu-icon fa fa-fw ti-video-clapper"></i>
                                <span>Calendar</span>
                                <small class="badge badge-pill badge-success">7</small>
                                </a>
                            </li>
                            <li {!! (Request::is( 'calendar2') ? 'class="active"' : 'class=""') !!}>
                                <a href="calendar2">
                                    <i class=" menu-icon fa fa-fw ti-calendar"></i>
                                    <span>Advanced Calendar</span>
                                    <small class="badge badge-pill badge-success">6</small>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown {!! Request::is('masonry_gallery')|| Request::is('dropify')|| Request::is('image_hover')|| Request::is('image_filter')|| Request::is('image_magnifier')?'active':'' !!}">
                        <a href="#">
                            <i class="menu-icon ti-gallery"></i>
                            <span>Gallery</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li {!! (Request::is( 'masonry_gallery') ? 'class="active"' : 'class=""') !!}>
                                <a href="masonry_gallery">
                                    <i class="fa fa-fw ti-gallery"></i> Masonry Gallery
                                </a>
                            </li>
                            <li {!! (Request::is( 'dropify') ? 'class="active"' : 'class=""') !!}>
                                <a href="dropify">
                                    <i class="fa fa-fw ti-dropbox"></i> Dropify
                                </a>
                            </li>
                            <li {!! (Request::is( 'image_hover') ? 'class="active"' : 'class=""') !!}>
                                <a href="image_hover">
                                    <i class="fa fa-fw ti-image"></i> Image Hover
                                </a>
                            </li>
                            <li {!! (Request::is( 'image_filter') ? 'class="active"' : 'class=""') !!}>
                                <a href="image_filter">
                                    <i class="fa fa-fw ti-filter"></i> Image Filter
                                </a>
                            </li>
                            <li {!! (Request::is( 'image_magnifier') ? 'class="active"' : 'class=""') !!}>
                                <a href="image_magnifier">
                                    <i class="fa fa-fw ti-zoom-in"></i> Image Magnifier
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-dropdown {!! Request::is('users') || Request::is('addnew_user') || Request::is('user_profile') || Request::is('deleted_users') ? 'active':'' !!}">
                        <a href="#"> <i class="menu-icon ti-user"></i> <span>Users</span> <span
                                    class="fa arrow"></span> </a>
                        <ul class="sub-menu">
                            <li {!! (Request::is( 'users') ? 'class="active"' : 'class=""') !!} >
                                <a href="users">
                                    <i class="fa fa-fw ti-menu-alt" aria-hidden="true"></i> Users List
                                </a>
                            </li>
                            <li {!! (Request::is( 'addnew_user') ? 'class="active"' : 'class=""') !!} >
                                <a href="addnew_user">
                                    <i class="fa fa-fw ti-user"></i> Add New User
                                </a>
                            </li>
                            <li {!! (Request::is( 'user_profile') ? 'class="active"' : 'class=""') !!} >
                                <a href="user_profile">
                                    <i class="fa fa-fw ti-id-badge"></i> View Profile
                                </a>
                            </li>
                            <li {!! (Request::is( 'deleted_users') ? 'class="active"' : 'class=""') !!} >
                                <a href="deleted_users">
                                    <i class="fa fa-fw ti-trash"></i> Deleted Users
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown {!! Request::is('google_maps') || Request::is('vector_maps') || Request::is('advanced_maps') ? 'active':'' !!}">
                        <a href="#">
                            <i class="menu-icon ti-location-pin"></i>
                            <span>Maps</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li {!! (Request::is( 'google_maps') ? 'class="active"' : 'class=""') !!} >
                                <a href="google_maps">
                                    <i class="fa fa-fw ti-world"></i> Google Maps
                                </a>
                            </li>
                            <li {!! (Request::is( 'vector_maps') ? 'class="active"' : 'class=""') !!} >
                                <a href="vector_maps">
                                    <i class="fa fa-fw ti-map"></i> Vector Maps
                                </a>
                            </li>
                            <li {!! (Request::is( 'advanced_maps') ? 'class="active"' : 'class=""') !!} >
                                <a href="advanced_maps">
                                    <i class="fa fa-fw ti-map-alt"></i> Advanced Maps
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="javascript:void(0)">
                            <i class="menu-icon ti-files"></i>
                            <span>Pages</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="login">
                                    <i class="fa fa-fw ti-shift-right"></i> Login
                                </a>
                            </li>
                            <li>
                                <a href="register">
                                    <i class="fa fa-fw ti-check-box"></i> Register
                                </a>
                            </li>
                            <li>
                                <a href="forgot_password">
                                    <i class="fa fa-fw ti-help"></i> Forgot Password
                                </a>
                            </li>
                            <li>
                                <a href="reset_password">
                                    <i class="fa fa-fw ti-key"></i> Reset Password
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen">
                                    <i class="fa fa-fw ti-lock"></i> Lockscreen
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown {!! Request::is('blank') || Request::is('invoice') || Request::is('session_timeout') || Request::is('pricing_table') ? 'active':''!!}">
                        <a href="javascript:void(0)">
                            <i class="menu-icon ti-face-smile"></i>
                            <span>Extra Pages</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li {!! (Request::is( 'blank') ? 'class="active"' : 'class=""') !!} >
                                <a href="blank">
                                    <i class="fa fa-fw ti-file"></i> Blank
                                </a>
                            </li>
                            <li {!! (Request::is( 'invoice') ? 'class="active"' : 'class=""') !!}>
                                <a href="invoice">
                                    <i class="fa fa-fw ti-layout-cta-left"></i> Invoice
                                </a>
                            </li>
                            <li {!! (Request::is( 'session_timeout') ? 'class="active"' : 'class=""') !!} >
                                <a href="session_timeout">
                                    <i class="fa fa-fw ti-time"></i> Session Timeout
                                </a>
                            </li>
                            <li {!! (Request::is( 'pricing_table') ? 'class="active"' : 'class=""') !!} >
                                <a href="pricing_table">
                                    <i class="fa fa-fw ti-time"></i> Pricing
                                </a>
                            </li>
                            <li>
                                <a href="404">
                                    <i class="fa fa-fw ti-unlink"></i> 404 Error
                                </a>
                            </li>
                            <li>
                                <a href="500">
                                    <i class="fa fa-fw ti-face-sad"></i> 500 Error
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon ti-layout-grid3"></i>
                            <span>Layouts</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li {!! (Request::is( 'menubarfold') ? 'class="active"' : 'class=""') !!} id="active">
                                <a href="menubarfold">
                                    <i class="fa fa-fw ti-layout-menu-v"></i> Menubar Fold
                                </a>
                            </li>
                            <li {!! (Request::is( 'horizontal_menu') ? 'class="active"' : 'class=""') !!} id="active">
                                <a href="horizontal_menu">
                                    <i class="fa fa-fw ti-layout-menu-full"></i> Horizontal Menu
                                </a>
                            </li>
                            <li {!! (Request::is( 'mini_sidebar') ? 'class="active"' : 'class=""') !!} id="active">
                                <a href="mini_sidebar">
                                    <i class="fa fa-fw ti-control-backward"></i> Mini Sidebar
                                </a>
                            </li>
                            <li {!! (Request::is( 'boxed_movable_header') ? 'class="active"' : 'class=""') !!} id="active">
                                <a href="boxed_movable_header">
                                    <i class="fa fa-fw ti-layout-grid2"></i> Boxed &amp; Movable Header
                                </a>
                            </li>
                            <li {!! (Request::is( 'layout_movable_header') ? 'class="active"' : 'class=""') !!} id="active">
                                <a href="layout_movable_header">
                                    <i class="fa fa-fw ti-view-list-alt"></i> Movable Header
                                </a>
                            </li>
                            <li {!! (Request::is( 'layout_boxed_fixed_header') ? 'class="active"' : 'class=""') !!} id="active">
                                <a href="layout_boxed_fixed_header">
                                    <i class="fa fa-fw ti-view-list"></i> Boxed &amp; Fixed Header
                                </a>
                            </li>
                            <li {!! (Request::is( 'layout_fixed') ? 'class="active"' : 'class=""') !!} id="active">
                                <a href="layout_fixed">
                                    <i class="fa fa-fw ti-layout-column2"></i> Fixed Header &amp; Menu
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon ti-menu"></i>
                            <span>
                                    Menu levels
                                </span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li >
                                <a href="#">
                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu sub-submenu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 3
                                                    <span class="fa arrow"></span>
                                                </a>
                                                <ul class="sub-menu sub-submenu">
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 4
                                                            <span class="fa arrow"></span>
                                                        </a>
                                                        <ul class="sub-menu sub-submenu">
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 5
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 4
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 1
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- / .navigation --> </div>
            <!-- menu --> </section>
        <!-- /.sidebar -->
    </aside>
    @yield('content')
</div>
@yield('tabs_accordions')
<!-- global js -->
<div id="qn"></div>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
<!-- end of global js -->
@yield('scripts')
</body>
</html>