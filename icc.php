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

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between">
          <header class="section-header">
              <h2 class="justify-content-center">Internal Compliance Cell</h2>
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
              <!--<li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Student Members</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Smart India Hackathon</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">FINE ARTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Syllabus</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Program Outcome</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Calender</a>
              </li>-->
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Action Plan</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Report</a>
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
            <div class="row">
              <p class="col-md-6 col-lg-12 fst-italic text-justify">The Media Cell of Stella Mary's College of Engineering typically focuses on improving communication, promoting the college, providing opportunities for student expression, and fostering community engagement as part of its objectives.</p>
                  
              <div class="col-md-6 col-lg-12">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bxl-dribbble"></i></div>
                  <h4 class="title"><a href="">Objective</a></h4>
                  <li class="text-justify"><strong>Communication and Information Dissemination:</strong>One of the primary objectives of a college media cell is to facilitate effective communication within the college community. This includes keeping students, faculty, and staff informed about important events, announcements, and updates related to the college's activities, such as examinations, admissions, and extracurricular events.</li>
                  <li class="text-justify"><strong>Promotion and Branding:</strong>The media cell plays a crucial role in promoting the college and enhancing its brand image. This involves creating and sharing content that showcases the college's achievements, academic programs, faculty expertise, and unique features. Effective promotion can help attract prospective students, faculty, and collaborators.</li>
                  <li class="text-justify"><strong>Student Engagement and Expression:</strong>Another key objective is to provide a platform for students to express themselves and showcase their talents. The media cell can support student publications, blogs, podcasts, and other creative endeavors. This not only fosters a sense of belonging and pride among students but also helps them develop valuable communication and media skills.</li>
                  <li class="text-justify"><strong>Community Outreach and Interaction:</strong> Beyond the college community, the media cell may also engage with the wider community, including alumni, parents, and local residents. This can involve organizing outreach programs, webinars, and events that facilitate interaction and collaboration between the college and its stakeholders. It helps in building strong relationships and garnering support.</li>
                  
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
              <h2>Members</h2>
              <p></p>
            </div>
    
            <div class="row justify-content-center">
  
  <?php
    $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',sm.staff_id,'.png') imglink,sm.staff_id,TRIM(CONCAT(sm.`legend`,' ',IFNULL(sm.first_name,''),' ',IFNULL(sm.middle_name,''),' ',IFNULL(sm.last_name,''),' ')) staff_name, md.dept_name,cd.desg_name FROM `documentation`.`club_master` cm INNER JOIN documentation.`club_membership` cms ON cms.`cm_id`=cm.cm_id AND cms.staff_id IS NOT NULL AND cms.status>0 INNER JOIN camps.staff_master sm ON sm.staff_id=cms.staff_id INNER JOIN camps.master_department md ON md.department_id=sm.department_id INNER JOIN documentation.club_desg cd ON cd.cd_id=cms.cd_id INNER JOIN camps.master_academic_year may ON may.ay_id=cms.ay_id AND may.cur_year=1 WHERE cm.cm_id=12 order by cd.order";
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
              </div>
              <div class="tab-pane" id="tab-5">
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
          </div>
        </div>
  
      </div>
    </section><!-- End Cource Details Tabs Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require 'footer.php'; ?> 
</body>

</html>