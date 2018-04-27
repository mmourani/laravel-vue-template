@extends('layouts.default')
@section('title')
    Data Tables | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom_css/datatables_custom.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Tables
            </h1>
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
                    Data Tables
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-layout-grid3"></i> Data Table
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="sample_1"  style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <th>email</th>
                                        <th>
                                            Phone
                                        </th>
                                        <th>
                                            Department
                                        </th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Roman Runolfsdottir</td>
                                        <td>Roman24@yahoo.com</td>
                                        <td>429-509-9163</td>
                                        <td>Toys</td>
                                        <td>49428</td>
                                    </tr>
                                    <tr>
                                        <td>Doug Senger</td>
                                        <td>Doug.Senger12@hotmail.com</td>
                                        <td>619-213-3654</td>
                                        <td>Music</td>
                                        <td>3166</td>
                                    </tr>
                                    <tr>
                                        <td>Kennedi Torphy</td>
                                        <td>Kennedi3@gmail.com</td>
                                        <td>366-116-8461</td>
                                        <td>Automotive</td>
                                        <td>49301</td>
                                    </tr>
                                    <tr>
                                        <td>Freeda Treutel</td>
                                        <td>Freeda.Treutel63@gmail.com</td>
                                        <td>410-159-8618</td>
                                        <td>Electronics</td>
                                        <td>8252</td>
                                    </tr>
                                    <tr>
                                        <td>Amos Gottlieb</td>
                                        <td>Amos.Gottlieb57@hotmail.com</td>
                                        <td>067-740-2584</td>
                                        <td>Kids</td>
                                        <td>40248</td>
                                    </tr>
                                    <tr>
                                        <td>Santos Sipes</td>
                                        <td>Santos_Sipes75@hotmail.com</td>
                                        <td>432-008-7647</td>
                                        <td>Games</td>
                                        <td>356</td>
                                    </tr>
                                    <tr>
                                        <td>Sandy Wyman</td>
                                        <td>Sandy_Wyman33@yahoo.com</td>
                                        <td>799-719-5149</td>
                                        <td>Music</td>
                                        <td>26994</td>
                                    </tr>
                                    <tr>
                                        <td>Hilda Hirthe</td>
                                        <td>Hilda_Hirthe@gmail.com</td>
                                        <td>702-898-2035</td>
                                        <td>Home</td>
                                        <td>32700</td>
                                    </tr>
                                    <tr>
                                        <td>Madge Lowe</td>
                                        <td>Madge_Lowe55@hotmail.com</td>
                                        <td>438-643-6504</td>
                                        <td>Beauty</td>
                                        <td>24829</td>
                                    </tr>
                                    <tr>
                                        <td>Brett Olson</td>
                                        <td>Brett59@hotmail.com</td>
                                        <td>031-668-8313</td>
                                        <td>Outdoors</td>
                                        <td>24327</td>
                                    </tr>
                                    <tr>
                                        <td>Aileen Hand</td>
                                        <td>Aileen.Hand52@yahoo.com</td>
                                        <td>495-265-2018</td>
                                        <td>Automotive</td>
                                        <td>39495</td>
                                    </tr>
                                    <tr>
                                        <td>Emerson Brakus</td>
                                        <td>Emerson_Brakus@gmail.com</td>
                                        <td>880-538-9580</td>
                                        <td>Games</td>
                                        <td>37667</td>
                                    </tr>
                                    <tr>
                                        <td>Mandy Gulgowski</td>
                                        <td>Mandy_Gulgowski@yahoo.com</td>
                                        <td>686-439-7326</td>
                                        <td>Industrial</td>
                                        <td>37378</td>
                                    </tr>
                                    <tr>
                                        <td>Brittany Dibbert</td>
                                        <td>Brittany_Dibbert@hotmail.com</td>
                                        <td>662-842-8983</td>
                                        <td>Music</td>
                                        <td>293</td>
                                    </tr>
                                    <tr>
                                        <td>Macy Marks</td>
                                        <td>Macy_Marks@gmail.com</td>
                                        <td>620-493-8379</td>
                                        <td>Outdoors</td>
                                        <td>32749</td>
                                    </tr>
                                    <tr>
                                        <td>Gage Fisher</td>
                                        <td>Gage.Fisher90@hotmail.com</td>
                                        <td>833-190-3441</td>
                                        <td>Baby</td>
                                        <td>33967</td>
                                    </tr>
                                    <tr>
                                        <td>Lawson Wintheiser</td>
                                        <td>Lawson_Wintheiser@gmail.com</td>
                                        <td>263-807-6214</td>
                                        <td>Movies</td>
                                        <td>12143</td>
                                    </tr>
                                    <tr>
                                        <td>Leann Nienow</td>
                                        <td>Leann_Nienow@yahoo.com</td>
                                        <td>854-724-8186</td>
                                        <td>Music</td>
                                        <td>19789</td>
                                    </tr>
                                    <tr>
                                        <td>Polly Kuhic</td>
                                        <td>Polly98@hotmail.com</td>
                                        <td>390-322-1517</td>
                                        <td>Health</td>
                                        <td>47484</td>
                                    </tr>
                                    <tr>
                                        <td>Troy Wuckert</td>
                                        <td>Troy35@yahoo.com</td>
                                        <td>566-666-3953</td>
                                        <td>Baby</td>
                                        <td>33154</td>
                                    </tr>
                                    <tr>
                                        <td>Dominic Leffler</td>
                                        <td>Dominic.Leffler94@yahoo.com</td>
                                        <td>572-920-5685</td>
                                        <td>Movies</td>
                                        <td>34222</td>
                                    </tr>
                                    <tr>
                                        <td>Cordie Funk</td>
                                        <td>Cordie.Funk60@yahoo.com</td>
                                        <td>978-284-8680</td>
                                        <td>Grocery</td>
                                        <td>36814</td>
                                    </tr>
                                    <tr>
                                        <td>Mariane Cruickshank</td>
                                        <td>Mariane24@hotmail.com</td>
                                        <td>627-403-5459</td>
                                        <td>Games</td>
                                        <td>9848</td>
                                    </tr>
                                    <tr>
                                        <td>Giovanna Little</td>
                                        <td>Giovanna_Little@yahoo.com</td>
                                        <td>414-374-6948</td>
                                        <td>Books</td>
                                        <td>13287</td>
                                    </tr>
                                    <tr>
                                        <td>Santa Nolan</td>
                                        <td>Santa74@hotmail.com</td>
                                        <td>184-858-1792</td>
                                        <td>Kids</td>
                                        <td>42723</td>
                                    </tr>
                                    <tr>
                                        <td>Jordane Sawayn</td>
                                        <td>Jordane.Sawayn@gmail.com</td>
                                        <td>742-229-1406</td>
                                        <td>Shoes</td>
                                        <td>16084</td>
                                    </tr>
                                    <tr>
                                        <td>Meaghan Okuneva</td>
                                        <td>Meaghan44@gmail.com</td>
                                        <td>267-660-3828</td>
                                        <td>Computers</td>
                                        <td>4187</td>
                                    </tr>
                                    <tr>
                                        <td>Charlie Tillman</td>
                                        <td>Charlie97@yahoo.com</td>
                                        <td>560-033-8903</td>
                                        <td>Beauty</td>
                                        <td>24886</td>
                                    </tr>
                                    <tr>
                                        <td>Edison Wunsch</td>
                                        <td>Edison_Wunsch@hotmail.com</td>
                                        <td>400-017-7548</td>
                                        <td>Garden</td>
                                        <td>19725</td>
                                    </tr>
                                    <tr>
                                        <td>Imani Mann</td>
                                        <td>Imani44@gmail.com</td>
                                        <td>500-516-8839</td>
                                        <td>Grocery</td>
                                        <td>15656</td>
                                    </tr>
                                    <tr>
                                        <td>Steve Gutkowski</td>
                                        <td>Steve.Gutkowski@gmail.com</td>
                                        <td>553-584-0137</td>
                                        <td>Clothing</td>
                                        <td>29224</td>
                                    </tr>
                                    <tr>
                                        <td>Llewellyn Ratke</td>
                                        <td>Llewellyn58@hotmail.com</td>
                                        <td>790-595-5505</td>
                                        <td>Beauty</td>
                                        <td>32260</td>
                                    </tr>
                                    <tr>
                                        <td>Ali Reinger</td>
                                        <td>Ali25@hotmail.com</td>
                                        <td>777-088-6923</td>
                                        <td>Outdoors</td>
                                        <td>6895</td>
                                    </tr>
                                    <tr>
                                        <td>Edison Sauer</td>
                                        <td>Edison31@hotmail.com</td>
                                        <td>418-084-5373</td>
                                        <td>Computers</td>
                                        <td>37820</td>
                                    </tr>
                                    <tr>
                                        <td>Guadalupe Legros</td>
                                        <td>Guadalupe_Legros37@hotmail.com</td>
                                        <td>727-205-8400</td>
                                        <td>Computers</td>
                                        <td>27315</td>
                                    </tr>
                                    <tr>
                                        <td>Gaston Mraz</td>
                                        <td>Gaston.Mraz@yahoo.com</td>
                                        <td>318-988-0440</td>
                                        <td>Tools</td>
                                        <td>39710</td>
                                    </tr>
                                    <tr>
                                        <td>Luciano Zemlak</td>
                                        <td>Luciano42@gmail.com</td>
                                        <td>840-592-6240</td>
                                        <td>Tools</td>
                                        <td>3844</td>
                                    </tr>
                                    <tr>
                                        <td>Alfred Koepp</td>
                                        <td>Alfred_Koepp@hotmail.com</td>
                                        <td>025-399-0305</td>
                                        <td>Baby</td>
                                        <td>823</td>
                                    </tr>
                                    <tr>
                                        <td>Hailee Brakus</td>
                                        <td>Hailee_Brakus@hotmail.com</td>
                                        <td>216-518-3767</td>
                                        <td>Jewelery</td>
                                        <td>29643</td>
                                    </tr>
                                    <tr>
                                        <td>Franz Swaniawski</td>
                                        <td>Franz_Swaniawski@gmail.com</td>
                                        <td>697-627-5395</td>
                                        <td>Clothing</td>
                                        <td>34518</td>
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
                <div class="col-lg-12">
                    <div class="card mrgn_top">
                        <div class="card-header  clearfix">
                            <h3 class="card-title">
                                <i class="ti-layout-grid3"></i> Show / Hide Columns
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body table-responsive">
                            <strong>
                                Toggle column:
                            </strong>
                            <div class="btn-group" style="margin:10px 0;">
                                <button type="button" class="toggle-vis btn btn-default" data-column="0">Name</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="1">User Name
                                </button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="2">Email</button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="3">Department
                                </button>
                                <button type="button" class="toggle-vis btn btn-default" data-column="4">Contact
                                </button>
                            </div>
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>Contact</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Sarah Leannon</td>
                                    <td>Sarah22</td>
                                    <td>Sarah.Leannon13@hotmail.com</td>
                                    <td>Toys</td>
                                    <td>269-277-7340</td>
                                </tr>
                                <tr>
                                    <td>Prudence Braun</td>
                                    <td>Prudence.Braun</td>
                                    <td>Prudence_Braun99@yahoo.com</td>
                                    <td>Home</td>
                                    <td>259-294-8730</td>
                                </tr>
                                <tr>
                                    <td>Frederik Beier</td>
                                    <td>Frederik_Beier71</td>
                                    <td>Frederik_Beier88@yahoo.com</td>
                                    <td>Health</td>
                                    <td>115-781-3501</td>
                                </tr>
                                <tr>
                                    <td>Devyn Heathcote</td>
                                    <td>Devyn.Heathcote</td>
                                    <td>Devyn.Heathcote@yahoo.com</td>
                                    <td>Garden</td>
                                    <td>030-811-3564</td>
                                </tr>
                                <tr>
                                    <td>Mellie Kuhic</td>
                                    <td>Mellie83</td>
                                    <td>Mellie_Kuhic73@yahoo.com</td>
                                    <td>Clothing</td>
                                    <td>341-136-6740</td>
                                </tr>
                                <tr>
                                    <td>Nova Sauer</td>
                                    <td>Nova33</td>
                                    <td>Nova_Sauer@hotmail.com</td>
                                    <td>Music</td>
                                    <td>243-061-3771</td>
                                </tr>
                                <tr>
                                    <td>Demetrius Mills</td>
                                    <td>Demetrius33</td>
                                    <td>Demetrius.Mills@gmail.com</td>
                                    <td>Kids</td>
                                    <td>254-829-7615</td>
                                </tr>
                                <tr>
                                    <td>Hope Hessel</td>
                                    <td>Hope25</td>
                                    <td>Hope_Hessel@gmail.com</td>
                                    <td>Books</td>
                                    <td>767-138-4997</td>
                                </tr>
                                <tr>
                                    <td>Jackeline Champlin</td>
                                    <td>Jackeline.Champlin</td>
                                    <td>Jackeline.Champlin58@yahoo.com</td>
                                    <td>Jewelery</td>
                                    <td>059-603-4311</td>
                                </tr>
                                <tr>
                                    <td>Meaghan Renner</td>
                                    <td>Meaghan_Renner</td>
                                    <td>Meaghan20@gmail.com</td>
                                    <td>Automotive</td>
                                    <td>939-379-9525</td>
                                </tr>
                                <tr>
                                    <td>Peggie Kassulke</td>
                                    <td>Peggie_Kassulke</td>
                                    <td>Peggie_Kassulke@hotmail.com</td>
                                    <td>Clothing</td>
                                    <td>039-431-8024</td>
                                </tr>
                                <tr>
                                    <td>Paige Walsh</td>
                                    <td>Paige_Walsh</td>
                                    <td>Paige.Walsh@gmail.com</td>
                                    <td>Health</td>
                                    <td>129-485-9542</td>
                                </tr>
                                <tr>
                                    <td>Lamont Hettinger</td>
                                    <td>Lamont.Hettinger77</td>
                                    <td>Lamont75@yahoo.com</td>
                                    <td>Automotive</td>
                                    <td>056-955-2547</td>
                                </tr>
                                <tr>
                                    <td>Giovanni Mosciski</td>
                                    <td>Giovanni.Mosciski77</td>
                                    <td>Giovanni14@yahoo.com</td>
                                    <td>Music</td>
                                    <td>013-913-2683</td>
                                </tr>
                                <tr>
                                    <td>Gregoria Baumbach</td>
                                    <td>Gregoria21</td>
                                    <td>Gregoria_Baumbach@gmail.com</td>
                                    <td>Shoes</td>
                                    <td>613-910-1426</td>
                                </tr>
                                <tr>
                                    <td>Orval Howe</td>
                                    <td>Orval84</td>
                                    <td>Orval_Howe64@hotmail.com</td>
                                    <td>Grocery</td>
                                    <td>679-519-4414</td>
                                </tr>
                                <tr>
                                    <td>Angelica Conroy</td>
                                    <td>Angelica_Conroy</td>
                                    <td>Angelica.Conroy44@gmail.com</td>
                                    <td>Industrial</td>
                                    <td>360-505-8432</td>
                                </tr>
                                <tr>
                                    <td>Gillian Hickle</td>
                                    <td>Gillian.Hickle30</td>
                                    <td>Gillian57@gmail.com</td>
                                    <td>Home</td>
                                    <td>159-164-6997</td>
                                </tr>
                                <tr>
                                    <td>Willa Feeney</td>
                                    <td>Willa58</td>
                                    <td>Willa.Feeney17@hotmail.com</td>
                                    <td>Games</td>
                                    <td>939-683-3718</td>
                                </tr>
                                <tr>
                                    <td>Elyse Cassin</td>
                                    <td>Elyse.Cassin</td>
                                    <td>Elyse.Cassin72@hotmail.com</td>
                                    <td>Outdoors</td>
                                    <td>584-891-5946</td>
                                </tr>
                                <tr>
                                    <td>Miracle Hessel</td>
                                    <td>Miracle.Hessel</td>
                                    <td>Miracle.Hessel@gmail.com</td>
                                    <td>Shoes</td>
                                    <td>549-158-1206</td>
                                </tr>
                                <tr>
                                    <td>Ethyl Pfannerstill</td>
                                    <td>Ethyl_Pfannerstill</td>
                                    <td>Ethyl_Pfannerstill@gmail.com</td>
                                    <td>Shoes</td>
                                    <td>643-622-2951</td>
                                </tr>
                                <tr>
                                    <td>Adah Ortiz</td>
                                    <td>Adah95</td>
                                    <td>Adah48@gmail.com</td>
                                    <td>Tools</td>
                                    <td>270-691-3304</td>
                                </tr>
                                <tr>
                                    <td>Berniece Klein</td>
                                    <td>Berniece_Klein</td>
                                    <td>Berniece_Klein63@yahoo.com</td>
                                    <td>Health</td>
                                    <td>211-699-9576</td>
                                </tr>
                                <tr>
                                    <td>Jordi Breitenberg</td>
                                    <td>Jordi59</td>
                                    <td>Jordi.Breitenberg@yahoo.com</td>
                                    <td>Sports</td>
                                    <td>694-292-9691</td>
                                </tr>
                                <tr>
                                    <td>Adalberto Satterfield</td>
                                    <td>Adalberto94</td>
                                    <td>Adalberto77@yahoo.com</td>
                                    <td>Books</td>
                                    <td>095-203-5357</td>
                                </tr>
                                <tr>
                                    <td>Reese Turner</td>
                                    <td>Reese21</td>
                                    <td>Reese27@hotmail.com</td>
                                    <td>Tools</td>
                                    <td>225-264-1503</td>
                                </tr>
                                <tr>
                                    <td>Tad Maggio</td>
                                    <td>Tad17</td>
                                    <td>Tad41@hotmail.com</td>
                                    <td>Baby</td>
                                    <td>238-050-3173</td>
                                </tr>
                                <tr>
                                    <td>Arlo Smitham</td>
                                    <td>Arlo_Smitham</td>
                                    <td>Arlo_Smitham@hotmail.com</td>
                                    <td>Movies</td>
                                    <td>797-948-0375</td>
                                </tr>
                                <tr>
                                    <td>Orlando Pfannerstill</td>
                                    <td>Orlando20</td>
                                    <td>Orlando17@yahoo.com</td>
                                    <td>Sports</td>
                                    <td>683-899-2503</td>
                                </tr>
                                <tr>
                                    <td>Susan Hessel</td>
                                    <td>Susan_Hessel88</td>
                                    <td>Susan.Hessel60@gmail.com</td>
                                    <td>Home</td>
                                    <td>004-134-6430</td>
                                </tr>
                                <tr>
                                    <td>Luigi Veum</td>
                                    <td>Luigi_Veum</td>
                                    <td>Luigi75@hotmail.com</td>
                                    <td>Toys</td>
                                    <td>846-211-9311</td>
                                </tr>
                                <tr>
                                    <td>Emmie Rau</td>
                                    <td>Emmie_Rau7</td>
                                    <td>Emmie_Rau@hotmail.com</td>
                                    <td>Games</td>
                                    <td>151-075-1800</td>
                                </tr>
                                <tr>
                                    <td>Jessika Johns</td>
                                    <td>Jessika66</td>
                                    <td>Jessika_Johns19@yahoo.com</td>
                                    <td>Beauty</td>
                                    <td>850-092-7783</td>
                                </tr>
                                <tr>
                                    <td>Elmore Hartmann</td>
                                    <td>Elmore_Hartmann</td>
                                    <td>Elmore_Hartmann@gmail.com</td>
                                    <td>Computers</td>
                                    <td>821-435-4775</td>
                                </tr>
                                <tr>
                                    <td>Liliana Schowalter</td>
                                    <td>Liliana67</td>
                                    <td>Liliana56@gmail.com</td>
                                    <td>Tools</td>
                                    <td>615-363-6678</td>
                                </tr>
                                <tr>
                                    <td>Elmira Zboncak</td>
                                    <td>Elmira_Zboncak</td>
                                    <td>Elmira_Zboncak45@yahoo.com</td>
                                    <td>Music</td>
                                    <td>313-074-4827</td>
                                </tr>
                                <tr>
                                    <td>Domenic Larkin</td>
                                    <td>Domenic_Larkin32</td>
                                    <td>Domenic_Larkin@gmail.com</td>
                                    <td>Computers</td>
                                    <td>463-196-1446</td>
                                </tr>
                                <tr>
                                    <td>Josh Wolff</td>
                                    <td>Josh_Wolff</td>
                                    <td>Josh_Wolff@yahoo.com</td>
                                    <td>Automotive</td>
                                    <td>302-250-6870</td>
                                </tr>
                                <tr>
                                    <td>Cullen Rosenbaum</td>
                                    <td>Cullen_Rosenbaum</td>
                                    <td>Cullen.Rosenbaum6@yahoo.com</td>
                                    <td>Grocery</td>
                                    <td>928-465-2210</td>
                                </tr>
                                </tbody>
                            </table>
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
    <script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap4.js"></script>
    <script type="text/javascript" src="js/custom_js/datatables_custom.js"></script>
    <!-- end of page level js -->
@stop



