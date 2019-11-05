<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sports Sweden</title>
    <link rel="icon" type="image/png" href="../img/Sports-Sweden-crop-logo.png">
    <link rel="stylesheet" href="../css/homepage.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <script src="../script/jquery-3.2.1.min.js">
    </script>

</head>

<body>
<?php include ("menu.php")?>
<!--<div class = "content">

    <div class = "welcoming">
        <h1>Greetings, visitor !</h1>
        <h3>And welcome in the Sports Sweden platform !</h3>
        <p><strong>Here you will find news about sport clubs in Sweden main cities, discover new clubs around your city, and register in it !</strong></p>
    </div>
    -->
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
                        <img src="https://previews.123rf.com/images/duug/duug1206/duug120600003/13966994-sport-logo.jpg" style="height: 100%;">
                    </a>
                </div>
                <div class="item2">
                    <a href="shownews.php?id=<?php echo $row->id_news ?>">
                        <p><?php echo $row->title ?></p>
                    </a>
                </div>
            </div>
            <!--
            <a href="shownews.php?id=<?php// echo $row->id_news ?>">
                <div class="newsfeed">
                    <img src="https://previews.123rf.com/images/duug/duug1206/duug120600003/13966994-sport-logo.jpg">
                    <?php// echo $row->title ?>
                </div>
            </a>-->
            <?php
        }
        ?> <br> <?php
    }
    ?>


<!--
    <div id="bar1" align="left">
        <div id="newsImage1" class="newsImage">
            <div class= "content" >
                <div class="title">Sweden Team</div>

                <div class="description">Sweden are in a draw against Spain in the Euro 2020 qualifiers .</div>
            </div>
        </div>
        <div id="newsImage2" class="newsImage">
            <div class="title">Djorgarden team</div>
            <br>
            <div class="description">Djorgarden top the standings with two rounds to close</div>
        </div>
        <div id="newsImage3" class="newsImage">
            <div class="title">Stockholm ATP</div>
            <br>
            <div class="description">Karl Freiberg leaves the Stockholm championship from the first round</div>
        </div>
    </div>
    <br />
    <div class="bar" id="bar2" align="center">
        <div class="box">
            <img src="../img/image_2.jpg">
            <span class="content">
					Floorball team are ready to world cup
				</span>
        </div>
        <div class="box" id="box2">
            &nbsp;
            <img src="../img/hoki.jpg">
            <span class="content">
					Sweden team preparing for world cup
				</span>
        </div>
        <div class="box">
            <img src="../img/th.jpg">
            <span class="content">
					New Racing club
				</span>
        </div>
    </div>
</div>-->
<?php include ("footer.php")?>
</body>
</html>