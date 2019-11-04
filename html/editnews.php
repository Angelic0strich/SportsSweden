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
        $query = "SELECT id_news, title FROM news ORDER BY id_news DESC";
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
                        <b><?php echo $row->title; ?></b>
                        <!-- <i><?php// echo $row->time; ?></i> -->
                    </span><br>

                    <a href="editnews.php?a=edit&id=<?php echo $row->id_news; ?>">edit</a><br>
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
            $query = "SELECT title, content FROM news WHERE id_news ='$id'";
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
                    <td><input name="title" type="text" id="title" value="<?php echo($row->title) ?>"></td>
                </tr>
                <tr>
                    <td>News Story</td>
                    <td><textarea name="content" id="content"><?php echo($row->content) ?></textarea></td>
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
            $title = $_POST['title'];
            $content = $_POST['content'];
            $id = $_GET["id"];
            $query = "UPDATE news SET title = '".$title."', content = '".$content."' WHERE id_news = '".$id."'";
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