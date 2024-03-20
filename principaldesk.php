<?php 
include("conn.php")
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
  <link href="https://webdocs.pages.dev/assets/img/favicon.png" rel="icon">
  <link href="https://webdocs.pages.dev/assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://webdocs.pages.dev/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://webdocs.pages.dev/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://webdocs.pages.dev/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://webdocs.pages.dev/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="https://webdocs.pages.dev/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="https://webdocs.pages.dev/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="https://webdocs.pages.dev/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  

  <!-- Template Main CSS File -->
  <link href="https://webdocs.pages.dev/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- Preloader -->

  <div class="preloader">
    <img src="https://webdocs.pages.dev/assets/img/smce%20Intro.gif" alt="Loading...">
  </div>

  <style>
       /* Preloader Styles */
       .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999; /* Make sure it's on top of everything */
    }

  </style>
  
  <script>
    window.onload = function() {
        // Hide the preloader when the page is fully loaded
        document.querySelector('.preloader').style.display = 'none';
    }
</script>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
    <!--<h1><a href="index.html">SMCE</a></h1>-->
    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="index.php"><img src="https://webdocs.pages.dev/assets/img/LOGO%20NEW1.png" alt="" class="img-fluid" style="max-width: 100%; height: auto;"></a>
</div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="Management.php">Management</a></li>
              <li><a href="principaldesk.php">Admin Desk</a></li>
              <li><a href="oc.php">Organisation Chart</a></li>
              <li><a href="iqac.php">IQAC</a></li>
              <li><a href="strategicplan.php">Strategic Plan</a></li>
              <li><a href="codeofconduct.php">Code of Conduct</a></li>
              <li><a href="mandatorydisclosure.php">Mandatory Disclosure</a></li>
              <li><a href="facilities.php">Features</a></li>
            </ul>
          <li class="dropdown"><a href="#"><span>Academics</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Department - Under Graduate</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="civil.php">Civil Engineering</a></li>
                  <li><a href="cse.php">Computer Science and Engineering</a></li>
                  <li><a href="ece.php">Electronics and Communication Engineering</a></li>
                  <li><a href="eee.php">Electrical and Electronics Engineering</a></li>
                  <li><a href="mech.php">Mechanical Engineering</a></li>
                  <li><a href="aids.php">Artificial Intelligence and Data Science</a></li>
                  <li><a href="sh.php">Science and Humanities</a></li>
                </ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Department - Post Graduate</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="mecse.php">M.E Comuputer Science and Engineering</a></li>
                    <li><a href="meise.php">M.E Industrial Safety Engineering</a></li>
                    <li class="dropdown"><a href="mba.php"><span>Master of Business Administration</span> <i class="bi bi-chevron-right"></i></a>
                      <ul>
                        <li><a href="mba.php">Operations Management</a></li>
                        <li><a href="mba.php">Human Resources Management</a></li>
                        <li><a href="mba.php">Finncial Management</a></li>
                        <li><a href="mba.php">Business Analytics Management</a></li>
                        <li><a href="mba.php">Marketing Management</a></li>
                        <li><a href="mba.php">Logistics & Supply Chain Management</a></li>
                      </ul>  
                  </ul>  
              <li><a href="placement_home.php">Placement</a></li>
              <!--<li><a href="#">Academic Time-Table</a></li>
              <li><a href="#">Academic Calender</a></li>
              <li><a href="#">Admission Criteria</a></li>-->
              <li><a href="https://camps.stellamaryscoe.edu.in/CAMPS/CommonJSP/signin.jsp">CAMPS LOGIN</a></li>
            </ul>
            <li class="dropdown"><a href="#"><span>Research</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="research_codeofethics.php">Team & Code of Ethics</a></li>
                <li><a href="research_publications.php">Publications</a></li>
                <li><a href="research_seedmoney.php">Stella Mary's Seed Money</a></li>
                <li><a href="ipr.php">Intellectual Property Rights</a></li>
                <li class="dropdown"><a href="research_seedmoney.php">Industry Collaboration<i class="bi bi-chevron-right"></i></a>
                <ul>
                <li><a href="research_mou.php">Memorandum of Understanding</a></li>
                <li><a href="https://webdocs.pages.dev/assets/docs/r&d/Starup-Policy.pdf">Startup Policy</a></li>
                </ul>
              </ul>
              
              <li class="dropdown"><a href="#"><span>Life at SMCE</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Co-curricular</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                <li><a href="cfi.php">Centre For Innovation</a></li>
                <li><a href="culturalclub.php">Cultural Club</a></li>
                <li><a href="Sports.php">Sports</a></li>
                <li><a href="lc.php">Literary Club</a></li>
                </ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Extra Curricular</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                <li><a href="nss.php">National Service Scheme</a></li>
                <li><a href="yrc.php">Youth Red Cross</a></li>  
                </ul>  
                <li><a href="facilities.php">Infrastructure/Gallery</a></li>
                <li><a href="icc.php">Internal Complaint Cell</a></li>
                <li><a href="research_codeofethics.php">Research and Development Cell</a></li>
                <li><a href="placement_home.php">Career Guidance and Placement Training Cell</a></li>
                <li><a href="mediacell.php">Media Cell</a></li>
                <li><a href="grievance.php">Grievance Redressal Cell</a></li>
                <li><a href="ar.php">Anti Ragging Cell</a></li>
                <li><a href="edc.php">Entrepreneurship Development Cell</a></li>
                <li><a href="https://www.infomirrorscloud.com/smce.webopac/Imt_frm_User_Login.aspx">Library</a></li>
              <li><a href="https://nptel.ac.in">NPTEL</a></li>
              <li><a href="https://delnet.in">DELNET</a></li>
              <li><a href="alumni.php">Alumni Association</a></li>
              <li><a href="https://swayam.gov.in">SWYAM - MOOC</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="mandatorydisclosure.php">Mandatory Disclosure</a></li>
          <li><a class="getstarted scrollto" href="https://camps.stellamaryscoe.edu.in/CAMPS/applications/application_register.jsp">Admission</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Director's Desk</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="principaldesk" data-aos="fade-in">
      <div class="container">
       
    <!-- ======= About Section ======= -->
    <section id="about" class="about shadow p-4">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-start">
          <div class="col-lg-3 order-1 order-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="https://webdocs.pages.dev/assets/img/team/D.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-9 pt-4 pt-lg-0 order-2 order-lg-1 justify-content-xl-start">

            <span class="h3 d-inline-block">
              <b class="font-weight-bold">Dr.J.Jenix Rino</b>
              <small class="h6 text-secondary">M.E.,M.B.A.,Ph.D</small>
            </span>
    
            <p class=" col-md-6 col-lg-12 p-6 fst-italic text-justify" style="line-height:1.5;"  >
              <i class="bx bxs-quote-alt-left quote-icon-left text-secondary h4 mr-6 "></i>
              I am delighted to welcome you to <strong>Stella Mary’s College of Engineering.</Strong>
Stella Mary’s College of Engineering is one of the best institutes in Kanyakumari District, Tamilnadu.  It is a decade-old institute with well-experienced and qualified faculties. It has world-class infrastructure, lab facilities, and spacious indoor and outdoor sporting facilities. Our core aspiration is to get established as a center of technical excellence. Developing the student community technically strong, with professional ethics, moral values, leadership skills,  and social responsibility are our priorities. 
	As you explore our website, I hope you are able to find all the information you are looking for, and more, about this vibrant learning community that is socially engaged as well. If you are a prospective student or a potential colleague and have any specific queries or concerns, do not hesitate to contact us.  Our motto is ‘If you walk you can reach, To reach you have to walk’, and I do hope that you have reason to partner with us in this endeavour, in whatever way you can.
              <i class="bx bxs-quote-alt-right quote-icon-right text-secondary h4 ml-3"></i>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
      </div>
    </section>
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Principal's Desk</h2>
        </div>

      </div>
    </section>
    <section class="principaldesk" data-aos="fade-in">
      <div class="container">
       
    <!-- ======= About Section ======= -->
    <section id="about" class="about shadow p-4">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-start">
          <div class="col-lg-3 order-1 order-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="https://webdocs.pages.dev/assets/img/faculty/1278.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-9 pt-4 pt-lg-0 order-2 order-lg-1 justify-content-xl-start">

            <span class="h3 d-inline-block">
              <b class="font-weight-bold">Dr.R.SURESH PREMIL KUMAR</b>
              <small class="h6 text-secondary">M.E.,Ph.D</small>
            </span>
    
            <p class="p-8 fst-italic text-justify" style="line-height: 3;"  >
              <i class="bx bxs-quote-alt-left quote-icon-left text-secondary h4 mr-6"></i>
              It is education that defines and differentiates the human being from the rest of the creatures. Education always plays a vital role in the overall development and personality of an individual. Having realized this importance, Stella Mary's College of Engineering aims to impart strong knowledge to its students who are young and are in thirst for it. Stella Mary's College of Engineering will constantly work to provide the best knowledge to its students, through a team of dedicated staff and experienced faculty. Students are sure to get a new and good academic experience at our institution which would turn them into a holistic personality at the end of their course.
              <i class="bx bxs-quote-alt-right quote-icon-right text-secondary h4 ml-3"></i>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
      </div>
    </section>
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Joint Director's Desk</h2>
        </div>

      </div>
    </section>
    <section class="principaldesk" data-aos="fade-in">
      <div class="container">
       
    <!-- ======= About Section ======= -->
    <section id="about" class="about shadow p-4">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-start">
          <div class="col-lg-3 order-1 order-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="https://webdocs.pages.dev/assets/img/faculty/1131.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-9 pt-4 pt-lg-0 order-2 order-lg-1 justify-content-xl-start">
            <span class="h3 d-inline-block">
              <b class="font-weight-bold">Dr.R.K.Madhumathi</b>
              <small class="h6 text-secondary">M.E.,Ph.D</small>
            </span>
    
            <p class="p-8 fst-italic text-justify" style="line-height: 3;"  >
              <i class="bx bxs-quote-alt-left quote-icon-left text-secondary h4 mr-6"></i>
              Welcome to the vibrant world of <strong>Research and Development </strong>at Stella Mary's College of Engineering! Our mission is to ignite curiosity and innovation, driving transformative discoveries. We foster an environment that nurtures groundbreaking ideas and interdisciplinary collaboration. Through cutting-edge research, we aim to address societal challenges and push the boundaries of knowledge. Join us in this journey of exploration and innovation, where creativity thrives and ideas come to life. Our dedicated team is committed to supporting scholars and cultivating a culture of academic excellence. Together, let's unlock new horizons and shape the future of knowledge!
              <i class="bx bxs-quote-alt-right quote-icon-right text-secondary h4 ml-3"></i>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
      </div>
    </section>
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Accounts Manager's Desk</h2>
        </div>

      </div>
    </section>
    <section class="principaldesk" data-aos="fade-in">
      <div class="container">
       
    <!-- ======= About Section ======= -->
    <section id="about" class="about shadow p-4">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-start">
          <div class="col-lg-3 order-1 order-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="https://webdocs.pages.dev/assets/img/faculty/1294.png" class="img-fluid" alt="">
          </div>


          <div class="col-md-9 pt-4 pt-lg-0 order-2 order-lg-1 justify-content-xl-start">

            <span class="h3 d-inline-block">
              <b class="font-weight-bold">Mrs.Melba Heni</b>
              <small class="h6 text-secondary">M.B.A.,</small>
            </span>
    
            <p class="p-8 fst-italic text-justify" style="line-height: 3;"  >
              <i class="bx bxs-quote-alt-left quote-icon-left text-secondary h4 mr-6"></i>
              Welcome to the <strong>Financial Services</strong> Hub at Stella Mary's College of Engineering! We're your partners in navigating financial aspects, ensuring a seamless journey throughout your education. From tuition guidance to financial aid, our team is here to support your goals. Explore our resources and connect with us for personalized assistance. Let's pave the way for your academic success together!
              <i class="bx bxs-quote-alt-right quote-icon-right text-secondary h4 ml-3"></i>
            </p>
          </div>
        </div>

      </div>
    </section>
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Talent Acquisition Head's Desk</h2>
        </div>

      </div>
    </section>
    <section class="principaldesk" data-aos="fade-in">
      <div class="container">
       
    <!-- ======= About Section ======= -->
    <section id="about" class="about shadow p-4">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-start">
          <div class="col-lg-3 order-1 order-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="https://webdocs.pages.dev/assets/img/faculty/1026.png" class="img-fluid" alt="">
          </div>


          <div class="col-md-9 pt-4 pt-lg-0 order-2 order-lg-1 justify-content-xl-start">

            <span class="h3 d-inline-block">
              <b class="font-weight-bold">Dr.Pon.Partheeban</b>
              <small class="h6 text-secondary">M.E.,Ph.D</small>
            </span>
    
            <p class="p-8 fst-italic text-justify" style="line-height: 3;"  >
              <i class="bx bxs-quote-alt-left quote-icon-left text-secondary h4 mr-6"></i>
              Welcome to Stella Mary's College of Engineering <strong>Talent Acquisition Department</Strong>

As the Head of Talent Acquisition, I extend a warm welcome to all prospective candidates. Here at Stella Mary's, we believe in nurturing talent that not only excels academically but also embodies our core values of innovation, integrity, and excellence.

We are dedicated to identifying individuals who are not just skilled, but who also demonstrate a passion for engineering and a commitment to making a positive impact in their chosen field.

Join us in shaping the future of engineering education and research. Explore the opportunities available and embark on a journey of growth and discovery with us at Stella Mary's College of Engineering.
              <i class="bx bxs-quote-alt-right quote-icon-right text-secondary h4 ml-3"></i>
            </p>
          </div>
        </div>

      </div>
      <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Public Relations Officer's Desk</h2>
        </div>

      </div>
    </section>
    <section class="principaldesk" data-aos="fade-in">
      <div class="container">
       
    <!-- ======= About Section ======= -->
    <section id="about" class="about shadow p-4">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-start">
          <div class="col-lg-3 order-1 order-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="https://webdocs.pages.dev/assets/img/faculty/1094.png" class="img-fluid" alt="">
          </div>


          <div class="col-md-9 pt-4 pt-lg-0 order-2 order-lg-1 justify-content-xl-start">

            <span class="h3 d-inline-block">
              <b class="font-weight-bold">Mrs.Arokia Latha</b>
              <small class="h6 text-secondary">M.Sc.,M.Phil</small>
            </span>
    
            <p class="p-8 fst-italic text-justify" style="line-height: 3;"  >
              <i class="bx bxs-quote-alt-left quote-icon-left text-secondary h4 mr-6"></i>
              Welcome to Stella Mary's College of Engineering's <strong>Public Relations Department</Strong>

As the Public Relations Officer, it's my pleasure to welcome you to our vibrant community. At Stella Mary's, we are dedicated to fostering meaningful connections and sharing the inspiring stories that shape our institution's identity.

Through strategic communication initiatives, we aim to highlight the achievements, events, and innovations that make Stella Mary's a dynamic hub of learning and growth. Whether you're a prospective student, alumni, industry partner, or member of the wider community, we invite you to engage with us and be part of our journey.

Explore our website to discover the latest news, upcoming events, and opportunities to connect with us. Together, let's build bridges, forge partnerships, and create a brighter future for Stella Mary's College of Engineering.
              <i class="bx bxs-quote-alt-right quote-icon-right text-secondary h4 ml-3"></i>
            </p>
          </div>
        </div>

      </div>
    </section>
    </section>
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Quality Auditor's Desk</h2>
        </div>

      </div>
    </section>
    <section class="principaldesk" data-aos="fade-in">
      <div class="container">
       
    <!-- ======= About Section ======= -->
    <section id="about" class="about shadow p-4">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-start">
          <div class="col-lg-3 order-1 order-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="https://webdocs.pages.dev/assets/img/faculty/1054.png" class="img-fluid" alt="">
          </div>


          <div class="col-md-9 pt-4 pt-lg-0 order-2 order-lg-1 justify-content-xl-start">

            <span class="h3 d-inline-block">
              <b class="font-weight-bold">Dr.K.Ezhil Vignesh</b>
              <small class="h6 text-secondary">M.E.,Ph.D</small>
            </span>
    
            <p class="p-8 fst-italic text-justify" style="line-height: 3;"  >
              <i class="bx bxs-quote-alt-left quote-icon-left text-secondary h4 mr-6"></i>
              Welcome to Stella Mary's College of Engineering's <strong>Quality Assurance Department</Strong>, overseen by our Institutional Quality Assurance Cell (IQAC)!

As the Quality Auditor, it's my privilege to ensure that our institution maintains the highest standards of academic excellence and operational efficiency. Through rigorous assessment and continuous improvement initiatives, we are committed to enhancing the quality of education and research offered at Stella Mary's.

Our IQAC serves as the cornerstone of our commitment to quality enhancement, driving initiatives that foster innovation, accountability, and student-centric learning experiences. We invite you to explore our quality assurance framework and join us in our journey towards excellence.

Together, let's uphold the values of integrity, transparency, and academic rigor that define Stella Mary's College of Engineering.
              <i class="bx bxs-quote-alt-right quote-icon-right text-secondary h4 ml-3"></i>
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <!--<div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>-->
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>QUICK LINKS 1</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">NIRF</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">ANTI RAGGING CELL</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">GRIEVANCE REDRESSAL CELL</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">INTERNAL COMPLIANCE CELL</a></li>
                <li><i class="bx bx-chevron-right "></i> <a href="mandatorydisclosure.php">MANDATORY DISCLOSURE</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>QUICK LINKS 2</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">ONLINE ADMISSION</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://webdocs.pages.dev/assets/docs/iqac/naac/NAAC%20CERTIFICATION%20-%20CYCLE%201.pdf">NAAC CERTIFICATE</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://webdocs.pages.dev/assets/docs/iqac/naac/NAAC%20SSR%20REPORT-CYCLE%201.pdf">NAAC SSR</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://css.aicte-india.org/login">AICTE Centralised Support System</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="OnlinePaymentPrivacyPolicy.php">Online Payment - Privacy Policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Downloads</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Student Undertaking form</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://webdocs.pages.dev/assets/docs/cgptc/PlacementUndertaking.pdf">Placement Undertaking form</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Faculty Undertaking form</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://webdocs.pages.dev/assets/docs/r&d/Proposal-Format-SM-SMS.docx">Stella Mary's Seed Money (Doc)</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://webdocs.pages.dev/assets/docs/r&d/Proposal-Format-SM-SMS.pdf">Stella Mary's Seed Money (Pdf)</a></li>
              </ul>
            </div>
  
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
            Designed & Maintained by <a href="mediacell.php">SMCE Media Cell</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="index.php" class="scrollto">Home</a>
            <a href="" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://webdocs.pages.dev/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="https://webdocs.pages.dev/assets/vendor/aos/aos.js"></script>
  <script src="https://webdocs.pages.dev/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://webdocs.pages.dev/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="https://webdocs.pages.dev/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://webdocs.pages.dev/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://webdocs.pages.dev/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="https://webdocs.pages.dev/assets/js/main.js"></script>

</body>

</html>