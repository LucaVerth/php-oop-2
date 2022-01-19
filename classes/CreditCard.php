<?php 

trait CreditCard{

  private $card_holder;
  private $card_number;
  private $card_expiry_date;
  private $card_cvc;

  public function SetCreditCard($_card_holder,$_card_number,$_card_expiry_date,$_card_cvc){
    $this->card_holder = $_card_holder;
    $this->card_number = $_card_number;
    $this->card_expiry_date = $_card_expiry_date;
    $this->card_cvc = $_card_cvc;
  }

}
