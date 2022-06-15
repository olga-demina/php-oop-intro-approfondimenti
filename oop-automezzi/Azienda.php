<?php 
require_once __DIR__ . "/Indirizzo.php";

class Azienda {
    use Indirizzo; 
    
    public $nome;
    public $partita_iva;
}