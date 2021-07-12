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

        .radio {
            -webkit-appearance: button;
            -moz-appearance: button;
            appearance: button;
            border: 4px solid #ccc;
            border-top-color: #bbb;
            border-left-color: #bbb;
            background: #fff;
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }

        .radio:checked {
            border: 5px solid #4099ff;
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

    <div class="container">
        <div class="container rounded-top col-md-9  mb-n1 pt-3 bg-info">
        </div>
        <div class="col-md-9  p-3 bg-white  rounded-bottom mx-auto mt-1 mb-1 pb-5">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Steamledge Bootcamp Feedback Form</h2>
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will get back to you within
                a matter of hours to help you.</p>
            <div class="col-sm-9 col-sm-offset-3">
                <span class="help-block">*Required fields</span>
            </div>

        </div>


        <div class="col-md-9 mb-md-0 mx-auto">

            <form action="function.php" method="POST">

                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 border shadow p-3 bg-white rounded-lg mt-1 mb-1 p-5">
                            <div class="col-md-6 ">
                                <div class="md-form ">
                                    <label for="name" class="mb-4">Name*</label>
                                    <input type="text" id="name" name="name" placeholder="Your Answer" class="form-control">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 border shadow p-3 bg-white rounded-lg mt-1 mb-1 p-5">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class="mb-4">Your Instructor*</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="instructor">
                                        <option>None</option>
                                        <option>Mr Mohammed</option>
                                        <option>Mr Ibrahim</option>
                                        <option>Mr Tobi</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 border shadow p-3 bg-white rounded-lg mt-1 mb-1 p-5">
                            <div class="col-md-6 ">
                                <div class="md-form ">
                                    <label for="name" class="mb-4">Date*</label>
                                    <input type="date" id="date" name="date1" class="form-control">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 border shadow p-3 bg-white rounded-lg  mt-1 mb-1 p-5">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class="mb-4">Your Framework*</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="framework">
                                        <option>None</option>
                                        <option>Block Programming</option>
                                        <option>Web and Mobile Application Development</option>
                                        <option>Scrach</option>
                                        <option>Wordpress</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Question part -->

                    <?php include 'question.php';  ?>

                <!-- end of Question -->
                <div class="container  ">
                    <div class="form-group row">
                        <div class="col-md-12 text-center">
                            <button type="submit" name="submit" role="button" class="btn btn-info rounded-lg btn-lg">Submit <i class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class=" text-muted text-center">
                    <p>Copyright &copy Steamledge Limited 2020</p>
                </div>
            </form>

        </div>
    </div>







</body>

</html>