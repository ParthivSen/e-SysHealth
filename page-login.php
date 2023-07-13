<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Central SysDB Portal</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/sweetalert/sweetalert.css" rel="stylesheet">

</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="login-content">
                        <div class="login-logo">
                            <!-- <a href="index.html"><span>Central SysDB Portal</span></a> -->
                        </div>
                        <div class="login-form">
                            <h4>Administratior Login</h4>
                            <form action="page-loginverify.php" method="POST">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required  >
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="checkbox">
                                    <label>
										<input type="checkbox"> Remember Me
									</label>
                                    <label class="pull-right">
										<a href="#">Forgotten Password?</a>
									</label>

                                </div>
                                <button type="submit" id="signin" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i class="ti-facebook"></i>Sign in with facebook</button>
                                        <button type="button" class="btn btn-primary bg-twitter btn-flat btn-addon m-t-10"><i class="ti-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div> -->
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="page-register.php"> Sign Up Here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="main-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card alert">
                                    <div class="card-header">
                                        <h4>Sweet Wrong</h4> 
                                        <div class="card-header-right-icon">
                                            <ul>
                                                <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-danger btn sweet-wrong" id="btnAlert">Sweet Wrong</button>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- jquery vendor -->
        <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->


    <script src="assets/js/lib/sweetalert/sweetalert.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/sweetalert/sweetalert.init.js"></script>
    <!-- scripit init-->
    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->

    <script>
        document.getElementById("btnAlert1").click();
    </script>

</body>

</html>