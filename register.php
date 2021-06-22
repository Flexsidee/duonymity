<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<title>Register - Duonymity</title>
	<?php include'header.php'; ?>

<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<div class="contact100-form">
				<span class="contact100-form-title" style="margin-top: -40px;">
					<br>
					Register
					<br>
					<p class="m-t-10" align="center"><b class="suc"></b><b class="req"></b></p>
					<?php if(isset($_GET['success'])){
						echo '<p class="m-t-10" align="center"><b class="suc">Your message was sent successfully.</b><b class="req"></b></p>';
						echo '<p class="m-t-10" align="center"><b class="suc">Now it\'s your turn to create an account and dare your friends to tell you what they think about you!</b><b class="req"></b></p>';
					} ?>
				</span>
				<?php if(isset($_GET['err']))echo "<h5 style='color: #ff2c2c; margin-top: 20px;margin-bottom: 10px;'><i>- ".$_GET['err']."</i></h5>"; ?>
				<form class="contact100-form validate-form" method="POST" action="process_register">
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Your Username</span>
						<input class="input100" type="text" name="name" placeholder="Enter your username" minlength="3"
							maxlength="15" autocomplete="off" required>
						<span class="focus-input100"></span>
					</div><!--
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Your Email</span>
						<input class="input100" type="email" name="email" placeholder="Enter your email address"
							autocomplete="off" required>
						<span class="focus-input100"></span>
					</div> -->
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pword" placeholder="Enter your password"
							minlength="5" maxlength="16" autocomplete="off" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="cpword" placeholder="Enter your password"
							minlength="5" maxlength="16" autocomplete="off" required>
						<span class="focus-input100"></span>
					</div>
					<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div>
							<button class="contact100-form-btn" name='btn-signup'>
								<span>
									Register Account
									<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
								</span>
							</button>
						</div>
					</div>
					<p class="p-t-10" align="center"><a href="login"  style="color:white;">Already Have an Account? Login</a></p>
					<p class="p-t-10" align="center""><a href="index" style="color:white;">HOME</a></p>
				</form>
				<p class="consent m-b-20 m-t-10">By using this service, you agree to our Privacy Policy, Terms of
					Service and any related policies. (Check Disclaimer)</p>
			</div>
		</div>
	</div>

	<script src="Duonymity/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="Duonymity/vendor/animsition/js/animsition.min.js"></script>
	<script src="Duonymity/vendor/bootstrap/js/popper.js"></script>
	<script src="Duonymity/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
		(function () {
			window['__CF$cv$params'] = {
				r: '57d31cda8992c500',
				m: 'f8e8d795949bda249516e92e4e86f6d0eca1dcfb-1585752524-1800-AYajMvDxo+AIINcz4l+QPc/GvQs86wNAwyTHupOcRs9pNvF8TxkqBVLMEXzvfTPqUXJyzPxmlORb06Q9Ih1UnGwDqxecGe4JtMggVqxbOZzfrMVcqup9mTRGRZe0KlXfIQ==',
				s: [0x6bc20c61e2, 0xce599d8e9e],
				fb: 0,
			}
		})();
	</script>
</body>
<!-- footer -->
<?php include'footer.php'; ?>

</html>