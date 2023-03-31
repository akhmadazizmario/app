<!DOCTYPE html>
<html lang="en">

<head>
	<title>RESERT PASSWORD - E SEKOLAH</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<!-- Favicons -->
	<link href="<?= base_url() ?>assets/images/logo.png" rel="icon">
	<link href="<?= base_url() ?>assets/images/logo.png" rel="apple-touch-icon">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url('assets/') ?>images/loho.png');">
			<div class="wrap-login100 p-t-30" style="position: absolute; right: 100px; padding: 5px;">
				<img src="<?= base_url('assets/images/logo.png') ?>" alt="" class="login-logo" style="width: 200px;">
				<span class="login100-form-title p-b-41">
					SD NEGERI MEJASEM BARAT 01
				</span>

				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="<?= site_url('auth/reset_process') ?>">

					<div class="text-center">
						<?php if ($this->session->has_userdata('error')) : ?>
							<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show text-center">
								<span class="badge badge-pill badge-danger">Perhatian!</span><br>
								<?= $this->session->flashdata('error'); ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true" style="margin-top:-25px">×</span>
								</button>
							</div>
						<?php endif; ?>

						<?php if ($this->session->has_userdata('success')) : ?>
							<div class="sufee-alert alert with-close alert-Success alert-dismissible fade show text-center">
								<span class="badge badge-pill badge-success">Berhasil!</span><br>
								<?= $this->session->flashdata('success'); ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true" style="margin-top:-25px">×</span>
								</button>
							</div>
						<?php endif; ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter email">
						<input class="input100" type="email" name="email" placeholder="Masukkan Email" autofocus required oninvalid="this.setCustomValidity('Email wajib diisi')" oninput="this.setCustomValidity('')">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit" name="reset">
							Reset Password
						</button>
					</div>
					<div class="text-center">
						<a href="<?= site_url('auth') ?>">
							<h6><br>Login<h6>
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('assets/login/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('assets/login/') ?>vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>js/main.js"></script>

</body>

</html>