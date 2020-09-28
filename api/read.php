<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../classes/News.php';
$news = new News();

if(isset($_GET['id'])){
    $newsByID = $news->getNewsById($_GET['id']);

}
//var_dump($newsByID);


echo json_encode($newsByID);
