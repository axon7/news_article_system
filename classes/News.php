<?php

require_once 'config/database.php';

class News extends Database {


    public $test = 'halo';


    public function getNewsById($id){
        $sql = 'SELECT * FROM articles WHERE id = ?';
        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$id]);
        $news = $stmt->fetchAll();
        print_r($news);

    }

    public function addNews(){

    }
    public function getArticlesOfAuthor(){

    }

    public function getTop3(){

    }



}