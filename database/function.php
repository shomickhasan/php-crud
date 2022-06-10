<?php 
	

	
$con=new mysqli("localhost","root","","batch1");

function inserData($name,$userName,$email,$phone,$status){
	global $con;
	$command="INSERT INTO tbl_student(name,userName,email,phone,status)VALUES('$name','$userName','$email','$phone','$status')";
	$result=$con->query($command);
	if ($result) {
		return '<div class="alert alert-success" role="alert">
  		Data Successfully Saved</div>';
	}
	else{
		return '<div class="alert alert-danger" role="alert">
  		Data not saved'.$con->error.'</div>';
	}
}

function showUser(){
	global $con;
	$command ="SELECT *FROM tbl_student";
	$result =$con->query($command);
	return $result;
}

function showDataforEdit($id){
	global $con;
	$command ="SELECT *FROM tbl_student WHERE id='$id'";
	$result =$con->query($command);
	return $result;
}

function updateData($name,$userName,$email,$phone,$status,$id){
	global $con;
	$command="UPDATE tbl_student SET name='$name',userName='$userName',email='$email',phone='$phone',status='$status' WHERE id='$id'";
	$result=$con->query($command);
	if ($result) {
		header("location: index.php");
	}
	else{
		return '<div class="alert alert-danger" role="alert">
  		Data not Updated'.$con->error.'</div>';
	}
}

function deleteUser($id){
	global $con;
	$command="DELETE FROM tbl_student WHERE id='$id'";
	$result=$con->query($command);
	if ($result) {
		header("location: index.php");
	}
}

