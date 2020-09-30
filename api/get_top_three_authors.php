<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once '../classes/News.php';

$news = new News();

if(isset($_GET['id'])){
    echo $_GET['id'];
    $allNewsByAuthor = $news->getArticlesOfAuthor($_GET['id']);

}

function last_week(){
    $start_week = date("Y-m-d", strtotime("last week monday"));
    $end_week = date("Y-m-d", strtotime("last week sunday"));
    echo $start_week.' '.$end_week ;
}
//var_dump($newsByID);


echo json_encode($allNewsByAuthor);