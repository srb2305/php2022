<?php include('header.php'); ?>
<h1>Login</h1>
<?php 
if(isset($_GET['msg'])){
	echo  '<h2 style="color:red">'.$_GET['msg'].'</h2>';
}
?>
<form action="php_controller.php" method="POST">
Username : <input type="text" name="username"><br>
Password : <input type="password" name="password"> <br>
<input type="submit" name="login" value="Submit">
</form> 