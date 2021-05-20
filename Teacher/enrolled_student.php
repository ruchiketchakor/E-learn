<?php
include './admin_header.php';
?>
						
						<div class="col-lg-9 col-md-9 col-sm-12">
							
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">Enroll Students</li>
										</ol>
									</nav>
								</div>
							</div>
							<!-- /Row -->
							
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="dashboard_container">
										<div class="dashboard_container_header">
											<div class="dashboard_fl_1">
												<h4>View Enroll Students</h4>
											</div>
										</div>
										<div class="dashboard_container_body">
											<div class="table-responsive">
												<table class="table">
													<thead class="thead-dark">
														<tr>
															<th scope="col">Id</th>
															<th scope="col">Name</th>
															<th scope="col">Email</th>
															<th scope="col">course name</th>
															<th scope="col">Course Category</th>
														</tr>
													</thead>
													<tbody>
													<?php 

												 $result1=mysqli_query($conn,"SELECT `course-enroll`.*, courses.*, users.*,categories.*
												 FROM `course-enroll`
												 JOIN courses ON `course-enroll`.course_id = courses.cid
												 JOIN users ON `course-enroll`.stud_id = users.id
												 JOIN categories ON `courses`.course_category = categories.id order by users.id DESC");
												  while($row1=mysqli_fetch_assoc($result1)){
												?>
														<tr>
															<th scope="row"><?php echo $row1['id']?></th>
															<td><?php echo $row1['user_name']?></td>
															<td><?php echo $row1['user_email']?></td>
															<td><?php echo $row1['course_title']?></td>
															<td><?php echo $row1['category_name']?></td>
														</tr>
														<?php }?>
														
													</tbody>
												</table>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<!-- /Row -->
							
						</div>
					
					</div>
					<!-- Row -->
					
				</div>
			</section>
			<!-- ============================ Dashboard: My Order Start End ================================== -->
			
			<!-- ============================== Start Newsletter ================================== -->
			<!-- <section class="newsletter theme-bg inverse-theme">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-8 col-sm-12">
							<div class="text-center">
								<h2>Join Thousand of Happy Students!</h2>
								<p>Subscribe our newsletter & get latest news and updation!</p>
								<form class="sup-form">
									<input type="email" class="form-control sigmup-me" placeholder="Your Email Address" required="required">
									<input type="submit" class="btn btn-theme" value="Get Started">
								</form>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<!-- ================================= End Newsletter =============================== -->
			
			<!-- ============================ Footer Start ================================== -->
			
			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/counterup.min.js"></script>
		<script src="assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
		<script src="assets/js/metisMenu.min.js"></script>	
		<script>
			$('#side-menu').metisMenu();
		</script>

	</body>

<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/my-order.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:38:45 GMT -->
</html>