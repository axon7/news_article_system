<?php


require_once 'models/News.php';
require_once 'config/database.php';

$database = new Database();
$db = $database->connect();
$news = new News($db);
$allNews = $news->getAllNews();

?>

<a href="index.php">HOMEPAGE</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>TEXT</th>
            <th>CREATED_AT</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($allNews as $news):?>
         <tr>
             <td><?php echo $news['id']; ?></td>
             <td><?php echo $news['title']; ?></td>
             <td><?php echo $news['text']; ?></td>
             <td><?php echo $news['created_at']; ?></td>
         </tr>
        <?php endforeach;?>
    </tbody>
</table>

