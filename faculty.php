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

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Faculty Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Faculty Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Hero Section ======= -->
<!--<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Partheeban</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
    </div>
  </section>End Hero -->

  <main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>About</h2>
      </div>


      
      <div class="row">
      <?php
            $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',staff_master.staff_id,'.png') imglink FROM camps.`staff_photo` sp WHERE sp.staff_id=".$_GET['staff_id'];
            $result = mysqli_query($dbcon, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($data = mysqli_fetch_assoc($result)) {
                     $sil= $data['link'];               
                    /*echo "<script>alert(".$sil.")</script>";
                     echo $data['link'];*/
                }
            }     
            ?>

      <?php
            $sql="SELECT CONCAT(FLOOR(SUM(mon)/12),' Year(s) ',MOD(SUM(mon),12) ,' Month(s)') yrs FROM (SELECT TIMESTAMPDIFF(MONTH,from_date, IFNULL(to_date,NOW()))mon FROM camps.staff_experience se WHERE se.status>0 AND se.staff_id=".$_GET['staff_id']." AND se.from_date IS NOT NULL AND se.to_date IS NOT NULL UNION SELECT TIMESTAMPDIFF(MONTH,from_date, IFNULL(to_date,NOW()))mon FROM camps.staff_promotion sp WHERE sp.status>0 AND sp.staff_id=".$_GET['staff_id']." AND sp.from_date IS NOT NULL )a";
            $result = mysqli_query($dbcon, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($data = mysqli_fetch_assoc($result)) {
                     $exp= $data['yrs'];               
                    /*echo "<script>alert(".$sil.")</script>";
                     echo $data['link'];*/
                }
            }     
            $sql = "SELECT md.`desigination`,sm.staff_id,TRIM(CONCAT(sm.`legend`,' ',IFNULL(sm.first_name,''),' ',IFNULL(sm.middle_name,''),' ',IFNULL(sm.last_name,''),' ')) staff_name,TIMESTAMPDIFF(YEAR,sm.dob,NOW()) age,sav.`text_val`,DATE_FORMAT(doj,'%d-%m-%Y') doj,sav2.`text_val`,sm.`institute_email_id`,sm.`mobile_no` FROM camps.`staff_master` sm INNER JOIN camps.`staff_promotion` sp  ON sp.`staff_id`=sm.`staff_id` AND sp.status=2 INNER JOIN camps.`master_desigination` md ON md.`md_id`=sp.`md_id`  LEFT JOIN documentation.`ss_additional_values` sav ON sav.`ss_am_id`=21 AND sav.`ss_id`=sm.staff_id LEFT JOIN documentation.`ss_additional_values` sav2 ON sav2.`ss_am_id`=10 AND sav2.`ss_id`=sm.staff_id WHERE sm.staff_id=".$_GET['staff_id'];
            $result = mysqli_query($dbcon, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($data = mysqli_fetch_assoc($result)) { 
            ?>
    
    <div class="col-lg-2" data-aos="fade-right">
        <img src="https://webdocs.pages.dev/assets/img/faculty/<?= $_GET['staff_id']?>.png"  class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php printf("%s", $data["desigination"]);?></h3>
         <!-- <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>-->
          <div class="row">
            <div class="col-lg-5">
              <ul><li></li>
                <ul><li></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span><?php 
                    printf("%s", $data["staff_name"]);
                    ?></span></li>
                
                <li><i class="bi bi-chevron-right"></i> <strong>Date of Joining:</strong> <span><?php 
                    printf("%s", $data["doj"]);
                    ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php 
                    printf("%s", $data["institute_email_id"]);
                    ?></span></li>
                   <!-- <li><i class="bi bi-chevron-right"></i> <strong>Vidwan:</strong> <span> 
                   </span></li>-->
              </ul>
            </div>
            <div class="col-lg-7">
              <ul><ul><li></li>
                <ul><li></li>
                
                <!--<li><i class="bi bi-chevron-right"></i> <strong>Research Interest:</strong> <span>
                    ?></span></li>-->
                <li><i class="bi bi-chevron-right"></i> <strong>Specialisation:</strong> <span><?php 
                    printf("%s", $data["text_val"]);
                    ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Experience:</strong> <span><?php 
                    printf("%s", $exp);
                    ?></span></li>
              </ul>
            </div>
        <?php 
        }
            } ?>  
        </div>
          
          
        </div>
      </div>

    </div>
  </section><!-- End About Section -->


  <!-- ======= Facts Section ======= -->
  <!--<section id="facts" class="facts">
    <div class="container">

      <div class="section-title">
        <h2>Facts</h2>
       <!<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
     <!-- </div>

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>International Journals</strong></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Conferences, Workshops, Seminars</strong></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="count-box">
            <i class="bi bi-list"></i>
            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Sponsored Projects</strong></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="count-box">
            <i class="bi bi-people"></i>
            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>PhD Scholars</strong></p>
          </div>
        </div>

      </div>

    </div>
  </section><! End Facts Section -->
        <section id="faq" class="faq">
          <div class="container">
    

          <div class="section-title" data-aos="fade-up">
            <h2>National & International Journals</h2>
          <div class="card">
              <div class="card-body"> 
                <h5 class="card-title text-left"></h5>
                <!--<p>Add <code>.table-borderless</code> for a table without borders.</p>-->
                <!-- Active Table -->
                <table class="table table-striped text-center table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Details</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
//$dbcon - database connection
$sql = " SELECT IFNULL (CONCAT(IFNULL(pm.authors,''),', ',IFNULL(pm.paper_title,''),', ',IFNULL(pm.transaction_title,''),',',IFNULL(pt.ptype,''),',',IF(pm.volume IS NOT NULL,'Vol:',''),IFNULL(pm.volume,''),IF(pm.volume IS NOT NULL,', ',''),IF(pm.issue IS NOT NULL,'Issue:',''),IFNULL(pm.issue,''),IF(pm.issue IS NOT NULL,',',''),IFNULL(pm.issn_no,''),IF(pm.issn_no IS NOT NULL,',',''),IFNULL(MONTHNAME(STR_TO_DATE(pm.month,'%m')),''),IF(pm.month IS NOT NULL,',',''),pm.year),'') details , pm.`paper_title` 
FROM documentation.publication_master pm 
INNER JOIN documentation.publication_type pt ON pt.pt_id=pm.pt_id AND pm.record_status > 0  
INNER JOIN documentation.publication_ss_mapping pssm ON pssm.publication_id=pm.publication_id AND pssm.staff_id=".$_GET['staff_id'];

$result = mysqli_query($dbcon, $sql);

if (mysqli_num_rows($result) > 0) {
  $slno = 1;
    while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <th scope="row"><?php echo $slno; ?></th>
            <td class="card-text text-justify"><?php echo $data["details"]; ?></td>
        </tr>
        <?php
        $slno++;
    }
}
?>

                    </tbody>
                  </table>
                </div> 
        </div>
    <div class="section-title" data-aos="fade-up">
      <h2>Conference Publications</h2>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"></h5>
        <!--<p>Add <code>.table-borderless</code> for a table without borders.</p>-->
        <!-- Active Table -->
        <table class="table table-striped text-center table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Conferences, Workshops and Seminars</th>
            </tr>
          </thead>
          <tbody>
          <?php
//$dbcon - database connection
$sql = "SELECT 
CONCAT(
    ifnull(cws.authors,''), ', ', 
    ifnull(cws.paper_title,''), ', ', 
    ifnull(cpt.cws_ptype,''), ', ', 
    ifnull(cws.event_name,''), ', ', 
    ifnull(cws.event_location,''), ', ', 
    ifnull(MONTHNAME(cws.dop),''), '-', ifnull(YEAR(cws.dop),'')
) AS details 
FROM 
documentation.cws_publication_master cws 
INNER JOIN 
documentation.cws_publication_ss_mapping cpssm 
ON cpssm.staff_id = ".$_GET['staff_id']."
AND cpssm.cws_publication_id = cws.cws_publication_id 
INNER JOIN 
documentation.cws_publication_type cpt 
ON cpt.cws_pt_id = cws.cws_pt_id AND cws.record_status>0 " ;

$result = mysqli_query($dbcon, $sql);

if (mysqli_num_rows($result) > 0) {
  $slno = 1;
    while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <th scope="row"><?php echo $slno; ?></th>
            <td class="card-text text-justify"><?php echo $data["details"]; ?></td>
        </tr>
        <?php
        $slno++;
    }
}
?>             
            </tbody>
          </table>
        </div>
  </div>
  <div class="section-title" data-aos="fade-up">
    <h2>Patent</h2>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center"></h5>
      <!--<p>Add <code>.table-borderless</code> for a table without borders.</p>-->
      <!-- Active Table -->
      <table class="table table-striped text-center table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title of patent</th>
            <th scope="col">File Date</th>
            <th scope="col">Patent Status</th>
            
          </tr>
        </thead>
        <tbody>
        <?php
//$dbcon - database connection
$sql = "SELECT 
ifnull(pm.patent_title,'') patent_title, 
ifnull(pm.filing_date,'') filing_date, 
ifnull(ps.patent_status,'') patent_status
FROM 
documentation.patent_master pm 
INNER JOIN 
documentation.patent_ss_mapping psm 
ON psm.staff_id = ".$_GET['staff_id']."
AND psm.patent_id = pm.patent_id 
INNER JOIN 
documentation.patent_status ps 
ON ps.ps_id = pm.ps_id
";

$result = mysqli_query($dbcon, $sql);

if (mysqli_num_rows($result) > 0) {
  $slno = 1;
    while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <th scope="row"><?php echo $slno; ?></th>
            <td class="card-text text-justify" ><?php echo $data["patent_title"]; ?></td>
            <td><?php echo $data["filing_date"]; ?></td>
            <td><?php echo $data["patent_status"]; ?></td>
        </tr>
        <?php
        $slno++;
    }
}
?>
           
          </tbody>
        </table>
      </div>
</div>
  <div class="section-title" data-aos="fade-up">
    <h2>Funded Projects</h2>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center"></h5>
      <!--<p>Add <code>.table-borderless</code> for a table without borders.</p>-->
      <!-- Active Table -->
      <table class="table table-striped text-center table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title of Project</th>
            <th scope="col">Investigators</th>
            <th scope="col">Funding Agency</th>
            <th scope="col">Status</th>
            
          </tr>
        </thead>
        <tbody>
        <?php
//$dbcon - database connection
$sql = "SELECT 
ifnull(pm.patent_title,'') patent_title, 
ifnull(pm.filing_date,'') filing_date, 
ifnull(ps.patent_status,'') patent_status
FROM 
documentation.patent_master pm 
INNER JOIN 
documentation.patent_ss_mapping psm 
ON psm.staff_id = ".$_GET['staff_id']."
AND psm.patent_id = pm.patent_id 
INNER JOIN 
documentation.patent_status ps 
ON ps.ps_id = pm.ps_id
";

$result = mysqli_query($dbcon, $sql);

if (mysqli_num_rows($result) > 0) {
  $slno = 1;
    while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <th scope="row"><?php echo $slno; ?></th>
            <td class="card-text text-justify" ><?php echo $data["patent_title"]; ?></td>
            <td><?php echo $data["filing_date"]; ?></td>
            <td><?php echo $data["patent_status"]; ?></td>
            <td><?php echo $data["patent_status"]; ?></td>
        </tr>
        <?php
        $slno++;
    }
}
?>
           
          </tbody>
        </table>
      </div>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require 'footer.php'; ?> 
</body>

</html>