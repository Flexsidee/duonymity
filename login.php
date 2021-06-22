<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">



<head>

	<title>Login -Duonymity</title>

	<?php include'header.php'; ?>

<body>

	<div class="container-contact100">

		<div class="wrap-contact100">

			<div class="contact100-form">
			<?php 
						
						if(isset($_SESSION['username'])){
							$username=@$_SESSION['username']; ?>

						<h4 class="text-info"><i>Click to continue as <a href="profile" style="color: blue;"><?php echo $username; ?></a></b>. </i></h4>
							
						<?php }	?>
				<span class="contact100-form-title">

					<img src="duonymity/images/logo-icon.png" class="p-b-45" alt="DUONYMITY" style="margin-bottom: -30px;margin-top: 20px;">

					<br>

					Login
					
				</span>

				<?php if(isset($_GET['err'])) echo"<h4 style='color:red; margin-top:20px;'><i>".$_GET['err']."</i></h4>"; ?>

				<p class="m-b-20" align="center"><b class="suc"></b><b class="req"></b></p>

				<form class="contact100-form validate-form" method="POST" action="process_login">

					<div class="wrap-input100 validate-input" data-validate="Name is required">

						<span class="label-input100">Your Username</span>

						<input class="input100" type="text" name="name" placeholder="Enter your username" minlength="3"

							maxlength="15" autocomplete="off" required>

						<span class="focus-input100"></span>

					</div>

					<div class="wrap-input100 validate-input">

						<span class="label-input100">Password</span>

						<input class="input100" type="password" name="pword" placeholder="Enter your password"

							minlength="3" maxlength="16" autocomplete="off" required>

						<span class="focus-input100"></span>

					</div>

					<div class="container-contact100-form-btn">

						<div class="wrap-contact100-form-btn">

							<div class="contact100-form-bgbtn"></div>

							<button class="contact100-form-btn" name='btn-login'>

								<span>

									Login

									<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>

								</span>

							</button>

						</div>

					</div>

					<p class="p-t-6" align="center"><a href="register"  style="color: white;">Don't Have an Account? Register</a></p>

					<p class="p-t-6" align="center"><a href="home"  style="color: white;">HOME</a></p>

				</form>

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

				r: '57d31cd8eb16c4f8',

				m: 'f4a195a5a11f900f4af6796deb211aacbce1d859-1585752523-1800-ASWSXEBQQ/wt3VCGc2D+ingIbNtFBV2OKhHRO8djykBHSVjFY0wS0Xq6LjWdDMCjwO4JMeMAdl+MaYttzUSVhCAoQxDuf/3TnImJo/hLzbTEAjRXYuZs1G6Cbko1fUSa2w==',

				s: [0x6afc7a1627, 0x0e4b6e1a58],

				fb: 0,

			}

		})();

	</script>

</body>

<!-- footer -->

<?php include'footer.php'; ?>



</html>