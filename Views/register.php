<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>/swiper-bundle.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/img/Teramalogo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="https://cdn.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" >
    <title>register</title>
</head>
<body>
<div class="container"> 
	<div class="row">
	<div class="col-md-4 offset-4">
		<h4>Register</h4>
<form action="<?= base_url('/signup')?>" class="form mb-3" method="post" autocomplete="off">
    <?= csrf_field()  ?>
        <?php if(!empty(session()->getFlashdata('fail'))) : ?>
        <div><?= session()->getFlashdata('fail'); ?></div>
        <?php endif ?>

        <?php if(!empty(session()->getFlashdata('Success'))) : ?>
       <div><?= session()->getFlashdata('Success'); ?></div>
        <?php endif ?>
             <div class="form group mb-3">
             <label for="">lastName</label>
			<input type="text" name="nom" class="form-control" placeholder="enter your lastname" value="<?= set_value('nom'); ?>" >
             </div>
            <span><?= isset($validation) ? display_error($validation,'nom'): '' ?></span>
            <div class="form group mb-3">
             <label for="">firstname</label>
			<input type="text" name="prenom" class="form-control" placeholder="enter your firstname" value="<?= set_value('prenom'); ?>" >
             </div>
            <span><?= isset($validation) ? display_error($validation,'prenom'): '' ?></span>
            <div class="form group mb-3">
            <label for="">Date of birth</label>
			<input type="text" name="datenaissance" id="datePicker" class="form-control" placeholder="00/00/1900" value="<?= set_value('datenaissance'); ?>" >
            <script>
                $(document).ready(function(){
                    $("#datePicker").datepicker({dateFormat:"dd.mm.yy"});
                });
            </script>    
          </div>
            <span><?= isset($validation) ? display_error($validation,'datenaiss'): '' ?></span>
            <div class="form group mb-3">
            <label for="">Phone</label>
			<input type="text" name="phone"  class="form-control" placeholder="(+257)77777777" value="<?= set_value('phone'); ?>" >    
          </div>
            <span><?= isset($validation) ? display_error($validation,'phone'): '' ?></span>
            <div class="form group mb-3">
            <label for="">Genre</label><br>
			<label>
                <input type="radio" name="gender"  value="M" id="male" value="<?= set_value('gender'); ?>" >
           Male </label> 
           <label> 
            <input type="radio" name="gender"  value="F" id="Female" value="<?= set_value('gender'); ?>" >    
            Female </label>  
        </div>
            <span><?= isset($validation) ? display_error($validation,'gender'): '' ?></span>
            <div class="form group mb-3">
            <label for="">E-mail</label>
            <input type="email" class="form-control" name="mail" placeholder="enter your email" value="<?= set_value('mail'); ?>" >
        </div>
            <span><?= isset($validation) ? display_error($validation,'mail'): '' ?></span>
            <div class="form group mb-3">
            <label for="">Password</label>
             <input type="password" name="password" class="form-control" placeholder="enter your password" value="<?= set_value('password'); ?>">
             </div> 
             <span><?= isset($validation) ? display_error($validation,'password'): '' ?></span>
              <label for="">Confirm your Password</label>
			<div class="form group mb-3">
              <input type="password" class="form-control " name="cpassword" placeholder="confirm your password" value="<?= set_value('cpassword'); ?>">
              </div> 
              <span><?= isset($validation) ? display_error($validation,'cpassword'): '' ?></span>
			<input type="submit"class="btn btn-info"  name="register" value="register now">
	    	</form>
            <br>
            <a href="<?= base_url('/')?>">I have already an account</a>
         </div>   
	 	</div>  
		 </div>
</body>
</html>