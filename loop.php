<h1>Loops</h1>
1) WhileLoop
2) DoWhile
3) For Loop
4) Foreach loop

<h2>1) WhileLoop </h2>
<?php 
	$i = 10;
	$j = 0;

	while ($j <= $i) {
		echo $j++;
	}
?>
<h2>2)Do WhileLoop </h2>

<?php 
	$i = 10;
	$j = 0;
	do{
		echo $j++;
	}while ($j >= $i);
?>

<h2>2)For Loop</h2>
<?php 
	for ($i=0; $i <= 10; $i++) { 
		if(is_int($i/2)){
			echo $i."is even number<br>";
		}else{
			echo $i."is odd number<br>";
		}
	}

	echo "<br>";
	$i=2;
	for ( ;$i<=20 ; ) { 
		echo $i."<br>";
		$i = $i+2; 
	}
?>

<h2>ForEach</h2>
<?php 
	$myData = [
				[
					'name' => 'ram',
					'email' => 'ram@gmail.com',
					'contact' => '787878787',
					'rollnumber' => '1001',
				],
				[
					'name' => 'shyam',
					'email' => 'shyam@gmail.com',
					'contact' => '9898989898',
					'rollnumber' => '',
				],
				[
					'name' => 'mohan',
					'email' => 'mohan@gmail.com',
					'contact' => '4545454545',
					'rollnumber' => '858',
				]
		];
	echo "<pre>";
	//print_r($myData[1]['email']);

	foreach ($myData as $key => $value) {
		echo($value['name'].' '); 
		echo($value['email'].' '); 
		echo($value['contact'].'<br>'); 
	}
?>

<table border="1">
	<?php
	foreach ($myData as $key => $value) {
	echo    '<tr>
				<td>'.$value['name'].'</td>
				<td>'.$value['email'].'</td>
				<td>'.$value['contact'].'</td>
				<td>'.$value['rollnumber'].'</td>
				<td>delete</td>
			</tr>';	
	}
	?>
	
</table>
