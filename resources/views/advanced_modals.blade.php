@extends('layouts.default')
@section('title')
    Advanced Modals | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="vendors/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom_css/advanced_modals.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Advanced Modals</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        UI Features
                    </a>
                </li>
                <li class="active">
                    Advanced Modals
                </li>
            </ol>
        </section>
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-settings"></i> Modal Styles
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <h4>Basic Modal</h4>
                            <button type="button" class="btn btn-info btn_mrgnbtm" data-toggle="modal" data-target="#basic_modal">
                                Open Basic Modal
                            </button>
                            <!-- Modal Animate Buttons -->
                            <h4 class="mt-1">Animated Modal Entrances</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <button type="button" class="btn btn-info btn-block" data-toggle="modal"
                                                    data-target="#basic_modal" data-animate-modal="fadeIn">Fade In
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <button type="button" class="btn btn-info btn-block" data-toggle="modal"
                                                    data-target="#basic_modal" data-animate-modal="slideInRight">Slide
                                                In Right
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <button type="button" class="btn btn-info btn-block" data-toggle="modal"
                                                    data-target="#basic_modal" data-animate-modal="slideInUp">Slide From
                                                Bottom
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <button type="button" class="btn btn-info btn-block" data-toggle="modal"
                                                    data-target="#basic_modal" data-animate-modal="jello">Jello
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <button type="button" class="btn btn-info btn-block" data-toggle="modal"
                                                    data-target="#basic_modal" data-animate-modal="bounceInLeft">Bounce
                                                In Left
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <button type="button" class="btn btn-info btn-block" data-toggle="modal"
                                                    data-target="#basic_modal" data-animate-modal="flip">Flip
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <button type="button" class="btn btn-info btn-block" data-toggle="modal"
                                                    data-target="#basic_modal" data-animate-modal="flipInX">Flip In
                                                Horizantlly
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <button type="button" class="btn btn-info btn-block" data-toggle="modal"
                                                    data-target="#basic_modal" data-animate-modal="flipInY">Flip In
                                                Vertically
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <button type="button" class="btn btn-info btn-block" data-toggle="modal"
                                                    data-target="#basic_modal" data-animate-modal="rotateInDownLeft">
                                                Rotate In
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <button type="button" class="btn btn-info btn-block" data-toggle="modal"
                                                    data-target="#basic_modal" data-animate-modal="lightSpeedIn">Light
                                                Speed
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <button type="button" class="btn btn-info btn-block" data-toggle="modal"
                                                    data-target="#basic_modal" data-animate-modal="wobble">Wobble
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <button type="button" class="btn btn-info btn-block" data-toggle="modal"
                                                    data-target="#basic_modal" data-animate-modal="zoomInDown">Zoom In
                                                Down
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Animation buttons -->
                                <div id="basic_modal" class="modal fade animated" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Modal Header</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>This is the text in modal</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal position -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-settings"></i> Modal Positions
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <h4>Position Of Modal</h4>
                            <p>The different modal positions are Top, Center, Bottom and also as a Side-bar</p>
                            <button type="button" class="btn btn-info topposition" data-toggle="modal"
                                    data-target="#top_modal">Top Modal
                            </button>
                            <div id="top_modal" class="modal fade animated position_modal" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>This is the modal at top of the screen</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-info centerposition" data-toggle="modal"
                                    data-target="#center_modal">Center Modal
                            </button>
                            <div id="center_modal" class="modal fade animated position_modal" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>This is the modal at center of the screen</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-info bottomposition" data-toggle="modal"
                                    data-target="#bottom_modal">Bottom Modal
                            </button>
                            <div id="bottom_modal" class="modal fade animated position_modal" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>This is the modal at bottom of the screen</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-info sidebarmodal" data-toggle="modal"
                                    data-target="#sidebar_modal">Side-bar Modal
                            </button>
                            <div id="sidebar_modal" class="modal fade animated" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>This is the text in modal</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of modal position -->
            <!-- additional Modals -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-settings"></i> Additional Modal
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <h4>Additional Contents of a Modal</h4>
                            <!-- form-modal -->
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#form_modal">
                                Form Modal
                            </button>
                            <div id="form_modal" class="modal fade animated" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;
                                            </button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <form role="form" class="modal_form">
                                            <div class="modal-body">
                                                <div class="row m-t-10">
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <label class="sr-only" for="first-name">First-Name</label>
                                                            <input type="text" name="first-name" id="first-name"
                                                                   placeholder="First Name"
                                                                   class="form-control m-t-10">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <label class="sr-only" for="last-name">Last-Name</label>
                                                            <input type="text" name="last-name" id="last-name"
                                                                   placeholder="Last Name"
                                                                   class="form-control m-t-10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row m-t-10">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="sr-only" for="message">Message</label>
                                                            <textarea
                                                                    class="form-control resize_vertical m-t-10"
                                                                    name="message"
                                                                    placeholder="Message" rows="6"
                                                                    id="message"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-succes">Submit</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                                <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- form-modal end -->
                            <!-- Multiple Modals -->
                            <button type="button" class="btn btn-info" data-toggle="modal"
                                    data-target="#multiple_modal1">Multiple Modals
                            </button>
                            <div id="multiple_modal1" class="modal fade animated" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal 1</h4>
                                        </div>
                                        <div class="modal-body">
                                            Click Next to go to next modal.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info" data-target="#multiple_modal2"
                                                    data-toggle="modal" data-dismiss="modal">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="multiple_modal2" class="modal fade animated" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal 2</h4>
                                        </div>
                                        <div class="modal-body">
                                            This is the second modal
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- multiple modals end -->
                            <!-- modal sizes -->
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#large_modal">
                                Large Modal
                            </button>
                            <div id="large_modal" class="modal fade animated" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Large Modal</h4>
                                        </div>
                                        <div class="modal-body">
                                            This is a large modal.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#small_modal">
                                Small Modal
                            </button>
                            <div id="small_modal" class="modal fade animated" role="dialog">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Small Modal</h4>
                                        </div>
                                        <div class="modal-body">
                                            This is a small modal.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal sizes end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end additional modals -->
            <!-- bootstrap components in modals -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-settings"></i> Modal With Bootstrap Components
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <h4>Advanced Modal</h4>
                            <!-- modal with tabs -->
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tabs_modal">
                                Modal With Tabs
                            </button>
                            <div id="tabs_modal" class="modal fade animated" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal With Tabs</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Tabs in a Modal</h4>
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a data-toggle="tab" href="#tab1"  class="nav-link active">Tab 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a data-toggle="tab" href="#tab2"  class="nav-link">Tab 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a data-toggle="tab" href="#tab3"  class="nav-link">Tab 3</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a data-toggle="tab" href="#tab4"  class="nav-link">Tab 4</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="tab1" class="tab-pane fade active">
                                                    <h3>TAB 1</h3>
                                                    <p>First Tab</p>
                                                </div>
                                                <div id="tab2" class="tab-pane fade">
                                                    <h3>TAB 2</h3>
                                                    <p>Second Tab</p>
                                                </div>
                                                <div id="tab3" class="tab-pane fade">
                                                    <h3>TAB 3</h3>
                                                    <p>Third Tab</p>
                                                </div>
                                                <div id="tab4" class="tab-pane fade">
                                                    <h3>TAB 4</h3>
                                                    <p>Fourth Tab</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal with tabs end -->
                            <!-- modal with accordions -->
                            <button type="button" class="btn btn-info" data-toggle="modal"
                                    data-target="#accordions_modal">Accordions in a Modal
                            </button>
                            <div id="accordions_modal" class="modal fade animated" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal with Accordions</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Accordion In a Modal</h4>

                                            <div class="panel-group" id="accordion">
                                                <div class="card card-default">
                                                    <div class="card-header" id="headingOne">
                                                        <h4 class="card-title mb-0">
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                Collapsible Group 1
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                        <div class="card-body">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                            et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-default">
                                                    <div class="card-header"  id="headingTwo">
                                                        <h4 class="card-title mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                Collapsible Group 2
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                        <div class="card-body">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                            et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-default">
                                                    <div class="card-header" id="headingThree">
                                                        <h4 class="card-title mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                Collapsible Group 3
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                        <div class="card-body">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                            et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal with accordions end-->
                            <!-- grid in a modal -->
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#grid_modal">
                                Modals with Grid
                            </button>
                            <div id="grid_modal" class="modal fade animated" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal with grid arrangement</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">col-md-6</div>
                                                <div class="col-md-6">col-md-6</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">col-md-12
                                                    <div class="row">
                                                        <div class="col-md-6">col-md-6</div>
                                                        <div class="col-md-6">col-md-6</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">col-md-6</div>
                                                <div class="col-md-6">col-md-6</div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- grid in a modal end-->
                            <!-- fill modal -->
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#fill_modal">
                                Just Me
                            </button>
                            <div id="fill_modal" class="modal fade animated" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content modal_shadow">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Just Me</h4>
                                        </div>
                                        <div class="modal-body">
                                            This modal fills the entire page.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fill modal end-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- bootstrap components in modals end-->
            <!-- modals with colors -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-fw ti-settings"></i> Modal Colors
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <h4>Color Of Modal</h4>
                            <p>We can set any color to a modal. Here are some examples..</p>
                            <button type="button" class="btn btn-default modalcolor" data-toggle="modal"
                                    data-target="#color_modal" data-modalcolor="#dcdcdc">Default Modal
                            </button>
                            <button type="button" class="btn btn-primary modalcolor" data-toggle="modal"
                                    data-target="#color_modal" data-modalcolor="#6699cc">Primary Modal
                            </button>
                            <button type="button" class="btn btn-info modalcolor" data-toggle="modal"
                                    data-target="#color_modal" data-modalcolor="#66ccff">Info Modal
                            </button>
                            <button type="button" class="btn btn-success modalcolor" data-toggle="modal"
                                    data-target="#color_modal" data-modalcolor="#66cc99">Success Modal
                            </button>
                            <button type="button" class="btn btn-warning modalcolor" data-toggle="modal"
                                    data-target="#color_modal" data-modalcolor="#f0ad4e">Warning Modal
                            </button>
                            <button type="button" class="btn btn-danger modalcolor" data-toggle="modal"
                                    data-target="#color_modal" data-modalcolor="#ff6666">Danger Modal
                            </button>
                            <div id="color_modal" class="modal fade animated" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>This is the text in modal</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modals with colors end-->
            <!--main content ends-->
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
        <!--section ends-->
        <!-- /.content -->
    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script type="text/javascript" src="js/custom_js/advanced_modals.js"></script>
    <!-- end of page level js -->
@stop

