<h1>String function</h1>
<?php
 	echo "Hello How are you";
 	echo "<br>";
 	
  	$firstName = 'ram';
  	$lastName = "Kumar";
  	$fullName = $firstName .' '. $lastName; // string concate
  	echo $fullName;
  	echo "<br>";
  	echo ucfirst($fullName); // first latter uppercase
  	echo "<br>";
  	echo strtoupper($fullName); // all upper case

  	echo "<br>";
  	echo strtolower($fullName); // all lower case

  	echo "<br>";
  	echo strlen($fullName); // 9

  	echo "<br>";
  	echo strrev($fullName); // ramuK mar

  	echo "<br>";
  	echo str_replace('a', 'bb', $fullName); //rbbm Kumbbr

?>

<h2>Mathamatics Operators</h2>
<?php
	$x = 10;
	$y = 15;
	echo $x + $y .'<br>';
	echo $x * $y .'<br>';
	echo $x - $y .'<br>';
	
	$z = $x / $y;
	echo $z.'<br>';
	echo round($z,2);
?>
<h2>Increment/decrement operators</h2>
<?php 
$a = 5;
echo $a++;   // 5
echo '<br>';
echo $a;   // 6
echo '<br>';
$b = 8;
echo ++$b;   // 9
?>

<h2>-SWAPING- using 3rd variable</h2>
<?php 
	$a = 5;
	$b = 3;
	echo "Value of a is=>".$a;
	echo "<br>Value of b is=>".$b;
	echo "<br>---------------<br>";
	$c = $a + $b; // 8
	$a = $c - $a; // 3
	$b = $c - $a; // 5
	echo "Value of a is=>".$a;
	echo "<br>Value of b is=>".$b;
?>

<h2>-SWAPING- without using 3rd variable</h2>
<?php 
	$a = 8;
	$b = 6;
	echo "Value of a is=>".$a;
	echo "<br>Value of b is=>".$b;
	echo "<br>---------------<br>";
	
	$a = $a + $b; // 14
	$b = $a - $b; // 8
	$a = $a - $b; // 6

	echo "Value of a is=>".$a;
	echo "<br>Value of b is=>".$b;
?>