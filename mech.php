<?php include("conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php include ("head.php"); ?>
<body>
  <!-- Preloader -->
  <!-- ======= Header ======= --> 
  <?php include ("preloader.php"); ?>
  <?php include ("header.php"); ?>
  <!-- End Header -->

  <main id="main" class="text-justify">





    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
          <h2>Mechanical Engineering</h2>
          <p>Department encompasses the design, analysis, and manufacturing of mechanical systems and devices, including engines, machines, and structures, to address diverse engineering challenges and improve efficiency and functionality. </p>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->
    
  </div><!-- End Breadcrumbs -->
  <!-- ======= Cource Details Section ======= -->
  <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-7">
          <img src="https://webdocs.pages.dev/assets/img/mech/mech.jpg" class="img-fluid" alt="">
          </div>
        <div class="col-lg-4">

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Head of the Department</h5>
            <p><a href="faculty.php?staff_id=1079"
                    <?php 
                    printf("%s", $data["first_name"]);
                    ?>">Dr.F.Michael Raj</a></p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Total Intake</h5>
            <p>60</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Budding Engineers</h5>
            <p>157</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Proud Alumni</h5>
            <p>378</p>
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
            <!--<li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Industrial Visit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Achievements</a>
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
                <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Magazine</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Industry Collaboration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-11">Placement</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-12">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-13">Testimonial</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-md-6 col-lg-12">
                  <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-12 ">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">VISION</a></h4>
                <p class="description text-justify">To impart nationally and internationally recognized education on Mechanical Engineering, leading to well qualified engineers who are innovative contributors to the profession and successful in advanced studies and research</p>
              </div>
            </div>
  <ol></ol>
            <div class="col-md-6 col-lg-12">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">MISSION</a></h4>
                <li class="text-justify">To provide an international class of education enabling the students to have the ability to design, plan, engineer, administer and manage the latest technologies in the field of Mechanical Engineering.</li>
                <li class="text-justify">To train students to face the future challenges of industries and society.</li>
                <li class="text-justify">To equip the students to take leading positions in industry, academia, and PSUs both in India and abroad.</li>
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
            <p>The pillars of Mechanical Engineering</p>
          </div>
  
          <div class="row justify-content-center">
          <?php
            $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',staff_master.staff_id,'.png') imglink,staff_master.staff_id AS staff_id,swdo.`major`,master_desigination.desigination desigination, GROUP_CONCAT(staff_promotion.md_id), staff_master.legend , CONCAT(staff_master.first_name,' ',staff_master.last_name)first_name , staff_master.department_id,master_department.dept_name , staff_photo.photo ,  staff_promotion.status, staff_qualification.status,staff_promotion.from_date, GROUP_CONCAT(deg_type ORDER BY staff_qualification.yop) deg_type FROM camps.staff_master INNER JOIN camps.master_department ON (staff_master.department_id = master_department.department_id  AND staff_master.sc_id=1) INNER JOIN camps.staff_photo ON (staff_photo.staff_id = staff_master.staff_id) INNER JOIN camps.staff_promotion ON (staff_promotion.staff_id = staff_master.staff_id) INNER JOIN camps.staff_qualification ON (staff_qualification.staff_id = staff_master.staff_id AND staff_qualification.status>0) INNER JOIN camps.master_desigination ON master_desigination.md_id=staff_promotion.md_id INNER JOIN camps.staff_degree_type ON (staff_qualification.degree_id = staff_degree_type.degree_id) LEFT JOIN documentation.staff_website_display_order swdo ON swdo.staff_id=staff_master.staff_id WHERE staff_promotion.status=2 AND staff_degree_type.degree_id NOT IN (23,24) AND  staff_master.working_status='working' AND master_department.department_id='5' GROUP BY staff_master.staff_id ORDER BY swdo.`order_no`";
            
            $result = mysqli_query($dbcon, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($data = mysqli_fetch_assoc($result)) {
                    
            ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                  <img src="<?php printf("%s", $data['imglink']);?>" class="img-fluid" alt="" style="width: 200px; height: 260px;">
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
                    printf("%s", $data["legend"]);
                    ?>.
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
                <div class="col-lg-12 details order-2 order-lg-1">
                  <h3></h3>
                  
                 <!-- Default Accordion -->
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <strong>Engineering Practices Laboratory</strong>
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>Civil Engineering Practices</strong> 
                    <ol></ol>
                    <p class="fst-italic">Plumbing Work</p>
                    <li>Plumbing Work</li>
                    <li>Plumbing Work</li>
                    <ol></ol>
                    <p class="fst-italic">Wood Work</p>
                    <li>Tri Square</li>
                    <li>Hand Saw</li>
                    <li>Carpentry bench wise</li>
                    <li>Firmer Chisel</li>
                    <li>Motrin Chisel</li>
                    <li>Iron Jack</li>
                    <li>Mallet</li>
                    <li>Bench hold fastens</li>
                    <li>Wooden Bench Hook</li>
                    <li>Wood Cutting Machine</li>
                    <ol></ol>
                    <strong>Mechanical Engineering Practices</strong> 
                    <p class="fst-italic">Welding Work</p>
                    <li>Arc welding unit</li>
                    <li>Gas welding unit</li>
                    <ol></ol>
                    <p class="fst-italic">Basic Machining Work</p>
                    <li>Lathe Machines</li>
                    <li>Drilling Machines</li>
                    <ol></ol>
                    <p class="fst-italic">Assembly Work</p>
                    <li>Centrifugal pump</li>
                    <li>Air-conditioner unit</li>
                    <li>Household mixer</li>
                    <ol></ol>
                    <p class="fst-italic">Sheet Metal Work</p>
                    <li>Steel rule</li>
                    <li>Bend snips</li>
                    <li>Straight snips</li>
                    <li>Scriber</li>
                    <li>Divider</li>
                    <li>Trammel</li>
                    <li>Prick Punches</li>
                    <li>Centre punches</li>
                    <li>Pliers</li>
                    <li>Ball pean hammer</li>
                    <li>Raising hammer</li>
                    <li>Riverting hammer</li>
                    <li>Square free hammer</li>
                    <li>Anvil</li>
                    <li>Swage block</li>
                    <li>Wige gauges</li>
                    <ol></ol>
                    <p class="fst-italic">Foundry Work</p>
                    <li>Cope and Drag Box</li>
                    <li>Pattern</li>
                    <li>Solid pattern</li>
                    <li>Split pattern</li>
                    <li>Runner</li>
                    <li>Riser</li>
                    <li>Sprue</li>
                    <li>Sand reamer</li>
                    <li>Trowel</li>
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/mech/lab/mechlab1.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>CADEM CENTRE</strong>
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p class="fst-italic">CADEM Centre is established to impart practical experience in handling 2D drafting and 3D modeling software. To understand the features of CNC Machine tool and to know the application of various CNC machines like CNC lathe, CNC Vertical Machining centre. To give exposure to software tools needed to analyze engineering problems. To expose the students to different applications of simulation and analysis tools. Students of Mechanical Engineering program use the center for laboratory courses like Computer Aided Machine Drawing, Computer Aided Design and Computer Aided Manufacturing lab, Simulation and Analysis laboratory and Interpersonal skill & listening and speaking laboratory as per their curriculum. They also use this centre for the preparation of Technical Seminar laboratory, mini project and main project.</p>
      
                    <strong>Facilities</strong> 
                    <li>CNC Lathe</li>
                    <li>CNC Vertical Milling Machine</li>
                    <li>Desktops 61 Nos</li>
                    <li>CreO License 50 Nos</li>
                    <li>ANSYS License 50 Nos.</li>
                    <li>LCD Projector</li>
                    <li>Adequate no of head sets</li>
                    <li>Internet and Intranet Connectivity</li>
                    <li>Wi-fi Facility</li>
                    <li>Document scanner and copier</li>
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/mech/lab/mechlab2.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <strong>Kinematics And Dynamics Laboratory</strong>
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p class="fst-italic">This laboratory is used to supplement the principles taught in the theory courses like kinematics of Machinery and Dynamics of Machinery to make understand how certain measuring devices are used for dynamic and kinematics testing.</p>
    
                    <strong>Facilities</strong> 
                    <li>Cam follower setup.</li>
                    <li>Motorized gyroscope.</li>
                    <li>Governor apparatus - Watt, Porter, Proell and Hartnell governors.</li>
                    <li>Whirling of shaft apparatus.</li>
                    <li>Dynamic balancing machine.</li>
                    <li>Two rotor vibration setup.</li>
                    <li>Spring mass vibration system.</li>
                    <li>Torsional Vibration of single rotor system setup.</li>
                    <li>Gear Models</li>
                    <li>Kinematic Models to study various mechanisms.</li>
                    <li>Turn table apparatus</li>
                    <li>Transverse vibration setup of cantilever, Free-Free beam, Simply supported beam.</li>
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/mech/lab/mechlab3.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <strong>Fluid Mechanics and Machinery Laboratory</strong>
                    </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p class="fst-italic">This lab is to study the applications of the conservation laws to flow through pipes and hydraulic machines. To understand the importance of dimensional analysis. To understand the importance of various types of flow in pumps and turbines. Upon Completion of this lab, the students can able to have hands on experience in flow measurements using different devices and also perform calculation related to losses in pipes and also perform characteristic study of pumps, turbines etc.,</p>
    
                    <strong>Facilities</strong> 
                    <li>Orifice meter setup</li>
                    <li>Venturi meter setup</li>
                    <li>Rotameter setup</li>
                    <li>Pipe Flow analysis setup</li>
                    <li>Centrifugal pump / submergible pump setup</li>
                    <li>Reciprocating pump setup</li>
                    <li>Gear pump setup</li>
                    <li>Pelton wheel turbine setup</li>
                    <li>Francis turbine setup</li>
                    <li>Kaplan turbine setup</li>
                    <li>Notch Apparatus</li>
                    <li>Minor Losses Apparatus</li>
                    <li>Multi Stage Centrifugal Pump</li>
                    <li>Orifice and Mouth piece setup</li>
                    <li>Bernoulli’s setup</li>
                    <li>Meta Centric Height Setup</li>
                    <li>Pitot Tube</li>
                    <li>Hydraulic Flume Test setup</li>

                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/mech/lab/mechlab4.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <strong>Manufacturing Technology Laboratory</strong>
                    </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p class="fst-italic">This lab is to study and practice the various operations that can be performed in lathe, shaper, drilling, milling machines etc., and to acquire knowledge on various basic machining operations in special purpose machines and its applications in real life manufacture of components to equip with the practical knowledge required in the core manufacturing industries. The laboratory courses Manufacturing Technology-I and Manufacturing Technology-II will be taught using this laboratory.</p>
    
                    <strong>Facilities</strong> 
                    <li>Centre Lathes</li>
                    <li>Horizontal Milling Machine</li>
                    <li>Vertical Milling Machine</li>
                    <li>Shaper</li>
                    <li>Arc welding transformer with cables and holders</li>
                    <li>Oxygen and acetylene gas cylinders, blow pipe and other welding outfit</li>
                    <li>Molding table, Molding equipments</li>
                    <li>Sheet metal forming tools and equipments</li>
                    <li>Turret and Capstan Lathes</li>
                    <li>Horizontal Milling Machine</li>
                    <li>Vertical Milling Machine</li>
                    <li>Surface Grinding Machine</li>
                    <li>Radial Drilling Machine</li>
                    <li>Lathe Tool Dynamometer</li>
                    <li>Milling Tool Dynamometer</li>
                    <li>Gear Hobbing Machine</li>
                    <li>Tool Makers Microscope</li>
                    <li>CNC Lathe</li>
                    <li>CNC Milling machine</li>
                    <li>Gear Shaping machine</li>
                    <li>Centerless grinding machine</li>
                    <li>Tool and cutter grinder</li>
                    <li>Cylindrical Grinding Machine</li>
                    <li>Injection Molding Machine</li>
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/mech/lab/mechlab5.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <strong>Metrology And Measurement Laboratory</strong>
                    </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p class="fst-italic">This laboratory is to familiarize the students with different measurement aids and equipments and its use in the industries for quality inspection.</p>
    
                    <strong>Facilities</strong> 
                    <li>Micrometer</li> 
                    <li>Vernier Caliper</li> 
                    <li>Vernier Height Gauge</li> 
                    <li>Vernier depth Gauge</li> 
                    <li>Slip Gauge Set</li> 
                    <li>Gear Tooth Vernier</li> 
                    <li>Sine Bar</li> 
                    <li>Floating Carriage Micrometer</li> 
                    <li>Profile Projector</li> 
                    <li>Tool Makers Microscope</li> 
                    <li>Mechanical / Electrical / Pneumatic Comparator</li> 
                    <li>Autocollimator</li> 
                    <li>Temperature Measuring Setup</li> 
                    <li>Force Measuring Setup</li> 
                    <li>Torque Measuring Setup</li> 
                    <li>Coordinate measuring machine</li> 
                    <li>Surface finish measuring equipment</li> 
                    <li>Bore gauge</li> 
                    <li>Telescope gauge.</li> 
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/mech/lab/mechlab6.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <strong>MECHATRONICS LABORATORY</strong>
                    </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p class="fst-italic">This lab is to familiarizing the students with the method of programming the microprocessor and also with the design, modeling & analysis of basic electrical, hydraulic & pneumatic systems which enable the students to understand the concept of mechatronics.</p>
    
                    <strong>Experiments</strong> 
                    <li>Transducers ( Pressure , Temperature , Strain , LVDT)</li> 
                    <li>Basic Hydraulic Trainer Kit</li> 
                    <li>Basic Pneumatic Trainer Kit with manual and electrical controls</li> 
                    <li>Basic Pneumatic Trainer Kit with PLC Control</li> 
                    <li>Hydraulics Systems Simulation Software</li> 
                    <li>Pneumatics Systems Simulation Software</li> 
                    <li>8051 - Microcontroller kit with stepper motor and drive circuit sets , Traffic control</li> 
                    <li>Image processing system with hardware & software</li> 
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/mech/lab/mechlab7.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    <strong>Strength Of Materials Laboratory</strong>
                    </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p class="fst-italic">To supplement the theoretical knowledge gained in the theory courses like Engineering Metallurgy and Strength of Material with practical testing for determining the material behavior and strength of materials under externally applied loads. This would enable the student to have a clear understanding of the design for strength and stiffness.</p>
    
                    <strong>Facilities</strong> 
                    <li>Universal Tensile Testing machine with double shear attachment – 40 Ton Capacity</li> 
                    <li>Torsion Testing Machine (60 NM Capacity)</li> 
                    <li>Impact Testing Machine (300 J Capacity)</li> 
                    <li>Brinell Hardness Testing Machine</li> 
                    <li>Rockwell Hardness Testing Machine</li> 
                    <li>Spring Testing Machine for tensile and compressive loads (2500 N)</li> 
                    <li>Metallurgical Microscopes</li> 
                    <li>Muffle Furnace (1200 C).</li> 
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/mech/lab/mechlab8.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    <strong>Thermal Engineering Laboratory</strong>
                    </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p class="fst-italic">This laboratory is to study the value timing, port timing- diagram and performance of IC Engines. To Study the characteristics of fuels/Lubricates used in IC Engines. To study the Performance of steam generator/ turbine. To study the heat transfer phenomena and predict the relevant coefficient using implementation. To study the performance of refrigeration cycle / components. This lab consists of separate Steam an IC engines lab, Hear Transfer Lab.</p>
    
                    <strong>Facilities</strong> 
                    <li>I.C Engine – 2 stroke and 4 stroke model.</li> 
                    <li>Apparatus for Flash and Fire Point.</li> 
                    <li>4-stroke Diesel Engine with mechanical loading.</li> 
                    <li>4-stroke Diesel Engine with hydraulic loading.</li> 
                    <li>4-stroke Diesel Engine with electrical loading.</li> 
                    <li>Multi-cylinder Petrol Engine.</li> 
                    <li>Single cylinder Petrol Engine.</li> 
                    <li>Data Acquisition system with any one of the above engines.</li> 
                    <li>Steam Boiler with turbine setup.</li> 
                    <li>Guarded plate apparatus.</li> 
                    <li>Lagged pipe apparatus.</li> 
                    <li>Natural convection-vertical cylinder apparatus.</li> 
                    <li>Forced convection inside tube apparatus.</li> 
                    <li>Composite wall apparatus.</li> 
                    <li>Thermal conductivity of insulating powder apparatus.</li> 
                    <li>Pin-fin apparatus.</li> 
                    <li>Stefan-Boltzmann apparatus.</li> 
                    <li>Emissivity measurement apparatus.</li> 
                    <li>Parallel/counter flow heat exchanger apparatus.</li> 
                    <li>Single/two stage reciprocating air compressor</li> 
                    <li>Refrigeration test rig.</li> 
                    <li>Air-conditioning test rig.</li> 
                    <div class="col-md-6 col-lg-12">
                    <img src="https://webdocs.pages.dev/assets/img/mech/lab/mechlab9.jpg" alt="" class="img-fluid">
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
                  <h4 class="title"><a href="https://webdocs.pages.dev/assets/docs/mech/syllabus/2021.pdf">Regulation 2021</a></h4>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <h4 class="title"><a href="https://webdocs.pages.dev/assets/docs/mech/syllabus/2017.pdf">Regulation 2017</a></h4>
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
                  <p class="fst-italic">On successful completion of the Mechanical Engineering Degree programme, the Graduates shall exhibit the following:</p>
                  <li class="text-justify"><strong>PSO1 :</strong> Apply the knowledge gained in Mechanical Engineering for design and development and manufacture of engineering systems.</li>
                  <li class="text-justify"><strong>PSO2 :</strong> Apply the knowledge acquired to investigate research-oriented problems in mechanical engineering with due consideration for environmental and social impacts.</li>
                  <li class="text-justify"><strong>PSO3 :</strong> Use the engineering analysis and data management tools for effective management of multidisciplinary projects. </li>
                
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
                            <section id="features" class="features">
                                <div class="container">
                         
                                  <div class="section-title" data-aos="fade-up">
                                    <h2>Industry Collaboration</h2>
                                    <p><strong>Value Added Course</strong></p>
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
                              
                                  <div class="section-title" data-aos="fade-up">
                                    <p><strong>Internship</strong></p>
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
                                  <div class="section-title" data-aos="fade-up">
                                    <p><strong>Memorandum of Understanding</strong></p>
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
                              <div class="tab-pane" id="tab-11">
                        <div class="row">
                            <section id="features" class="features">
                                <div class="container">
                          
                                  <div class="section-title" data-aos="fade-up">
                                    <h2>Placement Records</h2>
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
                              <div class="tab-pane" id="tab-12">
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


                                <div class="tab-pane" id="tab-13">
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
<?php require 'footer.php'; ?> 
</body>
</html>