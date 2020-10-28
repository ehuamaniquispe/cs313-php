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
<form action="../login/index.php" method="post">
  <div class="form-group">
      <label for="userName" >User Name </label>
      <input type="text" id="userName" name="userName" requiered>
  </div>
  <div class="form-group">
      <label for="pass" >Password </label>
      <input type="password" id="pass" name="pass" requiered>
  </div>

      <input class="btn btn-default" type="submit" value="log in">
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