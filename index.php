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


require_once __DIR__ . '/classes/user.php';
require_once __DIR__ . '/classes/product.php';
require_once __DIR__ . '/classes/creditCard.php';

//Product
$new_product = new Product("Collare antiparassitario", 25);
$new_product->setBrand("Scalibor");
// $new_product->setDescription("Scalibor protegge il tuo cane dai pappataci per 12 mesi, da zecche e zanzare per 6 mesi e dalle pulci per 4 mesi. Non avrai dunque bisogno di frequenti applicazioni e non rischierai dimenticanze. Applica il collare Scalibor al tuo cane appena inizia la bella stagione per proteggerlo dalla puntura dei pappataci e ridurre il rischio di contrarre la leishmaniosi. Il bagno non pregiudica l’attività del collare. Scalibor può essere utilizzato nei cuccioli di età superiore alle 7 settimane, in gravidanza e in lattazione.");

var_dump($new_product);

//User
$new_user = new User('Lucio','Melis');
$new_user->setCreditCard(729462746047, 744, 6, 2026);

var_dump($new_user);


?>

