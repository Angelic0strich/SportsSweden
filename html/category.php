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
<body>
<?php include ("menu.php")?>
<div class = "content">
    <div class = "welcoming">
        <h1>Catalog</h1>
        <h3>Here you can browse through our wide database of sport clubs in sweden</h3>
    </div>
    <div class="grid-container">
        <div class="side-bar-left">
            <br><br><br>
            <h2>city </h2>

            <form action="http:///action_page.php">
                <input type="checkbox" name="Stockholem">Stockholem <br>
                <input type="checkbox" name="Malmo">Malmo<br>
                <input type="checkbox" name="Gothenburg">Gothenburg<br>
                <input type="checkbox" name="Vasteras">Västerås <br>
                <br>

                <h2>sports</h2>
                <input type="checkbox"> Football<br>
                <input type="checkbox"> Bascetball<br>
                <input type="checkbox"> Handball<br>
                <input type="checkbox"> Volleyball<br>
                <input type="checkbox"> Tennis<br>
                <input type="checkbox"> polo<br>
                <input type="checkbox"> Floorball<br>
                <input type="checkbox"> Swimming <br>
                <br> <br>

                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="content-grid">
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
    </div>


</body></html>

</div>


</body>
</html>
