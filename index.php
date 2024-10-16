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
	<div class="hero-area" style="  background-image: url(work.jpg); background-size: cover; background-position: center; background-attachment: fixed;">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Vivekananda degree college</p>
							<h1> VC Placement Cell</h1>
							<div class="hero-btns">
								<a href="#job_posts" class="bordered-btn">view job posts</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->


	<!-- product section -->
	<div class="product-section mt-150 mb-150" id="changevac">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Choose your dream job</h3>
					</div>
				</div>
			</div>


			<div class="container" id="job_posts">

				<select onchange="selectoption(this.value)" class="form-control">
					<option selected disabled value="">select Course</option>
					<option value="BCA">BCA</option>
					<option value="Bsc">BSc</option>
					<option value="Any stream">Any stream</option>
				</select>

			</div>
			<br>




			<div class="row">

				<?php $query = $admin->ret("SELECT * FROM `vaccancy` ");
				while ($row = $query->fetch(PDO::FETCH_ASSOC)) { ?>
					<div class="col-lg-4 col-md-6 text-center">
						<div class="single-product-item">
							<!-- <div class="product-image">
							<a href="index_assetsf/single-product.html"><img src="officer/uploads/<?php echo $row['company_photo'] ?>" alt=""></a>
						</div> -->
							<center>
								<div class="product-image" style="width:auto; height:210px; overflow:hidden;">
									<a href="index_assetsf/single-product.html"><img src="officer/uploads/<?php echo $row['company_photo'] ?>" alt=""></a>
								</div>
							</center>


							<h3><?php echo $row['c_name'] ?></h3>
							<p class="product-price"><span>Designation aaa: <?php echo $row['designation'] ?> <br> Experience: <?php echo $row['experience'] ?> <br>Location: <?php echo $row['location'] ?> <br>Eligible course: <?php echo $row['eligible_course'] ?></span> Salary: <?php echo $row['salary'] ?> RS</p>

							<!-- 🟨session starts -->
							<?php if (isset($_SESSION['sid'])) {
								$s_variable = $_SESSION['sid']; ?>

								<!-- vacanncy id -->
								<?php $v_id = $row['v_id']; ?>


								<?php $query_job = $admin->ret("SELECT * FROM `visit`   where `sidv`='$s_variable' AND `v_idv`='$v_id' ");
								$row_job = $query_job->fetch(PDO::FETCH_ASSOC); ?>


								<?php if ($query_job->rowCount() < 1) { ?>
									<a href="student/controller/visit_controller.php?visit_link=<?php echo $row['v_id'] ?>&job_link=<?php echo $row['job_link'] ?>" target="_blank" class="cart-btn"><i class=""></i> Visit offical website</a>
								<?php } else { ?>
									<a style="background-color: #40d67c !important; color:white;" href="student/controller/visit_controller.php?visit_link=<?php echo $row['v_id'] ?>&job_link=<?php echo $row['job_link'] ?>" target="_blank" class="cart-btn"><i class=""></i> Visited</a>
								<?php } ?>

							<?php } else { ?>
								<!--session else condition-->
								<a href="student/login_front.php" style="background-color: red !important; border:0px solid red;" class="btn btn-success"><i class=""></i> Visit offical website</a>
							<?php } ?>
							<!--🟨session if closed  -->



							<!-- <a href="student/controller/visit_controller.php?visit_link=<?php echo $row['v_id'] ?>&job_link=<?php echo $row['job_link'] ?>" target="_blank" class="cart-btn"><i class=""></i> Visit offical website</a> -->
						</div>
					</div>
				<?php } ?>
				<!--while loop ends-->
			</div>


		</div>
	</div>
	<!-- end product section -->



	<!-- testimonail-section -->

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
	<!-- end testimonail-section -->



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