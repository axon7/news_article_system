<?php

require_once 'classes/News.php';

$news = new News();
echo $news-> test;

if( isset($_POST['id']) )
{
    $id = $_POST['id'];
    $news->getNewsById($id);
}

?>

<form method="POST" action="index.php">
    <input name="id">
    <label for="title">News title</label>
    <input id="title" type="text" name="title"/>
    <br>
    <label for="text">News text</label>
    <textarea id="text" name="text">Write news content</textarea>
    <br>
    <label>Authors</label>

    <button type="submit">SUBMIT!</button>
</form>
