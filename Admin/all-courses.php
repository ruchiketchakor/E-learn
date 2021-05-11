<?php
  include './admin_header.php';
?>			
						<div class="col-lg-9 col-md-9 col-sm-12">
							
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">All Courses</li>
										</ol>
									</nav>
								</div>
							</div>
							<!-- /Row -->
							
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									
									<!-- Course Style 1 For Student -->
									<div class="dashboard_container">
										<div class="dashboard_container_header">
											<div class="dashboard_fl_1">
											<h4>All Courses</h4>
											</div>
											<!-- <div class="dashboard_fl_2">
												<ul class="mb0">
													<li class="list-inline-item">
														
													</li>
													<li class="list-inline-item">
														<form class="form-inline my-2 my-lg-0">
															<input class="form-control" type="search" placeholder="Search Courses" aria-label="Search">
															<button class="btn my-2 my-sm-0" type="submit"><i class="ti-search"></i></button>
														</form>
													</li>
												</ul>
											</div> -->
										</div>
										<div class="dashboard_container_body">
											
											<!-- Single Course -->
											<?php 
											 $id=$_SESSION['teacherid'];
											 $result=mysqli_query($conn,"SELECT courses.*, categories.*
											 FROM courses
											 JOIN categories ON categories.id = courses.course_category
											 where  courses.teacher_id=$id");
											
											 while($row=mysqli_fetch_assoc($result)){
							 
											?>
											<div class="dashboard_single_course">
												<a href=" course-detail.php?id=<?php echo $row['cid']?>">
												<div class="dashboard_single_course_thumb">
													<img src="assets/course_images/<?php echo  $row['thumbnail']?>" class="img-fluid" alt="" />
												</div>
											</a>
												<div class="dashboard_single_course_caption">
													<div class="dashboard_single_course_head">
														<div class="dashboard_single_course_head_flex">
															<span class="dashboard_instructor"><?php echo  $row['category_name']?></span>
															<h4 class="dashboard_course_title"><?php echo  $row['course_title']?></h4>
															
														</div>
														<div class="dc_head_right">
															<h4 class="dc_price_rate theme-cl">
																
															 <?php if($row['amount']==0){
																echo "Free";
															}
															else{
																echo  "Rs " . $row['amount'];

															}
															?>
															</h4>
														</div>
													</div>
													<div class="dashboard_single_course_des">
														<p><?php echo  $row['overview']?></p>
													</div>
													<div class="dashboard_single_course_progress">
														<div class="dashboard_single_course_progress_1">
															<!-- <label>82% Completed</label> -->
															<li class="list-inline-item"><i class="ti-user mr-1"></i>4512 Enrolled</li> 
															<!-- <div class="progress">
																<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
															</div> -->
														</div>
														<div class="dashboard_single_course_progress_2">
															<ul class="m-0">
																<!-- <li class="list-inline-item"><i class="ti-comment-alt mr-1"></i>112 Comments</li> -->
																 
																 <button class="btn mt-2 p-2" style="background-color:green; border-radius:2rem;"
                                                                        type="button" onclick="location.href='edit_courses.php?id=<?php echo $row['id']?>'">Edit</button>
																
														
                                                                    <button class="btn btn-danger  p-2 mt-2" style="border-radius:2rem;"
                                                                        type="button">Delete</button>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<?php }?>
								
										
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

<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/all-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:38:45 GMT -->
</html>