<!DOCTYPE html>
<?php
include("connection.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Chess Rules</title>
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
        <h1>Chess Rule and Regulation</h1></div>
   <ol>
       <h3><li>Chess Move:</li></h3>
        <ul>
           <li>King can move exactly one square horizontally, vertically, or diagonally. At most once in every game, each king is allowed to make a special move, known as castling.</li>
           <li>Queen can move any number of vacant squares diagonally, horizontally, or vertically.</li>
           <li>Rook can move any number of vacant squares vertically or horizontally. It also is moved while castling</li>
           <li>Bishop can move any number of vacant squares in any diagonal direction.</li>
           <li>Knight can move one square along any rank or file and then at an angle. The knight´s movement can also be viewed as an “L” or “7″ laid out at any horizontal or vertical angle.</li>
           <li>Pawns can move forward one square, if that square is unoccupied. If it has not yet moved, the pawn has the option of moving two squares forward provided both squares in front
                of the pawn are unoccupied. A pawn cannot move backward. Pawns are the only pieces that capture differently from how they move. They can capture an enemy piece on either of 
                the two spaces adjacent to the space in front of them (i.e., the two squares diagonally in front of them) but cannot move to these spaces if they are vacant. The pawn is also involved
               in the two special moves en passant and promotion.</li>
        </ul><br>
       <h3><li>Castling:</li></h3>
          <ul>
             <li>Castling is the only time in the chess game when more than one piece moves during a turn. This chess move has been invented in the 1500´s to help speeding up the game and improving
                    balance of the offense and defense.</li>
             <li>During the castling, the king moves two squares towards the rook he intends to castle with, and the rook moves to the square through which the king passed.</li>
             <li>Castling is only permissible if all of the following conditions hold:</li>
             <ol type="a"> <br>
                <li>Neither king nor rook involved in castling may have moved from the original position;</li>
                <li>There must be no pieces between the king and the rook;</li>
             </ol><br>
             <li>The king may not currently be in check, nor may the king pass through or end up in a square that is under attack by an enemy piece (though the rook is permitted to be under attack and 
                    to pass over an attacked square)</li>
          </ul><br>
       <h3><li>En Passant:</li></h3>
            <ul>
               <li>En Passant may only occur when a pawn is moved two squares on its initial movement. When this happens, the opposing player has the option to take the moved pawn “en passant” as if
                   it had only moved one square. This option, though, only stays open for one move.</li>
               <li>The En Passant move was developed after pawns were allowed to move more than one square on their initial move. The idea behind this rule was to retain restrictions imposed by slow 
                    movement, while at the same time speeding up the game</li>
            </ul><br>
       <h3><li>Pawn promotion</li></h3>
              <ul>
                 <li>If a pawn reaches the opponent´s edge of the table, it will be promoted – the pawn may be converted to a queen, rook, bishop or knight, as the player desires. The choice is not limited to
                     previously captured pieces. Thus its´ theoretically possible having up to nine queens or up to ten rooks, bishops, or knights if all pawns are promoted.</li>
              </ul>
   </ol>
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