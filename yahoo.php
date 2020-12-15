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
<label for="">Enter Email Address</label>
<input class="form-control" type="email" name="file">
</div>
<input type="submit" value="submit" name="submit">


</form>
<?php
if(isset($_POST['file'])){
    $myname="yahoo.com";
   $Name=$_POST["file"];
   $File=explode("@",$Name);

   $result=strcmp($myname,$File[1]);


  
 
   
  ?>
  <?php
if ($result==0) {
    echo "restricted this type of email address";
    
}

else
{
    echo  "  Valid email address " .$Name;
}
  ?>

<?php
}
    
?>


</div>
</body>
</html>