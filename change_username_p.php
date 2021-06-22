<?php
session_start();
if(isset($_POST)){
    $db= mysqli_connect("localhost", "duonymit", "VB36a(M[H3sep6");

    mysqli_select_db($db, "duonymit_db");

    $user_id= $_POST['user_id'];
    $new_name= $_POST['new_name'];
    $rec = mysqli_query($db, "select * from register where username='$new_name'");

    #this are the password am getting currently from the user;
    if(mysqli_num_rows($rec)==1){
        header("location: change_username.php?err=The username has been taken");
    }else{
        $new_link= "www.duonymity.com/".$new_name;
        mysqli_query($db, "update register set username='$new_name', userlink='$new_link' where user_id='$user_id'");
        header("location: settings.php?msg=Username changed successfully");
        die();
    }
}
?>