<?php 

require_once __DIR__ . "/classes/Products.php";
require_once __DIR__ . "/classes/User.php";

$new_product = new Product("Apple Iphone 13", "Available");
var_dump($new_product);

$new_user = new User();
var_dump($new_user);


?>
