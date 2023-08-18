<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $n=$_POST['name'];
    $r=$_POST['roll'];
    $sql="insert into uplod(Name,Student_Roll) values('$n','$r')";
    if($con->query($sql))
	{
	header("location:upload.php?roll=$r");
	}
	else
	{
	echo $con->error;
	}

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
    <form method="post" >
        <label for="">Name:</label>
        <input type="text" name="name">
        <br><br>
        <label for="">Roll No:</label>
        <input type="number" name="roll">
        <br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>