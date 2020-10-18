<?php session_start();

require_once '../library/connection.php';
require_once '../model/courses-model.php';
require_once '../library/functions.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = $_GET['action'];
}


switch ($action){

    case 'viewDetail':
       
    //  $courseId = filter_input(INPUT_GET,'courseId', FILTER_SANITIZE_NUMBER_INT);
     $courseId = $_GET['courseId'];
  
     $courseDetail = courseDetail($courseId);
     print_r($courseDetail);
    $displayCoursesDetail = displayCoursesDetail($getCoursesDetail);

    include '../views/courseDetail.php';
     

    break;

    default:
    
    $getCoursesInfo=getCoursesInfo();
    $displayCoursesInfo = displayCoursesInfo($getCoursesInfo);
    include '../views/courses.php';

}