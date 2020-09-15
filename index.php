<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<? php 
	require_once("db-conn.php");

		$sql="SELECT * FROM `user` ";


		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
			echo $row["name"];
?>
</body>
</html>
