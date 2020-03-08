<?php
require_once "class/Studentas.php";
require_once 'config/config.php';
?>
<form method="post" class="m-5">
    <h2 class="text-center"><?php Studentas::pridetiMokiniforma()?></h2>
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
        <label>Kurso pavadinimas</label>
        <input type="text" name="kursoPav" class="form-control" placeholder="Kurso pavadinimas">
    </div>
    <div class="form-group">
        <label>Stipendija</label>
        <input type="number" name="stipendija" class="form-control" placeholder="Stipendija">
    </div>
    <button type="submit" name="siusti" class="btn btn-primary">Siusti</button>
</form>

<?php

if (isset($_POST['siusti'])) {
    $studentas = new Studentas($_POST['vardas'], $_POST['pavarde'], $_POST['amzius'], $_POST['kursoPav'], $_POST['stipendija']);
    $studentas->setPDO($pdo);
    $studentas->pridetiMokini();
}
?>
