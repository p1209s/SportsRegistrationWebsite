<!DOCTYPE html>
<?php
include("connection.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Carrom Rules</title>
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
        <h1>Carrom Rule and Regulation</h1></div>
    <ol>
        <h3><li>The toss:</li></h3>
<ul>
<li>Order of play is determined by the process of "calling the carrom men" or "the toss". Before commencing each match, an umpire hides one black carrom in one hand and one white carrom man on the other hand. The players guess which color carrom man is being held in each hand. The player who guesses correctly wins the toss.</li>

<li>The winner of the toss strikes first, which is called the opening break. The winner of the toss has the option to change sides from white to black and give up the opening break. The winner of the toss may not pass this decision to the other player. If the winner of the toss chooses to change sides then the loser must strike first.</li>

<li>The player taking the first shot (or break) plays white carrom men. The opponent plays black. If that player cannot score any points then that player loses the turn and their opponent can choose to play any carrom man, Black or White in favor.</li>
</ul>
       <br> <h3><li>Shooting:</li></h3>
<ul>
<li>A successful pot entitles the player to shoot again. This means that, as in pool and snooker, it is possible for a player to pot all his/her pieces and cover the queen from the start of the game without the opponent being given the chance to shoot.</li>

<li>Any player pocketing the queen is required to cover it immediately by pocketing one of their carrom man on the entitlement shot. If after potting the queen the player fails to cover it, then the queen is returned to the center of the table. It is illegal to pot the Queen after the last piece since the queen must always be covered.</li>

<li>Thumbing is allowed by International Carrom Federation which allows the player to shoot with any finger including the thumb (known as "thumbing", "thumbshot", or "thumb hit").</li>

<li>Crossing the diagonal lines on the board by coming in touch with it, or pocketing the striker is a foul. A player needs to ensure that his striking hand does not infringe/cross the diagonal lines aerially/physically. A player committing a foul must return one carrom man that was already pocketed.</li>

<li>If a player pockets his striker, he has to pay a penalty. This penalty is usually 10 points.</li>
</ul>
        <ol></ol></ol>
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