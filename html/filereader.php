<?php

function readnewsfile(){

    if(isset($_SESSION['newsfile']) == false){
         $_SESSION['newsfile'] = "Ass2News.json";
    }

    $text = file_get_contents($_SESSION['newsfile']);
    $jsonobject = json_decode($text, true);
    return $jsonobject;
}


function readnewsfilebyname($filename){
    $text = file_get_contents($filename);
    $jsonobject = json_decode($text, true);
    return $jsonobject;
}

readnewsfile();

?>