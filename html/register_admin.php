<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/register_admin.css">

</head>
<body>
<form action="register_admin.php" method="POST">
    <div class="container">

        <label for="fname"><b>FirstName</b></label>
        <input type="text" placeholder="Enter FirstName" name="fname" required>

        <label for="lname"><b>LastName</b></label>
        <input type="text" placeholder="Enter LastName" name="lname" required>

        <label for="phone"><b>Phone</b></label>
        <input type="text" placeholder="Enter Phone" name="phone" required>

        <label for="em"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="em" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit" name="submit">Save</button>

    </div>
</form>
<div class="container" style="background-color:#f1f1f1">
    <button onclick="location.href = 'login.php';" style="width:auto;">Cancel</button>

</div>




<?php


if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['phone']) && isset($_POST['em']) && isset($_POST['psw']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $em = $_POST['em'];
    $psw = $_POST['psw'];
}



if(!empty($fname)||!empty($lname)||!empty($phone)||!empty($em)||!empty($psw)){
    $user = 'root';
    $pass = '';
    $db = 'sportsweden';
    $conn = new mysqli('localhost', $user, $pass, $db);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        $SELECT = "SELECT email FROM admin WHERE email = ? Limit 1";
        $INSERT = "INSERT INTO admin(firstname, lastname, phone, email, password) VALUES(?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",$em);
        $stmt->execute();
        $stmt->bind_result($em);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0){
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssssi",$fname, $lname, $phone, $em, $psw);
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
