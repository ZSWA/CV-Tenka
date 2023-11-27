<!DOCTYPE html>
<html lang="en">

<head>
	<title> <?= $judul; ?> </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= site_url('assets/depan/') ?>images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= site_url('assets/depan/') ?>vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= site_url('assets/depan/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/depan/') ?>fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/depan/') ?>vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= site_url('assets/depan/') ?>vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= site_url('assets/depan/') ?>vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/depan/') ?>vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= site_url('assets/depan/') ?>vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/depan/') ?>vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/depan/') ?>vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/depan/') ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/depan/') ?>css/main.css">
	<!--===============================================================================================-->
</head>

<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="<?= base_url() ?>">
							<img src="<?= site_url('assets/depan/') ?>images/icons/logo.png" alt="IMG-LOGO"
								data-logofixed="<?= site_url('assets/depan/') ?>images/icons/logo2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="<?= base_url() ?>">Home</a>
								</li>

								<li>
									<a href="<?= base_url('home/konten') ?>">Konten</a>
								</li>


								<li>
									<a href="<?= base_url('home/galeri') ?>">Gallery</a>
								</li>

								<li>
									<a href="about.html">About</a>
								</li>

								<li>
									<a href="<?= base_url('auth') ?>">Sign In</a>
								</li>
								<li>
									<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">

			<li class="t-center m-b-13">
				<a href="<?= base_url() ?>" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="<?= base_url('home/konten') ?>" class="txt19">Konten</a>
			</li>

			<li class="t-center m-b-13">
				<a href="gallery.html" class="txt19">Gallery</a>
			</li>

			<li class="t-center m-b-13">
				<a href="about.html" class="txt19">About</a>
			</li>

			<li class="t-center m-b-13">
				<a href="<?= base_url('auth') ?>" class="txt19">Sign In</a>
			</li>


		</ul>

		
	</aside>

	<?= $contents; ?>

	<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Contact Us
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							<?= $konfig->alamat ?>
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(+1) 96 716 6879
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							<?= $konfig->email ?>
						</li>
						<li class="txt14 m-b-14">
							<i class="fa fa-facebook fs-13 size19" aria-hidden="true"></i>
							<?= $konfig->facebook ?>
						</li>
						<li class="txt14 m-b-14">
							<i class="fa fa-instagram fs-13 size19" aria-hidden="true"></i>
							<?= $konfig->instagram ?>
						</li>
						<li class="txt14 m-b-14">
							<i class="fa fa-tiktok fs-13 size19" aria-hidden="true"></i>
							<?= $konfig->tiktok ?>
						</li>
					</ul>


				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Latest twitter
					</h4>

					<div class="m-b-25">
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@colorlib
						</a>

						<p class="txt14 m-b-18">
							Activello is a good option. It has a slider built into that displays the featured image in
							the slider.
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							21 Dec 2017
						</span>
					</div>

					<div>
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@colorlib
						</a>

						<p class="txt14 m-b-18">
							Activello is a good option. It has a slider built into that displays
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							21 Dec 2017
						</span>
					</div>
				</div>

				
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">


					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2023 All rights reserved | This template is made with <i
							class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img
						src="<?= site_url('assets/depan/') ?>images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0"
						allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>



	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= site_url('assets/depan/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= site_url('assets/depan/') ?>vendor/animsition/js/animsition.min.js">
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= site_url('assets/depan/') ?>vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?= site_url('assets/depan/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= site_url('assets/depan/') ?>vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= site_url('assets/depan/') ?>vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="<?= site_url('assets/depan/') ?>vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= site_url('assets/depan/') ?>vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?= site_url('assets/depan/') ?>js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= site_url('assets/depan/') ?>vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
		$('.parallax100').parallax100();

	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= site_url('assets/depan/') ?>vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= site_url('assets/depan/') ?>vendor/lightbox2/js/lightbox.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= site_url('assets/depan/') ?>js/main.js"></script>

</body>

</html>
