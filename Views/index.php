<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url() ?>/swiper-bundle.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/img/Teramalogo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>login</title>
</head>
<body>
 <div class="container"> 
	<div class="row">
	<div class="col-md-4 offset-4">
		<h4>Login</h4>
<form method="post" action="<?= base_url('login')?>" class="form mb-3" autocomplete="off">
<?= csrf_field(); ?>
<?php if(!empty(session()->getFlashdata('fail'))) : ?>
        <div><?= session()->getFlashdata('fail'); ?></div>
        <?php endif ?>
		<label for="">E-mail</label>
	 	<div class="form group">	
		<input type="email" class="form-control" name="mail" placeholder="enter your email" >
		</div>	
		<span class="text-danger text-sm"><?= isset($validation)? display_error($validation,'mail'): '' ?> </span>
			<label for="">Password</label>
			<div class="form group mb-3">
			<input type="password" class="form-control" name="password" placeholder="enter your password" >
			</div>
			<span class="text-danger text-sm"><?= isset($validation)? display_error($validation,'password'): '' ?> </span>
        	<div class="form group mb-3">
	          <input type="submit" class="btn btn-info" name="log" value="login now" class="">
            </div>
	 	</form>
		<br>
		<a href="<?= base_url('registration')?>">haven't an account</a>
		 </div>   
	 	</div>  
		 </div>

    </body>
</html>