<?php
/*
    L'e-commerce vende prodotti per gli animali.
    I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
    Il pagamento avviene con la carta di credito, che non deve essere scaduta.
    Dividete bene in classi e implementate gli attributi e i metodi necessari per il corretto funzionamento dell'e-commerce.
    Il focus è sulla parte di slide condivisa oggi su Drive.
    BONUS:
    Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
*/


require_once __DIR__ . '/classes/registeredUser.php';
require_once __DIR__ . '/classes/product.php';
require_once __DIR__ . '/classes/creditCard.php';

//Product
$new_product = new Product("Collare antiparassitario", 25);
$new_product->setBrand("Scalibor");
$new_product->setImg('https://www.efarma.com/media/catalog/product/f/1/f182e0593f5e267ff5dd15c265b1d35cbd1206607ca597abd67ead5aa8e31389.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=&width=');
// $new_product->setDescription("Scalibor protegge il tuo cane dai pappataci per 12 mesi, da zecche e zanzare per 6 mesi e dalle pulci per 4 mesi. Non avrai dunque bisogno di frequenti applicazioni e non rischierai dimenticanze. Applica il collare Scalibor al tuo cane appena inizia la bella stagione per proteggerlo dalla puntura dei pappataci e ridurre il rischio di contrarre la leishmaniosi. Il bagno non pregiudica l’attività del collare. Scalibor può essere utilizzato nei cuccioli di età superiore alle 7 settimane, in gravidanza e in lattazione.");

//var_dump($new_product);

//User
$new_user = new User('Lucio','Melis');
$new_user->setCreditCard(729462746047, 744, 6, 2023);

//var_dump($new_user);

//Registered User
$new_registeredUser = new RegisteredUser('Stefano', 'Piotti','Utente registrato');
$new_registeredUser->setDiscount(20);
//echo $new_registeredUser->getDiscount();
//var_dump($new_registeredUser);


?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600&family=Montserrat:wght@100;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP OOP 2</title>
</head>
<body>
    <div class="e-commerce">
        <h1>PET SHOP</h1>
        <h2><?php echo $new_product->getName() ?></h2>
        <p> Marca:<?php echo $new_product->getBrand() ?></p>
        <img class="product-img" src=" <?php echo $new_product->getImg() ?>" alt="">
        <p>prezzo:<?php echo $new_product->getPrice() ?> &euro;</p>
        <p>prezzo utente prime: <?php echo $new_product->getPrice() *20 / 100 ?> &euro; <span> -20%</span></p>


    </div>
</body>
</html>

