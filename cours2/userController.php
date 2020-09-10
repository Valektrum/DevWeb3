<?php
require_once("userDTO.php");
require_once('view.php');
require_once("controller.php");
class UserController extends Controller
{
    private const SHOW_USER_TITLE = "Les usagers";
    private $user_model;

    public function __construct($user_model)
    {
        $this->user_model = $user_model;
    }

    public function show_users()
    {
        $users = $this->user_model->get_all_users();

        $data = array("users" => $users);
        $view = new View("usersView.php");
        $content =  $view->render($data);
        $this->render_template_with_content(self::SHOW_USER_TITLE, $content);
    }

    public function show_user($id)
    {
        $user = $this->user_model->get_user_by_id($id);
        $data = array("user" => $user);
        $view = new View("userView.php");

        echo $view->render($data);
    }
}
