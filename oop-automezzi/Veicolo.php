<?php
class Veicolo {
    public $marca;
    public $modello;
    public $alimentazione;
    public $numero_ruote = 4;
    public $prezzo;
    public $disponibile = true;

    function __construct($_marca, $_modello, $_alimentazione, $_prezzo) {
        $this->marca = $_marca;
        $this->modello = $_modello;
        $this->alimentazione = $_alimentazione;
        $this->prezzo = $_prezzo;
    }

    public function printInfo() {
        return "$this->marca $this->modello € $this->prezzo";
    }
}
