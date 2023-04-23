<?php
try{
    $AllDatas = $con['connection']->query("SELECT * FROM lists");
    $OBJDatas = $AllDatas->fetchAll(PDO::FETCH_OBJ);
}
catch(PDOException $e){
    die("getdata error".$e->getMessage());
}
 require 'viewers/listView.php';
?>