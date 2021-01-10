<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
    .col-4, .col-2{
        border:1px solid black;
    }
    span{
        margin-left:40px;
    }
    .p{
        margin-left:-30px;
    }
    .block{
        /* height:60px; */
        width:100px;
        border:1px solid black;
       text-align:center;
       line-height:44px;
       margin-left:500px;
    }
    .cen{
       text-align:center;
    }
    
    </style>
</head>
<body>
<?php
if(isset($_POST["result"])){
    $name=$_POST["name"];
    $fathername=$_POST["f_name"];
    $roll=$_POST["roll"];
    $class=$_POST["standard"];
    

    $urdu=$_POST["urdu"];
    $english=$_POST["english"];
    $math=$_POST["math"];
    $physics=$_POST["physics"];
    $islamiat=$_POST["islamiat"];
    $english2=$_POST["english2"];
    $physicspr=$_POST["physicspr"];
    $chemistrypr=$_POST["chemistrypr"];
    $chemistryth=$_POST["chemistryth"];
    $computer=$_POST["computer"];
    $pst=$_POST["pst"];
    $sindhi=$_POST["sindhi"];
    $su=$sindhi+$urdu;
     $e=$english+$english2;
     $chem=$chemistryth+$chemistrypr;
     $phy=$physics+$physicspr;
    $obtained_marks=$su+$math+$e+$islamiat+$phy+$chem+$pst+$computer;
   $percent=$obtained_marks*100/900;
if($percent>=80){
    $p="A+";
}
elseif($percent>=70){

    $p="A";
}
elseif($percent>=60){
    $p="B";
}
elseif($percent>=50){
    $p="C";
}
else{
    $p="Fail";
}
   
}




?>
<div class="container">
<h3 class="text-center">Board of Secondary Education Karachi</h3>
<h4 class="text-center">Statement of Marks</h4>
<h4 class="text-center">SSC Examination</h4>
<h4 class="text-center">For Successful Condidates Only</h4>
<div class="bio">
<p>
<h5>Name : <?php echo $name?></h5>
<h5>Father Name :<?php echo  $fathername?></h5>
<h5>Class :<?php echo $class?></h5>
<h5>Roll Number :<?php echo $roll?></h5>
<h5>Group :Science</h5>

</p>

</div>

<table class="table text-center" border="1" >
<thead class="thead-dark" >
<tr>
<th colspan="4" >Subject</th>
</tr>
</thead>
<tbody>
<!-- <div class="col-4"> -->

<tr >
<td >Component 1</td>
<td >Marks</td>
<td >Compnent 2</td>
<td>Marks</td>
</tr>
<tr >
<td >Sindhi Salees <span><?php echo $urdu?></span><br>Urdu Normal<span><?php echo $english?><br></span></td>
<td ><?php echo $su ."/150"?></td>
<td >Mathametics</td>
<td><?php echo $math ."/100" ?></td>
</tr>
<tr >
<td >English Paper 1     <span><?php echo $english?><br></span>   English Paper 2 <span><?php echo $english2?><br></span></td>
<td ><?php echo $e ."/150"?></td>
<td >Computer</td>
<td><?php echo $computer ."/100" ?></td>
</tr>
<tr >
<td class="p" >Pakistan Studies <span></span></td>
<td ><?php echo $pst ."/75"?></td>
<td >Islamiat</td>
<td><?php echo $islamiat ?></td>
</tr>
<tr >
<td >Chemistry (TH) <span><?php echo $chemistryth ."/85 " ?></span> <br>Chemistry (PR) <span><?php echo $chemistrypr."/15"?><br></span> </td>
<td ><?php echo $chem ."/100 "?></td>
<td >Physics (TH)<span><?php echo $physics ."/85 "?></span> <br>Physics (PR)<span><?php echo $physicspr . "/15"?><br></span>  </td>
<td><?php echo $phy ."/100" ?></td>
</tr>


<!-- <tr>English paper 1 <br>English Paper 2</tr>
<tr>Pakistan Studies </tr>
<tr>Islamiat <br>Urdu Normal</tr> -->
<!-- </div> -->
<!-- <div class="col-2"></div>
<div class="col-4"></div>
<div class="col-2"></div> -->
</tbody>
</table>
<div class="cen"><h4 class="text-Center">Grand Total</h4><p class="text-Center"> <?php echo $obtained_marks ?> Out of  900</p>
<h4 class="mt-3">Grade <div class="block mt-3"><?php echo $p?></div></h4></div>

</div>
    
</body>
</html>