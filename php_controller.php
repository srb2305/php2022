<?php 
include('php_database.php');

if(isset($_POST['contact_add'])){
	$name = $_POST['full_name'];
	$contact = $_POST['contact_number'];
	$email = $_POST['email_id'];
	$message = $_POST['message'];

	$query = "insert into `contacts` (`first_name`,`mobile`,`email`,`message`) values('$name','$contact','$email','$message')";

	$result = mysqli_query($con,$query);
	if($result){
		echo "Inserted successfully";
	}else{
		echo "Not inserted";
	}

	header('location:php_contact_add.php');
}


?>