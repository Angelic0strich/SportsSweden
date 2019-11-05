<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show Club</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/showclub.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <style>
        .container {
            display: block;
            margin: 0 auto;
            border-radius: 5px;

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
if (!$conn)
{
    die('Connection failed');
}
$id = $_GET['id'];
$query = "SELECT * FROM clubs WHERE id = '".$id."'";
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
            <br>
            <td><img src="<?php echo $row->image;?>" ></td>
            <td><h1 style="text-align: center"><?php echo $row->name ?></h1></td>
            <td><h2 style="text-align: center">Sport : <?php echo $row->sport ?></h2></td>

        </tr>
        <img src="<?php echo $row->logo ?>" style="display: block; margin: 0 auto; max-width: 100%;">
        <br>

        <br>
        <p> Address : <?php echo $row-> address;?></p>
        <br>
        <div class="mapouter" style="display: block; margin: 0 auto; max-width: 100%;"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="<?php echo $row-> googlemaps; ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/fiverr-promo-code/">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
        <br>
        <a class="website" href="<?php echo $row->website;?>">Go to website</a>
        <br>
    </div>


<?php } ?>
<?php include ("footer.php")?>
</body>
</html>