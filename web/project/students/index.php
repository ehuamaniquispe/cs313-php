<?php session_start();


// // $user_level = $_SESSION['userLevel'];

// // if(empty($user_level))
// // echo("Requiered authorization");
// // die();

// // require_once '../library/connection.php';
// // require_once '../model/students-model.php';
// // require_once '../library/functions.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filer_input(INPUT_GET, 'action');
}

echo($action);
// exit;

// switch ($action){


//     case 'checkCredentials':
//     //  $userName = filter_input(INPUT_POST,'userName', FILTER_SANITIZE_STRING);
//     //  $pass = filter_input(INPUT_POST,'pass', FILTER_SANITIZE_STRING);

//     //  $checkUser = checkUser($userName,$pass);

//     //  if(empty($checkUser)){
//     //      echo("User not found");
//     //  }
//     //  else{
//     //      $_SESSION['userName'] = $userName;
//     //      $_SESSION['userLevel'] = $checkUser[user_level]; 
//     //     //   echo ($_SESSION['userLevel']);
//     //     header('location:../students'); 
//     //     // include'../students'; 

//     //  }
//     //  print_r($checkUser);

//     // //  echo ($pass);

//     break;

//     default:
    
//     $getStudentsInfo=getStudentsInfo();
//     $displayStudentsInfo = displayStudentsInfo($getStudentsInfo);

//     include '../view/students.php';
//     echo("default");

// }

