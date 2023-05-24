<?php
require("database.php");
class Topic{
    public $db;
    function __construct()
    {
      $this->db = new Database();
    }
  
    function get_topics()
    {
      try {
        $query =  $this->db->conn->query("SELECT * FROM browse_topics");
        $topics = $query->fetchAll(PDO::FETCH_OBJ);
        return $topics;
      } catch (PDOException $e) {
        print_r($e->getMessage());
      }
    }
  }
  $Topic = new Topic();
?>
