<?php

    $con = [];

    require 'connection.php';
    session_start();

    $con['connection'] = (new DBconnectionClass())->dbConnection;

    $routers = [
        '/logIn' => 'viewers/logInView.php',
        '/signup' => 'controllers/SignUp.php',
        '/insertSignData' => 'controllers/SignUplogic.php',
        '/loginLogic' => 'controllers/logIn.php',
        '/' => 'viewers/homeView.php',
        '/homelogic' => 'controllers/homelogic.php',
        '/list' => 'controllers/list.php',
        '/listlogic' => 'controllers/listlogic.php'
    ];

    if(array_key_exists($_SERVER['REQUEST_URI'],$routers)){
        require $routers[$_SERVER['REQUEST_URI']];
    }
    else{
        require 'viewers/errors';
    }


?>