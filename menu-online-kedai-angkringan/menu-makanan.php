<?php
session_start();
require('functions.php');
$halaman_sekarang = "Menu Makanan";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $get_field_pengaturan['nama_kedai']; ?> | <?php echo $halaman_sekarang; ?></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('template/sidebar.php'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('template/topbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h1 class="h3 mb-4 text-gray-800 text-center">Menu Makanan</h1>

                    <div class="row">
                        <?php foreach ($get_table_menu_makanan as $row_data_makanan) { ?>
                            <div class="col-lg-3 col-md-3">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary text-center"><?php echo $row_data_makanan['nama_makanan']; ?></h6>
                                    </div>
                                    <div class="card-body">
                                        <img width="382px" height="215px" style="width: 100% ;" src="img/menu/makanan/<?php echo $row_data_makanan['nama_gambar_makanan']; ?>">
                                        <h5 class="text-center mt-3 mb-0"><?php echo "Rp " . number_format($row_data_makanan['harga_makanan'], 0, ",", "."); ?></h5>
                                        <?php if ($row_data_makanan['status_makanan'] == "Tersedia") { ?>
                                            <p class="text-center mt-3 mb-0 bg-success text-white"><?php echo $row_data_makanan['status_makanan']; ?></p>
                                        <?php } else { ?>
                                            <p class="text-center mt-3 mb-0 bg-danger text-white"><?php echo $row_data_makanan['status_makanan']; ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include('template/footer.php'); ?>

</body>

</html>