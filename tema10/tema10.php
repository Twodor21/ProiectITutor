<?php
	session_start();
	$_SESSION["favcolor"] = "FirstSession";
	setcookie("test_cookie", "test", time() + 3600, '/');
?>

<!DOCTYPE html>
<html>
<head>
	<title>php 10</title>
</head>
<body>
	<h1>Php Course 10</h1>
	<?php 
		$myfile = fopen("newfile.txt","w") or die("Unable to open the file!");
		$txt = "Tudor Popa\n";
		fwrite($myfile, $txt);
		$txt = "Mitica Dragomir\n";
		fwrite($myfile,$txt);
		fclose($myfile);
	?>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		Select image to upload:
		<p>
    		<input type="file" name="fileToUpload" id="fileToUpload">
    	</p>
		<input type="submit" value="Upload Image" name="submit">
	</form>
	<?php
		if(count($_COOKIE)>0){
			echo "<p>Cookies are enabled.</p>";
		}else{
			echo "<p>Cookies are disabled.</p>";
		}
		echo "<br/>".$_SESSION["favcolor"]."<br/>";

		$url = "http://www.tudorpopa.dx.am";
		$url = filter_var($url, FILTER_SANITIZE_URL);
		if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    		echo("<p> $url is a valid URL</p>");
		} else {
   			echo("<p> $url is not a valid URL</p>");
		}

		$jsonobj = '{"Peter":25,"Benji":32,"Jonathan":35}';
		var_dump(json_decode($jsonobj,true));
		$obj = json_decode($jsonobj);
		echo "<p>".$obj->Peter."<br/> $obj->Benji"."</p>";
		foreach($obj as $key => $value)
			echo $key." : ". $value ."<br/>";

		class car{
			public $model,$name;
			function get_name(){
				return $this->name;
			}
			function get_model(){
				return $this->model;
			}
		}
		$Mercedes = new car();
		$Mercedes->name = "Mercedes-Benz";
		$Mercedes->model = "b180";
		echo "<p>Name is: ".$Mercedes->get_name().
			"<br/>Model: ".$Mercedes->get_model()."</p>";
		var_dump($Mercedes instanceof car);

		class Chef{
			public $name;

			function __construct($name){
				$this->name = $name;
			}

			function Italian_dish(){
				echo "<p>Chef $this->name is cooking Pasta</p>";
			}
			function __destruct(){
				echo "This is a message of __destruct destructor function of Chef class";
			}
		}
		$Mario = new Chef("Mario");
		$Mario->Italian_dish();
	?>
</body>
</html>