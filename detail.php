<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Detail of Product</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->

<?php

	error_reporting(1);
	include("admin/function.php");

?>

</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="index.php"><span><span>Home</span></span></a></li>
          <li><a href="about.php"><span><span>About Us</span></span></a></li>
          <li><a href="signup.php"><span><span>Sign Up</span></span></a></li>
		  <li><a href="contact.php"><span><span>Contact</span></span></a></li>
        </ul>
      </div>
	  <div class="clr"></div>
     
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
		
			<?php
			  if(isset($_GET['pro_id']))
			  {
				$product_id = $_GET['pro_id'];
				$get_pro = "SELECT * FROM product WHERE p_id='$product_id'";
				$run_pro = mysqli_query($con,$get_pro);
				while($row_pro = mysqli_fetch_array($run_pro))
				{
					$pro_id = $row_pro['p_id'];
					$pro_model = $row_pro['p_model'];
					$pro_price = $row_pro['p_price'];
					$pro_image = $row_pro['p_image'];
					$pro_desc = $row_pro['p_desc'];
					echo " 
					
					<div class='article'>
						<h3>$pro_model</h3>
						<img src='admin/product_images/$pro_image' width='400px' height='350px'><br>
						<b> Price: $pro_price </b><br>
						<p>$pro_desc</p>
						<a href='index.php'> Go Back </a> &nbsp; &nbsp; &nbsp;
						<a href='login.php?buy_pro=$pro_id'> Buy </a>
					</div>
						
					";
				}
			  }
			?>
				
        </div>
      </div>
      <div class="sidebar">
        
        
        <div class="gadget">
          <h2 class="star"><span>Brands</span></h2>
          <ul class="sb_menu">
            <?php getBrands(); ?>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>About</span></h2>
        <img src="images/img2.jpg" width="56" height="56" alt="pix" />
        <p align="justify">Our website is an online store which sells smart phones. We established this site since 2013. We provide a high level of value or excellenc products. And we also offer quality service.<a href="about.php"> Read More...</a></p>
      </div>
      <div class="col c2">
        <h2><span>Follows Us:</span></h2>
        <a href="#"><img src="images/facebook.jpg" width="56" height="56" alt="ad" class="ad" /></a>
        <a href="#"><img src="images/twitter.png" width="56" height="56" alt="ad" class="ad" /></a>
        <a href="#"><img src="images/insta.png" width="56" height="56" alt="ad" class="ad" /></a>
      </div>
      <div class="col c3">
        <h2>Contact</h2>
        <p><strong>Address:</strong>8901 Marmora Road, Glasgow, D04 89GR.<br>
		     <strong>Phone:</strong>+1 800 559 6580 <br>
			 <strong>Fax:</strong>+1 800 889 9898 <br>
			 <strong>Email:</strong><a href="mailto:thethninoo26@gmail.com">ishop@gmail.com</a>
		</p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      
      <ul class="fmenu">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="signup.php">Sign Up</a></li>
		<li><a href="contact.php">Contact</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
