<?php
class shape{
    public function draw(){
// echo "hello rectangle";
    }

}


class rectangle extends shape {
    public $_width;
    public $_height;
    public function __construct(int $width , int $height)
    {
        // $this->_width=$width;
        // $this->_height=$height;
      // ech "<br> rectangle width is $width and height ids $height"; 
      for ($i=1; $i<=$height ; $i++) { 
        if ($i>1) {
          # code...
          echo "|";
        }
        else{
          echo "&nbsp";
        }

           for($j=1; $j<=$width ; $j++) { 
            

            if ($i==1 || $i==$height) {
              # code...
              echo "_";
               echo " ";

            }
            else{
              echo "&nbsp&nbsp&nbsp";
 
            }
          }

        if ($i>1) {
      echo "|";
        }
          
          echo "<br>";
      }

      

    }
        
    }
class square extends shape{

public $_side;
public function __construct(int $side)
{
 // $this->_side=$side;   
 // echo "<br> sides of square should be equal with $side cm";
}

}

// $obj1= new square(5);

$obj= new rectangle(10,5);
// $obj->draw();



?>
