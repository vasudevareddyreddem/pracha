<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pracha tech</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/mdb.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/css/compiled.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/style.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/jquery-3.2.1.min.js"></script>
</head>

<body>
<!--Main Navigation-->
<header>
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark  bg-dark scrolling-navbar" id="home" >
   <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="logo"></strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
			<ul class="nav navbar-nav  ml-auto">
				<li class="nav-item active " id="homepageative"><a href="<?php echo base_url(); ?>" class="nav-link"> <span class=" ">Home</span></a></li>  
				<li class="nav-item"><a href="<?php echo base_url('pracha/services');?>" class="nav-link "> <span class=" ">Our Services</span></a></li>
				<li class="nav-item"><a href="<?php echo base_url('pracha/howwework');?>" class="nav-link"> <span class=" ">How We work?</span></a></li>
				<li class="nav-item"><a href="<?php echo base_url('pracha/pricings');?>" class="nav-link "> <span class=" ">Pricing</span></a></li>
				<!--<li class="nav-item"><a href="<?php echo base_url('carriers');?>" class="nav-link"> <span class=" ">Careers</span></a></li>-->
				<li class="nav-item"><a href="<?php echo base_url('pracha/contactus');?>" class="nav-link"> <span class=" ">Contact us</span></a></li>
			</ul>
        </div>
   </nav>
</header>
<a class="btn-floating btn-lg scrolltotop bg-dark">
<i class="fa fa-arrow-up"></i></span></a>
<script>
$('.scrolltotop').on('click', function() {
          $('html, body').animate({ scrollTop: 0 }, 800);
          return false;
      });

      $(document).scroll(function() {
          var y = $(this).scrollTop();
          if (y > 300) {
              $('.scrolltotop').fadeIn();
          } else {
              $('.scrolltotop').fadeOut();
          }
      });
</script>
<script>
$(document).ready(function(){
  $('body').scrollspy({target: ".navbar", offset: 120});   

  $("#navbarSupportedContent a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top 
      }, 800, function(){
   
        window.location.hash = hash;
      });
	 
	
    } 
	  
  });
});

</script>

