<?php session_start();
$user_level = $_SESSION['userLevel'];

if(empty($user_level)){

    echo("Requiered authorization");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  include '../modules/head.php';
  ?>

    <title>Edit Course</title>
    
</head>
<body>
    <main>
    <?php
        include '../modules/navbar.php';
        ?>
    <h1>Edit Course</h1>
    
        <form action="../courses/index.php" method="POST">

            
            <label for="course_name">Course Name</label><br>
            <input type="text" name="course_name" id="course_name" required value="<?php if(isset($getCoursesInfoById[courses_name])){echo($getCoursesInfoById[courses_name]);}?>"><br>

            <label for="course_section">Course Section</label><br>
            <input type="text" name="course_section" id="course_section" required value="<?php if(isset($getCoursesInfoById[courses_section])){echo($getCoursesInfoById[courses_section]);}?>"><br>

            <label for="id_teachers">Choose the teacher</label><br>
            <?php
            if(isset($diplayTeachersDropList)){

                echo($diplayTeachersDropList);
            }
            ?>
            <br>
            <input type="hidden" name="course_id" value="<?php if(isset($getCoursesInfoById[id_courses])){echo($getCoursesInfoById[id_courses]);}?>"><br>
            <input type="submit" value="Edit"><br>
            <input type="hidden" name="action" value="edit_course">
        </form>
    </main>    
</body>
<?php
include '../modules/js-links.php'; 
?>
</html>