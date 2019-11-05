<?php
require "load.php";
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
    header("Location: homepage.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add News</title>
    <meta charset="UTF-8">
    <style>
        input[type=text], textarea {
            width: 100%;
            padding 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        .container {
            display: block;
            margin: 0 auto;
            border-radius: 5px;
            /*background-color: #f2f2f2;*/
            padding 20px;
            width: 50%;
        }
    </style>
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
            <div class="container">
                <form name="addform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                        <label for="headline">Headline</label>
                        <input type="text" id="headline" name="headline" placeholder="Your headline...">

                        <label for="story">News</label>
                        <textarea id="story" name="story" placeholder="Write your story here..." style="height: 200px"></textarea>

                        <label for="imgurl">Image</label>
                        <input type="text" id="imgurl" name="imgurl" placeholder="URL">

                        <input name="hiddenField" type="hidden" value="add_n">
                        <input name="add" type="submit" id="add" value="Submit">

                    <input type='submit' value='Log out' name='logout'>
                    |
                    <a href="form-club.php"> Create Club </a>
                    |
                    <a href="editnews.php"> Edit News </a>
                    |
                    <a href="homepage.php"> Main Page </a>
                </form>
            </div>
        <?php } ?>
<?php include ("footer.php")?>
</body>
</html>