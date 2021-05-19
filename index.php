
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	// if (isset($_POST['savelogin'])) {
    include 'partials/db_connect.php';

    $useremail =$_POST['ulemail'];
    $userpassword =$_POST['upass'];

	$sql = "SELECT * FROM `users` WHERE user_email='$useremail'";
    $result = mysqli_query($conn, $sql);
    $numrow = mysqli_num_rows($result);
	
   if($numrow==1){
   $row = mysqli_fetch_assoc($result);
    if(password_verify($userpassword,$row['user_password']))   {
        if( $row['otp']==$row['user_otp']){
       session_start();
       $_SESSION['loggedin'] = true;
       $_SESSION['userid'] = $row['id'];
       $_SESSION['username'] = $row['user_name'];
       $_SESSION['useremail'] = $useremail;
	   echo "logged in" .$username; 
		$alert="true";
		if($row['user_category']=="Teacher"){
			$query = "SELECT * FROM `teachers` WHERE email='$useremail'";
			$run = mysqli_query($conn, $query);
			$row1 = mysqli_fetch_assoc($run);
			//  $row = mysqli_fetch_assoc($res);
			  $_SESSION['teacherid'] = $row1['id'];
			header("Location:Admin/dashboard.php?loginsuccess=true");
		}
		else{

			header("Location:index.php?loginsuccess=true");
		}
		}
		else{
			$sql="DELETE FROM `users` WHERE `users`.`user_email` ='$useremail'";
            $result = mysqli_query($conn, $sql);
            if($result){
			header("Location:index.php?loginsuccess=false&error=otpunfilled");
		}
	   }
	}
		else{
			header("Location:index.php?loginsuccess=false&error=wrongpass");
		}
	}
	else{
		header("Location:index.php?loginsuccess=false&error=Incorrectemail");
	}
}


?>
           
		<?php include 'partials/header.php';?>
			
			<!-- ============================================================== -->
			<!-- Top header  -->
		
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="image-cover hero_banner hero-inner-2" style="background:#f4f4f4 url(assets/img/Background.jpg);   background-position: center;
           " data-overlay="0">
				<div class="container">
					<!-- Type -->
					<div class="row align-items-center">
                    	<div class="col-lg-6 col-md-6 col-sm-12">
						<?php 
             if(isset($_GET['resetpass']) && $_GET['resetpass']=="true"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="
              margin-top: 140px;    text-align: center;
              ">
              <strong>Changed !</strong> Your Password is reset, Please Login.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>
		   	<?php 
             if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="
              margin-top: 140px;    text-align: center;
              ">
              <strong>Fail !</strong> This email is already used.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>

         <?php 
             if(isset($_GET['signupfail']) && $_GET['signupfail']=="false"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="
              margin-top: 140px;    text-align: center;
              ">
              <strong>Fail !</strong> Passwords do not Matched.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>

        <?php 
             if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="false"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="
              margin-top: 140px;    text-align: center;
              ">
              <strong>Fail !</strong> Credentials not Matched.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>

          <?php 
             if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="true"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="
              margin-top: 140px;    text-align: center;
              ">
              <strong>Logedin !</strong> Welcome .
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>
		    
							<div class="banner-search-2 transparent">
								<h1 class="big-header-capt cl_2 mb-2 f_2">Your New<br>Development Skills</h1>
								<p>Study any topic, anytime. Choose from thousands of expert-led courses now.</p>
								<!-- <div class="mt-4">
									<a href="#" class="btn btn-modern dark">Enroll Now<span><i class="ti-arrow-right"></i></span></a>
								</div> -->
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="flixio pt-5">
                                <!-- <img class="img-fluid" src="assets/img/bg3.jpg" alt=""> -->
                            </div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Trips Facts Start ================================== -->
			<div class="trips_wrap full colored">
				<div class="container">
					<div class="row m-0">
					
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="trips">
								<div class="trips_icons">
									<i class="ti-video-camera"></i>
								</div>
								<div class="trips_detail">
									<h4>100+ online courses</h4>
									<p>Get unlimited access to 100+ courses, Specializations for one all-inclusive price.</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="trips">
								<div class="trips_icons">
									<i class="ti-medall"></i>
								</div>
								<div class="trips_detail">
									<h4>Expert instruction</h4>
									<p>Promote transformative skill development for employees, teach students in-demand career skills.</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="trips none">
								<div class="trips_icons">
									<i class="ti-infinite"></i>
								</div>
								<div class="trips_detail">
									<h4>Lifetime access</h4>
									<p>Save money on learning with a E-Learn! Get unlimited access to 100+ courses.</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- ============================ Trips Facts Start ================================== -->
			
			<!-- ========================== Featured Category Section =============================== -->
			<section>
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>Popular Category</p>
								<h2><span class="theme-cl">Hot & Popular</span> Category For Learn</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						<?php 
						
	                  $sql = mysqli_query($conn,"SELECT * FROM `categories`");
					  
					  while($run = mysqli_fetch_assoc($sql)){

					
						?>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-1">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="assets/img/content.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="course_show.php?id=<?php echo $run['id']?>"><?php echo $run['category_name']?></a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>23 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						<?php } ?>
					
					</div>
					
				</div>
			</section>
			<!-- ========================== Featured Category Section =============================== -->
			
			<!-- ============================ Featured Courses Start ================================== -->
			<section class="gray">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>Hot &amp; Trending</p>
								<h2><span class="theme-cl">Recent</span> Courses by professional Instructor</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						
						<!-- Cource Grid 1 -->
						<?php 
						 $query=mysqli_query($conn,"SELECT courses.*, teachers.* 
						 FROM courses 
						 JOIN teachers ON courses.teacher_id = teachers.id ");
					
						while($run = mysqli_fetch_assoc($query)){
  
						  ?>
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="show-course-detail.php?id=<?php echo $run['cid']?>"><img src="Admin/assets/course_images/<?php echo $run['thumbnail']?>" class="img-fluid" alt=""></a>
									<div class="cources_price">Rs <?php echo $run['amount']?></div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="show-course-detail.php?id=<?php echo $run['cid']?>"><?php echo $run['course_title']?></a></h4>
								</div>
								
							
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.php?tid=<?php echo $row['id']?>"><img src="assets/img/user-1.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.php?tid=<?php echo $row['id']?>"><?php echo $run['name']?></a></h5>
									</div>
									<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>54 lectures</div>
								</div>
								
							</div>	
						</div>
						<?php } ?>
						<!-- Cource Grid 1 -->
						
					</div>
					
				</div>
			</section>
			<!-- ============================ Featured Courses End ================================== -->
			
			<!-- ========================== About Facts List Section =============================== -->
			<section>
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
								<!-- <a href="#" class="btn btn-modern">Know More<span><i class="ti-arrow-right"></i></span></a> -->
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="list_facts_wrap_img">
							
								<img src="assets/img/edu_2.png" class="img-fluid" alt="">
								
							</div>
						</div>

					</div>
					
				</div>
			</section>
			<!-- ========================== About Facts List Section =============================== -->
			
			<!-- ============================ Featured Instructor Start ================================== -->
			<section class="pt-0">
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