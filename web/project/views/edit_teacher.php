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

    <title>Edit Teacher</title>
    
</head>
<body>
    <main>
    <?php
        include '../modules/navbar.php';
        ?>
    <h1>Edit Teacher</h1>
    
        <form action="../teachers/index.php" method="POST">

            
            <label for="teacher_fname">First Name</label><br>
            <input type="text" name="teacher_fname" id="teacher_fname" required value="<?php if(isset($getTeachersInfoById[teachers_fname])){echo($getTeachersInfoById[teachers_fname]);}?>"><br>

            <label for="teacher_lname">Last Name</label><br>
            <input type="text" name="teacher_lname" id="teacher_lname" required value="<?php if(isset($getTeachersInfoById[teachers_lname])){echo($getTeachersInfoById[teachers_lname]);}?>"><br>
            
            <!-- <label for="teacher_user_name">User Name</label><br>
            <input type="text" name="teacher_user_name" id="teacher_user_name" required><br>
            
            <label for="teacher_user_pass">Password</label><br>
            <input type="password" name="teacher_user_pass" id="teacher_user_pass" required><br> -->


            <input type="hidden" name="teacher_id" value="<?php if(isset($getTeachersInfoById[id_teachers])){echo($getTeachersInfoById[id_teachers]);}?>">
            <input type="submit" value="Submit"><br>
            <input type="hidden" name="action" value="new_teacher">
        </form>
    </main>    
</body>
<?php
include '../modules/js-links.php'; 
?>
</html>