<?php require(APPROOT . '/views/includes/header.php') ?>
<h3> <?= $data['title'] ?></h3> <br>

<form action="<?= URLROOT ?>/vluchten/addVlucht" method="post">
    <label for="voornaam">Voornaam: </label>
    <input type="text" name="voornaam" id="voornaam">

    <label for="achternaam">Achternaam: </label>
    <input type="text" name="achternaam" id="achternaam">

    <label for="geboortedatum">Geboortedatum: </label>
    <input type="date" name="geboortedatum" id="geboortedatum">

    <label for="adres">Adres: </label>
    <input type="text" name="adres" id="adres">

    <label for="woonplaats">Woonplaats: </label>
    <input type="text" name="woonplaats" id="woonplaats">

    <label for="postcode">Postcode: </label>
    <input type="text" name="postcode" id="postcode">

    <label for="email">Email: </label>
    <input type="text" name="email" id="email">

    <label for="mobiel">Mobiel: </label>
    <input type="text" name="mobiel" id="mobiel">

    <label for="vluchtnummer">Vluchtnummer: </label>
    <input type="text" name="vluchtnummer" id="vluchtnummer">

    <label for="bestemming">Bestemming: </label>
    <input type="text" name="bestemming" id="bestemming">

    <label for="vertrekdatum">Vertrekdatum: </label>
    <input type="date" name="vertrekdatum" id="vertrekdatum">

    <label for="vertrektijd">Vertrektijd: </label>
    <input type="time" name="vertrektijd" id="vertrektijd">

    <label for="oorsprong">Oorsprong: </label>
    <input type="text" name="oorsprong" id="oorsprong">

    <label for="gate">Gate: </label>
    <input type="text" name="gate" id="gate">


    <input type="submit" value="Zoeken">
</form>
<?php require(APPROOT . '/views/includes/footer.php') ?>