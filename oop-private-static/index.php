<?php
class User {
    public $name;
    public $lastname;
    public $email;
    public $age;
    private $discount;
    private $password;

    function __construct($_name, $_lastname, $_email, $_password, $_age = 0) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->password = $_password;
        $this->age = $_age;
    }

    public function getFullName() {
        return "Nome completo è  " . $this->name . " " . $this->lastname;
    }

    public function setDiscount($_legal_age = 18) {
        // Se l'età è maggiore di 65, alora lo sconto è di 40%
        // Se minore di 18, allora lo sconto è di 20%
        // altrimenti nessun sconto
        if ($this->age > 65) {
            $this->discount = 40;
        } elseif ($this->age < $_legal_age) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }

    public function getDiscount() {
        return $this->discount;
    }

    public static function generatePassword() {
        // Logica che genera una stringa random
        return "password1234";
    }
}

$passwordPippo = User::generatePassword();
var_dump($passwordPippo);

// Qui creo l'istanza 
$pippo = new User("Pippo", "Bianchi", "pippo@gmail.com", $passwordPippo, 15);
$pippo->setDiscount();
var_dump($pippo);

echo $pippo->getDiscount();

$passwordPluto = User::generatePassword();

?>