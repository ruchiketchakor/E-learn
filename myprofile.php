<?php
 include 'partials/header.php';
?>
	
<?php 
$id= $_SESSION['userid'] ;
$result=mysqli_query($conn,"SELECT * FROM  users where id=$id");
$row=mysqli_fetch_assoc($result);
// $imagepath=(isset($row["file"])&& !empty($row["file"]) && file_exists($row["row"]))?$row["file"]:"img.default.jpg";
?>
<style>
	@media(min-width:1024px)
	{
		.col-lg-12{
			padding-left:33rem;
			margin-top:8rem;
		}
		.banner-search-2.transparent{
			margin-left:-3rem;
		}
	}
	</style>
            <div class="image-cover hero_banner hero-inner-2" style="background-image:url(assets/img/background2.jpg)" data-overlay="0">
				<div class="container">
					<!-- Type -->
					<div class="row align-items-center">
                    	<!-- <div class="col-lg-6 col-md-6 col-sm-12" > -->
                        <div class="col-lg-12 col-md-12">
                            <div class="viewer_detail_thumb">
								
                                <img src="assets/student_images/<?php echo  $row['thumbnail']?>" class="img-fluid" style="height:150px; width:150px;" alt="" />
                                        <!-- <div class="viewer_status">pro</div> -->
                            </div>

                            <div class="banner-search-2 transparent">
								<h3 class="property_block_title" ><?php echo  $_SESSION['username']?></h3>
                                <h4 class="property_block_title" ><?php echo  $_SESSION['useremail']?></h4>
                                
								<!-- <p>Study any topic, anytime. Choose from thousands of expert-led courses now.</p> -->
								<!-- <div class="mt-4">
									<a href="#" class="btn btn-modern dark">Enroll Now<span><i class="ti-arrow-right"></i></span></a>
								</div> -->
							</div>
                            <div >
                                 <button class="btn btn-theme " type="submit" name="upload" onclick="location.href='edit_myprofile.php'" >Edit My Profile</button>								
                            </div>
						</div>
						<!-- <div class="col-lg-6 col-md-6 col-sm-12">
							<div class="flixio pt-5">
                                <img class="img-fluid" src="assets/img/student.jpg" alt="">
                            </div>
						</div>
					 -->
						
					</div>
				</div>
			</div>

			<!-- ============================ Hero Banner End ================================== -->
			
			<?php include 'partials/footer.php';?>

		
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

<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/home-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:38:33 GMT -->
</html>