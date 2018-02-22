<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<input type="text" name="person">
		<button>submit</button>
	</form>
	<?php
	echo "<h1>class pearl Hello World</h1><br>";
	echo str_word_count("My name is kontire junior and i love CODING...if i was to make a decision right now i would be starting a new project of making the most amazing website of all time...But why me...<br>")
	echo "<br>";
	$name=$_GET['person'];//this will parse the name person from the input field.
	echo $name."and this is my comment";/*i love CODING...if i was to make a decision right now i would be starting a new project of making the most amazing website of all time...But why me...*/

	$marphine=18;
	if ($marphine<=30) {
		#code..
		echo "Too young";
	}else{
		echo "Too old";
	}
	echo "<br>";
	

	?>

</body>
</html>