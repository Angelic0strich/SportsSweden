<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit News</title>
    <meta charset="UTF-8">
    <style>
        .button {
            background-color: darkgray;
            border: none;
            color: white;
            padding: 10px 17px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
        }
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
                <a href="editnews.php?a=edit&id=<?php echo $row->id_news; ?>" class="button">Edit</a>
                <a href="editnews.php?a=delete&id=<?php echo $row->id_news; ?>" class="button">Delete</a>
                    <span style="font-size: 1.5em; ">
                        <b><?php echo $row->title; ?></b>
                        <!-- <i><?php// echo $row->time; ?></i> -->
                    </span>
                <br>
                <br>
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
            $query = "SELECT title, content, imgurl FROM news WHERE id_news ='$id'";
            $result = mysqli_query($conn, $query);
            if(!$result)
            {
                die('Error selecting news!');
            }
            $row = mysqli_fetch_object($result);
        ?>
        <div class="container">
            <form name="form1" method="post" action="editnews.php?a=edit&id=<?php echo($id) ?>&update=1">
                <label for="title">Headline</label>
                <input type="text" id="title" name="title" value="<?php echo $row->title ?>">

                <label for="content">News</label>
                <textarea id="content" name="content" style="height: 200px"><?php echo $row->content ?></textarea>

                <label for="imgurl">Image</label>
                <input type="text" id="imgurl" name="imgurl" value="<?php echo $row->imgurl ?>">

                <input name="hiddenField" type="hidden" value="update">
                <input name="update" type="submit" id="update" value="Update">
            </form>
        </div>
        <?php
        }
        else
        {
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
    elseif($_GET["a"]=='delete')
    {
        $id = $_GET["id"];
        $query = "DELETE FROM news WHERE id_news = '".$id."'";
        $result = mysqli_query($conn, $query);
        if(!$result)
        {
            die('Error deleting news.');
        }
        else
        {
            echo('Successfully deleted news!');
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