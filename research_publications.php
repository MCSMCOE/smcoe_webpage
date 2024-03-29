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
          <h2>Publications</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Publications</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        

        <div class="section-title" data-aos="fade-up">
          <h2>National & International Journals</h2>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Staff Publications</h5>
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
$sql = "SELECT distinct IFNULL (CONCAT(IFNULL(pm.authors,''),', ',IFNULL(pm.paper_title,''),', ',IFNULL(pm.transaction_title,''),',',IFNULL(pt.ptype,''),',',IF(pm.volume IS NOT NULL,'Vol:',''),IFNULL(pm.volume,''),IF(pm.volume IS NOT NULL,', ',''),IF(pm.issue IS NOT NULL,'Issue:',''),IFNULL(pm.issue,''),IF(pm.issue IS NOT NULL,',',''),IFNULL(pm.issn_no,''),IF(pm.issn_no IS NOT NULL,',',''),IFNULL(MONTHNAME(STR_TO_DATE(pm.month,'%m')),''),IF(pm.month IS NOT NULL,',',''),pm.year),'') details , pm.`paper_title` 
FROM documentation.publication_master pm 
INNER JOIN documentation.publication_type pt ON pt.pt_id=pm.pt_id AND pm.record_status > 0  
INNER JOIN documentation.publication_ss_mapping pssm ON pssm.publication_id=pm.publication_id";

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
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Student Publications</h5>
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
                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  
                </tr>
                
               
              </tbody>
            </table>
          </div>     
  </div>


  <div class="section-title" data-aos="fade-up">
    <h2>Conference Publications</h2>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">Staff Publications</h5>
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
$sql = "SELECT distinct
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
ON cpssm.cws_publication_id = cws.cws_publication_id 
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
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">Student Publications</h5>
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
          <tr>
            <th scope="row"></th>
            <td></td>
          </tr>
          
        </tbody>
      </table>
    </div>
</div>



<div class="section-title" data-aos="fade-up">
  <h2>Patent</h2>
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">Staff Publications</h5>
    <!--<p>Add <code>.table-borderless</code> for a table without borders.</p>-->
    <!-- Active Table -->
    <table class="table table-striped text-center table-hover">
    <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title of patent</th>
            <th class="card-text text-justify"scope="col">File Date</th>
            <th class="card-text text-justify"scope="col">Patent Status</th>
            
          </tr>
        </thead>
        <tbody>
        <?php
//$dbcon - database connection
$sql = "SELECT distinct
ifnull(pm.patent_title,'') patent_title, 
ifnull(pm.filing_date,'') filing_date, 
ifnull(ps.patent_status,'') patent_status
FROM 
documentation.patent_master pm 
INNER JOIN 
documentation.patent_ss_mapping psm 
ON psm.patent_id = pm.patent_id 
INNER JOIN 
documentation.patent_status ps 
ON ps.ps_id = pm.ps_id";

$result = mysqli_query($dbcon, $sql);

if (mysqli_num_rows($result) > 0) {
  $slno = 1;
    while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <th scope="row"><?php echo $slno; ?></th>
            <td class="card-text text-justify"><?php echo $data["patent_title"]; ?></td>
            <td class="card-text text-justify"><?php echo $data["filing_date"]; ?></td>
            <td class="card-text text-justify"><?php echo $data["patent_status"]; ?></td>
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
<div class="card">
<div class="card-body">
  <h5 class="card-title text-center">Student Publications</h5>
  <!--<p>Add <code>.table-borderless</code> for a table without borders.</p>-->
  <!-- Active Table -->
  <table class="table table-striped text-center table-hover">
    <thead>
    <tr>
            <th scope="col">#</th>
            <th scope="col">Title of patent</th>
            <th class="card-text text-justify"scope="col">File Date</th>
            <th class="card-text text-justify"scope="col">Patent Status</th>
            
          </tr>
    <tbody>
        <tr>
          <th scope="row">1</th>
          <td></td>
          
        </tr>
        
      </tbody>
    </table>
  </div>
</div>


<!--<div class="section-title" data-aos="fade-up">
  <h2>Funded Projects</h2>
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">Staff Publications</h5>
    
   
    <table class="table table-striped text-center table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title of the proposal</th>
          <th scope="col">Invsteigator, Co-Investigator</th>
          <th scope="col">Department</th>
          <th scope="col">Date of Registration</th>
          <th scope="col">Amount</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Blockchain based cloud service security architecture with distributed machine learning for smart device traffic record transaction</td>
            <td>Dr.Pon.Partheeban</td>
            <td>CSE</td>
            <td>WILEY Concurrency and Computation - Practice and Experience</td>
            <td>2021</td>
            <td>1532-0634</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Bridie Kessler</td>
            <td>Developer</td>
            <td>35</td>
            <td>2014-12-05</td>
            <td>2021</td>
            <td>1532-0634</td>
          </tr>
         
        </tbody>
      </table>
    </div>
</div>-->





    </section>

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
<?php require 'footer.php'; ?> 
</body>
</html>