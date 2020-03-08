<?php
require_once "Vartotojas.php";
require_once 'config/config.php';

class Studentas extends Zmogus {

    protected $kursoPav;
    protected $stipendija;

    public function __construct($vardas, $pavarde, $amzius, $kursoPav, $stipendija)
    {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->amzius = $amzius;
        $this->kursoPav = $kursoPav;
        $this->stipendija = $stipendija;
    }

    public function setPDO($pdo)
    {
        $this->pdo = $pdo;
    }

    public function pridetiMokini()
    {
        $query = $this->pdo->prepare("INSERT INTO studentai(vardas, pavarde, amzius, kursoPav, stipendija)
        VALUES ('$this->vardas', '$this->pavarde', '$this->amzius', '$this->kursoPav', '$this->stipendija')");
        $query->execute();
    }

    static function pridetiMokiniforma() {
        echo "Prideti Studenta";
    }
}
