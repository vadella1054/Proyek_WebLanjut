<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
    
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Toko Buku Kylera</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/adminlte/dist/img/avatar3.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/buku" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/buku/catalog" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Catalog
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Buku</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                Form Tambah Data
            </div>
            <div class="card-body">
              <form action="/buku/store" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="nama_buku">Nama Buku</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_buku')) ? 'is-invalid' : ''; ?>" id="nama_buku" name="nama_buku" value="<?= old('nama_buku'); ?>">
                                <?php if ($validation->hasError('nama_buku')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("nama_buku"); ?>
                                  </div>
                                <?php endif; ?>         
                            </div>

                            <div class="form-group">
                                <label for="penulis">Penulis</label>
                                <input type="text" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
                                <?php if ($validation->hasError('penulis')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("penulis"); ?>
                                  </div>
                                <?php endif; ?>         
                            </div>

                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <input type="text" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
                                <?php if ($validation->hasError('penerbit')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("penerbit"); ?>
                                  </div>
                                <?php endif; ?>         
                            </div>

                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <input type="text" class="form-control <?= ($validation->hasError('genre')) ? 'is-invalid' : ''; ?>" id="genre" name="genre" value="<?= old('genre'); ?>">
                                <?php if ($validation->hasError('genre')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("genre"); ?>
                                  </div>
                                <?php endif; ?>         
                            </div>

                            <div class="form-group">
                                <label for="deskripsi_buku">Deskripsi Buku</label>
                                <input type="text" class="form-control <?= ($validation->hasError('deskripsi_buku')) ? 'is-invalid' : ''; ?>" id="deskripsi_buku" name="deskripsi_buku" value="<?= old('deskripsi_buku'); ?>">
                                <?php if ($validation->hasError('deskripsi_buku')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("deskripsi_buku"); ?>
                                  </div>
                                <?php endif; ?>         
                            </div>
                            <div class="form-group">
                                <label for="harga_buku">Harga Buku</label>
                                <input type="text" class="form-control <?= ($validation->hasError('harga_buku')) ? 'is-invalid' : ''; ?>" id="harga_buku" name="harga_buku" value="<?= old('harga_buku'); ?>">
                                <?php if ($validation->hasError('harga_buku')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("harga_buku"); ?>
                                  </div>
                                <?php endif; ?>         
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Simpan
                            </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?= $this->endSection(); ?>
