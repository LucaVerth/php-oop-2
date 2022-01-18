<?php 

require_once __DIR__ . "/classes/Products.php";
require_once __DIR__ . "/classes/User.php";

$new_product = new Product("Apple Iphone 13", "Available");
$new_product->setPrice(1299.95);
$new_product->setDiscount(37);
var_dump($new_product);

$new_user = new User();
$new_user->setFirstName("Luca");
$new_user->setLastName("Verthuy");
var_dump($new_user);


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
  <h2>Nome Prodotto: <?php echo $new_product->getName(); ?></h2>
  <h2>Prezzo: <?php echo $new_product->getPrice();?>&euro;</h2>
  <p>Sconto applicato: <?php echo $new_product->getDiscount();?>&percnt;</p>
  <h2>Prezzo Finale: <?php echo $new_product->getFinalPrice();?>&euro;</h2>

</body>
</html>