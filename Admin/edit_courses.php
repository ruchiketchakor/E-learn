
<?php
include './admin_header.php';
?>
<?php
include '../partials/db_connect.php';

if (isset($_POST['update'])) 
{
    $course_id=$_GET['id'];
    $id=$_SESSION['teacherid'];
    $course_title=$_POST['ctitle'];
    $lectures=$_POST['nolecture'];
    $overview=$_POST['coverview'];
    $price=$_POST['price'];
    $amount=$_POST['amount'];
    $thumbnail=$_FILES["doc"]["name"];

   
if($thumbnail != "")
{

    $query=mysqli_query($conn, "SELECT * FROM courses WHERE id=$course_id");
    $row=mysqli_fetch_array($query);
    $image=$row['thumbnail'];
     unlink("assets/course_images/".$image);
      
$target="assets/course_images/". $thumbnail;
if( move_uploaded_file($_FILES['doc']['tmp_name'],$target)){
$result = mysqli_query($conn, "UPDATE `courses` SET  `course_title`='$course_title', `course_title`='$course_title', `lectures`='$lectures',`overview`='$overview',`price`='$price',`amount`='$amount',`thumbnail`='$thumbnail'  where id='$course_id'");       
if($result){
    header("Location:all-courses.php?course=updated");
}

}
}
else{
$result = mysqli_query($conn, "UPDATE `courses` SET   `course_title`='$course_title', `lectures`='$lectures',`overview`='$overview',`price`='$price',`amount`='$amount' where id='$course_id'");       
if($result){
    header("Location:all-courses.php?course=updated");
    // exit();
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
                    <li class="breadcrumb-item"><a href="all-courses.php">All Courses</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Courses</li>
                </ol>
            </nav>
        </div>
    </div>
                <!-- /Row -->

                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                        <div class="dashboard_container">
                            <div class="dashboard_container_header">
                                <div class="dashboard_fl_1 text-center">
                                    <h3>Edit Your Details</h3>
                                </div>
                            </div>
                            <div class="dashboard_container_body p-4">
                                <!-- Basic info -->
                                <section class="bg-light">

                                    <div class="container">

                                        <!-- row Start -->
                                        <div class="row justify-content-center">



                                            <div class="col-lg-8 col-md-7">
                                                <!-- <form action="javascript:sendmail()" method="POST"> -->

                                                <div class="prc_wrap">
                                                    <!-- <form action="javascript:sendmail()" method="POST"> -->
                                                    <div class="prc_wrap_header">
                                                        <h4 class="property_block_title">Fillup The Form</h4>
                                                    </div>
                                                    <!-- <form action="javascript:sendmail()" method="POST"> -->
                                                    <div class="prc_wrap-body">
                                                        <form action="" method="POST" onsubmit="return validation()" enctype="multipart/form-data">

                                                        <?php
                                                         $course_id= $_GET['id'];
                                                         $result = mysqli_query($conn, "SELECT * FROM courses WHERE id=$course_id"); 
                                                         $res = mysqli_fetch_array($result);
                                                        ?>
                                                            <div class="form-group">
                                                                <label>Course Title</label>
                                                                <input type="text" class="form-control simple" name="ctitle"
                                                                    id="ctitle"  value="<?php echo $res['course_title']?>" required >
                                                                    
                                                            </div>

                                                          
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <label>No.of Lectures</label>
                                                                    <input type="text" class="form-control simple"  name="nolecture"
                                                                        id="nolecture"   value="<?php echo $res['lectures']?>" required>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Course Overview</label>
                                                                <textarea type="text" class="form-control simple" name="coverview"
                                                                    id="coverview"   required  > <?php echo $res['overview']?></textarea>
                                                            </div>
                                                            <div class="row">

                                                                <div class=" form-group container">
                                                                        <label>Course Price</label>


                                                                        <select type="text" id="seeAnotherField" name="price"
                                                                            class="form-control simple px-auto"  required >

                                                                            <option  value="<?php echo $res['price']?>" selected="selected"><?php echo $res['price']?></option>
                                                                            <option value="Free">Free</option>
                                                                           <option value="Paid">Paid</option>
                                                                        </select>


                                                                    </div>
                                                                    <div class="form-group container" id="otherFieldDiv">
                                                                        <label> Amount</label>
                                                                        <select type="text" name="amount"
                                                                            class="form-control simple px-auto" required >
                                                                            <option  value="<?php echo $res['amount']?>" selected="selected"><?php echo $res['amount']?></option>
                                                                            <option value="0">0</option>
                                                                            <option value="100">100</option>
                                                                            <option value="200">200</option>
                                                                            <option value="300">300</option>
                                                                            <option value="400">400</option>
                                                                            <option value="500">500</option>
                                                                            <option value="600">600</option>
                                                                            <option value="700">700</option>
                                                                            <option value="800">800</option>
                                                                            <option value="900">900</option>
                                                                            <option value="1000">1000</option>
                                                                            <option value="2000">2000</option>
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                                <div class="form-group">

                                                    <label>Add Thumbnail</label>
                                                    <div class="input-group mb-3">

                                                        <input type="file" class="form-control" name="doc"
                                                            id="inputGroupFile02" >
                                                    </div>
                                                </div>

                                                                <div class="form-group ml-3">
                                                                    <button class="btn btn-theme" name="update"
                                                                        type="submit">Update</button>
                                                                </div>

                                                            </div>
                                                            
                                                        </form>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>





                                </section>
</section>


<!-- ============================ Dashboard: My Order Start End ================================== -->

<!-- ============================== Start Newsletter ================================== -->

<!-- ================================= End Newsletter =============================== -->

<!-- ============================ Footer Start ================================== -->

<!-- ============================ Footer End ================================== -->

<!-- Log In Modal -->


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
                 $("#seeAnotherField").change(function() {
  if ($(this).val() == "Paid") {
    $('#otherFieldDiv').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldDiv').hide();
    $('#otherField').removeAttr('required');
    $('#otherField').removeAttr('data-error');
  }
});
$("#seeAnotherField").trigger("change");

</script>
<script>
// function validation()
// {
//     var val=document.getElementById('ctitle').value;
//     if(!val.match(/^[a-zA-Z])+$/))
//     {
//         alert('only characters are allowed');
//         return false;
//     }
//     return true;
// }
</script>
