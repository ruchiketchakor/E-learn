<?php
session_start();
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

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Start Navigation -->
        <!-- <div class="header header-light head-shadow">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand static-logo align-to-left" href="index.php">
                            <img src="assets/img/Elearn.png" class="logo" alt="" />
                        </a>

                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper" style="transition-property: none; margin-top: 38px; font-size: large;">
    
                        <ul class="nav-menu">

                            <li class><a href="dashboard.php">Home<span class="submenu-indicator"></span></a>

                            </li>
                            <li><a href="about-us.php">About<span class="submenu-indicator"></span></a>

                            </li>

                            <li><a href="#">Courses<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="#">Web Development<span class="submenu-indicator"></span></a>
                                        <ul class="nav-dropdown nav-submenu"></ul>

                                    </li>
                                    <li><a href="#">Android Development<span class="submenu-indicator"></span></a>
                                        <ul class="nav-dropdown nav-submenu"></ul>

                                    </li>
                                    <li><a href="#">Digital Marketing<span class="submenu-indicator"></span></a>
                                        <ul class="nav-dropdown nav-submenu"></ul>

                                    </li>

                                    <li><a href="#">Artificial Intelligence<span class="submenu-indicator"></span></a>
                                        <ul class="nav-dropdown nav-submenu"></ul>

                                    </li>

                                    <li><a href="#">Machine Learning<span class="submenu-indicator"></span></a>
                                        <ul class="nav-dropdown nav-submenu"></ul>

                                    </li>

                                    <li><a href="#">Programming<span class="submenu-indicator"></span></a>
                                        <ul class="nav-dropdown nav-submenu"></ul>

                                    </li>

                                    <li><a href="#">Programming<span class="submenu-indicator"></span></a>
                                        <ul class="nav-dropdown nav-submenu"></ul>

                                    </li>



                                </ul>
                            </li>


                            <li><a href="contact.php">Contact</a></li>

                        </ul>

                        <ul class="nav-menu nav-menu-social align-to-right">
                            <li class="login_click theme-bg">
                                <a href="admin-logout.php">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div> -->
        
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
                        <img src="assets/teacher_images/<?php echo $row['photo']?>" class="img-fluid avater" alt="">
                        <h4><?php echo $row['name']?></h4>
                        <span><?php echo $row['city'] .' , '. $row['state']?></span>
                    </div>

                    <div class="d-navigation">
                        <ul id="side-menu">
                            <li class="<?= ($activePage == 'dashboard') ? 'active':''; ?>"><a href="dashboard.php"><i class="ti-user"></i>Dashboard</a></li>
                            <li class="<?= ($activePage == 'details1') ? 'active':''; ?>" ><a href="details1.php"><i class="ti-settings"></i>Course
                                    Details</a>

                            <li class="<?= ($activePage == 'my-profile') ? 'active':''; ?>"><a href="my-profile.php"><i class="ti-heart"></i>My Profile</a>

                            </li>
                            <li class="<?= ($activePage == 'saved-courses') ? 'active':''; ?>"><a href="saved-courses.html"><i class="ti-heart"></i>Saved Courses</a></li>
                            <li class="dropdown">
                                <a href="all-courses.html"><i class="ti-layers"></i>All Courses<span
                                        class="ti-angle-left"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="all-courses.html">All</a></li>
                                    <li><a href="javascript:void(0);">Published</a></li>
                                    <li><a href="javascript:void(0);">Pending</a></li>
                                    <li><a href="javascript:void(0);">Expired</a></li>
                                    <li><a href="javascript:void(0);">In Draft</a></li>
                                </ul>
                            </li>
                            <li><a href="my-order.html"><i class="ti-shopping-cart"></i>My Order</a></li>
                            <li><a href="settings.html"><i class="ti-settings"></i>Settings</a>
                            </li>
                            <li><a href="reviews.html"><i class="ti-comment-alt"></i>Reviews</a></li>
                            <li><a href="admin-logout.php"><i class="ti-power-off"></i>Log Out</a></li>
                           
                        </ul>
                    </div>

                </div>


            </div>

