<?php session_start();

require_once '../library/connection.php';
require_once '../model/login.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filer_input(INPUT_GET, 'action');
}

switch ($action){


    case 'checkCredentials':
     $userName = filter_input(INPUT_POST,'userName', FILTER_SANITIZE_STRING);
     $pass = filter_input(INPUT_POST,'pass', FILTER_SANITIZE_STRING);

     $checkUser = checkUser($userName,$pass);

     if(empty($checkUser)){
         echo("User not found");
     }
     else{
         $_SESSION['userName'] = $userName;
         $_SESSION['userLevel'] = $checkUser[user_level]; 
          echo ($_SESSION['userLevel']);
        // header('location:../students'); 
     }
     print_r($checkUser);

    //  echo ($pass);

    break;

    default:
    echo("default");

}