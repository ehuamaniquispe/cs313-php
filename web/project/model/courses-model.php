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

function getCoursesInfoById($course_id){

    $db = dbConnect();
    
    $sql = 'SELECT *
            FROM courses
            WHERE id_courses = :course_id';
    
    $stmt = $db->prepare($sql);
    $stmt->bindValue('course_id',$course_id,PDO::PARAM_INT);
    $stmt->execute();
    $coursesInfo = $stmt->fetch(PDO::FETCH_ASSOC);
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
    $coursesDetail=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $coursesDetail;
}

function insertNewCourse($course_name,$course_section,$id_teachers){

    $db = dbConnect();
    $sql = "INSERT INTO courses
            (courses_name,
            courses_section,
            teachers_id_teachers)
            VALUES(
            :course_name,
            :course_section,
            :id_teachers)";

    $stmt = $db->prepare($sql);
    
    $stmt->bindValue(':course_name',$course_name,PDO::PARAM_STR);
    $stmt->bindValue(':course_section',$course_section,PDO::PARAM_STR);
    $stmt->bindValue(':id_teachers',$id_teachers,PDO::PARAM_INT);
    $stmt->execute();
    $rowChanged=$stmt->rowCount();
    $stmt->closeCursor();
    return $rowChanged;

}

function updateCourse($course_id,$course_name,$course_section,$id_teachers){

    $db = dbConnect();
    $sql = "UPDATE courses
            SET 
            courses_name= :course_name,
            courses_section= :course_section,
            teachers_id_teachers= :id_teachers 
            WHERE id_courses = :course_id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':course_id',$course_id,PDO::PARAM_INT);
    $stmt->bindValue(':course_name',$course_name,PDO::PARAM_STR);
    $stmt->bindValue(':course_section',$course_section,PDO::PARAM_STR);
    $stmt->bindValue(':id_teachers',$id_teachers,PDO::PARAM_INT);
    $stmt->execute();
    $rowChanged=$stmt->rowCount();
    $stmt->closeCursor();
    return $rowChanged;
    
    }

    function deleteCourse($course_id){

        $db = dbConnect();
        $sql = "DELETE FROM courses  WHERE id_courses = :course_id";
        
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':course_id',$course_id,PDO::PARAM_INT);
        $stmt->execute();
        $rowChanged=$stmt->rowCount();
        $stmt->closeCursor();
        return $rowChanged;

}