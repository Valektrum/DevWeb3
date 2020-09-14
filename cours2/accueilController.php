<?php
require_once("userDTO.php");
require_once('view.php');
require_once("controller.php");
class AccueilController extends Controller
{
  private const ACCUEIL = "Accueil";
  private $user_model;

  public function __construct()
  {
  }

  public function show_accueil()
  {
    $data = array();
    $view = new View("accueilView.php");
    $content =  $view->render($data);
    $this->render_template_with_content(self::ACCUEIL, $content);
  }
}
