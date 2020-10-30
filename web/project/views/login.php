<?php session_start();
?>
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
  echo("<b>". $_SESSION['message']. "</b>");
}
?>
<div class="container">
  <form action="../login/index.php" method="post">
    <div class="form-group">
        <label for="userName" >User Name </label>
        <input type="text" class="form-control" id="userName" name="userName" requiered>
    </div>
    <div class="form-group">
        <label for="pass" >Password </label>
        <input type="password" class="form-control" id="pass" name="pass" requiered>
    </div>

        <input class="btn btn-success" type="submit" value="log in">
        <input type="hidden" name="action" value="checkCredentials">

  </form>
</div>
</main>
    
</body>
<?php
include '../modules/js-links.php'; 
?>
</html>
<?php
unset($_SESSION['message']);
?>