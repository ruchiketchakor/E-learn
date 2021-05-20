
<?php
include 'db_connect.php';
$query="SELECT * from `categories`";
$result=mysqli_query($conn,$query);

?>
<?php
if(isset($_GET['catid'])) {
  $id=$_GET['catid'];
  $sql="DELETE FROM categories WHERE id=$id";
  $run=mysqli_query($conn,$sql);
  if($run){
    header("Location: coursecat.php?categorydelete=true");
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
             if(isset($_GET['categorydelete']) && $_GET['categorydelete']=="true"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="  text-align: center;
              ">
              <strong>Delete !</strong> Category deleted!.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>
             <?php 
             if(isset($_GET['categoryinsert']) && $_GET['categoryinsert']=="true"){
              echo ' <div class="alert alert-success alert-dismissible fade show" role="alert" style="  text-align: center;
              ">
              <strong>Category !</strong> Added!.
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
              <div class="nav-item ">
                    <a class="nav-link"  href="add_category.php">
                      <button class="btn  bg-gradient-warning btn-sm">Add Category</button>
                    </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Courses</th>
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  while($row =mysqli_fetch_assoc($result)){
                    $sql="SELECT `categories`.*, `courses`.* FROM categories 
                    JOIN  `courses` ON categories.id =  `courses`.course_category where courses.course_category=".$row['id'];
                    $run=mysqli_query($conn,$sql);
                    $count=mysqli_num_rows($run);
                    ?>
                  <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['category_name']?></td>
                    <td><?php echo $count?></td>
                    <td>
                    <a href="coursecat.php?catid=<?php echo $row['id']?>" class="btn btn-block btn-danger btn-sm">Delete</a>
                   
                    </td>
                  </tr>
              <?php } ?>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Courses</th>
                    <th>Action</th>
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
