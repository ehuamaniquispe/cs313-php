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
        <table>
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