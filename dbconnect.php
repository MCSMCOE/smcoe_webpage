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

    $sql = "SELECT 
    cws.authors,
    cws.paper_title,
    cpt.cws_ptype,
    cws.event_name,
    cws.event_location
FROM 
    documentation.cws_publication_master cws
INNER JOIN 
    documentation.cws_publication_ss_mapping cpssm ON cpssm.staff_id = '1026' 
    AND cpssm.cws_publication_id = cws.cws_publication_id
INNER JOIN 
    documentation.cws_publication_type cpt ON cpt.cws_pt_id = cws.cws_pt_id";
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