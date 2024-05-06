<?php
class food extends products{
  public $ingredients;
  public $quantity;
  public $type;

  public function __construct(string $_animal,string $_descpription,int $_price,string $_size,string $_brand,  $_ingredients, string $_quantity, string $_type ,string $_img)
  {
  parent::__construct($_animal,$_descpription,$_price,$_size,$_brand,$_img);
  $this->ingredients=$_ingredients;
  $this->quantity=$_quantity;
  $this->type=$_type;
  
  }

}