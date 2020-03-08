<?php
require_once "Vartotojas.php";
require_once 'config/config.php';

class Darbuotojas extends Zmogus {

    protected $pareigos;
    protected $atlyginimas;

    public function __construct($vardas, $pavarde, $amzius, $pareigos, $atlyginimas)
    {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->amzius = $amzius;
        $this->pareigos = $pareigos;
        $this->atlyginimas = $atlyginimas;
    }

    public function setPDO($pdo)
    {
        $this->pdo = $pdo;
    }

    public function pridetiDarbuotoja()
    {
        $query = $this->pdo->prepare("INSERT INTO darbuotojai(vardas, pavarde, amzius, pareigos, atlyginimas)
        VALUES ('$this->vardas', '$this->pavarde', '$this->amzius', '$this->pareigos', '$this->atlyginimas')");
        $query->execute();
    }

    static function pridetiDarbuotojaForma() {
        echo "Prideti Darbuotoja";
    }
}

