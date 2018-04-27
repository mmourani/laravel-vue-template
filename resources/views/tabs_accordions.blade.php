@extends('layouts.default')
@section('title')
    Tabs &amp; Accordions | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" href="css/toolbar/css/jquery.toolbar.css">
    <link rel="stylesheet" href="vendors/wenk/wenk.min.css">
    <link type="text/css" href="css/tab.css" rel="stylesheet">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Tabs &amp; Accordions</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">UI Features</a>
                </li>
                <li class="active">
                    <a href="tabs_accordions">Tabs &amp; Accordions</a>
                </li>
            </ol>
        </section>
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-layout-tab-window"></i> Tabs
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="bs-example">
                                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                    <li class="nav-item">
                                        <a href="#home" data-toggle="tab" class="nav-link active">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile" data-toggle="tab" class="nav-link">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane active" id="home">
                                        <p>
                                            It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                            opposed to using 'Content here, content here'.
                                        </p>
                                        <p>making it look like readable English. Many desktop publishing packages and
                                            web page editors now use Lorem Ipsum as their default model text, and a
                                            search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="profile">
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable.
                                        </p>
                                        <p>If you are going
                                            to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text. The generated Lorem Ipsum is
                                            therefore always free from repetition, injected humour, or
                                            non-characteristic
                                            words etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card set_media">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-layout-tab"></i> Pills
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="bs-example margn_left">
                                <ul class="nav nav-pills pills_tab">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="bs-example">
                                <ul class="nav flex-column nav-pills bg-stacked vertical_pill" style="max-width: 300px;">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mrgn_top">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-comment"></i> Popover
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div>
                                <button type="button" class="btn btn-warning" title="Popover title"
                                        data-container="body" data-toggle="popover" data-placement="right"
                                        data-content="Popover on right"
                                        style="margin-bottom:10px;margin-left:10px;">right
                                </button>
                                <button type="button" class="btn btn-success" title="Popover title"
                                        data-container="body" data-toggle="popover" data-placement="bottom"
                                        data-content="Popover on bottom"
                                        style="margin-bottom:10px;margin-left:10px;">bottom
                                </button>
                                <button type="button" class="btn btn-default" title="Popover title"
                                        data-container="body" data-toggle="popover" data-placement="left"
                                        data-content="Popover on left"
                                        style="margin-bottom:10px;margin-left:10px;">left
                                </button>
                                <button type="button" class="btn btn-primary" title="Popover title"
                                        data-container="body" data-toggle="popover" data-placement="top"
                                        data-content="Popover on top"
                                        style="margin-bottom:10px;margin-left:10px;">top
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-comments"></i> Tool Tips
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <p>
                                <span class="bs-example tooltip-demo tool_butn">
                                    <button class="btn tooltips btn-primary btn-lg" data-toggle="tooltip"
                                            data-tooltip="tooltip"
                                            data-placement="top" data-original-title="Tooltip in top"
                                            style="margin-bottom:10px;">Top
                                    </button>
                                </span>
                                <span class="bs-example tooltip-demo">
                                    <button class="btn tooltips btn-success btn-lg" data-toggle="tooltip"
                                            data-tooltip="tooltip"
                                            data-placement="left" data-original-title="Tooltip in left"
                                            style="margin-bottom:10px;">Left
                                    </button>
                                </span>
                                <span class="bs-example tooltip-demo">
                                    <button class="btn tooltips btn-info btn-lg" data-toggle="tooltip"
                                            data-tooltip="tooltip"
                                            data-placement="right" data-original-title="Tooltip in right"
                                            style="margin-bottom:10px;">Right
                                    </button>
                                </span>
                                <span class="bs-example tooltip-demo">
                                    <button class="btn tooltips btn-warning btn-lg" data-toggle="tooltip"
                                            data-tooltip="tooltip"
                                            data-placement="bottom" data-original-title="Tooltip in bottom"
                                            style="margin-bottom:10px;">Bottom
                                    </button>
                                </span>
                            </p>
                            <div class="bs-example">
                                <ul class="tooltip-examples list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="hi">Tooltip</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" data-toggle="tooltip"
                                           data-original-title="hello!!">small
                                            tooltip</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" data-toggle="tooltip"
                                           data-original-title="A much longer tooltip to demonstrate the max-width of the Bootstrp tooltip.">Large
                                            tooltip</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Bye!">Last
                                            tooltip</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-comment-alt"></i> Popover
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="po-markup">
                                    <br>
                                    <a href="http://www.fifa.com/" class="po-link">fifa.com</a> ← popover on link so you
                                    can get site information.
                                    <div class="po-content hidden">
                                        <div class="po-title">
                                            <img src="img/football.jpg" alt="Google" width="20" height="20"/> Foot Ball
                                            world cup
                                        </div>
                                        <!-- ./po-title -->
                                        <div class="po-body">
                                            <p>
                                                Football refers to a number of sports that involve, to varying degrees,
                                                kicking a ball with the foot to score a goal. The most popular of these
                                                sports worldwide is
                                                <strong>association football</strong> , more commonly known as just
                                                "football" or "soccer".
                                            </p>
                                        </div>
                                        <!-- ./po-body -->
                                    </div>
                                    <!-- ./po-content -->
                                </div>
                                <!-- ./po-markup-->
                            </div>
                            <!-- ./col-md6 -->
                        </div>
                    </div>
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-comment"></i> Wenk Tool tip
                            </h3>
                            <span class="float-right">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                <i class="fa fa-fw ti-close removecard"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12"><h4 class="h4pnl_font">Wenk positions</h4></div>
                                <div class="col-sm-6 text-center">
                                    <p><span class="wenk-area" data-wenk="Top!">Wenk to the top!</span></p>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <p><span class="wenk-area" data-wenk="Left!"
                                             data-wenk-pos="left">Wenk to the left!</span></p>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <p><span class="wenk-area" data-wenk="Right!"
                                             data-wenk-pos="right">Wenk to the right!</span></p>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <p><span class="wenk-area" data-wenk="Bottom!"
                                             data-wenk-pos="bottom">Wenk to the bottom!</span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12"><h4 class="h4pnl_font">Wenk Size</h4></div>
                                <div class="col-sm-6 text-center">
                                    <p><span data-wenk="I'm small!"
                                             class="wenk-length--small wenk-area">Small wenk!</span></p>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <p><span data-wenk="I'm medium!"
                                             class="wenk-length--medium wenk-area">Medium wenk!</span></p>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <p><span data-wenk="I'm large!"
                                             class="wenk-length--large wenk-area">Large wenk!</span></p>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <p><span data-wenk="I fit!"
                                             class="wenk-length--fit wenk-area">I fit just right!</span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12"><h4 class="h4pnl_font">Wenk Alignment</h4></div>
                                <div class="col-sm-4 text-center">
                                    <p><span data-wenk="I'm left!"
                                             class="wenk-align--left wenk-length--large wenk-area">Left wenk!</span>
                                    </p>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <p><span data-wenk="I'm center!"
                                             class="wenk-align--center wenk-length--large wenk-area">center wenk!</span>
                                    </p>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <p><span data-wenk="I'm right!"
                                             class="wenk-align--right wenk-length--large wenk-area">Right wenk!</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mrgn_top">
                    <div class="card set_media">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-layout-menu-v"></i> Accordions
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <!--tab starts-->
                            <!-- Nav tabs category -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#faq-cat-1" class="nav-link active" data-toggle="tab">Tab 1</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#faq-cat-2" class="nav-link" data-toggle="tab">Tab 2</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content faq-cat-content">
                                <div class="tab-pane active" id="faq-cat-1">
                                    <div id="accordion" role="tablist">
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Item Tab 1-1
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card tab2_mt">
                                            <div class="card-header" role="tab" id="headingThree">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Item Tab 1-2
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="faq-cat-2">
                                    <div id="accordion-cat-2" role="tablist">
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingfour">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo_second" aria-expanded="false" aria-controls="collapseTwo_second">
                                                        Item Tab 2-1
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo_second" class="collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion-cat-2">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card tab2_mt">
                                            <div class="card-header" role="tab" id="headingfive">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree_second" aria-expanded="false" aria-controls="collapseThree_second">
                                                        Item Tab 2-2
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree_second" class="collapse" role="tabpanel" aria-labelledby="headingfive" data-parent="#accordion-cat-2">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab ends-->
                        </div>
                    </div>
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-comment-alt"></i> Toolbars
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <h4 class="h4pnl_font">Toolbar</h4>
                            <div class="row toolbar_animate">
                                <div class="col-md-12">
                                    <div data-toolbar="user-options1"
                                         class="btn-toolbar feature-toolbar btn-toolbar-info text-center"
                                         data-toolbar-style="info"><i class="fa fa-bicycle"
                                                                      style="position: relative"></i></div>
                                </div>
                            </div>
                            <h4 class="h4pnl_font">Shades</h4>
                            <div class="row toolbar_animate">
                                <div class="col-md-2 col-sm-3 col-6">
                                    <div data-toolbar="user-options"
                                         class="btn-toolbar feature-toolbar btn-toolbar-light text-center"
                                         data-toolbar-style="light"><i class="fa fa-apple"
                                                                       style="position: relative"></i></div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-6">
                                    <div data-toolbar="set-01"
                                         class="btn-toolbar feature-toolbar btn-toolbar-dark text-center"
                                         data-toolbar-style="dark"><i class="fa fa-pie-chart"
                                                                      style="position: relative"></i>
                                    </div>
                                </div>
                            </div>
                            <h4 class="h4pnl_font">Colorful</h4>
                            <div class="row toolbar_animate">
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="user-options"
                                         class="btn-toolbar feature-toolbar btn-toolbar-primary text-center"
                                         data-toolbar-style="primary"><i class="fa fa-gift"
                                                                         style="position: relative"></i></div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="set-01"
                                         class="btn-toolbar feature-toolbar btn-toolbar-danger text-center"
                                         data-toolbar-style="danger"><i class="fa fa-bar-chart"
                                                                        style="position: relative"></i></div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="set-02"
                                         class="btn-toolbar feature-toolbar btn-toolbar-warning text-center"
                                         data-toolbar-style="warning"><i class="fa fa-heart"
                                                                         style="position: relative"></i></div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="set-03"
                                         class="btn-toolbar feature-toolbar btn-toolbar-info text-center"
                                         data-toolbar-style="info"><i class="fa fa-gbp" style="position: relative"></i>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="set-04"
                                         class="btn-toolbar feature-toolbar btn-toolbar-success text-center"
                                         data-toolbar-style="success"><i class="fa fa-plane"
                                                                         style="position: relative"></i></div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="transport-options-o"
                                         class="btn-toolbar feature-toolbar btn-toolbar-danger text-center"
                                         data-toolbar-style="danger"><i class="fa fa-bicycle"
                                                                        style="position: relative"></i></div>
                                </div>
                            </div>
                            <h4 class="h4pnl_font">Customizable</h4>
                            <div class="row toolbar_animate">
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="user-options-b"
                                         class="btn-toolbar feature-toolbar btn-toolbar-danger text-center"
                                         data-toolbar-style="danger"><i class="fa fa-apple"
                                                                        style="position: relative"></i></div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="set-a"
                                         class="btn-toolbar feature-toolbar btn-toolbar-primary text-center"
                                         data-toolbar-style="primary"><i class="fa fa-area-chart"
                                                                         style="position: relative"></i></div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="set-c"
                                         class="btn-toolbar feature-toolbar btn-toolbar-danger text-center"
                                         data-toolbar-style="danger"><i class="fa fa-heart"
                                                                        style="position: relative"></i></div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="set-f"
                                         class="btn-toolbar feature-toolbar btn-toolbar-warning text-center"
                                         data-toolbar-style="warning"><i class="fa fa-bell-o"
                                                                         style="position: relative"></i></div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="transport-options-d"
                                         class="btn-toolbar feature-toolbar btn-toolbar-success text-center"
                                         data-toolbar-style="success"><i class="fa fa-bicycle"
                                                                         style="position: relative"></i></div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="set-e"
                                         class="btn-toolbar feature-toolbar btn-toolbar-info text-center"
                                         data-toolbar-style="info"><i class="fa fa-bitcoin"
                                                                      style="position: relative"></i></div>
                                </div>
                            </div>
                            <h4 class="h4pnl_font">Animations</h4>
                            <div class="row toolbar_animate">
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="user-options" data-toolbar-animation="standard"
                                         class="btn-toolbar feature-toolbar btn-toolbar-primary text-center"
                                         data-toolbar-style="primary"><i class="fa fa-plane"
                                                                         style="position: relative"></i></div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="set-01" data-toolbar-animation="flip"
                                         class="btn-toolbar feature-toolbar btn-toolbar-danger text-center"
                                         data-toolbar-style="danger"><i class="fa fa-line-chart"
                                                                        style="position: relative"></i></div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="set-02" data-toolbar-animation="grow"
                                         class="btn-toolbar feature-toolbar btn-toolbar-warning text-center"
                                         data-toolbar-style="warning"><i class="fa fa-heart"
                                                                         style="position: relative"></i></div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="set-03" data-toolbar-animation="flyin"
                                         class="btn-toolbar feature-toolbar btn-toolbar-info text-center"
                                         data-toolbar-style="info"><i class="fa fa-jpy" style="position: relative"></i>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="set-04" data-toolbar-animation="bounce"
                                         class="btn-toolbar feature-toolbar btn-toolbar-success text-center"
                                         data-toolbar-style="success"><i class="fa fa-star"
                                                                         style="position: relative"></i></div>
                                </div>
                                <div class="col-sm-2 col-4">
                                    <div data-toolbar="transport-options-o" data-toolbar-animation="grow"
                                         class="btn-toolbar feature-toolbar btn-toolbar-danger text-center"
                                         data-toolbar-style="danger"><i class="fa fa-truck"
                                                                        style="position: relative"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        <!-- /.content -->
    </aside>
@stop
@section('tabs_accordions')
    <div id="user-options1" class="toolbar-icons hidden">
        <a href="#"><i class="fa fa-car"></i></a>
        <a href="#"><i class="fa fa-bicycle"></i></a>
        <a href="#"><i class="fa fa-truck"></i></a>
        <a href="#"><i class="fa fa-plane"></i></a>
        <a href="#"><i class="fa fa-shield"></i></a>
    </div>
    <div id="user-options" class="toolbar-icons hidden">
        <a href="#"><i class="fa fa-user"></i></a>
        <a href="#"><i class="fa fa-star"></i></a>
        <a href="#"><i class="fa fa-edit"></i></a>
        <a href="#"><i class="fa fa-trash"></i></a>
        <a href="#"><i class="fa fa-circle"></i></a>
    </div>
    <div id="set-01" class="toolbar-icons hidden">
        <a href="#"><i class="fa fa-area-chart"></i></a>
        <a href="#"><i class="fa fa-bar-chart"></i></a>
        <a href="#"><i class="fa fa-pie-chart"></i></a>
        <a href="#"><i class="fa fa-line-chart"></i></a>
        <a href="#"><i class="fa fa-trash"></i></a>
    </div>
    <div id="set-02" class="toolbar-icons hidden">
        <a href="#"><i class="fa fa-android"></i></a>
        <a href="#"><i class="fa fa-apple"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
    </div>
    <div id="set-03" class="toolbar-icons hidden">
        <a href="#"><i class="fa fa-bitcoin"></i></a>
        <a href="#"><i class="fa fa-rupee"></i></a>
        <a href="#"><i class="fa fa-dollar"></i></a>
        <a href="#"><i class="fa fa-eur"></i></a>
        <a href="#"><i class="fa fa-cny"></i></a>
    </div>
    <div id="set-04" class="toolbar-icons hidden">
        <a href="#"><i class="fa fa-heart"></i></a>
        <a href="#"><i class="fa fa-lock"></i></a>
        <a href="#"><i class="fa fa-heart-o"></i></a>
        <a href="#"><i class="fa fa-truck"></i></a>
        <a href="#"><i class="fa fa-headphones"></i></a>
    </div>
    <div id="transport-options-o" class="toolbar-icons hidden">
        <a href="#"><i class="fa fa-car"></i></a>
        <a href="#"><i class="fa fa-bicycle"></i></a>
        <a href="#"><i class="fa fa-truck"></i></a>
        <a href="#"><i class="fa fa-plane"></i></a>
        <a href="#"><i class="fa fa-shield"></i></a>
    </div>
    <!--customized -->
    <div id="user-options-b" class="toolbar-icons hidden">
        <a href="#"><i class="fa fa-user"></i></a>
        <a href="#"><i class="fa fa-star"></i></a>
        <a href="#"><i class="fa fa-edit"></i></a>
        <a href="#"><i class="fa fa-trash"></i></a>
        <a href="#"><i class="fa fa-circle"></i></a>
    </div>
    <div id="set-a" class="toolbar-icons hidden">
        <a href="#"><i class="fa fa-area-chart"></i></a>
        <a href="#"><i class="fa fa-bar-chart"></i></a>
        <a href="#"><i class="fa fa-pie-chart"></i></a>
        <a href="#"><i class="fa fa-line-chart"></i></a>
        <a href="#"><i class="fa fa-trash"></i></a>
    </div>
    <div id="set-c" class="toolbar-icons hidden">
        <a href="#"><i class="fa fa-android"></i></a>
        <a href="#"><i class="fa fa-apple"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitte"></i></a>
    </div>
    <div id="set-e" class="toolbar-icons hidden">
        <a href="#"><i class="fa fa-bitcoin"></i></a>
        <a href="#"><i class="fa fa-rupee"></i></a>
        <a href="#"><i class="fa fa-dollar"></i></a>
        <a href="#"><i class="fa fa-eur"></i></a>
        <a href="#"><i class="fa fa-cn"></i></a>
    </div>
    <div id="set-f" class="toolbar-icons hidden">
        <a href="#"><i class="fa fa-heart"></i></a>
        <a href="#"><i class="fa fa-lock"></i></a>
        <a href="#"><i class="fa fa-heart-o"></i></a>
        <a href="#"><i class="fa fa-truck"></i></a>
        <a href="#"><i class="fa fa-headphones"></i></a>
    </div>
    <div id="transport-options-d" class="toolbar-icons hidden">
        <a href="#"><i class="fa fa-car"></i></a>
        <a href="#"><i class="fa fa-bicycle"></i></a>
        <a href="#"><i class="fa fa-truck"></i></a>
        <a href="#"><i class="fa fa-plane"></i></a>
        <a href="#"><i class="fa fa-shield"></i></a>
    </div>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script type="text/javascript" src="js/toolbar/js/jquery.toolbar.min.js"></script>
    <script type="text/javascript" src="js/custom_js/tabs_accordions.js"></script>
    <!-- end of page level js -->
@stop


