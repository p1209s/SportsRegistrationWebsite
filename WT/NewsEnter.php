<!DOCTYPE html>
<?php
include("connection.php");
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Admin login.php");
    exit;
}
?>
<html>
 <head>
     <title>Admin Dashboard</title>
     <link rel="stylesheet" href="file/css/style.css">
     <link href="file/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-------- Header ------->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="admin.php">Dashboard</a></li>
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
    <div class="h1">
        <h1>Update News</h1></div>
        <form action="NewsEnter.php" method="post">
            <table align="center"> 
                <tr>
                    <td><textarea class="form-control" type="test" name="information" rows="5" cols="50" required="" placeholder="Enter News"></textarea></td>
                        
                </tr>
            </table><br>
            <p align="center"><input type="submit" value="Submit" name="submit"> 
                <input type="reset" value="Reset"></p>
        </form>
    
        <?php
        if(isset($_POST['submit']))
        {
	       $information=$_POST['information'];
            
            $sql = "INSERT INTO news (Information) VALUES ('$information')";
 
            if (mysqli_query($conn, $sql))
            {
                echo "New record has been added successfully !";
            }
            else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
                }
            mysqli_close($conn);
        }
         ?>
    </body>
</html>