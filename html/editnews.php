<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add News</title>
    <meta charset="UTF-8">
</head>
<body>
<?php include ("menu.php")?>

<?php
    $servername = 'sportsweden';
    $username = 'root';
    $password = '';
    $conn = new mysqli('localhost', $username, $password, $servername);
    if(!isset($_GET["a"]))
    {
        if(!$conn)
        {
            die('Connection failed');
        }
        $query = "SELECT id, headline, time FROM news ORDER BY time DESC";
        $result = @mysqli_query($conn, $query);
        if(!$result)
        {
            die('Error selecting news');
        }
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_object($result))
            {
                ?>
                    <span style="font-size: 1.5em; ">
                        <b><?php echo $row->headline; ?></b>
                        <i><?php echo $row->time; ?></i>
                    </span><br>

                    <a href="editnews.php?a=edit&id=<?php echo $row->id; ?>">edit</a><br>
                <?php
            }
        }
    }
    elseif($_GET["a"]=='edit')
    {
        if(!isset($_POST['update']))
        {
            if(!$conn)
            {
                die('Connection failed');
            }
            $id = $_GET["id"];
            $query = "SELECT headline, story FROM news WHERE id ='$id'";
            $result = mysqli_query($conn, $query);
            if(!$result)
            {
                die('Error selecting news!');
            }
            $row = mysqli_fetch_object($result);
        ?>
        <form name="form1" method="post" action="editnews.php?a=edit&id=<?php echo($id) ?>&update=1">
            <table width="50%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>Headline</td>
                    <td><input name="headline" type="text" id="headline" value="<?php echo($row->headline) ?>"></td>
                </tr>
                <tr>
                    <td>News Story</td>
                    <td><textarea name="story" id="story"><?php echo($row->story) ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><div align="center">
                            <input name="hiddenField" type="hidden" value="update">
                            <input name="update" type="submit" id="update" value="Update">
                        </div></td>
                </tr>
            </table>
        </form>
        <?php
        }
        else
        {
            $conn = new mysqli('localhost', $username, $password, $servername);
            $headline = $_POST['headline'];
            $story = $_POST['story'];
            $id = $_GET["id"];
            $query = "UPDATE news SET headline = '".$headline."', story = '".$story."', time = current_timestamp() WHERE id = '".$id."'";
            $result = mysqli_query($conn, $query);
            if(!$result)
            {
                die('Error updating news.');
            }
            else
            {
                echo('Successfully updated news!');
            }
        }
    }
    else
    {
    ?>
        <p>No news in the database</p>
    <?php
    }
    mysqli_close($conn);
?>
</body>
</html>