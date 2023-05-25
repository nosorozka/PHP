<?php
require('../config.php');
$db =  new Database();

if (isset($_POST['insert_topic'])) {
  $data = [
    "title" => $_POST['title'],
    "subtitle" => $_POST['subtitle'],
    "number" => $_POST['number'],
    "image" => $_POST['img'],
    "category_id" => $_POST['category_id'],
  ];


  try {
    $sql = "INSERT INTO browse_topics (title, subtitle, number, image, category_id) VALUES (:title, :subtitle, :number, :image, :category_id)";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }

  header("Location: ../../admin.php");
}