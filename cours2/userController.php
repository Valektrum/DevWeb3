<?php
require_once('view.php');   
class UserController{

    private $user_model;

    public function __construct($user_model){
        $this->user_model = $user_model;
    }

    public function show_users(){
        $users = $this->user_model->get_all_users();

        $data = array("users" => $users);
        $view = new View("usersView.php");
        echo $view->render($data);
    }

    public function show_user($id){
        $user = $this->user_model->get_user_by_id($id);
        $data = array("user" => $user);
        $view = new View("userView.php");
        
        echo $view->render($data);

    }
}

?>