<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <?php include 'css.php';?>

</head>

<body>
<?php
$dbhost="localhost";
$dbname="tema_blog";
$user="user";
$pass="";
  try{
	$db=new PDO("mysql:host=$dbhost;$dbname=$dbname",$user,$pass);
	echo "veritabanı işlemi başarılı.";
}catch(PDOException $e){
	print $e-> getMessage();	
}

?>
  
<?php include 'ust.php';?>
   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

	   		<?php include "icerik.php";?>	

   		</div> <!-- end main -->

   		<?php include 'yan.php';?>

   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->
   
<?php include 'alt.php';?>
 


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>  
   <script src="js/main.js"></script>

</body>

</html>