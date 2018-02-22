<!DOCTYPE html>
<html>
<head>
	<title>revision</title>
	<style type="text/css">
		body{
			background-color: brown;
		}
	</style>
</head>
<body>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<h1>revision</h1>
	<hr>
		<?php 
		echo"clinton";
		$boychild=18;
		echo "$boychild";
		$musungu=16;
		$ruby=$boychild*$musungu;
		echo "ruby";
		if ($ruby<5 && $ruby>6) {
			# code...
			echo "true";
		}

		echo "<br>";

		if ($ruby<5 && $ruby>6) {
			# code...
			echo "true";
		} else {
			# code...
			echo "false";
		}
		echo "<br>";
		if ($ruby<5 || $ruby>6) {
			# code...
			echo "true";
		} else {
			# code...

			echo "false";
		}
		echo "<br>";
		
		 ?>
		 <?php 
		 $jerry=90;
		 while ($jerry<= 100) {
		 	# code...
		 	echo "$jerry<br>";
		 	$jerry++;

		 }

		  ?>
		  <?php 
		  for ($i=0; $i < 30; $i++) { 
		  	# code...
		  	echo "$i<br>";
		  }

		   ?>
		   <?php 
		   	$colin= array("vitz","voxy", "tuktuk", "alella", "dennise" );

		   	sort($colin);
		   	$ruby=count($colin);
		   	for ($y=0; $y < $ruby; $y++) { 
		   		# code...
		   		echo $colin[$y];
		   		echo "<br>";
		   	}

		    ?>
</body>
</html>