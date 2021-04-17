<?php 
$con = mysqli_connect('localhost','root','','test');

$productOne = $productTwo = '';

$productOne = $_REQUEST['card_one'];
$productTwo = $_REQUEST['card_two'];

$pro1_sql = "select * from compare_data where id='".$productOne."'";
$pro1_query = mysqli_query($con, $pro1_sql);
$pro1 = mysqli_fetch_object($pro1_query);

$pro2_sql = "select * from compare_data where id='".$productTwo."'";
$pro2_query = mysqli_query($con, $pro2_sql);
$pro2 = mysqli_fetch_object($pro2_query);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Compare AC's</title>

    <style>
    	.card{
    		border: 2px solid #ccc; border-radius: 3px; padding: 10px;
    	}
    </style>
  </head>
  <body>
  	<div class="container">

  		<div class="row">
  			<div class="col-sm-6" style="margin-top: 30px;">
  				<h2>Compare Product List</h2>
  			</div>
        <div class="col-sm-6" style="margin-top: 30px;">
          <a href="index.php" style="text-align: right;"><h2>Back</h2></a>
        </div>	
  		</div>

  		<div class="row" style="margin-top: 50px;">
  			
  			<div class="col-sm-6" style="margin-bottom: 30px; padding: 5px;">
          <div class="card">
            <h3 style="text-align: center; background: #ccc; width: 100%; padding: 10px;">Product One</h3>
  				  <h4><?php echo $pro1->name; ?></h4>
            <p>Rs.<?php echo $pro1->price; ?></p>
            <p><b>Description</b>.<?php echo $pro1->about; ?></p>
          </div>
  			</div>
        <div class="col-sm-6" style="margin-bottom: 30px; padding: 5px;">
          <div class="card">
            <h3 style="text-align: center; background: #ccc; width: 100%; padding: 10px;">Product Two</h3>
            <h4><?php echo $pro2->name; ?></h4>
            <p>Rs.<?php echo $pro2->price; ?></p>
            <p style="text-align: justify;"><b>Description</b>.<?php echo $pro2->about; ?></p>
          </div>
        </div>	
  			
  		</div>
  	</div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
