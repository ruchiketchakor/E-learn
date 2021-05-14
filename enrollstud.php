
<?php
 include 'partials/db_connect.php';
 session_start();
  if(isset($_POST['enroll'])){
     $id=$_GET['courseid'];
	  $uid=$_SESSION['userid'];
	  $sql=mysqli_query($conn,"INSERT INTO `course-enroll` ( `stud_id`,`course_id`) VALUES ('$uid','$id')");
	  if($sql){
		header("Location:course_play.php?cid=".$id);  
	}
}
?>