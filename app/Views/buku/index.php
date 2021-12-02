<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

   <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/about" class="nav-link">About</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('login/logout'); ?>" class="nav-link" onclick="return confirm('Apakah Anda yakin ?');">Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/assets/images/rqs.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
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

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/buku/index" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Data Buku
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/catalog" class="nav-link">
              <i class="nav-icon fas fa-stream"></i>
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
              <li class="breadcrumb-item active">Data Buku</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
    <?php if (session()->getFlashdata('success')) : ?>
        <div align="center" class="alert alert-success" role="alert">
          <?= session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>
      <div class="container-fluid">
        <a href="/buku/create" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
        <div class="row">
          <div class="col-6">
            <br>
            <br>
            <h4 class = "mt-2">Daftar Buku</h4>
            <form action="" method="post">
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukkan keyword pencarian .." name="keyword">
            <div class="input-group=append">
            <button class="btn btn-outline-primary" type="submit" name="submit">Cari</button>
            </div>
            </div>
            </form>
            </div>
          </div>
          <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped text-center">
              <thead>
                <tr>
                <th scope="col">No.</h>
                  <th width="150px"scope="col">Judul Buku</h>
                  <th width="150px"scope="col">Penulis</h>
                  <th width="150px"scope="col">Penerbit</h>
                  <th scope="col">Genre</h>
                  <th width="300px" scope="col">Deskripsi Buku</h>
                  <th width="100px" scope="col">Harga Buku</h>
                  <th scope="col">Aksi</h>
                </tr>
              </thead>
              <tbody>
              <?php $i = 1 + (4 * ($currentPage - 1)); ?>
              <?php foreach ($buku as $post) : ?>
                  <tr>
                  <th scope="row"><?= $i++; ?></th>
                  <td><?= $post['nama_buku'] ?></td>
                  <td><?= $post['penulis'] ?></td>
                  <td><?= $post['penerbit'] ?></td>
                  <td><?= $post['genre'] ?></td>
                  <td><?= $post['deskripsi_buku'] ?></td>
                  <td><?= $post['harga_buku'] ?></td>
                  <td>
                  <a href="/buku/edit/<?= $post['id_buku']; ?>" class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i> Edit</a>
                  <form action="/buku/<?= $post['id_buku']; ?>" method="post" class="d-inline">
                      <?= csrf_field(); ?>
                      <input type="hidden" name="_method" value="delete">
                      <button type="submit" class="btn btn-sm btn-danger me-1" onclick="return confirm('Apakah Anda yakin ingin menghapus?');" style="color: #000000"><i class="fas fa-trash"></i> Hapus</button>
                      </form>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <?= $pager->links('buku', 'buku_pagination') ?>
          </div>
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