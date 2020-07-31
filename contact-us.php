<?php 
include 'common/header.php';
include 'common/menu.php';
?>

<div class="container-fluid bg-banner py-5 text-center">
	
	<div class="container">
    <div class="">
      <h2 class="h1 text-uppercase">Contact Us</h2>
      <a href="index.php" class="text-white">Home</a><img src="icon/arrow-point-to-right.png"> 
       <span class="text-white">Contact Us</span>
    </div>
  </div>

</div>

<div class="container mt-2 py-5 contact-us">

<div class="row">
<div class="col-lg-4 col-md-5 col-sm-8 col-xs-12">
	 <h2 class="text-left pl-2 text-uppercase">Contact Us</h2>

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
      	<h6 class="text-dark font-weight-bold">Arogya HOSPITAL</h6>
        <p class="text-dark">Road no.1, Juran Chapra Main Road, Near Big Mart, Muzaffarpur-842001</p>
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
<div class="col-lg-7 col-md-9 col-sm-10 col-xs-12">

		 <h2 class="text-left pl-2 text-uppercase">Write To Us</h2>

<form>
  <div class="form-group mt-4">
  	<div class="input-group">
  		<div class="input-group-prepend">
    		<img src="icon/contact-us/user.png" class="img-fluid m-auto px-2">
		</div>
		<input type="text" class="form-control" id="uname" placeholder="Full Name" name="uname">
	</div>
	<div class="input-group">
  		<div class="input-group-prepend mt-2">
    		<img src="icon/contact-us/close-envelope.png" class="img-fluid m-auto px-2">
		</div>
    <input type="email" class="form-control mt-3" id="exampleInputEmail1" placeholder="Email Address">
</div>

<div class="input-group">
  		<div class="input-group-prepend mt-2">
    		<img src="icon/contact-us/call-answer.png" class="img-fluid m-auto px-2">
		</div>
		<input type="number" class="form-control mt-3" name="phone" id="phone" placeholder="Phone Number">
</div>

<div class="input-group">
  		<div class="input-group-prepend mt-3">
    		<img src="icon/contact-us/support.png" class="img-fluid m-auto px-2">
		</div>
    <textarea class="form-control mt-2" id="exampleFormControlTextarea1" rows="3" placeholder="Give Feedback"></textarea>
</div>

   </div>

  <button type="submit" class="btn btn-success">Send</button>
</form>
</div>
</div>

</div>

<?php include 'common/footer.php';?>