
		
<?php include 'partials/header.php';?>
			
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
		
           <!-- ============================ Page Title Start================================== -->
			<section class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title">Het in Touch</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Contact</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->	
			
			<!-- ============================ Agency List Start ================================== -->
			<section class="bg-light">
			
				<div class="container">
				
					<!-- row Start -->
					<div class="row justify-content-center">
						

					
						<div class="col-lg-8 col-md-7">
							<!-- <form action="javascript:sendmail()" method="POST"> -->

							<div class="prc_wrap">
								<!-- <form action="javascript:sendmail()" method="POST"> -->
								<div class="prc_wrap_header">
									<h4 class="property_block_title">Fillup The Form</h4>
								</div>
								<!-- <form action="javascript:sendmail()" method="POST"> -->
								<div class="prc_wrap-body">
									<form action="javascript:sendmail()" method="POST">
									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Name</label>
												<input type="text" class="form-control simple" id="Name">
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Email</label>
												<input type="email" class="form-control simple" id="Sender">
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label>Subject</label>
										<input type="text" class="form-control simple" id="Subject">
									</div>
									
									<div class="form-group">
										<label>Message</label>
										<textarea class="form-control simple" id="Message"></textarea>
									</div>
									
									<div class="form-group">
										<button class="btn btn-theme" type="submit">Submit Request</button>
									</div>
									</form>
								</div>
							</div>
							
							
											
						</div>
					
						<!-- <div class="col-lg-4 col-md-5">
						
							<div class="prc_wrap">
								
								<div class="prc_wrap_header">
									<h4 class="property_block_title">Reach Us</h4>
								</div>
								
								<div class="prc_wrap-body">
									<div class="contact-info">
								
										<h2>Get In Touch</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
										
										<div class="cn-info-detail">
											<div class="cn-info-icon">
												<i class="ti-home"></i>
											</div>
											<div class="cn-info-content">
												<h4 class="cn-info-title">Reach Us</h4>
												2512, New Market,<br>Eliza Road, Sincher 80 CA,<br>Canada, USA
											</div>
										</div>
										
										<div class="cn-info-detail">
											<div class="cn-info-icon">
												<i class="ti-email"></i>
											</div>
											<div class="cn-info-content">
												<h4 class="cn-info-title">Drop A Mail</h4>
												support@Rikada.com<br>Rikada@gmail.com
											</div>
										</div>
										
										<div class="cn-info-detail">
											<div class="cn-info-icon">
												<i class="ti-mobile"></i>
											</div>
											<div class="cn-info-content">
												<h4 class="cn-info-title">Call Us</h4>
												(41) 123 521 458<br>+91 235 548 7548
											</div>
										</div>
										
									</div>
								</div>
							</div>
							
						</div> -->
						
					</div>
					<!-- /row -->		
					
				</div>
						
			</section>
			<!-- ============================ Agency List End ================================== -->
			
		
			</section> -->
			<!-- ================================= End Newsletter =============================== -->
			
			<!-- ============================ Footer Start ================================== -->
			<?php include 'partials/footer.php';?>

			<!-- ============================ Footer End ================================== -->
			
		
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script
			src="https://code.jquery.com/jquery-2.2.4.min.js"
			integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			crossorigin="anonymous">
		</script>

		<script src="https://smtpjs.com/v3/smtp.js"></script>
			
		<script>  

			function sendmail(){
				
				var name = $('#Name').val();
				var email = $('#Sender').val();
				var subject = $('#Subject').val();
				var message = $('#Message').val();

				var Body='Name: '+name+'<br>Email: '+email+'<br>Subject: '+subject+'<br>Message: '+message;

				Email.send({
					SecureToken:"fbf31702-bb7f-4a4e-9c1c-4ccf17ee777f",
					To: 'optimalweb09@gmail.com',
					From: "demooptimalweb@gmail.com",
					Subject: "New message on contact from "+name,
					Body: Body
				}).then(
					message =>{
								
					if(message=='OK'){
						alert('Your mail has been send. Thank you for connecting.');
					}
					else{
						console.error (message);
						alert('There is error at sending message. ')
									
					}

			 	});
			}

            </script>
			
			<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/counterup.min.js"></script>
		<script src="assets/js/custom.js"></script>