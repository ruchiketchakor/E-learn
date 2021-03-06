<?php
 include 'db_connect.php';
session_start();

 if(isset($_SESSION['teacherid'])){
    header("Location:Teacher/dashboard.php");
 }
 $activePage = basename($_SERVER['PHP_SELF'], ".php");

?>


<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/home-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:38:32 GMT -->
<head>
		<meta charset="utf-8" />
		<meta name="author" content="www.frebsite.nl" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
        <title>ELearn - Online Course System</title>
		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="assets/css/colors.css" rel="stylesheet">
		
		
    </head>
	<style>
		.navigation-portrait .submenu-indicator.submenu-indicator-up
		{
			right:-26px;
		}
	</style>
	
    <body class="red-skin">
	
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
<div class="header header-primary change-logo">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand static-logo align-to-left" href="index.php">
								<img src="assets/img/Elearn.png" class="logo" alt="" />
							</a>
							<a class="nav-brand fixed-logo align-to-left" href="index.php">
								<img src="assets/img/ELearn.png" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;  font-size: large; margin-top:20px">
							<ul class="nav-menu">
							
								<li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>
								<li class="<?= ($activePage == 'about-us') ? 'active':''; ?>"><a href="about-us.php">About Us</a></li>

								
								<li class="<?= ($activePage == 'courses') ? 'active':''; ?>"><a href="#">Courses</a>
									<ul class="nav-dropdown nav-submenu">
									
										<li>
											<?php
											 $result = mysqli_query($conn, "SELECT * FROM categories "); 
											 while($row=mysqli_fetch_assoc($result)){
											?>
											<li><a href="course_show.php?id=<?php echo $row['id']?>"><?php echo $row['category_name']?><span class="submenu-indicator"></span></a></li>						
											<?php }?>
										</li>
										
									</ul>
								</li>
								<li class="<?= ($activePage == 'contact') ? 'active':''; ?>"><a href="contact.php">Contact</a></li>

								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								
							<?php if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
								echo'
								<li class="login_click " style="margin-right:-10px;">
								<img src="assets/img/user.jpg" class="logo img-fluid rounded-circle" width="40px" alt="" />
							</li>
							<li>
							<a> ' .$_SESSION['username'].'<span class="submenu-indicator"></span></a>
							<ul class="nav-dropdown nav-submenu">
							<li><a href="myprofile.php">My Profile<span class="submenu-indicator"></span></a></li>
							<li><a href="my_courses.php">My Courses<span class="submenu-indicator"></span></a></li>
							<li><a href="help.php">Help Center<span class="submenu-indicator"></span></a></li>
							<li><a href="partials/_logout.php">Logout<span class="submenu-indicator"></span></a></li>

							</ul>
							</li>
							<li class="login_click bg-green">
								<a href="partials/_logout.php">Logout</a>
							</li>';
									}
							else{
								echo'
	  
								<li class="login_click light">
									<a href="#" data-toggle="modal" data-target="#login">Sign in</a>
								</li>
								<li class="login_click bg-green">
									<a href="#" data-toggle="modal" data-target="#signup">Sign up</a>
								</li>';
							}?>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>