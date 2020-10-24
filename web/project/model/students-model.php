<?php

function getStudentsInfo(){

$db = dbConnect();

$sql = 'SELECT 
        id_students,
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

function getStudentsInfoById($student_id){

$db = dbConnect();

$sql = 'SELECT 
        students_reg_num,
        students_fname,
        students_lname
        FROM students
        WHERE id_students = :student_id';

$stmt = $db->prepare($sql);
$stmt->bindValue('student_id',$student_id,PDO::PARAM_INT);
$stmt->execute();
$studentsInfo = $stmt->fetch(PDO::FETCH_ASSOC);
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


function updateStudent($student_id,$student_reg_num,$student_fname,$student_lname){


$db = dbConnect();
$sql = "UPDATE students
        SET 
        students_reg_num = :student_reg_num, 
        students_fname = :student_fname, 
        students_lname = :student_lname 
        WHERE id_students = :student_id)";
$stmt = $db->prepare($sql);
$stmt->bindValue(':student_id',$student_id,PDO::PARAM_INT);
$stmt->bindValue(':student_reg_num',$student_reg_num,PDO::PARAM_STR);
$stmt->bindValue(':student_fname',$student_fname,PDO::PARAM_STR);
$stmt->bindValue(':student_lname',$student_lname,PDO::PARAM_STR);
$stmt->execute();
$rowChanged=$stmt->rowCount();
$stmt->closeCursor();
return $rowChanged;



}