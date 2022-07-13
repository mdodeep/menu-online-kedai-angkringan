<?php
session_start();
require('functions.php');
$halaman_sekarang = "Pengaturan";
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

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pengaturan Aplikasi</h6>
                        </div>
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Nama Kedai / Nama Aplikasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama-kedai" value="<?php echo $get_field_pengaturan['nama_kedai']; ?>">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" name="pengaturan">Konfirmasi</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include('template/footer.php'); ?>

</body>

</html>