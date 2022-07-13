<?php
session_start();
require('functions.php');
$halaman_sekarang = "Tambah Minuman";
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
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Menu Minuman</h6>
                        </div>
                        <div class="card-body">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Nama Menu</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="menu">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Harga Menu</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="harga">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Status Menu</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="status">
                                            <option value="Tersedia">Tersedia</option>
                                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Upload Gambar</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="gambar">
                                    </div>
                                </div>
                                <div class="row mb-0 mt-4">
                                    <div class="col-sm-10">
                                        <button class="btn btn-primary" type="submit" name="tambah-menu-minuman">Tambah Menu</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Menu Minuman</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Menu</th>
                                            <th>Gambar</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($get_table_menu_minuman as $row_data_minuman) { ?>
                                            <tr>
                                                <td class="col-lg-2 col-md-2"><?php echo $row_data_minuman['nama_minuman']; ?></td>
                                                <td class="col-lg-3 col-md-3"><img width="382px" height="215px" style="width: 100% ;" src="img/menu/minuman/<?php echo $row_data_minuman['nama_gambar_minuman']; ?>"></td>
                                                <td class="col-lg-1 col-md-1"><?php echo "Rp " . number_format($row_data_minuman['harga_minuman'], 0, ",", "."); ?></td>
                                                <td>
                                                    <?php if ($row_data_minuman['status_minuman'] == "Tersedia") { ?>
                                                        <p class="text-center mt-0 mb-0 bg-success text-white"><?php echo $row_data_minuman['status_minuman']; ?></p>
                                                    <?php } else { ?>
                                                        <p class="text-center mt-0 mb-0 bg-danger text-white"><?php echo $row_data_minuman['status_minuman']; ?></p>
                                                    <?php } ?>
                                                </td>
                                                <td class="col-lg-1 col-md-1"><a href="?editminuman=<?php echo $row_data_minuman['id_minuman']; ?>" class="btn btn-sm btn-primary">Edit</a> <a href="?hapusminuman=<?php echo $row_data_minuman['id_minuman']; ?>" class="btn btn-sm btn-danger">Hapus</a></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include('template/footer.php'); ?>

</body>

</html>