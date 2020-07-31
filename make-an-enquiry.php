<?php 
include 'common/header.php';
include 'common/menu.php';
?>

<div class="container-fluid bg-banner py-5 text-center">
	
	<div class="container">
    <div class="">
      <h2 class="h1 text-uppercase">Make An Enquiry</h2>
      <a href="index.php" class="text-white">Home</a><img src="icon/arrow-point-to-right.png"> 
       <span class="text-white">Make An Enquiry</span>
    </div>
  </div>

</div>

<div class="container mt-2 py-5 contact-us">

<div class="row">

<div class="col-lg-4 col-md-5 col-sm-8 col-xs-12">
<!-- 	 <h2 class="text-left pl-2 text-uppercase">Make An Enquiry</h2>
 -->
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
		<img src="img/pexels.jpg" class="w-100 h-100">    
	</div>
    <div class="flip-box-back">
      <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
        aria-controls="collapseOne1">
        <h5 class="mb-0">
          Address <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
      data-parent="#accordionEx">
      <div class="card-body">
      	<h6 class="text-dark font-weight-bold">AROGYA HOSPITAL</h6>
        <p class="text-dark">Road no., street, city-pincode</p>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo2">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">
        <h5 class="mb-0">
          General Enquiry <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
      data-parent="#accordionEx">
      <div class="card-body">
        <p class="text-dark">+91-0000000000</p>
		<p class="text-dark">+91-0000000000 </p>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree3">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
        aria-expanded="false" aria-controls="collapseThree3">
        <h5 class="mb-0">
          Email Address <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body">
        <h6 class="text-dark font-weight-bold">Email</h6>
        <p class="text-dark">demo@gmail.com </p>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->
    </div>
  </div>
</div>

	
</div>
<div class="col-lg-8 col-md-9 col-sm-10 col-xs-12 make-an-enquiry">

		 <h2 class="text-left pl-2 text-uppercase">Enquiry Form</h2>
     <form>
       
        <div class="form-group mt-4">          
            <label for="uname">Name</label>
            <input type="text" name="uname" id="uname1" class="form-control" placeholder="Enter Your Full Name">
        </div>

        <div class="row mt-3">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="emailExample" class="form-control" placeholder="Enter Your Email Id">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="mob-no">Contact Number</label>
              <input type="number" name="mob-no" id="mob-no" class="form-control" placeholder="Enter Contact Number">
            </div>
          </div>

        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" name="address" id="address" class="form-control" placeholder="Enter Your Address">
        </div>
        <div class="form-group">
          <label for="query">Your Query</label>
          <textarea name="query" id="query" rows="3" class="form-control" placeholder="Enter Your Query"></textarea>
        </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1"> By clicking Submit, you agreed to <a href="#"> Terms & Conditions</a> and <a href="">Privacy Policy</a> of AGROGYA's website</label>
        </div>

        <button type="submit" class="btn btn-success mt-3">Submit</button>

     </form>


</div>
</div>

</div>

<?php include 'common/footer.php';?>