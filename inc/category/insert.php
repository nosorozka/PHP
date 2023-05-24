<?php
require('../config.php');
$db =  new Database();

if (isset($_POST['insert_category'])) {
  $data = [
    "name" => $_POST['name'],
  ];


  try {
    $sql = "INSERT INTO category (name) VALUES (:name)";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }

  header("Location: ../../admin.php");
}