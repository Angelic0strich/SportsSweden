<?php
$servername = 'sportsweden';
$username = 'root';
$password = '';
$conn = new mysqli('localhost', $username, $password, $servername);
if (!$conn)
{
    die('Connection failed');
}
$name = $_POST['name'];
$sport = $_POST['sport'];
$city = $_POST['city'];
$address = $_POST['address'];
$googlemaps = $_POST['googlemaps'];
$website = $_POST['website'];
$logo = $_POST['logo'];
$image = $_POST['image'];
echo $name .'<br>';
echo $sport .'<br>';
echo $city .'<br>';
echo $address .'<br>';
echo $googlemaps .'<br>';
echo $website .'<br>';
echo $logo .'<br>';
echo $image .'<br>';

$query = "INSERT INTO clubs(id , name, sport, city, address, googlemaps, website, logo, image) VALUES(NULL,'".$name."', '".$sport."', '".$city."','".$address."','".$googlemaps."', '".$website."','".$logo."', '".$image."');";
$result = @mysqli_query($conn, $query);
if (!$result)
{
    die('Error adding club');
}
else
{
    mysqli_close($conn);
    echo('Successfully added club!');
}
?>