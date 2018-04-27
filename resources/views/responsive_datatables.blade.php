@extends('layouts.default')
@section('title')
    Responsive Tables | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap-table/css/bootstrap-table.min.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatablesmark.js/css/datatables.mark.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom_css/responsive_datatables.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Responsive Tables
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li><a href="#"> DataTables</a></li>
                <li class="active">
                    Responsive Tables
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-align-justify"></i> Horizontal Scroll
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table horizontal_table table-striped" id="table1">
                                    <thead>
                                    <tr>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>E-mail</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Kaylah</td>
                                        <td>Padberg</td>
                                        <td>International Quality Strategist</td>
                                        <td>Pagacchester</td>
                                        <td>32</td>
                                        <td>1984-11-18</td>
                                        <td>$40507</td>
                                        <td>Kaylah.Padberg@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Sunny</td>
                                        <td>Schneider</td>
                                        <td>Central Creative Analyst</td>
                                        <td>Dorcasmouth</td>
                                        <td>44</td>
                                        <td>1946-10-9</td>
                                        <td>$19643</td>
                                        <td>Sunny.Schneider32@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Avis</td>
                                        <td>Buckridge</td>
                                        <td>Direct Mobility Analyst</td>
                                        <td>New Majorside</td>
                                        <td>44</td>
                                        <td>1976-1-3</td>
                                        <td>$19507</td>
                                        <td>Avis.Buckridge@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Lupe</td>
                                        <td>Schultz</td>
                                        <td>Legacy Identity Consultant</td>
                                        <td>West Kaelyn</td>
                                        <td>64</td>
                                        <td>1955-5-6</td>
                                        <td>$30483</td>
                                        <td>Lupe86@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Josefa</td>
                                        <td>Kirlin</td>
                                        <td>Senior Accountability Facilitator</td>
                                        <td>South Macey</td>
                                        <td>70</td>
                                        <td>1944-7-30</td>
                                        <td>$5340</td>
                                        <td>Josefa_Kirlin91@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Maggie</td>
                                        <td>Deckow</td>
                                        <td>International Security Strategist</td>
                                        <td>Eileenfort</td>
                                        <td>26</td>
                                        <td>1948-12-2</td>
                                        <td>$17296</td>
                                        <td>Maggie_Deckow@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Adelle</td>
                                        <td>Champlin</td>
                                        <td>Customer Web Coordinator</td>
                                        <td>Breitenberghaven</td>
                                        <td>68</td>
                                        <td>1960-10-25</td>
                                        <td>$27864</td>
                                        <td>Adelle_Champlin@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Kareem</td>
                                        <td>Jaskolski</td>
                                        <td>Investor Web Developer</td>
                                        <td>Shainachester</td>
                                        <td>35</td>
                                        <td>1966-10-13</td>
                                        <td>$19100</td>
                                        <td>Kareem_Jaskolski@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Ubaldo</td>
                                        <td>Swaniawski</td>
                                        <td>Dynamic Intranet Director</td>
                                        <td>South Lambert</td>
                                        <td>61</td>
                                        <td>1983-4-9</td>
                                        <td>$3911</td>
                                        <td>Ubaldo.Swaniawski@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Alisha</td>
                                        <td>Bartoletti</td>
                                        <td>National Research Associate</td>
                                        <td>Zionmouth</td>
                                        <td>53</td>
                                        <td>1988-2-13</td>
                                        <td>$1692</td>
                                        <td>Alisha94@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Kelvin</td>
                                        <td>Runte</td>
                                        <td>International Tactics Manager</td>
                                        <td>Lake Antonietta</td>
                                        <td>39</td>
                                        <td>1975-8-18</td>
                                        <td>$31422</td>
                                        <td>Kelvin_Runte5@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Marielle</td>
                                        <td>Harris</td>
                                        <td>Forward Marketing Engineer</td>
                                        <td>East Myriambury</td>
                                        <td>70</td>
                                        <td>1950-6-26</td>
                                        <td>$47269</td>
                                        <td>Marielle_Harris@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Mohamed</td>
                                        <td>West</td>
                                        <td>Senior Branding Liason</td>
                                        <td>Stokesland</td>
                                        <td>63</td>
                                        <td>1984-2-11</td>
                                        <td>$39419</td>
                                        <td>Mohamed.West@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Rubie</td>
                                        <td>Ortiz</td>
                                        <td>Dynamic Accounts Analyst</td>
                                        <td>South Liza</td>
                                        <td>64</td>
                                        <td>1966-9-9</td>
                                        <td>$26062</td>
                                        <td>Rubie.Ortiz@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Vida</td>
                                        <td>Schuster</td>
                                        <td>Direct Functionality Facilitator</td>
                                        <td>Cesarberg</td>
                                        <td>43</td>
                                        <td>1946-10-27</td>
                                        <td>$20502</td>
                                        <td>Vida.Schuster@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Noe</td>
                                        <td>Schneider</td>
                                        <td>Principal Accounts Officer</td>
                                        <td>Lake Karli</td>
                                        <td>28</td>
                                        <td>1962-8-31</td>
                                        <td>$12886</td>
                                        <td>Noe_Schneider@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Marielle</td>
                                        <td>Ullrich</td>
                                        <td>Future Functionality Coordinator</td>
                                        <td>Port Coltville</td>
                                        <td>67</td>
                                        <td>1973-3-5</td>
                                        <td>$3810</td>
                                        <td>Marielle.Ullrich24@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Jay</td>
                                        <td>Armstrong</td>
                                        <td>Direct Program Officer</td>
                                        <td>West Era</td>
                                        <td>42</td>
                                        <td>1954-2-6</td>
                                        <td>$888</td>
                                        <td>Jay35@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Beatrice</td>
                                        <td>Considine</td>
                                        <td>Dynamic Accountability Representative</td>
                                        <td>Reedstad</td>
                                        <td>40</td>
                                        <td>1987-11-10</td>
                                        <td>$41042</td>
                                        <td>Beatrice_Considine85@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Allie</td>
                                        <td>Shanahan</td>
                                        <td>Regional Division Facilitator</td>
                                        <td>Bergeburgh</td>
                                        <td>39</td>
                                        <td>1966-4-11</td>
                                        <td>$8109</td>
                                        <td>Allie33@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Dereck</td>
                                        <td>Little</td>
                                        <td>Corporate Applications Architect</td>
                                        <td>Ginoberg</td>
                                        <td>55</td>
                                        <td>1988-11-14</td>
                                        <td>$17274</td>
                                        <td>Dereck33@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Josefina</td>
                                        <td>Durgan</td>
                                        <td>Product Creative Producer</td>
                                        <td>Ameliashire</td>
                                        <td>63</td>
                                        <td>1963-9-25</td>
                                        <td>$11752</td>
                                        <td>Josefina.Durgan@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Alvis</td>
                                        <td>Altenwerth</td>
                                        <td>Future Communications Strategist</td>
                                        <td>Lake Adrien</td>
                                        <td>27</td>
                                        <td>1947-12-10</td>
                                        <td>$23369</td>
                                        <td>Alvis16@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Burdette</td>
                                        <td>Hilpert</td>
                                        <td>Chief Data Designer</td>
                                        <td>Emeryfurt</td>
                                        <td>39</td>
                                        <td>1953-4-1</td>
                                        <td>$6161</td>
                                        <td>Burdette_Hilpert34@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Krystel</td>
                                        <td>Okuneva</td>
                                        <td>Forward Response Developer</td>
                                        <td>Port Winifredport</td>
                                        <td>38</td>
                                        <td>1949-9-12</td>
                                        <td>$17361</td>
                                        <td>Krystel.Okuneva93@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Waldo</td>
                                        <td>Rowe</td>
                                        <td>Forward Infrastructure Coordinator</td>
                                        <td>West Donnieshire</td>
                                        <td>22</td>
                                        <td>1989-5-15</td>
                                        <td>$20099</td>
                                        <td>Waldo.Rowe63@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Reina</td>
                                        <td>Miller</td>
                                        <td>Legacy Identity Engineer</td>
                                        <td>Lazaroberg</td>
                                        <td>42</td>
                                        <td>1991-8-8</td>
                                        <td>$43257</td>
                                        <td>Reina.Miller72@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Jedediah</td>
                                        <td>Will</td>
                                        <td>National Brand Coordinator</td>
                                        <td>New Shermantown</td>
                                        <td>38</td>
                                        <td>1943-1-18</td>
                                        <td>$15664</td>
                                        <td>Jedediah_Will@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Elise</td>
                                        <td>Hermann</td>
                                        <td>Future Accounts Supervisor</td>
                                        <td>New Darien</td>
                                        <td>77</td>
                                        <td>1988-8-12</td>
                                        <td>$21169</td>
                                        <td>Elise.Hermann@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Charlene</td>
                                        <td>Emmerich</td>
                                        <td>District Functionality Developer</td>
                                        <td>East Cordie</td>
                                        <td>70</td>
                                        <td>1946-11-4</td>
                                        <td>$28598</td>
                                        <td>Charlene.Emmerich@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Monserrat</td>
                                        <td>Gibson</td>
                                        <td>District Creative Strategist</td>
                                        <td>Steuberton</td>
                                        <td>50</td>
                                        <td>1974-11-24</td>
                                        <td>$1338</td>
                                        <td>Monserrat_Gibson@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Mckenna</td>
                                        <td>Beatty</td>
                                        <td>Dynamic Interactions Designer</td>
                                        <td>Mooreberg</td>
                                        <td>49</td>
                                        <td>1987-12-16</td>
                                        <td>$9194</td>
                                        <td>Mckenna_Beatty@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Sydney</td>
                                        <td>Ryan</td>
                                        <td>Product Solutions Executive</td>
                                        <td>Dickinsonbury</td>
                                        <td>36</td>
                                        <td>1970-2-14</td>
                                        <td>$2852</td>
                                        <td>Sydney.Ryan62@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Craig</td>
                                        <td>Kutch</td>
                                        <td>Central Paradigm Agent</td>
                                        <td>Port Abelmouth</td>
                                        <td>75</td>
                                        <td>1963-10-3</td>
                                        <td>$38931</td>
                                        <td>Craig35@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Orie</td>
                                        <td>Koelpin</td>
                                        <td>Internal Applications Agent</td>
                                        <td>South Alta</td>
                                        <td>46</td>
                                        <td>1947-5-2</td>
                                        <td>$39406</td>
                                        <td>Orie_Koelpin13@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Schuyler</td>
                                        <td>Langworth</td>
                                        <td>Regional Metrics Representative</td>
                                        <td>Carterfurt</td>
                                        <td>44</td>
                                        <td>1983-5-29</td>
                                        <td>$1092</td>
                                        <td>Schuyler.Langworth@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Zoe</td>
                                        <td>Lemke</td>
                                        <td>Lead Division Strategist</td>
                                        <td>Lake Madelynn</td>
                                        <td>75</td>
                                        <td>1987-3-5</td>
                                        <td>$2959</td>
                                        <td>Zoe.Lemke@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Hollis</td>
                                        <td>Ortiz</td>
                                        <td>Dynamic Factors Representative</td>
                                        <td>West Rachelle</td>
                                        <td>52</td>
                                        <td>1987-9-13</td>
                                        <td>$7518</td>
                                        <td>Hollis75@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Lucie</td>
                                        <td>Herman</td>
                                        <td>Central Division Agent</td>
                                        <td>Stantonhaven</td>
                                        <td>74</td>
                                        <td>1959-2-16</td>
                                        <td>$29033</td>
                                        <td>Lucie.Herman81@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Neoma</td>
                                        <td>O'Kon</td>
                                        <td>Future Research Strategist</td>
                                        <td>East Jeromy</td>
                                        <td>46</td>
                                        <td>1983-3-19</td>
                                        <td>$23175</td>
                                        <td>Neoma.OKon@hotmail.com</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row-->
            <!--Second Table-->
            <div class="row mrgn_top">
                <div class="col-lg-12">
                    <div class="card filterable">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-move"></i> DOM Positioning
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User E-mail</th>
                                        <th>
                                            Contact
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Zelma</td>
                                        <td>Kerluke</td>
                                        <td>Zelma38@gmail.com</td>
                                        <td>647-789-2236</td>
                                    </tr>
                                    <tr>
                                        <td>Melvin</td>
                                        <td>Hane</td>
                                        <td>Melvin_Hane83@yahoo.com</td>
                                        <td>767-637-3885</td>
                                    </tr>
                                    <tr>
                                        <td>Florian</td>
                                        <td>Koelpin</td>
                                        <td>Florian_Koelpin18@gmail.com</td>
                                        <td>341-971-1081</td>
                                    </tr>
                                    <tr>
                                        <td>Keven</td>
                                        <td>White</td>
                                        <td>Keven_White90@gmail.com</td>
                                        <td>027-194-3398</td>
                                    </tr>
                                    <tr>
                                        <td>Griffin</td>
                                        <td>Wilkinson</td>
                                        <td>Griffin.Wilkinson44@hotmail.com</td>
                                        <td>171-411-2807</td>
                                    </tr>
                                    <tr>
                                        <td>Loyce</td>
                                        <td>Wehner</td>
                                        <td>Loyce_Wehner96@gmail.com</td>
                                        <td>052-533-5797</td>
                                    </tr>
                                    <tr>
                                        <td>Alexandrine</td>
                                        <td>McClure</td>
                                        <td>Alexandrine37@yahoo.com</td>
                                        <td>859-417-4180</td>
                                    </tr>
                                    <tr>
                                        <td>Kaia</td>
                                        <td>Brakus</td>
                                        <td>Kaia_Brakus@yahoo.com</td>
                                        <td>610-971-4585</td>
                                    </tr>
                                    <tr>
                                        <td>Cletus</td>
                                        <td>Abbott</td>
                                        <td>Cletus_Abbott@hotmail.com</td>
                                        <td>149-981-2954</td>
                                    </tr>
                                    <tr>
                                        <td>Skyla</td>
                                        <td>Kuhn</td>
                                        <td>Skyla.Kuhn32@hotmail.com</td>
                                        <td>478-000-1595</td>
                                    </tr>
                                    <tr>
                                        <td>Wanda</td>
                                        <td>Robel</td>
                                        <td>Wanda.Robel@hotmail.com</td>
                                        <td>501-263-2784</td>
                                    </tr>
                                    <tr>
                                        <td>Timothy</td>
                                        <td>Williamson</td>
                                        <td>Timothy_Williamson8@hotmail.com</td>
                                        <td>871-682-4150</td>
                                    </tr>
                                    <tr>
                                        <td>Dayna</td>
                                        <td>Schroeder</td>
                                        <td>Dayna37@gmail.com</td>
                                        <td>867-410-3517</td>
                                    </tr>
                                    <tr>
                                        <td>Virginia</td>
                                        <td>Stracke</td>
                                        <td>Virginia_Stracke@hotmail.com</td>
                                        <td>744-583-2926</td>
                                    </tr>
                                    <tr>
                                        <td>Baron</td>
                                        <td>Nienow</td>
                                        <td>Baron_Nienow@gmail.com</td>
                                        <td>478-186-1653</td>
                                    </tr>
                                    <tr>
                                        <td>Adah</td>
                                        <td>Christiansen</td>
                                        <td>Adah.Christiansen90@hotmail.com</td>
                                        <td>499-777-7622</td>
                                    </tr>
                                    <tr>
                                        <td>Jude</td>
                                        <td>Dicki</td>
                                        <td>Jude_Dicki73@gmail.com</td>
                                        <td>444-599-0512</td>
                                    </tr>
                                    <tr>
                                        <td>Florence</td>
                                        <td>Lockman</td>
                                        <td>Florence.Lockman65@gmail.com</td>
                                        <td>204-209-4022</td>
                                    </tr>
                                    <tr>
                                        <td>Jacky</td>
                                        <td>Jaskolski</td>
                                        <td>Jacky45@hotmail.com</td>
                                        <td>664-895-9821</td>
                                    </tr>
                                    <tr>
                                        <td>Laurianne</td>
                                        <td>McKenzie</td>
                                        <td>Laurianne73@hotmail.com</td>
                                        <td>001-206-9807</td>
                                    </tr>
                                    <tr>
                                        <td>Marquis</td>
                                        <td>Fritsch</td>
                                        <td>Marquis91@hotmail.com</td>
                                        <td>812-917-9858</td>
                                    </tr>
                                    <tr>
                                        <td>Rudy</td>
                                        <td>Torp</td>
                                        <td>Rudy.Torp22@hotmail.com</td>
                                        <td>085-974-2957</td>
                                    </tr>
                                    <tr>
                                        <td>April</td>
                                        <td>Wilderman</td>
                                        <td>April.Wilderman66@yahoo.com</td>
                                        <td>975-175-8475</td>
                                    </tr>
                                    <tr>
                                        <td>Derrick</td>
                                        <td>Koch</td>
                                        <td>Derrick.Koch@gmail.com</td>
                                        <td>408-019-8169</td>
                                    </tr>
                                    <tr>
                                        <td>Lowell</td>
                                        <td>Schneider</td>
                                        <td>Lowell.Schneider62@gmail.com</td>
                                        <td>393-928-1186</td>
                                    </tr>
                                    <tr>
                                        <td>Gregoria</td>
                                        <td>Abbott</td>
                                        <td>Gregoria.Abbott@hotmail.com</td>
                                        <td>650-733-7543</td>
                                    </tr>
                                    <tr>
                                        <td>Mollie</td>
                                        <td>Olson</td>
                                        <td>Mollie_Olson58@yahoo.com</td>
                                        <td>735-328-1105</td>
                                    </tr>
                                    <tr>
                                        <td>Enoch</td>
                                        <td>Grant</td>
                                        <td>Enoch_Grant@gmail.com</td>
                                        <td>903-033-2171</td>
                                    </tr>
                                    <tr>
                                        <td>Lydia</td>
                                        <td>Streich</td>
                                        <td>Lydia34@hotmail.com</td>
                                        <td>706-958-9424</td>
                                    </tr>
                                    <tr>
                                        <td>Era</td>
                                        <td>Corwin</td>
                                        <td>Era.Corwin36@hotmail.com</td>
                                        <td>686-241-4048</td>
                                    </tr>
                                    <tr>
                                        <td>Philip</td>
                                        <td>Thiel</td>
                                        <td>Philip.Thiel42@hotmail.com</td>
                                        <td>175-018-4931</td>
                                    </tr>
                                    <tr>
                                        <td>Madison</td>
                                        <td>Flatley</td>
                                        <td>Madison_Flatley@hotmail.com</td>
                                        <td>570-360-3931</td>
                                    </tr>
                                    <tr>
                                        <td>Ed</td>
                                        <td>Stamm</td>
                                        <td>Ed10@yahoo.com</td>
                                        <td>102-537-0727</td>
                                    </tr>
                                    <tr>
                                        <td>Mireille</td>
                                        <td>Homenick</td>
                                        <td>Mireille_Homenick15@gmail.com</td>
                                        <td>124-314-7431</td>
                                    </tr>
                                    <tr>
                                        <td>Alysa</td>
                                        <td>Baumbach</td>
                                        <td>Alysa.Baumbach77@hotmail.com</td>
                                        <td>404-635-3955</td>
                                    </tr>
                                    <tr>
                                        <td>Chaim</td>
                                        <td>Hammes</td>
                                        <td>Chaim.Hammes@yahoo.com</td>
                                        <td>742-775-1256</td>
                                    </tr>
                                    <tr>
                                        <td>Delfina</td>
                                        <td>Orn</td>
                                        <td>Delfina41@hotmail.com</td>
                                        <td>788-254-9180</td>
                                    </tr>
                                    <tr>
                                        <td>Velma</td>
                                        <td>Gaylord</td>
                                        <td>Velma85@hotmail.com</td>
                                        <td>302-245-3334</td>
                                    </tr>
                                    <tr>
                                        <td>Roslyn</td>
                                        <td>Mitchell</td>
                                        <td>Roslyn70@gmail.com</td>
                                        <td>697-382-3225</td>
                                    </tr>
                                    <tr>
                                        <td>Lacy</td>
                                        <td>Funk</td>
                                        <td>Lacy.Funk@yahoo.com</td>
                                        <td>080-947-0243</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second Table End -->
            <!-- Third Table -->
            <div class="row mrgn_top mult_control">
                <div class="col-lg-12">
                    <div class="card filterable">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-layout-grid2"></i> Multiple Controls
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="table3">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User Name</th>
                                        <th>
                                            Department
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Walton</td>
                                        <td>Larkin</td>
                                        <td>Walton_Larkin</td>
                                        <td>Music</td>
                                    </tr>
                                    <tr>
                                        <td>Kristian</td>
                                        <td>Kshlerin</td>
                                        <td>Kristian4</td>
                                        <td>Toys</td>
                                    </tr>
                                    <tr>
                                        <td>Jolie</td>
                                        <td>Pollich</td>
                                        <td>Jolie23</td>
                                        <td>Garden</td>
                                    </tr>
                                    <tr>
                                        <td>Cory</td>
                                        <td>Collier</td>
                                        <td>Cory_Collier</td>
                                        <td>Jewelery</td>
                                    </tr>
                                    <tr>
                                        <td>Fidel</td>
                                        <td>Simonis</td>
                                        <td>Fidel20</td>
                                        <td>Music</td>
                                    </tr>
                                    <tr>
                                        <td>Hans</td>
                                        <td>Cremin</td>
                                        <td>Hans_Cremin66</td>
                                        <td>Shoes</td>
                                    </tr>
                                    <tr>
                                        <td>Addison</td>
                                        <td>Skiles</td>
                                        <td>Addison.Skiles92</td>
                                        <td>Electronics</td>
                                    </tr>
                                    <tr>
                                        <td>Braeden</td>
                                        <td>Kuvalis</td>
                                        <td>Braeden.Kuvalis9</td>
                                        <td>Clothing</td>
                                    </tr>
                                    <tr>
                                        <td>Shaylee</td>
                                        <td>Cole</td>
                                        <td>Shaylee88</td>
                                        <td>Kids</td>
                                    </tr>
                                    <tr>
                                        <td>Lawson</td>
                                        <td>Kozey</td>
                                        <td>Lawson_Kozey</td>
                                        <td>Music</td>
                                    </tr>
                                    <tr>
                                        <td>Cicero</td>
                                        <td>Kuphal</td>
                                        <td>Cicero78</td>
                                        <td>Tools</td>
                                    </tr>
                                    <tr>
                                        <td>Trudie</td>
                                        <td>Kemmer</td>
                                        <td>Trudie31</td>
                                        <td>Industrial</td>
                                    </tr>
                                    <tr>
                                        <td>Olga</td>
                                        <td>Terry</td>
                                        <td>Olga_Terry</td>
                                        <td>Grocery</td>
                                    </tr>
                                    <tr>
                                        <td>Kane</td>
                                        <td>Beer</td>
                                        <td>Kane2</td>
                                        <td>Movies</td>
                                    </tr>
                                    <tr>
                                        <td>Arely</td>
                                        <td>Kozey</td>
                                        <td>Arely.Kozey74</td>
                                        <td>Clothing</td>
                                    </tr>
                                    <tr>
                                        <td>Madonna</td>
                                        <td>Cummerata</td>
                                        <td>Madonna94</td>
                                        <td>Outdoors</td>
                                    </tr>
                                    <tr>
                                        <td>Alex</td>
                                        <td>Abernathy</td>
                                        <td>Alex30</td>
                                        <td>Home</td>
                                    </tr>
                                    <tr>
                                        <td>Liam</td>
                                        <td>Stanton</td>
                                        <td>Liam.Stanton41</td>
                                        <td>Sports</td>
                                    </tr>
                                    <tr>
                                        <td>Tanya</td>
                                        <td>Jaskolski</td>
                                        <td>Tanya_Jaskolski70</td>
                                        <td>Home</td>
                                    </tr>
                                    <tr>
                                        <td>Lizeth</td>
                                        <td>Kunde</td>
                                        <td>Lizeth.Kunde86</td>
                                        <td>Grocery</td>
                                    </tr>
                                    <tr>
                                        <td>Katharina</td>
                                        <td>Ernser</td>
                                        <td>Katharina87</td>
                                        <td>Baby</td>
                                    </tr>
                                    <tr>
                                        <td>Misty</td>
                                        <td>Stracke</td>
                                        <td>Misty.Stracke</td>
                                        <td>Jewelery</td>
                                    </tr>
                                    <tr>
                                        <td>Troy</td>
                                        <td>Ryan</td>
                                        <td>Troy_Ryan</td>
                                        <td>Home</td>
                                    </tr>
                                    <tr>
                                        <td>Norris</td>
                                        <td>Mann</td>
                                        <td>Norris_Mann</td>
                                        <td>Home</td>
                                    </tr>
                                    <tr>
                                        <td>Carmela</td>
                                        <td>Balistreri</td>
                                        <td>Carmela.Balistreri19</td>
                                        <td>Games</td>
                                    </tr>
                                    <tr>
                                        <td>Blaise</td>
                                        <td>Osinski</td>
                                        <td>Blaise.Osinski26</td>
                                        <td>Beauty</td>
                                    </tr>
                                    <tr>
                                        <td>Assunta</td>
                                        <td>Schaefer</td>
                                        <td>Assunta.Schaefer84</td>
                                        <td>Sports</td>
                                    </tr>
                                    <tr>
                                        <td>Maxie</td>
                                        <td>Christiansen</td>
                                        <td>Maxie81</td>
                                        <td>Kids</td>
                                    </tr>
                                    <tr>
                                        <td>Samara</td>
                                        <td>Kohler</td>
                                        <td>Samara_Kohler30</td>
                                        <td>Music</td>
                                    </tr>
                                    <tr>
                                        <td>Brycen</td>
                                        <td>Lynch</td>
                                        <td>Brycen.Lynch</td>
                                        <td>Garden</td>
                                    </tr>
                                    <tr>
                                        <td>Stewart</td>
                                        <td>Bayer</td>
                                        <td>Stewart.Bayer</td>
                                        <td>Games</td>
                                    </tr>
                                    <tr>
                                        <td>Mohammad</td>
                                        <td>Hammes</td>
                                        <td>Mohammad_Hammes</td>
                                        <td>Movies</td>
                                    </tr>
                                    <tr>
                                        <td>Aisha</td>
                                        <td>Hoppe</td>
                                        <td>Aisha48</td>
                                        <td>Games</td>
                                    </tr>
                                    <tr>
                                        <td>Laurie</td>
                                        <td>Nicolas</td>
                                        <td>Laurie_Nicolas34</td>
                                        <td>Beauty</td>
                                    </tr>
                                    <tr>
                                        <td>Mckayla</td>
                                        <td>Maggio</td>
                                        <td>Mckayla8</td>
                                        <td>Clothing</td>
                                    </tr>
                                    <tr>
                                        <td>Ceasar</td>
                                        <td>Monahan</td>
                                        <td>Ceasar_Monahan48</td>
                                        <td>Baby</td>
                                    </tr>
                                    <tr>
                                        <td>Finn</td>
                                        <td>Fadel</td>
                                        <td>Finn7</td>
                                        <td>Shoes</td>
                                    </tr>
                                    <tr>
                                        <td>Geovanni</td>
                                        <td>Ledner</td>
                                        <td>Geovanni.Ledner54</td>
                                        <td>Baby</td>
                                    </tr>
                                    <tr>
                                        <td>Andy</td>
                                        <td>Abbott</td>
                                        <td>Andy.Abbott28</td>
                                        <td>Health</td>
                                    </tr>
                                    <tr>
                                        <td>Alvis</td>
                                        <td>Barrows</td>
                                        <td>Alvis44</td>
                                        <td>Automotive</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Third Table End -->
            <!-- Fourth Table start -->
            <div class="row mrgn_top">
                <div class="col-lg-12">
                    <div class="card filterable">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-search"></i> With Mark.js Gobal Search
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="table4">
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
                                        <td>Lucy</td>
                                        <td>Maggio</td>
                                        <td>Lucy30</td>
                                        <td>Lucy_Maggio16@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Irma</td>
                                        <td>Stanton</td>
                                        <td>Irma.Stanton11</td>
                                        <td>Irma.Stanton@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Giles</td>
                                        <td>Wilkinson</td>
                                        <td>Giles55</td>
                                        <td>Giles_Wilkinson60@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Judson</td>
                                        <td>Wuckert</td>
                                        <td>Judson8</td>
                                        <td>Judson_Wuckert@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>June</td>
                                        <td>Gleichner</td>
                                        <td>June74</td>
                                        <td>June.Gleichner46@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Reuben</td>
                                        <td>Streich</td>
                                        <td>Reuben54</td>
                                        <td>Reuben.Streich43@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Rachael</td>
                                        <td>Sipes</td>
                                        <td>Rachael.Sipes18</td>
                                        <td>Rachael.Sipes50@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Orion</td>
                                        <td>Medhurst</td>
                                        <td>Orion26</td>
                                        <td>Orion_Medhurst@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Cara</td>
                                        <td>Baumbach</td>
                                        <td>Cara.Baumbach</td>
                                        <td>Cara91@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Selina</td>
                                        <td>Kunde</td>
                                        <td>Selina68</td>
                                        <td>Selina49@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Winnifred</td>
                                        <td>Harris</td>
                                        <td>Winnifred_Harris</td>
                                        <td>Winnifred.Harris15@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Eduardo</td>
                                        <td>Lind</td>
                                        <td>Eduardo50</td>
                                        <td>Eduardo.Lind@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Julius</td>
                                        <td>Cremin</td>
                                        <td>Julius_Cremin46</td>
                                        <td>Julius_Cremin@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Roman</td>
                                        <td>Wintheiser</td>
                                        <td>Roman_Wintheiser50</td>
                                        <td>Roman.Wintheiser26@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Branson</td>
                                        <td>Bins</td>
                                        <td>Branson_Bins46</td>
                                        <td>Branson.Bins@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Eloy</td>
                                        <td>Kovacek</td>
                                        <td>Eloy.Kovacek</td>
                                        <td>Eloy77@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Fannie</td>
                                        <td>Thompson</td>
                                        <td>Fannie_Thompson</td>
                                        <td>Fannie48@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Corbin</td>
                                        <td>Ernser</td>
                                        <td>Corbin76</td>
                                        <td>Corbin.Ernser36@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Nick</td>
                                        <td>Hettinger</td>
                                        <td>Nick12</td>
                                        <td>Nick_Hettinger80@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Dejon</td>
                                        <td>Connelly</td>
                                        <td>Dejon.Connelly</td>
                                        <td>Dejon2@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Robbie</td>
                                        <td>Russel</td>
                                        <td>Robbie.Russel65</td>
                                        <td>Robbie68@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Ena</td>
                                        <td>Donnelly</td>
                                        <td>Ena.Donnelly</td>
                                        <td>Ena.Donnelly@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>River</td>
                                        <td>Sauer</td>
                                        <td>River_Sauer41</td>
                                        <td>River78@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Paris</td>
                                        <td>Harvey</td>
                                        <td>Paris.Harvey</td>
                                        <td>Paris86@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Vivienne</td>
                                        <td>Haley</td>
                                        <td>Vivienne.Haley61</td>
                                        <td>Vivienne8@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Mireya</td>
                                        <td>Skiles</td>
                                        <td>Mireya.Skiles</td>
                                        <td>Mireya_Skiles@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Berneice</td>
                                        <td>Koelpin</td>
                                        <td>Berneice.Koelpin55</td>
                                        <td>Berneice21@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Rosario</td>
                                        <td>Mosciski</td>
                                        <td>Rosario.Mosciski</td>
                                        <td>Rosario_Mosciski23@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Miles</td>
                                        <td>Quigley</td>
                                        <td>Miles_Quigley</td>
                                        <td>Miles67@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Steve</td>
                                        <td>Crooks</td>
                                        <td>Steve20</td>
                                        <td>Steve_Crooks@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>Dora</td>
                                        <td>Torphy</td>
                                        <td>Dora.Torphy65</td>
                                        <td>Dora_Torphy@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>Muriel</td>
                                        <td>Haley</td>
                                        <td>Muriel.Haley71</td>
                                        <td>Muriel.Haley@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>Domenic</td>
                                        <td>Schmeler</td>
                                        <td>Domenic_Schmeler26</td>
                                        <td>Domenic.Schmeler@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>Florence</td>
                                        <td>Braun</td>
                                        <td>Florence_Braun90</td>
                                        <td>Florence.Braun@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>Wilber</td>
                                        <td>Hegmann</td>
                                        <td>Wilber78</td>
                                        <td>Wilber_Hegmann@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>36</td>
                                        <td>June</td>
                                        <td>Crona</td>
                                        <td>June35</td>
                                        <td>June81@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td>Jane</td>
                                        <td>Jacobson</td>
                                        <td>Jane.Jacobson63</td>
                                        <td>Jane.Jacobson@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>38</td>
                                        <td>Mabelle</td>
                                        <td>Kirlin</td>
                                        <td>Mabelle41</td>
                                        <td>Mabelle.Kirlin61@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td>Walton</td>
                                        <td>Smitham</td>
                                        <td>Walton.Smitham56</td>
                                        <td>Walton.Smitham@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>40</td>
                                        <td>Seamus</td>
                                        <td>Lesch</td>
                                        <td>Seamus.Lesch</td>
                                        <td>Seamus.Lesch72@yahoo.com</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fourth Table end -->
            <!-- Fifth Table Start -->
            <div class="row mrgn_top">
                <div class="col-lg-12">
                    <div class="card filterable">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-search"></i> With Mark.js column Search
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row mark_js">
                                <div class="col-6">
                                    <span>Name:</span>
                                    <input type="text" name="name" placeholder="Bradley..."
                                           class="form-control input-sm mrgn_btm">
                                    <span>Office:</span>
                                    <input type="text" name="office" placeholder="London..."
                                           class="form-control input-sm">
                                </div>
                                <div class="col-6">
                                    <span>Position:</span>
                                    <input type="text" name="position" placeholder="Software..."
                                           class="form-control input-sm mrgn_btm">
                                    <span>E-mail:</span>
                                    <input type="text" name="age" placeholder="abc@xyzmail.com"
                                           class="form-control input-sm">
                                </div>
                            </div>
                            <div class="table-responsive m-t-10">
                                <table class="table horizontal_table table-striped" id="table5">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>E-mail</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Clara</td>
                                        <td>Global Data Producer</td>
                                        <td>Clara_Cremin</td>
                                        <td>Clara65@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Flavio</td>
                                        <td>Senior Quality Consultant</td>
                                        <td>Flavio63</td>
                                        <td>Flavio31@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Carmela</td>
                                        <td>Direct Markets Architect</td>
                                        <td>Carmela_Grant69</td>
                                        <td>Carmela40@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Alexys</td>
                                        <td>Customer Usability Director</td>
                                        <td>Alexys7</td>
                                        <td>Alexys32@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Kamron</td>
                                        <td>National Assurance Associate</td>
                                        <td>Kamron.Grant33</td>
                                        <td>Kamron96@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Marilie</td>
                                        <td>Product Implementation Designer</td>
                                        <td>Marilie.Simonis60</td>
                                        <td>Marilie93@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Gardner</td>
                                        <td>Forward Tactics Associate</td>
                                        <td>Gardner.Larkin</td>
                                        <td>Gardner85@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Terrell</td>
                                        <td>Forward Mobility Executive</td>
                                        <td>Terrell.Hettinger</td>
                                        <td>Terrell_Hettinger@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Gino</td>
                                        <td>Dynamic Functionality Assistant</td>
                                        <td>Gino.Borer</td>
                                        <td>Gino21@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Deborah</td>
                                        <td>Product Marketing Developer</td>
                                        <td>Deborah82</td>
                                        <td>Deborah32@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Lucy</td>
                                        <td>District Research Orchestrator</td>
                                        <td>Lucy_Senger38</td>
                                        <td>Lucy_Senger@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Rex</td>
                                        <td>International Solutions Coordinator</td>
                                        <td>Rex32</td>
                                        <td>Rex.Schroeder1@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Amir</td>
                                        <td>Lead Brand Officer</td>
                                        <td>Amir50</td>
                                        <td>Amir_Reynolds19@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Floy</td>
                                        <td>District Brand Specialist</td>
                                        <td>Floy90</td>
                                        <td>Floy.Murazik91@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Michelle</td>
                                        <td>Future Quality Representative</td>
                                        <td>Michelle_Barton</td>
                                        <td>Michelle.Barton52@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Ally</td>
                                        <td>Investor Operations Administrator</td>
                                        <td>Ally_White</td>
                                        <td>Ally22@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Maximillian</td>
                                        <td>Direct Accounts Administrator</td>
                                        <td>Maximillian_Zboncak</td>
                                        <td>Maximillian_Zboncak@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Tara</td>
                                        <td>Investor Implementation Analyst</td>
                                        <td>Tara78</td>
                                        <td>Tara_Green@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Matt</td>
                                        <td>Human Functionality Representative</td>
                                        <td>Matt42</td>
                                        <td>Matt46@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Fernando</td>
                                        <td>Direct Group Administrator</td>
                                        <td>Fernando.Schiller</td>
                                        <td>Fernando21@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Novella</td>
                                        <td>Product Mobility Specialist</td>
                                        <td>Novella_Padberg64</td>
                                        <td>Novella.Padberg26@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Branson</td>
                                        <td>Lead Implementation Facilitator</td>
                                        <td>Branson_Cormier66</td>
                                        <td>Branson47@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Ramiro</td>
                                        <td>District Communications Analyst</td>
                                        <td>Ramiro56</td>
                                        <td>Ramiro89@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Bert</td>
                                        <td>Customer Paradigm Designer</td>
                                        <td>Bert10</td>
                                        <td>Bert_Schinner8@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Archibald</td>
                                        <td>District Usability Planner</td>
                                        <td>Archibald87</td>
                                        <td>Archibald.Koss83@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Marquise</td>
                                        <td>Chief Mobility Architect</td>
                                        <td>Marquise.Schmitt64</td>
                                        <td>Marquise_Schmitt@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Fabian</td>
                                        <td>Product Research Director</td>
                                        <td>Fabian75</td>
                                        <td>Fabian_Daniel@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Samir</td>
                                        <td>Product Applications Officer</td>
                                        <td>Samir_Ortiz</td>
                                        <td>Samir.Ortiz@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Effie</td>
                                        <td>Product Brand Developer</td>
                                        <td>Effie_Luettgen</td>
                                        <td>Effie19@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Carleton</td>
                                        <td>Senior Directives Orchestrator</td>
                                        <td>Carleton5</td>
                                        <td>Carleton80@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Elisa</td>
                                        <td>Senior Accountability Director</td>
                                        <td>Elisa.Feest89</td>
                                        <td>Elisa.Feest@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Keven</td>
                                        <td>Chief Infrastructure Engineer</td>
                                        <td>Keven77</td>
                                        <td>Keven_Hayes27@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Marcelino</td>
                                        <td>Dynamic Brand Architect</td>
                                        <td>Marcelino.Haag</td>
                                        <td>Marcelino_Haag45@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Lenore</td>
                                        <td>Future Mobility Orchestrator</td>
                                        <td>Lenore.Schroeder22</td>
                                        <td>Lenore.Schroeder@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Abbigail</td>
                                        <td>Future Identity Associate</td>
                                        <td>Abbigail_Fadel35</td>
                                        <td>Abbigail_Fadel30@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>Judah</td>
                                        <td>Senior Configuration Coordinator</td>
                                        <td>Judah3</td>
                                        <td>Judah_Schowalter99@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Jayce</td>
                                        <td>Chief Applications Supervisor</td>
                                        <td>Jayce_Rau</td>
                                        <td>Jayce.Rau@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Devin</td>
                                        <td>Future Web Director</td>
                                        <td>Devin7</td>
                                        <td>Devin76@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Grover</td>
                                        <td>Forward Infrastructure Specialist</td>
                                        <td>Grover88</td>
                                        <td>Grover_Barton35@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Zita</td>
                                        <td>International Optimization Analyst</td>
                                        <td>Zita.Lindgren</td>
                                        <td>Zita_Lindgren88@yahoo.com</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fifth Table Start -->
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
    <script type="text/javascript" src="vendors/bootstrap-table/js/bootstrap-table.min.js"></script>
    <script src="vendors/markjs/jquery.mark.js" charset="UTF-8"></script>
    <script src="vendors/datatablesmark.js/js/datatables.mark.min.js" charset="UTF-8"></script>
    <script src="js/custom_js/responsive_datatables.js" type="text/javascript"></script>
    <!-- end of page level js -->
@stop


