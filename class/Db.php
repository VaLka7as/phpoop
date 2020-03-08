<?php
require_once 'config/config.php';
require_once "Studentas.php";


class DuomenuBaze
{
    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    function gautiVisusStudentus()
    {
        $query = $this->pdo->prepare ('SELECT * FROM studentai');
        $query->execute();
        return $query->fetchALL();
    }
    function gautiVisusMokytojus()
    {
        $query = $this->pdo->prepare ('SELECT * FROM mokytojai');
        $query->execute();
        return $query->fetchALL();
    }
    function gautiVisusDarbuotojus()
    {
        $query = $this->pdo->prepare ('SELECT * FROM darbuotojai');
        $query->execute();
        return $query->fetchALL();
    }
}