<?php
require "filereader.php";
function load_articles($filename)
{
    $articles = readnewsfilebyname($filename);
    $title = "Big title";
    $imgurl = "some url";
    $content = "Nice content";
    $user = 'root';
    $pass = '';
    $db = 'sportsweden';
    $db = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect");
    $statement = $db->prepare("INSERT INTO news(title,imgurl,content) VALUES (?,?,?)");
    $statement->bind_param("sss", $title, $imgurl, $content);

    foreach ($articles['news'] as $article) {
            $title = $article['title'];
            $imgurl = $article['imgurl'];
            $content = $article['content'];
            $statement->execute();
    }


    $statement->close();
    $db->close();
}


function load_from_database(){
    $user = 'root';
    $pass = '';
    $db = 'sportsweden';
    $db = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect");
    $query = "SELECT * FROM news ORDER BY id_news DESC LIMIT 3";
    $result = $db->query($query);

    $articles = [];
    while($row = $result->fetch_assoc()) {

        array_push($articles,$row);
    }

    return $articles;
};
