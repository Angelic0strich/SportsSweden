<?php
function check_password_admin($email, $password){
    $user = 'root';
    $pass = '';
    $db = 'sportsweden';
    $db = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect");
    $sql = 'SELECT * from admin where email="'
        .$email
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