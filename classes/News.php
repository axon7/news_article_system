<?php


require_once (__DIR__ . '/../config/database.php');

class News extends Database {

    public function getNewsById($id){
        $sql = 'SELECT * FROM articles WHERE id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }

    public function getAllAuthors(){
        $sql = 'SELECT * FROM authors';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }

    public function addNews($title, $text, $author_id){
        $conn = $this->connect();
        $sql = 'INSERT INTO articles (title, text) VALUES (?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->execute([$title, $text]);

        $article_id = $conn->lastInsertId('id');
        $sql = 'INSERT INTO article_authors (author_id, article_id) VALUES (?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->execute([$author_id, $article_id]);
    }
    public function getArticlesOfAuthor($author_id){
        $conn = $this->connect();
        $sql = 'SELECT * FROM article_authors WHERE author_id=?';
        $stmt = $conn->prepare($sql);
        $stmt->execute([$author_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTopThreeAuthors(){

    }



}