<?php
unset($_SESSION['userAlready']);


$name = $_POST['name'];
$mail = $_POST['email'];
$passd = $_POST['passwd'];

try{
    $userDetails = $con['connection']->query("SELECT * FROM usersLists WHERE email = '$mail' AND passwd = '$passd'");

    $getUserDetail = $userDetails->fetchAll(PDO::FETCH_OBJ);
   
    if(!isset($getUserDetail)){

        $_SESSION['login'] = [
            'username' => $mail
        ];

    $insert = $con['connection']->query("INSERT INTO usersLists (name,email,passwd) VALUES ('$name','$mail','$passd')");
    header('Location:/');

    }
    else{

    $_SESSION['usersCanHaveAccount'] = 'Users Already exits';
    // header('Location:/signup');

    }
}
catch(PDOException $e){
    die("insert error".$e->getMessage());
}

?>