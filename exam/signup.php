<?php
$server="mysql:host=localhost;dbname=daraz";
$username="root";
$password="";
// for checking wrong table name
//pdo setting for exposing errors

// database sy connect hony k lye
$pdo =new PDO($server,$username,$password); 
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

if(isset($_POST['btn1'])){

    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];


    if($password==$cpassword){
     $query=$pdo->prepare("SELECT * FROM users where Email =:email");
   
     $query->bindParam("Email",$email,PDO::PARAM_STR);
  
     $query->execute();
     $user=$query->fetch(PDO::FETCH_ASSOC);
if(!$user){
   $file=($_FILES['img1']);
    move_uploaded_file($file['tmp_name'],"uploading/".$file['name']);
    $photo=$file['name'];

$query=$pdo->prepare("insert into users(Name,Email,Password,Usertype_id,photo)values(:Name,:Email,:Password,2,:photo)");
$query->bindParam("Name",$name,PDO::PARAM_STR);
$query->bindParam("Email",$email,PDO::PARAM_STR);
$query->bindParam("Password",$password,PDO::PARAM_STR);
$query->bindParam("photo",$photo,PDO::PARAM_STR);
$query->execute();
header("location:signin.php");

}


else{
    echo "<script>alert('email already exist');</script>";
}
   
    }
    
    else{
        echo "<script>alert('not matched');</script>";
    }
   
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
      <h1>Sign Up</h1>
    <div class="container-fluid">
    <form action="" method="post" class="form" enctype="multipart/form-data" i >
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" autocomplete="off" class="form-control" placeholder="Enter Name"  >
      <span id="n"></span>
      </div>
      <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" placeholder="Enter  Your Email" id="email">
      <span id="e"></span>
      </div>
      <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Enter password" id="spassword">
      <span id="p"></span>
      </div>
      <div class="form-group">
      <label for="password">Confirm Password</label>
      <input type="password" name="cpassword" class="form-control" placeholder="Enter password" id="confirmpassword" style=" outline:none !important ;">
      <div id="errormsg"></div>
      </div>
      <div class="form-group">
        <label for="">photo</label>
        <input type="file" name="img1">
      </div>
    <input type="submit" value="submit" name="btn1" class="btn btn-info" id="sub">
    
    </form>
    
    </div>
    <script>
    $(document).ready(function(){
    var error = false; 
    var found= false;
    $('#confirmpassword').keyup(function () {
            var password = $('#spassword').val();
            var cpassword = $('#confirmpassword').val();
            if (password != cpassword) {
                $(this).css({'border':'1px solid red'});
                $(this).next().html('Password is not matched ').css({ 'color':'red'});
            }
            else{
              $(this).css({'border':' ' });
              $("#errormsg").hide();
             $(this).css({'border':'1px solid green', 'margin-bottom': '4%' });
            
            }
        }) 
        // end matching passwords  

        $('#name').keyup(function () {
          var name=$('#name').val();
        if(name.length<3){
        $(this).css({'border':'1px solid red'});
         $(this).next().html('length should be greater than 2').css({ 'color':'red'});
         found= true;

          }
        
          else{
            found = false;
            $(this).css({'border':' ' });
            $("#n").hide();
            $(this).css({'border':'1px solid green', 'margin-bottom': '4%' });
          }
        }) 
        // end length of
        $('#name').click(function () {
          var name=$('#name').val();
        if(name == ""){
    
         $(this).next().html('please fill out this field').css({ 'color':'red'});
         $(this).css({'border':'1px solid red'});
      
      
          }
          else{
            $(this).css({'border':' ' });
            $("#n").hide();
            $(this).css({'border':'1px solid green', 'margin-bottom': '4%' });
          }
        }) 
        // end name
        $('#email').keyup(function () {
          var email=$('#email').val();
        if( email == ""){
    
         $(this).next().html('please fill out this field').css({ 'color':'red'});
         $(this).css({'border':'1px solid red'});
      
      
          }
          else{
            $(this).css({'border':' ' });
            $("#e").hide();
            $(this).css({'border':'1px solid green', 'margin-bottom': '4%' });
          }
        }) 
        // END EMAIL
        $('#spassword').keyup(function () {
          var password=$('#spassword').val();
        if( password == ""){
    
         $(this).next().html('please fill out this field').css({ 'color':'red'});
         $(this).css({'border':'1px solid red'});
      
      
          }
          else{
            $(this).css({'border':' ' });
            $("#p").hide();
            $(this).css({'border':'1px solid green', 'margin-bottom': '4%' });
          }
        }) 
  function emptyfield(id){
  var value= $(id).val();
  if(value==''){
    error= true;
    $(id).css({'border':'1px solid red'});
    $(id).next().html('This field is required').css({ 'color':'red'});

  }
  else{
    error= false;
    
  }
}

      $('#sub').click(function(){
          emptyfield('#name');
          emptyfield('#email');
          emptyfield('#spassword');
          emptyfield('#confirmpassword');
          if(error==true || found ==true){
            return false;
          }
          else{
            return true;
          }

          })
          
    
      
        // if(uerror){
        //   return true;
        // }
      })
        // $('#email'). click(function () {
        //   var email=$('#email').val();
        // if(email.length<=2){
        //  $(this).next().html('length should be greater than 2').css({ 'color':'red'});
        //   }
        //   else{
        //     $("#n").hide();
        //   }
        // }) 
       
</script>
  </body>
</html>


