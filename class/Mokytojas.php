<?php
require_once "Vartotojas.php";
require_once 'config/config.php';

class Mokytojas extends Zmogus {

    protected $destomasKursas;
    protected $atlyginimas;

    public function __construct($vardas, $pavarde, $amzius, $destomasKursas, $atlyginimas)
    {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->amzius = $amzius;
        $this->destomasKursas = $destomasKursas;
        $this->atlyginimas = $atlyginimas;
    }

    public function setPDO($pdo)
    {
        $this->pdo = $pdo;
    }

    public function pridetiMokytoja()
    {
        $query = $this->pdo->prepare("INSERT INTO mokytojai(vardas, pavarde, amzius, destomasKursas, atlyginimas)
        VALUES ('$this->vardas', '$this->pavarde', '$this->amzius', '$this->destomasKursas', '$this->atlyginimas')");
        $query->execute();
    }

    static function pridetiMokytojaForma() {
        echo "Prideti Mokytoja";
    }
}
