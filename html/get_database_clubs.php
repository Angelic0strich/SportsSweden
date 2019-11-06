<?php
function get_clubs()
{
    $servername = 'sportsweden';
    $username = 'root';
    $password = '';
    $conn = new mysqli('localhost', $username, $password, $servername);
    if (!$conn) {
        die('Connection failed');
    }
    $query = "SELECT * FROM clubs ORDER BY id DESC ";
    $result = @mysqli_query($conn, $query);
    $clubs = array();
    $counter = 0;
    if(!$result)
    {
        echo("Fail to get result");
    }
    else
    {
        //echo "It works here";
        while($row = mysqli_fetch_object($result)) {
            //echo $row['title'];
            //echo "hello";

            $tempclub = array
            (
                //$row->id,$row->
            );
            array_push($clubs, $tempclub); //DOESN'T WORKKKKKKKKKKKKKKKKKK


        }
    }
}
?>