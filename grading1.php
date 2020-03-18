
<html>
<head>
<title>KCAU CGPA Sys</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="css/css.css" rel="stylesheet" type="text/css">
	<!-- THIS ESSENTIAL IN PLAYING FLASH -->
	<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
	<script type="text/javascript">
		function mhover(obj,txt){
			obj.src =txt;
		}
		function mout(obj,txt){
			obj.src =txt;
		}
	</script>
</head>

<body>

<!-- CONTAINER OF DIV'S -->
<div class="container">
	
	<!-- HEADER -->
	<div class="header">
	</div>
	
	<!-- NAVIGATOR -->
	<div class="navigator" align="center">
		<?php include 'includes/mainNav.txt'; ?>
	</div>
	
	<!-- MARQUEE INFO -->
	<div class="marqueeInfo">
		<?php include 'includes/Navmarquee.txt'; ?>
	</div>
	
	<!-- TEXT CONTAINER -->
	<div class="bodycontainer">
		<!-- Another div here for info-->

				<?php
					$errors=array();
					if(isset($_REQUEST['submit'])){ // if the form was submiited
						validate_input();           // user defiend function to validate input
						if(count($errors) != 0 ){
							display_form();
						}
						else{
							display_grades();
						}
					}
					else{
						display_form();
					}
		
					//USER DEFINED FUNCTIONS
					//FUNCTION TO DISPLAY RECORDSET
					function display($r){
						$f1=mysql_result($r,"Subject");
  						$f2=mysql_result($r,"Attendance");
						$f3=mysql_result($r,"AttItem");
  						$f4=mysql_result($r,"Quizzes");
						$f5=mysql_result($r,"QuiItem");
  						$f6=mysql_result($r,"OralProjectPart");
						$f7=mysql_result($r,"OralItem");
  						$f8=mysql_result($r,"Exam");
						$f9=mysql_result($r,"ExamItem");
  						$f10=mysql_result($r,"Grade");

						echo "<tr bgcolor='#00CCee'><td>" . $f1 . "</td>";
						echo "<td>" . $f2 . "</td>";
						echo "<td>" . $f3 . "</td>";
						echo "<td>" . $f4 . "</td>";
						echo "<td>" . $f5 . "</td>";
						echo "<td>" . $f6 . "</td>";
						echo "<td>" . $f7 . "</td>";
						echo "<td>" . $f8 . "</td>";
						echo "<td>" . $f9 . "</td>";
  						echo "<td>" . $f10 . "</td></tr>";
					}
					
					function validate_input(){
						global $errors;
						if(($_POST['user'] == "") && ($_POST['pass'] == "")){
							$errors['user'] = "<font color='red'>enter username or password</font>";
						}
					}
					
					function display_grades(){
							
							include 'includes/dbconnect.php';
							
							$sql="Select Subject, ((((((((((Attendance/AttItem)*60)+40)*.1)+((((Quizzes/QuiItem)*60)+40)*.6)+((((OralProjectPart/OralItem)*60)+40)*.3))/100)*60)+40)*.6)+((((Exam/ExamItem)*60)+40)*.4)) as Grade, SID,* From GRADES_TBL Where SID IN (Select SID From Student_Info_Tbl where UserID = '" . $_POST['user'] . "' and pass = '" . $_POST['pass'] . "')";
				 
							$rs=mysql_exec($conn,$sql);
							if (!$rs)
  								{exit("Error in SQL");}
			
							if(!mysql_fetch_row($rs)){
								global $errors;
								$errors['user'] = "<font color='red'>Invalid username or password</font>";
								display_form();
							}
							else{
								echo "<div style='width:640px; height:400px; float:left; ' align='center'>";
								echo "<h1>" . $_POST['user'] . "'s List of Grades</h1>";
			
								echo "<table border='1' cellspacing='0' cellpadding='0'><tr  bgcolor='#0066FF'>";
								echo "<th>Subject</th>";
								echo "<th>Attend</th>";
								echo "<th>Items</th>";
								echo "<th>Quizzes</th>";
								echo "<th>Items</th>";
								echo "<th>Oral/Project</th>";
								echo "<th>Items</th>";
								echo "<th>Exam</th>";
								echo "<th>Items</th>";
								echo "<th>Final Grade</th></tr>";
			
								display($rs);
			
								while ($row = mysql_fetch_row($rs))
								{
									display($rs);
								}
			
								echo "</table>";
								echo "</div>";
							}
							mysql_close($conn);
					}
					
					function display_form(){
						global $errors;
						?>
							<!-- CONTENTS -->
	  						<div class="Contents">
								
								<div style="width:240px; height:400px; float:left; ">
								<form method="post" action="processlogin.php">
								<table width="235" height="128" border="0" cellpadding="0" cellspacing="0"">
                      				<tr>
                        				<td width="32" height="28">&nbsp;</td>
                        				<td width="168"><font size="+2">LOGIN USER</font></td>
                      				</tr>
                      				<tr>
                        				<td>&nbsp;</td>
                        				<td>Username:</td>
                      				</tr>
								
                      				<tr>
                        				<td>&nbsp;</td>	
                        				<td><input type="text" name="user" value="<?php echo $_POST['user']; ?>"</td>
                      				
                      				<tr>
                        				<td>&nbsp;</td>
                        				<td>Password:</td>
                      				</tr>
                      				<tr>
                        				<td>&nbsp;</td>
                        				<td><input type="password" name="pass"></td>
                      				</tr>
                      				<tr>
                        				<td>&nbsp;</td>
                        				<td><input type="submit" name="submit" value="LOG IN"><a href="changepass.php">change password</a></td>
                      				</tr>
					  				<tr>
                        				<td>&nbsp;</td>
                   
                      				</tr>
                    	
								<br>
								
								</form>
								
								</div>
								<div style="width:400px; float:right; height:400px; ">
									<br><br>
									
																
								</div>
		  					</div>
							
						<?php
					}
				?>
				
		<!-- PERSONAL INFO -->
		<div class="PersonInfo" align="center">
			<img src="images/image0.jpg" width="162" height="178" border="2"><br>
			  <br>
			<div class="inName">
			KCA University
			</div>
			<br>
		  	<div class="inOccupation" align="left">
				<?php include 'includes/infomarquee.txt'; ?>
		  	</div>
  	  </div>
	</div>
	
	
	<!-- FOOTER NAV-->
	<div class="footerNav" align="center" >
		<?php include 'includes/footernav.txt'; ?>
	</div>
	
	<!-- FOOTER -->
	<div class="footer" align="center" >
		Copyright © KCA University 2017.
	</div>
	
</div>

</body>
</html>
