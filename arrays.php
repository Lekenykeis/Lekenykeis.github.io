<!DOCTYPE html>
<html>
<head>
	<title>arraysRuby</title>
	<link rel="stylesheet" type="text/css" href="..//bootstrap/css/bootstrap.css">
	<script src="..//bootstrap/js/jquery.js"></script>
	<script src="..//bootstrap/js/bootstrap.js"></script>
	<style type="text/css">
		body{
			background-color: silver;
		}
		p{
			color: blue;
		}
		#pp{
			color: red;
		}
	</style>
</head>
<body class="jumbotron">
	<h1>ArraysRuby</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<?php 
	$ruby=array("clint","tevin","magda","ian","john","sylvier","musungu");
	echo count($ruby);
	echo "<br>";
	echo "my name is " . $ruby[6] . " and i sit next to " . $ruby[2];
	echo "<br>";
	sort($ruby);
	$rubyy=count($ruby);
	for ($i=0; $i < $rubyy; $i++) { 
		# code...
		echo $ruby[$i];
		echo "<br>";
	}
 ?>
  <div class="jumbotron">
  	<audio>
  		
  	</audio>
 <h1>ArraysRuby</h1>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
<h4>For each explanation</h4>
<center><p id="pp">A for each loop is used only in arrayswhen one wants to loop through each key or value in an array.</p></center>
</div>
 <?php 
 $clint=array("dexter"=>"19", "kamau"=>"33","kingori"=>"25","aphia"=>"23","keis"=>"19","konty"=>"17");
 	asort($clint);

 	foreach ($clint as $key => $value) {
 		# code...
 		echo $key . $value;
 		echo "<br>";
 	}
 	

  ?>
  <h3>revision</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <?php 
  	$dee=23;
  	$denise=44;
  	if ($dee>=50 xor $denise<=50) {
  		# code...
  		echo "true";
  	}else{
  		# code...
  		echo "false";
  	}
  
   ?>
   <?php 
	  		$dee=21;
	  		$denise=44;
	  		if ($dee>=50 xor $denise<=50) {
	  			# code...
	  			echo "True";
	  		} else {
	  			# code...
	  			echo "False";
	  		}
	  if ($dee>=20) {
	# code...
	echo "<h1>This is value one</h1>";
}
elseif ($dee>=21 xor $denise<=50) {
	# code...
	echo "<h1>This is value two</h1>";
}

	  		

	  	 ?>
	<h1>KONTIRE=KONTIRE</h1>
	<hr>
	 <p>the licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation's software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs,
  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.</p>
	 <hr>
	 <?php 

	 		for ($i=1; $i <5 ; $i++){
	 			for ($b=1; $b <=10 ; $b++) { 
	 				# code...
	 				echo "*";
	 				if ($b<$i) {
	 					# code...
	 					echo "";
	 				}
	 			}
	 		}
	 		echo "<br />";

	 	for ($i=1; $i <=5 ; $i++) { 
	 		# code...
	 		echo "*";
	 	}

	  ?>
	  <?php 
	  	echo "<table border =\"1\";
	  		style='border-collapse: collapse'>";
	  		for ($row=1; $row <= 10; $row++) { 
	  			echo "<tr> \n";
	  			for ($col=1; $col <= 10; $col++) { 
	  			
	  			}
	  		}


	   ?>

</body>
</html>