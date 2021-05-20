<?php 
  include './admin_header.php';
?>
<?php

include '../partials/db_connect.php';

  if(isset($_POST['submit']))
  {
      $id=$_SESSION['teacherid'];
      $name=$_POST['name'];
      $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];

      $result=mysqli_query($conn,"INSERT INTO teacher_contact (teacher_id, name,email,subject,message) VALUES ('$id','$name','$email','$subject','$message')");

      
 $html="<b>Hello</b>,<br>Name= ".$name. " <br>Email= ".$email."<br>Subject= ".$subject."<br>Message= ".$message." <br><br> Regards,<br>Elearn ";
 smtp_mailer( 'sushmitachaudhari15@gmail.com','Teacher Contact',$html);

      
          if($result)
      {
          header("Location:teacher_contact.php?contact=true");
        //   exit();
      } 


	}

	
 
function smtp_mailer($to,$subject,  $showError){
    include('../partials/smtp/PHPMailerAutoload.php');
    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->Port=587;
    $mail->SMTPSecure="tls";
    $mail->SMTPAuth=true;
    $mail->Username="joneymaske@gmail.com";
    $mail->Password="joneymaske@1315";
    $mail->SetFrom("joneymaske@gmail.com");
    $mail->addAddress($to);
    $mail->IsHTML(true);
    $mail->Subject=$subject;
    $mail->Body=$showError;
    $mail->SMTPOptions=array('ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>false
    ));
    if($mail->send()){
        echo "Mail send";
    }else{
        echo "Error occur";
    }
    // echo $msg;
}
  
?>
					
    <div class="col-lg-9 col-md-9 col-sm-12">
	<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
		<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                <div class="dashboard_container">
                    <div class="dashboard_container_header">
                        <div class="dashboard_fl_1 text-center">
                            <h3>Get In Touch</h3>
                        </div>
                    </div>			
				</div>
			</div>
		</div>
		<?php 
             if(isset($_GET['contact']) && $_GET['contact']=="true"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style=" text-align: center;
              ">
              <strong>Success !</strong> Thanks for contacting to Elearn.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>';
            }
            ?>
		<div class="container">
				
			<div class="row justify-content-center">
						
				<div class="col-lg-8 col-md-7">

					<div class="prc_wrap">
						<div class="prc_wrap_header">
							<h4 class="property_block_title">Fillup The Form</h4>
						</div>
						<div class="prc_wrap-body">
							<form  method="POST">
								<div class="row">
									<div class="col-lg-6 col-md-12">
										<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control simple" id="Name" name="name">
										</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Email</label>
												<input type="email" class="form-control simple" id="Sender" name="email">
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label>Subject</label>
										<input type="text" class="form-control simple" id="Subject" name="subject">
									</div>
									
									<div class="form-group">
										<label>Message</label>
										<textarea class="form-control simple" id="Message" name="message"></textarea>
									</div>
                                    
									
									<div class="form-group">
										<button class="btn btn-theme" type="submit" name="submit" >Submit Request</button>
									</div>
									</form>
								</div>
							</div>	
											
						</div>
						
					</div>	
					
				</div>
            </div>
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>	

		</div>
    </div>    
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<!-- <script
			src="https://code.jquery.com/jquery-2.2.4.min.js"
			integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			crossorigin="anonymous">
		</script> -->

		<!-- <script src="https://smtpjs.com/v3/smtp.js"></script> -->
			
		<!-- <script>  

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

            </script> -->
			
			<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/counterup.min.js"></script>
		<script src="assets/js/custom.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
            <script>
            $('#side-menu').metisMenu();
            </script>