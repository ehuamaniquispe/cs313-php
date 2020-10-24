<?php

function getStudentsInfo(){

$db = dbConnect();

$sql = 'SELECT 
        students_reg_num,
        students_fname,
        students_lname
        FROM students';

$stmt = $db->prepare($sql);
$stmt->execute();
$studentsInfo = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();
return $studentsInfo;
}

function insertNewStudent($student_reg_num,$student_fname,$student_lname,$student_user_name,$student_user_pass){
        
        echo($student_reg_num);
        echo($student_fname);
        echo($student_lname);
        echo($student_user_name);
        echo($student_user_pas);

        exit();

$db = dbConnect();
$sql = "INSERT INTO students
        (students_reg_num,
        students_fname,
        students_lname,
        students_user_name,
        students_user_pass,
        students_user_level)
        VALUES(
        '5',
        'matias',
        'huamani',
        'mhuamani',
        'mhuamani',
        '1')";
// $sql = "INSERT INTO students
//         (students_reg_num,
//         students_fname,
//         students_lname,
//         students_user_name,
//         students_user_pass,
//         students_user_level)
//         VALUES(
//         :student_reg_num,
//         :student_fname,
//         :student_lname,
//         :student_user_name,
//         :student_user_pass,
//         DEFAULT)";
$stmt = $bd->prepare($sql);
// $stmt->bindValue(':student_reg_num',$student_reg_num,PDO::PARAM_STR);
// $stmt->bindValue(':student_fname',$student_fname,PDO::PARAM_STR);
// $stmt->bindValue(':student_lname',$student_lname,PDO::PARAM_STR);
// $stmt->bindValue(':student_user_name',$student_user_name,PDO::PARAM_STR);
// $stmt->bindValue(':student_user_pass',$student_user_pass,PDO::PARAM_STR);
$stmt->execute();
$rowChanged=$stmt->rowCount();
$stmt->closeCursor();
return $rowChanged;
}