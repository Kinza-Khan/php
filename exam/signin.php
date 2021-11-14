
<?php session_start();

$server="mysql:host=localhost;dbname=daraz";
$username="root";
$password="";
$pdo =new PDO($server,$username,$password); 
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

if(!isset($_SESSION['id'])){
header('loaction: signin.php');
}
if(isset($_POST['btn1'])){

    $email=$_POST["email"];
    $password=$_POST["password"];
    

    
    $query=$pdo->prepare("SELECT * FROM users where Email =:email and Password= :password");
   
     $query->bindParam("Email",$email,PDO::PARAM_STR);
     $query->bindParam("Password",$password,PDO::PARAM_STR);
     $query->execute();
     $user=$query->fetch(PDO::FETCH_ASSOC);
     if($user==false){
       echo "invalid login";
     }
     else{
      //  session_start();
       $_SESSION['id']=$user['id'];
       echo "welcome" . $user['name'];
      //  header('location:1.php');
   }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
      <h1>Signin</h1>
    <div class="container-fluid">
    <form action="" method="post" class="form">
    
      <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" placeholder="Enter  Your Email">
      </div>
      <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Enter password">
      </div>
    
    <input type="submit" value="submit" name="btn1" class="btn btn-info">
    
    </form>
    
    </div>
  </body>
</html>


