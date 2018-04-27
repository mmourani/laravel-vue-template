@extends('layouts.default')
@section('title')
    Pricing | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" href="css/custom_css/pricing_table.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Pricing</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li> Extra Pages</li>
                <li class="active">
                    <a href="blank">Pricing</a>
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!--pricing table one-->
            <div class="row text-center">
                <div class="col-sm-12 col-lg-12">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default span-btn monthly active">
                            <input type="radio" name="options" id="option2" checked> Monthly Tariff
                        </label>
                        <label class="btn btn-default span-btn yearly">
                            <input type="radio" name="options" id="option3"> Yearly Tariff
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="modal-1">
                        <div class="pack-heading">
                            <h4 class="pack-title"><strong>Basic</strong></h4>
                            <div class="pack-price monthly-pack"><sup class="dollar">$</sup>49<span>/mo</span></div>
                            <div class="pack-price yearly-pack d-none"><sup class="dollar">$</sup>540<span>/yr</span>
                            </div>
                            <p>$45/mo If you get yearly Pack.</p>
                        </div>
                        <p class="section-head">TRACKED CAMPAIGNS</p>
                        <ul class="pack-details list-unstyled">
                            <li><strong>5</strong> Campaigns</li>
                            <li><strong>300</strong> Keyword Ranking</li>
                            <li><strong>250,000</strong> Crawled Pages</li>
                            <li class="text-dummy">No Branded Reports</li>
                        </ul>
                        <p class="section-head">KEYWORD EXPLORER</p>
                        <ul class="pack-details list-unstyled">
                            <li><strong>5 Keywords Reports</strong></li>
                            <li class="text-dummy">No Keywords List</li>
                        </ul>
                        <p class="section-head">USER ACCESS</p>
                        <ul class="pack-details list-unstyled">
                            <li><strong>2</strong> Seats</li>
                        </ul>
                        <button class="btn btn-primary center-block btn-getit">Get it now</button>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="modal-1">
                        <div class="trending-tag">
                            <div class="tag-design">Best <br> Package</div>
                        </div>
                        <div class="pack-heading">
                            <h4 class="pack-title"><strong>Economic</strong></h4>
                            <div class="pack-price monthly-pack"><sup class="dollar">$</sup>99<span>/mo</span></div>
                            <div class="pack-price yearly-pack d-none"><sup class="dollar">$</sup>1104<span>/yr</span>
                            </div>
                            <p>$92/mo If you get yearly Pack.</p>
                        </div>
                        <p class="section-head">TRACKED CAMPAIGNS</p>
                        <ul class="pack-details list-unstyled">
                            <li><strong>10</strong> Campaigns</li>
                            <li><strong>750</strong> Keyword Ranking</li>
                            <li><strong>500,000</strong> Crawled Pages</li>
                            <li> <strong>Branded Reports</strong></li>
                        </ul>
                        <p class="section-head">KEYWORD EXPLORER</p>
                        <ul class="pack-details list-unstyled">
                            <li><strong>5,000</strong> Full Keywords Reports</li>
                            <li><strong>30</strong> Full Keywords List</li>
                        </ul>
                        <p class="section-head">USER ACCESS</p>
                        <ul class="pack-details list-unstyled">
                            <li><strong>10</strong> Seats</li>
                        </ul>
                        <button class="btn btn-danger center-block btn-getit">Get it now</button>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="modal-1">
                        <div class="pack-heading">
                            <h4 class="pack-title"><strong>Premium</strong></h4>
                            <div class="pack-price monthly-pack"><sup class="dollar">$</sup>159<span>/mo</span></div>
                            <div class="pack-price yearly-pack d-none"><sup class="dollar">$</sup>1788<span>/yr</span>
                            </div>
                            <p>$149/mo If you get yearly Pack.</p>
                        </div>
                        <p class="section-head">TRACKED CAMPAIGNS</p>
                        <ul class="pack-details list-unstyled">
                            <li><strong>25</strong> Campaigns</li>
                            <li><strong>1,700</strong> Keyword Ranking</li>
                            <li><strong>1,125,000</strong> Crawled Pages</li>
                            <li> <strong>Branded Reports</strong></li>
                        </ul>
                        <p class="section-head">KEYWORD EXPLORER</p>
                        <ul class="pack-details list-unstyled">
                            <li><strong>12,000</strong> Full Keywords Reports</li>
                            <li><strong>50</strong> Full Keywords List</li>
                        </ul>
                        <p class="section-head">USER ACCESS</p>
                        <ul class="pack-details list-unstyled">
                            <li><strong>25</strong> Seats</li>
                        </ul>
                        <button class="btn btn-primary center-block btn-getit">Get it now</button>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="modal-1">
                        <div class="pack-heading">
                            <h4 class="pack-title"><strong>Enterprise</strong></h4>
                            <div class="pack-price monthly-pack"><sup class="dollar">$</sup>399<span>/mo</span></div>
                            <div class="pack-price yearly-pack d-none"><sup class="dollar">$</sup>4620<span>/yr</span>
                            </div>
                            <p>$385/mo If you get yearly Pack.</p>
                        </div>
                        <p class="section-head">TRACKED CAMPAIGNS</p>
                        <ul class="pack-details list-unstyled">
                            <li><strong>100</strong> Campaigns</li>
                            <li><strong>7,500</strong> Keyword Ranking</li>
                            <li><strong>1,250,000</strong> Crawled Pages</li>
                            <li> <strong>Branded Reports</strong></li>
                        </ul>
                        <p class="section-head">KEYWORD EXPLORER</p>
                        <ul class="pack-details list-unstyled">
                            <li><strong>30,000</strong> Full Keywords Reports</li>
                            <li><strong>90</strong> Full Keywords List</li>
                        </ul>
                        <p class="section-head">USER ACCESS</p>
                        <ul class="pack-details list-unstyled">
                            <li><strong>30</strong> Seats</li>
                        </ul>
                        <button class="btn btn-primary center-block btn-getit">Get it now</button>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <p class="pro-option">Want to be a PRO User?</p>
                    <p class="contact-info">We have larger and the best plans designed for you.</p>
                    <a href="javascript:void(0)" class="btn btn-contact">Contact Us</a>
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
    <script>
        $(document).ready(function () {
            $(".span-btn").on("click", function () {
                if ($(this).hasClass("yearly")) {
                    $(".monthly-pack").hide(500);
                    $(".yearly-pack").show(500);
                    $(".yearly-pack").removeClass("d-none");


                } else {
                    $(".monthly-pack").show(500);
                    $(".yearly-pack").hide(500);
                }
            });
        });
    </script>
@stop









