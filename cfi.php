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

        <div class="d-flex justify-content-between">
          <header class="section-header">
              <h2 class="justify-content-center">Centre For Innovation</h2>
            </header>
      </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    
    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">
  
        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Objective</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Faculty Members</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Student Members</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Smart India Hackathon</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Memorandom of Understanding</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">TEST</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Program Outcome</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Calender</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Action Plan</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Gallery</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <!-- ======= Services Section ======= -->
      <section id="services" class="services">
          <div class="container">
            <div class="row">
              <p class="col-lg-12 mt-4 mt-lg-0 fst-italic text-justify">The Centre for Innovaion of Stella Mary's College of Engineering is to develop innovative ideas, communication skill, technical skills, leadership quality and entrepreneur skill of the students</p>
                  
              <div class="col-md-12 col-lg-12 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bxl-dribbble"></i></div>
                  <h4 class="title"><a href="">Objective</a></h4>
                  <li class="text-justify"><strong>Promote Research and Development (R&D):</strong>Foster a culture of continuous research and development to explore new ideas, technologies, and solutions. This objective can include funding R&D projects, collaborating with academic institutions, and providing resources for experimentation and prototyping.</li>
                  <li class="text-justify"><strong>Facilitate Cross-Disciplinary Collaboration:</strong> Encourage collaboration among individuals from diverse backgrounds, such as scientists, engineers, designers, and business experts, to promote the cross-pollination of ideas and expertise. This can lead to the generation of innovative solutions that address complex challenges.</li>
                  <li class="text-justify"><strong>Support Entrepreneurship and Startups:</strong> Provide resources, mentorship, and networking opportunities for entrepreneurs and startups. This objective can help nurture new businesses and technologies, driving economic growth and job creation in the region.</li>
                  <li class="text-justify"><strong>Drive Technology Transfer and Commercialization:</strong> Act as a bridge between research institutions and industry by facilitating the transfer of technology and knowledge from the research phase to commercial applications. This includes licensing intellectual property, creating spin-off companies, and connecting researchers with potential industry partners.</li>
                  
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
                <div class="row">
                  <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
      <div class="container">
  
  <div class="section-title" data-aos="fade-up">
    <h2>Faculty Members</h2>
    <p></p>
  </div>

  <div class="row justify-content-center">
  
  <?php
    $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',sm.staff_id,'.png') imglink,sm.staff_id,TRIM(CONCAT(sm.`legend`,' ',IFNULL(sm.first_name,''),' ',IFNULL(sm.middle_name,''),' ',IFNULL(sm.last_name,''),' ')) staff_name, md.dept_name,cd.desg_name FROM `documentation`.`club_master` cm INNER JOIN documentation.`club_membership` cms ON cms.`cm_id`=cm.cm_id AND cms.staff_id IS NOT NULL AND cms.status>0 INNER JOIN camps.staff_master sm ON sm.staff_id=cms.staff_id INNER JOIN camps.master_department md ON md.department_id=sm.department_id INNER JOIN documentation.club_desg cd ON cd.cd_id=cms.cd_id INNER JOIN camps.master_academic_year may ON may.ay_id=cms.ay_id AND may.cur_year=1 WHERE cm.cm_id=11";
    $result = mysqli_query($dbcon, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($data = mysqli_fetch_assoc($result)) {
            
    ?>
    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
          <img src="<?php printf("%s", $data['imglink']);?>" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-file-earmark-bar-graph"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4 class="title"><a href="faculty.php?staff_id=<?= $data['staff_id']?>">
            <?php 
            printf("%s", $data["staff_name"]);
            ?>
            </a></h4>
            <span><?php 
            printf("%s", $data["desg_name"],);
            ?></span><span><?php 
            printf("%s", $data["dept_name"]);
            ?></span>
          </div>
        </div>
      </div>
    <?php
} 
}     
    ?> 
  </div>
</div>
        </section><!-- End Team Section -->
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
          <div class="container">
    
            <div class="section-title" data-aos="fade-up">
              <h2>Non-Teaching Faculty</h2>
              <p>The supporting hands of Computer Science and Engineering</p>
            </div>
    
            <div class="row justify-content-center">
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="https://webdocs.pages.dev/assets/img/CSE/nonteaching/RAMYA.png" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Mrs.Remya</h4>
                    <span>Lab Instructor</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="https://webdocs.pages.dev/assets/img/CSE/nonteaching/DineshKumar.png" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                <div class="member-info">
                    <h4>Mr.Dinesh Kumar</h4>
                    <span>Lab Instructor</span>
                  </div>
                </div>
              </div>
  
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                      <img src="https://webdocs.pages.dev/assets/img/CSE/nonteaching/Gopi.png" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Mr.V.Gopi</h4>
                      <span>Lab Instructor</span>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </section><!-- End Team Section -->
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>SIH 2020 - Software Edition (Online) - Finalist</h3>
                    <ul><p class="fst-italic text-justify"><strong>Name of the Organising Unit :</strong> MHRD’s Innovation Cell - Smart India Hackathon 2020</p></ul>
                    <ul><p class="fst-italic text-justify"> <strong>Co-organizing unit:</strong> Centre For Innovation</p></ul>
                    <ul><p class="fst-italic text-justify"> <strong>Venue:</strong>Stella Mary’s College of Engineering, Aruthenganvilai,Junction, Azhikal Post,Kanyakumari District – 629 202.</p></ul>
                    <ul><p class="fst-italic text-justify"> <strong>Date of Event:</strong> 24th, 25th of August 2022 (48 Hrs)</p></ul>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title text-center">SIH Team Members</h5>
                        <!--<p>Add <code>.table-borderless</code> for a table without borders.</p>-->
                        <!-- Active Table -->
                        <table class="table table-striped text-center table-hover">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Student Name</th>
                              <th scope="col">Department</th>
                              <th scope="col">Batch</th>
                              <th scope="col">Member</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mary Sneha Betty</td>
                                <td>CSE</td>
                                <td>2017-21</td>
                                <td>Student</td>
                                
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Janet Marteena J</td>
                                <td>CSE</td>
                                <td>2017-21</td>
                                <td>Student</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Lakshmi Prabha K</td>
                                <td>CSE</td>
                                <td>2017-21</td>
                                <td>Student</td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>Amsha J</td>
                                <td>CSE</td>
                                <td>2017-21</td>
                                <td>Student</td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td>Harshini RU</td>
                                <td>CSE</td>
                                <td>2017-21</td>
                                <td>Student</td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <td>Reshma RS</td>
                                <td>ECE</td>
                                <td>2016-20</td>
                                <td>Student</td>
                              </tr>
                              <tr>
                                <th scope="row">7</th>
                                <td>Dhamodaran</td>
                                <td>CSE</td>
                                <td>2016-20</td>
                                <td>Student Mentor</td>
                              </tr>
                              <tr>
                                <th scope="row">8</th>
                                <td>Pon.Partheeban</td>
                                <td>CSE</td>
                                <td></td>
                                <td>Faculty Mentor</td>
                              </tr>
                              <tr>
                                <th scope="row">9</th>
                                <td>R.K.Madhumathi</td>
                                <td>CIVIL</td>
                                <td></td>
                                <td>Faculty Mentor</td>
                              </tr>
                              <tr>
                                <th scope="row">10</th>
                                <td>M.Ashni</td>
                                <td>CIVIL</td>
                                <td></td>
                                <td>Faculty Mentor</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>     
                </div>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="https://webdocs.pages.dev/assets/docs/cfi/sih2020/1.png" alt="" class="img-fluid">
                    <img src="https://webdocs.pages.dev/assets/docs/cfi/sih2020/2.png" alt="" class="img-fluid">
                    <img src="https://webdocs.pages.dev/assets/docs/cfi/sih2020/3.png" alt="" class="img-fluid">
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>SIH 2022 - Software Edition - Finalist</h3>
                    <ul><p class="fst-italic text-justify"><strong>Name of the Organising Unit :</strong> MHRD’s Innovation Cell - Smart India Hackathon 2022</p></ul>
                    <ul><p class="fst-italic text-justify"> <strong>Co-organizing unit:</strong> Centre For Innovation</p></ul>
                    <ul><p class="fst-italic text-justify"> <strong>Venue:</strong>Sri Eshwar College of Engineering, Coimbatore.</p></ul>
                    <ul><p class="fst-italic text-justify"> <strong>Date of Event:</strong> 1st, 2nd, 3rd of August 2020 (60 Hrs)</p></ul>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title text-center">SIH Team Members</h5>
                        <!--<p>Add <code>.table-borderless</code> for a table without borders.</p>-->
                        <!-- Active Table -->
                        <table class="table table-striped text-center table-hover">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Student Name</th>
                              <th scope="col">Department</th>
                              <th scope="col">Batch</th>
                              <th scope="col">Member</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Roshan Lal</td>
                                <td>CSE</td>
                                <td>2020-24</td>
                                <td>Student</td>
                                
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>ASLIN R</td>
                                <td>CSE</td>
                                <td>2020-24</td>
                                <td>Student</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>SANJAI M I</td>
                                <td>CSE</td>
                                <td>2020-24</td>
                                <td>Student</td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>SNEKA K</td>
                                <td>ECE</td>
                                <td>2019-23</td>
                                <td>Student</td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td>ATUL JOSHI F</td>
                                <td>CSE</td>
                                <td>2019-23</td>
                                <td>Student</td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <td>ANUSHA K</td>
                                <td>ECE</td>
                                <td>2019-23</td>
                                <td>Student</td>
                              </tr>
                              <tr>
                                <th scope="row">7</th>
                                <td>Dhamodaran</td>
                                <td>ME-CSE</td>
                                <td>2020-22</td>
                                <td>Student Mentor</td>
                              </tr>
                              <tr>
                                <th scope="row">8</th>
                                <td>Pon.Partheeban</td>
                                <td>CSE</td>
                                <td></td>
                                <td>Faculty Mentor</td>
                              </tr>
                              <tr>
                                <th scope="row">9</th>
                                <td>Michael Franklin</td>
                                <td>ECE</td>
                                <td></td>
                                <td>Faculty Mentor</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>     
                </div>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="https://webdocs.pages.dev/assets/docs/cfi/sih2022/1.jpg" alt="" class="img-fluid">
                    <img src="https://webdocs.pages.dev/assets/docs/cfi/sih2022/2.jpg" alt="" class="img-fluid">
                    <img src="https://webdocs.pages.dev/assets/docs/cfi/sih2022/3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
               <!-- <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <br>
                    <h3>Software Development Lab</h3>
                    <p class="fst-italic text-justify"> Software Development Lab is typically equipped with internet access. Computers in this lab are typically arranged in rows, so that every workstation has a similar view of one end of the room to facilitate lecturing or presentations, to facilitate small group work. The Software Development Lab is equipped with 40 Dell Desktop computer with Intel i3 Processor, 32 bit OS,4 GB Ram and 3 AC. Compiler Laboratory and Database Management system, Software Development, Computer Graphics, Mobile Application Development and Network Laboratory practical classes are conducted in this Laboratory.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="https://webdocs.pages.dev/assets/img/CSE/lab/SW.jpg" alt="" class="img-fluid">
                  </div>
                </div>-->
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <section id="features" class="features">
                      <div class="container">
                
                        <div class="section-title" data-aos="fade-up">
                          <h2>Memorandom of Understanding</h2>
                          <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                        </div>
                
                        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                          <div class="col-lg-3 col-md-4">
                            <div class="icon-box">
                              <i class="ri-file-list-3-line" style="color: #ffbb2c;"></i>
                              <h3><a href="https://webdocs.pages.dev/assets/docs/cfi/mou/MOU%20AI%202020.pdf">Aikatmya Technology - 2020</a></h3>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                            <div class="icon-box">
                              <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                              <h3><a href="https://webdocs.pages.dev/assets/docs/cfi/mou/MOU%20AI%202021.pdf">Aikatmya Technology - 2021</a></h3>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                            <div class="icon-box">
                              <i class="ri-file-list-3-line" style="color: #e80368;"></i>
                              <h3><a href="https://webdocs.pages.dev/assets/docs/cfi/mou/MOU%20AI%202022.pdf">Aikatmya Technology - 2022</a></h3>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                            <div class="icon-box">
                              <i class="ri-file-list-3-line" style="color: #e361ff;"></i>
                              <h3><a href="https://webdocs.pages.dev/assets/docs/cfi/mou/MOU%20AI%202023.pdf">Aikatmya Technology - 2023</a></h3>
                            </div>
                          </div>
                          <!--<div class="col-lg-3 col-md-4 mt-4">
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
              <div class="tab-pane" id="tab-6">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-center mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bx-world"></i></div>
                    <h4 class="title"><a href="">Regulation 2021</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bx-world"></i></div>
                    <h4 class="title"><a href="">Regulation 2017</a></h4>
                    </div>
                  </div>
              </div>
            </div>
          </section><!-- End Services Section --></div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-7">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bi-journal-richtext"></i></div>
                    <h4 class="title"><a href="">Programme Outcomes</a></h4>
                    </div>
                </div>
                <div class="col-md-7 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bi-journal-richtext"></i></div>
                    <h4 class="title"><a href="">Program Specfic Outcomes</a></h4>
                    </div>
                  </div>
              </div>
            </div>
          </section><!-- End Services Section --></div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-8">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">2018-19 ODD</a></h4>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">2018-19 EVEN</a></h4>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">2019-20 ODD</a></h4>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">2019-20 EVEN</a></h4>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">2020-21 ODD</a></h4>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">2020-21 EVEN</a></h4>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">2021-22 ODD</a></h4>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">2021-22 EVEN</a></h4>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">2022-23 ODD</a></h4>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">2022-23 EVEN</a></h4>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">2023-24 ODD</a></h4>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">2023-24 EVEN</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </section><!-- End Services Section --></div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-9">
                  <div class="row">
                      <section id="features" class="features">
                          <div class="container">
                    
                            <div class="section-title" data-aos="fade-up">
                              <h2>Newsletter</h2>
                              <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                            </div>
                    
                            <div class="row" data-aos="fade-up" data-aos-delay="300">
                              <div class="col-lg-3 col-md-4">
                                <div class="icon-box">
                                  <i class="ri-calendar-todo-line" style="color: #ffbb2c;"></i>
                                  <h3><a href="">APRIL 2016</a></h3>
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                                <div class="icon-box">
                                  <i class="ri-calendar-todo-line" style="color: #5578ff;"></i>
                                  <h3><a href="">NOVEMBER 2016</a></h3>
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                                <div class="icon-box">
                                  <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                                  <h3><a href="">APRIL 2017</a></h3>
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
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
                              </div>
                            </div>
                    
                          </div>
                        </section><!-- End Features Section -->
                        </div>
                        </div>
                        <div class="tab-pane" id="tab-10">
                          <div class="row">
                              
                            
                               
                            <div class="col-md-10">
      
                              <!--slider start here-->
                        
                              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="https://webdocs.pages.dev/assets/docs/cfi/sih2022/3.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="https://webdocs.pages.dev/assets/docs/cfi/sih2022/2.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="https://webdocs.pages.dev/assets/docs/cfi/sih2022/1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="https://webdocs.pages.dev/assets/docs/cfi/sih2022/4.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                                <!--end here-->
                        
                            </div>
                            
                            <!-- End Features Section -->
                                </div>
                                </div>
            </div>
          </div>
        </div>
  
      </div>
    </section><!-- End Cource Details Tabs Section -->


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