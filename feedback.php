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
	<title>Feedback</title>

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
	<div class="hero-area" style="  background-image: url(feedback.jpg); background-size: cover; background-position: center; background-attachment: fixed;">
		<div class="container">
			<div class="row" >
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell" >
							<p class="subtitle">Feedbacks</p>
							<h1 style="margin-top: 300px;">Your opinion is valueable</h1>
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
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Give your feedback</h2>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p> -->
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
                    <form action="student/controller/feedback_controller.php" method="POST" enctype="multipart/form-data" autocomplete="off">
							<p>
								<input type="text" placeholder="Name" name="name" id="name" required>
								
							</p>

							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Send" name="send feedback"></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="testimonail-section mt-150 mb-150">
	<center><h3>Our students Feedbacks</h3></center><br>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">

						<!-- single feedback starts -->
						<?php $query = $admin->ret("SELECT * FROM `feedback` INNER JOIN `student` ON feedback.sidf = student.sid ");
                                        while ($row = $query->fetch(PDO::FETCH_ASSOC)) { ?>
						<div class="single-testimonial-slider">
							<div class="client-avater">
							<img src="student/uploads/<?php echo $row['photo'] ?>">							</div>
							<div class="client-meta">
								<h3><?php echo $row['name'] ?> <span>Student</span></h3>
								<p class="testimonial-body">
									"<?php echo $row['message'] ?> "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<?php } ?> 
						<!-- while loop ends -->
						<!-- single feedback ends -->

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