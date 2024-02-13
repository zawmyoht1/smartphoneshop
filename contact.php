<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->

<?php
error_reporting(1);
include("dbconnect.php");
if(isset($_REQUEST['send']))
{
	$eadd = $_REQUEST['eadd'];
	$ph= $_REQUEST['ph'];
	$msg = $_REQUEST['msg'];
	$check = mysql_query("SELECT email FROM sign_up WHERE email='$eadd'");
	$run = mysql_fetch_array($check);
	if($eadd==$run['email'])
	{
		mysql_query("INSERT INTO feedback VALUES('$eadd', '$ph', '$msg')");
		header('location:fbsent.php');
	}
	else 
	{
		$error = "Email does not match!";
	}
}
?>
<style>
	.mainbar p{font-size:16px;}
</style>
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
		  <li class="active"><a href="contact.php"><span><span>Contact</span></span></a></li>
        </ul>
      </div>
	  <div class="clr"></div>
      <div class="logo"><h1><a href="index.html">iShop<br /><small>online smart phone shop</small></a></h1></div>
      <div class="clr"></div>
      <img src="images/14 pro max.jpg" width="400" height="250" alt="image" style="float:left;" />
	  <img src="images/iPhone 11.jpg" width="400" height="250" alt="image" style="float:right;" />
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <h2>Contact</h2>
        <p><strong>Address:</strong>8901 Marmora Road, Glasgow, D04 89GR.<br>
		     <strong>Phone:</strong>+1 800 559 6580 <br>
			 <strong>Fax:</strong>+1 800 889 9898 <br>
			 <strong>Email:</strong><a href="mailto:thethninoo26@gmail.com">ishop@gmail.com</a>
		</p>
		  <p>If you have any suggestion or feedback, please complete the following form. But need to have a member account. You can create your member account <a href="signup.php">here</a></p>
		  <form method="post">
			<table cellpadding="10px">
				<tr><td colspan="2"><?php echo "<font color='red' size='4'>".$error."</font>";?></td></tr>
				<tr>
					<td>Email Address</td>
					<td><input type="text" name="eadd" size="30" required></td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td><input type="text" name="ph" size="30" required></td>
				</tr>
				<tr>
					<td>Your message</td>
					<td><textarea name="msg" rows="10" cols="24" required></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="send" value="Send"> &nbsp;&nbsp;
								    <input type="submit" value="Cancel">
					</td>
				</tr>
			</table>
		  </form>
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
		<li class="active"><a href="contact.php">Contact</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
