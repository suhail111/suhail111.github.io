<!DOCTYPE html>
<html>
<head>
<title>suhailm</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
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
							<li class="active"><a href="index.html"><span>Home</span></a></li>
							<li><a href="timetable.html"><span>Timetable</span></a></li>
							<li><a href="contact.php"><span>Contact Us</span></a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		<!-- banner -->
			<div class="banner">
				<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner1">
									
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner2">
									
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner3">
									
								</div>
							</div>
						</article>
					</div>
				</div>
							<script src="js/jquery.wmuSlider.js"></script> 
							<script>
								$('.example1').wmuSlider();         
							</script> 
			</div>
		<!-- //banner -->
		</div>
	</div>
<!-- header -->

<!-- about -->
	<div class="about">
		<div class="container"> 
			<div class="about-grids">
				<div class="col-md-12 about-grid">
					<h4><i>+ Our aim at sigma is to provide a comfortable working environment and face-to-face support that will help students of all abilities
					and levels of attainment to raise their game and fulfil their academic aspirations</i></br>
						<i>+ The sigma team is located in the Mathematics Support Centre (MSC) in the library</i></br>
						<i>+ The MSC is open 7 days a week during term time for ALL Coventry Students and Staff</i></br>
						<i>+ No appointment necessary – but you may wish to book a 1-to-1 mathematics or statistics appointment over and above our drop-in sessions</i></br>
						<i>+ We provide a wide range of resources including books and worksheets</i></br>
						<i>+ We also run workshops and courses which you can book on to</i></br>
						<i>+ We have tutors trained in specialised topics and subject expertise who are on duty at designated times</i></br>
						<i>+ Our provision is FREE and over and above your normal teaching</i></h4>
				</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	
	
<!-- //about -->

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