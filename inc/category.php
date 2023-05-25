<?php
class Category{
    public $db;
    function __construct()
    {
      $this->db = new Database();
    }
  
    function get_category()
    {
      try {
        $query =  $this->db->conn->query("SELECT * FROM category");
        $category = $query->fetchAll(PDO::FETCH_OBJ);
        return $category;
      } catch (PDOException $e) {
        print_r($e->getMessage());
      }
    }
  }
  $Category = new Category();
?>
