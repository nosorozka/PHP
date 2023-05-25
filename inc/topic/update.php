<?php
require('../config.php');
$db =  new Database();

if (isset($_POST['update_topic'])) {
  $data = [
    "id" => $_POST['id'],
    "title" => $_POST['title'],
    "subtitle" => $_POST['subtitle'],
    "number" => $_POST['number'],
    "image" => $_POST['img'],
    "category_id" => $_POST['category_id'],
  ];
  try {
    $sql =  "UPDATE browse_topics SET title = :title, subtitle = :subtitle, number = :number, image = :image, category_id = :category_id WHERE id=:id";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }

  header("Location: ../../admin.php");
}