<?php

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