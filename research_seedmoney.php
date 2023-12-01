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
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  

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
    <img src="https://webdocs.pages.dev/assets/img/animlogo1.gif" alt="Loading...">
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
        <a href="index.php"><img src="https://9509e6cb.webdocs.pages.dev/SMCE%20ERP.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="Management.php">Management</a></li>
              <li><a href="principaldesk.php">Principal's Desk</a></li>
              <li><a href="oc.php">Organisation Chart</a></li>
              <li><a href="iqac.php">IQAC</a></li>
              <li><a href="strategicplan.php">Strategic Plan</a></li>
              <li><a href="codeofconduct.php">Code of Conduct</a></li>
              <li><a href="mandatorydisclosure.php">mandatory Disclosure</a></li>
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
              <li><a href="#">Academic Time-Table</a></li>
              <li><a href="#">Academic Calender</a></li>
              <li><a href="#">Admission Criteria</a></li>
              <li><a href="#">LMS</a></li>
            </ul>
            <li class="dropdown"><a href="#"><span>Research</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="research_codeofethics.php">Team & Code of Ethics</a></li>
                <li><a href="research_publications.php">Publications</a></li>
                <li><a href="research_seedmoney.php">Stella Mary's Seed Money</a></li>
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
                <li><a href="yrc">Yoth Red Cross</a></li>  
                </ul>  
              <li><a href="#">Institution Innovation Council</a></li>
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
          <li><a class="getstarted scrollto" href="https://camps.stellamaryscoe.edu.in/CAMPS/CommonJSP/signin.jsp">CAMPS LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

   
          <h2 class="justify-content-center">Stella Mary’s - Seed Money Scheme (SM-SMS)</h2>
   
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="principaldesk" data-aos="fade-in">
      <div class="container">
       
    <!-- ======= About Section ======= -->
    <section id="about" class="about shadow p-4">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-start">
         
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 justify-content-xl-start">
          
    
            <p class="p-3 fst-italic text-justify"  >
              <i class="bx bxs-quote-alt-left quote-icon-left text-secondary h4 mr-3"></i>
              The Stella Mary’s - Seed Money Scheme (SM-SMS), offered by Stella Mary’s College of Engineering, has the primary goal of fostering research and innovation among both faculty and students. This scheme provides seed funding to initiate or sustain research endeavours. Its primary objective is to enhance the chances of securing future financial support from external organizations. Applicants are required to effectively showcase that their proposed project introduces a novel research trajectory with the potential to attract external funding. Projects already backed by alternative funding sources will not be eligible for consideration. 
              <i class="bx bxs-quote-alt-right quote-icon-right text-secondary h4 ml-3"></i>
            </p>
            <p>Priority will be granted to proposals that:</p>
            <ul>
            <li>Demonstrate significant potential for securing external funding.</li>
            <li>Hold substantial agricultural and societal significance.</li>
            <li>Enhance and cultivate interdisciplinary research collaborations.</li>
            </ul>
            <ul></ul>
            <p><strong>ELIGIBILITY CRITERIA</strong></p>       
              <ul><i class="bi bi-check-circle "></i> Regular faculty members along with maximum of four students are eligible to apply under the scheme. The Principal Investigator must be the supervisor guiding the project.</ul>
              <ul><i class="bi bi-check-circle"></i> Students and supervisors should establish clear project milestones. Progress report should be submitted every month end to track the project's development.</ul>
              <ul><i class="bi bi-check-circle"></i> If a proposal is turned down by the Seed Grant approval committee, the PI is allowed to submit a new proposal in the next semester.</ul>
              <ul><i class="bi bi-check-circle"></i> In case of resignation before completion of SM-SMS, the departing PI must transfer their responsibilities to another faculty member, who will assume full responsibility and ensure that he/she will submit appropriate report in time.</ul>
              <ul><i class="bi bi-check-circle"></i> After project completion, the Principal Investigator (PI) is required to provide a detailed report detailing the accomplishments of the project. Additionally, the PI is expected to deliver a formal presentation within the relevant department, addressing the committee. Subsequently, the PI must submit a utilization certificate in accordance with the provided format.</ul>
            </ul>
            <p><strong>SUBMISSION OF PROPOSAL</strong></p>
            <p><ul>Proposal submission will commence during the initial month of the semester. Project proposals must adhere to the prescribed format for submission. The duration of the Seed Money Scheme (SMS) is limited to a maximum of one semester and no extensions beyond this period will be granted.</ul></p>
            <p><strong>COMPLETION OF PROJECT</strong></p>
            <p><ul>PI will be responsible to submit three copies of project completion report along with final Utilization Certificate.</ul></p>
            <p><strong>EVALUATION OF PROJECT</strong></p>
            <p><ul>The date of proposal evaluation meeting will be notified by the office of the R&D.</ul></p>
            <p><strong>ALLOCATION OF FUNDS</strong></p>
            <p><ul>The funding support under this scheme will be up to Rs. 10,000 (for a semester). No Additional grant will be provided. Half of the funding will be released upon reaching 50% project completion, and the remaining half will be provided upon the successful conclusion of the project. If necessary, an amount less than 50% can be obtained at the project's initial stage by submitting a formal requisition with proper justification to the principal through the Research and Development (R&D) cell.</ul></p>
            <p>The provided funding covers expenses related to the following activities:</p>
            <ul>
                <li>Acquisition of minor equipment/software directly associated with the proposal, not currently accessible within SMCE.</li>
                <li>Procurement of consumables.</li>
                <li>Financial assistance for travel and registration to attend conferences within India only</li>
                <li>Contingency expenditures, including books, annual membership fees for technical societies (excluding subscription charges), and similar essentials.</li>
                <li>Any additional essential items, contingent upon prior approval from the Principal.</li>
            </ul>
            <p><strong>ADMINISTRATION OF GRANTS</strong></p>
            <p><ul>The Principal Investigator is responsible for the administration of granted funds. In particular, he/she must be certain that over-expenditures do not occur.</ul></p>
            <p><strong>APPROVAL COMMITTEE</strong></p>
            <p><ul>The committee for evaluating the initial proposal and the final completion report will be notified by the office of R&D.</ul></p>
        
        </div>
        </div>

        <section id="features" class="features">
            <div class="container">
      
              <div class="section-title" data-aos="fade-up">
                <h2>Downloads</h2>
                <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
              </div>
      
              <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                <div class="col-lg-3 col-md-4">
                  <div class="icon-box">
                    <i class="ri-file-list-3-line" style="color: #ffbb2c;"></i>
                    <h3><a href="https://webdocs.pages.dev/assets/docs/r&d/Proposal-Format-SM-SMS.docx">Proposal Format (doc)</a></h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0 justify-content-center">
                  <div class="icon-box">
                    <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                    <h3><a href="https://webdocs.pages.dev/assets/docs/r&d/Proposal-Format-SM-SMS.pdf">Proposal Format (pdf)</a></h3>
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