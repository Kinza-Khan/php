<?php
 class abc {
     public function __call($name, $arguments){
         if($name=="test"){
             $count=count($arguments);
            if($count==3) {
                 echo "you have to provide three parameteres";
             }
             else{
                 echo "not matched";
             }
             

         }
     }
       
 }
 $obj =new abc() ;
$obj->test("kinza","fariha" ,"fariha");




?>