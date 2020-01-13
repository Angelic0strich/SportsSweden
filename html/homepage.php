<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sports Sweden</title>
    <link rel="icon" type="image/png" href="../img/Sports-Sweden-crop-logo.png">
    <link rel="stylesheet" href="../css/mainstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <script src="../script/jquery-3.2.1.min.js">
    </script>
</head>
<body>
<?php include ("menu.php")?>
    <?php
    $servername = 'sportsweden';
    $username = 'root';
    $password = '';
    $conn = new mysqli('localhost', $username, $password, $servername);

    $query = "SELECT id_news, title FROM news ORDER BY id_news DESC";
    $result = @mysqli_query($conn, $query);
    if(!$result)
    {
        die('Error getting news');
    }
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_object($result))
        {
            ?>
            <br>
            <div class="grid-container">
                <div class="item1">
                    <a href="shownews.php?id=<?php echo $row->id_news ?>">
                        <img src="https://previews.123rf.com/images/duug/duug1206/duug120600003/13966994-sport-logo.jpg" style="height: 6em;">
                    </a>
                </div>
                <div class="item2">
                    <a href="shownews.php?id=<?php echo $row->id_news ?>">
                        <p><?php echo $row->title ?></p>
                    </a>
                </div>
            </div>
            <?php
        }
        ?> <br> <?php
    }
    ?>
<?php include ("footer.php")?>
</body>
</html>