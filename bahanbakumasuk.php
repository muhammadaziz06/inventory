<?php  
require "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bahan Baku Masuk</title>
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
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
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
                        <ul class="nav-right">
                            <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!" style="margin-top: 18px">
                                <i class="ti-menu"></i>
                            </a>
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
                           <ul class="pcoded-item pcoded-left-item">
                                <li>
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
                                <li class="active">
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
                            <!-- <div class="pcoded-navigation-label">UI Element</div> -->
                            
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header" style="height: 100px; ">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10" style="color: black;">Bahan Baku Masuk
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
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- Material statustic card start -->
                                            
                                            <div class="col-xl-12 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Bahan Baku Masuk</h5>
                                                        <div class="card-header-right">
                                                            <!-- <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul> -->
                                                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background-color: #a83338; color: white; border-radius: 5px; margin-top: -10px;">Tambah +

                                                            </button>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="card mb-4">
                                                        
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                    <tr style="background-color: rgb(236, 236, 236);">
                                                        <th>No</th>
                                                        <th>Tanggal</th>
                                                        <th>Nama Bahan Baku</th>
                                                        <th>Jumlah</th>
                                                        <th>Satuan</th>
                                                        <th>Supplier</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                <?php
                                                    $ambilsemuadatabarang = mysqli_query($conn, "select * from bahanbakumasuk m, bahanbaku b where b.idbahanbaku = m.idbahanbaku");
                                                    $i = 1;
                                                    while($data=mysqli_fetch_array($ambilsemuadatabarang)){
                                                            $tanggal = $data['tanggal'];
                                                            $namabahanbaku = $data['namabahanbaku'];
                                                            $jumlah = $data['jumlah'];
                                                            $satuan = $data['satuan'];
                                                            $supplier = $data['supplier'];
                                                            $idb = $data['idbahanbaku'];
                                                            $idm = $data['idbahanbakumasuk'];
                                                        
                                                        ?>
                                                        <tr>
                                                            <td><?=$i++;?></td>
                                                            <td><?=$tanggal;?></td>
                                                            <td><?=$namabahanbaku;?></td>
                                                            <td><?=$jumlah;?></td>
                                                            <td><?=$satuan;?></td>
                                                            <td><?=$supplier;?></td>
                                                            <td>
                                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$idm;?>" >Edit
                                                            </button> 
                                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idm;?>" >Delete
                                                            </button>  
                                                         </td>
                                                        </tr>

                                             <!-- Edit Modal -->
                                    <div class="modal fade" id="edit<?=$idm;?>">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Edit Bahan Baku Masuk</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <form method="post">
                                    <div class="modal-body">
                                        <input type="text" name="supplier" value="<?=$supplier;?>" class="form-control" required>
                                        <br>
                                        <input type="number" name="jumlah" value="<?=$jumlah;?>" class="form-control" required>
                                        <br>
                                        <input type="text" name="satuan" value="<?=$satuan;?>" class="form-control" required>
                                        <br>
                                       <input type="hidden" name="idb" value="<?=$idb;?>">
                                       <input type="hidden" name="idm" value="<?=$idm;?>">
                                        <button type="submit" class="btn btn-primary" name='updatebahanbakumasuk'>Submit</button>
                                    </div>
                                </form>
                                  </div>
                                </div>
                            </div>

                                <!-- Delete Modal -->
                                    <div class="modal fade" id="delete<?=$idm;?>">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Hapus Bahan Baku Masuk</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <form method="post">
                                    <div class="modal-body">
                                    Apakah anda yakin ingin menghapus <?=$namabahanbaku;?>?
                                       <input type="hidden" name="idb" value="<?=$idb;?>">
                                       <input type="hidden" name="jumlah" value="<?=$jumlah;?>">
                                       <input type="hidden" name="idm" value="<?=$idm;?>">
                                        <br>
                                        <br>
                                        <button type="submit" class="btn btn-danger" name='hapusbahanbakumasuk'>Hapus</button>
                                    </div>
                                </form>
                                  </div>
                                </div>
                                                      <?php
                                                        };
                                                      ?>
                                                  
                                                </tbody>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
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

                                     <!-- The Modal -->
                              <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Tambah Bahan Baku Masuk</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <form method="post">
                                    <div class="modal-body">
                                    <select name="bahanbakunya" class="form-control">
                                        <?php 
                                            $ambilsemuadatanya = mysqli_query($conn,"select * from bahanbaku");
                                            while ($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                                                $namabahanbakunya = $fetcharray['namabahanbaku'];
                                                $idbahanbakunya = $fetcharray['idbahanbaku'];
                                        ?>
                                        <option value="<?=$idbahanbakunya;?>"><?=$namabahanbakunya;?></option>
                                        <?php     
                                            }
                                        ?> 
                                    </select>
                                    <br>
                                        <input type="number" name="jumlah" placeholder="Jumlah" class="form-control" required>
                                        <br>
                                        <input type="text" name="satuan" placeholder="Satuan" class="form-control" required>
                                        <br>
                                        <input type="text" name="supplier" placeholder="Supplier" class="form-control" required>
                                        <br>
                                        <button type="submit" class="btn btn-primary" name='bahanbakumasuk'>Submit</button>
                                    </div>
                                </form>
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
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>
