<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<main>
<form action="../login/index.php" method="POST">

    <label for="userName" >User Name </label>
    <input type="text" id="userName" name="userName">
    <br>
    <label for="pass" >Password </label>
    <input type="text" id="pass" name="pass">
    <br>
    <input type="submit" value="log in">
    <input type="hidden" name="action" value="checkCredentials">
    
</form>
</main>
    
</body>
</html>