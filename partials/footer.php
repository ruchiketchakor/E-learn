<?php
 include 'db_connect.php';
// session_start();
?>
<footer class="dark-footer skin-dark-footer">
				<div>
					<div class="container">
						<div class="row text-center">
							
							<div class="col-lg-3 col-md-3">
								<div class="footer-widget">
									<img src="assets/img/Elearn.png" class="img-footer" alt="" style="margin-bottom: 0.5rem;">
									<div class="footer-add">
										<!-- <p>4967  Sardis Sta, Victoria 8007, Montreal.</p> -->
										<p>1800 1798 2100</p>
										<p>elearn@gmail.com</p>
									</div>
									
								</div>
							</div>		
							<div class="col-lg-3 col-md-3">
								<div class="footer-widget">
									<h4 class="widget-title">Menu</h4>
									<ul class="footer-menu">
										<li><a href="about-us.php">About Us</a></li>
										<!-- <li><a href="faq.php">Courses</a></li> -->
										<li><a href="checkout.php">Checkout</a></li>
										<li><a href="contact.php">Contact</a></li>
										<!-- <li><a href="blog.html">Blog</a></li> -->
									</ul>
								</div>
							</div>
									
							<div class="col-lg-3 col-md-3">
								<div class="footer-widget">
									<h4 class="widget-title">Categories</h4>
									<ul class="footer-menu">
										
										<?php
											 $result = mysqli_query($conn, "SELECT * FROM categories "); 
											 while($row=mysqli_fetch_assoc($result)){
											?>
											<li><a href="course_show.php?id=<?php echo $row['id']?>"><?php echo $row['category_name']?><span class="submenu-indicator"></span></a></li>						
											<?php }?>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-3">
								<div class="footer-widget">
									<h4 class="widget-title">Help & Support</h4>
									<ul class="footer-menu">
										<li><a href="#">Dashboard</a></li>
										<li><a href="#">FAQs</a></li>
										<li><a href="#">Contact</a></li>
										<!-- <li><a href="#">Privacy</a></li>
										<li><a href="#">Faqs</a></li> -->
									</ul>
								</div>
							</div>
							
							
							
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							
							<div class="col-lg-6 col-md-6">
								<p class="mb-0">© 2020 E-Learn. Designd By Team <a href="index.php">E-Learn</a>.</p>
							</div>
							
							<div class="col-lg-6 col-md-6 text-right">
								<ul class="footer-bottom-social">
									<li><a href="#"><i class="ti-facebook"></i></a></li>
									<li><a href="#"><i class="ti-twitter"></i></a></li>
									<li><a href="#"><i class="ti-instagram"></i></a></li>
									<li><a href="#"><i class="ti-linkedin"></i></a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
	<!-- Log In Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Log In</h4>
							<div class="login-form">
								<form method="post" action="index.php">
								
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control"  id="ulemail" name="ulemail"  placeholder="Email" required>
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<input type="password"  id="upass" name="upass" class="form-control" placeholder="*******" required>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width pop-login">Login</button>
									</div>
								
								</form>
							</div>
							
							<div class="social-login mb-3">
								<ul>
									
									<li><a href="forgotpass.php" class="theme-cl">Forget Password?</a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Sign Up Modal -->
			<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="sign-up">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Sign Up</h4>
							<div class="login-form">
							<form  action="./partials/_handlesignup.php" method="post">
								
									<div class="form-group">
										<input type="text" id="uname" name="uname" class="form-control" placeholder="Full Name" required>
									</div>
									
									<div class="form-group">
										<input type="email" id="uemail" name="uemail" class="form-control" placeholder="Email" required>
									</div>

									<div class="form-group">
                                          <select class="form-control" name="category" id="category" required>

										  <option value="Student">Student</option>
										  <option value="Teacher">Teacher</option>
										  </select>
								</div>

									<div class="form-group">
										<input type="password" id="upassword" name="upassword" class="form-control" placeholder="Password" required>
									</div>
									
									<div class="form-group">
										<input type="password" id="ucpassword" name="ucpassword" class="form-control" placeholder="Confirm Password" required>
									</div>

									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width pop-login">Sign Up</button>
									</div>
								
								</form>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			
	   <script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/counterup.min.js"></script>
		<script src="assets/js/custom.js"></script>

		