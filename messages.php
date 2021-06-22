<?php 
session_start();
if(isset($_SESSION['user_id'])){
	$user_id = @$_SESSION['user_id'];
	$db= mysqli_connect("localhost", "duonymit", "VB36a(M[H3sep6", "duonymit_db");
	//header("refresh:5, url= messages");
?>

<!DOCTYPE html>

<html lang="en">

<head>

	<title>My Messages - Duonymity</title>

	<?php include'header.php'; ?>





<body>





	<div class="container-contact100">

		<div class="wrap-contact100">

			<div class="contact100-form">
				<span class="contact100-form-title">

					<?php 
						if(isset($_GET['pageno'])){
							$pageno = $_GET['pageno'];
						}else{
							$pageno=1;
						}
						$no_of_messages_per_page = 5;
						$offset= ($pageno-1)* $no_of_messages_per_page;
						$total_messages_sql= "select count(*) from comment where user_id ='$user_id'";
						$result = mysqli_query($db, $total_messages_sql);
						$total_rows=mysqli_fetch_array($result)[0];
						$total_pages = ceil($total_rows/$no_of_messages_per_page);
						$sql= "select * from  comment where user_id='$user_id' order by comment_id desc limit $offset, $no_of_messages_per_page ";
						$res_data= mysqli_query($db, $sql);
						
						#i used this to check if the user have no message
						$get_msg =mysqli_query($db, "select * from comment where user_id ='$user_id'");
						if(empty(mysqli_num_rows($get_msg))){ ?>
							<p class="text-warning" style="text-align: left;margin-top: 10px;">You do not have any message(s)
								yet, share your links to friends and family to get anonymous message and pictures sent to you.
							</p>
						<?php	}else{?>
							
					My Messages
					<h5 style=" color: #5fdee2">Total messages = <span class="text-warning" style="font-size: 140%;"><?php echo $total_rows; ?></span></h5>
					<h6 style=" color: #5fdee2">Keep refreshing to check for new messages</h6>

				</span>

				<p class="m-b-10 m-t-15" align="center"><b class="suc"></b><b class="req"></b></p>

				<?php
					while($msg= mysqli_fetch_array($res_data)){ ?>

				<div class='answersx ansx m-b-8'>

					<p class='m-b-10'><b>Message:</b><br><?php echo $msg['message']; ?></p>

					<?php 

						if(empty($msg['image'])){

							echo '<p class="text-warning">-No image is attached</p>';

						}else{ ?>

					<div style=" border: 2px #5fdee2 solid; border-radius: 10px; padding: 10px 0px;" align="center">
						<a href="images/<?php echo $msg['image']; ?>"><img src="images/<?php echo $msg['image']; ?>"
								width="250px" height="250px"></a>
					</div>

					<p style=" color: #5fdee2">- Click the picture to view in full</p>
					<?php } ?>

					<p class="text-warning">- Anonymous [<?php echo $msg['datetime']; ?> GMT]</p>

				</div><?php	} ?>
				<?php	} ?>
				
				<?php 
					if($total_pages!=0){ ?>
				<hr>
				<div class="m-t-42 m-b-79">
					<ul class="pagination">
						<?php 
							for ($i=1; $i <= $total_pages; $i++) { 
								if($i==$pageno){
									echo '<li><a class="active">'.$i.'</a><li>';
								}else{
									echo '<li><a href="?pageno='.$i.'">'.$i.'</a><li>';
								}
							}
						?>
					</ul>
				</div>
				<?php }else{
					header("refresh:3, url= messages");
				} ?>

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

	<script src="Duonymity/vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="Duonymity/vendor/animsition/js/animsition.min.js"></script>

	<script src="Duonymity/vendor/bootstrap/js/popper.js"></script>

	<script src="Duonymity/vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="js/main.js"></script>

	<script>
		function DDFunction1() {

			document.getElementById("myDropdown1").classList.toggle("show")

		}



		function DDFunction2() {

			document.getElementById("myDropdown2").classList.toggle("show")

		}



		function DDFunction3() {

			document.getElementById("myDropdown3").classList.toggle("show")

		}



		function DDFunction4() {

			document.getElementById("myDropdown4").classList.toggle("show")

		}



		function DDFunction5() {

			document.getElementById("myDropdown5").classList.toggle("show")

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

				<h4 class="modal-title">About Us</h4>

			</div>

			<div class="modal-body">

				<p class="m-b-10"><b>Duonymity</b> is an online secret message sharing app. Out of all the other
					anonymous

					message sharing apps, Duonymity stands out because of several different reasons. If you are bored
					with

					your normal video streaming apps, Duonymity is here of the rescue. Share honest constructive
					feedbacks

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
<?php }else{
		header("location: login");
	} ?>