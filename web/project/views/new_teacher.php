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

    <title>New Teacher</title>
    
</head>
<body>
    <main>
    <?php
        include '../modules/navbar.php';
        ?>
    <h1>New Teacher</h1>
    
        <form action="../teachers/index.php" method="POST">

            
            <label for="teacher_fname">First Name</label><br>
            <input type="text" name="teacher_fname" id="teacher_fname" required><br>

            <label for="teacher_lname">Last Name</label><br>
            <input type="text" name="teacher_lname" id="teacher_lname" required><br>
            
            <label for="teacher_user_name">User Name</label><br>
            <input type="text" name="teacher_user_name" id="teacher_user_name" required><br>
            
            <label for="teacher_user_pass">Password</label><br>
            <input type="password" name="teacher_user_pass" id="teacher_user_pass" required><br>

            <input type="submit" value="Submit"><br>
            <input type="hidden" name="action" value="new_teacher">
        </form>
    </main>    
</body>
<?php
include '../modules/js-links.php'; 
?>
</html>