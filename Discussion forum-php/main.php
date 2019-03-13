
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
</head>
<body>
	<form action="insert.php" method="post">
		<h2> What's on your mind </h2>
		<input type="text" name="status"></br>
		<input type="submit" value="post">
	</form>
	<br><br><h2>News Feed</h2><br><br>
	<table>
<?php
$conn= mysqli_connect('localhost','root','','demo');
$sql="select * from posting ";
$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
		echo "<tr><td>".$row["status"]."</td></tr>";
	}
?>
	</table>

</body>
</html>
