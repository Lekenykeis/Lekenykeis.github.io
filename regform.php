<!DOCTYPE html>
<html>
<head>
	<title>regform</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body class="jumbotron" style="background-color: grey">
	<div class="container-fluid" >
		<form class="form-group" method="GET">
			<fieldset style="text-align: center; background-color: skyblue">
				<legend style="text-align: center;">contact us</legend>
				First Name:<span class="glyphicon glyphicon-user"></span><br><br>
				<input type="text" name="firstname" value="enter first name"><br><br>
				Sur_name:<span class="glyphicon glyphicon-user"></span><br><br>
				<input type="text" name="Surname" value="enter username" required="this field is required"><br><br>
				Last Name:<span class="glyphicon glyphicon-user"></span><br><br>
				<input type="text" name="lastname" value="enter lastname" required="this field is required"><br><br>
				Phone No:<span class="glyphicon glyphicon-user"></span><br><br>
				<input type="text" name="number" value="07********" required="this field is required"><br><br>
				ZIP-code:<span class="glyphicon glyphicon-envelope"></span><br><br>
				<input type="number" name="zipcode" required="this field is required"><br><br>
				E-Mail:<span class="glyphicon glyphicon-envelope"></span><br><br>
				<input type="text" name="username" value="example@gmail.com" required="this field is required"><br><br>
				New Password:<span class="glyphicon glyphicon-user"></span> <br><br>
				<input type="password" name="password" value="enterpassword" required="this field is required"><br><br>
				Confirm Password:<span class="glyphicon glyphicon-user"></span> <br><br>
				<input type="password" name="password" value="confirmpassword" required="this field is required"><br><br>
				<button>submit</button> <br><br>
	       </fieldset>
		</form>
	</div>
	<?php 
		$keis=$_GET['password'];
		if (strlen($keis)<10) {
			# code...
			echo "weak password";
		}
		if (is_string($keis)) {
			# code...
			echo "avoid using strings only";
		}else{
			# code...
			echo "";
		}
	 ?>
	 <?php 
	 	$clint=$_GET['password'];
	 	if (strlen($clint)) {
	 		# code...
	 		echo "number";
	 	}else{
	 		# code...
	 		echo "characters";
	 	}
	  ?>
	  <?php 
	  	$ruby=$_GET['firstname'];
	  		if (!isset($ruby) or empty($ruby)) {
	  			# code...
	  			echo "Fill in you first name";
	  		}
	   ?>
</body>
</html>