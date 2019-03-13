<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
</head>
<body>
	<h1>WEB BASED DISCUSSION FORUM</h1>
	<h3> A platform for all who wants to express</h3>
	<br>
	<a href="#main"><button class="b1">Get Started</button></a>
<div class="blank"></div>
<span id="main">
	<form action="insert.php" method="post">
		<h2> What's on your mind </h2>
		<input type="text" name="name" placeholder="Enter your Name">
		<input type="text" name="email" placeholder="Enter your Email"></br>
		<textarea name="status" rows="10" cols="40"></textarea></br>
		<input type="submit" value="Post" class="post">
	</form> 
	<br><br><h2 class="nf">News Feed</h2>

<?php
$conn= mysqli_connect('localhost','root','','demo');
$sql="select * from posting order by ID desc";
$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
		echo "<p><big><b>".$row["Name"]."</b></big><br><i>".$row["Email"]."</i><br><small>@ ".$row["Time"]."</small><br><br>".$row["status"]."</p><br><br>";
	}
?>


</span>

</body>
</html>
