<?php
include 'connect.php';
session_start();

if(isset($_SESSION['id']))
{
	$uid=$_SESSION['stnm'];
	$psw=$_SESSION['pw'];
	date_default_timezone_set('Asia/Kolkata');
	$d=date('y/m/d');
	$t=date("h:i:s");
	$sql="insert into login values('$uid','$psw','$d','$t')";
	$con->query($sql);
	$eid=$_SESSION['id'];
}

else
{
	header('location:login.php');
}
$sql="select * from form where Student_id='$eid'";
$tab=$con->query($sql);
$row=$tab->fetch_assoc();
if(isset($_POST['btnsubmit']))
{
	$nm=$_POST['txtname'];
	$ad=$_POST['txt'];
	$sl=$_POST['txtroll'];
    $ph=$_POST['txtph'];
	$sql="update form set Name='$nm',Address='$ad',Roll_No='$sl',Phone_No='$ph' where Student_id='$eid'";
	if($con->query($sql))
	{
		header("location:form.php");
	}
	else
		{
			echo $con->error;
		}
}
	




?>
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
<a href="logout.php">logout</a>
<form method="post">
	<label for="">Student ID:</label>
	<input type="text" name="txtid" disabled value="<?php echo $row['Student_id'];?>">
	<br><br>
	<label for="">Name</label>
	<input type="text" name="txtname" value="<?php echo $row['Name'];?>">
	<br><br>
	<label for="">Address</label>
	<input type="text" name="txt" value="<?php echo $row['Address'];?>">
	<br><br>
	<label for="">Roll No:</label>
	<input type="number" name="txtroll" value="<?php echo $row['Roll_No'];?>">
	<br><br>
	<label for="">Phone No:</label>
	<input type="number" name="txtph" value="<?php echo $row['Phone_No'];?>">
    <br><br>
	<input type="submit" name="btnsubmit">
    
</form>
</body>
</html>