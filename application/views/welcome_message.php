<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx" ng-app="ajaxExample" ng-cloak>
<head>
<title>Url Shotener</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Astonish Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
<!-- /font files -->
<!-- css files -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<script> var BASEURL='<?php echo base_url(); ?>';</script>
<!-- /css files -->
<body>
	<div class="w3l-banner-layer">
	<div class="container  text-center">
			<div class="agileinfo-logo">
					<h1><a href="<?php echo base_url(); ?>"><span class="fa fa-diamond" aria-hidden="true"></span>Url Shortener</a></h1>
			</div>	
			<h2 class="txt-w3_agile">URL Shortener </h2>
			<p>generate short URL by a click.</p>
			<div class="sub-form-wthree" ng-controller="mainController">
				<form action="#" method="post">
					<input type="text" ng-model="url" name="url" size="30" required="" placeholder="Paste a link to shorten it">
					<button class="btn1" ng-click="getURL()" type="button">Shorten &nbsp;<span class="fa fa-paper-plane" aria-hidden="true"></span></button>
				</form>
				<div><p style="background-color: cornflowerblue;padding: 10px;text-transform: none;width: 80%;    float: left;" id='display' >{{shorturlk}} </p><p  style="float: right;cursor: pointer;width: 15%;" onClick='copyText(display)'>copy</p></div>
				<div class="addthis_inline_share_toolbox"></div>
			</div>		
			<div class="agile_social_banner">
				<ul class="social_list">
					<li><a href="#" class="social_facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
					<li><a href="#" class="social_twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
					<li><a href="#" class="social_dribble"><span class="fa fa-dribbble" aria-hidden="true"></span></a></li>
					<li><a href="#" class="social_vimeo"><span class="fa fa-vimeo" aria-hidden="true"></span></a></li>
				</ul>
			</div> 
				
	</div>
	<div class="footer">
		<p> &copy; 2017 Url shortener. All Rights Reserved | Developed by Pravat <a href="http://w3layouts.com" target="=_blank"></a></p>
	</div>
	</div>
	<script src="<?php echo base_url(); ?>assets/js/angular-1.4.9.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5adb256bb242160f"></script>
</body>
</html>