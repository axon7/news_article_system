<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once '../models/News.php';
require_once '../config/database.php';

$database = new Database();
$db = $database->connect();
$news = new News($db);

$start_of_week = date("Y-m-d", strtotime("last week monday"));
$end_of_week = date("Y-m-d", strtotime("last week sunday"));
//echo $start_of_week . " - " . $end_of_week;

$topAuthors = $news-> getTopThreeAuthors($start_of_week, $end_of_week);
echo json_encode($topAuthors);