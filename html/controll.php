<?php
include("data_access_object.php");
if(isset($_POST["search-data"])){

    $searchVal = trim($_POST["search-data"]);
    $dao = new data_access_object();
    echo $dao->searchData($searchVal);
}

?>
