<?php
require_once 'connection.php';
require_once 'model.php';
require_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
// scripturesInfo();
// var scripture = scripturesInfo();
$scripturesInfo = scripturesInfo();
$displayScriptures = displayScriptures($scripturesInfo);
// print_r(scripturesInfo());
echo($displayScriptures);
?>

</body>
</html>