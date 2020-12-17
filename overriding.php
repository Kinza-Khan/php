<?php
class base{
     public function calc($a,$b){
         return $a*$b;
     }
}
class child extends base{
     public function calc($a,$b){
    return $a+$b;
    
     }
    
}
$obj=new child;
echo $obj->calc(5,10);




?>