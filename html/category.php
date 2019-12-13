<?php
session_start();
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
<?php

require("get_database_clubs.php");
$clubs = get_clubs();

?>
<body>

<?php include("menu.php") ?>

<div class="content">
    <div class="filter-bar">
        <div class="dropdown" id="button-left">
            <button class="dropbtn">Search by city</button>
            <div class="dropdown-content">
                <a href="category.php?city=stockholm">Stockholm</a>
                <a href="category.php?city=mälmö">Mälmö</a>
                <a href="category.php?city=göteborg">Göteborg</a>
                <a href="category.php?city=västerås">Västerås</a>
            </div>
        </div>

        <div class="dropdown" id="button-right">
            <button class="dropbtn">Search by sport</button>
            <div class="dropdown-content">
                <a href="category.php?sport=football">Football</a>
                <a href="category.php?sport=basketball">Basketball</a>
                <a href="category.php?sport=volleyball">Volleyball</a>
                <a href="category.php?sport=tennis">Tennis</a>
                <a href="category.php?sport=polo">Polo</a>
                <a href="category.php?sport=floorball">Floorball</a>
                <a href="category.php?sport=swimming">Swimming</a>
            </div>
        </div>

    </div>
    <!-- Content of the site -->
    <div class="content-grid">
        <?php
        $servername = 'sportsweden';
        $username = 'root';
        $password = '';
        $conn = new mysqli('localhost', $username, $password, $servername);
        if (!$conn) {
            die('Connection failed');
        }

        $query = "SELECT * FROM clubs ORDER BY id DESC ";

        if (isset($_GET['city'])) {
            $_SESSION['city'] = $_GET['city'];
        }
        if (isset($_GET['sport'])) {
            $_SESSION['sport'] = $_GET['sport'];
        }

        if (isset($_SESSION['city']) && isset($_SESSION['sport'])) {
            $query = "SELECT * FROM clubs WHERE sport='{$_SESSION['sport']}' AND city='{$_SESSION['city']}' ORDER BY id DESC ";
        } else if (isset($_SESSION['city'])) {
            $query = "SELECT * FROM clubs WHERE city='{$_SESSION['city']}' ORDER BY id DESC ";
        } else if (isset($_SESSION['sport'])) {
            $query = "SELECT * FROM clubs WHERE sport='{$_SESSION['sport']}' ORDER BY id DESC ";

        }


        $result = @mysqli_query($conn, $query);

        if (!$result) {
            echo("Fail to get result");
        } else {
            while ($row = mysqli_fetch_object($result)) {
                //echo $row->name;
                ?>
                <a href="showclub.php?id=<?php echo $row->id; ?>">
                    <div class="club-panel">
                        <img src="<?php echo $row->logo; ?>">
                        <h1><?php echo $row->name; ?></h1>

                       <?php /*
                        if (isset($_SESSION['role'])) {
                            echo '<a href="follow.php?club_id="' . $row->id . '>Follow</a>';
                        } else {
                            echo 'not logged in ';
                        }*/
                        ?>
                    </div>
                </a>

                <?php
            }
        }
        ?>

    </div>
    <div class="welcoming">
        <h1>Catalog</h1>
        <h3>Here you can browse through our wide database of sport clubs in sweden</h3>
    </div>
    <?php include("footer.php") ?>
</div>
</body>
</html>


