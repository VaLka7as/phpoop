<?php
require_once "class/Db.php";
require_once "config/config.php";
$db = new DuomenuBaze($pdo);
$eilutes = $db->gautiVisusMokytojus();
?>
<table class="table m-5">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Vardas</th>
        <th scope="col">Pavardė</th>
        <th scope="col">Amžius</th>
        <th scope="col">Dėstomas kursas</th>
        <th scope="col">Atlyginimas</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($eilutes as $mokytojas):?>
        <tr>
            <th scope="col"><?=$mokytojas['id']?></th>
            <th scope="col"><?=$mokytojas['vardas']?></th>
            <th scope="col"><?=$mokytojas['pavarde']?></th>
            <th scope="col"><?=$mokytojas['amzius']?></th>
            <th scope="col"><?=$mokytojas['destomasKursas']?></th>
            <th scope="col"><?=$mokytojas['atlyginimas']?></th>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>