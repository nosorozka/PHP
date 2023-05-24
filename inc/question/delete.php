<?php
require('../config.php');
$db =  new Database();

if (isset($_POST['delete_question'])) {
  $id = $_POST['delete_question'];

  try {
    $sql = $sql = 'DELETE FROM questions WHERE id =' . $id;
    $db->conn->exec($sql);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }

  header("Location: ../../admin.php");
}