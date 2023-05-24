<?php
require('../config.php');
$db =  new Database();

if (isset($_POST['update_category'])) {
  $data = [
    "id" => $_POST['category_id'],
    "name" => $_POST['name'],
  ];
  try {
    $sql =  "UPDATE category SET name=:name WHERE id=:id";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }

  header("Location: ../../admin.php");
}