<?php
require('../config.php');
$db =  new Database();

if (isset($_POST['delete_topic'])) {
  $id = $_POST['delete_topic'];

  try {
    $sql = $sql = 'DELETE FROM browse_topics WHERE id =' . $id;
    $db->conn->exec($sql);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }

  header("Location: ../../admin.php");
}