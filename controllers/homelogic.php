<?php

$taskName = $_POST['taskname'];
$taskContents = $_POST['content'];

try{
    $con['connection']->query("INSERT INTO lists (taskname,contents) VALUES ('$taskName','$taskContents')");
}
catch(PDOException $e){
    die("taskInserterror".$e->getMessage());
}

?>