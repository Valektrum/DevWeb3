<?php
    require_once("userModel.php");
    require_once("userController.php");

    $userModel = new UserModel();
    $userController = new UserController($userModel);
if(isset($_GET["id"])){
    $userController->show_user(htmlspecialchars($_GET["id"]));
}
else {
    $userController->show_users();
        
}
    
?>