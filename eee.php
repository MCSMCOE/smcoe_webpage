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

        <div class="container">
          <h2>Electrical and Electronics Engineering</h2>
        <p>Department focuses on the study and application of electrical principles, systems, and devices to design, develop, and optimize power generation, distribution, and electronic systems for various industries and applications.</p>
      </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    
     
  </div><!-- End Breadcrumbs -->

  <!-- ======= Cource Details Section ======= -->
  <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-7">
          <img src="https://webdocs.pages.dev/assets/img/eee/eee.jpg" class="img-fluid" alt="">
          
        </div>
        <div class="col-lg-4">

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Head of the Department</h5>
            <p><a href="faculty.php?staff_id=1267"
                    <?php 
                    printf("%s", $data["first_name"]);
                    ?>">
                    Dr.A.R.Gayathri</a></p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Total Intake</h5>
            <p>120</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Happy Students</h5>
            <p>200</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Proud Alumni</h5>
            <p>250</p>
          </div>

        </div>
        <h3> Overview</h3>
          <p>Electrical & Electronics Engineering broadly involves electricity, electromagnetism and electronics. It is one of the fundamental branches of science and technology on which all other modern branches of engineering have evolved from. Electrical and Electronics engineers work in a variety of fields including power sector, machine design, renewable energy sector, biomedical engineering, aerospace industry, communications industry and information technology.
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
            <!--<li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Achievements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Industrial Visit</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Syllabus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Program Outcome</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Calender</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Newsletter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Brochure</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-11">Testimonial</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-md-6 col-lg-12 ">
                  <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-12 ">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">VISION</a></h4>
                <p class="description">To transform the rural student community into internationally competent electrical engineers by providing a venue for resourceful teaching learning process, research and inculcating human values.</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-12 ">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">MISSION</a></h4>
                <li>By empowering the graduates with superior knowledge and technical skills in Electrical and Electronics Engineering.</li>
                <li>By evaluating, synthesizing, and applying scientific and electrical engineering principles to deal with industrial problems by means of creative research.</li>
                <li>By producing technically competent graduates who are able to offer practicable solutions to meet the energy scarcity of the nation.</li>
                <li>By facilitating the students to become experts and entrepreneurs to resolve technologies of the electrical & allied engineering with the motive of developing the society.</li>
                  
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
            <p>The pillars of Electrical and Electronics Engineering</p>
          </div>
  
          <div class="row justify-content-center">
          <?php
            $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',staff_master.staff_id,'.png') imglink,staff_master.staff_id AS staff_id,master_desigination.desigination desigination, GROUP_CONCAT(staff_promotion.md_id), staff_master.legend , CONCAT(staff_master.first_name,' ',staff_master.last_name)first_name , staff_master.department_id,master_department.dept_name , staff_photo.photo ,  staff_promotion.status, staff_qualification.status,staff_promotion.from_date, GROUP_CONCAT(deg_type ORDER BY staff_qualification.yop) deg_type FROM camps.staff_master INNER JOIN camps.master_department ON (staff_master.department_id = master_department.department_id  AND staff_master.sc_id=1) INNER JOIN camps.staff_photo ON (staff_photo.staff_id = staff_master.staff_id) INNER JOIN camps.staff_promotion ON (staff_promotion.staff_id = staff_master.staff_id) INNER JOIN camps.staff_qualification ON (staff_qualification.staff_id = staff_master.staff_id AND staff_qualification.status=1) INNER JOIN camps.master_desigination ON master_desigination.md_id=staff_promotion.md_id INNER JOIN camps.staff_degree_type ON (staff_qualification.degree_id = staff_degree_type.degree_id) WHERE staff_promotion.status=2 AND staff_degree_type.degree_id NOT IN (23,24) AND  staff_master.working_status='working' AND master_department.department_id='4' GROUP BY staff_master.staff_id;";
            $result = mysqli_query($dbcon, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($data = mysqli_fetch_assoc($result)) {
                    
            ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                  <img src="<?php printf("%s", $data['imglink']);?>" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-instagram"></i></a>
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
            <p>The supporting hands of Electrical and Electronics Engineering</p>
          </div>
  
          <div class="row justify-content-center">
  
          <?php
            $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',staff_master.staff_id,'.png') imglink,staff_master.staff_id AS staff_id,master_desigination.desigination desigination, GROUP_CONCAT(staff_promotion.md_id), staff_master.legend , CONCAT(staff_master.first_name,' ',staff_master.last_name)first_name , staff_master.department_id,master_department.dept_name , staff_photo.photo ,  staff_promotion.status, staff_qualification.status,staff_promotion.from_date, GROUP_CONCAT(deg_type ORDER BY staff_qualification.yop) deg_type FROM camps.staff_master INNER JOIN camps.master_department ON (staff_master.department_id = master_department.department_id  AND staff_master.sc_id=2) INNER JOIN camps.staff_photo ON (staff_photo.staff_id = staff_master.staff_id) INNER JOIN camps.staff_promotion ON (staff_promotion.staff_id = staff_master.staff_id) INNER JOIN camps.staff_qualification ON (staff_qualification.staff_id = staff_master.staff_id AND staff_qualification.status>0) INNER JOIN camps.master_desigination ON master_desigination.md_id=staff_promotion.md_id INNER JOIN camps.staff_degree_type ON (staff_qualification.degree_id = staff_degree_type.degree_id) WHERE staff_promotion.status=2 AND staff_degree_type.degree_id NOT IN (23,24) AND  staff_master.working_status='working' AND master_department.department_id='4' GROUP BY staff_master.staff_id;";
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
                <div class="col-lg-12 details order-2 order-lg-1">
                  <h3></h3>
                  
                 <!-- Default Accordion -->
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <strong>Electrical Engineering Practices Lab</strong>
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>Background</strong> <li>This lab pioneers the students to the basic electrical measuring equipments that make them deal with some of the commonly used instruments and equipments, like the digital multimeter, tester etc. The students would gain the basic knowledge about different types of wiring circuits, behaviour of current, voltage, power, energy under different conditions and their determination. They can also add on to their knowledge about residential wiring, trouble shooting various electrical equipments like ceiling fan, mixer, air conditioner and other electrical gadgets. These experiments therefore aid in providing them the foundation they require to be Electrical engineers.
                    </li>
                    <strong>Equipments</strong> <li> Voltmeters, Ammeters, Single phase and three phase Energy meter, Power factor meter, Transformer winding machine, Wattmeter(LPF and UPF), Meggar, resistive load, inductive load, capacitive load, multimeter, Earth tester.</li>
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/CSE/lab/CM.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>Control And Instrumentation Laboratory</strong>
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>Background</strong> <li> It is the duty of instrumentation and control engineers to research, design, install, develop, test and maintain instruments, electronics and computer control systems that are in use in the process industry. Many ways have been formulated to control these systems with the help of automation techniques and computer-aided processes. Their key focus is to ensure that the processes function efficiently and safely. This lab prepares students who seek to enter this stream by providing them with elaborate knowledge to supervise and control instruments.</li>
                    <strong>Description</strong> <li> The laboratory utilizes both hardware and software facilities. The Control & Instrumentation lab is equipped with CRO, oscilloscopes, various trainer kits and earth tester such as megger, signal generators, sensors, tranducers, converters digital multimeters and loading inductor, capacitor, resistive loads, LCR meter & energy meter. The software used is MATLAB.</li> 
                    <strong>Equipments</strong> <li> This lab is equipped with excellent facilities for Instrumentation and control. This lab includes various kits, Hardware/Software as well as specialized computer language compilers software (MATLAB)</li>
                    <li>Bridge Kits</li>
                    <li>LVDT Trainer</li>
                    <li>P,PI,PID Controllers</li>
                    <li>Synchro Controllers</li>
                    <li>AC Servo Motors</li>
                    <li>Oscilloscope</li>
                    <li>DC Position Control System</li>
                    <li>AC Position Control System</li>
                    <li>AC Servo Motor</li>
                    <li>Resistive Load Single Phase</li>
                    <li>Inductive Load Three Phase</li>
                    <li>Capacitive Load</li>
                    <li>Earth Tester</li>
                    <li>Megger</li>
                    <li>Stepper Motor</li>
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/CSE/lab/BD.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <strong>Power Electronics And Drives Laboratory</strong>
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>Background</strong> <li> The power electronics lab augments the knowledge of the EEE students by providing them a better understanding of the concepts and working of advanced power semiconductor devices and power electronics circuits.</li>
                    <strong>Description</strong>  In this lab:
                    <li>R,RC and UJT triggering circuits are built to know the procedure to give and adjust the firing pulse to the SCR so as to make it to conduct. 1-phase semi converter and full converter experiments are performed to understand the conversion of AC supply to DC supply and the variation of average output voltage for different firing angles. 1-phase AC voltage controller using TRIAC is done to get the variable AC output voltage from fixed AC input voltage. For converting DC to AC, 1-phase series inverter, 1-phase parallel inverter and 1-phase Mc Murray inverter experiments inverter are conducted. Voltage and current commutated chopper circuits are built to understand the conversion of fixed DC to variable DC voltage by voltage commutation and current commutation respectively. Speed control of DC shunt motor, universal motor and three phase induction motor using respective power electronics circuits are also done.</li> 
                    <strong>curriculum objectives </strong> To set up circuits for various applications in power electronics
                    <strong>Equipments:</strong>
                    <li>Voltage commutated chopper</li> 
                    <li>Current commutated chopper</li> 
                    <li>Series inverter</li> 
                    <li>Parallel inverter</li> 
                    <li>Mc Murray inverter</li> 
                    <li>Universal motor speed control drive</li> 
                    <li>DC motor speed control drive</li> 
                    <li>AC voltage controller using SCR and TRIAC</li> 
                    <li>1-phase half converter</li> 
                    <li>1-phase full converter</li> 
                    <li>3-phase half wave and full wave converter</li> 
                    <li>1-phase cyclo-converter</li> 
                    <li>Spectrum analyzer</li> 
                    <li>TMS320F240 digital signal processor</li> 
                    <li>Mc Murray Bedford inverter</li> 
                    <li>CRO</li> 
                    <li>Function generator</li> 
                    <li>300V RPS</li> 
                    <li>R, RC and UJT triggering circuits</li> 
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/CSE/lab/SW.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <strong>Power System Simulation Laboratory</strong>
                    </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>Background</strong> <li> The chief goal of the Power System Simulation lab is to provide assistance to students that will enhance their chances of succeeding in technology-based assignments and to provide access to equipment that will support the needs of instruction where we cherish life-long learning. The Simulation lab supports the curriculum of the Anna University and the assignments of the faculty.
                    </li>
                    <strong>Description</strong> <li> The aim of this laboratory is to provide required simulations facilities to the undergraduate students in order to meet their requirements in the field of the Electrical engineering profession. The major emphasis is laid on doing project works on designing Electrical and Electronics circuits using latest application packages such as MATLAB, PSPICE, ETAP and other engineering packages which are greatly used by the undergraduate students. It is equipped with computers and remains active during all working days. Required printing facilities are also available to all its users.</li> 
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/CSE/lab/SW.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <strong>Electrical Machines Laboratory</strong>
                    </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>Background</strong> <li> This is our core set of laboratories, in terms of curriculum. Its overall needs are versatility and generality, in view of the many fundamental course needs it serves. This lab in general holds enough number of experiments appropriate for giving students a sufficient exposure thereby enabling them to easily adopt experiments in more advanced laboratories in the department.</li>
                    <strong>Description</strong> <li> This is the major lab where experiments like load test on various machines, speed control tests, open circuit tests, short circuit tests, etc are carried out and also wide variety of experiments are performed here with combination of different rotating machines. The laboratory is also used for research activities in machines and to carry out project works on energy conversion.</li> 
                    <strong>Major Equipments</strong> <li> Rectifier, motor-generator set, motor- alternator set, induction motor, synchronous motor, variety of transformers, lamploads, inductive loads, resistive loads, compound machines, tachometers, voltmeters ,ammeters, wattmeters, megger ,frequency meter, synchroscope, rheostats, variety of starters, DC motors, etc.</li> 
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/CSE/lab/SW.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <strong>Electric Circuits Laboratory</strong>
                    </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>Background</strong> <li>The students will learn the basic requirements for building simple DC/AC circuits, verification of circuit theorems, employ power supplies as well as measure electrical parameters of current, voltage, resistance with multimeters and oscilloscopes. The Electric Circuit Laboratory is utilised by EEE & ECE branches of students for lab work.</li>
                    <strong>Major Equipments</strong> <li> Voltmeters, Ammeters, CRO, DSO, Regulated Power Supply, Single phase Energy meter, Power factor meter, Wattmeter(LPF and UPF), resistive load, inductive load, capacitive load, multimeter, DRB, DCB & DIB and consumables such as Resistors, Capacitors & Inductors.</li> 
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/CSE/lab/SW.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <strong>Linear Integrated Circuits Laboratory</strong>
                    </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>Background</strong> <li> The main objective of this lab course is to gain the practical hands on experience by exposing the students to various linear IC applications. The lab also introduces to the students 555 timer and IC 741 and its applications, various voltage regulators. The testers for IC are available.</li>
                    <strong>Major Equipments</strong> <li> Digital Multimeter, IC Tester (Analog), Cathode Ray Oscilloscope, Dual Power Supply, Function Generator (3MHz), Linear IC Trainer Kits, ADC & DAC Measurements & Controller, PSPICE Software, Digital IC’s.</li> 
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/CSE/lab/SW.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    <strong>Microwave And Fiber Optics</strong>
                    </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>Experiments</strong> 
                    <li>To analyze the performance of simple optical link</li>
                    <li>To Test microwave and optical components</li>
                    <li>To analyze the mode characteristics of fiber</li>
                    <li>To analyze the radiation of pattern of antenna</li>
                    <li>To Formulate the S-Parameters for Microwave components</li>
                    <strong>Equipments</strong> 
                    <li>Klystron Test Bench(X-Band)</li>
                    <li>Advanced fiber Optic trainer Kit</li>
                    <li>Single Mode Fiber Characteristics Trainer</li> 
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/CSE/lab/SW.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    <strong>Embedded System Laboratory</strong>
                    </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>Experiments</strong> 
                    <li>To Learn the working of ARM processor</li>
                    <li>To Understand the Building Blocks of Embedded Systems</li>
                    <li>To Learn the concept of memory map and memory interface</li>
                    <li>To Know the characteristics of Real Time Systems</li>
                    <li>To Write programs to interface memory, I/Os with processor</li>
                    <li>To Study the interrupt performance</li>
                    <strong>Equipments</strong> 
                    <li>Embedded trainer kits with ARM board</li>
                    <li>ARM CORTEX M3</li>
                    <li>Zigbee Module</li>
                    <li>Temperature sensor for Embedded trainer kits</li>
                    <li>Stepper Motor</li>
                    <li>Keyboard</li>
                    <li>LCD</li>
                    <li>ADC</li>
                    <li>DAC Starter Kit</li>
                    <li>On Board RTC & Serial port using UART Interface</li>
                    <li>On Board EEPROM Interface & Interrupt</li>
                    <li>On-chip PWM Interface</li>  
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/CSE/lab/SW.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>




                </div>
                  </div>
                </div>
                </div>


            
            <!--<div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Common Computer Lab</h3>
                  <p class="fst-italic text-justify">The Department of Computer Science and Engineering has a well-established Computer Practices Laboratory exclusively for First Year students. Computer Practices laboratory provides essential facilities to the students to enhance their knowledge in Programming. The common Lab is equipped with 125 Lenovo Desktop Computer with Intel i3 processor, Windows 7 Professional edition,4 LCD Projector, 2 ton carrier split AC-11,20 KVA UPS-2.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="https://webdocs.pages.dev/assets/img/CSE/lab/CM.png" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>BigData Lab</h3>
                  <p class="fst-italic text-justify">Big data lab is typically equipped with internet access. Computers in this lab are typically arranged in rows, so that every workstation has a similar view of one end of the room to facilitate lecturing or presentations, to facilitate small group work. The Big Data Lab is equipped with 40 Lenovo Desktop computers with Intel i7 Processor, 64 bit OS, 8GB Ram, on screen projector & centralized AC. Programming and Data Structures, Object Oriented Programming Systems, Operating Systems, Internet Programming, Grid and Cloud Computing Lab practical classes are conducted in this Laboratory.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="https://webdocs.pages.dev/assets/img/CSE/lab/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <br>
                  <h3>Software Development Lab</h3>
                  <p class="fst-italic text-justify"> Software Development Lab is typically equipped with internet access. Computers in this lab are typically arranged in rows, so that every workstation has a similar view of one end of the room to facilitate lecturing or presentations, to facilitate small group work. The Software Development Lab is equipped with 40 Dell Desktop computer with Intel i3 Processor, 32 bit OS,4 GB Ram and 3 AC. Compiler Laboratory and Database Management system, Software Development, Computer Graphics, Mobile Application Development and Network Laboratory practical classes are conducted in this Laboratory.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="https://webdocs.pages.dev/assets/img/CSE/lab/SW.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>-->
            <div class="tab-pane" id="tab-">
              <div class="row">
                <div class="col-lg-12 details order-2 order-lg-1">
                  <h3>Achievements</h3>
                  
                 <!-- Default Accordion -->
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      2021
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>All the computer science department students</strong> <li> haveparticipated in the Lecture Series on “ Mobile Application Development using Android Studio “ held on 22-05-2021 organized by Institution’s Innovative Councilin association with Department of Computer Science andEngineering,Stella Mary’s College of Engineering.</li>
                      <strong>All the computer science department students</strong> <li>have participated in the Lecture Serieson “ InnovationinNetworkSimulationusingNS2 ” held on 29-05-2021 organized by Institution’s Innovative Councilin association with Department of Computer Science andEngineering,Stella Mary’s College of Engineering. </li>
                      <strong>All the computer science department students</strong> <li> have participated in the Lecture Series on “Opportunities inSoftware Testing ”held on 21-05-2021 organized by Institution’s Innovative Councilin association with Department of Computer Science and Engineering, StellaMary’s College of Engineering.</li>
                      
                    
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      2020
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>K.Lakshmi Prabha</strong> <li> second year CSE participated a Webinar on "DEVOPS" organized by Star Certification on 11th May 2020.</li>
                      <strong>J.ShaksiyaBrindha Mol</strong> <li> second year CSE participated in a Webinar on "Data Science for Engineers" organized by Sri Eswar College of Engineering, Coimbatore on 13th May 2020.</li>
                      <strong>J.ShaksiyaBrindha Mol</strong> <li> econd year CSE participated in a Webinar on "Artificial Intelligence and Machine Learning" organized by Sri Eswar College of Engineering, Coimbatore on 14th May 2020.</li>
                      <strong>All the students of Computer Science Department</strong> <li> have attended One Day Live Webinar on "Employability Skills for the Future” presented by Mr. Daniel Jacob, Vice President, HR EC Group International on 20th May 2020.</li>
                      <strong>All the students of Computer Science Department</strong> <li> have attended one day Live Webinar on "Data Science and its Applications” presented by Mr.DilipMuralidaran, Senior Technical Instructor, Splunk on 9th June 2020.</li>
                      <strong>All the students of Computer Science Department</strong> <li> have attended one day Live Webinar on "Internet of Things” presented by Mr. Solomon Ashok, Director, Splendio Technologies on 18th June 2020.</li>
                      <strong>All the students of Computer Science Department</strong> <li> have attended one day Live Webinar on "Explore Yourselves in Real time Projects” presented by Mrs. Sandhi Durairaj on 18th June 2020.</li>
                      <strong>Dhamodaran.N</strong> <li> third year student won first prize inDebugging held at St.Xavier's College of Engineering on7th February 2020.</li>
                      <strong>Renold.A</strong> <li>third year student won second prize in WebDesigning held at St.John's College of Arts and Science on11th February 2020. </li>
                      <strong>Dhamodaran.N</strong> <li> third year student won second prize inSmart Coding held at St.John's College of Arts and Scienceon 11th February 2020.</li>
                      <strong>Ashik Christo Mourin.M</strong> <li>second year student won firstprize in Paper Presentation and Cinematography held atPonjesly College of Engineering on 22nd February 2020. </li>
                      <strong>Dhamodaran.N</strong> <li> third year student won first prize inCode Debugging held at Ponjesly College of Engineeringon 22nd February 2020.</li>
                      <strong>Ashik Christo Mourin.M</strong> <li> second year student wonsecond prize in Project Presentation held at PonjeslyCollege of Engineering on 22nd February 2020.</li>
                      <strong>Dhamodaran.N</strong> <li>third year student won second prize inWeb Designing and Technical Quiz held at PonjeslyCollege of Engineering on 22nd February 2020. </li>
                  

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      2019
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>M.Jayindra, K.Lakshmi Prabha</strong> <li> second year haveparticipated and presented a paper as a part ofKRYPTOZ in Mar Ephraem College of Engineeringon 8th August 2019.</li>
                      <strong>Minisha P.M</strong> <li> of final year presented a paper entitled"Sentimental Analysis of Twitter Data" in BethlehemCollege of Engineering on 9th August 2019.</li>
                      <strong>K.Lakshmi Prabha</strong> <li>second year has participatedand presented a paper in Bethlehem College Of Engineering on 9th August 2019. </li>
                      <strong>Minisha P.M </strong> <li> final year presented a paper entitled"Sentimental Analysis of Twitter Data " in LoyalaInstitute of Technology on 31st August 2019.</li>
                      <strong>Ashik Christo Mourin.M</strong> <li> ofthird year presented a paperentitled "Integration of CloudComputing with Internet ofThings" and won second prizein Loyala Institute ofTechnology on 31st August2019.</li>
                      <strong>Minisha M.P</strong> <li> third year student presented a paper entitled“Sentimental Analysis of Twitter Data" and secured first prize inStella Mary's College of Engineering, Azhikal on 20th February2019.</li>
                      <strong>Minisha M.P</strong> <li> third year has participated and secured third prize in Tech Talk, National Level Technical Symposium held at Stella Mary’s College of Engineering on 20th February 2019.</li>
                      <strong>Akshai.R</strong> <li>third year student presented a paper entitled"Crossed-Dipole Arrays for DS-CDMA Systems" held at PonjeslyCollege of Engineering on 2nd February 2019. </li>
                      <strong>J. Joel David</strong> <li> third year student presented a paper entitled "Riskbased Estimation of Manufacturing Order Cost with ArtificialIntelligence" in Ponjesly College of Engineering on 2nd February2019.</li>
                      <strong>Minisha.M.P</strong> <li> third year has participated and secured first prizein the paper presentation in Just a Minute & Quiz, National LevelTechnical Symposium held at Ponjesly College of Engineering on2nd February 2019.</li>
                      <strong>J.Joel David</strong> <li> third year has participated and secured secondprize in Photography, National Level Technical Symposium held atRajas College of Engineering on 2nd February 2019. </li>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      2018
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>B.Aishwarya</strong> <li> third year student presented a PaperPresentation on 5G Wireless Technology, National LevelTechnical Symposium held at Rajas International Instituteof Technology on 5th October 2018.</li>
                      <strong>B.Aishwarya</strong> <li> third Year has participated and securedfirst prize in Code Debugging, National Level TechnicalSymposium held at Rajas College of Engineering on 5thOctober 2018.</li>
                      <strong>B.Aishwarya</strong> <li> third year student presented a paper entitled "A Smart Home Energy Management System Using Big Data Analytics" on National Level Technical Symposium in Rajas International Institute of Technology on 28th September 2018.</li>
                      <strong>Ajini A.V</strong> <li> Final year student got third place in Technical Quiz organized by Rohini college Of Engineering &Technology on 20th March 2018.</li>
                      <strong>Ajini A.V</strong> <li> Final year student got second place in paper presentation in National Level Technical Symposium held at Kalaivanar N.S.K College of Engineering on 16th March 2018.</li>
                      <strong>A.George Stalin Britto</strong> <li> Final year student wonfirst prize in ElocutionCompetition held at St.Hindu College,Nagercoil (NationalVoters Day on 25thJanuary 2018).</li>
                      
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      2017
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Archana Vijayan and Catherine SethiRaj.K</strong> <li>secondyear have participated and presented a paper entitled"Location Privacy preserving using Semi-TTP Server" inHeera College of Engineering and Technology,Trivandrum on 11th September 2017. </li>
                      <strong>Artheya R.S, Prabha.S and Priyanka Lidiya.P</strong> <li>secondyear have participated and presented a paper entitled "ANew Method of Text Categorization and Summarizationwith Fuzzy Confusion Matrix" in Heera College ofEngineering and Technology, Trivandrum on 11thSeptember 2017. </li>
                      <strong>Ashwini Priya.J, JeyaBrintha.M.R</strong> <li> hird year have participated and presented a paper entitled "Novel Algorithm for Finding the Closest l-mers in Biological Data" and secured second prize held at Marian Engineering College, Trivandrum on 4th September 2017.</li>
                      <strong>M.SornaRevathy and W.SherlinVivitha</strong> <li>Second year students presented a paper entitled "Effective Method for Energy Saving" in Rohini College of Engineering on 21st February 2017. </li>
                      <strong>M.SoranaRevathy and W.SherlinVivitha</strong> <li> Second yearstudents presented a paper entitled "Effective Method forEnergy Saving" in Arunachala College of Engineering forWomen on 25th January 2017.</li>
                      <strong>Sheeba Ann Thomas and SahayaNishanthini.M</strong> <li> Finalyear students presented a paper entitled "A Real Time EventDetection and Notification Listing Social Media" inArunachala College of Engineering for Women on 25thJanuary 2017.</li>
                      <strong>Ajini.A.V and Gokul Priya.C</strong> <li> third year studentspresented a paper entitled "Security Issues IRV6:AComprehensive Overview" in Arunachala College ofEngineering for Women on 25th January 2017.</li>
                     
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
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
                </div>
              </div><!-- End Default Accordion Example -->
                
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-5">
            <div class="row row justify-content-center">
                  <div class="">
                    <!-- ======= Services Section ======= -->
      <section id="services" class="services">
          <div class="container">
            <div class="row justify-content-center">
            <div class="section-title" data-aos="fade-up">
                            <h2>Syllabus</h2>
                            <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                          </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <h4 class="title"><a href="https://webdocs.pages.dev/assets/docs/eee/syllabus/2021.pdf">Regulation 2021</a></h4>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <h4 class="title"><a href="https://webdocs.pages.dev/assets/docs/eee/syllabus/2017.pdf">Regulation 2017</a></h4>
                  </div>
                </div>
            </div>
          </div>
        </section><!-- End Services Section --></div>
                </div>
              </div>
              <div class="tab-pane" id="tab-6">
              <div class="row row justify-content-center">
                  <div class="">
                    <!-- ======= Services Section ======= -->
                    <section id="services" class="services">
          <div class="container">
            <div class="row justify-content-center">
            <div class="section-title" data-aos="fade-up">
                            <h2>Outcome</h2>
                            <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                          </div>
                          <div class="col-md-6 col-lg-12">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-journal-richtext"></i></div>
                  <h4 class="title"><a href="">Programme Outcomes</a></h4>
                <li class="text-justify"><strong>Engineering knowledge:</strong> Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems.</li>
                <li class="text-justify"><strong>Problem analysis:</strong> Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of Mathematics, natural sciences, and engineering sciences.</li>
                <li class="text-justify"><strong>Design/development of solutions:</strong> Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal and environmental considerations.</li>
                <li class="text-justify"><strong>Conduct investigations of complex problems:</strong>Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data and synthesis of the information to provide valid conclusions.</li>
                <li class="text-justify"><strong>Modern tool usage:</strong>Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.</li>
                <li class="text-justify"><strong>The engineer and society:</strong>Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.</li>
                <li class="text-justify"><strong>Environment and sustainability:</strong>Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.</li>
                <li class="text-justify"><strong>Ethics:</strong>Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.</li>
                <li class="text-justify"><strong>Individual and team work:</strong>Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.</li>
                <li class="text-justify"><strong>Communication:</strong>Communicate effectively on complex engineering activities with the engineering community and with society at large, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.</li>
                <li class="text-justify"><strong>Project management and finance:</strong>Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work, as a member and leader in a team, to manage projects and in multidisciplinary environments.</li>
                <li class="text-justify"><strong>Life-long Learning:</strong>Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change</li>
                  </div>
              </div>
              <ol></ol>
              <div class="col-md-6 col-lg-12">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-journal-richtext"></i></div>
                  <h4 class="title"><a href="">Program Specfic Outcomes</a></h4>
                  <p class="fst-italic">On completion of Electrical and Electronics Engineering program, the student will have the following Program Specific Outcomes:</p>
                  <li class="text-justify"><strong>PSO1 Foundation of Electrical Engineering:</strong> Ability to understand the principles and working of electrical components, circuits, systems and control that are forming a part of power generation, transmission, distribution, utilization, conservation and energy saving. Students can assess the power management, auditing, crisis and energy saving aspects.</li>
                  <li class="text-justify"><strong>PSO2 Foundation of Mathematical Concepts:</strong> Ability to apply mathematical methodologies to solve problems related with electrical engineering using appropriate engineering tools and algorithms.</li>
                  <li class="text-justify"><strong>PSO3 Computing and Research Ability:</strong> Ability to use knowledge in various domains to identify research gaps and hence to provide solution which leads to new ideas and innovations.</li>
                
                  </div>
                </div>
            </div>
          </div>
        </section><!-- End Services Section --></div>
                </div>
              </div>
              <div class="tab-pane" id="tab-7">
                <div class="row">
                  <div class="">
                    <!-- ======= Services Section ======= -->
      <section id="services" class="services">
          <div class="container">
            <div class="row">
            <div class="section-title" data-aos="fade-up">
                            <h2>Academic Calender</h2>
                            <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                          </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2023-24 EVEN</a></h4>
                </div>
                <ol></ol>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2023-24 ODD</a></h4>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2022-23 EVEN</a></h4>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2022-23 ODD</a></h4>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2021-22 EVEN</a></h4>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2021-22 ODD</a></h4>
                </div>
                <ol></ol>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2020-21 EVEN</a></h4>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2020-21 ODD</a></h4>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2019-20 EVEN</a></h4>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2019-20 ODD</a></h4>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2018-19 EVEN</a></h4>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2018-19 EVEN</a></h4>
                </div>
              </div>
            </div>
          </div>
        </section><!-- End Services Section --></div>
                </div>
              </div>
              <div class="tab-pane" id="tab-8">
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
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume1issue1.pdf">Volume I, Issue 1 : Dec 2017</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #5578ff;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume1issue2.pdf">Volume I, Issue 2 : April 2018</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume2issue1.pdf">Volume II, Issue 1 : Dec 2018</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #e361ff;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume2issue2.pdf">Volume II, Issue 2 : April 2019</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #47aeff;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume3issue1.pdf">Volume III, Issue 1 : Dec 2019</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #ffa76e;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume3issue2.pdf">Volume III, Issue 2 : April 2020</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #11dbcf;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume4issue1.pdf">Volume IV, Issue 1 : Dec 2020</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #4233ff;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume4issue2.pdf">Volume IV, Issue 2 : April 2021</a></h3>
                              </div>
                            </div>
                            <!--<div class="col-lg-3 col-md-4 mt-4">
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
                      <div class="tab-pane" id="tab-9">
                        <div class="row">
                            <section id="features" class="features">
                                <div class="container">
                          
                                  <div class="section-title" data-aos="fade-up">
                                    <h2>Magazine</h2>
                                    <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                                  </div>
                          
                                  <div class="row" data-aos="fade-up" data-aos-delay="300">
                                    <div class="col-lg-3 col-md-4">
                                      <div class="icon-box">
                                        <i class="ri-file-list-3-line" style="color: #ffbb2c;"></i>
                                        <h3><a href="https://webdocs.pages.dev/assets/docs/civil/magazine/2017-18.pdf">2017-2018</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                                      <div class="icon-box">
                                        <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                                        <h3><a href="https://webdocs.pages.dev/assets/docs/civil/magazine/2018-19.pdf">2018-2019</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                                      <div class="icon-box">
                                        <i class="ri-database-2-line" style="color: #e80368;"></i>
                                        <h3><a href="https://webdocs.pages.dev/assets/docs/civil/magazine/2019-20.pdf">2019-2020</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                                      <div class="icon-box">
                                        <i class="ri-database-2-line" style="color: #e361ff;"></i>
                                        <h3><a href="https://webdocs.pages.dev/assets/docs/civil/magazine/2020-21.pdf">2020-2021</a></h3>
                                      </div>
                                    </div>
                                   
                                  </div>
                          
                                </div>
                              </section><!-- End Features Section -->
                              </div>
                              </div>
                              <div class="tab-pane" id="tab-10">
                          <div class="row">  
                            <div class="">
      
                              <!--slider start here-->
                        
                              <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000"> <!-- Change the data-bs-interval value as needed -->
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


                                <div class="tab-pane" id="tab-11">
                          <div class="row">  
                            <div class="">
                            <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <p>Words from our Alumni</p>
        </div>

        <div class="testimonials-slider swiper text-justify" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://webdocs.pages.dev/assets/img/testimonials/Vaishnavi.jpeg" class="testimonial-img" alt="">
                  <h3>Vaishnavi M J</h3>
                  <h4>ECE - Alumni 2019-23 &amp; Software Developer @ Agile Cyber Solutions</h4>
                  <p class ="text-justify">
                    <i class="bx bxs-quote-alt-left quote-icon-left text-justify"></i>
                    infrastructure provided by our institution Stella Mary's College of Engineering and the unwavering support of my teachers have been instrumental in facilitating my achievement. The constant guidance and insightful feedback they have imparted have enriched my learning experience and empowered me to reach new heights. I am forever thankful..
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

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