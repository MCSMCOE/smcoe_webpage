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
                <li><a href="yrc.php">Yoth Red Cross</a></li>  
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
   <!-- <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Internal Quality Assurance Cell (IQAC)</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Internal Quality Assurance Cell (IQAC)</li>
          </ol>
        </div>-->

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="Alumni">
      <div class="container text-center">
        <br>
        <h2>Alumni Association</h2>
      </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Cource Details Section ======= -->

    <div class="container" data-aos="fade-up">

      <div class="row text-justify">
          <h3> Overview</h3>
          <p class="text-justify">An Alumni association is an association of graduates or more broadly, former students. There associations often organize social events, publish newsletters or magazine. Many provide a variety of benefits and services that help alumni maintain connections to their educational institution and fellow graduates. Today alumni associations involves graduate of all age groups and demographics.</p>
          </div>
        
  </section><!-- End Cource Details Section -->

  <!-- ======= Cource Details Tabs Section ======= -->
  <section id="cource-details-tabs" class="cource-details-tabs">
    <div class="container text-justify" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Vision & MISSION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Objective</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Activities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">People</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Objectives and Activities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Meeting Minutes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Accreditation Certificates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-8">NAAC SSR & AQAR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Best Practice</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Annual Report</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-11">institutional Distinctiveness</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-12 details order-2 order-lg-1">
                  <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-10 d-flex align-items-stretch mb-5 mb-lg-0 text-justify">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">VISION</a></h4>
                <li>Improve the relationship of Alumni with Faculty, students and the College management.</li>  
                <li>Develop Alumni programs that encourage alumni fellowship and promote the institution’s physical, moral and spiritual development.</li>
                <li>Support the institution in recruiting students.</li>
                <li>Promoting intellectual, spiritual and emotional connections among the institution members.</li>
                <li>Provide the institution and its programs with economic assistance.</li>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-10 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">MISSION</a></h4>
              <li>The mission is to provide a beneficial relationship between the Stella Mary’s Alumni and the College by offering their support to the students for the growth of the institution.</li>  
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section --></div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row ">
                <!-- ======= Team Section ======= -->
                <section id="services" class="services">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6 col-lg-10 d-flex align-items-stretch mb-5 mb-lg-0">
                          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Objectives</a></h4>
                            <li>To keep a roster of all alumni of College and their pertinent data.</li>  
                            <li>Maintaining the updated and current information of all alumni.</li>
                            <li>To encourage, foster and promote close relations among the alumni themselves.</li>
                            <li>To promote a sustained sense of belonging to the alma mater its graduates,faculties and students to the Alumni</li>
                            <li>To guide and assist alumni who have recently completed their courses of study.</li>
                            <li>To keep them engaged in productive pursuits useful to the society.</li>
                            <li>To provide a forum for the alumni for exchange of ideas on academic cultural & social issues of the day by organizing & coordinating reunion activities of the alumni.</li>
                            <li>To let the alumni acknowledge their gratitude to their alma mater.</li>
                          </div>
                        </div>
              
                      </div>
              
                    </div>
                  </section>

    <!-- End Team Section -->
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row">
                <!-- ======= Team Section ======= -->
                <section id="services" class="services">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6 col-lg-10 d-flex align-items-stretch mb-5 mb-lg-0">
                          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Activities</a></h4>
                            <li>Platform for meeting and exchange of ideas among the alumni.</li>  
                            <li>Assist students for career guidance program.</li>
                            <li>Technical seminars by alumni in reputed organization.</li>
                            <li>Keep alumni posted through the website.</li>
                            <li>Getting feedback for constant improvisation.</li>
                          </div>
                        </div>

                      </div>
              
                    </div>
                  </section>
                <!-- End Team Section -->
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              
            
              
              
                <section id="team" class="team section-bg">
                    <div class="container">
              
                      <div class="section-title" data-aos="fade-up">
                        <h2>Patrons</h2>
                        <p></p>
                      </div>
              
                      <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                          <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                              <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                              <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                              </div>
                            </div>
                            <div class="member-info">
                              <h4 class="title"><a href="">Dr.Nazarth Charles</a></h4>
                              <h4>Chairman</h4>
                              <span></span>
                            </div>
                          </div>
                        </div>
            
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                          <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                              <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                              <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                              </div>
                            </div>
                            <div class="member-info">
                              <h4 class="title"><a href="">Dr .R. Suresh Premil Kumar</a></h4>
                              <h4>Principal</h4>
                              <span></span>
                            </div>
                          </div>
                        </div>

            
                        <div class="section-title" data-aos="fade-up">
                          <h2>Faculty Coordinators</h2>
                          <p></p>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                          <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                              <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                              <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                              </div>
                            </div>
                            <div class="member-info">
                              <h4 class="title"><a href="">Mr. C. Senthil Kumar</a></h4>
                              <span>Assistant Professor, CSE</span>
                            </div>
                          </div>
                        </div>
            
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                          <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                              <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                              <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                              </div>
                            </div>
                            <div class="member-info">
                              <h4 class="title"><a href="">Mrs. V.Jino Shiny</a></h4>
                              <span>Assistant Professor, ECE</span>
                            </div>
                          </div>
                        </div>
            
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                              <div class="member-img">
                                <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                                <div class="social">
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                              </div>
                              <div class="member-info">
                                <h4 class="title"><a href="">Mrs.J.Jasmine</a></h4>
                                <span>Assistant Professor, EEE</span>
                              </div>
                            </div>
                          </div>
            
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                              <div class="member-img">
                                <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                                <div class="social">
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                              </div>
                              <div class="member-info">
                                <h4 class="title"><a href="">Mr.Ragin</a></h4>
                                <span>Assistant Professor, CIVIL</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                              <div class="member-img">
                                <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                                <div class="social">
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                              </div>
                              <div class="member-info">
                                <h4 class="title"><a href="">Mr.Rakesh I.P</a></h4>
                                <span>Assistant Professor, Mechanical</span>
                              </div>
                            </div>
                          </div>
            
            
                         <!--<div class="section-title" data-aos="fade-up">
                            <h2>Ex-Office Members</h2>
                            <p></p>
                          </div>
            
                          <div class="col-lg-3 col-md-4 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                              <div class="member-img">
                                <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                                <div class="social">
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                              </div>
                              <div class="member-info">
                                <h4 class="title"><a href="">Dr.M.Marsaline Beno</a></h4>
                                <span>Dean Academics, St.Xavier Catholic College of Engineering, Nagercoil.</span>
                              </div>
                            </div>
                          </div>-->
            
                          <div class="section-title" data-aos="fade-up">
                            <h2>Office Bearers</h2>
                            <p></p>
                          </div>
            
                          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                              <div class="member-img">
                                <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                                <div class="social">
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                              </div>
                              <div class="member-info">
                                <h4 class="title"><a href="">Ms.Anithya</a></h4>
                                <span>President</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                              <div class="member-img">
                                <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                                <div class="social">
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                              </div>
                              <div class="member-info">
                                <h4 class="title"><a href="">Ms.Sangeetha</a></h4>
                                <span>Secretary</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                              <div class="member-img">
                                <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                                <div class="social">
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                              </div>
                              <div class="member-info">
                                <h4 class="title"><a href="">Mr.Ramesh Daniel</a></h4>
                                <span>Treasurer</span>
                              </div>
                            </div>
                          </div>

                      </div>
                    </div>
                  </section>
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  
<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">



    <div class="row">
      <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">Meeting</h3>
        <div class="resume-item">
          <h4></h4>
          <h5>The functions of the IQAC are,</h5>
          
          <ul>
            <li> Developing and applying quality benchmarks/parameters for various academic and administrative activities of the institution.</li>
            <li> Making possible the creation of a learner-centric environment favourable for quality education and also the very much needed faculty maturation to take up the required knowledge and technology for participatory teaching and learning process. </li>
            <li> Making arrangements for feedback response from students and parents on quality-related institutional processes.</li>
            <li> Disseminating the information on various quality parameters of higher education.</li>
            <li> Organizing inter and intra institutional workshops, seminars that are focussed on quality based themes and the promotion of quality circles.</li>
         <li>Documenting the different programmes/activities that lead to quality improvement.</li>
         <li>Acting as a nodal agency of the Institution that coordinates quality-related activities.</li>
         <li>Developing and maintaining the institutional database through MIS for the purpose of keeping up /enhancing the quality of the institution.</li>
         <li>Developing Quality Culture in the institution.</li>
         <li>Preparing the Annual Quality Assurance Report (AQAR) as per NAAC guidelines and submit to NAAC.</li>
          </ul>
        </div>
        <div class="resume-item">
        
          <h5>Benefits</h5>
          
          <ul>
            <li>Ensuring a heightened level of clarity and focus in the institutional functioning towards quality enhancement.</li>
            <li>Ensuring internalization of the quality culture.</li>
            <li>Ensuring improvement and synchronization among various activities of the institution and institutionalize all best practices.</li>
            <li>Providing a strong footing for decision-making to improve institutional functioning.</li>
            <li>Building an systematic procedure of documentation and internal communication.</li>
            </ul>
        </div>
        
      
      </div>
    </div>

  </div>
</section><!-- End Resume Section -->


            </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-6">
              <div class="row">
                

                <section id="features" class="features">
                  <div class="container">
            
                    <div class="section-title" data-aos="fade-up">
                      <h2>Meeting Minutes</h2>
                      <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                    </div>
            
                    <div class="row" data-aos="fade-up" data-aos-delay="300">
                      <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ffbb2c;"></i>
                          <h3><a href="/Users/partheebanpon/Documents/GitHub/smcoe_webpage/assets/docs/iqac/2016-17-EVEN.pdf">2016-17 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                          <h3><a href="">2016-17 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #e80368;"></i>
                          <h3><a href="">2017-18 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #e361ff;"></i>
                          <h3><a href="">2017-18 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #47aeff;"></i>
                          <h3><a href="">2018-19 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ffa76e;"></i>
                          <h3><a href="">2018-19 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                          <h3><a href="">2019-20 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #4233ff;"></i>
                          <h3><a href="">2019-20 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #b2904f;"></i>
                          <h3><a href="">2020-21 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #b20969;"></i>
                          <h3><a href="">2020-21 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2021-22 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2021-22 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2022-23 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2022-23 Even</a></h3>
                        </div>
                      </div>

                    </div>
            
                  </div>
                </section>


                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-7">
               


              <div class="row">
                

                <section id="features" class="features">
                  <div class="container">
            
                    <div class="section-title" data-aos="fade-up">
                      <h2>Accreditation Certificates</h2>
                      <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                    </div>
            
                    <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
                      <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ffbb2c;"></i>
                          <h3><a href="">NAAC 2020</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                          <h3><a href="">NBA 2022</a></h3>
                        </div>
                      </div>
                      <!--<div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #e80368;"></i>
                          <h3><a href="">2017-18 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #e361ff;"></i>
                          <h3><a href="">2017-18 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #47aeff;"></i>
                          <h3><a href="">2018-19 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ffa76e;"></i>
                          <h3><a href="">2018-19 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                          <h3><a href="">2019-20 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #4233ff;"></i>
                          <h3><a href="">2019-20 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #b2904f;"></i>
                          <h3><a href="">2020-21 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #b20969;"></i>
                          <h3><a href="">2020-21 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2021-22 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2021-22 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2022-23 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2022-23 Even</a></h3>
                        </div>
                      </div>-->

                    </div>
            
                  </div>
                </section>


                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                </div>
              </div>


              </div>
              <div class="tab-pane" id="tab-8">
                <div class="row">
                

                  <section id="features" class="features">
                    <div class="container">
              
                      <div class="section-title" data-aos="fade-up">
                        <h2>SSR & AQAR</h2>
                        <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                      </div>
              
                      <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="col-lg-3 col-md-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #ffbb2c;"></i>
                            <h3><a href="">NAAC SSR 2020</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                            <h3><a href="">NAAC AQAR 2022</a></h3>
                          </div>
                        </div>
                        <!--<div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #e80368;"></i>
                            <h3><a href="">2017-18 Odd</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #e361ff;"></i>
                            <h3><a href="">2017-18 Even</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #47aeff;"></i>
                            <h3><a href="">2018-19 Odd</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #ffa76e;"></i>
                            <h3><a href="">2018-19 Even</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                            <h3><a href="">2019-20 Odd</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #4233ff;"></i>
                            <h3><a href="">2019-20 Even</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #b2904f;"></i>
                            <h3><a href="">2020-21 Odd</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #b20969;"></i>
                            <h3><a href="">2020-21 Even</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                            <h3><a href="">2021-22 Odd</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                            <h3><a href="">2021-22 Even</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                            <h3><a href="">2022-23 Odd</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                            <h3><a href="">2022-23 Even</a></h3>
                          </div>
                        </div>-->
  
                      </div>
              
                    </div>
                  </section>
  
  
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-9">
                <div class="row">
               
<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Best Practice</h2>
      <p></p>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">1.TEACHING LEARNING PROCESS</h3>
        <div class="resume-item pb-1">
          <h4>Objective</h4>
          <ul>
            <li>To focus the Students and giving proper guidance to improve the innovative ideas to students through ICT tools</li>
          </ul>
        
        </div>

        <div class="resume-item pb-1">
          <h4>The Context</h4>
          <ul>
            <li>Faculties interact the students with the help of ICT tools and its an effective way to communicate the students</li>
          </ul>
       
        </div>
        <div class="resume-item pb-2">
          <h4>The Practice</h4>
          <ul>
            <li>Teaching through zoom/Google/zoho meet with power point presentations, videos, animations, etc</li>
            <li>Assignments and notes provided through Google classrooms</li>
            <li>Objective type questions and short answers are uploaded through google class room</li>
            <li>Laboratories are conducted through virtually</li>
            <li>Communication to students through Whatsapp groups</li>
            <li>Online feedback</li>
            <li>Assignment and Exam scripts are evaluated and uploaded to individual students through googleclass rooms</li>
          </ul>
       
        </div>
        <div class="resume-item pb-2">
          <h4>Evidence of success</h4>
          <ul>
            <li>Students are highly attentive in classes</li>
            <li>Performance of students are improved</li>
            <li>Easy way to identify the absentees in class and Examinations</li>
          </ul>
          
        </div>
        

        <!--<h3 class="resume-title">Education</h3>-->
        <div class="resume-item">
          <h4>Problems Encountered and Resources required</h4>
          <!--<h5>2015 - 2016</h5>
          <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
          <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
        </div>
        <div class="resume-item">
          <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
          <h5>2010 - 2014</h5>-->
          <ul>
              <li>Availability of connectivity devices for financially affected students</li>
              <li>Poor Internet connectivity for rural area students</li>
              <li>Concentration of the students will get diverted by using Electronic Devices</li>
              <li>High power consumption to connectivity devices</li>
              
              </ul>    
      </div>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">2.CENTER FOR INNOVATION</h3>
        <div class="resume-item">
          <h4> Objective</h4>
          <!--<h4>Senior graphic design specialist</h4>
          <h5>2019 - Present</h5>
          <p><em>Experion, New York, NY </em></p>-->
          <ul>
            <li>To develop innovative ideas, communication skill, technical skills, leadership quality and entrepreneur skill of the students</li>    
        </div>
        <div class="resume-item">
          <h4>The Context</h4>
          <!--<h5>2017 - 2018</h5>
          <p><em>Stepping Stone Advertising, New York, NY</em></p>-->
          <ul>
            <li>To facilitate those through knowing the interest of the student and followed by mini project ideas and innovative ideas for discussion and implementation.</li>
          </ul>
        </div>
        <div class="resume-item">
          <h4>The Practice</h4>
          <!--<h5>2017 - 2018</h5>
          <p><em>Stepping Stone Advertising, New York, NY</em></p>-->
          <ul>
            <li>Displaying list of mini projects</li>
            <li>Selecting the students based on the interest show towards the projects</li>
            <li>Encourage real time innovative projects</li>
            <li>Organized workshops and seminars for better understanding</li>
            <li>Encourage implant training in every semester end.</li>
            <li>Encourage NPTEL online courses</li>
            <li>Placement training are given through experts</li>
            <li>Certificate courses are conducted through MoU with startups</li>
          </ul>
        </div>
        <div class="resume-item">
          <h4>Evidence and Success</h4>
          <!--<h5>2017 - 2018</h5>
          <p><em>Stepping Stone Advertising, New York, NY</em></p>-->
          <ul>
            <li>Finalist in Smart India Hackathon 2020 – Software Edition</li>
            <li>Finalist in Smart India Hackathon 2022 - Software Edition</li>
            <li>Students presents papers in journals</li>
            <li>Online event conducted to bring out students hidden talents</li>
          </ul>
        </div>
        <div class="resume-item">
          <h4>Problems Encountered</h4>
          <!--<h5>2017 - 2018</h5>
          <p><em>Stepping Stone Advertising, New York, NY</em></p>-->
          <ul>
            <li>Real time projects are expensive</li>
            <li>Slow learners need to provide extra effort</li>
          </ul>
        </div>
        <div class="resume-item">
          <h4>Resources required</h4>
          <!--<h5>2017 - 2018</h5>
          <p><em>Stepping Stone Advertising, New York, NY</em></p>-->
          <ul>
            <li>Interaction with industries</li>
            <li>Need more training programme to students</li>
          </ul>
        </div>
        

      </div>
   
   
</section><!-- End Resume Section -->


                </div>
              </div>
              <div class="tab-pane" id="tab-10">
                <div class="row">
                    <section id="features" class="features">
                        <div class="container">
                  
                          <div class="section-title" data-aos="fade-up">
                            <h2>Annual Report</h2>
                            <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                          </div>
                  
                          <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
                            <div class="col-lg-3 col-md-4">
                              <div class="icon-box">
                                <i class="ri-file-list-3-line" style="color: #ffbb2c;"></i>
                                <h3><a href="https://9ed2e945.webdocs.pages.dev/docs/iqac/Annual-Report-2020-2021.pdf">2020-2021</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                              <div class="icon-box">
                                <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                                <h3><a href="">2021-2022</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                              <div class="icon-box">
                                <i class="ri-file-list-3-line" style="color: #e80368;"></i>
                                <h3><a href="">2022-2023</a></h3>
                              </div>
                            </div>
                            <!--<div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #e361ff;"></i>
                                <h3><a href="">NOVEMBER 2017</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #47aeff;"></i>
                                <h3><a href="">APRIL 2018</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #ffa76e;"></i>
                                <h3><a href="">NOVEMBER 2018</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #11dbcf;"></i>
                                <h3><a href="">APRIL 2019</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #4233ff;"></i>
                                <h3><a href="">NOVEMBER 2019</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #b2904f;"></i>
                                <h3><a href="">APRIL 2020</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #b20969;"></i>
                                <h3><a href="">NOVEMBER 2020</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #ff5828;"></i>
                                <h3><a href="">APRIL 2021</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #29cc61;"></i>
                                <h3><a href="">NOVEMBER 2021</a></h3>
                              </div>
                            </div>-->
                          </div>
                  
                        </div>
                      </section><!-- End Features Section -->
                      </div>
                      </div>
                      <div class="tab-pane" id="tab-11">
                        <div class="row">
                            <section id="features" class="features">
                                <div class="container">
                          
                                  <div class="section-title" data-aos="fade-up">
                                    <h2>institutional Distinctiveness</h2>
                                    <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                                  </div>
                          
                                  <!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">

    <div class="row">
      <div class="col-lg-12" data-aos="fade-up">
        <!--<div class="resume-item pb-1">
          <h4>Vision</h4>
          <ul>
            <li>To emerge as a premiere institution, acknowledged as a center for excellence imparting technical education, creating technocrats who can address the needs of the society through exploration and experimentation and uplift mankind.</li>
          </ul>
          <br>
        </div>

        <div class="resume-item pb-1">
          <h4>Mission</h4>
          <ul>
            <li>To provide an education that transforms students, through rigorous course-work and by providing an understanding of the needs of the society and the industry.</li>
          </ul>
          <p><em>Stella Mary’s college of Engineering provides abroad job opportunities to the candidates who deserve the offer. The management is very much keen in imparting an internationally graded technical education to the students. Our institution is located in a rural area. Many of our students are from villages. Many students belong to first graduate category. Taking this into account, our college gives more importance to enhance the skills of the students to face the global challenges. With regard to this, the institution provides</em></p>
                
        </div>-->
        <div class="resume-item pb-2">
          
          <ul>
            <li>Communication training programs to improve the communication skills and the English fluency in students.</li>
            <li>Campus training programs that help to impart a sound knowledge of technical skills in students.</li>
            <li>Training on soft skills, resume preparation, personal interviews, group discussions, through our Corporate Relations department.</li>
            </ul>
            <p><em>The Corporate Relations cell is an integral part of our institution, which ensures that the students are well trained and motivated to face campus interviews efficiently. The placement support teams take effort to organize trainings related to aptitude, soft skills, technical skills and corporate expectations to groom the students well for the interview process.</em></p>
           
        </div>
        <div class="resume-item pb-2">
          <h4>National and International Placement</h4>
          <ul>
            <li>It is our institute’s distinctiveness in bringing in recruiters from reputed companies from India and abroad placement.</li>
            <li>Performance of students are improved</li>
            <li>Easy way to identify the absentees in class and Examinations</li>
          </ul>
         <br> 
        </div>
        <div class="resume-item pb-2 text-justify">
          <h4>Memorandum of understanding</h4>
          <ul>
            <li>We had MoU with S’Hail Metals and Rassas Battery Recycling battery for recruiting our students.</li>
            <p><em>S’Hail Metals and Rassas Battery Recycling Factory are our abroad recruiters who would identify the best candidates who would be presented to them on the day of the interview process. This abroad placement has also been a source of motivation for the students who aim to get placed and the expenditure for their travel and visa is also borne by the institution. Being located in a rural area and grooming the rural students technically and skillfully to take part in international placement drives is a real challenge to the faculty involved in the research, centre for innovation and the corporate relations departments. It’s all possible through the constant motivation and support from the authorities from top order at every level. Abroad placement is a pride for the institution and a spotlight for progress towards the goal to be achieved by every student who does justice in making the best use of the study environment provided by Stella Mary’s College of Engineering.</em></p>
           </ul>
         <br> 
        </div>
        
      </div>
      
   
   
   
</section><!-- End Resume Section -->
                                  
                          
                                </div>
                              </section><!-- End Features Section -->
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