<?php 


class UserVip extends User{

  private $vip_id;
  private $specialDiscount;

  function __construct($_firstName){
    parent::__construct($_firstName);
    $this->specialDiscount = 15;
  }

}