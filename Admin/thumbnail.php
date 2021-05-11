
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
                                        <li class="breadcrumb-item"><a href="courses.php">Courses</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Thumbnail</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        
                        <?php 
             if(isset($_GET['video_added']) && $_GET['video_added']=="true"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style=" text-align: center;
              ">
              <strong>Success !</strong> Video added .
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>
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
                            <a href="add_video.php?id=<?php echo $row['id']?>" tabindex="0"><img src="assets/course_images/<?php echo  $row['thumbnail']?>" class="img-fluid" alt=""></a>
                        </div>
                        <div class="course_overlay_cat_caption">
                            <div class="llp-left pb-1">
                                <h4 class="text-white"> Course Id:<?php echo  $row['id']?></h4>
                                <span><?php echo  $row['course_title']?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  }?>
                
                

            </div>
        </div>

                           
                        </div>

                    </div>

                </div>

            </div>
        </section>
      

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