
<?php 
	$con = mysqli_connect('localhost','root','','test');

	$content = '';

	if(isset($_POST["search"]))
	{
		 $search = mysqli_real_escape_string($con, $_POST["search"]);
		 $sql = "SELECT * FROM compare_data  WHERE name LIKE '%".$search."%'";
	}
	else
	{
	 	$sql = "select * from compare_data";
	}


	
	$query = mysqli_query($con, $sql);
	if(mysqli_num_rows($query) > 0)
	{
		while($row = mysqli_fetch_array($query))
		{
			$content.='<div class="col-sm-3" style="margin-bottom: 30px; padding: 5px;">';
			$content.='<div class="card compare_card'.$row['id'].'">';
			$content.='<p style="color: blue; font-weight: 600;">'.$row['name'].'</p>';
			$content.='<p style="color: green;">Rs.'.$row['price'].'</p>';
			$content.='<button style="color: #fff;" class="btn btn-primary btn-xs compare" rel="'.$row['id'].'">Compare</button>';
			$content.='</div>';
			$content.='</div>';
		}	
		
	}
	else{
		$content .= '<div class="col-sm-3"></div><div class="col-sm-6"><img src="image/empty.png" style="width: 100%; margin-top: 30px;"></div>';
	}
	echo json_encode($content);
	?>