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

    

        <!-- ======= Doctors Section ======= -->
        <section id="team" class="team section-bg">
          <div class="container">
    
            <div class="section-title" data-aos="fade-up">
              <br>
              <h2>Members</h2>
              <p></p>
            </div>
    
            <div class="row justify-content-center">
  
  <?php
    $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',sm.staff_id,'.png') imglink,sm.staff_id,TRIM(CONCAT(sm.`legend`,' ',IFNULL(sm.first_name,''),' ',IFNULL(sm.middle_name,''),' ',IFNULL(sm.last_name,''),' ')) staff_name, md.dept_name,cd.desg_name FROM `documentation`.`club_master` cm INNER JOIN documentation.`club_membership` cms ON cms.`cm_id`=cm.cm_id AND cms.staff_id IS NOT NULL AND cms.status>0 INNER JOIN camps.staff_master sm ON sm.staff_id=cms.staff_id INNER JOIN camps.master_department md ON md.department_id=sm.department_id INNER JOIN documentation.club_desg cd ON cd.cd_id=cms.cd_id INNER JOIN camps.master_academic_year may ON may.ay_id=cms.ay_id AND may.cur_year=1 WHERE cm.cm_id=17";
    $result = mysqli_query($dbcon, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($data = mysqli_fetch_assoc($result)) {
            
    ?>
    <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
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
        </section><!-- End Doctors Section -->


      <section id="services" class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-6  d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">VISION</a></h4>
                <li>Equipping the students with relevant and conceptualized professional skills and guiding them towards a bright future and career all around the world with the values of – Sincerity, Hard Work and Justice.</li>
                <li>To develop national and international links with the business organizations to be able to create meaningful relationship & opportunities for the placement of the students in the global job markets.</li>
                <li>To develop students who are globally employable & ready hands to the industry.</li>
              </div>
            </div>
  
            <div class="col-md-6  d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">MISSION</a></h4>
                <li>To strengthen and enhance Industry – Institute partnership by way of campus connect.</li>
                <li>To create maximum opportunities for the placements of the eligible students in the job market by establishing a rapport with the industry people.</li>
                <li>To impart personality development training to the students to face this competitive era.</li>
                <li>To provide industry-institute-interaction opportunities in order to motivate inter-disciplinary research capabilities with an inquiring mind.</li>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section --></div>


      <section id="resume" class="resume">
        <div class="container">
  
       
  
          <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
              <h3 class="resume-title">Responsibilities of Placement & Training Cell</h3>
              <div class="resume-item pb-0">
                <!--<h4>The institution has a stated code of ethics to check malpractices and plagiarism in Research</h4>
                <p><em>The institution has a stated code of ethics to check malpractices and plagiarism in Research which states:</em></p>-->
                <ul>
                  <strong></strong><li>To register the names of students in the Placement Cell.</li>
                  <strong></strong><li>To collect their resume along with their mark details.</li>
                  <strong></strong><li>To train and groom the students by arranging Soft skill workshops</li>
                  <strong></strong><li>To prepare Brochures of various departments</li>
                  <strong></strong><li>To invite prospective companies to campus for recruitment.</li>
                  <strong></strong><li>To arrange facilities required for the day of the interview</li>
                  <strong></strong><li>To collect appointment letters and distribute them to selected students.</li>
                  <strong></strong><li>To inform the students about various competitive examinations</li>
                  <strong></strong><li>To achieve the maximum possible placements for students.</li>
                  </ul>
              </div>
            </div>
            </div>


            <div class="row">
              <div class="col-lg-12" data-aos="fade-up">
                <h3 class="resume-title">Responsibilities of Placement Officer</h3>
                <div class="resume-item pb-0">
                  <!--<h4>The institution has a stated code of ethics to check malpractices and plagiarism in Research</h4>
                  <p><em>The institution has a stated code of ethics to check malpractices and plagiarism in Research which states:</em></p>-->
                  <ul>
                    <strong></strong><li>To prepare brochures for departments and to send to the prospective companies by April of every year.</li>
                    <strong></strong><li>To correspond to prospective companies for interview dates and schedule of events.</li>
                    <strong></strong><li>To arrange for interview facilities at the campus.</li>
                    <strong></strong><li>To receive the personnel and provide necessary inputs about the college and to co-ordinate student representatives for smooth functioning at various locations.</li>
                    <strong></strong><li>To collect the appointment letters or correspond to get them as soon as the interview is over.</li>
                    <strong></strong><li>To distribute appointment letters and collect acceptance letters from the students and dispatch them.</li>
                    <strong></strong><li>To identify a standby placement officer to take over the responsibilities during the absence of the Placement Officer.</li>
                    </ul>
                </div>
              </div>
              </div>


              <div class="row">
                <div class="col-lg-12" data-aos="fade-up">
                  <h3 class="resume-title">Responsibilities of Department Coordinators</h3>
                  <div class="resume-item pb-0">
                    <!--<h4>The institution has a stated code of ethics to check malpractices and plagiarism in Research</h4>
                    <p><em>The institution has a stated code of ethics to check malpractices and plagiarism in Research which states:</em></p>-->
                    <ul>
                      <strong></strong><li>The Coordinators shall take care of the placement activities of the students of their department.</li>
                      <strong></strong><li>To help the meritorious students prepare their resume at the beginning of the 7th semester.</li>
                      <strong></strong><li>Collect bio-data with students having primary eligibility at the start of the 7th semester. Verify their credentials with respect their marks sheets and once the results of a semester has been obtained, update the data and the eligible students for that semester.</li>
                      <strong></strong><li>Arrange for interview facilities at the campus and written test halls.</li>
                      <strong></strong><li>Obtain the information about possible visit from the placement officer and depending on the eligibility criteria asked by the organization, submit the bio-data of students to the placement officer.</li>
                      <strong></strong><li>Identify two student representatives for the department who will actively participate in placement work.</li>
                      <strong></strong><li> Inform the students about the date and time of interview.</li>
                      <strong></strong><li>Be present at the time of interview on a date given along with the two student representatives.</li>
                      <strong></strong><li>Regulate students who have to be interviewed as per the order given by the employer.</li>
                      <strong></strong><li>Collect the list of selected students and inform the students individually.</li>
                      <strong></strong><li>Should inform the date and time of campus interview to their department Head and should relieve oneself by adjusting the classes.</li>

                    
                    
                    </ul>
                  </div>
                </div>
                </div>


               <!--<div class="row">
                  <div class="col-lg-12" data-aos="fade-up">
                    <h3 class="resume-title">General guidelines</h3>
                    <div class="resume-item pb-0">
                      <h4>The institution has a stated code of ethics to check malpractices and plagiarism in Research</h4>
                      <p><em>The institution has a stated code of ethics to check malpractices and plagiarism in Research which states:</em></p>
                      <ul>
                        <strong></strong><li>Student's eligibility will be finalized on company's discretion.</li>
                        <strong></strong><li>If interviewer/s relaxes the eligibility criteria and advices the Placement & Training officer to send students for the interview, the Placement & Training officer may discuss the same with the Management and finalize.</li>
                        <strong></strong><li>The above mentioned point has to be viewed seriously. This is only to maintain the decorum and the image of the college with the visiting representatives of the organization.</li>
                        </ul>
                    </div>
                  </div>
                  </div>-->



                  <div class="row">
                    <div class="col-lg-12" data-aos="fade-up">
                      <h3 class="resume-title">Responsibilities of Department Students Representatives:</h3>
                      <div class="resume-item pb-0">
                        <!--<h4>The institution has a stated code of ethics to check malpractices and plagiarism in Research</h4>
                        <p><em>The institution has a stated code of ethics to check malpractices and plagiarism in Research which states:</em></p>-->
                        <ul>
                          <strong></strong><li>To collect bio-data with students having primary eligibility at the start of the 7th semester and to verifv their credentials with respect to their marks sheets and once the results of a semester has been obtained, update the data and the eligible students for that semester are listed.</li>
                          <strong></strong><li>To obtain the information about possible visit from the placement officer and depending on the eligibility criteria asked by the organization, submit the biodata of students to the placement officer.</li>
                          <strong></strong><li>To inform the students about the date and time of interview.</li>
                          <strong></strong><li>To be present at the time of interview on a date given along with the two student representatives.</li>
                          <strong></strong><li>To regulate students who have to be interviewed as per the order given by the employer.</li>        
                          </ul>
                      </div>
                    </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12" data-aos="fade-up">
                        <h3 class="resume-title">General guidelines for the Students</h3>
                        <div class="resume-item pb-0">
                          <!--<h4>The institution has a stated code of ethics to check malpractices and plagiarism in Research</h4>
                          <p><em>The institution has a stated code of ethics to check malpractices and plagiarism in Research which states:</em></p>-->
                          <ul>
                            <strong></strong><li>Students should attend all the Placement & training programme organized by Stella Mary's compulsorily. Those students only will be necessarily allowed to appear for the campus recruitment drive organized by Stella Mary's.</li>
                            <strong></strong><li>Even if they have the eligibility as specified by the company they will not be allowed to appear for the campus recruitment drive organized by Stella Mary's</li>
                            <strong></strong><li>Student's eligibility will be finalized on company's discretion.</li>
                            <strong></strong><li>Students should register their names in the placement office after verifying their primary eligibility conditions with their department placement coordinator. They should provide Xerox copies of all their marks while registration.</li>
                            <strong></strong><li>Bio-data of the students should be provided to the department placement Coordinator for every company visiting the campus.</li>
                            <strong></strong><li>The students should take every effort to maintain the decorum and the image of the college with the visiting representatives of the organization.</li>
                            <strong></strong><li>The Principal/Placement officer, for any reasons, receives adverse comments on the behavior and conduct of the interviewee from the interviewers; he/she may have to face severe consequences.</li>
                            <strong></strong><li>It is the responsibility of the students to look at the notices and other information from the notice board of the placement cell</li>
                            <strong></strong><li>The students must make their own arrangements such as transport, food etc. for attending the Interviews</li>          
                            </ul>
                        </div>
                      </div>
                      </div>

            </div>
            </section>

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Placement History</h2>
      <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="300">
      <div class="col-lg-3 col-md-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #ffbb2c;"></i>
          <h3><a href="">2022-23</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #5578ff;"></i>
          <h3><a href="">2021-22</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #e80368;"></i>
          <h3><a href="">2020-21</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #e361ff;"></i>
          <h3><a href="">2019-20</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #47aeff;"></i>
          <h3><a href="">2018-19</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #ffa76e;"></i>
          <h3><a href="">2017-18</a></h3>
        </div>
      </div>
      <!--<div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #11dbcf;"></i>
          <h3><a href="">Girls Hostel</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #4233ff;"></i>
          <h3><a href="">Transport</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #b2904f;"></i>
          <h3><a href="">Cafeteria</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #b20969;"></i>
          <h3><a href="">Sports</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #ff5828;"></i>
          <h3><a href="">Campus Activities</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #29cc61;"></i>
          <h3><a href="">Student Zone</a></h3>
        </div>
      </div>-->
    </div>

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Abroad Placement</h2>
      <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="300">
      <div class="col-lg-3 col-md-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #ffbb2c;"></i>
          <h3><a href="">2022-23</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #5578ff;"></i>
          <h3><a href="">2021-22</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #e80368;"></i>
          <h3><a href="">2020-21</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #e361ff;"></i>
          <h3><a href="">2019-20</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #47aeff;"></i>
          <h3><a href="">2018-19</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #ffa76e;"></i>
          <h3><a href="">2017-18</a></h3>
        </div>
      </div>
      <!--<div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #11dbcf;"></i>
          <h3><a href="">Girls Hostel</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #4233ff;"></i>
          <h3><a href="">Transport</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #b2904f;"></i>
          <h3><a href="">Cafeteria</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #b20969;"></i>
          <h3><a href="">Sports</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #ff5828;"></i>
          <h3><a href="">Campus Activities</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #29cc61;"></i>
          <h3><a href="">Student Zone</a></h3>
        </div>
      </div>-->
    </div>

  </div>
</section><!-- End Features Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <p>Words from our alumins</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/Vaishnavi.jpeg" class="testimonial-img" alt="">
                  <h3>Vaishnavi M J</h3>
                  <h4>ECE - Alumni 2019-23 &amp; Software Developer @ Agile Cyber Solutions</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    I am glad to share that I have achieved the remarkable milestone of securing the top position and being awarded the first mark in my class. It is with immense pride and gratitude that I extend my heartfelt thanks to each and everyone for their unwavering support and valuable contributions throughout this journey.
From the very beginning, my collective dedication to excellence and shared pursuit of knowledge have propelled me forward, allowing me to excel academically. The invaluable guidance, mentorship, and encouragement that I have received from my staffs have played a pivotal role in shaping my academic accomplishments.
Moreover, it is worth acknowledging that the exceptional educational infrastructure provided by our institution Stella Mary's College of Engineering and the unwavering support of my teachers have been instrumental in facilitating my achievement. The constant guidance and insightful feedback they have imparted have enriched my learning experience and empowered me to reach new heights. I am forever thankful..
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
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
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
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
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
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
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
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
</section><!-- End Features Section -->

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