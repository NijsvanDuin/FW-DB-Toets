<?php require(APPROOT . '/views/includes/header.php') ?>
<h3> <?= $data['title'] ?></h3> <br>

<form action="<?= URLROOT ?>/vluchten/addVlucht" method="post">
    <label for="vlucht">Vlucht Zoeken</label>
    <input type="text" name="vlucht" id="vlucht">

    <input type="submit" value="Zoeken">
</form>
<table border="1">
    <thead>
        <th>Naam</th>
        <th>Adres</th>
        <th>Email</th>
        <th>Bestemming</th>
        <th>Vertrekdatum</th>
        <th>Vertrektijd</th>
    </thead>
    <tbody>
        <?php echo $data['rows'] ?>
    </tbody>
</table>
<?php require(APPROOT . '/views/includes/footer.php') ?>