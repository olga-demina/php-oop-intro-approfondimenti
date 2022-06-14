<?php
require_once __DIR__ . "/User.php";
require_once __DIR__ ."/Employee.php";


// Istanza User
$pippo = new User("Pippo", "Bianchi", "pippo@gmail.com", 15);
$pippo->setDiscount();
var_dump($pippo);
echo $pippo->getDiscount();

// Istanza Employee
$pluto = new Employee("Pluto", "Verdi", "pluto@gmail.com",  "senior", "teacher boolean");
$pluto->setDiscount();
var_dump($pluto);
echo $pluto->getFullName() . "<br>";
echo $pluto->printLevel();
?>