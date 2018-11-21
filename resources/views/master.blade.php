<!doctype html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<link rel="apple-touch-icon" href="{{ asset('assets/demo-bower/assets/images/logo/apple-touch-icon.html') }}">
    <link rel="shortcut icon" href="{{ asset('assets/demo-bower/assets/images/logo/favicon.png') }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="{{asset('')}}">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
	<link rel="stylesheet" href="source/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">
</head>
<body>

	@include('header')
	<div class="rev-slider">
		@yield('content')
	</div> <!-- .container -->
	@include('footer')
	</div> <!-- #footer -->
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Chính sách bảo mật. (&copy;) 2018</p>
			<p class="pull-right pay-options">
				<a href="https://sohapay.vn/info/vi/help/huong-dan-thanh-toan/107-the-mastercard.html"><img src="source/image/master.jpg" alt="" /></a>
				<a href="https://whypay.vn/tin-tuc/huong-dan-thanh-toan-online-bang-the-VISA-MASTER.html"><img src="source/image/visa.jpg" alt="" /></a>
				<a href="#"><img src="source/assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="https://www.payvnn.com/huong-dan-thanh-toan-truc-tuyen-voi-the-visa-va-paypal/"><img src="source/image/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div>
	</div>


	<!-- include js files -->
	<script src="source/assets/dest/js/jquery.js"></script>
	<script src="source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="source/assets/dest/vendors/animo/Animo.js"></script>
	<script src="source/assets/dest/vendors/dug/dug.js"></script>
	<script src="source/assets/dest/js/scripts.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="source/assets/dest/js/waypoints.min.js"></script>
	<script src="source/assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="source/assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
	<script lang="javascript">var _vc_data = {id : 6276002, secret : '68a078a430fff7cd5b396747646dd390'};(function() {var ga = document.createElement('script');ga.type = 'text/javascript';ga.async=true; ga.defer=true;ga.src = '//live.vnpgroup.net/client/tracking.js?id=6276002';var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();
	</script>
</body>
</html>
