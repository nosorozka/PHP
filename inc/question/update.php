<?php
require('../config.php');
$db =  new Database();

if (isset($_POST['update_question'])) {
  $data = [
    "id" => $_POST['id'],
    "question" => $_POST['question'],
    "answer" => $_POST['answer']
  ];
  try {
    $sql =  "UPDATE questions SET question=:question, answer=:answer WHERE id=:id";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }

  header("Location: ../../admin.php");
}