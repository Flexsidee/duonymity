<?php  
function clean_text($string){
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}
if(isset($_POST)){
    $db= mysqli_connect("localhost", "duonymit", "VB36a(M[H3sep6");
    mysqli_select_db($db, "duonymit_db");
    
    $username = $_POST['name'];
    $username = clean_text($username);
    $userlink = "www.duonymity.com/".$username;
    $pword = $_POST['pword'];
    $cpword = $_POST['cpword'];
    
    $user=mysqli_query($db, "select * from register where username='$username'");
    if(mysqli_num_rows($user) ==1){
        header("location: register.php?err= Username has been used");
    }else if(!preg_match("/^[a-zA-z0-9]*$/", $username)){
        header("location: register.php?err= Only letters and numbers allowed");
    }else if($pword !== $cpword){
        header("location: register.php?err= Passwords do not match");
    }else{
        $password = password_hash($pword, 1);
        mysqli_query($db, "insert into register(username, userlink, password) values('$username', '$userlink', '$password')");

        $_SESSION['user_id']= $user_id;
        header("location: login");
        die();
       // mysqli_error($db);
    }
}
?>