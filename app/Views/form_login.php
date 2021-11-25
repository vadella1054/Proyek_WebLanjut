<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Working Signin form Responsive Widget Template :: W3layouts</title>
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
                    <h1><a class="brand-logo"><span>Toko Buku</span> Kyndera</a></h1>
                    <!-- if logo is image enable this   
                        <a class="brand-logo" href="#index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                </div>
                <div class="workinghny-block-grid">
                    <div class="workinghny-left-img align-end">
                    <img src="/assets/images/1.png" style="opacity: 1">
                    </div>

   <div class="container">
      <div class="row">
         <div class="col-md-4 mx-auto pt-5">
            <form method="POST" action="<?= base_url('login/login_action'); ?>">
               <div class="form-group">
                  <label for="username">Username</label>
                  <input type="username" name="username" class="form-control" id="username" aria-describedby="usernameHelp">
                  <small id="usernameHelp" class="form-text text-muted">Masukkan username yang telah terdaftar.</small>
               </div>
               <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
               </div>
               <button type="submit" class="btn btn-style mt-3">Login</button>
            </form>
            <p>
               <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                  <div class="alert alert-warning">
                     <?php echo session()->getFlashdata('gagal') ?>
                  </div>
               <?php } ?>
            </p>
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