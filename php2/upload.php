<?php
include 'connect.php';
if (isset($_POST['submit']))
{
    $r=$_REQUEST['roll'];
	$img=$_FILES['picture'];
	//print_r($img);
	$n=$img['name'];
	// $size=$img['size'];
	// $type=$img['type'];
	// echo $n."<br>".$size."<br>".$type;
    $tname=$img['tmp_name'];
    $ex=explode('.',$n);
	$nex=strtolower(end($ex));
    $exarr=array('png','jpg','jpeg');
	if(in_array($nex, $exarr)/*&&($size>=20&&$size<=50)*/)
	{
	move_uploaded_file($tname,'image/'.$n);
	$sql="update uplod set image='$n' where Student_Roll='$r'";
	$con->query($sql);
	?>
     <table>
		<tr>
			<th>Roll</th>
			<th>Name</th>
			<th>Image</th>
		</tr>
	<?php
	$sql2="select * from uplod";
	$tab=$con->query($sql2);
	while($row=$tab->fetch_assoc())
		{
		?>
		<tr>
			<td><?php echo $row['Student_Roll'];?></td>
			<td><?php echo $row['Name'];?></td>
			<td><img src="image/<?php echo $row['image'];?>" width="100px";height="100px"></td>
		</tr>
		<?php

		}
		?>

	</table>
	<?php
	}
	else
	{
		echo "image is not valid";
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
    <h3>Please insert your picture</h3>
    <form method="post" enctype="multipart/form-data" >
        <input type="file" name="picture">
        <input type="submit" name="submit">
    </form>
</body>
</html>