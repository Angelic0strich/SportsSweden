<?php
$articleId = $_GET['articleid'];

$user = 'root';
$pass = '';
$db = 'sportsweden';
$db = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect");

$sql = "SELECT * FROM news where id_news='{$articleId}'";

$result = $db->query($sql);

$article = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
    <?php
    echo $article['title'];
    ?>
</h1>

<img src="<?php
echo $article['imgurl'];
?>">

<p>
    <?php echo $article['content']; ?>
</p>


</body>
</html>
