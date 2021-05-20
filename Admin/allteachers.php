
 <?php
include 'header.php';
?>
<?php
include 'db_connect.php';
$query="SELECT * from `teachers`";
$result=mysqli_query($conn,$query);
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
             if(isset($_GET['teacherdelete']) && $_GET['teacherdelete']=="true"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="  text-align: center;
              ">
              <strong>Delete !</strong> Teacher deleted!.
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
                    <th>Professor ID</th>
                    <th>Professor Name</th>
                    <th>Email</th>
                    <th>University</th>
                    <th>Course</th>
                    <th>Status</th>
                    <th> Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  while($row =mysqli_fetch_assoc($result)){
                 $sql="SELECT `teachers`.*,courses.* FROM teachers 
                JOIN courses ON teachers.id = courses.teacher_id where courses.teacher_id=".$row['id'];
                $run=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($run);
                ?>
                  <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?> </td>
                    <td><?php echo $row['email']?></td>
                    <td> <?php echo $row['university']?></td>
                    <td><?php echo $count?></td>
                    <td><?php if($row['status']==0) {
                   echo ' <a href="partials/teacher-edit.php?ida='.$row['id'].'" class="btn btn-block btn-outline-info btn-sm">Not Approve</a></td>';
                  }
                   else{
                    echo ' <a href="partials/teacher-edit.php?ida='.$row['id'].'" class="btn btn-block btn-outline-info btn-sm">Approve</a></td>';}
                    ?>
                    <td>
                    <a href="partials/teacher-edit.php?idd=<?php echo $row['id']?>" class="btn btn-block btn-danger btn-sm">Delete</a>
                   
                    </td>

                  </tr>
                 <?php   
                }
                ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Professor ID</th>
                    <th>Professor Name</th>
                    <th>Email</th>
                    <th>University</th>
                    <th>Course</th>
                    <th>Status</th>
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
