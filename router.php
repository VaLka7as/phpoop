<?php
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case '/':
            include("index.php");
            break;
        case 'pridetiStudenta':
            include("pages/studento-page.php");
            break;
        case 'pridetiMokytoja':
            include("pages/mokytojo-page.php");
            break;
        case 'pridetiDarbuotoja':
            include("pages/darbuotojo-page.php");
            break;
        case 'visiStudentai':
            include ("pages/visi-studentai-page.php");
            break;
        case 'visiMokytojai':
            include ("pages/visi-mokytojai-page.php");
            break;
        case 'visiDarbuotojai':
            include ("pages/visi-darbuotojai-page.php");
            break;
        default:
            include("pages/index-view.php");
            break;
    }
}