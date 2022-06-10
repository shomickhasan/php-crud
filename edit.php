<?php include 'header.php'?>
<style>
		.head{
			background: rgba(255, 100, 0, .7);
			overflow: hidden;
		}
	</style>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="head bg-info py-2 px-4 text-white">
					<h3 class="float-left">User Data</h3>
					<a href="index.php" class="btn btn-warning float-right"><i class="fa fa-eye"></i>User List</a>
				</div>

				<?php 
				include 'database/function.php';



					if (isset($_POST["save"])) {

						$name=$_POST["name"];
						$userName=$_POST["uname"];
						$email=$_POST["email"];
						$phone=$_POST["phone"];
						$status=$_POST["status"];
						if (empty($name)) {
							echo '<div class="alert alert-danger" role="alert">Name is Required</div>';
						}
						elseif (empty($userName)) {
							echo '<div class="alert alert-danger" role="alert">User Name is Required</div>';
						}
						elseif (empty($email)) {
							echo '<div class="alert alert-danger" role="alert">Email is Required</div>';
						}
						elseif (empty($phone)) {
							echo '<div class="alert alert-danger" role="alert">Phone is Required</div>';
						}
						elseif ($status==0) {
							echo '<div class="alert alert-danger" role="alert">Status is Required</div>';
						}
						else{
							$id=$_GET["userId"];
							$msg=updateData($name,$userName,$email,$phone,$status,$id);
							echo $msg;
						}
					}
				?>

				<?php 

					if (isset($_GET["userId"])) {
						$id=$_GET["userId"];
						$user=showDataforEdit($id);
						while($data=$user->fetch_assoc()){?>
							<form method="POST">
								  <div class="form-group">
								    <label for="sname">Student Name</label>
								    <input type="text" class="form-control" id="sname" placeholder="Student Name" name="name" value="<?php echo $data["name"] ?>">
								  </div>

								  <div class="form-group">
								    <label for="uname">User Name</label>
								    <input type="text" class="form-control" id="uname" placeholder="Student User Name" name="uname" value="<?php echo $data["userName"] ?>">
								  </div>

								  <div class="form-group">
								    <label for="email">Email</label>
								    <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" value="<?php echo $data["email"] ?>">
								  </div>

								  <div class="form-group">
								    <label for="phone">Phone</label>
								    <input type="text" class="form-control" id="phone" placeholder="Email Address" name="phone" value="<?php echo $data["phone"] ?>">
								  </div>


								  <div class="form-group">
								  	<label for="status">Status</label>
								    <select name="status" class="form-control">
								    	<option value="<?php echo $data["status"] ?>"><?php if ($data["status"]==1){echo'Active';}else{echo 'Inactive';} {
								    	} ?></option>
								    	<option value="1">Active</option>
								    	<option value="2">Inactive</option>
								    </select>
								    
								  </div>
								  <button type="submit" class="btn btn-primary" name="save">Submit</button>

				</form>
						<?php }
					}
					else{
						header('location: index.php');
					}

				?>
				
			</div>

	</div>
</div>

<?php include 'footer.php'?>