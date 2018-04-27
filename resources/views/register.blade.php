    <!DOCTYPE html>
    <html>
    <head>
        <title>::Admin Register::</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <!-- global css -->
        <link href="css/app.css" rel="stylesheet">
        <!-- end of global css -->
        <!--page level css -->
        <link type="text/css" href="css/themify-icons/css/themify-icons.css" rel="stylesheet"/>
        <link href="vendors/iCheck/css/all.css" rel="stylesheet">
        <link href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet"/>
        <link href="css/login.css" rel="stylesheet">
        <!--end of page level css-->
    </head>
    <body id="sign-up">
    <div class="preloader">
        <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-10 col-sm-8 m-auto login-form">

                    <h2 class="text-center logo_h2">
                        <img src="img/pages/clear_black.png" alt="Logo">
                    </h2>

                <div class="card-body">

                        <form action="login" id="authentication" method="get" class="signup_validator">
                         <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first" class="sr-only">First Name</label>
                                        <input type="text" class="form-control " id="first" name="first_name"
                                               placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="last" class="sr-only">Last Name</label>
                                        <input type="text" class="form-control  " id="last" name="last_name"
                                               placeholder="Last name">
                                    </div>
                                </div>
                         </div>
                            <div class="row">

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email" class="sr-only"> E-mail</label>
                                    <input type="text" class="form-control  " id="email" name="email"
                                           placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" class="form-control " id="password"
                                           name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="confirm-password" class="sr-only">Password</label>
                                    <input type="password" class="form-control " id="confirm-password"
                                           name="password_confirm" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group checkbox">
                                    <label for="terms">
                                        <input type="checkbox" name="terms" id="terms">&nbsp; I accept the <a href="javascript:void(0)">terms &amp; Conditions</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="submit" value="Sign Up" class="btn btn-primary btn-block"/>
                                </div>
                                <span class="sign-in">Already a member? <a href="login">Sign In</a></span>
                            </div>
                            </div>
                        </form>
                    </div>
                    <div class="row text-center social">
                        <div class="col-xl-12">
                            <p class="alter">Sign Up with</p>
                        </div>
                        <div class="row m-auto">
                                <div class="col-4">
                                    <a href="javascript:void(0)" class="btn btn-lg btn-facebook">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="javascript:void(0)" class="btn btn-lg btn-twitter">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="javascript:void(0)" class="btn btn-lg btn-google">
                                        <i class="ti-google"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    <!-- global js -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="vendors/moment/js/moment.min.js"></script>
    <script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="vendors/select2/js/select2.js"></script>
    <script src="vendors/iCheck/js/icheck.js"></script>
    <script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
    <script src="js/custom_js/register.js"></script>
    <!-- end of page level js -->
    </body>
    </html>
