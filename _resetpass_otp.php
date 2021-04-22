<?php
session_start();

//  if(isset( $_SESSION['username'])){
//     header("Location:index.php");
//  }
$showAlert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'partials/db_connect.php';

$otp2=$_POST['fotp'];
$sql1="SELECT * FROM `users`";
$result1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result1);
$email =$_SESSION['forgot_email'];


$sql= "UPDATE `users` SET `forgot_user_otp` = '$otp2' WHERE `users`.`user_email` ='$email'";
$result = mysqli_query($conn, $sql);
if($result){
    $sql1="SELECT * FROM `users` WHERE user_email='$email'";
    $result1 = mysqli_query($conn, $sql1);
    $numrow = mysqli_num_rows($result1);
    if($numrow==1){
    $row = mysqli_fetch_assoc($result1);
    if($row['forgot_otp']==$row['forgot_user_otp']){
        $_SESSION['reset_otp'] = true;
       $showAlert=true;

       header("Location:_resetpass.php?otptrue=true");
       exit();
    }
    else{
        $showError = "OTP is Not correct";
       header("Location: _resetpass_otp.php?otptrue=false&error=$showError");
   }
  }
 
}
 
}

?>


<?php include 'partials/header.php';?>

<section class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title">OTP</h1>
								
							</div>
							
						</div>
					</div>
				</div>
			</section>

            <?php 
             if(isset($_GET['otptrue']) && $_GET['otptrue']=="false"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="
              margin-top: 140px;    text-align: center;
              ">
              <strong>Fail !</strong> OTP is Incorrect!.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>
                     <div class="prc_wrap-body  d-flex justify-content-center row">
                         <div class="col-md-5 text-center">
                         <div class="m-4">
                         <h3 class="text-danger">Enter OTP.</h3>
                         </div>
                     <form  method="post">
								
                                <div class="form-group">
                                    <input type="text" id="fotp" name="fotp" class="form-control" placeholder="OTP" required>
                                </div>
                                                           
                               
                                <div class="form-group">
                                    <button type="submit" class="btn btn-theme btn-rounded">Submit</button>
                                </div>
                            
                            </form>
								</div>
                                </div>
<?php include 'partials/footer.php';?>
