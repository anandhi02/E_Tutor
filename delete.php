<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];


	$sql = "delete from user_form where id=$id";
	$result=mysqli_query($con,$sql);
	if($result){
		//echo "Deleted Successfully";
		header('location:index.php');
	}else{
		die(mysqli_error($con));
	}
}

?>


