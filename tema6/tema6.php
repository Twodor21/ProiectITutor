<?php
echo "<h1>Tema 6 php</h1>";
$t = "Text";
if(strlen($t)>4){
	echo "Is greater than 4";
}elseif(strlen($t)<4){
	echo "Is lesser than 4";
}else{
	echo "It is equal to 4";
}
echo "<br />";
$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
//while loop
echo "<p>While loop</p>";
$x = 1;
while($x <= 5) {
    echo "The number is: $x <br />";
    $x++;
}
//Do while loop
$x = 10;
do {
    echo "<p>Do while loop</p>The number is: $x <br>";
    $x++;
} while ($x <= 5);
//For loop
echo "<p>For loop</p>";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
//foreach loop
echo "<p>foreach loop</p>";
$names = array("Tudor","Rares","Bogdan");
foreach($names as $value){
	echo "$value <br />";
}
?>