<h2>Index Array</h2>
<?php 
	$indexArray = [1,'2',3.5,5,7,9,10];
	$array2 = array(1,'2');
	
	print_r($indexArray);
	echo "<br>";
	print_r($indexArray[3]);  // 5
	echo "<br>";
	echo $indexArray[4];  // 7
	echo "<br>";
	var_dump($indexArray);

	array_push($indexArray, 15);
	print_r($indexArray);

?>

<h2>Associative  Array</h2>
<?php 
	$allData = [];
	$user1 = [
		'name'=>'ram',
		'roll_number' => '10001',
		'email'=>'ram@gmail.com'
	];

	$user2 = [
		'name'=>'shyam',
		'roll_number' => '10002',
		'email'=>'shyam@gmail.com'
	];

	$user3 = [
		'name'=>'ramu',
		'roll_number' => '10003',
		'email'=>'ramu@gmail.com'
	];
	array_push($allData,$user1);
	array_push($allData,$user2);
	print_r($allData);
?>