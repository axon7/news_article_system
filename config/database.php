<?php
class Database
{
    private $host = 'localhost';
    private $dbname = 'news_article_system';
    private $username = 'root';
    private $password = '';

    public function connect()
    {
        $pdo = null;
        try {
            $pdo = new PDO('mysql:host='. $this->host . ';dbname='. $this->dbname, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            $err_msg = $e->getMessage();
            echo 'Połączenie nie mogło zostać utworzone: ' . $err_msg;
        }
        return $pdo;

    }


}
