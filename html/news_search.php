<?php
if(isset($_GET["search-data"])) {
    $searchVal = trim($_GET["search-data"]);


    $user = 'root';
    $pass = '';
    $db = 'sportsweden';
    $db = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect");

    $sql = "SELECT * FROM news where title LIKE '%{$searchVal}%'";

    $result = $db->query($sql);

    $html = "";
    while ($row = $result->fetch_assoc()) {
        $html = $html . '<div class="search-result"><a href="http://localhost/sportsweden/display_news.php?articleid='. $row["id_news"] . '">' . $row['title'] . '</a></div>';

    }
    echo $html;
}
//    $dao = new DAO();
//    echo $dao->searchData($searchVal);
