<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Detail Buku</h1><br>
        <div class="card" style="max-width: 1300px; background-color: #b5e3ff">
            <div class="row" style="max-width: 1300px;">
                <div class="col-md-4">
                <img src="/img/<?= $buku['cover']?>" class="img-fluid rounded-start" alt="cover buku">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <hr style="color: #bababa"><br>
                    <h2 class="card-text"><?= $buku['nama_buku'] ?></h2>
                    <p style="color: #828282"><small>
                    Deskripsi : <?= $buku['deskripsi_buku'] ?><br>
                    Penulis : <?= $buku['penulis'] ?><br>
                    Penerbit : <?= $buku['penerbit'] ?><br>
                    Genre : <?= $buku['genre'] ?><br>
                    Harga : Rp.<?= $buku['harga_buku'] ?>
                    </small>
                    </p>
                    
                    <a href="/about" class="btn btn-warning"> <i class="fas fa-shopping-cart"></i> Beli Buku </a>
                    
                </div>
                </div>
            </div>
        </div>
        <div align="right"><a href="/catalog" class="btn btn-info"> Kembali </a></div><br>
        </div>
    </div><br>
</div>

<br><br><br><br>
<nav class="navbar bottom justify-content-center navbar-light" style="background-color: #F0F8FF;">      
<a class="navbar-brand" href="#">    
<h6 align="center" style="color: black">Created by</h6>  
<h6 align="center" style="color: #000080">
Ummu Qaltsum<br> 
Maghviraturreimadhiney<br>
Vadella Nikita Ayumi<br>
Cindy<br></h6></a>
</nav>

<?= $this->endSection(); ?>