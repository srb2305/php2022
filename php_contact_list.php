<?php 
include_once('header.php');

include('php_database.php'); 

$query = "select contacts.*,country.country_name  from `contacts`  LEFT JOIN `country` ON contacts.country_id = country.id;";
$result = mysqli_query($con, $query);
?>

<h1>Contact List</h1>
<?php 
if(isset($_GET['msg'])){
	echo  '<h2 style="color:red">'.$_GET['msg'].'</h2>';
}
?>
<table border="1" class="table">
	<thead>
		<th>S/no</th>
		<th>Image</th>
		<th>Full Name</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Country</th>
		<th colspan="3">Action</th>
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
					
					<a data-toggle="modal" data-target="#viewDetails" href="#" target="_blank" data-img="<?php echo $row['image'] ?>" class="showimage">
						click here
					</a>
				</td>
				<td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
				<td><?php echo $row['mobile']; ?></td>
				<td><?php echo $row['email'];  ?></td>
				<td><?php echo $row['country_name'];  ?></td>
				
				<td>
					<a class="btn btn-info" href="php_contact_edit.php?id=<?php echo $row['id']; ?>">
						<span class="glyphicon glyphicon-eye-open"></span>
					 </a>
				</td>
				<td>
					<a class="btn btn-primary" href="php_contact_view.php?id=<?php echo $row['id']; ?>">
					<span class="glyphicon glyphicon-edit"></span></a>
				</td>
				<td>
					<a class="btn btn-danger" href="php_controller.php?contact_delete=<?php echo $row['id']; ?>">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
	<?php 	} 	?>	
	

	</tbody>
</table>


<!-- Modal -->
 <div class="modal fade" id="viewDetails" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">View Image</h4>
        </div>
        <div class="modal-body">
          <img src="" id="showimagehere" class="img img-rounded" width="100%">
        </div>
        <div class="modal-footer">
        	<button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <script type="text/javascript">
  	$('.showimage').on('click',function(){
  		var img = $(this).data('img');
  		var fullimage = './uploads/'+img;
  		$('#showimagehere').attr('src',fullimage);
  	});
  </script>
<?php include('footer.php'); ?>