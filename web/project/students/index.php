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
       
        include '../views/new_student.php';

    break;

    case 'new_student':
        $student_reg_num = filter_input(INPUT_POST,'student_reg_num', FILTER_SANITIZE_STRING);
        $student_fname = filter_input(INPUT_POST,'student_fname', FILTER_SANITIZE_STRING);
        $student_lname = filter_input(INPUT_POST,'student_lname', FILTER_SANITIZE_STRING);
        $student_user_name = filter_input(INPUT_POST,'student_user_name', FILTER_SANITIZE_STRING);
        $student_user_pass = filter_input(INPUT_POST,'student_user_pass', FILTER_SANITIZE_STRING);

        $hashed_student_user_pass=password_hash($student_user_pass, PASSWORD_DEFAULT);

        $insertNewStudent = insertNewStudent($student_reg_num,$student_fname,$student_lname,$student_user_name,$hashed_student_user_pass);
        if(empty($insertNewStudent)){
            $_SESSION['message']= "the information couldn't be inserted";
            include '../views/new_student.php';
            exit();
        }
        else{
            $_SESSION['message']= "the information was inserted";

            header('location:../students');
            exit();

        }

    break;

    case 'edit':
        $student_id = filter_input(INPUT_GET,'student_id', FILTER_SANITIZE_NUMBER_INT);
        
        $getStudentsInfoById=getStudentsInfoById($student_id);

        include '../views/edit_student.php';
    break;
    
    case 'edit_student':

        $student_id = filter_input(INPUT_POST,'student_id', FILTER_SANITIZE_NUMBER_INT);
        $student_reg_num = filter_input(INPUT_POST,'student_reg_num', FILTER_SANITIZE_STRING);
        $student_fname = filter_input(INPUT_POST,'student_fname', FILTER_SANITIZE_STRING);
        $student_lname = filter_input(INPUT_POST,'student_lname', FILTER_SANITIZE_STRING);

        echo($student_id);
        echo($student_reg_num);
        echo($student_fname);
        echo($student_lname);

        exit;




        $updateStudent = updateStudent($student_id,$student_reg_num,$student_fname,$student_lname);
        echo($updateStudent);

    break;
    default:
    
    $getStudentsInfo=getStudentsInfo();
    
    $displayStudentsInfo = displayStudentsInfo($getStudentsInfo);
    include '../views/students.php';

}

