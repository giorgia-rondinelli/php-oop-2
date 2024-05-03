<?php
class products {
  public $animal;
  public $descpription;
  public $price;
  public $size;
  public $brand;

  function __construct(string $_animal,string $_descpription,int $_price,string $_size,string $_brand )
  {
    $this->animal=$_animal;
    $this->descpription=$_descpription;
    $this->price=$_price;
    $this->size=$_size;
    $this->brand=$_brand;
  }

 





}