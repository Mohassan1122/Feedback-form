<?php
require_once "db_connect.php";

$errorCount = 0;
$error = "";
if (isset($_POST['submit'])) {
    if (empty($_POST['name']) || empty($_POST['instructor']) || empty($_POST['framework']) || empty($_POST['radio1']) || empty($_POST['radio2']) || empty($_POST['radio3']) || empty($_POST['radio4']) || empty($_POST['radio5']) || empty($_POST['radio6']) || empty($_POST['radio6']) || empty($_POST['radio8'])) {

        $error .= "<li>all field</li>";
        $errorCount++;
    }


    if ($_POST['instructor'] == "None") {
        $error .= "<li>instructor field</li>";
        $errorCount++;
    }
    if ($_POST['framework'] == "None") {
        $error .= "<li>framework field</li>";
        $errorCount++;
    }
    if ($errorCount !== 0) {
        header("location: index.php?error=" . $error);
        die();
    }


    $name = addslashes($_POST['name']);
    $instructor = addslashes($_POST['instructor']);
    $date = addslashes($_POST['date1']);
    $framework = addslashes($_POST['framework']);
    $value = addslashes($_POST['radio1']);
    $value1 = addslashes($_POST['radio2']);
    $value2 = addslashes($_POST['radio3']);
    $value3 = addslashes($_POST['radio4']);
    $value4 = addslashes($_POST['radio5']);
    $value5 = addslashes($_POST['radio6']);
    $value6 = addslashes($_POST['radio7']);
    $value7 = addslashes($_POST['radio8']);
    if (empty($_POST['message'])) {
        $_POST['message'] = "Nil";
    }
    $message = addslashes($_POST['message']);


    $sql = "INSERT INTO feedback_form SET `name`='{$name}', `instructor`='{$instructor}', `date1`='{$date}', `framework`='{$framework}', `radio1`='{$value}', `radio2`='{$value1}', `radio3`='{$value2}', `radio4`='{$value3}', `radio5`='{$value4}', `radio6`='{$value5}', `radio7`='{$value6}', `radio8`='{$value7}', `message`='{$message}'";
    $result = mysqli_query($connection, $sql);
    if ($result == true) {
        header("Location: result.php");
        die(); 
    }

    
        
    
}
