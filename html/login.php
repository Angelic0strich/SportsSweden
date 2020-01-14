<?php
require_once "../php/imports.php";
require_once "../php/password_check_user.php";

if (isset($_POST['submit']) && isset($_POST['uname']) && isset($_POST['psw'])) {
    $result = check_password($_POST['uname'], $_POST['psw']);
    if ($result != NULL) {
        $_SESSION['role'] = $result['role'];
        $_SESSION['username'] = $_POST['uname'];
        setLoginFailed(true);
    } else {
        setLoginFailed(false);
    }
} else {
    setLoginFailed(false);
}
header("Location: index.php");
