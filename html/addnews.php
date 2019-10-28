
<!-- Works, but still looks ugly -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add News</title>
    <meta charset="UTF-8">
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
            /*$dbname = 'sportsweden';
            $db = @mysqli_select_db();
            if (!$db)
            {
                die('Error selecting database');
            }*/
            $headline = $_POST['headline'];
            $story = $_POST['story'];
            $query = "INSERT INTO news(id, headline, story, time) VALUES(NULL, '".$headline."', '".$story."', current_timestamp());"; // Need to add ID or name or club of who created the news!!
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
            <form name="addform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
            <table width="50%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="50%">Headline</td>
                        <td><input name="headline" type="text" id="headline"></td>
                    </tr>
                    <tr>
                        <td>News</td>
                        <td><textarea name="story" id="story"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><div align="right">
                                <input name="hiddenField" type="hidden" value="add_n">
                                <input name="add" type="submit" id="add" value="Submit">
                            </div></td>
                    </tr>
                </table>
            </form>
        <?php } ?>
</body>
</html>