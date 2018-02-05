<?php session_start();?>
<!DOCTYPE html>
<html>
    <title>Sign In</title>
<meta charset="utf-8">
<link type="image/png" href="img/favicon2.png" rel="shortcut icon">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
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
        
        .sign {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    position: relative;
    float: right;
    margin: 23px;
}



.loge {
    background-color: #3B5998;
}

/* Blue */

.loge:hover {
    background: #0b7dda;
}

#regForm {
    background-color: #ffffff;
    margin: 100px auto;
    font-family: Raleway;
    padding: 40px;
    width: 70%;
    min-width: 300px;
}

h1 {
    text-align: center;
}


/*sign up form*/

/* Mark input boxes that gets an error on validation: */

input.invalid {
    background-color: #ffdddd;
}

/* Hide all steps by default: */

.tab {
    display: none;
}



#prevBtn {
    background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */

.step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
}

.step.active {
    opacity: 1;
}

/* Mark the steps that are finished and valid: */

.step.finish {
    background-color: #4CAF50;
}

/*sign in form*/



input[type=text],
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.lg {
    background-color: #3B5998;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font-size: 17px;
}

.lg:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 20px;
    font-size: 17px;
    background-color: #3B5998;
    color: white;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
    color: black;
}

/* Change styles for span and cancel button on extra small screens */

@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
}

/*open modulas*/

/* The Modal (background) */

.modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
}

/* Modal Content */

.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */

@-webkit-keyframes animatetop {
    from {
        top: -300px;
        opacity: 0
    }
    to {
        top: 0;
        opacity: 1
    }
}

@keyframes animatetop {
    from {
        top: -300px;
        opacity: 0
    }
    to {
        top: 0;
        opacity: 1
    }
}

/* The Close Button */

.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #3B5998;
    color: white;
}

.modal-body {
    padding: 2px 16px;
}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/*user profile*/


		
        
        
        
        button {
            background-color: #3B5998;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
            
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 1em;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        button:hover {
            opacity: 0.8;
        }
        
         @media only screen and (max-width: 767px),
only screen and (max-device-width: 480px),
only screen and (max-width: 767px) {

    
    h2 , .cancelbtn , .psw , input{ font-size: 12px;}
        }
          
        
    </style>
</head>

<body>
    <div class="header">
        <a href="index.php"> <img src="img/logo3.png" alt="" class="profile"></a><button class="sign loge" id="myBtn">Sign In</button>
    </div>





    <form id="regForm" method="post" action="postprocess.php" enctype ='multipart/form-data'>
        <h1>Sign Up</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">Name:
            <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
        </div>
        <div class="tab">Contact Info:
            <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
            <p><input placeholder="111-111-1111" oninput="this.className = ''" name="phone"></p>
        </div>
        <div class="tab">Birthday:
            <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
            <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
            <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
        </div>
        <div class="tab">Login Info:
            <p><input placeholder="Username..." oninput="this.className = ''" name="user"></p>
            <p><input placeholder="Password..." oninput="this.className = ''" name="pw" type="password"></p>
	        <p><input type="file" name="photo"></p>
            
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" class="sign" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" class="sign" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>

    <?php
	
	require_once("footer.php");
	
	?>



    <!-- The Modal -->
<div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2 style="text-align:center">Sign In</h2>
            </div>
            <div class="modal-body">
    <form method="post" action="login1.php">

                    <div class="container">
                        <label><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="email" required>

                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pw" required>

                        <input type="submit" name="submit" value="Submit" class="lg">
                        <input type="checkbox" checked="checked" style="width:15px;"> Remember me
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#" style="color: black">password?</a></span>
                    </div>
                </form>
            </div>
            <!--<div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>-->

        </div>

    </div>

    <script type="text/javascript" src="js/modulas.js">
    </script>
    <script type="text/javascript" src="js/singup.js"></script>

</body>

</html>