<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $get_field_pengaturan['nama_kedai']; ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <li class="nav-item">
        <a class="nav-link" href="menu-makanan.php">
            <i class="fas fa-utensils"></i>
            <span>Makanan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="menu-minuman.php">
            <i class="fas fa-glass-cheers"></i>
            <span>Minuman</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <?php
    if (isset($_SESSION['login'])) {
    ?>
        <!-- Heading -->
        <div class="sidebar-heading">
            Menu Admin
        </div>

        <li class="nav-item">
            <a class="nav-link" href="pengaturan.php">
                <i class="fas fa-cog"></i>
                <span>Pengaturan Aplikasi</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="tambah-makanan.php">
                <i class="fas fa-plus"></i><i class="fas fa-utensils"></i>
                <span>Tambah Menu Makanan</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="tambah-minuman.php">
                <i class="fas fa-plus"></i><i class="fas fa-glass-cheers"></i>
                <span>Tambah Menu Minuman</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    <?php } ?>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->