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
    <div class="container">
    <?php
        include '../modules/navbar.php';
        ?>
    <h1>New Student</h1>
    
        <form action="../students/index.php" method="POST">
            <div class="form-group">
            <label for="student_reg_num">#. Reg.</label><br>
            <input type="text" class="form-control" name="student_reg_num" id="student_reg_num" required><br>
            </div>
            <div class="form-group">
            <label for="student_fname">First Name</label><br>
            <input type="text" class="form-control" name="student_fname" id="student_fname" required><br>
            </div>
            <div class="form-group">
            <label for="student_lname">Last Name</label><br>
            <input type="text" class="form-control" name="student_lname" id="student_lname" required><br>
            </div>
            <div class="form-group">
            <label for="student_user_name">User Name</label><br>
            <input type="text" class="form-control" name="student_user_name" id="student_user_name" required><br>
            </div>
            <div class="form-group">
            <label for="student_user_pass">Password</label><br>
            <input type="password" name="student_user_pass" id="student_user_pass" required><br>
            </div>

            <input type="submit" value="Submit"><br>
            <input type="hidden" name="action" value="new_student">
        </form>
    </div>
    </main>    
</body>
<?php
include '../modules/js-links.php'; 
?>
</html>