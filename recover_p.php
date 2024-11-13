<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Email2']) && !isset($_SESSION['rq2'])) {
    header("Location: recover_1.php");
}else{
  $quest = $_SESSION['rq2'];
  // $query=mysqli_query($conn,"SELECT * FROM `admin` WHERE `Email_Address`='$email'")or die(mysqli_error());
  // $row=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Emergency Response Application ~ Reset Password</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="index.html"><em>Emergency</em> Response</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li class="has-submenu"><a href="#section2">About Us</a>
          <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
          </ul>
        </li>
        <li><a href="#section3">Recovery Question</a></li>
        <li><a href="#section6">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/stock.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Emergency Response Application</h6>
              <h2><em>Saving</em> Lives</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section2">Learn more</a></div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Multiple Responses</h4>
              </div>
              <div class="content-hide">
                <p>Our system is able to offer various emergency services including bleeding cuts and wounds, severe internal bleeding, epileptic seizures and much more.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="index.html">More Info.</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Qualified EMT</h4>
              </div>
              <div class="content-hide">
                <p>We only work with qualified and experienced emergency teams across the country, in order to ensure you the best health care and fastest responses available.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="index.html">More Details</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Secure Records</h4>
              </div>
              <div class="content-hide">
                <p>We incoperate advanced security and database systems to ensure you the utmost protection and transparency as you utilize our application. Every process is tracked and monitored in order to make sure that nothing goes wrong.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="index.html">Read More</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Why Choose Us?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Best Services</a></li>
              <li><a href='#tabs-2'>Top Management</a></li>
              <li><a href='#tabs-3'>Our Purpose</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/us1.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Best Services</h4>
                    <p>We offer the best services available in the EMT field at the moment with great connections and a smooth system around the country. Thank you for choosing us!</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/us2.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Top Management</h4>
                    <p>Our application is run by a professional and top notch team, you are in safe hands and we ensure that you will get the help that you need!</p> 
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/us3.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Our Goal</h4>
                    <p>Our main purpose is to create a platform whereby the patient and emergency response team nearby can interact with each other and the patient is able to be attended to easily or given attention.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="continer centerIt">
            <div>
              <h4>Reset your <em>PASSWORD</em> </h4>
            </div>
          </div>     
        <div class="col-md-12">
          <div class="right-content">
            <div class="top-content">
              <h6>Kindly Answer the <em>Recovery Question</em> correctly:</h6>
            </div>
            <form id="contact" action="find_answer2.php" method="post">
                <div class="col-md-12">
                  <fieldset>
                    <input readonly="" name="email" type="text" class="form-control" value="<?php echo $quest; ?>" required="">
                  </fieldset>
                </div>
                  <div class="col-md-12">
                  <fieldset>
                    <input name="ra" type="text" class="form-control" placeholder="Your Recovery Answer" required="">
                  </fieldset>
                </div>
                <br>
<!--                 <div class="col-md-12">
                  <fieldset>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Your Password" required="">
                    <a onclick="myFunction3();" style="color: white;"> Show Password</a>
                  </fieldset>
                </div> -->
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" name="submit" class="button">Submit</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>We'd love to hear from you!</h2>
          </div>
        </div>
        <div class="col-md-6">
                    
          <form id="contact" action="insertion.inc.php" method="post">
            <div class="row">
              <div class="col-md-6">
                  <fieldset>
                    <input name="pid" type="text" class="form-control" id="name" placeholder="Your Patient ID" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="hid" type="text" class="form-control" id="email" placeholder="Hospital ID" required="">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="feed" rows="6" class="form-control" id="message" placeholder="Your Feedback..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" name="send" class="button">Send Feedback</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
       <div class="col-md-6">
          <!--  <div id="map">
            <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>-->
          <div class="continer centerIt">
            <div style="color: white;">
              <h4>Contact Us:</h4>
              <br>
              <br>
              <p>Email #1 - <a href="mailto:victor.kungu@strathmore.edu">victor.kungu@strathmore.edu</a></p>
              <p>Email #2 - <a href="mailto:arnold.mwanzia@strathmore.edu">arnold.mwanzia@strathmore.edu</a></p>
              <p>Phone - +254 732 866685</p>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2022   
          
           | Design by: Victor Kungu (147118) & Arnold Mwanzia (144625) </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>

                  <script type="text/javascript">
      
             function myFunction() {
          var x =
          document.getElementById('pass');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }

                   function myFunction1() {
          var x =
          document.getElementById('pass1');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }

                           function myFunction3() {
          var x =
          document.getElementById('password');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }

    </script>

</body>
</html>