<?php  
require "function.php";

$jumlah = mysqli_query($conn, "SELECT * FROM barang");
while ($data = mysqli_fetch_array($jumlah)) {
    $total[] = $data['stock'];

}
$stock = array_sum($total);

$jumlah = mysqli_query($conn, "SELECT * FROM bahanbaku");
while ($data = mysqli_fetch_array($jumlah)) {
    $total[] = $data['stock'];
}
$stok = array_sum($total);

// $produksi = 5000;
// $all = 100/100;

$persen1 = $stock / 5000 * 100;
$persen2 = $stok / 5000 * 100;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inventory</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/logo-dea hh.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <!-- <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a> -->
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <a href="index.php">
                            <img class="img-fluid" src="assets/images/logo-dea hh.png" alt="Theme-Logo" style="width: 70px; margin-left: 93%;" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <!-- <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul> -->
                        <ul class="nav-right">
                            <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!" style="margin-top: 18px">
                                <i class="ti-menu"></i>
                            </a>
                            <!-- <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-normal-sign-in.html">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar" >
                        <div class="sidebar_toggle" >
                            <a href="#">
                                <i class="icon-close icons"></i>
                            </a>
                        </div>
                        <div class="pcoded-inner-navbar main-menu" style="background-color: #a83338;">
                            <div class="" style="background-color: #a83338;">
                                <div class="main-menu-header" style="background-color: #a83338;">
                                    <div class="user-details" style="display: flex; align-items: center; ">
                                        <img class="img-80 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image" style="margin-left: 15px; border-radius: 100%; width: 40px;"> 
                                        <span id="more-details" style="margin-left: 10px; ">M Jaelani 
                                            <i class="fa fa-caret-down" style="margin-left: 75px;" ></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="main-menu-content" >
                                    <ul>
                                        <li class="more-details" >
                                            <!-- <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a> -->
                                            <a href="login.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                    </div>
                                </form>
                            </div> -->
                            <!-- <div class="pcoded-navigation-label">Navigation</div> -->
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="index.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="barang.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon" >
                                            <img src="assets/iconly/Document2.svg" style="width: 17px;" alt="">
                                            <b>D</b></span>
                                        <span class="pcoded-mtext">Barang</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                             <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="barangmasuk.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                            <img src="assets/iconly/Chart.svg" style="width: 17px;" alt="">
                                            <b>D</b></span>
                                        <span class="pcoded-mtext">Barang Masuk</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                             <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="barangkeluar.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                            <img src="assets/iconly/Chart.svg" style="width: 17px;" alt="">
                                            <b>D</b></span>
                                        <span class="pcoded-mtext">Barang Keluar</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="bahanbaku.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                            <img src="assets/iconly/Document2.svg" style="width: 17px;" alt="">
                                            <b>D</b></span>
                                        <span class="pcoded-mtext">Bahan Baku</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="bahanbakumasuk.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                            <img src="assets/iconly/Chart.svg" style="width: 17px;" alt="">
                                            <b>D</b></span>
                                        <span class="pcoded-mtext">Bahan Baku Masuk</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="bahanbakukeluar.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                            <img src="assets/iconly/Chart.svg" style="width: 17px;" alt="">
                                            <b>D</b></span>
                                        <span class="pcoded-mtext">Bahan Baku Keluar</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                             <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="requestbarang.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                            <img src="assets/iconly/Document2.svg" style="width: 17px;" alt="">
                                            <b>D</b></span>
                                        <span class="pcoded-mtext">Request Barang</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="requestbahanbaku.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                            <img src="assets/iconly/Document2.svg" style="width: 17px;" alt="">
                                            <b>D</b></span>
                                        <span class="pcoded-mtext">Request Bahan Baku</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="permintaanpembelian.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                            <img src="assets/iconly/Document2.svg" style="width: 17px;" alt="">
                                            <b>D</b></span>
                                        <span class="pcoded-mtext">Permintaan Pembelian</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="laporan.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                            <img src="assets/iconly/Chatbubble.svg" style="width: 17px;" alt="">
                                            <b>D</b></span>
                                        <span class="pcoded-mtext">Laporan</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header" style="height: 100px; ">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10" style="color: black;">Dashboard Inventory 
                                                <span style="font-size: 12px; font-weight: 500; border-radius: 50px; background-color: rgb(253, 253, 119); padding: 5px 10px; color: red;">
                                                    Staff Inventory
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div> -->
                                    <div class="col-md-4">
                                        <form class="form-material">
                                            <div class="form-group form-primary">
                                                <input type="text" name="footer-email" class="form-control"  style=" border-radius: 5px; border-color: rgb(224, 222, 222); box-shadow: 3px 3px 6px rgb(236, 236, 236);">
                                                <span class="form-bar"></span>
                                                <label class="float-label" style="margin-left: 15px; color: rgb(199, 194, 194);"><i class="fa fa-search m-r-10" style="color: black;"></i>
                                                    Search 
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                             <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- Material statustic card start -->
                                            <div class="col-xl-6 col-md-12">
                                                <div class="card mat-stat-card ">
                                                    <div class="card-block ">
                                                        <div class="row">
                                                            <div class="col-12 p-b-20 p-t-20" style="height: 130px; ">
                                                                <div class="row" style="align-items: center;">
                                                                    <div class="col-9 p-l-0 pl-4" >
                                                                        <h6>Stock Barang Jadi</h6>
                                                                        <h6 class="m-b-30 f-w-700"><?= number_format($stock, 0, ',', '.') ?> dari 5.000</h6>
                                                                        <div class="progress">
                                                                    <div class="progress bg-c-red" style="width:<?= $persen1 ?>%"></div>
                                                                </div>
                                                            </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-12">
                                                <div class="card mat-stat-card ">
                                                    <div class="card-block ">
                                                        <div class="row">
                                                            <div class="col-12 p-b-20 p-t-20" style="height: 130px; ">
                                                                <div class="row" style="align-items: center;">
                                                                    <div class="col-9 p-l-0 pl-4" >
                                                                        <h6>Stock Bahan Baku</h5>
                                                                        <h6 class="m-b-30 f-w-700"><?= number_format($stok, 0, ',', '.') ?> dari 5.000</h6>
                                                                        <div class="progress">
                                                                    <div class="progress bg-c-blue" style="width:<?= $persen2 ?>%"></div>
                                                                </div>
                                                            </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xl-4 col-md-12">
                                                <div class="card mat-clr-stat-card text-white green ">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-3 text-center bg-c-green">
                                                                <i class="fas fa-star mat-icon f-24"></i>
                                                            </div>
                                                            <div class="col-9 cst-cont">
                                                                <h5>4000+</h5>
                                                                <p class="m-b-0">Ratings Received</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mat-clr-stat-card text-white blue">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-3 text-center bg-c-blue">
                                                                <i class="fas fa-trophy mat-icon f-24"></i>
                                                            </div>
                                                            <div class="col-9 cst-cont">
                                                                <h5>17</h5>
                                                                <p class="m-b-0">Achievements</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- Material statustic card end -->
                                            <!-- order-visitor start -->


                                            <!-- order-visitor end -->

                                            <!--  sale analytics start -->
                                            <div class="col-xl-12 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Stock Barang</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover m-b-0 without-header" >
                                                                <tbody>
                                                                    <tr class="col-12">
                                                                        <td style="background-color: rgb(236, 236, 236);">
                                                                            <div class="d-inline-block f-w-700" style="width: 10%">
                                                                                <h6>
                                                                                    No
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            <div class="d-inline-block f-w-700 " style="width: 30%">
                                                                                <h6>
                                                                                    Nama Barang
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            <div class="d-inline-block f-w-700 " style="width: 30%">
                                                                                <h6>
                                                                                    Deskripsi
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            <div class="d-inline-block f-w-700 " style="width: 25%">
                                                                                <h6>
                                                                                    Stock
                                                                                </h6>
                                                                            </div>  
                                                                    </tr>
                                                                     <?php
                                                                         $no = 1;
                                                                         $tampil = mysqli_query($conn, "SELECT * from barang");
                                                                         while($data = mysqli_fetch_array($tampil)):                           
                                                                    ?> 
                                                                    <tr class="col-12">
                                                                        <td>
                                                                            <div class="d-inline-block f-w-700" style="width: 10%">
                                                                                <h6>
                                                                                <?=$no++;?>
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            <div class="d-inline-block f-w-700 " style="width: 30%">
                                                                                <h6>
                                                                                <?=$data['namabarang']?>
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            <div class="d-inline-block f-w-700 " style="width: 30%">
                                                                                <h6>
                                                                                <?=$data['deskripsi']?>
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            </div>   
                                                                            <div class="d-inline-block f-w-700 " style="width: 25%">
                                                                                <h6>
                                                                                <?=$data['stock']?>
                                                                                </h6>
                                                                            </div>  
                                                                    </tr>
                                                                    <?php endwhile;?>

                                                                    <!-- <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                <div class="d-inline-block">
                                                                                    <h6>James Alexander</h6>
                                                                                    <p class="text-muted m-b-0">Sales executive , EL</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <h6 class="f-w-700">$89.051<i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                <div class="d-inline-block">
                                                                                    <h6>Shirley Hoe</h6>
                                                                                    <p class="text-muted m-b-0">Sales executive , NY</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <h6 class="f-w-700">$89.051<i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                <div class="d-inline-block">
                                                                                    <h6>Nick Xander</h6>
                                                                                    <p class="text-muted m-b-0">Sales executive , EL</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <h6 class="f-w-700">$89.051<i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                                        </td>
                                                                    </tr> -->

                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Stock Bahan Baku</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover m-b-0 without-header" >
                                                                <tbody>
                                                                    <tr class="col-12">
                                                                        <td style="background-color: rgb(236, 236, 236);">
                                                                            <div class="d-inline-block f-w-700" style="width: 10%">
                                                                                <h6>
                                                                                    No
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            <div class="d-inline-block f-w-700 " style="width: 30%">
                                                                                <h6>
                                                                                    Nama Bahan Baku
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            <div class="d-inline-block f-w-700 " style="width: 30%">
                                                                                <h6>
                                                                                    Stock
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            <div class="d-inline-block f-w-700 " style="width: 25%">
                                                                                <h6>
                                                                                    Satuan
                                                                                </h6>
                                                                            </div>   
                                                                    </tr>
                                                                     <?php
                                                                         $no = 1;
                                                                         $tampil = mysqli_query($conn, "SELECT * from bahanbaku");
                                                                         while($data = mysqli_fetch_array($tampil)):                           
                                                                    ?> 
                                                                    <tr class="col-12">
                                                                        <td>
                                                                            <div class="d-inline-block f-w-700" style="width: 10%">
                                                                                <h6>
                                                                                <?=$no++;?>
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            <div class="d-inline-block f-w-700 " style="width: 30%">
                                                                                <h6>
                                                                                <?=$data['namabahanbaku']?>
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            <div class="d-inline-block f-w-700 " style="width: 30%">
                                                                                <h6>
                                                                                <?=$data['stock']?>
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            </div>   
                                                                           <div class="d-inline-block f-w-700 " style="width: 25%">
                                                                                <h6>
                                                                                <?=$data['deskripsi']?>
                                                                                </h6>
                                                                            </div>  
                                                                    </tr>
                                                                    <?php endwhile;?>
                                                                    <!-- <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                <div class="d-inline-block">
                                                                                    <h6>James Alexander</h6>
                                                                                    <p class="text-muted m-b-0">Sales executive , EL</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <h6 class="f-w-700">$89.051<i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                <div class="d-inline-block">
                                                                                    <h6>Shirley Hoe</h6>
                                                                                    <p class="text-muted m-b-0">Sales executive , NY</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <h6 class="f-w-700">$89.051<i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                <div class="d-inline-block">
                                                                                    <h6>Nick Xander</h6>
                                                                                    <p class="text-muted m-b-0">Sales executive , EL</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <h6 class="f-w-700">$89.051<i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                                        </td>
                                                                    </tr> -->

                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xl-6 col-md-12">
                                                <div class="row">          

                                                    <div class="col-md-6">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Total Subscription</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>7652</h4>
                                                                <p class="m-b-0">48% From Last 24 Hours</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Order Status</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>6325</h4>
                                                                <p class="m-b-0">36% From Last 6 Months</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card bg-c-red total-card">
                                                            <div class="card-block">
                                                                <div class="text-left">
                                                                    <h4>489</h4>
                                                                    <p class="m-0">Total Comment</p>
                                                                </div>
                                                                <span class="label bg-c-red value-badges">15%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card bg-c-green total-card">
                                                            <div class="card-block">
                                                                <div class="text-left">
                                                                    <h4>$5782</h4>
                                                                    <p class="m-0">Income Status</p>
                                                                </div>
                                                                <span class="label bg-c-green value-badges">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Unique Visitors</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>652</h4>
                                                                <p class="m-b-0">36% From Last 6 Months</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Monthly Earnings</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>5963</h4>
                                                                <p class="m-b-0">36% From Last 6 Months</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-12">
                                                <div class="card proj-progress-card">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Published Project</h6>
                                                                <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+1.69%</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-red" style="width:25%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Completed Task</h6>
                                                                <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-blue" style="width:65%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Successfull Task</h6>
                                                                <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-green" style="width:85%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Ongoing Project</h6>
                                                                <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">+0.35%</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- slimscroll js -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="assets/js/script.js "></script>

</body>

</html>
