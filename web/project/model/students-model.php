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