

<?php
include 'db_connect.php';
$query="SELECT * from `users`";
$result=mysqli_query($conn,$query);

?>
<?php
if(isset($_GET['sid'])) {
  $id=$_GET['sid'];
  $sql="DELETE FROM users WHERE id=$id";
  $run=mysqli_query($conn,$sql);
  if($run){
    header("Location: allstudents.php?studentdelete=true");
  }
   }
  ?>
   <?php
include 'header.php';
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php 
             if(isset($_GET['studentdelete']) && $_GET['studentdelete']=="true"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="  text-align: center;
              ">
              <strong>Delete !</strong> User deleted!.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

             <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Email ID</th>
                    <th>Enrolled Course</th>
                    <th> Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  while($row =mysqli_fetch_assoc($result)){
                    $sql="SELECT `users`.*, `course-enroll`.* FROM users 
                    JOIN  `course-enroll` ON users.id =  `course-enroll`.stud_id where users.user_category='Student' AND `course-enroll`.stud_id=".$row['id'];
                    $run=mysqli_query($conn,$sql);
                    $count=mysqli_num_rows($run);
                    ?>
                 
                  <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['user_name']?> </td>
                    <td><?php echo $row['user_email']?></td>
                    <td> <?php echo $count?></td>
                    <td>
                    <a href="allstudents.php?sid=<?php echo $row['id']?>" class="btn btn-block btn-danger btn-sm">Delete</a>
                   
                    </td>

                  </tr>
                 <?php   
                }
                ?>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Student ID</th>
                    <th>Name</th>
                    <th>Email ID</th>
                    <th>Enrolled Course</th>
                    <th> Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</div>

  <?php
include 'footer.php';
?>
