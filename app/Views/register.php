<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Form Register</title>
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
                    <h1><a class="brand-logo"><span>Toko Buku</span> Kylera</a></h1>
                </div>
                <div class="workinghny-block-grid">
                    <div class="workinghny-left-img align-center">
                    <img src="/assets/images/1.png" style="opacity: 1">
                    <?php if(isset($validation)):?>
                        <div align="center" style="color: #FF0000;"><?= $validation->listErrors() ?></div>
                    <?php endif;?> 
                </div>

         <div class="container">
            <div class="row">
               <div class="col-md-4 mx-auto pt-5">

                    <br><br>
                    <form action="/register/save" method="post">
                    <?= form_open('', ['class' => 'user']); ?>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                     <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="usernameHelp">
                     </div>
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" id="password">
                     </div>
                     <div class="form-group">
                        <label for="confpassword">Confirm Password</label>
                        <input type="text" name="confpassword" class="form-control" id="confpassword">
                     </div>
                     <button type="submit" class="btn btn-style mt-3">Sign Up</button>
                  </form>
                  <br><br>
                  <div class="text-center mt-4">
                        <a class="small" href="<?= base_url('/login') ?>">Sudah punya akun? Login</a>
                    </div>
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