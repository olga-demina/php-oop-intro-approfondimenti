<?php

class Utente {

    public $name;
    public $email;
    // All'interno del carrello ci sono dei veicoli
    public $cart = [];

    function __construct($_name, $_email) {
        $this->name = $_name;
        $this->email = $_email;
    }

    // aggiunge un prodotto al carello, se disponibile
    // $_product -> un prodotto di tipo Veicolo
    // return true se aggiunge, false altrimenti
    function addProductToCart($_product) {
        if ($_product->disponibile) {
            $this->cart[] = $_product;
            return true;
        } else {
            return false;
        }
    }

    function getTotalPrice() {
        $total_price = 0;
        foreach($this->cart as $item) {
            $total_price += $item->prezzo;
        }
        return $total_price;
    }
}
