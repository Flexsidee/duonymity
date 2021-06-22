<?php 

session_start();
if(isset($_SESSION['user_id'])){
    $user_id = @$_SESSION['user_id'];

    $db= mysqli_connect("localhost", "duonymit", "VB36a(M[H3sep6");

    mysqli_select_db($db, "duonymit_db");

	$rec = mysqli_fetch_assoc(mysqli_query($db, "select * from register where user_id='$user_id'"));

?>
<!DOCTYPE html>

<html lang="en">



<head>

	<title>Settings - Duonymity</title>

	<?php include'header.php'; ?>



<body>

	<div class="container-contact100">

		<div class="wrap-contact100">

			<div class="contact100-form">

				<span class="contact100-form-title">

					<img src="duonymity/images/logo-icon.png" class="p-b-45" alt="DUONYMITY" style="margin-bottom: -40px;">

					<br>

					<h2 class="text-warning"><?php echo $rec['username']; ?> </h2>
					Settings
					<h5 class="text-info"><?php if(isset($_GET['msg'])) echo $_GET['msg']; ?></h5>
				</span>

				<p class="m-b-30"></p>

				<!--<div class="container-contact100-form-btn">

					<div class="wrap-contact100-form-btn">

						<div class="contact100-form-bgbtn"></div>

						<button class="contact100-form-btn" data-toggle="modal" data-target="#lang" disabled>

							<span>

								Change Language

								<i class="fa fa-language m-l-7" aria-hidden="true"></i>

							</span>

						</button>

					</div>

				</div>-->

				<!-- <div class="container-contact100-form-btn">

					<div class="wrap-contact100-form-btn">

						<div class="contact100-form-bgbtn"></div>

						<button class="contact100-form-btn" onclick="window.location = './changepe?mode=email';">

							<span>

								Change Email

								<i class="fa fa-envelope m-l-7" aria-hidden="true"></i>

							</span>

						</button>

					</div>

				</div> -->

				<div class="container-contact100-form-btn">

					<div class="wrap-contact100-form-btn">

						<div class="contact100-form-bgbtn"></div>

						<button class="contact100-form-btn" onclick="window.location = 'change_password';">

							<span>

								Change Password

								<i class="fa fa-key m-l-7" aria-hidden="true"></i>

							</span>

						</button>

					</div>

				</div>

				<div class="container-contact100-form-btn">

					<div class="wrap-contact100-form-btn">

						<div class="contact100-form-bgbtn"></div>

						<button class="contact100-form-btn" onclick="window.location = 'change_username';">

							<span>
						
								Change Username

								<i class="fa fa-user m-l-7" aria-hidden="true"></i>

							</span>

						</button>

					</div>

				</div>

				<!--<div class="container-contact100-form-btn">

					<div class="wrap-contact100-form-btn">

						<div class="contact100-form-bgbtn"></div>

						<button class="contact100-form-btn" onclick="window.location = './about';">

							<span>

								About Us

								<i class="fa fa-thumbs-up m-l-7" aria-hidden="true"></i>

							</span>

						</button>

					</div>

				</div>-->

				<div class="container-contact100-form-btn">

					<div class="wrap-contact100-form-btn">

						<div class="contact100-form-bgbtn"></div>

						<button class="contact100-form-btn" onclick="window.location = 'legal';">

							<span>

								Disclaimer

								<i class="fa fa-exclamation-circle m-l-7" aria-hidden="true"></i>

							</span>

						</button>

					</div>

				</div>

				<div class="container-contact100-form-btn">

					<div class="wrap-contact100-form-btn">

						<div class="contact100-form-bgbtn"></div>

						<button class="contact100-form-btn" onclick="window.location = 'contact';">

							<span>

								Contact Us

								<i class="fa fa-question-circle m-l-7" aria-hidden="true"></i>

							</span>

						</button>

					</div>

				</div>

				<div class="container-contact100-form-btn">

					<div class="wrap-contact100-form-btn">

						<div class="contact100-form-bgbtn"></div>

						<button class="contact100-form-btn" onclick="window.location = 'logout';">

							<span>

								Logout

								<i class="fa fa-power-off m-l-7" aria-hidden="true"></i>

							</span>

						</button>

					</div>

				</div>

				<hr>

				<div class="m-t-15">

				</div>

				<div class="container-contact100-form-btn">

					<div class="wrap-contact100-form-btn">

						<div class="contact100-form-bgbtn"></div>

						<a href="profile">

							<button class="contact100-form-btn">

								Go Back

								<i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>

								</span>

							</button></a>

					</div>

				</div>

			</div>

		</div>

	</div>

	<script src="duonymity/vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="duonymity/vendor/animsition/js/animsition.min.js"></script>

	<script src="duonymity/vendor/bootstrap/js/popper.js"></script>

	<script src="duonymity/vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="js/main.js"></script>

</body>

<!-- footer -->

<?php include'footer.php'; ?>



</html>
<?php }else{
		header("location: login");
	} ?>