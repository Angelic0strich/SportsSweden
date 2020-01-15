<?php
require "../php/load.php";
session_start();
if (isset($_POST['logout'])) {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['role']);


}
if (isset($_POST['submit']) && isset($_POST['text'])) {
// read text file with name
// insert into data base
    $_SESSION['newsfile'] = $_POST['text'];
    load_articles($_POST['text']);
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add News</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/mainstyle.css">
</head>
<body>
<?php include ("menu.php")?>
    <?php
        if(isset($_POST['add']))
        {
            $servername = 'sportsweden';
            $username = 'root';
            $password = '';
            $conn = new mysqli('localhost', $username, $password, $servername);
            if (!$conn)
            {
                die('Connection failed');
            }
            $headline = $_POST['headline'];
            $story = $_POST['story'];
            $imgurl = $_POST['imgurl'];
            $query = "INSERT INTO news(id_news, title, content, imgurl) VALUES(NULL, '".$headline."', '".$story."', '".$imgurl."');"; // Need to add ID or name or club of who created the news!!
            $result = @mysqli_query($conn, $query);
            if (!$result)
            {
                die('Error adding news');
            }
            else
            {
                mysqli_close($conn);
                echo('Successfully added news!');
            }
        }
        else {
    ?>
            <?php
            if (isset($_SESSION['email'])) {

            } else {
                header("Location: login.php");
            }

            ?>
            <div id="addnews" class="container">
                <form name="addform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                    <br>

                    <a href="editnews.php"> Edit News </a>
                    <br>
                    <br>
                        <label for="headline">Headline</label>
                        <input type="text" id="headline" name="headline" placeholder="Your headline...">

                        <label for="story">News</label>
                        <textarea id="story" name="story" placeholder="Write your story here..." style="height: 200px"></textarea>

                        <label for="imgurl">Image</label>
                        <input type="text" id="imgurl" name="imgurl" placeholder="URL">

                        <input name="hiddenField" type="hidden" value="add_n">
                        <input name="add" type="submit" id="add" value="Submit">

                    <input type='submit' value='Log out' name='logout'>
                </form>
            </div>
        <?php } ?>
<?php include ("footer.php")?>
</body>
</html>