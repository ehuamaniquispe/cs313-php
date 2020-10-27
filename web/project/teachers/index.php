<?php session_start();

require_once '../library/connection.php';
require_once '../model/teachers-model.php';
require_once '../library/functions.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = $_GET['action'];
}


switch ($action){


    case 'newTeacher':
        include '../views/new_teacher.php';
    

    break;

    case 'new_teacher':
        $teacher_fname = filter_input(INPUT_POST,'teacher_fname', FILTER_SANITIZE_STRING);
        $teacher_lname = filter_input(INPUT_POST,'teacher_lname', FILTER_SANITIZE_STRING);
        $teacher_user_name = filter_input(INPUT_POST,'teacher_user_name', FILTER_SANITIZE_STRING);
        $teacher_user_pass = filter_input(INPUT_POST,'teacher_user_pass', FILTER_SANITIZE_STRING);

        $hashed_teacher_user_pass=password_hash($teacher_user_pass, PASSWORD_DEFAULT);

        $insertNewTeacher = insertNewTeacher($teacher_fname,$teacher_lname,$teacher_user_name,$hashed_teacher_user_pass);
        if(empty($insertNewTeacher)){
            $_SESSION['message']= "the information couldn't be inserted";
            include '../views/new_teacher.php';
            exit();
        }
        else{
            $_SESSION['message']= "the information was inserted";

            header('location:../teachers');
            exit();

        }

    break;

    default:
    
    $getTeachersInfo=getTeachersInfo();
    $displayTeachersInfo = displayTeachersInfo($getTeachersInfo);
    include '../views/teachers.php';

}