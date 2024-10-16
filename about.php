<?php

include 'config.php';

$admin = new Admin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Student</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="index_assetsf/assets/img/favicon.png">
	<!-- google font -->
	<link href="index_assetsf/https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="index_assetsf/https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="index_assetsf/assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="index_assetsf/assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="index_assetsf/assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="index_assetsf/assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="index_assetsf/assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="index_assetsf/assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="index_assetsf/assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="index_assetsf/assets/css/responsive.css">

</head>

<body>

	<!--PreLoader-->
	<!-- <div class="loader">
		<div class="loader-inner">
			<div class="circle"></div>
		</div>
	</div> -->
	<!--PreLoader Ends-->

	<!-- header -->
	<?php include 'index_header.php' ?>

	<!-- end header -->

	<!-- 🟩green main content area ----------------------------------------------------------------->

	<!-- hero area -->
	<div class="hero-area" style="  background-image: url(office.jpg); background-size: cover; background-position: center; background-attachment: fixed;">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<h1>About our company</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->


	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.9690844600013!2d75.18470551405709!3d12.780518690981472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba4bd11a6a9050f%3A0xd866a7b41d8c42fc!2sVivekananda%20College%20of%20Arts%2C%20Science%20and%20Commerce!5e0!3m2!1sen!2sin!4v1659500534046!5m2!1sen!2sin" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Address</h4>
							<p>34/8, Vivekananda <br> putturu, Sadan. <br> Karnataka</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Opening Hours</h4>
							<p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: +00 111 222 3333 <br> Email: support@vc.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!--🟨 course ajax -->
	<script>
		function selectoption(select_value) {

			var xhttp = new XMLHttpRequest();

			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("changevac").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", "course_ajax.php?select_value=" + select_value, true);
			xhttp.send();
		}
	</script>


	<!-- 🟩green main content area ----------------------------------------------------------------->

	<!-- footer -->
	<?php include 'index_footer.php' ?>
	<!-- end footer -->

	<!-- copyright -->

	<!-- end copyright -->

	<!-- jquery -->
	<script src="index_assetsf/assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="index_assetsf/assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="index_assetsf/assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="index_assetsf/assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="index_assetsf/assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="index_assetsf/assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="index_assetsf/assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="index_assetsf/assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="index_assetsf/assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="index_assetsf/assets/js/main.js"></script>

</body>

</html>