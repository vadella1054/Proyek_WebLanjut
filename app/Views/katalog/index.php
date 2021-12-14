<div class="container mt-3">
  <div class="text-center">
  <h1 style="color: #000080"> Catalog </h1>
</div>
<br>

<!-- <form action="" method="post">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Masukkan keyword pencarian" name="keyword">
        <div class="input-group=append">
            <button class="btn btn-outline-primary" style="background-color: #F0F8FF;" type="submit" name="submit">Cari</button>
        </div>
    </div>
</form> -->

<div class="row mb-4">
<?php foreach ($buku as $k => $katalog) : ?>
      <div class="col-md-4 mb-3">
          <div class="card-body">
              <div class="card mb-3" style="max-width: 540px;">
                  <img src="/img/<?= $katalog['cover'];?>" class="img-fluid rounded-start" alt="...">
                  <div class="card-body">
                  <h5 class="card-title"><?= $katalog['nama_buku'] ?></h5>
                  <p class="card-text">Rp.<?= $katalog['harga_buku'] ?><br>
                  <small style="color: #828282"><?= $katalog['status'] ?></small></p>
                  <a href="/catalog/<?= $katalog['id_buku'];?>">
                  <p class="card-text"><small class="text-muted">Lihat Detail</small></p>
                  </a>
              </div>
          </div>
        </div>
      </div>
<?php endforeach; ?>
</div>
</div>
<br><br>    
