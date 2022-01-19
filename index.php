<?php 
require_once __DIR__ . "/classes/Products.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/UserVip.php";
require_once __DIR__ . "/classes/CreditCard.php";


$new_user = new User("Luca");
$new_user->SetCreditCard("Verthuy", 30187519394, 2022, 454);
var_dump($new_user);

$new_VipUser = new UserVip("Gianni");
$new_VipUser->SetCreditCard("Morandi", 49712995731, 2025, 888);
var_dump($new_VipUser);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-2</title>
</head>
<body>

  <!-- <h2>Nome Prodotto: <?php echo $new_product->getName(); ?></h2>
  <h2>Prezzo: <?php echo $new_product->getPrice();?>&euro;</h2>
  <p>Sconto applicato: <?php echo $new_product->getDiscount();?>&percnt;</p>
  <h2>Prezzo Finale: <?php echo $new_product->getFinalPrice();?>&euro;</h2> -->

</body>
</html>