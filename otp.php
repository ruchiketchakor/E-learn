

<?php include 'partials/header.php';?>

<section class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title">Verify Account?</h1>
								
							</div>
							
						</div>
					</div>
				</div>
			</section>

            <?php 
             if(isset($_GET['otpsuccess']) && $_GET['otpsuccess']=="false"){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="
              margin-top: 140px;    text-align: center;
              ">
              <strong>Fail !</strong> OTP is Incorrect!.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
             }
           ?>


                     <div class="prc_wrap-body  d-flex justify-content-center row">
                         <div class="col-md-5 text-center">
                         <div class="m-4">
                         <h3 class="text-danger">Enter OTP.</h3>
                         </div>
						 <form  action="partials/otpcheck.php" method="post">
								
								<div class="form-group">
									<input type="text" id="uotp" name="uotp" class="form-control" placeholder="OTP" required>
								</div>
							
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-md full-width pop-login">Sign Up</button>
								</div>
							
							</form>
								</div>
                                </div>

<?php include 'partials/footer.php';?>
