<?php
function doitConnect()
{
//    $server = 'postgres://cuyjcedxswzput:e405eafc59e531tsVEkrbd262nV6DiXxFGTVPu6kFv8H921ccbf327c939ae153b@ec2-54-157-234-29.compute-1.amazonaws.com:5432/d6svfqo1va3det';//nombre del contenedor docker que tiene mysql si usas un compose file o el ip si instalas contenedores separados
// //    $server = 'mysql';//nombre del contenedor docker que tiene mysql si usas un compose file o el ip si instalas contenedores separados
//    $dbname = 'dry-earth-37252';
//    $username = 'root';
//    $password = '';
//    $port = '3306';
   

// $dbUrl = getenv('DATABASE_URL');

//   $dbOpts = parse_url($dbUrl);

//   $dbHost = $dbOpts["host"];
//   $dbPort = $dbOpts["port"];
//   $dbUser = $dbOpts["user"];
//   $dbPassword = $dbOpts["pass"];
//   $dbName = ltrim($dbOpts["path"],'/');


//    $dsn = 'mysql:host=' . $server . ';port=' . $port . ';dbname=' . $dbname . ';charset=utf8';
// //    $dsn = 'mysql:host=' . $server . ';port=' . $port . ';dbname=' . $dbname . ';charset=utf8';
//    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

//    // Create the actual connection object and assign it to a variable
//    try {
//       $link = new PDO($dsn, $username, $password, $options);
//       //echo "it works";
//       return $link;
//    } catch (PDOException $e) {
//       echo $e->getMessage();
//       //header('Location: /doit/view/500.php');
//       exit;
//    }
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

doitConnect();