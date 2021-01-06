<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once '../models/News.php';

$news = new News();

if(isset($_GET['id'])){
    echo $_GET['id'];
    $allNewsByAuthor = $news->getArticlesOfAuthor($_GET['id']);

}

echo json_encode($allNewsByAuthor);

