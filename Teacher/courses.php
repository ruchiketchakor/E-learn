<?php
include './admin_header.php';
?>
<div class="col-lg-9 col-md-9 col-sm-12">

    <!-- Row -->
  
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Courses</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /Row -->

    <!-- Row -->
    <?php 
             if(isset($_GET['course_added']) && $_GET['course_added']=="true"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style=" text-align: center;
              ">
              <strong>Added !</strong> Course details are added , Please add video.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>';
            }
            ?>
            <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="dashboard_stats_wrap widget-1">
                <div class="dashboard_stats_wrap_content">
                    <a href="add_course.php"><span class="p-1">Add</span>
                        <h3>Course</h3>
                    </a>
                </div>
                <div class="dashboard_stats_wrap-icon"><i class="ti-location-pin"></i></div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="dashboard_stats_wrap widget-2">
                <div class="dashboard_stats_wrap_content">
                    <a href="thumbnail.php"> <span class="p-1">Add</span>
                        <h3>video</h3>
                    </a>
                </div>
                <div class="dashboard_stats_wrap-icon"><i class="ti-pie-chart"></i></div>
            </div>
        </div>


    </div>

</div>

</div>

</div>
</section>
<!-- ============================ Dashboard: Dashboard End ================================== -->



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