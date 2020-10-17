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
        $tableStudents .= "<td>  <a href='#' title='editar'> EDITAR </a> <a href='#' 'title='eliminar'> ELIMINAR </a></td>";
        // $tableStudents .= "<td>  <a href='/doit/categoria/index.php?action=editar&personalCatId=$categoriaDato[personalCatId]' title='editar'> EDITAR </a> <a href='#' onclick='eliminarRegistroPermiso($categoriaDato[personalCatId],`/doit/categoria?action=eliminar&categoriaId`)'title='eliminar'> ELIMINAR </a></td>";
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
        $tableTeachers .= "<td>  <a href='#' title='editar'> EDITAR </a> <a href='#' 'title='eliminar'> ELIMINAR </a></td>";
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
    $tableCourses .= '<th>Options</th>';
    $tableCourses .= '</tr>';
    $tableCourses .= '</thead>';
    $tableCourses .= '<tbody>';
    foreach ($courses as $course) {
        $tableCourses .= '<tr>';
        $tableCourses .= "<td> $course[courses_name] </td>";
        $tableCourses .= "<td>  <a href='#' title='editar'> EDITAR </a> <a href='#' 'title='eliminar'> ELIMINAR </a></td>";
        // $tableCourses .= "<td>  <a href='/doit/categoria/index.php?action=editar&personalCatId=$categoriaDato[personalCatId]' title='editar'> EDITAR </a> <a href='#' onclick='eliminarRegistroPermiso($categoriaDato[personalCatId],`/doit/categoria?action=eliminar&categoriaId`)'title='eliminar'> ELIMINAR </a></td>";
        $tableCourses .= '</tr>';
    }
    $tableCourses .= '</tbody>';

    return $tableCourses;

}