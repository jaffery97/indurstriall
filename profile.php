<?php session_start();// Starting Session ?>

<!doctype html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<head>
    <title>Profile</title>
<meta charset="utf-8">
<link type="image/png" href="img/favicon2.png" rel="shortcut icon">
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


        .hide{
            height: 163px;
        }


        /*  SECTIONS  */

        .section {
            clear: both;
            padding: 20px;
            margin: 0px;
            color: black;
            background-color: azure;
            text-align: center;
            
        }

        /*  COLUMN SETUP  */

        .col {
            display: block;
            padding: 20px;
            float: left;
            margin: 1% 0 1% 1.6%;
           
        }

        .col:first-child {
            margin-left: 0;
        }

        /*  GROUPING  */

        .group:before,
        .group:after {
            content: "";
            display: table;
        }

        .group:after {
            clear: both;
        }

        .group {
            zoom: 1;
            /* For IE 6/7 */
        }

        /*  GRID OF TWO  */

        .span_2_of_2 {
            width: 100%;
            
        }

        .span_1_of_2 {
            width: 49.2%;
        }

        /*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

        @media only screen and (max-width: 780px),
        only screen and (max-device-width: 480px),
        only screen and (max-width: 767px) {
            .col {
                margin: 1% 0 1% 0%;
            }
            
            .hide{
            display: none;
        }
        }

        @media only screen and (max-width: 780px),
        only screen and (max-device-width: 480px),
        only screen and (max-width: 767px) {
            .span_2_of_2,
            .span_1_of_2 {
                width: 100%;
                
                font-size: 20px;
            }
        }
        
        
        #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
            
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align:left; 
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
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
				<li>Profile</li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<!-- / container -->
	</div>
      

     
   

    <h2 style="heigth:50px;"></h2>




    <div class="section group">

        <div class="col span_1_of_2" style="text-align:center;">
            <h1> Your Profile</h1>
            <img src="<?php echo $_SESSION['i'];?>" alt="profile" style="width:300px;height:300px;border-radius:50%;border:5px solid #3B5998;">

        </div>

        <div class="col span_1_of_2" style="height: 390px;">
            
            <div class="hide"></div>
            
            <table id="customers">
  <tr>
    <td>ID</td>
    <td><?php echo $_SESSION['u'];?> </td>
    
  </tr>
  <tr>
    <td>Name</td>
    <td><?php echo $_SESSION['n'];?>
                <?php echo $_SESSION['l'];?></td>
    
  </tr>
  <tr>
    <td>E-mail</td>
    <td><?php echo $_SESSION['e']; ?></td>
  
  </tr>
  <tr>
    <td>Birthday</td>
    <td> <?php echo $_SESSION['c'];?>-<?php echo $_SESSION['g'];?>-<?php echo $_SESSION['y'];?></td>
   
  </tr>
 
</table>
            
        </div>
    </div>



<div style="height:50px"></div>




    <?php
	
	require_once("footer.php");
	
	?>


</body>

</html>