@extends('layouts.default')
@section('title')
    Complex Forms | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="vendors/iCheck/css/all.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="vendors/gridforms/css/gridforms.css">
    <link rel="stylesheet" type="text/css" href="vendors/datedropper/datedropper.css">
    <link href="vendors/airdatepicker/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="vendors/select2/css/select2.min.css">
    <link href="vendors/select2/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/complex_forms.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Complex Forms
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Forms</a>
                </li>
                <li class="active">
                    Complex Forms
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <div class="row" id="complex-form">
                <!--5th tab bank application starting-->
                <div class="col-lg-12">
                    <form class="grid-form">
                        <div class="text-center">
                            <img src="img/pages/complexform1.png" alt="bank name" width="200">
                            <h3 class="heading_act">ACCOUNT OPENING FORM</h3>
                        </div>
                        <fieldset>
                            <legend>Please open an account at</legend>
                            <div data-row-span="1">
                                <div data-field-span="1">
                                    <label>Branch Name</label>
                                    <input type="text" autofocus>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Personal Details (Sole/First Accountholder/Minor)</legend>
                            <div data-row-span="4">
                                <div data-field-span="1">
                                    <label>Title</label>
                                    <label>
                                        <input type="radio" name="customer-title[]"> Mr.</label> &nbsp;
                                    <label>
                                        <input type="radio" name="customer-title[]"> Mrs.</label> &nbsp;
                                    <label>
                                        <input type="radio" name="customer-title[]"> Ms.</label>
                                </div>
                                <div data-field-span="3">
                                    <label>Full Name</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div data-row-span="2">
                                <div data-field-span="1">
                                    <label>Date of birth</label>
                                    <input type="text" class="dob" placeholder="Select DOB">
                                </div>
                                <div data-field-span="1">
                                    <label for="country">Nationality</label>
                                    <select id="country">
                                        <option>Select Country</option>
                                        <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
                                        <option value="Ã…land Islands" title="Ã…land Islands">Aland Islands
                                        </option>
                                        <option value="Albania" title="Albania">Albania</option>
                                        <option value="Algeria" title="Algeria">Algeria</option>
                                        <option value="American Samoa" title="American Samoa">American Samoa
                                        </option>
                                        <option value="Andorra" title="Andorra">Andorra</option>
                                        <option value="Angola" title="Angola">Angola</option>
                                        <option value="Anguilla" title="Anguilla">Anguilla</option>
                                        <option value="Antarctica" title="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and
                                            Barbuda
                                        </option>
                                        <option value="Argentina" title="Argentina">Argentina</option>
                                        <option value="Armenia" title="Armenia">Armenia</option>
                                        <option value="Aruba" title="Aruba">Aruba</option>
                                        <option value="Australia" title="Australia">Australia</option>
                                        <option value="Austria" title="Austria">Austria</option>
                                        <option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas" title="Bahamas">Bahamas</option>
                                        <option value="Bahrain" title="Bahrain">Bahrain</option>
                                        <option value="Bangladesh" title="Bangladesh">Bangladesh</option>
                                        <option value="Barbados" title="Barbados">Barbados</option>
                                        <option value="Belarus" title="Belarus">Belarus</option>
                                        <option value="Belgium" title="Belgium">Belgium</option>
                                        <option value="Belize" title="Belize">Belize</option>
                                        <option value="Benin" title="Benin">Benin</option>
                                        <option value="Bermuda" title="Bermuda">Bermuda</option>
                                        <option value="Bhutan" title="Bhutan">Bhutan</option>
                                        <option value="Bolivia, Plurinational State of"
                                                title="Bolivia, Plurinational State of">Bolivia, Plurinational State of
                                        </option>
                                        <option value="Bonaire, Sint Eustatius and Saba"
                                                title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and
                                            Saba
                                        </option>
                                        <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">
                                            Bosnia and Herzegovina
                                        </option>
                                        <option value="Botswana" title="Botswana">Botswana</option>
                                        <option value="Bouvet Island" title="Bouvet Island">Bouvet Island
                                        </option>
                                        <option value="Brazil" title="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory"
                                                title="British Indian Ocean Territory">British Indian Ocean Territory
                                        </option>
                                        <option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam
                                        </option>
                                        <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi" title="Burundi">Burundi</option>
                                        <option value="Cambodia" title="Cambodia">Cambodia</option>
                                        <option value="Cameroon" title="Cameroon">Cameroon</option>
                                        <option value="Canada" title="Canada">Canada</option>
                                        <option value="Cape Verde" title="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands" title="Cayman Islands">Cayman Islands
                                        </option>
                                        <option value="Central African Republic" title="Central African Republic">
                                            Central African Republic
                                        </option>
                                        <option value="Chad" title="Chad">Chad</option>
                                        <option value="Chile" title="Chile">Chile</option>
                                        <option value="China" title="China">China</option>
                                        <option value="Christmas Island" title="Christmas Island">Christmas Island
                                        </option>
                                        <option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">
                                            Cocos (Keeling) Islands
                                        </option>
                                        <option value="Colombia" title="Colombia">Colombia</option>
                                        <option value="Comoros" title="Comoros">Comoros</option>
                                        <option value="Congo" title="Congo">Congo</option>
                                        <option value="Congo, the Democratic Republic of the"
                                                title="Congo, the Democratic Republic of the">Congo, the Democratic
                                            Republic of the
                                        </option>
                                        <option value="Cook Islands" title="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica" title="Costa Rica">Costa Rica</option>
                                        <option value="CÃ´te d'Ivoire" title="CÃ´te d'Ivoire">CÃ´te d'Ivoire
                                        </option>
                                        <option value="Croatia" title="Croatia">Croatia</option>
                                        <option value="Cuba" title="Cuba">Cuba</option>
                                        <option value="CuraÃ§ao" title="CuraÃ§ao">CuraÃ§ao</option>
                                        <option value="Cyprus" title="Cyprus">Cyprus</option>
                                        <option value="Czech Republic" title="Czech Republic">Czech Republic
                                        </option>
                                        <option value="Denmark" title="Denmark">Denmark</option>
                                        <option value="Djibouti" title="Djibouti">Djibouti</option>
                                        <option value="Dominica" title="Dominica">Dominica</option>
                                        <option value="Dominican Republic" title="Dominican Republic">Dominican Republic
                                        </option>
                                        <option value="Ecuador" title="Ecuador">Ecuador</option>
                                        <option value="Egypt" title="Egypt">Egypt</option>
                                        <option value="El Salvador" title="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea
                                        </option>
                                        <option value="Eritrea" title="Eritrea">Eritrea</option>
                                        <option value="Estonia" title="Estonia">Estonia</option>
                                        <option value="Ethiopia" title="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">
                                            Falkland Islands (Malvinas)
                                        </option>
                                        <option value="Faroe Islands" title="Faroe Islands">Faroe Islands
                                        </option>
                                        <option value="Fiji" title="Fiji">Fiji</option>
                                        <option value="Finland" title="Finland">Finland</option>
                                        <option value="France" title="France">France</option>
                                        <option value="French Guiana" title="French Guiana">French Guiana
                                        </option>
                                        <option value="French Polynesia" title="French Polynesia">French Polynesia
                                        </option>
                                        <option value="French Southern Territories" title="French Southern Territories">
                                            French Southern Territories
                                        </option>
                                        <option value="Gabon" title="Gabon">Gabon</option>
                                        <option value="Gambia" title="Gambia">Gambia</option>
                                        <option value="Georgia" title="Georgia">Georgia</option>
                                        <option value="Germany" title="Germany">Germany</option>
                                        <option value="Ghana" title="Ghana">Ghana</option>
                                        <option value="Gibraltar" title="Gibraltar">Gibraltar</option>
                                        <option value="Greece" title="Greece">Greece</option>
                                        <option value="Greenland" title="Greenland">Greenland</option>
                                        <option value="Grenada" title="Grenada">Grenada</option>
                                        <option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam" title="Guam">Guam</option>
                                        <option value="Guatemala" title="Guatemala">Guatemala</option>
                                        <option value="Guernsey" title="Guernsey">Guernsey</option>
                                        <option value="Guinea" title="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau
                                        </option>
                                        <option value="Guyana" title="Guyana">Guyana</option>
                                        <option value="Haiti" title="Haiti">Haiti</option>
                                        <option value="Heard Island and McDonald Islands"
                                                title="Heard Island and McDonald Islands">Heard Island and McDonald
                                            Islands
                                        </option>
                                        <option value="Holy See (Vatican City State)"
                                                title="Holy See (Vatican City State)">Holy See (Vatican City State)
                                        </option>
                                        <option value="Honduras" title="Honduras">Honduras</option>
                                        <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
                                        <option value="Hungary" title="Hungary">Hungary</option>
                                        <option value="Iceland" title="Iceland">Iceland</option>
                                        <option value="India" title="India">India</option>
                                        <option value="Indonesia" title="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">
                                            Iran, Islamic Republic of
                                        </option>
                                        <option value="Iraq" title="Iraq">Iraq</option>
                                        <option value="Ireland" title="Ireland">Ireland</option>
                                        <option value="Isle of Man" title="Isle of Man">Isle of Man</option>
                                        <option value="Israel" title="Israel">Israel</option>
                                        <option value="Italy" title="Italy">Italy</option>
                                        <option value="Jamaica" title="Jamaica">Jamaica</option>
                                        <option value="Japan" title="Japan">Japan</option>
                                        <option value="Jersey" title="Jersey">Jersey</option>
                                        <option value="Jordan" title="Jordan">Jordan</option>
                                        <option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya" title="Kenya">Kenya</option>
                                        <option value="Kiribati" title="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of"
                                                title="Korea, Democratic People's Republic of">Korea, Democratic
                                            People's Republic of
                                        </option>
                                        <option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of
                                        </option>
                                        <option value="Kuwait" title="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic"
                                                title="Lao People's Democratic Republic">Lao People's Democratic
                                            Republic
                                        </option>
                                        <option value="Latvia" title="Latvia">Latvia</option>
                                        <option value="Lebanon" title="Lebanon">Lebanon</option>
                                        <option value="Lesotho" title="Lesotho">Lesotho</option>
                                        <option value="Liberia" title="Liberia">Liberia</option>
                                        <option value="Libya" title="Libya">Libya</option>
                                        <option value="Liechtenstein" title="Liechtenstein">Liechtenstein
                                        </option>
                                        <option value="Lithuania" title="Lithuania">Lithuania</option>
                                        <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
                                        <option value="Macao" title="Macao">Macao</option>
                                        <option value="Macedonia, the former Yugoslav Republic of"
                                                title="Macedonia, the former Yugoslav Republic of">Macedonia, the former
                                            Yugoslav Republic of
                                        </option>
                                        <option value="Madagascar" title="Madagascar">Madagascar</option>
                                        <option value="Malawi" title="Malawi">Malawi</option>
                                        <option value="Malaysia" title="Malaysia">Malaysia</option>
                                        <option value="Maldives" title="Maldives">Maldives</option>
                                        <option value="Mali" title="Mali">Mali</option>
                                        <option value="Malta" title="Malta">Malta</option>
                                        <option value="Marshall Islands" title="Marshall Islands">Marshall Islands
                                        </option>
                                        <option value="Martinique" title="Martinique">Martinique</option>
                                        <option value="Mauritania" title="Mauritania">Mauritania</option>
                                        <option value="Mauritius" title="Mauritius">Mauritius</option>
                                        <option value="Mayotte" title="Mayotte">Mayotte</option>
                                        <option value="Mexico" title="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of"
                                                title="Micronesia, Federated States of">Micronesia, Federated States of
                                        </option>
                                        <option value="Moldova, Republic of" title="Moldova, Republic of">
                                            Moldova, Republic of
                                        </option>
                                        <option value="Monaco" title="Monaco">Monaco</option>
                                        <option value="Mongolia" title="Mongolia">Mongolia</option>
                                        <option value="Montenegro" title="Montenegro">Montenegro</option>
                                        <option value="Montserrat" title="Montserrat">Montserrat</option>
                                        <option value="Morocco" title="Morocco">Morocco</option>
                                        <option value="Mozambique" title="Mozambique">Mozambique</option>
                                        <option value="Myanmar" title="Myanmar">Myanmar</option>
                                        <option value="Namibia" title="Namibia">Namibia</option>
                                        <option value="Nauru" title="Nauru">Nauru</option>
                                        <option value="Nepal" title="Nepal">Nepal</option>
                                        <option value="Netherlands" title="Netherlands">Netherlands</option>
                                        <option value="New Caledonia" title="New Caledonia">New Caledonia
                                        </option>
                                        <option value="New Zealand" title="New Zealand">New Zealand</option>
                                        <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
                                        <option value="Niger" title="Niger">Niger</option>
                                        <option value="Nigeria" title="Nigeria">Nigeria</option>
                                        <option value="Niue" title="Niue">Niue</option>
                                        <option value="Norfolk Island" title="Norfolk Island">Norfolk Island
                                        </option>
                                        <option value="Northern Mariana Islands" title="Northern Mariana Islands">
                                            Northern Mariana Islands
                                        </option>
                                        <option value="Norway" title="Norway">Norway</option>
                                        <option value="Oman" title="Oman">Oman</option>
                                        <option value="Pakistan" title="Pakistan">Pakistan</option>
                                        <option value="Palau" title="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied"
                                                title="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                        </option>
                                        <option value="Panama" title="Panama">Panama</option>
                                        <option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea
                                        </option>
                                        <option value="Paraguay" title="Paraguay">Paraguay</option>
                                        <option value="Peru" title="Peru">Peru</option>
                                        <option value="Philippines" title="Philippines">Philippines</option>
                                        <option value="Pitcairn" title="Pitcairn">Pitcairn</option>
                                        <option value="Poland" title="Poland">Poland</option>
                                        <option value="Portugal" title="Portugal">Portugal</option>
                                        <option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar" title="Qatar">Qatar</option>
                                        <option value="RÃ©union" title="RÃ©union">RÃ©union</option>
                                        <option value="Romania" title="Romania">Romania</option>
                                        <option value="Russian Federation" title="Russian Federation">Russian Federation
                                        </option>
                                        <option value="Rwanda" title="Rwanda">Rwanda</option>
                                        <option value="Saint BarthÃ©lemy" title="Saint BarthÃ©lemy">Saint BarthÃ©lemy
                                        </option>
                                        <option value="Saint Helena, Ascension and Tristan da Cunha"
                                                title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena,
                                            Ascension and Tristan da Cunha
                                        </option>
                                        <option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">
                                            Saint Kitts and Nevis
                                        </option>
                                        <option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Martin (French part)" title="Saint Martin (French part)">
                                            Saint Martin (French part)
                                        </option>
                                        <option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">
                                            Saint Pierre and Miquelon
                                        </option>
                                        <option value="Saint Vincent and the Grenadines"
                                                title="Saint Vincent and the Grenadines">Saint Vincent and the
                                            Grenadines
                                        </option>
                                        <option value="Samoa" title="Samoa">Samoa</option>
                                        <option value="San Marino" title="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and
                                            Principe
                                        </option>
                                        <option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal" title="Senegal">Senegal</option>
                                        <option value="Serbia" title="Serbia">Serbia</option>
                                        <option value="Seychelles" title="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore" title="Singapore">Singapore</option>
                                        <option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint
                                            Maarten (Dutch part)
                                        </option>
                                        <option value="Slovakia" title="Slovakia">Slovakia</option>
                                        <option value="Slovenia" title="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands" title="Solomon Islands">Solomon Islands
                                        </option>
                                        <option value="Somalia" title="Somalia">Somalia</option>
                                        <option value="South Africa" title="South Africa">South Africa</option>
                                        <option value="South Georgia and the South Sandwich Islands"
                                                title="South Georgia and the South Sandwich Islands">South Georgia and
                                            the South Sandwich Islands
                                        </option>
                                        <option value="South Sudan" title="South Sudan">South Sudan</option>
                                        <option value="Spain" title="Spain">Spain</option>
                                        <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan" title="Sudan">Sudan</option>
                                        <option value="Suriname" title="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">
                                            Svalbard and Jan Mayen
                                        </option>
                                        <option value="Swaziland" title="Swaziland">Swaziland</option>
                                        <option value="Sweden" title="Sweden">Sweden</option>
                                        <option value="Switzerland" title="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab
                                            Republic
                                        </option>
                                        <option value="Taiwan, Province of China" title="Taiwan, Province of China">
                                            Taiwan, Province of China
                                        </option>
                                        <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of"
                                                title="Tanzania, United Republic of">Tanzania, United Republic of
                                        </option>
                                        <option value="Thailand" title="Thailand">Thailand</option>
                                        <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo" title="Togo">Togo</option>
                                        <option value="Tokelau" title="Tokelau">Tokelau</option>
                                        <option value="Tonga" title="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and
                                            Tobago
                                        </option>
                                        <option value="Tunisia" title="Tunisia">Tunisia</option>
                                        <option value="Turkey" title="Turkey">Turkey</option>
                                        <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks
                                            and Caicos Islands
                                        </option>
                                        <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
                                        <option value="Uganda" title="Uganda">Uganda</option>
                                        <option value="Ukraine" title="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates" title="United Arab Emirates">United Arab
                                            Emirates
                                        </option>
                                        <option value="United Kingdom" title="United Kingdom">United Kingdom
                                        </option>
                                        <option value="United States" title="United States">United States
                                        </option>
                                        <option value="United States Minor Outlying Islands"
                                                title="United States Minor Outlying Islands">United States Minor
                                            Outlying Islands
                                        </option>
                                        <option value="Uruguay" title="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela, Bolivarian Republic of"
                                                title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic
                                            of
                                        </option>
                                        <option value="Viet Nam" title="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British" title="Virgin Islands, British">
                                            Virgin Islands, British
                                        </option>
                                        <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin
                                            Islands, U.S.
                                        </option>
                                        <option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna
                                        </option>
                                        <option value="Western Sahara" title="Western Sahara">Western Sahara
                                        </option>
                                        <option value="Yemen" title="Yemen">Yemen</option>
                                        <option value="Zambia" title="Zambia">Zambia</option>
                                        <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div data-row-span="4">
                                <div data-field-span="2" data-field-error="Please enter a valid email address">
                                    <label>E-mail</label>
                                    <input type="text">
                                </div>
                                <div data-field-span="1">
                                    <label>Mobile No.</label>
                                    <input type="text">
                                </div>
                                <div data-field-span="1">
                                    <label>Existing Bank Account No. (if any)</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div data-row-span="2">
                                <div data-field-span="1">
                                    <label>In case of a minor please provide details (Name of parent and natural
                                        guardian)
                                    </label>
                                    <input type="text">
                                </div>
                                <div data-field-span="1">
                                    <label>Name of father/spouse</label>
                                    <input type="text">
                                </div>
                            </div>
                            <br>
                            <fieldset>
                                <legend>Residential address</legend>
                                <div data-row-span="2">
                                    <div data-field-span="1">
                                        <label>Flat no. and bldg. name</label>
                                        <input type="text">
                                    </div>
                                    <div data-field-span="1">
                                        <label>Road no./name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div data-row-span="4">
                                    <div data-field-span="3">
                                        <label>Area and landmark</label>
                                        <input type="text">
                                    </div>
                                    <div data-field-span="1">
                                        <label>City</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div data-row-span="4">
                                    <div data-field-span="1">
                                        <label>Telephone Residence</label>
                                        <input type="text">
                                    </div>
                                    <div data-field-span="1">
                                        <label>Office</label>
                                        <input type="text">
                                    </div>
                                    <div data-field-span="1">
                                        <label>Fax</label>
                                        <input type="text">
                                    </div>
                                    <div data-field-span="1">
                                        <label>Pin code</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </fieldset>
                        </fieldset>
                        <br>
                        <fieldset>
                            <legend>Mailing Address (If different from the First Accountholder's address)
                            </legend>
                            <div data-row-span="1">
                                <div data-field-span="1">
                                    <label>Company name and department/ Flat no. and bldg. name</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div data-row-span="4">
                                <div data-field-span="1">
                                    <label>Road no./name</label>
                                    <input type="text">
                                </div>
                                <div data-field-span="1">
                                    <label>Area and landmark</label>
                                    <input type="text">
                                </div>
                                <div data-field-span="1">
                                    <label>City</label>
                                    <input type="text">
                                </div>
                                <div data-field-span="1">
                                    <label>Pin Code</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div data-row-span="4">
                                <div data-field-span="1">
                                    <label>Telephone Residence</label>
                                    <input type="text">
                                </div>
                                <div data-field-span="1">
                                    <label>Office</label>
                                    <input type="text">
                                </div>
                                <div data-field-span="1">
                                    <label>Fax</label>
                                    <input type="text">
                                </div>
                                <div data-field-span="1">
                                    <label>Mobile No.</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div data-row-span="1">
                                <div data-field-span="1">
                                    <label>E-mail</label>
                                    <input type="text">
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <br>
                        <fieldset>
                            <legend>Details of Introduction by Existing Customer (If applicable)</legend>
                            <div data-row-span="2">
                                <div data-field-span="1">
                                    <label>Customer Name</label>
                                    <input type="text">
                                </div>
                                <div data-field-span="1">
                                    <label>Account No.</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div data-row-span="1">
                                <div data-field-span="1">
                                    <label>Introducer's signature</label>
                                    <textarea class="resize_vertical"></textarea>
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <br>
                        <fieldset>
                            <legend>Account Details</legend>
                            <div data-row-span="2">
                                <div data-field-span="1">
                                    <label>Choice of account</label>
                                    <label>
                                        <input type="radio" name="choiceofacc"> Savings</label> &nbsp;
                                    <label>
                                        <input type="radio" name="choiceofacc"> Current</label> &nbsp;
                                    <label>
                                        <input type="radio" name="choiceofacc"> Fixed deposits</label>
                                </div>
                                <div data-field-span="1">
                                    <label>Mode of funding</label>
                                    <label>
                                        <input type="radio" name="fundmode"> Cash</label> &nbsp;
                                    <label>
                                        <input type="radio" name="fundmode"> Cheque</label> &nbsp;
                                    <label>
                                        <input type="radio" name="fundmode"> NEFT</label>
                                </div>
                            </div>
                            <div data-row-span="1">
                                <div data-field-span="1">
                                    <label>Amount</label>
                                    <input type="text">
                                </div>
                            </div>
                            <br>
                            <fieldset>
                                <legend>Details of Fixed Deposit</legend>
                                <div data-row-span="2">
                                    <div data-field-span="1">
                                        <label>Types of deposit</label>
                                        <label>
                                            <input type="radio" name="typeofdeposit"> Ordinary</label> &nbsp;
                                        <label>
                                            <input type="radio" name="typeofdeposit"> Cumulative</label>
                                    </div>
                                    <div data-field-span="1">
                                        <label>Mode of funding</label>
                                        <label>
                                            <input type="radio" name="modefund"> Cash</label> &nbsp;
                                        <label>
                                            <input type="radio" name="modefund"> Cheque</label> &nbsp;
                                        <label>
                                            <input type="radio" name="modefund"> NEFT</label>
                                    </div>
                                </div>
                                <div data-row-span="4">
                                    <div data-field-span="2">
                                        <label>Amount</label>
                                        <input type="text">
                                    </div>
                                    <div data-field-span="1">
                                        <label>No. of deposits</label>
                                        <input type="text">
                                    </div>
                                    <div data-field-span="1">
                                        <label>Individual Deposit Amount</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </fieldset>
                        </fieldset>
                        <br>
                        <br>
                        <fieldset>
                            <legend>Personal Details
                                <small>(Occupation)</small>
                            </legend>
                            <div data-row-span="12">
                                <div data-field-span="2">
                                    <input id="non-executive" type="checkbox">&nbsp;<label for="non-executive">
                                        Non-executive</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="hwife" type="checkbox">&nbsp;<label for="hwife"> Housewife</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="retired1" type="checkbox">&nbsp;<label for="retired1"> Retired</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="studnt" type="checkbox">&nbsp;<label for="studnt"> Student</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="other" type="checkbox">&nbsp;<label for="other"> Other</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="unemployed" type="checkbox">&nbsp;<label for="unemployed">
                                        Unemployed</label>
                                </div>
                            </div>
                            <div data-row-span="1">
                                <div data-field-span="1">
                                    <label>Job Title</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div data-row-span="2">
                                <div data-field-span="1">
                                    <label>Department</label>
                                    <input type="text">
                                </div>
                                <div data-field-span="1">
                                    <label>Nature of business</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div data-row-span="2">
                                <div data-field-span="1">
                                    <label>Education</label>
                                    <label>
                                        <input type="radio" name="educaton"> Under graduate</label>
                                    <label>
                                        <input type="radio" name="educaton"> Graduate</label> &nbsp;
                                    <label>
                                        <input type="radio" name="educaton"> Others</label>
                                </div>
                                <div data-field-span="1">
                                    <label>Monthly Income</label>
                                    <label>
                                        <input type="radio" name="income"> Zero Income</label> &nbsp;
                                    <label>
                                        <input type="radio" name="income"> Less than $10,000</label> &nbsp;
                                    <label>
                                        <input type="radio" name="income"> $10,000+</label>
                                </div>
                            </div>
                            <div data-row-span="2">
                                <div data-field-span="1">
                                    <label>Maritial Status</label>
                                    <label>
                                        <input type="radio" name="maritial"> Married</label> &nbsp;
                                    <label>
                                        <input type="radio" name="maritial"> Single</label>
                                </div>
                                <div data-field-span="1">
                                    <label>Spouse name</label>
                                    <input type="text">
                                </div>
                            </div>
                            <br>
                            <fieldset>
                                <legend>Other existing bank accounts, if any</legend>
                                <div data-row-span="2">
                                    <div data-field-span="1">
                                        <label>Name of the Bank / branch</label>
                                        <input type="text">
                                    </div>
                                    <div data-field-span="1">
                                        <label>Name of the Bank / branch</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </fieldset>
                        </fieldset>
                        <br>
                        <br>
                        <fieldset>
                            <legend>Reason for Account opening</legend>
                            <div data-row-span="1">
                                <div data-field-span="1">
                                    <label>Please specify</label>
                                    <input type="text">
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <br>
                        <fieldset>
                            <legend>Terms And Conditions</legend>
                            <div data-row-span="1">
                                <div data-field-span="1">
                                    <label></label>
                                    <label>
                                        <input type="checkbox"> I/We confirm having read and understood the account
                                        rules of The Banking Corporation Limited ('the Bank'), and hereby agree to be
                                        bound by the terms and conditions and amendments governing the account(s) issued
                                        by the Bank from time-to-time.</label>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!--5 th tab bank application ending  -->
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
    <script src="vendors/iCheck/js/icheck.js" type="text/javascript"></script>
    <script src="vendors/datedropper/datedropper.js" type="text/javascript"></script>
    <script src="vendors/airdatepicker/js/datepicker.min.js" type="text/javascript"></script>
    <script src="vendors/airdatepicker/js/datepicker.en.js" type="text/javascript"></script>
    <script type="text/javascript" src="vendors/gridforms/js/gridforms.js"></script>
    <script type="text/javascript" src="vendors/select2/js/select2.js"></script>
    <script src="js/custom_js/complex_forms.js" type="text/javascript"></script>
    <!-- end of page level js -->
@stop
