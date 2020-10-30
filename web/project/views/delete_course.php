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

    <title>Delete Course</title>
    
</head>
<body>
    <main>
    <div class="container">
    <?php
        include '../modules/navbar.php';
        ?>
    <h1>Delete Course</h1>
    
        <form action="../courses/index.php" method="POST">

            <div class = "form-group">
            <label for="course_name">Course Name</label><br>
            <input type="text" class="form-control" name="course_name" id="course_name" required value="<?php if(isset($getCoursesInfoById[courses_name])){echo($getCoursesInfoById[courses_name]);}?>" readonly><br>
            </div>
            <div class = "form-group">
            <label for="course_section">Course Section</label><br>
            <input type="text" class="form-control" name="course_section" id="course_section" required value="<?php if(isset($getCoursesInfoById[courses_section])){echo($getCoursesInfoById[courses_section]);}?>" readonly><br>
            </div>

            <label for="id_teachers">teacher</label><br>
            <?php
            if(isset($diplayTeachersDropList)){

                echo($diplayTeachersDropList);
            }
            ?>
            <br>
            <input type="hidden" name="course_id" value="<?php if(isset($getCoursesInfoById[id_courses])){echo($getCoursesInfoById[id_courses]);}?>"><br>
            <input type="submit" value="Delete"><br>
            <input type="hidden" name="action" value="delete_course">
        </form>
    </div>
    </main>    
</body>
<?php
include '../modules/js-links.php'; 
?>
</html>