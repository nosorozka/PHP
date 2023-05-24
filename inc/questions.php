<?php
require("database.php");
class Question{
    public $db;
    function __construct()
    {
      $this->db = new Database();
    }
  
    function get_question()
    {
      try {
        $query =  $this->db->conn->query("SELECT * FROM questions");
        $question = $query->fetchAll(PDO::FETCH_OBJ);
        return $question;
      } catch (PDOException $e) {
        print_r($e->getMessage());
      }
    }
  }
  $Question = new Question();
?>
