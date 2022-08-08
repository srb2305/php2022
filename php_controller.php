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
		$msg = "Inserted successfully";
	}else{
		$msg = "Not inserted";
	}

	header('location:php_contact_add.php?msg='.$msg);
}

if(isset($_POST['contact_update'])){
	$name = $_POST['full_name'];
	$contact = $_POST['contact_number'];
	$email = $_POST['email_id'];
	$message = $_POST['message'];
	$id = $_POST['id'];

	$query = "update `contacts` set `first_name` = '$name', `mobile` = '$contact', `email` = '$email', `message` = '$message' where `id`= '$id'";
	//echo $query; die();
	$result = mysqli_query($con,$query);
	if($result){
		$msg = "Updated successfully";
	}else{
		$msg = "Not updated";
	}

	header('location:php_contact_list.php?msg='.$msg);
}

if( isset($_GET['contact_delete']) ){
 	$id = $_GET['contact_delete'];
 	$query = "delete from `contacts` where `id`='$id'";

 	$result = mysqli_query($con,$query);
	if($result){
		$msg = "Delted successfully";
	}else{
		$msg = "Not deleted";
	}

	header('location:php_contact_list.php?msg='.$msg);

}

?>