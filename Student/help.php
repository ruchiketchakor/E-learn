<?php
 include '../Student/student_header.php';
?>
<section class="page-title p-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="breadcrumbs-wrap pb-5">
                    <h3 class="breadcrumb-title">Help?</h3>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav> -->
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ Agency List Start ================================== -->
<section class="bg-light pt-4 pb-4">

    <div class="container">

        
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
                            
                        
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control simple" id="Name">
                                    </div>
                                
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control simple" id="Sender">
                                    </div>
                               
                           
                            

                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control simple" id="Message"></textarea>
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-theme " type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>



            </div>

            
        </div>
        
    </div>

</section>

			<!-- ============================ User Dashboard End ================================== -->
			
			
			<!-- ============================ Footer Start ================================== -->
			<?php
 include '../Student/student_footer.php';
?>
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous">
</script>

<script src="https://smtpjs.com/v3/smtp.js"></script>

<script>
function sendmail() {

    var name = $('#Name').val();
    var email = $('#Sender').val();
    
    var message = $('#Message').val();

    var Body = 'Name: ' + name + '<br>Email: ' + email +  '<br>Message: ' + message;

    Email.send({
        SecureToken: "fbf31702-bb7f-4a4e-9c1c-4ccf17ee777f",
        To: 'jaswinirajput@gmail.com',
        From: "jaswinijadhav24@gmail.com",
        Subject: "New message on contact from " + name,
        Body: Body
    }).then(
        message => {

            if (message == 'OK') {
                alert('Your mail has been send. Thank you for connecting.');
            } else {
                console.error(message);
                alert('There is error at sending message. ')

            }

        });
}
</script>
</script>
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

	

<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:39:03 GMT -->

