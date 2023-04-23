<?php

    $con = [];

    session_start();
    require 'connection.php';
    require 'core/router.php';

    $con['connection'] = (new DBconnectionClass())->dbConnection;

    $routers = new router();

    $routers -> get('/logIn','viewers/logInView.php') -> getUsers("auth");
    // $routers -> get('/signup','viewers/SignUpView.php') -> getUsers("auth");
    // $routers -> get('/loginLogic','/controllers/logIn.php') -> getUsers("auth");
    // $routers -> get('/','viewers/homeView.php') -> getUsers("auth");
    // $routers -> get('/homelogic','controllers/homelogic.php') -> getUsers("auth");
    // $routers -> get('/list','controllers/list.php') -> getUsers("auth");
    // $routers -> get('/logout','controllers/logOut.php') -> getUsers("auth");
    $routers -> get('/signupLogic','controllers/SignUp.php') -> getUsers("auth");

   $routers -> checkUri();         

?>