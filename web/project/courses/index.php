<?php session_start();

require_once '../library/connection.php';
require_once '../model/courses-model.php';
require_once '../model/teachers-model.php';
require_once '../library/functions.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = $_GET['action'];
}


switch ($action){

    case 'viewDetail':
       
        $courseId = filter_input(INPUT_GET,'courseId', FILTER_SANITIZE_NUMBER_INT);
        $studentsInCourse = studentsInCourse($courseId);
        // print_r($studentsInCourse);
        $displayStudentsInCourse = displayStudentsInCourse($studentsInCourse);
        // echo($displayStudentsInCourse);
        // exit();

        include '../views/courseDetail.php';

        break;

        case 'newCourse':
            $getTeachersInfo = getTeachersInfo();
            $diplayTeachersDropList = diplayTeachersDropList($getTeachersInfo);
       
            include '../views/new_course.php';
    
        break;
    
        case 'new_course':
            $course_reg_num = filter_input(INPUT_POST,'course_reg_num', FILTER_SANITIZE_STRING);
            $course_fname = filter_input(INPUT_POST,'course_fname', FILTER_SANITIZE_STRING);
            $course_lname = filter_input(INPUT_POST,'course_lname', FILTER_SANITIZE_STRING);
            $course_user_name = filter_input(INPUT_POST,'course_user_name', FILTER_SANITIZE_STRING);
            $course_user_pass = filter_input(INPUT_POST,'course_user_pass', FILTER_SANITIZE_STRING);
    
            $hashed_course_user_pass=password_hash($course_user_pass, PASSWORD_DEFAULT);
    
            $insertNewCourse = insertNewCourse($course_reg_num,$course_fname,$course_lname,$course_user_name,$hashed_course_user_pass);
            if(empty($insertNewCourse)){
                $_SESSION['message']= "the information couldn't be inserted";
                include '../views/new_course.php';
                exit();
            }
            else{
                $_SESSION['message']= "the information was inserted";
    
                header('location:../courses');
                exit();
    
            }
    
        break;
    
        case 'edit':
            $course_id = filter_input(INPUT_GET,'course_id', FILTER_SANITIZE_NUMBER_INT);
            
            $getCoursesInfoById=getCoursesInfoById($course_id);
    
            include '../views/edit_course.php';
        break;
        
        case 'edit_course':
    
            $course_id = filter_input(INPUT_POST,'course_id', FILTER_SANITIZE_NUMBER_INT);
            $course_reg_num = filter_input(INPUT_POST,'course_reg_num', FILTER_SANITIZE_STRING);
            $course_fname = filter_input(INPUT_POST,'course_fname', FILTER_SANITIZE_STRING);
            $course_lname = filter_input(INPUT_POST,'course_lname', FILTER_SANITIZE_STRING);
    
            $updateCourse = updateCourse($course_id,$course_reg_num,$course_fname,$course_lname);
            
    //check if the information to be updated is the same as before
            if(!empty($updateCourse)){
                $message = "The information has been updated";
                $_SESSION['message']=$message;
                header('location:../courses');
            }
            else{
                $message = "the information has NOT been updated";
                $_SESSION['message']=$message;
                include '../courses';
            }
    
    
        break;
    
        case 'delete':
            $course_id = filter_input(INPUT_GET,'course_id', FILTER_SANITIZE_NUMBER_INT);
            $getCoursesInfoById=getCoursesInfoById($course_id);
    
            include '../views/delete_course.php';
    
        break;
    
        case 'delete_course':
            $course_id = filter_input(INPUT_POST,'course_id', FILTER_SANITIZE_NUMBER_INT);
       
            
            $deleteCourse = deleteCourse($course_id);
    
    
            if(!empty($deleteCourse)){
                $message = "The information has been deleted";
                $_SESSION['message']=$message;
                header('location:../courses');
            }
            else{
                $message = "the information has NOT been deleted";
                $_SESSION['message']=$message;
                include '../courses';
            }
    
    
        break;

    default:
        
        $getCoursesInfo=getCoursesInfo();
        $displayCoursesInfo = displayCoursesInfo($getCoursesInfo);
        include '../views/courses.php';

}