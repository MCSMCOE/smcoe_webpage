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
          <h2>Strategic Plan</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Strategic Plan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="strategicplan">
      <div class="container">
         <!-- Default Accordion -->
         <p class ="text-justify">Stella Mary's College of Engineering, driven by a vision of imparting quality education and fostering technical and social excellence, is dedicated to a continuous process of strategic planning. With a focus on both short-term and long-term objectives, these plans aim to fortify the institution's capacities, fostering dynamism, quality consciousness, and efficiency. The institution's commitment to excellence is underscored by the development of short-term plans for 2022-2027, serving as a guiding force for the next five years.</p>
         <p class ="text-justify">This strategic initiative is a collaborative effort, drawing support from an impassioned management, the commitment of the leadership team, and insights from academic and industrial experts. The final draft undergoes meticulous review and discussion by the Governing Council, incorporating valuable suggestions to ensure effective implementation.</p>       
         <h4 class="text-justify"><strong>5-Year Strategic Plan (2022-2027) - Stella Mary’s College of Engineering</strong></h4> 
         <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                1. Governance 
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>1.1 Enhance Diversity in Recruitment:</strong>
                  <li>Initiate quality enhancement methods.</li>
                <li>Identify global education trends and implement necessary changes.</li>
                <li>Improve transparency and communication.</li>
                <li>Align annual reviews with strategic goals.</li>
                <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                <li>Recruit diversified faculty.</li>
                <li>Conduct training needs analysis.</li>
                <strong>1.2 Governance Models:</strong>
                  <li>Establish audit committees.</li>
                <li>Decentralize leadership.</li>
                <li>Create statutory committees.</li>
                <li>Implement fair appraisal systems.</li>
                <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                <li>Recruit diversified faculty.</li>
                <li>Appraise faculty and staff annually.</li>
                </div>
                <div class="accordion-body">
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                2. Physical Resources
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>2.1 World-Class Environment:</strong>
                  <li>Develop and maintain infrastructure.</li>
                  <li>Strengthen infrastructure audit.</li>
                  <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                <li>Identify potential industries for collaboration.</li>
                <li>Construct health center and additional facilities.</li>
                <li>Enhance sports facilities.</li>
                <li>Reduce power usage.</li>
                <strong>2.2 Library Enhancement:</strong>
                  <li>Improve library resources.</li>
                  <li>Increase online subscriptions.</li>
                  <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                <li>Increase library investment.</li>
                <li>Implement RFID system.</li>
                <li>Develop an Institutional Repository.</li>
                <strong>2.3 ICT-Enabled Services:</strong>
                  <li>Provide computing facilities.</li>
                  <li>Enhance bandwidth.</li>
                  <li>Record video lectures.</li>
                  <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                <li>Develop ICT-enabled classrooms.</li>
                <li>Upgrade firewall and internet bandwidth.</li>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                3. Human Resources
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>3.1 Attractiveness for Students and Faculty:</strong>
                  <li>Attract students nationwide.</li>
                  <li>Recruit and retain quality faculty.</li>
                  <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                <li>Maintain a 1:15 faculty-student ratio.</li>
                <li>Recruit 30% of faculty with PhDs.</li>
                <strong>3.2 Personal and Professional Development:</strong>
                  <li>Conduct training needs analysis</li>
                  <li>Organize development programs.</li>
                  <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                <li>Increase budget for faculty projects</li>
                <li>Send faculty and staff for industry training.</li>
                </div>
              </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  4. Education Processes
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>4.1 Quality Education:</strong>
                    <li>Enhance teaching-learning processes.</li>
                    <li>Implement transparent evaluation.</li>
                    <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                    <li>Increase success rate.</li>
                    <li>Ensure 100% placement.</li>
                    <li>Promote higher education and entrepreneurship.</li>
                    <strong>4.2 Multidisciplinary Courses:</strong>
                    <li>Strengthen existing programs.</li>
                    <li>Provide academic freedom.</li>
                    <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                    <li>Design 50 multidisciplinary projects.</li>
                    <li>Win 10 best project awards</li>
                    <strong>4.3 Technology-Enabled Pedagogy:</strong>
                    <li>Use blended teaching methods.</li>
                    <li>Encourage ICT awareness.</li>
                    <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                    <li>Record and upload video lectures.</li>
                    <li>Develop an LMS.</li>
                    <strong>4.4 Scholastic and Co-Scholastic Activities:</strong>
                    <li>Provide support services.</li>
                    <li>Enhance co-curricular activities.</li>
                    <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                    <li>Increase student participation in activities.</li>
                    <li>Conduct training sessions and events.</li>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  5. Research and Innovation
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>5.1 Centers of Excellence:</strong>
                    <li>Identify core research areas.</li>
                    <li>Establish research centers.</li>
                    <li>Encourage innovation and entrepreneurship.</li>
                    <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                    <li>Establish 10 research laboratories.</li>
                    <li>Sign 20 MOUs for collaborative research.</li>
                    <strong>5.2 Research Quality Enhancement:</strong>
                    <li>Encourage publication in high-quality journals.</li>
                    <li>Strengthen ties with research organizations.</li>
                    <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                    <li>Have 50 sponsored research projects.</li>
                    <li>Achieve an h-index of 20.</li>
                    <strong>5.3 Culture of Innovation:</strong>
                    <li>Develop systems for awareness.</li>
                    <li>Create an innovation fund.</li>
                    <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                    <li>Build an innovation hub.</li>
                    <li>Generate income through consultancy.</li>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  6. Building Relationships
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>6.1 Transformational Education Experiences:</strong> 
                    <li>Collaborate for educational experiences.</li>
                    <li>Establish a career guidance cell.</li>
                    <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                    <li>Strengthen the institution's reputation.</li>
                    <li>Motivate students for national and international competitions.</li>
                    <strong>6.2 Alumni Interaction:</strong> 
                    <li>Track and enhance alumni visits.</li>
                    <li>Involve alumni in curriculum design.</li>
                    <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                    <li>Increase alumni visitors.</li>
                    <li>Conduct 10 alumni courses/workshops per year.</li>
                    <strong>6.3 Industry Interaction:</strong> 
                    <li>Impart industry-ready skills.</li>
                    <li>Involve the industry in curriculum design.</li>
                    <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                    <li>Increase industry expert content delivery.</li>
                    <li>Conduct 10 technology trainings per year.</li>
                    <strong>6.4 Community Interaction:</strong> 
                    <li>Engage students in community problem-solving.</li>
                    <li>Collaborate with local bodies and NGOs.</li>
                    <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                    <li>Organize 10 extension activities per year.</li>
                    <li>Sign 20 MoUs with NGOs.</li>
                    <strong>6.5 Widespread Visibility:</strong> 
                    <li>Popularize vision, mission, and values.</li>
                    <li>Engage in branding and marketing.</li>
                    <h6 class="text-justify"><strong>Metrics and Targets:</strong></h6>
                    <li>Increase NIRF perception score.</li>
                </div>
              </div>
              
              
          </div>
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