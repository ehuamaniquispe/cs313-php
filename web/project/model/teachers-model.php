<?php
function getTeachersInfo()
{
    $db = dbConnect();
    $sql ='SELECT 
            id_teachers,
            teachers_fname,
            teachers_lname
           FROM teachers';
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $teachersInfo=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $teachersInfo;
}

function getTeachersInfoById($teacher_id){

    $db = dbConnect();
    
    $sql = 'SELECT 
            id_teachers,
            teachers_fname,
            teachers_lname
            FROM teachers
            WHERE id_teachers = :teacher_id';
    
    $stmt = $db->prepare($sql);
    $stmt->bindValue('teacher_id',$teacher_id,PDO::PARAM_INT);
    $stmt->execute();
    $teachersInfo = $stmt->fetch(PDO::FETCH_ASSOC);
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
    
    function updateTeacher($teacher_id,$teacher_fname,$teacher_lname){


        $db = dbConnect();
        $sql = "UPDATE teachers
                SET 
                teachers_fname = :teacher_fname, 
                teachers_lname = :teacher_lname 
                WHERE id_teachers = :teacher_id";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':teacher_id',$teacher_id,PDO::PARAM_INT);
        $stmt->bindValue(':teacher_fname',$teacher_fname,PDO::PARAM_STR);
        $stmt->bindValue(':teacher_lname',$teacher_lname,PDO::PARAM_STR);
        $stmt->execute();
        $rowChanged=$stmt->rowCount();
        $stmt->closeCursor();
        return $rowChanged;
        
        }

        function deleteTeacher($teacher_id){

            $db = dbConnect();
            $sql = "DELETE FROM teachers  WHERE id_teachers = :teacher_id";
            
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':teacher_id',$teacher_id,PDO::PARAM_INT);
            $stmt->execute();
            $rowChanged=$stmt->rowCount();
            $stmt->closeCursor();
            return $rowChanged;
    
    }