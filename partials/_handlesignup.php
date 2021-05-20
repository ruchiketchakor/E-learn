<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
        include 'db_connect.php';
        
        $user_name = $_POST['uname'];
        $user_email =$_POST['uemail'];
        $user_category =$_POST['category'];
        $user_password =$_POST['upassword'];
        $user_cpassword = $_POST['ucpassword'];
    
    $existSql = "SELECT * FROM `users` WHERE user_email='$user_email'";
    $result = mysqli_query($conn, $existSql);
    $numrow = mysqli_num_rows($result);
    if($numrow>0){
        $showError = "usedmail";

        header("Location:../index.php?signupsuccess=false&error=$showError");
    }
    else{
        if($user_password==$user_cpassword){
     $otp=rand(11111,99999);
     $hash= password_hash($user_password,PASSWORD_DEFAULT);
     $sql= "INSERT INTO `users` (`user_name`, `user_email`,  `user_category`,`user_password`, `otp`,`user_otp`) VALUES ( '$user_name', '$user_email', '$user_category', '$hash','$otp','')";
     $result = mysqli_query($conn, $sql);
 
     $html="<b>Hello</b>,<br><h2>Verify your email with OTP & Please Login</h2><br>Welcome to Optimal Web.<br>Let's get your email address verified with this OTP <br><b>" .$otp."</b>";
     smtp_mailer( $user_email,'OTP Verification',$html);
    
    
     if($result){
        $row = mysqli_fetch_assoc($result);
        session_start();
           $_SESSION['signup'] = true;
           $_SESSION['userid'] = $row['id'];
           $_SESSION['username'] = $user_name;
           $_SESSION['usercategory'] = $user_category;
           $_SESSION['useremail'] = $user_email;
           $_SESSION['upassword'] = $user_password;
         header("Location:../otp.php?signupsuccess=true");
        //  exit();
     }
     

       
   }
    else{
        $showError = "Password not matched";
        header("Location:../index.php?signupfail=false&error=$showError");
    }
    }
    }
    
    
    function smtp_mailer($to,$subject,  $showError){
        include('smtp/PHPMailerAutoload.php');
        $mail=new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host="smtp.gmail.com";
        $mail->Port=587;
        $mail->SMTPSecure="tls";
        $mail->SMTPAuth=true;
        $mail->Username="joneymaske@gmail.com";
        $mail->Password="joneymaske@1315";
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