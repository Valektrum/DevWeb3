<?php

echo ('<script type="text/javascript" src="/' . PATH_PUBLIC . '\js\addUser.js"></script>')

?>

<form class="needs-validation" novalidate>
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="form-group">
        <label for="first_name">Prénom</label>
        <input class="form-control" id="first_name" name="first_name" required>
        <div class="invalid-feedback">
          Please provide a firstname.
        </div>
      </div>
      <div class="form-group">
        <label for="last_name">Nom de famille</label>
        <input class="form-control" id="last_name" name="last_name" required>
        <div class="invalid-feedback">
          Please provide a lastname.
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <div class="invalid-feedback">
          Please provide a valid email.
        </div>
      </div>
      <div class="form-group">
        <label for="telephone">Telephone</label>
        <input class="form-control" id="telephone" name="telephone" required pattern="^[0-9]{7}([0-9]{3})?$">
        <div class="invalid-feedback">
          Please provide a phone number with 7 or 10 digits.
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6">
      <div class="form-group">
        <label for="address">Adresse</label>
        <input class="form-control" id="address" name="address" required>
        <div class="invalid-feedback">
          Please provide an address.
        </div>
      </div>
      <div class="form-group">
        <label for="city">Ville</label>
        <input class="form-control" id="city" name="city" required>
        <div class="invalid-feedback">
          Please provide a city.
        </div>
      </div>
      <div class="form-group">
        <label for="postal_code">Code postal</label>
        <input type="postal_code" class="form-control" id="postal_code" name="postal_code" required>
        <div class="invalid-feedback">
          Please provide a valid postal_code. (L0L0L0);
        </div>
      </div>
      <div class="form-group">
        <label for="age">Âge</label>
        <input type="number" class="form-control" id="age" name="age" required>
        <div class="invalid-feedback">
          You must be older than 18.
        </div>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>