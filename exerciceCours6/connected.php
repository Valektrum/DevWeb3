<?php
    session_start();
    if(!isset($_SESSION["username"]))
    {
        header("Location: /exercice.php"); 


    }
     echo "You're connected!";
    ?>