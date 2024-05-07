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

    if(empty($_descpription) || strlen($_descpription)<5 ){
      throw new Exception('la descrizione deve essere di almeno 5 caratteri');
    }
    else{
      $this->descpription=$_descpription;
    }
    
    $this->price=$_price;
    $this->size=$_size;
    $this->brand=$_brand;
    $this->img=$_img;



  }

 





}