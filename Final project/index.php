
<?php 
$con = mysqli_connect('localhost','root','','test');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Compare AC</title>

    <style>
    	.card{
    		border: 2px solid #ccc; border-radius: 3px; padding: 10px;
    	}

      .card_check{
        border: 3px solid red;
      }

    	.compare{
    		font-weight: 600; color: blue; cursor: pointer;
    	}
    </style>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Group_144</title>
  </head>
  <body style="background-color:#221A19;">
  
  	<div class="container-fluid fixed-top">

	
  		<div class="row">
		
  			<div class="col-sm-12" style="margin-top: 1px;">
			       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Group_144</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index_1.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php">Compare</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>


      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
      </form>
      <div class="mx-2">
        <button class="btn btn-danger" data-toggle="modal" data-target="#loginModal">Login</button> <button
          class="btn btn-danger" data-toggle="modal" data-target="#signupModal">SignUp</button>
      </div>
    </div>
  </nav>
  				<h2 style="text-align: center; color:#F9F1EF;">Compare Model of Air Conditioner</h2>
          <!--<h4 style="text-align: center;">( Elevenstech Web Tutorials )</h4>-->
  			</div>	
  		</div>
      <div class="row" style="margin-top: 20px;">
        <div class="col-sm-1">
        <p style="font-weight: 600; font-size: 18px; color:#F9F1EF;">  Search : </p>
      </div>
        <div class="col-sm-6">
          <input type="text" id="search_product" placeholder="Search Product Name" class="form-control" />
        </div>
     
        <div class="col-sm-5" style="margin-top: 0px;display:none;"  id="btn_compare" >
          <form action="compare.php" method="post">
               <input type="hidden" value="" id="card_one" name="card_one"/>
               <input type="hidden" value="" id="card_two" name="card_two"/>
               <input type="submit" value="Compare Product" class="btn btn-success" style="float:right;"/>
           </form>
        </div>  
      </div>

      <!--Load products here-->
  		<div class="row filter_data" style="margin-top: 50px;"></div>

      <!--Load loader here-->
      <div class="row loader">
        <div class="col-sm-12" align="center">
          <img src="image/loader.gif" style="width: 300px; height: 300px; margin-top: 30px;">
        </div>
      </div>

  	</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){

        filter_data();

        function filter_data(search)
        {
            $('.loader').show();
            $.ajax({
                url:"fetch_product.php",
                dataType:"JSON",
                method:"POST",
                data:{search: search},
                success:function(data)
                {
                    $('.loader').hide();
                    $('.filter_data').show();
                    $('.filter_data').html(data);
                }
            })
        }

        $('#search_product').keyup(function(){
          var search = $(this).val();
          if(search != '')
          {
           filter_data(search);
          }
          else
          {
           filter_data();
          }
         });



    });
    </script>
    <script type="text/javascript">
    	$(document).ready(function(){
        $(document).on('click','.compare',function(){
            var id = $(this).attr('rel');
            var size_class = $('.card_check').length;
            if(size_class > 1)
            {
                if($(".compare_card"+id).hasClass("card_check"))
                {
                    $(".compare_card"+id).removeClass("card_check"); 
                }
                else
                {
                    alert("You have already select maximum product");
                } 
            }
            else
            {
                if(size_class>0)
                {
                     $('#btn_compare').show();
                }
                
                if($(".compare_card"+id).hasClass("card_check"))
                {
                    $(".compare_card"+id).removeClass("card_check");
                }
                else
                {
                    $(".compare_card"+id).addClass("card_check");
                    
                    var pro1 = $('#card_one').val();
                    var pro2 = $('#card_two').val();
                    
                    if(pro1=="")
                    {
                        $('#card_one').val(id);
                    }
                    else if(pro2=="")
                    {
                        $('#card_two').val(id);
                    }
                    
                }
            }
             
          }); 

       });
    </script>
  </body>
</html>
