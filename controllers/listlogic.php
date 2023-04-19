<?php

try{
    $AllDatas = $con['connection']->query("SELECT * FROM lists");
    $OBJDatas = $AllDatas->fetchAll(PDO::FETCH_OBJ);
    var_dump($OBJDatas);
}
catch(PDOException $e){
    die("getdata error".$e->getMessage());
}

?>