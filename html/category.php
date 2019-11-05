<?php
require ("get_database_clubs.php");
$clubs = get_clubs();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
    <link rel="icon" type="image/png" href="../img/Sports-Sweden-crop-logo.png">
    <link rel="stylesheet" href="../css/category.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">

</head>
<style>
    
</style>
<body>

<?php include ("menu.php")?>

<div class = "content">
    <div class="filter-bar">
            <div class="dropdown" id="button-left">
                <button class="dropbtn">Search by city</button>
                <div class="dropdown-content" >
                    <a href="#">Stockholm</a>
                    <a href="#">Mälmö</a>
                    <a href="#">Göteborg</a>
                    <a href="#">Västerås</a>
                </div>
            </div>

            <div class="dropdown" id="button-right">
                <button class="dropbtn">Search by sport</button>
                <div class="dropdown-content">
                    <a href="#">Football</a>
                    <a href="#">Basketball</a>
                    <a href="#">Volleyball</a>
                    <a href="#">Tennis</a>
                    <a href="#">Polo</a>
                    <a href="#">Floorball</a>
                    <a href="#">Swimming</a>
                </div>
            </div>
    </div>
        <!-- Content of the site -->
        <div class="content-grid">
            <div class="club-panel">
                <img src="">
            </div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
            <div class="club-panel"></div>
        </div>
    <div class = "welcoming">
        <h1>Catalog</h1>
        <h3>Here you can browse through our wide database of sport clubs in sweden</h3>
    </div>

</body></html>


