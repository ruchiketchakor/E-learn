<?php
include './admin_header.php';
?>

<?php
include '../partials/db_connect.php';

if (isset($_POST['upload'])) 
{
    $id=$_GET['id'];
    $title=$_POST['title'];
    $overview=$_POST['overview'];
    $video=$_FILES["video"]["name"];

    $target="assets/upload_video/". $video;

    if( move_uploaded_file($_FILES['video']['tmp_name'],$target)){

        $result=mysqli_query($conn,"INSERT INTO videos (course_id, video_title, video_overview, video) VALUES ('$id','$title','$overview','$video')");

        if($result){
     header("Location:thumbnail.php?video_added=true");

        }
    }  
}      
?>
<div class="col-lg-9 col-md-9 col-sm-12">

                       <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="courses.php">video</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add video</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
            <div class="dashboard_container">
                <div class="dashboard_container_header">
                    <div class="dashboard_fl_1 text-center">
                        <h3>Add your course details</h3>
                    </div>
                </div>
                <div class="dashboard_container_body p-4">
                    <!-- Basic info -->
                    <section class="bg-light">

                        <div class="container">

                            <!-- row Start -->
                            <div class="row justify-content-center">



                                <div class="col-lg-8 col-md-7">

                                    <div class="prc_wrap">
                                        <div class="prc_wrap_header">
                                            <h4 class="property_block_title">Fillup The Form</h4>
                                        </div>
                                        <div class="prc_wrap-body">
                                            <form action="" method="POST" enctype="multipart/form-data"
                                                onsubmit="return validation()">
                                               
                                              <?php
                                              $id=$_GET['id'];
                                              $result=mysqli_query($conn,"SELECT * FROM courses WHERE cid=$id");
                                              $row=mysqli_fetch_assoc($result)
                                              ?>
                                                <div class="row">
                                                            <div class="form-group container" id="amount" >
                                                                    <label>Course Title</label>
                                                                    <p type="text" class="form-control simple" name="lectures"
                                                            id="nolecture"  > <?php echo $row['course_title']?> </p>
                                                                    
                                                                    </div>   
                                                            </div>  

                                                            <div class="form-group">
                                                    <label>Video Title</label>
                                                    <input type="text" class="form-control simple" name="title"
                                                        id="title" required>
                                                </div>
                                           

                                                <div class="form-group">
                                                    <label>Video Overview</label>
                                                    <textarea type="text" class="form-control simple" name="overview"
                                                        id="overview" required></textarea>
                                                </div>
                                           
                                                <div class=" form-group container text-center">
                                                    <label><b>Upload video here</b><label>


                                                </div>

                                                <div class="input-group mb-3">

                                                    <input type="file" class="form-control" name="video"
                                                        id="video" onchange="return fileValidation()" required>

                                                </div>

                                                
                                                <div class="form-group text-center">
                                                    <button class="btn btn-theme " type="submit" name="upload"
                                                        for="inputGroupFile02">Submit</button>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>
                            </div>





                    </section>
                    </section>

                  

                    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


                </div>
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
               
               <script>
        function fileValidation() {
            var fileInput = 
                document.getElementById('video');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.mp4|\.docx|\.odt|\.rtf|\.wps|\.wks|\.wpd)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
    </script>


                <!-- Mirrored from codeminifier.com/learnup-1.1/learnup/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:38:45 GMT -->