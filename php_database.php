<?php  
	$server = 'localhost';
	$username = "root";
	$password = "";
	$databaseName = 'php_training';
	$con = mysqli_connect($server,$username,$password,$databaseName);
	if(empty($con)){
		echo "Database not connected....";
		print_r(mysqli_connect_error());
	}else{
		// echo "Database connected...";
	}

?>