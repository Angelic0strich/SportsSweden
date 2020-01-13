
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/register_user.css">

</head>
<body>
<form action="register_user.php" method="POST">
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




<?php
/*session_start();
require "password_check_user.php";

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

