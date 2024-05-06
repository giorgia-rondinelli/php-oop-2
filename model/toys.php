<?php 
class toys extends products{
  public $type;

 public function __construct(string $_animal,string $_descpription,int $_price,string $_size,string $_brand,  string $_type,string $_img){

  parent::__construct($_animal,$_descpription,$_price,$_size,$_brand,$_img);

  $this->type=$_type;
}
}



   
 

  
  

 

