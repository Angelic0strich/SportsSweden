<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add a new club</title>
    <link rel="icon" type="image/png" href="../img/Sports-Sweden-crop-logo.png">
    <link rel="stylesheet" href="../css/form-club.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
</head>
<body>
<div class="form">


<form method="post" action="../php/add-club.php">
    <div>
        <label for="name">Name :</label>
        <input type="text" name="name" id="name">

    </div>
    <div>
        <label for="sport">Sport :</label>
        <select name = "sport" id ="sport">
            <option value="athletics">Athletics</option>
            <option value="baseball">Baseball</option>
            <option value="basketball">Basketball</option>
            <option value="floorball">Floorball</option>
            <option value="football">Football</option>
            <option value="handball">Handball</option>
            <option value="hockey">Hockey</option>
            <option value="volleyball">Volleyball</option>
        </select>
    </div>
    <div>
        <label for="city">City :</label>
        <select name="city" id="city">
            <option value ="stockholm">Stockholm</option>
            <option value ="goteborg">Göteborg</option>
            <option value ="malmo">Mälmö</option>
            <option value="vasteras">Västeras</option>
        </select>
    </div>
    <div>
        <label for="address">Address :</label>
        <input type="text" name="address" id="address">
    </div>
    <div>
        <label for="googlemaps">Google Maps URL :</label>
        <input type="text" name="googlemaps" id="googlemaps">
    </div>
    <div>
        <label for="website">Web Site URL :</label>
        <input type="text" name="website" id="website">
    </div>
    <div>
        <label for="logo">Logo :</label>
        <input type="text" name="logo" id="logo">
    </div>
    <div>
        <label for="image">Image :</label>
        <input type="text" name="image" id="image">
    </div>
    <div class="submit">
        <input type="submit" id="submit">
    </div>
    <br>
    <a href="addnews.php"> Back </a>


</form>
</div>
</body>
</html>