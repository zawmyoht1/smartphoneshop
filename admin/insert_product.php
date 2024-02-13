<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Insert Product</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="adminstyle.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->

<?php
	error_reporting(1);
	
	include("dbconnect.php");
	
	if(isset($_POST['insert']))
	{
		
		$p_brands = $_POST['p_brands'];
		$p_model = $_POST['p_model'];
		$p_price = $_POST['p_price'];
		$p_desc = $_POST['p_desc'];
		
		$p_img = $_FILES['p_img']['name'];
		
		
		
		move_uploaded_file($_FILES['p_img']['tmp_name'],"product_images/$p_img");
		
		$insert_p = "INSERT INTO product VALUES('','$p_brands','$p_model','$p_price','$p_img','$p_desc')";
		$query = mysqli_query($con,$insert_p);
		echo "<script>alert('Product has been successfully inserted into the database.')</script>";
		echo "<script>window.open('insert_product.php','_self')</script>";	
			
		
	}
?>

</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="home.php"><span><span>Home</span></span></a></li>
          <li class="active"><a href="insert_product.php"><span><span>Add Product</span></span></a></li>
          <li><a href="view_product.php"><span><span>View Products</span></span></a></li>
        </ul>
      </div>
	  <div class="clr"></div>
      
          
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Insert Product</h2>
		  <form method="post" action="insert_product.php" enctype="multipart/form-data">
			<table border="0" cellpadding="10px" align="center" style="font-size:16px; font-weight:bold;">
				
				<tr>
					<td>Product Brands</td>
					<td>
						<select name="p_brands" required>
							<option>Select brands</option>
							<?php
								$get_brand = "SELECT * FROM brands";
								$run_brand = mysqli_query($con,$get_brand);
								while($row_brand = mysqli_fetch_array($run_brand))
								{
									$b_id = $row_brand['b_id'];
									$b_title = $row_brand['b_title'];
									echo "<option value='$b_title'>$b_title</a></li>";
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Product Model</td>
					<td><input type="text" name="p_model" required></td>
				</tr>
				<tr>
					<td>Product Price</td>
					<td><input type="text" name="p_price" required></td>
				</tr>
				<tr>
					<td>Product Image</td>
					<td><input type="file" name="p_img" required></td>
				</tr>
				<tr>
					<td>Product Description</td>
					<td><textarea name="p_desc" cols="20"  rows="10" required></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="insert" value="Insert Product"></td>
				</tr>
			</table>
		  </form>
        </div>
        
      </div>
      
      <div class="clr"></div>
    </div>
  </div>

  
  <div class="footer">
    <div class="footer_resize">
      
      <ul class="fmenu">
        <li><a href="home.php">Home</a></li>
        <li class="active"><a href="insert_product.php">Add Product</a></li>
        <li><a href="view_product.php">View Products</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
