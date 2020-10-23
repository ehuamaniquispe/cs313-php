<?php
function getCoursesInfo()
{
    $db = dbConnect();
    $sql ='SELECT * 
           FROM courses';
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $coursesInfo=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $coursesInfo;
}

function studentsInCourse($courseId){

    

    $db = dbConnect();
    $sql ='SELECT 
    students_reg_num,
    students_fname,
    students_lname,
    students_user_name
    FROM students_has_courses
    INNER JOIN students
    ON students_has_courses.students_id_students = students.id_students
           WHERE courses_id_courses=:courseId';

    $stmt=$db->prepare($sql);
    $stmt->bindValue(':courseId',$courseId,PDO::PARAM_INT);
    $stmt->execute();
    $coursesDetail=$stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $coursesDetail;
}