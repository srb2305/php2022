<?php include('header.php'); ?>

	
<h1 class="text-center">Contact</h1>
<?php 
if(isset($_GET['msg'])){
	echo  '<h2 style="color:green">'.$_GET['msg'].'</h2>';
}

include('php_database.php'); 

$query = "select * from `country`";
$result = mysqli_query($con, $query);
?>


<form class="form-horizontal" action="php_controller.php" method="POST" enctype="multipart/form-data">
	<div class="form-group">
      <label class="control-label col-sm-2" for="full_name">Full Name</label>
      <div class="col-sm-4">
        <input type="text" name="full_name" required="" class="form-control">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="Contact">Contact</label>
      <div class="col-sm-4">
         <input type="number" name="contact_number" class="form-control">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="Email">Email</label>
      <div class="col-sm-4">
         <input type="email" name="email_id" class="form-control">
      </div>
    </div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="Message">Message</label>
      <div class="col-sm-4">
         <textarea name="message" rows="3" class="form-control"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="Image">Image</label>
      <div class="col-sm-4">
        <input type="file" name="user_image" class="form-control">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="Country">Country</label>
      <div class="col-sm-4">
        <select name="country_id" class="form-control">
		<option>Select Country</option>
	<?php 
		while($row = mysqli_fetch_assoc($result)){
	?>
		<option value="<?php echo $row['id'] ?>"><?php echo $row['country_name'] ?></option>
	<?php } ?>
	</select>
      </div>
    </div>
	
    <div class="col-sm-4 col-md-offset-2">
		<input type="submit" name="contact_add" value="Add" class="btn btn-primary">
	</div>
</form>


<?php include('footer.php'); ?>

