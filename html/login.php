<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        User name: <input type="text" name="user"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="loginbutton" value="Login" onclick="doLogin()">
    </form>
    <?php
    $connect = "";
    $user = "";
    $password = "";

    function doLogin() {
        //SQL connect
        //call SQL function
        //if it returns true = login
        //else print fail attempt
    }
    ?>
</body>
</html>