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

    <title>Courses</title>
    
</head>
<body>
    <main>
    <div class="container">
        <?php
            include '../modules/navbar.php';
            ?>
        <h1>Courses</h1>
        <?php
        if(isset($_SESSION['message'])){
            echo("<b>".$_SESSION['message']."</b>");
        }
        ?>
        <br>
        <a class="btn btn-primary" href="../courses/index.php?action=newCourse">New Course</a>
        <br>
        
            <table class="table table-striped course-table">
                <?php
                echo($displayCoursesInfo);
                ?>
            </table>

            <div id="courseDetail"></div>
    <div >
    </main>    
</body>
<?php
include '../modules/js-links.php'; 
?>
</html>
<?php
unset($_SESSION['message']);
?>