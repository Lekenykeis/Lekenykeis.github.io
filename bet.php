<!DOCTYPE html>
<html>
<head>
	<title>bet</title>
</head>
<body>
	<h1>this is my betting site</h1>
	<p>I am pleased to have the opportunity to apply for the position of a data management assistant officer with your organization.
I completed my studies at the Technical University of Kenya having pursued a course leading to the award of a Bachelor’s Degree in Applied Statistics with second class honours (Upper division). As a statistician professional I have worked with an American based NGO parima household’s survey firm as an enumerator, the main roles being administering of household questionnaires and data collection. I also worked with Independent Electoral and Boundary Commission (IEBC) as a data entry clerk.My knowledge and background in administering of questionnaires, data collection, statistical analysis, accurate filing and project coordination provides a strong foundation that allows for accurate and thorough work. I am computer literate and have extensive knowledge in MS word, MS excel and SPSS. I would like to work in an environment that will enable me further my experience in research and data management and I firmly believe your organization can offer that. I have attached a copy of my curriculum vitae for your perusal.I am looking forward to your consideration. Thank you in advance.
</p>
<form method="$_GET">
	<input type="text" name="bet">
	<button>Place Bet</button>
</form>
	<?php 
	switch ($bet) {
		case '6':
			# code...
		echo "you win";
			break;
		case '5':
			# code...
		echo "next time";
			break;
			case '4':
				# code...
			echo "not a damn chance";
				break;
				case '3':
					# code...
				echo "very close";
					break;
					case '2':
						# code...
					echo "unlucky";
						break;
						echo "you will win tommorow";
	}


	 ?>

</body>
</html>