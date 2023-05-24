<?php
require('../config.php');
$db =  new Database();

if (isset($_POST['delete_category'])) {
  $id = $_POST['delete_category'];

  try {
    $sql = $sql = 'DELETE FROM category WHERE id =' . $id;
    $db->conn->exec($sql);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }

  header("Location: ../../admin.php");
}