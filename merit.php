<!DOCTYPE html>
<html>
<head>
	<title>class ruby</title>
</head>
<body>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><hr>
		<form>
		<input type="text" name="person">
		<button>submit</button>
		</form>
		<?php
		$clinton=18.98;
		$keis=13;
		$sam="samuel allela"

			$kontire=$clinton*$keis;
			echo $kontire;
			var_dump($kontire)
			if ($kontire<18) {
		#code..
		echo "Too young";
				}else{
		echo "Too old";
				}
		?>
		<?php
		if (isset($_GET['grade'])) {
			# code...
			$grade=$_GET[grade];
			if ($grade<40) {
				# code...
				echo "loser";
			}else{
				#code...
				echo "champion";
			}
			$eric="paulette";
			switch ($eric) {
				case 'paulette':
					# code...
				echo "taken";
					break;
				case 'stats_harmonic_mean(a)':
					# code...
				echo "gerrarahia";
					break;
				
				default:
					# code...6
				echo "claire wants you";
					break;
			}
			
		}
		?>
</body>
</html>