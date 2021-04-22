

<?php
session_start();

// if(isset($_SESSION['username'])){
//    header("Location:index.php");
// }
$showAlert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'partials/db_connect.php';
$email =$_SESSION['forgot_email'];
$reset_pass = $_POST['newpass'];
$reset_cpass = $_POST['cnewpass'];
$existSql = "SELECT * FROM `users` WHERE user_email='$email'";
$result = mysqli_query($conn, $existSql);
$numrow = mysqli_num_rows($result);
if($numrow==1){
    $row = mysqli_fetch_assoc($result);
    if($reset_pass==$reset_cpass){
    $hash= password_hash($reset_pass,PASSWORD_DEFAULT);
$sql ="UPDATE `users` SET `user_password` = '$hash' WHERE `users`.`user_email` = '$email'";
$result = mysqli_query($conn, $sql);
if($result){
	$row = mysqli_fetch_assoc($result);
     $showAlert=true;
     header("Location:./index.php?resetpass=true");
     exit();
    }   
}
else{
    header("Location:_resetpass.php?resetpass=false&password=notmatched");
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
								<h1 class="breadcrumb-title">Reset Password</h1>
								
							</div>
							
						</div>
					</div>
				</div>
			</section>

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
                         <h3 class="text-danger">Enter your New Password</h3>
                         </div>
                     <form  method="post">
								
                                <div class="form-group">
                                    <input type="password" id="newpass" name="newpass" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="cnewpass" name="cnewpass" class="form-control" placeholder="Conform Password" required>
                                </div>
                                                           
                               
                                <div class="form-group">
                                    <button type="submit" class="btn btn-theme btn-rounded">Set Password</button>
                                </div>
                            
                            </form>
								</div>
                                </div>
<?php include 'partials/footer.php';?>
