<?php
require_once "../php/imports.php";
require_once "../php/password_check_user.php";

if (isset($_POST['submit']) && isset($_POST['uname']) && isset($_POST['psw'])) {
    $result = check_password($_POST['uname'], $_POST['psw']);
    if ($result !== null) {
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
