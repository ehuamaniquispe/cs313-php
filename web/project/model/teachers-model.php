<?php
function getTeachersInfo()
{
    $db = dbConnect();
    $sql ='SELECT 
            teachers_fname,
            teachers_lname
           FROM teachers';
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $teachersInfo=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $teachersInfo;
}

function insertNewTeacher($teacher_fname,$teacher_lname,$teacher_user_name,$teacher_user_pass){
    
    $db = dbConnect();
    $sql = "INSERT INTO teachers
            (teachers_fname,
            teachers_lname,
            teachers_user_name,
            teachers_user_pass,
            teachers_user_level)
            VALUES(
            :teacher_fname,
            :teacher_lname,
            :teacher_user_name,
            :teacher_user_pass,
            DEFAULT)";
    $stmt = $db->prepare($sql);
    
    $stmt->bindValue(':teacher_fname',$teacher_fname,PDO::PARAM_STR);
    $stmt->bindValue(':teacher_lname',$teacher_lname,PDO::PARAM_STR);
    $stmt->bindValue(':teacher_user_name',$teacher_user_name,PDO::PARAM_STR);
    $stmt->bindValue(':teacher_user_pass',$teacher_user_pass,PDO::PARAM_STR);
    $stmt->execute();
    $rowChanged=$stmt->rowCount();
    $stmt->closeCursor();
    return $rowChanged;
    }
    