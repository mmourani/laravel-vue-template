@extends('layouts.default')
@section('title')
    Jstree | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link type="text/css" href="vendors/jstree/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jstree.css">

    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Jstree</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li> Pages</li>
                <li class="active">
                    <a href="blank">Blank</a>
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row overflow-y">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><h4>Basic tree model</h4></div>
                                <div class="card-body">
                                    <div id="html1">
                                        <ul>
                                            <li>Root node 1
                                                <ul>
                                                    <li class="jstree-icon jstree-ocl" role="presentation">Child node
                                                        1
                                                    </li>
                                                    <li><a href="#">Child node 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mrgn_top">
                                <div class="card-header"><h4>Initial with child</h4></div>
                                <div class="card-body">
                                    <div id="node_1">
                                        <ul>
                                            <li class="jstree-open">Root
                                                <ul>
                                                    <li>
                                                        <a href="#" class="jstree-clicked">Child</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mrgn_top">
                                <div class="card-header"><h4>Nested Child nodes</h4></div>
                                <div class="card-body">
                                    <div id="jstree1" class="demo">
                                        <ul>
                                            <li>Root node 1
                                                <ul>
                                                    <li data-jstree='{ "selected" : true }'>
                                                        <a href="#">initially<strong>selected</strong></a></li>
                                                    <li data-jstree='{ "icon" : "//jstree.com/tree-icon.png" }'>custom
                                                        iconrapURL
                                                    </li>
                                                    <li data-jstree='{ "opened" : true }'>initially open
                                                        <ul>
                                                            <li>Another node</li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='{ "icon" : "glyphicon glyphicon-leaf" }'>Custom
                                                        icon class

                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="/jstree.html/www.jstree.com">Root node 2</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mrgn_top">
                                <div class="card-header"><h4>initial state with data attribute</h4></div>
                                <div class="card-body">
                                    <div id="html4">
                                        <ul>
                                            <li data-jstree='{"opened":true,"selected":true}'>Root
                                                <ul>
                                                    <li data-jstree='{"disabled":true}'>Child</li>
                                                    <li data-jstree='{"icon":"//jstree.com/tree.png"}'>
                                                        Child
                                                    </li>
                                                    <li data-jstree='{"icon":"glyphicon glyphicon-leaf"}'>
                                                        Child
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mrgn_top">
                                <div class="card-header">
                                    <h4>Using check box</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="jstree2" class="demo" style="margin-top:2em;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><h4>Basic and draggable tree</h4></div>
                                <div class="card-body">
                                    <div id="jstree6">
                                        <ul>
                                            <li data-jstree='{"opened":true}'>
                                                Root node
                                                <ul>
                                                    <li>Child node 1
                                                        <ul>
                                                            <li>Child node 1.1</li>
                                                            <li>Child node 1.2
                                                                <ul>
                                                                    <li>Child node 1.2.1</li>
                                                                    <li>Child node 1.2.2</li>
                                                                </ul>
                                                            </li>
                                                            <li>Child node 1.3</li>
                                                        </ul>
                                                    </li>
                                                    <li>Child node 2
                                                        <ul>
                                                            <li>Child node 2.1</li>
                                                            <li>Child node 2.2</li>
                                                        </ul>
                                                    </li>
                                                    <li>Child node 3</li>
                                                    <li data-jstree='{"opened":true}'>Child node 4
                                                        <ul>
                                                            <li>Child node 4.1</li>
                                                            <li>Child node 4.2</li>
                                                            <li>Child node 4.3
                                                                <ul>
                                                                    <li>Child node 4.1</li>
                                                                    <li>Child node 4.2</li>
                                                                    <li>Child node 4.3</li>
                                                                </ul>
                                                            </li>
                                                            <li>Child node 4.4</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mrgn_top">
                                <div class="card-header"><h4> Tree with Icons</h4></div>
                                <div class="card-body">
                                    <div id="jstree8">
                                        <ul>
                                            <li data-jstree='{"opened":true}'>
                                                Root node
                                                <ul>
                                                    <li>Child node 1
                                                        <ul>
                                                            <li>Child node 1.1</li>
                                                            <li>Child node 1.2
                                                                <ul>
                                                                    <li>Child node 1.2.1</li>
                                                                    <li>Child node 1.2.2</li>
                                                                </ul>
                                                            </li>
                                                            <li>Child node 1.3</li>
                                                        </ul>
                                                    </li>
                                                    <li>Child node 2
                                                        <ul>
                                                            <li>Child node 2.1</li>
                                                            <li>Child node 2.2</li>
                                                        </ul>
                                                    </li>
                                                    <li>Child node 3</li>
                                                    <li data-jstree='{"opened":true}'>Child node 4
                                                        <ul>
                                                            <li>Child node 4.1</li>
                                                            <li>Child node 4.2</li>
                                                            <li>Child node 4.3
                                                                <ul>
                                                                    <li>Child node 4.1</li>
                                                                    <li>Child node 4.2</li>
                                                                    <li>Child node 4.3</li>
                                                                </ul>
                                                            </li>
                                                            <li>Child node 4.4</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mrgn_top">
                                <div class="card-header"><h4>Create, Rename and Deleting tree by right click
                                    </h4></div>
                                <div class="card-body">
                                    <div id="jstree9">
                                        <ul>
                                            <li data-jstree='{"opened":true}'>
                                                Root node
                                                <ul>
                                                    <li>Child node 1
                                                        <ul>
                                                            <li>Child node 1.1</li>
                                                            <li>Child node 1.2
                                                                <ul>
                                                                    <li>Child node 1.2.1</li>
                                                                    <li>Child node 1.2.2</li>
                                                                </ul>
                                                            </li>
                                                            <li>Child node 1.3</li>
                                                        </ul>
                                                    </li>
                                                    <li>Child node 2
                                                        <ul>
                                                            <li>Child node 2.1</li>
                                                            <li>Child node 2.2</li>
                                                        </ul>
                                                    </li>
                                                    <li>Child node 3</li>
                                                    <li data-jstree='{"opened":true}'>Child node 4
                                                        <ul>
                                                            <li>Child node 4.1</li>
                                                            <li>Child node 4.2</li>
                                                            <li>Child node 4.3
                                                                <ul>
                                                                    <li>Child node 4.1</li>
                                                                    <li>Child node 4.2</li>
                                                                    <li>Child node 4.3</li>
                                                                </ul>
                                                            </li>
                                                            <li>Child node 4.4</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mrgn_top">
                                <div class="card-header"><h4>Tree with search</h4></div>
                                <div class="card-body">
                                    <form id="search">
                                        <input type="search" id="input_search" class="my-3"/>
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </form>
                                    <div id="jstree10">
                                        <ul>
                                            <li data-jstree='{"opened":true}'>
                                                Root node
                                                <ul>
                                                    <li>Child node 1
                                                        <ul>
                                                            <li>Child node 1.1</li>
                                                            <li>Child node 1.2
                                                                <ul>
                                                                    <li>Child node 1.2.1</li>
                                                                    <li>Child node 1.2.2</li>
                                                                </ul>
                                                            </li>
                                                            <li>Child node 1.3</li>
                                                        </ul>
                                                    </li>
                                                    <li>Child node 2
                                                        <ul>
                                                            <li>Child node 2.1</li>
                                                            <li>Child node 2.2</li>
                                                        </ul>
                                                    </li>
                                                    <li>Child node 3</li>
                                                    <li data-jstree='{"opened":true}'>Child node 4
                                                        <ul>
                                                            <li>Child node 4.1</li>
                                                            <li>Child node 4.2</li>
                                                            <li>Child node 4.3
                                                                <ul>
                                                                    <li>Child node 4.1</li>
                                                                    <li>Child node 4.2</li>
                                                                    <li>Child node 4.3</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
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
            <div class="background-overlay"></div>
        </section>
        <!-- /.content -->
    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script src="vendors/jstree/js/jstree.min.js"></script>
    <!-- end of page level js -->
    <script>
        $('#html1').jstree();
        $('#node_1').jstree();
        $('#node_2').jstree();
        $('#html4').jstree();
        $('#jstree6').jstree({
            "core": {
                "check_callback": true
            },
            "plugins": ["dnd"]
        });
        $('#jstree8').jstree({
            "types": {
                "default": {
                    "icon": "fa fa-file text-primary"
                },
                "demo": {
                    "icon": "fa fa-check"
                }
            },
            "plugins": ["types"]
        });
        $('#jstree9').jstree({
            "core": {
                "check_callback": true,
            },
            "plugins": ["contextmenu"]
        });
        $('#jstree10').jstree({
            "plugins": ["search"]
        });
        $("#search").submit(function (e) {
            e.preventDefault();
            $("#jstree10").jstree(true).search($("#input_search").val());
        });
        $(function () {
            $('#jstree1').jstree();
            $('#jstree2').jstree({
                'plugins': ["wholerow", "checkbox"], 'core': {
                    'data': [
                        {
                            "text": "Same but with checkboxes",
                            "children": [
                                {"text": "initially selected", "state": {"selected": true}},
                                {"text": "custom icon URL", "icon": "//jstree.com/tree-icon.png"},
                                {"text": "initially open", "state": {"opened": true}, "children": ["Another node"]},
                                {"text": "custom icon class", "icon": "glyphicon glyphicon-leaf"}
                            ]
                        },
                        "And wholerow selection"
                    ]
                }
            });
        });
        $(function () {
            $('#jstree1').jstree();
            $('#jstree2').jstree({
                'plugins': ["wholerow", "checkbox"], 'core': {
                    'data': [
                        {
                            "text": "Same but with checkboxes",
                            "children": [
                                {"text": "initially selected", "state": {"selected": true}},
                                {"text": "custom icon URL", "icon": "//jstree.com/tree-icon.png"},
                                {"text": "initially open", "state": {"opened": true}, "children": ["Another node"]},
                                {"text": "custom icon class", "icon": "glyphicon glyphicon-leaf"}
                            ]
                        },
                        "And wholerow selection"
                    ]
                }
            });
        });


    </script>
    <!-- end of page level js -->
@stop


