<?php 

class CreditCard{

  private $holder;
  private $card_number;
  private $card_expiry_date;
  private $cvc;


  public function setCreditCard($_card_number){
    $this->card_number = $_card_number;
  }
  
}
