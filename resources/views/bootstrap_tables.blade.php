@extends('layouts.default')
@section('title')
    Bootstrap Tables | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" href="vendors/bootstrap-table/css/bootstrap-table.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom_css/bootstrap_tables.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Bootstrap Tables
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#"> DataTables</a>
                </li>
                <li class="active">
                    Bootstrap Tables
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!--First Table-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card filterable">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-layout-grid3"></i> Editable Table
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="table1">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User Name</th>
                                        <th>
                                            User E-mail
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Shayna</td>
                                        <td>Lang</td>
                                        <td>Shayna74</td>
                                        <td>Shayna.Lang@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Cleo</td>
                                        <td>Abbott</td>
                                        <td>Cleo_Abbott94</td>
                                        <td>Cleo99@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Theodora</td>
                                        <td>Kihn</td>
                                        <td>Theodora_Kihn</td>
                                        <td>Theodora2@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Madison</td>
                                        <td>Miller</td>
                                        <td>Madison_Miller94</td>
                                        <td>Madison5@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Juwan</td>
                                        <td>Smitham</td>
                                        <td>Juwan90</td>
                                        <td>Juwan13@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Jarrod</td>
                                        <td>Bradtke</td>
                                        <td>Jarrod.Bradtke23</td>
                                        <td>Jarrod.Bradtke40@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Moses</td>
                                        <td>Stark</td>
                                        <td>Moses.Stark</td>
                                        <td>Moses.Stark85@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Garrett</td>
                                        <td>Pacocha</td>
                                        <td>Garrett.Pacocha94</td>
                                        <td>Garrett.Pacocha@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Ellen</td>
                                        <td>Treutel</td>
                                        <td>Ellen63</td>
                                        <td>Ellen5@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Janis</td>
                                        <td>Kautzer</td>
                                        <td>Janis53</td>
                                        <td>Janis32@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Christian</td>
                                        <td>Jaskolski</td>
                                        <td>Christian87</td>
                                        <td>Christian87@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Elton</td>
                                        <td>MacGyver</td>
                                        <td>Elton5</td>
                                        <td>Elton_MacGyver@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Jamaal</td>
                                        <td>Morar</td>
                                        <td>Jamaal66</td>
                                        <td>Jamaal0@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Eddie</td>
                                        <td>Blick</td>
                                        <td>Eddie_Blick</td>
                                        <td>Eddie.Blick@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Kallie</td>
                                        <td>Murphy</td>
                                        <td>Kallie_Murphy38</td>
                                        <td>Kallie.Murphy@yahoo.com</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- First Table End -->
            <!-- second table start -->
            <div class="row mrgn_top">
                <div class="col-lg-12">
                    <div class="card filterable">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-menu"></i> Basic Bootstrap Table
                            </h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered" id="table2" data-toggle="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>User Name</th>
                                    <th>
                                        User E-mail
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Connie</td>
                                    <td>Reynolds</td>
                                    <td>Connie.Reynolds69</td>
                                    <td>Connie12@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kurt</td>
                                    <td>Quitzon</td>
                                    <td>Kurt.Quitzon19</td>
                                    <td>Kurt.Quitzon@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Flossie</td>
                                    <td>Cole</td>
                                    <td>Flossie81</td>
                                    <td>Flossie_Cole@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Rahsaan</td>
                                    <td>Littel</td>
                                    <td>Rahsaan8</td>
                                    <td>Rahsaan_Littel@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Zula</td>
                                    <td>Simonis</td>
                                    <td>Zula.Simonis</td>
                                    <td>Zula_Simonis74@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Mackenzie</td>
                                    <td>O'Hara</td>
                                    <td>Mackenzie85</td>
                                    <td>Mackenzie.OHara31@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Marty</td>
                                    <td>Yundt</td>
                                    <td>Marty_Yundt</td>
                                    <td>Marty.Yundt17@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Harmon</td>
                                    <td>Herzog</td>
                                    <td>Harmon93</td>
                                    <td>Harmon_Herzog@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Kameron</td>
                                    <td>Morissette</td>
                                    <td>Kameron_Morissette79</td>
                                    <td>Kameron88@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Miguel</td>
                                    <td>Nikolaus</td>
                                    <td>Miguel_Nikolaus</td>
                                    <td>Miguel.Nikolaus@gmail.com</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- second table end -->
            <!-- third table start -->
            <div class="row mrgn_top">
                <div class="col-lg-12">
                    <div class="card filterable">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-list"></i> Sortable Bootstrap Table
                            </h3>
                        </div>
                        <div class="card-body">
                            <table data-toggle="table" data-sort-name="age" data-sort-order="desc"
                                   data-pagination="true" data-search="true" data-height="400">
                                <thead>
                                <tr>
                                    <th data-field="firstname" data-sortable="true">First name</th>
                                    <th data-field="lastname" data-sortable="true">Last name</th>
                                    <th data-field="position" data-sortable="true">Position</th>
                                    <th data-field="office" data-sortable="true">Office</th>
                                    <th data-field="startdate" data-sortable="true">Start date</th>
                                    <th data-field="mail" data-sortable="true">E-mail</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Estrella</td>
                                    <td>Weimann</td>
                                    <td>Lead Identity Technician</td>
                                    <td>Port Kamille</td>
                                    <td>1988-3-6</td>
                                    <td>Estrella.Weimann@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Brock</td>
                                    <td>Ward</td>
                                    <td>International Assurance Director</td>
                                    <td>Abernathyton</td>
                                    <td>1986-12-24</td>
                                    <td>Brock.Ward45@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Cortney</td>
                                    <td>Hessel</td>
                                    <td>Lead Metrics Coordinator</td>
                                    <td>West Kareemstad</td>
                                    <td>1946-12-28</td>
                                    <td>Cortney_Hessel92@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Rebeca</td>
                                    <td>Ortiz</td>
                                    <td>Internal Markets Engineer</td>
                                    <td>Gorczanyhaven</td>
                                    <td>1989-6-21</td>
                                    <td>Rebeca.Ortiz93@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Rachelle</td>
                                    <td>Ward</td>
                                    <td>Legacy Brand Director</td>
                                    <td>Connellymouth</td>
                                    <td>1950-3-29</td>
                                    <td>Rachelle28@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Candelario</td>
                                    <td>Hilpert</td>
                                    <td>Future Data Supervisor</td>
                                    <td>North Herminashire</td>
                                    <td>1977-8-22</td>
                                    <td>Candelario.Hilpert0@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Iva</td>
                                    <td>Fritsch</td>
                                    <td>Dynamic Communications Planner</td>
                                    <td>Deionville</td>
                                    <td>1948-3-18</td>
                                    <td>Iva.Fritsch@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Estella</td>
                                    <td>Gerhold</td>
                                    <td>National Optimization Producer</td>
                                    <td>Deckowberg</td>
                                    <td>1963-1-17</td>
                                    <td>Estella_Gerhold73@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Emiliano</td>
                                    <td>Huel</td>
                                    <td>Global Intranet Analyst</td>
                                    <td>North Creolaburgh</td>
                                    <td>1946-4-29</td>
                                    <td>Emiliano.Huel@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Erika</td>
                                    <td>Reichert</td>
                                    <td>Corporate Optimization Strategist</td>
                                    <td>East Andreane</td>
                                    <td>1952-9-15</td>
                                    <td>Erika36@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Lincoln</td>
                                    <td>Dickens</td>
                                    <td>Principal Functionality Architect</td>
                                    <td>West Devan</td>
                                    <td>1947-4-24</td>
                                    <td>Lincoln.Dickens87@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Mya</td>
                                    <td>Ullrich</td>
                                    <td>Future Accountability Orchestrator</td>
                                    <td>Shieldsside</td>
                                    <td>1964-9-23</td>
                                    <td>Mya48@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>April</td>
                                    <td>Marvin</td>
                                    <td>Forward Branding Consultant</td>
                                    <td>West Olen</td>
                                    <td>1943-7-4</td>
                                    <td>April61@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Henriette</td>
                                    <td>Heaney</td>
                                    <td>Investor Applications Administrator</td>
                                    <td>Taratown</td>
                                    <td>1992-2-9</td>
                                    <td>Henriette_Heaney13@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Makenzie</td>
                                    <td>Conroy</td>
                                    <td>District Communications Associate</td>
                                    <td>Stracketon</td>
                                    <td>1959-8-22</td>
                                    <td>Makenzie16@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Gerda</td>
                                    <td>Dicki</td>
                                    <td>Customer Brand Assistant</td>
                                    <td>Luramouth</td>
                                    <td>1969-11-25</td>
                                    <td>Gerda65@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Leatha</td>
                                    <td>Jast</td>
                                    <td>International Program Director</td>
                                    <td>Lake Armandton</td>
                                    <td>1959-3-27</td>
                                    <td>Leatha.Jast@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Beth</td>
                                    <td>Mohr</td>
                                    <td>Human Markets Planner</td>
                                    <td>Durganfurt</td>
                                    <td>1988-7-2</td>
                                    <td>Beth32@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Conor</td>
                                    <td>Gutkowski</td>
                                    <td>Product Communications Director</td>
                                    <td>North Michealburgh</td>
                                    <td>1984-11-3</td>
                                    <td>Conor_Gutkowski88@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Yasmin</td>
                                    <td>Stehr</td>
                                    <td>Dynamic Quality Director</td>
                                    <td>North Lorenzoburgh</td>
                                    <td>1982-6-6</td>
                                    <td>Yasmin.Stehr@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Jenifer</td>
                                    <td>Collier</td>
                                    <td>Customer Operations Specialist</td>
                                    <td>Evelynchester</td>
                                    <td>1989-10-30</td>
                                    <td>Jenifer.Collier74@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Laurel</td>
                                    <td>Cruickshank</td>
                                    <td>International Group Manager</td>
                                    <td>East Janick</td>
                                    <td>1983-4-30</td>
                                    <td>Laurel.Cruickshank53@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Shane</td>
                                    <td>Breitenberg</td>
                                    <td>Investor Program Analyst</td>
                                    <td>Kadinberg</td>
                                    <td>1959-3-20</td>
                                    <td>Shane.Breitenberg50@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Raleigh</td>
                                    <td>Rippin</td>
                                    <td>Corporate Paradigm Manager</td>
                                    <td>Eulaburgh</td>
                                    <td>1943-7-29</td>
                                    <td>Raleigh71@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Ed</td>
                                    <td>Koelpin</td>
                                    <td>Dynamic Integration Specialist</td>
                                    <td>Joseview</td>
                                    <td>1956-1-27</td>
                                    <td>Ed.Koelpin@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Reese</td>
                                    <td>Kuhlman</td>
                                    <td>National Assurance Facilitator</td>
                                    <td>New Araceli</td>
                                    <td>1954-7-12</td>
                                    <td>Reese_Kuhlman@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Carmel</td>
                                    <td>Legros</td>
                                    <td>Forward Markets Associate</td>
                                    <td>Carminehaven</td>
                                    <td>1992-5-15</td>
                                    <td>Carmel_Legros@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Ozella</td>
                                    <td>Pfannerstill</td>
                                    <td>Senior Identity Director</td>
                                    <td>Cronaton</td>
                                    <td>1974-5-15</td>
                                    <td>Ozella.Pfannerstill46@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Lamar</td>
                                    <td>Wunsch</td>
                                    <td>Dynamic Markets Agent</td>
                                    <td>Kennyborough</td>
                                    <td>1957-5-20</td>
                                    <td>Lamar_Wunsch@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Savanah</td>
                                    <td>Sporer</td>
                                    <td>Internal Markets Consultant</td>
                                    <td>West Danika</td>
                                    <td>1952-7-8</td>
                                    <td>Savanah_Sporer@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Sarah</td>
                                    <td>Johns</td>
                                    <td>Principal Assurance Designer</td>
                                    <td>South Chadrickstad</td>
                                    <td>1943-1-25</td>
                                    <td>Sarah94@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Trisha</td>
                                    <td>McKenzie</td>
                                    <td>Global Accountability Developer</td>
                                    <td>West Donnyshire</td>
                                    <td>1985-6-4</td>
                                    <td>Trisha_McKenzie@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Columbus</td>
                                    <td>Runte</td>
                                    <td>Principal Infrastructure Liason</td>
                                    <td>Mannview</td>
                                    <td>1974-4-7</td>
                                    <td>Columbus.Runte@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Pablo</td>
                                    <td>Kilback</td>
                                    <td>Lead Marketing Supervisor</td>
                                    <td>Jamarcuschester</td>
                                    <td>1958-1-4</td>
                                    <td>Pablo_Kilback21@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Laverne</td>
                                    <td>Beahan</td>
                                    <td>Lead Branding Representative</td>
                                    <td>Lake Xzavier</td>
                                    <td>1949-12-20</td>
                                    <td>Laverne67@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Keeley</td>
                                    <td>Johns</td>
                                    <td>Senior Markets Orchestrator</td>
                                    <td>New Hoyt</td>
                                    <td>1970-9-8</td>
                                    <td>Keeley_Johns63@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Wava</td>
                                    <td>Denesik</td>
                                    <td>Legacy Applications Director</td>
                                    <td>Issacborough</td>
                                    <td>1953-11-29</td>
                                    <td>Wava.Denesik@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Madisen</td>
                                    <td>Abbott</td>
                                    <td>Corporate Quality Associate</td>
                                    <td>Marktown</td>
                                    <td>1955-3-12</td>
                                    <td>Madisen.Abbott48@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Maximus</td>
                                    <td>Terry</td>
                                    <td>Global Operations Manager</td>
                                    <td>Damarismouth</td>
                                    <td>1970-3-22</td>
                                    <td>Maximus17@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Bartholome</td>
                                    <td>Lockman</td>
                                    <td>Chief Intranet Officer</td>
                                    <td>Lake Derrickfort</td>
                                    <td>1971-12-29</td>
                                    <td>Bartholome.Lockman@yahoo.com</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- third table end -->
            <!--fourth table start-->
            <div class="row mrgn_top">
                <div class="col-lg-12">
                    <div class="card filterable" id="full_bootstraptable">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-layout-grid2"></i> Full Bootstrap Table
                            </h3>
                        </div>
                        <div class="card-body">
                            <table id="table4" data-toolbar="#toolbar" data-search="true" data-show-refresh="false"
                                   data-show-toggle="true" data-show-columns="true" data-show-export="true"
                                   data-detail-view="true" data-detail-formatter="detailFormatter"
                                   data-minimum-count-columns="2" data-show-pagination-switch="true"
                                   data-pagination="true" data-id-field="id" data-page-list="[10,20,40,ALL]"
                                   data-show-footer="false" data-height="503" data-side-pagination="client">
                                <thead>
                                <tr>
                                    <th data-field="First name" data-sortable="true">First name</th>
                                    <th data-field="Last name" data-sortable="true">Last name</th>
                                    <th data-field="Position" data-sortable="true">Position</th>
                                    <th data-field="Office" data-sortable="true">Office</th>
                                    <th data-field="Age" data-sortable="true">Age</th>
                                    <th data-field="Start date" data-sortable="true">Start date</th>
                                    <th data-field="Salary" data-sortable="true">Salary</th>
                                    <th data-field="E-mail" data-sortable="true">E-mail</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Kellen</td>
                                    <td>Christiansen</td>
                                    <td>Corporate Configuration Director</td>
                                    <td>West Haley</td>
                                    <td>29</td>
                                    <td>1946-10-8</td>
                                    <td>$10352</td>
                                    <td>Kellen.Christiansen@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Zola</td>
                                    <td>Rosenbaum</td>
                                    <td>International Optimization Officer</td>
                                    <td>West Laney</td>
                                    <td>34</td>
                                    <td>1965-4-23</td>
                                    <td>$44228</td>
                                    <td>Zola.Rosenbaum@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Maxie</td>
                                    <td>Stoltenberg</td>
                                    <td>Chief Branding Director</td>
                                    <td>Boyleview</td>
                                    <td>42</td>
                                    <td>1955-12-11</td>
                                    <td>$37141</td>
                                    <td>Maxie.Stoltenberg@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Brody</td>
                                    <td>Boyer</td>
                                    <td>Regional Brand Officer</td>
                                    <td>North Keenanland</td>
                                    <td>45</td>
                                    <td>1990-4-12</td>
                                    <td>$32757</td>
                                    <td>Brody.Boyer@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Alexandrine</td>
                                    <td>Waelchi</td>
                                    <td>Regional Assurance Agent</td>
                                    <td>Port Reneeland</td>
                                    <td>56</td>
                                    <td>1944-11-20</td>
                                    <td>$45065</td>
                                    <td>Alexandrine.Waelchi@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Dale</td>
                                    <td>Von</td>
                                    <td>Central Branding Facilitator</td>
                                    <td>Lake Andrew</td>
                                    <td>53</td>
                                    <td>1970-10-9</td>
                                    <td>$34701</td>
                                    <td>Dale39@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Dorian</td>
                                    <td>Wintheiser</td>
                                    <td>International Research Supervisor</td>
                                    <td>Lednerberg</td>
                                    <td>39</td>
                                    <td>1986-1-16</td>
                                    <td>$20209</td>
                                    <td>Dorian89@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Harvey</td>
                                    <td>Rosenbaum</td>
                                    <td>Legacy Program Assistant</td>
                                    <td>Wilmastad</td>
                                    <td>64</td>
                                    <td>1944-7-14</td>
                                    <td>$17053</td>
                                    <td>Harvey_Rosenbaum@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Garnet</td>
                                    <td>Senger</td>
                                    <td>National Security Producer</td>
                                    <td>South Gracie</td>
                                    <td>43</td>
                                    <td>1944-11-2</td>
                                    <td>$23907</td>
                                    <td>Garnet41@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Bulah</td>
                                    <td>Legros</td>
                                    <td>Investor Functionality Executive</td>
                                    <td>Lake Kaceymouth</td>
                                    <td>49</td>
                                    <td>1962-10-20</td>
                                    <td>$4144</td>
                                    <td>Bulah.Legros@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Moriah</td>
                                    <td>Ledner</td>
                                    <td>Lead Group Supervisor</td>
                                    <td>Port Buford</td>
                                    <td>72</td>
                                    <td>1973-12-27</td>
                                    <td>$28220</td>
                                    <td>Moriah25@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Seamus</td>
                                    <td>Jenkins</td>
                                    <td>National Response Representative</td>
                                    <td>Laurenville</td>
                                    <td>46</td>
                                    <td>1962-12-11</td>
                                    <td>$15678</td>
                                    <td>Seamus_Jenkins17@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Robel</td>
                                    <td>Regional Accountability Architect</td>
                                    <td>Jonesmouth</td>
                                    <td>79</td>
                                    <td>1980-10-15</td>
                                    <td>$33862</td>
                                    <td>Granville64@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Ellen</td>
                                    <td>Denesik</td>
                                    <td>Global Usability Strategist</td>
                                    <td>Calistachester</td>
                                    <td>41</td>
                                    <td>1975-4-4</td>
                                    <td>$39540</td>
                                    <td>Ellen.Denesik@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Tillman</td>
                                    <td>D'Amore</td>
                                    <td>National Directives Developer</td>
                                    <td>Thompsonborough</td>
                                    <td>23</td>
                                    <td>1963-12-21</td>
                                    <td>$17190</td>
                                    <td>Tillman43@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Alexandra</td>
                                    <td>Gibson</td>
                                    <td>Lead Integration Designer</td>
                                    <td>South Amelytown</td>
                                    <td>50</td>
                                    <td>1951-6-24</td>
                                    <td>$14411</td>
                                    <td>Alexandra.Gibson@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Herta</td>
                                    <td>Hand</td>
                                    <td>Product Directives Facilitator</td>
                                    <td>Collierland</td>
                                    <td>70</td>
                                    <td>1953-9-5</td>
                                    <td>$20959</td>
                                    <td>Herta2@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Claudia</td>
                                    <td>Klocko</td>
                                    <td>Legacy Web Supervisor</td>
                                    <td>Jesshaven</td>
                                    <td>39</td>
                                    <td>1984-11-14</td>
                                    <td>$891</td>
                                    <td>Claudia1@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Helena</td>
                                    <td>Kuvalis</td>
                                    <td>District Quality Associate</td>
                                    <td>Morissettetown</td>
                                    <td>29</td>
                                    <td>1963-6-19</td>
                                    <td>$31643</td>
                                    <td>Helena.Kuvalis@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Alison</td>
                                    <td>Simonis</td>
                                    <td>Customer Quality Analyst</td>
                                    <td>South Ellisville</td>
                                    <td>27</td>
                                    <td>1946-11-9</td>
                                    <td>$14741</td>
                                    <td>Alison.Simonis@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Garry</td>
                                    <td>Bernhard</td>
                                    <td>Human Integration Producer</td>
                                    <td>Breitenberghaven</td>
                                    <td>62</td>
                                    <td>1949-12-26</td>
                                    <td>$19674</td>
                                    <td>Garry_Bernhard17@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Dillon</td>
                                    <td>Adams</td>
                                    <td>District Implementation Orchestrator</td>
                                    <td>Port Simeonborough</td>
                                    <td>42</td>
                                    <td>1949-1-21</td>
                                    <td>$31136</td>
                                    <td>Dillon.Adams44@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Skye</td>
                                    <td>Terry</td>
                                    <td>Direct Group Administrator</td>
                                    <td>Port Brooklyn</td>
                                    <td>80</td>
                                    <td>1988-2-29</td>
                                    <td>$37963</td>
                                    <td>Skye.Terry38@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Mae</td>
                                    <td>Zulauf</td>
                                    <td>Dynamic Directives Designer</td>
                                    <td>New Lynn</td>
                                    <td>33</td>
                                    <td>1951-12-16</td>
                                    <td>$827</td>
                                    <td>Mae.Zulauf@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Reed</td>
                                    <td>Padberg</td>
                                    <td>Principal Solutions Coordinator</td>
                                    <td>Royceland</td>
                                    <td>73</td>
                                    <td>1976-12-2</td>
                                    <td>$7053</td>
                                    <td>Reed99@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Floyd</td>
                                    <td>Hills</td>
                                    <td>Chief Brand Associate</td>
                                    <td>Rosannafort</td>
                                    <td>24</td>
                                    <td>1979-11-9</td>
                                    <td>$13277</td>
                                    <td>Floyd_Hills@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Harold</td>
                                    <td>Botsford</td>
                                    <td>Senior Infrastructure Representative</td>
                                    <td>Goyettestad</td>
                                    <td>48</td>
                                    <td>1983-8-25</td>
                                    <td>$2376</td>
                                    <td>Harold_Botsford90@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td>Tomas</td>
                                    <td>Gleason</td>
                                    <td>Lead Markets Liason</td>
                                    <td>North Marcel</td>
                                    <td>66</td>
                                    <td>1989-8-20</td>
                                    <td>$15724</td>
                                    <td>Tomas_Gleason65@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Mandy</td>
                                    <td>Kerluke</td>
                                    <td>Human Research Assistant</td>
                                    <td>Herminiofort</td>
                                    <td>23</td>
                                    <td>1967-7-11</td>
                                    <td>$13332</td>
                                    <td>Mandy_Kerluke11@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Isaiah</td>
                                    <td>Hodkiewicz</td>
                                    <td>Direct Creative Technician</td>
                                    <td>Genevieveville</td>
                                    <td>77</td>
                                    <td>1947-7-31</td>
                                    <td>$17306</td>
                                    <td>Isaiah1@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Jessika</td>
                                    <td>Hoppe</td>
                                    <td>Investor Web Designer</td>
                                    <td>Schusterstad</td>
                                    <td>33</td>
                                    <td>1963-2-9</td>
                                    <td>$21845</td>
                                    <td>Jessika.Hoppe38@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Keenan</td>
                                    <td>Wilkinson</td>
                                    <td>Legacy Quality Liason</td>
                                    <td>Lake Karsonborough</td>
                                    <td>59</td>
                                    <td>1957-5-2</td>
                                    <td>$20405</td>
                                    <td>Keenan.Wilkinson81@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Thora</td>
                                    <td>Schowalter</td>
                                    <td>Central Configuration Producer</td>
                                    <td>North Consueloshire</td>
                                    <td>65</td>
                                    <td>1983-8-25</td>
                                    <td>$18901</td>
                                    <td>Thora36@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Peter</td>
                                    <td>Little</td>
                                    <td>Dynamic Research Associate</td>
                                    <td>New Zachary</td>
                                    <td>67</td>
                                    <td>1952-3-16</td>
                                    <td>$39424</td>
                                    <td>Peter.Little@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Stacey</td>
                                    <td>Block</td>
                                    <td>Chief Group Coordinator</td>
                                    <td>New Joshuahaven</td>
                                    <td>58</td>
                                    <td>1966-12-27</td>
                                    <td>$18443</td>
                                    <td>Stacey87@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Theodore</td>
                                    <td>Lueilwitz</td>
                                    <td>National Infrastructure Coordinator</td>
                                    <td>Kozeyborough</td>
                                    <td>47</td>
                                    <td>1948-3-15</td>
                                    <td>$12425</td>
                                    <td>Theodore.Lueilwitz12@hotmail.com</td>
                                </tr>
                                <tr>
                                    <td>Lonzo</td>
                                    <td>Cremin</td>
                                    <td>Chief Operations Representative</td>
                                    <td>West Ilene</td>
                                    <td>61</td>
                                    <td>1948-11-14</td>
                                    <td>$47106</td>
                                    <td>Lonzo_Cremin10@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Arnoldo</td>
                                    <td>Welch</td>
                                    <td>Customer Group Officer</td>
                                    <td>New Madiemouth</td>
                                    <td>55</td>
                                    <td>1972-1-19</td>
                                    <td>$22460</td>
                                    <td>Arnoldo24@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Leone</td>
                                    <td>Shields</td>
                                    <td>Forward Integration Strategist</td>
                                    <td>East Oran</td>
                                    <td>49</td>
                                    <td>1948-6-14</td>
                                    <td>$24159</td>
                                    <td>Leone_Shields@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Alva</td>
                                    <td>Crooks</td>
                                    <td>Internal Solutions Assistant</td>
                                    <td>Nitzschestad</td>
                                    <td>47</td>
                                    <td>1987-7-8</td>
                                    <td>$28447</td>
                                    <td>Alva19@yahoo.com</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--fourth table end-->
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
    <script type="text/javascript" src="js/mindmup-editabletable.js"></script>
    <script type="text/javascript" src="vendors/bootstrap-table/js/bootstrap-table.min.js"></script>
    <script type="text/javascript" src="vendors/tableExportjqueryplugin/tableExport.min.js"></script>
    <script src="js/custom_js/bootstrap_tables.js" type="text/javascript"></script>
    <!-- end of page level js -->
@stop

