<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client;
$companydb = $client->companydb;
$usercollection = $companydb->usercollection;

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email_id=$_POST['email_id'];
  $phone_no=$_POST['phone_no'];
  $feedback=$_POST['feedback'];



$insertOneResult = $usercollection->insertOne(
    ['name' => $name, 'email_id' => $email_id, 'phone_no' => $phone_no, 'feedback' => $feedback]
    );

}
//listing collections in library
// foreach($library->listCollections() as $collection){
//   var_dump($collection);
// }
// printf("inserted %d documents", $insertOneResult->getInsertedCount());
// var_dump($insertOneResult->getInsertedId());
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Embedded Sytem Design Trends and Technologies</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  

  <link href="assets/img/favicon.png" type = "image/png" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">Embedded Sytem Design Trends and Technologies</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#team">Application</a></li>
          <li><a href="#footer">Newsletter</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Embedded Sytem Design Trends and Technologies</h1>
          <h2>ESD - GROUP 96</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>

      <div class="row icon-boxes">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="ri-stack-line"></i></div>
            <h4 class="title"><a href="">Improved Security for Embedded Devices</a></h4>
            <p class="description">With the rise of the Internet of Things (IoT), the primary focus of developers and manufacturers is on security. </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="ri-palette-line"></i></div>
            <h4 class="title"><a href="">Cloud Connectivity and Mesh Networking</a></h4>
            <p class="description">Getting embedded industrial systems connected to the internet and cloud can take weeks and months in the traditional development cycle. Consequently, cloud connectivity tools will be an important future market for embedded systems. </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="ri-command-line"></i></div>
            <h4 class="title"><a href="">Reduced Energy Consumption</a></h4>
            <p class="description">A key challenge for developers is the optimization of battery-powered devices for low power consumption and maximum uptime. Several solutions are under development for monitoring and reducing the energy consumption of embedded devices that we can expect to see in 2019.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href="">Visualization Tools with Real Time Data</a></h4>
            <p class="description">Developers currently lack tools for monitoring and visualizing their embedded industrial systems in real time. The industry is working on real-time visualization tools that will give software engineers the ability to review embedded software execution.</p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Embedded System</h2>
          <p>Embedded systems contain two main elements:

            Embedded system hardware:   As with any electronic system, an embedded system requires a hardware platform on which to run. The hardware will be based around a microprocessor or microcontroller. The embedded system hardware will also contain other elements including memory, input output (I/O) interfaces as well as the user interface, and the display.
            Embedded system software:   The embedded system software is written to perform a particular function. It is typically written in a high level format and then compiled down to provide code that can be lodged within a non-volatile memory within the hardware.
            </p>
            <a href="https://en.wikipedia.org/wiki/Embedded_system" class="btn-learn-more">Learn More</a>
          </div>
          <span> Process of Embedding a system : </span>
          <img src="assets/img/flowchart-1.jpg" class="img-fluid" alt="">
        </div>

      </div>
    </section><!-- End About Section -->

  
    <!-- ======= About Video Section ======= -->
    <section id="about-video" class="about-video">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about-video.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=oPn_adlC1Q0" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>What are embedded systems?</h3>
            <p class="font-italic"><b>
              An embedded system is a computer system—a combination of a computer processor, computer memory, and input/output peripheral devices—that has a dedicated function within a larger mechanical or electrical system. It is embedded as part of a complete device often including electrical or electronic hardware and mechanical parts. Because an embedded system typically controls physical operations of the machine that it is embedded within, it often has real-time computing constraints. Embedded systems control many devices in common use today. In 2009 it was estimated that ninety-eight percent of all microprocessors manufactured were used in embedded systems.
            </p></b>
           
           
          </div>

        </div>

      </div>
    </section><!-- End About Video Section -->
    

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Application of Embedded System</h2>
          <p>The applications of embedded systems include home appliances, office automation, security, telecommunication, instrumentation, entertainment, aerospace, banking and finance, automobiles personal and in different embedded systems projects.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>AUTOMOBILES</h4>
                <span>The most commonly used embedded system in a vehicle include adaptive cruise control, airbag, telematics, traction control, in-vehicle entertainment system, emission control system, parking system, navigation systems, collision sensors, climate control, radio, anti-lock braking system etc.</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>COMPUTER SYSTEM</h4>
                <span>Embedded systems are computer systems which mostly interact directly with other systems without the influence of human users. Embedded systems often undertake monitoring, control and optimisation tasks in security-critical applications.</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>HEALTHCARE</h4>
                <span>Image result for application embedded systems in healthcare
                  Embedded systems have many applications in healthcare. They are used for monitoring vital signs, for amplifying sounds in electronic stethoscopes, and in nearly every kind of imaging system, including PET scans, CT scans, and MRIs.</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>ROBOTICS</h4>
                <span>Image result for application embedded systems in ROBOTICS
                  Embedded systems applications include Robotics, digital camera, multi-tasking toys, cooking and washing systems, biomedical systems, key-board controllers, mobile & smart phones, computing systems, electronic smart weight display system </span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->
  <footer id="footer">
         <!-- respond -->
         <div class="respond">

          <h3>Leave a Comment</h3>
    
           <form name="contactForm" id="contactForm" method="post" action="">
        <fieldset>
    
              <div class="form-field">
             <strong>Enter your Full Name : </strong><input name="name" type="text" id="name" placeholder="Your Name" value="">
              </div>
              <br>    
              <div class="form-field">
              <strong>Enter your Email id : </strong><input name="email_id" type="text" id="email_id" class="full-width" placeholder="Your Email" value="">
              </div>
              <br>
              <div class="form-field">
              <strong>Whatsapp Contact No : </strong> <input name="phone_no" type="number" id="phone_no" class="full-width" placeholder="Contact Number"  value="">
              </div>
              <br>
              <div class="message form-field">
              <strong>Give your Valuable Feedback : </strong><input name="feedback" id="feedback" class="full-width" placeholder="Your Message" ></textarea>
              </div>
              <br>
              <button type="submit" class="submit button-primary" name="submit">Submit</button>
    
        </fieldset>
         </form> <!-- Form End -->
    
        </div> <!-- Respond End -->
    
    
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Embedded System Trends and Technologies</h3>
            <p>
              
              <strong>Class</strong> TE ELEX<br>
              <strong>Roll No.</strong> 23-24-25-26-27 <br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Navigate</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Application</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Study Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.w3schools.in/c-tutorial/">Learn C</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.electronics-notes.com/articles/basic_concepts/#:~:text=There%20are%20a%20number%20of%20basic%20concepts%20that,of%20the%20basic%20elements%20of%20electronics%20and%20radio.">Learn Some Basic Electronics</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.coursera.org/lecture/iot/lecture-3-2-basic-equipment-UMLzi">Get the Basic Equipment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://in.search.yahoo.com/search?fr=mcafee&type=E211IN826G0&p=microcontroller+and+toolchain">Microcontroller and Toolchain</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.educba.com/components-of-embedded-system/#:~:text=Components%20of%20the%20Embedded%20System.%201%201.%20Power,Timers%20counters.%205%205.%20Communication%20ports.%20More%20items">Components & Their Datasheets</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>To learn more about embedded system and to join the community please contact us through e-mail id given below:</p>
            <a href="#"><strong><i>abhisinghraj000@gmail.com</i></strong><br>
			<strong><i>mansimishra21@gmail.com</i></strong></p></a>
          </div>
          

        </div>
      </div>
    </div>

    
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/Abhishe72756852?s=08" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://m.facebook.com/profile.php?ref=bookmarks" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/__07.15__am/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.skype.com/en/" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="https://www.linkedin.com/in/abhishek-singh-4b350b1a9" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
 

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>
<br>
<br>
<br>
<br>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>