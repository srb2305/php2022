<h2> If condition </h2>
<?php 
	$a = 10;
	$b = 5;
	if($a == $b){
		echo "Yes both are equal";
	}
?>

<br>
-------------------------
<h2> If else Condition </h2>
<?php 
	if($a == $b){
		echo "Yes both are equal";
	}else{
		echo "No, both are not equal";
	}
?>
---------------------------
<br> <h2> If else if </h2>
<?php 

	$studentClass = 15;
	echo "My class is =>".$studentClass;
	echo "<br>";
	if($studentClass <= 5){
		echo "You are in PRIMARY Section";
	}else if($studentClass <= 8){
		echo "Yor are in upper primary section";
	}else if($studentClass <= 10){
		echo "You are in Secondary section" ;
	} else if($studentClass <= 12){
		echo "You are in higher secondary section";
	} else {
		echo "none of above";
	}
?>

<h3> If with Not qual to </h3>
<?php 
	$gender = "Male";
	if($gender != 'Male'){
		echo "You are bride";
	}else{
		echo "You are groom";
	}
?>

<h3> If with  == and === </h3>
<?php 
	$number1 = 5; // integer
	$number2 = "5"; // string
	if($number1 === $number2){
		echo "Both number are equal";
	}else{
		echo "Both number are  not equal";
	}


?>