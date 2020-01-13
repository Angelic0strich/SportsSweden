<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show News</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/mainstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">

</head>
<body>
<?php include ("menu.php")?>

<?php
    $servername = 'sportsweden';
    $username = 'root';
    $password = '';
    $conn = new mysqli('localhost', $username, $password, $servername);
    if (!$conn)
    {
        die('Connection failed');
    }
    $id = $_GET['id'];
    $query = "SELECT title, content, imgurl FROM news WHERE id_news = '".$id."'";
    $result = @mysqli_query($conn, $query);
    if (!$result)
    {
        die('Error retrieving news from database');
    }
    else
    {
        $row = mysqli_fetch_object($result); ?>

        <div class="container">
            <tr>
                <td><img src=""></td> <!-- add source to club logo -->
                <td><h2 style="text-align: center"><?php echo $row->title ?></h2>
                </td>
            </tr>
            <img src="<?php echo $row->imgurl ?>" style="display: block; margin: 0 auto; max-width: 100%;">
            <p><?php echo $row->content ?></p>
        </div>


<?php } ?>
<?php include ("footer.php")?>
</body>
</html>