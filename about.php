<html>
<title>KCAU GPA Sys</title>
<head>
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
		
		<!-- CONTENTS -->
		<div class="Contents">
			<br><br><br>
			<div style="width:400px; height:400px; float:left; margin_left:15px">
		<br>	In education, a grade (or mark) 
									is a teacher's standardized evaluation 
									of a student's work.</br> 
<br>In some countries, evaluations can be expressed quantifiably, </br>
									<br>and calculated into a numeric grade point average (GPA),</br>
									<br>which is used as a metric by employers and others to assess and
										compare students.</br><br>Cumulative grade 
									point average (CGPA) is the mean GPA from
									all terms, whereas GPA may only refer to 
									a single term.</br>
			
			</div>
		  	
		</div>
		
		<!-- UNIVERSITY INFO -->
		<div class="PersonInfo" align="center">
			<img src="images/image2.jpg" width="162" height="178" border="2"><br>
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
		Copyright © KCA University.
	</div>
	
</div>

</body>
</html>
