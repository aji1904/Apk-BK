<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<title>BK - SMK Nurul Iman Palembang; </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/my-login.css">
	  <link rel="icon" type="images/png" sizes="16x16" href="bootstrap/img/nurul iman.jpg">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="row" style="margin-top: 90px; margin-bottom: 40px;">
						<div class="col-md-3 col-lg-3">
							<img src="bootstrap/img/nurul iman.png" style="height:90px; width: auto;">
						</div>
						<div class="col-md-9 col-lg-9" style="font-size: 20px; align-self: center; text-align: center;">
							Aplikasi Layanan Konseling SMK Nurul Iman Palembang
						</div>
					</div>
                        <?php
							session_start();	
							if(isset($_SESSION['pesan'])){
								echo $_SESSION['pesan'];
								unset($_SESSION['pesan']);
							}
						?>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title"><center>Reset Password</center></h4>
							<form method="POST" action="reset-config.php">
                                <input type="hidden" value="<?= $_SESSION['reset']?>" name="hp">
								<div class="form-group">
									<label for="a">Password Baru</label>
									<input id="a" type="password" class="form-control" name="password_baru" value="" required autofocus>
								</div>
                                <div class="form-group">
									<label for="b">Konfirmasi Password</label>
									<input id="b" type="password" class="form-control" name="password_conf" value="" required autofocus>
								</div>

								<div class="form-group mt-5">
									<button type="submit" class="btn btn-primary btn-block" name="reset_pass">
										Reset
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; Nadila PalcomTech
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>

	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/my-login.js"></script>
</body>
</html>