<?php 
 include_once('menu.php');

 include('php_database.php'); 

$query = "select * from `contacts`";
$result = mysqli_query($con, $query);
?>

<h1>Contact List</h1>
<?php 
if(isset($_GET['msg'])){
	echo  '<h2 style="color:red">'.$_GET['msg'].'</h2>';
}
?>
<table border="1">
	<thead>
		<th>S/no</th>
		<th>Image</th>
		<th>Full Name</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Country</th>
		<th>Action</th>
	</thead>
	<tbo   dy>
	<?php 
		$i = 1;
		while($row = mysqli_fetch_assoc($result)){
	?>		
			<tr>
				<td><?php echo $i++; ?></td>
				<td>
					<img src="uploads/<?php echo $row['image'] ?>" style="width: 50px;" alt="image">
					
					<a href="uploads/<?php echo $row['image'] ?>" target="_blank">
						click here
					</a>
				</td>
				<td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
				<td><?php echo $row['mobile']; ?></td>
				<td><?php echo $row['email'];  ?></td>
				<td><?php echo $row['country_id'];  ?></td>
				<td>
					<a href="php_controller.php?contact_delete=<?php echo $row['id']; ?>">Delete</a>
				</td>
				<td>
					<a href="php_contact_edit.php?id=<?php echo $row['id']; ?>">
					Edit </a>
				</td>
				<td>
					<a href="php_contact_view.php?id=<?php echo $row['id']; ?>">View</a>
				</td>
			</tr>
	<?php 	} 	?>	
	

	</tbody>
</table>