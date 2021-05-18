
<?php
include './admin_header.php';
?>
<?php
if(isset($_POST['reply'])) {
	$solution = $_POST['sol'];
	$hiddenId = $_POST['hiddenId'];
	
	$sql= "UPDATE `queries` SET `solution` = '$solution' WHERE `queries`.`qid` ='$hiddenId'";
	 $result = mysqli_query($conn, $sql);
	 if($sql){

		 header("Location:reviews.php?reply=true");
	 }
	
}


if(isset($_GET['qid'])) {
	$id=$_GET['qid'];
	$sql="DELETE FROM queries WHERE qid=$id";
	$run=mysqli_query($conn,$sql);
	if($run){
	  header("Location:reviews.php");
	}
	 }
?>
<style>
.hide{
	display:none;
}
.show{
	display:block;
}
</style>

						<div class="col-lg-9 col-md-9 col-sm-12">
							
						<?php 
             if(isset($_GET['reply']) && $_GET['reply']=="true"){
              echo ' <div class="alert alert-success alert-dismissible fade show" role="alert" style="
              margin-top: 140px;    text-align: center;
              ">
              <strong> Reply</strong> send!.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">All Reviews</li>
										</ol>
									</nav>
								</div>
							</div>
							<!-- /Row -->
							
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="dashboard_container">
										<div class="dashboard_container_header">
											<div class="dashboard_fl_1">
												<h4>All Queries</h4>
											</div>
										</div>

										<div class="dashboard_container_body">
											<?php 

											$query=mysqli_query($conn,"SELECT queries.*, courses.* 
											FROM courses 
											JOIN queries ON courses.cid = queries.course_id ");
									        $run = mysqli_fetch_assoc($query);
										   while($row = mysqli_fetch_assoc($query)){
					 
											?>
											<div class="reviews-comments-wrap col-12">
											
													<div class="reviews-comments-item-text">
														<h4><a href="#"><?php echo $row['rname']?></a><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i><?php echo $row['date']?></span></h4>
														
														<div class="clearfix"></div>
														<p><?php echo $row['query']?></p>
													

														<?php  if(!empty($row['solution'])){?>
													
													<div class="reviews-comments-item-text pb-4">
													<hr>
														<h4><a href="#">Solution</a><span class="reviews-comments-item-date"></span></h4>
														
														<div class="clearfix"></div>
														<p><?php echo $row['solution'];?></p>
														
													</div>
												<?php }?>
												
														<button id="seeAnotherField" value="reply" onclick="replyQuery()" type="button" class="btn btn-outline-success" style="padding:6px 12px;">Reply</button>
														<a href="reviews.php?qid=<?php echo $row['qid']?>"><button type="button" class="btn btn-outline-danger" style="padding:6px 12px;">Delete</button></a>  
													</div>
										

											</div>
											

											<div id="otherFieldDiv" class="edu_wraper hide" >
											<h4 class="edu_title text-white">Solution</h4>
											<div class="review-form-box form-submit">
												<form method="post">
													<div class="row">
														
														
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="form-group">
																<label>Solution</label>
																<textarea class="form-control ht-140" name="sol" placeholder="Solution"></textarea>
															</div>
														</div>
														<input type="hidden" name="hiddenId" value="<?php echo $row['qid']?>">
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="form-group">
																<button type="submit" name="reply" class="btn btn-theme">Reply</button>
															</div>
															
														</div>
														
													</div>
												</form>
											</div>
										</div>
										   <?php }?>
											
											
												
												
										</div>
										
										
									</div>
								</div>
							</div>
							<!-- /Row -->
							
						</div>
					
					</div>
					<!-- Row -->
					
				</div>
			</section>
			<!-- ============================ Dashboard: My Order Start End ================================== -->
			
		
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/counterup.min.js"></script>
		<script src="assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
		<script src="assets/js/metisMenu.min.js"></script>	
		<script>
			$('#side-menu').metisMenu();
		</script>

<script>

function replyQuery(){
	const reply= document.getElementById("otherFieldDiv").classList;
	if(reply.contains("hide")){
       reply.remove("hide");
	   reply.add("show");
	}
	else{
		reply.remove("show");
	   reply.add("hide");
	}
}
 
</script>
	</body>

<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:39:00 GMT -->
</html>