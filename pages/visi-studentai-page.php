<?php
require_once "class/Db.php";
require_once "config/config.php";
$db = new DuomenuBaze($pdo);
$eilutes = $db->gautiVisusStudentus();
?>
<table class="table m-5">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Vardas</th>
        <th scope="col">Pavardė</th>
        <th scope="col">Amžius</th>
        <th scope="col">Kurso pavadinimas</th>
        <th scope="col">Stipendija</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($eilutes as $studentas):?>
    <tr>
        <th scope="col"><?=$studentas['id']?></th>
        <th scope="col"><?=$studentas['vardas']?></th>
        <th scope="col"><?=$studentas['pavarde']?></th>
        <th scope="col"><?=$studentas['amzius']?></th>
        <th scope="col"><?=$studentas['kursoPav']?></th>
        <th scope="col"><?=$studentas['stipendija']?></th>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>