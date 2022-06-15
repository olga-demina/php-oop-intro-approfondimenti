<?php

trait Indirizzo {
    public $paese;
    public $comune;
    public $civico;

    public function printIndirizzo() {
        return "$this->paese $this->comune";
    }

    public function setIndirizzo($_paese, $_comune, $_civico) {
        $this->paese = $_paese;
        $this->comune = $_comune;
        $this->civico = $_civico;
    }
}