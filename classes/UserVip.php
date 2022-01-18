<?php 
require_once __DIR__ . "/User.php";

class UserVip extends User{

  private $vip_id;
  private $specialDiscount;

  function __construct($_firstName, $_vip_id){
    parent::__construct($_firstName);
    $this->vip_id = $_vip_id;
    $this->specialDiscount = 15;
  }


}