<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pemesanan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/kallosmoment.png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-20">
						<img src="image/kallosmoment.png" alt="icon">
					</span>
                    <span class="login100-form-title p-b-30">
						Booking Wedding Photography
					</span>

					<!-- Nama -->
					<div class="wrap-input100 validate-input" data-validate="Enter your name">
						<input class="input100" type="text" name="nama">
						<span class="focus-input100" data-placeholder="Nama"></span>
					</div>

					<!-- Email -->
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<!-- Nomor Telepon -->
					<div class="wrap-input100 validate-input" data-validate="Enter your phone number">
						<input class="input100" type="text" name="nohp">
						<span class="focus-input100" data-placeholder="Nomor Telepon"></span>
					</div>

					<!-- Kategori Paket (Dropdown) -->
					<div class="wrap-input100 validate-input" data-validate="Select a package">
						<select class="input100" name="kategori">
							<option value="" disabled selected>Kategori Paket</option>
							<option value="silver">Silver Package</option>
							<option value="gold">Gold Package</option>
							<option value="platinum">Platinum Package</option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<!-- Tanggal Pemesanan -->
					<div class="wrap-input100 validate-input" data-validate="Select a booking date">
						<input class="input100" type="date" name="tanggal">
						<span class="focus-input100" data-placeholder=""></span>
					</div>

					<!-- Alamat Pemesanan -->
					<div class="wrap-input100 validate-input" data-validate="Enter booking address">
						<input class="input100" type="text" name="alamat">
						<span class="focus-input100" data-placeholder="Alamat Pemesanan"></span>
					</div>

					<!-- Tombol Submit -->
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Submit Booking
							</button>
						</div>
					</div>

					<div class="text-center p-t-40">
						<span class="txt1">
							Need help with your booking?
						</span>

						<a class="txt2" href="#">
							Contact Us
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
