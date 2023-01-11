<?php require(APPROOT . '/views/includes/header.php') ?>

<form action="<?= URLROOT ?>/vluchten/addVlucht" method="post">
  <label for="voornaam">Voornaam: </label>
  <input type="text" name="voornaam" id="voornaam"><br>

  <label for="achternaam">Achternaam: </label>
  <input type="text" name="achternaam" id="achternaam"><br>

  <label for="geboortedatum">Geboortedatum: </label>
  <input type="date" name="geboortedatum" id="geboortedatum"><br>

  <label for="adres">Adres: </label>
  <input type="text" name="adres" id="adres"><br>

  <label for="woonplaats">Woonplaats: </label>
  <input type="text" name="woonplaats" id="woonplaats"><br>

  <label for="postcode">Postcode: </label>
  <input type="text" name="postcode" id="postcode"><br>

  <label for="email">Email: </label>
  <input type="text" name="email" id="email"><br>

  <label for="mobiel">Mobiel: </label>
  <input type="text" name="mobiel" id="mobiel"><br>

  <label for="vluchtnummer">Vluchtnummer: </label>
  <input type="text" name="vluchtnummer" id="vluchtnummer"><br>

  <label for="bestemming">Bestemming: </label>
  <input type="text" name="bestemming" id="bestemming"><br>

  <label for="vertrekdatum">Vertrekdatum: </label>
  <input type="date" name="vertrekdatum" id="vertrekdatum"><br>

  <label for="vertrektijd">Vertrektijd: </label>
  <input type="time" name="vertrektijd" id="vertrektijd"><br>

  <label for="oorsprong">Oorsprong: </label>
  <input type="text" name="oorsprong" id="oorsprong"><br>

  <label for="gate">Gate: </label>
  <input type="text" name="gate" id="gate"><br>


  <input type="submit" value="Toevoegen">
</form>
<?php require(APPROOT . '/views/includes/footer.php') ?>