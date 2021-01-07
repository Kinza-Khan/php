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
  <div class="container">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#modelId">
    Read Instruction
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Details About House Scheme</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eveniet molestiae eum corporis qui deleniti vitae quae, nihil est dolorem nisi placeat repellat! Doloremque, rerum repellat aperiam distinctio laborum deserunt.
       Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem modi quia velit illum est dolorum suscipit deleniti recusandae atque. Vel quod at similique, repellendus saepe illo ab magnam quo porro.
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, praesentium delectus, ab eius odit asperiores tenetur nobis fuga consectetur impedit inventore. Praesentium illum architecto sit quasi aliquam dolore non quam.

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- <input type="submit" value="Read Instruction" class="btn btn-info"> -->
 <!-- <input class="btn btn-info" type="button" href="Scheme.docx" value="Download" download> -->
 <button download=""  class="btn btn-info"><a href="Scheme.docx" download>Download</a></button>
 <form method="post"  action="" >
 <div class="form-group">
     <label for="">Enter Your Name</label>
     <input id="" placeholder="Enter Your Name"  class="form-control" type="text" name="name">
 </div>
 <div class="form-group">
     <label for="">Enter Your Age</label>
     <input id=""  placeholder="Enter Your Age"  class="form-control" type="number" name="age">
 </div>
 <div class="form-group">
     <label for="">Enter Your Salary</label>
     <input id=""  placeholder="Salary" class="form-control" type="text" name="salary">
 </div>
 <div class="form-group">
     <label for="">Enter Your Home Amount</label>
     <input id=""  placeholder="Home Amount between 1000000 to 4000000"  class="form-control" type="text" name="home_amount">
 </div>
 <div class="form-group">
     <label for="">Enter Advanced Amount</label>
     <input id=""  placeholder="Advanced Amount" class="form-control" type="text" name="advanced_amount">
 </div>
 
 <div class="form-group">
   <label for="">Select Year</label>
   <select class="form-control" name="year" id="">
     <option ></option>
     <option>5</option>
     <option>10</option>
     <option>20</option>
   </select>
 </div>
 <input type="submit" value="submit" class="btn btn-success" name="save">
 
 </form>
  <?php

if(isset($_POST["save"])){
$name=$_POST["name"];
$age=$_POST["age"];
$salary=$_POST["salary"];
$homeamount=$_POST["home_amount"];
$advancedamount=$_POST["advanced_amount"];
$year=$_POST["year"];
$final1=$homeamount*0.05;
$cal=(($homeamount+$final1)/($year*12)-$advancedamount);


    ?>

<?php

if 
($age>25 && $salary>25000 && ($homeamount>=1000000 && $homeamount<=4000000 ))
  {
    echo  $name.  " You are eligible for this scheme. <br> you will pay " .$cal. " at every month till " .$year. "years";
}
else{
    echo $name. "You are not Eligible for this scheme"  ;
}


?>
<?php
}    

?>





  </div>
  






      
</body>
</html>