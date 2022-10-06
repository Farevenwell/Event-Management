<!DOCTYPE html>
<html>
<head>
	<title>Delete Data</title>
	<style>
		body{
			background-color: whitesmoke;
		}
		input{
			width: 40%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px grey;
		}
	</style>
</head>
<body>
	<center>
		<h1>Delete Client Data</h1>
		<form action="" method="POST">
			<input type="text" name="Event_ID" placeholder="Enter Event ID" /> </br>
			<input type="submit" name="delete" value="Delete"/>
		</form>
	</center>

</body>
</html>

<?php
$connection =mysqli_connect("localhost","root","");
$database = mysqli_select_db($connection, 'Event_management');
	if(isset($_POST['delete']))
{
	$Event_ID = $_POST['Event_ID'];

	$query = "DELETE FROM event WHERE Event_ID=$Event_ID";
	$query_run = mysqli_query($connection,$query);

	if($query_run)
     {
     	echo '<script> alert("Data deleted successfully.") </script>';
     }
     else
     {
     	echo '<script> alert("Data doesnt exist.") </script>';
     }
}



?>
