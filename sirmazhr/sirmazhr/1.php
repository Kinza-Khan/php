<?php
if(isset($_POST['btn'])){

$file=($_FILES['img1']);
// var_dump($file);
$name=$file['name'];
move_uploaded_file($file['tmp_name'],"uploading/".$file['name']);
echo "file uploaded succesfully";
$f1=true;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($file['name'])){
    ?>
    <img style="height:200px" src="uploading/<?php echo $name ?>"   alt="">
    <?php
}

?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="img1">
<input type="submit" value="upload" name="btn">
</form>
    
</body>
</html>