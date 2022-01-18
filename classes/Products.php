<?php 

class Product{

  private $name;
  private $description;
  private $status;
  private $price;
  private $discount = 0;

  function __construct($_name, $_status)
  {
    $this->name = $_name;
    $this->status = $_status;
  }

  //setter
  public function setName($_name){
    $this->name = $_name;
  }
  public function setDescription($_description){
    $this->description = $_description;
  }
  public function setStatus($_status){
    $this->status = $_status;
  }
  public function setPrice($_price){
    $this->price = $_price;
  }
  public function setDiscount($_discount){
    $this->discount = $_discount;
  }

  //getter
  public function getName(){
    return $this->name;
  }
  public function getDescription(){
    return $this->description;
  } 
  public function getStatus(){
    return $this->status;
  }
  public function getPrice(){
    return $this->price;
  }
  public function getDiscount(){
    return $this->discount;
  }

  //methods
  public function getFinalPrice(){
    $finalPrice = $this->price - (($this->price * $this->discount) / 100);
    return number_format($finalPrice, 2);
  }


}

