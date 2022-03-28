<?php  
require "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dea Cake & Bakery</title>
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

<body style="background-color: #a83338">
    <!-- Pre-loader start -->
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <!-- Stok Bahan Baku Start -->
                        <div class="col-xl-12 col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>Laporan Bahan Baku Masuk</h5>

                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0 without-header">
                                                <tbody>
                                                    <tr class="col-12">
                                                        <td style="background-color: rgb(236, 236, 236);">
                                                            <div class="d-inline-block f-w-700" style="width: 10%">
                                                                <h6>
                                                                    No
                                                                </h6>
                                                            </div>

                                                            <div class="d-inline-block f-w-700 " style="width: 20%">
                                                                <h6>
                                                                    Tanggal
                                                                </h6>
                                                            </div>

                                                            <div class="d-inline-block f-w-700 " style="width: 25%">
                                                                <h6>
                                                                    Nama Bahan Baku
                                                                </h6>
                                                            </div>

                                                            <div class="d-inline-block f-w-700 " style="width: 15%">
                                                                <h6>
                                                                    Jumlah
                                                                </h6>
                                                            </div>
                                                            <div class="d-inline-block f-w-700 " style="width: 20%">
                                                                <h6>
                                                                    Penerima
                                                                </h6>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $no = 1;
                                                    $tampil = mysqli_query($conn, "select * from bahanbakukeluar k, bahanbaku b where k.idbahanbaku = b.idbahanbaku");
                                                    while($data = mysqli_fetch_array($tampil)):                           
                                                    ?> 
                                                        <tr class="col-12">
                                                                        <td>
                                                                            <div class="d-inline-block f-w-700" style="width: 10%">
                                                                                <h6>
                                                                                <?=$no++;?>
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            <div class="d-inline-block f-w-700 " style="width: 20%">
                                                                                <h6>
                                                                                <?=$data['tanggal']?>
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            <div class="d-inline-block f-w-700 " style="width: 25%">
                                                                                <h6>
                                                                                <?=$data['namabahanbaku']?>
                                                                                </h6>
                                                                            </div>
                                                                            
                                                                            </div>   
                                                                            <div class="d-inline-block f-w-700 " style="width: 15%">
                                                                                <h6>
                                                                                <?=$data['jumlah']?>
                                                                                </h6>
                                                                            </div>
                                                                            <div class="d-inline-block f-w-700 " style="width: 20%">
                                                                                <h6>
                                                                                <?=$data['penerima']?>
                                                                                </h6>
                                                                            </div>
                                                                        </td>   
                                                                    </tr>
                                                    <?php endwhile;?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Stok Bahan Baku End -->
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

    <!-- Required Jquery -->
    <script>
        window.print();
        // document.location.href = 'laporan.php';
    </script>
</body>

</html>