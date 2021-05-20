<?php
include './admin_header.php';
?>

<?php
include '../partials/db_connect.php';

if (isset($_POST['upload'])) 
{
    $course_id=$_POST['id'];
    $id=$_SESSION['teacherid'];
    $course_title=$_POST['course_title'];
    $course_category=$_POST['course_category'];
    $lectures=$_POST['lectures'];
    $overview=$_POST['overview'];
    $price=$_POST['price'];
    $amount=$_POST['amount'];
    $thumbnail=$_FILES["doc"]["name"];

    // echo  $course_id;
    $target="assets/course_images/". $thumbnail;

    if( move_uploaded_file($_FILES['doc']['tmp_name'],$target)){

        $result=mysqli_query($conn,"INSERT INTO courses (teacher_id,course_title, course_category, lectures, overview, price, amount,thumbnail) VALUES ('$id','$course_title','$course_category','$lectures','$overview','$price','$amount','$thumbnail')");

        if($result){
    //         $run = mysqli_query($conn,"SELECT * FROM `courses` WHERE teacher_='$teacher_email'");
    //         $row = mysqli_fetch_assoc($run);
    //   $_SESSION['course_id'] =$course_id;
     header("Location:courses.php?course_added=true");

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
                                        <li class="breadcrumb-item"><a href="courses.php">courses</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Course</li>
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
                                               
                                                <div class="form-group">
                                                    <label>Course Title</label>
                                                    <input type="text" class="form-control simple" name="course_title"
                                                        id="ctitle" required>
                                                </div>
                                                <div class="row">
                                             
                                                            <div class="form-group container" id="amount" >
                                                                    <label>Course Category</label>
                                                                    <select type="text" name="course_category" class="form-control simple px-auto" style="height:56px;"onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;this.blur();'>
                                                                    <?php
                                                                     $result = mysqli_query($conn, "SELECT * FROM categories "); 
                                                                    //  $res = mysqli_fetch_array($result);
										                         	 while($row=mysqli_fetch_assoc($result)){
                                                                    ?>
                                                                    <option value="<?php echo $row['id']?>"><?php  echo $row['category_name']?></option>
                                                                   
                                                                    <?php }?>
                                                                    </select>
                                                                    </div>   
                                                            </div>  
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>No.of Lectures</label>
                                                        <input type="text" class="form-control simple" name="lectures"
                                                            id="nolecture" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Course Overview</label>
                                                    <textarea type="text" class="form-control simple" name="overview"
                                                        id="coverview" required></textarea>
                                                </div>
                                                <div class="row">

                                                <div class=" form-group container">
                                                        <label>Course Price</label>


                                                        <select type="text" id="seeAnotherField" name="price"
                                                            class="form-control simple px-auto">

                                                            <option value="free">Free</option>
                                                            <option value="Paid">Paid</option>
                                                        </select>


                                                    </div>
                                                    <div class="form-group container" id="otherFieldDiv">
                                                        <label> Amount</label>
                                                        <select type="text" name="amount"
                                                            class="form-control simple px-auto">
                                                            <option type =" hidden" value="0">0</option>
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
                                                            id="inputGroupFile02" required>
                                                    </div>
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