<?php

include 'config.php';

$admin = new Admin();


//updating customer location_id based on dropdown selection
if (isset($_GET['select_value'])) {

	 $selected_puc = $_GET['select_value']; //['lid'] is <input tag name=""

}
?>

<h1><?php echo $selected_puc ?></h1>

<!-- 🟨 ajax change  -->

<div class="product-section mt-150 mb-150" id="filterpuc">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">
					<h3><span class="orange-text">Choose your dream job</h3>
				</div>
			</div>
		</div>


		<div class="container">

			<select onchange="selectoption(this.value)" class="form-control">
				<option selected disabled value="">select Course</option>
				<option value="BCA">BCA</option>
				<option value="Bsc">BSc</option>
			</select>

		</div>
		<br> <br>

		<select onchange="selectpuc(this.value)" class="form-control">
			<option selected disabled value="">select pu marks</option>
			<option value="50">50</option>
			<option value="50">60</option>
			<option value="50">70</option>
			<option value="50">80</option>
			<option value="50">90</option>
		</select>




		<div class="row">

			<?php $query = $admin->ret("SELECT * FROM `vaccancy` where `eligible_course`='$selected_course' AND `min_puc`>='$selected_puc' ");
			while ($row = $query->fetch(PDO::FETCH_ASSOC)) { ?>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<!-- <div class="product-image">
							<a href="index_assetsf/single-product.html"><img src="officer/uploads/<?php echo $row['company_photo'] ?>" alt=""></a>
						</div> -->
						<center>
							<div class="product-image" style="width:261px; height:261px; overflow:hidden;">
								<a href="index_assetsf/single-product.html"><img src="officer/uploads/<?php echo $row['company_photo'] ?>" alt=""></a>
							</div>
						</center>


						<h3><?php echo $row['c_name'] ?></h3>
						<p class="product-price"><span>Designation aaa: <?php echo $row['designation'] ?> <br> Experience: <?php echo $row['experience'] ?> <br>Location: <?php echo $row['location'] ?></span> Salary: <?php echo $row['salary'] ?> </p>

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
							<a href="student/login_front.php" style="background-color: red !important;" target="_blank" class="btn btn-success"><i class=""></i> Visit offical website</a>
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


<!--🟨 course ajax -->
<script>
	function selectpuc(select_value) {

		var xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("filterpuc").innerHTML = this.responseText;
			}
		};
		xhttp.open("GET", "puc_ajax.php?select_value=" + select_value, true);
		xhttp.send();
	}
</script>