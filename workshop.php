<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>KCAU GPA Sys</title>
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
			<div style="width:70px; height:400px; float:left; ">
			</div>
		  	<script type="text/javascript">
					AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','541','height','419','src','flash/gci flash','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/gci flash' ); //end AC code
				</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="541" height="419">
        			<param name="movie" value="flash/gci flash.swf" />
                    	<param name="quality" value="high" />
                    	<embed src="flash/gci flash.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="541" height="419"></embed>
                  </object></noscript>
		</div><!-- END OF CONTAINS -->
		
		<!-- PERSONAL INFO -->
		<div class="PersonInfo" align="center">
			<img src="images/tony3.jpg" width="162" height="178" border="2"><br>
			  <br>
			<div class="inName">
				Winston Gubantes
			</div>
			<br>
		  	<div class="inOccupation" align="left">
				<?php include 'includes/infomarquee.txt'; ?>
		  	</div>
			
  	  </div><!-- END OF PERSONAL INFO -->
	</div><!-- END OF TEXT CONTAINER -->
	
	
	<!-- FOOTER NAV-->
	<div class="footerNav" align="center" >
		<?php include 'includes/footernav.txt'; ?>
	</div>
	
	<!-- FOOTER -->
	<div class="footer" align="center" >
		Copyright © Genetic Computer Institute Davao All Rights Reserved 2009.
	</div>
	
</div><!-- END OF MAIN CONTAINER -->

</body>
</html>
