<?php session_start();?>
<!doctype html>
<html>

<head>
    <title>Confirm</title>
    <meta charset="utf-8">
    <link type="image/png" href="images/favicon2.png" rel="shortcut icon">


    <link rel="stylesheet" href="css/phpstyle.css">
    <link rel="stylesheet" href="css/googlefont.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaqueries.css">

    <style>
        body {
            background-color: aliceblue;
            width: 100%;
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            padding: 0px;
            margin: 0px;
            color: #555;
            font-size: 1.1em;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .error {
            color: #f00;
        }

        .profilecontainer {
            text-align: center;
            margin-top: 50px;
            padding: 40px;
        }



        @media only screen and (max-width: 767px),
        only screen and (max-device-width: 480px),
        only screen and (max-width: 767px) {


            h4 {
                font-size: 12px;
            }

            .profilecontainer {
                text-align: center;

            }

        }

        .pro {

            border-radius: 5% 15%;
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 10px;



        }

        .card {

            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: sans-serif;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

    </style>
</head>

<body>
    <?php include 'headr.php';?>
    <!-- / navigation -->

    <div id="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Confirmation</li>
            </ul>
        </div>
        <!-- / container -->
    </div>
    <div class="profilecontainer">


        <h3 style="text-align:center">Your Profile Confirmed </h3>

        <div class="card">
            <img src="<?php echo $_SESSION[" i "];?>" alt="prolie" style="width:100%;border-radius: 100%;border:5px solid #3B5998; ">
            <h1>
                <?php echo $_SESSION["b"];?>
                <?php echo $_SESSION["l"];?>
                <br>
                <h3>
                    <?php echo $_SESSION["o"];?>
                </h3>
            </h1>

            <p class="title">
                <?php echo $_SESSION["e"];?>
            </p>



        </div>



        <div style="height:60px"></div>


    </div>
    <?php
	
	require_once("footer.php");
	
	?>
    <script>
        window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")

    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
