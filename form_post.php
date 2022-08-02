<h1>Form Post</h1>
<form action="#" method="POST">
	<input type="text" name="firstname" placeholder="Enter first name">

	<input type="text" name="lastName" placeholder="Ener last name">

	<input type="submit" name="submitbtn" value="Click">
</form>

<?php 
	error_reporting(0);

	$name = $_POST['firstname'];
	$lName = $_POST['lastName'];
	
	//echo $name.' '.$lName;

	/**
	 *  This is multi line comment
	 *  of PHP
	 *  
	 * 
	 */
	echo rand();
	echo '<br>Randon 4 digit =';
	echo rand(1000,9999);
	echo '<br> Time =';
	echo time();
	echo "<br>date1 =  " . date('d-m-y');
	echo "<br>date2 =  " . date('d-m-Y');
	echo "<br>date3 =  " . date('d-M-y');
	echo "<br>date4 =  " . date('D-M-y');
	echo "<br>date5 =  " . date('Y-F-d');
	echo "<br>date5 =  " . date('Y-F-l');
	
	echo "<br>time =  " . date('H:i');
	echo "<br>time =  " . date('H:i:s');
	echo "<br>time =  " . date('H:i:s a');
	echo "<br>time =  " . date('H:i:s A');
	echo "<br>time =  " . date('h:i:s');

	echo "<br><br>";
	$number = 5.5222222;
	echo  round($number,2);
?>

