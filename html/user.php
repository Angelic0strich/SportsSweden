<?php
require "../php/load.php";



session_start();
if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['role']);

}
if (isset($_POST['submit']) && isset($_POST['text'])) {
// read text file with name
// insert into data base
    $_SESSION['newsfile'] = $_POST['text'];
    load_articles($_POST['text']);
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
<?php
if (isset($_SESSION['username'])) {

} else {
    header("Location: login.php");
}

?>
<form action="#" method="post">
    <label for='fname'>Insert into textfile : </label>
    <input type='text' id='fname' name='text'>
    <input type='submit' value='Submit' name='submit'>
    <input type='submit' value='Log out' name='logout'>"
</form>
</body>
</html>