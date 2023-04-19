<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$passd = $_POST['passwd'];

try{
    $userAlready = $con['connection']->query("SELECT * FROM usersLists WHERE email = '$mail' AND passwd = '$passd'");

    $userAlready = $insert->fetchAll(PDO::FETCH_OBJ);
   
    if($userAlready){
        $_SESSION['login'] = [
            'username' => $mail
        ];

    $insert = $con['connection']->query("INSERT INTO usersLists (name,email,passwd) VALUES ('$name','$mail','$passd')");

    }
    else{
        $_SESSION['userAlready'] = 'Users Already exits';
        header('Location: /logIn');
        unset($_SESSION['userAlready']);
    }
}
catch(PDOException $e){
    die("insert error".$e->getMessage());
}

?>