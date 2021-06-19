<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<link rel="icon" href="<?php echo base_url(); ?>/assets/Curiter.ico">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/fontawesome-all.js'); ?>">
	</script>

	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js'); ?>">
	</script>
	<script>
		function myFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

		window.onclick = function(event) {
			if (!event.target.matches('.dropbtn')) {
				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					}
				}
			}
		}
	</script>
	<style>
		body {
			display: flex;
			flex-direction: column;
			min-height: 100vh;

		}

		.container {
			width: 90%;
			margin: 0 auto;
		}

		.fixed-header,
		.fixed-footer {
			width: 100%;
			position: fixed;
			background: #dff0fe;
			padding: 10px 0;
			color: #7f91a1;
			font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';
			font-weight: 600;
		}

		.fixed-header {
			top: 0;
			box-shadow: 0 4px 4px -2px rgba(0, 0, 0, .2);
			z-index: 10;

		}

		.fixed-footer {
			bottom: 0;
		}

		nav a {
			color: #626d78;
			text-decoration: none;
			padding: 7px 60px;
			margin: 1px;
			font-size: 17px;
		}

		a:hover,
		a:active {
			color: #033D68;
		}

		a:link {
			text-decoration: none;
		}

		.search {
			background-color: #FFFFFF;
			border: 2px solid #477A98;
			padding: 5px 10px;
			font-size: 15px;
			border-radius: 50px 0 0 50px;
			margin: 0px;
		}

		.search:hover {
			border: 2px solid #365465;
		}

		#button {
			background-color: #FFFFFF;
			color: #477A98;
			border: 2px solid #477A98;
			padding: 5px 10px;
			margin: 0px 0px 4px 0px;
			font-size: 15px;
			border-radius: 0 50px 50px 0;
		}

		#button:hover {
			background-color: #365465;
			color: #FFFFFF;
		}

		.aidok {
			color: #477A98;
			font-size: 25px;
			padding: 2px 20px;
			text-decoration: none;
		}

		/* .d-block.w-100{
			height: 50vh;
		} */
		.carousel.slide {
			overflow: auto;
		}

		.cards {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.card {
			flex: 0 1 24%;
			border-radius: 20px;
			text-align: center;
			margin-top: 30px;

		}

		.card a {
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0px;
			left: 0px;
		}

		.card:hover {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		.card-img-top {
			width: 30%;
			margin-top: 10px;
		}

		.dropbtn {
			/*background-image:  url("<?php echo base_url(); ?>/Assets/settings.png");*/
			background-color: #FFFFFF;
			padding: 10px;
			border: none;
			cursor: pointer;
			border-radius: 50%;
		}

		.dropbtn:hover,
		.dropbtn:focus,
		.fa-gear:hover {
			color: black;
		}

		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f1f1f1;
			min-width: 160px;
			overflow: auto;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 10px 12px;
			text-decoration: none;
			display: block;
		}

		.dropdown a:hover {
			background-color: #365465;
			color: #FFFFFF;
		}

		.show {
			display: block;
		}

		.fa-gear {
			color: #ec4638;
			font-size: 24px;
		}

		.isidrop {
			font-weight: 100;
		}

		div.sticky {
			position: -webkit-sticky;
			position: sticky;
			margin-top: 100px;
			margin-left: 15px;
			/* box-shadow: 0 4px 4px -2px rgba(0,0,0,.2); */

			/* background-color: yellow; */
			/* padding-top:  50px; */
			font-size: 20px;
		}

		.sticky a {
			margin-right: 15px;
			color: black;
		}

		.sticky a:hover,
		a:active {
			color: #365465;
		}

		section {
			display: -webkit-flex;
			display: flex;
			width: 35%;
			float: left;
		}

		article {
			display: -webkit-flex;
			display: flex;
			/* width: 70%;
  height: 100%;
  /* float: left; */
			/* padding-bottom: 50%; */
		}

		.Tentang {
			margin-left: 45%;
			margin-right: 10%;
		}

		.kolom-fasilitas {
			float: left;
			width: 50%;

		}

		.konten-atas {
			box-shadow: 0 4px 4px -2px rgba(0, 0, 0, .2);
			padding-bottom: 18%;

		}

		.konten-bawah {
			margin-bottom: 15%;
			margin-top: 10px;

		}

		.konten-bawah-poliklinik {
			width: 50%;
			float: left;
			margin-bottom: 15%;


		}

		.konten-bawah-dokter {
			width: 50%;
			float: left;
			margin-bottom: 15%;


		}

		.button-poli {
			border-radius: 13px;
			font-size: 13px;
			background-color: #477A98;
			border-color: #477A98;
			color: white;
			margin-bottom: 10px;
			/* margin-right: 4px; */
			width: 110px;
		}

		@media screen and (max-width: 700px) {

			.row,
			.navbar {
				flex-direction: column;
			}
		}
	</style>
</head>

<body>
	<div class="fixed-header">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a href="#" class="aidok" style="text-decoration:none;">Curiter</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<a href="<?= base_url('admin/user/index') ?>" style="text-decoration:none;">Data User</a>
						<a href="<?= base_url('admin/dokter/index') ?>" style="text-decoration:none;">Data Dokter</a>
						<a href="<?= base_url('admin/rs/index') ?>" style="text-decoration:none;">Data Rumah Sakit</a>
						<a href="<?= base_url('admin/artikel/index') ?>" style="text-decoration:none;">Data Artikel</a>
						<!-- <a href="<?= base_url('about/') ?>">History</a> -->
						<div class="float-right">
							<div class="dropdown">
								<button class="dropbtn" onclick="myFunction()"> <i class="fas fa-sign-out-alt "></i></button>
								<div id="myDropdown" class="dropdown-content isidrop">
									<a href="<?= base_url('admin/admin/logout') ?>">Keluar</a>
								</div>
							</div>
					</ul>
				</div>
		</div>
		</nav>
	</div>
	</div>