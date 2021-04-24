
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
       $_SESSION['id'] = $row['id'];
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
			<div class="image-cover hero_banner hero-inner-2" style="background:#032656;" data-overlay="0">
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
                                <img class="img-fluid" src="assets/img/edu_1.png" alt="">
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
									<p>Nor again is there anyone who loves or pursues or desires</p>
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
									<p>Nam libero tempore, cum soluta and nobis est eligendi optio</p>
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
									<p>These cases are perfectly simple and easy to distinguish</p>
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
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-1">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="assets/img/content.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Web Development</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>23 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-2">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="assets/img/briefcase.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Android Development</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>58 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-3">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="assets/img/career.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Digital Marketing</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>74 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-4">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="assets/img/python.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Artificial Intelligence</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>65 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-10">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="assets/img/designer.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Machine Learning</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>43 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-6">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="assets/img/speaker.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Programming</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>82 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-7">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="assets/img/photo.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Programming</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>25 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-8">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="assets/img/yoga.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Course Detail</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>43 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-9">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="assets/img/health.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Lifestyle</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>38 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
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
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="assets/img/co-1.jpg" class="img-fluid" alt=""></a>
									<div class="cources_price">$520</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">Tableau For Beginners: Get CA Certified, Grow Your Career</a></h4>
								</div>
								
								<!-- <div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>8682 Views</li>
										<li><i class="ti-time mr-2"></i>6h 40min</li>
										<li><i class="ti-star text-warning mr-2"></i>4.7 Reviews</li>
									</ul>
								</div>
								 -->
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.html"><img src="assets/img/user-1.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.html">Robert Wilson</a></h5>
									</div>
									<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>54 lectures</div>
								</div>
								
							</div>	
						</div>
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="assets/img/co-2.jpg" class="img-fluid" alt=""></a>
									<div class="cources_price">$349</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">The Complete Business Plan Course (Includes 50 Templates)</a></h4>
								</div>
								
								<!-- <div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>9882 Views</li>
										<li><i class="ti-time mr-2"></i>6h 30min</li>
										<li><i class="ti-star text-warning mr-2"></i>4.7 Reviews</li>
									</ul>
								</div> -->
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.html"><img src="assets/img/user-2.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.html">Shruti Hasan</a></h5>
									</div>
									<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>26 lectures</div>
								</div>
								
							</div>	
						</div>
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="assets/img/co-3.jpg" class="img-fluid" alt=""></a>
									<div class="cources_price">$545</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">An Entire MBA In 1 Course:Award Winning Business School Prof</a></h4>
								</div>
								
								<!-- <div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>5893 Views</li>
										<li><i class="ti-time mr-2"></i>5h 15min</li>
										<li><i class="ti-star text-warning mr-2"></i>4.7 Reviews</li>
									</ul>
								</div> -->
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.html"><img src="assets/img/user-3.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.html">Adam Viknoi</a></h5>
									</div>
									<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>52 lectures</div>
								</div>
								
							</div>	
						</div>
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="assets/img/co-4.jpg" class="img-fluid" alt=""></a>
									<div class="cources_price">$420</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">The Complete Financial Analyst Course 2020</a></h4>
								</div>
								
								<!-- <div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>8582 Views</li>
										<li><i class="ti-time mr-2"></i>4h 59min</li>
										<li><i class="ti-star text-warning mr-2"></i>4.6 Reviews</li>
									</ul>
								</div> -->
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.html"><img src="assets/img/user-4.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.html">Shilpa Shekh</a></h5>
									</div>
									<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>43 lectures</div>
								</div>
								
							</div>	
						</div>
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="assets/img/co-5.jpg" class="img-fluid" alt=""></a>
									<div class="cources_price">$429</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">PMP Exam Prep Seminar - PMBOK Guide 6</a></h4>
								</div>
								
								<!-- <div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>9857 Views</li>
										<li><i class="ti-time mr-2"></i>7h 45min</li>
										<li><i class="ti-star text-warning mr-2"></i>4.9 Reviews</li>
									</ul>
								</div> -->
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.html"><img src="assets/img/user-5.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.html">Shaurya Preet</a></h5>
									</div>
									<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>32 lectures</div>
								</div>
								
							</div>	
						</div>
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="assets/img/co-6.jpg" class="img-fluid" alt=""></a>
									<div class="cources_price">$249</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">Tableau 2020 A-Z:Hands-On Tableau Training For Data Science!</a></h4>
								</div>
								
								<!-- <div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>6852 Views</li>
										<li><i class="ti-time mr-2"></i>2h 30min</li>
										<li><i class="ti-star text-warning mr-2"></i>4.8 Reviews</li>
									</ul>
								</div> -->
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.html"><img src="assets/img/user-6.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.html">Preeti Bhartiya</a></h5>
									</div>
									<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>48 lectures</div>
								</div>
								
							</div>	
						</div>
						
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
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et voluptatem.</p>
								<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut</p>
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
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="assets/img/user-1.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Daniel Diwansker</a></h4>
											<span>Web Designer</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="assets/img/user-2.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Shilpa Singh</a></h4>
											<span>Team Manager</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="assets/img/user-3.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Adam Wistom</a></h4>
											<span>Sales Manager</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="assets/img/user-4.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Ragini Singh</a></h4>
											<span>Business Executing</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<!-- <div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="assets/img/user-5.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Daniel Wilson</a></h4>
											<span>HR Manager</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div> -->
									<!-- </div>
								</div>
							 -->
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