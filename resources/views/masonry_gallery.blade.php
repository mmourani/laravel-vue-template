@extends('layouts.default')
@section('title')
    Masonry Gallery | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="vendors/fancybox/jquery.fancybox.css" media="screen"/>
    <link href="css/animated-masonry-gallery.css" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Masonry Gallery
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#"> Gallery</a>
                </li>
                <li class="active">
                    Masonry Gallery
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="content gallery">
                <div class="row" id="slim">
                    <div id="gallery">
                        <div class="row mb-3">
                            <div class="col-md-5 col-12" id="gallery-header-center-left-title">
                                All Galleries
                            </div>
                            <div class="text-right col-md-6">

                                <button type="button" id="filter-all" class="btn btn-responsive btn-info btn-xs">
                                    All
                                </button>
                                <button type="button" id="filter-studio"
                                        class="btn btn-responsive btn-primary btn-xs">Studio
                                </button>
                                <button type="button" id="filter-landscape"
                                        class="btn btn-responsive btn-success btn-xs">Landscape
                                </button>

                            </div>
                        </div>
                        <div id="gallery-content">
                            <div id="gallery-content-center">
                                <a class="fancybox img-fluid" href="img/gallery/full/1.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/1.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/2.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/2.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/3.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/3.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/4.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/4.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/5.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/5.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/6.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/6.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/7.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/7.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/8.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/8.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/9.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/9.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/10.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/10.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/11.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/11.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/12.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/12.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/13.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/13.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/14.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/14.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/15.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/15.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/16.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/16.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/17.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/17.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/18.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/18.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/19.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/19.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/20.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/20.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/21.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/21.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/22.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/22.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/23.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/23.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/24.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/24.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/25.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/25.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/26.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/26.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/27.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/27.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/28.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/28.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/29.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/29.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/30.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/30.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/31.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/31.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/32.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/32.jpg" class="all studio"/>
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/33.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/33.jpg" class="all landscape">
                                </a>
                                <a class="fancybox img-fluid" href="img/gallery/full/34.jpg"
                                   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                    <img alt="gallery" src="img/gallery/thumbs/34.jpg" class="all studio"/>
                                </a>
                            </div>
                        </div>
                        <!-- .images-box -->
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
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="vendors/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="vendors/fancybox/helpers/jquery.fancybox-buttons.js" type="text/javascript"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="vendors/fancybox/jquery.fancybox.js"></script>
    <script src="js/animated-masonry-gallery.js" type="text/javascript"></script>
    <!-- end of page level js -->
@stop

