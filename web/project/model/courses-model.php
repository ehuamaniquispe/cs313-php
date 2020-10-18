<?php
function getCoursesInfo()
{
    $db = dbConnect();
    $sql ='SELECT 
            id_courses,
            courses_name
           FROM courses';
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $coursesInfo=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $coursesInfo;
}

function courseDetail($courseId){

    

    $db = dbConnect();
    $sql ='SELECT 
            id_courses,
            courses_name,
            students_fname,
            students_lname,
            teachers_fname,
            teachers_lname
           FROM courses
           LEFT JOIN students
           ON courses.student_id_students = students.id_students
           LEFT JOIN teachers
           ON courses.teachers_id_teachers = teachers.id_teachers
           WHERE id_courses=:courseId';

    $stmt=$db->prepare($sql);
    $stmt->bindValue(':courseId',$courseId,PDO::PARAM_INT);
    $stmt->execute();
    $coursesDetail=$stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $coursesDetail;
}