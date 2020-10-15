<?php

function dbConnect()
{
    try
    {
    $dbUrl = getenv('DATABASE_URL');

    $dbOpts = parse_url($dbUrl);

    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"],'/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $ex)
    {
    echo 'Error!: ' . $ex->getMessage();
    die();
    }
}

function scripturesInfo()
{
	$db = dbConnect();

	$sql = 'SELECT * FROM Scriptures';

	$stmt = $db->prepare($sql);

	// $stmt->bindValue(':personalEmail', $usuario, PDO::PARAM_STR);
   

    $stmt->execute();
    $scriptureInfo = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $scriptureInfo;
   
}
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
print_r(scripturesInfo());
?>

</body>
</html>