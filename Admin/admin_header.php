<?php
session_start();

if(!isset($_SESSION['teacherid'])){
    header("Location:../index.php");
 }
 
include '../partials/db_connect.php';

$id=$_SESSION['teacherid'];

$query="SELECT * from `teachers` where `id` = '$id'";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($res);
$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:38:45 GMT -->

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

     
        
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- Dashboard -->
        <section class="gray pt-0">
    <div class="container-fluid">


        <!-- Row -->
        <div class="row">

            <div class="col-lg-3 col-md-3 p-0">
                <div class="dashboard-navbar">

                    <div class="d-user-avater">
                        <img src="assets/teacher_images/<?php echo $row['photo']?>" style="height:110px; width:110px;" class="img-fluid avater" alt="">
                        <h4><?php echo $row['name']?></h4>
                        <span><?php echo $row['city'] .' , '. $row['state']?></span>
                    </div>

                    <div class="d-navigation">
                        <ul id="side-menu">
                            <li class="<?= ($activePage == 'dashboard') ? 'active':''; ?>"><a href="dashboard.php"><i class="ti-user"></i>Dashboard</a></li>
                            <li class="<?= ($activePage == 'details1') ? 'active':''; ?>" ><a href="details1.php"><i class="ti-settings"></i>Add Course </a></li>
                            <li class="<?= ($activePage == 'my-profile') ? 'active':''; ?>"><a href="my-profile.php"><i class="ti-heart"></i>My Profile</a> </li>
                            <li class="<?= ($activePage == 'all-courses') ? 'active':''; ?>"><a href="all-courses.php"><i class="ti-heart"></i>All Courses</a></li>
                            <li class="<?= ($activePage == 'enrolled_student') ? 'active':''; ?>"><a href="enrolled_student.php"><i class="ti-heart"></i>Enrolled Students</a></li>
                            <li class="<?= ($activePage == 'reviews') ? 'active':''; ?>"><a href="reviews.php"><i class="ti-heart"></i>Notifications</a></li>
                            <li class="<?= ($activePage == 'contact') ? 'active':''; ?>"><a href="contact.php"><i class="ti-heart"></i>Contact</a></li>
                            <li><a href="admin-logout.php"><i class="ti-power-off"></i>Log Out</a></li>
                           
                        </ul>
                    </div>

                </div>


            </div>

