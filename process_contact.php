<?php
    if(isset($_POST)){
        $db= mysqli_connect("localhost", "duonymit", "VB36a(M[H3sep6");
	    mysqli_select_db($db, "duonymit_db");
        $surname = $_POST['sname'];
        $firstname = $_POST['fname'];
        $email = $_POST['email'];
        $query = $_POST['query'];

        mysqli_query($db, "insert into query(surname, firstname, email, query) values('$surname', '$firstname', '$email', '$query')");
        header("location: contact?msg=Message sent succesfully");
       // mysqli_error($db);
    }
?>