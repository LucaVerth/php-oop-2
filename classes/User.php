<?php 
require_once __DIR__ . "/CreditCard.php";

class User{

  private $id;
  private $firstName;
  private $lastName;
  private $email;
  private $address; 
  private $cart;
  private $payment_method;

  function __construct(){
    $this->payment_method = new CreditCard();
  }

}


