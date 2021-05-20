
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
                  <th>Course ID</th>
                    <th>Category</th>
                    <th>Course Name</th>
                    <th>Professor</th>
                    <th>Payable</th>
                    <th>Enrollers</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                include 'db_connect.php';
                $query="SELECT   courses.*, teachers.* ,categories.*
                FROM courses 
                JOIN teachers ON courses.teacher_id = teachers.id
                JOIN categories ON courses.course_category = categories.id";
                $result=mysqli_query($conn,$query);
               
                while($row =mysqli_fetch_assoc($result)){
                  $sql=mysqli_query($conn ,"SELECT   courses.*,  `course-enroll`.*
                  FROM courses 
                 JOIN `course-enroll` ON courses.cid = `course-enroll`.course_id where courses.cid=".$row['cid']);
                 $count=mysqli_num_rows($sql);
                  ?>
                  <tr>
                    <td><?php echo $row['cid']?></td>
                    <td><?php echo $row['category_name']?></td>
                    <td><?php echo $row['course_title']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php
                    if( $row['amount']==0){
                      echo "Free";
                    }
                    else{

                      echo $row['amount'];
                    }
                      ?>
                      </td>
                    <td><?php echo $count?></td>
                  </tr>
                 <?php }?>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Course ID</th>
                    <th>Category</th>
                    <th>Course Name</th>
                    <th>Professor</th>
                    <th>Payable</th>
                    <th>Enrollers</th>
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
