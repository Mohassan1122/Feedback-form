<?php
include_once "db_connect.php";

$errorCount = 0;
$error = "";
if (isset($_POST['submit2'])) {
    if (empty($_POST['instructor2']) || empty($_POST['framework2']) || empty($_POST['rating']) ) {

        $error .= "<li>all field</li>";
        $errorCount++;
    }


    if ($_POST['instructor2'] == "None") {
        $error .= "<li>instructor field</li>";
        $errorCount++;
    }
    if ($_POST['framework2'] == "None") {
        $error .= "<li>framework field</li>";
        $errorCount++;
    }
    if ($_POST['rating'] == "None") {
        $error .= "<li>framework field</li>";
        $errorCount++;
    }
    if ($errorCount !== 0) {
        header("location: admin.php?error=" . $error);
        die();
    }

    $instructor2 = addslashes($_POST['instructor2']);
    $framework2 = addslashes($_POST['framework2']);
    $rating = addslashes($_POST['rating']);


    $sql2 = "SELECT * FROM feedback_form WHERE `instructor` = '$instructor2' AND `framework` = '$framework2'";
    $result2 = mysqli_query($connection, $sql2);
    if (mysqli_error($connection)) {
        exit("sql error . <a href='admin.php'>return</a>");
    }
    
    if (mysqli_num_rows($result2)) {

        echo "<table style='border: black;'>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>Name</th>";
        echo "<th>Instructor</th>";
        echo "<th>Date</th>";
        echo "<th>Frame_Work</th>";
        echo "<th>Radio1</th>";
        echo "<th>Radio2</th>";
        echo "<th>Radio3</th>";
        echo "<th>Radio4</th>";
        echo "<th>Radio5</th>";
        echo "<th>Radio6</th>";
        echo "<th>Radio7</th>";
        echo "<th>Radio8</th>";
        echo "<th>Message</th>";

        echo "</tr>";
        while ($row = mysqli_fetch_array($result2)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['instructor'] . "</td>";
            echo "<td>" . $row['date1'] . "</td>";
            echo "<td>" . $row['framework'] . "</td>";
            echo "<td>" . $row['radio1'] . "</td>";
            echo "<td>" . $row['radio2'] . "</td>";
            echo "<td>" . $row['radio3'] . "</td>";
            echo "<td>" . $row['radio4'] . "</td>";
            echo "<td>" . $row['radio5'] . "</td>";
            echo "<td>" . $row['radio6'] . "</td>";
            echo "<td>" . $row['radio7'] . "</td>";
            echo "<td>" . $row['radio8'] . "</td>";
            echo "<td>" . $row['message'] . "</td>";


            echo "</tr>";
        }
        echo "</table>";
    }
    mysqli_free_result($result2);
}
