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
require_once __DIR__ . '/classes/creditCard.php';


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
        <div class="header">
            <h1>ZAMPET STORE</h1>
            <img class="logo" src="img/love.png" alt="logo">

        </div>
        
        <a class="link-page" href="classes/product.php">Scopri i nostri prodotti</a>
        <a class="link-page" href="classes/User.php">Profilo Utente</a>

    </div>
</body>
</html>

