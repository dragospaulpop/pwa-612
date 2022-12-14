<?php

  $id = isset($_POST['id']) ? $_POST['id'] : null;
  $userId = isset($_POST['userId']) ? $_POST['userId'] : null;
  $title = isset($_POST['title']) ? trim($_POST['title']) : null;

  if ($id && $userId && $title && strlen($title) > 0) {
    require_once('./readDb.php');

    foreach($toDos as &$todo) {
      if ($todo['userId'] == $userId && $todo['id'] == $id) {
        $todo['title'] = $title;
      }
    }
    
    $stringData = json_encode($toDos);
    file_put_contents($dbFile, $stringData);
    header('Location: index.php');    
   } else {
    header('Location: index.php');    
   } 

?>