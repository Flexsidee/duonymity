<?php 

session_start();
function clean_text($string){
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if(isset($_POST)){

    $username= $_POST['name'];
    $username =clean_text($username);
    
    $pword= $_POST['pword'];
    $pword =clean_text($pword);

    $db= mysqli_connect("localhost", "duonymit", "VB36a(M[H3sep6");

    mysqli_select_db($db, "duonymit_db");

    $check_user= mysqli_query($db, "select * from register where username ='$username'");

    if(mysqli_num_rows($check_user) ==1){

        $rec= mysqli_fetch_assoc($check_user);

        $phash = $rec['password'];

        if(password_verify($pword, $phash)){

            $_SESSION['user_id']= $rec['user_id'];

            header("location: profile");

            die();

        }else{

            header("location: login.php?err=Invalid Login Details");

            die();

        }

        //mysqli_error($db);

    }else{

        header("location: login.php?err=Invalid Login Details");

        die();

    }

}

?>