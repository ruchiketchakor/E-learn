<?php 
session_start();
include 'partials/db_connect.php';
if(!isset(  $_SESSION['signotp'])){
   header("Location:index.php?wrongurl");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'partials/db_connect.php';

$teacher_name = $_POST['tname'];
$teacher_email= $_POST['temail'];
$teacher_desi = $_POST['designation'];
$teacher_uni= $_POST['university'];
$teacher_dept= $_POST['department'];
$teacher_link = $_POST['website'];
$teacher_city = $_POST['city'];
$teacher_state= $_POST['state'];
$teacher_pic = $_FILES["pic"]["name"];  
// $teacher_pic= $_POST['pic'];
$teacher_bio = $_POST['bio'];

$existSql = "SELECT * FROM `users` WHERE user_email='$teacher_email'";
$res = mysqli_query($conn, $existSql);
$numrow = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);
if($numrow>1){
     header("Location:teacher_signup.php?email=used");
    //  echo "used";
}
elseif($numrow==1 && $row['user_category']=="Teacher")
{
    

$sql= "INSERT INTO `teachers` ( `name`,`email`, `designation`,`university`, `department`,`website`,`city`,`state`,`photo`,`bio`) 
VALUES ('$teacher_name', '$teacher_email', '$teacher_desi', '$teacher_uni','$teacher_dept','$teacher_link','$teacher_city','$teacher_state','$teacher_pic','$teacher_bio')";
 $result = mysqli_query($conn, $sql);
 if($result){

    $query = "SELECT * FROM `teachers` WHERE email='$teacher_email'";
    $run = mysqli_query($conn, $query);
    $row1 = mysqli_fetch_assoc($run);
    //  $row = mysqli_fetch_assoc($res);
      $_SESSION['teacherid'] = $row1['id'];
     header("Location:Admin/dashboard.php");
     exit();
    }
}
else{
     header("Location:teacher_signup.php?teacher=fail");
}

}
?>

<?php include 'partials/header.php';?>

<section class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title">Teacher Sign Up</h1>
								
							</div>
							
						</div>
					</div>
				</div>
			</section>
            <?php 
             if(isset($_GET['email']) && $_GET['email']=="used"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="
              margin-top: 140px;    text-align: center;
              ">
              <strong>Fail !</strong> Email is already exist!.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>
 <?php 
             if(isset($_GET['teacher']) && $_GET['teacher']=="fail"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="
              margin-top: 140px;    text-align: center;
              ">
              <strong>Fail !</strong> Please insert valid email .
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>
            <?php 
             if(isset($_GET['resetpass']) && $_GET['resetpass']=="false"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="
              margin-top: 140px;    text-align: center;
              ">
              <strong>Fail !</strong> Passwords Not Matched!.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>

                     <div class="prc_wrap-body  d-flex justify-content-center row">
                         <div class="col-md-5 text-center">
                         <div class="m-4">
                         <h3 class="text-danger">Sign Up Details</h3>
                         </div>
                     <form  method="post">
							
                                <div class="form-group">
                             <input type="text"  name="tname" class="form-control" placeholder="Name" required>
                       
                                </div>
                                <div class="form-group">
                                    <input type="email"  name="temail" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="designation" class="form-control" placeholder="Designation" required>
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="university" class="form-control" placeholder="University" required>
                                </div>
                                 <div class="form-group">
                                    <input type="text"  name="department" class="form-control" placeholder="Department" required>
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="website" class="form-control" placeholder="Any Website">
                                </div> 
                                <div class="form-group">
                                    <input type="text"  name="city" class="form-control" placeholder="City" required>
                                </div> 
                                <div class="form-group">
                                    <input type="text"  name="state" class="form-control" placeholder="State" required>
                                </div> 
                                <div class="form-group">
                                    <input type="file"  name="pic" class="form-control" placeholder="Profile Photo" onchange="readURL(this);" required>
                                    <img id="blah" class="mt-3 border" src="#" alt="your image" />
                                </div> 
                                <div class="form-group">
                                    <textarea name="bio"  class="form-control"  cols="30" rows="10" placeholder="Bio" required></textarea>
                                </div>
                                                
                               
                                <div class="form-group">
                                    <button type="submit" class="btn btn-theme btn-rounded">Submit</button>
                                </div>
                            
                            </form>
								</div>
                                </div>
<?php include 'partials/footer.php';?>
<script>
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>