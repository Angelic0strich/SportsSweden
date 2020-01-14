<?php
require_once "imports.php";

function check_password($username, $password)
{
    $db = getDBConnection();
    $sql = 'SELECT * from user where username="'
        . $username
        . '" and password="'
        . $password . '"';
    $result = mysqli_query($db, $sql);
    if ($result->num_rows > 0) {
        return $result;
    } else {
        echo "null";
        return null;
    }
}


