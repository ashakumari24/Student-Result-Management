<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
  border: 1px solid black;
 border-collapse: collapse;
}
a{
    text-decoration:none;
    color:black;
}
    </style>
</head>
<body>
    
    <table >
        <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Address</th>

        <th>Roll No</th>
        <th>Phone No</th>
        
    </tr>
    <?php
    include 'connect.php';
    $s="select Student_id,Name,Address,Roll_No,Phone_No from form";
    $tab=$con->query($s);
    while($row=$tab->fetch_assoc())
{
?>
<tr>
    <td><?php echo $row['Student_id'];?></td>
    <td><?php echo $row['Name'];?></td>
    <td><?php echo $row['Address'];?></td>
    <td><?php echo $row['Roll_No'];?></td>
    <td><?php echo $row['Phone_No'];?></td>
    <td><a href="logind.php?id=<?php echo $row['Student_id'];?>">Delete</a></td>
	<td><a href="login.php?id=<?php echo $row['Student_id'];?>">Update</a></td>
	
</tr>
<?php
}
?>
    </table>
    <h2><a href="insert.php">Insert New Record</a></h2>
</body>
</html>