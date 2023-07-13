<?php
$_id = escapeshellarg($_POST["updateid"]);
exec("C:\Users\HP\Desktop\Python\Python311\python.exe python/update-building.py $_id", $output, $return);
$json_a = json_decode($output[0], true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Webstrot Admin : Basic Form </title>

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
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>


    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Main</li>
                    <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span class="badge badge-primary">6</span> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="index.html">Dashboard 1</a></li>
                            <li><a href="index-v1.html">Dashboard 2</a></li>
                            <li><a href="index-school.html">Dashboard 3</a></li>
                            <li><a href="index-ecommerce.html">Dashboard 5</a></li>
                            <li><a href="index-ecommerce-v2.html">Dashboard 6</a></li>
                        </ul>
                    </li>

                    <li class="label">Master</li>
                    <li><a href="building.php"><i class="ti-calendar"></i> Buiding </a></li>
                    <li><a href="rank.php"><i class="ti-email"></i> Rank</a></li>
                    <li><a href="division.php"><i class="ti-user"></i> Division/Group</a></li>
                    <li class="label">Form</li>
                    <li><a href="form.php"><i class="ti-view-list-alt"></i> Basic Form </a></li>
                    <li><a href="query.php"><i class="ti-file"></i>View</a></li>
                    <li><a href="logout.php"><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Central SysDB Portal</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </div>




    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Form-Basic</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <!-- /# row -->
                    <div class="row row-no-gutters">
                        <div class="col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                            <div class="card alert">
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form action="update-buildingverify.php" method="post">
                                            <h2>Update Building Info</h2>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>ID</label>
                                                        <input type="text" class="form-control" name="id" id="_id" value="<?php echo $json_a[0]["_id"]; ?>" placeholder="ID" disabled>
                                                    </div>
                                                    <input type="text" name="updateid" id="_id" value="<?php echo $json_a[0]["_id"]; ?>" hidden>
                                                    <div class="form-group">
                                                        <label>Building Name</label>
                                                        <input type="text" class="form-control" name="name" value="<?php echo $json_a[0]["name"]; ?>" placeholder="Building Name">
                                                    </div>
                                                    <?php if($json_a[0]["multi"] == "true"){?>
                                                        <div class="form-group">
                                                            <label>Multistorey</label>
                                                            <input type="radio" name="multi" value="true" id="yes" checked> Yes
                                                            <input type="radio" name="multi" value="false" id="no"> No
                                                        </div>
                                                    <?php }else{?>
                                                        <div class="form-group">
                                                            <label>Multistorey</label>
                                                            <input type="radio" name="multi" value="true" id="yes"> Yes
                                                            <input type="radio" name="multi" value="false" id="no" checked> No
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-primary m-b-10 m-l-5" value="Update">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <!-- /# column -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </script>
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->


    <script src="assets/js/scripts.js"></script>




</body>

</html>