<?php

require_once 'classes/News.php';

$news = new News();
$authors = $news->getAllAuthors();

if(!empty($_POST)) {
    $text = isset($_POST['text']) ? $_POST['text'] : '';;
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $author_id = isset($_POST['author_id']) ? $_POST['author_id'] : '';
    $news->addNews($title, $text, $author_id);
    header('Location: index.php');

}
?>



<!--form to add or edit news articles-->
<form method="POST" action="">
    <label for="title">News title</label>
    <input id="title" type="text" name="title"/>
    <br>
    <label for="text">News text</label>
    <textarea id="text" name="text"></textarea>
    <br>
    <label  for="author">Select author</label>
    <select name="author_id" id="author">
        <?php foreach($authors as $key=>$value):?>
        <option  value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
        <?php endforeach; ?>
    </select>



    <button type="submit">SUBMIT!</button>
</form>
