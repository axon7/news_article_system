<?php

require_once 'app/News.php';

$news = new News();
echo $news-> test;


?>

<form method="POST" action="index.php">
    <label for="title">News title</label>
    <input id="title" type="text" name="title"/>
    <br>
    <label for="text">News text</label>
    <textarea id="text" name="text">Write news content</textarea>
    <br>
    <label>Authors</label>

    <button type="submit">SUBMIT!</button>
</form>
