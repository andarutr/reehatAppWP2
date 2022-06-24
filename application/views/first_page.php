<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reehat - <?= $title; ?></title>
	<link rel="shortcut icon" type="png/x-icon" href="<?= base_url('assets/img/reehat_logo.png'); ?>">
	<link href="<?= base_url('assets/css/styles.css'); ?>" rel="stylesheet">
</head>
<body>
    <div id="main-wrapper">
		<section>
		    <h1 class="text-center mb-5">Pilih Sesi Anda</h1>
		    <div class="container">
				<?= $this->session->flashdata('login_msg'); ?>
		        <div class="row justify-content-center">
		            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
		                <center>
		                    <img src="<?= base_url('assets/img/pie-chart.png'); ?>" class="img-fluid" width="200" />
		                </center>
		                <a href="<?= base_url('auth/login/pengurus'); ?>" class="btn full-width btn-md theme-bg text-white">PENGURUS</a>
		            </div>
		            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
		                <center>
		                    <img src="<?= base_url('assets/img/user.png'); ?>" class="img-fluid" width="200" />
		                </center>
		                <a href="<?= base_url('auth/login/pengguna'); ?>" class="btn full-width btn-md theme-bg text-white">PENGGUNA</a>
		            </div>
		        </div>
		        <br><br><br><br><br>
		    </div>
		</section>
		<footer class="dark-footer skin-dark-footer style-2">
			<div class="footer-bottom">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12 col-md-12 text-center">
							<p class="mb-0">Aplikasi Reehat by Kelompok 3</a>.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/select2.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/slick.js'); ?>"></script>
	<script src="<?= base_url('assets/js/moment.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/daterangepicker.js'); ?>"></script> 
	<script src="<?= base_url('assets/js/summernote.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/metisMenu.min.js'); ?>"></script>	
	<script src="<?= base_url('assets/js/custom.js'); ?>"></script>
</body>
</html>