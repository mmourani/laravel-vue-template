@extends('layouts.default')
@section('title')
    Users List | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom_css/user_custom.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Users List</h1>
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
                    Users List
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content p-l-r-15">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <i class="ti-user"></i> Users List
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table">
                                    <thead>
                                    <tr class="filters">
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User E-mail</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Crawford</td>
                                        <td>Ondricka</td>
                                        <td>Crawford_Ondricka@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>19 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Jarrell</td>
                                        <td>Hauck</td>
                                        <td>Jarrell.Hauck42@gmail.com</td>
                                        <td>Activated</td>
                                        <td>39 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Ara</td>
                                        <td>Mitchell</td>
                                        <td>Ara.Mitchell@gmail.com</td>
                                        <td>Activated</td>
                                        <td>36 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Sandra</td>
                                        <td>King</td>
                                        <td>Sandra.King51@gmail.com</td>
                                        <td>Activated</td>
                                        <td>29 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Consuelo</td>
                                        <td>Kohler</td>
                                        <td>Consuelo_Kohler77@gmail.com</td>
                                        <td>Activated</td>
                                        <td>47 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Pamela</td>
                                        <td>Cruickshank</td>
                                        <td>Pamela_Cruickshank73@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>50 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Jordan</td>
                                        <td>Lehner</td>
                                        <td>Jordan_Lehner@gmail.com</td>
                                        <td>Activated</td>
                                        <td>47 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Wilhelm</td>
                                        <td>Haley</td>
                                        <td>Wilhelm.Haley@gmail.com</td>
                                        <td>Activated</td>
                                        <td>46 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Julio</td>
                                        <td>Brekke</td>
                                        <td>Julio_Brekke85@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>48 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Margarett</td>
                                        <td>Daniel</td>
                                        <td>Margarett.Daniel@gmail.com</td>
                                        <td>Activated</td>
                                        <td>44 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Alanna</td>
                                        <td>Bayer</td>
                                        <td>Alanna_Bayer98@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>42 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Isabelle</td>
                                        <td>Kilback</td>
                                        <td>Isabelle44@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>48 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Erik</td>
                                        <td>Kessler</td>
                                        <td>Erik58@gmail.com</td>
                                        <td>Activated</td>
                                        <td>43 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lila</td>
                                        <td>Raynor</td>
                                        <td>Lila.Raynor@gmail.com</td>
                                        <td>Activated</td>
                                        <td>25 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Wallace</td>
                                        <td>Anderson</td>
                                        <td>Wallace_Anderson@gmail.com</td>
                                        <td>Activated</td>
                                        <td>35 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Hester</td>
                                        <td>Schmitt</td>
                                        <td>Hester94@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>19 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Roxanne</td>
                                        <td>Cartwright</td>
                                        <td>Roxanne_Cartwright76@gmail.com</td>
                                        <td>Activated</td>
                                        <td>27 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lucie</td>
                                        <td>Ondricka</td>
                                        <td>Lucie_Ondricka23@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>46 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dayna</td>
                                        <td>Crona</td>
                                        <td>Dayna_Crona@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>23 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Monserrat</td>
                                        <td>Ruecker</td>
                                        <td>Monserrat5@gmail.com</td>
                                        <td>Activated</td>
                                        <td>43 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Edgardo</td>
                                        <td>Roob</td>
                                        <td>Edgardo_Roob@gmail.com</td>
                                        <td>Activated</td>
                                        <td>35 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Santino</td>
                                        <td>Blanda</td>
                                        <td>Santino.Blanda46@gmail.com</td>
                                        <td>Activated</td>
                                        <td>26 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Nicola</td>
                                        <td>Rempel</td>
                                        <td>Nicola1@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>5 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Marietta</td>
                                        <td>Strosin</td>
                                        <td>Marietta.Strosin@gmail.com</td>
                                        <td>Activated</td>
                                        <td>6 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Darian</td>
                                        <td>Yost</td>
                                        <td>Darian28@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>20 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Tracy</td>
                                        <td>Blick</td>
                                        <td>Tracy_Blick@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>48 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lacey</td>
                                        <td>Renner</td>
                                        <td>Lacey_Renner@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>0 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Virgil</td>
                                        <td>Gislason</td>
                                        <td>Virgil_Gislason@gmail.com</td>
                                        <td>Activated</td>
                                        <td>16 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Bryce</td>
                                        <td>Pfannerstill</td>
                                        <td>Bryce.Pfannerstill@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>2 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Tracy</td>
                                        <td>Robel</td>
                                        <td>Tracy_Robel17@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>17 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Nolan</td>
                                        <td>Wintheiser</td>
                                        <td>Nolan_Wintheiser@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>1 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Kacey</td>
                                        <td>Spinka</td>
                                        <td>Kacey23@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>7 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Chyna</td>
                                        <td>Abbott</td>
                                        <td>Chyna_Abbott61@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>40 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Keyon</td>
                                        <td>Lemke</td>
                                        <td>Keyon.Lemke@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>17 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Terrence</td>
                                        <td>Vandervort</td>
                                        <td>Terrence.Vandervort13@gmail.com</td>
                                        <td>Activated</td>
                                        <td>27 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Evie</td>
                                        <td>Pacocha</td>
                                        <td>Evie.Pacocha0@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>30 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Verlie</td>
                                        <td>Hammes</td>
                                        <td>Verlie12@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>38 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Rick</td>
                                        <td>Daugherty</td>
                                        <td>Rick.Daugherty1@gmail.com</td>
                                        <td>Activated</td>
                                        <td>19 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Adan</td>
                                        <td>Cole</td>
                                        <td>Adan_Cole52@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>20 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Llewellyn</td>
                                        <td>Reichel</td>
                                        <td>Llewellyn.Reichel44@gmail.com</td>
                                        <td>Activated</td>
                                        <td>32 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Tessie</td>
                                        <td>Weimann</td>
                                        <td>Tessie1@gmail.com</td>
                                        <td>Activated</td>
                                        <td>22 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Mia</td>
                                        <td>Bayer</td>
                                        <td>Mia.Bayer@gmail.com</td>
                                        <td>Activated</td>
                                        <td>37 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Keanu</td>
                                        <td>Nikolaus</td>
                                        <td>Keanu_Nikolaus2@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>29 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Eduardo</td>
                                        <td>Gibson</td>
                                        <td>Eduardo_Gibson19@gmail.com</td>
                                        <td>Activated</td>
                                        <td>12 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Megane</td>
                                        <td>Block</td>
                                        <td>Megane.Block@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>1 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Bettie</td>
                                        <td>Vandervort</td>
                                        <td>Bettie_Vandervort22@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>41 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lelah</td>
                                        <td>Dickens</td>
                                        <td>Lelah_Dickens71@gmail.com</td>
                                        <td>Activated</td>
                                        <td>49 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Brook</td>
                                        <td>Orn</td>
                                        <td>Brook_Orn@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>46 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Odessa</td>
                                        <td>Beatty</td>
                                        <td>Odessa.Beatty37@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>50 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Joel</td>
                                        <td>Gerhold</td>
                                        <td>Joel.Gerhold63@gmail.com</td>
                                        <td>Activated</td>
                                        <td>22 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lloyd</td>
                                        <td>Walsh</td>
                                        <td>Lloyd1@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>30 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Justyn</td>
                                        <td>Dickinson</td>
                                        <td>Justyn97@gmail.com</td>
                                        <td>Activated</td>
                                        <td>31 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Retha</td>
                                        <td>Bartoletti</td>
                                        <td>Retha69@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>7 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Natasha</td>
                                        <td>Krajcik</td>
                                        <td>Natasha_Krajcik74@gmail.com</td>
                                        <td>Activated</td>
                                        <td>15 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Freddie</td>
                                        <td>Dooley</td>
                                        <td>Freddie.Dooley99@gmail.com</td>
                                        <td>Activated</td>
                                        <td>16 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Shawna</td>
                                        <td>Abernathy</td>
                                        <td>Shawna.Abernathy@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>25 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Omer</td>
                                        <td>Breitenberg</td>
                                        <td>Omer_Breitenberg@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>24 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Linwood</td>
                                        <td>DuBuque</td>
                                        <td>Linwood_DuBuque84@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>29 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Ryder</td>
                                        <td>Lockman</td>
                                        <td>Ryder_Lockman10@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>9 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Juvenal</td>
                                        <td>Cole</td>
                                        <td>Juvenal45@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>27 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Hobart</td>
                                        <td>Miller</td>
                                        <td>Hobart20@gmail.com</td>
                                        <td>Activated</td>
                                        <td>33 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Keyshawn</td>
                                        <td>Nolan</td>
                                        <td>Keyshawn_Nolan@gmail.com</td>
                                        <td>Activated</td>
                                        <td>22 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Breanna</td>
                                        <td>Sauer</td>
                                        <td>Breanna_Sauer60@gmail.com</td>
                                        <td>Activated</td>
                                        <td>33 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Jeff</td>
                                        <td>Conn</td>
                                        <td>Jeff_Conn70@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>0 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Reginald</td>
                                        <td>Wilderman</td>
                                        <td>Reginald.Wilderman@gmail.com</td>
                                        <td>Activated</td>
                                        <td>2 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Peggie</td>
                                        <td>Emmerich</td>
                                        <td>Peggie.Emmerich86@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>1 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Kayla</td>
                                        <td>Aufderhar</td>
                                        <td>Kayla_Aufderhar@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>23 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Cara</td>
                                        <td>Hahn</td>
                                        <td>Cara23@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>32 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Turner</td>
                                        <td>Harris</td>
                                        <td>Turner40@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>20 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Florine</td>
                                        <td>Lakin</td>
                                        <td>Florine_Lakin0@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>45 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Adolphus</td>
                                        <td>Swift</td>
                                        <td>Adolphus_Swift61@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>17 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dovie</td>
                                        <td>Collier</td>
                                        <td>Dovie32@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>14 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Aida</td>
                                        <td>Mante</td>
                                        <td>Aida.Mante24@gmail.com</td>
                                        <td>Activated</td>
                                        <td>7 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Maurine</td>
                                        <td>Gerlach</td>
                                        <td>Maurine_Gerlach15@gmail.com</td>
                                        <td>Activated</td>
                                        <td>24 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Sydney</td>
                                        <td>Nitzsche</td>
                                        <td>Sydney.Nitzsche@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>30 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Nathaniel</td>
                                        <td>Harris</td>
                                        <td>Nathaniel_Harris@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>43 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Clara</td>
                                        <td>Satterfield</td>
                                        <td>Clara.Satterfield55@gmail.com</td>
                                        <td>Activated</td>
                                        <td>27 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Isabell</td>
                                        <td>Kuphal</td>
                                        <td>Isabell_Kuphal15@gmail.com</td>
                                        <td>Activated</td>
                                        <td>7 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Marjory</td>
                                        <td>Pouros</td>
                                        <td>Marjory.Pouros19@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>17 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Winifred</td>
                                        <td>Cummings</td>
                                        <td>Winifred_Cummings@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>38 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Jannie</td>
                                        <td>Rowe</td>
                                        <td>Jannie.Rowe@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>44 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Taryn</td>
                                        <td>Orn</td>
                                        <td>Taryn.Orn84@gmail.com</td>
                                        <td>Activated</td>
                                        <td>35 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Justina</td>
                                        <td>Marks</td>
                                        <td>Justina40@gmail.com</td>
                                        <td>Activated</td>
                                        <td>39 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Bert</td>
                                        <td>Goodwin</td>
                                        <td>Bert.Goodwin67@gmail.com</td>
                                        <td>Activated</td>
                                        <td>31 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dax</td>
                                        <td>Christiansen</td>
                                        <td>Dax28@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>41 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Jonas</td>
                                        <td>Rowe</td>
                                        <td>Jonas_Rowe12@gmail.com</td>
                                        <td>Activated</td>
                                        <td>43 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Hazle</td>
                                        <td>Pouros</td>
                                        <td>Hazle86@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>37 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lexus</td>
                                        <td>Raynor</td>
                                        <td>Lexus68@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>13 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Yasmeen</td>
                                        <td>Rippin</td>
                                        <td>Yasmeen_Rippin15@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>43 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Antonina</td>
                                        <td>Howell</td>
                                        <td>Antonina.Howell39@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>36 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Webster</td>
                                        <td>Witting</td>
                                        <td>Webster_Witting@gmail.com</td>
                                        <td>Activated</td>
                                        <td>23 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Ona</td>
                                        <td>Hagenes</td>
                                        <td>Ona_Hagenes5@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>12 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Russ</td>
                                        <td>Purdy</td>
                                        <td>Russ_Purdy41@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>31 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Afton</td>
                                        <td>Fadel</td>
                                        <td>Afton.Fadel84@hotmail.com</td>
                                        <td>Activated</td>
                                        <td>39 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Josie</td>
                                        <td>Stiedemann</td>
                                        <td>Josie.Stiedemann@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>1 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Malachi</td>
                                        <td>Schmitt</td>
                                        <td>Malachi_Schmitt79@gmail.com</td>
                                        <td>Activated</td>
                                        <td>9 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Burley</td>
                                        <td>Zulauf</td>
                                        <td>Burley.Zulauf31@gmail.com</td>
                                        <td>Activated</td>
                                        <td>47 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Jairo</td>
                                        <td>Grimes</td>
                                        <td>Jairo_Grimes@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>42 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Zachariah</td>
                                        <td>Dickinson</td>
                                        <td>Zachariah_Dickinson55@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>36 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Modesta</td>
                                        <td>Herzog</td>
                                        <td>Modesta_Herzog92@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>40 weeks ago</td>
                                        <td><a href="edit_user"><i
                                                        class="fa fa-fw ti-pencil text-primary actions_icon"
                                                        title="Edit User"></i></a><a
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#delete"><i
                                                        class="fa fa-fw ti-close text-danger actions_icon"
                                                        title="Delete User"></i>
                                            </a><a
                                                    href="user_profile"><i
                                                        class="fa fa-fw ti-star text-success actions_icon"
                                                        title="View User"></i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="Heading"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                    </button>
                                    <h4 class="h4pnl_font modal-title custom_align" id="Heading">Delete User</h4>


                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-warning">
                                        <span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span> Are you sure you want to
                                        delete this Account?
                                    </div>
                                </div>
                                <div class="modal-footer ">
                                    <a href="deleted_users" class="btn btn-danger">
                                        <span><i class="fa fa-check-circle" aria-hidden="true"></i></span> Yes
                                    </a>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">
                                        <span><i class="fa fa-times" aria-hidden="true"></i></span> No
                                    </button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- row-->
                <!--rightside bar -->
                <div id="right">
                    <div id="right-slim">
                        <div class="rightsidebar-right">
                            <div class="rightsidebar-right-content">
                                <div class="panel-tabs">
                                    <ul class="nav nav-tabs nav-float" role="tablist">
                                        <li class="nav-item text-center">
                                            <a href="#r_tab1" role="tab" data-toggle="tab" class="nav-link active" aria-selected="true"><i
                                                        class="fa fa-fw ti-comments"></i></a>
                                        </li>
                                        <li class="text-center nav-item">
                                            <a href="#r_tab2" role="tab" data-toggle="tab" class="nav-link" aria-selected="true"><i class="fa fa-fw ti-bell"></i></a>
                                        </li>
                                        <li class="text-center nav-item">
                                            <a href="#r_tab3" role="tab" data-toggle="tab" class="nav-link" aria-selected="true"><i
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
            </div>
            <div class="background-overlay"></div>

        </section>
    </aside>
@stop
@section('scripts')
    <script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap4.js"></script>
    <script type="text/javascript" src="js/custom_js/users_custom.js"></script>
@stop


