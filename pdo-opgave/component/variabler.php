<?php 

if($pdo){
    // get id from
  $id=$_GET["userID"];
  $stmt = $pdo->query('SELECT * FROM users WHERE id='.$id);
  $user = $stmt->fetch();
  }


?>