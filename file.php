<!DOCTYPE html>
<html>
<head>
	<title>file</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body class="container-fluid" style="background-color: black;">
	<?php 
		define("ruby", "i love class ruby");
			echo ruby;
	 ?>
	  <form method="GET" style="text-align: center;">
	 	First No:<br><input type="number" name="numone" required=""><br><br>
	 	Second No:<br><input type="number" name="numtwo" required=""><br><br><br>
	 	<button class="btn-success">submit</button>              <button class="btn-danger">reset</button>

	 </form>
	 <?php
	 	$keis=$_GET['numone'];
	 	$klint=$_GET['numtwo'];
	 	$clinton=$keis*$klint;


	 	echo "$clinton";
	  ?>
	  <div class="container-fluid">
	  	<div class="jumbotron">
	  		<p>What is a file</p>
	  		<q>A file refers to an object in a computer that is used to store information, setting or even commands.</q>
	  	</div>
	  	<?php
	  		// declairing variables 
	  		$ruby=fopen("magda.txt", "w") or die("unable to open file");
	  		$tevin="My name is tevin and am in class ruby\n";
	  		fwrite($ruby, $tevin);
	  		$tevin="I love mt class\n";
	  		fwrite($ruby, $tevin);
	  		fclose($ruby);
	  	 ?>
	  	 <?php 
	  	 	$ruby=fopen("magda.txt", "r") or die("unable to open file");
	  	 	echo fread($ruby, filesize("magda.txt"));
	  	 	fclose($ruby);
	  	  ?>
	  	  <h3>Uploading A File</h3>
	  	  <form action="upload.php" method="post">
	  	  	click on Image to Upload:<br>
	  	  	<input type="file" name="upload" id="thefiletobeuploaded">
	  	  	<input type="submit" name="submit" value="upload Image Here" class="btn btn-success">
	  	  </form>
	  </div>
</body>
</html>