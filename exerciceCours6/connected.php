<?php
session_start();
        if(!isset($_SESSION["first_name"])){
            header("Location: /exercice.php"); 

        }
    ?>