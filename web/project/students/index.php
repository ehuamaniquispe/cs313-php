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

        $insertNewStudent = insertNewStudent($student_reg_num,$student_fname,$student_lname,$student_user_name,$student_user_pass);
        echo($insertNewStudent);

    break;



    default:
    
    $getStudentsInfo=getStudentsInfo();
    $displayStudentsInfo = displayStudentsInfo($getStudentsInfo);
    include '../views/students.php';

}

