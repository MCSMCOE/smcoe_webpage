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

        <div class="d-flex justify-content-between align-items-center">
          <h2>Code of Conduct</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Code of Conduct</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">
  
          <div class="section-title">
            <h2>Code of Conduct</h2>
            <p>Student is required to observe discipline and decorous behavior both inside and outside the college and not to indulge in any activity, which will tend to bring down the prestige of the University/college.</p>
          </div>
  
          <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
              <h3 class="resume-title">Students'</h3>
              <div class="resume-item pb-0">
                <h4>Discipline</h4>
                <p><em>All are expected to maintain a very high standard of discipline inside the college campus. Their conduct should be appreciable at all times, at all places and on all occasions.</em></p>
                <ul>
                  <li>College Timing is 9.00 a.m. to 4.20 p.m. Students should attend all classes regularly and punctually. College bus will leave the campus by 4.30 p.m.</li>
                  <li>Students coming late can enter the class only with the permission of the Head of the respective department and no student is permitted to leave the class without the permission of the Head of the respective department.</li>
                  <li>When students avail leave, prior submission of leave form duly signed by the parent is strictly followed.</li>
                  <li>Students should wear the Identity Card on entering the college campus or else they will not be permitted.</li>
                  <li>With a view to achieve discipline and uniformity among students, uniform is insisted in the campus. Wearing overcoat is a must for Workshop and laboratory classes as per the safety rules.</li>
                  <li>Students should submit assignments, record works; home works etc., in time even though they engage themselves in other co- curricular activities of the college.</li>
                  <li>In case of Parents/Guardians meeting being conducted to discuss various issues of students, it is compulsory for Parents/Guardians to attend without fail. healthy co-operation in this regard is ever solicited.</li>
                  <li>Students can take part in inter - college competitions, TV/Radio programmes, only after getting the prior permission from the authorities concerned.</li>
                  <li>Strict discipline should be maintained in the College campus. Non-compliance with the guidelines or regulations of the college will be severely dealt with.</li>
                </ul>
              </div>
  
              <!--<h3 class="resume-title">Education</h3>-->
              <div class="resume-item">
                <h4>It is the responsibility of the students</h4>
                <!--<h5>2015 - 2016</h5>
                <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
              </div>
              <div class="resume-item">
                <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                <h5>2010 - 2014</h5>-->
                <ul>
                    <li>To maintain the campus eco-friendly.</li>
                    <li>To maintain dress code.</li>
                    <li>Boys are not supposed to wear unnecessary wearing in their ears, neck and hands.</li>
                    <li>Not to deface or write anything on the walls / furniture.</li>
                    <li>Not to sit on the parapet walls and flight of steps.</li>
                    <li>To be punctual for all theory and laboratory classes as well as for guest lectures and meetings.</li>
                    <li>To stay till the end of the Meetings/ Seminars.</li>
                    <li>To give due respect to prayer song, national anthem, faculty, staff and other elders.</li>
                    <li>To extend good hospitality during programmes.</li>
                    <li>Maintain a cordial relationship with others especially maintaining harmony in a multicultural environment.</li>
                    <li>To conserve energy by switching off fans and lights when not in use.</li>
                    <li>To take care that the college properties are not damaged.</li>
                    <li>Not to get involved in ragging and if noticed the matter will be informed to the local police station for necessary action (as per the direction of AICTE, Anna University & Government of Tamilnadu)
                    </li>
                    </ul>    
            </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <h3 class="resume-title">Code of conduct for Faculty</h3>
              <div class="resume-item">
                <!--<h4>Senior graphic design specialist</h4>
                <h5>2019 - Present</h5>
                <p><em>Experion, New York, NY </em></p>-->
                <ul>
                  <li>The teacher shall discharge the duties assigned honestly and diligently.</li>
                  <li>The teacher should perform the academic duties such as lecturing, demonstration, invigilation, assessment etc.</li>
                  <li>The teacher should avoid partiality in the assessment of students.</li>
                  <li>The teacher should avoid the discrimination of castes, creed or religion race or sex with the students and his/her colleagues.</li>
                  <li>The teacher should obey the conditions of the concern authorities, officers, administrative and academic departments of the college.</li>
                  <li>The teacher should not involve in any kind of Anti-academic activities directly or indirectly.</li>
                  <li>The teacher should behave very modestly with male and female students and other colleagues.</li>
                  <li>The teacher should strictly abide the laws related to intoxicating drinks or drugs.</li>
                  <li>The teacher should not absent himself/herself from duty without prior permission from the Principal of the college.</li>
                  <li>Teachers are eligible for leave as per the prevailing rules as laid down by the Management from time to time.</li>
                  </ul>
              </div>
              <div class="resume-item">
                <h4>“Stella Mary’s is known for the exemplary discipline among the students. Stella Mary’s believes that without good discipline it would not be possible to win academic laurels”.</h4>
                <!--<h5>2017 - 2018</h5>
                <p><em>Stepping Stone Advertising, New York, NY</em></p>-->
                <ul>
                  <li>Visitors are strictly not allowed during the Class Hours.</li>
                  <li>If a student is found guilty of indiscipline, the College reserves the right to take disciplinary action against him/her and inform the Parents/Guardians about the action so taken.</li>
                  <li>The students should not loiter in the college premises when the classes are in progress. When they are free, they should make use of the college library.</li>
                  <li>The students are not allowed to form any type of unauthorized union / meeting.</li>
                  <li>No student is allowed to entertain outsiders inside the premises of the college without prior permission from the college authorities.</li>
                  <li>Mobile phones, smoking, drinking alcohols, chewing & taking intoxicants and drugs are strictly prohibited inside the college premises.</li>
                  <li>No student is allowed to pass any derogative remarks or abuse / use filthy language or un-parliamentary words inside the college premises.</li>
                  <li>The management reserves the right to expel from the college any student on grounds of serious irregularity of attendance, insubordination, malpractice in examination or any other act of indiscipline or misconduct. The decision of the college authorities in this regard shall be the final.</li>
                  <li>Students are required to maintain not only good academic progress but also high discipline in the campus.</li>
                  <li>Students are advised to be present in the campus 10 minutes before the start of the morning session.</li>
                  <li>Students entering the campus after 9:00a.m have to sign in the late register available with the security. The late register will be submitted to the college office for necessary action.</li>
                  <li>Damaging the college property is punishable. Anybody found involved will be dealt seriously.</li>
                  <li>Damaging desk, bench, electrical item, switch board etc in the class room will lead to penalty for the respective class.</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up">
                <h3 class="resume-title">Governing Body</h3>
                <div class="resume-item pb-0">
                  <p><em>Code of conduct for Governing Body</em></p>
                  <ul>
                    <li>Should monitor the activities of the college related to academic and non- academic.</li>
                    <li>Should adhere to the recommendations of the Staff Selection Committee.</li>
                    <li>Must follow the communications, decisions received from the University, Government, AICTE etc.</li>
                    <li>Should give due consideration to the development programmes of students and faculty.</li>
                    <li>Should activate the recommendations of the Governing council.</li>
                    <li>Should ponder into the income and expenditure of the college time to time.</li>
                </ul>
                </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Principal</h3>
            <p><em>Principal is the head and the sole responsible person in addressing and solving the issues concerned with education as well as all the activities of the college.</em></p>
            <div class="resume-item">
              <!--<h4>Senior graphic design specialist</h4>
              <h5>2019 - Present</h5>
              <p><em>Experion, New York, NY </em></p>-->
              <ul>
                <li>To look into the Academic growth of the Institution.</li>
                <li>To constantly involve and monitor the teaching and training activities of the college.</li>
                <li>Guiding the Staff in planning and activation of academic training programmes like bridge course, value-added course, seminars etc.</li>
                <li>To monitor the hostel activities as a Warden.</li>
                <li>To look after the admission of students.</li>
                <li>To maintain a good discipline of the Institute.</li>
                <li>Having correspondence with the Management of the Institution.</li>
                <li>Maintenance of the records related with academic, non-academic, university, AICTE etc.</li>
                <li>Supervising the Examinations both at internal and university level.</li>
                 </ul>
            </div>
        </div>
      </section><!-- End Resume Section -->
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