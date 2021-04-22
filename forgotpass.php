<?php
        session_start();

//  if(isset( $_SESSION['username'])){
//     header("Location:index.php");
//  }
$showAlert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'partials/db_connect.php';

$forgot_email=$_POST['forgotemail'];

     $sql1="SELECT * FROM `users` WHERE user_email='$forgot_email'";
     $result1 = mysqli_query($conn, $sql1);
     $numrow = mysqli_num_rows($result1);
     if($numrow==1){
     $row = mysqli_fetch_assoc($result1);
     $otp=rand(11111,99999);
     $html="Your otp verification code is ".$otp;
     smtp_mailer( $forgot_email,'OTP Verification',$html);
     $sql= "UPDATE `users` SET `forgot_otp` = '$otp' WHERE `users`.`user_email` ='$forgot_email'";
     $result = mysqli_query($conn, $sql);
     if($result){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['forgot'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['forgot_email'] = $forgot_email;
        echo "forgot" .$forgot_email; 
        $showAlert=true;
     header("Location:_resetpass_otp.php?otpsuccess=true");

     }
    }
    else{
    header("Location: forgotpass.php?otpsuccess=false");
    }
}


   
function smtp_mailer($to,$subject,  $showError){
    include('partials/smtp/PHPMailerAutoload.php');
    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->Port=587;
    $mail->SMTPSecure="tls";
    $mail->SMTPAuth=true;
    $mail->Username="joneymaske@gmail.com";
    $mail->Password="maske@1315";
    $mail->SetFrom("joneymaske@gmail.com");
    $mail->addAddress($to);
    $mail->IsHTML(true);
    $mail->Subject=$subject;
    $mail->Body=$showError;
    $mail->SMTPOptions=array('ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>false
    ));
    if($mail->send()){
        echo "Mail send";
    }else{
        echo "Error occur";
    }
    // echo $msg;
}
    
?>


<?php include 'partials/header.php';?>

<section class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title">Forgot Password?</h1>
								
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
              <strong>Fail !</strong> Email is Incorrect!.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>


                     <div class="prc_wrap-body  d-flex justify-content-center row">
                         <div class="col-md-5 text-center">
                         <div class="m-4">
                         <h3 class="text-danger">Enter Your register email.</h3>
                         </div>
                     <form  method="post">
								
                                <div class="form-group">
                                    <input type="email" id="forgotemail" name="forgotemail" class="form-control" placeholder="Email" required>
                                </div>
                                                           
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-theme btn-rounded">Send OTP</button>
                                </div>
                            
                            </form>
								</div>
                                </div>
<?php include 'partials/footer.php';?>
