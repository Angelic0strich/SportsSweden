<<<<<<< HEAD
<?php
require_once "../php/imports.php";
require_once "../php/password_check_user.php";

if (isset($_POST['submit']) && isset($_POST['uname']) && isset($_POST['psw'])) {
    $result = check_password($_POST['uname'], $_POST['psw']);
    if ($result != null) {
        setLoginSuccessful();
        $result = $result->fetch_assoc();
        $_SESSION['role'] = $result['role'];
        $_SESSION['username'] = $_POST['uname'];
    } else {
        setLoginFailed();
    }
} else {
    setLoginFailed();
}
header("Location: index.php");
=======




<html>
<head>
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../img/Sports-Sweden-crop-logo.png">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Patua One", sans-serif;
            background-color: white;
            color: #00c2e5;
        }

        /* Full-width input fields */


        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            font-family: "Fjalla One", "Arial Black";
            font-size: 20px;
            background-color: #00c2e5;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.profile {
            width: 15%;
            border-radius: 20%;
            background-color: #3b3333;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #3b3333;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
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
    </style>
</head>
<body>


<h1>LOGIN PAGE</h1>



    <button onclick="location.href = 'homepage.php';" style="width:auto;">Home page</button>
    <button onclick="document.getElementById('edvin').style.display='block'" style="width:auto;">Sign In As Admin
    </button>


<div id="edvin" class="modal">

    <form class="modal-content animate" method="post" action='#'>

        <h1>Admin</h1>

        <div class="imgcontainer">
            <span onclick="document.getElementById('edvin').style.display='none'" class="close"
                  title="Close Box">&times;</span>
            <img src="../img/profile.jpg" alt="Profile" class="profile">
        </div>
        <div class="container">
            <label for="em"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="em" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" name="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('edvin').style.display='none'" class="cancelbtn">
                Cancel
            </button>
            <span class="psw"><a href="/sportsweden/html/register_admin.php">Register</a></span>

        </div>
    </form>
</div>




</body>
</html>

>>>>>>> hey
