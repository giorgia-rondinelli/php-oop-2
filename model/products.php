<?php
class products {
  public $animal;
  public $descpription;
  public $price;
  public $size;
  public $brand;
  public $img;

  function __construct(string $_animal,string $_descpription,int $_price,string $_size,string $_brand ,string $_img)
  {
    $this->animal=$_animal;
    $this->descpription=$_descpription;
    $this->price=$_price;
    $this->size=$_size;
    $this->brand=$_brand;
    $this->img=$_img;

  }

 





}