<html>
<body>
<?php
$servername = "172.17.0.1";
$username = "root";
$password = "root";
$db="mysql";
$port="33080";  
$dbcon = mysqli_connect($servername, $username, $password,$db,$port);
if (!$dbcon) {
    die("Connection failed: " .  mysqli_connect_error());
}

    $sql = "SELECT IFNULL(CONCAT(pm.`authors`,', ',pm.`paper_title`,', ',pm.`transaction_title`,',',pt.`ptype`,', ',pm.`transaction_title`,', ',IF(pm.`volume` IS NOT NULL,'Vol:',''),IFNULL(pm.`volume`,''),IF(pm.`volume` IS NOT NULL,', ',''),IF(pm.`issue` IS NOT NULL,'Issue:',''),IFNULL(pm.`issue`,''),IF(pm.`issue` IS NOT NULL,',',''),IFNULL(pm.`issn_no`,''),IF(pm.`issn_no` IS NOT NULL,',',''),MONTHNAME(STR_TO_DATE(pm.`month`,'%m')),IF(pm.`month` IS NOT NULL,',',''),pm.`year`),'') details FROM documentation.`publication_master` pm INNER JOIN documentation.`publication_type` pt ON pt.`pt_id`=pm.`pt_id` INNER JOIN documentation.`publication_ss_mapping` pssm ON pssm.`publication_id`=pm.`publication_id` AND pssm.`staff_id`=1026";
    $result = mysqli_query($dbcon, $sql);
    echo "<h2>SQL Query:</h2>". $sql;
    if (!$result) {
        die("Error in the query: " . mysqli_error($dbcon));
    }

    if (mysqli_num_rows($result) > 0) {
        echo "<br><h2>Result</h2><table border='1'><tr>";
        while ($fieldinfo = mysqli_fetch_field($result)) {
            echo "<th>" . $fieldinfo->name . "</th>";
        }
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No Data Found ";
    }
    mysqli_close($dbcon);
?>

</body>
</html>