
	<link rel="stylesheet" href="https://cdn.plyr.io/3.6.3/plyr.css" />
	<!-- <link rel="stylesheet" href="style.css"> -->

<?php
include 'partials/header.php';


if (isset($_POST['submit'])) {
    $id=$_GET['cid'];
	$name = $_POST['rname'];
	$email= $_POST['remail'];
	$que = $_POST['que'];
	
	
$sql= "INSERT INTO `queries` ( `course_id`,`rname`,`remail`, `query`) 
VALUES ('$id','$name', '$email', '$que')";
 $result = mysqli_query($conn, $sql);
}
?>
<?php
// session_start();

if(!isset($_SESSION['userid'])){
    header("Location:index.php");
 }
?>

<style>
.col-lg-8{
	background-repeat:no-repeat;
}
#player
{
	height:29rem;
	width:47rem;
}
@media (max-width:670px) {
	#player
{
	height:12rem;
	width:21rem;
	repeat:no-repeat;
}
	
}

@media(min-width:768px) and (max-width:1024){
.row1
{
	display:flow-root;
}
}


</style>


<?php
$id=$_GET['cid'];
$result=mysqli_query($conn,"SELECT courses.*, teachers.* ,videos.*, categories.*
FROM courses
JOIN teachers ON courses.teacher_id = teachers.id
JOIN videos ON videos.course_id = courses.cid
JOIN categories ON categories.id = courses.course_category
where courses.cid=$id");
$row=mysqli_fetch_assoc($result);
?>
			<!-- ============================ Course Header Info End ================================== -->
			
			<!-- ============================ Course Detail ================================== -->
			<section class="bg-light">
				<div class="container">
					<div class="row row1" >
						<!-- <div class="row1"> -->
						<div class="col-lg-8 col-md-8">
						
							<div class="inline_edu_wrap">
								<div class="inline_edu_first text-center">
									<h4><?php echo $row['course_title']?></h4>
									
								</div>	
							
							</div>
							
							<video  id="player" playsinline controls controlsList="nodownload">
							<source id="video" src="Admin/assets/upload_video/<?php echo $row['video']?>" type="video/mp4" />
							</video>
							
					</div>	
						<div class="col-lg-4 col-md-4">
						
							<!-- Course info -->
							<div class="ed_view_box style_3">
							
								
									<div class="tab-pane" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
										<div class="edu_wraper">
											<h4 class="edu_title">Course Circullum</h4>
											<div id="accordionExample" class="accordion shadow circullum">

												<!-- Part 1 -->
												<?php 

												 $result1=mysqli_query($conn,"SELECT courses.*, videos.* 
												 FROM courses 
												 JOIN videos ON courses.cid = videos.course_id where courses.cid=$id");
												  while($row1=mysqli_fetch_assoc($result1)){
												?>
												<div class="card">
												  <div id="div1"  onclick="showvideo('<?php echo $row1['video'] ?>','<?php echo $row1['video_overview']?>')" style="  cursor: pointer;" class="card-header   bg-white shadow-sm border-0">
													<h6 class="mb-0 accordion_title " ><?php echo $row1['video_title']?></h6>
												  </div>
												  
												</div> 
												<?php }?>

												
												

											</div>
										</div>
									</div>
							</div>	
						</div> 
					
							<!-- All Info Show in Tab -->
						<div class="col-lg-8 col-md-8">

							<div class="tab_box_info mt-4">
								<ul class="nav nav-pills mb-3 light" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="overview-tab" data-toggle="pill" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
									</li>
								
									
									<li class="nav-item">
										<a class="nav-link" id="reviews-tab" data-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
									</li>
								</ul>
							
								<div class="tab-content" id="pills-tabContent">
									
									<!-- Overview Detail -->
									<div class="tab-pane fade show active" id="view" role="tabpanel" aria-labelledby="overview-tab">
										<!-- Overview -->
										<div class="edu_wraper" >
											<h4 class="edu_title">Video Overview</h4>
										    <p id="voverview"><?php echo $row['video_overview']?></p>	
											<h4 class="edu_title">Course Overview</h4>
											<p id="overview"><?php echo $row['overview']?></p>
											
										</div>
							
									</div>
									
									<!-- Curriculum Detail -->
									<div class="tab-pane fade mt-3" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
										<div class="edu_wraper ">
											<h4 class="edu_title">Course Circullum</h4>
											<div id="accordionExample" class="accordion shadow circullum">

												<!-- Part 1 -->
												<div class="card">
												  <div id="headingOne" class="card-header bg-white shadow-sm border-0">
													<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative text-dark collapsible-link py-2">Part 01: How To Learn Web Designing Step by Step</a></h6>
												  </div>
												  <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
													<div class="card-body pl-3 pr-3">
														<ul class="lectures_lists">
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 01</div>Web Designing Beginner</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 02</div>Startup Designing with HTML5 & CSS3</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 03</div>How To Call Google Map iFrame</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 04</div>Create Drop Down Navigation Using CSS3</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 05</div>How to Create Sticky Navigation Using JS</li>
														</ul>
													</div>
												  </div>
												</div>

												<!-- Part 2 -->
												<div class="card">
												  <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
													<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark collapsible-link py-2">Part 02: Learn Web Designing in Basic Level</a></h6>
												  </div>
												  <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
													<div class="card-body pl-3 pr-3">
														<ul class="lectures_lists">
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 01</div>Web Designing Beginner</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 02</div>Startup Designing with HTML5 & CSS3</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 03</div>How To Call Google Map iFrame</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 04</div>Create Drop Down Navigation Using CSS3</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 05</div>How to Create Sticky Navigation Using JS</li>
														</ul>
													</div>
												  </div>
												</div>

												<!-- Part 3 -->
												<div class="card">
												  <div id="headingThree" class="card-header bg-white shadow-sm border-0">
													<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark collapsible-link py-2">Part 03: Learn Web Designing in Advance Level</a></h6>
												  </div>
												  <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
													<div class="card-body pl-3 pr-3">
													  <ul class="lectures_lists">
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 01</div>Web Designing Beginner</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 02</div>Startup Designing with HTML5 & CSS3</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 03</div>How To Call Google Map iFrame</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 04</div>Create Drop Down Navigation Using CSS3</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 05</div>How to Create Sticky Navigation Using JS</li>
														</ul>
													</div>
												  </div>
												</div>
												
												<!-- Part 04 -->
												<div class="card">
												  <div id="headingThree" class="card-header bg-white shadow-sm border-0">
													<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="d-block position-relative collapsed text-dark collapsible-link py-2">Part 04: How To Become Succes in Designing & Development?</a></h6>
												  </div>
												  <div id="collapseThree" aria-labelledby="headingFour" data-parent="#accordionExample" class="collapse">
													<div class="card-body pl-3 pr-3">
													  <ul class="lectures_lists">
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 01</div>Web Designing Beginner</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 02</div>Startup Designing with HTML5 & CSS3</li>
															<li><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 03</div>How To Call Google Map iFrame</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 04</div>Create Drop Down Navigation Using CSS3</li>
															<li class="unview"><div class="lectures_lists_title"><i class="ti-control-play"></i>Lecture: 05</div>How to Create Sticky Navigation Using JS</li>
														</ul>
													</div>
												  </div>
												</div>

											</div>
										</div>
									</div>
									
									
									
									<!-- Reviews Detail -->
									<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
										
										<!-- Submit Reviews -->
										<div class="edu_wraper">
											<h4 class="edu_title">Submit Reviews</h4>
											<div class="review-form-box form-submit">
												<form method="post">
													<div class="row">
														
														<div class="col-lg-6 col-md-6 col-sm-12">
															<div class="form-group">
																<label>Name</label>
																<input class="form-control" name="rname" type="text" placeholder="Your Name">
															</div>
														</div>
														
														<div class="col-lg-6 col-md-6 col-sm-12">
															<div class="form-group">
																<label>Email</label>
																<input class="form-control" name="remail" type="email" placeholder="Your Email">
															</div>
														</div>
														
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="form-group">
																<label>Query</label>
																<textarea class="form-control ht-140" name="que" placeholder="Review"></textarea>
															</div>
														</div>
														
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="form-group">
																<button type="submit" name="submit" class="btn btn-theme">Ask Query</button>
															</div>
														</div>
														
													</div>
												</form>
											</div>
										</div>
										<!-- Reviews -->
										<div class="list-single-main-item fl-wrap">
											<div class="list-single-main-item-title fl-wrap">
												<h3>Queries  </h3>
											</div>
											<div class="reviews-comments-wrap">
												<!-- reviews-comments-item -->  
												<?php
												 $id=$_GET['cid'];
												 $result=mysqli_query($conn,"SELECT * FROM queries WHERE course_id=$id");
												 while($row=mysqli_fetch_assoc($result)){
								 
												?>
												<div class="reviews-comments-item">
													<div class="review-comments-avatar">
														<img src="assets/img/user-1.jpg" class="img-fluid" alt=""> 
													</div>
													<div class="reviews-comments-item-text">
														<h4><a href="#"><?php echo $row['rname']?></a><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i><?php echo $row['date']?></span></h4>
														
														<div class="clearfix"></div>
														<p><?php echo $row['query']?></p>
														
													</div>
												</div>
												<?php }?>
												<!--reviews-comments-item end-->  
												
											
												
											</div>
										</div>
										
										
							
									</div>
									
								</div>
							</div>
							
						</div>
						
						
						
					</div>
				
				</div>
			</section>
			<!-- ============================ Course Detail ================================== -->
			
			
		
			<!-- ============================ Footer Start ================================== -->
			<?php
           include 'partials/footer.php'
           ?>
			<!-- ============================ Footer End ================================== -->
			
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		
	<script>
	function showvideo(videourl,overview){
	
		document.getElementById("video").src='Admin/assets/upload_video/'+videourl;
		document.getElementById("player").load();
		document.getElementById("voverview").innerHTML=''+overview;
		// document.getElementById("view").load();
		var element = document.getElementById("div1");
         element.classList.add("active");

	
		// alert("ok");
	}
	</script>
		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="https://cdn.plyr.io/3.6.3/plyr.polyfilled.js"></script>
	