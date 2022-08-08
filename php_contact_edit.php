<?php include('menu.php'); ?>

<h1>Contact Edit</h1>
<?php 
include('php_database.php'); 

if(isset($_GET['id'])){
	$id = $_GET['id'];

	$qry = "select *from `contacts` where `id`=$id";
	$result = mysqli_query($con, $qry);
	$data = mysqli_fetch_assoc($result);

}
?>
<form action="php_controller.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
	
	Full Name : <input type="text" name="full_name" required="" placeholder="Enter your name" value="<?php echo $data['first_name']; ?>"> <br>

	Contact : <input type="number" name="contact_number" value="<?php echo $data['mobile']; ?>"> <br>

	Email : <input type="email" name="email_id" value="<?php echo $data['email']; ?>"> <br>

	Message : <textarea name="message" rows="3"><?php echo $data['message']; ?></textarea> <br>

	<input type="submit" name="contact_update" value="Update">
</form>
