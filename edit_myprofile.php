<?php
 include 'partials/header.php';
?>
<?php 
include 'partials/db_connect.php';
if (isset($_POST['submit'])) {

$student_name = $_POST['name'];
$student_degree= $_POST['degree'];
$student_email= $_POST['email'];
$student_about = $_POST['about'];
$student_skill= $_POST['skill'];
$student_location= $_POST['location'];
$student_phone = $_POST['phoneno'];
$student_website = $_POST['website'];
$student_dob= $_POST['DOB'];
$student_gender = $_POST['gender'];  

// $query = "SELECT * FROM `students` WHERE email='$student_email'";
// $run = mysqli_query($conn, $query);
// $row = mysqli_fetch_assoc($run);
// if($row['email']=="$student_email")
// {
// 	$result1 = mysqli_query($conn, "UPDATE `students` SET   `name`='$student_name', `degree`='$student_degree',`about`='$student_about',`skill`='$student_skill',`location`='$student_location',`phoneno`='$student_phone',`website`='$student_website',`DOB`='$student_dob', `gender`='$student_gender'  where email='$student_email'");       

// }
// else
// {

	$sql= "INSERT INTO `students` ( `name`,`degree`,'email', `about`,`skill`, `location`,`phoneno`,`website`,`DOB`,`gender`) 
	VALUES ('$student_name', '$student_degree','$student_email', '$student_about', '$student_skill','$student_location','$student_phone','$student_website','$student_dob','$student_gender')";
	$result = mysqli_query($conn, $sql);
	if($result){

    
    //  $row = mysqli_fetch_assoc($res);
    // $_SESSION['student-name'] =$student_name;
	// $_SESSION['student_skill']=$student_skill;
    //   $_SESSION['studentid'] = $row1['id'];
    //  header("Location:Admin/time.php");
    //  exit();
	// $result1 = mysqli_query($conn, "UPDATE `students` SET   `name`='$student_name', `degree`='$student_degree',`about`='$student_about',`skill`='$student_skill',`location`='$student_location',`website`='$student_website',`DOB`='$student_dob', `gender`='$student_gender'  where phoneno='$student_phone'");       
	// if($result1){
    // header("Location:edit-myprofile.php?profile=updated");
    // exit();
	// }
    //  }
	}
}
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
									<form  method="POST">
									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Full Name</label>
												<input type="text" class="form-control simple" id="Name" name="name"
												value="<?php echo $row['name']?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Highest Degree</label>
												<input type="text" class="form-control simple" name="degree"
												value="<?php echo $row['degree']?>">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control simple" name="email"
										value="<?php echo $row['email']?>">
									</div>
									
									<div class="form-group">
										<label>About Me</label>
										<textarea class="form-control simple" id="Message" name="about"
										value="<?php echo $row['about']?>"></textarea>
									</div>

									<div class="form-group">
										<label>Top Skill</label>
										<input type="text" class="form-control simple" name="skill"
										value="<?php echo $row['skill']?>">
									</div>

									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Location</label>
												<input type="text" class="form-control simple" name="location"
												value="<?php echo $row['location']?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Phone no.</label>
												<input type="text" class="form-control simple" name="phoneno"
												value="<?php echo $row['phoneno']?>">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>Website URL / Linkedin</label>
										<input type="text" class="form-control simple" name="website"
										value="<?php echo $row['website']?>">
									</div>

									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Date of Birth</label>
												<input type="text" class="form-control simple" name="DOB"
												value="<?php echo $row['DOB']?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Gender</label>
												<input type="text" class="form-control simple" name="gender"
												value="<?php echo $row['gender']?>">
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<button class="btn btn-theme" type="submit" name="submit">Save Changes</button>
									</div>
									</form>
								</div>
							</div>
							
							
											
						</div>
                    </div>
                </div>
            <!-- </section>             -->

<?php
 include 'partials/footer.php';
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
