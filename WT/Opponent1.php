<!DOCTYPE html>
<?php
include("connection.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Opponent</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <link href="file/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="file/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="file/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="file/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="file/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="Home.php">Home</a></li>
            <li><a href="Register.php">Registers</a></li>
            <li><a href="Schedule.php">Schedules</a></li>
            <li><a href="Result.php">Results</a></li>
            <li><a href="Rules.php">Rules</a></li>
            <li><a href="News.php">News</a></li>
            <li><a href="Opponent1.php">Opponent</a></li>
            <li><a href="Admin login.php">Admin</a></li>

        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->
    <div class="h1">
        <h1 >Opponent Details</h1></div>
<p align="center"> Select Sports to view Opponenet team</p>
    
        <div style="margin-left: 400px; width: 40%";>
<table class="table table-bordered">
<tr>
    <td><a class="btn btn-info btn-lg btn-block" href="http://localhost/WT/CricketOpp.php" role="button">Cricket</a></td>
      <td><a class="btn btn-info btn-lg btn-block" href="http://localhost/WT/VolleyballOpp.php" role="button">Volleyball</a></td>
</tr>
<tr>
    <td><a class="btn btn-info btn-lg btn-block" href="http://localhost/WT/CarromOpp.php" role="button">Carrom</a></td>
      <td><a class="btn btn-info btn-lg btn-block" href="http://localhost/WT/ChessOpp.php" role="button">Chess</a></td>
</tr>
<tr>
    <td><a class="btn btn-info btn-lg btn-block" href="http://localhost/WT/KabaddiOpp.php" role="button">Kabaddi</a></td>
      <td><a class="btn btn-info btn-lg btn-block" href="http://localhost/WT/TTOpp.php" role="button">TableTennis</a></td>
</tr>
</table>
    </div>
<!------- Footer ------->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Sports Week Management System</h3>
            <p>
                XYZ
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>About</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="About.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contactUs.php">Contact Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="terms%20of%20service.php">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy%20policy.php">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="guide.php">Guide</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FAQs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="gallery.php">Gallary</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Subscribe to Our Newsletter</h4>
            <p>Your support gives us to provide best services</p>
            <form action="Home.php" method="post">
              <input type="email" name="email" required="">
                <input type="submit" name="go" value="Subscribe">
            </form>
              <?php
                                    if(isset($_POST['go']))
                                    {
                                        $email=$_POST['email'];

	                                   $sql = "INSERT INTO subscribe (Email) VALUES ('$email')";
                                        if (mysqli_query($conn, $sql))
                                        {
                                            echo "Thanks for Subscribe us !";
                                        } else {
                                            echo "Error: " . $sql . ":-" . mysqli_error($conn);
                                                }
                                        mysqli_close($conn);

                                    }
                                ?>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Sports Week Management System</span></strong>. All Rights Reserved
        </div>
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  

</body>

</html>