<!DOCTYPE html>
<?php
include("connection.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cricket Schedule</title>
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
        <h1>Cricket Tournament Schedule</h1></div>
   <div class="col">
   <table class="table table-bordered" >
     <thead class="thead-dark">   
     <tr>
      <th scope="col">Sr. no.</th>
      <th scope="col">Branch</th>
      <th scope="col">Round-1</th>
      <th scope="col">Round-2</th>
      <th scope="col">Round-3</th>
      <th scope="col">Round-4</th>
      <th scope="col" scope="col">Semi-Final</th>
      <th scope="col">Final</th>
    </tr>
       </thead>
       <tbody>
    <tr>
      <td>1</td>
      <td>2nd year Electrical(B) </td>
      <td  >A1</td>
      <td rowspan="2" align="middle">B1</td>
      <td rowspan="4" >C1</td>
      <td rowspan="8" >D1</td> 
      <td rowspan="16" >E1</td>
      <td rowspan="32">Final</td>     
   </tr>
    <tr>
      <td>2</td>
      <td>4th year Mechanical(A)</td>
      <td  >A2</td>
   </tr>
    <tr>
      <td>3</td>
      <td>2nd year Civil(B)</td>
      <td  >A3</td>
      <td rowspan="2" >B2</td>
   </tr>
    <tr>
      <td>4</td>
      <td>1st year Civil(B)</td>
      <td >A4</td>
   </tr>
    <tr>
      <td>5</td>
      <td>1st year Civil(A)</td>
      <td >A5</td>
      <td rowspan="2" >B3</td>
      <td rowspan="4" >C2</td>
   </tr>
    <tr>
      <td>6</td>
      <td>3rd year  Mechanical(A)</td>
      <td >A6</td>
   </tr>
    <tr>
      <td>7</td>
      <td>1st year Mechanical(A)</td>
      <td >A7</td>
      <td rowspan="2" >B4</td>
   </tr>
    <tr>
      <td>8</td>
      <td>3rd year Civil(A)</td>
      <td >A8</td>
   </tr>
    <tr>
      <td>9</td>
      <td>4th year Computer</td>
      <td >A9</td>
      <td rowspan="2" >B5</td>
      <td rowspan="4" >C3</td>
      <td rowspan="8" >D2</td>
   </tr>
    <tr>
      <td>10</td>
      <td>3rd year Electrical(B)</td>
      <td >A10</td>
   </tr>
    <tr>
      <td>11</td>
      <td>1st year Computer</td>
      <td >A11</td>
      <td rowspan="2" >B6</td>
   </tr>
    <tr>
      <td>12</td>
      <td>4th year Civil(A)</td>
      <td >A12</td>
   </tr>
    <tr>
      <td>13</td>
      <td>1st year Electrical(A)</td>
      <td >A13</td>
      <td rowspan="2" >B7</td>
      <td rowspan="4" >C4</td>
   </tr>
    <tr>
      <td>14</td>
      <td>2nd year Mechanical(B)</td>
      <td >A14</td>
   </tr>
    <tr>
      <td>15</td>
      <td>1st year Chemical</td>
      <td >A15</td>
      <td rowspan="2" >B8</td>
   </tr>
    <tr>
      <td>16</td>
      <td>2nd year Electrical(A)</td>
      <td >A16</td>
   </tr>
    <tr>
      <td>17</td>
      <td>2nd year Civil(A)</td>
      <td >A17</td>
      <td rowspan="2" >B9</td>
      <td rowspan="4" >C5</td>
      <td rowspan="8" >D3</td>
      <td rowspan="16" >E2</td>
   </tr>
    <tr>
      <td>18</td>
      <td>4th year Mechanical(B)</td>
      <td >A18</td>
   </tr>
    <tr>
      <td>19</td>
      <td>3rd year Mechanical(B)</td>
      <td >A19</td>
      <td rowspan="2" >B10</td>
   </tr>
    <tr>
      <td>20</td>
      <td>M.E. Civil</td>
      <td >A20</td>
   </tr>
    <tr>
      <td>21</td>
      <td>2nd year Chemical</td>
      <td >A21</td>
      <td rowspan="2" >B11</td>
      <td rowspan="4" >C6</td>
   </tr>
    <tr>
      <td>22</td>
      <td>3rd year Electrical(A)</td>
      <td >A22</td>
   </tr>
    <tr>
      <td>23</td>
      <td>E.C</td>
      <td >A23</td>
      <td rowspan="2" >B12</td>
   </tr>
    <tr>
      <td>24</td>
      <td>4th year Electrical(A)</td>
      <td >A24</td>
   </tr>
    <tr>
      <td>25</td>
      <td>2nd year Mechanical(A)</td>
      <td >A25</td>
      <td rowspan="2" >B13</td>
      <td rowspan="4" >C7</td>
      <td rowspan="8" >D4</td>
   </tr>
    <tr>
      <td>26</td>
      <td>2nd year Computer</td>
      <td >A26</td>
   </tr>
    <tr>
      <td>27</td>
      <td>3rd year Computer</td>
      <td >A27</td>      
     <td rowspan="2" >B14</td>
   </tr>
    <tr>
      <td>28</td>
      <td>4th year Chemical</td>
      <td >A28</td>
   </tr>
    <tr>
      <td>29</td>
      <td>3rd year Civil(B)</td>
      <td >A29</td>
      <td rowspan="2" >B15</td>
      <td rowspan="4" >C8</td>
   </tr>
    <tr>
      <td>30</td>
      <td>M.E. Mechanical</td>
      <td >A30</td>
   </tr>
    <tr>
      <td>31</td>
      <td>3rd year Chemical</td>
      <td >A31</td>
      <td rowspan="2" >B16</td>
   </tr>
    <tr>
      <td>32</td>
      <td>4th year Civil(B)</td>
      <td  >A32</td>
   </tr>
       </tbody>
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