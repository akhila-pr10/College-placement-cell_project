<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<h3 style="color:white;">PLACO</h3>
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="index.php">Home</a></li>


								
								<li><a href="student/student_index.php">Experience</a></li>

								<li><a href="about.php">About</a></li>

								<li><a href="feedback.php">Feedback</a></li>

								<li><a href="student_chat.php">chat with officer</a></li>

								<li class="current-list-item"><a>Student</a>
									<ul class="sub-menu">
									<?php if (!isset($_SESSION['sid'])) { ?>
										<li><a href="student/login_front.php">Login</a></li>
										<li><a href="student/reg_front.php">Register</a></li>
										<?php } else { ?>
										<li><a href="student/logout.php">Logout</a></li>
										<?php } ?>
									</ul>
								</li>

					
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="index_assetsf/#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>