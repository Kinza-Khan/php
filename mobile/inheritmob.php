

<?php
class category{
	public $id;
public $name;
  
}
$categ1=new category;
$categ1->id= 1;
$categ1->name="mobiles";

$categ2=new category;
$categ2->id=2;
$categ2->name="camera";

$categ3=new category;
$categ3->id=3;
$categ3->name="Watches";


$row=[$categ1,$categ2,$categ3];

class mobiles{
	public $id;
	public $img;
	public $name;
	public $price;

}

$mb=new mobiles;
$mb->img='<img src="images/m1.jpg" />';
$mb->price=40000;
$mb->name="oppo Reno";

$mb2=new mobiles;
$mb2->img='<img src="images/m2.jpg" />';
$mb2->price=40000;
$mb2->name="oppo Reno";

$mb3=new mobiles;
$mb3->img='<img src="images/m3.jpg" />';
$mb3->price=40000;
$mb3->name="oppo Reno";


$mb4=new mobiles;
$mb4->img='<img src="images/m4.jpg" />';
$mb4->price=40000;
$mb4->name="oppo Reno";

$mb5=new mobiles;
$mb5->img='<img src="images/m5.jpg" />';
$mb5->price=40000;
$mb5->name="oppo Reno";

$mb6=new mobiles;
$mb6->img='<img src="images/m6.jpg" />';
$mb6->price=40000;
$mb6->name="oppo Reno";

$mb7=new mobiles;
$mb7->img='<img src="images/m7.jpg" />';
$mb7->price=40000;
$mb7->name="oppo Reno";

$mb9=new mobiles;
$mb9->img='<img src="images/m9.jpg" />';
$mb9->price=40000;
$mb9->name="oppo Reno";


$mob=[$mb,$mb2,$mb3,$mb4,$mb5,$mb6,$mb7,$mb9];
class camera{
public $img;
public $price;
public $name;

}
$cm=new camera;
$cm->img='<img class="im" src="images/c1.png">';
$cm->price=30000;


$cm2=new camera;
$cm2->img='<img class="im" src="images/c2.png">';
$cm2->price=30000;



$cm3=new camera;
$cm3->img='<img class="im" src="images/c3.png">';
$cm3->price=30000;


$cm4=new camera;
$cm4->img='<img class="im" src="images/c4.png">';
$cm4->price=30000;



$cm5=new camera;
$cm5->img='<img class="im" class="im" src="images/c5.png">';
$cm5->price=30000;

$cm6=new camera;
$cm6->img='<img class="im" src="images/c6.png">';
$cm6->price=30000;

$cm7=new camera;
$cm7->img='<img class="im" src="images/c7.png">';
$cm7->price=30000;

$cm8=new camera;
$cm8->img='<img class="im" src="images/c8.png">';
$cm8->price=30000;

$cam=[$cm,$cm2,$cm3,$cm4,$cm5,$cm6,$cm7,$cm8];


class watches{
	public $img;
	public $name;
	public $price;
}
$wat=new watches;
$wat->img='<img class="im2" src="images/w1.jpg">';
$wat->price=30000;


$wat2=new watches;
$wat2->img='<img class="im2" src="images/w2.jpg">';
$wat2->price=30000;


$wat3=new watches;
$wat3->img='<img class="im2" src="images/w3.jpg">';
$wat3->price=30000;

$wat4=new watches;
$wat4->img='<img class="im2" src="images/w4.jpg">';
$wat4->price=30000;

$wat5=new watches;
$wat5->img='<img class="im2" src="images/w5.jpg">';
$wat5->price=30000;

$wat6=new watches;
$wat6->img='<img class="im2" src="images/w6.jpg">';
$wat6->price=30000;

$wat7=new watches;
$wat7->img='<img class="im2" src="images/w7.jpg">';
$wat7->price=30000;

$wat8=new watches;
$wat8->img='<img class="im2" src="images/w8.jpg">';
$wat8->price=30000;

$watch=[$wat,$wat2,$wat3,$wat4,$wat5,$wat6,$wat7,$wat8];
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <style>
  .col-2, .col-10 {
      /*border:1px solid black;*/
     /* height:400px;*/
  }
  .col-3{
   /* border:1px solid black;*/
     /* height:150px;*/
     /* justify-content: space-between;*/
  }
  .col-12{
  	/*height: 30px;*/
  	/*border: 1px solid red;
*/  }
.im{
	height: 100px;
}
.im2{
	height: 120px;
}
li{
	list-style: none;
}
  </style>
  <body>
    <div class="container">
    <div class="row">

    <div class="col-2">
    	<h4>Categoris</h4>

    <?php
foreach($row as $item){


    ?>
    <li class="nav-item active">
        <a class="nav-link" href="inheritmob.php?cid=<?php echo $item -> id  ?>"> <?php echo $item -> name  ?> </a>
      </li>
   
    <?php
    
    }

    ?>


    </div>

    <div class="col-10">
    <div class="row">

    	<?php
    	if (isset($_GET['cid'])) {
                    if ($_GET['cid'] == 1) { 
   
foreach ($mob as $item) {

    	?>
<div class="col-3">
	<div class="card">
		<div class="card-body"><?php echo $item->img ?></div>
		<div class="card-footer"><?php echo $item->price ?></div>
	</div>
</div>

<?php
}
}
elseif($_GET['cid'] == 2) { 

foreach ($cam as $item) {
?>

<div class="col-3">
	<div class="card">
		<div class="card-body"><?php echo $item->img ?></div>
		<div class="card-footer"><?php echo $item->price ?></div>
	</div>
</div>


<?php
}
}
else { 

foreach($watch as $item) {

?>
<div class="col-3">
	<div class="card">
		<div class="card-body"><?php echo $item->img ?></div>
		<div class="card-footer"><?php echo $item->price ?></div>
	</div>
</div>
<?php
}
}
}
?>




<div class="col-3"></div>
<div class="col-3"></div>
</div>
    </div>
    </div>
    
    
    
    </div>  
    
  </body>
</html>