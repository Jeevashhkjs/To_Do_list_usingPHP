<?php

$taskName = $_POST['taskname'];
$taskContents = $_POST['content'];

try{
   
}
catch(PDOException $e){
    die("taskInserterror".$e->getMessage());
}

?>