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
              <li class="breadcrumb-item active">Form Tambah Data</li>
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
                Form Edit Data
            <div class="card-body">
              <form action="/buku/update/<?=$post['id_buku'];?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="coverLama" value="<?= $post['cover'];?>">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="nama_buku">Judul Buku</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_buku')) ? 'is-invalid' : ''; ?>" id="nama_buku" name="nama_buku" value="<?= (old('nama_buku')) ? old('nama_buku') : $post['nama_buku'];?>">
                                <?php if ($validation->hasError('nama_buku')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("nama_buku"); ?>
                                  </div>
                                <?php endif; ?>         
                            </div>

                            <div class="form-group">
                            <label for="deskripsi_buku">Deskripsi Buku</label>
                                <input type="text" class="form-control <?= ($validation->hasError('deskripsi_buku')) ? 'is-invalid' : ''; ?>" id="deskripsi_buku" name="deskripsi_buku" value="<?= (old('deskripsi_buku')) ? old('deskripsi_buku') : $post['deskripsi_buku'];?>">
                                <?php if ($validation->hasError('deskripsi_buku')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("deskripsi_buku"); ?>
                                  </div>
                                <?php endif; ?>         
                            </div>

                            <div class="form-group">
                                <label for="penulis">Penulis</label>
                                <input type="text" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" name="penulis" value="<?= (old('penulis')) ? old('penulis') : $post['penulis'];?>">
                                <?php if ($validation->hasError('penulis')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("penulis"); ?>
                                  </div>
                                <?php endif; ?>         
                            </div>

                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <input type="text" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" id="penerbit" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $post['penerbit'];?>">
                                <?php if ($validation->hasError('penerbit')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("penerbit"); ?>
                                  </div>
                                <?php endif; ?>         
                            </div>

                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <select type="text" class="form-control <?= ($validation->hasError('genre')) ? 'is-invalid' : ''; ?>" id="genre" name="genre" value="<?= (old('genre')) ? old('genre') : $post['genre']; ?>">
                                <option selected><?= (old('genre')) ? old('genre') : $post['genre']; ?></option>
                                <option>Novel</option>
                                <option>Buku Anak-anak</option>
                                <option>Komik</option>
                                <option>Fiksi</option>
                                <option>Non-Fiksi</option>
                                <option>Sastra</option>
                                <option>Horror</option>
                                </select>
                                <?php if ($validation->hasError('genre')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("genre"); ?>
                                  </div>
                                <?php endif; ?>         
                            </div>

                            <div class="form-group">
                                <label for="status">Status Barang</label>
                                <select class="form-control <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" id="status" name="status" value="<?= (old('status')) ? old('status') : $post['status']; ?>">
                                <option selected><?= (old('status')) ? old('status') : $post['status']; ?></option>
                                <option>Ready Stok</option>
                                <option>Pre-Order</option>
                                <option>SOLD OUT</option>
                                </select>
                                <?php if ($validation->hasError('status')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("status"); ?>
                                  </div>
                                <?php endif; ?>         
                            </div>
                            <div class="form-group">
                                <label for="harga_buku">Harga Buku</label>
                                <input type="text" class="form-control <?= ($validation->hasError('harga_buku')) ? 'is-invalid' : ''; ?>" id="harga_buku" name="harga_buku" value="<?= (old('harga_buku'))  ? old('harga_buku') : $post['harga_buku'];?>">
                                <?php if ($validation->hasError('harga_buku')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("harga_buku"); ?>
                                  </div>
                                <?php endif; ?>         
                            </div>
                            <div class="form-group">
                            <label for="cover">Cover Buku</label>
                            <!-- <div><img src="/img/default.png" class="img-thumbnail"></div> -->
                                <div class="custom-file">
                                  <input type="file" id="cover" name="cover" class="custom-file-input <?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>">
                                  <?php if ($validation->hasError('cover')) : ?>
                                    <div class="invalid-feedback">
                                      <?= $validation->getError("cover"); ?>
                                    </div>
                                  <?php endif; ?>   
                                  <label for="cover" class="custom-file-label"><?=$post['cover']; ?></label>
                                </div>      
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Edit data
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
