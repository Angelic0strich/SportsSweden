<?php
include "imports.php";

function check_password($username, $password){
    $db= getDBConnection();
    $sql = 'SELECT * from user where username="'
        .$username
        .'" and password="'
        .$password.'"';
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result)>0){

        return true;
    }else{

        return false;
    }
}
?>


