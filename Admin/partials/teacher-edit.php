<?php
include '../db_connect.php';

 if(isset($_GET['ida'])) {
$id=$_GET['ida'];
$sql1="SELECT * FROM teachers WHERE id=$id";
$run1=mysqli_query($conn,$sql1);
$row1 =mysqli_fetch_assoc($run1);
if($row1['status']==0){
  $sql2="UPDATE `teachers` SET `status` = '1' WHERE `teachers`.`id` = $id";
  $run2=mysqli_query($conn,$sql2);
  if($run2){
    header("Location: ../allteachers.php");
}
}
else{
  $sql3="UPDATE `teachers` SET `status` = '0' WHERE `teachers`.`id` = $id";
  $run3=mysqli_query($conn,$sql3);
  if($run3){
    header("Location: ../allteachers.php");
}
}
 }
 if(isset($_GET['idd'])) {
$id=$_GET['idd'];
$sql="DELETE FROM teachers WHERE id=$id";
$run=mysqli_query($conn,$sql);
if($run){
  header("Location: ../allteachers.php?teacherdelete=true");
}
 }
?>