<?php
require_once 'connection.php';
require_once 'model.php';
require_once 'functions.php';


$book = $_POST["book"];
$chapter = $_POST["chapter"];
$verse = $_POST["verse"];
$content = $_POST["content"];

$insertScripture = insertScripture($book,$chapter,$verse,$content);

echo($insertScripture);
exit;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       

</body>
</html>