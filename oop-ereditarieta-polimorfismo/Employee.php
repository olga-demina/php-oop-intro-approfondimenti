<?php
require_once __DIR__ . "/User.php";

class Employee extends User {

    public $role;
    public $level;
    public $salary;

    function __construct($_name, $_lastname, $_email, $_level, $_role, $_password = "", $_age = 0) {
        parent::__construct($_name, $_lastname, $_email, $_password, $_age);
        $this->level = $_level;
        $this->role = $_role;
    }

    public function printLevel() {
        return "livello è $this->level";
    }

    public function setDiscount() {
       $this->discount = 50; 
    }
}
