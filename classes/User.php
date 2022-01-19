<?php 
require_once __DIR__ . "/CreditCard.php";
require_once __DIR__ . "/UserVip.php";

class User{

  private $firstName;
  private $lastName;
  private $email;
  private $address; 
  private $cart;
  private $payment_method;
  private $status;

  function __construct($_firstName){
    $this->payment_method = new CreditCard();
    $this->firstName = $_firstName;
  }

  //setter
  public function setFirstName($_firstName){
    $this->firstName = $_firstName;
  }
  public function setLastName($_lastName){
    $this->lastName = $_lastName;
  }
  public function setEmail($_email){
    $this->email = $_email;
  }
  public function setAddress($_address){
    $this->address = $_address;
  }
  public function setCart($_cart){
    $this->cart = $_cart;
  }
  public function setPaymentMethod($_payment_method){
    $this->payment_method = $_payment_method;
  }
  public function setStatus($_status){
    $this->status = $_status;
  }

  //getter
  public function getFirstName(){
    return $this->firstName;
  }
  public function getLastName(){
    return $this->lastName;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getAddress(){
    return $this->address;
  }
  public function getCart(){
    return $this->cart;
  }
  public function getPaymentMethod(){
    return $this->payment_method;
  }
  public function getStatus(){
    return $this->status;
  }
  

}


