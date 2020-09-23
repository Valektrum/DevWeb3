<?php
    session_start();
//isset($_SESSION["username"]) & isset($_SESSION["password"]) &
if(strrev($_POST["password"]) === $_POST["username"] )
{
    //connected.php
    header("Location: /connected.php"); 
    $_SESSION["username"]= $_POST["username"];
    $_SESSION["password"]= $_POST["password"];

}
else {
    //erreur.php
    header("Location: /erreur.php"); 

}
?>