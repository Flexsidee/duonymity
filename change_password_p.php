<?php
session_start();
if(isset($_POST)){

    $db= mysqli_connect("localhost", "duonymit", "VB36a(M[H3sep6");
    
    mysqli_select_db($db, "duonymit_db");

    $user_id= $_POST['user_id'];
    $old_pword= $_POST['old_pword'];
    $new_pword= $_POST['new_pword'];
    $re_pword= $_POST['re_pword'];

    $user_id= $_POST['user_id'];
    $rec = mysqli_fetch_assoc(mysqli_query($db, "select * from register where user_id='$user_id'"));
    

    #this is the database passeord;
    $db_pword= $rec['password'];

    #am setting the variables initially to an empty string
    $verify= $match="";

    #i want to verify if password from the database matches in the input old password
    if(password_verify($old_pword, $db_pword)){
        $verify='true';
    }
    if($new_pword===$re_pword){
        $match='true';
    }

    if($verify!='true'){
        header("location: change_password.php? err=Current password is incorrect");
    }else if($match !='true'){
        header("location: change_password.php? err=Passwords do no match");
    }else if($verify=='true' && $match=='true'){
        $hash_pword=password_hash($new_pword, 1);
        mysqli_query($db, "update register set password='$hash_pword' where user_id='$user_id'");
        header("location: settings.php?msg= Password changed successfully");
        die();
    }
}
?>