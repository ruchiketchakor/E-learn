<?php

include '../partials/db_connect.php';

if (isset($_POST['update'])) {

$id = $_POST['id'];
$teacher_name = $_POST['tname'];
$teacher_email= $_POST['temail'];
$teacher_desi = $_POST['designation'];
$teacher_uni= $_POST['university'];
$teacher_dept= $_POST['department'];
$teacher_link = $_POST['website'];
$teacher_city = $_POST['city'];
$teacher_state= $_POST['state'];
// $teacher_pic= $_POST['pic'];
$teacher_bio = $_POST['bio'];
$teacher_pic = $_FILES["pic"]["name"];  
   
if($teacher_pic != "")
{

    $query=mysqli_query($conn, "SELECT * FROM teachers WHERE id=$id");
    $row=mysqli_fetch_array($query);
    $image=$row['photo'];
     unlink("assets/teacher_images/".$image);
      
$target="assets/teacher_images/". $teacher_pic;
if( move_uploaded_file($_FILES['pic']['tmp_name'],$target)){
$result = mysqli_query($conn, "UPDATE `teachers` SET   `name`='$teacher_name', `email`='$teacher_email',`designation`='$teacher_desi',`university`='$teacher_uni',`department`='$teacher_dept',`website`='$teacher_link',`city`='$teacher_city', `state`='$teacher_state',`photo`='$teacher_pic',`bio`='$teacher_bio'  where id='$id'");       
if($result){
    header("Location:my-profile.php?profile=updated");
    // exit();
}
else{
echo "no";
}
}
}
else{
$result = mysqli_query($conn, "UPDATE `teachers` SET   `name`='$teacher_name', `email`='$teacher_email',`designation`='$teacher_desi',`university`='$teacher_uni',`department`='$teacher_dept',`website`='$teacher_link',`city`='$teacher_city', `state`='$teacher_state',`bio`='$teacher_bio'  where id='$id'");       
if($result){
    header("Location:my-profile.php?profile=updated");
    // exit();
}
}   
} 

 




?>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
<?php
include './admin_header.php';
?>

<head>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
        rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

    <!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <style>
        article,
        aside,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }
    </style>
</head>


<div class="col-lg-9 col-md-9 col-sm-12">

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="my-profile.php">My Profile</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
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
                        <div class="viewer_detail_thumb order-last" style=" top:0;">
                            <form method="post" enctype="multipart/form-data">
                                <img id="blah" src="assets/teacher_images/<?php echo $row['photo']?>"  class="img-fluid" style="width:100px;height:100px" alt="" />
                                <!-- <img id="blah" class="mt-3 border" src="#" alt="your image" /> -->

                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Photo</label>
                                        <input type="file" class="form-control"  onchange="readURL(this);" name="pic"
                                            style="height: 41px; width:150% !important;">
                                    </div>
                                </div>

                        </div>




                        <div class="caption text-center pl-0 pt-3 order-first ">
                            <!-- <div class="viewer_package_status">Expire in 5 Days</div> -->
                            <!-- <p class="h4 viewer_header">Edit My Profile</p> -->
                            <div class="dashboard_fl_1">
                                <h3>Edit My Profile</h3>
                            </div>
                            <div class="form-group col-lg-12 col-md-12">
                                <button type="button" class="btn btn-theme  mt-1 mb-0"
                                    onclick="location.href='my-profile.php'">View Profile</button>

                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard_container" >
                                <!-- <div class="dashboard_container_header">
											<div class="dashboard_fl_1">
												<h4>Setup Your Detail</h4>
											</div>
										</div> -->
                                <div class="dashboard_container_body p-4 mt-5">
                                    <!-- Basic info -->
                                    <div class="submit-section">

                                        <div class="form-row">
                                            <?php
                                                $id = $_GET['id'];
                                                $result = mysqli_query($conn, "SELECT * FROM teachers WHERE id=$id"); 
                                                $res = mysqli_fetch_array($result);
                                                ?>
                                            <div class="form-group col-md-6">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" name="tname" required
                                                    value="<?php echo $res['name']?>">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="temail"
                                                    value="<?php echo $res['email']?>" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Designation</label>
                                                <input type="text" class="form-control" name="designation" required
                                                    value="<?php echo $res['designation']?>">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>University</label>
                                                <input type="text" class="form-control" name="university"
                                                    value="<?php echo $res['university']?>" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Department</label>
                                                <input type="text" class="form-control" name="department" required
                                                    value="<?php echo $res['department']?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Any Website</label>
                                                <input type="text" class="form-control" name="website" required
                                                    value="<?php echo $res['website']?>">
                                            </div>


                                            <div class="form-group col-md-6">
                                                <label>State</label>
                                                <input type="text" class="form-control" name="state"
                                                    value="<?php echo $res['state']?>" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>City</label>
                                                <input type="text" class="form-control" name="city"
                                                    value="<?php echo $res['city']?>" required>
                                            </div>



                                            <div class="form-group col-md-12">
                                                <label>Bio</label>
                                                <textarea name="bio" class="form-control"
                                                    required><?php echo $res['bio']?></textarea>
                                            </div>
                                            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                                            <div class="form-group col-lg-12 col-md-12" style="padding-left:14px">
                                                <button class="btn btn-theme" name="update" type="submit">Save
                                                    Changes</button>
                                            </div>

                                        </div>

                                    </div>






                                </div>

                            </div>


                        </div>
                        </form>
                    </div>
                </div>

                <!-- /Row -->

                <!-- Row -->

                <!-- ================================= End Newsletter =============================== -->

                <!-- ============================ Footer Start ================================== -->

                <!-- ============================ Footer End ================================== -->

                <!-- Log In Modal -->

                <!-- End Modal -->

                <!-- Video Modal -->

                <!-- End Video Modal -->

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
            <script>
                var btn_save = $(".save-profile"),
                    btn_edit = $(".edit-profile"),
                    img_object = $(".img-object"),
                    overlay = $(".media-overlay"),
                    media_input = $("#media-input");

                btn_save.hide(0);
                overlay.hide(0);

                btn_edit.on("click", function () {
                    $(this).hide(0);
                    overlay.fadeIn(300);
                    btn_save.fadeIn(300);
                });
                btn_save.on("click", function () {
                    $(this).hide(0);
                    overlay.fadeOut(300);
                    btn_edit.fadeIn(300);
                });

                media_input.change(function () {
                    if (this.files && this.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            img_object.attr("src", e.target.result);
                        };

                        reader.readAsDataURL(this.files[0]);
                    }
                });
            </script>

<script>
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                        
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

            <!-- Mirrored from codeminifier.com/learnup-1.1/learnup/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:38:45 GMT -->