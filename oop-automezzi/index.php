<?php
require_once __DIR__ . "/Automobile.php";
require_once __DIR__ . "/Moto.php";
require_once __DIR__ . "/Autocarro.php";
require_once __DIR__ . "/Utente.php";

$fiat_punto = new Automobile("Fiat", "Punto", "benzina", 9000);
// var_dump($fiat_punto);


$beverly = new Moto("Piaggio", "Beverly", "benzina", 5000 );
// var_dump($beverly);

$mercedes = new Autocarro("Mercedes", "Actros", "diesel", 60000, 13000);
// var_dump($mercedes);

$davide = new Utente("Davide", "davide@gmail.com");
$davide->addProductToCart($mercedes);
$davide->addProductToCart($fiat_punto);

$beverly->disponibile = false;

try {
    $davide->addProductToCart($beverly);
} catch (Exception $e) {
    // Mandare email al manager e sviluppatore;
    var_dump($e->getMessage());
    echo "E' avvenuto un errore inaspettato";
}

$davide->setIndirizzo("Italia", "Roma", "14");
var_dump($davide);
echo $davide->printIndirizzo();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Prodotti disponibili</h2>
    <ul>
        <li> <?php echo $fiat_punto->printInfo(); ?> </li>
        <li> <?php echo $beverly->printInfo(); ?> </li>
        <li> <?php echo $mercedes->printInfo(); ?> </li>
    </ul>

    <h2>Ciao <?php echo $davide->name; ?>. Ecco il tuo carrello:</h2>
    <ul>
        <?php foreach($davide->cart as $cartItem) { ?>
        <li><?php echo $cartItem->printInfo(); ?></li>
        <?php } ?>
    </ul>
    <h3>Totale: € <?php echo $davide->getTotalPrice(); ?></h3>
    
</body>
</html>