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
  <title>Contact check</title>
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
    <div class="adminh4"></div>
    <?php
   

        $sql = 'SELECT id, name, email, subject, message FROM feedback';
        $result=mysqli_query($conn,$sql);

        while($row=mysqli_fetch_array($result))
        {
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $subject=$row['subject'];
            $message=$row['message'];
    ?>
     <div style="margin-left: 200px; width: 70%;">
        <table class="table table-bordered">
            <thead class="table-dark">
            <tr> 
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $subject; ?></td>
                    <td><?php echo $message; ?></td>
                </tr>
            </tbody>
    </table>
    </div>
        <?php
        }
        ?>
</body>
</html>