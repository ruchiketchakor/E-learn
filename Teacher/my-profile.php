<?php
include './admin_header.php';
?>
<?php
include '../partials/db_connect.php';
// session_start();
$id=$_SESSION['teacherid'];
$query="SELECT * from `teachers` where `id` = '$id'";;
$result=mysqli_query($conn,$query);
$row =mysqli_fetch_assoc($result)

?>

            <div class="col-lg-9 col-md-9 col-sm-12">

                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- /Row -->

                <!-- Row -->
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="dashboard_container">
                            <div class="dashboard_container_body p-4">
                                <div class="viewer_detail_wraps">
                                    <div class="viewer_detail_thumb">
                                        <img src="assets/teacher_images/<?php echo $row['photo']?>" class="img-fluid" style="height:150px; width:150px;" alt="" />
                                        <!-- <div class="viewer_status">pro</div> -->
                                    </div>
                                    <div class="caption">

                                        
                                            <ul>
                                                <!-- <li><strong>112</strong> Points</li>
                                                <li><strong>10</strong> Classes Completed</li>
                                                <li><strong>18</strong> Lessions Completed</li> -->
                                                
                                                <h4><?php echo $row['name']?></h4>
                                            <p class="viewer_location"><b>Email: </b><?php echo $row['email']?></p>
                                            <p class="viewer_location"><b>Designation: </b><?php echo $row['designation']?></p>
                                            <p class="viewer_location"><b>University: </b><?php echo $row['university']?></p>
                                            <p class="viewer_location"><b>Department: </b><?php echo $row['department']?></p>
                                            <p class="viewer_location"><b>Website: </b><?php echo $row['website']?></p>
                                            <p class="viewer_location"><b>City: </b><?php echo $row['city']?></p>
                                            <p class="viewer_location"><b>State: </b><?php echo $row['state']?></p>
                                            
                                            <p class="viewer_location">
                                            <b>Bio: </b><?php echo $row['bio']?></p>
                             
                                               
                                            </ul>
                                            <div class="form-group col-lg-12 col-md-12 pl-0">
                                                <button type="button" class="btn btn-theme " onclick="location.href='edit_profile.php?id=<?php echo $row['id']?>'">Edit My Profile</button>
                                             </div>
                                             <div class="p-5">
                                </div>
                                        <!-- <div class="viewer_header">
                                        <ul class="badge_info">
                                                <li class="started"><i class="ti-rocket"></i></li>
                                                <li class="medium"><i class="ti-cup"></i></li>
                                                <li class="platinum"><i class="ti-thumb-up"></i></li>
                                                <li class="elite unlock"><i class="ti-medall"></i></li>
                                                <li class="power unlock"><i class="ti-crown"></i></li>
                                            </ul>
                                        </div> -->
                                        
                                                        
                                    </div>
                                </div>
                              
                                <!-- <div class="viewer_header mt-3">
                                            <h4>Shaurya Preet</h4>
                                            <p class="viewer_location"><b>Email: </b>preet77@gmail.com</p>
                                            <p class="viewer_location"><b>Designation: </b>Web Designer</p>
                                            <p class="viewer_location"><b>University: </b>DBATU</p>
                                            <p class="viewer_location"><b>Department: </b>Department of Computer Science and
                                                Engineering</p>
                                            <p class="viewer_location"><b>Website: </b>Elearn.com</p>
                                            <p class="viewer_location"><b>City: </b>Dhule</p>
                                            <p class="viewer_location"><b>State: </b>Maharashtra</p>
                                            
                                            <p class="viewer_location">
                                            <b>Bio: </b>
                                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eligendi dolore enim laudantium voluptatem dignissimos quos beatae sapiente, totam cum nam nisi, quae, minus facilis laboriosam temporibus officia saepe! Natus, impedit hic veritatis repudiandae a similique iste alias facere facilis?</p>
                                                 <div class="form-group col-lg-12 col-md-12 pl-0">
                                                 <button type="button" class="btn btn-theme " onclick="location.href='edit_profile.php'">Edit My Profile</button>
                                                </div>
                                                

                            </div> -->
                            </div>
                        </div>
                    </div>
        
                </div>

               

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
            <script src="assets/js/metisMenu.min.js"></script>
            <script>
            $('#side-menu').metisMenu();
            </script>



            <!-- Mirrored from codeminifier.com/learnup-1.1/learnup/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:38:45 GMT -->