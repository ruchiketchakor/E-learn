
	<link rel="stylesheet" href="https://cdn.plyr.io/3.6.3/plyr.css" />
	<link rel="stylesheet" href="style.css">

<?php
include '../partials/header.php'
?>
<style>
.col-lg-8{
	background-repeat:no-repeat;
}
#player
{
	height:29rem;
	width:47rem;
}
@media (max-width:670px) {
	#player
{
	height:12rem;
	width:21rem;
	repeat:no-repeat;
}
	
}

@media(min-width:768px) and (max-width:1024){
.row1
{
	display:flow-root;
}
}
/* @media(max-width:1024) {
	.row1
	{
		display:flex;
	}
	
} */

</style>



			
			<!-- ============================ Course Header Info End ================================== -->
			
			<!-- ============================ Course Detail ================================== -->
			<section class="bg-light">
				<div class="container">
					<div class="row row1" >
						<!-- <div class="row1"> -->
						<div class="col-lg-8 col-md-8">
						
							<div class="inline_edu_wrap">
								<div class="inline_edu_first text-center">
									<h4>Become a Web Designer & Make More Money</h4>
									<ul class="edu_inline_info">
										<li><i class="ti-calendar"></i>10 weeks</li>
										<li><i class="ti-control-forward"></i>102 Lectures</li>
										<!-- <li><i class="ti-user"></i>502 Student Enrolled</li> -->
									</ul>
								</div>	
								<!-- <div class="inline_edu_last">
									<h4 class="edu_price">$49.00</h4><a href="#" class="btn btn-theme enroll-btn">Buy Now<i class="ti-angle-right"></i></a>
								</div> -->
							</div>
							
							<!-- <div class="property_video xl">
								<div class="thumb">
									<img class="pro_img img-fluid w100" src="assets/img/banner-5.jpg" alt="7.jpg">
									<div class="overlay_icon">
										<div class="bb-video-box">
											<div class="bb-video-box-inner">
												<div class="bb-video-box-innerup">
													<a href="https://www.youtube.com/watch?v=A8EI6JaFbv4" data-toggle="modal" data-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								 -->
								 
							<video  id="player" playsinline controls >
							<source src="assets/video/Quick Fix Cardio Burst Routine - Fat Burning Exercise - Bipasha Basu Love Yourself.mp4" type="video/mp4" />
							</video>
						</div>	
						<div class="col-lg-4 col-md-4">
						
							<!-- Course info -->
							<div class="ed_view_box style_3">
							
								
									<div class="tab-pane" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
										<div class="edu_wraper">
											<h4 class="edu_title">Course Circullum</h4>
											<div id="accordionExample" class="accordion shadow circullum">

												<!-- Part 1 -->
												<div class="card">
												  <div id="headingOne" class="card-header bg-white shadow-sm border-0">
													<h6 class="mb-0 accordion_title"><a href="#" >Part 01: How To Learn Web Designing Step by Step</a></h6>
												  </div>
												  
												</div> 

												<!-- Part 2 -->
												<div class="card">
												  <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
													<h6 class="mb-0 accordion_title"><a href="#" >Part 02: Learn Web Designing in Basic Level</a></h6>
												  </div>
												  
												</div>

												<!-- Part 3 -->
												<div class="card">
												  <div id="headingThree" class="card-header bg-white shadow-sm border-0">
													<h6 class="mb-0 accordion_title"><a href="#" >Part 03: Learn Web Designing in Advance Level</a></h6>
												  </div>
												  
												</div>
												
												<!-- Part 04 -->
												<div class="card">
												  <div id="headingThree" class="card-header bg-white shadow-sm border-0">
													<h6 class="mb-0 accordion_title"><a href="#">Part 04: How To Become Succes in Designing & Development?</a></h6>
												  </div>
												  
												</div>

											</div>
										</div>
									</div>
							</div>	
						</div> 
						<!-- </div> -->


								<!-- <div class="instructor_over_info">
									<ul>
										<li>
											<div class="ins_info">
												<div class="ins_info_thumb">
													<img src="assets/img/user-8.jpg" class="img-fluid" alt="" />
												</div>
												<div class="ins_info_caption">
													<span>Teacher</span>
													<h4>Jessica West</h4>
												</div>
											</div>
										</li>
										<li>
											<span>Category</span>
											Software
										</li>
										<li>
											<span>Reviews</span>
											<div class="eds_rate">
												4.2
												<div class="eds_rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
												</div>
											</div>
										</li>
									</ul>
								</div>
								
							</div>
							 -->
							<!-- All Info Show in Tab -->
						<div class="col-lg-8 col-md-8">

							<div class="tab_box_info mt-4">
								<ul class="nav nav-pills mb-3 light" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="overview-tab" data-toggle="pill" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
									</li>
									<!-- <li class="nav-item">
										<a class="nav-link" id="curriculum-tab" data-toggle="pill" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="false">Curriculum</a>
									</li> -->
									
									<li class="nav-item">
										<a class="nav-link" id="reviews-tab" data-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
									</li>
								</ul>
							
								<div class="tab-content" id="pills-tabContent">
									
									<!-- Overview Detail -->
									<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
										<!-- Overview -->
										<div class="edu_wraper">
											<h4 class="edu_title">Course Overview</h4>
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>		
											<p>Aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto. Sam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
											<h6>Requirements</h6>
											<ul class="lists-3">
												<li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
												<li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
												<li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
												<li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
												<li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
											</ul>
										</div>
										
										<!-- Overview -->
										<div class="edu_wraper">
											<h4 class="edu_title">What you'll learn</h4>
											<ul class="edu_list third">
												<li>At vero eos et accusamus</li>
												<li>At vero eos et accusamus</li>
												<li>At vero eos et accusamus</li>
												<li>At vero eos et accusamus</li>
												<li>At vero eos et accusamus</li>
												<li>At vero eos et accusamus</li>
												<li>At vero eos et accusamus</li>
												<li>At vero eos et accusamus</li>
												<li>At vero eos et accusamus</li>
											</ul>
										</div>
									</div>
									
									<!-- Curriculum Detail -->
									<div class="tab-pane fade mt-3" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
										<div class="edu_wraper ">
											<h4 class="edu_title">Course Circullum</h4>
											<div id="accordionExample" class="accordion shadow circullum">

												<!-- Part 1 -->
												<div class="card">
												  <div id="headingOne" class="card-header bg-white shadow-sm border-0">
													<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative text-dark collapsible-link py-2">Part 01: How To Learn Web Designing Step by Step</a></h6>
												  </div>
												  <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
													<div class="card-body pl-3 pr-3">
														<ul class="lectures_lists">
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 01</div>Web Designing Beginner</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 02</div>Startup Designing with HTML5 & CSS3</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 03</div>How To Call Google Map iFrame</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 04</div>Create Drop Down Navigation Using CSS3</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 05</div>How to Create Sticky Navigation Using JS</li>
														</ul>
													</div>
												  </div>
												</div>

												<!-- Part 2 -->
												<div class="card">
												  <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
													<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark collapsible-link py-2">Part 02: Learn Web Designing in Basic Level</a></h6>
												  </div>
												  <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
													<div class="card-body pl-3 pr-3">
														<ul class="lectures_lists">
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 01</div>Web Designing Beginner</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 02</div>Startup Designing with HTML5 & CSS3</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 03</div>How To Call Google Map iFrame</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 04</div>Create Drop Down Navigation Using CSS3</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 05</div>How to Create Sticky Navigation Using JS</li>
														</ul>
													</div>
												  </div>
												</div>

												<!-- Part 3 -->
												<div class="card">
												  <div id="headingThree" class="card-header bg-white shadow-sm border-0">
													<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark collapsible-link py-2">Part 03: Learn Web Designing in Advance Level</a></h6>
												  </div>
												  <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
													<div class="card-body pl-3 pr-3">
													  <ul class="lectures_lists">
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 01</div>Web Designing Beginner</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 02</div>Startup Designing with HTML5 & CSS3</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 03</div>How To Call Google Map iFrame</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 04</div>Create Drop Down Navigation Using CSS3</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 05</div>How to Create Sticky Navigation Using JS</li>
														</ul>
													</div>
												  </div>
												</div>
												
												<!-- Part 04 -->
												<div class="card">
												  <div id="headingThree" class="card-header bg-white shadow-sm border-0">
													<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="d-block position-relative collapsed text-dark collapsible-link py-2">Part 04: How To Become Succes in Designing & Development?</a></h6>
												  </div>
												  <div id="collapseThree" aria-labelledby="headingFour" data-parent="#accordionExample" class="collapse">
													<div class="card-body pl-3 pr-3">
													  <ul class="lectures_lists">
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 01</div>Web Designing Beginner</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 02</div>Startup Designing with HTML5 & CSS3</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 03</div>How To Call Google Map iFrame</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 04</div>Create Drop Down Navigation Using CSS3</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 05</div>How to Create Sticky Navigation Using JS</li>
														</ul>
													</div>
												  </div>
												</div>

											</div>
										</div>
									</div>
									
									
									
									<!-- Reviews Detail -->
									<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
										
										<!-- Overall Reviews -->
										<div class="rating-overview">
											<div class="rating-overview-box">
												<span class="rating-overview-box-total">4.2</span>
												<span class="rating-overview-box-percent">out of 5.0</span>
												<div class="star-rating" data-rating="5"><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i>
												</div>
											</div>

											<div class="rating-bars">
												<div class="rating-bars-item">
													<span class="rating-bars-name">5 Star</span>
													<span class="rating-bars-inner">
														<span class="rating-bars-rating high" data-rating="4.7">
															<span class="rating-bars-rating-inner" style="width: 85%;"></span>
														</span>
														<strong>85%</strong>
													</span>
												</div>
												<div class="rating-bars-item">
													<span class="rating-bars-name">4 Star</span>
													<span class="rating-bars-inner">
														<span class="rating-bars-rating good" data-rating="3.9">
															<span class="rating-bars-rating-inner" style="width: 75%;"></span>
														</span>
														<strong>75%</strong>
													</span>
												</div>
												<div class="rating-bars-item">
													<span class="rating-bars-name">3 Star</span>
													<span class="rating-bars-inner">
														<span class="rating-bars-rating mid" data-rating="3.2">
															<span class="rating-bars-rating-inner" style="width: 52.2%;"></span>
														</span>
														<strong>53%</strong>
													</span>
												</div>
												<div class="rating-bars-item">
													<span class="rating-bars-name">1 Star</span>
													<span class="rating-bars-inner">
														<span class="rating-bars-rating poor" data-rating="2.0">
															<span class="rating-bars-rating-inner" style="width:20%;"></span>
														</span>
														<strong>20%</strong>
													</span>
												</div>
											</div>
										</div>
							
										<!-- Reviews -->
										<div class="list-single-main-item fl-wrap">
											<div class="list-single-main-item-title fl-wrap">
												<h3>Item Reviews -  <span> 3 </span></h3>
											</div>
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
										
										<!-- Submit Reviews -->
										<div class="edu_wraper">
											<h4 class="edu_title">Submit Reviews</h4>
											<div class="review-form-box form-submit">
												<form>
													<div class="row">
														
														<div class="col-lg-6 col-md-6 col-sm-12">
															<div class="form-group">
																<label>Name</label>
																<input class="form-control" type="text" placeholder="Your Name">
															</div>
														</div>
														
														<div class="col-lg-6 col-md-6 col-sm-12">
															<div class="form-group">
																<label>Email</label>
																<input class="form-control" type="email" placeholder="Your Email">
															</div>
														</div>
														
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="form-group">
																<label>Review</label>
																<textarea class="form-control ht-140" placeholder="Review"></textarea>
															</div>
														</div>
														
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="form-group">
																<button type="submit" class="btn btn-theme">Submit Review</button>
															</div>
														</div>
														
													</div>
												</form>
											</div>
										</div>
							
									</div>
									
								</div>
							</div>
							
						</div>
						
						
						
					</div>
				
				</div>
			</section>
			<!-- ============================ Course Detail ================================== -->
			
			
			<!-- ================================= End Newsletter =============================== -->
			
			<!-- ============================ Footer Start ================================== -->
			<?php
include '../partials/footer.php'
?>
			<!-- ============================ Footer End ================================== -->
			
			
			<!-- End Modal -->
			
			
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="https://cdn.plyr.io/3.6.3/plyr.polyfilled.js"></script>
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

	

<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/detail-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:38:36 GMT -->