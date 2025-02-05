
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kelas Coding</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
<!--===============================================================================================-->
</head>
 
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">
                            <form class="login100-form validate-form" action="<?php echo base_url('index.php/c_register/simpan_data');?>" method="post">
                                
                               
					<span class="login100-form-title p-b-30" >
						KODING KELAS
					</span>
                                    
                                        <span class="txt4 p-b-43">
						hayuk, daftar untuk belajar bareng koding kelas
					</span>
					
					
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nama">
						<span class="focus-input100 "></span>
						<span class="label-input100">Nama</span>
					</div>
                                    
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100 "></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Kata Sandi</span>
					</div>
                                    
                                        <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="asal">
						<span class="focus-input100"></span>
						<span class="label-input100">Asal</span>
					</div>
			

					<div class="container-login100-form-btn">
                                           
                                            <button class="login100-form-btn" type="submit" name="daftar">
							Daftar
						</button>
					</div>
				
				</form>

				<div class="login100-more" style="background-image: url('<?php echo base_url();?>assets/images/bg-01.png');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/js/main_login.js"></script>

</body>
</html>