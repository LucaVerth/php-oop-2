<?php 
require_once __DIR__ . "/CreditCard.php";

class User{

  use CreditCard;

  private $firstName;
  private $lastName;
  private $email;
  private $address; 
  private $cart;

  function __construct($_firstName){
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
  public function getStatus(){
    return $this->status;
  }
  
}


