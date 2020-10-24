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

     $checkUser = checkUser($userName);


     if(empty($checkUser)){
         echo("UserName not found");
         header ("location:../");
         exit();  
    }
     else{

        //verify the password

        $password_verification = password_verify($pass,$checkUser[pass]);

        if($password_verification==0){
            echo("Invalid pasword");
            header ("location:../");
            exit();

        }
        else{
            
                     $_SESSION['userName'] = $userName;
                     $_SESSION['userLevel'] = $checkUser[user_level];
                    
                     header("location:../students"); 
                     exit();
                   
        }

     }
     print_r($checkUser);

    //  echo ($pass);

    break;

    default:
    include '../views/login.php';

}