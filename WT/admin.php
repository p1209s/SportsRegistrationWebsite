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
        <title>Dashboard</title>
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
    <?php
        $sql="select count(id) as total from subscribe";
        $result=mysqli_query($conn,$sql);
        $values=mysqli_fetch_assoc($result);
        $num_rows=$values['total'];
        
        echo "<h4>Number of subscriber:-$num_rows</h4>";
        
    ?>
    </div>
     </body>
</html>
   