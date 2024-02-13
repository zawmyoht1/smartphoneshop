<?php
	
	$con = mysqli_connect("localhost","root","","mobileshop");

	//getting the brands from brands table.
	function getBrands()
	{
		global $con;
		$get_brand = "SELECT * FROM brands";
		$run_brand = mysqli_query($con,$get_brand);
		while($row_brand = mysqli_fetch_array($run_brand))
		{
			$b_id = $row_brand['b_id'];
			$b_title = $row_brand['b_title'];
			echo "<li><a href='index.php?brand=$b_title'>$b_title</a></li>";
		}
	}

	//getting the products from product table.
	function getProduct()
	{
	  if(!isset($_GET['brand']))
	  {
		global $con;
		$get_pro = "SELECT * FROM product order by rand()";
		$run_pro = mysqli_query($con,$get_pro);
		while($row_pro = mysqli_fetch_array($run_pro))
		{ 
			$pro_id = $row_pro['p_id'];
			$pro_brand = $row_pro['p_brand'];
			$pro_model = $row_pro['p_model'];
			$pro_price = $row_pro['p_price'];
			$pro_image = $row_pro['p_image'];
			echo " 
					<div class='article'>
						<h3>$pro_model</h3>
						<img src='admin/product_images/$pro_image' width='150px' height='150px'><br>
						<center><b> $pro_price </b></center> <br>
						<a href='detail.php?pro_id=$pro_id' style='float:left;margin-left:15px;'> Details </a>
						<a href='login.php?buy_pro=$pro_id' ><button style='float:right;margin-right:25px;'> Buy </button> </a>
					</div>
			
			
			
			";
			
		}
	  }
	}
	
	function getBrandPro()
	{
	  if(isset($_GET['brand']))
	  {
		global $con;
		$brand_title = $_GET['brand'];
		$get_brand_pro = "SELECT * FROM product WHERE p_brand='$brand_title'";
		$run_brand_pro = mysqli_query($con,$get_brand_pro);
		while($row_brand_pro = mysqli_fetch_array($run_brand_pro))
		{ 
			$pro_id = $row_brand_pro['p_id'];
			$pro_brand = $row_brand_pro['p_brand'];
			$pro_model = $row_brand_pro['p_model'];
			$pro_price = $row_brand_pro['p_price'];
			$pro_image = $row_brand_pro['p_image'];
			echo " 
					<div class='article'>
						<h3>$pro_model</h3>
						<img src='admin/product_images/$pro_image' width='150px' height='150px'><br>
						<center><b> $pro_price </b></center> <br>
						<a href='detail.php?pro_id=$pro_id' style='float:left;margin-left:15px;'> Details </a>
						<a href='login.php?buy_pro=$pro_id' ><button style='float:right;margin-right:25px;'> Buy </button> </a>
					</div>
			
			
			
			";
			
		}
	  }
	}
	
	
	
?>