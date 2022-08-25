<?php 
include('php_database.php');
session_start();

if(isset($_POST['contact_add'])){
	$name = $_POST['full_name'];
	$contact = $_POST['contact_number'];
	$email = $_POST['email_id'];
	$message = $_POST['message'];
	$country_id = $_POST['country_id'];
	
	// ----- code start for file upload -----
	$image_name = $_FILES['user_image']['name'];
	$temp_path = $_FILES['user_image']['tmp_name'];
	$destinationPath = './uploads/'.$image_name;

	move_uploaded_file($temp_path, $destinationPath);
	// --------------------------------------
	$query = "insert into `contacts` (`first_name`,`mobile`,`email`,`message`,`image`,`country_id`) values('$name','$contact','$email','$message','$image_name','$country_id')";

	$result = mysqli_query($con,$query);
	if($result){
		$msg = "Inserted successfully";
	}else{
		$msg = "Not inserted";
	}

	header('location:php_contact_list.php?msg='.$msg);
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


if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$qry = "select * from `contacts` where `email` = '$username' and `password`='$password'";
	$res = mysqli_query($con,$qry);
	$dataAry = mysqli_fetch_assoc($res);
	if(!empty($dataAry)){
		//  session start 
		$_SESSION['name'] = $dataAry['first_name'];
		$_SESSION['email'] = $username;
		header('location:profile.php');
	}else{
		$msg = "Invalid credentials";
		header('location:login.php?msg='.$msg);
	}
}
?>