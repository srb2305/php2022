<?php error_reporting(0); ?>
<h1>Form Input</h1>

<form action="#" method="GET">
	<input type="number" name="number1" placeholder="Enter first number">

	<input type="number" name="number2" placeholder="Enter second number"> 

	<input type="submit" name="submitbtn">
</form>

<?php 
	
	$input1 = $_GET['number1'];
	$input2 = $_GET['number2'];
	echo '<br>Sum ='. sum($input1,$input2);
	echo '<br>minus ='.miunus($input1,$input2);
	echo '<br>Multi ='.$input1 * $input2;
	echo '<br>Div ='.$input1 / $input2;

	function sum($a,$b){
		return $a + $b;
	}

	function miunus($a,$b){
		return $a - $b;
	}

?>

