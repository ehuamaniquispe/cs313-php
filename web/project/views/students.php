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

    <title>Students</title>
    
</head>
<body>
    <main>
        <?php
        include '../modules/navbar.php';
        ?>

    <h1>Students</h1>
    
        <table class="table table-striped">
            <?php
            echo($displayStudentsInfo)
            ?>
        </table>
    </main>    
</body>
<?php
include '../modules/js-links.php'; 
?>
</html>