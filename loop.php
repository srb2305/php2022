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
	
?>
