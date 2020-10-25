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
<form action="" method="POST">
book
<input type="text" name="book" id="book"> <br>
Chapter
<input type="text" name="chapter" id="chapter"> <br>
Verser
<input type="text" name="verse" id="verse"> <br>
Content
<textarea name="content" id="content"> </textarea>

<?php
// $topicList = topicList();
// print_r($topicList);

?>
<?php
$topicList = topicList();
$list="";
foreach ($topicList as $topicLists){

    $list.='<input type="checkbox" id="$topicLists[id_topic]" name="$topicLists[topic_name]" value="$topicLists[topic_name]">
    <label for="$topicLists[topic_name]"> </label><br>';
    // $list.="<input type='checkbox' id='$topicLists[id_topic]' name='$topicLists[topic_name]' value='$topicLists[topic_name]'>
    // <label for='$topicLists[topic_name]'> </label><br>";

}
echo($list);
?>



<input type="submit" value="SUBMIT">
</form>        

</body>
</html>