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

  <main id="main" class="text-justify">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
          <h2>Science and Humanities</h2>
          <p>The Department of Science and Humanities fosters a strong foundation in fundamental sciences and liberal arts, nurturing well-rounded individuals equipped with both scientific knowledge and critical thinking skills.</p>
    
       
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    
     
  </div><!-- End Breadcrumbs -->

  <!-- ======= Cource Details Section ======= -->
  <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-7">
          <img src="https://webdocs.pages.dev/assets/img/sh/sh.png" class="img-fluid" alt="">
          
        </div>
        <div class="col-lg-4">

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Head of the Department</h5>
            <p><a href="faculty.php?staff_id=1130"
                    <?php 
                    printf("%s", $data["first_name"]);
                    ?>">Mr.S.Ravi Kumar</a></p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Total Intake</h5>
            <p>420</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Budding Engineers</h5>
            <p>412</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Proud Alumni</h5>
            <p>250</p>
          </div>

        </div>
        <h3> Overview</h3>
          <p>
            Curiosity-driven basic sciences have a fundamental role in our lives to enable the necessary means for addressing the global needs. Physics, Chemistry, Mathematics and English are a group of subjects which are essential in undergraduate engineering programs. The Department of Sciences and Humanities is the gateway of engineering education, and it is functions right from the inception of the College since 2013 and imparts core competency in English, Mathematics, Physics and Chemistry. The Department of Science and Humanities nurtures the essential principles and understanding of science among the students.    
        </p>
      </div>

    </div>
  </section><!-- End Cource Details Section -->

  <!-- ======= Cource Details Tabs Section ======= -->
  <section id="cource-details-tabs" class="cource-details-tabs">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Vision & MISSION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Faculty</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Non-Teaching</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Laboratory</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Industrial Visit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Achievements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Syllabus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Program Outcome</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Calender</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Newsletter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-11">Brochure</a>
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
            <div class="col-md-6 col-lg-10 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">VISION</a></h4>
                <li>To be a World-class Educational and Research Institution in the service of humanity by promoting high quality Engineering and Management education.</li>
                  <li>Imbibe soft skills and technical skills.</li>
                    <li>Develop the faculty to reach international standards.</li>
                      <li>Maintain high academic standards and teaching quality that promote analytical thinking and Independent judgement.</li>
                        <li>Promote research, innovation and product development in collaboration with reputable Foreign Universities.</li>
                          <li>Offer collaborative industry program in the emerging areas and spirit of enterprise.</li>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-10 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">MISSION</a></h4>
                <li>To impart engineering fundamentals by providing Basic Science and Mathematics.</li>
                  <li>To stimulate reading, listening and writing skills.</li>
                    <li>To promote innovative culture among the students.</li>
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
            <h2>Teaching Faculty</h2>
            <p>The pillars Science and Humanities</p>
          </div>
  
          <div class="row justify-content-center">
          <?php
            $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',staff_master.staff_id,'.png') imglink,staff_master.staff_id AS staff_id,master_desigination.desigination desigination, GROUP_CONCAT(staff_promotion.md_id), staff_master.legend , CONCAT(staff_master.first_name,' ',staff_master.last_name)first_name , staff_master.department_id,master_department.dept_name , staff_photo.photo ,  staff_promotion.status, staff_qualification.status,staff_promotion.from_date, GROUP_CONCAT(deg_type ORDER BY staff_qualification.yop) deg_type FROM camps.staff_master INNER JOIN camps.master_department ON (staff_master.department_id = master_department.department_id  AND staff_master.sc_id=1) INNER JOIN camps.staff_photo ON (staff_photo.staff_id = staff_master.staff_id) INNER JOIN camps.staff_promotion ON (staff_promotion.staff_id = staff_master.staff_id) INNER JOIN camps.staff_qualification ON (staff_qualification.staff_id = staff_master.staff_id AND staff_qualification.status=1) INNER JOIN camps.master_desigination ON master_desigination.md_id=staff_promotion.md_id INNER JOIN camps.staff_degree_type ON (staff_qualification.degree_id = staff_degree_type.degree_id) WHERE staff_promotion.status=2 AND staff_degree_type.degree_id NOT IN (23,24) AND  staff_master.working_status='working' AND master_department.department_id='6' GROUP BY staff_master.staff_id;";
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
                    printf("%s", $data["first_name"]);
                    ?>
                    </a></h4>
                    <span><?php 
                    printf("%s", $data["desigination"]);
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
            <p>The supporting hands of Science and Humanities</p>
          </div>
  
          <div class="row justify-content-center">
          <?php
            $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',staff_master.staff_id,'.png') imglink,staff_master.staff_id AS staff_id,master_desigination.desigination desigination, GROUP_CONCAT(staff_promotion.md_id), staff_master.legend , CONCAT(staff_master.first_name,' ',staff_master.last_name)first_name , staff_master.department_id,master_department.dept_name , staff_photo.photo ,  staff_promotion.status, staff_qualification.status,staff_promotion.from_date, GROUP_CONCAT(deg_type ORDER BY staff_qualification.yop) deg_type FROM camps.staff_master INNER JOIN camps.master_department ON (staff_master.department_id = master_department.department_id  AND staff_master.sc_id=2) INNER JOIN camps.staff_photo ON (staff_photo.staff_id = staff_master.staff_id) INNER JOIN camps.staff_promotion ON (staff_promotion.staff_id = staff_master.staff_id) INNER JOIN camps.staff_qualification ON (staff_qualification.staff_id = staff_master.staff_id AND staff_qualification.status>0) INNER JOIN camps.master_desigination ON master_desigination.md_id=staff_promotion.md_id INNER JOIN camps.staff_degree_type ON (staff_qualification.degree_id = staff_degree_type.degree_id) WHERE staff_promotion.status=2 AND staff_degree_type.degree_id NOT IN (23,24) AND  staff_master.working_status='working' AND master_department.department_id='6' GROUP BY staff_master.staff_id;";
            $result = mysqli_query($dbcon, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($data = mysqli_fetch_assoc($result)) {
                    
            ?>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="<?php printf("%s", $data['imglink']);?>" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4 class="title"><a href="faculty.php?staff_id=<?= $data['staff_id']?>">
                    <?php 
                    printf("%s", $data["first_name"]);
                    ?>
                    </a></h4>
                  <span><?php printf("%s", $data["desigination"]);?></span>
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
            <div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Physics Laboratory</h3>
                   <strong>COURSE OBJECTIVES:</strong> <li> To learn the proper use of various kinds of physics laboratory equipment.</li>
                  <li>To learn how data can be collected, presented and interpreted in a clear and concise manner.</li>
                  <li>To learn problem solving skills related to physics principles and interpretation of experimental data.</li>
                  <li>To determine error in experimental measurements and techniques used to minimize such error.</li>
                  <li>To make the student as an active participant in each part of all lab exercises.</li>
                  <strong>Experiments</strong> <li>Torsional pendulum - Determination of rigidity modulus of wire and moment of inertia of regular and irregular objects.</li>
                  <li>Simple harmonic oscillations of cantilever.</li>
                  <li>Non-uniform bending - Determination of Young's modulus</li>
                  <li>Uniform bending - Determination of Young's modulus</li>
                  <li>Laser-Determination of the wave length of the laser using grating</li>
                  <li>Air wedge - Determination of thickness of a thin sheet/wire</li>
                  <li>Optical fibre -Determination of Numerical Aperture and acceptance angle </li>
                  <li>Compact disc- Determination of width of the groove using laser.</li>
                  <li>Acoustic grating- Determination of velocity of ultrasonic waves in liquids</li>
                  <li>Ultrasonic interferometer - determination of the velocity of sound and compressibility of liquids</li>
                  <li>Post office box -Determination of Band gap of a semiconductor.</li>
                  <li>Photoelectric effect</li>
                  <li>Michelson Interferometer.</li>
                  <li>Melde's string experiment</li>
                  <li>Experiment with lattice dynamics kit.</li>       
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/CM.png" alt="" class="img-fluid">
                </div>
              </div>
            
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Chenmistry Laboratory</h3>
                  <strong>COURSE OBJECTIVES:</strong> 
                  <li> To inculcate experimental skills to test basic understanding of water quality parameters, such as, acidity, alkalinity, hardness, DO, chloride and copper.</li>
                  <li>To induce the students to familiarize with electroanalytical techniques such as, pH metry, potentiometry and conductometry in the determination of impurities in aqueous solutions.</li>
                  <li>To demonstrate the analysis of metals and alloys.</li>
                  <li>To demonstrate the synthesis of nanoparticles</li>
                  
                  <strong>Experiments</strong> 
                  <li>Preparation of Na2CO3 as a primary standard and estimation of acidity of a water sample using the primary standard</li>
                  <li>Determination of types and amount of alkalinity in water sample. Split the first experiment into two</li>
                  <li>Determination of total, temporary & permanent hardness of water by EDTA method.</li>
                  <li>Determination of DO content of water sample by Winkler's method.</li>
                  <li>Determination of chloride content water sample by Argentometric method.</li>
                  <li>Estimation of copper content of the given solution by lodometry.</li>
                  <li>Estimation of TDS of a water sample by gravimetry.</li>
                  <li>Determination of strength of given hydrochloric acid using pH meter.</li>
                  <li>Determination of strength of acids in a mixture of acids using conductivity meter.</li>
                  <li>Conductometric titration of barium chloride against sodium sulphate (precipitation titration)</li>
                  <li>Estimation of iron content of the given solution using potentiometer.</li>
                  <li>Estimation of sodium /potassium present in water using flame photometer.</li>
                  <li>Preparation of nanoparticles (TiO2/ZnO/CuO) by Sol-Gel method.</li>
                  <li>Estimation of Nickel in steel</li>
                  <li>Proximate analysis of Coal</li>  
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Computer Laboratory</h3>
                   <strong>PROBLEM SOLVING AND PYTHON PROGRAMMING LABORATORY</strong> 
                   <li> To understand the problem solving approaches.</li>
                   <li> To learn the basic programming constructs in Python.</li>
                   <li> To practice various computing strategies for Python-based solutions to real world problems.</li>
                   <li> To use Python data structures - lists, tuples, dictionaries.</li>
                   <li> To do input/output with files in Python</li>
                  <strong>Experiments</strong> <li> Principles of planning, orientation and complete joinery details ,Buildings with load bearing walls 3. Buildings with sloping roof,R.C.C. framed structures, Industrial buildings – North light roof structures,Unconfined compression test in cohesive soil , Building Information Modeling.</li> 
                  <strong>Equipments</strong> <li> Computer system of Pentium IV or equivalent (1 for each student) ,AUTOCAD (software).</li> 
                
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              
              
              
          
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  
<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">



    <div class="row">
      <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">Industrial Visit</h3>
        <div class="resume-item">
          <h4>Department of Civil Engineering</h4>
          <h5>2019</h5>
          
          <ul>
            <li> Civil engineering students Industrial Visit on Alipuram Erectors, Kollam on 01/10/2019.</li>
            <li> Civil engineering students Industrial Visit on Bridge Project, Azhikal on 03/10/2019. </li>
            <li> Stella Mary’s civil engineering students Two days industrial visit to various sites for at Moonar, Wayanad on 22/02/2019.</li>
            <li> Three days Educational Tour was organized to Wayanad, Moonar, and Kochi on 12/03/2019.</li>
            <li> One day industrial visit to Neyyar dam and Pechiparai on 02/03/2019.</li>
          </ul>
        </div>
        <div class="resume-item">
        
          <h5>2018</h5>
          
          <ul>
            <li>SMCE students Industrial Visit on Seshasayee. Paper &boards ltd on 08-09-2018.</li>
            <li>Industrial Visit on Road Construction in hilly areas at kodaikanal on 03/08/18.</li>
            <li>Industrial Visit on Road Construction in hilly areas at kodaikanal on 01/09/18.</li>
            <li>Industrial visit Seshasayee.paper &boards ltd.unit on 28/07/2018.</li>
            <li>Educational visit to Sankar Cement factory on 17/03/2018.</li>
            <li>Industrial Visit 1.Educational visit to SPK and Co.,Kapallur, Madurai on 12/03/2018.</li>
            <li>Five days Eduactional Tour was Organised at Thekadi,Iduki,Mummar, Ooty, Kochin on 17/02/2018.</li>
          </ul>
        </div>
        <div class="resume-item">
          <h5>2017</h5>
          <ul>
            <li>Industrial Visit on Precast Production Company, Nagercoil on 08-08-2017.</li>
            <li>Industrial visit to Pechiparai dam, Puthen Dam , Perunchani Dam(Drainage gallery visit for the students) Mathur Thottipalam (Aqueduct) on 16/09/2017.</li>
            <li>Industrial Visit Our students visited SH-46 Road work. Nagercoil on 16/09/2017.</li>
          </ul>
        </div>
        <div class="resume-item">
          <h5>2016</h5>
          <ul>
            <li>One day industrial visit to cement factory, Tirunelveli on 16/08/2016.</li>
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
                <div class="col-lg-12 details order-2 order-lg-1">
                  <h3>Achievements</h3>
                  <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                  <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                 <!-- Default Accordion -->
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      2019-2020
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>IrinSweeta, RajaSree Raj - National Conference</strong> <li>"Effects of plastic used in concrete" won II Prize in National Conference, held on 18.10.2019 organized by Marthandam College of Engineering and Technology</li>
                      <strong>R.Abishiya - Connection</strong> <li>Won I Prize held on 14.03.2020 organized by Ponjesly College Of Engineering</li>
                      <strong>Winfred	- Technical Quiz</strong> <li>Won I Prize held on 14.03.2020 organized by Ponjesly College Of Engineering</li>
                      <strong>Subin.I	- Brick Bonding</strong> <li>Won II Prize held on 07.03.2020 organized by Rohini College Of Engineering</li>
                      <strong>Subin.I	- Super Plumber</strong> <li>Won II Prize held on 07.03.2020 organized by Rohini College Of Engineering</li>
                      <strong>J.Jamila - Rose	Technical Quiz</strong> <li>Won I Prize held on	02.03.2020 organized by Anna University-Konam</li>
                      <strong>R.Abisha -	Technical Quiz	</strong> <li>Won II Prize held on 10.10.2019 organized by Universal College Of Engineering And Technology</li>
                      <strong>R.Abishya, V.Bindhu, S.Anu -	Quiz</strong> <li>Won I Prize held on 14.03.2020 organized by Ponjesly College Of Engineering</li>
                      <strong>Subin, Pavithran, Sam Berfin, Subin.I	- Quiz</strong> <li>Won I Prize held on 20.09.2019 organized by Stella Mary’s College Of Engineering</li>
                      

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      2018-19
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Kohila, Blessy - National Conference</strong> <li>"Sustainable Building Materials" won I Prize in National Conference, held on 22.03.2019 organized by Arunachala College of Engineering For Woman</li>
                      <strong>S.S.Anu, Minimol, Ashminm Rejith - Connection</strong> <li>Won II Prize held on 08.03.2019 organized by Mar Ephraem College Of Engineering and Technology</li>
                      <strong>S.Alan, I.R.Nizanth, Sujith	- Technical Event</strong> <li>Won I Prize held on 08.02.2019 organized by Bethlahem Institute Of Engineering</li>
                      <strong>B.Nithish Nelson, M. IrinSweeta, Mini mol, Ram Prabu	- Technical Event</strong> <li>Won II Prize held on 08.02.2019 organized by Cape Institute Of Technology</li>
                      <strong>S.Alan,I.R.Nizanth - Quiz</strong> <li>Won II Prize held on 14.09.2018 organized by Thamirabharani Engineering College</li>
                      
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      2017-18
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    
                      <strong>Raja Prija, Jenisha - National Conference</strong> <li>"Plastic as a soil stabilizer" won II Prize in National Conference, held on 16.09.2017 organized by Rohini College of Engineering</li>
                      <strong>Akash, Sahaya Abith Akash - Quiz</strong> <li>Won II Prize held on 27.03.2018 organized by Noorul Islam Centre For Higher Education</li>
                      <strong>Subin -	Technical Connections</strong> <li>Won I Prize held on 22.08.2017 organized by Stella Mary’s College Of Engineering</li>
                      <strong>J.Karishma, Josema Koshy -	Connection</strong> <li>Won I Prize held on 19.08.2016 organized by Mar Ephraem College Of Engineering and Technology</li>
                      <strong>J.Karishma,Josema Koshy - Quiz</strong> <li>Won II Prize held on 19.08.2016 organized by Mar Ephraem College Of Engineering and Technology</li>
                      

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      2016-17
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Kavitha, Karishma - National Conference</strong> <li>"Solar Building" won III Prize in National Conference, held on 25.03.2017 organized by Maria College of Engineering & Technology</li>
                      <strong>J.Karishma, Josema Koshy	- Connection</strong> <li>Won I Prize held on 09.08.2016 organized by Mar Ephraem College Of Engineering And Technology	</li>
                      <strong>J.Karishma, Josema Koshy -	Quiz</strong> <li>Won II Prize held on 09.08.2016 organized by Mar Ephraem College Of Engineering And Technology</li>
                      

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      2015-16
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Kavitha, Ancelin Suga - National Conference</strong> <li>"Ground Improvement Techniques" won I Prize in National Conference, held on 01.04.2016 organized by C.S.I. Institute of Technology</li>
                      <strong>Shifino G Sekhar, Mathana - National Conference</strong> <li>"Green Building" won II Prize in National Conference, held on 05.03.2016 organized by Bethlahem Institute of Engineering</li>
                      
                    </div>
                  </div>
                </div>
                <!--<div class="accordion-item">
                  <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      2016
                    </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>George Stalin Britto</strong> <li>third year student presented a paperentitled "A Secured Dynamic Multi-Keyword Ranked SearchScheme Over Encrypted Cloud Data” and secured secondprize held at Marian Engineering College, Trivandrum on23rd August 2016. </li>
                      <strong>Anusha.V</strong> <li>Final year Student presented a paper entitled"Providing User Security Guarantees in Public InfrastructureClouds" held at Marian Engineering College, Trivandrum on23rd August 2016. </li>
                      <strong>S.Sahaya Aswin Binu</strong> <li>Third year student presented a paperentitled "Efficient Wireless Multimedia Multicast inMulti-rate Multichannel Mesh Network" held at MarianEngineering College, Trivandrum on 23rd August 2016. </li>
                      <strong>A.NaveenAmreesh</strong> <li> Final year student presented a papertitled "Real Time Big Data Delivery in Wireless Network"held at Marian Engineering College, Trivandrum on 23rdAugust 2016.</li>
                      <strong>B.Anusha</strong> <li> third year CSE presented a paper entitled"LI-FI TECHNOLOGY" in Arunachala College ofEngineering for Women on 16th March 2016.</li>
                      <strong>M.Sahaya Nishanthini</strong> <li>third year has participated andsecured first prize in the Tech Connect Contest of the IETsponsored National Level Technical Symposium held atArunachala College of Engineering for Women on 16thMarch 2016. </li>
                      <strong>Sheeba Ann Thomas</strong> <li> third year presented a paper entitled "Effective Machine to Machine Communication in Smart Cord Network" in Stella Mary’s College of Engineering on 10th March 2016.</li>
                      <strong> I.Nagorin</strong> <li>third year presented a paper entitled "Effective Machine to Machine Communication in Smart Cord Network" in Stella Mary’s College of Engineering on 10th March 2016. </li>
                      <strong>M.Sahaya Nishanthini</strong> <li>has attended one day workshop on "Personality Development" in Noorul Islam Centre for Higher Education on 1st March 2016. </li>
                      <strong>A.Naveen Amrish</strong> <li>third year presented a paper entitled “A General Self Organized Tree Based-Energy Balance Routing Protocol for Wireless Sensor Networks" in Bethlahem Institute of Engineering on 27/2/2016. </li>
                      <strong>A.Naveen Amrish</strong> <li> has attended two days workshop on "Android Mobile Application Development" in Rohini College of Engineering on 18/2/2016 - 19/2/2016.</li>
                      <strong>Third year CSE girls</strong> <li>attended one day workshop on "Mobile Application Development” organized by Arunachala College of Engineering on 8th February 2016. </li>
                    </div>
                  </div>
                </div>-->
              </div><!-- End Default Accordion Example -->
                
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-7">
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
              <div class="tab-pane" id="tab-8">
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
              <div class="tab-pane" id="tab-9">
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
              <div class="tab-pane" id="tab-10">
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
                      <div class="tab-pane" id="tab-11">
                        <div class="row">
                            <section id="features" class="features">
                                <div class="container">
                          
                                  <div class="section-title" data-aos="fade-up">
                                    <h2>Brochure</h2>
                                    <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                                  </div>
                          
                                  <div class="row" data-aos="fade-up" data-aos-delay="300">
                                    <div class="col-lg-3 col-md-4">
                                      <div class="icon-box">
                                        <i class="ri-file-list-3-line" style="color: #ffbb2c;"></i>
                                        <h3><a href="">AJAX BASICS</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                                      <div class="icon-box">
                                        <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                                        <h3><a href="">BOOTSTRAP</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                                      <div class="icon-box">
                                        <i class="ri-database-2-line" style="color: #e80368;"></i>
                                        <h3><a href="">HADOOP</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                                      <div class="icon-box">
                                        <i class="ri-file-list-3-line" style="color: #e361ff;"></i>
                                        <h3><a href="">MACHINE LEARNING AND DATA ANALYTICS</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-bar-chart-box-line" style="color: #47aeff;"></i>
                                        <h3><a href="">MATLAB</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-check-double-line" style="color: #ffa76e;"></i>
                                        <h3><a href="">MOBILE APP DEVELOPMENT</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-database-2-line" style="color: #11dbcf;"></i>
                                        <h3><a href="">NETWORK STORAGE CONCEPTS</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-disc-line" style="color: #4233ff;"></i>
                                        <h3><a href="">NS2</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-anchor-line" style="color: #b2904f;"></i>
                                        <h3><a href="">U-TURN MOTIVATION OF ENGINEERS</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-check-double-line" style="color: #b20969;"></i>
                                        <h3><a href="">WEB DESIGNING USING WORDPRESS</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-check-double-line" style="color: #ff5828;"></i>
                                        <h3><a href="">WEB DEVELOPMENT</a></h3>
                                      </div>
                                    </div>
                                  </div>
                          
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