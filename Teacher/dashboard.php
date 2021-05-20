
<?php
include './admin_header.php';
?>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                   
                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- /Row -->

                        <!-- Row -->
                        <div class="row">

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="dashboard_stats_wrap widget-1">
                                    <div class="dashboard_stats_wrap_content">
                                        <h4>607</h4> <span>Total Courses</span>
                                    </div>
                                    <div class="dashboard_stats_wrap-icon"><i class="ti-location-pin"></i></div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="dashboard_stats_wrap widget-2">
                                    <div class="dashboard_stats_wrap_content">
                                        <h4>102</h4> <span>Total Enroll Student </span>
                                    </div>
                                    <div class="dashboard_stats_wrap-icon"><i class="ti-pie-chart"></i></div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="dashboard_stats_wrap widget-4">
                                    <div class="dashboard_stats_wrap_content">
                                        <h4>70</h4> <span>Total Notifications</span>
                                    </div>
                                    <div class="dashboard_stats_wrap-icon"><i class="ti-user"></i></div>
                                </div>
                            </div>

                        </div>
                        <!-- /Row -->

                        <!-- Row -->
                        <div class="row">

                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="row">
                                <?php
                            $id=$_SESSION['teacherid'];
                            $result=mysqli_query($conn,"SELECT * FROM courses WHERE teacher_id=$id");
                            while($row=mysqli_fetch_assoc($result)){

                            ?>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="course_overlay_cat">
                                            <div class="course_overlay_cat_thumb">
                                                <a href="#" tabindex="0"><img src="assets/course_images/<?php echo  $row['thumbnail']?>"
                                                        class="img-fluid" alt=""></a>
                                            </div>
                                            <div class="course_overlay_cat_caption">
                                                <div class="llp-left">
                                                    <h4><a href="#"><?php echo  $row['course_title']?></a></h4>
                                                    <span>17 Classes</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
  <?php }?>
                                   


                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h6>Notifications</h6>
                                    </div>
                                    <div class="ground-list ground-hover-list">

                                    <?php 

											$query=mysqli_query($conn,"SELECT queries.*, courses.* 
											FROM courses 
											JOIN queries ON courses.cid = queries.course_id ");
									        $run = mysqli_fetch_assoc($query);
										   while($row = mysqli_fetch_assoc($query)){
                                           if(empty($row['solution'])){
					                       
											?>
                                        <div class="ground ground-list-single">
                                            <a href="#">
                                                <div class="btn-circle-40 btn-success"><i class="ti-calendar"></i></div>
                                            </a>

                                            <div class="ground-content">
                                                <h6><a href="review.php"><?php echo $row['rname']?></a></h6>
                                                <small class="text-fade font-weight-bold pb-2"><?php echo $row['remail']?></small>
                                                <span class="small"><?php echo $row['query']?></span>
                                            </div>
                                        </div>
                                       <?php } }?>
                                       

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /Row -->

                     

                    </div>

                </div>

            </div>
        </section>
        <!-- ============================ Dashboard: Dashboard End ================================== -->

        <!-- ================================= End Newsletter =============================== -->

        <!-- ============================ Footer Start ================================== -->
        
        <!-- End Modal -->

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

</body>

<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:38:45 GMT -->

</html>