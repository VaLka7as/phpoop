<?php
require_once "class/Db.php";
require_once "config/config.php";
$db = new DuomenuBaze($pdo);
$eilutes = $db->gautiVisusDarbuotojus();
?>
<table class="table m-5">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Vardas</th>
        <th scope="col">Pavardė</th>
        <th scope="col">Amžius</th>
        <th scope="col">Pareigos</th>
        <th scope="col">Atlyginimas</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($eilutes as $darbuotojas):?>
        <tr>
            <th scope="col"><?=$darbuotojas['id']?></th>
            <th scope="col"><?=$darbuotojas['vardas']?></th>
            <th scope="col"><?=$darbuotojas['pavarde']?></th>
            <th scope="col"><?=$darbuotojas['amzius']?></th>
            <th scope="col"><?=$darbuotojas['pareigos']?></th>
            <th scope="col"><?=$darbuotojas['atlyginimas']?></th>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>