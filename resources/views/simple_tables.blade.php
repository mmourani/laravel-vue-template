@extends('layouts.default')
@section('title')
    Simple Tables | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="css/datatable.css" rel="stylesheet">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Simple Tables</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">DataTables</a>
                </li>
                <li class="active">
                    Simple Tables
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-6">
                    <!-- First Basic Table strats here-->
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-layout-cta-left"></i> Basic Table
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="table1">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>City</th>
                                        <th>Department</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Trey</td>
                                        <td>Armstrong</td>
                                        <td>Isadoreborough</td>
                                        <td>Jewelery</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Cecile</td>
                                        <td>Kirlin</td>
                                        <td>North Reillyshire</td>
                                        <td>Sports</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Murl</td>
                                        <td>Denesik</td>
                                        <td>Alvismouth</td>
                                        <td>Tools</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Allison</td>
                                        <td>Gleason</td>
                                        <td>East Dinaton</td>
                                        <td>Electronics</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Mathilde</td>
                                        <td>Cassin</td>
                                        <td>New Royce</td>
                                        <td>Home</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Maeve</td>
                                        <td>Gutkowski</td>
                                        <td>Lake Justynport</td>
                                        <td>Tools</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Hobart</td>
                                        <td>Marquardt</td>
                                        <td>Lake Martinefurt</td>
                                        <td>Kids</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Otha</td>
                                        <td>Legros</td>
                                        <td>West Ameliaview</td>
                                        <td>Games</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Clint</td>
                                        <td>Metz</td>
                                        <td>Lake Rhianna</td>
                                        <td>Garden</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Patience</td>
                                        <td>Ferry</td>
                                        <td>Lake Veronica</td>
                                        <td>Games</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <!-- First Basic Table strats here-->
                    <div class="card set_media">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-menu"></i> Bordered Table
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Loyce</td>
                                        <td>Larson</td>
                                        <td>Industrial</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Vincenzo</td>
                                        <td>Bashirian</td>
                                        <td>Baby</td>
                                        <td><span class="badge badge-danger">Blocked</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Winona</td>
                                        <td>Hagenes</td>
                                        <td>Health</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Clark</td>
                                        <td>Ebert</td>
                                        <td>Tools</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Waino</td>
                                        <td>Labadie</td>
                                        <td>Music</td>
                                        <td><span class="badge badge-warning">Suspended</span></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Jackson</td>
                                        <td>Abshire</td>
                                        <td>Shoes</td>
                                        <td><span class="badge badge-danger">Blocked</span></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Erica</td>
                                        <td>Lehner</td>
                                        <td>Shoes</td>
                                        <td><span class="badge badge-warning">Suspended</span></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Dorris</td>
                                        <td>Bins</td>
                                        <td>Outdoors</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Norene</td>
                                        <td>Rolfson</td>
                                        <td>Baby</td>
                                        <td><span class="badge badge-info">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Katharina</td>
                                        <td>Kovacek</td>
                                        <td>Garden</td>
                                        <td><span class="badge badge-warning">Suspended</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- First Basic Table Ends Here-->
            <!-- Second Data Table Starts Here-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-list"></i> Data Table with Action buttons
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="mytable" class="table table-bordred table-striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>Phone</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Ambrose Schulist</td>
                                        <td>Ambrose.Schulist@hotmail.com</td>
                                        <td>098-354-8863</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                            class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                            class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bernadette Medhurst</td>
                                        <td>Bernadette.Medhurst75@hotmail.com</td>
                                        <td>258-452-3348</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                            class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                            class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hoyt Franecki</td>
                                        <td>Hoyt.Franecki@yahoo.com</td>
                                        <td>648-323-5530</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                            class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                            class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kianna Lockman</td>
                                        <td>Kianna.Lockman@gmail.com</td>
                                        <td>551-834-3163</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                            class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                            class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sheldon Howe</td>
                                        <td>Sheldon_Howe94@yahoo.com</td>
                                        <td>704-582-5580</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                            class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                            class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Timmothy Mertz</td>
                                        <td>Timmothy72@gmail.com</td>
                                        <td>641-915-3609</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                            class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                            class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Faye Mayer</td>
                                        <td>Faye34@gmail.com</td>
                                        <td>786-093-2620</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                            class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                            class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alfred Watsica</td>
                                        <td>Alfred34@gmail.com</td>
                                        <td>294-242-3621</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                            class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                            class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Vella Hammes</td>
                                        <td>Vella.Hammes40@hotmail.com</td>
                                        <td>063-136-5606</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                            class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                            class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Evans Trantow</td>
                                        <td>Evans90@yahoo.com</td>
                                        <td>171-105-6990</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                            class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                            class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title custom_align" id="Heading">Edit Details</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input class="form-control " type="text" placeholder="Joseph Lynch">
                            </div>
                            <div class="form-group">
                                <input class="form-control " type="text" placeholder="joseph34@testmail.com">
                            </div>
                            <div class="form-group">
                                <input class="form-control " type="text" placeholder="456-632-5687">
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-success" data-dismiss="modal">
                                <span class="glyphicon glyphicon-ok-sign"></span> Update
                            </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title custom_align" id="Heading5">Delete this entry</h4>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-info">
                                <span class="glyphicon glyphicon-info-sign"></span>&nbsp; Are you sure you want to
                                delete this record ?
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                <span class="glyphicon glyphicon-ok-sign"></span> Yes
                            </button>
                            <button type="button" class="btn btn-success" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span> No
                            </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- second row ends here -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-list-ol"></i> Basic Table 2
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>User Name</th>
                                        <th>Phone</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="bg-default">1</td>
                                        <td class="bg-default">Duncan Carroll</td>
                                        <td class="bg-default">Duncan43</td>
                                        <td class="bg-default">597-819-8431</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-warning">2</td>
                                        <td class="bg-warning">Dewitt Cormier</td>
                                        <td class="bg-warning">Dewitt_Cormier99</td>
                                        <td class="bg-warning">741-099-5054</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-success">3</td>
                                        <td class="bg-success">Jarrod Gislason</td>
                                        <td class="bg-success">Jarrod4</td>
                                        <td class="bg-success">834-470-1425</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-info">4</td>
                                        <td class="bg-info">Hailey Bruen</td>
                                        <td class="bg-info">Hailey.Bruen23</td>
                                        <td class="bg-info">970-037-5586</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-danger">5</td>
                                        <td class="bg-danger">Carmella Sanford</td>
                                        <td class="bg-danger">Carmella_Sanford54</td>
                                        <td class="bg-danger">833-679-6170</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Rafaela Reilly</td>
                                        <td>Rafaela.Reilly33</td>
                                        <td>350-714-3505</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-warning">7</td>
                                        <td class="bg-warning">Reta Beatty</td>
                                        <td class="bg-warning">Reta67</td>
                                        <td class="bg-warning">489-997-1458</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-success">8</td>
                                        <td class="bg-success">Allene Wisozk</td>
                                        <td class="bg-success">Allene.Wisozk18</td>
                                        <td class="bg-success">367-444-4071</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-info">9</td>
                                        <td class="bg-info">Mariela Corwin</td>
                                        <td class="bg-info">Mariela.Corwin</td>
                                        <td class="bg-info">158-603-0375</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-primary">10</td>
                                        <td class="bg-primary">Katlyn Kovacek</td>
                                        <td class="bg-primary">Katlyn.Kovacek</td>
                                        <td class="bg-primary">883-968-9177</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-list-ol"></i> Basic Table 3
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="bg-success">Joelle Ward</td>
                                        <td class="bg-info">Beauty</td>
                                        <td class="bg-danger">$22777</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="bg-success">Sammie Bailey</td>
                                        <td class="bg-info">Movies</td>
                                        <td class="bg-danger">$13132</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="bg-success">Kenton Tillman</td>
                                        <td class="bg-info">Grocery</td>
                                        <td class="bg-danger">$6543</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="bg-success">Braxton Kohler</td>
                                        <td class="bg-info">Automotive</td>
                                        <td class="bg-danger">$15224</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td class="bg-success">Delpha Durgan</td>
                                        <td class="bg-info">Automotive</td>
                                        <td class="bg-danger">$21147</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td class="bg-success">Judy Abshire</td>
                                        <td class="bg-info">Tools</td>
                                        <td class="bg-danger">$5690</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td class="bg-success">Ava Bogisich</td>
                                        <td class="bg-info">Games</td>
                                        <td class="bg-danger">$33835</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td class="bg-success">Marta Osinski</td>
                                        <td class="bg-info">Toys</td>
                                        <td class="bg-danger">$40918</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td class="bg-success">Salma Luettgen</td>
                                        <td class="bg-info">Shoes</td>
                                        <td class="bg-danger">$47338</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td class="bg-success">Breana Wolf</td>
                                        <td class="bg-info">Games</td>
                                        <td class="bg-danger">$14756</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row span table ends here-->
            <!-- Fourth Basic Table Starts Here-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card mrgn_top">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-layout-grid3"></i> Responsive Table
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard "></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Company</th>
                                        <th>email</th>
                                        <th>Phone</th>
                                        <th>Department</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Durgan - Sauer</td>
                                        <td>Durgan-Sauer23@yahoo.com</td>
                                        <td>032-563-1943</td>
                                        <td>Music</td>
                                        <td>44631</td>
                                    </tr>
                                    <tr>
                                        <td>Hickle LLC</td>
                                        <td>HickleLLC.Cremin62@hotmail.com</td>
                                        <td>158-351-5915</td>
                                        <td>Garden</td>
                                        <td>4669</td>
                                    </tr>
                                    <tr>
                                        <td>Padberg - Cronin</td>
                                        <td>Padberg-Cronin.Kunde10@hotmail.com</td>
                                        <td>265-460-4774</td>
                                        <td>Automotive</td>
                                        <td>10214</td>
                                    </tr>
                                    <tr>
                                        <td>Lakin - Cronin</td>
                                        <td>Lakin-Cronin_Batz61@hotmail.com</td>
                                        <td>443-924-7214</td>
                                        <td>Shoes</td>
                                        <td>2949</td>
                                    </tr>
                                    <tr>
                                        <td>Bednar - Padberg</td>
                                        <td>Bednar-Padberg22@yahoo.com</td>
                                        <td>700-808-9992</td>
                                        <td>Grocery</td>
                                        <td>48239</td>
                                    </tr>
                                    <tr>
                                        <td>Gibson - DuBuque</td>
                                        <td>Gibson-DuBuque_Buckridge@yahoo.com</td>
                                        <td>372-126-7393</td>
                                        <td>Sports</td>
                                        <td>11656</td>
                                    </tr>
                                    <tr>
                                        <td>Huels - Schoen</td>
                                        <td>Huels-Schoen_Lubowitz40@hotmail.com</td>
                                        <td>408-586-4486</td>
                                        <td>Books</td>
                                        <td>43464</td>
                                    </tr>
                                    <tr>
                                        <td>Harber and Sons</td>
                                        <td>HarberandSons60@hotmail.com</td>
                                        <td>506-397-7192</td>
                                        <td>Jewelery</td>
                                        <td>10454</td>
                                    </tr>
                                    <tr>
                                        <td>Beer, Murray and Stracke</td>
                                        <td>BeerMurrayandStracke.Mertz@gmail.com</td>
                                        <td>202-293-9914</td>
                                        <td>Clothing</td>
                                        <td>35082</td>
                                    </tr>
                                    <tr>
                                        <td>Schroeder Inc</td>
                                        <td>SchroederInc_Grimes98@gmail.com</td>
                                        <td>379-212-1752</td>
                                        <td>Baby</td>
                                        <td>20828</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Company</th>
                                        <th>email</th>
                                        <th>Phone</th>
                                        <th>Department</th>
                                        <th>Salary</th>
                                    </tr>
                                    </tfoot>
                                </table>
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
    <script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="js/custom_js/simple-table.js"></script>
    <!-- end of page level js -->
@stop


