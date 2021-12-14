<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F0F8FF;">
  <div class="container">
    <a class="navbar-brand" href="#" style="color: #000080">
      <img src="/assets/images/rqs.jpg" alt="logo" width="70" class="img-thumbnail rounded-circle">
      Toko Buku Kylera</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == '' ? 'active' : '' ?> " aria-current="page" href="/" style="color: #000080">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'catalog' ? 'active' : '' ?> " href="/catalog" style="color: #000080">Catalog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'about' ? 'active' : '' ?> " href="/about" style="color: #000080">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>