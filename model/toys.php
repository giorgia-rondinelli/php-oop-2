<?php 
class toys extends products{
  public $type;

 public function __construct(string $_animal,string $_descpription,int $_price,string $_size,string $_brand,  string $_type){

  parent::__construct($_animal,$_descpription,$_price,$_size,$_brand);

  $this->type=$_type;
}
}



   
 

  
  

 

