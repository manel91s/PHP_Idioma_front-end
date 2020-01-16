

<?php
 include("multi_idioma.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>IEM</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/page.css" type="text/css" />
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script src="js/page.js" type="text/javascript"></script>
</head>
<body>	
	<!--header-->
			<?php include("header.html")?>

	<div class="wraper">
	<!--nav-->
			<?php include("nav.html")?>

	<!--section-->

		<?php 
		readfile("seccion_$idioma.html")
		?>

		
	<!--footer-->
				<?php include("footer.html")?>

	</div>
</body>
</html> 
