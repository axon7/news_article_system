<?php


require_once 'classes/News.php';
$news = new News();
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

