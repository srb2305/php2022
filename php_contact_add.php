<?php include('menu.php'); ?>


<h1>Contact</h1>
<?php 
if(isset($_GET['msg'])){
	echo  '<h2 style="color:green">'.$_GET['msg'].'</h2>';
}

include('php_database.php'); 

$query = "select * from `country`";
$result = mysqli_query($con, $query);
?>


<form action="php_controller.php" method="POST" enctype="multipart/form-data">
	Full Name : <input type="text" name="full_name" required=""> <br>
	Contact : <input type="number" name="contact_number"> <br>
	Email : <input type="email" name="email_id"> <br>
	Message : <textarea name="message" rows="3"></textarea> <br>
	Image : <input type="file" name="user_image"> <br>
	
	<br>
	Country :

	<select name="country_id">
		<option>Select Country</option>
	<?php 
		while($row = mysqli_fetch_assoc($result)){
	?>
		<option value="<?php echo $row['id'] ?>"><?php echo $row['country_name'] ?></option>
	<?php } ?>
	</select>


	<br>
	<input type="submit" name="contact_add" value="Add">
</form>
