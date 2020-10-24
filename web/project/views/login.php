<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
  include '../modules/head.php';
  ?>
    <title>Document</title>
</head>
<body>

<main>
<?php
if(isset($_SESSION['message']))
{
  echo($_SESSION['message']);
}
?>
<form action="../login/index.php" method="post">

    <label for="userName" >User Name </label>
    <input type="text" id="userName" name="userName" requiered>
    <br>
    <label for="pass" >Password </label>
    <input type="password" id="pass" name="pass" requiered>
    <br>
    <input type="submit" value="log in">
    <input type="hidden" name="action" value="checkCredentials">
    
</form>
</main>
    
</body>
<?php
include '../modules/js-links.php'; 
?>
</html>
<?php
unset($_SESSION['message']);
?>