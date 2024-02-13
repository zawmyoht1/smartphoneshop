<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Feedback</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="adminstyle.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->



</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="home.php"><span><span>Home</span></span></a></li>
          <li><a href="insert_product.php"><span><span>Add Product</span></span></a></li>
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
          <h2>All feedbacks from database</h2>
		  <?php
				error_reporting(1);
	
				include("dbconnect.php");
	
				$view = "SELECT * FROM feedback";
				$result = mysqli_query($con, $view);
				
				echo "<table border='1' cellspacing='0' cellpadding='15px'>";
				echo "<tr>
						  <th>Email</th>
					  	  <th>Phone</th>
					  	  <th>Message</th>
					  	 
					  </tr>
					 ";
				
				while(list($eadd, $ph, $msg) = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>". $eadd ."</td>";
					echo "<td>". $ph ."</td>";
					echo "<td>". $msg ."</td>";
					echo "</tr>";
				}
				echo "</table>";
		  ?>
		  
			<p><a href="home.php">Go Back</a></p>
			
        </div>
        
      </div>
      
      <div class="clr"></div>
    </div>
  </div>

  
  <div class="footer">
    <div class="footer_resize">
     
      <ul class="fmenu">
        <li><a href="home.php">Home</a></li>
        <li><a href="insert_product.php">Add Product</a></li>
        <li><a href="view_product.php">View Products</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
