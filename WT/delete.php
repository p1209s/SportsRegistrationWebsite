<?php
include("connection.php");
$result = mysqli_query($conn,"SELECT * FROM subscribe");
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete data</title>
</head>
<body>
<table border="2" align="center">
	<tr>
	<td>ID</td>
	<td>Email</td>
	<td>Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result))
    {
	?>
	<tr>
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["Email"]; ?></td>
	<td><a href="delete.php?Email=<?php echo $row["Email"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
     <?php  $sql="DELETE FROM subscribe WHERE Email='" . $_GET["Email"] . "'";
             if (mysqli_query($conn, $sql))
             {
                 echo "Record deleted successfully";
             } 
              else {
                    echo "Error deleting record: " . mysqli_error($conn);
             }
              mysqli_close($conn);
        ?>
    
</body>
</html>