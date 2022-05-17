<?php

class Product {
    private $name;
    private $brand;
    private $price;
    private $description;
    public $img;

function __construct($_name, $_price) {
    $this->name = $_name;
    $this->price = $_price;
}

//SET

public function setName($_name) {
    $this->name = $_name;
}

public function setPrice($_price) {
    $this->price = $_price;
}

public function setBrand($_brand) {
    $this->brand = $_brand;
}

public function setDescription($_description) {
    $this->description = $_description;
}

public function setImg($_img) {
    $this->img = $_img;
}

//GET

public function getName() {
  return  $this->name;
}

public function getPrice() {
    return  $this->price;
  }

public function getBrand() {
    return  $this->brand;
  }

public function getDescription() {
    return  $this->description;
  }  

public function getImg() {
   return $this->img;
}  

}

?>


<?php

$new_product = new Product("Collare antiparassitario", 25);
$new_product->setBrand("Scalibor");
$new_product->setImg('https://www.efarma.com/media/catalog/product/f/1/f182e0593f5e267ff5dd15c265b1d35cbd1206607ca597abd67ead5aa8e31389.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=&width=');
$new_product->setDescription("Scalibor protegge il tuo cane dai pappataci per 12 mesi, da zecche e zanzare per 6 mesi e dalle pulci per 4 mesi. Non avrai dunque bisogno di frequenti applicazioni e non rischierai dimenticanze. Applica il collare Scalibor al tuo cane appena inizia la bella stagione per proteggerlo dalla puntura dei pappataci e ridurre il rischio di contrarre la leishmaniosi. Il bagno non pregiudica l’attività del collare. Scalibor può essere utilizzato nei cuccioli di età superiore alle 7 settimane, in gravidanza e in lattazione.");

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
    <link rel="stylesheet" href="../css/style.css">
    <title>Product</title>
</head>
<body>
    <div class="e-commerce">
        <h2><?php echo $new_product->getName() ?></h2>
        <p> Marchio: <?php echo $new_product->getBrand() ?></p>
        <div class="details-product">
            <img class="product-img" src=" <?php echo $new_product->getImg() ?>" alt="box whit image dog">
            <p class="description-product"><?php echo $new_product->getDescription() ?></p>
        </div>
       <div class="prices">
            <p>prezzo: <?php echo $new_product->getPrice() ?> &euro;</p>
            <p>prezzo utente prime: <?php echo $new_product->getPrice() *20 / 100 ?> &euro; <span> -20%</span></p>
       </div>
        <a class="link-page" href="/php-oop-2/index.php">Torna alla Home</a>
    </div>
</body>
</html>