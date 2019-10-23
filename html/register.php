
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
            color: white;
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
            background-color: #4CAF50;
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
<form action="register.php" method="POST">
<div class="container">

    <label for="fname"><b>FirstName</b></label>
    <input type="text" placeholder="Enter FirstName" name="fname" required>

    <label for="lname"><b>LastName</b></label>
    <input type="text" placeholder="Enter LastName" name="lname" required>

    <label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="Enter Phone" name="phone" required>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="submit">Save</button>

</div>
</form>
<div class="container" style="background-color:#f1f1f1">
    <button onclick="location.href = 'login.php';" style="width:auto;">Cancel</button>

</div>



<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<?php
/*session_start();
require "password_check.php";

if (isset($_POST['submit'])) {
    if (check_password($_POST['uname'], $_POST['psw'])) {
        $_SESSION['username'] = $_POST['uname'];
        header("Location: login.php");
    } else {
        echo "<h1>You need to fill all the fields</h1>";
    }
}*/

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['phone']) && isset($_POST['uname']) && isset($_POST['psw']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
}



if(!empty($fname)||!empty($lname)||!empty($phone)||!empty($uname)||!empty($psw)){
    $user = 'root';
    $pass = '';
    $db = 'sportsweden';
    $conn = new mysqli('localhost', $user, $pass, $db);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        $SELECT = "SELECT username FROM user WHERE username = ? Limit 1";
        $INSERT = "INSERT INTO user(firstname, lastname, phone, username, password) VALUES(?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",$uname);
        $stmt->execute();
        $stmt->bind_result($uname);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0){
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssssi",$fname, $lname, $phone, $uname, $psw);
            $stmt->execute();
            echo "New record inserted successfully";
        }else{
            echo "This email is already registered";
        }
        $stmt->close();
        $conn->close();
    }
}else{
    echo "All fields are required";
    die();
}
?>

</body>
</html>

