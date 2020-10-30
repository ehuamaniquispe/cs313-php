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

    <title>Delete Student</title>
    
</head>
<body>
    <main>
    <div class="container">
    <?php
        include '../modules/navbar.php';
        ?>
    <h1>Delete Student</h1>
    
        <form action="../students/index.php" method="POST">

        <div class="form-group">
            <label for="student_reg_num">#. Reg.</label><br>
            <input type="text" class="form-control" name="student_reg_num" id="student_reg_num" required value="<?php if(isset($getStudentsInfoById[students_reg_num])){echo($getStudentsInfoById[students_reg_num]);}?>"><br>
        </div>    
        <div class="form-group">
            <label for="student_fname">First Name</label><br>
            <input type="text" class="form-control" name="student_fname" id="student_fname" required value="<?php if(isset($getStudentsInfoById[students_fname])){echo($getStudentsInfoById[students_fname]);}?>"><br>
        </div>    

        <div class="form-group">
            <label for="student_lname">Last Name</label><br>
            <input type="text" class="form-control" name="student_lname" id="student_lname" required value="<?php if(isset($getStudentsInfoById[students_lname])){echo($getStudentsInfoById[students_lname]);}?>"><br>
        </div>    
            
            <!-- <label for="student_user_name">User Name</label><br>
            <input type="text" name="student_user_name" id="student_user_name" required value="<?php if(isset($getStudentsInfoById[students_reg_num])){echo($getStudentsInfoById[students_reg_num]);}?>"><br> -->
            

            <input type="submit" value="Edit"><br>
            <input type="hidden" name="action" value="edit_student">
            <input type="hidden" name="student_id" value="<?php if(isset($getStudentsInfoById[id_students])){echo($getStudentsInfoById[id_students]);}?>">
        </form>
        </div>
    </main>    
</body>
<?php
include '../modules/js-links.php'; 
?>
</html>