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


function topicList()
{
    $db = dbConnect();

	$sql = 'SELECT * FROM topic';

	$stmt = $db->prepare($sql);

	// $stmt->bindValue(':personalEmail', $usuario, PDO::PARAM_STR);
   

    $stmt->execute();
    $topicList = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $topicList;

}

function insertScripture($book,$chapter,$verse,$content){

    $db = dbConnect();

    $sql = 'INSERT INTO scriptures
    (book,
     chapter,
     verse,
     content)
    VALUES
    (:book,
     :chapter,
     :verse,
     :content)';

	$stmt = $db->prepare($sql);

	$stmt->bindValue(':book', $book, PDO::PARAM_STR);
	$stmt->bindValue(':chapter', $chapter, PDO::PARAM_STR);
	$stmt->bindValue(':verse', $verse, PDO::PARAM_STR);
	$stmt->bindValue(':content', $content, PDO::PARAM_STR);

    $stmt->execute();
    $rowChanged = $stmt->insert_id;
    $stmt->closeCursor();
    return $rowChanged;
}