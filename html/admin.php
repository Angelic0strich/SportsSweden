<?php
require "load.php";
session_start();
if (isset($_POST['logout'])) {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['role']);


}
if (isset($_POST['submit']) && isset($_POST['text'])) {
// read text file with name
// insert into data base
    $_SESSION['newsfile'] = $_POST['text'];
    load_articles($_POST['text']);
    header("Location: homepage.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        input[type=submit] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;

        }

        input[type=text] {
            width: 50%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid black;
            border-radius: 2px;

        }
    </style>
</head>
<body>
<?php
if (isset($_SESSION['email'])) {

} else {
    header("Location: login.php");
}

?>
<form action="#" method="post">
    <label for='fname'>Club Information : </label>
    <input type='text' id='fname' name='text'>
    <br>
    <input type='submit' value='Submit' name='submit'>
    <br>
    <label for='fname'>Club Articles : </label>
    <input type='text' id='fname' name='text'>
    <br>
    <input type='submit' value='Submit' name='submit'>
    <br>
    <br>
    <input type='submit' value='Log out' name='logout'>"
</form>
</body>
</html>
