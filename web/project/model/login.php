<?php
function checkUser($userName,$pass){

    $db = dbConnect();

    $sql = 'SELECT 
            user_name,
            user_pass,
            user_level
            FROM students
            WHERE user_name = :userName AND user_pass = :pass';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':userName',$userName,PDO::PARAM_STR);
    $stmt->bindValue(':pass',$pass,PDO::PARAM_STR);
    $stmt->execute();
    $checkUser = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $checkUser;

}