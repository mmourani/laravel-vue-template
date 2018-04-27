<!DOCTYPE html>
<html>
<head>
    <title>::Admin Login::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- end of bootstrap -->
    <!--page level css -->
    <link type="text/css" href="css/themify-icons/css/themify-icons.css" rel="stylesheet"/>
    <link href="vendors/iCheck/css/all.css" rel="stylesheet">
    <link href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet"/>
    <link href="css/login.css" rel="stylesheet">
    <!--end page level css-->
</head>

<body id="sign-in">
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-10 col-sm-8 m-auto login-form">

                <h2 class="text-center logo_h2">
                    <img src="img/pages/clear_black.png" alt="Logo">
                </h2>

            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form action="index" id="authentication" method="get" class="login_validator">
                            <div class="form-group">
                                <label for="email" class="sr-only"> E-mail</label>
                                <input type="text" class="form-control  " id="email" name="username"
                                       placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="password"
                                       name="password" placeholder="Password">
                            </div>
                            <div class="form-group checkbox">
                                <label for="remember">
                                    <input type="checkbox" name="remember" id="remember">&nbsp; Remember Me
                                </label>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Sign In" class="btn btn-primary btn-block"/>
                            </div>
                            <a href="forgot_password" id="forgot" class="forgot"> Forgot Password ? </a>

                            <span class="float-right sign-up">New ? <a href="register">Sign Up</a></span>
                        </form>
                    </div>
                </div>
                <div class="row text-center social">
                    <div class="col-12">
                        <p class="alter">Sign in with</p>
                    </div>
                    <div class="row m-auto">

                            <div class="col-4">
                                <a href="#" class="btn btn-lg btn-facebook">
                                    <i class="ti-facebook"></i>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="btn btn-lg btn-twitter">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="btn btn-lg btn-google">
                                    <i class="ti-google"></i>
                                </a>
                            </div>

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
<!-- page level js -->
<script type="text/javascript" src="vendors/iCheck/js/icheck.js"></script>
<script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/custom_js/login.js"></script>
<!-- end of page level js -->
</body>

</html>

