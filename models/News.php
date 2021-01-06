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

    public function addNews($title, $text, $author_id, $created_at){
        $conn = $this->connect();
        $sql = 'INSERT INTO articles (title, text, created_at) VALUES (?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->execute([$title, $text, $created_at]);

        $article_id = $conn->lastInsertId('id');
        $sql = 'INSERT INTO article_authors (author_id, article_id, created_at) VALUES (?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->execute([$author_id, $article_id, $created_at]);
    }
    public function getArticlesOfAuthor($author_id){
        $conn = $this->connect();
        $sql = 'SELECT * FROM article_authors WHERE author_id=?';
        $stmt = $conn->prepare($sql);
        $stmt->execute([$author_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTopThreeAuthors($start_of_week, $end_of_week){
        $conn = $this->connect();
        $sql = 'SELECT name, COUNT(*) as NumberOfNews
                FROM article_authors
                JOIN authors
	            ON article_authors.author_id = authors.id
                WHERE article_authors.created_at BETWEEN ? AND ? + INTERVAL 1 DAY
                GROUP BY name
                LIMIT 3';
        $stmt = $conn->prepare($sql);
        $stmt->execute([$start_of_week, $end_of_week]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllNews(){
        $sql = 'SELECT * FROM articles';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }



}