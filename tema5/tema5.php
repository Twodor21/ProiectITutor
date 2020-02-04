<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1">	
	<title>tema5 PHP</title>
</head>
<body>
<?php 
	echo "<h1>Tema PHP 5</h1><hr/> 
			<h3> PHP Data Types</h3> 
			PHP supports the following data types:<br/>
			String, Integer, Float, Boolean, Array, Object, NULL, Resource<br/><br/>";
	$x = "Hello PHP!"; // String
	$y = 5; 	// Integer
	$z = 6.00;	// Float
	$w = true;	// Boolean
	$p = new person(); // Object
	$a = ["Volvo","BMW","Mercedes"];	 // Array
	echo "x = $x and its type is ";
	var_dump($x);
	echo "<br/>y = $y and its type is ";
	var_dump($y);
	echo "<br/>z = $z and its type is ";
	var_dump($z);
	echo "<br/>w = $w and its type is ";
	var_dump($w);
	echo "<br/>p = $p->firstName $p->age and its type is ";
	var_dump($p);
	echo "<br/>a[2] = $a[2] and its type is ";
	var_dump($a);
	class person{
		function person(){
			$this->firstName= "Tudor";
			$this->age = 27;
		}
	}
	//New chapter
	echo "<h3>Php string functions</h3>";
	$b = "Hello PHP!";
	echo "(Using strlen();)The length of \"$b\" is ".strlen($b).".";
	$c = "My mother went to the convenience store to buy some milk for me.";
	echo "<br/>(Using str_word_count();) In \"$c\" are ".str_word_count($c)." words.";
	echo "<br/>(Using strrev();) The sentence \"$b\" wrote backwords is ". strrev($b).".";
	echo "<br/>(Using strpos();) The position of word \"store\" is ". strpos($c,"store").".";
	echo "<br/>(Using str_replace();) we change php with world and will be \"". str_replace("PHP","World",$b)."\"<br/>";
	//New Chapter
	echo "<h3>Php Numbers</h3>";
	$t = 5;
	echo "Variable t is_int()? ";
	echo var_dump(is_int($t)).".";
	$q = 5.78;
	$int_cast = (int)$q;
	echo "<br/>Using (int)q where q=$q; the result will be ".$int_cast.".";
	//New chapter
	echo "<h3>PHP Constants</h3>";
	define("_greeting","Hello world is the value of constant variable _greeting!");
	echo _greeting;
	// New Chapter
	echo "<h3>PHP Operators</h3>";
	   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";

   echo("<br/>");
	 // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
?> 
</body>
</html>