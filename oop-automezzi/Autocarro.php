<?php
require_once __DIR__ . "/Veicolo.php";
require_once __DIR__ ."/ProdottoContabile.php";

class Autocarro extends Veicolo {
    use ProdottoContabile;

    public $numero_ruote = 8;
    public $carico_max_kg;

    function __construct($_marca, $_modello, $_alimentazione, $_prezzo, $_carico_max_kg) {
        parent::__construct($_marca, $_modello, $_alimentazione, $_prezzo);
        $this->carico_max_kg = $_carico_max_kg;
        $this->iva = 4;
    }

    public function printInfo() {
        return "$this->marca $this->modello € $this->prezzo. Carico massimo: $this->carico_max_kg kg";
    }
}
