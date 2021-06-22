<?php 

session_start();
if(isset($_SESSION['user_id'])){
    $user_id=@$_SESSION['user_id'];

    $db= mysqli_connect("localhost", "duonymit", "VB36a(M[H3sep6");

    mysqli_select_db($db, "duonymit_db");

    $rec = mysqli_fetch_assoc(mysqli_query($db, "select * from register where user_id='$user_id'"));

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <title>My Profile - Duonymity</title>

    <?php include'header.php'; ?>





<body>

    <div class="container-contact100">

        <div class="wrap-contact100">

            <div class="contact100-form">

                <span class="contact100-form-title">

                    <img src="duonymity/images/logo-icon.png" alt="">
                    <div style="margin-top: -50px;">

                    </div><br>

                    <?php echo $rec['username']; ?>



                    <p id="userlink" onclick="copyToClipboard('#userlink')" style="color: yellow;">https://<?php echo $rec['userlink']; ?> <i

                            class="fa fa-copy m-l-7" aria-hidden="true"></i></p>

                </span>

                <p class="m-b-30"><b>Share your profile link</b> to get responses from your friend. Go to <b>"View

                        Messages"</b> to check out the responses.</p>

                <div class="container-contact100-form-btn m-b-20">

                    <div class="wrap-contact100-form-btn">

                        <div class="contact100-form-bgbtn"></div>

                        <a href="messages.php"><button class="contact100-form-btn">

                                <span>

                                    View Messages

                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>

                                </span>

                            </button></a>

                    </div>

                </div>

                <!-- <a href="#" data-toggle="modal" data-target="#share_modal" class="btn-insta m-b-20 contact100-form-btn">

                    <i class="fa fa-share-alt"></i>

                    Share My Profile

                </a> -->

                <a href="https://api.whatsapp.com/send?text=Send%20me%20secret%20anonymous%20messages%20and%20picture%20..%20%20I%20won%27t%20know%20who%20sent%20it..%20%F0%9F%98%82%E2%9D%A4%20%F0%9F%91%89%20😉😉https://<?php echo $rec['userlink'];?>"

                    target="_blank" class="btn-wa m-b-20 contact100-form-btn">

                    <i class="fa fa-whatsapp"></i>

                    Share on WhatsApp

                </a>

<!-- 

                <a href="https://www.facebook.com/sharer/?u=<?php #echo $rec['userlink'];?>" target="_blank"

                    class="btn-face m-b-20 contact100-form-btn">

                    <i class="fa fa-facebook-official"></i>

                    Share on Facebook

                </a>

                <a data-toggle="modal" data-target="#instabio" href="#instabio"

                    class="btn-insta m-b-20 contact100-form-btn">

                    <i class="fa fa-instagram"></i>

                    Share on Instagram

                </a>

                 -->



                <!--

				<a data-toggle="modal" data-target="#fbinsta" href="#fbinsta" class="btn-face m-b-20 contact100-form-btn">

					<i class="fa fa-facebook-official"></i>

					Share on Facebook

				</a>

				<a data-toggle="modal" data-target="#fbinsta" href="#fbinsta" class="btn-insta m-b-20 contact100-form-btn">

					<i class="fa fa-instagram"></i>

					Share on Instagram

				</a>

				-->



                <div class="container-contact100-form-btn" style="margin-top: -15px">

                    <div class="wrap-contact100-form-btn">

                        <div class="contact100-form-bgbtn"></div>

                        <a href="settings"><button class="contact100-form-btn">

                            <span>

                                Settings

                                <i class="fa fa-cogs m-l-4" aria-hidden="true"></i>

                            </span>

                        </button></a>

                    </div>

                </div>

                <div class="container-contact100-form-btn">

                    <div class="wrap-contact100-form-btn">

                        <div class="contact100-form-bgbtn"></div>

                        <a href="index"><button class="contact100-form-btn">

                            <span>

                                Home

                                <i class="fa fa-home m-l-4" aria-hidden="true"></i>

                            </span>

                        </button></a>

                    </div>

                </div>

                <hr>

                <div class="container-contact100-form-btn">

                    <div class="wrap-contact100-form-btn">

                        <div class="contact100-form-bgbtn"></div>

                        <a href="logout"><button class="contact100-form-btn">

                            <span>

                                Logout

                                <i class="fa fa-power-off m-l-4" aria-hidden="true"></i>

                            </span>

                        </button></a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src= "Duonymity/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="Duonymity/vendor/animsition/js/animsition.min.js"></script>

    <script src="Duonymity/vendor/bootstrap/js/popper.js"></script>

    <script src="Duonymity/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="js/main.js"></script>

    <script>

        function copyToClipboard(element) {

            var $temp = $("<input>");

            $("body").append($temp);

            $temp.val($(element).text()).select();

            document.execCommand("copy");

            alert("Link Copied To Clipboard!");

            $temp.remove();

        }



        function addEmail() {

            window.location = "./addEmail";

        }

        OneSignal.push(function () {

            let myCustomUniqueUserId = "126916257";

            OneSignal.setExternalUserId(myCustomUniqueUserId);

        });

    </script>

    <script type="text/javascript">

        (function () {

            window['__CF$cv$params'] = {

                r: '57e32df3a9b5a6a5',

                m: 'e4961787218d1af12859fec4c5827fe3044ac595-1585920996-1800-AR6YuyHNWOx7OPON89Y1ZgA8ZVWZdxD1cpz/1G/n/F0JNNO76kbecIMnsGc4Ao3qrLpIKUUX0fyb4qUnmVEAvQ8Mmv6nyxyjLfAZilyyT0YBUDFVgyhU/JQg047J9O2hPg==',

                s: [0x364637490a, 0xf815d7c203],

                fb: 0,

            }

        })();

    </script>

</body>

<!-- footer -->

<?php include'footer.php'; ?>

</html>

<!-- <div id="share_modal" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Share</h4>

            </div>

            <div class="modal-body">

                <div class="share-apps"">

                    <a href="https://api.whatsapp.com/send?text=Write%20a%20*secret%20anonymous%20message*%20for%20me..%20%F0%9F%98%89%20I%20*won%27t%20know*%20who%20wrote%20it..%20%F0%9F%98%82%E2%9D%A4%20%F0%9F%91%89%20<?php echo $rec['userlink'];?>"

                        target="_blank" class="whatsapp">

                        <img src="Duonymity/images/icons/whatsapp.png">

                        <span>Share</span>

                    </a>



                    <a href="https://www.facebook.com/sharer/?u=<?php echo $rec['userlink'];?>" target="_blank"

                        class="facebook">

                        <img src="Duonymity/images/icons/facebook.png">

                        <span>Share</span>

                    </a>

                    <a data-toggle="modal" data-target="#instabio" href="#instabio" class="instagram">

                        <img src="Duonymity/images/icons/instagram.png">

                        <span>Insta Bio</span>

                    </a> -->



                    <!--there is a small comment here

						<a data-toggle="modal" data-target="#fbinsta" href="#fbinsta" class="facebook">

							<img src="Duonymity/images/icons/facebook.png">  

							<span>Share</span>

						</a>

						<a data-toggle="modal" data-target="#fbinsta" href="#fbinsta" class="instagram">

							<img src="Duonymity/images/icons/instagram.png">

							<span>Insta Bio</span>

						</a>

						-->

                    <!--the big comment continues <a data-toggle="modal" data-target="#snapchat" class="snapchat">

                        <img src="Duonymity/images/icons/snapchat.png">

                        <span>Add Story</span>

                    </a>



                    <a href="fb-messenger://share?link=Write%20a%20*secret%20anonymous%20message*%20for%20me..%20%F0%9F%98%89%20I%20*won%27t%20know*%20who%20wrote%20it..%20%F0%9F%98%82%E2%9D%A4%20%F0%9F%91%89%20<?php echo $rec['userlink'];?>"

                        class="fb-msg">

                        <img src="Duonymity/images/icons/messenger.png">

                        <span>Share</span>

                    </a> -->



                    <!--another small comment

						<a data-toggle="modal" data-target="#fbinsta" href="#fbinsta" class="fb-msg">

							<img src="Duonymity/images/icons/messenger.png"> 

							<span>Share</span>

						</a>

						-->

                    <!-- <a href="https://twitter.com/intent/tweet?text=Write%20a%20secret%20anonymous%20message%20for%20me..%20😉%20I%20won%27t%20know%20who%20wrote%20it..%20😂❤%20👉&url=https%3A%2F%2FDuonymity%2Ficc1516set"

                        target="_blank" class="twitter">

                        <img src="Duonymity/images/icons/twitter.png">

                        <span>Share</span>

                    </a>

                    <a data-toggle="modal" data-target="#wastatus" href="#wastatus" class="whatsapp-status">

                        <img src="Duonymity/images/icons/whatsapp.png">

                        <span>Set Status</span>

                    </a>

                    <a href="line://msg/text/?Write%20a%20*secret%20anonymous%20message*%20for%20me..%20%F0%9F%98%89%20I%20*won%27t%20know*%20who%20wrote%20it..%20%F0%9F%98%82%E2%9D%A4%20%F0%9F%91%89%20<?php echo $rec['userlink'];?>"

                        class="line">

                        <img src="Duonymity/images/icons/line.png">

                        <span>Share</span>

                    </a>

                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>

    </div>

</div>

<div id="instabio" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Instagram Bio</h4>

            </div>

            <div class="modal-body" align="center">

                <p class="p-b-5"><b>Step 1:</b> Copy your <b>Profile Link</b> from the <b>home page</b></p>

                <img class="p-b-8" src="Duonymity/images/instabio-step0.jpg" width="80%"

                    alt="Copy your Profile Link from the home page">

                <p class="p-b-5"><b>Step 2:</b> Go to your instagram profile and click on <b>edit your profile</b></p>

                <img class="p-b-8" src="Duonymity/images/instabio-step1.jpg" width="80%"

                    alt="Go to your instagram profile and click on edit your profile">

                <p class="p-b-5"><b>Step 3:</b> Paste your Profile Link in <b>Website section</b></p>

                <img class="p-b-8" src="Duonymity/images/instabio-step2.jpg" width="80%"

                    alt="Paste your Profile Link in Website section">

                <p><b>That's it! You're done!</b></p>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>

    </div>

</div>

<div id="snapchat" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Snapchat Story</h4>

            </div>

            <div class="modal-body" align="center">

                <p class="p-b-5"><b>Step 1:</b> Copy your <b>Profile Link</b> from the <b>home page</b></p>

                <img class="p-b-8" src="Duonymity/images/instabio-step0.jpg" width="80%"

                    alt="Copy your Profile Link from the home page">

                <p class="p-b-5"><b>Step 2:</b> <b>Add a Snap</b> and mention to <b>Swipe up</b></p>

                <img class="p-b-8" src="Duonymity/images/snapchat-step1.jpeg" width="80%"

                    alt="Add a Snap and mention to Swipe up">

                <p class="p-b-5"><b>Step 3:</b> Tap the <b>Paper Clip</b></p>

                <img class="p-b-8" src="Duonymity/images/snapchat-step2.jpg" width="80%"

                    alt="Tap the Paper Clip">

                <p class="p-b-5"><b>Step 4:</b> Paste your <b>Profile Link</b></p>

                <img class="p-b-8" src="Duonymity/images/snapchat-step3.jpeg" width="80%"

                    alt="Paste your Profile Link">

                <p class="p-b-5"><b>Step 5:</b> Add to <b>Your Story</b></p>

                <img class="p-b-8" src="Duonymity/images/snapchat-step4.jpg" width="80%"

                    alt="Add to Your Story">

                <p><b>That's it!</b></p>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>

    </div>

</div>

<div id="wastatus" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">WhatsApp Status</h4>

            </div>

            <div class="modal-body" align="center">

                <p class="p-b-5"><b>Step 1:</b> Copy your <b>Profile Link</b> from the <b>home page</b></p>

                <img class="p-b-8" src="Duonymity/images/instabio-step0.jpg" width="80%"

                    alt="Copy your Profile Link from the home page">

                <p class="p-b-5"><b>Step 2:</b> Go To <b>Status</b> Tab and Add a <b>New Status</b></p>

                <img class="p-b-8" src="Duonymity/images/wastatus-step1.jpg" width="80%"

                    alt="Go To Status Tab and Add a New Status">

                <p class="p-b-5"><b>Step 3:</b> Paste your <b>Profile Link</b> in there</p>

                <img class="p-b-8" src="Duonymity/images/wastatus-step2.jpeg" width="80%"

                    alt="Paste your Profile Link in there">

                <p class="p-b-5"><b>Step 4:</b> Now, <b>Send</b> the status</p>

                <img class="p-b-8" src="Duonymity/images/wastatus-step3.jpg" width="80%"

                    alt="Now, Send the status">

                <p><b>That's it! You're done!</b></p>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>

    </div>

</div>

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

<div id="fbinsta" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Oops..!</h4>

            </div>

            <div class="modal-body">

                <p class="m-b-10">Due to recent policy updates, we have temporarily disabled link sharing on

                    <b>Facebook</b>, <b>Instagram</b>, and <b>Facebook Messenger</b>.<br>Please kindly use other

                    platforms like <b>WhatsApp</b> to share your Duonymity's Profile with your friends and loved

                    ones.<br>Thanks!</p>

                <p class="m-b-10">For more information, kindly <b>contact us</b>.</p>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>

    </div>

</div> -->
<?php }else{
		header("location: login");
	} ?>