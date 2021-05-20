<?php 
session_start();

include 'db_connect.php';
if (isset($_POST['submit'])) {

$teacher_name = $_POST['tname'];
$teacher_email= $_POST['temail'];
$teacher_desi = $_POST['designation'];
$teacher_uni= $_POST['university'];
$teacher_dept= $_POST['department'];
$teacher_link = $_POST['website'];
$teacher_city = $_POST['city'];
$teacher_state= $_POST['state'];
$teacher_pic = $_FILES['pic']['name'];  
$teacher_bio = $_POST['bio'];

$existSql = "SELECT * FROM `users` WHERE user_email='$teacher_email'";
$res = mysqli_query($conn, $existSql);
$numrow = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);
if($numrow>1){
     header("Location:../teacher_signup.php?email=used");
    //  echo "used";
}
elseif($numrow==1 && $row['user_category']=="Teacher")
{
    $target="../Teacher/assets/teacher_images/". $teacher_pic;
  if( move_uploaded_file($_FILES['pic']['tmp_name'],$target)){

$sql= "INSERT INTO `teachers` ( `name`,`email`, `designation`,`university`, `department`,`website`,`city`,`state`,`photo`,`bio`) 
VALUES ('$teacher_name', '$teacher_email', '$teacher_desi', '$teacher_uni','$teacher_dept','$teacher_link','$teacher_city','$teacher_state','$teacher_pic','$teacher_bio')";
 $result = mysqli_query($conn, $sql);
 
 $html="<b>Hello</b>,<br><h2>".$teacher_name." Wants Approval for teacher admin panel!</h2>Please aprrove this teacher after varification. 
 <br> please login to system and check the ".$teacher_name."  detail.</b><br><br> Regards,<br>Elearn ";
//  smtp_mailer("sushmitachaudhari15@gmail.com",'Teacher Approval',$html);

 if($result){

    $query = "SELECT * FROM `teachers` WHERE email='$teacher_email'";
    $run = mysqli_query($conn, $query);
    $row1 = mysqli_fetch_assoc($run);
    //  $row = mysqli_fetch_assoc($res);
    $_SESSION['teacher-name'] =$teacher_name;
      $_SESSION['teacherid'] = $row1['id'];
     header("Location:../Teacher/time.php");
     exit();
    }
}
else{
    echo "noo";
}
}
else{
     header("Location:../teacher_signup.php?teacher=fail");
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