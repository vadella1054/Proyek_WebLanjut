<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->

<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Form Login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Working Signin form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- //Meta tag Keywords -->
	<link href="//fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
	<!--/Style-CSS -->
	<link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>" />
	<!--//Style-CSS -->
</head>

<body>

	 <!-- form section start -->
	 <section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid"> 
            <div class="wrapper">
                <div class="logo">
                    <h1><a class="brand-logo"><span>Toko Buku</span> Kylera</a></h1><br><br>
                    <!-- if logo is image enable this   
                        <a class="brand-logo" href="#index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                </div>
                  <div class="workinghny-block-grid">
                    <div class="workinghny-left-img align-end">
                    <!-- <center><a href="/" class="btn btn-style mt-3">Kembali ke Home</a></center> -->
                    <?php if(isset($validation)):?>
                        <div align="center" style="color: #FF0000;"><?= $validation->listErrors() ?></div>
                    <?php endif;?>
                     <?php if (session()->getFlashdata('pesan')) : ?>
                        <div align="center" style="color: red">
                           <?= session()->getFlashdata('pesan'); ?>
                        </div>
                     <?php endif; ?>
                     <?php if (session()->getFlashdata('success')) : ?>
                        <div align="center" style="color: green">
                           <?= session()->getFlashdata('success'); ?>
                        </div>
                     <?php endif; ?>
                     <img src="/assets/images/1.png" style="opacity: 1">
                  </div>

         <div class="container">
         <h3 align="center">Silakan Login</h3>
            <div class="row">
               <div class="col-md-4 mx-auto pt-5">
                     <br><br>
                     <form action="/login/auth" method="post">
                     
                     <?= form_open('', ['class' => 'user']); ?>
                     <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username">
                     </div>
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                     </div>
                     <button type="submit" class="btn btn-style mt-3">Login</button>
                  <br><br>
                  <br>
                  <!-- <div align="center"><a href="/" class="btn btn-style mt-3">Kembali ke Home</a></div> -->
                  <div align="center"><a href="/">Kembali ke Home</a></div>
                  <?= form_close(); ?>
               </div>
            </div>
         </div>

        <!-- //form -->
        <!-- copyright-->
        <div class="copyright text-center">
            <div class="wrapper">
                <p class="copy-footer-29">© 2020 Working Sign In. All rights reserved | Design by <a
                        href="https://w3layouts.com">W3layouts</a></p>
            </div>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->

</body>

</html>