<h1>Contact</h1>
<?php 
if(isset($_GET['msg'])){
	echo  '<h2 style="color:green">'.$_GET['msg'].'</h2>';
}
?>
<form action="php_controller.php" method="POST">
	Full Name : <input type="text" name="full_name" required=""> <br>
	Contact : <input type="number" name="contact_number"> <br>
	Email : <input type="email" name="email_id"> <br>
	Message : <textarea name="message" rows="3"></textarea> <br>
	<input type="submit" name="contact_add" value="Add">
</form>
