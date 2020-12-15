<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
<div class="container">
	<form method="post" action="">
		<div class="form-group">
			<label>Enter Number:</label>
			<input type="text" name="number" class="form-control">
		</div>
		<input type="submit" name="submit" value="submit">


	</form>
<?php

if(isset($_POST['submit'])){

    $num=$_POST["number"];
    $sub=substr($num,0,4);
    
    
  ?>
  <?php
 
  
if ($sub == "0331"  OR $sub == "0332" OR $sub== "0333"  OR $sub== "0334" OR $sub== "0335" OR $sub=="0336" ) {
	echo "This number belongs to ufone " .$num . "<br>";
	echo '<span><img src="https://www.phoneworld.com.pk/wp-content/uploads/2017/03/Ufone.jpg" height="50px" alt=""></span>';
	
}
else
{
echo "I dont know about this type of phone number " .$num;	
}


?>


<!-- <li><?php   ?></li> -->
<?php      
}
?>

<!-- <iframe src="fa fa-facebook"></iframe> -->


</div>

</body>
</html>