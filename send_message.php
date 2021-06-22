<?php
session_start();
$username = $_GET['username'];
$db= mysqli_connect("localhost", "duonymit", "VB36a(M[H3sep6");

    mysqli_select_db($db, "duonymit_db");
    

    $rec= mysqli_fetch_assoc(mysqli_query($db, "select * from register where username ='$username'"));
    
if(@$_SESSION['user_id'] == $rec['user_id']){
    header("location: profile");
    #echo "working perfectly ok";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Send Message - Duonymity</title>
	<?php include'header.php'; ?>

<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<div class="contact100-form">
				<span class="contact100-form-title">
					Say Something.. <br> Attach a picture
					<p class="m-t-15">Say what you think about <b><?php echo $username; ?></b>, you can also add a
						picture
						<b>anonymously</b> using the form <b>below</b>.. &#x1F970;&#x1F970; <br>Thank You!!
						&#x1F60D;&#x1F60A;</p>
				</span>
				<p class="m-b-10" align="center"><b class="suc"></b><b class="req"></b></p>
				<form class="contact100-form validate-form" method="POST" action="process_message.php"
					enctype="multipart/form-data">
					<div class="wrap-input100 validate-input" data-validate="Message is required">
						<span class="label-input100">Say Something About <b><?php echo $username; ?></b> <b
								class="req">*</b></span>
						<input type="hidden" value="<?php echo $username; ?>" name="username">
						<textarea class="input100" name="message"
							placeholder="Leave A message for <?php echo $username; ?> here.." maxlength="254"
							minlength="10" id="answer" onKeyPress="return taLimit(this)"
							onKeyUp="return taCount(this,'myCounter')" required
							style="border: 1px solid green"></textarea>
						<p class="label-input100"><b><span id=myCounter style="color:white;">254</span></b> characters
							remaining<p>
								<span class="focus-input100"></span>
								<p style="margin-top: 30px; color: #5fdee2;">-Add a picture to the message<input
										type="file" accept="image/png, image/jpeg" name="img" style="color: #5fdee2">
					</div>

					<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div>
							<button class="contact100-form-btn" name="btn-msg" type="submit">
								<span>
									Send Message
									<i class="fa fa-paper-plane m-l-7" aria-hidden="true"></i>
								</span>
							</button>
						</div>
					</div>
					<p class="consent m-b-20 m-t-10">By using this service, you agree to our Privacy Policy, Terms of
						Service and any related policies.</p>
				</form>
				<div class="m-t-15">

				</div>
			</div>
		</div>
	</div>

	<script src="Duonymity/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="Duonymity/vendor/animsition/js/animsition.min.js"></script>
	<script src="Duonymity/vendor/bootstrap/js/popper.js"></script>
	<script src="Duonymity/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script language="Javascript">
		maxL = 254;
		var bName = navigator.appName;

		function taLimit(taObj) {
			if (taObj.value.length == maxL) return false;
			return true;
		}

		function taCount(taObj, Cnt) {
			objCnt = createObject(Cnt);
			objVal = taObj.value;
			if (objVal.length > maxL) objVal = objVal.substring(0, maxL);
			if (objCnt) {
				if (bName == "Netscape") {
					objCnt.textContent = maxL - objVal.length;
				} else {
					objCnt.innerText = maxL - objVal.length;
				}
			}
			return true;
		}

		function createObject(objId) {
			if (document.getElementById) return document.getElementById(objId);
			else if (document.layers) return eval("document." + objId);
			else if (document.all) return eval("document.all." + objId);
			else return eval("document." + objId);
		}
	</script>
	<script type="text/javascript">
		(function () {
			window['__CF$cv$params'] = {
				r: '57e326e2ab79295b',
				m: 'c852fc9339750a81afe251d19e4126d51ae5b5de-1585920707-1800-AU+nIYUPqXKQxp4e36HIuTwjQCCAF4QzMopqQcEc4F/hJchaXGeqdsfWMlyoZqokr5Di46clHZGo0Yn20+PVro3xQaJqOm72Jk8BOI5Rxze/n0QlEvTPrygXsBiPir8bjg==',
				s: [0xe5bb40f68a, 0xc6e31769fb],
				fb: 0,
			}
		})();
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
				<h4 class="modal-title">About Us</h4>
			</div>
			<div class="modal-body">
				<p class="m-b-10"><b>Duonymity</b> is an online secret message sharing app. Out of all the other anonymous
					message sharing apps, Duonymity stands out because of several different reasons. If you are bored with
					your normal video streaming apps, Duonymity is here of the rescue. Share honest constructive feedbacks
					with your friends and help them to become a better person. In turn, you can do the same. Duonymity's
					aim is to be the number one honest feedback and message sharing app in the world.</p>
				<p class="m-b-10">One can only send you a private anonymous message when he or she has your username. We
					recommend you to share your unique profile link with everyone who you love and care about. Not only
					them but you can also share the dare with everyone in your WhatsApp contact list and ask them to
					answer the dare. By doing this you will be able to know how people think about you in general. Ask
					your friends to join the platform and send their unique links too so that you can compliment them
					anonymously.</p>
				<p class="m-b-10">Does not really matter if you are shy to compliment someone or an introvert in
					general, you can always use the power of anonymity in front of everyone else in our platform and use
					it to send and receive anonymous compliments, and texts. If your crush is on our platform too, you
					may ask her out for a date anonymously. Or rather you can do that directly.. haha.</p>
				<p class="m-b-10">Now, as you have got a fair enough idea about what <b>Duonymity</b> is, it is time to
					create your account and share this with your friends so that you can start to receive anonymous
					compliments and wishes from your well-wishers, lover, friends, and family members.</p>
				<p class="m-b-10">Moreover, The platform is safer than ever. We are continously working on the user
					experience to make the game more fun.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>