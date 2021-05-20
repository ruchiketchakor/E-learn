
<?php include 'partials/header.php';?>

		<?php
      include 'partials/db_connect.php';
	  
	  
	  $id=$_GET['id'];
	  
	  $result=mysqli_query($conn,"SELECT courses.*, teachers.* ,videos.*, categories.*
	 FROM courses
	 JOIN teachers ON courses.teacher_id = teachers.id
	 JOIN videos ON videos.course_id = courses.cid
	 JOIN categories ON categories.id = courses.course_category
	 where courses.cid=$id");
	 $row=mysqli_fetch_assoc($result)
	 ?>

		<!-- ============================ Course Header Info Start================================== -->
	<div class="image-cover ed_detail_head lg" style="background:#f4f4f4 url(assets/img/banner-4.jpg);"
		data-overlay="8">
			<div class="pt-5 container">
				<div class="row">

					<div class="col-lg-7 col-md-9">
						<div class="ed_detail_wrap light">
							
							<div class="ed_header_caption">
								<h2 class="ed_title"><?php echo $row['category_name']?></h2>
								<ul>
									<li><i class="ti-control-forward"></i>102 Lectures</li>
									<li><i class="ti-user"></i>502 Student Enrolled</li>
								</ul>
							</div>

							

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================ Course Header Info End ================================== -->

		<!-- ============================ Course Detail ================================== -->
		<section class="bg-light">
			<div class="container">
				<div class="row">

					<div class="col-lg-8 col-md-8">

						<div class="inline_edu_wrap">
							<div class="inline_edu_first">
								<h4><?php echo $row['course_title']?></h4>
								<ul class="edu_inline_info">
									<li><i class="ti-control-forward"></i>102 Lectures</li>
									<li><i class="ti-user"></i>502 Student Enrolled</li>
								</ul>
							</div>
							<div class="inline_edu_last">
								<h4 class="edu_price">Rs <?php echo $row['amount']?></h4>
							</div>
						</div>

						<div class="property_video xl">
							<div class="thumb">
								<img class="pro_img img-fluid w100" src="Teacher/assets/course_images/<?php echo $row['thumbnail']?>" alt="7.jpg">
								<div class="overlay_icon">
									
								</div>
							</div>

							<div class="instructor_over_info">
								<ul>
									<li>
										<div class="ins_info">
											<div class="ins_info_thumb">
												<img src="Teacher/assets/teacher_images/<?php echo $row['photo']?>" class="img-fluid" alt="" />
											</div>
											<div class="ins_info_caption">
												<span>Teacher</span>
												<h4><?php echo $row['name']?></h4>
											</div>
										</div>
									</li>
									<li>
										<span>Category</span>
										<?php echo $row['department']?>									</li>
									
								</ul>
							</div>

						</div>

						<!-- All Info Show in Tab -->
						<div class="tab_box_info mt-4">
							<ul class="nav nav-pills mb-3 light" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="overview-tab" data-toggle="pill" href="#overview"
										role="tab" aria-controls="overview" aria-selected="true">Overview</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="curriculum-tab" data-toggle="pill" href="#curriculum"
										role="tab" aria-controls="curriculum" aria-selected="false">Curriculum</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="instructor-tab" data-toggle="pill" href="#instructor"
										role="tab" aria-controls="instructor" aria-selected="false">Instructor</a>
								</li>
							
							</ul>

							<div class="tab-content" id="pills-tabContent">

								<!-- Overview Detail -->
								<div class="tab-pane fade show active" id="overview" role="tabpanel"
									aria-labelledby="overview-tab">
									<!-- Overview -->
									<div class="edu_wraper">
										<h4 class="edu_title">Course Overview</h4>
										<p><?php echo $row['overview']?></p>
										
									</div>

									<!-- Overview -->
									
								</div>

								<!-- Curriculum Detail -->
								<div class="tab-pane fade" id="curriculum" role="tabpanel"
									aria-labelledby="curriculum-tab">
									<div class="edu_wraper">
										<h4 class="edu_title">Course Circullum</h4>
										<div id="accordionExample" class="accordion shadow circullum">

											<!-- Part 1 -->
											<div class="card">
												<div id="headingOne" class="card-header bg-white shadow-sm border-0">
													<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse"
															data-target="#collapseOne" aria-expanded="true"
															aria-controls="collapseOne"
															class="d-block position-relative text-dark collapsible-link py-2"><?php echo $row['course_title']?></a></h6>
												</div>
												<div id="collapseOne" aria-labelledby="headingOne"
													data-parent="#accordionExample" class="collapse show">
													<div class="card-body pl-3 pr-3">
														<ul class="lectures_lists">
															<?php
                                                       include 'partials/db_connect.php';

                                                                  $cid=$_GET['id'];
                                                                $run= mysqli_query($conn, "SELECT * FROM videos where course_id=$cid"); 
																 while($row=mysqli_fetch_assoc($run)){
															?>
															<li>
																<div class="lectures_lists_title"><i
																		class="ti-control-play"></i>Lecture: 01</div><?php echo $row['video_title']?>
															</li>
															<?php } ?>
														</ul>
													</div>
												</div>
											</div>

											

										</div>
									</div>
								</div>

								<!-- Instructor Detail -->
								<div class="tab-pane fade" id="instructor" role="tabpanel"
									aria-labelledby="instructor-tab">
									<div class="single_instructor">
										<div class="single_instructor_thumb">
										<?php $result=mysqli_query($conn,"SELECT courses.*, teachers.* ,videos.*
											FROM courses
											JOIN teachers ON courses.teacher_id = teachers.id
											JOIN videos ON videos.course_id = courses.cid
											where courses.cid=$id");
											$row=mysqli_fetch_assoc($result) ?>
											<a href="#"><img src="Teacher/assets/teacher_images/<?php echo $row['photo']?>" class="img-fluid" alt=""></a>
										</div>
										<div class="single_instructor_caption">
											<h4><a href="#"><?php echo $row['name']?></a></h4>
											<ul class="instructor_info">
												<li><i class="ti-video-camera"></i>72 Videos</li>
												<li><i class="ti-control-forward"></i>102 Lectures</li>
												<li><i class="ti-user"></i>Exp. 4 Year</li>
											</ul>
											<p><?php echo $row['bio']?></p>
											<!-- <ul class="social_info">
												<li><a href="#"><i class="ti-facebook"></i></a></li>
												<li><a href="#"><i class="ti-twitter"></i></a></li>
												<li><a href="#"><i class="ti-linkedin"></i></a></li>
												<li><a href="#"><i class="ti-instagram"></i></a></li>
											</ul> -->
										</div>
									</div>
								</div>

								

							</div>
						</div>

					</div>

					<div class="col-lg-4 col-md-4">

						<!-- Course info -->
						<div class="ed_view_box style_3">
						<?php
											$result=mysqli_query($conn,"SELECT courses.*, teachers.* ,videos.*
											FROM courses
											JOIN teachers ON courses.teacher_id = teachers.id
											JOIN videos ON videos.course_id = courses.cid
											where courses.cid=$id");
											$row=mysqli_fetch_assoc($result)
										?>
							<div class="property_video sm">
								<div class="thumb">
									<img class="pro_img img-fluid w100" src="Teacher/assets/course_images/<?php echo $row['thumbnail']?>" alt="7.jpg">
									<div class="overlay_icon">
										
									</div>
								</div>
							</div>

							<div class="ed_view_price pl-4">
								<span>Acctual Price</span>
								<h2 class="theme-cl">Rs <?php echo $row['amount']?></h2>
							</div>

							<div class="ed_view_short pl-4 pr-4 pb-2">
								<p><?php echo $row['course_title']?>
								</p>
							</div>

						
							<div class="ed_view_link">
							

							<?php if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
								$sid=$_SESSION['userid'];
								$cid=$_GET['id'];
								   $query=mysqli_query($conn,"SELECT * FROM `course-enroll` Where stud_id=$sid AND course_id=$cid");
								   $numrow = mysqli_num_rows($query);
								if($numrow==1) {
								echo'
								<a href="course_play.php?cid='.$cid.'"  class="btn btn-theme enroll-btn">Start Course<i
										class="ti-angle-right"></i></a>';
									}
									else{
										echo '<a href="#"   data-toggle="modal" data-target="#enroll" class="btn btn-theme enroll-btn">Enroll Now<i
										class="ti-angle-right"></i></a>';
									}
								}
							else{
								echo'
	  
								<a href="#"   data-toggle="modal" data-target="#noenroll" class="btn btn-theme enroll-btn">Enroll Now<i
								class="ti-angle-right"></i></a>';
							}?>
								
							</div>

						</div>

					</div>

				</div>

			</div>
		</section>
		<!-- ============================ Course Detail ================================== -->

		<?php include 'partials/footer.php';?>
		
		<div class="modal fade" id="enroll" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal" style="top: 150px;">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body" style="padding: 4rem 2rem;">
							<!-- <h4 class="modal-header-title">Log In</h4> -->
							<div class="login-form">
								<form method="post" action="enrollstud.php?courseid=<?php echo $row['cid']?>" >
								<div class="form-group">

									<h4>Do you want to enroll this course?</h4>
								</div>
		
									<div class="form-group text-center">
									 <button  type="submit"  name ="enroll" class="btn btn-theme enroll-btn ">Enroll</button>
										<!-- <button  onclick="showDetails('');"  name="enroll" class="btn btn-theme enroll-btn enroll">Enroll</button> -->

									</div>
								
								</form>
							</div>
			
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="noenroll" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal" style="top: 150px;">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body" style="padding: 4rem 2rem;">
							<!-- <h4 class="modal-header-title">Log In</h4> -->
							<div class="login-form">
								<div class="form-group">

									<h4>To enroll course Kindly Login!</h4>
								</div>
									
									<div class="form-group text-center">
										<button  class="btn btn-theme enroll-btn">Login</button>
									</div>
								
							</div>
			
						</div>
					</div>
				</div>
			</div>
		<!-- Video Modal -->
	

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



</body>


<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/detail-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:38:36 GMT -->

</html>
