<?php
require('../config.php');
$db =  new Database();

if (isset($_POST['insert_question'])) {
  $data = [
    "question" => $_POST['question'],
    "answer" => $_POST['answer']
  ];


  try {
    $sql = "INSERT INTO questions (question, answer) VALUES (:question, :anser)";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }

  header("Location: ../../admin.php");
}