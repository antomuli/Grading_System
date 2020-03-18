 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Grading System</title>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="tan">
<center><img src = "images/logo.jpg" alt="site logo" width="100" height="102"></a></center><br>     
<center><b><font color = "white" size="6">Grading System</font></b></center><br><br>
<body>
<div id="page">
<div id="header">
<h1>Invalid Credentials Provided </h1>
<p align="center">&nbsp;</p>
</div>
<div id="container">
<?php
ini_set ("display_errors", "1");
error_reporting(E_ALL);

ob_start();
session_start();
$host="localhost"; // Host name
$username="root"; // Database username
$password=""; // Database password
$db_name="grading_db"; // Database name
$tbl_name="students_info_tbl"; // Table name

// This will connect you to your database
$conn = mysqli_connect('localhost', 'root', '','grading_db');
if (!$conn)
{
	echo 'Error '.mysqli_error($conn);
}

// Defining your login details into variables
$username=$_POST['username'];
$password=$_POST['password'];
$encrypted_mypassword=md5($password); //MD5 Hash for security
// MySQL injection protections
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

$sql="SELECT * FROM $tbl_name WHERE UserID='$username' and Pass='$encrypted_password'" or die(mysqli_error());
$result=mysqli_query($conn,$sql) or die(mysqli_error());

// Checking table row
$count=mysqli_num_rows($result);
// If username and password is a match, the count will be 1

if($count==1){
// If everything checks out, you will now be forwarded to admin.php
$user = mysqli_fetch_assoc($result);
 $_SESSION['SID'] = $user['SID'];
header("location:grading.php");
}
//If the username or password is wrong, you will receive this message below.
else {
echo "Wrong Username or Password<br><br>Return to <a href=\"index.html\">login</a>";
}

ob_end_flush();

?> 
</div>
<div id="footer"> 
  <div class="bottom_addr"></div>
</div>
</div>
</body>
</html>