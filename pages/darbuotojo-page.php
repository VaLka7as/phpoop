<?php
require_once "class/Darbuotojas.php";
require_once 'config/config.php';
?>
<form method="post" class="m-5">
    <h2 class="text-center"><?php Darbuotojas::pridetiDarbuotojaForma() ?></h2>
    <div class="form-group">
        <label>Vardas</label>
        <input type="text" name="vardas" class="form-control" placeholder="Vardas">
    </div>
    <div class="form-group">
        <label>Pavardė</label>
        <input type="text" name="pavarde" class="form-control" placeholder="Pavarde">
    </div>
    <div class="form-group">
        <label>Amžius</label>
        <input type="number" name="amzius" class="form-control" placeholder="Amžius">
    </div>
    <div class="form-group">
        <label>Pareigos</label>
        <input type="text" name="pareigos" class="form-control" placeholder="Pareigos">
    </div>
    <div class="form-group">
        <label>Atlyginimas</label>
        <input type="number" name="atlyginimas" class="form-control" placeholder="Atlyginimas">
    </div>
    <button type="submit" name="siusti" class="btn btn-primary">Siusti</button>
</form>

<?php

if (isset($_POST['siusti'])) {
    $darbuotojas = new Darbuotojas($_POST['vardas'], $_POST['pavarde'], $_POST['amzius'], $_POST['pareigos'], $_POST['atlyginimas']);
    $darbuotojas->setPDO($pdo);
    $darbuotojas->pridetiDarbuotoja();
}
?>
