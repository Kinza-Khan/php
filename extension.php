<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
<form action="" method="post">
<div class="form-group">
<label for="">Enter file name</label>
<input class="form-control" type="text" name="file">
</div>
<input type="submit" value="submit" name="submit">


</form>
<?php
if(isset($_POST['file'])){

   $Name=$_POST["file"];
   $File=explode(".",$Name);
$arry=$File[count($File)-1];
echo $arry;



}
    


?>
</div>
</body>
</html>