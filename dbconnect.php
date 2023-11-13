<html>
<body>
<?php
$servername = "172.17.0.1";
$username = "root";
$password = "root";
$db="mysql";
$port="33070";  
$dbcon = mysqli_connect($servername, $username, $password,$db,$port);
if (!$dbcon) {
    die("Connection failed: " .  mysqli_connect_error());
}

    $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',sm.staff_id,'.png') imglink,sm.staff_id,TRIM(CONCAT(sm.`legend`,' ',IFNULL(sm.first_name,''),' ',IFNULL(sm.middle_name,''),' ',IFNULL(sm.last_name,''),' ')) staff_name, md.dept_name,cd.desg_name FROM `documentation`.`club_master` cm INNER JOIN documentation.`club_membership` cms ON cms.`cm_id`=cm.cm_id AND cms.staff_id IS NOT NULL AND cms.status>0 INNER JOIN camps.staff_master sm ON sm.staff_id=cms.staff_id INNER JOIN camps.master_department md ON md.department_id=sm.department_id INNER JOIN documentation.club_desg cd ON cd.cd_id=cms.cd_id INNER JOIN camps.master_academic_year may ON may.ay_id=cms.ay_id AND may.cur_year=1 WHERE cm.cm_id=11";
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