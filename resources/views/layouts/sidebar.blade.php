<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-text mx-5">MINIPOS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{request()->is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-cube"></i>
            <span>Kategori</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-cubes"></i>
            <span>Produk</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-id-card"></i>
            <span>Member</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-truck"></i>
            <span>Suplier</span></a>
    </li>

   


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <div class="sidebar-heading">
        Transaksi
    </div>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-credit-card"></i>
            <span>Pengeluaran</span></a>
    </li>
    <li class="nav-item {{request()->is('pembelian') ? 'active' : '' }}">
        <a class="nav-link" href="/pembelian">
            <i class="fa fa-download"></i>
            <span>Pembelian</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-upload"></i>
            <span>Penjualan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-cart-arrow-down"></i>
            <span>Transaksi Lama</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>Transaksi Baru</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="sidebar-heading">
        REPORT
    </div>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-file"></i>
            <span>Laporan</span></a>
    </li>


    <hr class="sidebar-divider d-none d-md-block">

    <div class="sidebar-heading">
        SYSTEM
    </div>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-users"></i>
            <span>User</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-cogs"></i>
            <span>Pengaturan</span></a>
    </li>


    

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>