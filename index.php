<!DOCTYPE html>
<html lang="en">
<?php include "utils.php"; ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Administrator</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- <link rel="icon" href="https://img.icons8.com/doodle/50/000000/home--v1.png" type="image/x-icon"> -->
    <!-- MetisMenu CSS -->
    <!-- <link href="assets/js/metisMenu/metisMenu.min.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

    <script src="assets/js/jquery.min.js" type="text/javascript"></script>

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="">Administrator</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user fa-fw"></i> <i
                            class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li><a href="edit_admin.php?admin_user_id= ?>&operation=edit"><i
    class="fa fa-user fa-fw"></i> User Profile</a></li> -->
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li><a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                        <li><a href="vendors.php"><i class="fa fa-user fa-fw"></i> Stock</a></li>
                        <li><a href="customer.php"><i class="fa fa-group fa-fw"></i> Customer</a></li>

                        <li><a href="orders.php"><i class="fa fa-group fa-fw"></i> Orders</a></li>



                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <?php
        //  endif;
          ?>
        <!-- The End of the Header -->

        <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php echo getProductCount(); ?>
                                    </div>
                                    <div>Stock</div>
                                </div>
                            </div>
                        </div>
                        <a href="product.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"> <?php echo getCustomerCount() ?>
                                    </div>
                                    <div>Customers</div>
                                </div>
                            </div>
                        </div>
                        <a href="customer.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php echo getTotalSales() ?>
                                    </div>
                                    <div>orders</div>
                                </div>
                            </div>
                        </div>
                        <a href="orders.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <link rel="stylesheet" href="cardssc.css">
            <div class="container">
                <div class="row class">
                    <div class="col-md-3 b">
                        <div class="card-counter success">
                            <i class="fa fa-database"></i>
                            <span class="count-numbers">5410</span>
                            <span class="count-name">Total Profit </span>
                        </div>
                    </div>

                    <div class="col-md-3 b">
                        <div class="card-counter info">
                            <i class="fa fa-users"></i>
                            <span class="count-numbers"><?php echo getTotalSales()?></span>
                            <span class="count-name">Total sales</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>

    <!-- /#page-wrapper -->


    </div>



    </script>
    <!-- /#wrapper -->

    <!-- jQuery -->


    <!-- Bootstrap Core JavaScript -->

    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>




    <!-- Custom Theme JavaScript -->
    <script src="assets/js/sb-admin-2.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <style>
    #container {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
    }
    </style>

</body>
<style>
body {
    background-color: #f8f8f8;
}

#wrapper {
    width: 100%;
}

#page-wrapper {
    padding: 0 15px;
    min-height: 568px;
    background-color: white;
}

@media (min-width: 768px) {
    #page-wrapper {
        position: inherit;
        margin: 0 0 0 250px;
        padding: 0 30px;
        border-left: 1px solid #e7e7e7;
    }
}

.navbar-top-links {
    margin-right: 0;
}

.navbar-top-links li {
    display: inline-block;
}

.navbar-top-links li:last-child {
    margin-right: 15px;
}

.navbar-top-links li a {
    padding: 15px;
    min-height: 50px;
}

.navbar-top-links .dropdown-menu li {
    display: block;
}

.navbar-top-links .dropdown-menu li:last-child {
    margin-right: 0;
}

.navbar-top-links .dropdown-menu li a {
    padding: 3px 20px;
    min-height: 0;
}

.navbar-top-links .dropdown-menu li a div {
    white-space: normal;
}

.navbar-top-links .dropdown-messages,
.navbar-top-links .dropdown-tasks,
.navbar-top-links .dropdown-alerts {
    width: 310px;
    min-width: 0;
}

.navbar-top-links .dropdown-messages {
    margin-left: 5px;
}

.navbar-top-links .dropdown-tasks {
    margin-left: -59px;
}

.navbar-top-links .dropdown-alerts {
    margin-left: -123px;
}

.navbar-top-links .dropdown-user {
    right: 0;
    left: auto;
}

.page-action-links {
    margin: 40px 0px 20px 0px;
}


.sidebar .sidebar-nav.navbar-collapse {
    padding-left: 0;
    padding-right: 0;
}

.sidebar ul li {
    border-bottom: 1px solid #5cc4e4;
}

.sidebar ul li a.active {
    background-color: #eeeeee;
}

.sidebar .arrow {
    float: right;
}

.sidebar .fa.arrow:before {
    content: "\f104";
}

.sidebar .active>a>.fa.arrow:before {
    content: "\f107";
}

.sidebar .nav-second-level li,
.sidebar .nav-third-level li {
    border-bottom: none !important;
}

.sidebar .nav-second-level li a {
    padding-left: 37px;
}

.sidebar .nav-third-level li a {
    padding-left: 52px;
}

@media (min-width: 768px) {
    .sidebar {
        z-index: 1;
        position: absolute;
        width: 250px;
        margin-top: 51px;
    }

    .navbar-top-links .dropdown-messages,
    .navbar-top-links .dropdown-tasks,
    .navbar-top-links .dropdown-alerts {
        margin-left: auto;
    }
}

.panel .slidedown .glyphicon,
.chat .glyphicon {
    margin-right: 5px;
}

.login-panel {
    margin-top: 25%;
}

.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.428571429;
}

.btn-circle.btn-lg {
    width: 50px;
    height: 50px;
    padding: 10px 16px;
    border-radius: 25px;
    font-size: 18px;
    line-height: 1.33;
}

.btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}

.show-grid [class^="col-"] {
    padding-top: 10px;
    padding-bottom: 10px;
    border: 1px solid #ddd;
    background-color: rgb(240, 135, 167) !important;
}

.show-grid {
    margin: 15px 0;
}

.huge {
    font-size: 40px;
}

.panel-green>.panel-heading {
    border-color: #5cb85c;
    color: white;
    background-color: #5cb85c;
}

.panel-green {
    border-color: #5cb85c;
}

.panel-green>a {
    color: #5cb85c;
}

.panel-green>a:hover {
    color: #3d8b3d;
}

.panel-red {
    border-color: #d9534f;
}

.panel-red>.panel-heading {
    border-color: #d9534f;
    color: white;
    background-color: #d9534f;
}

.panel-red>a {
    color: #d9534f;
}

.panel-red>a:hover {
    color: #b52b27;
}

.panel-yellow {
    border-color: #f0ad4e;
}

.panel-yellow>.panel-heading {
    border-color: #f0ad4e;
    color: white;
    background-color: #f0ad4e;
}

.panel-yellow>a {
    color: #f0ad4e;
}

.panel-yellow>a:hover {
    color: #df8a13;
}

label.error {
    color: red;
}

.switch-input {
    display: none;
}

.switch-label {
    position: relative;
    display: inline-block;
    min-width: 112px;
    cursor: pointer;
    font-weight: 500;
    text-align: left;
    margin: 16px;
    padding: 16px 0 16px 44px;
}

.switch-label:before,
.switch-label:after {
    content: "";
    position: absolute;
    margin: 0;
    outline: 0;
    top: 50%;
    -ms-transform: translate(0, -50%);
    -webkit-transform: translate(0, -50%);
    transform: translate(0, -50%);
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.switch-label:before {
    left: 1px;
    width: 34px;
    height: 14px;
    background-color: #9E9E9E;
    border-radius: 8px;
}

.switch-label:after {
    left: 0;
    width: 20px;
    height: 20px;
    background-color: #FAFAFA;
    border-radius: 50%;
    box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.14), 0 2px 2px 0 rgba(0, 0, 0, 0.098), 0 1px 5px 0 rgba(0, 0, 0, 0.084);
}

.switch-label .toggle--on {
    display: none;
}

.switch-label .toggle--off {
    display: inline-block;
}

.switch-input:checked+.switch-label:before {
    background-color: #A5D6A7;
}

.switch-input:checked+.switch-label:after {
    background-color: #4CAF50;
    -ms-transform: translate(80%, -50%);
    -webkit-transform: translate(80%, -50%);
    transform: translate(80%, -50%);
}

.switch-input:checked+.switch-label .toggle--on {
    display: inline-block;
}

.switch-input:checked+.switch-label .toggle--off {
    display: none;
}
</style>

</html>