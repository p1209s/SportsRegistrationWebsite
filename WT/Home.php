<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <link href="file/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="file/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="file/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="file/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="file/css/style.css" rel="stylesheet">

</head>

<body>

  <!-------- Header ------->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="Home.php">Home</a></li>
          <li class="drop-down"><a href="">About</a>
            <ul>
              <li><a href="#about">About Us</a></li>
              <li><a href="#team">Team</a></li>
            </ul>
          </li>
            <li><a href="Register.php">Registers</a></li>
            <li><a href="Schedule.php">Schedules</a></li>
            <li><a href="Result.php">Results</a></li>
            <li><a href="Rules.php">Rules</a></li>
            <li><a href="News.php">News</a></li>
            <li><a href="Opponent1.php">Opponent</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="Admin login.php">Admin</a></li>

        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->

  <!------- Hero Section ------->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to Sports week Management system</h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!---------- What We Do Section -------->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>What We Do</h2>
          <p>In sports Week Management System </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4>Managing the sports event</h4>
              <p>asdfghjklqwertyuiopzxcvbnm</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4>Managing the teams</h4>
              <p>asdfghjklmnbvcxzqwertyuiop</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-tasks-alt"></i></div>
              <h4>Scheduling the matches</h4>
              <p>zxcvbnmasdfghjklqwertyuiop</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->

    <!--------- About Section --------->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="file/img/table tennis.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>About Us</h3>
              <h4>Our Focus </h4>
            <p>Our Vision is for Sports week Management.
                Sports week Management is a sports Management system provide better guidance to elite athletes. At we believe in the talent and determination of our athletes, that's why we want to provide them with the best opportunities possible to make it to the top, and stay there. Trust, respect, passion and professionalism are at the core of our system. Sports Management has designed a system of services that helps every athlete achieve his/her goals and maximize his/her athletic career.</p><h5><a href="About.php">See more</a></h5>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!------- Services Section ------->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>We provides our best services</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="icofont-computer"></i>
              <h4><a href="Register.php">Registration</a></h4>
              <p>Register your activities.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="icofont-chart-bar-graph"></i>
              <h4><a href="Result.php">Results</a></h4>
              <p>See Results</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-image"></i>
              <h4><a href="#">Gallery</a></h4>
              <p>See images!</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-settings"></i>
              <h4><a href="Rules.php">Rules</a></h4>
              <p>Read important Rules and Regulation</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-news"></i>
              <h4><a href="News.php">News</a></h4>
              <p>please check criteria related to your activities.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-tasks-alt"></i>
              <h4><a href="Schedule.php">Schedules</a></h4>
              <p>Please check schedule regular.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-------- Team Section -------->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Our Team</h2>
          <p>Sports Week Management system</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="file/img/team/volleyball.jpeg" alt="">
              <h4>Patel Deep</h4>
              <p>Student</p>
              <div class="social">
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="file/img/team/chess.jpeg" alt="">
              <h4>Patel Dhruv</h4>
              <p>Student</p>
              <div class="social">
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="file/img/team/cricket.jpeg" alt="">
              <h4>Shah Priyank</h4>
              <p>Student</p>
              <div class="social">
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!------- Contact Section -------->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Your message is more precious for us!</p>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>xyz</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>xyz</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>xyz</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <form action="#contact" method="post">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" required="" placeholder="Your Name">
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" required="" placeholder="Your Email">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" required="" placeholder="Subject"]>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
              </div>
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>

        </div>
          <?php 
        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
        
               $s="insert into feedback(name, email, subject, message) values ('".$name."','".$email."','".$subject."','".$message."')";
              if (mysqli_query($conn, $s))
              {
                  echo "Thanks for your message!";
              }
                else {
                        echo "Error: " . $s . ":-" . mysqli_error($conn);
                    }
                mysqli_close($conn);
        }
        ?>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
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