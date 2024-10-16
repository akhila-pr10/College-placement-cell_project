<?php

include 'config.php';

$admin = new Admin();


//updating customer location_id based on dropdown selection
if (isset($_GET['select_value'])) {

	$selected_course = $_GET['select_value']; //['lid'] is <input tag name=""

}
?>

<h1><?php //echo $selected_course ?></h1>

<!-- 🟨 ajax change  -->

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

				<?php $query = $admin->ret("SELECT * FROM `vaccancy` where `eligible_course`='$selected_course' ");
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