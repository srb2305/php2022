<?php include('header.php'); ?>
<style type="text/css">
	img{
		width: 200px;
		height: 200px;
		border-radius: 50%;
	}
</style>

<h1>Profile</h1>

<?php 
include('php_database.php'); 

if(isset($_GET['id'])){
	$id = $_GET['id'];

	$qry = "select * from `contacts` where `id`=$id";
	$result = mysqli_query($con, $qry);
	$data = mysqli_fetch_assoc($result);

	$name = $data['first_name'];
	$mobile = $data['mobile'];
	$email = $data['email'];
	$message = $data['message'];
	$image = $data['image'];
}
?>

<img src="<?php echo './uploads/'.$image ?>"><br>
<?php  echo $name; ?><br>
<?php  echo $email; ?><br>
<?php  echo $mobile; ?><br>


<?php include('footer.php'); ?>