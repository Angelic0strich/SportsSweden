<?php
$servername = 'sportsweden';
$username = 'root';
$password = '';
$conn = new mysqli('localhost', $username, $password, $servername);
if (!$conn) {
    die('Connection failed');
}
function get_clubs()
{
    $servername = 'sportsweden';
    $username = 'root';
    $password = '';
    $conn = new mysqli('localhost', $username, $password, $servername);
    $query = "SELECT * FROM clubs ORDER BY idclubs DESC ";
    $result = @mysqli_query($conn, $query);
    $clubs = [];
    if(!$result)
    {
        echo("Fail to get result");
    }
    if($result > 0)
    {
        while($row = mysqli_fetch_object($result)) {
            echo $row['title'];
            array_push($clubs,$row);
        }
    }

}


?>