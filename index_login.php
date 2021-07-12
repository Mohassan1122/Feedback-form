<?php

if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "Please Fill in the Fields";
    } else {
        header("location: admin.php");
    }
}




?>

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


    <div class="container">
        <div class="container rounded-top col-md-9  mb-n1 pt-3 bg-info">
        </div>
        <div class="col-md-9  p-3 bg-white  rounded-bottom mx-auto mt-1 mb-1 pb-5">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Steamledge Bootcamp Feedback Form</h2>
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will get back to you within
                a matter of hours to help you.</p>
            <div class="col-sm-9 col-sm-offset-3">

            </div>

        </div>


        <div class="col-md-9 mb-md-0 mx-auto">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 border shadow p-3 bg-white rounded-lg mt-1 mb-1 p-5">
                        <div class="container border  shadow" style="text-align:center; height:500px; width:500px;">
                            <div class="row bg-info " style="height: 90px;width:500px; ">
                                <h1 class="mx-auto p-3 text-white"><i class="fa fa-lock" aria-hidden="true"></i> Login</h1>

                            </div><br /><br />
                            <form class="form-horizontal" style="padding: 15px; margin: 0 auto; border-radius: 0.3em;" action="#" method="POST">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                    </div>
                                    <input type="text" name="email" class="form-control" placeholder="username or email" />
                                </div><br />

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-key icon"></i></span>
                                    </div>
                                    <input type="Password" name="password" class="form-control" placeholder="password" />
                                </div><br />

                                <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-off"></span> Login</button>
                            </form>
                            <br />
                            <br />

                            <center>
                                <div style="border:1px solid black;height:1px;width:300px;"></div>
                            </center><br />
                            <div class="footer">
                                <p>Don't have an Account! <a href="">Sign Up Here</a></p>
                                <p>Forgot <a href="#">Password?</a></p>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class=" text-muted text-center">
                <p>Copyright &copy Steamledge Limited 2020</p>
            </div>
        </div>
    </div>







</body>

</html>