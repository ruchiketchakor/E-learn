<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<?php
include './admin_header.php';
?>
<div class="col-lg-9 col-md-9 col-sm-12">


                <!-- /Row -->

                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                        <div class="dashboard_container">
                            <div class="dashboard_container_header">
                                <div class="dashboard_fl_1 text-center">
                                    <h3>Edit Your Details</h3>
                                </div>
                            </div>
                            <div class="dashboard_container_body p-4">
                                <!-- Basic info -->
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
                                                        <form action="javascript:sendmail()" method="POST" onsubmit="return validation()">
                                                            <!-- <div class="row">
																		<div class="col-lg-6 col-md-12">
																			<div class="form-group">
																				<label>Course Title</label>
																				<input type="text" class="form-control simple" id="Name">
																			</div>
																		</div>
																		
																	</div> -->

                                                            <div class="form-group">
                                                                <label>Course Title</label>
                                                                <input type="text" class="form-control simple"
                                                                    id="ctitle" required>
                                                                    
                                                            </div>
                                                                              
                                                            <div class="row">
                                                            <div class="form-group container" id="amount" >
                                                                    <label>Course Category</label>
                                                                    <select type="text" name="amount" class="form-control simple px-auto" style="height:56px;"onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;this.blur();'>
                                                                    <option value="100">Web Development</option>
                                                                    <option value="200">Android Development</option>
                                                                    <option value="300">Artifial Intelligence</option>
                                                                    <option value="400">Machine Learning</option>
                                                                    <option value="500">Programming</option>
                                                                    <option value="600">Programming</option>
                                                                    <option value="700">Programming</option>
                                                                    
                                                                    </select>
                                                                    </div>   
                                                            </div>          

                                                            <div class="form-group">
                                                                <label>Course Duration</label>
                                                                <input type="text" class="form-control simple"
                                                                    id="coursed" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <label>No.of Lectures</label>
                                                                    <input type="text" class="form-control simple"
                                                                        id="nolecture" required>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Course Overview</label>
                                                                <input type="text" class="form-control simple"
                                                                    id="coverview" required>
                                                            </div>
                                                            <div class="row">

                                                                <div class=" form-group container">
                                                                    <label>Course Price</label>
                                                                    
                                                                    
                                                                    <select type="text" id="mySelect" onchange="toggle()" class="form-control simple px-auto">
                                                                    
                                                                    <option value="free">Free</option>
                                                                    <option value="paid">Paid</option>
                                                                    </select>
                                                                    </div>
                                                                    <div class="form-group container" id="amount">
                                                                    <label> Amount</label>
                                                                    <select type="text" name="amount" class="form-control simple px-auto" style="height:56px;" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;this.blur();'>
                                                                    <option value="100">100</option>
                                                                    <option value="200">200</option>
                                                                    <option value="300">300</option>
                                                                    <option value="400">400</option>
                                                                    <option value="500">500</option>
                                                                    <option value="600">600</option>
                                                                    <option value="700">700</option>
                                                                    <option value="800">800</option>
                                                                    <option value="900">900</option>
                                                                    <option value="1000">1000</option>
                                                                    <option value="2000">2000</option>
                                                                    </select>
                                                                    </div>   
                                                               


                                                                <!-- <div class="form-group ml-3">
                                                                    <button class="btn btn-theme"
                                                                        type="submit">Free</button>
                                                                </div> -->

                                                            </div>
                                                            
                                                        </form>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>





                                </section>
</section>


<!-- ============================ Dashboard: My Order Start End ================================== -->

<!-- ============================== Start Newsletter ================================== -->

<!-- ================================= End Newsletter =============================== -->

<!-- ============================ Footer Start ================================== -->

<!-- ============================ Footer End ================================== -->

<!-- Log In Modal -->


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
function toggle()
{
var amount=document.getElementById('amount');

if(amount.style.display=='block')
{
    amount.style.display='none';
}
else{
    amount.style.display='block';
}
}

</script>
<script>
function validation()
{
    var val=document.getElementById('ctitle').value;
    if(!val.match(/^[a-zA-Z])+$/))
    {
        alert('only characters are allowed');
        return false;
    }
    return true;
}
</script>

<!-- Mirrored from codeminifier.com/learnup-1.1/learnup/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 06:38:45 GMT -->