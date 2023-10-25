<?php
include("connection.php");
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Admin login.php");
    exit;
}
$result = mysqli_query($conn,"SELECT * FROM result");
?>


<html>
<head>
        <title>Delete Result</title>
        <link href="file/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="file/css/style.css" rel="stylesheet">
    </head>
<body>
             <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="admin.php">Dashboard</a></li>
            <li><a href="#">Schedules</a></li>
            <li><a href="adminResult.php">Results</a></li>
            <li><a href="NewsEnter.php">News</a></li>
            <li><a href="galleryUpload.php">Gallery</a></li>
            <li><a href="contactCheck.php">Contact Us</a></li>
            <li><a href="Admin%20logout.php">Logout</a></li>

        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->
     <div class="adminh4">
    <div style="margin-left: 200px; width: 70%;">
        <table class="table table-bordered"> 
            <thead class="table-dark">
	       <tr>
               <td>ID</td>
               <td>Branch</td>
               <td>Year</td>
	           <td>Action</td>
	       </tr>
            </thead>
            <tbody>
                <tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result))
    {
	?>
	<tr>
	   <td><?php echo $row["id"]; ?></td>
	   <td><?php echo $row["Branch"]; ?></td>
        <td><?php echo $row["Year"]; ?></td>
	   <td><a href="ResultDisplay.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
     <?php  $sql="DELETE FROM result WHERE id='" . $_GET["id"] . "' ";
            
             if (mysqli_query($conn, $sql))
             {
                 echo "Record deleted successfully";
             } 
              else {
                    echo "Error deleting record: " . mysqli_error($conn);
             }
              mysqli_close($conn);
        ?>
      </div>
    </div>
</body>
</html>