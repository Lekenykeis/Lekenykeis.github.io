<!DOCTYPE html>
<html>
<head>
	<title>Images</title>
</head>
<body class="container" style="background-color: silver;">
	 <div>
		<?php 
			$jala="uploads/";
			$alal=$jala.basename($_FILES['thefiletobeuploaded']['name']);

			$uploaOk=1;
			$Imageis=strtolower(pathinfo(
				$alal,PATHINFO_EXT));
			if (isset($_post['submit'])) {
				$ty=getimagesize($_FILES)['thefiletobeuploaded']
				if ($ty!==false) {
					# code...
					echo "The image uploaded is" . $ty[''];
					$uploaOk=1;
				}else{
				
					echo "file aint right";
					$uploaOk=0;
				}
				# code...

		 ?>
	</div>
</body>
</html>