<?php
require_once "class/Mokytojas.php";
require_once 'config/config.php';
?>
<form method="post" class="m-5">
    <h2 class="text-center"><?php Mokytojas::pridetiMokytojaForma() ?></h2>
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
        <label>Dėstomas kursas</label>
        <input type="text" name="destomasKursas" class="form-control" placeholder="Dėstomas kursas">
    </div>
    <div class="form-group">
        <label>Atlyginimas</label>
        <input type="number" name="atlyginimas" class="form-control" placeholder="Atlyginimas">
    </div>
    <button type="submit" name="siusti" class="btn btn-primary">Siusti</button>
</form>

<?php

if (isset($_POST['siusti'])) {
    $mokytojas = new Mokytojas($_POST['vardas'], $_POST['pavarde'], $_POST['amzius'], $_POST['destomasKursas'], $_POST['atlyginimas']);
    $mokytojas->setPDO($pdo);
    $mokytojas->pridetiMokytoja();
}
?>
