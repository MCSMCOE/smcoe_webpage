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
              <li><a href="#">Facts & Figures</a></li>
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
                <li><a href="https://webdocs.pages.dev/assets/docs/r&d/Starup-Policy.pdf">Startup Policy</a></li>
                <li><a href="research_seedmoney.php">Stella Mary's Seed Money</a></li>
                <li><a href="research_mou.php">MoU</a></li>
              </ul>
          <li class="dropdown"><a href="#"><span>Students' Zone</span> <i class="bi bi-chevron-right"></i></a>  
          <ul>
          <li><a href="Sports.php">Sports</a></li>
              <li class="dropdown"><a href="#more-services" href="#"><span>Clubs & Cells</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="culturalclub.php">Cultural Club</a></li>
                <li><a href="lc.php">Literary Club</a></li>
                <li><a href="#">Yoga Club</a></li>
                <li><a href="cfi.php">Centre For Innovation</a></li>
                <li><a href="nss.php">National Cadet Corps</a></li>
                <li><a href="jrc">Juniour Red Cross</a></li>
                <li><a href="grievance.php">Grievance Redressal Cell</a></li>
                <li><a href="ar.php">Anti Ragging</a></li>
                <li><a href="edc.php">Entrepreneurship Development Cell</a></li>
                <li><a href="#">Environmental Club</a></li>
                <li><a href="#">Institution Innovation Council</a></li>
                <li><a href="icc.php">Internal Complaint Cell</a></li>
                <li><a href="research_codeofethics.php">Research and Development Cell</a></li>
                <li><a href="placement_home.php">Career Guidance and Placement Training Cell</a></li>
                <li><a href="icc.php">Internal Complaint Cell</a></li>
                <li><a href="mediacell.php">Media Cell</a></li>
              </ul>
              <li><a href="#">Professional Ethics</a></li>
              <li><a href="#">Capability Enhancement</a></li>
              <li><a href="#">E-Learning</a></li>
              <li><a href="#">Internship</a></li>
              <li><a href="#">Campus Activities</a></li>
              <li><a href="https://www.infomirrorscloud.com/smce.webopac/Imt_frm_User_Login.aspx">Library</a></li>
              <li><a href="https://nptel.ac.in">NPTEL</a></li>
              <li><a href="https://delnet.in">DELNET</a></li>
              <li><a href="alumni.php">Alumni Association</a></li>
              <li><a href="#">SWYAM - MOOC</a></li>
                <ul>
          <li><a class="nav-link scrollto" href="placement_home.php">Placement</a></li>
          <li><a class="nav-link scrollto" href="iqac.php">IQAC</a></li>    
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          </ul>
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
        <h2>ME Industrial Safetey Engineering</h2>
      <p>Department encompasses the design, analysis, and manufacturing of mechanical systems and devices, including engines, machines, and structures, to address diverse engineering challenges and improve efficiency and functionality. </p>
   
    </section> </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Cource Details Section ======= -->
  <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-7">
          <img src="https://webdocs.pages.dev/assets/img/meis/is.jpg" class="img-fluid" alt="">
          </div>
        <div class="col-lg-4">

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Head of the Department</h5>
            <p><a href="faculty.php?staff_id=1079"
                    <?php 
                    printf("%s", $data["first_name"]);
                    ?>">Dr.Michael Raj</a></p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Total Intake</h5>
            <p>120</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Budding Engineers</h5>
            <p>200</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Proud Alumni</h5>
            <p>250</p>
          </div>

        </div>
        <h3> Overview</h3>
          <p>
            The Department of Mechanical Engineering has been in existence since 2013 with the intake of 60 students. The department has excellent infrastructure by keeping on par with the latest trends. The Department is grown into a full-fledged one with well-equipped lab facilities, Infrastructure and faculty members of various specializations. The faculty members are not only committed to the teaching profession but also involve themselves in research and constantly, filing patent publish papers in conference proceedings, International and National Journals with respect to their field of specialization. The department has been producing excellent results with distinction in the university examinations consistently.
        </p>
        <p>The Department provides high quality education along with discipline. The faculty members make it possible to give individual attention to the learners and to motivate them to achieve their professional goals. The curriculum structure of the department is designed to meet the present day requirement of Industries and corporate sectors. The interaction between the staff and students is excellent and all the laboratories are well equipped as per the requirements of the curriculum.</p>
        
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
                <p class="description">To impart nationally and internationally recognized education on Mechanical Engineering, leading to well qualified engineers who are innovative contributors to the profession and successful in advanced studies and research</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-10 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">MISSION</a></h4>
                <li>To provide an international class of education enabling the students to have the ability to design, plan, engineer, administer and manage the latest technologies in the field of Mechanical Engineering.</li>
                <li>To train students to face the future challenges of industries and society.</li>
                <li>To equip the students to take leading positions in industry, academia, and PSUs both in India and abroad.</li>
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
            <p>The pillars of Idustrial Safetey ofEngineering</p>
          </div>
  
          <div class="row justify-content-center">
          <?php
            $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',staff_master.staff_id,'.png') imglink,staff_master.staff_id AS staff_id,master_desigination.desigination desigination, GROUP_CONCAT(staff_promotion.md_id), staff_master.legend , CONCAT(staff_master.first_name,' ',staff_master.last_name)first_name , staff_master.department_id,master_department.dept_name , staff_photo.photo ,  staff_promotion.status, staff_qualification.status,staff_promotion.from_date, GROUP_CONCAT(deg_type ORDER BY staff_qualification.yop) deg_type FROM camps.staff_master INNER JOIN camps.master_department ON (staff_master.department_id = master_department.department_id  AND staff_master.sc_id=1) INNER JOIN camps.staff_photo ON (staff_photo.staff_id = staff_master.staff_id) INNER JOIN camps.staff_promotion ON (staff_promotion.staff_id = staff_master.staff_id) INNER JOIN camps.staff_qualification ON (staff_qualification.staff_id = staff_master.staff_id AND staff_qualification.status=1) INNER JOIN camps.master_desigination ON master_desigination.md_id=staff_promotion.md_id INNER JOIN camps.staff_degree_type ON (staff_qualification.degree_id = staff_degree_type.degree_id) WHERE staff_promotion.status=2 AND staff_degree_type.degree_id NOT IN (23,24) AND  staff_master.working_status='working' AND master_department.department_id='5' GROUP BY staff_master.staff_id;";
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
            <p>The supporting hands of Mechanical Engineering</p>
          </div>
  
          <div class="row justify-content-center">
          <?php
            $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',staff_master.staff_id,'.png') imglink,staff_master.staff_id AS staff_id,master_desigination.desigination desigination, GROUP_CONCAT(staff_promotion.md_id), staff_master.legend , CONCAT(staff_master.first_name,' ',staff_master.last_name)first_name , staff_master.department_id,master_department.dept_name , staff_photo.photo ,  staff_promotion.status, staff_qualification.status,staff_promotion.from_date, GROUP_CONCAT(deg_type ORDER BY staff_qualification.yop) deg_type FROM camps.staff_master INNER JOIN camps.master_department ON (staff_master.department_id = master_department.department_id  AND staff_master.sc_id=2) INNER JOIN camps.staff_photo ON (staff_photo.staff_id = staff_master.staff_id) INNER JOIN camps.staff_promotion ON (staff_promotion.staff_id = staff_master.staff_id) INNER JOIN camps.staff_qualification ON (staff_qualification.staff_id = staff_master.staff_id AND staff_qualification.status>0) INNER JOIN camps.master_desigination ON master_desigination.md_id=staff_promotion.md_id INNER JOIN camps.staff_degree_type ON (staff_qualification.degree_id = staff_degree_type.degree_id) WHERE staff_promotion.status=2 AND staff_degree_type.degree_id NOT IN (23,24) AND  staff_master.working_status='working' AND master_department.department_id='5' GROUP BY staff_master.staff_id;";
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
                  <h3>Communication Systems</h3>
                  <strong>Experiments</strong> <li>To visualize the effects of sampling and TDM,
                    To Implement AM & FM modulation and demodulation,
                    To implement PCM & DM, To implement FSK, PSK and DPSK schemes,
                    To implement Equalization algorithms,
                    To implement Error control coding schemes
                    </li>
                  <strong>Equipments</strong> <li> AM & FM modulation and demodulation Kit,
                    Time Division Multiplexing Kit,
                    Pulse Code Modulation & Delta Modulation Kit,
                    Frequency Shift Keying, Phase Shift keying Kit,
                    Frequency Division Multiplexing Kit,
                    Sampling Kit</li>
                       
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/CM.png" alt="" class="img-fluid">
                </div>
              </div>
            
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Manufacturing Technology Laboratory</h3>
                   <strong>Overview</strong> <li> This lab is to study and practice the various operations that can be performed in lathe, shaper, drilling, milling machines etc., and to acquire knowledge on various basic machining operations in special purpose machines and its applications in real life manufacture of components to equip with the practical knowledge required in the core manufacturing industries. The laboratory courses Manufacturing Technology-I and Manufacturing Technology-II will be taught using this laboratory.</li>
                  <strong>Equipments</strong> <li> 
                    Centre Lathes,
                    Horizontal Milling Machine,
                    Vertical Milling Machine,
                    Shaper,
                    Arc welding transformer with cables and holders,
                    Oxygen and acetylene gas cylinders, blow pipe and other welding outfit,
                    Molding table, Molding equipments,
                    Sheet metal forming tools and equipments,
                    Turret and Capstan Lathes,
                    Horizontal Milling Machine,
                    Vertical Milling Machine,
                    Surface Grinding Machine,
                    Radial Drilling Machine,
                    Lathe Tool Dynamometer,
                    Milling Tool Dynamometer,
                    Gear Hobbing Machine,
                    Tool Makers Microscope,
                    CNC Lathe,
                    CNC Milling machine,
                    Gear Shaping machine,
                    Centerless grinding machine,
                    Tool and cutter grinder,
                    Cylindrical Grinding Machine,
                    Injection Molding Machine
                    </li>
                       
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Metrology And Measurement Laboratory</h3>
                <strong>Objective</strong> <li>This laboratory is to familiarize the students with different measurement aids and equipments and its use in the industries for quality inspection.</li>
                <strong>Equipments</strong> <li> 
                  Micrometer,
                  Vernier Caliper,
                  Vernier Height Gauge,
                  Vernier depth Gauge,
                  Slip Gauge Set,
                  Gear Tooth Vernier,
                  Sine Bar,
                  Floating Carriage Micrometer,
                  Profile Projector,
                  Tool Makers Microscope,
                  Mechanical / Electrical / Pneumatic Comparator,
                  Autocollimator,
                  Temperature Measuring Setup,
                  Force Measuring Setup,
                  Torque Measuring Setup,
                  Coordinate measuring machine,
                  Surface finish measuring equipment,
                  Bore gauge,
                  Telescope gauge.
                  </li> 
              </div>
              
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>MECHATRONICS LABORATORY</h3>
                  <strong>Objective</strong> <li> This lab is to familiarizing the students with the method of programming the microprocessor and also with the design, modeling & analysis of basic electrical, hydraulic & pneumatic systems which enable the students to understand the concept of mechatronics.</li>
                  <strong>Equipments</strong> <li> 
                    Transducers ( Pressure , Temperature , Strain , LVDT),
                    Basic Hydraulic Trainer Kit,
                    Basic Pneumatic Trainer Kit with manual and electrical controls,
                    Basic Pneumatic Trainer Kit with PLC Control,
                    Hydraulics Systems Simulation Software,
                    Pneumatics Systems Simulation Software,
                    8051 - Microcontroller kit with stepper motor and drive circuit sets , Traffic control,
                    Image processing system with hardware & software</li> 
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Strength Of Materials Laboratory</h3>
                  <strong>Objective</strong> <li> To supplement the theoretical knowledge gained in the theory courses like Engineering Metallurgy and Strength of Material with practical testing for determining the material behavior and strength of materials under externally applied loads. This would enable the student to have a clear understanding of the design for strength and stiffness.</li>
                  <strong>Equipments</strong> <li> 
                    Universal Tensile Testing machine with double shear attachment – 40 Ton Capacity
                    Torsion Testing Machine (60 NM Capacity),
                    Impact Testing Machine (300 J Capacity),
                    Brinell Hardness Testing Machine,
                    Rockwell Hardness Testing Machine,
                    Spring Testing Machine for tensile and compressive loads (2500 N),
                    Metallurgical Microscopes,
                    Muffle Furnace (1200 C).
                    </li> 
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Fluid Mechanics and Machinery Laboratory</h3>
                   <strong>Objective</strong> <li> This lab is to study the applications of the conservation laws to flow through pipes and hydraulic machines. To understand the importance of dimensional analysis. To understand the importance of various types of flow in pumps and turbines. Upon Completion of this lab, the students can able to have hands on experience in flow measurements using different devices and also perform calculation related to losses in pipes and also perform characteristic study of pumps, turbines etc.,</li>
                  <strong>Equipments</strong> <li> 
                    Orifice meter setup,
                    Venturi meter setup,
                    Rotameter setup,
                    Pipe Flow analysis setup,
                    Centrifugal pump / submergible pump setup,
                    Reciprocating pump setup,
                    Gear pump setup,
                    Pelton wheel turbine setup,
                    Francis turbine setup,
                    Kaplan turbine setup,
                    Notch Apparatus,
                    Minor Losses Apparatus,
                    Multi Stage Centrifugal Pump,
                    Orifice and Mouth piece setup,
                    Bernoulli’s setup,
                    Meta Centric Height Setup,
                    Pitot Tube,
                    Hydraulic Flume Test setup
                    </li> 
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Kinematics And Dynamics Laboratory</h3>
                  <strong>Objective</strong> <li> This laboratory is used to supplement the principles taught in the theory courses like kinematics of Machinery and Dynamics of Machinery to make understand how certain measuring devices are used for dynamic and kinematics testing.</li>
                  <strong>Equipments</strong> <li> 
                    Cam follower setup,
                    Motorized gyroscope,
                    Governor apparatus - Watt, Porter, Proell and Hartnell governors,
                    Whirling of shaft apparatus,
                    Dynamic balancing machine,
                    Two rotor vibration setup,
                    Spring mass vibration system,
                    Torsional Vibration of single rotor system setup,
                    Gear Models,
                    Kinematic Models to study various mechanisms,
                    Turn table apparatus,
                    Transverse vibration setup of
                    cantilever,
                    Free-Free beam,
                    Simply supported beam.
                    </li> 
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Engineering Practices Laboratory</h3>
                  <strong>Objective</strong> <li> This laboratory is to train the students in the basic engineering practices in the field of civil, mechanical, electrical and electronics engineering. All the first year engineering students will be taking this laboratory course in their second semester of the program.</li>
                  <strong>Facilities for Civil Engineering Practices</strong> <li>
                    Assorted components for plumbing consisting of metallic pipes, plastic pipes, flexible pipes, couplings, unions, elbows, plugs and other fittings. 15 Sets.
                    Carpentry vice (fitted to work bench) 15 Nos,
                    Standard woodworking tools 15 Sets,
                    Models of industrial trusses, door joints, furniture joints 5 each,
                    Power Tools:
                    Rotary Hammer 2 Nos,
                    Demolition Hammer 2 Nos,
                    Circular Saw 2 Nos,
                    Planer 2 Nos,
                    Hand Drilling Machine 2 Nos,
                    Jigsaw 2 Nos. </li>
                  <strong>Facilities for Mechanical Engineering Practices</strong> <li> 
                    Arc welding transformer with cables and holders 5 Nos,
                    Welding booth with exhaust facility 5 Nos,
                    Welding accessories like welding shield, chipping hammer, wire brush, etc. 5 Sets,
                    Oxygen and acetylene gas cylinders, blow pipe and other welding outfit. 2 Nos. 34
                    Centre lathe 2 Nos,
                    Hearth furnace, anvil and smithy tools 2 Sets,
                    Moulding table, foundry tools 2 Sets,
                    Power Tool: Angle Grinder 2 Nos.
                    Study-purpose items: centrifugal pump, air-conditioner One each.</li> 
                  <strong>Facilities for Electrical Engineering Practices</strong> <li> Assorted electrical components for house wiring 15 Sets
                    Electrical measuring instruments 10 Sets,
                    Study purpose items: Iron box, fan and regulator, emergency lamp 1 each
                    Megger (250V/500V) 1 No.
                    Power Tools:
                    Range Finder 2 Nos,
                    Digital Live-wire detector 2 Nos,
                    4.Facilities for Electronics Engineering Practices,
                    Soldering guns 10 Nos,
                    Assorted electronic components for making circuits 50 Nos,
                    Small PCBs 10 Nos,
                    Multimeters 10 Nos,
                    Study purpose items: Telephone, FM radio, low-voltage power,
                    Faculty In-charge:</li> 
                  <strong>Facilities for Electronics Engineering Practices</strong> <li> Soldering guns 10 Nos,
                    Assorted electronic components for making circuits 50 Nos,
                    Small PCBs 10 Nos,
                    Multimeters 10 Nos,
                    Study purpose items: Telephone, FM radio, low-voltage power</li>  
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>CADEM CENTRE</h3>
                  <strong>Experiments</strong> <li> CADEM Centre is established to impart practical experience in handling 2D drafting and 3D modeling software. To understand the features of CNC Machine tool and to know the application of various CNC machines like CNC lathe, CNC Vertical Machining centre. To give exposure to software tools needed to analyze engineering problems. To expose the students to different applications of simulation and analysis tools. Students of Mechanical Engineering program use the center for laboratory courses like Computer Aided Machine Drawing, Computer Aided Design and Computer Aided Manufacturing lab, Simulation and Analysis laboratory and Interpersonal skill & listening and speaking laboratory as per their curriculum. They also use this centre for the preparation of Technical Seminar laboratory, mini project and main project.</li>
                  <strong>Equipments</strong> <li> 
                    CNC Lathe,
                    CNC Vertical Milling Machine,
                    Desktops 61 Nos,
                    CreO License 50 Nos,
                    ANSYS License 50 Nos,
                    LCD Projector,
                    Adequate no of head sets,
                    Internet and Intranet Connectivity,
                    Wi-fi Facility,
                    Document scanner and copier</li> 
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
          <h4>Department of Mechanical Engineering</h4>
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
                      <strong>M.S. Deva - Techincal Symposium Mechanize 19</strong> <li>won I  Prize in Pencil Drawing, held on 18-09-2019 organised by Bethlahem Institute of Engineering </li>
                      <strong>A.Vigneshwar - Techincal Symposium Mechanize 19</strong> <li>Won II Prize in Mind Game held on 18-09-2019 organized by Bethlahem Institute of Engineering</li>
                      <strong>Eldison	- Technical Symposium Cynosure 19</strong> <li>Won II Prize in a Mobile Competition held on 20-09-2019 organized by Stella Marys College of Engineering</li>
                      <strong>M.S. Deva	- Technical Symposium Flaaga 19</strong> <li>Won II Prize in Pencil Sketching held on 31-08-2019 organized by Loyola Institute of Technology</li>
                      <strong>R.K.Obisian	- Thekkan Kalari Varma Adimurai Silambam</strong> <li>Won I Prize in Pencil Sketching held on 25-01-2020 organized by Thekkan Kalari Varma Adimurai Silambam Tamilnadu Kalarippayattu Association,Coimbatore</li>
                      

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
                      <strong>J John Benjamin, Reslin R - Techincal Symposium Mechanize 18</strong> <li>won II  Prize in Water Rocketry, held on 28-09-2018 organised by Bethlahem Institute of Engineering </li>
                      <strong>Jinu Kumar J K - Techincal Symposium Mechanize 18</strong> <li>Won I Prize in Best Engineer held on 18-09-2019 organized by Bethlahem Institute of Engineering</li>
                      <strong>K.Surya, A. MuthuMani - National Techincal Symposium “MECHRAND 2K19”</strong> <li>Won II Prize in paper presentation held on 02-02-2019 organized by Ponjesly College of Engineering</li>
                      <strong>A.Vigneshwar - National Techincal Symposium “MECHRAND 2K19”</strong> <li>Won I Prize in just a minute held on 02-02-2019 organized by Ponjesly College of Engineering</li>
                      <strong>R.R.Rohith	- 3rd Kanyakumari book fair-2019</strong> <li>Won I Prize in Pencil Sketching held on 25-02-2019</li>
                      
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