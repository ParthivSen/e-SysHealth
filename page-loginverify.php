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
</head>



<html>


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
        document.getElementById("btnAlert").click();
    </script>   



<?php
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    die( header( 'location: home.php' ) );
}
    $id = escapeshellarg($_POST["email"]);
    $password = escapeshellarg($_POST["password"]);
    
    $output = exec("C:\Users\HP\Desktop\Python\Python311\python.exe python\login.py $id $password");
    $json_a = json_decode($output, true);
    if(!empty($json_a)){
        // header("Location: ../form.php");
        header("Location: form.php");
    }else{
        print_r($output);?>
    <script>
        document.getElementById("btnAlert").click();
    </script>
        <?php
        header("Location: page-login.php");
        
    }
?>

</html>