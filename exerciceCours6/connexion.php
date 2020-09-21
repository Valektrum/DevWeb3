<?php
    session_start();

if(isset($_SESSION["username"]) & isset($_SESSION["password"]) &strrev($_POST["password"]) == $_POST["username"] )
{
    //connected.php
    header("Location: /connected.php"); 
}
else {
    //erreur.php
    header("Location: /erreur.php"); 

}
?>