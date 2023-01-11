<?php require(APPROOT . '/views/includes/header.php') ?>
<h3> <?= $data['title'] ?></h3> <br>

<form action="<?= URLROOT ?>/vluchten/addVlucht" method="post">
    <label for="vlucht">Vlucht Zoeken</label>
    <input type="text" name="vlucht" id="vlucht">
    <input type="submit" value="Zoeken">
</form>
<?php require(APPROOT . '/views/includes/footer.php') ?>