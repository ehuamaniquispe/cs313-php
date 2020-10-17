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
