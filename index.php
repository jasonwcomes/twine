<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Twine</title>

		<!-- CSS //-->
		<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
		<link href="stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />

		<!-- JS - HEAD //-->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body data-stellar-background-ratio="0.5">


		<!-- SECTION 1 //-->
		<section class="clearGreen">
			<div id="featuredBox" class="logo">
				<h1 id="title"><img src="images/logo.png" alt="Twine" id="logo" /></h1>
				<div id="video">
					<iframe src="//player.vimeo.com/video/79387213?title=0&amp;byline=0&amp;portrait=0&amp;color=1ea094" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>
			<div class="column">
				<h2>Listen to Your World.<br />Talk to the Web.</h2>
				<a href="Watch the Video" id="videoWatch" title="Watch the Video">Watch the Video</a>
				<p><strong>Give us your email, and we'll let you know when it's available to the public.</strong></p>
				<form action="mailchimp.php" method="POST">
					<input type="email" placeholder="Email" name="email" class="inputEmail">
					<input type="submit" value="Submit" class="inputSubmit">
				</form>
			</div>
		</section>


		<!-- SECTION 2 //-->
		<section class="whiteBlack">
			<h2>Connect your things to the Internet, <br />without a nerd degree.</h2>
			<div id="animationBox">
				<div id="animationContainer">
					<span id="growUp"></span>
					<span id="growRight"></span>
					<img src="images/connect_1.png" alt="Connect With Us" />
					<img src="images/connect_right.png" id="rightWifi" class="float" alt="Right Wifi" />
					<img src="images/connect_left.png" id="leftWifi" class="float" alt="Left Wifi" />
				</div>
			</div>
			<div class="column">
				<p><strong>Twine is the simplest possible way to get the objects in your life texting, tweeting or emailing.</strong></p>
				<p>Want to hook up things to the Web? Maybe you want to get a tweet when your laundry's done, or get an email when the basement floods while you're on vacation. Even if you're good with electronics and programming, these are involved projects. Instead of worrying about wiring or networking code, you can focus on your idea.</p>
			</div>
		</section>


		<!-- SECTION 3 //-->
		<section class="clearWhite">
			<div class="column">
				<h2>Objects that <br />Connect Us.</h2>
				<p>Drawing on our experience in hardware and software, we've spent the last few months creating working prototypes and near-final forms. We are truly excited about getting Twine into people's hands to see what new uses others will find for it.</p>
				<a href="#" title="Get Excited With Us.">Get Excited With Us.</a>
				<form action="mailchimp.php" method="POST">
					<input type="email" placeholder="Email" name="email" class="inputEmail" />
					<input type="submit" value="Submit" class="inputSubmit" />
				</form>
			</div>
		</section>

		<!-- FOOTER //-->
		<footer>
			<div id="social">
				<div id="fb-root"></div>
				<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=269852573027615"; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-like" data-href="http://www.dtelepathy.com/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.dtelepathy.com/">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
			<p>© Supermechanical Limited Liability Company. All Rights Reserved. Austin, Texas.</p>
		</footer>


		<!-- JS - FOOTER //-->
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="js/vendor/jquery.stellar.min.js"></script>
		<script src="js/vendor/waypoints.min.js"></script>
		<script src="js/vendor/jquery.scrollTo-1.4.3.1-min.js"></script>
		<script src="js/app.js"></script>

	</body>
</html>