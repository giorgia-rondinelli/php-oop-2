<?php 
class kennel extends products{
  public $material;
  public $dimentions;

   
  public function __construct(string $_animal,string $_descpription,int $_price,string $_size,string $_brand,  string $_material, string $_dimentions ,string $_img){

  parent::__construct($_animal,$_descpription,$_price,$_size,$_brand,$_img);
  $this->material=$_material;
  $this->dimentions=$_dimentions;
 
  }
}


 
  
  
  
