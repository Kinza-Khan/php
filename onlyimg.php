<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	 <div class="container">
<form class="form" action="" method="post">
<div class="form-group">
<label for="">Enter File Name</label>
<input class="form-control" type="text" name="file">
</div>
<input type="submit" value="submit" class="btn btn-info" name="submit">


</form>
<?php
if(isset($_POST['file'])){
   $Name=$_POST["file"];
   $File=explode("." , $Name);
   $arry=$File[count($File)-1];
   

?>

<?php
if ($arry=="jpg" or $arry=="jpeg" or $arry=="gif" or $arry=="png" or $arry=="svg") {
	echo "this file is image";
}
else{
	echo "this type of file is not image";
}
?>

<?php
}
 
 ?>   



</div>

</body>
</html>