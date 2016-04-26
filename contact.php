<?php

if (empty($_POST) === false) {
  $errors = array();

  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];

  if(empty($name) === true || empty($email) === true || empty($comment) === true) {
    $errors[] = "Name, email and message are required!";
  } else {
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      $errors[] = "It's not a valid email address.";
    }
    if (ctype_alpha($name) === false) {
      $errors[] = "Name must only contains letters!";
    }
    if (empty($errors) === true) {
      mail('taifur@gmail.com', 'Contact Form', $comment, 'From ' . $email);
      header('Location: contact.php?sent');
      exit();
    }

  }
}

?>



<!DOCTYPE html>
<html>
<head>
<title>suhailm</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<a class="navbar-brand" href="index.html">Sigma </a>
				    </div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-12" id="link-effect-12">
						<ul class="nav navbar-nav">
							<li><a href="index.html"><span>Home</span></a></li>
							<li><a href="timetable.html"><span>Timetable</span></a></li>
							<li class="active"><a href="contact.html"><span>Contact</span></a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
<!-- header -->
<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3><span>Get in touch</span> with Us</h3>
			<p class="ever"><i>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it</i></p>
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<div class="mail-grid-left1">
						<form>
							<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
							<input type="submit" value="Submit Now" >
						</form>
					</div>
				</div>
				<div class="col-md-6 mail-grid-right">
					<div class="mail-grid-right1">
						<ul>
							<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i></li>
							<li>26478 Taj Avenue<span>Newyork City XS 234 32.</span></li>
						</ul>
						<ul>
							<li><i class="glyphicon glyphicon-send" aria-hidden="true"></i></li>
							<li><a href="mailto:info@examle.com">info@examle.com</a></li>
						</ul>
						<ul>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></li>
							<li>+1234 574 436<span>+0829 738 920</span></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
<!-- //mail -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			
			<div class="footer-bottom">
				<div class="footer-bottom-left">
					<p>&copy 2016 Privatio. All rights reserved | Developed by <a href="https://www.freelancer.com/u/sagarpro.html">sagar pro</a></p>
				</div>
				<div class="social_icons">
					<a href="#" class="icon icon-cube facebook"></a>
					<a href="#" class="icon icon-cube rss"></a>
					<a href="#" class="icon icon-cube instagram"></a>
					<a href="#" class="icon icon-cube t"></a>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>