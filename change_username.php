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

    <title>Change Username - Duonymity</title>

    <?php include'header.php'; ?>



<body>

    <div class="container-contact100">

        <div class="wrap-contact100">

            <div class="contact100-form">

                <span class="contact100-form-title">

                    <img src="duonymity/images/logo-icon.png" class="p-b-45" alt="DUONYMITY" style="margin-bottom: -40px;">

                    <br>
                    <h2 class="text-warning"><?php echo $rec['username']; ?> </h2>
                    Change Username

                </span>
                <?php if(isset($_GET['err'])){echo "<h4 style='color: #ff2c2c; margin-top: 20px;margin-bottom: 10px;'><i>- ".$_GET['err']."</i></h4>"; } ?>
                <form class="contact100-form validate-form" method="POST" action="change_username_p">

                    <div class="wrap-input100 validate-input" data-validate="Name is required">

                        <span class="label-input100">Enter New Username</span>
                        <input type="hidden" value="<?php echo $user_id; ?>" name="user_id">
                        <input class="input100" type="text" name="new_name"
                            placeholder="Enter your new username" minlength="5" maxlength="16" autocomplete="off"
                            required>

                        <span class="focus-input100"></span>

                    </div>

                    <div class="container-contact100-form-btn">

                        <div class="wrap-contact100-form-btn">

                            <div class="contact100-form-bgbtn"></div>

                            <button class="contact100-form-btn" name='btn-signup'>

                                <span>

                                    Change Username

                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>

                                </span>

                            </button>

                        </div>

                    </div>
                    <p class="p-t-10" align="center"><a href="settings"  style="color:white;">BACK TO SETTINGS</a></p>

					<p class="p-t-10" align="center""><a href="home" style="color:white;">HOME</a></p>

                </form>

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