<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  include '../modules/head.php';
  ?>

    <title>Teachers</title>
    
</head>
<body>
    <main>
    <?php
        include '../modules/navbar.php';
        ?>
    <h1>Teachers</h1>
    
        <table class="table table-striped">
            <?php
            echo("teachers");
            ?>
        </table>
    </main>    
</body>
<?php
include '../modules/js-links.php'; 
?>
</html>