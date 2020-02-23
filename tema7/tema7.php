<?php declare(strict_types=1);
echo "Functions<br />";
// Am inserat html in php 
// Pentru ca nu se intelege nimic in pagina altfel
// cum se insereaza un rand nou fara a folosi Html ?
function message(){
	echo "<br />This text is printed from a function<<br />";
}
message();
echo "<p>Function arguments</p>";
function Argument($arg1){
	echo "<br />The argument value is: $arg1";
}
Argument("Tudor");
$number=21;
Argument("$number");
function arguments($arg1,$arg2){
	echo "<br />The first argument is: $arg1";
	echo "<br />The sencond argument is: $arg2";
}
arguments("Tudor",$number);

function Sum(int $nr1,int $nr2){
	return $nr1+$nr2;
}
echo "<br />The Sum of numbers 4 and 8 is: ".Sum(4,8);
function addNumbers(float $a, float $b) : float {
	return $a+$b;
}
echo "<br />The sum of 0.1 and 0.2 is: ".addNumbers(0.1,0.2);
function IntegerResult(float $a, float $b) : int {
	return (int)($a+$b);
}
echo "<br />The integer result of 5.2 and 1.3 is: ".IntegerResult(5.2,1.3);
//Arrays
echo "<p>PHP Arrays</p>";
$names = array("Tudor","Alexander","Tiberius");
$names[3] = "Bogdan";
for($i=0;$i<count($names);$i++)
	echo "<br />".$names[$i];
echo "<p>PHP associative arrays</p>";
$ages = array ("Tudor"=>"27","Alexander"=>"28");
$ages["Tiberius"] = "25";
foreach($ages as $x => $y) {
	echo "<br />Name is: ".$x." and age is: ".$y;
}
echo "<p><b>PHP Multidimensional arrays</b></p>";
$MArray = array(
	array("(row 0 col 0)",01,02),
	array("(row 1 col 0)",11,12),
	array("(row 2 col 0)",21,22)
	);
for($row=0;$row<3;$row++){
	echo "<br />Row $row:<br />";
	for($col=0;$col<3;$col++)
		echo " ".$MArray[$row][$col];
}
sort($names);
echo "<p>The sorted names array is </p>";
for($i=0;$i<count($names);$i++)
	echo $names[$i]."<br />";
rsort($names);
echo "<p>The descending sorted names array is </p>";
for($i=0;$i<count($names);$i++)
	echo $names[$i]."<br />";
asort($ages);
echo "<p>The associative ages array is sorted by value: </p>";
foreach($ages as $x => $y)
	echo "Name is ".$x." and age is ".$y."<br />";
ksort($ages);
echo "<p>The associative ages array is sorted by key: </p>";
foreach($ages as $x => $y)
	echo "Name is ".$x." and age is ".$y."<br />";
arsort($ages);
echo "<p>The associative ages array is sorted descending by value: </p>";
foreach($ages as $x => $y)
	echo "Name is ".$x." and age is ".$y."<br />";
krsort($ages);
echo "<p>The associative ages array is sorted descending by key: </p>";
foreach($ages as $x => $y)
	echo "Name is ".$x." and age is ".$y."<br />";
//PHP superglobals
echo "<p>GLOBALS variables</p>";
$x = 75;$y = 25;
function Sum2() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
Sum2();
echo "z = $z";
echo "<p>Server variables</p>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

<html>
<body>
<p>This is a form</p>	
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname"><br />
  E-mail: <input type="email" name="email"><br />
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    $email = $_POST['email'];
    if (empty($name)) {
        echo "<br/>Name is empty";
    } else {
        echo "<br/>".$name;
    }
    if (empty($email)){
    	echo "<br/>The email box is empty!";
    } else {
    	echo "<br/>".$email;
    } 
}
?>

</body>
</html>