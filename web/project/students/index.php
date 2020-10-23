<?php session_start();

require_once '../library/connection.php';
require_once '../model/students-model.php';
require_once '../library/functions.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = $_GET['action'];
}


switch ($action){


    case 'newStudent':
    //  $userName = filter_input(INPUT_POST,'userName', FILTER_SANITIZE_STRING);
    //  $pass = filter_input(INPUT_POST,'pass', FILTER_SANITIZE_STRING);

    //  $checkUser = checkUser($userName,$pass);

    //  if(empty($checkUser)){
    //      echo("User not found");
    //  }
    //  else{
    //      $_SESSION['userName'] = $userName;
    //      $_SESSION['userLevel'] = $checkUser[user_level]; 
    //     //   echo ($_SESSION['userLevel']);
    //     header('location:../students'); 
    //     // include'../students'; 

    //  }
    //  print_r($checkUser);

    // //  echo ($pass);
    include '../view/new_student.php';

    break;

    case 'new_student':
        $student_fname = filter_input(INPUT_POST,'student_fname', FILTER_SANITIZE_STRING);
        $student_lname = filter_input(INPUT_POST,'student_lname', FILTER_SANITIZE_STRING);
        $student_user_name = filter_input(INPUT_POST,'student_user_name', FILTER_SANITIZE_STRING);
        $student_user_pass = filter_input(INPUT_POST,'student_user_pass', FILTER_SANITIZE_STRING);


        echo($student_fname);
        echo($student_lname);
        echo($student_user_name);
        echo($student_user_pass);





    default:
    
    $getStudentsInfo=getStudentsInfo();
    $displayStudentsInfo = displayStudentsInfo($getStudentsInfo);
    include '../views/students.php';

}

