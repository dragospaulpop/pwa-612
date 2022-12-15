<?php
  require_once('./secure.php');

  if (isset($loggedIn)) {
    require_once('./mysql.php');
    $keys = ['id', 'id_user', 'title', 'completed'];
    $link = connect();

    $toDos = readTodos($link, $_SESSION['id_user']);
  }
?>