<?php 
include 'db_connect.php';
if (isset($_POST['submit'])) {
session_start();

$student_name = $_POST['name'];
$student_degree= $_POST['degree'];
$student_email= $_POST['email'];
$student_about = $_POST['about'];
$student_skill= $_POST['skill'];
$student_location= $_POST['location'];
$student_phone = $_POST['phoneno'];
$student_website = $_POST['website'];
$student_dob= $_POST['DOB'];
$student_gender = $_POST['gender'];  
$student_pic = $_FILES['pic']['name'];  


if($student_pic != "")
{

$target="../assets/student_images/". $student_pic;
if( move_uploaded_file($_FILES['pic']['tmp_name'],$target)){

	$sql= "UPDATE `users` SET  `user_name`='$student_name', `degree`='$student_degree', `user_email`='$student_email',`about`='$student_about',
		`skill`='$student_skill',`location`='$student_location',`phoneno`='$student_phone',`website`='$student_website',`DOB`='$student_dob',
		`gender`='$student_gender',`thumbnail`='$student_pic'  where id=".   $_SESSION['userid'] ;
	$run = mysqli_query($conn, $sql);
	if($run){
    header("Location:../edit_myprofile.php?profile=updated");

	}
}
}
else{
	$query= "UPDATE `users` SET  `user_name`='$student_name', `degree`='$student_degree', `user_email`='$student_email',`about`='$student_about',
	`skill`='$student_skill',`location`='$student_location',`phoneno`='$student_phone',`website`='$student_website',`DOB`='$student_dob',
	`gender`='$student_gender' where id=".   $_SESSION['userid'] ;
$run1 = mysqli_query($conn, $query);
if($run1){
header("Location:../edit_myprofile.php?profile=updated");

}
}
   
	
}
?>