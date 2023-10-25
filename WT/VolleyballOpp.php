<!DOCTYPE html>
<?php
include("connection.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VolleyballOpp</title>
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
        <h1>Volleyball Opponent Details</h1></div>
<form action="http://localhost/WT/VolleyballOpp.php" method="post">
<p align="center">BRANCH:-
  <select name="branch">
    <option>SELECT BRANCH</option>
<option>COMPUTER</option>
      <option>CIVIL(A)</option>
<option>CIVIL(B)</option>
<option>MECHANICAL(A)</option>
      <option>MECHANICAL(B)</option>
<option>EC</option>
<option>CHEMICAL</option>
     <option>ELECTRICAL(A)</option>
<option>ELECTRICAL(B)</option>
  </select>
    YEAR:-
  <select name="year" align="center">
      <option>SELECT YEAR</option>
<option>1st</option>
<option>2nd</option>
      <option>3rd</option>
<option>4th</option>
<option>M.E.</option>
  </select></p>
<p align="center"><input type="submit" name="submit" align="center"></p>


</form>
<?php
if(isset($_POST['submit']))
{
$branch=$_POST['branch'];
$year=$_POST['year'];

$q1="select * from volleyball where Year ='$year' AND Branch ='$branch'";
$run=mysqli_query($conn,$q1);

while($row=mysqli_fetch_array($run))
{
$PEN=$row['PEN'];
$Name=$row['Name'];
$ContactNumber=$row['ContactNumber'];
$Branch=$row['Branch'];
$Year=$row['Year'];
?>
     <div style="margin-left: 200px; width: 70%;">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>PEN</th>
                    <th>Name</th>
                    <th>ContactNumber</th>
                    <th>Branch</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $PEN; ?></td>
                    <td><?php echo $Name; ?></td>
                    <td><?php echo $ContactNumber; ?></td>
                    <td><?php echo $Branch; ?></td>
                    <td><?php echo $Year; ?></td>
                </tr>
            </tbody>
         </table>
    </div>
<?php
}}
?>

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