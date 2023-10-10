<?php
$servername = "172.18.0.1";
$username = "root";
$password = "root";
$db="mysql";
$port="33070";  
$dbcon = mysqli_connect($servername, $username, $password,$db,$port);
if (!$dbcon) {
    die("Connection failed: " .  mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Stella Mary's College of Engineering</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!--<h1><a href="index.html">SMCE</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="https://9509e6cb.webdocs.pages.dev/SMCE%20ERP.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="Management.html">Management</a></li>
              <li><a href="principaldesk.html">Principal's Desk</a></li>
              <li><a href="oc.html">Organisation Chart</a></li>
              <li><a href="iqac.html">IQAC</a></li>
              <li><a href="strategicplan.html">Strategic Plan</a></li>
              <li><a href="codeofconduct.html">Code of Conduct</a></li>
              <li><a href="mandatorydisclosure.html">mandatory Disclosure</a></li>
              <li><a href="#">Facts & Figures</a></li>
            </ul>
          <li class="dropdown"><a href="#"><span>Academics</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Department - Under Graduate</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="civil.html">Civil Engineering</a></li>
                  <li><a href="cse.html">Computer Science and Engineering</a></li>
                  <li><a href="ece.html">Electronics and Communication Engineering</a></li>
                  <li><a href="eee.html">Electrical and Electronics Engineering</a></li>
                  <li><a href="mech.html">Mechanical Engineering</a></li>
                  <li><a href="aids.html">Artificial Intelligence and Data Science</a></li>
                  <li><a href="sh.html">Science and Humanities</a></li>
                </ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Department - Post Graduate</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="mecse.html">M.E Comuputer Science and Engineering</a></li>
                    <li><a href="meise.html">M.E Industrial Safety Engineering</a></li>
                    <li class="dropdown"><a href="#more-services" href="#"><span>Master of Business Administration</span> <i class="bi bi-chevron-right"></i></a>
                      <ul>
                        <li><a href="#">Operations Management</a></li>
                        <li><a href="#">Human Resources Management</a></li>
                        <li><a href="#">Finncial Management</a></li>
                        <li><a href="#">Business Analytics Management</a></li>
                        <li><a href="#">Marketing Management</a></li>
                        <li><a href="#">Logistics & Supply Chain Management</a></li>
                      </ul>  
                  </ul>  
              <li><a href="placement_home.html">Placement</a></li>
              <li><a href="#">Academic Time-Table</a></li>
              <li><a href="#">Academic Calender</a></li>
              <li><a href="#">Admission Criteria</a></li>
              <li><a href="#">LMS</a></li>
            </ul>
            <li class="dropdown"><a href="#"><span>Research</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Code of Ethics</a></li>
                <li><a href="#">Publications</a></li>
                <li><a href="#">Sponsored Projects</a></li>
                <li><a href="#">Startup Policy</a></li>
                <li><a href="#">IPR CELL</a></li>
                <li><a href="#">MoU</a></li>
              </ul>
          <li><a class="nav-link scrollto" href="Sports.html">Sports</a></li>
          <li class="dropdown"><a href="#"><span>Students' Zone</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="#">Clubs</a></li>
              <li><a href="#">Professional Ethics</a></li>
              <li><a href="#">Capability Enhancement</a></li>
              <li><a href="#">E-Learning</a></li>
              <li><a href="#">Internship</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Campus Activities</a></li>
              <li><a href="#">Library</a></li>
              <li><a href="#">NPTEL</a></li>
              <li><a href="#">DELNET</a></li>
              <li><a href="#">Alumni Association</a></li>
              <li><a href="#">SWYAM - MOOC</a></li>
              <li><a href="#">Sports</a></li>
                <ul>
          <li><a class="nav-link scrollto" href="placement_home.html">Placement</a></li>
          <li><a class="nav-link scrollto" href="iqac.html">IQAC</a></li>    
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          </ul>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact us</a></li>
          <li><a class="getstarted scrollto" href="#CAMPS">CAMPS LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container justify-content-center">

            <h2><a href=""></a>Facilities</h2>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/facilities/events-1.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">ICT Class Room</a></h5>
                  <p class="fst-italic text-center">All Classrooms are equiped with ICT</p>
                  <p class="card-text">Classrooms are one of the main platforms where effective learning takes place. Special attention is given in designing the classrooms so that our students get effective learning from our teachers and facilitate participative learning. The Class rooms are well ventilated spacious and are technology enhanced classrooms referred to as "smart" classrooms. The classrooms are augmented with a variety of technological tools that can enhance the learning environment. These classrooms offer an enhancement to: an Extron Touch-Panel Control System (attached to the instructor's desk); a PC; a Data Projector; a DVD/VHS combo unit; and an incorporated audio system. They also have an interactive whiteboard or tablet powered by SMART technologies. The furniture used in classrooms is of un-compromised international quality to enable students for 8 hours of comfortable and continues learning.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/facilities/Lib.jpeg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Library</a></h5>
                    <p class="fst-italic text-center"></p>
                    <p class="card-text"> Classrooms are one of the main platforms where effective learning takes place. Special attention is given in designing the classrooms so that our students get effective learning from our teachers and facilitate participative learning. The Class rooms are well ventilated spacious and are technology enhanced classrooms referred to as "smart" classrooms. The classrooms are augmented with a variety of technological tools that can enhance the learning environment. These classrooms offer an enhancement to: an Extron Touch-Panel Control System (attached to the instructor's desk); a PC; a Data Projector; a DVD/VHS combo unit; and an incorporated audio system. They also have an interactive whiteboard or tablet powered by SMART technologies. The furniture used in classrooms is of un-compromised international quality to enable students for 8 hours of comfortable and continues learning.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/facilities/transport.jpeg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Transport</a></h5>
                    <p class="fst-italic text-center">Operates on all working days</p>
                    <p class="card-text">The college has its own fleet of Buses in all possible routes making transportation easy for the staff and students from all areas and colonies of the city.In addition city bus facility is also available.</p>
                  </div>
                </div>
              </div>
              <div id="" class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/facilities/bhostel.jpeg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Boys Hostel</a></h5>
                    <p class="fst-italic text-center">Home away from Home</p>
                    <p class="card-text">The Institute has a separate Boys/Girls hostel that is strategically located to be accessible from all the areas yet maintaining a calm and secure environment. Each hostel room can accommodate 3 to 4 students with individual bed, clean and hygienic rest rooms for all the students surrounded by plush greenery. The hostel mess is located inside the hostel premise serving to the taste of all cuisines. Each hostel is facilitated with open play ground, private canteen Internet cafes, Gym, Music rooms, Indoor games Room, TV room, STD Booth, General/Grocery Shop, a recreation hall and a separate study hall. Both the hostels will give a feeling of a home away from home for the students.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/facilities/ghostel.jpeg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Girls Hostel</a></h5>
                    <p class="fst-italic text-center">Home away from Home</p>
                    <p class="card-text">The Institute has a separate Boys/Girls hostel that is strategically located to be accessible from all the areas yet maintaining a calm and secure environment. Each hostel room can accommodate 3 to 4 students with individual bed, clean and hygienic rest rooms for all the students surrounded by plush greenery. The hostel mess is located inside the hostel premise serving to the taste of all cuisines. Each hostel is facilitated with open play ground, private canteen Internet cafes, Gym, Music rooms, Indoor games Room, TV room, STD Booth, General/Grocery Shop, a recreation hall and a separate study hall. Both the hostels will give a feeling of a home away from home for the students.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/facilities/canteen.jpeg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Cafeteria</a></h5>
                    <p class="fst-italic text-center"></p>
                    <p class="card-text">College Cafeteria is a dynamic and social network dedicated to bring students, academics and enterprises together. The canteen provides a platform to unwind, relax, while at the same time providing an option for purposeful communication. It provides excellent service to the students, providing snacks and food items at a reasonable rate to the students.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/Culturals/sports2.jpg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Sports</a></h5>
                    <p class="fst-italic text-center"></p>
                    <p class="card-text">It is an established fact that for every human being, sports are second to oxygen in maintaining a good health leading to a happy life. The role of sports has a significant place among other extra-curricular activities. In this regard, the academic institutions act as a nucleus whose impact on the youngsters matters a lot in the society.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/facilities/conference.jpeg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Conference Hall</a></h5>
                    <p class="fst-italic text-center"></p>
                    <p class="card-text">We have a wide range of rooms from state-of-the-art seminar rooms to lecture theatres to exam halls, not forgetting our impressive Drama Theatre. With-in these rooms you will find AV equipment which is of the highest standard.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/facilities/seminar.jpeg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Seminar Hall</a></h5>
                    <p class="fst-italic text-center"></p>
                    <p class="card-text">Air-conditioned seminar halls with a minimum of 150 seating capacity each are available in the campus. They are well equipped with audio and visual systems. Events such as small meetings and intra department level seminars/symposia, etc are organized here.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/CSE/BD.jpg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">BigData Laboratory</a></h5>
                    <p class="fst-italic text-center">Sunday, September 26th at 7:00 pm</p>
                    <p class="card-text">Big data lab is typically equipped with internet access. Computers in this lab are typically arranged in rows, so that every workstation has a similar view of one end of the room to facilitate lecturing or presentations, to facilitate small group work. The Big Data Lab is equipped with 40 Lenovo Desktop computers with Intel i7 Processor, 64 bit OS, 8GB Ram, on screen projector & centralized AC. Programming and Data Structures, Object Oriented Programming Systems, Operating Systems, Internet Programming, Grid and Cloud Computing Lab practical classes are conducted in this Laboratory.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/CSE/BD.jpg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Campus Activities</a></h5>
                    <p class="fst-italic text-center">Sunday, September 26th at 7:00 pm</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                  </div>
                </div>
              </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/facilities/events-2.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Student Zone</a></h5>
                  <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p>
                  <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                </div>
              </div>
  
            </div>
          </div>
  
        </div>
      </section><!-- End Events Section -->
  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Stella Mary's College of Engineering</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Designed by <a href="https://stellamaryscoe.edu.in/">SMCE Media Cell</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>