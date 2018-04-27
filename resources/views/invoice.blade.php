@extends('layouts.default')
@section('title')
    Invoice | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="css/custom_css/invoice.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Invoice</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li> Extra Pages</li>
                <li class="active">
                    Invoice
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content p-l-r-15" id="invoice-stmt">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fa fa-fw ti-credit-card"></i> Invoice
                    </h3>
                    <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6 invoice_bg">
                            <h4><img src="img/logoblue.png" alt="clear"/></h4>
                            <h4 class="h4pnl_font"><strong>Billing Details:</strong></h4>
                            <address>
                                Lewis Doe
                                <br/> 6889 Lunette Street
                                <br/> Melbourne,Austria
                                <br/> <strong>Phone:</strong>12-345-678
                                <br/> <strong>Mail Id:</strong> Adelle_Champlin@yahoo.com
                            </address>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6 invoice_bg text-right">
                            <div class="float-right">
                                <h4 class="h4pnl_font"><strong>#678956 / 25 Sep 2016</strong></h4>
                                <h4 class="h4pnl_font"><strong>Invoice Info:</strong></h4>
                                <address>
                                    Tom Percy
                                    <br/> 3946 Penn Street
                                    <br/> Ohio,USA
                                    <br/> <strong>Phone:</strong> 32-666-756
                                    <br/> <strong>Mail Id:</strong> Lucy_Maggio16@yahoo.com
                                </address>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-condensed" id="customtable">
                                <thead>
                                <tr class="bg-primary">
                                    <th>
                                        <strong>Item Name</strong>
                                    </th>
                                    <th>
                                        <strong>Unit Cost</strong>
                                    </th>
                                    <th class="text-center">
                                        <strong>
                                            Quantity
                                        </strong>
                                    </th>
                                    <th></th>
                                    <th class="text-right">
                                        <strong>Total</strong>
                                    </th>
                                    <th class="text-center" id="add_row"><i class="fa fa-fw ti-plus"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td contenteditable>
                                        Samsung Galaxy Grand
                                    </td>
                                    <td contenteditable>$700</td>
                                    <td class="text-center" contenteditable>1</td>
                                    <td></td>
                                    <td class="text-right" contenteditable>$700</td>
                                    <td class="text-center row_delete"><i class="fa fa-fw ti-close"></i></td>
                                </tr>
                                <tr>
                                    <td contenteditable>
                                        Samsung Galaxy Core
                                    </td>
                                    <td contenteditable>$1110</td>
                                    <td class="text-center" contenteditable>1</td>
                                    <td></td>
                                    <td class="text-right" contenteditable>$1110</td>
                                    <td class="text-center row_delete"><i class="fa fa-fw ti-close"></i></td>
                                </tr>
                                <tr>
                                    <td contenteditable>
                                        Screen Protector
                                    </td>
                                    <td contenteditable>$7</td>
                                    <td class="text-center" contenteditable>4</td>
                                    <td></td>
                                    <td class="text-right" contenteditable>$28</td>
                                    <td class="text-center row_delete"><i class="fa fa-fw ti-close"></i></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"></td>
                                    <td class="highrow text-right">
                                        <strong>
                                            Sub Total: &nbsp;
                                        </strong>
                                    </td>
                                    <td class="highrow text-right">
                                        <strong contenteditable>$1838</strong>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"></td>
                                    <td class="emptyrow text-right">
                                        <strong>
                                            Vat: &nbsp;
                                        </strong>
                                    </td>
                                    <td class="highrow text-right">
                                        <strong contenteditable>$20</strong>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="emptyrow">
                                        <i class="livicon" data-name="barcode" data-size="60" data-loop="true"></i>
                                    </td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"></td>
                                    <td class="emptyrow text-right">
                                        <strong>
                                            Total: &nbsp;
                                        </strong>
                                    </td>
                                    <td class="highrow text-right">
                                        <strong contenteditable>$1858</strong>
                                    </td>
                                    <td></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h4 class="h4pnl_font"><Strong>Terms and conditions:</Strong></h4>
                        <ul class="terms_conditions">
                            <li>An invoice must accompany products returned for warantty</li>
                            <li>Balance due within 10 days of invoice date,1.5% interest/month thereafter.</li>
                            <li>All goods returned for replacement/credit must be saleable condition with original
                                packaging.
                            </li>
                        </ul>
                    </div>
                    <div class="btn-section">
                        <div class="col-md-12 col-sm-12 col-12">
                                <span class="float-right">
                                            <button type="button"
                                                    class="btn btn-responsive button-alignment btn-success mb-3"
                                                    data-toggle="button">
                                                <i class="fa fa-fw ti-money"></i> Pay Now
                                            </button>
                                             <button type="button"
                                                     class="btn btn-responsive button-alignment btn-primary mb-3"
                                                     data-toggle="button">
                                                <span style="color:#fff;" onclick="javascript:window.print();">
                                                    <i class="fa fa-fw ti-printer"></i>
                                                Print
                                            </span>
                                </button>
                                </span>
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
                </div></div>
            <div class="background-overlay"></div>
        </section>
        <!-- /.content -->
    </aside>
@stop
@section('scripts')
    <script type="text/javascript" src="js/custom_js/invoice.js"></script>
@stop

