<?php
              for ($i=5; $i>0 ; $i--) { 

              	for ($j=5; $j>$i; $j--) { 
                   echo "&nbsp;&nbsp;";


               	}
              echo "\\";


               for ($k=1; $k<$i ; $k++) { 

              		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
              	
              	     }

	                 echo "/";
                     echo  "<br>";

                      }
                      ?>

<?php

           for ($i=1; $i<6 ; $i++) { 
              		             
              	for ($j=6; $j>$i; $j--) { 
              		echo "&nbsp;&nbsp;";

              	}

              echo "/";
               for ($k=1; $k<$i ; $k++) { 
               	# code...

              		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
              	
              	     }
	                 echo "\\";
                     echo  "<br>";

                      }

// end of for loop
                   

?>
<?php
// echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/";

// $number=[1,2,3,4,4];
// echo $number[3]*$number[2];
// echo "<br>";

// foreach ($number as $item) {
// 	# code...
// 	echo "<br>".$item;
// }



?>



