<?php
include("connect.php");
class data_access_object{
    public function dbConnect(){
        $user = 'root';
        $pass = '';
        $db = 'sportsweden';
        try {
            $dbConnection = new PDO('mysql:dbname=sportsweden;host=127.0.0.1', $user, $pass);
            $dbConnection->exec("set names utf8");
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
        catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
    public function searchData($searchVal){
        try {
            $dbConnection = $this->dbConnect();
            $stmt = $dbConnection->prepare("SELECT * FROM `news` WHERE `title` like :searchVal");
            $val = "%$searchVal%";
            $stmt->bindParam(':searchVal', $val , PDO::PARAM_STR);
            $stmt->execute();
            $Count = $stmt->rowCount();
//echo " Total Records Count : $Count .<br>" ;
            $result ="" ;
            if ($Count  > 0){
                while($data=$stmt->fetch(PDO::FETCH_ASSOC)) {
                    $result = $result .'<div class="search-result"><a href="'.$data['imgurl'].'">'.$data['title'].'</a></div>';
                }
                return $result ;
            }
        }
        catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}
?>
