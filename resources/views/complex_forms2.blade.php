@extends('layouts.default')
@section('title')
    Complex Forms 2 | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link href="vendors/iCheck/css/all.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="vendors/gridforms/css/gridforms.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/select2/css/select2.min.css">
    <link href="vendors/select2/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
    <link href="vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom_css/complex_forms2.css"/>
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->

    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Complex Forms 2
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
                    Complex Forms 2
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <div class="row" id="complex-form2">
                <!--5th tab bank application starting-->
                <div class="col-lg-12">
                    <form class="grid-form form-horizontal">
                        <div class="text-center">
                            <img src="img/pages/complexform1.png" alt="bank name" width="200">
                            <h3 class="heading_act">ACCOUNT OPENING FORM</h3>
                        </div>
                        <fieldset>
                            <legend>Please open an account at</legend>
                            <div data-row-span="4">
                                <div data-field-span="3">
                                    <label>Type of Account</label>
                                    <label>
                                        <input type="checkbox" name="customer-title[]"> Savings Account</label> &nbsp;
                                    <label>
                                        <input type="checkbox" name="customer-title[]"> Savings Salary Account
                                    </label>
                                </div>
                                <div data-field-span="1">
                                    <label for="current_branch">Current Branch Name</label>
                                    <input class="form-control" id="current_branch" type="text"/>
                                </div>
                            </div>
                        </fieldset>
                        <br/>
                        <br/>
                        <fieldset>
                            <legend>(A) Personal Details</legend>
                            <div data-row-span="4">
                                <div data-field-span="4">
                                    <label>Applicant Name</label>
                                    <div class="form-group row">
                                        <label for="first_appl" class="col-md-2">1<sup>st</sup> Applicant:</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="first_appl" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="second_appl" class="col-md-2">2<sup>nd</sup> Applicant:</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="second_appl" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="third_appl" class="col-md-2">3<sup>rd</sup> Applicant:</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="third_appl" type="text">
                                        </div>
                                    </div>
                                </div>
                                <p class="text-danger">If you are an existing customer please move directly to section
                                    "c"
                                </p>
                            </div>
                            <div data-row-span="4">
                                <div data-field-span="2">
                                    <label>Name to be dispalyed on atm/debit card</label>
                                    <label for="atm_1">1<sup>st</sup>Applicant:</label>
                                    <input class="form-control" id="atm_1" type="text">
                                    <label for="atm_2">2<sup>nd</sup>Applicant:</label>
                                    <input class="form-control" id="atm_2" type="text">
                                    <label for="atm_3">3<sup>rd</sup>Applicant:</label>
                                    <input class="form-control" id="atm_3" type="text">
                                </div>
                                <div data-field-span="1">
                                    <label>Date of birth</label>
                                    <label for="dob_appl1">1<sup>st</sup> Applicant:</label>
                                    <div class='input-group date'>
                                        <input type='text' id="dob_appl1" class="form-control"/>
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                            </span>
                                    </div>
                                    <label for="dob_appl2">2<sup>nd</sup> Applicant:</label>
                                    <div class='input-group date'>
                                        <input type='text' id="dob_appl2" class="form-control"/>
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                            </span>
                                    </div>
                                    <label for="dob_appl3">3<sup>rd</sup> Applicant:</label>
                                    <div class='input-group date'>
                                        <input type='text' id="dob_appl3" class="form-control"/>
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                            </span>
                                    </div>
                                </div>
                                <div data-field-span="1">
                                    <label>Gender</label>
                                    <div data-col-span="1">
                                        <label>1<sup>st</sup> Applicant:</label>
                                        <label>
                                            <input type="radio" name="optionsRadios" value="Male" class="square-blue">&nbsp;Male
                                        </label>
                                        <label>
                                            <input type="radio" name="optionsRadios" value="Female" class="square-blue">&nbsp;Female
                                        </label>
                                        <label>
                                            <input type="radio" name="optionsRadios" value="Other" class="square-blue">&nbsp;Other
                                        </label>
                                    </div>
                                    <div data-col-span="1">
                                        <label>2<sup>nd</sup> Applicant:</label>
                                        <label>
                                            <input type="radio" name="optionsRadios1" value="Male" class="square-blue1">&nbsp;Male
                                        </label>
                                        <label>
                                            <input type="radio" name="optionsRadios1" value="Female"
                                                   class="square-blue1">&nbsp;Female
                                        </label>
                                        <label>
                                            <input type="radio" name="optionsRadios1" value="Other"
                                                   class="square-blue1">&nbsp;Other
                                        </label>
                                    </div>
                                    <div data-col-span="1">
                                        <label>3<sup>rd</sup> Applicant:</label>
                                        <label>
                                            <input type="radio" name="optionsRadios2" value="Male" class="square-blue2">&nbsp;Male
                                        </label>
                                        <label>
                                            <input type="radio" name="optionsRadios2" value="Female"
                                                   class="square-blue2">&nbsp;Female
                                        </label>
                                        <label>
                                            <input type="radio" name="optionsRadios2" value="Other"
                                                   class="square-blue2">&nbsp;Other
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <br>
                        <fieldset>
                            <legend>(B) PAN No: (if not available please attach Form 60/61)</legend>
                            <div data-row-span="4">
                                <div data-field-span="2">
                                    <label>Applicant No</label>
                                    <label for="pan_appl1">1<sup>st</sup> Applicant:</label>
                                    <input class="form-control" id="pan_appl1" type="text">
                                    <label for="pan_appl2">2<sup>nd</sup> Applicant:</label>
                                    <input class="form-control" id="pan_appl2" type="text">
                                    <label for="pan_appl3">3<sup>rd</sup> Applicant:</label>
                                    <input class="form-control" id="pan_appl3" type="text">
                                </div>
                                <div data-field-span="2">
                                    <label>Mother's maiden name</label>
                                    <label for="maiden_name1">1<sup>st</sup> Applicant:</label>
                                    <input class="form-control" id="maiden_name1" type="text">
                                    <label for="maiden_name2">2<sup>nd</sup> Applicant:</label>
                                    <input class="form-control" id="maiden_name2" type="text">
                                    <label for="maiden_name3">3<sup>rd</sup> Applicant:</label>
                                    <input class="form-control" id="maiden_name3" type="text">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div data-row-span="4">
                                <p>Incase applicant is a minor,please write parent/guardian's name(as applicant)</p>
                                <div data-field-span="4">
                                    <label>Mailing Address:</label>
                                    <label for="company_name" class="control-label">Company Name/Flat No. &
                                        Bldg.Name </label>
                                    <input class="form-control" id="company_name" type="text">
                                    <label for="road_num">Road No/Name</label>
                                    <input class="form-control" id="road_num" type="text">
                                    <label for="landmark">Landmark</label>
                                    <input class="form-control" id="landmark" type="text">
                                    <label for="city">City</label>
                                    <input class="form-control" id="city" type="text">
                                    <label for="email_id">Email ID</label>
                                    <input class="form-control" id="email_id" type="text"
                                           data-field-error="Please enter a valid email address">
                                </div>
                            </div>
                            <div data-row-span="4">
                                <div data-field-span="2">
                                    <label for="tele_phone">Telephone</label>
                                    <input class="form-control" id="tele_phone" type="text">
                                    <label for="mobile">Mobile</label>
                                    <input class="form-control" id="mobile" type="text">
                                </div>
                                <div data-field-span="2">
                                    <label for="pincode">Pin Code</label>
                                    <input class="form-control" type="text" id="pincode">
                                    <label for="select_country" class="control-label">Country</label>
                                    <select id="select_country">
                                        <option>Select Country</option>
                                        <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
                                        <option value="Ã…land Islands" title="Ã…land Islands">Aland Islands</option>
                                        <option value="Albania" title="Albania">Albania</option>
                                        <option value="Algeria" title="Algeria">Algeria</option>
                                        <option value="American Samoa" title="American Samoa">American Samoa</option>
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
                                        <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and
                                            Herzegovina
                                        </option>
                                        <option value="Botswana" title="Botswana">Botswana</option>
                                        <option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
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
                                        <option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic" title="Central African Republic">
                                            Central African Republic
                                        </option>
                                        <option value="Chad" title="Chad">Chad</option>
                                        <option value="Chile" title="Chile">Chile</option>
                                        <option value="China" title="China">China</option>
                                        <option value="Christmas Island" title="Christmas Island">Christmas Island
                                        </option>
                                        <option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos
                                            (Keeling) Islands
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
                                        <option value="CÃ´te d'Ivoire" title="CÃ´te d'Ivoire">CÃ´te d'Ivoire</option>
                                        <option value="Croatia" title="Croatia">Croatia</option>
                                        <option value="Cuba" title="Cuba">Cuba</option>
                                        <option value="CuraÃ§ao" title="CuraÃ§ao">CuraÃ§ao</option>
                                        <option value="Cyprus" title="Cyprus">Cyprus</option>
                                        <option value="Czech Republic" title="Czech Republic">Czech Republic</option>
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
                                        <option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji" title="Fiji">Fiji</option>
                                        <option value="Finland" title="Finland">Finland</option>
                                        <option value="France" title="France">France</option>
                                        <option value="French Guiana" title="French Guiana">French Guiana</option>
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
                                        <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
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
                                        <option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
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
                                        <option value="Moldova, Republic of" title="Moldova, Republic of">Moldova,
                                            Republic of
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
                                        <option value="New Caledonia" title="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand" title="New Zealand">New Zealand</option>
                                        <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
                                        <option value="Niger" title="Niger">Niger</option>
                                        <option value="Nigeria" title="Nigeria">Nigeria</option>
                                        <option value="Niue" title="Niue">Niue</option>
                                        <option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
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
                                        <option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts
                                            and Nevis
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
                                        <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
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
                                        <option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard
                                            and Jan Mayen
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
                                        <option value="United Kingdom" title="United Kingdom">United Kingdom</option>
                                        <option value="United States" title="United States">United States</option>
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
                                        <option value="Virgin Islands, British" title="Virgin Islands, British">Virgin
                                            Islands, British
                                        </option>
                                        <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin
                                            Islands, U.S.
                                        </option>
                                        <option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna
                                        </option>
                                        <option value="Western Sahara" title="Western Sahara">Western Sahara</option>
                                        <option value="Yemen" title="Yemen">Yemen</option>
                                        <option value="Zambia" title="Zambia">Zambia</option>
                                        <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <div data-row-span="2">
                            <div data-field-span="1">
                                <label for="guardian">In case of a minor please provide details (Name of parent and
                                    natural guardian)
                                </label>
                                <input class="form-control" id="guardian" type="text">
                            </div>
                            <div data-field-span="1">
                                <label for="spouse">Name of father/spouse</label>
                                <input class="form-control" id="spouse" type="text">
                            </div>
                        </div>
                        <div data-row-span="3">
                            <div data-col-span="3">
                                <label>If any of the applicants are EXISTING ACCOUNT HOLDERS,please mention the customer
                                    Identification No:</label>
                            </div>
                        </div>
                        <div data-row-span="3">
                            <div data-field-span="1">
                                <label for="cust_id1">1<sup>st</sup> Applicant. Cust Id</label>
                                <input class="form-control" id="cust_id1" type="text">
                            </div>
                            <div data-field-span="1">
                                <label for="cust_id2">2<sup>nd</sup> Applicant. Cust Id</label>
                                <input class="form-control" id="cust_id2" type="text">
                            </div>
                            <div data-field-span="1">
                                <label for="cust_id3">3<sup>rd</sup> Applicant. Cust Id</label>
                                <input class="form-control" id="cust_id3" type="text">
                            </div>
                        </div>
                        <br>
                        <fieldset>
                            <legend>(c) INTRODUCTION DETAILS BANK Customer(Introducer's) Name:</legend>
                            <div data-row-span="4">
                                <div data-field-span="4">
                                    <label for="introducer">Introducer Name</label>
                                    <input class="form-control" id="introducer" type="text">
                                </div>
                            </div>
                            <div data-row-span="4">
                                <div data-field-span="2">
                                    <label for="account_num">ACCOUNT NO:</label>
                                    <input class="form-control" id="account_num" type="text">
                                </div>
                                <div data-field-span="2">
                                    <label for="customer_id">CUSTOMER ID:</label>
                                    <input class="form-control" id="customer_id" type="text">
                                </div>
                            </div>
                            <div data-row-span="2">
                                <div data-field-span="1">
                                    <label>Nomination:</label>
                                    <input id="nomination1" type="radio" name="optionsRadios3" class="square-blue">&nbsp;
                                    <label for="nomination1">No</label>
                                    <input id="nomination2" type="radio" name="optionsRadios3" class="square-blue">&nbsp;
                                    <label for="nomination2">Yes</label>
                                </div>
                                <div data-field-span="1">
                                    <label for="nominee">if Yes,Name of Nominee</label>
                                    <input class="form-control" id="nominee" type="text">
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <fieldset>
                            <legend>PAYMENT DETAILS</legend>
                            <div data-row-span="4">
                                <div data-field-span="2">
                                    <label for="amount">Amount RS:</label>
                                    <input class="form-control" id="amount" type="text">
                                </div>
                                <div data-field-span="1">
                                    <label>Mode of pay</label>
                                    <label><input type="radio" name="optionsRadios4"
                                                  class="square-blue">&nbsp;Cash</label>
                                    <label><input type="radio" name="optionsRadios4"
                                                  class="square-blue">&nbsp;Cheque</label>
                                </div>
                            </div>
                        </fieldset>
                        <div data-row-span="10">
                            <div data-field-span="3">
                                <label for="cheque_num">Cheque No:</label>
                                <input class="form-control" id="cheque_num" type="text">
                            </div>
                            <div data-field-span="2">
                                <label for="dated">Dated</label>
                                <div class='input-group date'>
                                    <input type='text' id="dated" class="form-control"/>
                                    <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                </div>
                            </div>
                            <div data-field-span="2">
                                <label for="drawn">drawn on</label>
                                <div class='input-group date'>
                                    <input type='text' class="form-control" id="drawn"/>
                                    <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                        </span>
                                </div>
                            </div>
                            <div data-field-span="2">
                                <label for="branch_bank">Bank(Branch)</label>
                                <input id="branch_bank" type="text">
                            </div>
                        </div>
                        <div data-row-span="1">
                            <div data-field-span="1">
                                <label>Account Operating Instructions</label>
                                <br>
                                <label>
                                    <input type="radio" name="optionsRadios5" class="square-blue">&nbsp;Single
                                </label>
                                <label>
                                    <input type="radio" name="optionsRadios5" class="square-blue">&nbsp;Either/Any one
                                    or
                                    Survivor
                                </label>
                                <label>
                                    <input type="radio" name="optionsRadios5" class="square-blue">&nbsp;Jointly ( Debit
                                    /
                                    ATM card will not be issued)*
                                </label>
                            </div>
                        </div>
                        <p>Please Note: Cheque book of 25 leaves & 50 leaves will be issued to Savings and Current a/c
                            holders respectively by default. </p>
                        <fieldset>
                            <legend>BELOW FIELDS ARE MANDATORY</legend>
                            <div data-row-span="9">
                                <div data-field-span="3">
                                    <label for="account_no">Account No</label>
                                    <input class="form-control" id="account_no" type="text">
                                </div>
                                <div data-field-span="3">
                                    <label for="customer">Customer Id</label>
                                    <input class="form-control" id="customer" type="text">
                                </div>
                                <div data-field-span="3">
                                    <input id="checkbox_f" type="checkbox"> &nbsp;
                                    <label for="checkbox_f">F</label>
                                    <input id="checkbox_p" type="checkbox"> &nbsp;
                                    <label for="checkbox_p">P</label>
                                    <input id="checkbox_n" type="checkbox"> &nbsp;
                                    <label for="checkbox_n">N</label>
                                </div>
                            </div>
                            <div data-row-span="4">
                                <div data-field-span="1">
                                    <label for="name_applicant">Name:1<sup>st</sup> Applicant:(Prefix)</label>
                                    <input class="form-control" id="name_applicant" type="text">
                                </div>
                                <div data-field-span="3">
                                    <label for="fullname">Fullname</label>
                                    <input class="form-control" id="fullname" type="text">
                                </div>
                            </div>
                            <div data-row-span="4">
                                <label for="permanent_address">Permanent Address(Full)</label>
                                <div data-field-span="4">
                                    <textarea id="permanent_address" class="resize_vertical" rows="4"></textarea>
                                </div>
                            </div>
                            <div data-row-span="4">
                                <div data-field-span="2">
                                    <label for="address_city">*City</label>
                                    <input class="form-control" id="address_city" type="text">
                                </div>
                                <div data-field-span="2">
                                    <label for="pin_code">*PIN code</label>
                                    <input class="form-control" id="pin_code" type="text">
                                </div>
                            </div>
                            <div data-row-span="4">
                                <div data-field-span="2">
                                    <label for="state">*State</label>
                                    <input class="form-control" id="state" type="text">
                                </div>
                                <div data-field-span="2">
                                    <label for="country">*Country</label>
                                    <select id="country">
                                        <option>Select Country</option>
                                        <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
                                        <option value="Ã…land Islands" title="Ã…land Islands">Aland Islands</option>
                                        <option value="Albania" title="Albania">Albania</option>
                                        <option value="Algeria" title="Algeria">Algeria</option>
                                        <option value="American Samoa" title="American Samoa">American Samoa</option>
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
                                        <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and
                                            Herzegovina
                                        </option>
                                        <option value="Botswana" title="Botswana">Botswana</option>
                                        <option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
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
                                        <option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic" title="Central African Republic">
                                            Central African Republic
                                        </option>
                                        <option value="Chad" title="Chad">Chad</option>
                                        <option value="Chile" title="Chile">Chile</option>
                                        <option value="China" title="China">China</option>
                                        <option value="Christmas Island" title="Christmas Island">Christmas Island
                                        </option>
                                        <option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos
                                            (Keeling) Islands
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
                                        <option value="CÃ´te d'Ivoire" title="CÃ´te d'Ivoire">CÃ´te d'Ivoire</option>
                                        <option value="Croatia" title="Croatia">Croatia</option>
                                        <option value="Cuba" title="Cuba">Cuba</option>
                                        <option value="CuraÃ§ao" title="CuraÃ§ao">CuraÃ§ao</option>
                                        <option value="Cyprus" title="Cyprus">Cyprus</option>
                                        <option value="Czech Republic" title="Czech Republic">Czech Republic</option>
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
                                        <option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji" title="Fiji">Fiji</option>
                                        <option value="Finland" title="Finland">Finland</option>
                                        <option value="France" title="France">France</option>
                                        <option value="French Guiana" title="French Guiana">French Guiana</option>
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
                                        <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
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
                                        <option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
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
                                        <option value="Moldova, Republic of" title="Moldova, Republic of">Moldova,
                                            Republic of
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
                                        <option value="New Caledonia" title="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand" title="New Zealand">New Zealand</option>
                                        <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
                                        <option value="Niger" title="Niger">Niger</option>
                                        <option value="Nigeria" title="Nigeria">Nigeria</option>
                                        <option value="Niue" title="Niue">Niue</option>
                                        <option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
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
                                        <option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts
                                            and Nevis
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
                                        <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
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
                                        <option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard
                                            and Jan Mayen
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
                                        <option value="United Kingdom" title="United Kingdom">United Kingdom</option>
                                        <option value="United States" title="United States">United States</option>
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
                                        <option value="Virgin Islands, British" title="Virgin Islands, British">Virgin
                                            Islands, British
                                        </option>
                                        <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin
                                            Islands, U.S.
                                        </option>
                                        <option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna
                                        </option>
                                        <option value="Western Sahara" title="Western Sahara">Western Sahara</option>
                                        <option value="Yemen" title="Yemen">Yemen</option>
                                        <option value="Zambia" title="Zambia">Zambia</option>
                                        <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>ATM CARD / DEBIT CARD</legend>
                            <div data-row-span="4">
                                <div data-field-span="3">
                                    <label for="atm_1appli">1<sup>st</sup> Applicant:</label>
                                    <input class="form-control" id="atm_1appli" type="text">
                                    <label for="atm_2appli">2<sup>nd</sup> Applicant:</label>
                                    <input class="form-control" id="atm_2appli" type="text">
                                    <label for="atm_3appli">3<sup>rd</sup> Applicant:</label>
                                    <input class="form-control" id="atm_3appli" type="text">
                                </div>
                                <div data-field-span="1">
                                    <input id="atm_regular" type="checkbox"> &nbsp;
                                    <label for="atm_regular">Regular</label>
                                    <input id="atm_gold" type="checkbox"> &nbsp;
                                    <label for="atm_gold">Gold</label>
                                    <p>*Annual Changes Applicable</p>
                                    <p>*Availble in Select Cities.</p>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>NETBANKING REGISTRATION</legend>
                            <div data-row-span="3">
                                <div data-field-span="1">
                                    <label for="netbanking_1appli">1<sup>st</sup> Applicant:</label>
                                    <input class="form-control" id="netbanking_1appli" type="text">
                                    <label for="netbanking_2appli">2<sup>nd</sup> Applicant:</label>
                                    <input class="form-control" id="netbanking_2appli" type="text">
                                    <label for="netbanking_3appli">3<sup>rd</sup> Applicant:</label>
                                    <input class="form-control" id="netbanking_3appli" type="text">
                                </div>
                                <div data-field-span="2">
                                    <!--Emai Id:(Write in BLOCK LETTERS only for e.g.)-->
                                    <label for="email_1appli">Email Id 1<sup>st</sup>Applicant:</label>
                                    <input class="form-control" id="email_1appli" type="text">
                                    <label for="email_2appli">Email Id 2<sup>nd</sup>Applicant:</label>
                                    <input class="form-control" id="email_2appli" type="text">
                                    <label for="email_3appli">Email Id 3<sup>rd</sup>Applicant:</label>
                                    <input class="form-control" id="email_3appli" type="text">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>MOBILEBANKING REGISTRATION</legend>
                            <div data-row-span="6">
                                <div data-field-span="3">
                                    <label>Mobile Number</label>
                                    <label for="mobile_1appli">1<sup>st</sup>Applicant:</label>
                                    <input class="form-control" id="mobile_1appli" type="text">
                                    <label for="mobile_2appli">2<sup>nd</sup>Applicant:</label>
                                    <input class="form-control" id="mobile_2appli" type="text">
                                    <label for="mobile_3appli">3<sup>rd</sup>Applicant:</label>
                                    <input class="form-control" id="mobile_3appli" type="text">
                                </div>
                                <div data-field-span="3">
                                    <label>Name of Carrier</label>
                                    <label for="1appli_company">1<sup>st</sup>Applicant:</label>
                                    <input class="form-control" id="1appli_company" type="text">
                                    <label for="2appli_company">2<sup>nd</sup>Applicant:</label>
                                    <input class="form-control" id="2appli_company" type="text">
                                    <label for="3appli_company">3<sup>rd</sup>Applicant:</label>
                                    <input class="form-control" id="3appli_company" type="text">
                                </div>
                            </div>
                            <div data-row-span="4">
                                <div data-field-span="4">
                                    <label for="average_quaterly_balance">The Average Quarterly Balance (AQB) required
                                        to be maintained for this account is Rs:</label>
                                    <input class="form-control" id="average_quaterly_balance" type="text">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div data-row-span="2">
                                <p>DECLARATION :I/We have read and understood the Terms & Conditions governing the
                                    opening of an account with HDFC Bank and those relating to various services
                                    including but not limited to (A) ATMs, (B) PhoneBanking, (C) Debit Cards, (D)
                                    MobileBanking, (E) NetBanking, (F) BillPay facility. I/We accept and agree to be
                                    bound by the said Terms & Conditions including those excluding /limiting the Bank's
                                    liability. I/We understand that the Bank may, at its absolute discretion,
                                    discontinue any of the services completely or partially without any notice to me/us.
                                    I/We agree that the Bank may debit my/our account for the service charges applicable
                                    from time to time. I/We confirm that I/We am/are resident of India. I/We authorise
                                    the Bank to disclose, from time to time any information relating to my savings
                                    account to any parent/subsidiary, affiliate and associate of HDFC Bank, and to third
                                    parties engaged by the Bank, for purposes as detailed in the Terms & Conditions
                                    Booklet. I/We confirm that I/We am/are in possession of and have read the Terms and
                                    Conditions booklet which details the rules governing account operations, the
                                    schedule of charges which specifies the charges applicable from time to time for
                                    various services and the tear away Customer copy detailing the instructions and
                                    account opening rules. I /We have understood that I/We am/are required to
                                    maintain:</p>
                            </div>
                            <div data-row-span="6">
                                <div data-field-span="2">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                             style="width: 200px; height: 150px;"></div>
                                        <div>
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span
                                                            class="fileinput-exists">Change</span>
                                                <input type="file" name="...">
                                                </span>
                                            <a href="#" class="btn btn-default fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-field-span="2">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                             style="width: 200px; height: 150px;"></div>
                                        <div>
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span
                                                            class="fileinput-exists">Change</span>
                                                <input type="file" name="...">
                                                </span>
                                            <a href="#" class="btn btn-default fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-field-span="2">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                             style="width: 200px; height: 150px;"></div>
                                        <div>
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span
                                                            class="fileinput-exists">Change</span>
                                                <input type="file" name="...">
                                                </span>
                                            <a href="#" class="btn btn-default fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div data-row-span="3">
                            <div data-field-span="1">
                                <textarea rows="2" class="resize_vertical" placeholder="Sign here"></textarea>
                            </div>
                            <div data-field-span="1">
                                <textarea rows="2" class="resize_vertical" placeholder="Sign here"></textarea>
                            </div>
                            <div data-field-span="1">
                                <textarea rows="2" class="resize_vertical" placeholder="Sign here"></textarea>
                            </div>
                        </div>
                        <div data-row-span="4">
                            <div data-field-span="2">
                                <p>I/We confirm that I/We have read and understood the Declaration given above and
                                    confirm that all the details provided on the form are correct.I/We also confirm that
                                    my/our account has been opened by Bank Officer Mr./Ms.
                                    <textarea class="resize_vertical" placeholder="Name"></textarea>& I/We have signed
                                    in his/her presence.</p>
                            </div>
                            <div data-field-span="2">
                                <label>Name:
                                    <input class="form-control" type="text" placeholder="Name">
                                </label>
                                <label for="dateofaccount">Date:</label>
                                <div class='input-group date'>
                                    <input type='text' id='dateofaccount' class="form-control"/>
                                    <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <fieldset>
                            <legend>For Bank Use Only :</legend>
                            <div data-row-span="6">
                                <div data-field-span="2">
                                    <label for="bank_account">A/C No.</label>
                                    <input class="form-control" id="bank_account" type="text">
                                </div>
                                <div data-field-span="2">
                                    <label for="bank_customer_id">CUSTOMER ID NO.</label>
                                    <input class="form-control" id="bank_customer_id" type="text">
                                </div>
                                <div data-field-span="2">
                                    <label for="bank_account_open">Where a/c is to be opened:</label>
                                    <input class="form-control" id="bank_account_open" type="text">
                                </div>
                            </div>
                            <div data-row-span="6">
                                <div data-field-span="2">
                                    <label for="product_code">Product Code:</label>
                                    <input class="form-control" id="product_code" type="text">
                                </div>
                                <div data-field-span="2">
                                    <label for="lc_code">LC CODE:</label>
                                    <input class="form-control" id="lc_code" type="text">
                                </div>
                                <div data-field-span="2">
                                    <label for="lg_code">LG CODE:</label>
                                    <input class="form-control" id="lg_code" type="text">
                                </div>
                            </div>
                            <div data-row-span="8">
                                <div data-field-span="2">
                                    <label for="company_code">Company Code:</label>
                                    <input class="form-control" id="company_code" type="text">
                                </div>
                                <div data-field-span="2">
                                    <label for="service_branch">Service Branch Code:</label>
                                    <input class="form-control" id="service_branch" type="text">
                                </div>
                                <div data-field-span="2">
                                    <label for="service_id">Service ID:</label>
                                    <input class="form-control" id="service_id" type="text">
                                </div>
                                <div data-field-span="2">
                                    <label for="promo_code">Promo Code:</label>
                                    <input class="form-control" id="promo_code" type="text">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend> Occupation:</legend>
                            <div data-row-span="12">
                                <div data-field-span="2">
                                    <input id="salaried" type="checkbox">&nbsp;
                                    <label for="salaried">Salaried</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="self_employed" type="checkbox">&nbsp;
                                    <label for="self_employed">Self-employed</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="retired" type="checkbox">&nbsp;
                                    <label for="retired">Retired</label>
                                </div>
                                <div data-field-span="4">
                                    <input id="self_employed_prof" type="checkbox">&nbsp;
                                    <label for="self_employed_prof">Self-employed prof</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="housewife" type="checkbox">&nbsp;
                                    <label for="housewife">Housewife</label>
                                </div>
                            </div>
                            <div data-row-span="12">
                                <div data-field-span="4">
                                    <input id="politician" type="checkbox">&nbsp;
                                    <label for="politician">Politician</label>
                                </div>
                                <div data-field-span="4">
                                    <input id="student" type="checkbox">&nbsp;
                                    <label for="student">Student</label>
                                </div>
                                <div data-field-span="4">
                                    <input id="others" type="checkbox">&nbsp;
                                    <label for="others">Others (any)</label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>If salaried employed with :</legend>
                            <div data-row-span="12">
                                <div data-field-span="2">
                                    <input id="private" type="checkbox">&nbsp;
                                    <label for="private">Private Ltd</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="parternship" type="checkbox">&nbsp;
                                    <label for="parternship">Partnership</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="proprietorship" type="checkbox">&nbsp;
                                    <label for="proprietorship">Proprietorship</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="public_sector" type="checkbox">&nbsp;
                                    <label for="public_sector">Public sector
                                    </label>
                                </div>
                                <div data-field-span="2">
                                    <input id="government" type="checkbox">&nbsp;
                                    <label for="government">Government</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="multi_national" type="checkbox">&nbsp;
                                    <label for="multi_national">Multinational</label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Self Employed since :</legend>
                            <div data-row-span="4">
                                <div data-field-span="2">
                                    <label for="years_self_employed">Years</label>
                                    <input class="form-control" id="years_self_employed" type="text">
                                </div>
                                <div data-field-span="2">
                                    <label for="months_self_employed">Months</label>
                                    <input class="form-control" id="months_self_employed" type="text">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Nature of Business :</legend>
                            <div data-row-span="12">
                                <div data-field-span="2">
                                    <input id="manufacturing" type="checkbox">&nbsp;
                                    <label for="manufacturing">Manufacturing</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="service_provider" type="checkbox">&nbsp;
                                    <label for="service_provider">Service Provider
                                    </label>
                                </div>
                                <div data-field-span="2">
                                    <input id="agriculture" type="checkbox">&nbsp;
                                    <label for="agriculture">Agriculture</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="real_estates" type="checkbox">&nbsp;
                                    <label for="real_estates">Real Estate
                                    </label>
                                </div>
                                <div data-field-span="2">
                                    <input id="trader" type="checkbox">&nbsp;
                                    <label for="trader">Trader</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="others_business" type="checkbox">&nbsp;
                                    <label for="others_business">Others(any)</label>
                                </div>
                            </div>
                        </fieldset>
                        <div data-row-span="4">
                            <div data-field-span="2">
                                <label for="dateofincorp">Date of Incorporation </label>
                                <div class='input-group date'>
                                    <input id='dateofincorp' type='text' class="form-control"/>
                                    <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <fieldset>
                            <legend>Type of Company/Firm :</legend>
                            <div data-row-span="12">
                                <div data-field-span="3">
                                    <input id="sole_propritorship" type="checkbox">&nbsp;
                                    <label for="sole_propritorship">Sole Proprietorship</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="firm_parternship" type="checkbox">&nbsp;
                                    <label for="firm_parternship">Partnership</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="public_limited" type="checkbox">&nbsp;
                                    <label for="public_limited">Public Limited</label>
                                </div>
                                <div data-field-span="3">
                                    <input id="private_limited" type="checkbox">&nbsp;
                                    <label for="private_limited">Private Limited</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="others_firm" type="checkbox">&nbsp;
                                    <label for="others_firm">Others</label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Self Employed Professional :</legend>
                            <div data-row-span="12">
                                <div data-field-span="2">
                                    <input id="doctor" type="checkbox">&nbsp;
                                    <label for="doctor">Doctor</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="ca_cs" type="checkbox">&nbsp;
                                    <label for="ca_cs">CA/CS</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="lawyer" type="checkbox">&nbsp;
                                    <label for="lawyer">Lawyer</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="architect" type="checkbox">&nbsp;
                                    <label for="architect">Architect</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="consultant" type="checkbox">&nbsp;
                                    <label for="consultant">IT Consultant
                                    </label>
                                </div>
                                <div data-field-span="2">
                                    <input id="others_professional" type="checkbox">&nbsp;
                                    <label for="others_professional">Others</label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Source of Funds :</legend>
                            <div data-row-span="12">
                                <div data-field-span="2">
                                    <input id="salary" type="checkbox">&nbsp;
                                    <label for="salary">Salary</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="business_income" type="checkbox">&nbsp;
                                    <label for="business_income">Business Income
                                    </label>
                                </div>
                                <div data-field-span="2">
                                    <input id="source_agriculture" type="checkbox">&nbsp;
                                    <label for="source_agriculture">Agriculture</label>
                                </div>
                                <div data-field-span="4">
                                    <input id="invest_income" type="checkbox">&nbsp;
                                    <label for="invest_income">Investment Income
                                    </label>
                                </div>
                                <div data-field-span="2">
                                    <input id="others_funds" type="checkbox">&nbsp;
                                    <label for="others_funds">Others</label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Gross Annual income :</legend>
                            <div data-row-span="18">
                                <div data-field-span="3">
                                    <input id="income_below50" name="gross_annual" type="radio">&nbsp;
                                    <label for="income_below50"><i class="fa ti-angle-left" aria-hidden="true"></i>
                                        50,000</label>
                                </div>
                                <div data-field-span="3">
                                    <input id="income_above50" name="gross_annual" type="radio">&nbsp;
                                    <label for="income_above50">50,000 - 1,00,000</label>
                                </div>
                                <div data-field-span="3">
                                    <input id="income_above5l" name="gross_annual" type="radio">&nbsp;
                                    <label for="income_above5l">5,00,000 - 7,50,000</label>
                                </div>
                                <div data-field-span="3">
                                    <input id="income_above8l" name="gross_annual" type="radio">&nbsp;
                                    <label for="income_above8l">7,50,000 - 10,00,000</label>
                                </div>
                                <div data-field-span="3">
                                    <input id="income_above10l" name="gross_annual" type="radio">&nbsp;
                                    <label for="income_above10l">10,00,000-15,00,000</label>
                                </div>
                                <div data-field-span="3">
                                    <input id="income_above15l" name="gross_annual" type="radio">&nbsp;
                                    <label for="income_above15l"><i class="fa ti-angle-right" aria-hidden="true"></i>15,00,000</label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Residence type :</legend>
                            <div data-row-span="24">
                                <div data-field-span="2">
                                    <input id="owned" type="checkbox">&nbsp;
                                    <label for="owned">Owned</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="rented" type="checkbox">&nbsp;
                                    <label for="rented">Rented / Leased</label>
                                </div>
                                <div data-field-span="2">
                                    <input id="ancestral" type="checkbox">&nbsp;
                                    <label for="ancestral">Ancestral / Family
                                    </label>
                                </div>
                                <div data-field-span="2">
                                    <input id="company_provided" type="checkbox">&nbsp;
                                    <label for="company_provided">Company provided
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <label> ABOVE FIELDS ARE MANDATORY *</label>
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
    <script type="text/javascript" src="vendors/moment/js/moment.min.js"></script>
    <script type="text/javascript" src="vendors/select2/js/select2.js"></script>
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="js/custom_js/complex_form2.js" type="text/javascript"></script>
    <!-- end of page level js -->
@stop



