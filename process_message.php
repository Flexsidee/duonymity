<?php
if(isset($_POST)){
    $username=$_POST['username'];
    $message = $_POST['message'];
    
    $db= mysqli_connect("localhost", "duonymit", "VB36a(M[H3sep6");
    mysqli_select_db($db, "duonymit_db");
    $rec=mysqli_fetch_assoc(mysqli_query($db, "select * from register where username='$username'"));
    $user_id = $rec['user_id'];
    
    $img = $_FILES['img']['name'];
    $img_temp = ($_FILES['img']['tmp_name']);

    if(is_uploaded_file($_FILES['img']['tmp_name'])){
        $img="img".time().".jpg";
        copy($_FILES['img']['tmp_name'], "images/$img");
    }
    mysqli_query($db, "insert into comment(user_id, message, image) values('$user_id', '$message', '$img')");
    header("location: register.php?success=proceed");
    mysqli_error($db);
}
?>