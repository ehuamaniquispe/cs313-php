<?php
function displayStudentsInfo($students)
{


    $tableStudents = '<thead>';
    $tableStudents .= '<tr>';
    $tableStudents .= '<th>Reg.#</th>';
    $tableStudents .= '<th>Name</th>';
    $tableStudents .= '<th>Last Name</th>';
    $tableStudents .= '<th>Options</th>';
    $tableStudents .= '</tr>';
    $tableStudents .= '</thead>';
    $tableStudents .= '<tbody>';
    foreach ($students as $student) {
        $tableStudents .= '<tr>';
        $tableStudents .= "<td> $student[students_reg_num] </td>";
        $tableStudents .= "<td> $student[students_fname] </td>";
        $tableStudents .= "<td> $student[students_lname]</td>";
        $tableStudents .= "<td>  <a href='../students/index.php?action=edit&student_id=$student[id_students]' title='edit'> EDIT </a> <a href='../students/index.php?action=delete&student_id=$student[id_students]' title='delete'> DELETE </a></td>";
        $tableStudents .= '</tr>';
    }
    $tableStudents .= '</tbody>';

    return $tableStudents;
}

function displayTeachersInfo($teachers)
{
    $tableTeachers = '<thead>';
    $tableTeachers .= '<tr>';
    $tableTeachers .= '<th>Name</th>';
    $tableTeachers .= '<th>Last Name</th>';
    $tableTeachers .= '<th>Options</th>';
    $tableTeachers .= '</tr>';
    $tableTeachers .= '</thead>';
    $tableTeachers .= '<tbody>';
    foreach ($teachers as $teacher) {
        $tableTeachers .= '<tr>';
        $tableTeachers .= "<td> $teacher[teachers_fname] </td>";
        $tableTeachers .= "<td> $teacher[teachers_lname]</td>";
        $tableTeachers .= "<td>  <a href='../teachers/index.php?action=edit&teacher_id=$teacher[id_teachers]' title='edit'> EDIT </a> <a href='../teachers/index.php?action=delete&teacher_id=$teacher[id_teachers]' title='delete'> DELETE </a></td>";
       
        // $tableTeachers .= "<td>  <a href='/doit/categoria/index.php?action=editar&personalCatId=$categoriaDato[personalCatId]' title='editar'> EDITAR </a> <a href='#' onclick='eliminarRegistroPermiso($categoriaDato[personalCatId],`/doit/categoria?action=eliminar&categoriaId`)'title='eliminar'> ELIMINAR </a></td>";
        $tableTeachers .= '</tr>';
    }
    $tableTeachers .= '</tbody>';

    return $tableTeachers;

}

function displayCoursesInfo($courses)
{
    $tableCourses = '<thead>';
    $tableCourses .= '<tr>';
    $tableCourses .= '<th>Name</th>';
    $tableCourses .= '<th>section</th>';
    $tableCourses .= '<th>Options</th>';
    $tableCourses .= '</tr>';
    $tableCourses .= '</thead>';
    $tableCourses .= '<tbody>';
    foreach ($courses as $course) {
        $tableCourses .= '<tr>';
        $tableCourses .= "<td> $course[courses_name] </td>";
        $tableCourses .= "<td> $course[courses_section] </td>";
        // $tableCourses .= "<td> <a href='#' title='view'> VIEW </a> <a href='#' title='edit'> EDIT </a> <a href='#' 'title='delete'> DELETE </a></td>";
        $tableCourses .= "<td> <a href='../courses/index.php?action=viewDetail&courseId=$course[id_courses]' title='view'> VIEW </a> <a href='../courses/index.php?action=edit&course_id=$course[id_courses]' title='edit'> EDIT </a> <a href='../courses/index.php?action=delete&course_id=$course[id_courses]' 'title='delete'> DELETE </a></td>";
        // $tableCourses .= "<td>  <a href='/doit/categoria/index.php?action=editar&personalCatId=$categoriaDato[personalCatId]' title='editar'> EDITAR </a> <a href='#' onclick='eliminarRegistroPermiso($categoriaDato[personalCatId],`/doit/categoria?action=eliminar&categoriaId`)'title='eliminar'> ELIMINAR </a></td>";
        $tableCourses .= '</tr>';
    }
    $tableCourses .= '</tbody>';

    return $tableCourses;

}

function displayStudentsInCourse($courseInfo)
{
    $tableStudentsCourses = '<thead>';
    $tableStudentsCourses .= '<tr>';
    $tableStudentsCourses .= '<th>#Reg.</th>';
    $tableStudentsCourses .= '<th>Name</th>';
    $tableStudentsCourses .= '<th>Last Name</th>';
    $tableStudentsCourses .= '<th>User Name</th>';
    $tableStudentsCourses .= '</tr>';
    $tableStudentsCourses .= '</thead>';
    $tableStudentsCourses .= '<tbody>';
    foreach ($courseInfo as $coursesInfo) {
        $tableStudentsCourses .= '<tr>';
        $tableStudentsCourses .= "<td> $coursesInfo[students_reg_num] </td>";
        $tableStudentsCourses .= "<td> $coursesInfo[students_fname] </td>";
        $tableStudentsCourses .= "<td> $coursesInfo[students_lname] </td>";
        $tableStudentsCourses .= "<td> $coursesInfo[students_user_name] </td>";
        // $tableStudentsCourses .= "<td>  <a href='/doit/categoria/index.php?action=editar&personalCatId=$categoriaDato[personalCatId]' title='editar'> EDITAR </a> <a href='#' onclick='eliminarRegistroPermiso($categoriaDato[personalCatId],`/doit/categoria?action=eliminar&categoriaId`)'title='eliminar'> ELIMINAR </a></td>";
        $tableStudentsCourses .= '</tr>';
    }
    $tableStudentsCourses .= '</tbody>';

    return $tableStudentsCourses;

}
    
// Display a drop-down list for teachers info
function diplayTeachersDropList($getTeachersInfo){

    $teacherDropDown = "<select name='id_teachers'>";
    $teacherDropDown.= "<option value=''>Select</option>";
    foreach($getTeachersInfo AS $getTeachersInfos)
    {
        if(isset($getCoursessInfoById[teachers_id_teachers])){

            $teacherDropDown.= "<option selected='selected' value='$getTeachersInfos[id_teachers]'>$getTeachersInfos[teachers_fname] $getTeachersInfos[teachers_lname] </option>";
        }
        else{

            $teacherDropDown.= "<option value='$getTeachersInfos[id_teachers]'>$getTeachersInfos[teachers_fname] $getTeachersInfos[teachers_lname] </option>";
        }

    }
    $teacherDropDown .= "</select>";
    return $teacherDropDown;


}