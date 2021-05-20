
<?php
session_start();
if(isset($_SESSION['teacherid'])){
 
include '../partials/db_connect.php';

$id=$_SESSION['teacherid'];
$query="SELECT * from `teachers` where `id` = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if($row['status']==1){
    header("Location:dashboard.php");
}
}
else{
    header("Location:../index.php");

}

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="author" content="www.frebsite.nl" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>ELearn - Online Course & Education HTML Template</title>

    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- Custom Color Option -->
    <link href="assets/css/colors.css" rel="stylesheet">

</head>

<body class="red-skin">

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div id="preloader">
        <div class="preloader"><span></span><span></span></div>
    </div>


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

    <div class="header header-light head-shadow">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand static-logo align-to-left p-0" href="dashboard.php">
                            <img src="assets/img/Elearn.png" class="logo" alt="" />
                        </a>

                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper" style="transition-property: none; margin-top: 38px; font-size: large;">
    
                        <ul class="nav-menu nav-menu-social align-to-right">
                            <li class="login_click theme-bg" style="top:-10px;">
                                <a href="admin-logout.php">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        
        <!-- End Navigation -->
        <div class="clearfix"></div>
			
			<!-- ============================ User Dashboard ================================== -->
			<section class="error-wrap">
				<div class="container">
					<div class="row justify-content-center">
						
						<div class="col-lg-6 col-md-10">
							<div class="text-center">
								
								<img src="assets/img/1620401254318.png" class="img-fluid mt-5" alt="" style="max-width:50%">
								<p class="mt-3" style="font-size:2rem">Wait For 24Hrs</p>
						        <p>We are reviewing your details and you will be notified as soon as possible.</p>
								<button class="btn btn-theme" onclick="location.href='admin-logout.php'">Back to Home</button>
                                            
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->
			
			
			<!-- ============================ Footer Start ================================== -->
	
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

<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:39:03 GMT -->
</html>