<?php
 include '../Student/student_header.php';
?>
				<section class="align-center">
					<div class="viewer_detail_wraps" style=" margin-top:-3rem;" >
                        <div class="viewer_detail_thumb order-last" style=" top:0; margin-left:4rem;">
                            <form method="post" enctype="multipart/form-data">
                                <img id="blah" src="assets/img/bg1.jpg"  class="img-fluid" style="width:100px;height:100px" alt="" />
                                <!-- <img id="blah" class="mt-3 border" src="#" alt="your image" /> -->

                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Photo</label>
                                        <input type="file" class="form-control"   name="pic"
                                            style="height: 41px; width:150% !important;">
                                    </div>
                                </div>

                        </div>




                        <div class="caption text-center pl-0 pt-3 order-first " style="padding-top:4rem !important; ">
                            <!-- <div class="viewer_package_status">Expire in 5 Days</div> -->
                            <!-- <p class="h4 viewer_header">Edit My Profile</p> -->
                            <div class="dashboard_fl_1">
                                <h3>Edit My Profile</h3>
                            </div>
                            <div class="form-group col-lg-12 col-md-12">
                                <button type="button" class="btn btn-theme  mt-1 mb-0"
                                    onclick="location.href='myprofile.php'">View Profile</button>

                            </div>

                        </div>

                    </div>
				</section>

            <!-- <section class="bg-light"> -->
			
				<div class="container">
				
					<!-- row Start -->
					<div class="row justify-content-center" style="margin-bottom:2rem;">
						

					
						<div class="col-lg-8 col-md-7">
							<!-- <form action="javascript:sendmail()" method="POST"> -->

							<div class="prc_wrap">
								<!-- <form action="javascript:sendmail()" method="POST"> -->
								<!-- <div class="prc_wrap_header">
									<h4 class="property_block_title">Fillup The Form</h4>
								</div> -->
								<!-- <form action="javascript:sendmail()" method="POST"> -->
								<div class="prc_wrap-body">
									<form action="" method="POST">
									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Full Name</label>
												<input type="text" class="form-control simple" id="Name">
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Highest Degree</label>
												<input type="text" class="form-control simple">
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label>About Me</label>
										<textarea class="form-control simple" id="Message"></textarea>
									</div>

									<div class="form-group">
										<label>Top Skill</label>
										<input type="text" class="form-control simple">
									</div>

									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Location</label>
												<input type="text" class="form-control simple" >
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Phone no.</label>
												<input type="text" class="form-control simple">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>Website URL / Linkedin</label>
										<input type="text" class="form-control simple">
									</div>

									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Date of Birth</label>
												<input type="text" class="form-control simple">
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Gender</label>
												<input type="text" class="form-control simple">
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<button class="btn btn-theme" type="submit">Submit Request</button>
									</div>
									</form>
								</div>
							</div>
							
							
											
						</div>
                    </div>
                </div>
            <!-- </section>             -->

<?php
 include '../Student/student_footer.php';
?>

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/select2.min.js"></script>
            <script src="assets/js/slick.js"></script>
            <script src="assets/js/jquery.counterup.min.js"></script>
            <script src="assets/js/counterup.min.js"></script>
            <script src="assets/js/custom.js"></script> -->
