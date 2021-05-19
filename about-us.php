
		
			<?php include 'partials/header.php';?>
	
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Page Title Start================================== -->
			<section class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title">Who We are?</h1>
								<!-- <nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">About Us</li>
									</ol>
								</nav> -->
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->	
			
			<!-- ========================== About Facts List Section =============================== -->
			<section class="pt-0">
				<div class="container">
					
					<div class="row align-items-center">
					
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="about-short">
								<div class="sec-heading mb-3">
									<h2>Know about <span class="theme-cl">e-Learn</span> learning platform</h2>
								</div>
								<p>E-Learn is a website that aims to provide life-changing learning experiences to anyone, anywhere. This is an online learning platform for higher education, here the world is coming to learn the necessary skills.</p>
								<p>Explore hundreds of free courses or get started with a free trial. Enjoy high-quality curriculum, affordable pricing, and flexible scheduling. E-Learn for Campus empowers any university to offer high-quality, job-relevant online education to students, alumni, faculty, and staff.</p>
								<div class="cource_facts">
									<ul>
										<li><span class="theme-cl">7m</span>Active Cources</li>
										<li><span class="theme-cl">77k</span>Student Learning</li>
										<li><span class="theme-cl">84+</span>Free Cources</li>
									</ul>
								</div>
								
								
							</div>
							<!-- <a href="#" class="btn btn-modern">Know More<span><i class="ti-arrow-right"></i></span></a> -->
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="list_facts_wrap_img">
							
								<img src="assets/img/edu_2.png" class="img-fluid" alt="" />
								
							</div>
						</div>

					</div>
					
				</div>
			</section>
			<!-- ========================== About Facts List Section =============================== -->
			
			<!-- ============================ Featured Instructor Start ================================== -->
			<section class="bg-light">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>Meet Instructors</p>
								<h2><span class="theme-cl">Top & Famous</span> Instructor in Your City</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
						
							<div class="four_slide-dots articles arrow_middle">
								
							<?php 

								 $result=mysqli_query($conn,"SELECT *  FROM teachers ");
								  while($row=mysqli_fetch_assoc($result)){
								
								?>
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.php?tid=<?php echo $row['id']?>"><img src="Admin/assets/teacher_images/<?php echo $row['photo']?>" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.php?tid=<?php echo $row['id']?>"><?php echo $row['name']?></a></h4>
											<span><?php echo $row['department']?></span>
											
										</div>
									</div>
								</div>
								<?php }?>
								
								
							
							</div>
						
						</div>
					</div>
					
				</div> 
			</section>
			<?php include 'partials/footer.php';?>
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
		<!-- <script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/counterup.min.js"></script>
		<script src="assets/js/custom.js"></script> -->
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:39:00 GMT -->
</html>