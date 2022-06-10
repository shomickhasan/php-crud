<?php include 'header.php'?>

	<style>
		.head{
			background: rgba(255, 100, 0, .7);
			overflow: hidden;
		}
	</style>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 offset-md-1"> 
				<div class="head bg-info py-2 px-4 text-white">
					<h3 class="float-left">User Data</h3>
					<a href="addUser.php" class="btn btn-warning float-right"><i class="fa fa-add"></i>User</a>
				</div>
				<table id="mydata" class="display">
					<thead><tr>
						<th>Sl No</th>
						<th>Name</th>
						<th>User Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Status</th>
						<th>Action</th>
					</tr></thead>
    				<tbody>
    					<?php 
    					include 'database/function.php';

    					if (isset($_GET["id"])) {
    						$id=$_GET['id'];
    						deleteUser($id);
    					}





    						$users =  showUser();
    						$sl=1;
    						if ($users->num_rows>0) {
    							while($data=$users->fetch_assoc()){?>
    								<tr>
    									<td><?php echo $sl;?></td>
    									<td><?php echo $data["name"];?></td>
    									<td><?php echo $data["userName"];?></td>
    									<td><?php echo $data["email"];?></td>
    									<td><?php echo $data["phone"];?></td>
    									<td>
    										<?php 
    											if ($data["status"]==1) {
    												echo '<span class="badge badge-info">Active</span>';
    											}
    											else{
    												echo '<span class="badge badge-warning">Inactive</span>';
    											}
    										?>
    										</td>
    									<td>
    										<a href="edit.php?userId=<?php echo $data["id"] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
    										<button data-toggle="modal" data-target="#delete<?php echo $data["id"] ?>" class="btn btn-danger btn-sm" ><i class="fa fa-trash-can"></i></button>
    									</td>
    								</tr>
    							<?php $sl++; ?>

    	<!-- Modal -->
<div class="modal fade" id="delete<?php echo $data["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure want to delte this User?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="index.php?id=<?php echo $data['id']?>" type="button" class="btn btn-danger" name="delete">Confirm</a>
      </div>
    </div>
  </div>
</div>


    							<?php }
    						}
    						else{
    							echo '<tr><td>Data Not Found</td></tr>';
    						}
    					?>
    					


					</tbody>
			</table>
			</div>
		</div>
	</div>			

<?php include 'footer.php'?>

