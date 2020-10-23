<?php
function checkUser($userName,$pass){

    $db = dbConnect();

    $sql = 'SELECT 
            students_user_name,
            students_user_pass,
            students_user_level
            FROM students
            WHERE students_user_name = :userName AND students_user_pass = :pass';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':userName',$userName,PDO::PARAM_STR);
    $stmt->bindValue(':pass',$pass,PDO::PARAM_STR);
    $stmt->execute();
    $checkUser = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    if(empty($checkUser)){
        $sql = 'SELECT 
        teachers_user_name,
        teachers_user_pass,
        teachers_user_level
        FROM teachers
        WHERE teachers_user_name = :userName AND teachers_user_pass = :pass';
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':userName',$userName,PDO::PARAM_STR);
        $stmt->bindValue(':pass',$pass,PDO::PARAM_STR);
        $stmt->execute();
        $checkUser = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

    }
    return $checkUser;

}

