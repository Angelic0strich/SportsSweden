<?php
$db = new mysqli('localhost', 'root', '', 'sportsweden') or die("Unable to connect");

echo $_POST['name']."\n".$_POST['sport']."\n".$_POST['city']."\n".$_POST['address']."\n".$_POST['googlemaps']."\n".$_POST['website']."\n".$_POST['logo']."\n".$_POST['image'];

$query ="INSERT INTO clubs(name, sport, city, address, googlemaps, website, logo, image)VALUES ('{$_POST['name']}, {$_POST['sport']}, {$_POST['city']}, {$_POST['address']}, {$_POST['googlemaps']}, {$_POST['website']}, {$_POST['logo']}, {$_POST['image']}')";
?>