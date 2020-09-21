<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Exercice</title>
</head>
<body>
    <div class="container">
<form action="/connexion.php" method="post">
    <div class="row">
        <label for="username">Votre compte</label>
    </div>
    <div class="row">
        <input type="text" id="username" name="username" pattern="^\D{8}(\D{2})?">
    </div>

    <div class="row">
        <label for="password">Mot de passe</label>
    </div>
    <div class="row">
        <input type="text" id="password" name="password" required>
    </div>

    <div class="row">
    <button type="submit" class="btn btn-primary">Me connecter</button>
    </div>
</form>
</div>

</body>
</html>