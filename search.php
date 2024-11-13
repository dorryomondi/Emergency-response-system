<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Email2']) && !isset($_SESSION['patname']) && !isset($_SESSION['fil'])) {
    header("Location: index.html");
}
// if (isset($_SESSION['fil'])) {
//  unset($_SESSION['fil']);
// }
else{
  $email = $_SESSION['Email2'];
  $filtr = $_SESSION['fil'];
  $query=mysqli_query($conn,"SELECT * FROM `patients` WHERE `Email_Address`='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
  $query1=mysqli_query($conn,"SELECT * FROM `hospitals` WHERE `Medical_Services` LIKE '%$filtr%'")or die(mysqli_error());
  $row1=mysqli_fetch_array($query1);
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

    <title>Emergency Response Application ~ Patient Homepage</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
  </head>

  <style type="text/css">
        
          table{
    border: solid 1px black;
    align-items: center;
    color: white;
  }

   th, tr, td{
    border: solid 1px black;
    padding: 0px 0px;
  }
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData3()
{
   var divToPrint=document.getElementById("printTable3");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="index2.php"><em>Emergency</em> Response</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li><a href="#section2">Request Emergency Services</a></li>
        <li><a href="#section3">View Database</a></li>
         <li><a href="#section7">Logout</a></li>
   <!--      <li class="has-submenu"><a href="#section2">About Us</a>
          <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">Start Today!</a></li>
           
          </ul>
        </li> -->
       <!--  <li><a href="#section4">Patients</a></li>
        <li><a href="#section5">ER</a></li> -->
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
              <h2><em>Welcome </em> <?php echo $row['Fullname']; ?></h2>
              <div class="main-button">
                  <div><a href="#section7">Logout</a></div>
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
                <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
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
                <div class="scroll-to-section"><a href="#section3">More Details</a></div>
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
                <div class="scroll-to-section"><a href="#section4">Read More</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!--   <section class="section why-us" data-section="section2">
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
  </section> -->

  <section class="section coming-soon" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="continer centerIt">
            <div>
              <h4>Request <em>EMERGENCY SERVICES</em> Now</h4>
            </div>
          </div>
                <div class="col-md-7">
          <div class="right-content">
            <div class="top-content">
              <h6>Request an <em>EMT</em> by use of this form:</h6>
            </div>
            <form id="contact" action="insertion.inc.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <fieldset>
                    <input name="pid" type="text" class="form-control" id="fname" value="<?php echo $row['Patient_ID']; ?>" hidden="" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="hid" type="text" class="form-control" id="phone-number" placeholder="Hospital ID" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="medse" type="text" class="form-control" id="email" placeholder="Medical Services" required="">
                  </fieldset>
                </div>
                 <div class="col-md-6">
                  <fieldset>
                    <input name="loc" type="text" class="form-control" id="nname" placeholder="Your Location" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" name="adde" class="button">Request</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Search for an <em>Emergency Service</em> by use of this form:</h6>
            </div>
            <form id="contact" action="insertion.inc.php" method="post">
                <div class="col-md-12">
                  <fieldset>
                    <input name="val" type="text" class="form-control" id="email1" placeholder="Input Query" required="">
                  </fieldset>
                </div>
                <br>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" name="search" class="button">Search</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section contact" data-section="section3">
    <div class="container">
     <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Hospitals</h2>
          </div>
        </div>
        <div style="color: white; position: relative; left: 80px;">
          <div>
        <table   id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Hospital ID</th>
<th style="text-align: left;
  padding: 8px;">Hospital Name</th>
  <th style="text-align: left;
  padding: 8px;">Location</th>
  <th style="text-align: left;
  padding: 8px;">Medical Services</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
  <th style="text-align: left;
  padding: 8px;">Phone Number</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "ems_database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 // $filter = $_SESSION['fil'];
$res = $row1['Medical_Services'];
$sql = "SELECT `Hospital_ID`,`Hospital_Name`, `Hospital_Location`, `Medical_Services`, `Email_Address`, `Phone_Number` FROM `hospitals` WHERE `Medical_Services` LIKE '%$res%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Hospital_ID"] . "</td><td>" . $row["Hospital_Name"] . "</td><td>" . $row["Hospital_Location"] . "</td><td>" . $row["Medical_Services"] . "</td><td>" . $row["Email_Address"] . "</td><td>" . $row["Phone_Number"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
                                   </div>
                                   <br>
                                   <br>
                                   <br>
                                   <br>
                                   <div class="col-md-12 col-sm-12">
                                        <button style="color: black;" class="form-control" id="cf-submit" onclick="printData1()">Print List of Hospitals</button>
                                   </div>
                                   <br>
                                   </div>
      </div>
      </div>
  </section>

  <section class="section coming-soon1" data-section="section7">
    <div class="container" style="color: white;">
      <div class="row">
        <div class="continer centerIt">
            <div>
              <h4>Click <em><a href="logout.php">HERE</a></em> to Logout.</h4>
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