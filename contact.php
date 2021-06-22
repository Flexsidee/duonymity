<!DOCTYPE html>

<html lang="en">



<head>

	<title>Contact Us - Duonymity</title>

	<?php include'header.php'; ?>



<body>



	<div class="container-contact100">

		<div class="wrap-contact100">

			<div class="contact100-form">

				<span class="contact100-form-title">

					<img src="duonymity/images/logo-icon.png" class="p-b-22" alt="DUONYMITY">

					<br>

					Contact Us

				</span>

				<div class="container-contact100-form-btn p-b-15">

					<div class="wrap-contact100-form-btn">

						<div class="contact100-form-bgbtn"></div>

						<button class="contact100-form-btn" data-toggle="modal" data-target="#about">

							<span>

								Frequently Asked Questions

							</span>

						</button>

					</div>

				</div>

				<!--

				<a href="https://api.whatsapp.com/send?text=I%20Need%20Help&phone=17316782618" target="_blank" class="btn-wa p-b-30 contact100-form-btn">

					<i class="fa fa-whatsapp"></i>

					Message Us on WhatsApp

				</a>

				-->
				<p>
					Facebook: <a href="https://web.facebook.com/Duonymity-109270380758677/" target="_blank"><b>Duonymity</b></a><br></p> 
				<p class="m-t-10">You can email us directly at <b>duonymity@gmail.com</b> <br>or use the

					contact form below.</p>

				<p class="m-b-20" align="center"><b class="suc"></b><b class="req"></b></p>

				<form class="contact100-form validate-form" method="post" id="contact-form" method="post" action="process_contact">
				
				<h5 class="text-info"><?php if(isset($_GET['msg'])) echo $_GET['msg']; ?></h5>

					<div class="wrap-input100 validate-input" data-validate="Name is required">

						<span class="label-input100">Surname <b class="req">*</b></span>

						<input class="input100" name="sname" placeholder="Your Surname" id="name" required></input>

						<span class="focus-input100"></span>

					</div>
					<div class="wrap-input100 validate-input" data-validate="Name is required">

						<span class="label-input100">Firstname <b class="req">*</b></span>

						<input class="input100" name="fname" placeholder="Your Firstname" id="name" required></input>

						<span class="focus-input100"></span>

					</div>

					<div class="wrap-input100 validate-input" data-validate="Email is required">

						<span class="label-input100">Your Email <b class="req">*</b></span>

						<input class="input100" name="email" type="email" placeholder="Enter your Email here" id="email"

							required></input>

						<span class="focus-input100"></span>

					</div>

					<div class="wrap-input100 validate-input" data-validate="Query is required">

						<span class="label-input100">Your Query <b class="req">*</b></span>

						<input class="input100" name="query" placeholder="Enter your Query here" id="query"

							maxlength="254" required></input>

						<span class="focus-input100"></span>

					</div>

					<div class="container-contact100-form-btn p-b-10">

						<div class="wrap-contact100-form-btn">

							<div class="contact100-form-bgbtn"></div>

							<button class="contact100-form-btn" name="btn-contact">

								<span>

									Submit

								</span>

							</button>

						</div>

					</div>

					<p class="consent">By using this service, you provide explicit consent for <b>Duonymity</b> to collect

						and process the personal data you submit and/or any other personal data that may be necessary to

						support helping you with your request(s). You also agree to our Privacy Policy, Terms of Service

						and any related policies.</p>

				</form>

				<p class="m-t-15">You can also contact us using the following social media platforms listed down below:

				</p>

				

				<p>If you are a Law Enforcement Agency Representative, you are requested to contact via special

					channels. <a href="report-filing-instructions.html">Click Here</a> for More information.</p>

				<hr>

				<div class="container-contact100-form-btn">

					<div class="wrap-contact100-form-btn">

						<div class="contact100-form-bgbtn"></div>

							<button class="contact100-form-btn" onclick="window.location = 'index';">

								Go Back

								<i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>

								</span>

					</div>

				</div>

			</div>

		</div>

	</div>

	<div id="dropDownSelect1"></div>

	<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

	<script src="Duonymity/vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="Duonymity/vendor/bootstrap/js/popper.js"></script>

	<script src="Duonymity/vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="js/main.js"></script>

	<script src="Duonymity/vendor/select2/select2.min.js"></script>

	<script type="text/javascript">

		(function () {

			window['__CF$cv$params'] = {

				r: '57d31cdc292ac4f8',

				m: 'fdd7d36bb5a3c22ae8da38f29fd393ff72978e93-1585752524-1800-AecY2aQq0X8bybgrfDNcDGfXzG2tzOenrfeZICiQ+uTEWLaYWAue9AhH7vX5M8XUcA1c1P1Oxmj92CL9VGZ2DZpzqQeZ4MBEKf7q65A+wd/Td66OiUVIgi3b/m/3hBp44g==',

				s: [0x3b79538649, 0x39e43d143d],

				fb: 0,

			}

		})();

		function goBack(){

        	window.history.back();

    	}

	</script>

</body>

<!-- footer -->

<?php include'footer.php'; ?>



</html>

<div id="about" class="modal fade" role="dialog">

	<div class="modal-dialog">

		<div class="modal-content">

			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal">&times;</button>

				<h4 class="modal-title">FAQ</h4>

			</div>

			<div class="modal-body">

				<p class="m-b-10">Here Are The Most Frequently Asked Questions Answered!</p>

				<p><b>What is Duonymity?</b><br>Duonymity is an interactive dare game. To get started, create an account for

					free and share your profile link with your friends. Dare them to click on the link and complete the

					task. Now your friends will be able to compliment you anonymously. And, the best part, Duonymity is

					<b>free!</b></p>

				<p class="m-t-4"><b>How does Duonymity keep me anonymous?</b><br>Even if you have an account in Duonymity,

					when you send an anonymous message to someone, your data does not leave our server. It makes the

					whole process secure and worries less.</p>

				<p class="m-t-4"><b>What do Duonymity's policies promise?</b><br>Duonymity promises you that we are never

					going to share your data (mentioning the fact that we do not keep much of your data) even though

					someone asks for it. (Read Terms & Conditions for more information).</p>

				<p class="m-t-4"><b>Is Duonymity Safe?</b><br>Duonymity is <b>100%</b> safe. We work day and night to keep

					hate sentiments away from Duonymity's users. We take strict actions against the culprit(s).</p>

				<p class="m-t-4"><b>Why cannot I see the messages that I received?</b><br>The messages that you receive

					gets archived after 24 hours after you receive them. But do not worry as you can still see them on

					the <b>Archived Messages</b> section.</p>

				<p class="m-t-4"><b>How to turn notifications on?</b><br>Duonymity sends you a notification whenever you

					receive a new message. Allow site notifications turned on from your browser if you have not already.

					If you have already installed our app, you need to do nothing.</p>

				<p class="m-t-4"><b>How to change my password?</b><br>To change your Duonymity password, go to your

					settings inside the app and tap on <b>"Change Password"</b> button.</p>

				<p class="m-t-4"><b>Can I change my username?</b><br>Yes, you can change your username. To change your

					Duonymity username, go to your settings inside the app and tap on <b>"Change Username"</b> button. Note

					that once you change your username, anyone would be able to use your previous username from that

					point.</p>

				<p class="m-t-4"><b>How to recover my Duonymity account?</b><br>To recover your Duonymity account, simply

					enter your username in the <b>"Forgot password"</b> page and receive the recovery code via email. If

					you have not submitted your email while registering, it is not possible to manually recover your

					account as of now.</p>

				<p class="m-t-4"><b>Can I know who sent me a message?</b><br>Because of our policies, we cannot share

					much information with you regarding who sent you a particular message. However, if you feel that the

					message that you received is disobeying our terms of use, feel free to report it to us and we will

					take care of the rest.</p>

				<p class="m-t-4"><b>What happens when I report a message?</b><br>When you report a message, one of our

					support team members check out your report thoroughly and takes appropriate actions against the

					culprit. In particular cases, we may ban the culprit completely using their IP address or Internet

					Service Provider (ISP) if the action is continuous.</p>

				<p class="m-t-4"><b>How can I deactivate my Duonymity Account?</b><br>If you want to deactivate your

					account on Duonymity, simply contact us using <b>Facebook/Instagram/Twitter</b> or email us at <b><a

							href="cdn-cgi/l/email-protection.html" class="__cf_email__"

							data-cfemail="fd9598918dbd96889f929291d39e9290">[email&#160;protected]</a></b></p>

			</div>

			<div class="modal-footer">

				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			</div>

		</div>

	</div>

</div>

<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>