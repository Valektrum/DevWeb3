<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Mon site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Mon site</a>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Accueil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Usager
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Liste des usagers</a>
            <a class="dropdown-item" href="#">Ajouter un usager</a>
            <a class="dropdown-item" href="#">Rechercher</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">

    <h1><?= $title ?></h1>
    <?= $content ?>



    <?php
    require("includeJS.php");
    ?>
  </div>

</body>

</html>