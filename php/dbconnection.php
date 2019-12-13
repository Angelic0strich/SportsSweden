<?php

function getDBConnection(){
    $user = 'root';
    $pass = '';
    $db = 'sportsweden';
    $db = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect");
    return $db;
}
