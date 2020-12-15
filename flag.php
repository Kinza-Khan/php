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
			<label>Enter code:</label>
			<input type="text" name="number" class="form-control">
		</div>
		<input type="submit" name="submit" value="submit">


	</form>
<?php

if(isset($_POST['submit'])){

    $userflag=$_POST["number"];
    $myflag="+92";
    $final=strcmp($userflag,$myflag);
   
  ?>
   <?php
  
  
if($final==0) {
	
	echo '<span><img src="https://upload.wikimedia.org/wikipedia/commons/3/32/Flag_of_Pakistan.svg" height="50px" alt=""></span>';
	
}
else
{
echo "Invalid";	
}


?> 

<?php
} 
?>
<!-- <li><?php   ?></li> -->


<!-- <iframe src="fa fa-facebook"></iframe> -->


</div>

</body>
</html>