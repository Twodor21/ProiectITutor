<!DOCTYPE html>
<html>
<head>
	<title>PHP 9</title>
</head>
<body>
	<h1>PHP 9</h1>
	<hr />
	<h3>Date an time</h3>
	<p>
		<?php echo "Today is ".date("d-m-Y")." and ".date("l"); ?>
		<br/>
		<?php echo "The time is " . date("H:i:s"); ?>
		<br/>© 2010-<?php echo date("Y");?>
		<br/>
		<?php
			$d=mktime(11, 14, 54, 8, 12, 2014);
			echo "Created date is " . date("Y-m-d h:i:sa", $d);
		?>
		<?php
			$d=strtotime("10:30pm October 21 1992");
			echo "<br/>Created date is ".date("Y-m-d h:i:sa", $d)."<br/>";
			$d=strtotime("tomorrow");
			echo date("Y-m-d h:i:sa", $d)."<br/>";
			$d=strtotime("next Saturday");
			echo date("Y-m-d h:i:sa", $d)."<br/>";
			$d=strtotime("+3 Months");
			echo date("Y-m-d h:i:sa", $d)."<br/>";
			echo ceil(($d-time())/60/60/24);
		?>
	</p>
	<h3>PHP Include</h3>
	<p><?php include 'include.php';?><br/>
		<?php require 'require.php'; ?>
	</p>
	<h3>File Handling</h3>
	<?php  
		readfile("File1.txt");
		echo "<br />";
		$myfile = fopen("File1.txt","r") or die("Unable to open file!");
		echo fread($myfile,filesize("File1.txt"));
		fclose($myfile);
		$myfile = fopen("File1.txt","r") or die("Unable to open file!");
		echo "<br/>Line 1: ".fgets($myfile);
		fclose($myfile);
		$myfile = fopen("File1.txt", "r") or die("Unable to open file!");
		while(!feof($myfile)) {
  		echo fgets($myfile);
		}
		fclose($myfile);
	?>
</body>
</html>