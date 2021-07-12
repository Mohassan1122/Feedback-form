<html>

<head>
    <title>feedback form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="./fontawesome/css/all.css" rel="stylesheet">
    <style>
        body {
            background-image: url(./Whatsapp-Default-Background-Wallpaper-Drawing-Free-.jpg);
        }

        input[type=text] {
            border: none;
            border-bottom: 1px solid #555;

        }

        #exampleFormControlSelect1 {
            border: none;
            border-bottom: 1px solid #555;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['error'])) {
    ?>
        <pre>
<div class="container border shadow rounded  text-light col-md-12 mb-n1  bg-info">
<?php
        echo "<h1> Fill </h1>";
        echo "<ul>" . $_GET['error'] . "</ul>";
?>
</div>
            </pre>
    <?php
    }

    ?>
    <div class=" rounded-top mb-n1 pt-3 bg-info">

    </div>
    <header class="bg-white  rounded-bottom">
        <div class="col-md-9  p-3  mx-auto mt-1 mb-1 pb-5">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Steamledge Bootcamp Feedback Form</h2>
            <p class="text-center w-responsive mx-auto mb-5">This page is restricted.. For user admin only</p>
            <p class="text-center w-responsive mx-auto mb-5">Thank you</p>
            <div class="text-center">
                <a href="index.php" class="btn btn-info rounded-lg btn-lg "><i class="fas fa-arrow-left"></i> Go to form</a>
            </div>
        </div>
        <div class="text-center">
            <h2>Choose to view Student Response</h2>
        </div>
        <div class="container">
            <form class="form-row ml-4 p-5" action="" method="POST">
                <div class=" col-3 m-2 form-group">
                    <label for="exampleFormControlSelect1" class="mb-4">Choose Instructor*</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="instructor2">
                        <option>All</option>
                        <option>Mr Mohammed</option>
                        <option>Mr Ibrahim</option>
                        <option>Mr Tobi</option>
                    </select>
                </div>


                <div class="form-group m-2 col-md-3">
                    <label for="exampleFormControlSelect1" class="mb-4">Your Framework*</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="framework2">
                        <option>All</option>
                        <option>Block Programming</option>
                        <option>Web and Mobile Application Development</option>
                        <option>Scrach</option>
                        <option>Wordpress</option>
                    </select>
                </div>


                <div class=" col-3 m-2 form-group">
                    <label for="exampleFormControlSelect1" class="mb-4">Students Rating*</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="rating">
                        <option>All</option>
                        <option><span style='font-size:20px;'>&#128544;</span> strongly disagree</option>
                        <option><span style='font-size:20px;'>&#128542;</span>disagree</option>
                        <option><span style='font-size:20px;'>&#128533;</span>somewhat agree</option>
                        <option><span style='font-size:20px;'>&#128522;</span>agree</option>
                        <option><span style='font-size:20px;'>&#128525;</span>strongly agree</option>
                    </select>
                </div>
                <br />
                <div class=" container mr-4 text-center">
                    <div class="mr-4 text-center">
                        <button name="submit2" class="btn btn-info rounded-lg mt-3 btn-lg "><i class="fal fa-search"></i>Search</button>
                    </div>
            </form>
        </div>

        <?php
        include_once "db_connect.php";


        if (isset($_POST['submit2'])) {

            $instructor2 = addslashes($_POST['instructor2']);
            $framework2 = addslashes($_POST['framework2']);
            $rating = addslashes($_POST['rating']);

            if ($instructor2 == "All" && $framework2 == "All") {
                $sql = "SELECT * FROM feedback_form";
            }elseif ($instructor2 !== "All" && $framework2 == "All") {
                $sql = "SELECT * FROM feedback_form WHERE `instructor` = '$instructor2'";
            }elseif ($framework2 !== "All" && $instructor2 == "All") {
                $sql = "SELECT * FROM feedback_form WHERE `framework` = '$framework2'";
            } else {
                $sql = "SELECT * FROM feedback_form WHERE `instructor` = '$instructor2' AND `framework` = '$framework2'";
            }
            $result2 = mysqli_query($connection, $sql);
            

            if (mysqli_num_rows($result2)) {
        ?>
                <pre>
                    <h2 class="container text-center">The student response result of  <?php echo $instructor2 ?> from the database</h2>
                    <table class="table table-striped table-sm">
                    
               <thead class="thead-light"  style="border: 1px solid blue;">
                    <tr >
                        <th style="border: 1px solid black; text-align: center;">id</th>
                        <th style="border: 1px solid black; text-align: center;">Name</th>
                        <th style="border: 1px solid black; text-align: center;">Instructor</th>
                        <th style="border: 1px solid black; text-align: center;">Date</th>
                        <th style="border: 1px solid black; text-align: center;">Frame_Work</th>
                        <th style="border: 1px solid black; text-align: center;">Question 1</th>
                        <th style="border: 1px solid black; text-align: center;">Question 2</th>
                        <th style="border: 1px solid black; text-align: center;">Question 3</th>
                        <th style="border: 1px solid black; text-align: center;">Question 4</th>
                        <th style="border: 1px solid black; text-align: center;">Question 5</th>
                        <th style="border: 1px solid black; text-align: center;">Question 6</th>
                        <th style="border: 1px solid black; text-align: center;">Question 7</th>
                        <th style="border: 1px solid black; text-align: center;">Question 8</th>
                        <th style="border: 1px solid black; text-align: center;">Message</th>
                    </tr>
                </thead>
                </pre>
        <?php


                while ($row = mysqli_fetch_array($result2)) {
                    echo "<tbody style=\"border: 1px solid blue; \">";
                    echo "<tr>";
                    echo "<td style=\"border: 1px solid black; text-align: center; \">" . $row['id'] . "</td>";
                    echo "<td style=\"border: 1px solid black; text-align: center;\">" . $row['name'] . "</td>";
                    echo "<td style=\"border: 1px solid black; text-align: center;\">" . $row['instructor'] . "</td>";
                    echo "<td style=\"border: 1px solid black; text-align: center;\">" . $row['date1'] . "</td>";
                    echo "<td style=\"border: 1px solid black; text-align: center;\">" . $row['framework'] . "</td>";
                    echo "<td style=\"border: 1px solid black; text-align: center;\">" . $row['radio1'] . "</td>";
                    echo "<td style=\"border: 1px solid black; text-align: center;\">" . $row['radio2'] . "</td>";
                    echo "<td style=\"border: 1px solid black; text-align: center;\">" . $row['radio3'] . "</td>";
                    echo "<td style=\"border: 1px solid black; text-align: center;\">" . $row['radio4'] . "</td>";
                    echo "<td style=\"border: 1px solid black; text-align: center;\">" . $row['radio5'] . "</td>";
                    echo "<td style=\"border: 1px solid black; text-align: center;\">" . $row['radio6'] . "</td>";
                    echo "<td style=\"border: 1px solid black; text-align: center;\">" . $row['radio7'] . "</td>";
                    echo "<td style=\"border: 1px solid black; text-align: center;\">" . $row['radio8'] . "</td>";
                    echo "<td style=\"border: 1px solid black; text-align: center;\">" . $row['message'] . "</td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
                echo "</table>";

                mysqli_free_result($result2);
            }
        }
        ?>
    </header>
    <div class=" text-muted text-center">
        <p>Copyright &copy Steamledge Limited 2020</p>
    </div>










</body>