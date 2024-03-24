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

        <div class="d-flex justify-content-between align-items-center">
          <h2>Team & Code of Ethics</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Code of Ethics</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

        <!-- ======= Doctors Section ======= -->
        <section id="team" class="team section-bg">
          <div class="container">
    
            <div class="section-title" data-aos="fade-up">
              <h2>Members</h2>
              <p></p>
            </div>
    
            <div class="row justify-content-center">
  
  <?php
    $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',sm.staff_id,'.png') imglink,sm.staff_id,TRIM(CONCAT(sm.`legend`,' ',IFNULL(sm.first_name,''),' ',IFNULL(sm.middle_name,''),' ',IFNULL(sm.last_name,''),' ')) staff_name, md.dept_name,cd.desg_name FROM `documentation`.`club_master` cm INNER JOIN documentation.`club_membership` cms ON cms.`cm_id`=cm.cm_id AND cms.staff_id IS NOT NULL AND cms.status>0 INNER JOIN camps.staff_master sm ON sm.staff_id=cms.staff_id INNER JOIN camps.master_department md ON md.department_id=sm.department_id INNER JOIN documentation.club_desg cd ON cd.cd_id=cms.cd_id INNER JOIN camps.master_academic_year may ON may.ay_id=cms.ay_id AND may.cur_year=1 WHERE cm.cm_id=14 order by cd.order, dept_name";
    $result = mysqli_query($dbcon, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($data = mysqli_fetch_assoc($result)) {
            
    ?>
    <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
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
        </section><!-- End Doctors Section -->


      <section id="resume" class="resume">
        <div class="container">
  
          <div class="section-title">
            <h2>Code of Ethics</h2>
            </div>
  
          <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
              <h3 class="resume-title">Anti Plagiarism Policy</h3>
              <div class="resume-item pb-0">
                <h4>The institution has a stated code of ethics to check malpractices and plagiarism in Research</h4>
                <p><em>The institution has a stated code of ethics to check malpractices and plagiarism in Research which states:</em></p>
                <ul>
                  <strong>Integrity:</strong><li>The researcher is responsible for the trustworthiness of his or her research. Fabrication, falsification, plagiarism and similar serious violations of good academic practice are incommensurate with such trustworthiness.</li>
                  <strong>Respect:</strong><li>People who participate in research, as informants or otherwise, shall be treated with respect.</li>
                  <strong>Fairness:</strong><li>All research projects shall be designed and implemented fairly.</li>
                  <strong>Quest for Truth:</strong><li>Research activity is a quest for new knowledge, with critical and systematic verification and peer review.</li>
                  <strong>Academic freedom:</strong><li>The institution shall assist in ensuring the researchers’ freedom in their choice of topic and methodology, implementation of research and publication of results.</li>
                  <strong>Quality:</strong><li>Research should be of high academic quality. The researcher and institution are required to possess the necessary competence, design relevant research questions, undertake suitable choices of methodology and ensure sound and appropriate project implementation in terms of data collection, data processing and safekeeping/storage of the material.</li>
                  <strong>Voluntary informed Consent:</strong><li>Consent is the main rule in research on individuals or on information and material that can be linked to individuals. This consent should be informed, explicit, voluntary and documentable.</li>
                  <strong>Confidentiality:</strong><li>As a general principle, those who are made the subjects of research are entitled to have their personal information treated confidentially. The researcher must prevent any use and communication of information that might inflict damage on individuals who are the subjects of research.</li>
                  <strong>Collegiality:</strong><li>Researchers must show each other respect. They must agree on and comply with good practices for data ownership and sharing, authorship, publication, peer review and cooperation in general.</li>
                  <strong>Institutional responsibility:</strong><li>The responsibility for ethical conduct rests not only with the individual researcher, but also with the research institution.</li>
                  <strong>Availability of Results:</strong><li>As a main rule, research results should be made available. Openness regarding research findings is essential for ensuring verifiability, for returning some benefit to the research participants and society in general, and for ensuring a dialogue with the public.</li>
                  <strong>Social Responsibility:</strong><li>Researchers have an independent responsibility to ensure that their research will be of benefit to research participants, relevant groups or society in general, and for preventing it from causing harm.</li>
                  <strong>Laws and Regulations:</strong><li>In the field of research, there are national laws and regulations as well as applicable international conventions and agreements, and researchers and research institutions must abide by these.</li>
              
                  




                  </ul>
              </div>
            </div>
            </div>
            </div>
            </section>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php require 'footer.php'; ?> 
</body>
</html>