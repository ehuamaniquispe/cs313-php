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