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

    <title>New Student</title>
    
</head>
<body>
    <main>
    <?php
        include '../modules/navbar.php';
        ?>
    <h1>New Student</h1>
    
        <form action="../students/index.php" method="POST">

            <label for="student_reg_num">#. Reg.</label><br>
            <input type="text" name="student_reg_num" id="student_reg_num" required value="<?php if(isset($getStudentsInfoById[students_reg_num])){echo($getStudentsInfoById[students_reg_num]);}?>"><br>
            
            <label for="student_fname">First Name</label><br>
            <input type="text" name="student_fname" id="student_fname" required><br>

            <label for="student_lname">Last Name</label><br>
            <input type="text" name="student_lname" id="student_lname" required><br>
            
            <label for="student_user_name">User Name</label><br>
            <input type="text" name="student_user_name" id="student_user_name" required><br>
            
            <label for="student_user_pass">Password</label><br>
            <input type="password" name="student_user_pass" id="student_user_pass" required><br>

            <input type="submit" value="Submit"><br>
            <input type="hidden" name="action" value="new_student">
        </form>
    </main>    
</body>
<?php
include '../modules/js-links.php'; 
?>
</html>