<?php include 'partials/header.php';?>

			

<?php
$id=$_GET['tid'];
$result=mysqli_query($conn,"SELECT courses.*, teachers.* , categories.*
FROM courses
JOIN teachers ON courses.teacher_id = teachers.id
JOIN categories ON categories.id = courses.course_category
where teachers.id=$id");
$row=mysqli_fetch_assoc($result);
?>
			<!-- ============================ Instructor header Start================================== -->
			<div class="image-cover ed_detail_head invers" style="background:#0b1c38;" data-overlay="0">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12 col-md-12">
							<div class="viewer_detail_wraps">
								<div class="viewer_detail_thumb">
									<img src="Admin/assets/teacher_images/<?php echo $row['photo']?>" class="img-fluid" alt="" />
								</div>
								<div class="caption">
									<div class="viewer_package_status">6 Year Expe.</div>
									<div class="viewer_header">
										<h4><?php echo $row['name']?></h4>
										<span class="viewer_location"><?php echo $row['designation']?> , <?php echo $row['department']?></span>
									
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- ============================ Instructor header End ================================== -->
			
			<!-- ============================ Instructor Detail ================================== -->
			<section>
				<div class="container">
					<div class="row">
					
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="custom-tab customize-tab tabs_creative">
								<ul class="nav nav-tabs pb-2 b-0" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Classes</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Education</a>
									</li>
								
								</ul>
								<div class="tab-content" id="myTabContent">
									
									<!-- Classess -->
									<div class="tab-pane fade show active p-2" id="home" role="tabpanel" aria-labelledby="home-tab">
										<div class="row">
										<?php 
                                                $tid=$_GET['tid'];

												$result1=mysqli_query($conn,"SELECT courses.*, teachers.* ,categories.*
												FROM teachers 
												JOIN courses ON courses.teacher_id = teachers.id
												JOIN categories ON categories.id = courses.course_category
												 where teachers.id=$tid");
											while($row1=mysqli_fetch_assoc($result1)){
											?>
											<!-- Single Video -->
											<div class="col-lg-4 col-md-6">
												<div class="edu-watching">
													<div class="property_video sm">
														<div class="thumb">
															<img class="pro_img img-fluid w100" src="Admin/assets/course_images/<?php echo $row1['thumbnail']?>" alt="7.jpg">
															
														</div>
														<div class="edu_duration">25:10</div>
													</div>
													<div class="edu_video detail">
														<div class="edu_video_header">
															<h4><a href="#"><?php echo $row1['course_title']?></a></h4>
														</div>
														<div class="edu_video_bottom">
															<div class="edu_video_bottom_left">
																<span>Lectures -<?php echo $row1['lectures']?></span>	
															</div>
															<div class="edu_video_bottom_right">
																<i class="ti-desktop"></i><?php echo $row1['category_name']?>
															</div>
														</div>
													</div>
												</div>							
											</div>
											<?php }?>
										
										</div>
									</div>
									
									<!-- Education -->
									<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
										<div class="details_single p-2">
											<h2>Education</h2>
											<ul class="skills_info">
												<li>
													<div class="skills_captions">
														<h4 class="Skill_title">Master in Fine Art</h4>
														<span>2017 - 2019</span>
														<span>Meeruth University</span>
														<p class="skills_dec">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
													</div>
												</li>
												
												<li>
													<div class="skills_captions">
														<h4 class="Skill_title">Tombia Collage</h4>
														<span>2015 - 2017</span>
														<span>Wikked Collage</span>
														<p class="skills_dec">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
													</div>
												</li>
												
												<li>
													<div class="skills_captions">
														<h4 class="Skill_title">Diploma in Fine Art</h4>
														<span>20012 - 2015</span>
														<span>Meeruth University</span>
														<p class="skills_dec">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
													</div>
												</li>
											</ul>
										</div>
									</div>
									
									<!-- Reviews -->
									<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
										<div class="reviews-comments-wrap">
											<!-- reviews-comments-item -->  
											<div class="reviews-comments-item">
												<div class="review-comments-avatar">
													<img src="assets/img/user-1.jpg" class="img-fluid" alt=""> 
												</div>
												<div class="reviews-comments-item-text">
													<h4><a href="#">Josaph Manrty</a><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i>27 Oct 2019</span></h4>
													
													<div class="listing-rating high" data-starrating2="5"><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><span class="review-count">4.9</span> </div>
													<div class="clearfix"></div>
													<p>" Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris. "</p>
													<div class="pull-left reviews-reaction">
														<a href="#" class="comment-like active"><i class="ti-thumb-up"></i> 12</a>
														<a href="#" class="comment-dislike active"><i class="ti-thumb-down"></i> 1</a>
														<a href="#" class="comment-love active"><i class="ti-heart"></i> 07</a>
													</div>
												</div>
											</div>
											<!--reviews-comments-item end-->  
											
											<!-- reviews-comments-item -->  
											<div class="reviews-comments-item">
												<div class="review-comments-avatar">
													<img src="assets/img/user-2.jpg" class="img-fluid" alt=""> 
												</div>
												<div class="reviews-comments-item-text">
													<h4><a href="#">Rita Chawla</a><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i>2 Nov May 2019</span></h4>
													
													<div class="listing-rating mid" data-starrating2="5"><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star"></i><span class="review-count">3.7</span> </div>
													<div class="clearfix"></div>
													<p>" Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris. "</p>
													<div class="pull-left reviews-reaction">
														<a href="#" class="comment-like active"><i class="ti-thumb-up"></i> 12</a>
														<a href="#" class="comment-dislike active"><i class="ti-thumb-down"></i> 1</a>
														<a href="#" class="comment-love active"><i class="ti-heart"></i> 07</a>
													</div>
												</div>
											</div>
											<!--reviews-comments-item end-->
											
											<!-- reviews-comments-item -->  
											<div class="reviews-comments-item">
												<div class="review-comments-avatar">
													<img src="assets/img/user-3.jpg" class="img-fluid" alt=""> 
												</div>
												<div class="reviews-comments-item-text">
													<h4><a href="#">Adam Wilsom</a><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i>10 Nov 2019</span></h4>
													
													<div class="listing-rating good" data-starrating2="5"><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star"></i> <span class="review-count">4.2</span> </div>
													<div class="clearfix"></div>
													<p>" Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris. "</p>
													<div class="pull-left reviews-reaction">
														<a href="#" class="comment-like active"><i class="ti-thumb-up"></i> 12</a>
														<a href="#" class="comment-dislike active"><i class="ti-thumb-down"></i> 1</a>
														<a href="#" class="comment-love active"><i class="ti-heart"></i> 07</a>
													</div>
												</div>
											</div>
											<!--reviews-comments-item end-->
											
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Instructor Detail ================================== -->
			
			
		
		<?php include 'partials/footer.php';?>
			
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

<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/instructor-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:38:51 GMT -->
</html>