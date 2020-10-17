<?php
function getCoursesInfo()
{
    $db = dbConnect();
    $sql ='SELECT 
            courses_name
           FROM courses';
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $coursesInfo=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $coursesInfo;
}