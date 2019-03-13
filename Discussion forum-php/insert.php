<?php


	$con = mysqli_connect('localhost','root','');
	
	if(!$con)
	{
		echo 'Not connceted' ;
	}
	
	if(!mysqli_select_db($con,'demo'))
	{
		echo 'database not selected';
	}
	$name = $_POST['name'];
	$email = $_POST['email'];
	$status = $_POST['status'];
	
	$sql = "INSERT INTO posting (Name,Email,status) values ('$name','$email','$status')";
	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted'; 
	}
	else
	{
		echo 'Inserted'; 
	}

	header("refresh:1; url=index.php");

?>
