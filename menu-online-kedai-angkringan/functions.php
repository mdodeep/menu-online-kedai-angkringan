<?php
require('config.php');

/* Fungsi Time Zone */
date_default_timezone_set('Asia/Jakarta');

/* Start Get Table data_user */
$ambil_id_user = isset($_SESSION['login']);
$get_table_data_user = mysqli_query($conn, "SELECT * FROM pengguna WHERE id_pengguna='$ambil_id_user'");
$get_field_data_user = mysqli_fetch_assoc($get_table_data_user);
/* End Get Table data_user */

/* Start Get Table menu_makanan */
$get_table_menu_makanan = mysqli_query($conn, "SELECT * FROM menu_makanan");
$get_field_menu_makanan = mysqli_fetch_assoc($get_table_menu_makanan);
/* End Get Table menu_makanan */

/* Start Get Table menu_minuman */
$get_table_menu_minuman = mysqli_query($conn, "SELECT * FROM menu_minuman");
$get_field_menu_minuman = mysqli_fetch_assoc($get_table_menu_minuman);
/* End Get Table menu_minuman */

/* Start Get Table menu_minuman */
$get_table_pengaturan = mysqli_query($conn, "SELECT * FROM pengaturan");
$get_field_pengaturan = mysqli_fetch_assoc($get_table_pengaturan);
/* End Get Table menu_minuman */



/* Fungsi Tambah Menu Makanan */
if (isset($_POST['tambah-menu-makanan'])) {
    if ($_FILES["gambar"]["name"] != '') // check file sudah dipilih atau belum
    {
        $allowed_ext = array("jpg", "jpeg", "png"); // extension file yang di ijinkan
        $ext_1 = explode('.', $_FILES["gambar"]["name"]); // upload file ext
        $ext = end($ext_1);

        if (in_array($ext, $allowed_ext)) // check untuk validextension extension
        {
            if ($_FILES["gambar"]["size"] < 1000000) // check ukuran gambar sesuai tidak
            {
                $nama_menu = $_POST['menu'];
                $harga_menu = $_POST['harga'];
                $status_menu = $_POST['status'];
                $name = strtolower(str_replace(' ', '-', trim($nama_menu))) . '.' . $ext; // rename nama file gambar
                $path = "img/menu/makanan/" . $name; // image upload path
                move_uploaded_file($_FILES["gambar"]["tmp_name"], $path);
                mysqli_query($conn, "INSERT INTO menu_makanan VALUES ('','$nama_menu','$harga_menu','$status_menu','$name')");
                echo "<script> location.replace('tambah-makanan.php'); </script>";
            } else {
                echo '<script>alert("Ukuran Gambar Terlalu Besar")</script>';
            }
        } else {
            echo '<script>alert("Tidak Sesuai Image File")</script>';
        }
    }
}
/* Fungsi Tambah Menu Makanan */

/* Fungsi Tambah Menu Minuman */
if (isset($_POST['tambah-menu-minuman'])) {
    if ($_FILES["gambar"]["name"] != '') // check file sudah dipilih atau belum
    {
        $allowed_ext = array("jpg", "jpeg", "png"); // extension file yang di ijinkan
        $ext_1 = explode('.', $_FILES["gambar"]["name"]); // upload file ext
        $ext = end($ext_1);

        if (in_array($ext, $allowed_ext)) // check untuk validextension extension
        {
            if ($_FILES["gambar"]["size"] < 1000000) // check ukuran gambar sesuai tidak
            {
                $nama_menu = $_POST['menu'];
                $harga_menu = $_POST['harga'];
                $status_menu = $_POST['status'];
                $name = strtolower(str_replace(' ', '-', trim($nama_menu))) . '.' . $ext; // rename nama file gambar
                $path = "img/menu/minuman/" . $name; // image upload path
                move_uploaded_file($_FILES["gambar"]["tmp_name"], $path);
                mysqli_query($conn, "INSERT INTO menu_minuman VALUES ('','$nama_menu','$harga_menu','$status_menu','$name')");
                echo "<script> location.replace('tambah-minuman.php'); </script>";
            } else {
                echo '<script>alert("Ukuran Gambar Terlalu Besar")</script>';
            }
        } else {
            echo '<script>alert("Tidak Sesuai Image File")</script>';
        }
    }
}
/* Fungsi Tambah Menu Minuman */

/* Fungsi Pengaturan*/
if (isset($_POST['pengaturan'])) {
    $nama_kedai = strtoupper($_POST['nama-kedai']);
    mysqli_query($conn, "UPDATE pengaturan SET nama_kedai='$nama_kedai'");
    echo '<script>alert("Nama Kedai / Nama Aplikasi Telah Diubah")</script>';
    echo "<script> location.replace('pengaturan.php'); </script>";
}
/* Fungsi Pengaturan*/