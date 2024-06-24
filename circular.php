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
   <li></li>
    <section id="faq" class="faq">
          <div class="container">
    

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
$sql = " SELECT display_text,dem.`dt_id` , display_new FROM documentation.`nb_circular_master` nbm INNER JOIN s3aws.`document_entity_mapping` dem ON dem.`dgtm_id`=69 AND dem.`erp_id`=nbm.`nbcm_id` AND dem.record_status >0 AND nbm.record_status>0 WHERE nbm.`web_show`=1 order by nbm.order_no ";
//$sql = "SELECT 'hello' display_text";
$result = mysqli_query($dbcon, $sql);

if (mysqli_num_rows($result) > 0) {
  $slno = 1;
    while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <th scope="row"><?php echo $slno; ?></th>
            <td class="card-text text-justify"><?php echo "<a href = 'https://camps.stellamaryscoe.edu.in/CAMPS/viewdoc.php?dt_id=".$data["dt_id"]."' target ='_blank'>". $data["display_text"]."</a>".((strcmp($data["display_new"],"1")==0)?"<img src = 'https://webdocs.pages.dev/assets/img/news/new_flash.gif'>":"").""; ?></td>
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