<?php
    exec("C:\Users\HP\Desktop\Python\Python311\python.exe python/viewall-division.py ", $output, $return); 
    $json_a = json_decode($output[0],true);   
    $size = sizeof($json_a);
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
                                        <form action="connector-division.php" method="post">
                                            <h2>Division/Group</h2>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>ID</label>
                                                        <input type="text" class="form-control" name="id" id="_id" required placeholder="ID">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Group Name</label>
                                                        <input type="text" class="form-control" name="grp_name" required placeholder="Group Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Group Abbreviation</label>
                                                        <input type="text" class="form-control" name="grp_abbr" required placeholder="Group Abbreviation">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Group Order</label>
                                                        <input type="text" class="form-control" name="grp_order" required placeholder="Group Order">
                                                    </div>
                                                    <h4>Division</h4>
                                                    <div class="form-group">
                                                        <label>Division Name</label>
                                                        <input type="text" class="form-control" name="div_name" required placeholder="Division Matrix">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Division Abbreviation</label>
                                                        <input type="text" class="form-control" name="div_abbr" required placeholder="Division Level">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Others</label>
                                                        <input type="text" class="form-control" name="others" required placeholder="Others">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-primary m-b-10 m-l-5" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <!-- /# column -->
                        <?php for ($i = 0; $i < $size; $i++) : ?>
                            <div class="col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0 col-lg-12 col-lg-offset-0">
                                <div class="card alert">
                                    <div class="card-body">
                                        <div class="basic-elements">
                                            <div class="col-lg-4">
                                                <p>ID: <?php echo $json_a[$i]["_id"]; ?></p>
                                                <p>Group Name: <?php echo $json_a[$i]["grp_name"]; ?></p>
                                                <p>Group Abbreviation: <?php echo $json_a[$i]["grp_abbr"]; ?></p>
                                                <p>Group Code: <?php echo $json_a[$i]["grp_code"]; ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                                <p>Division Name: <?php echo $json_a[$i]["div"]["div_name"]; ?></p>
                                                <p>Division Abbreviation: <?php echo $json_a[$i]["div"]["div_abbr"]; ?></p>
                                                <p>Others: <?php echo $json_a[$i]["other"]; ?></p>
                                            </div>
                                            <div class="col-lg-4">
                                            <form method="post">
                                                    <input type="text" name="updateid" id="upd" value="<?php echo $json_a[$i]["_id"]; ?>" hidden>
                                                    <input type="submit" class="btn btn-primary m-b-10 m-l-5" style="background: green;" formaction="update-division.php" value="Update">
                                                    <input type="submit" class="btn btn-primary m-b-10 m-l-5" style="background: red;" formaction="delete-division.php" value="Delete">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
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
    <script>
        let updatebtn = document.getElementById("updatebtn");
        let deletebtn = document.getElementById("deletebtn");

        console.log(this.updatebtn);
        console.log(this.deletebtn);
    </script>




</body>

</html>