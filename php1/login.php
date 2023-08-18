<?php
session_start();
$eid=$_REQUEST['id'];
include 'connect.php';
if (isset($_POST['submit'])) {
    $uid=$_POST['txtid'];
    $pw=$_POST['txtpass'];
    $sql="select * from form where Student_id='$eid' and USERNAME='$uid' and Password='$pw'";
    $tab=$con->query($sql);
    if ($tab->num_rows>0) {
        $_SESSION['stnm']=$uid;
        $_SESSION['id']=$eid;
        $_SESSION['pw']=$pw;
        header("location:update.php");
    }
    else
    {
        echo "login fail";
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
    <form action="" method="post">
        <label for="">Username</label>
        <input type="text" name="txtid">
        <br><br>
        <label for="">Password</label>
        <input type="text" name="txtpass">
        <br><br>
        <input type="submit" value="submit" name="submit">
        </form>
</body>
</html>