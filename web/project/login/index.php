<?php session_start();

require_once '../library/connection.php';
require_once '../model/login-model.php';
require_once '../library/functions.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filer_input(INPUT_GET, 'action');
}

switch ($action){


    case 'checkCredentials':
     $userName = filter_input(INPUT_POST,'userName', FILTER_SANITIZE_STRING);
     $pass = filter_input(INPUT_POST,'pass', FILTER_SANITIZE_STRING);

     $hashed_pass = password_hash($pass,PASSWORD_DEFAULT);

     $checkUser = checkUser($userName,$hashed_pass);

     if(empty($checkUser)){
         echo("User not found");  
    }
     else{
         $_SESSION['userName'] = $userName;
         $_SESSION['userLevel'] = $checkUser[students_user_level];
         if(empty($_SESSION['userLevel']))
         {
            $_SESSION['userLevel'] = $checkUser[teachers_user_level];

         } 
        $action = "default";
        header("location:../students/index.php?action=$action"); 
        exit();
        // header("location:../students/index.php"); 
        // include'../students'; 

     }
     print_r($checkUser);

    //  echo ($pass);

    break;

    default:
    echo("default");

}