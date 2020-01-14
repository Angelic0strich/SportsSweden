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
    if (mysqli_num_rows($result) > 0) {

        $result[0];
    } else {
        return NULL;
    }
}


