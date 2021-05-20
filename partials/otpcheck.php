
<?php
session_start();
include 'db_connect.php';

if(isset($_POST['submit'])){

    $otp=$_POST['uotp'];

$userEmail=$_SESSION['useremail'];
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
            header("Location:../teacher_signup.php");
       }
       else{
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['user_name'];
        echo "logged in" .$username; 
        $_SESSION['id'] = $row['id'];
        $_SESSION['useremail'] = $userEmail;
        $showAlert=true;
       
            header("Location: ../index.php?loginsuccess=true");
        
        exit();
       }
        }
        else{
            header("Location: ../otp.php?otpsuccess=false&error=wrongotp");
        }
    }   
}

}
?>