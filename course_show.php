
		<?php include 'partials/header.php';?>
			
		<style>
	.col-lg-4{
		display:none;
	}
</style>
			<!-- ============================ Page Title Start================================== -->
			<section class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12" style="padding-left: auto; margin:auto;">
							
							<div class="breadcrumbs-wrap">
								<h2 class="breadcrumb-title">Web Development Courses</h2>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Find Courses</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->			

			
			<!-- ============================ Full Width Courses  ================================== -->
			<section class="pt-0">
				<div class="container">
					
					
					<!-- Row -->
					<div class="row">	
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<!-- Row -->
							<?php 
								 $id=$_GET['id'];

								 $result=mysqli_query($conn,"SELECT courses.*, teachers.* 
								 FROM courses 
								 JOIN teachers ON courses.teacher_id = teachers.id where courses.course_category=$id");
								  $count=mysqli_num_rows($result)
								
								?>
							<div class="row align-items-center mb-3">
								<div class="col-lg-6 col-md-6 col-sm-12">
									We found <strong><?php echo $count?></strong> courses for you
								</div>
							
							</div>
							<!-- /Row -->
							
							<div class="row">
						
								<!-- Cource Grid 1 -->
								<?php 
								 $id=$_GET['id'];

								 $result=mysqli_query($conn,"SELECT courses.*, teachers.* 
								 FROM courses 
								 JOIN teachers ON courses.teacher_id = teachers.id where courses.course_category=$id");
								  while($row=mysqli_fetch_assoc($result)){
								
								?>
								<div class="col-lg-4 col-md-6">
									<div class="education_block_grid style_2">
										
										<div class="education_block_thumb">
											<a href="show-course-detail.php?id=<?php echo $row['cid']?>"><img src="Admin/assets/course_images/<?php echo $row['thumbnail']?>" class="img-fluid" alt=""></a>
										</div>
										
										<div class="education_block_body">
											<h4 class="bl-title"><a href="show-course-detail.php?id=<?php echo $row['cid']?>"><?php echo $row['course_title']?></a></h4>
										</div>
										
									
										<div class="education_block_footer">
											<div class="education_block_author">
												<div class="path-img"><a href="instructor-detail.html"><img src="Admin/assets/teacher_images/<?php echo $row['photo']?>" class="img-fluid" alt=""></a></div>
												<h5><a href="instructor-detail.html"><?php echo $row['name']?></a></h5>
											</div>
											<div class="cources_price_foot"> <?php if($row['amount']==0){
																echo "Free";
															}
															else{
																echo  "Rs " . $row['amount'];

															}
															?></div>
										</div>
										
									</div>	
								</div>
								<?php }?>
								<!-- Cource Grid 1 -->
							
							</div>
							
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									
									<!-- Pagination -->
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 text-center">
											<button type="button" class="btn btn-danger loadmore">Load More<i class="ti-reload ml-3"></i></button>
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
		<script>
			$(".col-lg-4").slice(0,6).show();

			$(".loadmore").on("click",function(){
				$(".col-lg-4:hidden").slice(0,3).show();

				if($(".col-lg-4:hidden").length==0)
				{
					$(".loadmore").fadeOut();
				}
			})

		</script>
		<script>
			function openNav() {
			  document.getElementById("filter-sidebar").style.width = "320px";
			}

			function closeNav() {
			  document.getElementById("filter-sidebar").style.width = "0";
			}
		</script>

	</body>

<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/full-width-course-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:38:36 GMT -->
</html>