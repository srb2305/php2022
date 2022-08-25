<?php 
include('header.php'); 
if(empty($_SESSION['email'])){
	header('location:login.php');
}

error_reporting(0);
include('php_database.php'); 
	
?>



<h1>Profile</h1>
<h3>Welcome : <?php  echo $_SESSION['email']; ?></h3>
<?php
$email = $_SESSION['email']; 

$qry = "select * from `contacts` where `email`='$email'";
	$result = mysqli_query($con, $qry);
	$data = mysqli_fetch_assoc($result);

echo	$name = $data['first_name'];
echo	$mobile = $data['mobile'];
echo	$email = $data['email'];
echo	$message = $data['message'];
echo	$image = $data['image'];
?>
