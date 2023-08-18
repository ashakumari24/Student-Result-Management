<?php
session_start();

if(isset($_SESSION['stnm']))
{
	echo $_SESSION['stnm'];
}
else
{
	header('location:login.php');
}
include 'connect.php';
$eid=$_SESSION['id'];
$sql="delete from form where Student_id='$eid'";
if($con->query($sql))
{
	header("location:form.php");
}
else
	{
		echo "not deleted";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<a href="logout.php">logout</a>
</body>
</html>