<?php  include('php_database.php'); 

$query = "select * from `contacts`";
$result = mysqli_query($con, $query);
?>

<h1>Contact List</h1>
<table border="1">
	<thead>
		<th>S/no</th>
		<th>Full Name</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Action</th>
	</thead>
	<tbody>
	<?php 
		$i = 1;
		while($row = mysqli_fetch_assoc($result)){
	?>		
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
				<td><?php echo $row['mobile']; ?></td>
				<td><?php echo $row['email'];  ?></td>
				<td>
					<a href="php_controller.php?contact_delete=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
	<?php 	} 	?>	
	

	</tbody>
</table>