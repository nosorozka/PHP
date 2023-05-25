<?php
require('../config.php');

$db =  new Database();
$users = $User->get_users();
$found = false;

if (isset($_POST['add_user'])) {

  $data = [
    'user_name' => $_POST["user_name"],
    'user_email' => $_POST["user_email"],
    'user_password' => md5($_POST["user_password"])
  ];


  
    foreach ($users as $user) {
      if ($user->mail == $data['user_email']) {
        $found =  true;
      } 
    }
    if ($found == false) {
        
      try {
        $query = "INSERT INTO users (name, mail, password) VALUES (:user_name, :user_email,:user_password)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        header('Location: ../../login.php');
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    } else {
      echo 'Such a user already exists';
    }
  }
 else {
}
?>