<?php
function check_password($username, $password){
    $user = 'root';
    $pass = '';
    $db = 'sportsweden';
    $db = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect");
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