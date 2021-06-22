<?php session_start(); ?>

<!doctype html>

<html lang="en">

<!-- Startup configuration -->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />



<head>
	
	<title>Duonymity - Anonymous Messages, Pictures & Feedback Online</title>
	
	<meta charset="UTF-8">
	
	<link rel="manifest" href="manifest.json">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="Duonymity is a website where you can disclose all your hidden thoughts, feelings, ideas, etc through messages and pictures anonymously.">

	<meta name="robots" content="index, follow" />

	
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='application-name' content='Duonymity'>
    <meta name='apple-mobile-web-app-status-bar-style' content='green'>
    <meta name='apple-mobile-web-app-title' content='Duonymity'>
    <link rel='icon' sizes='192x192' href='duonymity/images/logo-icon-192.png'>
	<link rel='apple-touch-icon'  href='duonymity/images/logo-icon-192.png'>
	
	<meta property="og:url" content="http://duonymity.com/" />

	<meta property="og:type" content="website" />

	<meta property="og:title" content="Anonynous messages and Pictures --Duonymity" />

	<meta property="og:description" content="Duonymity is a website where you can disclose all your hidden thoughts, feelings, ideas, etc through messages and pictures anonymously." />

	<meta property="og:image" content="duonymity/images/cover.jpg" />


	<meta name="theme-color" content="#03b035">

	<link rel="icon" type="image/png" href="duonymity/images/icons/favicon.png" />



	<link rel="stylesheet" href="main-css/bootstrap.css">

	<link rel="stylesheet" href="main-vendors/linericon/style.css">

	<link rel="stylesheet" href="main-vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="main-vendors/lightbox/simpleLightbox.css">

	<link rel="stylesheet" href="main-vendors/nice-select/css/nice-select.css">

	<link rel="stylesheet" href="main-vendors/animate-css/animate.css">

	<link rel="stylesheet" href="main-vendors/popup/magnific-popup.css">

	<link rel="stylesheet" href="main-css/style.css">

	<link rel="stylesheet" href="main-css/responsive.css">



	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163341808-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-163341808-1');
	</script>
	

</head>



<body data-spy="scroll" data-target="#mainNav" data-offset="70">



	<header class="header_area">

		<div class="main_menu" id="mainNav">

			<nav class="navbar navbar-expand-lg navbar-light">

				<div class="container">

					<!-- <a class="navbar-brand logo_h" href="index.php"><img src="main-img/logo.png" alt=""></a> -->

					<p style="color: whitesmoke; font-weight: bold; font-size: 250%;">DuoNymity</span></p>

					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

					</button>

					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">

						<ul class="nav navbar-nav menu_nav ml-auto">

							<li class="nav-item active"><a class="nav-link" href="#home">HOME</a></li>
							<li class="nav-item active"><a class="nav-link" href="#download">DOWNLOAD</a></li>



							<?php 

									if(!isset($_SESSION['user_id'])){

										echo '<li class="nav-item"><a class="nav-link" href="login">LOGIN</a></li></li>';

										echo '<li class="nav-item"><a class="nav-link" href="register">REGISTER</a></li></li>';

									}else{

										echo '<li class="nav-item"><a class="nav-link" href="messages.php">MESSAGES</a></li></li>';
										
										echo '<li class="nav-item"><a class="nav-link" href="profile">PROFILE</a></li></li>';
										
										echo '<li class="nav-item"><a class="nav-link" href="settings">SETTINGS</a></li></li>';
										
										echo '<li class="nav-item"><a class="nav-link" href="logout">LOGOUT</a></li></li>';

									}

								?>



							<li class="nav-item"><a class="nav-link" href="contact">CONTACT US</a></li>

						</ul>

					</div>

				</div>

			</nav>

		</div>

	</header>



	<section class="home_banner_area" id="home">
		<div class="banner_inner">
			<div class="container">
				<div class="row banner_content">
					<div class="col-lg-12">
						<h2>Send Secret<br>Anonymous Messages Online</h2>
						<p>Duonymity is an interactive anonymous messaging app with a dare game. Create your Profile
							Link and Send it to all your contacts to check what do your friends think about you. With
							the help of Duonymity, you can send and recieve anonymous compliments easily for free!</p>
						<p style="font-size: 120%; margin-bottom: 0px; font-weight: bold;" >Download our Android App now </p>
						<a class="banner_btn" href="#download">Download Now</a>
						<p style="font-size: 120%; margin-bottom: 0px; font-weight: bold;">Or continue to use our web version</p>
						<div class="row">
							<div class="col">
								<a class="banner_btn text-success" href="register">Register</a>
								<a class="banner_btn text-primary" href="login">Login</a>
							</div>
						</div>
					</div>
					<!-- <div class="col-lg-3">
						<div class="banner_map_img">
							<img class="img-fluid" src="main-img/banner/right-mobile.png" alt="DUONYMITY SCREENSHOT">
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>



	<section class="feature_area p_120" id="feature">

		<div class="container">

			<div class="main_title">

				<h2>Why use Duonymity?</h2>

				<p>Our Anonymous Messaging App comes along with many great features. Here we are going to list some of

					them. Have a look below.</p>

			</div>

			<div class="feature_inner row">

				<div class="col-lg-3 col-md-6">

					<div class="feature_item">

						<img src="main-img/icon/f-icon-1.png" alt="">

						<h4>Anonymity</h4>

						<p>Our Platform ensures your privacy so that you stay anonymous everytime you send someone a

							secret message. You are anonymous until you ever choose to reveal your identity.</p>

					</div>

				</div>

				<div class="col-lg-3 col-md-6">

					<div class="feature_item">

						<img src="main-img/icon/f-icon-1.png" alt="">

						<h4>Safe & Secure</h4>

						<p>Safety of our users using this anonymous messaging platform is very important for us. We have

							got reporting systems so that you can report anything that you do not like to see.</p>

					</div>

				</div>

				<div class="col-lg-3 col-md-6">

					<div class="feature_item">

						<img src="main-img/icon/f-icon-1.png" alt="">

						<h4>24/7 Support</h4>

						<p>If there is anything that you need help with related to our anonymous messaging and feedback

							platform, We are always here for you. 24 hours a day and 7 days a week.</p>

					</div>

				</div>

				<div class="col-lg-3 col-md-6">

					<div class="feature_item">

						<img src="main-img/icon/f-icon-1.png" alt="">

						<h4>Easy 2 Use</h4>

						<p>We are constantly working on Duonymity as a platform to make it as user friendly as possible.

							As

							of now you can just download our app, fill in your username & pass to get started.</p>

					</div>

				</div>

			</div>

		</div>

	</section>



	<section class="screenshot_area p_120" id="screen">

		<div class="container">

			<div class="main_title">

				<h2>App Screenshots</h2>

				<p>Out of all other Anonymous Messaging and Anonymous Feedback apps our User Interface is much easier to

					use. Have a quick look.</p>

			</div>

			<div class="screenshot_inner owl-carousel">

				<div class="item">

					<img src="main-img/feature/feature-1.png" alt="">

				</div>

				<div class="item">

					<img src="main-img/feature/feature-2.png" alt="">

				</div>

				<div class="item">

					<img src="main-img/feature/feature-4.png" alt="">

				</div>

				<div class="item">

					<img src="main-img/feature/feature-3.png" alt="">

				</div>

			</div>

		</div>

	</section>

	<section class="download_app_area p_120" id="download">
        	<div class="container">
        		<div class="app_inner">
        			<h2>Download Duonymity Today!</h2>
					<p>Duonymity is easy to use, <1MB in size, and fun to play with! Simply download the app and get started with Duonymity now. After you download the app, easily create your account and share the profile link with friends to get going.<br /> Receive anonymous messages and pictures from friends online!</p>
					<p>Follow the link below and download the app from google drive, Duonymity is yet to be available on play store, <br>Only the android version is available yet</p>
        			<div class="app_btn_area">
        				<div class="app_btn">
        					<div class="media">
								<div class="d-flex">
								<a href="https://drive.google.com/file/d/1WVLaC95HTi54syZELlVf72tD9lgyxAZ4/view?usp=sharing"><i class="fa fa-android" aria-hidden="true"></i></a>
								</div>
								<div class="media-body">
									<a href="https://drive.google.com/file/d/1WVLaC95HTi54syZELlVf72tD9lgyxAZ4/view?usp=sharing"><h4>Available</h4>
									<p>For Android</p></a>
								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>

	<!-- footer -->

	<?php include'footer.php'; ?>



	<script src="main-js/jquery-3.2.1.min.js"></script>

	<script src="main-js/popper.js"></script>

	<script src="main-js/bootstrap.min.js"></script>

	<script src="main-js/stellar.js"></script>

	<script src="main-vendors/lightbox/simpleLightbox.min.js"></script>

	<script src="main-vendors/nice-select/js/jquery.nice-select.min.js"></script>

	<script src="main-vendors/isotope/imagesloaded.pkgd.min.js"></script>

	<script src="main-vendors/isotope/isotope-min.js"></script>

	<script src="main-vendors/owl-carousel/owl.carousel.min.js"></script>

	<script src="main-js/jquery.ajaxchimp.min.js"></script>

	<script src="main-vendors/counter-up/jquery.waypoints.min.js"></script>

	<script src="main-vendors/counter-up/jquery.counterup.js"></script>

	<script src="main-js/mail-script.js"></script>

	<script src="main-vendors/popup/jquery.magnific-popup.min.js"></script>

	<script src="main-js/theme.js"></script>
	<script type="text/javascript">
		(function () {

			window['__CF$cv$params'] = {

				r: '57d31cb43e69c4f8',

				m: '6df4953ab2ac4f11099e27eb875135bdb15aa984-1585752518-1800-AXpciRrouUsKrM7X/Wg98HiHaSjsXyvu+TUxKsq4cqnXoYxYGKsoWamPhE9349jtIJnTtJZGcDHyvZwfg2fC+K5oiXI+ruyuokCH8ahU5NmA50nJHBJTfL0X7SdJvb+RMw==',

				s: [0xe5bb40f68a, 0xaea87f2aa6],

				fb: 0,

			}

		})();
	</script>
	<script>
if('serviceWorker' in navigator) {
  navigator.serviceWorker
           .register('/sw.js')
           .then(function() { console.log("Service Worker Registered"); });
}
</script>

</body>



</html>