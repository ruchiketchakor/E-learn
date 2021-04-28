
<?php
session_start();
if(isset($_SESSION['teacherid'])){
 
include '../partials/db_connect.php';

$id=$_SESSION['teacherid'];
$query="SELECT * from `teachers` where `id` = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if($row['status']==1){
    header("Location:dashboard.php");
}
}
else{
    header("Location:../index.php");

}

?>

<h1>Wait for 2hrs to approve your request</h1>