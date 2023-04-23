<?php
echo "jeeva";
// unset($_SESSION['incorrectUsers']);

// $getMail = $_POST['checkMail'];
// echo $getMail;
// $checkPasd = $_POST['checkPassd'];

// try{
//     $getData = $con['connection']->query("SELECT * FROM usersLists WHERE email = '$getMail' AND passwd = '$checkPasd'");
//     $objData = $getData->fetchAll(PDO::FETCH_OBJ);
   
//     if($objData){
//         $_SESSION['login'] = [
//             'username' => $getMail
//         ];
//         header('Location: /');
//     }
//     else{
//         $_SESSION['incorrectUsers'] = 'Users not exits';
//         header('Location: /logIn');
//     }

// }
// catch(PDOException $e){
//     die("logIn Error".$e->getMessage());
// }
?>