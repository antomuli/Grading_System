<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="user.js">
</script>
</head><body bgcolor="blue">
<center><img src = "images/image2.jpg" alt="site logo" width="100"height ="120"></a></center><br>     
<center><b><font color = "white" size="6">Grading System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Student Registration </h1>
<div class="news"></div>
</div>
<div id="container">
<?php

$conn = mysqli_connect('localhost', 'root', '','grading_db');
if (!$conn)
{
	echo 'Error '.mysqli_error($conn);
}
//Process
if (isset($_POST['submit']))
{

$firstName = addslashes( $_POST['firstname'] ); //prevents types of SQL injection
$lastName = addslashes( $_POST['lastname'] ); //prevents types of SQL injection
$address = $_POST['phyaddress'];
$email = $_POST['email'];
$contact = $_POST['number'];
$username = $_POST['username'];

$password = $_POST['password'];

$newpass = md5($password); //This will make your password encrypted into md5, a high security hash

$sql = mysqli_query( $conn,"INSERT INTO student_info_tbl(FName, LName, Address, Email, ContactNo, UserID, Pass) VALUES ('$firstName','$lastName', '$address', '$email', '$contact', '$username', '$newpass')" )
        or die( mysqli_error($conn) );

die( "You have registered for an account.<br><br>Go to <a href=\"grading.php\">Home</a>");
}
?>
<div>
<center> <h3> Register an account by filling in the needed information below </h3> </center> <br>
<form action="grading.php" method="post" >
<table align="center"><tr>
  <td><tr><td>First Name:</td><td><input type='text' style='background-color:#63acda; font-weight:bold;' name='firstname' maxlength='15' value=''></td></tr>;
 <tr><td>Last Name:</td><td><input type='text' style='background-color:#63acda; font-weight:bold;' name='lastname' maxlength='15' value=''></td></tr>;
 <tr><td>Address:</td><td><input type='text' style='background-color:#63acda; font-weight:bold;' name='phyaddress' maxlength='100' value=''></td></tr>;
 
 <tr><td>Email Address:</td><td><input type='text' style='background-color:#63acda; font-weight:bold;' name='email' maxlength='100' value=''></td></tr>;
 <tr><td>Contact Number:</td><td><input type='text' style='background-color:#63acda; font-weight:bold;' name='number' maxlength='15' value=''></td></tr>;

 <tr><td>Username:</td><td><input type='text' style='background-color:#63acda; font-weight:bold;' name='username' maxlength='100' value=''></td></tr>;
 
 <tr><td>Password:</td><td><input type='password' style='background-color:#63acda; font-weight:bold;' name='password' maxlength='15' value=''></td></tr>;
 
 <tr><td>&nbsp;</td><td><input type='submit' name='submit' value='Register Account'/></td></tr>;
 <tr><td colspan = '2'><p>Already have an account? <a href='index.html'><b>Login Here</b></a></td></tr>;
 </tr></td></table>;
</form>
</div>

</div> 
<div id="footer">
<div class="bottom_addr"></div>
</div>
</div>
</body></html>
