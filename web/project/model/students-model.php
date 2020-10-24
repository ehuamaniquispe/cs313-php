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
    
$db = dbConnect();
$sql = "INSERT INTO students
        (students_reg_num,
        students_fname,
        students_lname,
        students_user_name,
        students_user_pass,
        students_user_level)
        VALUES(
        :student_reg_num,
        :student_fname,
        :student_lname,
        :student_user_name,
        :student_user_pass,
        DEFAULT)";
$stmt = $db->prepare($sql);
$stmt->bindValue(':student_reg_num',$student_reg_num,PDO::PARAM_STR);
$stmt->bindValue(':student_fname',$student_fname,PDO::PARAM_STR);
$stmt->bindValue(':student_lname',$student_lname,PDO::PARAM_STR);
$stmt->bindValue(':student_user_name',$student_user_name,PDO::PARAM_STR);
$stmt->bindValue(':student_user_pass',$student_user_pass,PDO::PARAM_STR);
$stmt->execute();
$rowChanged=$stmt->rowCount();
$stmt->closeCursor();
return $rowChanged;
}