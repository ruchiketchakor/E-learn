<?php
 session_start();
 include 'partials/db_connect.php';
 if(!isset( $_SESSION['signup'])){
    header("Location:index.php?wrongurl");
 }
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $otp=$_POST['uotp'];

$userEmail=$_SESSION['uemail'];
$user_category=$_SESSION['usercategory'];

$sql= "UPDATE `users` SET `user_otp` = '$otp' WHERE `users`.`user_email` ='$userEmail'";
 $result = mysqli_query($conn, $sql);
 if($result){
    $sql1="SELECT * FROM `users` WHERE user_email='$userEmail'";
     $result1 = mysqli_query($conn, $sql1);
     $numrow = mysqli_num_rows($result1);
     if($numrow==1){
     $row = mysqli_fetch_assoc($result1);
     if($row['otp']==$row['user_otp']){
        if($user_category=="Teacher"){
            $_SESSION['signotp'] = true;
            header("Location:teacher_signup.php");
       }
       else{
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['user_name'];
        echo "logged in" .$username; 
        $_SESSION['id'] = $row['id'];
        $_SESSION['useremail'] = $userEmail;
        $showAlert=true;
       
            header("Location: index.php?loginsuccess=true");
        
        exit();
       }
        }
        else{
            header("Location: otp.php?otpsuccess=false&error=wrongotp");
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
								<h1 class="breadcrumb-title">Verify Account?</h1>
								
							</div>
							
						</div>
					</div>
				</div>
			</section>

            <?php 
             if(isset($_GET['otpsuccess']) && $_GET['otpsuccess']=="false"){
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
						 <form  action="otp.php" method="post">
								
								<div class="form-group">
									<input type="text" id="uotp" name="uotp" class="form-control" placeholder="OTP" required>
								</div>
							
								<div class="form-group">
									<button type="submit" name="savesign" class="btn btn-md full-width pop-login">Sign Up</button>
								</div>
							
							</form>
								</div>
                                </div>
<?php include 'partials/footer.php';?>
