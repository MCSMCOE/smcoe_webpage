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
          
          <div class="section-title" data-aos="fade-up">
            <h2>CIRCULAR</h2>
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
INNER JOIN documentation.publication_ss_mapping pssm ON pssm.publication_id=pm.publication_id AND pssm.staff_id=".preg_replace('/[^0-9]/', '', 'staff_id = 1026');

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
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

 

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require 'footer.php'; ?> 

</body>

</html>