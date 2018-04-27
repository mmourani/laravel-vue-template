@extends('layouts.default')
@section('title')
    Advanced Tables | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/buttons.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/colReorder.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/rowReorder.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/buttons.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/scroller.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom_css/advanced_datatables.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Advanced Tables
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li><a href="#"> DataTables</a></li>
                <li class="active">
                    Advanced Tables
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card filterable">
                        <div class="card-header clearfix  ">
                            <div class="card-title pull-left">
                                <i class="ti-export"></i> <b>Want to export data?</b>
                            </div>
                            <div class="tools float-right"></div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User email</th>
                                        <th>
                                            Account Type
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Demetrius</td>
                                        <td>Cole</td>
                                        <td>Demetrius.Cole@yahoo.com</td>
                                        <td>Credit Card Account</td>
                                    </tr>
                                    <tr>
                                        <td>Sydnee</td>
                                        <td>Beahan</td>
                                        <td>Sydnee_Beahan41@gmail.com</td>
                                        <td>Home Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Susanna</td>
                                        <td>Skiles</td>
                                        <td>Susanna.Skiles@gmail.com</td>
                                        <td>Investment Account</td>
                                    </tr>
                                    <tr>
                                        <td>Dean</td>
                                        <td>Okuneva</td>
                                        <td>Dean.Okuneva@hotmail.com</td>
                                        <td>Savings Account</td>
                                    </tr>
                                    <tr>
                                        <td>Jameson</td>
                                        <td>Hane</td>
                                        <td>Jameson.Hane75@yahoo.com</td>
                                        <td>Investment Account</td>
                                    </tr>
                                    <tr>
                                        <td>Jamar</td>
                                        <td>Mohr</td>
                                        <td>Jamar80@hotmail.com</td>
                                        <td>Savings Account</td>
                                    </tr>
                                    <tr>
                                        <td>Jazlyn</td>
                                        <td>Bergnaum</td>
                                        <td>Jazlyn_Bergnaum11@yahoo.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Eldridge</td>
                                        <td>Maggio</td>
                                        <td>Eldridge_Maggio@yahoo.com</td>
                                        <td>Home Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Rubie</td>
                                        <td>Kuhic</td>
                                        <td>Rubie54@hotmail.com</td>
                                        <td>Auto Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Karli</td>
                                        <td>Grady</td>
                                        <td>Karli20@gmail.com</td>
                                        <td>Auto Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Claude</td>
                                        <td>Hilll</td>
                                        <td>Claude.Hilll@yahoo.com</td>
                                        <td>Investment Account</td>
                                    </tr>
                                    <tr>
                                        <td>Dameon</td>
                                        <td>Streich</td>
                                        <td>Dameon_Streich@gmail.com</td>
                                        <td>Money Market Account</td>
                                    </tr>
                                    <tr>
                                        <td>Jalen</td>
                                        <td>Schimmel</td>
                                        <td>Jalen3@hotmail.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Fatima</td>
                                        <td>Heidenreich</td>
                                        <td>Fatima3@yahoo.com</td>
                                        <td>Credit Card Account</td>
                                    </tr>
                                    <tr>
                                        <td>Jaydon</td>
                                        <td>Volkman</td>
                                        <td>Jaydon_Volkman26@hotmail.com</td>
                                        <td>Investment Account</td>
                                    </tr>
                                    <tr>
                                        <td>Santos</td>
                                        <td>Tremblay</td>
                                        <td>Santos.Tremblay@gmail.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Emie</td>
                                        <td>Ondricka</td>
                                        <td>Emie_Ondricka@yahoo.com</td>
                                        <td>Investment Account</td>
                                    </tr>
                                    <tr>
                                        <td>Saige</td>
                                        <td>Bergnaum</td>
                                        <td>Saige39@yahoo.com</td>
                                        <td>Credit Card Account</td>
                                    </tr>
                                    <tr>
                                        <td>Brock</td>
                                        <td>Crona</td>
                                        <td>Brock26@yahoo.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Liana</td>
                                        <td>Harvey</td>
                                        <td>Liana.Harvey32@hotmail.com</td>
                                        <td>Savings Account</td>
                                    </tr>
                                    <tr>
                                        <td>Haylie</td>
                                        <td>Stiedemann</td>
                                        <td>Haylie.Stiedemann@yahoo.com</td>
                                        <td>Savings Account</td>
                                    </tr>
                                    <tr>
                                        <td>Hanna</td>
                                        <td>Wuckert</td>
                                        <td>Hanna44@gmail.com</td>
                                        <td>Home Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Aron</td>
                                        <td>Hintz</td>
                                        <td>Aron.Hintz@hotmail.com</td>
                                        <td>Investment Account</td>
                                    </tr>
                                    <tr>
                                        <td>Eunice</td>
                                        <td>Ankunding</td>
                                        <td>Eunice.Ankunding72@yahoo.com</td>
                                        <td>Savings Account</td>
                                    </tr>
                                    <tr>
                                        <td>Mona</td>
                                        <td>VonRueden</td>
                                        <td>Mona.VonRueden@yahoo.com</td>
                                        <td>Credit Card Account</td>
                                    </tr>
                                    <tr>
                                        <td>Celestino</td>
                                        <td>Grant</td>
                                        <td>Celestino.Grant@yahoo.com</td>
                                        <td>Credit Card Account</td>
                                    </tr>
                                    <tr>
                                        <td>Zelda</td>
                                        <td>Wuckert</td>
                                        <td>Zelda_Wuckert@yahoo.com</td>
                                        <td>Auto Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Elmo</td>
                                        <td>Schaden</td>
                                        <td>Elmo43@gmail.com</td>
                                        <td>Home Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Andres</td>
                                        <td>Hintz</td>
                                        <td>Andres.Hintz1@yahoo.com</td>
                                        <td>Auto Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Mandy</td>
                                        <td>Senger</td>
                                        <td>Mandy4@yahoo.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Hayley</td>
                                        <td>Veum</td>
                                        <td>Hayley.Veum@hotmail.com</td>
                                        <td>Investment Account</td>
                                    </tr>
                                    <tr>
                                        <td>Wilmer</td>
                                        <td>Hoppe</td>
                                        <td>Wilmer_Hoppe@gmail.com</td>
                                        <td>Home Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Lyric</td>
                                        <td>Rau</td>
                                        <td>Lyric_Rau39@gmail.com</td>
                                        <td>Money Market Account</td>
                                    </tr>
                                    <tr>
                                        <td>Mariela</td>
                                        <td>Davis</td>
                                        <td>Mariela_Davis43@hotmail.com</td>
                                        <td>Checking Account</td>
                                    </tr>
                                    <tr>
                                        <td>Estefania</td>
                                        <td>Spencer</td>
                                        <td>Estefania.Spencer@gmail.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Dolores</td>
                                        <td>Rau</td>
                                        <td>Dolores_Rau@hotmail.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Norma</td>
                                        <td>Bahringer</td>
                                        <td>Norma34@hotmail.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Letitia</td>
                                        <td>Parisian</td>
                                        <td>Letitia96@gmail.com</td>
                                        <td>Checking Account</td>
                                    </tr>
                                    <tr>
                                        <td>Earlene</td>
                                        <td>Stracke</td>
                                        <td>Earlene.Stracke64@hotmail.com</td>
                                        <td>Home Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Lawson</td>
                                        <td>Sanford</td>
                                        <td>Lawson.Sanford@yahoo.com</td>
                                        <td>Home Loan Account</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row-->
            <div class="row mrgn_top">
                <div class="col-lg-12">
                    <div class="card filterable" style="overflow:auto;">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-move"></i> Re-order Columns
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User Name</th>
                                        <th>
                                            Company
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Keon</td>
                                        <td>Kihn</td>
                                        <td>Keon56</td>
                                        <td>Kassulke and Sons</td>
                                    </tr>
                                    <tr>
                                        <td>Kasandra</td>
                                        <td>Hermiston</td>
                                        <td>Kasandra.Hermiston</td>
                                        <td>Cruickshank LLC</td>
                                    </tr>
                                    <tr>
                                        <td>Chris</td>
                                        <td>Schuster</td>
                                        <td>Chris.Schuster96</td>
                                        <td>Kuhlman - Erdman</td>
                                    </tr>
                                    <tr>
                                        <td>Wilfredo</td>
                                        <td>Breitenberg</td>
                                        <td>Wilfredo_Breitenberg</td>
                                        <td>Barrows - Gutkowski</td>
                                    </tr>
                                    <tr>
                                        <td>Boris</td>
                                        <td>Waters</td>
                                        <td>Boris54</td>
                                        <td>Lesch - Nader</td>
                                    </tr>
                                    <tr>
                                        <td>Dina</td>
                                        <td>Murray</td>
                                        <td>Dina_Murray</td>
                                        <td>Steuber Inc</td>
                                    </tr>
                                    <tr>
                                        <td>Lorna</td>
                                        <td>Bernhard</td>
                                        <td>Lorna23</td>
                                        <td>Kertzmann - Tromp</td>
                                    </tr>
                                    <tr>
                                        <td>Nash</td>
                                        <td>Schimmel</td>
                                        <td>Nash_Schimmel78</td>
                                        <td>Howe, Mraz and Funk</td>
                                    </tr>
                                    <tr>
                                        <td>Russ</td>
                                        <td>Sawayn</td>
                                        <td>Russ83</td>
                                        <td>Will LLC</td>
                                    </tr>
                                    <tr>
                                        <td>Geovany</td>
                                        <td>Hermiston</td>
                                        <td>Geovany.Hermiston89</td>
                                        <td>McKenzie LLC</td>
                                    </tr>
                                    <tr>
                                        <td>Ellis</td>
                                        <td>Oberbrunner</td>
                                        <td>Ellis.Oberbrunner</td>
                                        <td>Orn, Hilpert and Douglas</td>
                                    </tr>
                                    <tr>
                                        <td>Arely</td>
                                        <td>Turner</td>
                                        <td>Arely79</td>
                                        <td>McGlynn - Oberbrunner</td>
                                    </tr>
                                    <tr>
                                        <td>Destiney</td>
                                        <td>Rohan</td>
                                        <td>Destiney.Rohan</td>
                                        <td>Turner LLC</td>
                                    </tr>
                                    <tr>
                                        <td>Brian</td>
                                        <td>Koch</td>
                                        <td>Brian.Koch</td>
                                        <td>Streich, Spencer and Dickinson</td>
                                    </tr>
                                    <tr>
                                        <td>Eldred</td>
                                        <td>Schuppe</td>
                                        <td>Eldred83</td>
                                        <td>Cronin Group</td>
                                    </tr>
                                    <tr>
                                        <td>Caden</td>
                                        <td>Kohler</td>
                                        <td>Caden.Kohler0</td>
                                        <td>Rippin and Sons</td>
                                    </tr>
                                    <tr>
                                        <td>Zora</td>
                                        <td>Feest</td>
                                        <td>Zora5</td>
                                        <td>Kuphal - Kuhic</td>
                                    </tr>
                                    <tr>
                                        <td>Shanon</td>
                                        <td>Abernathy</td>
                                        <td>Shanon.Abernathy72</td>
                                        <td>Funk, Hickle and Larkin</td>
                                    </tr>
                                    <tr>
                                        <td>Kaylee</td>
                                        <td>Roberts</td>
                                        <td>Kaylee75</td>
                                        <td>Christiansen - Rempel</td>
                                    </tr>
                                    <tr>
                                        <td>Russell</td>
                                        <td>Wuckert</td>
                                        <td>Russell.Wuckert67</td>
                                        <td>Nienow - Turcotte</td>
                                    </tr>
                                    <tr>
                                        <td>Jarrell</td>
                                        <td>Langworth</td>
                                        <td>Jarrell72</td>
                                        <td>Hahn LLC</td>
                                    </tr>
                                    <tr>
                                        <td>Alanis</td>
                                        <td>Hane</td>
                                        <td>Alanis_Hane</td>
                                        <td>Cole - Ankunding</td>
                                    </tr>
                                    <tr>
                                        <td>Shyanne</td>
                                        <td>Hagenes</td>
                                        <td>Shyanne_Hagenes49</td>
                                        <td>Eichmann, Cummings and Hegmann</td>
                                    </tr>
                                    <tr>
                                        <td>Humberto</td>
                                        <td>Terry</td>
                                        <td>Humberto_Terry</td>
                                        <td>Wintheiser and Sons</td>
                                    </tr>
                                    <tr>
                                        <td>Lucy</td>
                                        <td>Pagac</td>
                                        <td>Lucy.Pagac</td>
                                        <td>Wunsch, Hammes and Bartell</td>
                                    </tr>
                                    <tr>
                                        <td>Royce</td>
                                        <td>Wilkinson</td>
                                        <td>Royce5</td>
                                        <td>Botsford - Kilback</td>
                                    </tr>
                                    <tr>
                                        <td>Jordane</td>
                                        <td>Kris</td>
                                        <td>Jordane_Kris0</td>
                                        <td>Ritchie, Dooley and Hickle</td>
                                    </tr>
                                    <tr>
                                        <td>Brandi</td>
                                        <td>Marks</td>
                                        <td>Brandi_Marks</td>
                                        <td>Hayes Group</td>
                                    </tr>
                                    <tr>
                                        <td>Dylan</td>
                                        <td>Gleichner</td>
                                        <td>Dylan_Gleichner</td>
                                        <td>Ankunding, Pouros and Trantow</td>
                                    </tr>
                                    <tr>
                                        <td>Asia</td>
                                        <td>McGlynn</td>
                                        <td>Asia67</td>
                                        <td>Jakubowski and Sons</td>
                                    </tr>
                                    <tr>
                                        <td>Fiona</td>
                                        <td>Hirthe</td>
                                        <td>Fiona_Hirthe</td>
                                        <td>Littel, Koepp and McLaughlin</td>
                                    </tr>
                                    <tr>
                                        <td>Zena</td>
                                        <td>Shields</td>
                                        <td>Zena.Shields80</td>
                                        <td>Beatty - O'Kon</td>
                                    </tr>
                                    <tr>
                                        <td>Alayna</td>
                                        <td>Stamm</td>
                                        <td>Alayna_Stamm41</td>
                                        <td>Beier LLC</td>
                                    </tr>
                                    <tr>
                                        <td>Kari</td>
                                        <td>Pollich</td>
                                        <td>Kari.Pollich</td>
                                        <td>Corkery - Parisian</td>
                                    </tr>
                                    <tr>
                                        <td>Lucas</td>
                                        <td>Sipes</td>
                                        <td>Lucas.Sipes3</td>
                                        <td>Berge, Gibson and Ferry</td>
                                    </tr>
                                    <tr>
                                        <td>Louisa</td>
                                        <td>Robel</td>
                                        <td>Louisa.Robel7</td>
                                        <td>McLaughlin, Sipes and Simonis</td>
                                    </tr>
                                    <tr>
                                        <td>Hettie</td>
                                        <td>Von</td>
                                        <td>Hettie97</td>
                                        <td>Bartoletti and Sons</td>
                                    </tr>
                                    <tr>
                                        <td>Janae</td>
                                        <td>Carter</td>
                                        <td>Janae.Carter</td>
                                        <td>Okuneva, Hodkiewicz and Nicolas</td>
                                    </tr>
                                    <tr>
                                        <td>Selmer</td>
                                        <td>Cummerata</td>
                                        <td>Selmer.Cummerata</td>
                                        <td>Mayer - Hagenes</td>
                                    </tr>
                                    <tr>
                                        <td>Elza</td>
                                        <td>O'Reilly</td>
                                        <td>Elza.OReilly</td>
                                        <td>Quigley, Lowe and Ritchie</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row-->
            <div class="row mrgn_top">
                <div class="col-lg-12">
                    <div class="card filterable">
                        <div class="card-header clearfix">
                            <h3 class="card-title pull-left margn_set">
                                <i class="ti-control-shuffle"></i> Add / Remove rows
                            </h3>
                            <div class="float-right">
                                <button type="button" class="btn btn-primary btn-sm" id="addButton">Add row</button>
                                <button type="button" class="btn btn-danger btn-sm" id="delButton">Delete row</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="table3">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User email</th>
                                        <th>
                                            Contact
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Eveline</td>
                                        <td>Trantow</td>
                                        <td>Eveline_Trantow@gmail.com</td>
                                        <td>457-997-1592</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Glen</td>
                                        <td>Jakubowski</td>
                                        <td>Glen76@hotmail.com</td>
                                        <td>771-231-5487</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Elaina</td>
                                        <td>Prohaska</td>
                                        <td>Elaina.Prohaska14@hotmail.com</td>
                                        <td>976-696-7144</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dwight</td>
                                        <td>Mohr</td>
                                        <td>Dwight_Mohr@yahoo.com</td>
                                        <td>031-955-0746</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Kim</td>
                                        <td>Cruickshank</td>
                                        <td>Kim_Cruickshank@yahoo.com</td>
                                        <td>937-691-5468</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Kameron</td>
                                        <td>Mante</td>
                                        <td>Kameron77@gmail.com</td>
                                        <td>727-927-3894</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Osborne</td>
                                        <td>Kutch</td>
                                        <td>Osborne.Kutch24@yahoo.com</td>
                                        <td>818-219-1436</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Magdalena</td>
                                        <td>Bogan</td>
                                        <td>Magdalena.Bogan@gmail.com</td>
                                        <td>357-438-6912</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Rhiannon</td>
                                        <td>Rice</td>
                                        <td>Rhiannon_Rice@yahoo.com</td>
                                        <td>784-055-2906</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Lucile</td>
                                        <td>Keeling</td>
                                        <td>Lucile58@hotmail.com</td>
                                        <td>242-185-2271</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Eli</td>
                                        <td>Kovacek</td>
                                        <td>Eli.Kovacek@gmail.com</td>
                                        <td>767-230-6149</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Max</td>
                                        <td>Padberg</td>
                                        <td>Max_Padberg@yahoo.com</td>
                                        <td>609-627-4084</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Norval</td>
                                        <td>Rath</td>
                                        <td>Norval74@gmail.com</td>
                                        <td>248-631-0145</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Grady</td>
                                        <td>Lesch</td>
                                        <td>Grady.Lesch43@hotmail.com</td>
                                        <td>579-377-4526</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Ernie</td>
                                        <td>Kub</td>
                                        <td>Ernie32@gmail.com</td>
                                        <td>687-425-8040</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Helen</td>
                                        <td>Durgan</td>
                                        <td>Helen43@yahoo.com</td>
                                        <td>762-249-0859</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Peggie</td>
                                        <td>Grady</td>
                                        <td>Peggie27@hotmail.com</td>
                                        <td>360-045-8748</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Jordy</td>
                                        <td>Mayert</td>
                                        <td>Jordy43@yahoo.com</td>
                                        <td>496-621-5551</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Adrienne</td>
                                        <td>Reilly</td>
                                        <td>Adrienne46@yahoo.com</td>
                                        <td>697-173-8927</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Karley</td>
                                        <td>Homenick</td>
                                        <td>Karley_Homenick60@hotmail.com</td>
                                        <td>930-799-2042</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Darion</td>
                                        <td>Christiansen</td>
                                        <td>Darion.Christiansen86@yahoo.com</td>
                                        <td>899-822-5178</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Luz</td>
                                        <td>Kilback</td>
                                        <td>Luz.Kilback@gmail.com</td>
                                        <td>784-712-6332</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Lindsey</td>
                                        <td>Tremblay</td>
                                        <td>Lindsey_Tremblay@yahoo.com</td>
                                        <td>783-584-2841</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Colt</td>
                                        <td>MacGyver</td>
                                        <td>Colt73@yahoo.com</td>
                                        <td>800-711-3591</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Natasha</td>
                                        <td>Schamberger</td>
                                        <td>Natasha.Schamberger68@gmail.com</td>
                                        <td>588-666-7244</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Earlene</td>
                                        <td>Windler</td>
                                        <td>Earlene87@gmail.com</td>
                                        <td>579-545-2605</td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Keyshawn</td>
                                        <td>Wiegand</td>
                                        <td>Keyshawn_Wiegand33@yahoo.com</td>
                                        <td>013-558-0632</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Priscilla</td>
                                        <td>Crona</td>
                                        <td>Priscilla.Crona@hotmail.com</td>
                                        <td>699-185-0198</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Clarabelle</td>
                                        <td>Legros</td>
                                        <td>Clarabelle.Legros@gmail.com</td>
                                        <td>229-547-4531</td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Amaya</td>
                                        <td>Murazik</td>
                                        <td>Amaya_Murazik38@gmail.com</td>
                                        <td>616-668-8398</td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>Marcelle</td>
                                        <td>Torphy</td>
                                        <td>Marcelle17@gmail.com</td>
                                        <td>381-767-6748</td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>Norberto</td>
                                        <td>Huels</td>
                                        <td>Norberto.Huels75@gmail.com</td>
                                        <td>505-191-3299</td>
                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>Cordie</td>
                                        <td>Metz</td>
                                        <td>Cordie_Metz@yahoo.com</td>
                                        <td>383-212-8444</td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>Dennis</td>
                                        <td>Grant</td>
                                        <td>Dennis_Grant@hotmail.com</td>
                                        <td>757-860-2177</td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>Laurine</td>
                                        <td>Wiza</td>
                                        <td>Laurine.Wiza@hotmail.com</td>
                                        <td>844-454-0123</td>
                                    </tr>
                                    <tr>
                                        <td>36</td>
                                        <td>Isidro</td>
                                        <td>Howe</td>
                                        <td>Isidro.Howe28@hotmail.com</td>
                                        <td>570-437-2025</td>
                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td>Montana</td>
                                        <td>Bauch</td>
                                        <td>Montana30@gmail.com</td>
                                        <td>651-720-7969</td>
                                    </tr>
                                    <tr>
                                        <td>38</td>
                                        <td>Montana</td>
                                        <td>Schmitt</td>
                                        <td>Montana_Schmitt@yahoo.com</td>
                                        <td>421-495-4064</td>
                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td>Celestino</td>
                                        <td>Dach</td>
                                        <td>Celestino.Dach@gmail.com</td>
                                        <td>718-592-7075</td>
                                    </tr>
                                    <tr>
                                        <td>40</td>
                                        <td>Payton</td>
                                        <td>Wuckert</td>
                                        <td>Payton23@yahoo.com</td>
                                        <td>458-553-7848</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Third Basic Table Ends Here-->
            <!--delete modal starts here-->
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="Heading"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title custom_align" id="Heading">
                                Delete this entry
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-warning">
                                <span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete
                                this Record?
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-warning">
                                <span class="glyphicon glyphicon-ok-sign"></span> Yes
                            </button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span> No
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal ends here -->
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
    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap4.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.buttons.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.colReorder.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.responsive.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.rowReorder.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/buttons.colVis.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/buttons.html5.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/buttons.bootstrap.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/buttons.print.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.scroller.js"></script>
    <script src="js/custom_js/advanced_datatables.js" type="text/javascript"></script>
    <!-- end of page level js -->
@stop

