<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="adminstyle.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->
<?php
	error_reporting(1);
	if($_REQUEST['log']=='out')
	{
		session_destroy();
		header("location:index.php");
	}
?>
</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li  class="active"><a href="home.php"><span><span>Home</span></span></a></li>
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
			<h2>Welcome user!</h2>
			<ul class="sb_menu">
				<li><a href="feedback.php">View feedback</a></li>
				<li><a href="view_order.php">View order</a></li>
				<li><a href="?log=out">Log Out</a></li>
			</ul>
        </div>
        
      </div>
      
      <div class="clr"></div>
    </div>
  </div>

  
  <div class="footer">
    <div class="footer_resize">
      
      <ul class="fmenu">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="insert_product.php">Add Product</a></li>
        <li><a href="view_product.php">View Products</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
