<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Admin Log in</title>
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
	
	if(isset($_REQUEST['login']))
	{
		
		$uname = $_REQUEST['uname'];
		$pass = $_REQUEST['pass'];
		$check = mysqli_query("SELECT name,password FROM user WHERE name='$uname'");
		$run = mysqli_fetch_array($con, $check);
		if(($run['name']==$uname) && ($run['password']==$pass))
		{
			echo "<script>location.href='home.php'</script>";
		}
		else
		{
			$error = "User name or Password do not match!";
		}
	
	}

?>

</head>
<body>
<div class="main">

 <div class="content">
    <div class="content_resize">
    <div class="mainbar">
	<h2>Admin Log In</h2>
	<form method="post" action="home.php">
		<table border='0' cellpadding='10px'>
			<tr>
				<td colspan="2"><?php error_reporting(1); echo "<font color='red'>$error</font>"; ?> </td>
			</tr>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="uname" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass" required></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="login" value="Log In"></td>
			</tr>
		</table>
	</form>
	</div>
	</div>
  </div>

</div>
</body>
</html>
