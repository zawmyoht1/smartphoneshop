<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Create Account</title>
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
	
	$fname=$_REQUEST['f'];
	$lname=$_REQUEST['l'];
	$eid=$_REQUEST['eid'];
	$pass=$_REQUEST['pwd'];
	$ph=$_REQUEST['phno'];
	$gen=$_REQUEST['r1'];
	$day=$_REQUEST['d'];
	$month=$_REQUEST['m'];
	$year=$_REQUEST['y'];
	$dob=$day."/".$month."/".$year;
	$coun=$_REQUEST['coun'];
	$city=$_REQUEST['city'];
	$tsp=$_REQUEST['tsp'];
	$noti=$_REQUEST['r2'];
	if(isset($_REQUEST['reg']))
	{
		$sql=mysql_query("SELECT * FROM sign_up WHERE email='$eid' ");
		$arr=mysql_fetch_array($sql);
		if($arr['eid']!=$eid)
		{
			if(mysql_query("INSERT INTO sign_up VALUES('$fname','$lname','$eid','$pass','$ph','$gen','$dob','$coun','$city','$tsp','$noti')"))
			{
	      		echo "<script>location.href='signup_success.php?first=$fname & last=$lname & wel=$eid'</script>";
			}
		}
		else 
		{
			echo "user already exists";
		}
	}
?>
<!--
<script>
	function fname()
	{
		var fname=/^[a-zA-Z]{3,15}$/;
		if(document.f1.f.value.search(fname)==-1)
		{
			alert("Your name must be alphabet!");
			document.f1.f.focus();
			return false;
		}
	} 
	function lname()
	{
		var lname=/^[a-zA-Z]{3,15}$/;
		if(document.f1.l.value.search(lname)==-1)
		{
			alert("Your name must be alphabet!");
			document.f1.l.focus();
			return false;
		}
	} 
	function email()
	{
		var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
		if(document.f1.eid.value.search(email)==-1)
		{
			alert("Please enter valid email! Like 'example@gmail.com'");
			document.f1.eid.focus();
			return false;
		}
	} 
	function pass()
	{
		var pass=/^[a-zA-Z0-9-_]{6,16}$/;
		if(document.f1.pwd.value.search(pass)==-1)
		{
			alert("Your password should be alphabet with numbers.");
			document.f1.pwd.focus();
			return false;
		}
	}
	function phone()
	{
		var phn=/^[0-9]{9,14}$/;
		if(document.f1.phno.value.search(phn)==-1)
		{
			alert("Invalid phone number! Please enter correct phone number.");
			document.f1.phno.focus();
			return false;
		}
	}
	
	function vali()
	{
		var name=/^[a-zA-Z]{3,15}$/;
		var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
		var pass=/^[a-zA-Z0-9-_]{6,16}$/;
	 	var phn=/^[0-9]{9,14}$/;
		if((document.f1.f.value.search(name)==-1)||(document.f1.f.value==""))
		{
			alert("Please check your first name field!");
			document.f1.f.focus();
			return false;
		}
		else if((document.f1.l.value.search(name)==-1)||(document.f1.l.value==""))
		{
			alert("Please check your last name field!");
			document.f1.l.focus();
			return false;
		}
		else if((document.f1.eid.value.search(email)==-1)||(document.f1.eid.value==""))
		{
			alert("Please check your email!");
			document.f1.eid.focus();
			return false;
		}
		else if((document.f1.pwd.value.search(pass)==-1)||(document.f1.pwd.value==""))
		{
			alert("Please check your password!");
			document.f1.pwd.focus();
			return false;
		}
		else if((document.f1.phno.value.search(phn)==-1)||(document.f1.phno.value==""))
		{
			alert("Please check your phone number!");
			document.f1.phno.focus();
			return false;
		}
		else if(document.f1.coun.value=="")
		{
			alert("Please fill your country");
			document.f1.coun.focus();
			return false;
		}
		else if(document.f1.city.value=="")
		{
			alert("Please fill your city");
			document.f1.city.focus();
			return false;
		}
		else if(document.f1.tsp.value=="")
		{
			alert("Please fill your township");
			document.f1.tsp.focus();
			return false;
		}
		else 
		{
			return true;
		}
	}
	-->
</script>
</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="index.php"><span><span>Home</span></span></a></li>
          <li><a href="about.php"><span><span>About Us</span></span></a></li>
          <li class="active"><a href="signup.php"><span><span>Sign Up</span></span></a></li>
		  <li><a href="contact.php"><span><span>Contact</span></span></a></li>
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
        <div class="article">
          <h2>Create an account!!</h2>
			<form method="post" name="f1" onsubmit="return vali()">
				<table border="0" cellpadding="15px" style="font-size:16px; font-weight:bold;" align="center">
					<tr>
						<td>First Name</td>
						<td><input type="text" name="f" onchange="return fname()"></td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><input type="text" name="l" onchange="return lname()"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="eid" onchange="return email()"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pwd" onchange="return pass()"></td>
					</tr>
					<tr>
						<td>Phone No.</td>
						<td><input type="text" name="phno" onchange="return phone()"></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><input type="radio" name="r1" value="male">Male &nbsp; <input type="radio" name="r1" value="female">Female</td>
					</tr>
					<tr>
						<td>Birthday</td>
						<td>day:<select name="d">
									<script>
										var i; 
										for(i=1; i<=31; i++)
										{
											document.write("<option>"+i+"</option>");
										}
									</script>
								</select>
							month:<select name="m">
									<script>
										var month=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
										for(i=1;i<=month.length-1;i++)
										{
											document.write("<option value='"+i+"'>" + month[i] + "</option>");
										}	
									</script>
								  </select>
							year:<select name="y">
									<script>
										var i;
										for(i=1900; i<=2015; i++)
										{
											document.write("<option>"+i+"</option>");
										}
									</script>
								 </select>
						</td>
					</tr>
					<tr>
						<td>Country</td>
						<td><input type="text" name="coun"></td>
					</tr>
					<tr>
						<td>City</td>
						<td><input type="text" name="city"></td>
					</tr>
					<tr>
						<td>Township</td>
						<td><input type="text" name="tsp"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">Would you like us to send you email notification of special sales?<br>
														<input type="radio" name="r2" value="yes">Yes &nbsp; <input type="radio" name="r2" value="no">No
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="reg" value="Create account"> &nbsp;
													   <input type="reset" value="Cancel">
						</td>
					</tr>
				</table>
			</form>
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
        <li class="active"><a href="singup.php">Sign Up</a></li>
		<li><a href="contact.php">Contact</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
