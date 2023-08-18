<?php
include 'connect.php';
if (isset($_POST['save'])){
    $sid=$_POST['stuid'];
    $stnm=$_POST['stunm'];
    $add=$_POST['stuadd'];
    $ph=$_POST['stuph'];
    $roll=$_POST['sturoll'];
    $uid=$_POST['userid'];
    $pass=$_POST['pass'];
    $s="insert into form values('$sid','$stnm','$add','$roll','$ph','$uid','$pass')";
    if ($con->query($s)) {
        header("location:form.php");
        
    }
    else{
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
<a href="logout.php">logout</a>
<form method="post">
        
        <label for="">Student ID:</label>
        <input type="text" name="stuid">
        <br><br>
        <label for="">Name:</label>
        <input type="text" name="stunm">
        <br><br>
        <label for="">Address:</label>
        <input type="text" name="stuadd">
        <br><br>
        <label for="">Phone No:</label>
        <input type="number" name="stuph">
        <br><br>
        <label for="">Roll No:</label>
        <input type="number" name="sturoll">
        <br><br>
        <label for="">User ID:</label>
        <input type="text" name="userid">
        <br><br>
        <label for="">Password:</label>
        <input type="text" name="pass">
        <br><br>
        <input type="submit" value="submit" name="save">
    </form>
</body>
</html>